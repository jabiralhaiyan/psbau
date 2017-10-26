<?php 
 //membuat objek PHPExcel
$objPHPExcel = new PHPExcel();

            //set Sheet yang akan diolah 
/*
 //First sheet
    $sheet = $objPHPExcel->getActiveSheet();

    //Start adding next sheets
    
    $countsheet=0;
    while ($countsheet < 3) {

    // Add new sheet
    $objWorkSheet = $objPHPExcel->createSheet($countsheet); //Setting index when creating
    

    // Rename sheet
    $objWorkSheet->setTitle("$countsheet");

    $countsheet++;
    }
*/

    $objPHPExcel->setActiveSheetIndex(0);

//header

    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0 , 1, 'No. Pendaftaran');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1 , 1, 'Lembaga');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2 , 1, 'Kelompok');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3 , 1, 'Tahun Masuk');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4 , 1, 'NISN');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5 , 1, 'Nama');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6 , 1, 'Kelamin');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7 , 1, 'Tempat Lahir');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8 , 1, 'Tanggal Lahir');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9 , 1, 'Agama');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'Suku');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'Kondisi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Warga');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'Anak Ke');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'Jum Saudara');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'Alamat');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, 'Desa');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 1, 'RT');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'RW');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'Kecamatan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'Kab/Kota');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Provinsi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, 1, 'Kode Pos');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'HP');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'Email');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'Asal Sekolah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, 1, 'Gol. Darah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, 1, 'Berat');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, 1, 'Tinggi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, 1, 'Ukuran Baju');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, 1, 'Ukuran Celana');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, 1, 'Kesehatan');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, 1, 'Nama Ayah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, 1, 'Nama Ibu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, 1, 'Pend.Ayah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, 1, 'Pend.ibu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, 1, 'Pekerjaan Ayah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, 1, 'Pekerjaan Ibu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(38, 1, 'Penghasilan Ayah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(39, 1, 'Penghasilan Ibu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(40, 1, 'Email Ayah');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(41, 1, 'Email Ibu');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(42, 1, 'Alamat');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(43, 1, 'HP');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(44, 1, 'Prestasi');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(45, 1, 'binsmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(46, 1, 'binsmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(47, 1, 'binsmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(48, 1, 'binsmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(49, 1, 'binsmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(50, 1, 'bingsmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(51, 1, 'bingsmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(52, 1, 'bingsmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(53, 1, 'bingsmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(54, 1, 'bingsmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(55, 1, 'matsmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(56, 1, 'matsmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(57, 1, 'matsmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(58, 1, 'matsmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(59, 1, 'matsmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(60, 1, 'ipasmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(61, 1, 'ipasmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(62, 1, 'ipasmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(63, 1, 'ipasmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(64, 1, 'ipasmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(65, 1, 'ipssmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(66, 1, 'ipssmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(67, 1, 'ipssmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(68, 1, 'ipssmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(69, 1, 'ipssmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(70, 1, 'agamasmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(71, 1, 'agamasmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(72, 1, 'agamasmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(73, 1, 'agamasmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(74, 1, 'agamasmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(75, 1, 'ppknsmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(76, 1, 'ppknsmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(77, 1, 'ppknsmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(78, 1, 'ppknsmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(79, 1, 'ppknsmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(80, 1, 'penjassmt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(81, 1, 'penjassmt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(82, 1, 'penjassmt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(83, 1, 'penjassmt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(84, 1, 'penjassmt5');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(85, 1, 'senismt1');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(86, 1, 'senismt2');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(87, 1, 'senismt3');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(88, 1, 'senismt4');
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(89, 1, 'senismt5');
    


    $i=2;
    foreach ($datasiswa->result() as $row){
            //isi atau content
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0 ,  $i, $row->nopendaftaran);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1 ,  $i, $row->lembaga);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2 ,  $i, $row->kelompok);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3 ,  $i, $row->tahunmasuk);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4 ,  $i, $row->nisn);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5 ,  $i, $row->nama);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6 ,  $i, $row->jeniskelamin);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7 ,  $i, $row->tmplahir);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8 ,  $i, $row->tgllahir);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9 , $i, $row->agama);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $i, $row->suku);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $i, $row->kondisi);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $i, $row->warga);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $i, $row->anakke);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $i, $row->jsaudara);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $i, $row->alamatsiswa);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $i, $row->desa);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $i, $row->rt);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $i, $row->rw);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $i, $row->kecamatan);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $i, $row->kota);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $i, $row->provinsi);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(22, $i, $row->kodepos);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, $i, $row->hpsiswa);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, $i, $row->emailsiswa);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, $i, $row->asalsekolah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(26, $i, $row->darah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(27, $i, $row->berat);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(28, $i, $row->tinggi);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(29, $i, $row->ukuranbaju);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(30, $i, $row->ukurancelana);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(31, $i, $row->kesehatan);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(32, $i, $row->namaayah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(33, $i, $row->namaibu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $i, $row->pendidikanayah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $i, $row->pendidikanibu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(36, $i, $row->pekerjaanayah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(37, $i, $row->pekerjaanibu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(38, $i, $row->penghasilanayah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(39, $i, $row->penghasilanibu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(40, $i, $row->emailayah);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(41, $i, $row->emailibu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(42, $i, $row->alamatortu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(43, $i, $row->hportu);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(44, $i, $row->prestasi);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(45, $i, $row->binsmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(46, $i, $row->binsmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(47, $i, $row->binsmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(48, $i, $row->binsmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(49, $i, $row->binsmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(50, $i, $row->bingsmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(51, $i, $row->bingsmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(52, $i, $row->bingsmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(53, $i, $row->bingsmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(54, $i, $row->bingsmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(55, $i, $row->matsmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(56, $i, $row->matsmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(57, $i, $row->matsmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(58, $i, $row->matsmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(59, $i, $row->matsmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(60, $i, $row->ipasmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(61, $i, $row->ipasmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(62, $i, $row->ipasmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(63, $i, $row->ipasmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(64, $i, $row->ipasmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(65, $i, $row->ipssmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(66, $i, $row->ipssmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(67, $i, $row->ipssmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(68, $i, $row->ipssmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(69, $i, $row->ipssmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(70, $i, $row->agamasmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(71, $i, $row->agamasmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(72, $i, $row->agamasmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(73, $i, $row->agamasmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(74, $i, $row->agamasmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(75, $i, $row->ppknsmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(76, $i, $row->ppknsmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(77, $i, $row->ppknsmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(78, $i, $row->ppknsmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(79, $i, $row->ppknsmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(80, $i, $row->penjassmt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(81, $i, $row->penjassmt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(82, $i, $row->penjassmt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(83, $i, $row->penjassmt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(84, $i, $row->penjassmt5);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(85, $i, $row->senismt1);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(86, $i, $row->senismt2);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(87, $i, $row->senismt3);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(88, $i, $row->senismt4);
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(89, $i, $row->senismt5);
       
        $i++;
    }




    $objPHPExcel->setActiveSheetIndex(0);

            //change the font size
    $objPHPExcel->getActiveSheet()->getStyle('A1:CL1')->getFont()->setSize(12);
			//make the font become bold
    $objPHPExcel->getActiveSheet()->getStyle('A1:CL1')->getFont()->setBold(true);
            //set Color
    $objPHPExcel->getActiveSheet()->getStyle('A1:CL1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('92D14F');

            //set title pada sheet (me rename nama sheet)
    $objPHPExcel->getActiveSheet()->setTitle($namakelompok); //dijadikan nama kelompok

            //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

            //sesuaikan headernya 
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            //ubah nama file saat diunduh
    header('Content-Disposition: attachment;filename="'.$namalembaga.'-'.$namakelompok.'-'.$namatahunmasuk.'.xlsx"'); //nama file berupa MAU-Gelombang 1-2017
            //unduh file
    $objWriter->save("php://output");

            //Mulai dari create object PHPExcel itu ada dokumentasi lengkapnya di PHPExcel, 
            // Folder Documentation dan Example
            // untuk belajar lebih jauh mengenai PHPExcel silakan buka disitu
    ?>