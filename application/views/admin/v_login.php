<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin | PSB MAU-MBI Amanatul Ummah</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets2/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets2/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets2/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets2/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets2/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/core/app.js"></script>
	<!-- /theme JS files -->
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/images/favicon-maumbi.png" >

</head>

<body>

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<!-- Solid alert -->
							<?php
							if ($logout_berhasil)
							{
								echo '<div class="alert bg-success alert-styled-left">'.
								'<button type="button" class="close" data-dismiss="alert">'.
								'<span>'.'&times;'.'</span>'.
								'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
								'<span class="text-semibold">'.$logout_berhasil.'</span>'.
								'</div>';
							}
							if ($username_email_password_salah)
							{
								echo '<div class="alert bg-danger-400 alert-styled-left">'.
								'<button type="button" class="close" data-dismiss="alert">'.
								'<span>'.'&times;'.'</span>'.
								'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
								'<span class="text-semibold">'.$username_email_password_salah.'</span>'.
								'</div>';
							}

							?>
							
							<!-- /solid alert -->

						</div>
						<div class="col-md-3"></div>
					</div>

					<!-- Simple login form -->
					<form action="<?php echo base_url(); ?>admin/do_login" method="POST">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Admin PSB MAU-MBI Amanatul Ummah Surabaya <small class="display-block">Isikan username/email dan password</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="inputUserEmail" placeholder="Username / Email" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2016. <a href="#">Panitia PSB MAU-MBI Amanatul Ummah</a> by <a href="https://www.facebook.com/maumbiamanatulummahsby" target="_blank">MA Amanatul Ummah</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
