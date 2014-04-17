<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo $T->getResourceUrl('ico/favicon.ico') ?>">    
  <title><?php echo $config->getProjectTitle(); ?></title>

  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="<?php echo $T->getResourceUrl('css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $T->getResourceUrl('css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $T->getResourceUrl('css/ionicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $T->getResourceUrl('css/AdminLTE.css') ?>" rel="stylesheet">

  <link href="<?php echo $T->getResourceUrl('res/datatables/media/css/dataTables.bootstrap.css') ?>" rel="stylesheet">
  <script src="<?php echo $T->getResourceUrl('js/jquery.min.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/media/js/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/extras/TableTools/media/js/ZeroClipboard.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/extras/TableTools/media/js/TableTools.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/media/js/dataTables.bootstrap.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('js/bootbox.js') ?>"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  </head>

  <body class="skin-blue">

    <!-- header -->
    <header class="header">
      <?php echo $UI->link($config->getProjectTitle(), 'Home/index', 'logo') ?>

            <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
          <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i>
                <span><?php if ($session->getUser()) echo $session->getUser()->getName() ?> <i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu">
                  <!-- User image -->
                <li class="user-header bg-light-blue">
                  <img src="<?php echo $T->getResourceUrl('avatar/furqon.png') ?>" class="img-circle" alt="User Image" />
                  <p>
                      <?php if ($session->getUser()) echo $session->getUser()->getName() ?>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                      <?php echo $UI->buttonlink('Profile', 'Logout/index', 'btn-flat') ?>
                  </div>
                  <div class="pull-right">
                      <?php echo $UI->buttonlink('Sign out', 'Logout/index', 'btn-flat') ?>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- end header -->


    <div class="wrapper row-offcanvas row-offcanvas-left">      
    <?php $T->includeFile("Home/sidebar") ?>

    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php echo $T->block('content-header') ; ?>
          <ol class="breadcrumb">
            <?php echo $T->block('breadcrumb'); ?>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <?php echo $T->block('content'); ?>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->

    </div>
    <script src="<?php echo $T->getResourceUrl('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo $T->getResourceUrl('js/AdminLTE/app.js') ?>"></script>
    
  </body>
</html>
