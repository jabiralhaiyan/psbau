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
				if ($tambah_proses_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tambah_proses_berhasil.'</span>'.
					'</div>';
				}
				if ($kode_awalan_sudah_ada)
				{
					echo '<div class="alert bg-warning alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$kode_awalan_sudah_ada.'</span>'.
					'</div>';
				}
				if ($update_proses_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_proses_berhasil.'</span>'.
					'</div>';
				}
				if ($hapus_proses_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$hapus_proses_berhasil.'</span>'.
					'</div>';
				}
				?>
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/referensipsb">Referensi PSB</a></li>
						<li class="active">Proses Penerimaan</li>
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
								<center><h4 class="panel-title"><strong>Proses Penerimaan</strong></h4></center>
							</div>
							<div class="panel-body">
								<!--<form name="ref_proses" id="ref_proses" class="form-horizontal" action="<?php echo base_url(); ?>admin/referensi_prosespenerimaan" method="POST">-->
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
								<!--</form>-->
								<div id="table_prosespenerimaan"></div>
							</div>
						</div>
					</div>
				</div>


				<script type="text/javascript"> 
					$(document).ready(function(){ 
						$("#inputLembaga").change(function(){ 
							var lembaga = $("#inputLembaga").val(); 
							$.ajax({ 
								type	: 'POST', 
								url	: "<?php echo base_url(); ?>admin/referensi_prosespenerimaan", 
								data	: "lembaga="+lembaga, 
								cache	: false, 
								success	: function(data){ 
									$("#table_prosespenerimaan").html(data); 
								} 
							}); 
						}).change(); 
					}); 
				</script>
				<!--<script>$(document).ready(function(){$("#ref_proses").submit();});</script>-->
				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->