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
		<p>Pendaftaran yang difinalisasi tidak dapat dibatalkan kembali. Apakah Anda yakin ingin melakukan finalisasi pendaftaran ?</p>
	</div>
	<a type="button" class="btn btn-danger" href="<?php echo base_url();?>pendaftaran/do_konfirmasi2">Finalisasi Pendaftaran</a>
	<a type="button" class="btn btn-default" href="<?php echo base_url();?>pendaftaran/konfirmasi">Batalkan</a>
</div>

<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 