<?php
require_once('layout/head.php');
require_once('layout/menuuser.php');
require_once('layout/stepbystep.php');
?> 

<div class="container">

	<div class="page-header">
		<h2><strong>Finalisasi Pendaftaran</strong></h2>
	</div>

	<div class="jumbotron" style="background-color:#FCF8E3">
		<p>Setelah difinalisasi, Anda tidak dapat mengubah data pendaftaran Anda lagi.</p>
		<p>Pastikan Anda telah <a href="<?php echo base_url();?>pendaftaran/formpendaftaran">mengecek hal-hal berikut</a> :</p>
		<p>
			1. Nilai yang dimasukkan oleh sekolah benar dan sesuai dengan rapor. <br>
			2. Foto yang Anda unggah telah sesuai dengan ketentuan. <br>
			3. Isian formulir pendaftaran telah diisi dengan benar. <br> 
		</p>
	</div>

	<form action="<?php echo base_url();?>pendaftaran/konfirmasi2">
		<legend>
			<h4><strong>Konfirmasi Siswa</strong></h4>
		</legend>

		<div class="checkbox">
			<label>
				<input type="checkbox" name="konfirmasi" value="1" required=""> <strong style="font-size: 14px"> Saya telah mengecek pilihan lembaga dan gelombang masuk. Saya telah mengetahui persyaratan pendaftaran. Pilihan saya tidak akan berubah lagi. </strong> 
			</label>
			<br><br>
			<label>
				<input type="checkbox" name="konfirmasi" value="2" required=""> <strong style="font-size: 14px"> Saya telah mengunggah foto sesuai dengan persyaratan yang ditentukan.</strong> 
			</label>
			<br><br>
			<label>
				<input type="checkbox" name="konfirmasi" value="3" required=""> <strong style="font-size: 14px"> Saya telah mengisi formulir pendaftaran dengan data yang benar</strong>
			</label>
		</div>
		
		<!-- Button trigger modal -->
		<br>
		<button type="submit" class="btn btn-danger">
			Finalisasi Pendaftaran
		</button>
		<a type="button" class="btn btn-default" href="<?php echo base_url();?>pendaftaran/finalisasi">
			Tunda Finalisasi
		</a>

		<!-- Modal -->
		<!--
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Konfirmasi Siswa</h4>
		      </div>
		      <div class="modal-body" style="background-color:#FCF8E3">
		        <p>Pendaftaran yang difinalisasi tidak dapat dibatalkan kembali. Apakah Anda yakin ingin melakukan finalisasi pendaftaran ?</p>
		      </div>
		      <div class="modal-footer">
		        <a type="button" class="btn btn-danger" href="<?php echo base_url();?>pendaftaran/pembayaran">Finalisasi Pendaftaran</a>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
		      </div>
		    </div>
		  </div>
		</div>
	-->

</form>
</div>



<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 