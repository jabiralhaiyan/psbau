<?php
	class M_referensi extends CI_Model
	{

		private $idagama;
		private $agama;
		private $idpekerjaan;
		private $pekerjaan;
		private $idkelompok;
		private $kelompok;
		private $kodekelompok;
		private $kapasitas;
		private $tglmulai;
		private $tglselesai;
		private $idkondisi;
		private $kondisi;
		private $idlembaga;
		private $lembaga;
		private $idpenghasilan;
		private $penghasilan;
		private $idstatusortu;
		private $statusortu;
		private $idsuku;
		private $suku;
		private $idtahunmasuk;
		private $tahunmasuk;
		private $idpendidikan;
		private $pendidikan;
		private $idprosespenerimaan;
		private $proses;
		private $kodeawalan;
		private $urutan;
		private $keterangan;
		private $aktif;
		private $ts;


		public function __construct()
		{
			parent::__construct();
		}
		public function setIdAgama($idagama)
		{
			$this->idagama = $idagama;
		} 
		public function setAgama($agama)
		{
			$this->agama = $agama;
		} 
		public function setIdPekerjaan($idpekerjaan)
		{
			$this->idpekerjaan = $idpekerjaan;
		} 
		public function setPekerjaan($pekerjaan)
		{
			$this->pekerjaan = $pekerjaan;
		}
		public function setIdKelompok($idkelompok)
		{
			$this->idkelompok = $idkelompok;
		}  
		public function setKelompok($kelompok)
		{
			$this->kelompok = $kelompok;
		}
		public function setKodeKelompok($kodekelompok)
		{
			$this->kodekelompok = $kodekelompok;
		}
		public function setUrutKelompok($urut)
		{
			$this->urut = $urut;
		}    
		public function setKapasitas($kapasitas)
		{
			$this->kapasitas = $kapasitas;
		}
		public function setTanggalMulai($tglmulai)
		{
			$this->tglmulai = $tglmulai;
		}
		public function setTanggalSelesai($tglselesai)
		{
			$this->tglselesai = $tglselesai;
		}
		public function setIdKondisi($idkondisi)
		{
			$this->idkondisi = $idkondisi;
		}
		public function setKondisi($kondisi)
		{
			$this->kondisi = $kondisi;
		}
		public function setIdLembaga($idlembaga)
		{
			$this->idlembaga = $idlembaga;
		}
		public function setLembaga($lembaga)
		{
			$this->lembaga = $lembaga;
		}
		public function setIdPenghasilan($idpenghasilan)
		{
			$this->idpenghasilan = $idpenghasilan;
		}
		public function setPenghasilan($penghasilan)
		{
			$this->penghasilan = $penghasilan;
		}
		public function setIdStatusOrtu($idstatusortu)
		{
			$this->idstatusortu = $idstatusortu;
		}
		public function setStatusOrtu($statusortu)
		{
			$this->statusortu = $statusortu;
		}
		public function setIdSuku($idsuku)
		{
			$this->idsuku = $idsuku;
		}
		public function setSuku($suku)
		{
			$this->suku = $suku;
		}
		public function setIdTahunMasuk($idtahunmasuk)
		{
			$this->idtahunmasuk = $idtahunmasuk;
		}
		public function setTahunMasuk($tahunmasuk)
		{
			$this->tahunmasuk = $tahunmasuk;
		}		
		public function setIdPendidikan($idpendidikan)
		{
			$this->idpendidikan = $idpendidikan;
		}
		public function setPendidikan($pendidikan)
		{
			$this->pendidikan = $pendidikan;
		}
		public function setUrutan($urutan)
		{
			$this->urutan = $urutan;
		}
		public function setKeterangan($keterangan)
		{
			$this->keterangan = $keterangan;
		}
		public function setIdProsesPenerimaan($idprosespenerimaan)
		{
			$this->idprosespenerimaan = $idprosespenerimaan;
		}
		public function setProses($proses)
		{
			$this->proses = $proses;
		}
		public function setKodeAwalan($kodeawalan)
		{
			$this->kodeawalan = $kodeawalan;
		}
		public function setAktif($aktif)
		{
			$this->aktif = $aktif;
		}

		//AGAMA
		public function getAgama()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT agama FROM psb_agama
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function getAllAgama()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_agama
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function addAgama()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_agama(agama, urutan, ts)
				VALUES(
					'$this->agama',
					'$this->urutan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updateAgama()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_agama
				SET agama = '$this->agama',
					ts = NOW()
				WHERE idagama = '$this->idagama'
			");
			$this->db->close();
			return $query;
		}
		public function deleteAgama()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_agama
				WHERE idagama = '$this->idagama'
			");
			$this->db->close();
			return $query;
		}
		public function getUrutanAgama()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT urutan FROM psb_agama
				WHERE urutan = '$this->urutan'
			");
			$this->db->close();
			return $query;
		}


		//Pekerjaan
		public function getPekerjaan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT pekerjaan FROM psb_jenispekerjaan
			");
			$this->db->close();
			return $query;
		}
		public function getAllPekerjaan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_jenispekerjaan
			");
			$this->db->close();
			return $query;
		}
		public function addPekerjaan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_jenispekerjaan(pekerjaan, ts)
				VALUES(
					'$this->pekerjaan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updatePekerjaan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_pekerjaan
				SET pekerjaan = '$this->pekerjaan',
					ts = NOW()
				WHERE idpekerjaan = '$this->idpekerjaan'
			");
			$this->db->close();
			return $query;
		}
		public function deletePekerjaan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_pekerjaan
				WHERE idpekerjaan = '$this->idpekerjaan'
			");
			$this->db->close();
			return $query;
		}

		
		//Kondisi Siswa
		public function getKondisi()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT kondisi FROM psb_kondisisiswa
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function getAllKondisi()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_kondisisiswa
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function addKondisi()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_kondisisiswa(kondisi, urutan, ts)
				VALUES(
					'$this->kondisi',
					'$this->urutan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updateKondisi()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_kondisisiswa
				SET kondisi = '$this->kondisi',
					ts = NOW()
				WHERE idkondisi = '$this->idkondisi'
			");
			$this->db->close();
			return $query;
		}
		public function deleteKondisi()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_kondisisiswa
				WHERE idkondisi = '$this->idkondisi'
			");
			$this->db->close();
			return $query;
		}
		public function getUrutanKondisi()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT urutan FROM psb_kondisisiswa
				WHERE urutan = '$this->urutan'
			");
			$this->db->close();
			return $query;
		}


		public function getPendidikan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT pendidikan FROM psb_tingkatpendidikan
			");
			$this->db->close();
			return $query;
		}
		public function getAllPendidikan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_tingkatpendidikan
			");
			$this->db->close();
			return $query;
		}
		public function addPendidikan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_tingkatpendidikan(pendidikan, ts)
				VALUES(
					'$this->pendidikan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updatePendidikan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_tingkatpendidikan
				SET pendidikan = '$this->pendidikan',
					ts = NOW()
				WHERE idpendidikan = '$this->idpendidikan'
			");
			$this->db->close();
			return $query;
		}
		public function deletePendidikan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_tingkatpendidikan
				WHERE idpendidikan = '$this->idpendidikan'
			");
			$this->db->close();
			return $query;
		}

		//PENGHASILAN
		public function getPenghasilan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT penghasilan FROM psb_penghasilan
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function getAllPenghasilan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_penghasilan
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function addPenghasilan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_penghasilan(penghasilan, urutan, ts)
				VALUES(
					'$this->penghasilan',
					'$this->urutan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updatePenghasilan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_penghasilan
				SET penghasilan = '$this->penghasilan',
					ts = NOW()
				WHERE idpenghasilan = '$this->idpenghasilan'
			");
			$this->db->close();
			return $query;
		}
		public function deletePenghasilan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_penghasilan
				WHERE idpenghasilan = '$this->idpenghasilan'
			");
			$this->db->close();
			return $query;
		}
		public function getUrutanPenghasilan()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT urutan FROM psb_penghasilan
				WHERE urutan = '$this->urutan'
			");
			$this->db->close();
			return $query;
		}

		//STATUS ORTU
		public function getStatusOrtu()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT statusortu FROM psb_statusortu
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function getAllStatusOrtu()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_statusortu
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function addStatusOrtu()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_statusortu(statusortu, urutan, ts)
				VALUES(
					'$this->statusortu',
					'$this->urutan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updateStatusOrtu()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_statusortu
				SET statusortu = '$this->statusortu',
					ts = NOW()
				WHERE idstatusortu = '$this->idstatusortu'
			");
			$this->db->close();
			return $query;
		}
		public function deleteStatusOrtu()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_statusortu
				WHERE idstatusortu = '$this->idstatusortu'
			");
			$this->db->close();
			return $query;
		}
		public function getUrutanStatusOrtu()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT urutan FROM psb_statusortu
				WHERE urutan = '$this->urutan'
			");
			$this->db->close();
			return $query;
		}
		
		//SUKU
		public function getSuku()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT suku FROM psb_suku
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function getAllSuku()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_suku
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function addSuku()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_suku(suku, urutan, ts)
				VALUES(
					'$this->suku',
					'$this->urutan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updateSuku()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				UPDATE psb_suku
				SET suku = '$this->suku',
					ts = NOW()
				WHERE idsuku = '$this->idsuku'
			");
			$this->db->close();
			return $query;
		}
		public function deleteSuku()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_suku
				WHERE idsuku = '$this->idsuku'
			");
			$this->db->close();
			return $query;
		}
		public function getUrutanSuku()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT urutan FROM psb_suku
				WHERE urutan = '$this->urutan'
			");
			$this->db->close();
			return $query;
		}


		//KELOMPOK
		public function checkKelompok()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_kelompokcalonsiswa
				WHERE tglmulai <= NOW() AND NOW() <= tglselesai
			");
			$this->db->close();
			return $query;
		}
		public function getKelompok($idprosespenerimaan)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT kelompok FROM psb_kelompokcalonsiswa
				WHERE idprosespenerimaan = '$idprosespenerimaan'
					-- AND tglmulai <= NOW() AND NOW() <= tglselesai
			");
			$this->db->close();
			return $query;
		}
		public function getKelompokAktif($idprosespenerimaan)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT kelompok FROM psb_kelompokcalonsiswa
				WHERE idprosespenerimaan = '$idprosespenerimaan'
					 AND tglmulai <= NOW() AND NOW() <= tglselesai
			");
			$this->db->close();
			return $query;
		}
		public function getAllKelompok($idprosespenerimaan)
		{
			$query = $this->db->query
			("
				SELECT * FROM psb_kelompokcalonsiswa
				WHERE idprosespenerimaan = '$idprosespenerimaan'
			");
			$this->db->close();
			return $query;
		}
		public function getKodeKelompok($idprosespenerimaan)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT kodekelompok FROM psb_kelompokcalonsiswa
				WHERE idprosespenerimaan = '$idprosespenerimaan' AND
						kelompok = '$this->kelompok'
			");
			
			if ($query->num_rows()>0)
				foreach($query->result() as $row)
					$data['kodekelompok'] = $row->kodekelompok;
			return $data['kodekelompok'];
		}


		public function addKelompok()
		{
			$query = $this->db->query
			("
				INSERT INTO psb_kelompokcalonsiswa(kelompok, idprosespenerimaan, kodekelompok, kapasitas, tglmulai, tglselesai, keterangan, ts)
				VALUES(
					'$this->kelompok',
					'$this->idprosespenerimaan',
					'$this->kodekelompok',
					'$this->kapasitas',
					'$this->tglmulai',
					'$this->tglselesai',
					'$this->keterangan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updateKelompok()
		{
			$query = $this->db->query
			("
				UPDATE psb_kelompokcalonsiswa
				SET
					kelompok = '$this->kelompok',
					kodekelompok = '$this->kodekelompok',
					idprosespenerimaan = '$this->idprosespenerimaan',
					kapasitas = '$this->kapasitas',
					tglmulai = '$this->tglmulai',
					tglselesai = '$this->tglselesai',
					keterangan = '$this->keterangan',
					ts = NOW()
				WHERE idkelompok = '$this->idkelompok'
			");
			$this->db->close();
			return $query;
		}
		public function deleteKelompok()
		{
			$query = $this->db->query
			("
				DELETE FROM psb_kelompokcalonsiswa
					WHERE idkelompok = '$this->idkelompok'
			");
			$this->db->close();
			return $query;
		}

		
		//LEMBAGA
		public function getLembaga()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT lembaga FROM psb_lembaga
				WHERE aktif='1'
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function getAllLembaga()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_lembaga
				ORDER BY urutan ASC
			");
			$this->db->close();
			return $query;
		}
		public function addLembaga()
		{
			$query = $this->db->query
			("
				INSERT INTO psb_lembaga(lembaga, urutan, keterangan, aktif, ts)
				VALUES(
					'$this->lembaga',
					'$this->urutan',
					'$this->keterangan',
					'1',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function deleteLembaga()
		{
			$query = $this->db->query
			("
				DELETE FROM psb_lembaga
					WHERE idlembaga = '$this->idlembaga'
			");
			$this->db->close();
			return $query;
		}
		public function updateLembaga()
		{
			$query = $this->db->query
			("
				UPDATE psb_lembaga
					SET 
						lembaga = '$this->lembaga',
						urutan = '$this->urutan',
						keterangan = '$this->keterangan',
						ts = NOW()
					WHERE idlembaga = '$this->idlembaga'
			");
			$this->db->close();
			return $query;
		}
		public function getUrutanLembaga()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT urutan FROM psb_lembaga
				WHERE urutan = '$this->urutan'
			");
			$this->db->close();
			return $query;
		}

		public function setAktifLembaga()
		{
			$query = $this->db->query
			("
				UPDATE psb_lembaga
					SET 
						aktif = '1',
						ts = NOW()
					WHERE idlembaga = '$this->idlembaga'
			");
			$this->db->close();
			return $query;
		}
		public function setPasifLembaga()
		{
			$query = $this->db->query
			("
				UPDATE psb_lembaga
					SET 
						aktif = '0',
						ts = NOW()
					WHERE idlembaga = '$this->idlembaga'
			");
			$this->db->close();
			return $query;
		}



		//TAHUN MASUK
		public function getTahunMasuk($lembaga)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT tahunmasuk FROM psb_tahunmasuk
				WHERE lembaga = '$lembaga' AND aktif='1'			
			");
			$this->db->close();
			return $query;
		}
		public function getAllTahunMasuk($lembaga)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_tahunmasuk
				WHERE lembaga = '$lembaga'
			");
			$this->db->close();
			return $query;
		}
		public function getTahunMasukAktif()
		{
			$query = $this->db->query
			("
				SELECT tahunmasuk FROM psb_tahunmasuk
						WHERE aktif='1'
			");
			if ($query->num_rows()>0){
					foreach ($query->result() as $row)
						$data['tahunmasukaktif'] = $row->tahunmasuk;
				}
			return $data['tahunmasukaktif'];
		}
		public function checkTahunMasuk($lembaga)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT tahunmasuk FROM psb_tahunmasuk
				WHERE lembaga = '$lembaga' AND tahunmasuk='$this->tahunmasuk'
					
			");
			$this->db->close();
			return $query;
		}
		public function addTahunMasuk()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				INSERT INTO psb_tahunmasuk(tahunmasuk, lembaga, keterangan, ts)
				VALUES(
					'$this->tahunmasuk',
					'$this->lembaga',
					'$this->keterangan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function updateTahunMasuk()
		{
			$query = $this->db->query
			("
				UPDATE psb_tahunmasuk
					SET 
						tahunmasuk = '$this->tahunmasuk',
						lembaga = '$this->lembaga',
						keterangan = '$this->keterangan',
						ts = NOW()
					WHERE idtahunmasuk = '$this->idtahunmasuk'
			");
			$this->db->close();
			return $query;
		}
		public function deleteTahunMasuk()
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				DELETE FROM psb_tahunmasuk
				WHERE idtahunmasuk = '$this->idtahunmasuk'
			");
			$this->db->close();
			return $query;
		}
		public function setAllPasifTahunMasuk()
		{
			$query = $this->db->query
			("
				UPDATE psb_tahunmasuk
					SET 
						aktif = '0',
						ts = NOW()
					WHERE lembaga = '$this->lembaga'
			");
			$this->db->close();
			return $query;
		}
		public function setAktifTahunMasuk()
		{
			$query = $this->db->query
			("
				UPDATE psb_tahunmasuk
					SET 
						aktif = '1',
						ts = NOW()
					WHERE idtahunmasuk = '$this->idtahunmasuk'
			");
			$this->db->close();
			return $query;
		}

		public function setPasifTahunMasuk()
		{
			$query = $this->db->query
			("
				UPDATE psb_tahunmasuk
					SET 
						aktif = '0',
						ts = NOW()
					WHERE idtahunmasuk = '$this->idtahunmasuk'
			");
			$this->db->close();
			return $query;
		}

		//PROSES PENERIMAAN CALON SISWA
		public function getProsesPenerimaan($lembaga)
		{
			//$this->db->cache_on();
			$query = $this->db->query
			("
				SELECT * FROM psb_prosespenerimaan
				WHERE lembaga = '$lembaga'
			");
			$this->db->close();
			return $query;
		}
		
		public function getProsesPenerimaanAktif($lembaga)
		{
			$query = $this->db->query
			("
				SELECT idprosespenerimaan, proses FROM psb_prosespenerimaan
				WHERE lembaga = '$lembaga' AND aktif='1'
			");
			$this->db->close();
			return $query;
		}

		// public function getProsesPenerimaanAktif_($lembaga)
		// {
		// 	$query = $this->db->query
		// 	("
		// 		SELECT proses FROM psb_prosespenerimaan
		// 		WHERE lembaga = '$lembaga' AND aktif='1'
		// 	");
			
		// 	if ($query->num_rows()>0){
		// 			foreach ($query->result() as $row)
		// 				$data['proses'] = $row->proses;
		// 		}
		// 	return $data['proses'];
		// 	//$data['idprosespenerimaan'] = $row->idprosespenerimaan;
		// }


		public function addProsesPenerimaan()
		{
			$query = $this->db->query
			("
				INSERT INTO psb_prosespenerimaan(proses, kodeawalan, lembaga, keterangan, ts)
				VALUES(
					'$this->proses',
					'$this->kodeawalan',
					'$this->lembaga',
					'$this->keterangan',
					NOW()
				)
			");
			$this->db->close();
			return $query;
		}
		public function getKodeAwalan()
		{
			$query = $this->db->query
			("
				SELECT kodeawalan FROM psb_prosespenerimaan
				WHERE kodeawalan = '$this->kodeawalan'
			");
			$this->db->close();
			return $query;
		}
		public function updateProsesPenerimaan()
		{
			$query = $this->db->query
			("
				UPDATE psb_prosespenerimaan
					SET 
						proses = '$this->proses',
						kodeawalan = '$this->kodeawalan',
						lembaga = '$this->lembaga',
						keterangan = '$this->keterangan',
						ts = NOW()
					WHERE idprosespenerimaan = '$this->idprosespenerimaan'
			");
			$this->db->close();
			return $query;
		}
		public function deleteProsesPenerimaan()
		{
			$query = $this->db->query
			("
				DELETE FROM psb_prosespenerimaan
					WHERE idprosespenerimaan = '$this->idprosespenerimaan'
			");
			$this->db->close();
			return $query;
		}

		public function setAktifProsesPenerimaan($idprosespenerimaan)
		{
			$query = $this->db->query
			("
				UPDATE psb_prosespenerimaan
					SET 
						aktif = '1',
						ts = NOW()
					WHERE idprosespenerimaan = '$this->idprosespenerimaan'
			");
			$this->db->close();
			return $query;
		}

		public function setAllPasifProsesPenerimaan($lembaga)
		{
			$query = $this->db->query
			("
				UPDATE psb_prosespenerimaan
					SET 
						aktif = '0',
						ts = NOW()
					WHERE lembaga = '$this->lembaga'
			");
			$this->db->close();
			return $query;
		}

		public function setPasifProsesPenerimaan($idprosespenerimaan)
		{
			$query = $this->db->query
			("
				UPDATE psb_prosespenerimaan
					SET 
						aktif = '0',
						ts = NOW()
					WHERE idprosespenerimaan = '$this->idprosespenerimaan'
			");
			$this->db->close();
			return $query;
		}

		
	}