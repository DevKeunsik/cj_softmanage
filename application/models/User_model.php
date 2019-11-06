<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User 모델
 */
class User_model extends CI_Model
{
    function __construct () {
        parent::__construct();
    }

    /*
     * 아이디 비밀번호 체크
     *
     * @param array $auth 폼 전송받은 아이디, 비밀번호
     * @return array
     */
    function login ($auth) {
        $sql = "SELECT username,user_level FROM users WHERE username = '".$auth['username']."' AND password = '".$auth['password']."' ";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    /*
     * 그룹원 정보 불러오기
     */
    function get_g ($group) {
        $sql = "SELECT * FROM g_gs where group_key ='".$group."'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 기타 그룹원 불러오기
     */
    function get_g_etc () {

        $sql = "SELECT * FROM g_gs where group_key ='etc'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }


    /*
     * 그룹원 등록
     * g_gs가 전체 그룹원 테이블임.
     */
    function insert_gs_user ($user_name, $user_email, $user_group, $user_grade, $user_number, $group_key) {
        $sql = "INSERT INTO g_gs (
        user_name, user_email, user_group, user_grade, user_number, group_key
        ) 
        VALUES (
        '".$user_name."'
        , '".$user_email."'
        , '".$user_group."'
        , '".$user_grade."'
        , '".$user_number."'
        , '".$group_key."'
        )";
        $this->db->query($sql);
    }

    /*
     * 그룹원 수정 - view
     */
    public function view_gs_user ($idx) {
        $sql = "SELECT * FROM g_gs WHERE idx=$idx";
        $query = $this->db->query($sql);
        $result = $query->row();

        return $result;
    }

    /*
     * 그룹원 수정 - update
     */
    function edit_gs_user ($params) {

        $sql = "
			UPDATE  g_gs  
			SET user_name =?, user_email =?, user_group =?, user_grade =?, user_number =?, group_key =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['user_name'],
            $params['user_email'],
            $params['user_group'],
            $params['user_grade'],
            $params['user_number'],
            $params['group_key'],
            $params['idx'],
        ));

        return $result_query;

    }

    /*
     * 그룹원 삭제
     */
    public function delete_gs_user ($table, $idx) {
        $delete_array = array(
            'idx' => $idx
        );

        $result = $this->db->delete($table, $delete_array);

        return $result;
    }

}