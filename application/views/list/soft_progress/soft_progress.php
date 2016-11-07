<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> 소프트웨어(진행)</h3>
                <?php
                if ( $this -> session -> userdata('user_level') == '1') {
                    ?>
                    <a class="btn btn-success btn-sm" href="/soft/write_progress/">신규 등록</a>
                    <?php
                }
                ?>
                <div class="btn-group">
                    <a class="btn btn-default" data-toggle="dropdown" title="현재페이지">제품조회 선택</a>
                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href=""
                       title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/soft/progress_list" title="현재페이지">전체(Default)</a></li>
                        <li><a href="/soft/progress_list_window" title="윈도우">Window</a></li>
                        <li><a href="/soft/progress_list_ms" title="MS오피스">MS-Office</a></li>
                        <li><a href="/soft/progress_list_hangul" title="한글(한컴)">한글</a></li>
                        <li><a href="/soft/progress_list_etc" title="기타">그외</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        목록
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th>제품명</th>
                            <th>버전</th>
                            <th>제조사</th>
                            <th>제품용도</th>
                            <th>사용대상</th>
                            <th>시리얼번호</th>
                            <th>패키지</th>
                            <th>라이센스</th>
                            <th>보관장소</th>
                            <th>사용수</th>
                            <th>비고</th>
                        </tr>
                        <?php
                        foreach ($progress_list as $lt) {
                            ?>
                            <tr>
                                <td>
                                    <a href="/soft/view_progress/<?php echo $lt['idx'] ?>"><?php echo nl2br($lt['product_name']); ?></a>
                                </td>
                                <td><?php echo $lt['version']; ?></td>
                                <td><?php echo $lt['company']; ?></td>
                                <td><?php echo $lt['purpose']; ?></td>
                                <td><?php echo nl2br($lt['target']); ?></td>
                                <td><?php echo nl2br($lt['serial_num']); ?></td>
                                <td><?php echo $lt['package']; ?></td>
                                <td><?php if (($lt['license_numb']) > 0) echo $lt['license_numb']; ?></td>
                                <td><?php echo $lt['keep_place']; ?></td>
                                <!-- use_cnt는 임의적으로 만듬. serial_num의 필드값을 조회해서
                                g_window,g_ms,g_hangul,g_quark,g_adobe,g_font,g_alzip의 테이블 product_number에 맞는 사용수를 체크한다.-->
                                <td><?php echo $lt['use_cnt']; ?></td>
                                <td><?php echo $lt['remarks']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </section>
            </div>
    </section>
</section>
<!--main content end-->