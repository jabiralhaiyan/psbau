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
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/dataadmin"> Admin</a></li>
						<li class="active">Update Admin</li>
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
								<center><h4 class="panel-title"><strong>Update Admin</strong></h4></center>
							</div>
							<div class="panel-body">

								<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_updateadmin" method="POST">
									<fieldset class="content-group">
										<div class="form-group">
											<div class="col-lg-2"></div>
											<label class="control-label col-lg-2">Username <span style="color: red">*</span></label>
											<div class="col-lg-5">
												<input type="text" name="inputUsername" class="form-control" value="<?php echo $username; ?>" required readonly>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-2"></div>
											<label class="control-label col-lg-2">Email <span style="color: red">*</span></label>
											<div class="col-lg-5">
												<input type="email" name="inputEmail" class="form-control" value="<?php echo $email; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-2"></div>
											<label class="control-label col-lg-2">Nama <span style="color: red">*</span></label>
											<div class="col-lg-5">
												<input type="text" name="inputNama" class="form-control" value="<?php echo $nama; ?>" required>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-2"></div>
											<label class="control-label col-lg-2">Panggilan</label>
											<div class="col-lg-5">
												<input type="text" name="inputPanggilan" value="<?php echo $panggilan; ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<center>
												<button type="submit" class="btn btn-primary">Submit</button>
											</center>
										</div>

									</fieldset>
									
								</form>


								<div class="col-lg-12">
									<center><h4 class="panel-title"><strong>Ganti Password</strong></h4></center> <br>
								</div>
								<div class="col-md-12">
									<form class="form-horizontal" action="<?php echo base_url().'admin/do_gantipassword/'.$username ;?>" method="POST">
										<fieldset class="content-group">
											<div class="form-group">
												<div class="col-lg-2"></div>	
												<label class="control-label col-lg-2">Password <span style="color: red">*</span></label>
												<div class="col-lg-5">
													<input type="password" name="inputPassword" class="form-control" value="<?php echo $password; ?>" required>
												</div>
											</div>
											<div class="form-group">
												<center>
													<button type="submit" class="btn btn-primary">Ganti Password</button>
												</center>
											</div>
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>


				</div>

				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->