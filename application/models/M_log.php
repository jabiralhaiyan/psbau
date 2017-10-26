<?php
	class M_log extends CI_Model
	{

		private $idlog;
		private $nama;
		private $notifikasi;
		private $tipe;
		private $tanggal;
		private $waktu;

		public function __construct()
		{
			parent::__construct();
		}
		public function setIdLog($idlog)
		{
			$this->idlog = $idlog;
		}
		public function setNama($nama)
		{
			$this->nama = $nama;
		}
		public function setNotifikasi($notifikasi)
		{
			$this->notifikasi = $notifikasi;
		}
		public function setTipe($tipe)
		{
			$this->tipe = $tipe;
		}
		public function setTanggal($tanggal)
		{
			$this->tanggal = $tanggal;
		}
		public function setWaktu($waktu)
		{
			$this->waktu = $waktu;
		}
		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function setNotifikasiLogin()
		{
			$query = $this->db->query
			("
				INSERT INTO psb_log (iduser, nama, notifikasi, tipe, tanggal, waktu)
				SELECT psb_user.iduser, psb_user.nama, 'Telah Login', '1', NOW(), NOW()	
					FROM psb_user
					WHERE psb_user.email='$this->email'
			");
			$this->db->close();
			return $query;
		}
		
		public function getCountVisitorLogin()
		{
			$query = $this->db->query
			("
				SELECT tanggal, COUNT(notifikasi) AS pengunjunglogin
				FROM psb_log
				WHERE notifikasi='Telah Login'
				GROUP BY Tanggal
				ORDER BY Tanggal ASC LIMIT 0,10
			");
			$this->db->close();
			return $query;
		}

		public function getAllCountLogin()
		{
			$this->load->database();
			$query = $this->db->query
			("
				SELECT COUNT(notifikasi) AS jumlahlogin
				FROM psb_log
				WHERE notifikasi='Telah Login'

			");
			$this->db->close();
			return $query;
		}

	}
