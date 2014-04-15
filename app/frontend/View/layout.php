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
  <link href="<?php echo $T->getResourceUrl('res/datatables/extras/TableTools/media/css/TableTools.css') ?>" rel="stylesheet">

  <script src="<?php echo $T->getResourceUrl('js/jquery.min.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/media/js/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/extras/TableTools/media/js/ZeroClipboard.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/extras/TableTools/media/js/TableTools.js') ?>"></script>
  <script src="<?php echo $T->getResourceUrl('res/datatables/media/js/dataTables.bootstrap.js') ?>"></script>

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
        <div class="navbar-right">
          <ul class="nav navbar-nav">            
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>Pricing</span></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>About</span></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>Contact</span></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- end header -->


    <div class="wrapper row-offcanvas row-offcanvas-left">      
      <?php $T->includeFile("Home/sidebar") ?>
      <?php echo $T->block('content'); ?>
    </div>
    <script src="<?php echo $T->getResourceUrl('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo $T->getResourceUrl('js/AdminLTE/app.js') ?>"></script>
  
  </body>
</html>
