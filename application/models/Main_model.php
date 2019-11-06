<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * dashboard - list(소프트웨어 진행~아시아폰트) 목록별 row 카운트
     */

    function get_count()
    {
        $dash_count = array();

        $sql = "SELECT 
                COUNT(if(state='Y', state, NULL)) AS progress,
                COUNT(if(state='N', state, NULL)) AS stop,
                COUNT(if(state='R', state, NULL)) AS keep 
                FROM soft_all";
        $result = $this->db->query($sql)->row_array();
        $dash_count["soft_progress"] = $result['progress'];
        $dash_count["soft_keep"] = $result['keep'];
        $dash_count["soft_stop"] = $result['stop'];

        // 카스퍼스키 건수
        $sql = "SELECT count(*) as cnt FROM kaspersky";
        $result = $this->db->query($sql)->row_array();
        $dash_count["kaspersky"] = $result['cnt'];

        // 프린터 건수
        $sql = "SELECT count(*) as cnt FROM printer";
        $result = $this->db->query($sql)->row_array();
        $dash_count["printer"] = $result['cnt'];
        
        ## 전산등록인원 ##
        //전체
        $sql = "
                SELECT 
                COUNT(group_key) AS total,
                COUNT(if(group_key='gs', group_key, NULL)) AS gs,
                COUNT(if(group_key='ad1', group_key, NULL)) AS ad1,
                COUNT(if(group_key='ad2', group_key, NULL)) AS ad2, 
                COUNT(if(group_key='em_edit', group_key, NULL)) AS em_edit,
                COUNT(if(group_key='tv', group_key, NULL)) AS tv
                FROM g_gs
                ";
        $result = $this->db->query($sql)->row_array();
        $dash_count["g_total"] = $result['total'];
        $dash_count["g_gs"] = $result['gs'];
        $dash_count["g_ad1"] = $result['ad1'];
        $dash_count["g_ad2"] = $result['ad2'];
        $dash_count["g_em_edit"] = $result['em_edit'];
        $dash_count["g_tv"] = $result['tv'];

        ## PC 사용현황 ##
        $sql = "
                SELECT 
                COUNT(if(type='moniter', type, NULL)) AS moniter,
                COUNT(if(type='pc', type, NULL)) AS pc,
                COUNT(if(type='keyboard', type, NULL)) AS keyboard,
                COUNT(if(type='mouse', type, NULL)) AS mouse, 
                COUNT(if(type='headset', type, NULL)) AS headset,
                COUNT(if(type='cell', type, NULL)) AS cell
                FROM g_system
                ";
        $result = $this->db->query($sql)->row_array();
        $dash_count["g_moniter"] = $result['moniter'];
        $dash_count["g_pc"] = $result['pc'];
        $dash_count["g_keyboard"] = $result['keyboard'];
        $dash_count["g_mouse"] = $result['mouse'];
        $dash_count["g_headset"] = $result['headset'];
        $dash_count["g_cell"] = $result['cell'];

        ## 전산 소프트웨어 현재사용내역 ##
        $sql = "
                SELECT 
                COUNT(if(type='window', type, NULL)) AS window,
                COUNT(if(type='ms', type, NULL)) AS ms,
                COUNT(if(type='hangul', type, NULL)) AS hangul
                FROM g_software
                ";
        $result = $this->db->query($sql)->row_array();
        $dash_count["window"] = $result['window'];
        $dash_count["ms"] = $result['ms'];
        $dash_count["hangul"] = $result['hangul'];

        ## 전산실 보관 ##
        $sql = "
                SELECT 
                COUNT(if(type='moniter', type, NULL)) AS moniter,
                COUNT(if(type='pc', type, NULL)) AS pc,
                COUNT(if(type='keyboard', type, NULL)) AS keyboard,
                COUNT(if(type='mouse', type, NULL)) AS mouse, 
                COUNT(if(type='headset', type, NULL)) AS headset,
                COUNT(if(type='cell', type, NULL)) AS cell
                FROM jeonsan
                ";
        $result = $this->db->query($sql)->row_array();
        $dash_count["j_moniter"] = $result['moniter'];
        $dash_count["j_pc"] = $result['pc'];
        $dash_count["j_keyboard"] = $result['keyboard'];
        $dash_count["j_mouse"] = $result['mouse'];
        $dash_count["j_headset"] = $result['headset'];
        $dash_count["j_cell"] = $result['cell'];
        
        return $dash_count;
        
    }
}
