<!DOCTYPE html>
<html lang="en" class="bg-black">
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
    <link href="<?php echo $T->getResourceUrl('css/AdminLTE.css') ?>" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      </head>
  </head>

  <body class="bg-black">

  <?php echo $__mainContents; ?>

    <script src="<?php echo $T->getResourceUrl('js/jquery.min.js') ?>"></script>
    <script src="<?php echo $T->getResourceUrl('js/bootstrap.min.js') ?>"></script>
  </body>
</html>