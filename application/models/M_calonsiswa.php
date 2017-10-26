<?php
class M_calonsiswa extends CI_Model
{
	
	private $idcalonsiswa;
	private $iduser;
	private $nopendaftaran;
	private $lembaga;
	private $kelompok;
	private $tahunmasuk;
	private $nisn;
	private $noun;
	private $nokk;
	private $nik;
	private $noakta;
	private $nama;
	private $panggilan;
	private $jeniskelamin;
	private $tmplahir;
	private $tgllahir;
	private $agama;
	private $suku;
	private $kondisi;
	private $warga;
	private $anakke;
	private $jsaudara;
	private $alamatsiswa;
	private $desa;
	private $rt;
	private $rw;
	private $kecamatan;
	private $kota;
	private $provinsi;
	private $kodepos;
	private $jarak;
	private $hpsiswa;
	private $emailsiswa;
	private $asalsekolah;
	private $noijasah;
	private $tglijasah;
	private $ketsekolah;
	private $darah;
	private $berat;
	private $tinggi;
	private $ukuransepatu;
	private $ukuranbaju;
	private $ukurancelana;
	private $kesehatan;
	private $cita;
	private $hobi;
	private $namaayah;
	private $namaibu;
	private $nikayah;
	private $nikibu;
	private $almayah;
	private $almibu;
	private $statusayah;
	private $statusibu;
	private $tmplahirayah;
	private $tmplahiribu;
	private $tgllahirayah;
	private $tgllahiribu;
	private $pendidikanayah;
	private $pendidikanibu;
	private $pekerjaanayah;
	private $pekerjaanibu;
	private $penghasilanayah;
	private $penghasilanibu;
	private $emailayah;
	private $emailibu;
	private $alamatortu;
	private $hportu;
	private $prestasi;
	private $foto;
	private $binsmt1;
	private $binsmt2;
	private $binsmt3;
	private $binsmt4;
	private $binsmt5;
	private $bingsmt1;
	private $bingsmt2;
	private $bingsmt3;
	private $bingsmt4;
	private $bingsmt5;
	private $matsmt1;
	private $matsmt2;
	private $matsmt3;
	private $matsmt4;
	private $matsmt5;
	private $ipasmt1;
	private $ipasmt2;
	private $ipasmt3;
	private $ipasmt4;
	private $ipasmt5;
	private $ipssmt1;
	private $ipssmt2;
	private $ipssmt3;
	private $ipssmt4;
	private $ipssmt5;
	private $agamasmt1;
	private $agamasmt2;
	private $agamasmt3;
	private $agamasmt4;
	private $agamasmt5;
	private $ppknsmt1;
	private $ppknsmt2;
	private $ppknsmt3;
	private $ppknsmt4;
	private $ppknsmt5;
	private $penjassmt1;
	private $penjassmt2;
	private $penjassmt3;
	private $penjassmt4;
	private $penjassmt5;
	private $senismt1;
	private $senismt2;
	private $senismt3;
	private $senismt4;
	private $senismt5;

	private $email;


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function setIdCalonSiswa($idcalonsiswa)
	{
		$this->idcalonsiswa = $idcalonsiswa;
	}
	public function setIdUser($iduser)
	{
		$this->iduser = $iduser;
	}
	public function setNoPendaftaran($nopendaftaran)
	{
		$this->nopendaftaran = $nopendaftaran;
	} 
	public function setLembaga($lembaga)
	{
		$this->lembaga = $lembaga;
	}
	public function setKelompok($kelompok)
	{
		$this->kelompok = $kelompok;
	}   
	public function setTahunMasuk($tahunmasuk)
	{
		$this->tahunmasuk = $tahunmasuk;
	}
	public function setNISN($nisn)
	{
		$this->nisn = $nisn;
	}
	public function setNoUN($noun)
	{
		$this->noun = $noun;
	}
	public function setNoKK($nokk)
	{
		$this->nokk = $nokk;
	}
	public function setNIK($nik)
	{
		$this->nik = $nik;
	}
	public function setNoAkta($noakta)
	{
		$this->noakta = $noakta;
	}
	public function setNama($nama)
	{
		$this->nama = $nama;
	}
	public function setPanggilan($panggilan)
	{
		$this->panggilan = $panggilan;
	}
	public function setJenisKelamin($jeniskelamin)
	{
		$this->jeniskelamin = $jeniskelamin;
	}
	public function setTempatLahir($tmplahir)
	{
		$this->tmplahir = $tmplahir;
	}
	public function setTanggalLahir($tgllahir)
	{
		$this->tgllahir = $tgllahir;
	}
	public function setAgama($agama)
	{
		$this->agama = $agama;
	} 
	public function setSuku($suku)
	{
		$this->suku = $suku;
	}
	public function setKondisi($kondisi)
	{
		$this->kondisi = $kondisi;
	}

	public function setKewarganegaraan($warga)
	{
		$this->warga = $warga;
	}

