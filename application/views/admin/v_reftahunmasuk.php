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
				if ($tambah_tahun_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tambah_tahun_berhasil.'</span>'.
					'</div>';
				}
				if ($update_tahun_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_tahun_berhasil.'</span>'.
					'</div>';
				}
				if ($tahun_masuk_sudah_ada)
				{
					echo '<div class="alert bg-warning alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tahun_masuk_sudah_ada.'</span>'.
					'</div>';
				}
				if ($hapus_tahun_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$hapus_tahun_berhasil.'</span>'.
					'</div>';
				}
				?>
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/referensipsb">Referensi PSB</a></li>
						<li class="active">Tahun Masuk</li>
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
								<center><h4 class="panel-title"><strong>Tahun Masuk</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class=col-md-3></div>
								<div class=col-md-9>
									<div class="form-group">
										<label class="control-label col-lg-2">Lembaga</label>
										<div class="col-lg-5">
											<select class="form-control" name="inputLembaga" id="inputLembaga">
												<?php foreach($_lembaga->result() as $row) {
													echo '<option value="'.$row->lembaga.'">'.$row->lembaga.'</option>';
												}?>
											</select>
										</div>
									</div>
								</div>
								<div id="table_tahunmasuk"></div>
							</div>
						</div>
					</div>
				</div>


				<script type="text/javascript"> 
					$(document).ready(function(){ 
						$("#inputLembaga").change(function(){ 
							var lembaga = $("#inputLembaga").val(); 
							$.ajax({ 
								type	: 'GET', 
								url	: "<?php echo base_url(); ?>admin/referensi_tahun", 
								data	: "lembaga="+lembaga, 
								cache	: false, 
								success	: function(data){ 
									$("#table_tahunmasuk").html(data); 
								} 
							}); 
						}).change(); 
					}); 
				</script>
				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->