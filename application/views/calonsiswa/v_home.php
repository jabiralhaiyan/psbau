<?php
require_once('layout/head.php');
require_once('layout/menuuser.php');
?>


<div class="container">

	<div class="row">
		<?php
		if ($ganti_password_berhasil) 
			echo '<div class="alert alert-dismissible alert-success">'.'<center>'.'<strong>'.$ganti_password_berhasil.'</strong>'.'</center>'.'</div>';
		?>

		<legend><h3><strong>Pendaftaran PSB</strong></h3></legend>
		<div class="col-md-6">

			<!--<div class="jumbotron">-->
			<table class="table table-striped table-hover ">
				<tbody>
					<tr>
						<td class="success" style="width: 150px;font-size: 14px;">Nama Siswa</td>
						<td style="font-size: 14px"><?php echo ($nama ? $nama : ""); ?></td>
					</tr>
					<tr>
						<td class="success" style="font-size: 14px">NISN</td>
						<td style="font-size: 14px"><?php echo ($nisn ? $nisn : ""); ?></td>
					</tr>
					<tr>
						<td class="success" style="font-size: 14px">Nomor UN</td>
						<td style="font-size: 14px"><?php echo ($noun ? $noun : ""); ?></td>
					</tr>
				</tbody>
			</table>
			<!--</div>-->

			<?php
			if ($statusdaftar == '1' || $statusdaftar == 'y')
			{
				echo '<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Status Pendaftaran</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover ">
						<tbody>
							<tr>
								<td style="font-size: 14px">Finalisasi</td>';
								if($statusfinalisasi == '' || $statusfinalisasi == 'n')
									echo '<td style="font-size: 16px"><span class="label label-danger">Belum Difinalisasi</span></td>';
								else if ($statusfinalisasi == '1' || $statusfinalisasi == 'y')
									echo '<td style="font-size: 16px"><span class="label label-success">Sudah Difinalisasi</span></td>';
								echo'	
							</tr>
							<tr>
								<td style="font-size: 14px">Nomor Pendaftaran</td>
								<td style="font-size: 14px">'.$nopendaftaran.'</td>
							</tr>';
							
							if($statusfinalisasi == '' || $statusfinalisasi == '0' || $statusfinalisasi == 'n')
							{
								echo'
								<tr>
									<td style="font-size: 14px">Pilih Tombol</td>
									<td><a type="button" class="btn btn-warning btn-sm" href="'.base_url().'pendaftaran/finalisasi">Finalisasi Pendaftaran</a></td>
								</tr>';
							}
							else if ($statusfinalisasi == '1' || $statusfinalisasi == 'y')
							{
								echo'
								<tr>
									<td><a type="button" class="btn btn-success" href="'.base_url().'pendaftaran/finalisasi">Lihat Pendaftaran</a></td>
									<td><a type="button" class="btn btn-warning" href="'.base_url().'pendaftaran/cetakbukti" target="_blank">Cetak Bukti Pendaftaran</a></td>
								</tr>';
							}
							echo'	
						</tbody>
					</table>
				</div>
			</div>';
		}
		?>

		<?php
		if($statusdaftar == '' || $statusdaftar == '0' || $statusdaftar == 'n')
		{ 
			echo '<p>Silahkan memulai pendaftaran Anda dengan mengisi</p>
			<a type="button" class="btn btn-primary btn-lg" href="'.base_url().'pendaftaran/unggahfoto">Formulir Pendaftaran</a>';
		}

		?>
	</div>

	<div class="col-md-6">
		<h4>Tahapan Pendaftaran</h4>
		<ol>
			<li>Siswa membuat akun pendaftaran PSB</li>
			<li>Siswa mengisi form pendaftaran PSB secara lengkap</li>
			<li>Siswa memfinalisasi pendaftaran PSB (pendaftaran tidak dapat diubah lagi)</li>
			<li>Siswa memperoleh nomor pendaftaran PSB dan mencetak bukti pendaftaran dengan ukuran kertas A4</li>
			<li>Siswa membayar biaya pendaftaran PSB ke nomor rekening yang sudah disediakan dan melakukan konfirmasi via sms</li>
			<li>Siswa membawa bukti pendaftaran dan bukti pembayaran untuk ditunjukkan saat cek registrasi sebelum test</li>
			<li>Siswa melakukan test pada hari dan jadwal yang sudah ditentukan</li>
			<li>Siswa melihat hasil pengumuman di official website</li> 
		</ol>
		<br><br>
		<h4>Persyaratan Pendaftaran</h4>
		<ol>
			<li>Siswa Mts/SMP yang lulus pada tahun 2017 dan mengikuti UN tahun 2017 atau 2016</li>
			<li>Memiliki Nomor Induk Siswa Nasional (NISN) yang sudah terdaftar</li>
		</ol>
	</div>
</div>
</div>

<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 