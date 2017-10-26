<?php
require_once('layout/head.php');
require_once('layout/menuuser.php');
require_once('layout/stepbystep.php');
?> 


<div class="container">
	<!--LinkFoto-->
  <input name="fotoProfil" type="hidden" value="<?php echo $foto; ?>">
  
  <?php
  if ($upload_foto_gagal)
   echo '<div class="alert alert-dismissible alert-danger">'.'<center>'.'<strong>'.$upload_foto_gagal.'</strong>'.'</center>'.'</div>';
 ?>
 <h3><strong><legend>Unggah Foto Calon Siswa</legend></strong></h3>
 
 <form action="<?php echo base_url();?>pendaftaran/do_unggahfoto" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputFotoSiswa" class="col-lg-2 control-label">Foto Calon Siswa</label>
    <div class="col-lg-7">
      <!--<input type="file" name="fileToUpload" id="fileToUpload"><br>-->
      
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
          <img src="
          <?php 
          if($foto == NULL){
           echo base_url().'assets/img/default-foto.png'; 
         }
         else
         {
           echo base_url().'assets/profpic/'.$foto;
         }
         ?>">
       </div>
       <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 200px;"></div>
       <div>
        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
        <input type="file" name="fileFoto" id="fileFoto"></span>
        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
      </div>
    </div>

    <ul>
      <li>Foto close up berwarna dengan wajah terlihat jelas dan pakaian rapi</li>
      <li>Foto diunggah dalam format JPEG (dengan ekstensi .jpg)</li>
      <li>Foto memiliki rasio 4x6 dengan ukuran 400 (lebar) x 600 (tinggi) pixel</li>
      <li>Ukuran file maksimum 1 MB</li>
    </ul>
  </div>
</div>
<div class="form-group">
  <div class="col-lg-8 col-lg-offset-2">
   <br>
   <button type="submit" class="btn btn-primary">Selanjutnya >></button>
 </div>
</div>
</form>

</div>


<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 