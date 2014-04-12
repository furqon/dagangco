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



<!-- <div class="container">
  <div class="page-header">
    <h3>Please login to access system</h3>
  </div>
  <?php $T->snippet('flash-message'); ?>
  <?php echo $form; ?>
</div> -->
<script type="text/javascript">
$(document).ready(function () {
  if (window.top.location != '<?php $url = $request->getAppUrl("Login/index"); echo $url; ?>') {
    window.top.location = '<?php echo $url ?>' ;
  }
});
</script>

