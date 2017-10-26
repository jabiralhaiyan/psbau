<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		
		$this->load->library('session');
		$iduser = $this->session->userdata('iduser');
		$email = $this->session->userdata('email');
		$login = $this->session->userdata('login');
		if ($login==false)
		{
			
		//title head
			$data['title']='Login | MAU-MBI Amanatul Ummah Surabaya';

		//pesan berhasil
			$data['logout_berhasil'] = $this->session->flashdata('logout_berhasil');
			$data['registrasi_berhasil'] = $this->session->flashdata('registrasi_berhasil');

		//pesan gagal
			$data['email_sudah_ada'] = $this->session->flashdata('email_sudah_ada');
			$data['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');
			$data['email_belum_terdaftar'] = $this->session->flashdata('email_belum_terdaftar');
			$data['email_password_salah'] = $this->session->flashdata('email_password_salah');
			$data['verifikasi_gagal'] = $this->session->flashdata('verifikasi_gagal'); //verifikasi email gagal
			$data['captcha_tidak_sama'] = $this->session->flashdata('captcha_tidak_sama');
			$data['aktifasi_berhasil'] = $this->session->flashdata('aktifasi_berhasil');
			$data['pendaftaran_ditutup'] = $this->session->flashdata('pendaftaran_ditutup');

			// load codeigniter captcha helper
			$this->load->helper('captcha');
			$vals = array(
				'img_path'	 => './captcha/',
				'img_url'	 => base_url().'captcha/',
				'img_width'	 => 270,
				'img_height' => 40,
				'word_length'   => 4,
				'font_size'     => 20,
				'border' => '1', 
				'expiration' => '7200'
				);

	         // create captcha image
			$cap = create_captcha($vals);

	         // store image html code in a variable
			$data['image'] = $cap['image'];

	         // store the captcha word in a session
			$this->session->set_userdata('mycaptcha', $cap['word']);
			
			$data['notif_pendaftaran_ditutup']='';
			//Cek Tanggal Pendaftaran
			$this->load->model('M_referensi');
			$querycheckkelompok = $this->M_referensi->checkKelompok();
			if ($querycheckkelompok->num_rows()<=0)
			{
				$data['notif_pendaftaran_ditutup'] = 'Mohon Maaf ! Saat ini Pendaftaran PSB Online ditutup';
			}

			$this->load->view('calonsiswa/v_login', $data);
	}

	else
	{
		$this->load->helper('url');
		redirect('pendaftaran','location');
	}
}

