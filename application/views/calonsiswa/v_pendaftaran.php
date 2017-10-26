<?php 
require_once('layout/head.php'); 
require_once('layout/menuuser.php');
require_once('layout/stepbystep.php');
?>

<div class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="jumbotron">
       <h2><strong>Formulir Pendaftaran</strong></h2> <br>
       <p style="font-size: 16px">Seluruh item isian pada formulir yang bertanda (<span style="color:red">*</span>) harus diisi dengan benar</p>
       <p style="font-size: 16px">Isilah seluruh item dengan format <b>Huruf Besar</b> di awal kata | ex: Amanatul Ummah</p><br>
       
       <form class="form-horizontal" action="<?php echo base_url(); ?>pendaftaran/do_pendaftaran" method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend>Data Penerimaan Calon Siswa</legend>
          
          <div class="col-md-9">
            <input type="hidden" class="form-control" name="inputNoPendaftaran" value="<?php echo ($nopendaftaran ? $nopendaftaran : "");?>">
            <div class="form-group">
              <label for="inputLembaga" class="col-lg-3 control-label">Lembaga <span style="color:red;">*</span></label>
              <div class="col-lg-5">
                <select class="form-control" name="inputLembaga" id="inputLembaga">
                  <?php foreach($_lembaga->result() as $row) {
                  if ($lembaga==$row->lembaga) //$lembaga adalah variabel dari proses get || $row->lembaga adalah isi dari $_lembaga
                  echo '<option selected>'.$row->lembaga.'</option>';
                  else
                    echo '<option>'.$row->lembaga.'</option>';
                } ?>
              </select>
            </div>
          </div><div id="pendaftaran"></div>
        </div>
        <div class="col-md-3">
         <div class="form-group">
          <img src="
          <?php 
          if($foto == NULL){
           echo base_url().'assets/img/default-foto.png'; 
         }
         else
         {
           echo base_url().'assets/profpic/'.$foto;
         }
         ?>" style="max-width: 150px; max-height: 225px;">
         <input type="hidden" name="inputFotoLama" value="<?php echo $foto; ?>">  
       </div>
     </div>

     <br>
     <legend>Data Pribadi Calon Siswa</legend>
     <div class="form-group">
      <label for="inputNISN" class="col-lg-2 control-label">NISN <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNISN" id="inputNISN"  value="<?php echo ($nisn ? $nisn : "");?>" required>
      </div>
    </div>
     <div class="form-group">
      <label for="inputNoUN" class="col-lg-2 control-label">No. UN Sebelumnya</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNoUN" id="inputNoUN"  value="<?php echo ($noun ? $noun : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNoKK" class="col-lg-2 control-label">No. KK <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNoKK" id="inputNoKK"  value="<?php echo ($nokk ? $nokk : "");?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputNIK" class="col-lg-2 control-label">NIK <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNIK" id="inputNIK"  value="<?php echo ($nik ? $nik : "");?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputNoAkta" class="col-lg-2 control-label">No. Akta <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNoAkta" id="inputNoAkta"  value="<?php echo ($noakta ? $noakta : "");?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Nama <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNama" id="inputNama" value="<?php echo ($nama ? $nama : "");?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPanggilan" class="col-lg-2 control-label">Panggilan</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputPanggilan" id="inputPanggilan"  value="<?php echo ($panggilan ? $panggilan : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Jenis Kelamin <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <div class="radio">
          <label>
            <input type="radio" name="inputJenisKelamin" name="inputLaki" id="inputLaki" value="L" <?php echo ($jeniskelamin=='L' ? "checked" : "");?> >
            Laki-Laki
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="inputJenisKelamin" name="inputPerempuan" id="inputPerempuan" value="P" <?php echo ($jeniskelamin=='P' ? "checked" : "");?>>
            Perempuan
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputTempatLahir" class="col-lg-2 control-label">Tempat Lahir <span style="color:red;">*</span></label>
      <div class="col-lg-3">
        <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir" value="<?php echo ($tmplahir ? $tmplahir : "");?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputTanggalLahir" class="col-lg-2 control-label">Tanggal Lahir <span style="color:red;">*</span></label>
      <div class="col-lg-3">
        <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir" value="<?php echo ($tgllahir ? $tgllahir : "");?>" required> 
      </div>
      <div class="col-lg-1">
        mm/dd/yyyy
      </div>
    </div>

    <div class="form-group">
      <label for="inputAgama" class="col-lg-2 control-label">Agama <span style="color:red;">*</span></label>
      <div class="col-lg-3">
        <select class="form-control" name="inputAgama" id="inputAgama">
          <?php foreach($_agama->result() as $row) {
            if ($agama==$row->agama)
              echo '<option selected>'.$row->agama.'</option>';
            else
              echo '<option>'.$row->agama.'</option>';
          } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputSuku" class="col-lg-2 control-label">Suku <span style="color:red;">*</span></label>
      <div class="col-lg-3">
        <select class="form-control" name="inputSuku" id="inputSuku">
          <?php foreach($_suku->result() as $row) {
            if ($suku==$row->suku)
              echo '<option selected>'.$row->suku.'</option>';
            else
              echo '<option>'.$row->suku.'</option>';
          } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputKondisi" class="col-lg-2 control-label">Kondisi <span style="color:red;">*</span></label>
      <div class="col-lg-3">
        <select class="form-control" name="inputKondisi" id="inputKondisi">
          <?php foreach($_kondisi->result() as $row) {
            if ($kondisi==$row->kondisi)
              echo '<option selected>'.$row->kondisi.'</option>';
            else
              echo '<option>'.$row->kondisi.'</option>';
          } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Kewarganegaraan <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <div class="radio">
          <label>
            <input type="radio" name="inputKewarganegaraan" id="inputWNI" value="WNI" <?php echo ($warga=='WNI' ? "checked" : "");?>>
            WNI
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="inputKewarganegaraan" id="inputWNA" value="WNA" <?php echo ($warga=='WNA' ? "checked" : "");?>>
            WNA
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAnakKe" class="col-lg-2 control-label">Anak Ke <span style="color:red;">*</span></label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputAnakKe" id="inputAnakKe" value="<?php echo ($anakke ? $anakke : "");?>" required>
      </div>
      <label for="inputJumlahSaudara" class="col-lg-1 control-label">Dari <span style="color:red;">*</span></label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputJumlahSaudara" id="inputJumlahSaudara" value="<?php echo ($jsaudara ? $jsaudara : "");?>" required>
      </div>
      <label for="inputAgama" class="col-lg-1 control-label">Bersaudara</label>
    </div>
    <div class="form-group">
      <label for="inputAlamatSiswa" class="col-lg-2 control-label">Alamat Lengkap <span style="color:red;">*</span></label>
      <div class="col-lg-5">
        <textarea class="form-control" rows="3" name="inputAlamatSiswa" id="inputAlamatSiswa" required><?php echo ($alamatsiswa ? $alamatsiswa : "");?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="inputDesa" class="col-lg-2 control-label">Desa/Kelurahan</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputDesa" id="inputDesa" value="<?php echo ($desa ? $desa : "");?>">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputRT" class="col-lg-2 control-label">RT</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputRT" id="inputRT" value="<?php echo ($rt ? $rt : "");?>">
      </div>
      <label for="inputRW" class="col-lg-1 control-label">RW</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputRW" id="inputRW" value="<?php echo ($rw ? $rw : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputKecamatan" class="col-lg-2 control-label">Kecamatan</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="inputKecamatan" id="inputKecamatan" value="<?php echo ($kecamatan ? $kecamatan : "");?>">
      </div>
      <label for="inputKota" class="col-lg-1 control-label">Kab/Kota</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="inputKota" id="inputKota" value="<?php echo ($kota ? $kota : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputProvinsi" class="col-lg-2 control-label">Provinsi</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="inputProvinsi" id="inputProvinsi" value="<?php echo ($provinsi ? $provinsi : "");?>">
      </div>
      <label for="inputKodePos" class="col-lg-2 control-label">Kode Pos</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputKodePos" id="inputKodePos" value="<?php echo ($kodepos ? $kodepos : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputJarak" class="col-lg-2 control-label">Jarak Ke Sekolah</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputJarak" id="inputJarak" value="<?php echo ($jarak ? $jarak : "");?>">
      </div>
      <label for="inputJarak" class="col-lg-1 control-label">km</label>
    </div>
    <div class="form-group">
      <label for="inputHPSiswa" class="col-lg-2 control-label">Handphone <span style="color:red;">*</span></label>
      <div class="col-lg-3">
        <input type="text" class="form-control" name="inputHPSiswa" id="inputHPSiswa" placeholder="0812564...." value="<?php echo ($hpsiswa ? $hpsiswa : "");?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmailSiswa" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-3">
        <input type="email" class="form-control" name="inputEmailSiswa" id="inputEmailSiswa" placeholder="example@mail.com" value="<?php echo ($emailsiswa ? $emailsiswa : "");?>" readonly>
      </div>
    </div>


    <br>
    <legend>Data Sekolah Calon Siswa</legend>
    <div class="form-group">
      <label for="inputAsalSekolah" class="col-lg-2 control-label">Asal Sekolah</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" name="inputAsalSekolah" id="inputAsalSekolah" value="<?php echo ($asalsekolah ? $asalsekolah : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNoIjasah" class="col-lg-2 control-label">No Ijasah</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputNoIjasah" id="inputNoIjasah" value="<?php echo ($noijasah ? $noijasah : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputTanggalIjasah" class="col-lg-2 control-label">Tanggal Ijasah</label>
      <div class="col-lg-3">
        <input type="date" date-format="dd-mm-yyyy" class="form-control" name="inputTanggalIjasah" id="inputTanggalIjasah" value="<?php echo ($tglijasah ? $tglijasah : "");?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputKeteranganSekolah" class="col-lg-2 control-label">Keterangan Sekolah</label>
      <div class="col-lg-5">
        <textarea class="form-control" rows="3" name="inputKeteranganSekolah" id="inputKeteranganSekolah" ><?php echo ($ketsekolah ? $ketsekolah : "");?></textarea>
      </div>
    </div>

    
    <br>
    <legend>Data Fisik Calon Siswa</legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Golongan Darah</label>
      <div class="col-lg-5">
        <div class="radio col-lg-2">
          <label>
            <input type="radio" name="inputDarah" id="inputA" value="A" <?php echo ($darah=='A' ? "checked" : "");?>>
            A
          </label>
        </div>
        <div class="radio col-lg-2">
          <label>
            <input type="radio" name="inputDarah" id="inputAB" value="AB" <?php echo ($darah=='AB' ? "checked" : "");?>>
            AB
          </label>
        </div>
        <div class="radio col-lg-2">
          <label>
            <input type="radio" name="inputDarah" id="inputB" value="B" <?php echo ($darah=='B' ? "checked" : "");?>>
            B
          </label>
        </div>
        <div class="radio col-lg-2">
          <label>
            <input type="radio" name="inputDarah" id="inputO" value="O" <?php echo ($darah=='O' ? "checked" : "");?>>
            O
          </label>
        </div>
        <div class="radio col-lg-4">
          <label>
            <input type="radio" name="inputDarah" id="inputKosong" value="" <?php echo ($darah=='' ? "checked" : "");?>>
            (Belum ada data)
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputBerat" class="col-lg-2 control-label">Berat</label>
      <div class="col-lg-1">
        <input type="text" class="form-control" name="inputBerat" id="inputBerat" value="<?php echo ($berat ? $berat : "");?>">
      </div>
      <label for="inputBerat" class="col-lg-1 control-label">kg</label>
    </div>
    <div class="form-group">
      <label for="inputTinggi" class="col-lg-2 control-label">Tinggi</label>
      <div class="col-lg-1">
        <input type="text" class="form-control" name="inputTinggi" id="inputTinggi" value="<?php echo ($tinggi ? $tinggi : "");?>">
      </div>
      <label for="inputTinggi" class="col-lg-1 control-label">cm</label>
    </div>

    <div class="form-group">
      <label for="inputUkuranSepatu" class="col-lg-2 control-label">Ukuran Sepatu</label>
      <div class="col-lg-1">
        <input type="text" class="form-control" name="inputUkuranSepatu" id="inputUkuranSepatu" value="<?php echo ($ukuransepatu ? $ukuransepatu : "");?>">
      </div>
      <label for="inputUkuranBaju" class="col-lg-2 control-label">Ukuran Baju</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="inputUkuranBaju" id="inputUkuranBaju" placeholder="S/M/L/XL/XXL"
        value="<?php echo ($ukuranbaju ? $ukuranbaju : "");?>">
      </div>
      <label for="inputUkuranCelana" class="col-lg-2 control-label">Ukuran Celana</label>
      <div class="col-lg-1">
        <input type="text" class="form-control" name="inputUkuranCelana" id="inputUkuranCelana" value="<?php echo ($ukurancelana ? $ukurancelana : "");?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputKesehatan" class="col-lg-2 control-label">Riwayat Kesehatan</label>
      <div class="col-lg-5">
        <textarea class="form-control" rows="3" name="inputKesehatan" id="inputKesehatan" 
        ><?php echo ($kesehatan ? $kesehatan : "");?></textarea>
      </div>
    </div>


    <br>
    <legend>Data Orangtua Calon Siswa</legend>
    <div class="form-group">
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
       <center><label class="control-label"><strong>Ayah</strong></label></center>
     </div>
     <div class="col-lg-4">
      <center><label class="control-label"><strong>Ibu</strong></label></center>
    </div>
  </div>
  <div class="form-group">
    <label for="inputNamaOrtu" class="col-lg-2 control-label">Nama <span style="color:red;">*</span></label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="inputNamaAyah" id="inputNamaAyah" value="<?php echo ($namaayah ? $namaayah : "");?>" required>
      <input type="checkbox" name="inputAlmAyah" id="inputAlmAyah" value="1" <?php echo ($almayah=='1' ? "checked" : "");?> >
      <font color="#990000" size="1">(Almarhum)</font>
    </div>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="inputNamaIbu" id="inputNamaIbu" value="<?php echo ($namaibu ? $namaibu : "");?>" required>
      <input type="checkbox" name="inputAlmIbu" id="inputAlmIbu" value="1" <?php echo ($almibu=='1' ? "checked" : "");?> >
      <font color="#990000" size="1">(Almarhumah)</font>
    </div>
  </div>
  <div class="form-group">
    <label for="inputNIKAyah" class="col-lg-2 control-label">NIK/No. KTP <span style="color:red;">*</span></label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="inputNIKAyah" id="inputNIKAyah" value="<?php echo ($nikayah ? $nikayah : "");?>">
    </div>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="inputNIKIbu" id="inputNIKIbu" value="<?php echo ($nikibu ? $nikibu : "");?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputStatusOrtu" class="col-lg-2 control-label">Status Orangtua</label>
    <div class="col-lg-4">
      <select class="form-control" name="inputStatusAyah" id="inputStatusAyah">
        <?php foreach($_statusortu->result() as $row) {
          if ($statusayah==$row->statusortu)
            echo '<option selected>'.$row->statusortu.'</option>';
          else
            echo '<option>'.$row->statusortu.'</option>';
        } ?>
      </select>
    </div>
    <div class="col-lg-4">
      <select class="form-control" name="inputStatusIbu" id="inputStatusIbu">
        <?php foreach($_statusortu->result() as $row) {
          if ($statusibu==$row->statusortu)
            echo '<option selected>'.$row->statusortu.'</option>';
          else
            echo '<option>'.$row->statusortu.'</option>';
        } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputTempatLahir" class="col-lg-2 control-label">Tempat Lahir <span style="color:red;">*</span></label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="inputTempatLahirAyah" id="inputTempatLahirAyah" value="<?php echo ($tmplahirayah ? $tmplahirayah : "");?>">
    </div>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="inputTempatLahirIbu" id="inputTempatLahirIbu" value="<?php echo ($tmplahiribu ? $tmplahiribu : "");?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputTanggalLahir" class="col-lg-2 control-label">Tanggal Lahir <span style="color:red;">*</span></label>
    <div class="col-lg-4">
      <input type="date" class="form-control" name="inputTanggalLahirAyah" id="inputTanggalLahirAyah" value="<?php echo ($tgllahirayah ? $tgllahirayah : "");?>">
    </div>
    <div class="col-lg-4">
      <input type="date" class="form-control" name="inputTanggalLahirIbu" id="inputTanggalLahirIbu" value="<?php echo ($tgllahiribu ? $tgllahiribu : "");?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPendidikan" class="col-lg-2 control-label">Pendidikan</label>
    <div class="col-lg-4">
      <select class="form-control" name="inputPendidikanAyah" id="inputPendidikanAyah">
        <?php foreach($_pendidikan->result() as $row) {
          if ($pendidikanayah==$row->pendidikan)
            echo '<option selected>'.$row->pendidikan.'</option>';
          else
            echo '<option>'.$row->pendidikan.'</option>';
        } ?>
      </select>
    </div>
    <div class="col-lg-4">
      <select class="form-control" name="inputPendidikanIbu" id="inputPendidikanIbu">
        <?php foreach($_pendidikan->result() as $row) {
          if ($pendidikanibu==$row->pendidikan)
            echo '<option selected>'.$row->pendidikan.'</option>';
          else
            echo '<option>'.$row->pendidikan.'</option>';
        } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPekerjaan" class="col-lg-2 control-label">Pekerjaan</label>
    <div class="col-lg-4">
      <select class="form-control" name="inputPekerjaanAyah" id="inputPekerjaanAyah">
        <option>--Pilih--</option>
        <?php foreach($_pekerjaan->result() as $row) {
          if ($pekerjaanayah==$row->pekerjaan)
            echo '<option selected>'.$row->pekerjaan.'</option>';
          else
            echo '<option>'.$row->pekerjaan.'</option>';
        } ?>
      </select>
    </div>
    <div class="col-lg-4">
      <select class="form-control" name="inputPekerjaanIbu" id="inputPekerjaanIbu">
        <option>--Pilih--</option>
        <?php foreach($_pekerjaan->result() as $row) {
          if ($pekerjaanibu==$row->pekerjaan)
            echo '<option selected>'.$row->pekerjaan.'</option>';
          else
            echo '<option>'.$row->pekerjaan.'</option>';
        } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPenghasilan" class="col-lg-2 control-label">Penghasilan</label>
    <div class="col-lg-4">
      <select class="form-control" name="inputPenghasilanAyah" id="inputPenghasilanAyah">
        <option>--Pilih--</option>
        <?php foreach($_penghasilan->result() as $row) {
          if ($penghasilanayah==$row->penghasilan)
            echo '<option selected>'.$row->penghasilan.'</option>';
          else
            echo '<option>'.$row->penghasilan.'</option>';
        } ?>
      </select>
    </div>
    <div class="col-lg-4">
      <select class="form-control" name="inputPenghasilanIbu" id="inputPenghasilanIbu">
       <option>--Pilih--</option>
       <?php foreach($_penghasilan->result() as $row) {
        if ($penghasilanibu==$row->penghasilan)
          echo '<option selected>'.$row->penghasilan.'</option>';
        else
          echo '<option>'.$row->penghasilan.'</option>';
      } ?>
    </select>
  </div>
</div>
<div class="form-group">
  <label for="inputEmailOrtu" class="col-lg-2 control-label">Email Ortu</label>
  <div class="col-lg-4">
    <input type="email" class="form-control" name="inputEmailAyah" id="inputEmailAyah" placeholder="example@mail.com"
    value="<?php echo ($emailayah ? $emailayah : "");?>">
  </div>
  <div class="col-lg-4">
    <input type="email" class="form-control" name="inputEmailIbu" id="inputEmailIbu" placeholder="example@mail.com"
    value="<?php echo ($emailibu ? $emailibu : "");?>">
  </div>
</div>
<div class="form-group">
  <label for="inputAlamatOrtu" class="col-lg-2 control-label">Alamat Orangtua</label>
  <div class="col-lg-5">
    <textarea class="form-control" rows="3" name="inputAlamatOrtu" id="inputAlamatOrtu"><?php echo ($alamatortu ? $alamatortu : "");?></textarea>
  </div>
</div>
<div class="form-group">
  <label for="inputHPOrtu" class="col-lg-2 control-label">Handphone <span style="color:red;">*</span></label>
  <div class="col-lg-3">
    <input type="text" class="form-control" name="inputHPOrtu" id="inputHPOrtu" placeholder="0812564...." value="<?php echo ($hportu ? $hportu : "");?>" required>
  </div>
</div>


<br>
<legend>Informasi Tambahan</legend>
<div class="form-group">
  <label for="inputCita" class="col-lg-2 control-label">Cita-Cita</label>
  <div class="col-lg-5">
    <textarea class="form-control" rows="3" name="inputCita" id="inputCita"><?php echo ($cita ? $cita : "");?></textarea>
  </div>
</div>
<div class="form-group">
  <label for="inputHobi" class="col-lg-2 control-label">Hobi</label>
  <div class="col-lg-5">
    <input type="text" class="form-control" name="inputHobi" id="inputHobi" value="<?php echo ($hobi ? $hobi : "");?>">
  </div>
</div>

<br>
<legend>Data Nilai Rapor</legend>

<div class="form-group">
  <div class="col-lg-2"></div>
  <div class="col-lg-2">
   <center><label class="control-label"><strong>SMT 1</strong></label></center>
 </div>
 <div class="col-lg-2">
  <center><label class="control-label"><strong>SMT 2</strong></label></center>
</div>
<div class="col-lg-2">
  <center><label class="control-label"><strong>SMT 3</strong></label></center>
</div>
<div class="col-lg-2">
  <center><label class="control-label"><strong>SMT 4</strong></label></center>
</div>
<div class="col-lg-2">
  <center><label class="control-label"><strong>SMT 5</strong></label></center>
</div>
</div>

<div class="form-group">
  <!--Bahasa Indonesia-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Bahasa Indonesia</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBinSmt1" id="inputBinSmt1" data-mask="99.99" value="<?php echo ($binsmt1 ? $binsmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBinSmt2" id="inputBinSmt2" data-mask="99.99" value="<?php echo ($binsmt1 ? $binsmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBinSmt3" id="inputBinSmt3" data-mask="99.99" value="<?php echo ($binsmt1 ? $binsmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBinSmt4" id="inputBinSmt4" data-mask="99.99" value="<?php echo ($binsmt1 ? $binsmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBinSmt5" id="inputBinSmt5" data-mask="99.99" value="<?php echo ($binsmt1 ? $binsmt5 : "");?>">
  </div>

  <br><br><br>
  <!--Bahasa Inggris-->
  <label for="inputNilaiBing" class="col-lg-2 control-label">Bahasa Inggris</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBingSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($bingsmt1 ? $bingsmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBingSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($bingsmt2 ? $bingsmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBingSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($bingsmt3 ? $bingsmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBingSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($bingsmt4 ? $bingsmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputBingSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($bingsmt5 ? $bingsmt5 : "");?>">
  </div>


  <br><br><br>
  <!--Matematika-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Matematika</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputMatSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($matsmt1 ? $matsmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputMatSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($matsmt2 ? $matsmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputMatSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($matsmt3 ? $matsmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputMatSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($matsmt4 ? $matsmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputMatSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($matsmt5 ? $matsmt5 : "");?>">
  </div>

  <br><br><br>
  <!--Ilmu Pengetahuan Alam-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Ilmu Pengetahuan Alam</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpaSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($ipasmt1 ? $ipasmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpaSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($ipasmt2 ? $ipasmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpaSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($ipasmt3 ? $ipasmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpaSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($ipasmt4 ? $ipasmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpaSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($ipasmt5 ? $ipasmt5 : "");?>">
  </div>


  <br><br><br>
  <!--Ilmu Pengetahuan Sosial-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Ilmu Pengetahuan Sosial</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpsSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($ipssmt1 ? $ipssmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpsSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($ipssmt2 ? $ipssmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpsSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($ipssmt3 ? $ipssmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpsSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($ipssmt4 ? $ipssmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputIpsSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($ipssmt5 ? $ipssmt5 : "");?>">
  </div>


  <br><br><br>
  <!--Pengetahuan Agama-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Pengetahuan Agama</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputAgamaSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($agamasmt1 ? $agamasmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputAgamaSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($agamasmt2 ? $agamasmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputAgamaSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($agamasmt3 ? $agamasmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputAgamaSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($agamasmt4 ? $agamasmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputAgamaSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($agamasmt5 ? $agamasmt5 : "");?>"> 
  </div>


  <br><br><br>
  <!--PPKN-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">PPKN</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPpknSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($ppknsmt1 ? $ppknsmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPpknSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($ppknsmt2 ? $ppknsmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPpknSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($ppknsmt3 ? $ppknsmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPpknSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($ppknsmt4 ? $ppknsmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPpknSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($ppknsmt5 ? $ppknsmt5 : "");?>">
  </div>


  <br><br><br>
  <!--Pendidikan Jasmani-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Pendidikan Jasmani</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPenjasSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($penjassmt1 ? $penjassmt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPenjasSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($penjassmt2 ? $penjassmt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPenjasSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($penjassmt3 ? $penjassmt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPenjasSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($penjassmt4 ? $penjassmt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputPenjasSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($penjassmt5 ? $penjassmt5 : "");?>">
  </div>


  <br><br><br>
  <!--Pendidikan Kesenian-->
  <label for="inputNilaiBin" class="col-lg-2 control-label">Pendidikan Kesenian</label>
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputSeniSmt1" id="inputNilaiMat" data-mask="99.99" value="<?php echo ($senismt1 ? $senismt1 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputSeniSmt2" id="inputNilaiIpa" data-mask="99.99" value="<?php echo ($senismt2 ? $senismt2 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputSeniSmt3" id="inputNilaiBin" data-mask="99.99" value="<?php echo ($senismt3 ? $senismt3 : "");?>">
  </div>
  
  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputSeniSmt4" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($senismt4 ? $senismt4 : "");?>">
  </div>

  <div class="col-lg-2">
    <input type="text" class="form-control" name="inputSeniSmt5" id="inputNilaiBing" data-mask="99.99" value="<?php echo ($senismt5 ? $senismt5 : "");?>">
  </div>

  <center><span style="color:red">Format input nilai diisi dengan 2 angka dibelakang koma <br>
    misal : 7.5 ditulis 70.50, dst..</span></center>
  </div>


  <br>
  <legend>Data Prestasi Calon Siswa</legend>
  <div class="form-group">
    <label for="inputPrestasi" class="col-lg-2 control-label">Prestasi</label>
    <div class="col-lg-6">
      <textarea class="form-control" rows="4" name="inputPrestasi" id="inputPrestasi"><?php echo ($prestasi ? $prestasi : "");?></textarea>
    </div>
  </div>

  <br>
  <legend><p style="font-size:16px">Konfirmasi Siswa Atas Data yang Diberikan</p></legend>
  <div class="checkbox">
    <label>
      <input type="checkbox" required=""><strong style="font-size:14px">Saya menjamin kebenaran informasi di atas. Jika di kemudian hari ternyata data yang saya isikan tidak benar, maka saya bersedia menerima sanksinya</strong>
    </label>
  </div>

  <br><br>
  <div class="form-group">
    <div class="col-lg-8 col-lg-offset-2">
      <center> <button type="submit" class="btn btn-primary">Selesai & Simpan</button> </center>
    </div>
  </div>
</fieldset>
</form>


</div>
</div>


<!--
<div class="col-md-3">
     <div class="jumbotron">
        <img src="<?php echo base_url(); ?>assets/img/default-foto.png" width="250px" height="250px">
     </div>
</div>
-->

</div>

</div>

<script type="text/javascript">
  $('#sandbox-container .input-group.date').datepicker({
    format: "dd/mm/yyyy"
  });
</script>>

<script type="text/javascript"> 
  $(document).ready(function(){ 
    $("#inputLembaga").change(function(){ 
      var lembaga = $("#inputLembaga").val(); 
      $.ajax({ 
        type  : 'GET', 
        url : "<?php echo base_url(); ?>pendaftaran/formpendaftaran", 
        data  : "lembaga="+lembaga, 
        cache : false, 
        success : function(data){ 
          $("#pendaftaran").html(data); 
        } 
      }); 
    }).change(); 
  }); 
</script>



<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 


