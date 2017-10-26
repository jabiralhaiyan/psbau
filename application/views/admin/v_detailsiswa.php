<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Siswa | PSB MAU-MBI Amanatul Ummah</title>

  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/ico/favicon-himah.ico">

  <style>
    .right {
      position: absolute;
      right: 0px;
      width: 200px;
      //border: 3px solid #73AD21;
      padding: 15px;

      * {
        box-sizing: border-box;
      }
      .header {
        border: 1px solid red;
        padding: 15px;
      }
      .row::after {
        content: "";
        clear: both;
        display: block;
      }
      [class*="col-"] {
        float: left;
        padding: 15px;
        //border: 1px solid red;
      }
      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}

      th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px;
        font-size: 14px;
      }
      th {
        text-align: left;
      }

    </style>

  </head>

  <body>

   <div class="container">
    <!-- Begin page content -->
    <div class="container">

      <div class="page-header">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td width="20%" align="center">
              <img src="<?php echo base_url();?>assets/img/logo-mau-sby.png" width="350%" height="350%"/>
            </td>   
            <td valign="top" align='center'>
              <font size="5"><strong>MAU-MBI Amanatul Ummah Surabaya</strong></font><br />
              <strong>Jl. Siwalankerto Utara 56-63, Wonocolo, Surabaya<br>
                Telp. (031)8438754&nbsp;&nbsp;<br>
                Website: www.mau-mbi-ausby.sch.id<br>Email: maumbisurabaya@gmail.com</strong>
              </td>
              <td width="20%" align="center">
                <img src="<?php echo base_url();?>assets/img/logo-mbi-sby.png" width="350%" height="350%"/>
              </td>   
            </tr>
            <tr>
              <td colspan="3">
                <hr width="100%" />
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <center><h3>DATA CALON SISWA</h3></center>
    <br><br>
    <table style="width:100%;border: 1px solid black;border-collapse: collapse;">
      <tr>
       <td><b>Lembaga</b></td>
       <td><b> <?php echo $lembaga;?></b></td>
       <td rowspan="4" align="right" width="100" valign="top">
        <img src="<?php 
        if($foto == ''){
          echo base_url().'assets/img/default-foto.png'; 
        }
        else
        {
          echo base_url().'assets/profpic/'.$foto;
        }
        ?>" width="150px" height="150px" class="img-polaroid"/>
      </td>
    </tr>
    <tr>
     <td><b>Kelompok</b></td>
     <td><b> <?php echo $kelompok;?></b></td>
   </tr>
   <tr>
     <td><b>Tahun</b></td>
     <td><b> <?php echo $tahunmasuk;?></b></td>
   </tr>
   <tr>
     <td><b>No. Pendaftaran</b></td>
     <td><b> <?php echo $nopendaftaran;?></b></td>
   </tr>
 </table>
 <br><br>

 <table class="table" style="width:100%;border: 1px solid black;border-collapse: collapse;">
  <tbody>
    <tr>
      <td><b>A.</b></td>
      <td colspan="4"><b>Keterangan Pribadi</b></td>
    </tr>
    <tr>
      <td></td>
      <td>1.</td>
      <td>NISN</td>
      <td colspan="2"> <?php echo $nisn;?></td>
    </tr>
    <tr>
      <td></td>
      <td>2.</td>
      <td colspan="3">Nama Siswa</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>a. Lengkap</td>
      <td colspan="2"><?php echo $nama;?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>a. Panggilan</td>
      <td colspan="2"> <?php echo $panggilan;?></td>
    </tr>
    <tr>
      <td></td>
      <td>3.</td>
      <td>Jenis Kelamin</td>
      <td colspan="2"> <?php echo $jeniskelamin;?></td>
    </tr>
    <tr>
      <td></td>
      <td>4.</td>
      <td>Tempat Lahir</td>
      <td colspan="2"> <?php echo $tmplahir;?></td>
    </tr>
    <tr>
      <td></td>
      <td>5.</td>
      <td>Tanggal Lahir</td>
      <td colspan="2"> <?php echo $tgllahir;?></td>
    </tr>
    <tr>
      <td></td>
      <td>6.</td>
      <td>Agama</td>
      <td colspan="2"> <?php echo $agama;?></td>
    </tr>
    <tr>
      <td></td>
      <td>7.</td>
      <td>Kewarganegaraan</td>
      <td colspan="2"> <?php echo $warga;?></td>
    </tr>
    <tr>
      <td></td>
      <td>8.</td>
      <td>Anak ke berapa</td>
      <td colspan="2"> <?php echo $anakke;?></td>
    </tr>
    <tr>
      <td></td>
      <td>9.</td>
      <td>Jumlah Saudara</td>
      <td colspan="2"> <?php echo $jsaudara;?></td>
    </tr>
    <tr>
      <td></td>
      <td>10.</td>
      <td>Kondisi Siswa</td>
      <td colspan="2"> <?php echo $kondisi;?></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="4"></td>
    </tr>


    <tr>
      <td><b>B.</b></td>
      <td colspan="4"><b>Keterangan Tempat tinggal</b></td>
    </tr>
    <tr>
      <td></td>
      <td>11.</td>
      <td>Alamat</td>
      <td colspan="2"> <?php echo $alamatsiswa;?></td>
    </tr>
    <tr>
      <td></td>
      <td>12.</td>
      <td>Handpone</td>
      <td colspan="2"> <?php echo $hpsiswa;?></td>
    </tr>
    <tr>
      <td></td>
      <td>13.</td>
      <td>Email</td>
      <td colspan="2"> <?php echo $emailsiswa;?></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="4"></td>
    </tr>

    <tr>
      <td><b>C.</b></td>
      <td colspan="4"><b>Keterangan Fisik</b></td>
    </tr>
    <tr>
      <td></td>
      <td>14.</td>
      <td>Berat Badan</td>
      <td colspan="2"> <?php echo $berat;?> kg</td>
    </tr>
    <tr>
      <td></td>
      <td>15.</td>
      <td>Tinggi Badan</td>
      <td colspan="2"> <?php echo $tinggi;?> cm</td>
    </tr>
    <tr>
      <td></td>
      <td>16.</td>
      <td>Ukuran Baju</td>
      <td colspan="2"> <?php echo $ukuranbaju;?></td>
    </tr>
    <tr>
      <td></td>
      <td>17.</td>
      <td>Ukuran Celana</td>
      <td colspan="2"> <?php echo $ukurancelana;?></td>
    </tr>
    <tr>
      <td></td>
      <td>18.</td>
      <td>Riwayat Kesehatan</td>
      <td colspan="2"> <?php echo $kesehatan;?></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="4"></td>
    </tr>


    <tr>
      <td>D.</td>
      <td colspan="4"><b>Keterangan Pendidikan Sebelumnya</b></td>
    </tr>
    <tr>
      <td></td>
      <td>19.</td>
      <td>Asal Sekolah</td>
      <td colspan="2"> <?php echo $asalsekolah;?></td>
    </tr>
    <tr>
      <td></td>
      <td>20.</td>
      <td>Keterangan</td>
      <td colspan="2"> <?php echo $ketsekolah;?></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="4"></td>
    </tr>


    <tr>
      <td>E.</td>
      <td colspan="4"><b>Keterangan Orang Tua</b></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2">Orang Tua</td>
      <td>Ayah</td>
      <td>Ibu</td>
    </tr>
    <tr>
      <td></td>
      <td>21.</td>
      <td>Nama</td>
      <td> <?php echo $namaayah;?></td>
      <td> <?php echo $namaibu;?></td>
    </tr>
    <tr>
      <td></td>
      <td>22.</td>
      <td>Pendidikan</td>
      <td> <?php echo $pendidikanayah;?></td>
      <td> <?php echo $pendidikanibu;?></td>
    </tr>
    <tr>
      <td></td>
      <td>23.</td>
      <td>Pekerjaan</td>
      <td> <?php echo $pekerjaanayah;?></td>
      <td> <?php echo $pekerjaanibu;?></td>
    </tr>
    <tr>
      <td></td>
      <td>24.</td>
      <td>Penghasilan</td>
      <td> <?php echo $penghasilanayah;?></td>
      <td> <?php echo $penghasilanibu;?></td>
    </tr>
    <tr>
      <td></td>
      <td>25.</td>
      <td>Email Ortu</td>
      <td> <?php echo $emailayah;?></td>
      <td> <?php echo $emailibu;?></td>
    </tr>
    <tr>
      <td></td>
      <td>26.</td>
      <td>Alamat</td>
      <td colspan="2"> <?php echo $alamatortu;?></td>
    </tr>
    <tr>
      <td></td>
      <td>27.</td>
      <td>Handphone</td>
      <td colspan="2"> <?php echo $hportu;?></td>
    </tr>

  </tbody>

</table>


    <!--
    <div class="right">
        <br><br><br><br><br><br><br><br><br>
        <img src="<?php 
        if($foto == ''){
          echo base_url().'assets/img/default-foto.png'; 
        }
        else
        {
          echo base_url().$foto;
        }
        ?>" width="150px" height="150px" class="img-polaroid">
      </div>
    -->


    <!-- you need to include the shieldui css and js assets in order for the components to work -->

    <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/pdf/shieldui-all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/pdf/jszip.min.js"></script>


  </body>
  </html>
