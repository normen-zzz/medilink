<!DOCTYPE html>
<html>
<head>
   <?php $this->load->view('primer/head');?>
   
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Medi</b>Link</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open($form['action'], $form['atr']);?>
				<?php $autofocus = '';?>
				<?php foreach($form['set_rules'] as $fe):?>
					<?php
						$atr = '';
						$atr .= 'type="'.$fe['type'].'" class="form-control" id="'.$fe['field'].'" name="'.$fe['field'].'" value="'.set_value($fe['field']).'" placeholder="'.$fe['placeholder'].'"';
						
						if($autofocus==''):
							if(! validation_errors()):
								$atr .= ' autofocus';
							else:
								if(form_error($fe['field'])) $atr .= ' autofocus';
							endif;
						endif;
					?>
              
				  <div class="form-group has-feedback">
					<label for="<?php echo $fe['field'];?>"><?php echo $fe['label'];?></label>
					<input <?php echo $atr;?> />								
					<span class="glyphicon <?php echo $fe['fas'];?> form-control-feedback"></span>
					<?php echo form_error($fe['field']);?>
				  </div>
				<?php endforeach;?>  				 
				  <div class="row">
					
					<!-- /.col -->
					<div class="col-xs-4">
					  <button type="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
					</div>
					<!-- /.col -->
				  </div>
			<?php echo form_close();?>

    <!--div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <!--a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
