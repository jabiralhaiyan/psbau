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
				if ($tambah_lembaga_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tambah_lembaga_berhasil.'</span>'.
					'</div>';
				}
				if ($update_lembaga_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_lembaga_berhasil.'</span>'.
					'</div>';
				}
				if ($hapus_lembaga_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$hapus_lembaga_berhasil.'</span>'.
					'</div>';
				}
				if ($urutan_sudah_ada)
				{
					echo '<div class="alert bg-warning alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$urutan_sudah_ada.'</span>'.
					'</div>';
				}
				?>
				<h4><span class="text-semibold">Home</span>
				</div>

				<div class="breadcrumb-line">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
						<li><a href="<?php echo base_url(); ?>admin/referensipsb">Referensi PSB</a></li>
						<li class="active">Lembaga</li>
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
								<center><h4 class="panel-title"><strong>Lembaga</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_lembaga"> <i class="icon-plus-circle2"></i> Tambah Lembaga</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Lembaga</th>
											<th>Keterangan</th>
											<th>Aktif</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($query->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->lembaga; ?></td>
											<td><?php echo $row->keterangan; ?></td>
											<td>
												<?php if($row->aktif == '1') { ?>
												<a type="button" class="btn btn-success btn-xs" href="<?php echo base_url().'admin/do_pasiflembaga/'.$row->idlembaga; ?>">
													<i class="fa fa-thumbs-up"></i>
												</a>
												<?php }
												else { ?>
													<a type="button" class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/do_aktiflembaga/'.$row->idlembaga; ?>">
													<i class="fa fa-thumbs-down"></i>
												</a>
												<?php } ?>
											</td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_lembaga<?php echo $row->idlembaga; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_lembaga<?php echo $row->idlembaga; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Lembaga -->
												<div id="update_lembaga<?php echo $row->idlembaga; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Lembaga</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatelembaga/'.$row->idlembaga; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Lembaga <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputLembaga" value="<?php echo $row->lembaga; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputUrutan" value="<?php echo $row->urutan; ?>" readonly required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Keterangan</label>
																		<div class="col-lg-6">
																			<textarea class="form-control" name="inputKeterangan"><?php echo $row->keterangan; ?></textarea>
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-primary">Update</button>
																</div>
															</form>
														</div>
													</div>
												</div>
												<!-- /Modal Tambah Lembaga -->

												<!-- Modal Hapus-->
												<div id="hapus_lembaga<?php echo $row->idlembaga; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Lembaga</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Lembaga <?php echo $row->lembaga; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapuslembaga/'.$row->idlembaga; ?>">Ya</a>
																<button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
															</div>
														</div>
													</div>
												</div>
												<!-- /Modal Hapus-->
											</td>
										</tr>
										<?php $no++; } ?>
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>

				<!-- Modal Tambah Lembaga -->
				<div id="modal_tambah_lembaga" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Lembaga</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahlembaga" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Lembaga <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputLembaga" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputUrutan" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Keterangan</label>
										<div class="col-lg-6">
											<textarea class="form-control" name="inputKeterangan"></textarea>
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
				<!-- /Modal Tambah Lembaga -->

				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->