public function register()
{
	$data;
	$this->load->model('M_user');
	$this->load->model('M_calonsiswa');

	if ($this->input->post() && ($this->input->post('inputCaptcha') != $this->session->userdata('mycaptcha')))
	{
		$this->session->set_flashdata('captcha_tidak_sama','Maaf ! Captcha tidak sesuai');
		$this->load->helper('url');
		redirect('home','location');
	}
	if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
	{
		$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
		$this->load->helper('url');
		redirect('home','location');
	}

	$this->M_user->setEmail($this->input->post('inputEmail'));
	$query = $this->M_user->getEmail();
	if ($query->num_rows()>0)
	{
		$this->session->set_flashdata('email_sudah_ada','Email sudah ada! Silahkan masukkan email lain');
		$this->load->helper('url');
		redirect('home','location');
	}
	$this->M_user->setNama($this->input->post('inputNama'));
	$this->M_user->setPanggilan($this->input->post('inputPanggilan'));
	$this->M_user->setEmail($this->input->post('inputEmail'));
	$this->M_user->setPassword($this->input->post('inputPassword'));

	$email = $this->input->post('inputEmail');
	$password = $this->input->post('inputPassword');
	$id = 'psbau'.$email.$password;

	$query = $this->M_user->addUser();

	$this->M_calonsiswa->setEmail($this->input->post('inputEmail'));

	$query = $this->M_calonsiswa->addCalonSiswa();

		//mengambil id penyimpanan addUser dan dienkripsi md5
	$encrypted_id = md5($id);
		$this->M_user->setVerifikasi($encrypted_id); //memasukkan ke tabel psb_user kolom key
		$query = $this->M_user->updateVerifikasi(); //update key di tabel psb_user
		
		//memanggil library email dan set konfigurasi untuk pengiriman email	    
		$this->load->library('email');
		$config = array();
		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Codeigniter';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
	    $config['smtp_host']= "srv24.niagahoster.com";//pengaturan smtp
	    $config['smtp_port']= "465";
	    $config['smtp_crypto'] = 'ssl';
	    $config['smtp_timeout']= "400";
	    $config['smtp_user']= "admin@mau-mbi-ausby.sch.id"; // isi dengan email kamu
	    $config['smtp_pass']= "suaraamanatulummah"; // isi dengan password kamu
	    $config['crlf']="\r\n"; 
	    $config['newline']="\r\n"; 
	    $config['wordwrap'] = TRUE;
	    

	    $this->email->initialize($config);
	    //konfigurasi pengiriman
	    $this->email->from($config['smtp_user'], 'PSB MAU-MBI Surabaya');
	    $this->email->to($this->input->post('inputEmail'));
	    $this->email->subject("Verifikasi Akun PSB MAU-MBI Amanatul Ummah Surabaya");
	    $this->email->message(
	    	"Selamat datang di <strong>PSB MAU-MBI Amanatul Ummah Surabaya,</strong> <br><br>
	    	Terima-kasih telah melakukan registrasi, Silahkan verifikasi email anda dengan mengklik tautan berikut ini<br><br>".
	    	site_url("home/verification/$encrypted_id").
	    	"<br><br><br><strong>Berikut informasi akun PSB kamu :</strong><br>
	    	Email : ".$this->input->post('inputEmail')." <br>
	    	Password : ".$this->input->post('inputPassword')." <br><br><br>
	    	Hormat Kami, <br><br><br><br>
	    	Panitia PSB MAU-MBI Amanatul Ummah Surabaya
	    	"

	    	);

	    //echo $this->email->print_debugger();

	    if($this->email->send())
	    {
	    	$this->session->set_flashdata('registrasi_berhasil','Anda berhasil melakukan registrasi, silahkan cek email kamu untuk verifikasi !');
	    }else
	    {
	    	$this->session->set_flashdata('verifikasi_gagal','Berhasil melakukan registrasi, namu gagal mengirim verifikasi email');
	    }

	    $this->load->helper('url');
	    redirect('home','location');
	}

	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('M_user');
		$this->M_user->changeActiveState($key);
		$this->session->set_flashdata('aktifasi_berhasil','Selamat kamu telah memverifikasi akun kamu, Silahkan Login !');
		redirect('home', 'location');
	}

	public function login()
	{
		$this->load->model('M_user');
		$this->load->model('M_log');
		$this->load->model('M_referensi');
		$this->M_log->setEmail($this->input->post('inputEmail'));
		$this->M_user->setEmail($this->input->post('inputEmail'));
		$this->M_user->setPassword(md5($this->input->post('inputPassword')));
		
		
		//Cek Tanggal Pendaftaran
		$querycheckkelompok = $this->M_referensi->checkKelompok();
		$query = $this->M_user->getUser();
		$queryemail = $this->M_user->getEmail();
		if ($query->num_rows()>0)
		{
			if ($querycheckkelompok->num_rows()<=0)
			{
			$this->session->set_flashdata('pendaftaran_ditutup','Mohon Maaf ! Pendaftaran PSB Online ditutup, silahkan melihat pengumuman atau menghubungi pihak sekolah');
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				foreach ($query->result() as $row)
				{
					$newdata = array(
					'iduser' => $row->iduser,
					'email' => $row->email,
					'namasiswa' => $row->nama,
					'aktif' => $row->aktif,
					'login' => TRUE
					);
					$this->session->set_userdata($newdata);
				}
				$query = $this->M_log->setNotifikasiLogin();
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		else if($queryemail->num_rows()==0)
		{
			$this->session->set_flashdata('email_belum_terdaftar','Email belum terdaftar! Silahkan Registrasi terlebih dahulu');
			$this->load->helper('url');
			redirect('home','location');
		}
		else 
		{
			$this->session->set_flashdata('email_password_salah','Maaf ! Email & Password anda SALAH atau Akun anda BELUM AKTIF, silahkan cek email untuk verifikasi !');
			$this->load->helper('url');
			redirect('home','location');
		}
	}

	function logout()
	{
		$login = $this->session->userdata('login');
		$this->session->unset_userdata('login');
		$this->session->set_flashdata('logout_berhasil','Anda berhasil logout');
		$this->load->helper('url');
		redirect('home','refresh');
	}

}
