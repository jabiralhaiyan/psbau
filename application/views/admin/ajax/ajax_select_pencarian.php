<?php 
if($pencarian =='nopendaftaran')
{ ?>
<div class="form-group">
            <label for="inputNoPendaftaran" class="col-lg-2 control-label">No. Pendaftaran <span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <input class="form-control" name="inputNoPendaftaran" id="inputNoPendaftaran" value="" required/>
            </div>
          </div>
<?php } 
if($pencarian =='nisn')
{ ?>
<div class="form-group">
            <label for="inputNISN" class="col-lg-2 control-label">NISN <span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <input class="form-control" name="inputNISN" id="inputNISN" value="" required/>
            </div>
          </div>
<?php }
if($pencarian =='nama')
{ ?>
<div class="form-group">
            <label for="inputNama" class="col-lg-2 control-label">Nama <span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <input class="form-control" name="inputNama" id="inputNama" value="" required/>
            </div>
          </div>
<?php }
if($pencarian =='namapanggilan')
{ ?>
<div class="form-group">
            <label for="inputPanggilan" class="col-lg-2 control-label">Nama Panggilan<span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <input class="form-control" name="inputPanggilan" id="inputPanggilan" value="" required/>
            </div>
          </div>
<?php }
if($pencarian =='agama')
{ ?>
<div class="form-group">
            <label for="inputAgama" class="col-lg-2 control-label">Agama<span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <select class="form-control" name="inputAgama" id="inputAgama">
                <?php foreach($agama->result() as $row) {
                        echo '<option>'.$row->agama.'</option>';
                } ?>
              </select>
            </div>
          </div>
<?php }
if($pencarian =='suku')
{ ?>
<div class="form-group">
            <label for="inputSuku" class="col-lg-2 control-label">Suku<span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <select class="form-control" name="inputSuku" id="inputSuku">
                <?php foreach($suku->result() as $row) {
                        echo '<option>'.$row->suku.'</option>';
                } ?>
              </select>
            </div>
          </div>
<?php }
if($pencarian =='kondisi')
{ ?>
<div class="form-group">
            <label for="inputKondisi" class="col-lg-2 control-label">Suku<span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <select class="form-control" name="inputKondisi" id="inputKondisi">
                <?php foreach($kondisi->result() as $row) {
                        echo '<option>'.$row->kondisi.'</option>';
                } ?>
              </select>
            </div>
          </div>
<?php }
if($pencarian =='darah')
{ ?>
<div class="form-group">
            <label for="inputDarah" class="col-lg-2 control-label">Golongan Darah<span style="color:red;">*</span></label>
            <div class="col-lg-5">
              <select class="form-control" name="inputDarah" id="inputDarah">
                  <option >A</option>
                  <option >B</option>
                  <option >AB</option>
                  <option >O</option>
              </select>
            </div>
          </div>
<?php }
if($pencarian =='alamatsiswa')
{ ?>
<div class="form-group">
            <label for="inputAlamatSiswa" class="col-lg-2 control-label">Alamat Siswa<span style="color:red;">*</span></label>
            <div class="col-lg-5">
                <textarea class="form-control" rows="3" name="inputAlamatSiswa" id="inputAlamatSiswa" required></textarea>
            </div>
          </div>
<?php }
if($pencarian =='asalsekolah')
{ ?>
<div class="form-group">
            <label for="inputAsalSekolah" class="col-lg-2 control-label">Asal Sekolah<span style="color:red;">*</span></label>
            <div class="col-lg-5">
                <input class="form-control" name="inputAsalSekolah" id="inputAsalSekolah" value="" required/>
            </div>
          </div>
<?php }
if($pencarian =='namaayah')
{ ?>
<div class="form-group">
            <label for="inputNamaAyah" class="col-lg-2 control-label">Nama Ayah<span style="color:red;">*</span></label>
            <div class="col-lg-5">
                <input class="form-control" name="inputNamaAyah" id="inputNamaAyah" value="" required/>
            </div>
          </div>
<?php }
if($pencarian =='namaibu')
{ ?>
<div class="form-group">
            <label for="inputNamaIbu" class="col-lg-2 control-label">Nama Ibu<span style="color:red;">*</span></label>
            <div class="col-lg-5">
                <input class="form-control" name="inputNamaIbu" id="inputNamaIbu" value="" required/>
            </div>
          </div>
<?php }
if($pencarian =='alamatortu')
{ ?>
<div class="form-group">
            <label for="inputAlamatOrtu" class="col-lg-2 control-label">Alamat Ortu<span style="color:red;">*</span></label>
            <div class="col-lg-5">
                <textarea class="form-control" rows="3" name="inputAlamatOrtu" id="inputAlamatOrtu" required></textarea>
            </div>
          </div>
<?php } ?>