	public function setAnakKe($anakke)
	{
		$this->anakke = $anakke;
	}
	public function setJumlahSaudara($jsaudara)
	{
		$this->jsaudara = $jsaudara;
	}
	public function setAlamatSiswa($alamatsiswa)
	{
		$this->alamatsiswa = $alamatsiswa;
	}
	public function setDesa($desa)
	{
		$this->desa = $desa;
	}
	public function setRT($rt)
	{
		$this->rt = $rt;
	}
	public function setRW($rw)
	{
		$this->rw = $rw;
	}
	public function setKecamatan($kecamatan)
	{
		$this->kecamatan = $kecamatan;
	}
	public function setKota($kota)
	{
		$this->kota = $kota;
	}
	public function setProvinsi($provinsi)
	{
		$this->provinsi = $provinsi;
	}
	public function setKodePos($kodepos)
	{
		$this->kodepos = $kodepos;
	}
	public function setJarak($jarak)
	{
		$this->jarak = $jarak;
	}
	public function setHPSiswa($hpsiswa)
	{
		$this->hpsiswa = $hpsiswa;
	}
	public function setEmailSiswa($emailsiswa)
	{
		$this->emailsiswa = $emailsiswa;
	}
	public function setAsalSekolah($asalsekolah)
	{
		$this->asalsekolah = $asalsekolah;
	}
	public function setNoIjasah($noijasah)
	{
		$this->noijasah = $noijasah;
	}

	public function setTanggalIjasah($tglijasah)
	{
		$this->tglijasah = $tglijasah;
	}

	public function setKeteranganSekolah($ketsekolah)
	{
		$this->ketsekolah = $ketsekolah;
	}

	public function setDarah($darah)
	{
		$this->darah = $darah;
	}
	public function setBerat($berat)
	{
		$this->berat = $berat;
	}
	public function setTinggi($tinggi)
	{
		$this->tinggi = $tinggi;
	}
	public function setUkuranSepatu($ukuransepatu)
	{
		$this->ukuransepatu = $ukuransepatu;
	}
	public function setUkuranBaju($ukuranbaju)
	{
		$this->ukuranbaju = $ukuranbaju;
	}
	public function setUkuranCelana($ukurancelana)
	{
		$this->ukurancelana = $ukurancelana;
	}
	public function setKesehatan($kesehatan)
	{
		$this->kesehatan = $kesehatan;
	}
	public function setCita($cita)
	{
		$this->cita = $cita;
	}
	public function setHobi($hobi)
	{
		$this->hobi = $hobi;
	}
	public function setNamaAyah($namaayah)
	{
		$this->namaayah = $namaayah;
	}
	public function setNamaIbu($namaibu)
	{
		$this->namaibu = $namaibu;
	}
	public function setNIKAyah($nikayah)
	{
		$this->nikayah = $nikayah;
	}
	public function setNIKIbu($nikibu)
	{
		$this->nikibu = $nikibu;
	}
	public function setAlmAyah($almayah)
	{
		$this->almayah = $almayah;
	}
	public function setAlmIbu($almibu)
	{
		$this->almibu = $almibu;
	}
	public function setStatusAyah($statusayah)
	{
		$this->statusayah = $statusayah;
	}
	public function setStatusIbu($statusibu)
	{
		$this->statusibu = $statusibu;
	}
	public function setTempatLahirAyah($tmplahirayah)
	{
		$this->tmplahirayah = $tmplahirayah;
	}
	public function setTempatLahirIbu($tmplahiribu)
	{
		$this->tmplahiribu = $tmplahiribu;
	}
	public function setTanggalLahirAyah($tgllahirayah)
	{
		$this->tgllahirayah = $tgllahirayah;
	}
	public function setTanggalLahirIbu($tgllahiribu)
	{
		$this->tgllahiribu = $tgllahiribu;
	}
	public function setPendidikanAyah($pendidikanayah)
	{
		$this->pendidikanayah = $pendidikanayah;
	}
	public function setPendidikanIbu($pendidikanibu)
	{
		$this->pendidikanibu = $pendidikanibu;
	}
	public function setPekerjaanAyah($pekerjaanayah)
	{
		$this->pekerjaanayah = $pekerjaanayah;
	}
	public function setPekerjaanIbu($pekerjaanibu)
	{
		$this->pekerjaanibu = $pekerjaanibu;
	}
	public function setPenghasilanAyah($penghasilanayah)
	{
		$this->penghasilanayah = $penghasilanayah;
	}
	public function setPenghasilanIbu($penghasilanibu)
	{
		$this->penghasilanibu = $penghasilanibu;
	}
	public function setEmailAyah($emailayah)
	{
		$this->emailayah = $emailayah;
	}
	public function setEmailIbu($emailibu)
	{
		$this->emailibu = $emailibu;
	}
	public function setAlamatOrtu($alamatortu)
	{
		$this->alamatortu = $alamatortu;
	}
	public function setHPOrtu($hportu)
	{
		$this->hportu = $hportu;
	}
	public function setPrestasi($prestasi)
	{
		$this->prestasi = $prestasi;
	}
	public function setLinkFoto($linkfoto)
	{
		$this->linkfoto = $linkfoto;
	}
	
