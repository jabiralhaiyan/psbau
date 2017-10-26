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
					    if ($tambah_admin_berhasil)
					    {
					    	echo '<div class="alert bg-success alert-styled-left">'.
							'<button type="button" class="close" data-dismiss="alert">'.
							'<span>'.'&times;'.'</span>'.
							'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
							'<span class="text-semibold">'.$tambah_admin_berhasil.'</span>'.
					    '</div>';
					    }
					    if ($update_admin_berhasil)
					    {
					    	echo '<div class="alert bg-success alert-styled-left">'.
							'<button type="button" class="close" data-dismiss="alert">'.
							'<span>'.'&times;'.'</span>'.
							'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
							'<span class="text-semibold">'.$update_admin_berhasil.'</span>'.
					    '</div>';
					    }
					    if ($ubah_password_berhasil)
					    {
					    	echo '<div class="alert bg-success alert-styled-left">'.
							'<button type="button" class="close" data-dismiss="alert">'.
							'<span>'.'&times;'.'</span>'.
							'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
							'<span class="text-semibold">'.$ubah_password_berhasil.'</span>'.
					    '</div>';
					    }
					    if ($hapus_admin_berhasil)
					    {
					    	echo '<div class="alert bg-success alert-styled-left">'.
							'<button type="button" class="close" data-dismiss="alert">'.
							'<span>'.'&times;'.'</span>'.
							'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
							'<span class="text-semibold">'.$hapus_admin_berhasil.'</span>'.
					    '</div>';
					    }
					    if ($username_sudah_ada)
					    {
					    	echo '<div class="alert bg-warning alert-styled-left">'.
							'<button type="button" class="close" data-dismiss="alert">'.
							'<span>'.'&times;'.'</span>'.
							'<span class="sr-only">'.'Close'.'</span>'.'</button>'.
							'<span class="text-semibold">'.$username_sudah_ada.'</span>'.
					    '</div>';
					    }

					    ?>
							<h4><span class="text-semibold">Home</span>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Data Admin</li>
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
									<center><h4 class="panel-title"><strong>Data Admin</strong></h4></center>
			                	</div>
			                	<div class="panel-body">
			                	<div class="text-right">
			                		<a type="button" href="<?php echo base_url(); ?>admin/tambahadmin" class="btn btn-primary"><i class="icon-plus-circle2"></i> Tambah Admin</a>
									</div>
									<table class="table table-bodered table striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Username</th>
												<th>Nama</th>
												<th>Email</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no=1; 
											foreach($query->result() as $row) {
											?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $row->username; ?></td>
												<td><?php echo $row->nama; ?></td>
												<td><?php echo $row->email; ?></td>
												<td>
												<a type="button" href="<?php echo base_url().'admin/updateadmin/'.$row->username; ?>" class="btn btn-warning btn-xs"><i class="icon-pencil"></i></a>
												<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_admin<?php echo $row->username; ?>"><i class="icon-trash"></i></button>

												<!-- Modal Hapus-->
												<div id="hapus_admin<?php echo $row->username; ?>" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header bg-danger">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Hapus Data Admin</h4>
															</div>
															<div class="modal-body">
																<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Admin dengan Username <?php echo $row->username; ?> ?</h5>
															</div>
															<div class="modal-footer">
																<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapusadmin/'.$row->username; ?>">Ya</a>
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

<!-- Footer -->
<?php require_once('layout/footer.php'); ?>
<!-- /footer -->