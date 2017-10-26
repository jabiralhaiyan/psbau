<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library("Pdf");
	}
	protected function zerofill ($num, $zerofill)
	{
		return str_pad($num, $zerofill, '0', STR_PAD_LEFT);
	}
	public function index()
	{
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data = "";
			//title head
			$data['title']='Dashboard PSB | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');

			//notifikasi
			$data['ganti_password_berhasil'] = $this->session->flashdata('ganti_password_berhasil');
			// $data['pendaftaran_ditutup'] = $this->session->flashdata('pendaftaran_ditutup');

			$this->load->model('M_calonsiswa');
			$this->load->model('M_user');
			$this->load->model('M_referensi');

			$this->M_calonsiswa->setIdUser($iduser);
			$this->M_user->setIdUser($iduser);
			
			$query = $this->M_calonsiswa->getDashboard();
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					$data['nopendaftaran'] = $row->nopendaftaran;
					$data['nisn'] = $row->nisn;
					$data['noun'] = $row->noun;
					$data['nama'] = $row->nama;
					$data['statusfinalisasi'] = $row->statusfinalisasi;
				}
			}

			//get status daftar
			$data['statusdaftar'] = $this->M_user->getStatusDaftar();

			$this->load->view('calonsiswa/v_home', $data);
		}
	}

	public function unggahfoto()
	{
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data = "";

			//menu active & step by step
			$data=array(	
				'step_unggahfoto' 				=> 'href="" class="btn btn-primary btn-circle"',
				'step_pendaftaran' 				=> 'href="#" class="btn btn-default btn-circle disabled"',
				'step_finalisasi' 				=> 'href="#" class="btn btn-default btn-circle disabled"',
				'step_konfirmasi' 				=> 'href="#" class="btn btn-default btn-circle disabled"',
				'step_pembayaran' 				=> 'href="#" class="btn btn-default btn-circle disabled"'
				);

			//title head
			$data['title']='Unggah Foto | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');
			//notifikasi
			$data['upload_foto_gagal'] = $this->session->flashdata('upload_foto_gagal');

			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);

			$data['foto'] = $this->M_calonsiswa->getFoto();
			$data['statusfinalisasi'] = $this->M_calonsiswa->getStatusFinalisasi();

			if ($data['statusfinalisasi'] == 'y')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$this->load->view('calonsiswa/v_unggahfoto', $data);
			}
		}
	}

	public function do_unggahfoto()
	{
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$nama = $this->session->userdata('namasiswa');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data = "";

			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);
				
			$namaedit =  str_replace(" ", "_", $nama);

			//UPLOAD FOTO

			$this->load->library('upload');
	        $namafile = $iduser.'-'.$namaedit.'-'.time(); //nama file saya beri nama langsung dan diikuti fungsi time
	        $path = './assets/profpic/';
	        $config['upload_path'] = $path; //path folder
	        $config['allowed_types'] = 'jpg'; //type yang dapat diakses bisa anda sesuaikan
	        $config['max_size'] = '1048'; //maksimum besar file 1M
	        $config['max_width']  = '450'; //lebar maksimum 400 px
	        $config['max_height']  = '650'; //tinggi maksimu 600 px
	        $config['file_name'] = $namafile; //nama yang terupload nantinya
	 
	        $this->upload->initialize($config);
	         
	        if(!empty($_FILES['fileFoto']['name']))
	        {

	            if ($this->upload->do_upload('fileFoto'))
	            {
		            $this->upload->data();
		            $linkfoto = $namafile.'.jpg';
		 			$data['linkfoto'] = $this->M_calonsiswa->setLinkFoto($linkfoto);
	              
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	               $this->session->set_flashdata("upload_foto_gagal", "Format atau Ukuran Foto Tidak Sesuai");
	                redirect('pendaftaran/unggahfoto', 'location'); //jika gagal maka akan ditampilkan form upload
	            }
	        }
	        else{
	        	$data['foto'] = $this->M_calonsiswa->getFoto();
	        	$linkfoto = $data['foto'];
	        	$data['linkfoto'] = $this->M_calonsiswa->setLinkFoto($linkfoto);
	        }	

	        //END UPLOAD FOTO
			$query = $this->M_calonsiswa->setFoto();

			$this->session->set_flashdata('ubah_foto_berhasil','Anda berhasil mengubah foto pribadi anda');
			$this->load->helper('url');
			redirect('pendaftaran/formpendaftaran','location');
		}
	}

	public function formpendaftaran()
	{
		
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		
		//$data = ""; //inisialisasi
		
		
		//$statusfinalisasi = $data['statusfinalisasi'];

		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data = "";

			//menu active & step by step
			$data=array(	
				'step_unggahfoto' 				=> 'href="unggahfoto" class="btn btn-default btn-circle"',
				'step_pendaftaran' 				=> 'href="" class="btn btn-primary btn-circle "',
				'step_finalisasi' 				=> 'href="#" class="btn btn-default btn-circle disabled"',
				'step_konfirmasi' 				=> 'href="#" class="btn btn-default btn-circle disabled"',
				'step_pembayaran' 				=> 'href="#" class="btn btn-default btn-circle disabled"'
				);

			//title head
			$data['title']='Pendaftaran | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');

			//menu user
			//$data['login_berhasil'] = $this->session->flashdata('login_berhasil');
			$this->load->model('M_referensi');
			$data['_agama'] = $this->M_referensi->getAgama();
			$data['_pekerjaan'] = $this->M_referensi->getPekerjaan();
			$data['_kondisi'] = $this->M_referensi->getKondisi();
			$data['_penghasilan'] = $this->M_referensi->getPenghasilan();
			$data['_statusortu'] = $this->M_referensi->getStatusOrtu();
			$data['_suku'] = $this->M_referensi->getSuku();
			$data['_pendidikan'] = $this->M_referensi->getPendidikan();
			$data['_lembaga'] = $this->M_referensi->getLembaga();

			$lembaga = $this->input->get('lembaga');
			$data['_tahunmasuk'] = $this->M_referensi->getTahunMasuk($lembaga);

			$queryproses = $this->M_referensi->getProsesPenerimaanAktif($lembaga);
			if($queryproses->num_rows()>0)
			{
				foreach ($queryproses->result() as $row) {
					$data['idprosespenerimaan'] = $row->idprosespenerimaan;
					$data['proses'] = $row->proses;

					$data['_kelompok'] = $this->M_referensi->getKelompokAktif($data['idprosespenerimaan']);
					$this->load->view('calonsiswa/ajax_pendaftaran', $data);
				}
			}

			//email
			//$this->M_calonsiswa->setEmail($email);
			else
			{
				$this->load->model('M_calonsiswa');
				$this->M_calonsiswa->setIdUser($iduser);
			
				$query = $this->M_calonsiswa->getAllCalonSiswa();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$data['iduser'] = $row->iduser;
						$data['nopendaftaran'] = $row->nopendaftaran;
						$data['lembaga'] = $row->lembaga;
						$data['kelompok'] = $row->kelompok;
						$data['tahunmasuk'] = $row->tahunmasuk;
						$data['nisn'] = $row->nisn;
						$data['noun'] = $row->noun;
						$data['nokk'] = $row->nokk;
						$data['nik'] = $row->nik;
						$data['noakta'] = $row->noakta;
						$data['nama'] = $row->nama;
						$data['panggilan'] = $row->panggilan;
						$data['jeniskelamin'] = $row->jeniskelamin;
						$data['tmplahir'] = $row->tmplahir;
						$data['tgllahir'] = $row->tgllahir;
						$data['agama'] = $row->agama;
						$data['suku'] = $row->suku;
						$data['kondisi'] = $row->kondisi;
						$data['warga'] = $row->warga;
						$data['anakke'] = $row->anakke;
						$data['jsaudara'] = $row->jsaudara;
						$data['alamatsiswa'] = $row->alamatsiswa;
						$data['desa'] = $row->desa;
						$data['rt'] = $row->rt;
						$data['rw'] = $row->rw;
						$data['kecamatan'] = $row->kecamatan;
						$data['kota'] = $row->kota;
						$data['provinsi'] = $row->provinsi;
						$data['kodepos'] = $row->kodepos;
						$data['jarak'] = $row->jarak;
						$data['hpsiswa'] = $row->hpsiswa;
						$data['emailsiswa'] = $row->emailsiswa;
						$data['asalsekolah'] = $row->asalsekolah;
						$data['noijasah'] = $row->noijasah;
						$data['tglijasah'] = $row->tglijasah;
						$data['ketsekolah'] = $row->ketsekolah;
						$data['darah'] = $row->darah;
						$data['berat'] = $row->berat;
						$data['tinggi'] = $row->tinggi;
						$data['ukuransepatu'] = $row->ukuransepatu;
						$data['ukuranbaju'] = $row->ukuranbaju;
						$data['ukurancelana'] = $row->ukurancelana;
						$data['kesehatan'] = $row->kesehatan;
						$data['namaayah'] = $row->namaayah;
						$data['namaibu'] = $row->namaibu;
						$data['nikayah'] = $row->nikayah;
						$data['nikibu'] = $row->nikibu;
						$data['almayah'] = $row->almayah;
						$data['almibu'] = $row->almibu;
						$data['statusayah'] = $row->statusayah;
						$data['statusibu'] = $row->statusibu;
						$data['tmplahirayah'] = $row->tmplahirayah;
						$data['tmplahiribu'] = $row->tmplahiribu;
						$data['tgllahirayah'] = $row->tgllahirayah;
						$data['tgllahiribu'] = $row->tgllahiribu;
						$data['pendidikanayah'] = $row->pendidikanayah;
						$data['pendidikanibu'] = $row->pendidikanibu;
						$data['pekerjaanayah'] = $row->pekerjaanayah;
						$data['pekerjaanibu'] = $row->pekerjaanibu;
						$data['penghasilanayah'] = $row->penghasilanayah;
						$data['penghasilanibu'] = $row->penghasilanibu;
						$data['emailayah'] = $row->emailayah;
						$data['emailibu'] = $row->emailibu;
						$data['alamatortu'] = $row->alamatortu;
						$data['hportu'] = $row->hportu;
						$data['cita'] = $row->cita;
						$data['hobi'] = $row->hobi;
						$data['foto'] = $row->foto;
						$data['prestasi'] =	$row->prestasi;
						$data['binsmt1'] = $row->binsmt1;
						$data['binsmt2'] = $row->binsmt2;
						$data['binsmt3'] = $row->binsmt3;
						$data['binsmt4'] = $row->binsmt4;
						$data['binsmt5'] = $row->binsmt5;
						$data['bingsmt1'] = $row->bingsmt1;
						$data['bingsmt2'] = $row->bingsmt2;
						$data['bingsmt3'] = $row->bingsmt3;
						$data['bingsmt4'] = $row->bingsmt4;
						$data['bingsmt5'] = $row->bingsmt5;
						$data['matsmt1'] = $row->matsmt1;
						$data['matsmt2'] = $row->matsmt2;
						$data['matsmt3'] = $row->matsmt3;
						$data['matsmt4'] = $row->matsmt4;
						$data['matsmt5'] = $row->matsmt5;
						$data['ipasmt1'] = $row->ipasmt1;
						$data['ipasmt2'] = $row->ipasmt2;
						$data['ipasmt3'] = $row->ipasmt3;
						$data['ipasmt4'] = $row->ipasmt4;
						$data['ipasmt5'] = $row->ipasmt5;
						$data['ipssmt1'] = $row->ipssmt1;
						$data['ipssmt2'] = $row->ipssmt2;
						$data['ipssmt3'] = $row->ipssmt3;
						$data['ipssmt4'] = $row->ipssmt4;
						$data['ipssmt5'] = $row->ipssmt5;
						$data['agamasmt1'] = $row->agamasmt1;
						$data['agamasmt2'] = $row->agamasmt2;
						$data['agamasmt3'] = $row->agamasmt3;
						$data['agamasmt4'] = $row->agamasmt4;
						$data['agamasmt5'] = $row->agamasmt5;
						$data['ppknsmt1'] = $row->ppknsmt1;
						$data['ppknsmt2'] = $row->ppknsmt2;
						$data['ppknsmt3'] = $row->ppknsmt3;
						$data['ppknsmt4'] = $row->ppknsmt4;
						$data['ppknsmt5'] = $row->ppknsmt5;
						$data['penjassmt1']	= $row->penjassmt1;
						$data['penjassmt2']	= $row->penjassmt2;
						$data['penjassmt3']	= $row->penjassmt3;
						$data['penjassmt4']	= $row->penjassmt4;
						$data['penjassmt5']	= $row->penjassmt5;
						$data['senismt1'] = $row->senismt1;
						$data['senismt2'] = $row->senismt2;
						$data['senismt3'] = $row->senismt3;
						$data['senismt4'] = $row->senismt4;
						$data['senismt5'] = $row->senismt5;

						
						//pesan error
						//$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
						//$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
						//$notifikasi['nama_lembaga_kosong'] = $this->session->flashdata('nama_lembaga_kosong');
						//$notifikasi['tahun_lulus_kosong'] = $this->session->flashdata('tahun_lulus_kosong');
						//$notifikasi['nama_lembaga_tidak_terdaftar'] = $this->session->flashdata('nama_lembaga_tidak_terdaftar');
						//$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
					}


				}

				$data['statusfinalisasi'] = $this->M_calonsiswa->getStatusFinalisasi();  //cek statusfinalisasi
				
				if ($data['statusfinalisasi'] == 'y')
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else
					$this->load->view('calonsiswa/v_pendaftaran', $data);
			}
			
		}
	}

	public function do_pendaftaran()
	{
		
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{

			$this->load->model('M_calonsiswa');
			$this->load->model('M_user');
			$this->load->model('M_referensi');

			//notifikasi
			if ($this->input->post('inputAnakKe')==''
				|| $this->input->post('inputJumlahSaudara')==''
				|| $this->input->post('inputDesa')==''
				|| $this->input->post('inputRT')==''
				|| $this->input->post('inputRW')==''
				|| $this->input->post('inputKecamatan')==''
				|| $this->input->post('inputKota')==''
				|| $this->input->post('inputProvinsi')==''
				|| $this->input->post('inputKodePos')==''
				|| $this->input->post('inputJarak')==''
				|| $this->input->post('inputAsalSekolah')==''
				|| $this->input->post('inputUkuranBaju')==''
				|| $this->input->post('inputUkuranCelana')==''
				|| $this->input->post('inputAlamatOrtu')=='')
			{
				if ($this->input->post('inputAnakKe')=='') $this->session->set_flashdata('anakke_kosong','Anak Ke belum diisi');
				if ($this->input->post('inputJumlahSaudara')=='') $this->session->set_flashdata('jumlah_saudara_kosong','Jumlah saudara belum diisi');
				if ($this->input->post('inputDesa')=='') $this->session->set_flashdata('desa_kosong','Nama Desa belum diisi');
				if ($this->input->post('inputRT')=='') $this->session->set_flashdata('rt_kosong','RT belum diisi');
				if ($this->input->post('inputRW')=='') $this->session->set_flashdata('rw_kosong','RW belum diisi');
				if ($this->input->post('inputKecamatan')=='') $this->session->set_flashdata('kecamatan_kosong','Kecamatan belum diisi');
				if ($this->input->post('inputKota')=='') $this->session->set_flashdata('kota_kosong','Kota/Kab belum diisi');
				if ($this->input->post('inputProvinsi')=='') $this->session->set_flashdata('provinsi_kosong','Provinsi belum diisi');
				if ($this->input->post('inputKodePos')=='') $this->session->set_flashdata('kodepos_kosong','Kode Pos belum diisi');
				if ($this->input->post('inputJarak')=='') $this->session->set_flashdata('jarak_kosong','Jarak ke Sekolah diisi');
				if ($this->input->post('inputAsalSekolah')=='') $this->session->set_flashdata('asalsekolah_kosong','Asal Sekolah belum diisi');
				if ($this->input->post('inputUkuranBaju')=='') $this->session->set_flashdata('ukuranbaju_kosong','Ukuran Baju belum diisi');
				if ($this->input->post('inputUkuranCelana')=='') $this->session->set_flashdata('ukurancelana_kosong','Ukuran Celana belum diisi');
				if ($this->input->post('inputAlamatOrtu')=='') $this->session->set_flashdata('alamatortu_kosong','Alamat Ortu belum diisi');

			}
			//end notifikasi

			$this->M_user->setIdUser($iduser);
			$this->M_calonsiswa->setIdUser($iduser);
			$this->M_calonsiswa->setEmail($email);
			//input penerimaan calon siswa		
			$this->M_calonsiswa->setLembaga($this->input->post('inputLembaga'));
			$this->M_calonsiswa->setKelompok($this->input->post('inputKelompok'));
			$this->M_calonsiswa->setTahunMasuk($this->input->post('inputTahunMasuk'));

			//input data diri calon siswa
			$this->M_calonsiswa->setNISN($this->input->post('inputNISN'));
			$this->M_calonsiswa->setNoUN($this->input->post('inputNoUN'));
			$this->M_calonsiswa->setNoKK($this->input->post('inputNoKK'));
			$this->M_calonsiswa->setNIK($this->input->post('inputNIK'));
			$this->M_calonsiswa->setNoAkta($this->input->post('inputNoAkta'));
			
			
			$nama = $this->input->post('inputNama');
			$this->M_calonsiswa->setNama($nama);
			$this->M_user->setNama($nama);
			$this->M_user->setPanggilan($this->input->post('inputPanggilan'));

			$this->M_calonsiswa->setPanggilan($this->input->post('inputPanggilan'));
			$this->M_calonsiswa->setJenisKelamin($this->input->post('inputJenisKelamin'));
			$this->M_calonsiswa->setTempatLahir($this->input->post('inputTempatLahir'));

			$this->M_calonsiswa->setTanggalLahir($this->input->post('inputTanggalLahir'));
			$this->M_calonsiswa->setAgama($this->input->post('inputAgama'));
			$this->M_calonsiswa->setSuku($this->input->post('inputSuku'));
			$this->M_calonsiswa->setKondisi($this->input->post('inputKondisi'));
			$this->M_calonsiswa->setKewarganegaraan($this->input->post('inputKewarganegaraan'));
			$this->M_calonsiswa->setAnakKe($this->input->post('inputAnakKe'));
			$this->M_calonsiswa->setJumlahSaudara($this->input->post('inputJumlahSaudara'));

			$this->M_calonsiswa->setAlamatSiswa($this->input->post('inputAlamatSiswa'));
			$this->M_calonsiswa->setDesa($this->input->post('inputDesa'));
			$this->M_calonsiswa->setRT($this->input->post('inputRT'));
			$this->M_calonsiswa->setRW($this->input->post('inputRW'));
			$this->M_calonsiswa->setKecamatan($this->input->post('inputKecamatan'));
			$this->M_calonsiswa->setKota($this->input->post('inputKota'));
			$this->M_calonsiswa->setProvinsi($this->input->post('inputProvinsi'));
			$this->M_calonsiswa->setKodePos($this->input->post('inputKodePos'));
			$this->M_calonsiswa->setJarak($this->input->post('inputJarak'));
			$this->M_calonsiswa->setHPSiswa($this->input->post('inputHPSiswa'));
			$this->M_calonsiswa->setEmailSiswa($this->input->post('inputEmailSiswa'));
			$this->M_calonsiswa->setAsalSekolah($this->input->post('inputAsalSekolah'));
			$this->M_calonsiswa->setNoIjasah($this->input->post('inputNoIjasah'));
			$this->M_calonsiswa->setTanggalIjasah($this->input->post('inputTanggalIjasah'));
			$this->M_calonsiswa->setKeteranganSekolah($this->input->post('inputKeteranganSekolah'));

			//input fisik calon siswa
			$this->M_calonsiswa->setDarah($this->input->post('inputDarah'));
			$this->M_calonsiswa->setBerat($this->input->post('inputBerat'));
			$this->M_calonsiswa->setTinggi($this->input->post('inputTinggi'));
			$this->M_calonsiswa->setUkuranSepatu($this->input->post('inputUkuranSepatu'));
			$this->M_calonsiswa->setUkuranBaju($this->input->post('inputUkuranBaju'));
			$this->M_calonsiswa->setUkuranCelana($this->input->post('inputUkuranCelana'));
			$this->M_calonsiswa->setKesehatan($this->input->post('inputKesehatan'));

			$this->M_calonsiswa->setCita($this->input->post('inputCita'));
			$this->M_calonsiswa->setHobi($this->input->post('inputHobi'));

			//input data orang tua
			$this->M_calonsiswa->setNamaAyah($this->input->post('inputNamaAyah'));
			$this->M_calonsiswa->setNamaIbu($this->input->post('inputNamaIbu'));
			$this->M_calonsiswa->setNIKAyah($this->input->post('inputNIKAyah'));
			$this->M_calonsiswa->setNIKIbu($this->input->post('inputNIKIbu'));

			$this->M_calonsiswa->setAlmAyah($this->input->post('inputAlmAyah'));
			$this->M_calonsiswa->setAlmIbu($this->input->post('inputAlmIbu'));
			$this->M_calonsiswa->setStatusAyah($this->input->post('inputStatusAyah'));
			$this->M_calonsiswa->setStatusIbu($this->input->post('inputStatusIbu'));
			$this->M_calonsiswa->setTempatLahirAyah($this->input->post('inputTempatLahirAyah'));
			$this->M_calonsiswa->setTempatLahirIbu($this->input->post('inputTempatLahirIbu'));

			$this->M_calonsiswa->setTanggalLahirAyah($this->input->post('inputTanggalLahirAyah'));
			$this->M_calonsiswa->setTanggalLahirIbu($this->input->post('inputTanggalLahirIbu'));
			$this->M_calonsiswa->setPendidikanAyah($this->input->post('inputPendidikanAyah'));
			$this->M_calonsiswa->setPendidikanIbu($this->input->post('inputPendidikanIbu'));
			$this->M_calonsiswa->setPekerjaanAyah($this->input->post('inputPekerjaanAyah'));
			$this->M_calonsiswa->setPekerjaanIbu($this->input->post('inputPekerjaanIbu'));

			$this->M_calonsiswa->setPenghasilanAyah($this->input->post('inputPenghasilanAyah'));
			$this->M_calonsiswa->setPenghasilanIbu($this->input->post('inputPenghasilanIbu'));
			$this->M_calonsiswa->setEmailAyah($this->input->post('inputEmailAyah'));
			$this->M_calonsiswa->setEmailIbu($this->input->post('inputEmailIbu'));
			$this->M_calonsiswa->setAlamatOrtu($this->input->post('inputAlamatOrtu'));
			$this->M_calonsiswa->setHPOrtu($this->input->post('inputHPOrtu'));

			$this->M_calonsiswa->setPrestasi($this->input->post('inputPrestasi'));

			$this->M_calonsiswa->setBinSmt1($this->input->post('inputBinSmt1'));
			$this->M_calonsiswa->setBinSmt2($this->input->post('inputBinSmt2'));
			$this->M_calonsiswa->setBinSmt3($this->input->post('inputBinSmt3'));
			$this->M_calonsiswa->setBinSmt4($this->input->post('inputBinSmt4'));
			$this->M_calonsiswa->setBinSmt5($this->input->post('inputBinSmt5'));
			$this->M_calonsiswa->setBingSmt1($this->input->post('inputBingSmt1'));
			$this->M_calonsiswa->setBingSmt2($this->input->post('inputBingSmt2'));
			$this->M_calonsiswa->setBingSmt3($this->input->post('inputBingSmt3'));
			$this->M_calonsiswa->setBingSmt4($this->input->post('inputBingSmt4'));
			$this->M_calonsiswa->setBingSmt5($this->input->post('inputBingSmt5'));
			$this->M_calonsiswa->setMatSmt1($this->input->post('inputMatSmt1'));
			$this->M_calonsiswa->setMatSmt2($this->input->post('inputMatSmt2'));
			$this->M_calonsiswa->setMatSmt3($this->input->post('inputMatSmt3'));
			$this->M_calonsiswa->setMatSmt4($this->input->post('inputMatSmt4'));
			$this->M_calonsiswa->setMatSmt5($this->input->post('inputMatSmt5'));
			$this->M_calonsiswa->setIpaSmt1($this->input->post('inputIpaSmt1'));
			$this->M_calonsiswa->setIpaSmt2($this->input->post('inputIpaSmt2'));
			$this->M_calonsiswa->setIpaSmt3($this->input->post('inputIpaSmt3'));
			$this->M_calonsiswa->setIpaSmt4($this->input->post('inputIpaSmt4'));
			$this->M_calonsiswa->setIpaSmt5($this->input->post('inputIpaSmt5'));
			$this->M_calonsiswa->setIpsSmt1($this->input->post('inputIpsSmt1'));
			$this->M_calonsiswa->setIpsSmt2($this->input->post('inputIpsSmt2'));
			$this->M_calonsiswa->setIpsSmt3($this->input->post('inputIpsSmt3'));
			$this->M_calonsiswa->setIpsSmt4($this->input->post('inputIpsSmt4'));
			$this->M_calonsiswa->setIpsSmt5($this->input->post('inputIpsSmt5'));
			$this->M_calonsiswa->setAgamaSmt1($this->input->post('inputAgamaSmt1'));
			$this->M_calonsiswa->setAgamaSmt2($this->input->post('inputAgamaSmt2'));
			$this->M_calonsiswa->setAgamaSmt3($this->input->post('inputAgamaSmt3'));
			$this->M_calonsiswa->setAgamaSmt4($this->input->post('inputAgamaSmt4'));
			$this->M_calonsiswa->setAgamaSmt5($this->input->post('inputAgamaSmt5'));
			$this->M_calonsiswa->setPpknSmt1($this->input->post('inputPpknSmt1'));
			$this->M_calonsiswa->setPpknSmt2($this->input->post('inputPpknSmt2'));
			$this->M_calonsiswa->setPpknSmt3($this->input->post('inputPpknSmt3'));
			$this->M_calonsiswa->setPpknSmt4($this->input->post('inputPpknSmt4'));
			$this->M_calonsiswa->setPpknSmt5($this->input->post('inputPpknSmt5'));
			$this->M_calonsiswa->setPenjasSmt1($this->input->post('inputPenjasSmt1'));
			$this->M_calonsiswa->setPenjasSmt2($this->input->post('inputPenjasSmt2'));
			$this->M_calonsiswa->setPenjasSmt3($this->input->post('inputPenjasSmt3'));
			$this->M_calonsiswa->setPenjasSmt4($this->input->post('inputPenjasSmt4'));
			$this->M_calonsiswa->setPenjasSmt5($this->input->post('inputPenjasSmt5'));
			$this->M_calonsiswa->setSeniSmt1($this->input->post('inputSeniSmt1'));
			$this->M_calonsiswa->setSeniSmt2($this->input->post('inputSeniSmt2'));
			$this->M_calonsiswa->setSeniSmt3($this->input->post('inputSeniSmt3'));
			$this->M_calonsiswa->setSeniSmt4($this->input->post('inputSeniSmt4'));
			$this->M_calonsiswa->setSeniSmt5($this->input->post('inputSeniSmt5'));

			//Mengambil kode awalan dan kode kelompok
			$prosespenerimaan = $this->M_referensi->getProsesPenerimaanAktif($this->input->post('inputLembaga'));
			$this->M_referensi->setKelompok($this->input->post('inputKelompok'));
			if ($prosespenerimaan->num_rows()>0)
				foreach($prosespenerimaan->result() as $row){
					$data['idprosespenerimaan'] = $row->idprosespenerimaan;
					$data['kodeawalan'] = $row->kodeawalan;
					// $this->M_referensi->setIdProsesPenerimaan($data['idprosespenerimaan']);
					$data['kodekelompok'] = $this->M_referensi->getKodeKelompok($data['idprosespenerimaan']);
				}
			
			//Mengambil Lembaga dan Kelompok yang sudah dipilih
			$lembagasiswa = $this->M_calonsiswa->getLembagaSiswa();
			$kelompoksiswa = $this->M_calonsiswa->getKelompokSiswa();
			if ($lembagasiswa->num_rows()>0)
				foreach($lembagasiswa->result() as $row)
					$data['lembagasiswa'] = $row->lembaga;
			if ($kelompoksiswa->num_rows()>0)
				foreach($kelompoksiswa->result() as $row)
					$data['kelompoksiswa'] = $row->kelompok;
			//Dapatkan jumlah kelompok berdasarkan lembaga dan tahun yg diinput
			$data['jumlahkelompok'] = $this->M_calonsiswa->getCountKelompokLembaga();

			//apabila siswa kembali mengubah lembaga pendaftarannya
			if($data['lembagasiswa'] != $this->input->post('inputLembaga')){
				if($data['kelompoksiswa'] != $this->input->post('inputKelompok'))
					$nomorpsb = $this->zerofill($data['jumlahkelompok']+1, 3);
				$nopendaftaran = $data['kodeawalan'].$data['kodekelompok'].$nomorpsb;
			}
			else{
				if($data['kelompoksiswa'] != $this->input->post('inputKelompok'))
					$nomorpsb = $this->zerofill($data['jumlahkelompok']+1, 3);
				else
					$nomorpsb = $this->zerofill($data['jumlahkelompok'], 3);
				$nopendaftaran = $data['kodeawalan'].$data['kodekelompok'].$nomorpsb;
			}

			//proses update foto dan ganti format dengan nomor pendaftaran
			$this->M_calonsiswa->setNoPendaftaran($nopendaftaran);

			//proses rename foto
			$this->load->helper('path');
			$fotolama = $this->input->post('inputFotoLama');
			$pathfotolama =  set_realpath('./assets/profpic').$fotolama;

			$namaedit =  str_replace(" ", "_", $nama);
			$fotobaru = $nopendaftaran.'-'.$namaedit.'-'.time().'.jpg';
			$pathfotobaru =  set_realpath('./assets/profpic').$fotobaru;

			rename($pathfotolama, $pathfotobaru); // mengubah nama file
		
			$this->M_calonsiswa->setLinkFoto($fotobaru);

			
			$query = $this->M_calonsiswa->updateCalonSiswa();
			$query = $this->M_user->updateStatusDaftar();

			$this->session->set_flashdata('ubah_data_pribadi_berhasil','Anda berhasil mengubah data pribadi anda');
			$this->load->helper('url');
			redirect('pendaftaran/finalisasi','location');
			
		}
	}

	public function finalisasi()
	{
		
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data = "";

			//menu active
			$data=array(	
				'step_unggahfoto' 				=> 'href="unggahfoto" class="btn btn-default btn-circle"',
				'step_pendaftaran' 				=> 'href="formpendaftaran" class="btn btn-default btn-circle"',
				'step_finalisasi' 				=> 'href="" class="btn btn-primary btn-circle"',
				'step_konfirmasi' 				=> 'href="#" class="btn btn-default btn-circle disabled"',
				'step_pembayaran' 				=> 'href="#" class="btn btn-default btn-circle disabled"'
				);

			//title head
			$data['title']='Finalisasi Pendaftaran | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');	


			$this->load->model('M_calonsiswa');

			$this->M_calonsiswa->setIdUser($iduser);
			$query = $this->M_calonsiswa->getAllCalonSiswa();
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					//bukan pesan
					$data['iduser'] = $row->iduser;
					$data['nopendaftaran'] = $row->nopendaftaran;
					$data['lembaga'] = $row->lembaga;
					$data['kelompok'] = $row->kelompok;
					$data['tahunmasuk'] = $row->tahunmasuk;
					$data['nisn'] = $row->nisn;
					$data['noun'] = $row->noun;
					$data['nokk'] = $row->nokk;
					$data['nik'] = $row->nik;
					$data['noakta'] = $row->noakta;
					$data['nama'] = $row->nama;
					$data['panggilan'] = $row->panggilan;
					$data['jeniskelamin'] = $row->jeniskelamin;
					$data['tmplahir'] = $row->tmplahir;
					$data['tgllahir'] = $row->tgllahir;
					$data['agama'] = $row->agama;
					$data['suku'] = $row->suku;
					$data['kondisi'] = $row->kondisi;
					$data['warga'] = $row->warga;
					$data['anakke'] = $row->anakke;
					$data['jsaudara'] = $row->jsaudara;
					$data['alamatsiswa'] = $row->alamatsiswa;
					$data['desa'] = $row->desa;
					$data['rt'] = $row->rt;
					$data['rw'] = $row->rw;
					$data['kecamatan'] = $row->kecamatan;
					$data['kota'] = $row->kota;
					$data['provinsi'] = $row->provinsi;
					$data['kodepos'] = $row->kodepos;
					$data['jarak'] = $row->jarak;
					$data['hpsiswa'] = $row->hpsiswa;
					$data['emailsiswa'] = $row->emailsiswa;
					$data['asalsekolah'] = $row->asalsekolah;
					$data['noijasah'] = $row->noijasah;
					$data['tglijasah'] = $row->tglijasah;
					$data['ketsekolah'] = $row->ketsekolah;
					$data['darah'] = $row->darah;
					$data['berat'] = $row->berat;
					$data['tinggi'] = $row->tinggi;
					$data['ukuransepatu'] = $row->ukuransepatu;
					$data['ukuranbaju'] = $row->ukuranbaju;
					$data['ukurancelana'] = $row->ukurancelana;
					$data['kesehatan'] = $row->kesehatan;
					$data['namaayah'] = $row->namaayah;
					$data['namaibu'] = $row->namaibu;
					$data['nikayah'] = $row->nikayah;
					$data['nikibu'] = $row->nikibu;
					$data['almayah'] = $row->almayah;
					$data['almibu'] = $row->almibu;
					$data['statusayah'] = $row->statusayah;
					$data['statusibu'] = $row->statusibu;
					$data['tmplahirayah'] = $row->tmplahirayah;
					$data['tmplahiribu'] = $row->tmplahiribu;
					$data['tgllahirayah'] = $row->tgllahirayah;
					$data['tgllahiribu'] = $row->tgllahiribu;
					$data['pendidikanayah'] = $row->pendidikanayah;
					$data['pendidikanibu'] = $row->pendidikanibu;
					$data['pekerjaanayah'] = $row->pekerjaanayah;
					$data['pekerjaanibu'] = $row->pekerjaanibu;
					$data['penghasilanayah'] = $row->penghasilanayah;
					$data['penghasilanibu'] = $row->penghasilanibu;
					$data['emailayah'] = $row->emailayah;
					$data['emailibu'] = $row->emailibu;
					$data['alamatortu'] = $row->alamatortu;
					$data['hportu'] = $row->hportu;
					$data['cita'] = $row->cita;
					$data['hobi'] = $row->hobi;
					$data['foto'] = $row->foto;
					$data['prestasi'] =	$row->prestasi;
					$data['binsmt1'] = $row->binsmt1;
					$data['binsmt2'] = $row->binsmt2;
					$data['binsmt3'] = $row->binsmt3;
					$data['binsmt4'] = $row->binsmt4;
					$data['binsmt5'] = $row->binsmt5;
					$data['bingsmt1'] = $row->bingsmt1;
					$data['bingsmt2'] = $row->bingsmt2;
					$data['bingsmt3'] = $row->bingsmt3;
					$data['bingsmt4'] = $row->bingsmt4;
					$data['bingsmt5'] = $row->bingsmt5;
					$data['matsmt1'] = $row->matsmt1;
					$data['matsmt2'] = $row->matsmt2;
					$data['matsmt3'] = $row->matsmt3;
					$data['matsmt4'] = $row->matsmt4;
					$data['matsmt5'] = $row->matsmt5;
					$data['ipasmt1'] = $row->ipasmt1;
					$data['ipasmt2'] = $row->ipasmt2;
					$data['ipasmt3'] = $row->ipasmt3;
					$data['ipasmt4'] = $row->ipasmt4;
					$data['ipasmt5'] = $row->ipasmt5;
					$data['ipssmt1'] = $row->ipssmt1;
					$data['ipssmt2'] = $row->ipssmt2;
					$data['ipssmt3'] = $row->ipssmt3;
					$data['ipssmt4'] = $row->ipssmt4;
					$data['ipssmt5'] = $row->ipssmt5;
					$data['agamasmt1'] = $row->agamasmt1;
					$data['agamasmt2'] = $row->agamasmt2;
					$data['agamasmt3'] = $row->agamasmt3;
					$data['agamasmt4'] = $row->agamasmt4;
					$data['agamasmt5'] = $row->agamasmt5;
					$data['ppknsmt1'] = $row->ppknsmt1;
					$data['ppknsmt2'] = $row->ppknsmt2;
					$data['ppknsmt3'] = $row->ppknsmt3;
					$data['ppknsmt4'] = $row->ppknsmt4;
					$data['ppknsmt5'] = $row->ppknsmt5;
					$data['penjassmt1']	= $row->penjassmt1;
					$data['penjassmt2']	= $row->penjassmt2;
					$data['penjassmt3']	= $row->penjassmt3;
					$data['penjassmt4']	= $row->penjassmt4;
					$data['penjassmt5']	= $row->penjassmt5;
					$data['senismt1'] = $row->senismt1;
					$data['senismt2'] = $row->senismt2;
					$data['senismt3'] = $row->senismt3;
					$data['senismt4'] = $row->senismt4;
					$data['senismt5'] = $row->senismt5;
					$data['statusfinalisasi'] = $row->statusfinalisasi;

					//pesan error
					$data['anakke_kosong'] = $this->session->flashdata('anakke_kosong');
					$data['jumlah_saudara_kosong'] = $this->session->flashdata('jumlah_saudara_kosong');
					$data['desa_kosong'] = $this->session->flashdata('desa_kosong');
					$data['rt_kosong'] = $this->session->flashdata('rt_kosong');
					$data['rw_kosong'] = $this->session->flashdata('rw_kosong');
					$data['kecamatan_kosong'] =	$this->session->flashdata('kecamatan_kosong');
					$data['kota_kosong'] =	$this->session->flashdata('kota_kosong');
					$data['provinsi_kosong'] = $this->session->flashdata('provinsi_kosong');
					$data['kodepos_kosong'] = $this->session->flashdata('kodepos_kosong');
					$data['jarak_kosong'] =	$this->session->flashdata('jarak_kosong');
					$data['asalsekolah_kosong'] = $this->session->flashdata('asalsekolah_kosong');
					$data['ukuranbaju_kosong'] = $this->session->flashdata('ukuranbaju_kosong');
					$data['ukurancelana_kosong'] = $this->session->flashdata('ukurancelana_kosong');
					$data['alamatortu_kosong'] = $this->session->flashdata('alamatortu_kosong');

				}
			}
			
			$this->load->view('calonsiswa/v_finalisasi', $data);
		}

	}
	
	public function konfirmasi()
	{	
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data="";

			//menu active
			$data=array(	
				'step_unggahfoto' 				=> 'href="unggahfoto" class="btn btn-default btn-circle"',
				'step_pendaftaran' 				=> 'href="formpendaftaran" class="btn btn-default btn-circle"',
				'step_finalisasi' 				=> 'href="finalisasi" class="btn btn-default btn-circle"',
				'step_konfirmasi' 				=> 'href="" class="btn btn-primary btn-circle"',
				'step_pembayaran' 				=> 'href="#" class="btn btn-default btn-circle disabled"'
				);

			//title head
			$data['title']='Konfirmasi Pendaftaran | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');
			
			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);
			
			//get status finalisasi
			$data['statusfinalisasi'] = $this->M_calonsiswa->getStatusFinalisasi();
			if ($data['statusfinalisasi'] == 'y')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$this->load->view('calonsiswa/v_konfirmasi', $data);
			}
		}
	}

	public function konfirmasi2()
	{	
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data="";

			//menu active
			$data=array(	
				'step_unggahfoto' 				=> 'href="unggahfoto" class="btn btn-default btn-circle"',
				'step_pendaftaran' 				=> 'href="formpendaftaran" class="btn btn-default btn-circle"',
				'step_finalisasi' 				=> 'href="finalisasi" class="btn btn-default btn-circle"',
				'step_konfirmasi' 				=> 'href="" class="btn btn-primary btn-circle"',
				'step_pembayaran' 				=> 'href="#" class="btn btn-default btn-circle disabled"'
				);

			//title head
			$data['title']='Konfirmasi Pendaftaran | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');
			
			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);
			
			//get status finalisasi
			$data['statusfinalisasi'] = $this->M_calonsiswa->getStatusFinalisasi();
			if ($data['statusfinalisasi'] == 'y')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$this->load->view('calonsiswa/v_konfirmasi2', $data);
			}
		}
	}

	public function do_konfirmasi2()
	{	
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);

			$query = $this->M_calonsiswa->updateStatusFinalisasi();

			redirect('pendaftaran/finalisasi','location');
		}
	}

	public function cetakbukti()
	{
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data="";
			//title head
			$data['title']='Cetak Bukti | MAU-MBI Amanatul Ummah Surabaya';

			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);
			
			$query = $this->M_calonsiswa->getAllCalonSiswa();
			
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					//bukan pesan
					$data['iduser'] = $row->iduser;
					$data['nopendaftaran'] = $row->nopendaftaran;
					$data['lembaga'] = $row->lembaga;
					$data['kelompok'] = $row->kelompok;
					$data['tahunmasuk'] = $row->tahunmasuk;
					$data['nisn'] = $row->nisn;
					$data['noun'] = $row->noun;
					$data['nokk'] = $row->nokk;
					$data['nik'] = $row->nik;
					$data['noakta'] = $row->noakta;
					$data['nama'] = $row->nama;
					$data['panggilan'] = $row->panggilan;
					$data['jeniskelamin'] = $row->jeniskelamin;
					$data['tmplahir'] = $row->tmplahir;
					$data['tgllahir'] = $row->tgllahir;
					$data['agama'] = $row->agama;
					$data['suku'] = $row->suku;
					$data['kondisi'] = $row->kondisi;
					$data['warga'] = $row->warga;
					$data['anakke'] = $row->anakke;
					$data['jsaudara'] = $row->jsaudara;
					$data['alamatsiswa'] = $row->alamatsiswa;
					$data['desa'] = $row->desa;
					$data['rt'] = $row->rt;
					$data['rw'] = $row->rw;
					$data['kecamatan'] = $row->kecamatan;
					$data['kota'] = $row->kota;
					$data['provinsi'] = $row->provinsi;
					$data['kodepos'] = $row->kodepos;
					$data['jarak'] = $row->jarak;
					$data['hpsiswa'] = $row->hpsiswa;
					$data['emailsiswa'] = $row->emailsiswa;
					$data['asalsekolah'] = $row->asalsekolah;
					$data['noijasah'] = $row->noijasah;
					$data['tglijasah'] = $row->tglijasah;
					$data['ketsekolah'] = $row->ketsekolah;
					$data['darah'] = $row->darah;
					$data['berat'] = $row->berat;
					$data['tinggi'] = $row->tinggi;
					$data['ukuransepatu'] = $row->ukuransepatu;
					$data['ukuranbaju'] = $row->ukuranbaju;
					$data['ukurancelana'] = $row->ukurancelana;
					$data['kesehatan'] = $row->kesehatan;
					$data['namaayah'] = $row->namaayah;
					$data['namaibu'] = $row->namaibu;
					$data['nikayah'] = $row->nikayah;
					$data['nikibu'] = $row->nikibu;
					$data['almayah'] = $row->almayah;
					$data['almibu'] = $row->almibu;
					$data['statusayah'] = $row->statusayah;
					$data['statusibu'] = $row->statusibu;
					$data['tmplahirayah'] = $row->tmplahirayah;
					$data['tmplahiribu'] = $row->tmplahiribu;
					$data['tgllahirayah'] = $row->tgllahirayah;
					$data['tgllahiribu'] = $row->tgllahiribu;
					$data['pendidikanayah'] = $row->pendidikanayah;
					$data['pendidikanibu'] = $row->pendidikanibu;
					$data['pekerjaanayah'] = $row->pekerjaanayah;
					$data['pekerjaanibu'] = $row->pekerjaanibu;
					$data['penghasilanayah'] = $row->penghasilanayah;
					$data['penghasilanibu'] = $row->penghasilanibu;
					$data['emailayah'] = $row->emailayah;
					$data['emailibu'] = $row->emailibu;
					$data['alamatortu'] = $row->alamatortu;
					$data['hportu'] = $row->hportu;
					$data['cita'] = $row->cita;
					$data['hobi'] = $row->hobi;
					$data['foto'] = $row->foto;
					$data['prestasi'] =	$row->prestasi;
					$data['binsmt1'] = $row->binsmt1;
					$data['binsmt2'] = $row->binsmt2;
					$data['binsmt3'] = $row->binsmt3;
					$data['binsmt4'] = $row->binsmt4;
					$data['binsmt5'] = $row->binsmt5;
					$data['bingsmt1'] = $row->bingsmt1;
					$data['bingsmt2'] = $row->bingsmt2;
					$data['bingsmt3'] = $row->bingsmt3;
					$data['bingsmt4'] = $row->bingsmt4;
					$data['bingsmt5'] = $row->bingsmt5;
					$data['matsmt1'] = $row->matsmt1;
					$data['matsmt2'] = $row->matsmt2;
					$data['matsmt3'] = $row->matsmt3;
					$data['matsmt4'] = $row->matsmt4;
					$data['matsmt5'] = $row->matsmt5;
					$data['ipasmt1'] = $row->ipasmt1;
					$data['ipasmt2'] = $row->ipasmt2;
					$data['ipasmt3'] = $row->ipasmt3;
					$data['ipasmt4'] = $row->ipasmt4;
					$data['ipasmt5'] = $row->ipasmt5;
					$data['ipssmt1'] = $row->ipssmt1;
					$data['ipssmt2'] = $row->ipssmt2;
					$data['ipssmt3'] = $row->ipssmt3;
					$data['ipssmt4'] = $row->ipssmt4;
					$data['ipssmt5'] = $row->ipssmt5;
					$data['agamasmt1'] = $row->agamasmt1;
					$data['agamasmt2'] = $row->agamasmt2;
					$data['agamasmt3'] = $row->agamasmt3;
					$data['agamasmt4'] = $row->agamasmt4;
					$data['agamasmt5'] = $row->agamasmt5;
					$data['ppknsmt1'] = $row->ppknsmt1;
					$data['ppknsmt2'] = $row->ppknsmt2;
					$data['ppknsmt3'] = $row->ppknsmt3;
					$data['ppknsmt4'] = $row->ppknsmt4;
					$data['ppknsmt5'] = $row->ppknsmt5;
					$data['penjassmt1']	= $row->penjassmt1;
					$data['penjassmt2']	= $row->penjassmt2;
					$data['penjassmt3']	= $row->penjassmt3;
					$data['penjassmt4']	= $row->penjassmt4;
					$data['penjassmt5']	= $row->penjassmt5;
					$data['senismt1'] = $row->senismt1;
					$data['senismt2'] = $row->senismt2;
					$data['senismt3'] = $row->senismt3;
					$data['senismt4'] = $row->senismt4;
					$data['senismt5'] = $row->senismt5;

				}
			}

			//$this->load->view('calonsiswa/cetak_bukti', $data);
			//$this->load->view('calonsiswa/cetak', $data);

			// dapatkan output html
			$html = $this->output->get_output($this->load->view('calonsiswa/cetak_bukti', $data));
			
			// Load/panggil library dompdfnya
			$this->load->library('Dompdf_gen');

			$this->dompdf->set_paper('A4', 'potrait');

			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();

			$link = base_url().'pendaftaran/cetakbukti/'.$row->nopendaftaran;
			$date = date("d/m/Y");

			$canvas = $this->dompdf->get_canvas();
			//header
			$canvas->page_text(34, 15, $date, $font, 8, array(0,0,0));
			$canvas->page_text(210, 15, "PSB MAU-MBI Surabaya [Cetak Bukti Pendaftaran]", $font, 8, array(0,0,0));
			
			//footer
			$canvas->page_text(34, 800, $link, $font, 8, array(0,0,0));
			$canvas->page_text(522, 800, "Page: {PAGE_NUM} of {PAGE_COUNT}", $font, 8, array(0,0,0));

			//utk menampilkan preview pdf
			$this->dompdf->stream("Data Siswa-$row->nama.pdf",array('Attachment'=>0));
		}

	}

	public function gantipassword()
	{
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data = "";
			//title head
			$data['title']='Ganti Password | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');
			//notifikasi
			$data['password_lama_salah'] = $this->session->flashdata('password_lama_salah');
			$data['ulangi_password_salah'] = $this->session->flashdata('ulangi_password_salah');
			$data['pendaftaran_ditutup'] = $this->session->flashdata('pendaftaran_ditutup');

			$this->load->model('M_calonsiswa');
			$this->M_calonsiswa->setIdUser($iduser);
			
			//get status finalisasi
			$data['statusfinalisasi'] = $this->M_calonsiswa->getStatusFinalisasi();

			$this->load->view('calonsiswa/v_gantipassword', $data);
		}
	}

	public function do_gantipassword()
	{
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$this->load->model('M_user');
			$this->M_user->setEmail($email);
			$this->M_user->setIdUser($iduser);
			
			$this->M_user->setPassword(md5($this->input->post('inputPassword')));
			$query = $this->M_user->getPassword();
			if($query->num_rows()==0)
			{
				$this->session->set_flashdata('password_lama_salah', 'Maaf ! password anda saat ini salah, Silahkan masukkan lagi dengan benar');
				redirect('pendaftaran/gantipassword', 'location');
			}
			if($this->input->post('inputPasswordBaru') != $this->input->post('inputUlangiPasswordBaru'))
			{
				$this->session->set_flashdata('ulangi_password_salah', 'Maaf ! Password baru dan konfirmasi Password baru Anda tidak sama');
				redirect('pendaftaran/gantipassword', 'location');
			}
			
			$this->M_user->setPassword($this->input->post('inputPasswordBaru'));
			$query = $this->M_user->updatePassword();				

			$this->session->set_flashdata('ganti_password_berhasil', 'Anda berhasil mengubah password !');
			redirect('pendaftaran', 'location');
		}
	}

	public function pembayaran()
	{	
		$this->load->library('session');
		$email = $this->session->userdata('email');
		$iduser = $this->session->userdata('iduser');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			$this->load->helper('url');
			redirect('home','location');
		}
		else
		{
			$data="";

			//menu active
			$data=array(	
				'step_pendaftaran' 				=> 'href="../pendaftaran" class="btn btn-default btn-circle"',
				'step_finalisasi' 				=> 'href="finalisasi" class="btn btn-default btn-circle"',
				'step_konfirmasi' 				=> 'href="konfirmasi" class="btn btn-default btn-circle"',
				'step_pembayaran' 				=> 'href="" class="btn btn-primary btn-circle"'
				);

			//title head
			$data['title']='Bayar Pendaftaran | MAU-MBI Amanatul Ummah Surabaya';
			//session nama lengkap
			$data['nama'] = $this->session->userdata('namasiswa');
			
			//$data['email'] = $email;

			$this->load->view('calonsiswa/v_pembayaran', $data);
		}	
	}
}
