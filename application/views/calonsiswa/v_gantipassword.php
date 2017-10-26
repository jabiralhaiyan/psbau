<?php
require_once('layout/head.php');
require_once('layout/menuuser.php');
?>

<div class="container">
 <div class="page-header">
   <h3><strong>Ganti Password</strong></h3>
 </div>
 <?php           
 if ($password_lama_salah) 
  echo '<div class="alert alert-dismissible alert-warning">'.'<center>'.'<strong>'.$password_lama_salah.'</strong>'.'</center>'.'</div>';
if ($ulangi_password_salah) 
  echo '<div class="alert alert-dismissible alert-warning">'.'<center>'.'<strong>'.$ulangi_password_salah.'</strong>'.'</center>'.'</div>';
?>
<legend>Ganti password</legend>

<form class="form-horizontal" action="<?php echo base_url();?>pendaftaran/do_gantipassword" method="POST">
 <div class="form-group">
  <label for="inputDesa" class="col-lg-2 control-label">Password Saat Ini <span style="color:red;">*</span></label>
  <div class="col-lg-5">
    <input type="password" class="form-control" name="inputPassword" id="inputPassword" value="">
  </div>
</div>
<div class="form-group">
  <label for="inputDesa" class="col-lg-2 control-label">Password Baru <span style="color:red;">*</span></label>
  <div class="col-lg-5">
    <input type="password" class="form-control" name="inputPasswordBaru" id="inputPasswordBaru" value="">
  </div>
  <span>Password sebaiknya terdiri dari 8 karakter atau lebih. Jangan menggunakan password yang mudah ditebak seperti nama atau tanggal lahir</span>
</div>
<div class="form-group">
  <label for="inputDesa" class="col-lg-2 control-label">Ulangi Password Baru <span style="color:red;">*</span></label>
  <div class="col-lg-5">
    <input type="password" class="form-control" name="inputUlangiPasswordBaru" id="inputUlangiPasswordBaru" value="">
  </div>
</div>
<div class="form-group">
  <label for="" class="col-lg-2 control-label"></label>
  <div class="col-lg-5">
   <button type="submit" class="btn btn-primary">Ganti Password</button>
 </div>
</div>
</form>

</div>


<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 