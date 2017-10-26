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
				if ($tambah_calonsiswa_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tambah_calonsiswa_berhasil.'</span>'.
					'</div>';
				}
				if ($update_datasiswa_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_datasiswa_berhasil.'</span>'.
					'</div>';
				}
				if ($hapus_siswa_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$hapus_siswa_berhasil.'</span>'.
					'</div>';
				}
				if ($upload_foto_gagal)
				{
					echo '<div class="alert bg-danger-400 alert-styled-left">'.
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
						<li class="active">Data Siswa</li>
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
								<center><h5 class="panel-title"><strong>Pendataan Siswa</strong></h5></center>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" action="<?php echo base_url(); ?>admin/datasiswa" method="POST">
									<div class=col-md-3></div>
									<div class=col-md-9>
										<div class="form-group">
											<label class="control-label col-lg-2">Lembaga</label>
											<div class="col-lg-5">
												<select class="form-control" name="inputLembaga" id="inputLembaga">
													<?php foreach($_lembaga->result() as $row) {
														if ($carilembaga==$row->lembaga)
								                          echo '<option selected>'.$row->lembaga.'</option>';
								                    	else
								                          echo '<option>'.$row->lembaga.'</option>';
													} ?>
												</select>
											</div>
										</div>
										<div id="select_data_siswa"></div>
										<div class="form-group">
											<label class="control-label col-lg-3"></label>
											<div class="col-lg-8">
												<button type="submit" class="btn btn-primary btn-lg"><i class="icon-search4"></i> Cari</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="panel-heading">
									
									<?php
									if ($status==1)
										{ 
									?>
									
									<h3>Hasil Pencarian <?php echo '<b>'.$carilembaga.'</b>'.' '.'<b>'.$carikelompok.'</b>'.' Tahun Masuk '.'<b>'.$caritahunmasuk.'</b>';  ?></h3>
									
									<div class="panel-body">
											<form class="form-horizontal" action="<?php echo base_url();?>admin/do_cetakexcel" method="post" target="_blank" enctype="multipart/form-data">
												<input name="inputCariLembaga" type="hidden" value="<?php echo $carilembaga; ?>">
												<input name="inputCariKelompok" type="hidden" value="<?php echo $carikelompok; ?>">
												<input name="inputCariTahunMasuk" type="hidden" value="<?php echo $caritahunmasuk; ?>">
												<button
												type="submit" class="btn btn-success pull-right"><i class="icon-file-excel"></i> Cetak Excel</button>
											</form>
											<a class="pull-right">&nbsp&nbsp</a>
											

											<form class="form-horizontal" action="<?php echo base_url();?>admin/tambahcalonsiswa" method="post" enctype="multipart/form-data">
												<input name="inputCariLembaga" type="hidden" value="<?php echo $carilembaga; ?>">
												<input name="inputCariKelompok" type="hidden" value="<?php echo $carikelompok; ?>">
												<input name="inputCariTahunMasuk" type="hidden" value="<?php echo $caritahunmasuk; ?>">
											<button role="button" class="btn btn-primary pull-right"><i class="icon-plus-circle2"></i> Tambah Siswa</button>
											</form>
									</div>
								

										<table class="table datatable-responsive">
											<thead>
												<tr>
													<th>No</th>
													<th>No Daftar</th>
													<th>NISN</th>
													<th>Nama</th>
													<th>HP Ortu</th>
													<th>Finalisasi</th>
													<th>Tanggal Daftar</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = '1';
												foreach($query->result() as $row) { ?>
												<tr>
													<td ><?php echo $no; ?></td>
													<td ><?php echo $row->nopendaftaran; ?></td>
													<td ><?php echo $row->nisn ?></td>
													<td ><?php echo $row->nama ?></td>
													<td ><?php echo $row->hportu ?></td>
													<td >
														<?php if($row->statusfinalisasi == 'y') { ?>
															<a type="button" class="btn btn-success btn-xs" href="<?php echo base_url().'admin/do_pasifstatusfinalisasi/'.$row->nopendaftaran; ?>">
																<i class="fa fa-thumbs-up"></i>
															</a>
															<?php }
															else { ?>
															<a type="submit" class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/do_aktifstatusfinalisasi/'.$row->nopendaftaran; ?>">
																	<i class="fa fa-thumbs-down"></i>
															</a>
															<?php } ?>
													</td>
													<td ><?php echo $row->ts ?></td>
													<td class="text-center">
														<a type="button" class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/detailsiswa/'.$row->nopendaftaran; ?>" target="_blank"><i class="icon-search4"></i></a>
														
														<!-- <form class="form-horizontal" action="<?php echo base_url().'admin/updatedatasiswa/'.$row->nopendaftaran; ?>" method="POST" enctype="multipart/form-data"> -->
															<!-- <input name="inputCariLembaga" type="hidden" value="<?php echo $carilembaga; ?>">
															<input name="inputCariKelompok" type="hidden" value="<?php echo $carikelompok; ?>">
															<input name="inputCariTahunMasuk" type="hidden" value="<?php echo $caritahunmasuk; ?>"> -->
															<a type="button" class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/updatedatasiswa/'.$row->nopendaftaran; ?>"><i class="icon-pencil"></i></a>
														<!-- </form> -->

														<button type="button" class="btn bg-danger-400 btn-xs" data-toggle="modal" data-target="#<?php echo $row->nopendaftaran; ?>"><i class="icon-trash"></i></button>
													</td>
													<!-- Danger modal -->
													<div id="<?php echo $row->nopendaftaran; ?>" class="modal fade">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header bg-danger">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	<h4 class="modal-title">Hapus Data Siswa</h6>
																	</div>

																	<div class="modal-body">
																		<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus data siswa bernama <?php echo $row->nama ?> ?</h6>
																		</div>

																		<div class="modal-footer">
																			<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/hapussiswa/'.$row->nopendaftaran; ?>">Ya</a>
																			<button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
																		</div>
																	</div>
																</div>
															</div>
															<!-- /danger modal -->

															
														</tr>
														<?php $no++; } ?> 
														
													</tbody>
												</table>

											</div>

											<?php  }
											else if ($status==0)
												{ ?>
											<center>
												<h2>Silahkan menambahkan data siswa pada tombol dibawah ini</h2>
												<a role="button" class="btn btn-primary" href="<?php echo base_url();?>admin/tambahcalonsiswa"><i class="icon-plus-circle2"></i> Tambah Siswa</a>
											</center>
											<?php } ?>
											
										</div>
										<!-- /basic datatable -->
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
										url	: "<?php echo base_url(); ?>admin/datasiswa", 
										data	: "lembaga="+lembaga, 
										cache	: false, 
										success	: function(data){ 
											$("#select_data_siswa").html(data); 
										} 
									}); 
								}).change(); 
							}); 
						</script>
						<!-- Footer -->
						<?php require_once('layout/footer.php'); ?>
<!-- /footer -->