	//untuk umum
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
	//Atribut Nilai Raport	
	public function setBinSmt1($binsmt1)
	{
		$this->binsmt1 = $binsmt1;
	}
	public function setBinSmt2($binsmt2)
	{
		$this->binsmt2 = $binsmt2;
	}
	public function setBinSmt3($binsmt3)
	{
		$this->binsmt3 = $binsmt3;
	}
	public function setBinSmt4($binsmt4)
	{
		$this->binsmt4 = $binsmt4;
	}
	public function setBinSmt5($binsmt5)
	{
		$this->binsmt5 = $binsmt5;
	}

	//Atribut Nilai Bing
	public function setBingSmt1($bingsmt1)
	{
		$this->bingsmt1 = $bingsmt1;
	}
	public function setBingSmt2($bingsmt2)
	{
		$this->bingsmt2 = $bingsmt2;
	}
	public function setBingSmt3($bingsmt3)
	{
		$this->bingsmt3 = $bingsmt3;
	}
	public function setBingSmt4($bingsmt4)
	{
		$this->bingsmt4 = $bingsmt4;
	}
	public function setBingSmt5($bingsmt5)
	{
		$this->bingsmt5 = $bingsmt5;
	}
	
	//Atribut Nilai Mat
	public function setMatSmt1($matsmt1)
	{
		$this->matsmt1 = $matsmt1;
	}
	public function setMatSmt2($matsmt2)
	{
		$this->matsmt2 = $matsmt2;
	}
	public function setMatSmt3($matsmt3)
	{
		$this->matsmt3 = $matsmt3;
	}
	public function setMatSmt4($matsmt4)
	{
		$this->matsmt4 = $matsmt4;
	}
	public function setMatSmt5($matsmt5)
	{
		$this->matsmt5 = $matsmt5;
	}

	//Atribut Nilai IPA
	public function setIpaSmt1($ipasmt1)
	{
		$this->ipasmt1 = $ipasmt1;
	}
	public function setIpaSmt2($ipasmt2)
	{
		$this->ipasmt2 = $ipasmt2;
	}
	public function setIpaSmt3($ipasmt3)
	{
		$this->ipasmt3 = $ipasmt3;
	}
	public function setIpaSmt4($ipasmt4)
	{
		$this->ipasmt4 = $ipasmt4;
	}
	public function setIpaSmt5($ipasmt5)
	{
		$this->ipasmt5 = $ipasmt5;
	}


	//Atribut Nilai IPS
	public function setIpsSmt1($ipssmt1)
	{
		$this->ipssmt1 = $ipssmt1;
	}
	public function setIpsSmt2($ipssmt2)
	{
		$this->ipssmt2 = $ipssmt2;
	}
	public function setIpsSmt3($ipssmt3)
	{
		$this->ipssmt3 = $ipssmt3;
	}
	public function setIpsSmt4($ipssmt4)
	{
		$this->ipssmt4 = $ipssmt4;
	}
	public function setIpsSmt5($ipssmt5)
	{
		$this->ipssmt5 = $ipssmt5;
	}

	//Atribut Nilai Agama
	public function setAgamaSmt1($agamasmt1)
	{
		$this->agamasmt1 = $agamasmt1;
	}
	public function setAgamaSmt2($agamasmt2)
	{
		$this->agamasmt2 = $agamasmt2;
	}
	public function setAgamaSmt3($agamasmt3)
	{
		$this->agamasmt3 = $agamasmt3;
	}
	public function setAgamaSmt4($agamasmt4)
	{
		$this->agamasmt4 = $agamasmt4;
	}
	public function setAgamaSmt5($agamasmt5)
	{
		$this->agamasmt5 = $agamasmt5;
	}

	//Atribut Nilai PPKN
	public function setPpknSmt1($ppknsmt1)
	{
		$this->ppknsmt1 = $ppknsmt1;
	}
	public function setPpknSmt2($ppknsmt2)
	{
		$this->ppknsmt2 = $ppknsmt2;
	}
	public function setPpknSmt3($ppknsmt3)
	{
		$this->ppknsmt3 = $ppknsmt3;
	}
	public function setPpknSmt4($ppknsmt4)
	{
		$this->ppknsmt4 = $ppknsmt4;
	}
	public function setPpknSmt5($ppknsmt5)
	{
		$this->ppknsmt5 = $ppknsmt5;
	}


	//Atribut Nilai Penjas
	public function setPenjasSmt1($penjassmt1)
	{
		$this->penjassmt1 = $penjassmt1;
	}
	public function setPenjasSmt2($penjassmt2)
	{
		$this->penjassmt2 = $penjassmt2;
	}
	public function setPenjasSmt3($penjassmt3)
	{
		$this->penjassmt3 = $penjassmt3;
	}
	public function setPenjasSmt4($penjassmt4)
	{
		$this->penjassmt4 = $penjassmt4;
	}
	public function setPenjasSmt5($penjassmt5)
	{
		$this->penjassmt5 = $penjassmt5;
	}

	//Atribut Nilai Seni
	public function setSeniSmt1($senismt1)
	{
		$this->senismt1 = $senismt1;
	}
	public function setSeniSmt2($senismt2)
	{
		$this->senismt2 = $senismt2;
	}
	public function setSeniSmt3($senismt3)
	{
		$this->senismt3 = $senismt3;
	}
	public function setSeniSmt4($senismt4)
	{
		$this->senismt4 = $senismt4;
	}
	public function setSeniSmt5($senismt5)
	{
		$this->senismt5 = $senismt5;
	}


