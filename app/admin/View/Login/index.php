<?php $T->addCss(array('font-awesome.min', 'bootstrap.min', 'AdminLTE')) ?>
<?php $T->addJs(array('jquery.min')) ?>

<?php $T->blockStart('content'); ?>

    <div class="form-box" id="login-box">
      <div class="header">Sign In</div>

      <?php echo $form ; ?>
      
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

<script type="text/javascript">
$(document).ready(function () {
  if (window.top.location != '<?php $url = $request->getAppUrl("Login/index"); echo $url; ?>') {
    window.top.location = '<?php echo $url ?>' ;
  }
});
</script>

<?php $T->blockEnd('content') ; ?>

