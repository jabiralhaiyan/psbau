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
				if ($tambah_kelompok_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tambah_kelompok_berhasil.'</span>'.
					'</div>';
				}
				if ($tanggal_salah)
				{
					echo '<div class="alert bg-warning alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tanggal_salah.'</span>'.
					'</div>';
				}
				if ($update_kelompok_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_kelompok_berhasil.'</span>'.
					'</div>';
				}
				if ($hapus_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$hapus_berhasil.'</span>'.
					'</div>';
				}
				?>
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/referensipsb">Referensi PSB</a></li>
						<li class="active">Kelompok</li>
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
								<center><h4 class="panel-title"><strong>Kelompok</strong></h4></center>
							</div>
							<div class="panel-body">									
								<div class=col-md-3></div>
								<div class=col-md-9>
									<form class="form-horizontal" action="<?php echo base_url(); ?>admin/referensi_kelompok" method="POST">
										<div class="form-group">
											<label class="control-label col-lg-2">Lembaga</label>
											<div class="col-lg-5">
												<select class="form-control" name="inputLembaga" id="inputLembaga">
													<?php foreach($_lembaga->result() as $row) {
							                  if ($carilembaga==$row->lembaga) //$lembaga adalah variabel dari proses get || $row->lembaga adalah isi dari $_lembaga
							                  echo '<option selected>'.$row->lembaga.'</option>';
							                  else
							                  	echo '<option>'.$row->lembaga.'</option>';
							              } ?>
							          </select>
							      </div>
							  </div>
							  <div id="select_prosespenerimaan"></div>
							  <div class="form-group">
							  	<label class="control-label col-lg-3"></label>
							  	<div class="col-lg-8">
							  		<button type="submit" class="btn btn-primary btn-lg"><i class="icon-search4"></i> Cari Kelompok</button>
							  	</div>
							  </div>
							</form>
						</div>
						<div class="text-right">
							<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_kelompok"> <i class="icon-plus-circle2"></i> Tambah Kelompok</button>
							<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
						</div>
						<table class="table table-bodered table striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kelompok</th>
									<th>Kode Kelompok</th>
									<th>Kapasitas</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Selesai</th>
									<th>Keterangan</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if($status==1) {
									$no='1';
									foreach($query->result() as $row) { ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $row->kelompok; ?></td>
										<td><?php echo $row->kodekelompok; ?></td>
										<td><?php echo $row->kapasitas; ?></td>
										<td><?php echo $row->tglmulai; ?></td>
										<td><?php echo $row->tglselesai; ?></td>
										<td><?php echo $row->keterangan; ?></td>
										<td>
											
											<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_kelompok<?php echo $row->idkelompok; ?>"><i class="icon-pencil"></i></button>
											<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_kelompok<?php echo $row->idkelompok; ?>"><i class="icon-trash"></i></button>

											<!-- Modal Update Kelompok -->
											<div id="update_kelompok<?php echo $row->idkelompok; ?>" class="modal fade">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bg-primary">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h6 class="modal-title">Update Kelompok</h6>
														</div>
														<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatekelompok/'.$row->idkelompok; ?>" method="POST">
															<div class="modal-body">
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Lembaga <span style="color: red">*</span></label>
																	<div class="col-lg-6">
																		<input type="text" class="form-control" name="" value="<?php echo $carilembaga; ?>" readonly required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Penerimaan <span style="color: red">*</span></label>
																	<div class="col-lg-6">
																		<input type="text" class="form-control" name="inputProsesPenerimaan" value="<?php echo $cariproses; ?>" readonly required>
																		<input type="hidden" class="form-control" name="inputIdProsesPenerimaan" value="<?php echo $row->idprosespenerimaan; ?>" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Kelompok <span style="color: red">*</span></label>
																	<div class="col-lg-6">
																		<input type="text" class="form-control" name="inputKelompok" value="<?php echo $row->kelompok ?>" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Kode Kelompok <span style="color: red">*</span></label>
																	<div class="col-lg-2">
																		<input type="text" class="form-control" name="inputKodeKelompok" value="<?php echo $row->kodekelompok ?>" required>
																	</div>
																	<span>Kode Kelompok digunakan untuk kode gelombang pada nomor registrasi calon siswa</span>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Kapasitas <span style="color: red">*</span></label>
																	<div class="col-lg-6">
																		<input type="text" class="form-control" name="inputKapasitas" value="<?php echo $row->kapasitas ?>" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Tanggal Mulai <span style="color: red">*</span></label>
																	<div class="col-lg-6">
																		<input type="date" class="form-control" name="inputTanggalMulai" value="<?php echo $row->tglmulai ?>" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Tanggal Selesai <span style="color: red">*</span></label>
																	<div class="col-lg-6">
																		<input type="date" class="form-control" name="inputTanggalSelesai" value="<?php echo $row->tglselesai ?>" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="col-lg-2"></div>
																	<label class="control-label col-lg-2">Keterangan</label>
																	<div class="col-lg-6">
																		<textarea class="form-control" name="inputKeterangan"><?php echo $row->keterangan ?></textarea>
																	</div>
																</div>
																
															</div>

															<div class="modal-footer">
																<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
																<button type="submit" class="btn btn-primary">Simpan</button>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- /Modal Update Kelompok -->
											<!-- Modal Hapus-->
											<div id="hapus_kelompok<?php echo $row->idkelompok; ?>" class="modal fade">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bg-danger">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Hapus Data Kelompok</h4>
														</div>
														<div class="modal-body">
															<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Kelompok <?php echo $row->kelompok; ?> ?</h5>
														</div>
														<div class="modal-footer">
															<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapuskelompok/'.$row->idkelompok; ?>">Ya</a>
															<button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
														</div>
													</div>
												</div>
											</div>
											<!-- /Modal Hapus-->


										</td>
									</tr>
									<?php $no++; } }?>
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal Tambah Kelompok -->
			<div id="modal_tambah_kelompok" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header bg-primary">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h6 class="modal-title">Tambah Kelompok</h6>
						</div>
						<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahkelompok" method="POST">
							<div class="modal-body">
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Lembaga <span style="color: red">*</span></label>
									<div class="col-lg-6">
										<input type="text" class="form-control" name="" value="<?php echo $carilembaga; ?>" readonly required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Penerimaan <span style="color: red">*</span></label>
									<div class="col-lg-6">
										<input type="text" class="form-control" name="inputProsesPenerimaan" value="<?php echo $cariproses; ?>" readonly required>
										<input type="hidden" class="form-control" name="inputIdProsesPenerimaan" value="<?php echo $idproses; ?>" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Kelompok <span style="color: red">*</span></label>
									<div class="col-lg-6">
										<input type="text" class="form-control" name="inputKelompok" value="" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Kode Kelompok <span style="color: red">*</span></label>
										<div class="col-lg-2">
											<input type="text" class="form-control" name="inputKodeKelompok" value="" required>
										</div>
										<span>Kode Kelompok digunakan untuk kode gelombang pada nomor registrasi calon siswa</span>
									</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Kapasitas <span style="color: red">*</span></label>
									<div class="col-lg-6">
										<input type="text" class="form-control" name="inputKapasitas" value="" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Tanggal Mulai <span style="color: red">*</span></label>
									<div class="col-lg-6">
										<input type="date" class="form-control" name="inputTanggalMulai" value="" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Tanggal Selesai <span style="color: red">*</span></label>
									<div class="col-lg-6">
										<input type="date" class="form-control" name="inputTanggalSelesai" value="" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-2"></div>
									<label class="control-label col-lg-2">Keterangan</label>
									<div class="col-lg-6">
										<textarea class="form-control" name="inputKeterangan" value=""></textarea>
									</div>
								</div>
								
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /Modal Tambah Kelompok -->

			<script type="text/javascript"> 
				$(document).ready(function(){ 
					$("#inputLembaga").change(function(){ 
						var lembaga = $("#inputLembaga").val(); 
						$.ajax({ 
							type	: 'GET', 
							url	: "<?php echo base_url(); ?>admin/referensi_kelompok", 
							data	: "lembaga="+lembaga, 
							cache	: false, 
							success	: function(data){ 
								$("#select_prosespenerimaan").html(data); 
							} 
						}); 
					}).change(); 
				}); 
			</script>

			<!-- Footer -->
			<?php require_once('layout/footer.php'); ?>
<!-- /footer -->