<?php 
require_once('layout/head.php'); 
require_once('layout/navbarmenu.php');
require_once('layout/sidebar.php');
?>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<?php
				if ($reset_password_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$reset_password_berhasil.'</span>'.
					'</div>';
				}
				if ($email_belum_terdaftar)
				{
					echo '<div class="alert bg-danger-400 alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$email_belum_terdaftar.'</span>'.
					'</div>';
				}
				if ($reset_password_gagal)
				{
					echo '<div class="alert bg-danger-400 alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$reset_password_gagal.'</span>'.
					'</div>';
				}
				?>
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li class="active">Reset Password Siswa</li>
					</ul>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<!--Grafik jumlah kelompok dari tiap lembaga-->
				<div class="row">

					<div class="col-lg-12">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Reset Password Siswa</strong></h4></center>
							</div>
							<div class="panel-body">

								<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_resetpassword" method="POST">

									<fieldset class="content-group">
										<div class="form-group">
											<div class="col-lg-3"></div>
											<label class="control-label col-lg-2">Email Registrasi Siswa <span style="color: red">*</span></label>
											<div class="col-lg-3">
												<input type="email" name="inputEmail" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-3"></div>
											<label class="control-label col-lg-2">Password <span style="color: red">*</span></label>
											<div class="col-lg-3">
												<input type="text" name="inputPassword" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<center>
												<button type="submit" class="btn btn-primary">Submit</button>
											</center>
										</div>

									</fieldset>
									
								</form>

							</div>
						</div>
					</div>


				</div>

				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->