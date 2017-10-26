<?php
require_once('layout/head.php');
require_once('layout/menuuser.php');

if($statusfinalisasi == '' || $statusfinalisasi == '0' || $statusfinalisasi == 'n')
	require_once('layout/stepbystep.php');
?> 

<div class="container">

	<div class="page-header">
		<h2><strong>Pendaftaran PSB</strong></h2>
	</div>
	
	<br>
	<div class="row">
		
		<!--Left Sidebar-->
		<div class="col-md-4">
			<legend>Status Pendaftaran</legend>
			<div>
				<?php
				if($statusfinalisasi == '' || $statusfinalisasi == '0' || $statusfinalisasi == 'n')
				{
					echo '<table class="table table-striped table-hover ">
					<tbody>
						<tr>
							<td class="success">Finalisasi Pendaftaran</td>
							<td><a href="'.base_url().'pendaftaran/konfirmasi" class="btn btn-primary btn-block" style="font-size:18px"><strong>Finalisasi Pendaftaran</strong></a></td>
						</tr>
						<tr>
							<td class="success"></td>
							<td class="active" style="font-size: 14px">Setelah difinalisasi, pendaftaran tidak dapat diubah lagi</td>
						</tr>
					</tbody>
				</table>';
			}
			else if($statusfinalisasi == '1' || $statusfinalisasi == 'y')
			{
				echo '<table class="table table-striped table-hover ">
				<tbody>
					<tr>
						<td class="success">Finalisasi Pendaftaran</td>
						<td><span class="label label-success" style="font-size: 12px">Sudah Difinalisasi</span></td>
					</tr>
					<tr>
						<td class="success">Nomor Pendaftaran</td>
						<td class="active" style="font-size: 14px">'.$nopendaftaran.'</td>
					</tr>
				</tbody>
			</table>';
		}

		?>
	</div>

	<?php
	if($statusfinalisasi == '' || $statusfinalisasi == '0' || $statusfinalisasi == 'n')
	{
		echo '<div class="pull-right">
		<a href="'.base_url().'pendaftaran/formpendaftaran" class="btn btn-warning">Ubah Pendaftaran</a>
	</div>';
}
?>

<br><br><br><br>
<div class="col-md-6">
	Pastikan foto anda adalah foto close up berwarna dengan wajah terlihat jelas dan pakaian rapi
</div>
<div class="col-md-6">
	<img src="
	<?php 
	if($foto == NULL){
		echo base_url().'assets/img/default-foto.png'; 
	}
	else
	{
		echo base_url().'assets/profpic/'.$foto;
	}
	?>" width="150px" height="175px">
</div>
</div>
<!--/Left Sidebar-->


