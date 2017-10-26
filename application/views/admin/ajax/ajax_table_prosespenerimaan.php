			                		<div class="text-right">
			                			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah_proses"> <i class="icon-plus-circle2"></i> Tambah Proses</button>

			                			<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
			                		</div>
			                		<table class="table table-bodered table striped">
			                			<thead>
			                				<tr>
			                					<th>No</th>
			                					<th>Proses</th>
			                					<th>Kode Awalan</th>
			                					<th>Keterangan</th>
			                					<th>Aktif</th>
			                					<th class="text-center">Action</th>
			                				</tr>
			                			</thead>
			                			<tbody>
			                				<?php
			                				$no='1';
			                				foreach($query->result() as $row) { ?>
			                				<tr>
			                					<td><?php echo $no; ?></td>
			                					<td><?php echo $row->proses; ?></td>
			                					<td><?php echo $row->kodeawalan; ?></td>
			                					<td><?php echo $row->keterangan; ?></td>
				                				<td>
													<?php if($row->aktif == '1') { ?>
													<a type="button" class="btn btn-success btn-xs" href="<?php echo base_url().'admin/do_pasifproses/'.$row->idprosespenerimaan; ?>">
														<i class="fa fa-thumbs-up"></i>
													</a>
													<?php }
													else { ?>
													
													<form action="<?php echo base_url().'admin/do_aktifproses/'.$row->idprosespenerimaan; ?>" method="POST">
														<input name="inputLembaga" type="hidden" value="<?php echo $row->lembaga; ?>">
														<button type="submit" class="btn btn-danger btn-xs">
															<i class="fa fa-thumbs-down"></i>
														</button>
													</form>
													<?php } ?>
												</td>
			                					<td>
			                						<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#update_proses<?php echo $row->idprosespenerimaan; ?>"> <i class="icon-pencil"></i></button>
			                						<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus_proses<?php echo $row->idprosespenerimaan; ?>"> <i class="icon-trash"></i></button>

			                						<!-- Modal Update Proses Penerimaan -->
			                						<div id="update_proses<?php echo $row->idprosespenerimaan; ?>" class="modal fade">
			                							<div class="modal-dialog">
			                								<div class="modal-content">
			                									<div class="modal-header bg-primary">
			                										<button type="button" class="close" data-dismiss="modal">&times;</button>
			                										<h6 class="modal-title">Update Proses Penerimaan</h6>
			                									</div>
			                									<form class="form-horizontal" action="<?php echo base_url().'admin/do_updateproses/'.$row->idprosespenerimaan; ?>" method="POST">
			                										<div class="modal-body">
			                											<div class="form-group">
			                												<div class="col-lg-2"></div>
			                												<label class="control-label col-lg-2">Lembaga <span style="color: red">*</span></label>
			                												<div class="col-lg-6">
			                													<input type="text" class="form-control" name="inputLembaga" value="<?php echo $carilembaga; ?>" readonly required>
			                												</div>
			                											</div>
			                											<div class="form-group">
			                												<div class="col-lg-2"></div>
			                												<label class="control-label col-lg-2">Nama Proses <span style="color: red">*</span></label>
			                												<div class="col-lg-6">
			                													<input type="text" class="form-control" name="inputProses" value="<?php echo $row->proses; ?>" required>
			                												</div>
			                											</div>
			                											<div class="form-group">
			                												<div class="col-lg-2"></div>
			                												<label class="control-label col-lg-2">Kode Awalan <span style="color: red">*</span></label>
			                												<div class="col-lg-3">
			                													<input type="text" class="form-control" name="inputKodeAwalan" id="inputKodeAwalan" value="<?php echo $row->kodeawalan; ?>" title="Kode Awalan tidak boleh lebih dari 8 karaker !" required>
			                												</div>
			                												<span>Kode Awalan digunakan untuk nomor registrasi awal calon siswa</span>
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
			                											<button type="submit" class="btn btn-primary">Simpan</button>
			                										</div>
			                									</form>
			                								</div>
			                							</div>
			                						</div>
			                						<!-- /Modal Update Penerimaan-->


			                						<!-- Modal Hapus-->
			                						<div id="hapus_proses<?php echo $row->idprosespenerimaan; ?>" class="modal fade">
			                							<div class="modal-dialog">
			                								<div class="modal-content">
			                									<div class="modal-header bg-danger">
			                										<button type="button" class="close" data-dismiss="modal">&times;</button>
			                										<h4 class="modal-title">Hapus Proses Penerimaan</h4>
			                									</div>
			                									<div class="modal-body">
			                										<h5 class="text-semibold mt-5">Apakah Anda yakin ingin menghapus Proses <?php echo $row->proses; ?> ?</h5>
			                									</div>
			                									<div class="modal-footer">
			                										<a type="button" class="btn bg-danger-400" href="<?php echo base_url().'admin/do_hapusproses/'.$row->idprosespenerimaan; ?>">Ya</a>
			                										<button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
			                									</div>
			                								</div>
			                							</div>
			                						</div>
			                						<!-- /Modal Hapus-->

			                					</td>
			                				</tr>
			                				<?php 
			                				$no++;
			                			} ?>
			                		</tbody>
			                	</table>


			                	<!-- Modal Tambah Proses Penerimaan -->
			                	<div id="modal_tambah_proses" class="modal fade">
			                		<div class="modal-dialog">
			                			<div class="modal-content">
			                				<div class="modal-header bg-primary">
			                					<button type="button" class="close" data-dismiss="modal">&times;</button>
			                					<h6 class="modal-title">Tambah Proses Penerimaan</h6>
			                				</div>
			                				<form class="form-horizontal" action="<?php echo base_url(); ?>admin/do_tambahproses" method="POST">
			                					<div class="modal-body">
			                						<div class="form-group">
			                							<div class="col-lg-2"></div>
			                							<label class="control-label col-lg-2">Lembaga <span style="color: red">*</span></label>
			                							<div class="col-lg-6">
			                								<input type="text" class="form-control" name="inputLembaga" value="<?php echo $carilembaga; ?>" readonly required>
			                							</div>
			                						</div>
			                						<div class="form-group">
			                							<div class="col-lg-2"></div>
			                							<label class="control-label col-lg-2">Nama Proses <span style="color: red">*</span></label>
			                							<div class="col-lg-6">
			                								<input type="text" class="form-control" name="inputProses" value="" required>
			                							</div>
			                						</div>
			                						<div class="form-group">
			                							<div class="col-lg-2"></div>
			                							<label class="control-label col-lg-2">Kode Awalan <span style="color: red">*</span></label>
			                							<div class="col-lg-3">
			                								<input type="text" class="form-control" name="inputKodeAwalan" id="inputKodeAwalan" value=""
			                								title="Kode Awalan tidak boleh lebih dari 8 karaker !" required>
			                							</div>
			                							<span>Kode Awalan digunakan untuk aktifasi proses penerimaan</span>
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
			                	<!-- /Modal Tambah Proses Penerimaan-->

			                	<script type='text/javascript'>
			                		$('#inputKodeAwalan').popover({ /*or use any other selector, class, ID*/
			                			placement: "right",
			                			trigger: "hover"
			                		});
			                	</script>