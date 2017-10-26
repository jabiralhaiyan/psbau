<?php
class M_admin extends CI_Model
{

	private $username;
	private $email;
	private $password;
	private $nama;
	private $panggilan;
	private $foto;


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	public function setPanggilan($panggilan)
	{
		$this->panggilan = $panggilan;
	}
	public function setNama($nama)
	{
		$this->nama = $nama;
	}
	public function setLinkFoto($linkfoto)
	{
		$this->linkfoto = $linkfoto;
	}


	public function getAdmin()
	{
		$query = $this->db->query
		("
			SELECT *
			FROM psb_admin
			WHERE 
				(username = '$this->username' OR email = '$this->email') AND
				password = '$this->password'  
			");
		$this->db->close();
		return $query;
	}

	public function getAdminByUsername()
	{
		$query = $this->db->query
		("
			SELECT *
			FROM psb_admin
			WHERE 
				username = '$this->username'  
			");
		$this->db->close();
		return $query;
	}

	public function getAllAdmin()
	{
		$query = $this->db->query
		("
			SELECT * FROM psb_admin
			");
		$this->db->close();
		return $query;
	}

	public function addAdmin()
	{
		$query = $this->db->query
		("
			INSERT INTO psb_admin(username, password, email, nama, panggilan, ts)
			VALUES
				(
					'$this->username',
					 md5('$this->password'),
					'$this->email',
					'$this->nama',
					'$this->panggilan',
					NOW()
				)
			");
		$this->db->close();
		return $query;
	}

	public function getUsername()
	{
		$query = $this->db->query
		("
			SELECT username
			FROM psb_admin
			WHERE username = '$this->username'
			");
		$this->db->close();
		return $query;
	}

	public function updateAdmin()
	{
		$this->load->database();
		$query = $this->db->query
		("
			UPDATE psb_admin
			SET 
				username = '$this->username',
				email = '$this->email',
				nama = '$this->nama',
				panggilan = '$this->panggilan',
				ts = NOW()
			WHERE 
				username = '$this->username'	
		");
		$this->db->close();
		return $query;
	}

	public function deleteAdmin()
	{
		$query = $this->db->query
		("
			DELETE FROM psb_admin
			WHERE username = '$this->username'
			");
		$this->db->close();
		return $query;
	}

	public function getFotoProfil()
	{
		$query = $this->db->query
		("
			SELECT foto
			FROM psb_admin
			WHERE username = '$this->username'
			");
		$this->db->close();
		return $query;
	}

	public function updateFotoProfil()
	{
		$query = $this->db->query
		("
			UPDATE psb_admin
			SET foto = '$this->linkfoto'
			WHERE username = '$this->username'
			");
		$this->db->close();
		return $query;
	}

	public function changePassword()
	{
		$query = $this->db->query
		("
			UPDATE psb_admin
			SET password = md5('$this->password')
			WHERE username = '$this->username'
			");
		$this->db->close();
		return $query;
	}



}