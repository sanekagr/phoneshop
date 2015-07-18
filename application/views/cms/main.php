<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoneshop - Admin Dashboard</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- fotorama.css  -->
    <link  href="<?= site_url('public/css/packages'); ?>/fotorama.css" rel="stylesheet">

    <!--  custom css files  -->
    <link href="<?= site_url('public/css/header.css'); ?>" rel="stylesheet" media="all">
    <link href="<?= site_url('public/css/footer.css'); ?>" rel="stylesheet" media="all">
    <link href="<?= site_url('public/css/cms_style.css'); ?>" rel="stylesheet" media="all">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->


</head>

<body>
<div id="wrapper">

    <!--   navbar fixed    -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container-fluid">
            <!--  Navbar header  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?= site_url('cms/dashboard'); ?>" style="font-size: 25px;" class="navbar-brand">Phone <span><img
                            src="<?= site_url('public/img/buying4.2.svg'); ?>" class="navbar-img"
                            alt="navbar-img"></span>Shop<span class="hidden-sm hidden-xs" > - Admin Dashboard</span></a>
            </div>

            <!--   Main fixed navigation  -->
            <div id="navbar" class="collapse navbar-collapse navbar-right" role="navigation">

                <ul class="nav navbar-nav ">
                    <li><a href="<?= site_url('cms/dashboard'); ?>/">Products</a></li>
                    <li><a href="<?= site_url('cms/categories'); ?>/">Categories</a></li>
                    <li><a href="<?= site_url('cms/dashboard/orders'); ?>/">Orders</a></li>
                    <li><a href="<?= site_url('cms/dashboard/messages'); ?>/">Messages</a></li>
                    <li><a href="<?= site_url('');?>" data-toggle="tooltip" data-placement="bottom" title="Back to the site"><i class="fa fa-home"></i></a></li>
                </ul>

            </div>
            <!-- /.nav-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- /.navbar -->


    <div class="content-general">
        <div class="container content">

            <div class="row">
                <div class="col-sm-12">
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
    </div>
    <!--/.content .container -->

    <!--          footer         -->

    <div class="footer">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 text-center"><a href="<?= site_url('home'); ?>" style="color: #222">Phone
                        <img src="<?= site_url('public/img/buying4org.svg'); ?>"
                             height="30px"/>Shop &copy; <?= date("Y"); ?></a></div>

            </div>
            <!--/.row-->

        </div>
        <!--/.container-fluid-->
    </div>
    <!--/.footer-->

</div>
<!--/.wrapper-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- tinymce  -->
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>

<!--Fotorama -->
<script src="<?= site_url('public/js/packages/fotorama.js');?>" ></script>

<!-- jQuery Validate -->
<script type="text/javascript" src="<?= site_url('public/js/packages/jquery.validate.min.js');?>" ></script>

<!-- UItoTop -->
<script type="text/javascript" src="<?= site_url('public/js/packages/UItoTop.js'); ?>" ></script>

<!-- defenition of CI_ROOT -->
<script type="text/javascript"> var CI_ROOT="<?= site_url(); ?>"; </script>

<!-- my scripts-->
<script type="text/javascript" src="<?= site_url('public/js/cms_scr.js'); ?>" ></script>
<script type="text/javascript" src="<?= site_url('public/js/forms_validate.js');?>" ></script>

</body>
