<?php
require_once('layout/head.php');
require_once('layout/menu.php');
?> 


<div class="container">

	<div class="row">
		<div class="col-md-4">
			
			<nav class="bs-docs-sidebar hidden-print hidden-sm hidden-xs">
				<ul class="nav bs-docs-sidenav">
					<li><a href="#registrasi" style="font-size: 16px">Registrasi</a></li>
					<li><a href="#loginsiswa" style="font-size: 16px">Login Siswa</a></li>
					<li><a href="#pendaftaran" style="font-size: 16px">Melakukan Pendaftaran</a>
						<ul class=nav>
							<li><a href="#unggahfoto" style="font-size: 16px">Mengunggah Foto</a></li>
							<li><a href="#formpendaftaran" style="font-size: 16px">Mengisi Form Pendaftaran</a></li>
						</ul>
					</li>
					<li><a href="#finalisasi" style="font-size: 16px">Finalisasi Pendaftaran</a></li>
					<li><a href="#cetakbukti" style="font-size: 16px">Mencetak Bukti Pendaftaran</a></li>
					<li><a href="#lupapassword" style="font-size: 16px">Lupa Password</a></li>
				</ul>
			</nav>

		</div>

		<div class="col-md-8">
			<div class="bs-docs-section"> 
				<h1 class="page-header" id="registrasi">Registrasi</h1>
				<p>
					Siswa dapat melakukan registrasi terlebih dahulu untuk membuat akun Login PSB kemudian mendaftar PSB melalui alamat: <a href="http://psb.mau-mbi-ausby.sch.id">http://psb.mau-mbi-ausby.sch.id</a>. Persyaratan untuk dapat mendaftar PSB 2017 dapat dilihat di <a href="http://psb.mau-mbi-ausby.sch.id">http://psb.mau-mbi-ausby.sch.id</a>.
					<br><br>
				</p>
				<img src="<?php echo base_url(); ?>assets/img/registrasi.jpg" width="100%" height="100%">
				<p>	Berikut adalah tahapannya: <br> </p>
				<ol>
					<li>Registrasi terlebih dahulu serta melakukan verifikasi email untuk mengaktifkan akun.</li>
					<li>Login dengan menggunakan Email dan Password yang sudah aktif.</li>
					<li>Siswa melakukan pendaftaran PSB, mencakup: mengunggah foto dan mengisi form pendaftaran.</li>
					<li>Siswa memfinalisasi pendaftaran PSB (setelah difinalisasi, pendaftaran TIDAK DAPAT DIUBAH lagi; jika tidak difinalisasi, akan dianggap TIDAK mendaftar).</li>
					<li>Siswa mengunduh dan mencetak bukti pendaftaran PSB sebagai bukti pendaftaran bahwa siswa tersebut telah mendaftar.</li>
					<li>Membayar biaya registrasi untuk PSB sesuai dengan biaya yang tertera.</li>
				</ol>


				<h1 class="page-header" id="loginsiswa">Login Siswa</h1>
				<p>
					Tampilan awal web pendaftaran SNMPTN adalah sebagai berikut: <br>
				</p>
				<img src="<?php echo base_url(); ?>assets/img/login.jpg" width="100%" height="100%">

				<p>Masukkan Email dan password yang sudah terverifikasi pada form login di atas. Satu email hanya bisa digunakan untuk satu kali pendaftaran.</p>
				

				<h1 class="page-header" id="pendaftaran">Melakukan Pendaftaran</h1>
				<p>
					Untuk melakukan pendaftaran, pilih menu Pendaftaran pada daftar menu di bagian atas lalu klik tombol <b>Formulir Pendaftaran</b> seperti pada tampilan berikut:
					<br>
				</p>
				<img src="<?php echo base_url(); ?>assets/img/pendaftaran.jpg" width="100%" height="100%">
				


				<h1 clas s="page-header" id="unggahfoto">Mengunggah Foto</h1>
				<p>
					Anda harus mengunggah foto terlebih dahulu. Foto yang diunggah harus memenuhi persyaratan berikut:
				</p>
				<ul>
					<li>Wajah siswa terlihat jelas</li>
					<li>Pakaian rapi</li>
					<li>Rasio foto 4 banding 6 dengan ukuran minimum 400 (lebar) x 600(tinggi) pixel</li>
					<li>Format JPG (.jpg)</li>
					<li>Ukuran file tidak lebih dari 1 MB</li>
				</ul>
				<p>Dari tampilan berikut, unggahlah fota Anda yang telah sesuai dengan persyaratan di atas.</p> 
				<img src="<?php echo base_url(); ?>assets/img/unggahfoto.jpg" width="100%" height="100%">
				<p>Pilih Select Image untuk mengunggah file foto</p>
				<img src="<?php echo base_url(); ?>assets/img/unggahfoto2.jpg" width="100%" height="100%">
				<p><br>Jika foto sudah sesuai persyaratan, klik tombol <b>Selanjutnya >></b> (Ingat foto tidak dapat terunggah apabila tidak sesuai persyaratan !)</p> 
				

				<h1 class="page-header" id="formpendaftaran">Mengisi Form Pendaftaran</h1>
				<p>
					Selanjutnya, isilah form pendaftaran seperti pada tampilan berikut: <br></p>
					<img src="<?php echo base_url(); ?>assets/img/formpendaftaran.jpg" width="100%" height="100%">
					<p><br>Di awal formulir pendaftaran akan tampil pilihan Lembaga, Kelompok, dan Tahun Masuk Anda. Pastikan datanya sudah benar. Seluruh item isian pada formulir yang bertanda (*) harus diisi dengan benar. Jika pengisian sudah selesai, klik tombol Selesai dan Simpan.</p>

					<h1 class="page-header" id="finalisasi">Finalisasi Pendaftaran</h1>
					<p>
						Jika pendafftaran sudah selesai dilakukan, Anda dapat melakukan finalisasi pendaftaran. Setelah finalisasi, data pendaftaran tidak dapat diubah kembali. Pastikan kembali seluruh data yang diperlukan sudah Anda isikan. Untuk melakukan finalisasi, klik tombol <b>Finalisasi Pendaftaran</b> seperti pada tampilan berikut:
					</p>
					<img src="<?php echo base_url(); ?>assets/img/finalisasipendaftaran.jpg" width="100%" height="100%">
					<p><br><br>Pada layar akan tampil halaman konfirmasi finalisasi seperti berikut:<br></p>
					<img src="<?php echo base_url(); ?>assets/img/konfirmasi.jpg" width="100%" height="100%">
					<br>
					<p>Ceklis semua pernyataan konfirmasi siswa, lalu klik tombol <b>Finalisasi Pendaftaran</b>. Jika masih ragu-ragu silahkan klik <b>Tunda Finalisasi</b>. <b><u>Pastikan Anda segera melakukan finalisasi sebelum masa pendaftaran berakhir. Jika pendaftaran tidak difinalisasi, Anda dianggap TIDAK mendaftar</u></b>.</p>
					<br><br>
					<p>Jika Anda memilih tombol Finalisasi Pendaftaran, akan muncul halaman konfirmasi kembali seperti berikut:</p>
					<img src="<?php echo base_url(); ?>assets/img/konfirmasi2.jpg" width="100%" height="100%">
					
					<p><br>Silahkan klik tombol <b>Finalisasi</b> Pendaftaran jika Anda sudah yakin. Selanjutnya, pada layar akan muncul tampilan berikut:</p>
					
					<img src="<?php echo base_url(); ?>assets/img/sudahfinalisasi.jpg" width="100%" height="100%">

					<h1 class="page-header" id="cetakbukti">Mencetak Bukti Pendaftaran</h1>
					<p>
						Tahap terakhir pendaftaran PSB adalah mencetak bukti pendaftaran (Silahkan cetak bukti pendaftaran dalam ukuran kertas A4). klik <b>Cetak Bukti Pendaftaran</b> pada Home seperti pada tampilan berikut yang akan tampil saat Anda login : <br><br>

						<img src="<?php echo base_url(); ?>assets/img/cetakbukti.jpg" width="100%" height="100%">

						Berikut contoh Bukti Pendaftaran Siswa: <br><br>

						<img src="<?php echo base_url(); ?>assets/img/cetakbukti2.jpg" width="100%" height="100%">
					</p>

					<h1 class="page-header" id="lupapassword">Lupa Password</h1>
					<p>
						Jika Anda lupa password, Anda dapat menghubungi pihak sekolah untuk mendapatkan password yang baru. Pastikan agar password cukup aman akan tetapi mudah diingat. Jangan berikan password kepada pihak manapun.
					</p>

				</div>
			</div>


		</div>
	</div>



	<?php
	require_once('layout/script.php');
	require_once('layout/footer.php');
	?> 