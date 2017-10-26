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
				if ($update_profil_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_profil_berhasil.'</span>'.
					'</div>';
				}
				if ($upload_foto_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$upload_foto_berhasil.'</span>'.
					'</div>';
				}
				if ($upload_foto_gagal)
				{
					echo '<div class="alert bg-warning alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$upload_foto_gagal.'</span>'.
					'</div>';
				}
				?>
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/dataadmin"> Admin</a></li>
						<li class="active">Profil Admin</li>
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
								<center><h4 class="panel-title"><strong>Profil Admin</strong></h4></center>
							</div>
							<div class="panel-body">

								<div class="col-md-3">
									<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_unggahfotoprofil" method="post" enctype="multipart/form-data">
										<div class="fileinput fileinput-new" data-provides="fileinput">
											<div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
												<img src="
												<?php 
												if($foto == NULL){
													echo base_url().'assets2/images/profpic/default-foto.png'; 
												}
												else
												{
													echo base_url().'assets2/images/profpic/'.$foto;
												}
												?>
												" alt="...">
											</div>
											<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
											<div>
												<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="fileFoto"></span>
												<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-8 col-lg-offset-3">
												<button type="submit" class="btn btn-primary">Unggah</button>
											</div>
										</div>
									</form>
								</div>	
								<div class="col-md-9">
									<form class="form-horizontal" action="<?php echo base_url();?>admin/do_updateprofil" method="POST">
										<fieldset class="content-group">
											<div class="form-group">
												<label class="control-label col-lg-2">Username (required)</label>
												<div class="col-lg-5">
													<input type="text" name="inputUsername" class="form-control" value="<?php echo $username; ?>" required readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2">Nama</label>
												<div class="col-lg-5">
													<input type="text" name="inputNama" value="<?php echo $nama; ?>" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2">Panggilan</label>
												<div class="col-lg-5">
													<input type="text" name="inputPanggilan" value="<?php echo $panggilan; ?>" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-lg-2">Email (required)</label>
												<div class="col-lg-5">
													<input type="email" name="inputEmail" class="form-control" value="<?php echo $email; ?>" required readonly>
												</div>
											</div>
											<div class="form-group">
												<div class="col-lg-3"></div>
												<button type="submit" class="btn btn-primary">Submit</button>

											</div>

										</fieldset>
									</form>
								</div>

								
								<div class="col-lg-12">
									<center><h4 class="panel-title"><strong>Ganti Password</strong></h4></center> <br>
								</div>
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<form class="form-horizontal" action="<?php echo base_url().'admin/do_gantipassword/'.$username ;?>" method="POST">
										<fieldset class="content-group">
											<div class="form-group">
												<label class="control-label col-lg-2">Password (required)</label>
												<div class="col-lg-5">
													<input type="password" name="inputPassword" value="<?php echo $password; ?>" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
												<div class="col-lg-3"></div>
												<button type="submit" class="btn btn-primary">Ganti Password</button>

											</div>
										</fieldset>
									</form>
								</div>



							</div>

						</div>
					</div>
				</div>


			</div>


			<script>
				$('.fileinput').fileinput()
			</script>
			<!-- Footer -->
			<?php require_once('layout/footer.php'); ?>
<!-- /footer -->