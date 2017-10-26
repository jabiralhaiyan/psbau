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
						<li class="active">Pencarian Siswa</li>
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
								<center><h5 class="panel-title"><strong>Pencarian Siswa</strong></h5></center>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" action="<?php echo base_url(); ?>admin/pencariansiswa" method="POST">
								<div class=col-md-3></div>
								<div class=col-md-9>
									<div class="form-group">
											<label class="control-label col-lg-2">Lembaga</label>
											<div class="col-lg-5">
												<select class="form-control" name="inputLembaga" id="inputLembaga">
													<?php foreach($lembaga->result() as $row) {
														if ($_lembaga==$row->lembaga)
								                          echo '<option selected>'.$row->lembaga.'</option>';
								                    	else
								                          echo '<option>'.$row->lembaga.'</option>';
													} ?>
												</select>
											</div>
										</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Pencarian</label>
										<div class="col-lg-5">
											<select class="form-control" name="inputPencarian" id="inputPencarian">
											<?php
											if($_nopendaftaran !='')
												echo '<option value="nopendaftaran" 	id="nopendaftaran" selected>No. Pendaftaran</option>';
											else 
												echo '<option value="nopendaftaran" 	id="nopendaftaran"	>No. Pendaftaran</option>';
											?>

											<?php if($_nisn !='')	
												echo '<option value="nisn"			id="nisn"		 selected>		NISN</option>';
											else 
												echo '<option value="nisn"			id="nisn"			>		NISN</option>';
											?>

											<?php if($_nama !='')
												echo '<option value="nama"			id="nama"		 selected>		Nama</option>';
												else 
												echo '<option value="nama"			id="nama"			>		Nama</option>';
											?>
											
											<?php if($_panggilan !='')
												echo '<option value="namapanggilan"	id="namapanggilan" selected>		Nama Panggilan</option>';
												else
												echo '<option value="namapanggilan"	id="namapanggilan"	>		Nama Panggilan</option>';
											?>

											<?php if($_agama !='')
												echo '<option value="agama"			id="agama"		 selected>		Agama</option>';
											else
												echo '<option value="agama"			id="agama"			>		Agama</option>';
											?>
											
											<?php if($_suku !='')
												echo '<option value="suku"			id="suku"		 selected>		Suku</option>';
												else 
												echo '<option value="suku"			id="suku"			>		Suku</option>';
											?>

											<?php if($_kondisi !='')
												echo '<option value="kondisi"			id="kondisi"	 selected>		Kondisi Siswa</option>';
											else 
												echo '<option value="kondisi"			id="kondisi"		>		Kondisi Siswa</option>';
											?>

											<?php if($_darah !='')
												echo '<option value="darah"			id="darah"		 selected>		Golongan Darah</option>';
											else
												echo '<option value="darah"			id="darah"			>		Golongan Darah</option>';
											?>

											<?php if($_alamatsiswa !='')
												echo '<option value="alamatsiswa"		id="alamatsiswa" selected>		Alamat Siswa</option>';
												else
												echo '<option value="alamatsiswa"		id="alamatsiswa"	>		Alamat Siswa</option>';
											?>

											<?php if($_asalsekolah !='')
												echo '<option value="asalsekolah"		id="asalsekolah" selected>		Asal Sekolah</option>';
											else
												echo '<option value="asalsekolah"		id="asalsekolah"	>		Asal Sekolah</option>';
											?>
											
											<?php if($_namaayah !='') 
												echo '<option value="namaayah"		id="namaayah"	 selected>		Nama Ayah</option>';
											else
												echo '<option value="namaayah"		id="namaayah"		>		Nama Ayah</option>';
											?>

											<?php if($_namaibu !='')
												echo '<option value="namaibu"			id="namaibu"	 selected>		Nama Ibu</option>';
											else
												echo '<option value="namaibu"			id="namaibu"		>		Nama Ibu</option>';
											?>
											
											<?php if($_alamatortu !='')
												echo '<option value="alamatortu"		id="alamatortu"	 selected>		Alamat Orang Tua</option>';
											else
												echo '<option value="alamatortu"		id="alamatortu"		>		Alamat Orang Tua</option>';
											?>
											</select>
										</div>
									</div>
									<div id="select_data_pencarian"></div>
								</div>
								<center><button type="submit" class="btn btn-primary btn-lg">Cari</button></center>
							</form>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-flat">
							<div class="panel-heading">

							<?php
								if($status==0) { ?>
								<center>
									<h2>Silahkan melakukan Pencarian !!</h2>
								</center>
							<?php } ?>

								<?php if($status==1) { ?>

							<!-- NOTIFIKASI HASIL PENCARIAN -->
							<?php
							if($_nopendaftaran!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' No Pendaftaran '.'<b>'.$_nopendaftaran.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_nisn!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' NISN '.'<b>'.$_nisn.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_nama!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Nama '.'<b>'.$_nama.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_panggilan!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Panggilan '.'<b>'.$_panggilan.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_agama!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Agama '.'<b>'.$_agama.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_suku!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Suku '.'<b>'.$_suku.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_kondisi!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Kondisi '.'<b>'.$_kondisi.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_darah!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Darah '.'<b>'.$_darah.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_alamatsiswa!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Alamat Siswa '.'<b>'.$_alamatsiswa.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_asalsekolah!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Asal Sekolah '.'<b>'.$_asalsekolah.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_namaayah!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Nama Ayah '.'<b>'.$_namaayah.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_namaibu!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Nama Ibu '.'<b>'.$_namaibu.'</b>'; ?> </h3>
							<?php } ?>
							<?php
							if($_alamatortu!='') { ?>
								<h3>Hasil Pencarian Siswa : <?php echo '<b>'.$_lembaga.'</b>'.' Alamat Ortu '.'<b>'.$_alamatortu.'</b>'; ?> </h3>
							<?php } ?>

								<!-- <div class="text-right">
									<div class="panel-body">
										<a type="button" class="btn btn-success btn-xs"><i class="icon-file-excel"></i> Cetak Excel</a>
										<a type="button" class="btn btn-warning btn-xs"><i class="icon-printer2"></i> Print</a>
									</div>
								</div> -->
								
								<table class="table datatable-responsive">
									<thead>
										<tr>
											<th>No</th>
											<th>No Daftar</th>
											<th>NISN</th>
											<th>Nama</th>
											<th>Kelompok</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no='1';
										foreach($query->result() as $row) { ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $row->nopendaftaran; ?></td>
												<td><?php echo $row->nisn; ?></td>
												<td><?php echo $row->nama; ?></td>
												<td><?php echo $row->kelompok; ?></td>
												<td class="text-center">
													<a type="button" class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/detailsiswa/'.$row->nopendaftaran; ?>" target="_blank"><i class="icon-search4"></i></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>

								<?php } ?>
							</div>
							
							<!-- /basic datatable -->
						</div>
					</div>
				</div>
			</div>


			<script type="text/javascript"> 
							// nopendaftaran
							$(document).ready(function(){ 
								$("#inputPencarian").change(function(){ 
									var pencarian = $('#inputPencarian option:selected').val();
									$.ajax({ 
											type	: 'GET', 
											url		: "<?php echo base_url(); ?>admin/pencariansiswa", 
											data	: "pencarian="+pencarian,
											cache	: false, 
											success	: function(data){ 
												$("#select_data_pencarian").html(data); 
											} 
										});
								}).change(); 
							});

						</script>

			<!-- Footer -->
			<?php require_once('layout/footer.php'); ?>
<!-- /footer -->