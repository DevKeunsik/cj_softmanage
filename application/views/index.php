<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>전산 현황</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i>Home</li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>그룹원 등록현황</strong></h2>
                    </div>
                    <div class="panel-body">
                        <table class="table bootstrap-datatable countries">
                            <tr>
                                <th>부서</th>
                                <th>등록인원</th>
                            </tr>
                            <tr>
                                <td>경영지원본부</td>
                                <td><?php echo $counter['g_gs']; ?></td>
                            </tr>
                            <tr>
                                <td>광고1부</td>
                                <td><?php echo $counter['g_ad1']; ?></td>
                            </tr>
                            <tr>
                                <td>광고2부</td>
                                <td><?php echo $counter['g_ad2']; ?></td>
                            </tr>
                            <tr>
                                <td>리크루트/편집</td>
                                <td><?php echo $counter['g_em_edit']; ?></td>
                            </tr>
                            <tr>
                                <td>여행사업팀</td>
                                <td><?php echo $counter['g_tv']; ?></td>
                            </tr>
                            <tr>
                                <td>전체</td>
                                <td><?php echo $counter['g_total']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>전산실 보관현황</strong></h2>
                    </div>
                    <div class="panel-body">
                        <table class="table bootstrap-datatable countries">
                            <tr>
                                <th>항목</th>
                                <th>보관갯수</th>
                            </tr>
                            <tr>
                                <td>모니터</td>
                                <td><?php echo $counter['jeonsan_moniter']; ?></td>
                            </tr>
                            <tr>
                                <td>본체</td>
                                <td><?php echo $counter['jeonsan_pc']; ?></td>
                            </tr>
                            <tr>
                                <td>키보드</td>
                                <td><?php echo $counter['jeonsan_keyboard']; ?></td>
                            </tr>
                            <tr>
                                <td>마우스</td>
                                <td><?php echo $counter['jeonsan_mouse']; ?></td>
                            </tr>
                            <tr>
                                <td>헤드셋</td>
                                <td><?php echo $counter['jeonsan_headset']; ?></td>
                            </tr>
                            <tr>
                                <td>전화기</td>
                                <td><?php echo $counter['jeonsan_cell']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>보급품 사용현황</strong></h2>
                    </div>
                    <div class="panel-body">
                        <table class="table bootstrap-datatable countries">
                            <tr>
                                <th>항목</th>
                                <th>사용갯수</th>
                                <th>Active</th>
                            </tr>
                            <tr>
                                <td>모니터</td>
                                <td><?php echo $counter['g_moniter']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_moniter">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td>본체</td>
                                <td><?php echo $counter['g_pc']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_pc">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td>키보드</td>
                                <td><?php echo $counter['g_keyboard']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_keyboard">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td>마우스</td>
                                <td><?php echo $counter['g_mouse']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_mouse">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td>헤드셋</td>
                                <td><?php echo $counter['g_headset']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_headset">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td>전화기</td>
                                <td><?php echo $counter['g_cell']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_cell">자세히 보기</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>전산 소프트웨어 현재사용내역</strong></h2>
                    </div>
                    <div class="panel-body">
                        <table class="table bootstrap-datatable countries">
                            <thead>
                            <tr>
                                <th>목록</th>
                                <th>사용갯수</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><b>Window</b></td>
                                <td><?php echo $counter['win']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_window/">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td><b>MS-Office</b></td>
                                <td><?php echo $counter['ms']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_ms/">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td><b>한글제품</b></td>
                                <td><?php echo $counter['hangul']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_hangul/">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td><b>Quark</b></td>
                                <td><?php echo $counter['quark']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_quark">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td><b>Adobe</b></td>
                                <td><?php echo $counter['adobe']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_adobe">자세히 보기</a></td>
                            </tr>
                            <tr>
                                <td><b>폰트</b></td>
                                <td><?php echo $counter['font']; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="/soft/use_font">자세히 보기</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--/col-->
        </div>
        <!-- Today status end -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>각 소프트웨어 현황</strong></h2>
                    </div>
                    <div class="panel-body">
                        <table class="table bootstrap-datatable countries">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>목록</th>
                                <th>보관장소</th>
                                <th>등록수</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>소프트웨어관리대장(진행)</td>
                                <td>전산실</td>
                                <td><?php echo $counter['soft_progress']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_progress/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success btn-sm" href="/soft/progress_list/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>소프트웨어관리대장(보관)</td>
                                <td>전산실</td>
                                <td><?php echo $counter['soft_keep']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/wirte_keep/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success btn-sm" href="/soft/keep_list/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>소프트웨어관리대장(사용불가)</td>
                                <td>전산실</td>
                                <td><?php echo $counter['soft_stop']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_stop/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/stop_list/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>카스퍼스키관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['kaspersky']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_kaspersky/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/kaspersky/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>프린터관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['printer']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_printer/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/printer/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>XP 업/다운</td>
                                <td>전산실</td>
                                <td><?php echo $counter['xp_down']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_xp_down/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/xp_down/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>MS-Office 관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['ms_up']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_ms_up/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/ms_up/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Quark(쿽) 관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['quark_up']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_quark_up/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/quark_up/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>아시아폰트 관리대장</td>
                                <td>전산실</td>
                                <td><?php echo $counter['asiafont_up']; ?></td>
                                <td>
                                    <?php
                                    if ( $this -> session -> userdata('user_level') == '1') {
                                        ?>
                                        <a class="btn btn-primary btn-sm" href="/soft/write_asiafont_up/">신규 등록</a>
                                        <?php
                                    }
                                    ?>
                                    <a class="btn btn-success k btn-sm" href="/soft/asiafont_up/"> 목록 바로가기</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--/col-->
        </div>
        <!-- statics end -->
    </section>
</section>



    

