<?php
require_once('layout/head.php');
require_once('layout/menu.php');
?> 


<div class="container">
  <div class="row">

    <?php           
    if ($logout_berhasil) 
      echo '<div class="alert alert-dismissible alert-success">'.'<center>'.'<strong>'.$logout_berhasil.'</strong>'.'</center>'.'</div>';
    if ($registrasi_berhasil)
      echo '<div class="alert alert-dismissible alert-success">'.'<center>'.'<strong>'.$registrasi_berhasil.'</strong>'.'</center>'.'</div>';
    if ($password_dan_ulangi_password_tidak_sama)
      echo '<div class="alert alert-dismissible alert-danger">'.'<center>'.'<strong>'.$password_dan_ulangi_password_tidak_sama.'</strong>'.'</center>'.'</div>';
    if ($email_sudah_ada)
      echo '<div class="alert alert-dismissible alert-warning">'.'<center>'.'<strong>'.$email_sudah_ada.'</strong>'.'</center>'.'</div>';
    if ($email_belum_terdaftar)
      echo '<div class="alert alert-dismissible alert-warning">'.'<center>'.'<strong>'.$email_belum_terdaftar.'</strong>'.'</center>'.'</div>';
    if ($email_password_salah)
      echo '<div class="alert alert-dismissible alert-danger">'.'<center>'.'<strong>'.$email_password_salah.'</strong>'.'</center>'.'</div>';
    if ($verifikasi_gagal)
      echo '<div class="alert alert-dismissible alert-danger">'.'<center>'.'<strong>'.$verifikasi_gagal.'</strong>'.'</center>'.'</div>';
    if ($captcha_tidak_sama)
      echo '<div class="alert alert-dismissible alert-danger">'.'<center>'.'<strong>'.$captcha_tidak_sama.'</strong>'.'</center>'.'</div>';
    if ($pendaftaran_ditutup)
      echo '<div class="alert alert-dismissible alert-danger">'.'<center>'.'<strong>'.$pendaftaran_ditutup.'</strong>'.'</center>'.'</div>';
    if ($aktifasi_berhasil) 
      echo '<div class="alert alert-dismissible alert-success">'.'<center>'.'<strong>'.$aktifasi_berhasil.'</strong>'.'</center>'.'</div>';
    ?>

    <div class="col-md-8">
      <h3><strong>Selamat Datang !</strong></h3> <p>di website penerimaan siswa baru MAU-MBI Amanatul Ummah Surabaya</p> <br>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#prosedur" data-toggle="tab" aria-expanded="false" style="font-size: 11px">Prosedur Pendaftaran</a></li>
        <li><a href="#agenda" data-toggle="tab" aria-expanded="true" style="font-size: 11px">Agenda Kegiatan</a></li>
        <li><a href="#biaya" data-toggle="tab" aria-expanded="true" style="font-size: 11px">Biaya Pendaftaran</a></li>
        <li><a href="#alur" data-toggle="tab" aria-expanded="true" style="font-size: 11px">Alur Kegiatan</a></li>
        <li><a href="#pengumuman" data-toggle="tab" aria-expanded="true" style="font-size: 11px">Pengumuman</a></li>
        
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="prosedur">
          <br>
          <h4><strong>Persyaratan Umum</strong></h4>
          <ol>
            <li>Mengisi formulir yang telah disediakan</li>
            <li>Fotocopy rapor SMP/MTs semester 5 atau surat keterangan telah duduk di kelas 3 SMP/MTs</li>
            <li>Pas Foto (hitam putih) ukuran 3x4 sebanyak 5 lembar</li>
            <li>2 lembar fotocopy STTB MTs/SMP dan fotocopy danem bagi yang sudah memiliki*</li>
            <li>Fotocopy Kartu Keluarga (KK), Akta Kelahiran, Ijasah SMP/MTs*</li>
          </ol>
          <p>* Persyaratan tersebut dibawa ketika registrasi langsung di tempat atau dibawa ketika Daftar Ulang bagi calon siswa yang mendaftar secara Online</p>

          <br>
          <h4><strong>Persyaratan Mengikuti Test</strong></h4>
          <p>Sebelum mengikuti test, calon siswa yang sudah registrasi, Wajib membawa dan menunjukkan <b>bukti pendaftaran</b> serta <b>bukti pembayaran</b> kepada panitia PSB MAU-MBI Amanatul Ummah Sby. Untuk waktu pelaksanaan test silahkan bisa dilihat di menu <b>Agenda Kegiatan</b></p>
          <br>
          <h4><strong>Materi Test</strong></h4>
          <p>Materi test yang akan diujikan adalah sebagai berikut :</p> <br>
          <b>MA Unggulan Amanatul Ummah</b>
          <ul>
            <li>Kemampuan IPA (Fisika, Kimia, Biologi, Matematika)</li>
            <li>TPA (Test Potensi Akademik)</li>
          </ul>
          <br>
          <b>MBI Amanatul Ummah</b>
          <ul>
            <li>Bahasa Inggris</li>
            <li>Kemampuan IPA (Fisika, Kimia, Biologi, Matematika)</li>
            <li>TPA (Test Potensi Akademik)</li>
          </ul>

        </div>
        <div class="tab-pane fade" id="agenda">
          <br>
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Gelombang 1</td>
                <td>-</td>
                <td>Sudah Berakhir</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Pendaftaran Gelombang 2</td>
                <td>21 Mei 2017 s.d 17 Juni 2017</td>
                <td>-</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Test Gelombang 2</td>
                <td>17 Juni 2017</td>
                <td>MA Unggulan Amanatul Ummah Surabaya</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Pengumuman Gelombang 2</td>
                <td>20 Juni 2017</td>
                <td>-</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Daftar Ulang Gelombang 2</td>
                <td>20 - 24 Juni 2017</td>
                <td>-</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Pendaftaran Gelombang 3</td>
                <td>17 Juni s.d 08 Juli 2017</td>
                <td>-</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Test Gelombang 3</td>
                <td>08 Juli 2017</td>
                <td>MAU Amanatul Ummah Surabaya</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Pengumuman Gelombang 3</td>
                <td>10 Juli 2017</td>
                <td>-</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Daftar Ulang Gelombang 3</td>
                <td>10 - 13 Juli 2017</td>
                <td>-</td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="biaya">
          <br>
          <h4><strong>Biaya Pendaftaran untuk MA Unggulan Amanatul Ummah Sby (MAU)</strong></h4>
          <ol>
            <li>Biaya pendaftaran sebesar <b>Rp.275.000,-</b></li>
            <li>Biaya seragam sekolah dan atribut <b>Rp.630.000,-</b></li>
            <li>Sumbangan Pembangunan <b>Rp. 3.500.000,-</b></li>
          </ol>
          <br>
          <h4><strong>Biaya Pendaftaran untuk MBI Amanatul Ummah Sby (MBI)</strong></h4>
          <ol>
            <li>Biaya pendaftaran sebesar <b>Rp.300.000,-</b></li>
            <li>Biaya seragam sekolah <b>Rp. 630.000,-</b></li>
            <li>Biaya sarana sekolah <b>Rp. 4.500.000,-</b></li>
          </ol>
          <br>
          <p><b>* Catatan </b>: Untuk Biaya No.2 dan No.3 dibayarkan jika calon santri sudah dinyatakan diterima di MAU Amanatul Ummah atau MBI Amanatul Ummah Surabaya.</p>
          <br>
          <p>
          Pembayaran registrasi dilakukan sebelum pelaksanaan test tulis di tempat Pondok Pesantren Amanatul Ummah. 
          </p>
          </div>
          <div class="tab-pane fade" id="alur">
		<img src="<?php echo base_url(); ?>assets/img/alur-pendaftaran.jpg">
          </div>
          <div class="tab-pane fade" id="pengumuman">
            <br>
            <h4>Silahkan mengunduh Hasil Pengumuman dibawah ini :</h4>
            <a href="<?php echo base_url();?>assets/download/hasil-test-siswa-baru-mau-mbi-2017-2018.xls" target="_blank">Pengumuman Seleksi Masuk Siswa Baru MAU MBI 2017/2018 Gelombang 1</a> <br>
            <a href="<?php echo base_url();?>assets/download/hasil-selma-gelombang-2.pdf" target="_blank">Pengumuman Seleksi Masuk Siswa Baru MAU MBI 2017/2018 Gelombang 2</a>
          </div>
        </div>

      </div>


      <div class="col-md-4">

        <div class="jumbotron">

          <center><h5 style="color:white; background-color: red"><?php echo ($notif_pendaftaran_ditutup ? $notif_pendaftaran_ditutup : ''); ?></h5></center>

         <h4><strong>Pendaftaran PSB 2017</strong></h4>
         <ul class="nav nav-tabs">
          <li class="active"><a href="#login" data-toggle="tab" aria-expanded="true">Login</a></li>
          <li class=""><a href="#register" data-toggle="tab" aria-expanded="false">Register</a></li>
        </ul>


        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="login">
            <p style="font-size: 14px"><br>Masukkan Email dan Password untuk login. Silahkan register terlebih dahulu jika belum punya.</p>
            
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>home/login">
              <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                  <label for="inputEmail" class="control-label">Email</label>
                  <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="control-label">Password</label>
                  <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Login</button> <br><br>
                </div>
              </fieldset>
            </form>
            
            <!-- Button trigger modal -->
            <a data-toggle="modal" data-target="#lupa_password">
              Lupa Password ?
            </a>
            <!--Modal Lupa Password-->
            <div class="modal fade" id="lupa_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Lupa Password</h4>
                  </div>
                  <div class="modal-body">
                    <p style="font-size: 16px">Jika anda lupa password, silahkan mengirimkan sms ke nomor <b>087852301206</b> dengan
                      <br><br>
                      <b>Format SMS : lupapassword_email registrasi.</b>
                      <br><br>
                      Admin sekolah akan mereset password anda dan akan mengirimkan melalui email. Silahkan cek email untuk mengetahui password yang baru.
                      <br><br>

                      Terima Kasih
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            

          </div>
          <div class="tab-pane fade" id="register">
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>home/register">
              
              <p style="font-size: 14px; color:red"><br>Satu Email hanya diperbolehkan untuk satu kali pendaftaran dan digunakan untuk verifikasi akun</p>
              <fieldset>
                <legend>Register</legend>
                <div class="form-group">
                  <label for="inputNama" class="control-label">Nama Siswa</label>
                  <input type="text" class="form-control" name="inputNama" id="inputNama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label for="inputPanggilan" class="control-label">Panggilan</label>
                  <input type="text" class="form-control" name="inputPanggilan" id="inputPanggilan" placeholder="Nama Panggilan" required>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="control-label">Email Aktif</label>
                  <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="control-label">Password</label>
                  <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label for="inputUlangiPassword" class="control-label">Confirm Password</label>
                  <input type="password" class="form-control" name="inputUlangiPassword" id="inputUlangiPassword" placeholder="Password" required>
                </div>
                <div class="form-group">
                 <label class="control-label">Captcha</label>
                 <p><?php echo $image;?></p>
                 <input type="text" class="form-control" name="inputCaptcha" required>
               </div>
               <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button> <br><br>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>


    <div class="well">
      <p style="font-size: 14px">
        <ol>
          <li>Pendaftaran Registrasi Online dikenakan biaya sebesar <strong>Rp. 275.000,-</strong> untuk pilihan Lembaga <b>MA Unggulan Amanatul Ummah Sby</b> dan</li>
          <li>Biaya registrasi sebesar <strong>Rp. 300.000,-</strong> untuk pilihan Lembaga <b>MBI Amanatul Ummah Sby</b></li>
        </ol>
      </p>
      <p style="font-size: 14px"><a href="http://www.psb.mau-mbi-ausby.sch.id/manual">Panduan Pendaftaran</a> dapat dilihat di alamat <a href="http://www.psb.mau-mbi-ausby.sch.id/manual">http://psb.mau-mbi-ausby.sch.id/manual.</a></p>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Call Center PSB</h3>
      </div>
      <div class="panel-body">
        Call Center PSB <br>
        <b>Kantor</b> : (031)-8438754<br><br>
        <b>Lembaga MA Unggulan Amanatul Ummah</b> <br>
        <strong>0857-0649-3411</strong> (Ust. Masyhadi) <br>
        <strong>0852-4040-3897</strong> (Ust. Eri) <br>
        <strong>0851-0292-1371</strong> (Ibu Fadilah)<br>
        <br>
        <b>Lembaga MBI Amanatul Ummah</b> <br>
        <strong>0813-3277-5439</strong> (Bpk. Alwi)<br>
        <strong>0856-4598-0357</strong> (Bpk. Widi)<br>
        <strong>0851-0292-1371</strong> (Ibu Fadilah)<br>
        <strong>0858-5224-9878</strong> (Ibu Putri)<br>
        <br>
        Jalan Siwalankerto Utara 56-63, Wonocolo, Surabaya <br>
        Melayani setiap hari pukul 08.00 - 15.00 WIB
      </div>
    </div>

  </div>

</div>

</div> 

<?php
require_once('layout/script.php');
require_once('layout/footer.php');
?> 