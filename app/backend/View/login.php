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

    <div class="form-box" id="login-box">

      <div class="header">Sign In</div>
      <form name="login" method="post">
        <div class="body bg-gray">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Username"/>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
          </div>          
          <div class="form-group">
            <input type="checkbox" name="remember_me"/> Remember me
          </div>
        </div>
        <div class="footer">                                                               
            <button type="submit" class="btn bg-olive btn-block">Sign me in</button>              
            <p><a href="#">I forgot my password</a></p>            
            <a href="register.html" class="text-center">Register a new membership</a>
        </div>
      </form>

      <div class="margin text-center">
        <p>&nbsp;</p>        
        <span>&copy; 2014 - life2play</span>
        <p>&nbsp;</p>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

      </div>
    </div>



    <script src="<?php echo $T->getResourceUrl('js/jquery.min.js') ?>"></script>
    <script src="<?php echo $T->getResourceUrl('js/bootstrap.min.js') ?>"></script>
  </body>
</html>