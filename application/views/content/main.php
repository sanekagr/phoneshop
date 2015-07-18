<!--
****
This is a site/project only for the studying purpose, without commercial or non-commercial use
Author: Alexander Agranov
Email:agranov.paka@gmail.com
Course: Webmaster and PHP programming - HackerU
Lecturer and mentor: Shlomi Lahav
****
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Agranov Alexander-agranov.paka@gmail.com, Shlomi Lahav - mentor and author">
    <meta name="description" content="Phoneshop - The best phones at a good price">
    <meta name="description" content="This is a site/project only for the studying purpose, without commercial or non-commercial use">
    <!-- don't appear in search engines -->
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="<?= site_url('public/img/favicon.ico'); ?>" rel="icon" type="image/x-icon" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- fotorama.css  -->
<!--    <link  href="--><?//= site_url('public/css/packages/fotorama.css'); ?><!--" rel="stylesheet" >-->
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css" rel="stylesheet">

    <!-- animate.css  -->
    <link  href="<?= site_url('public/css/packages/animate.css'); ?>" rel="stylesheet" media="all">

    <!--custom css-->
    <link href="<?= site_url('public/css/header.css');?>" rel="stylesheet" media="all">
    <link href="<?= site_url('public/css/style.css');?>" rel="stylesheet" media="all">
    <link href="<?= site_url('public/css/footer.css');?>" rel="stylesheet" media="all">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">

    <!--   navbar fixed    -->

    <nav class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container-fluid">
            <!--  Navbar header  -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="<?= site_url('home'); ?>" class="navbar-brand">Phone <span><img
                            src="<?= site_url('public/img/buying4.2.svg'); ?>" class="navbar-img"
                            alt="navbar-img"></span>Shop</a>
                <a class="btn btn-default visible-xs-inline-block  btn-search2" role="button" style="font-size: 14px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>

            </div>

            <!--   Main fixed navigation  -->
            <div id="navbar" class="collapse navbar-collapse navbar-right " role="navigation">

                <ul class="nav navbar-nav">
                    <li class="visible-sm-inline-block"><a class="btn-search2" role="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
                    <?php if(isset($is_login) && $is_login==false): ?>

                        <li><a href="<?= site_url('user/login'); ?>" data-toggle="tooltip" data-placement="bottom" title="Log In or Register"><i class="fa fa-user"></i></a></li>

                    <?php else: ?>

                        <?php if(isset($is_admin) && $is_admin==true): ?>

                            <li><a href="<?= site_url('cms/dashboard'); ?>">CMS Dashboard</a></li>
                            <li><a href="#"><b>Hello Admin</b></a></li>

                        <?php else: ?>

                            <li><a href="<?= site_url('user/edit'); ?>" data-toggle="tooltip" data-placement="bottom" class="nav-name" title="For the changing account settings press here">
                             <b>Hello <?= $this->session->userdata('name'); ?></b></a></li>

                        <?php endif; ?>
                    <li><a href="<?= site_url('user/logout'); ?>" data-toggle="tooltip" data-placement="bottom" title="Log Out"><i class="fa fa-sign-out"></i></a></li>

                    <?php endif; ?>

                    <li class="li-cart">
                        <a href="<?= site_url('cart/checkout'); ?>" ><i class="fa fa-shopping-cart"></i></a>
                        <?php if($this->cart->total_items() > 0): ?>
                            <span class="cart_count"><?= $this->cart->total_items(); ?></span>
                        <?php else: ?>
                            <span class="cart_count"></span>
                        <?php endif ?>
                    </li>
                </ul>

                <ul class="nav navbar-nav visible-xs-block">
                    <li><a class="active" href="<?= site_url('home'); ?>">Home</a></li>
                    <li class="dropdown">
                        <a href="<?= site_url('products'); ?>" class="dropdown-toggle" role="button"
                           aria-expanded="false">Products<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <!--   dinamic categories_menu -->
                            <?php if (!empty($categories_menu)): ?>
                                <?= $categories_menu; ?>
                            <?php endif; ?>

                        </ul>
                    </li>
                    <li><a href="<?= site_url('about'); ?>">About</a></li>
                    <li><a href="<?= site_url('contact'); ?>">Contact Us</a></li>
                </ul>

            </div>
            <!-- /.nav-collapse -->

            <!-- Telephone and Search-->
            <ul class="nav navbar-nav navbar-right navbar-one hidden-sm hidden-xs">
                <li><a href="tel:1700000000" class="navbar-phone"><i class="fa fa-phone-square"></i> 1-700-000-000</a>
                </li>
                <li><a href="#" role="button" data-toggle="modal" data-target="#myModal2"
                       title="Click to send a message">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a></li>
                <li>

                    <!--    search in md and lg resolution -->

                    <?= form_open(site_url('search'),array('class'=>'navbar-form search-1','role'=>'search'));?>
                        <div class="input-group">
                            <input type="text" style="width: 250px;" class="form-control input-sm" placeholder="Search product" name="input-search" pattern=".{2,}"   required title="2 characters minimum">
                            <span class="input-group-btn">
                              <button class="btn btn-default btn-sm btn-search" type="submit" name="submit">
                                  <i class="fa fa-search"></i>
                              </button>
                           </span>
                        </div><!-- /input-group -->
                    <?= form_close();?>

                </li>
            </ul>

        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- /.navbar -->


    <!--   second navbar     -->

    <nav class="navbar navbar-default hidden-xs">
        <div class="container">

            <ul class="nav navbar-nav">
                <li><a class="active" href="<?= site_url('home'); ?>"><i style="font-size: 22px" class="fa fa-home"></i></a></li>
                <li class="dropdown">
                    <a href="<?= site_url('products'); ?>" class="dropdown-toggle" role="button" aria-expanded="false">Products<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <!--   dinamic categories_menu -->

                        <?php if (!empty($categories_menu)): ?>
                            <?= $categories_menu; ?>
                        <?php endif; ?>

                    </ul>
                </li>
                <li><a href="<?= site_url('about'); ?>">About</a></li>
                <li><a href="<?= site_url('contact'); ?>">Contact Us</a></li>
            </ul>

        </div>
    </nav>
    <!--/.navbar-second -->

    <!--   AddThis Sharing Side Buttons-->
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54c7f33002031586"
            async="async"></script>

<div class="content-general">
        <div class="container content">

            <!-- search in sm an xs resolution -->

            <div class="row search" style="display: none;">

                    <?= form_open(site_url('search'),array('class'=>'form-horisontal search-2','role'=>'search'));?>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search product" name="input-search" pattern=".{2,}"   required title="2 characters minimum" >
                           <span class="input-group-btn">
                              <button class="btn btn-default btn-search" type="submit" name="submit">
                                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                              </button>
                           </span>
                    </div>
                    <!-- /input-group -->
                <?= form_close();?>

            </div>
            <!--/.search-->

            <div class="row">
                <div class="col-xs-12" >
                    <?= $this->breadcrumbs->show(); ?>
                </div>
            </div>

            <!--        content       -->
            <?php if (!empty($content)): ?>
                <?= $content; ?>
            <?php else: ?>
                <br/> <i><h1>No content....</h1></i>
            <?php endif; ?>

    </div>
    <!--/.content .container -->

</div><!--/.content-general -->

<?php require_once('footer.php'); ?>