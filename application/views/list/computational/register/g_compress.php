<!--main content start-->

<section id="main-content">
    <section class="wrapper">
        <h3 class="page-header"><i class="fa fa-laptop"></i>전산기록부</h3>
        <header class="panel-heading">
            압축프로그램
        </header>

        <div class="panel panel-black" data-sortable-id="form-stuff-4">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-validate form-horizontal" method="post" action=""
                              id="write_action">
                            <div class="form">
                                <input type="hidden" class="form-control" id="idx"
                                       name="idx"
                                       value="<?php echo $views->idx; ?>">
                                <div class="form-group ">
                                    <label for="alzip"
                                           class="control-label col-lg-2">알집</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="alzip"
                                               name="alzip" type="text"
                                               value=<?php echo $views->alzip; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="gian_num"
                                           class="control-label col-lg-2">기안 문서번호</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="gian_num"
                                               name="gian_num" type="text"
                                               value=<?php echo $views->gian_num; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="duration"
                                           class="control-label col-lg-2">사용기간</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="duration"
                                               name="duration" type="text"
                                               value=<?php echo $views->duration; ?>
                                        >
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-lg-10 col-lg-2">
                                        <button class="btn btn-success"
                                                onclick="history.back();">목록으로
                                        </button>
                                        <button type="submit" class="btn btn-primary"
                                                id="write_btn">수정
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</section>


<!--main content end-->