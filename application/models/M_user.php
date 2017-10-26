<?php
	class M_user extends CI_Model
	{

		private $iduser;
		private $nama;
		private $panggilan;
		private $email;
		private $password;
		private $nopendaftaran;
		private $statusdaftar;
		private $key;
		
		public function __construct()
		{
			parent::__construct();
		}
		public function setIdUser($iduser)
		{
			$this->iduser = $iduser;
		}
		public function setNama($nama)
		{
			$this->nama = $nama;
		}
		public function setPanggilan($panggilan)
		{
			$this->panggilan = $panggilan;
		}
		public function setEmail($email)
		{
			$this->email = $email;
		}
		public function setPassword($password)
		{
			$this->password = $password;
		}
		public function setnoPendaftaran($nopendaftaran)
		{
			$this->nopendaftaran = $nopendaftaran;
		}
		public function setStatusDaftar($statusdaftar)
		{
			$this->statusdaftar = $statusdaftar;
		}
		public function setVerifikasi($verifikasi)
		{
			$this->verifikasi = $verifikasi;
		} 

		public function addUser()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_user(nama, panggilan, email, password, statusdaftar, ts)
				VALUES
					(
						'$this->nama',
						'$this->panggilan',
						'$this->email',
						md5('$this->password'),
						'n',
						NOW()
					)
			");
			$this->db->close();
			return $query;
		}
		public function getEmail()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT email
				FROM psb_user
				WHERE email = '$this->email'	
			");
			$this->db->close();
			return $query;
		}
		public function getUser()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT iduser, email, password, nama, aktif
				FROM psb_user
				WHERE email = '$this->email' AND password = '$this->password' AND aktif = '1'
			");
			$this->db->close();
			return $query;
		}

		public function getStatusDaftar()
		{
			$data="";
			$this->load->database();
			$query = $this->db->query
					("
						SELECT statusdaftar
						FROM psb_user
						WHERE 
							iduser = '$this->iduser'	
					");
			$this->db->close();

			foreach ($query->result() as $row)
			   $data['statusdaftar'] = $row->statusdaftar;
			return $data['statusdaftar'];
		}

		public function updateStatusDaftar()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE psb_user
						SET 
							nama = '$this->nama',
							panggilan = '$this->panggilan',
							statusdaftar = 'y'
						WHERE 
							iduser = '$this->iduser'	
					");
			$this->db->close();
			return $query;
		}

		public function updateVerifikasi()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE psb_user
						SET verifikasi = '$this->verifikasi'
						WHERE 
							email = '$this->email'	
					");
			$this->db->close();
			return $query;
		}
		
		function changeActiveState($key)
		{
		 $this->load->database();
		 $query = $this->db->query
		 ("
				UPDATE psb_user
				SET aktif = '1'
				WHERE 
				verifikasi = '$key'	
		");
		 return true;
		}

		public function getPassword()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT password
						FROM psb_user
						WHERE 
							iduser = '$this->iduser' AND password = '$this->password'	
					");
			$this->db->close();
			return $query;
		}

		public function updatePassword()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE psb_user
						SET password = md5('$this->password')
						WHERE 
							email = '$this->email'	
					");
			$this->db->close();
			return $query;
		}

	}
