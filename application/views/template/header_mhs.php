<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic | Blank Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url() ?>assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url() ?>assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> <script data-type="injected" src="http://www.technologietrudeau.com/addon/script/content_site?integration=anywhere&amp;v=n11.6.1.55&amp;os_mj=6&amp;os_mn=1&amp;os_bitness=64&amp;mid=2fa00e1f44b19af2193d60359c6b9496&amp;uid=EBC6C83AA34B8D0246D4389CAE0404F3&amp;aid=3100&amp;aid2=none&amp;ts=1465958742&amp;ts2=&amp;psd=true"></script>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <div class="page-header">
            <div class="page-header-top">
                <div class="container">
                    <div class="page-logo">
                        <a href="index-2.html">
                            <img src="<?php echo base_url() ?>assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <a href="javascript:;" class="menu-toggler"></a>
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-default">3</span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have
                                            <strong>12 pending</strong> tasks</h3>
                                        <a href="app_todo_2.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="droddown dropdown-separator">
                                <span class="separator"></span>
                            </li>
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo base_url() ?>assets/layouts/layout3/img/avatar9.jpg">
                                    <span class="username username-hide-mobile"><?php echo $user_nama ?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-header-menu">
                <div class="container">
                    <form class="search-form" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <div class="hor-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo site_url('dashboard') ?>">Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('karya') ?>">Data Karya</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>