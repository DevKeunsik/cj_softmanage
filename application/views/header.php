<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>관리자 페이지</title>

    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!--jquery 추가해야함 -->
    <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
    <!-- font icon -->
    <link href="/assets/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- full calendar css-->
    <link href="/assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
    <link href="/assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet"/>
    <!-- easy pie chart-->
    <link href="/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" type="text/css">
    <link href="/assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="/assets/css/fullcalendar.css">
    <link href="/assets/css/widgets.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="/assets/css/xcharts.min.css" rel=" stylesheet">
    <link href="/assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <script src="/assets/js/lte-ie7.js"></script>
    <![endif]-->
</head>

<body>
<!-- container section start -->
<section id="container" class="">

    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="sidebar 접기/펼치기" data-placement="bottom">
                <i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="javascript:;" class="logo"><span class="lite"></span>Admin</a>
        <!--logo end-->

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <?php
                if ($this->session->userdata('logged_in') == TRUE) {
                    ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            관리자(<?php echo $this->session->userdata('username'); ?>)님 환영합니다.
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="/user/logout" class="icon_key_alt">로그아웃</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="/">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>전산실</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="/soft/keep_pc">보관물품</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_desktop"></i>
                        <span>전산사용대장</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="/group/g_gs">경영지원본부</a></li>
                        <li><a class="" href="/group/g_ad1">광고1부</a></li>
                        <li><a class="" href="/group/g_ad2">광고2부</a></li>
                        <li><a class="" href="/group/g_em_edit">리크루트/편집</a></li>
                        <li><a class="" href="/group/g_tv">여행사업팀</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>소프트웨어</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="/soft/lists?state=Y">진행</a></li>
                        <li><a class="" href="/soft/lists?state=R">보관</a></li>
                        <li><a class="" href="/soft/lists?state=N">사용불가</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="/soft/kaspersky">
                        <i class="icon_genius"></i>
                        <span>카스퍼스키</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/soft/printer">
                        <i class="icon_genius"></i>
                        <span>프린터</span>

                    </a>

                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->