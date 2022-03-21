﻿<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="<?php echo $site['site_name_admin'] ?>">
    <meta name="keywords" content="au theme template">

    <link rel="icon" type="image/png" href="<?php echo $site_public ?>/images/logo-momo.png"/>
    <!-- Title Page-->
    <title><?php echo $site['title'] ?></title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo $site_public ?>/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap CSS-->
    <link href="<?php echo $site_public ?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?php echo $site_public ?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $site_public ?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="<?php echo $site_public ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        label{
            font-weight: 500
        }
    </style>

    <link rel="stylesheet" href="<?php echo $site_public ?>/css/jquery.toast.css">
    <script src="<?php echo $site_public ?>/js/jquery.toast.js"></script>
    <!-- Main CSS-->
    <link href="<?php echo $site_public ?>/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo $site_public ?>/images/momo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile" >
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        
                        <li>
                            <a href="<?php echo $site_url ?>tinsoft/">
                                <i class="fab fa-tumblr-square"></i>Tin Soft Proxy</a>
                        </li>
                        <li>
                            <a href="<?php echo $site_url ?>momo/get-name">
                                <i class="fab fa-tumblr-square"></i>Check Tên Ví MOMO</a>
                        </li>
                        <li>
                            <a href="<?php echo $site_url ?>momo/get-his">
                                <i class="fas fa-history"></i>Lấy Lịch Sử Giao Dịch</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo $site_public ?>/images/momo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo $site_url ?>"><i class="fas fa-list"></i>Danh Sách Tài Khoản</a>
                        </li>
                        <hr class="my-4">
                        
                        <li>
                            <a href="<?php echo $site_url ?>tinsoft/">
                                <i class="fab fa-tumblr-square"></i>Tin Soft Proxy</a>
                        </li>
                        <hr class="my-4">
                        <li>
                            <a href="<?php echo $site_url ?>momo/get-name">
                                <i class="fas fa-user-check"></i>Check Tên Ví MOMO</a>
                        </li>
                        <li>
                            <a href="<?php echo $site_url ?>momo/get-his">
                                <i class="fas fa-history"></i>Lấy Lịch Sử Giao Dịch</a>
                        </li>
                        
                        <hr class="my-4">
                    </ul>
                </nav>
            </div>
        </aside>

        

        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="title text-primary">
                                <?php
                                if($CheckProxy == false){
                                ?>
                                    <p><span class="badge badge-danger">Cảnh Báo:</span>&nbsp; Vui lòng mua hoặc gia hạn proxy, số lượng proxy đã bị hết thời gian</p>
                                <?php }else { ?>
                                    <p><span class="badge badge-success">Xin chào</span>&nbsp; Hệ thống đang hoạt động ổn định</p>
                                <?php } ?>
                            </div>
                            <div class="title text-success">
                                <p><span class="badge badge-success">PROXY: </span> <span id="proxy" class="text-danger">&nbsp;<?= $_PROXY ?? 'undefined' ?></span>&nbsp; &nbsp;<span id="date-time" class="badge badge-danger"><?php echo date('H:i:s'); ?></span></p>
                            </div>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo $site_public ?>/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?php echo $site_public ?>/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo $site_public ?>/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $username ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo $site_public ?>/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $username ?></a>
                                                    </h5>
                                                    <span class="email"><?= $user['email'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Tài khoản</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Cài Đặt</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo $site_url ?>logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>