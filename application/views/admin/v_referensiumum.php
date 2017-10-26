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
				if ($tambah_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$tambah_berhasil.'</span>'.
					'</div>';
				}
				if ($update_berhasil)
				{
					echo '<div class="alert bg-success alert-styled-left">'.
					'<button type="button" class="close" data-dismiss="alert">'.
					'<span>'.'&times;'.'</span>'.
					'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
					'<span class="text-semibold">'.$update_berhasil.'</span>'.
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
						<li><a href="#">Referensi</a></li>
						<li class="active">Referensi Umum</li>
					</ul>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<div class="row">
					<!--AGAMA-->
					<div class="col-lg-6">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Agama</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_agama"> <i class="icon-plus-circle2"></i> Tambah Agama</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Agama</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($queryagama->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->agama; ?></td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_agama<?php echo $row->idagama; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_agama<?php echo $row->idagama; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Agama -->
												<div id="update_agama<?php echo $row->idagama; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Agama</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updateagama/'.$row->idagama; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Agama <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputAgama" value="<?php echo $row->agama; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputUrutan" value="<?php echo $row->urutan; ?>" readonly required>
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
												<!-- /Modal Update Agama -->

												<!-- Modal Hapus-->
												<div id="hapus_agama<?php echo $row->idagama; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Agama</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Agama <?php echo $row->agama; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapusagama/'.$row->idagama; ?>">Ya</a>
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
					<!--AGAMA-->

					<!--PENGHASILAN-->
					<div class="col-lg-6">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Penghasilan</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_penghasilan"> <i class="icon-plus-circle2"></i> Tambah Penghasilan</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Penghasilan</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($querypenghasilan->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->penghasilan; ?></td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_penghasilan<?php echo $row->idpenghasilan; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_penghasilan<?php echo $row->idpenghasilan; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Penghasilan -->
												<div id="update_penghasilan<?php echo $row->idpenghasilan; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Penghasilan</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatepenghasilan/'.$row->idpenghasilan; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Penghasilan <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputPenghasilan" value="<?php echo $row->penghasilan; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputUrutan" value="<?php echo $row->urutan; ?>" readonly required>
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
												<!-- /Modal Update Penghasilan -->

												<!-- Modal Hapus-->
												<div id="hapus_penghasilan<?php echo $row->idpenghasilan; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Penghasilan</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Penghasilan <?php echo $row->penghasilan; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapuspenghasilan/'.$row->idpenghasilan; ?>">Ya</a>
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
					<!--/PENGHASILAN-->

					<!--KONDISI SISWA-->
					<div class="col-lg-6">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Kondisi Siswa</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_kondisi"> <i class="icon-plus-circle2"></i> Tambah Kondisi Siswa</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Kondisi</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($querykondisi->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->kondisi; ?></td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_kondisi<?php echo $row->idkondisi; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_kondisi<?php echo $row->idkondisi; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Kondisi -->
												<div id="update_kondisi<?php echo $row->idkondisi; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Kondisi</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatekondisi/'.$row->idkondisi; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Kondisi Siswa <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputKondisi" value="<?php echo $row->kondisi; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputUrutan" value="<?php echo $row->urutan; ?>" readonly required>
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
												<!-- /Modal Update Kondisi -->

												<!-- Modal Hapus-->
												<div id="hapus_kondisi<?php echo $row->idkondisi; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Kondisi</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Kondisi <?php echo $row->kondisi; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapuskondisi/'.$row->idkondisi; ?>">Ya</a>
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
					<!--/KONDISI SISWA-->

					<!--STATUS ORTU-->
					<div class="col-lg-6">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Status Ortu</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_statusortu"> <i class="icon-plus-circle2"></i> Tambah Status Ortu</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Status Ortu</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($querystatusortu->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->statusortu; ?></td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_statusortu<?php echo $row->idstatusortu; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_statusortu<?php echo $row->idstatusortu; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Status Ortu -->
												<div id="update_statusortu<?php echo $row->idstatusortu; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Status Ortu</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatestatusortu/'.$row->idstatusortu; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Status Ortu <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputStatusOrtu" value="<?php echo $row->statusortu; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputUrutan" value="<?php echo $row->urutan; ?>" readonly required>
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
												<!-- /Modal Update Status Ortu -->

												<!-- Modal Hapus-->
												<div id="hapus_statusortu<?php echo $row->idstatusortu; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Status Ortu</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Status Ortu <?php echo $row->statusortu; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapusstatusortu/'.$row->idstatusortu; ?>">Ya</a>
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
					<!--/STATUS ORTU-->

					

					<!--TINGKAT PENDIDIKAN-->
					<div class="col-lg-6">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Tingkat Pendidikan</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_pendidikan"> <i class="icon-plus-circle2"></i> Tambah Tingkat Pendidikan</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Pendidikan</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($querypendidikan->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->pendidikan; ?></td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_pendidikan<?php echo $row->idpendidikan; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_pendidikan<?php echo $row->idpendidikan; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Tingkat Pendidikan -->
												<div id="update_pendidikan<?php echo $row->idpendidikan; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Tingkat Pendidikan</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatependidikan/'.$row->idpendidikan; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Tingkat Pendidikan <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputPendidikan" value="<?php echo $row->pendidikan; ?>" required>
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
												<!-- /Modal Update Tingkat Pendidikan -->

												<!-- Modal Hapus-->
												<div id="hapus_pendidikan<?php echo $row->idpendidikan; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Tingkat Pendidikan</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Tingkat Pendidikan <?php echo $row->pendidikan; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapuspendidikan/'.$row->idpendidikan; ?>">Ya</a>
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
					<!--/TINGKAT PENDIDIKAN-->

					<!--SUKU-->
					<div class="col-lg-6">
						<div class="panel panel-flat">
							<div class="panel-heading">
								<center><h4 class="panel-title"><strong>Suku</strong></h4></center>
							</div>
							<div class="panel-body">
								<div class="text-right">

									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_suku"> <i class="icon-plus-circle2"></i> Tambah Suku</button>

									<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
								</div>
								<table class="table table-bodered table striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Suku</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = '1';
										foreach($querysuku->result() as $row)
											{ ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->suku; ?></td>
											<td>
												<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_suku<?php echo $row->idsuku; ?>"><i class="icon-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_suku<?php echo $row->idsuku; ?>"><i class="icon-trash"></i></button>
												
												<!-- Modal Update Suku -->
												<div id="update_suku<?php echo $row->idsuku; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-primary">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h6 class="modal-title">Update Suku</h6>
															</div>
															<form class="form-horizontal" action="<?php echo base_url().'admin/do_updatesuku/'.$row->idsuku; ?>" method="POST">
																<div class="modal-body">
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Suku <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputSuku" value="<?php echo $row->suku; ?>" required>
																		</div>
																	</div>
																	<div class="form-group">
																		<div class="col-lg-2"></div>
																		<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
																		<div class="col-lg-6">
																			<input type="text" class="form-control" name="inputUrutan" value="<?php echo $row->urutan; ?>" readonly required>
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
												<!-- /Modal Update Suku -->

												<!-- Modal Hapus-->
												<div id="hapus_suku<?php echo $row->idsuku; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Suku</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Suku <?php echo $row->suku; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapussuku/'.$row->idsuku; ?>">Ya</a>
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
					<!--/SUKU-->

					

					

					

					
					



				</div>























				<!-- Modal Tambah Agama -->
				<div id="modal_tambah_agama" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Agama</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahagama" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Agama <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputAgama" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputUrutan" required>
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
				<!-- /Modal Tambah Agama -->
				<!-- Modal Tambah Suku -->
				<div id="modal_tambah_suku" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Suku</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahsuku" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Suku <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputSuku" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputUrutan" required>
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
				<!-- /Modal Tambah Suku -->
				<!-- Modal Tambah Kondisi -->
				<div id="modal_tambah_kondisi" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Kondisi Siswa</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahkondisi" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Kondisi Siswa <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputKondisi" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputUrutan" required>
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
				<!-- /Modal Tambah Kondisi -->
				<!-- Modal Tambah Status Ortu -->
				<div id="modal_tambah_statusortu" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Status Ortu</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahstatusortu" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Status Ortu <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputStatusOrtu" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputUrutan" required>
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
				<!-- /Modal Tambah Status Ortu -->
				<!-- Modal Tambah Tingkat Pendidikan-->
				<div id="modal_tambah_pendidikan" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Tingkat Pendidikan</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahpendidikan" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Tingkat Pendidikan <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputPendidikan" required>
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
				<!-- /Modal Tambah Status Ortu -->
				<!-- Modal Tambah Penghasilan -->
				<div id="modal_tambah_penghasilan" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title">Tambah Penghasilan</h6>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahpenghasilan" method="POST">
								<div class="modal-body">
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Penghasilan <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputPenghasilan" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-2"></div>
										<label class="control-label col-lg-2">Urut <span style="color: red">*</span></label>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="inputUrutan" required>
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
				<!-- /Modal Tambah Status Ortu -->

				<!-- Footer -->
				<?php require_once('layout/footer.php'); ?>
<!-- /footer -->