<script type="text/javascript">
    $(document).ready(function () {
        // DOM 생성 완료 시 화면 숨김 (파라미터로 전달되는 id는 제외)
        hideExclude("moniter");
        // radio change 이벤트
        $("input[name=radioName]").change(function () {
            var radioValue = $(this).val();
            if (radioValue == "jeonsan_moniter") {
                hideExclude("moniter");
            } else if (radioValue == "jeonsan_pc") {
                hideExclude("pc");
            } else if (radioValue == "jeonsan_keyboard") {
                hideExclude("keyboard");
            } else if (radioValue == "jeonsan_mouse") {
                hideExclude("mouse");
            } else if (radioValue == "jeonsan_headset") {
                hideExclude("headset");
            } else if (radioValue == "jeonsan_cell") {
                hideExclude("cell");
            }
        });

        // 체크 되어 있는지 확인
        var checkCnt = $("input[name=radioName]:checked").size();
        if (checkCnt == 0) {
            // default radio 체크 (첫 번째)
            $("input[name=radioName]").eq(0).attr("checked", true);
        }
    });
    // changeAdd 숨김
    function hideExclude(excludeId) {
        $("#changeAdd").children().each(function () {
            $(this).hide();
        });
        // 파라미터로 넘겨 받은 id 요소는 show
        $("#" + excludeId).show();
    }
</script>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-home"></i>전산실보관</h3>
                <ol class="breadcrumb">
                    <li><i class="icon_document_alt"></i>신규등록</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-black" data-sortable-id="form-stuff-4">
                    <section class="panel">
                        <header class="panel-heading">
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" method="post" action="" id="write_action">
                                    <!-- 그룹키로 전산항목 테이블을 정해줌. -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="inputSuccess">그룹키</label>
                                        <div class="col-lg-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radioName" value="jeonsan_moniter">
                                                    모니터
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radioName" value="jeonsan_pc">
                                                    본체
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radioName" value="jeonsan_keyboard">
                                                    키보드
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radioName" value="jeonsan_mouse">
                                                    마우스
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radioName" value="jeonsan_headset">
                                                    헤드셋
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="radioName" value="jeonsan_cell">
                                                    전화기
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="changeAdd">
                                        <!-- 모니터 -->
                                        <div class="form-group" id="moniter">
                                            <div class="form-group">
                                                <label for="m_company" class="col-lg-2 control-label">제조사</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_company"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_product_name" class="col-lg-2 control-label">제품명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_product_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_model_code" class="col-lg-2 control-label">모델코드</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_model_code"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_model_name" class="col-lg-2 control-label">모델명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_model_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_identify" class="col-lg-2 control-label">식별부호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_identify"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_produce_ym" class="col-lg-2 control-label">제조년월</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_produce_ym"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_soft_num" class="col-lg-2 control-label">S/N</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_soft_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_gian_num" class="col-lg-2 control-label">기안문서번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_gian_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_buy_day" class="col-lg-2 control-label">구매일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="m_buy_day"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 본체 -->
                                        <div class="form-group" id="pc">
                                            <div class="form-group">
                                                <label for="p_company" class="col-lg-2 control-label">제조사</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_company"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_model_name" class="col-lg-2 control-label">모델명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_model_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_model_code" class="col-lg-2 control-label">모델코드</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_model_code"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_produce_number" class="col-lg-2 control-label">제조번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_produce_number"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_product_code" class="col-lg-2 control-label">제품코드</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_product_code"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_identify" class="col-lg-2 control-label">식별부호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_identify"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_produce_ym" class="col-lg-2 control-label">제조년월</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_produce_ym"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_g_cpu" class="col-lg-2 control-label">CPU</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_g_cpu"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_g_ram" class="col-lg-2 control-label">RAM</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_g_ram"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_g_hdd_c" class="col-lg-2 control-label">HDD(C:)</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_g_hdd_c"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_g_hdd_d" class="col-lg-2 control-label">HDD(D:)</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_g_hdd_d"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_g_graphic" class="col-lg-2 control-label">그래픽카드</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_g_graphic"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_gian_num" class="col-lg-2 control-label">기안문서번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_gian_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="p_buy_day" class="col-lg-2 control-label">구매일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="p_buy_day"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 키보드 -->
                                        <div class="form-group" id="keyboard">
                                            <div class="form-group">
                                                <label for="k_product_name" class="col-lg-2 control-label">제품명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="k_product_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="k_identify" class="col-lg-2 control-label">식별부호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="k_identify"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="k_produce_ym" class="col-lg-2 control-label">제조일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="k_produce_ym"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="k_gian_num" class="col-lg-2 control-label">기안문서번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="k_gian_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="k_buy_day" class="col-lg-2 control-label">구매일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="k_buy_day"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 마우스 -->
                                        <div class="form-group" id="mouse">
                                            <div class="form-group">
                                                <label for="mu_product_name" class="col-lg-2 control-label">제품명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="mu_product_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="k_identify" class="col-lg-2 control-label">식별부호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="mu_identify"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="k_produce_ym" class="col-lg-2 control-label">제조일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="mu_produce_ym"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mu_gian_num" class="col-lg-2 control-label">기안문서번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="mu_gian_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mu_buy_day" class="col-lg-2 control-label">구매일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="mu_buy_day"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 헤드셋 -->
                                        <div class="form-group" id="headset">
                                            <div class="form-group">
                                                <label for="h_product_name" class="col-lg-2 control-label">제품명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="h_product_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="h_gian_num" class="col-lg-2 control-label">기안문서번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="h_gian_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="h_buy_day" class="col-lg-2 control-label">구매일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="h_buy_day"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 전화기 -->
                                        <div class="form-group" id="cell">
                                            <div class="form-group">
                                                <label for="c_product_name" class="col-lg-2 control-label">제품명</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="c_product_name"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="c_gian_num" class="col-lg-2 control-label">기안문서번호</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="c_gian_num"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="c_buy_day" class="col-lg-2 control-label">구매일</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="c_buy_day"
                                                           style="width:1000px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" class="btn btn-primary" id="write_btn">등록</button>
                                            <button class="btn btn-default" onclick="history.back();">취소</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
</section>
</section>

