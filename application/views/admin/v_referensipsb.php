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
						<li class="active">Referensi PSB</li>
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
								<center><h4 class="panel-title"><strong>Menu Referensi</strong></h4></center>
							</div>
							<div class="panel-body">
								<center>	
									<div>

										<img src="<?php echo base_url(); ?>assets2/images/panah-kiri.jpg">
										
										<a href="<?php echo base_url();?>admin/referensi_lembaga" style="color:black">
											
											<img src="<?php echo base_url(); ?>assets2/images/icon-lembaga.png" width="100px" height="100px"> LEMBAGA
										</a>
										<img src="<?php echo base_url(); ?>assets2/images/panah-kanan.jpg">
									</div>

									<a href="<?php echo base_url();?>admin/referensi_tahun" style="color:black">
										<img src="<?php echo base_url(); ?>assets2/images/icon-tahun.png" width="100px" height="100px"> TAHUN MASUK
									</a> 
									
									<img src="<?php echo base_url(); ?>assets2/images/panah-gabungan.jpg">
									
									<a href="<?php echo base_url();?>admin/referensi_prosespenerimaan" style="color:black">
										<img src="<?php echo base_url(); ?>assets2/images/icon-proses.png" width="100px" height="100px"> PROSES PENERIMAAN
									</a>
									
									<div>
										<a href="<?php echo base_url();?>admin/referensi_kelompok" style="color:black">
											<img src="<?php echo base_url(); ?>assets2/images/icon-kelompok.png" width="100px" height="100px"> KELOMPOK
										</a>
									</div>

								</center>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->