	public function getAllCalonSiswa()
	{
		//$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT *
			FROM psb_calonsiswa
			WHERE 
				iduser = '$this->iduser' 
			");
		$this->db->close();
		return $query;
	}

	public function getCalonSiswaByNoPendaftaran()
	{
		//$this->db->cache_on();
		$query = $this->db->query
		("
			SELECT *
			FROM psb_calonsiswa
			WHERE 
				nopendaftaran = '$this->nopendaftaran' 
			");
		$this->db->close();
		return $query;
	}

	public function addCalonSiswa()
	{
		//$this->db->cache_on();
		$query = $this->db->query
		("
			INSERT INTO psb_calonsiswa (iduser, nama, panggilan, emailsiswa)
			SELECT iduser, nama, panggilan, email FROM psb_user
			WHERE email = '$this->email'

			");
		$this->db->close();
		return $query;
	}

	public function addCalonSiswaFromAdmin()
	{
		//$this->db->cache_on();
		$query = $this->db->query
		("
			INSERT INTO psb_calonsiswa (
				nopendaftaran, lembaga, kelompok, tahunmasuk, nisn, noun, nokk, nik, noakta, nama, panggilan, jeniskelamin, tmplahir, tgllahir, agama, suku, kondisi, warga, anakke, jsaudara, alamatsiswa, desa, rt, rw, kecamatan, kota, provinsi, kodepos, jarak, hpsiswa, emailsiswa, asalsekolah, noijasah, tglijasah, ketsekolah, darah, berat, tinggi, ukuransepatu, ukuranbaju, ukurancelana, kesehatan, namaayah, namaibu, nikayah, nikibu, almayah, almibu, statusayah, statusibu, tmplahirayah, tmplahiribu, tgllahirayah, tgllahiribu, pendidikanayah, pendidikanibu, pekerjaanayah, pekerjaanibu, penghasilanayah, penghasilanibu, emailayah, emailibu, alamatortu, hportu, cita, hobi, foto, binsmt1, binsmt2, binsmt3, binsmt4, binsmt5, bingsmt1, bingsmt2, bingsmt3, bingsmt4, bingsmt5, matsmt1, matsmt2, matsmt3, matsmt4, matsmt5, ipasmt1, ipasmt2, ipasmt3, ipasmt4, ipasmt5, ipssmt1, ipssmt2, ipssmt3, ipssmt4, ipssmt5, agamasmt1, agamasmt2, agamasmt3, agamasmt4, agamasmt5, ppknsmt1, ppknsmt2, ppknsmt3, ppknsmt4, ppknsmt5, penjassmt1, penjassmt2, penjassmt3, penjassmt4, penjassmt5, senismt1, senismt2, senismt3, senismt4, senismt5, prestasi, statusfinalisasi, ts
			)
			VALUES(
				'$this->nopendaftaran',
				'$this->lembaga',
				'$this->kelompok',
				'$this->tahunmasuk',
				'$this->nisn',
				'$this->noun',
				'$this->nokk',
				'$this->nik',
				'$this->noakta',
				'$this->nama',
				'$this->panggilan',
				'$this->jeniskelamin',
				'$this->tmplahir',
				'$this->tgllahir',
				'$this->agama',
				'$this->suku',
				'$this->kondisi',
				'$this->warga',
				'$this->anakke',
				'$this->jsaudara',
				'$this->alamatsiswa',
				'$this->desa',
				'$this->rt',
				'$this->rw',
				'$this->kecamatan',
				'$this->kota',
				'$this->provinsi',
				'$this->kodepos ',
				'$this->jarak',
				'$this->hpsiswa',
				'$this->emailsiswa',
				'$this->asalsekolah',
				'$this->noijasah ',
				'$this->tglijasah',
				'$this->ketsekolah',
				'$this->darah',
				'$this->berat',
				'$this->tinggi',
				'$this->ukuransepatu',
				'$this->ukuranbaju',
				'$this->ukurancelana',
				'$this->kesehatan',
				'$this->namaayah',
				'$this->namaibu',
				'$this->nikayah',
				'$this->nikibu',
				'$this->almayah',
				'$this->almibu',
				'$this->statusayah',
				'$this->statusibu ',
				'$this->tmplahirayah',
				'$this->tmplahiribu ',
				'$this->tgllahirayah',
				'$this->tgllahiribu ',
				'$this->pendidikanayah ',
				'$this->pendidikanibu',
				'$this->pekerjaanayah',
				'$this->pekerjaanibu ',
				'$this->penghasilanayah',
				'$this->penghasilanibu ',
				'$this->emailayah',
				'$this->emailibu',
				'$this->alamatortu',
				'$this->hportu',
				'$this->cita',
				'$this->hobi',
				'$this->linkfoto',
				'$this->binsmt1',
				'$this->binsmt2',
				'$this->binsmt3',
				'$this->binsmt4',
				'$this->binsmt5',
				'$this->bingsmt1',
				'$this->bingsmt2',
				'$this->bingsmt3',
				'$this->bingsmt4',
				'$this->bingsmt5',
				'$this->matsmt1',
				'$this->matsmt2',
				'$this->matsmt3',
				'$this->matsmt4',
				'$this->matsmt5',
				'$this->ipasmt1',
				'$this->ipasmt2',
				'$this->ipasmt3',
				'$this->ipasmt4',
				'$this->ipasmt5',
				'$this->ipssmt1',
				'$this->ipssmt2',
				'$this->ipssmt3',
				'$this->ipssmt4',
				'$this->ipssmt5',
				'$this->agamasmt1',
				'$this->agamasmt2',
				'$this->agamasmt3',
				'$this->agamasmt4',
				'$this->agamasmt5',
				'$this->ppknsmt1',
				'$this->ppknsmt2',
				'$this->ppknsmt3',
				'$this->ppknsmt4',
				'$this->ppknsmt5',
				'$this->penjassmt1',
				'$this->penjassmt2',
				'$this->penjassmt3',
				'$this->penjassmt4',
				'$this->penjassmt5',
				'$this->senismt1',
				'$this->senismt2',
				'$this->senismt3',
				'$this->senismt4',
				'$this->senismt5',
				'$this->prestasi',
				'y',
				NOW()
			)
			");
		$this->db->close();
		return $query;
	}

	public function hapusDataSiswa()
	{
		$this->load->database();
		$query = $this->db->query
				("
					DELETE
					FROM psb_calonsiswa
					WHERE 
						nopendaftaran = '$this->nopendaftaran'	
				");
		$this->db->close();
	}

	public function updateCalonSiswa()
	{
		//$this->db->cache_on();
		$query = $this->db->query
		("
			UPDATE psb_calonsiswa
			SET
				nopendaftaran = '$this->nopendaftaran',
				lembaga = '$this->lembaga',
				kelompok = '$this->kelompok',
				tahunmasuk = '$this->tahunmasuk',
				nisn = '$this->nisn',
				noun = '$this->noun',  
				nokk = '$this->nokk',
				nik = '$this->nik',
				noakta = '$this->noakta',	
				nama = '$this->nama', 
				panggilan = '$this->panggilan', 
				jeniskelamin = '$this->jeniskelamin', 
				tmplahir = '$this->tmplahir',
				tgllahir = '$this->tgllahir',
				agama = '$this->agama',
				suku = '$this->suku',
				kondisi	= '$this->kondisi',
				warga = '$this->warga',
				anakke	= '$this->anakke',
				jsaudara = '$this->jsaudara',
				alamatsiswa	= '$this->alamatsiswa',
				desa = '$this->desa', 
				rt = '$this->rt', 
				rw = '$this->rw', 
				kecamatan = '$this->kecamatan', 
				kota = '$this->kota', 
				provinsi = '$this->provinsi', 
				kodepos = '$this->kodepos', 
				jarak = '$this->jarak',
				hpsiswa = '$this->hpsiswa', 
				emailsiswa = '$this->emailsiswa', 
				asalsekolah = '$this->asalsekolah', 
				noijasah = '$this->noijasah', 
				tglijasah = '$this->tglijasah', 
				ketsekolah = '$this->ketsekolah', 
				darah = '$this->darah', 
				berat = '$this->berat', 
				tinggi = '$this->tinggi', 
				ukuransepatu = '$this->ukuransepatu', 
				ukuranbaju = '$this->ukuranbaju', 
				ukurancelana = '$this->ukurancelana', 
				kesehatan = '$this->kesehatan',
				namaayah = '$this->namaayah', 
				namaibu = '$this->namaibu',
				nikayah = '$this->nikayah', 
				nikibu = '$this->nikibu', 
				almayah = '$this->almayah', 
				almibu = '$this->almibu', 
				statusayah = '$this->statusayah', 
				statusibu = '$this->statusibu', 
				tmplahirayah = '$this->tmplahirayah', 
				tmplahiribu = '$this->tmplahiribu', 
				tgllahirayah = '$this->tgllahirayah', 
				tgllahiribu = '$this->tgllahiribu', 
				pendidikanayah = '$this->pendidikanayah', 
				pendidikanibu = '$this->pendidikanibu', 
				pekerjaanayah = '$this->pekerjaanayah', 
				pekerjaanibu = '$this->pekerjaanibu', 
				penghasilanayah	= '$this->penghasilanayah', 
				penghasilanibu = '$this->penghasilanibu', 
				emailayah = '$this->emailayah', 
				emailibu = '$this->emailibu', 
				alamatortu = '$this->alamatortu', 
				hportu = '$this->hportu',
				cita = '$this->cita',
				hobi = '$this->hobi',
				foto = '$this->linkfoto',
				binsmt1	='$this->binsmt1',
				binsmt2	='$this->binsmt2',
				binsmt3	='$this->binsmt3',
				binsmt4	='$this->binsmt4',
				binsmt5	='$this->binsmt5',
				bingsmt1 ='$this->bingsmt1',
				bingsmt2 ='$this->bingsmt2',
				bingsmt3 ='$this->bingsmt3',
				bingsmt4 ='$this->bingsmt4',
				bingsmt5 ='$this->bingsmt5',
				matsmt1	='$this->matsmt1',
				matsmt2	='$this->matsmt2',
				matsmt3	='$this->matsmt3',
				matsmt4	='$this->matsmt4',
				matsmt5	='$this->matsmt5',
				ipasmt1	='$this->ipasmt1',
				ipasmt2	='$this->ipasmt2',
				ipasmt3	='$this->ipasmt3',
				ipasmt4	='$this->ipasmt4',
				ipasmt5	='$this->ipasmt5',
				ipssmt1	='$this->ipssmt1',
				ipssmt2	='$this->ipssmt2',
				ipssmt3	='$this->ipssmt3',
				ipssmt4	='$this->ipssmt4',
				ipssmt5	='$this->ipssmt5',
				agamasmt1 ='$this->agamasmt1',
				agamasmt2 ='$this->agamasmt2',
				agamasmt3 ='$this->agamasmt3',
				agamasmt4 ='$this->agamasmt4',
				agamasmt5 ='$this->agamasmt5',
				ppknsmt1 ='$this->ppknsmt1',
				ppknsmt2 ='$this->ppknsmt2',
				ppknsmt3 ='$this->ppknsmt3',
				ppknsmt4 ='$this->ppknsmt4',
				ppknsmt5 ='$this->ppknsmt5',
				penjassmt1 ='$this->penjassmt1',
				penjassmt2 ='$this->penjassmt2',
				penjassmt3 ='$this->penjassmt3',
				penjassmt4 ='$this->penjassmt4',
				penjassmt5 ='$this->penjassmt5',
				senismt1 ='$this->senismt1',
				senismt2 ='$this->senismt2',
				senismt3 ='$this->senismt3',
				senismt4 ='$this->senismt4',
				senismt5 ='$this->senismt5',
				prestasi ='$this->prestasi',
				ts = NOW()
			WHERE
				iduser = '$this->iduser'
			");

		$this->db->close();
		return $query;
	}

	public function updateDataSiswaFromAdmin()
	{
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE psb_calonsiswa
			SET
				nopendaftaran = '$this->nopendaftaran',
				lembaga = '$this->lembaga',
				kelompok = '$this->kelompok',
				tahunmasuk = '$this->tahunmasuk',
				nisn = '$this->nisn',
				noun = '$this->noun',  
				nokk = '$this->nokk',
				nik = '$this->nik',
				noakta = '$this->noakta',
				nama = '$this->nama', 
				panggilan = '$this->panggilan', 
				jeniskelamin = '$this->jeniskelamin', 
				tmplahir = '$this->tmplahir',
				tgllahir = '$this->tgllahir',
				agama = '$this->agama',
				suku = '$this->suku',
				kondisi	= '$this->kondisi',
				warga = '$this->warga',
				anakke	= '$this->anakke',
				jsaudara = '$this->jsaudara',
				alamatsiswa	= '$this->alamatsiswa',
				desa = '$this->desa', 
				rt = '$this->rt', 
				rw = '$this->rw', 
				kecamatan = '$this->kecamatan', 
				kota = '$this->kota', 
				provinsi = '$this->provinsi', 
				kodepos = '$this->kodepos', 
				jarak = '$this->jarak',
				hpsiswa = '$this->hpsiswa', 
				emailsiswa = '$this->emailsiswa', 
				asalsekolah = '$this->asalsekolah', 
				noijasah = '$this->noijasah', 
				tglijasah = '$this->tglijasah', 
				ketsekolah = '$this->ketsekolah', 
				darah = '$this->darah', 
				berat = '$this->berat', 
				tinggi = '$this->tinggi', 
				ukuransepatu = '$this->ukuransepatu', 
				ukuranbaju = '$this->ukuranbaju', 
				ukurancelana = '$this->ukurancelana', 
				kesehatan = '$this->kesehatan',
				namaayah = '$this->namaayah', 
				namaibu = '$this->namaibu',
				nikayah = '$this->nikayah', 
				nikibu = '$this->nikibu',  
				almayah = '$this->almayah', 
				almibu = '$this->almibu', 
				statusayah = '$this->statusayah', 
				statusibu = '$this->statusibu', 
				tmplahirayah = '$this->tmplahirayah', 
				tmplahiribu = '$this->tmplahiribu', 
				tgllahirayah = '$this->tgllahirayah', 
				tgllahiribu = '$this->tgllahiribu', 
				pendidikanayah = '$this->pendidikanayah', 
				pendidikanibu = '$this->pendidikanibu', 
				pekerjaanayah = '$this->pekerjaanayah', 
				pekerjaanibu = '$this->pekerjaanibu', 
				penghasilanayah	= '$this->penghasilanayah', 
				penghasilanibu = '$this->penghasilanibu', 
				emailayah = '$this->emailayah', 
				emailibu = '$this->emailibu', 
				alamatortu = '$this->alamatortu', 
				hportu = '$this->hportu',
				cita = '$this->cita',
				hobi = '$this->hobi',
				binsmt1	='$this->binsmt1',
				binsmt2	='$this->binsmt2',
				binsmt3	='$this->binsmt3',
				binsmt4	='$this->binsmt4',
				binsmt5	='$this->binsmt5',
				bingsmt1 ='$this->bingsmt1',
				bingsmt2 ='$this->bingsmt2',
				bingsmt3 ='$this->bingsmt3',
				bingsmt4 ='$this->bingsmt4',
				bingsmt5 ='$this->bingsmt5',
				matsmt1	='$this->matsmt1',
				matsmt2	='$this->matsmt2',
				matsmt3	='$this->matsmt3',
				matsmt4	='$this->matsmt4',
				matsmt5	='$this->matsmt5',
				ipasmt1	='$this->ipasmt1',
				ipasmt2	='$this->ipasmt2',
				ipasmt3	='$this->ipasmt3',
				ipasmt4	='$this->ipasmt4',
				ipasmt5	='$this->ipasmt5',
				ipssmt1	='$this->ipssmt1',
				ipssmt2	='$this->ipssmt2',
				ipssmt3	='$this->ipssmt3',
				ipssmt4	='$this->ipssmt4',
				ipssmt5	='$this->ipssmt5',
				agamasmt1 ='$this->agamasmt1',
				agamasmt2 ='$this->agamasmt2',
				agamasmt3 ='$this->agamasmt3',
				agamasmt4 ='$this->agamasmt4',
				agamasmt5 ='$this->agamasmt5',
				ppknsmt1 ='$this->ppknsmt1',
				ppknsmt2 ='$this->ppknsmt2',
				ppknsmt3 ='$this->ppknsmt3',
				ppknsmt4 ='$this->ppknsmt4',
				ppknsmt5 ='$this->ppknsmt5',
				penjassmt1 ='$this->penjassmt1',
				penjassmt2 ='$this->penjassmt2',
				penjassmt3 ='$this->penjassmt3',
				penjassmt4 ='$this->penjassmt4',
				penjassmt5 ='$this->penjassmt5',
				senismt1 ='$this->senismt1',
				senismt2 ='$this->senismt2',
				senismt3 ='$this->senismt3',
				senismt4 ='$this->senismt4',
				senismt5 ='$this->senismt5',
				prestasi ='$this->prestasi',
				statusfinalisasi = 'y',
				ts = NOW()
			WHERE
				idcalonsiswa = '$this->idcalonsiswa'
			");

		$this->db->close();
		return $query;
	}


	public function getFoto()
	{
		$data="";
		$this->load->database();
		$query = $this->db->query
				("
					SELECT foto
					FROM psb_calonsiswa
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();

		foreach ($query->result() as $row)
			$data['foto'] = $row->foto;
		return $data['foto'];
	}
	public function getFotoFromAdmin($nopendaftaran)
	{
		$data="";
		$this->load->database();
		$query = $this->db->query
				("
					SELECT foto
					FROM psb_calonsiswa
					WHERE 
						nopendaftaran = '$nopendaftaran'	
				");
		$this->db->close();

		foreach ($query->result() as $row)
			$data['foto'] = $row->foto;
		return $data['foto'];
	}

	public function setFoto()
	{
		$this->load->database();
		$query = $this->db->query
				("
					UPDATE psb_calonsiswa
					SET foto = '$this->linkfoto'
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();
		return $query;
	}

	public function updateStatusFinalisasi()
	{
		$this->load->database();
		$query = $this->db->query
				("
					UPDATE psb_calonsiswa
					SET statusfinalisasi = 'y'
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();
		return $query;
	}

	//Aktif Finalisasi berdasarkan No. Pendaftaran
	public function aktifStatusFinalisasi()
	{
		$this->load->database();
		$query = $this->db->query
				("
					UPDATE psb_calonsiswa
					SET statusfinalisasi = 'y'
					WHERE 
						nopendaftaran = '$this->nopendaftaran'	
				");
		$this->db->close();
		return $query;
	}

	public function pasifStatusFinalisasi()
	{
		$this->load->database();
		$query = $this->db->query
				("
					UPDATE psb_calonsiswa
					SET statusfinalisasi = 'n'
					WHERE 
						nopendaftaran = '$this->nopendaftaran'	
				");
		$this->db->close();
		return $query;
	}

	public function getDashboard()
	{
		$this->load->database();
		$query = $this->db->query
				("
					SELECT nama, nisn, noun, nopendaftaran, statusfinalisasi
					FROM psb_calonsiswa
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();
		return $query;


	}

	public function getStatusFinalisasi()
	{
		//$data['statusfinalisasi']="";
		$this->load->database();
		$query = $this->db->query
				("
					SELECT statusfinalisasi
					FROM psb_calonsiswa
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();
		foreach ($query->result() as $row)
			$data['statusfinalisasi'] = $row->statusfinalisasi;
		return $data['statusfinalisasi'];
	}

/*--------------------------------------------------------------------*/
	//COUNT DASHBOARD
	public function getJumlahPSB()
	{
		//$data['statusfinalisasi']="";
		$this->load->database();
		$query = $this->db->query
		("
			SELECT  COUNT(*) as jumlahpsb 
			FROM psb_calonsiswa
			WHERE statusfinalisasi = 'y' AND tahunmasuk='$this->tahunmasuk'	
		");
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row)
				$data['jumlahpsb'] = $row->jumlahpsb;
		}
		
		return $data['jumlahpsb'];	
	}

	public function getJumlahLakiLaki()
	{
		$query = $this->db->query
		("
			SELECT COUNT(jeniskelamin) as jumlahlakilaki
			FROM psb_calonsiswa
			WHERE jeniskelamin='L' AND statusfinalisasi = 'y' AND tahunmasuk='$this->tahunmasuk'

		");
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row)
				$data['jumlahlakilaki'] = $row->jumlahlakilaki;
		}
		return $data['jumlahlakilaki'];
	}

	public function getJumlahPerempuan()
	{
		$query = $this->db->query
		("
			SELECT COUNT(jeniskelamin) as jumlahperempuan
			FROM psb_calonsiswa
			WHERE jeniskelamin='P' AND statusfinalisasi = 'y' AND tahunmasuk='$this->tahunmasuk'

		");
		if ($query->num_rows()>0){
					foreach ($query->result() as $row)
						$data['jumlahperempuan'] = $row->jumlahperempuan;
				}
				return $data['jumlahperempuan'];
	}

	//seharusnya di tahun berapa jumlah pendaftarn PSB nya
	//revisi
	public function getPSBMAU()
	{
		$query = $this->db->query
		("
			SELECT COUNT(lembaga) as psbmau
			FROM psb_calonsiswa
			WHERE lembaga='MA Unggulan Amanatul Ummah' AND statusfinalisasi = 'y'
					AND tahunmasuk='$this->tahunmasuk'

		");
		if ($query->num_rows()>0){
					foreach ($query->result() as $row)
						$data['psbmau'] = $row->psbmau;
				}
				return $data['psbmau'];
	}
	public function getPSBMBI()
	{
		$query = $this->db->query
		("
			SELECT COUNT(lembaga) as psbmbi
			FROM psb_calonsiswa
			WHERE lembaga='MBI Amanatul Ummah' AND statusfinalisasi = 'y'
					AND tahunmasuk='$this->tahunmasuk'

		");
		if ($query->num_rows()>0){
					foreach ($query->result() as $row)
						$data['psbmbi'] = $row->psbmbi;
				}
				return $data['psbmbi'];
	}

	public function getKelompokLembaga()
	{
		$query = $this->db->query
		("
			SELECT COUNT(kelompok) as kelompoklembaga
			FROM psb_calonsiswa
			WHERE lembaga='$this->lembaga' AND 
					statusfinalisasi = 'y' AND kelompok = '$this->kelompok'
					AND tahunmasuk='$this->tahunmasuk'
		");
		return $query; 
	}

	/*--------------------------------------------------------------------*/

	//Cari Data Siswa
	public function cariDataSiswa()
	{
		$query = $this->db->query
		("
			SELECT *
			FROM psb_calonsiswa
			WHERE lembaga='$this->lembaga' AND 
					kelompok = '$this->kelompok' AND
					tahunmasuk = '$this->tahunmasuk'
		");
		return $query; 
	}

	
	// Query untuk cek lembaga dan kelompok siswa 
		public function getLembagaSiswa()
	{
		$this->load->database();
		$query = $this->db->query
				("
					SELECT lembaga
					FROM psb_calonsiswa
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();
		return $query;
	}

	public function getKelompokSiswa()
	{
		$this->load->database();
		$query = $this->db->query
				("
					SELECT kelompok
					FROM psb_calonsiswa
					WHERE 
						iduser = '$this->iduser'	
				");
		$this->db->close();
		return $query;
	}

	public function getCountKelompokLembaga()
	{
		$query = $this->db->query
		("
			SELECT COUNT(kelompok) as jumlahkelompok
			FROM psb_calonsiswa
			WHERE lembaga='$this->lembaga'
					AND kelompok = '$this->kelompok'
					AND tahunmasuk='$this->tahunmasuk'
		");
		
		if ($query->num_rows()>0){
					foreach ($query->result() as $row)
						$data['jumlahkelompok'] = $row->jumlahkelompok;
				}
				return $data['jumlahkelompok'];
	}



	/*QUERY PENCARIAN SISWA*/
	public function getNoPendaftaran()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE nopendaftaran='$this->nopendaftaran' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getNISN()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE nisn='$this->nisn' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getNama()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE nama LIKE '%$this->nama%' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getPanggilan()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE panggilan LIKE '%$this->panggilan%' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getAgama()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE agama='$this->agama' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getSuku()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE suku='$this->suku' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getKondisi()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE kondisi='$this->kondisi' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getDarah()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE darah='$this->darah' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getAlamatSiswa()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE alamatsiswa LIKE '%$this->alamatsiswa%' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getAsalSekolah()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE asalsekolah='$this->alamatsiswa' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getNamaAyah()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE namaayah='$this->namaayah' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getNamaIbu()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE namaibu='$this->namaibu' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}
	public function getAlamatOrtu()
	{
		$query = $this->db->query
		("
			SELECT nopendaftaran, nisn, nama, kelompok
			FROM psb_calonsiswa
			WHERE alamatortu LIKE '%$this->alamatortu%' AND
					lembaga = '$this->lembaga'
		");
		$this->db->close();
		return $query;
	}

}