<div class="col-md-8">
	
	<div class="alert alert-dismissible alert-warning">
		<?php
		if ($anakke_kosong || $jumlah_saudara_kosong || $desa_kosong || $rt_kosong || $rw_kosong || $kecamatan_kosong || $kota_kosong || $provinsi_kosong || $kodepos_kosong || $jarak_kosong || $ukuranbaju_kosong || $ukurancelana_kosong || $alamatortu_kosong
			)
		{
			echo '<p>Anda belum mengisi data-data dibawah ini. Pengisian ini tidak wajib, tapi sangat disarankan untuk melengkapinya. Silahkan pilih tombol <b>Ubah Pendaftaran</b> untuk melengkapi data.</p><br>';
			if ($anakke_kosong) echo '<strong>'.$anakke_kosong.'</strong>'.'<br>';
			if ($jumlah_saudara_kosong) echo '<strong>'.$jumlah_saudara_kosong.'</strong>'.'<br>';
			if ($desa_kosong) echo '<strong>'.$desa_kosong.'</strong>'.'<br>';
			if ($rt_kosong) echo '<strong>'.$rt_kosong.'</strong>'.'<br>';
			if ($rw_kosong) echo '<strong>'.$rw_kosong.'</strong>'.'<br>';
			if ($kecamatan_kosong) echo '<strong>'.$kecamatan_kosong.'</strong>'.'<br>';
			if ($kota_kosong) echo '<strong>'.$kota_kosong.'</strong>'.'<br>';
			if ($provinsi_kosong) echo '<strong>'.$provinsi_kosong.'</strong>'.'<br>';
			if ($kodepos_kosong) echo '<strong>'.$kodepos_kosong.'</strong>'.'<br>';
			if ($jarak_kosong) echo '<strong>'.$jarak_kosong.'</strong>'.'<br>';
			if ($ukuranbaju_kosong) echo '<strong>'.$ukuranbaju_kosong.'</strong>'.'<br>';
			if ($ukurancelana_kosong) echo '<strong>'.$ukurancelana_kosong.'</strong>'.'<br>';
			if ($alamatortu_kosong) echo '<strong>'.$alamatortu_kosong.'</strong>'.'<br>';
		}
		?>
	</div>
	
	<table class="table table-striped table-hover table-responsive">
		<thead>
			<tr>
				<th style="width:120px"></th>
				<th style="width:120px"></th>
				<th style="width:120px"></th>
				<th style="width:120px"></th>
				<th style="width:120px"></th>
				<th style="width:120px"></th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th style="font-size:16px" colspan="6">Data Penerimaan Calon Siswa</th>
			</tr>
			<tr>
				<td>No. Pendaftaran</td>
				<td colspan="5"><?php echo ($nopendaftaran ? $nopendaftaran : "");?></td>
			</tr>
			<tr>
				<td>Lembaga</td>
				<td colspan="5"><?php echo ($lembaga ? $lembaga : "");?></td>
			</tr>
			<tr>
				<td>Kelompok</td>
				<td colspan="5"><?php echo ($kelompok ? $kelompok : "");?></td>
				
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td colspan="5"><?php echo ($tahunmasuk ? $tahunmasuk : "");?></td>
				
			</tr>

			<tr>
				<th style="font-size:16px" colspan="6">Data Pribadi Calon Siswa</th>
			</tr>
			<tr>
				<td>NISN</td>
				<td colspan="5"><?php echo ($nisn ? $nisn : "");?></td>
			</tr>
			<tr>
				<td>No. UN Sebelumnya</td>
				<td colspan="5"><?php echo ($noun ? $noun : "");?></td>
			</tr>
			<tr>
				<td>No. KK</td>
				<td colspan="5"><?php echo ($nokk ? $nokk : "");?></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td colspan="5"><?php echo ($nik ? $nik : "");?></td>
			</tr>
			<tr>
				<td>No. Akta</td>
				<td colspan="5"><?php echo ($noakta ? $noakta : "");?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td colspan="5"><?php echo ($nama ? $nama : "");?></td>
			</tr>
			<tr>
				<td>Panggilan</td>
				<td colspan="5"><?php echo ($panggilan ? $panggilan : "");?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td colspan="5"><?php echo ($jeniskelamin ? $jeniskelamin : "");?></td>
				
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td colspan="5"><?php echo ($tmplahir ? $tmplahir : "");?></td>
				
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td colspan="5"><?php echo ($tgllahir ? $tgllahir : "");?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td colspan="5"><?php echo ($agama ? $agama : "");?></td>
				
			</tr>
			<tr>
				<td>Suku</td>
				<td colspan="5"><?php echo ($suku ? $suku : "");?></td>
				
			</tr>
			<tr>
				<td>Kondisi</td>
				<td colspan="5"><?php echo ($kondisi ? $kondisi : "");?></td>
				
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td colspan="5"><?php echo ($warga ? $warga : "");?></td>
			</tr>
			<tr>
				<td>Anak Ke</td>
				<td colspan="5"><?php echo ($anakke ? $anakke : "");?></td>
				
			</tr>
			<tr>
				<td>Jumlah Saudara</td>
				<td colspan="5"><?php echo ($jsaudara ? $jsaudara : "");?></td>
				
			</tr>
			<tr>
				<td>Alamat Lengkap</td>
				<td colspan="5"><?php echo ($alamatsiswa ? $alamatsiswa : "");?></td>
				
			</tr>
			<tr>
				<td>Desa/Kelurahan</td>
				<td colspan="5"><?php echo ($desa ? $desa : "");?></td>	
			</tr>
			<tr>
				<td></td>
				<td>RT &nbsp &nbsp <?php echo ($rt ? $rt : "");?> &nbsp &nbsp RW &nbsp &nbsp <?php echo ($rw ? $rw : "");?></td>
				<td></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td colspan="5"><?php echo ($kecamatan ? $kecamatan : "");?></td>
			</tr>
			<tr>
				<td>Kab/Kota</td>
				<td colspan="5"><?php echo ($kota ? $kota : "");?></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td colspan="5"><?php echo ($provinsi ? $provinsi : "");?></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td colspan="5"><?php echo ($kodepos ? $kodepos : "");?></td>
			</tr>
			<tr>
				<td>Jarak ke Sekolah</td>
				<td colspan="5"><?php echo ($jarak ? $jarak : "");?> km</td>
			</tr>
			<tr>
				<td>Handphone</td>
				<td colspan="5"><?php echo ($hpsiswa ? $hpsiswa : "");?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td colspan="5"><?php echo ($emailsiswa ? $emailsiswa : "");?></td>
				
			</tr>

			<!--Data Sekolah-->
			<tr>
				<th style="font-size:16px" colspan="6">Data Sekolah Calon Siswa</th>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td colspan="5"><?php echo ($asalsekolah ? $asalsekolah : "");?></td>
				
			</tr>
			<tr>
				<td>No. Ijasah</td>
				<td colspan="5"><?php echo ($noijasah ? $noijasah : "");?></td>
				
			</tr>
			<tr>
				<td>Tanggal Ijasah</td>
				<td colspan="5"><?php echo ($tglijasah ? $tglijasah : "");?></td>
				
			</tr>
			<tr>
				<td>Keterangan</td>
				<td colspan="5"><?php echo ($ketsekolah ? $ketsekolah : "");?></td>
				
			</tr>

			<!--Data Fisik-->
			<tr>
				<th style="font-size:16px" colspan="6">Data Fisik Calon Siswa</th>
			</tr>
			<tr>
				<td>Gol. Darah</td>
				<td colspan="5"><?php echo ($darah ? $darah : "");?></td>
				
			</tr>
			<tr>
				<td>Berat</td>
				<td colspan="5"><?php echo ($berat ? $berat : "");?> kg</td>
				
			</tr>
			<tr>
				<td>Tinggi</td>
				<td colspan="5"><?php echo ($tinggi ? $tinggi : "");?> cm</td>
				
			</tr>
			<tr>
				<td>Ukuran Baju</td>
				<td colspan="5"><?php echo ($ukuranbaju ? $ukuranbaju : "");?></td>
				
			</tr>
			<tr>
				<td>Ukuran Celana</td>
				<td colspan="5"><?php echo ($ukurancelana ? $ukurancelana : "");?></td>
				
			</tr>
			<tr>
				<td>Riwayat Kesehatan</td>
				<td colspan="5"><?php echo ($kesehatan ? $kesehatan : "");?></td>
				
			</tr>


			<!--Data Ortu-->
			<tr>
				<th style="font-size:16px" colspan="6">Data Orangtua Calon Siswa</th>
			</tr>
			<th></th>
			<th style="font-size:12px;" colspan="2">Ayah</th>
			<th style="font-size:12px;" colspan="2">Ibu</th>
		</tr>
		<tr>
			<td>Nama</td>
			<td colspan="2"><?php echo ($namaayah ? $namaayah : "");?></td>
			<td colspan="2"><?php echo ($namaibu ? $namaibu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>NIK/No. KTP</td>
			<td colspan="2"><?php echo ($nikayah ? $nikayah : "");?></td>
			<td colspan="2"><?php echo ($nikibu ? $nikibu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Status</td>
			<td colspan="2"><?php echo ($statusayah ? $statusayah : "");?></td>
			<td colspan="2"><?php echo ($statusibu ? $statusibu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td colspan="2"><?php echo ($tmplahirayah ? $tmplahirayah : "");?></td>
			<td colspan="2"><?php echo ($tmplahiribu ? $tmplahiribu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Tanggal lahir</td>
			<td colspan="2"><?php echo ($tgllahirayah ? $tgllahirayah : "");?></td>
			<td colspan="2"><?php echo ($tgllahiribu ? $tgllahiribu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td colspan="2"><?php echo ($pendidikanayah ? $pendidikanayah : "");?></td>
			<td colspan="2"><?php echo ($pendidikanibu ? $pendidikanibu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td colspan="2"><?php echo ($pekerjaanayah ? $pekerjaanayah : "");?></td>
			<td colspan="2"><?php echo ($pekerjaanibu ? $pekerjaanibu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Penghasilan</td>
			<td colspan="2"><?php echo ($penghasilanayah ? $penghasilanayah : "");?></td>
			<td colspan="2"><?php echo ($penghasilanibu ? $penghasilanibu : "");?></td>
			<td></td>
		</tr>
		<tr>
			<td>Alamat Orangtua</td>
			<td colspan="5"><?php echo ($alamatortu ? $alamatortu : "");?></td>
		</tr>
		<tr>
			<td>Handphone</td>
			<td colspan="5"><?php echo ($hportu ? $hportu : "");?></td>
			
		</tr>


		<!--Informasi Tambahan-->
		<tr>
			<th style="font-size:16px" colspan="6">Informasi Tambahan</th>
		</tr>
		<tr>
			<td>Cita-Cita</td>
			<td colspan="5"><?php echo ($cita ? $cita : "");?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td colspan="5"><?php echo ($hobi ? $hobi : "");?></td>
		</tr>

		<!--Data Nilai Ujian UN-->
		<tr>
			<th style="font-size:16px" colspan="6">Data Nilai Raport</th>
			
		</tr>
		<tr>
						<!--
						<th style="font-size:12px;">&emsp; &emsp; &emsp; &emsp; &emsp; SMT1 &emsp; &emsp; &emsp; &emsp; SMT2</th>
						<th style="font-size:12px;">&emsp; &emsp; &emsp; SMT3 &emsp; &emsp; &emsp; &emsp; &emsp; SMT4</th>
						<th style="font-size:12px;">SMT5</th>
					-->
					<td></td>
					<td><strong>SMT1</strong></td>
					<td><strong>SMT2</strong></td>
					<td><strong>SMT3</strong></td>
					<td><strong>SMT4</strong></td>
					<td><strong>SMT5</strong></td>
				</tr>
				<tr>
					<td>BIN</td>
					<td><?php echo ($binsmt1 ? $binsmt1 : "");?></td>
					<td><?php echo ($binsmt2 ? $binsmt2 : "");?></td>
					<td><?php echo ($binsmt3 ? $binsmt3 : "");?></td>
					<td><?php echo ($binsmt4 ? $binsmt4 : "");?></td>
					<td><?php echo ($binsmt5 ? $binsmt5 : "");?></td>
				</tr>
				<tr>
					<td>BING</td>
					<td><?php echo ($bingsmt1 ? $binsmt1 : "");?></td>
					<td><?php echo ($bingsmt2 ? $binsmt2 : "");?></td>
					<td><?php echo ($bingsmt3 ? $binsmt3 : "");?></td>
					<td><?php echo ($bingsmt4 ? $binsmt4 : "");?></td>
					<td><?php echo ($bingsmt5 ? $binsmt5 : "");?></td>
				</tr>
				<tr>
					<td>MAT</td>
					<td><?php echo ($matsmt1 ? $matsmt1 : "");?></td>
					<td><?php echo ($matsmt2 ? $matsmt2 : "");?></td>
					<td><?php echo ($matsmt3 ? $matsmt3 : "");?></td>
					<td><?php echo ($matsmt4 ? $matsmt4 : "");?></td>
					<td><?php echo ($matsmt5 ? $matsmt5 : "");?></td>
				</tr>
				<tr>
					<td>IPA</td>
					<td><?php echo ($ipasmt1 ? $ipasmt1 : "");?></td>
					<td><?php echo ($ipasmt2 ? $ipasmt2 : "");?></td>
					<td><?php echo ($ipasmt3 ? $ipasmt3 : "");?></td>
					<td><?php echo ($ipasmt4 ? $ipasmt4 : "");?></td>
					<td><?php echo ($ipasmt5 ? $ipasmt5 : "");?></td>
				</tr>
				<tr>
					<td>IPS</td>
					<td><?php echo ($ipssmt1 ? $ipssmt1 : "");?></td>
					<td><?php echo ($ipssmt2 ? $ipssmt2 : "");?></td>
					<td><?php echo ($ipssmt3 ? $ipssmt3 : "");?></td>
					<td><?php echo ($ipssmt4 ? $ipssmt4 : "");?></td>
					<td><?php echo ($ipssmt5 ? $ipssmt5 : "");?></td>
				</tr>
				<tr>
					<td>AGAMA</td>
					<td><?php echo ($agamasmt1 ? $agamasmt1 : "");?></td>
					<td><?php echo ($agamasmt2 ? $agamasmt2 : "");?></td>
					<td><?php echo ($agamasmt3 ? $agamasmt3 : "");?></td>
					<td><?php echo ($agamasmt4 ? $agamasmt4 : "");?></td>
					<td><?php echo ($agamasmt5 ? $agamasmt5 : "");?></td>
				</tr>
				<tr>
					<td>PPKN</td>
					<td><?php echo ($ppknsmt1 ? $ppknsmt1 : "");?></td>
					<td><?php echo ($ppknsmt2 ? $ppknsmt2 : "");?></td>
					<td><?php echo ($ppknsmt3 ? $ppknsmt3 : "");?></td>
					<td><?php echo ($ppknsmt4 ? $ppknsmt4 : "");?></td>
					<td><?php echo ($ppknsmt5 ? $ppknsmt5 : "");?></td>
				</tr>
				<tr>
					<td>PENJAS</td>
					<td><?php echo ($penjassmt1 ? $penjassmt1 : "");?></td>
					<td><?php echo ($penjassmt2 ? $penjassmt2 : "");?></td>
					<td><?php echo ($penjassmt3 ? $penjassmt3 : "");?></td>
					<td><?php echo ($penjassmt4 ? $penjassmt4 : "");?></td>
					<td><?php echo ($penjassmt5 ? $penjassmt5 : "");?></td>
				</tr>
				<tr>
					<td>SENI</td>
					<td><?php echo ($senismt1 ? $senismt1 : "");?></td>
					<td><?php echo ($senismt2 ? $senismt2 : "");?></td>
					<td><?php echo ($senismt3 ? $senismt3 : "");?></td>
					<td><?php echo ($senismt4 ? $senismt4 : "");?></td>
					<td><?php echo ($senismt5 ? $senismt5 : "");?></td>
				</tr>

				<!--Data Prestasi-->
				<tr>
					<th style="font-size:16px" colspan="6">Data Prestasi Calon Siswa</th>
				</tr>
				<tr>
					<td>Prestasi</td>
					<td colspan="5"><?php echo ($prestasi ? $prestasi : "");?></td>
				</tr>

			</tbody>
		</table>
	</div>


</div>




<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 

