/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : psbau

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-21 05:35:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for psb_admin
-- ----------------------------
DROP TABLE IF EXISTS `psb_admin`;
CREATE TABLE `psb_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `panggilan` varchar(255) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_admin
-- ----------------------------
INSERT INTO `psb_admin` VALUES ('psbpesantren', '3da1f08470ccad5365f1eac006655260', 'maumbisurabaya@gmail.com', 'MAU-MBI Amanatul Ummah', 'Amanatul Ummah', 'psbpesantren-1484338188.png', '2017-01-14 04:14:44');

-- ----------------------------
-- Table structure for psb_agama
-- ----------------------------
DROP TABLE IF EXISTS `psb_agama`;
CREATE TABLE `psb_agama` (
  `idagama` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agama` varchar(20) CHARACTER SET latin1 NOT NULL,
  `urutan` tinyint(2) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idagama`),
  KEY `psb_agama_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of psb_agama
-- ----------------------------
INSERT INTO `psb_agama` VALUES ('1', 'Islam', '1', '2016-12-05 01:39:04');
INSERT INTO `psb_agama` VALUES ('2', 'Katolik', '2', '2016-12-05 01:39:40');
INSERT INTO `psb_agama` VALUES ('3', 'Protestan', '3', '2016-12-05 01:39:58');
INSERT INTO `psb_agama` VALUES ('4', 'Hindu', '4', '2016-12-05 01:40:27');
INSERT INTO `psb_agama` VALUES ('5', 'Budha', '5', '2016-12-05 01:40:31');
INSERT INTO `psb_agama` VALUES ('6', 'Kristen', '6', '2016-12-05 01:40:48');

-- ----------------------------
-- Table structure for psb_calonsiswa
-- ----------------------------
DROP TABLE IF EXISTS `psb_calonsiswa`;
CREATE TABLE `psb_calonsiswa` (
  `idcalonsiswa` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `iduser` int(4) unsigned zerofill DEFAULT NULL,
  `nopendaftaran` varchar(20) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `kelompok` varchar(100) NOT NULL,
  `tahunmasuk` int(10) unsigned NOT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `noun` varchar(50) DEFAULT NULL,
  `nokk` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `noakta` varchar(50) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `panggilan` varchar(30) DEFAULT NULL,
  `jeniskelamin` varchar(1) DEFAULT NULL,
  `tmplahir` varchar(50) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `agama` varchar(20) NOT NULL,
  `suku` varchar(20) DEFAULT NULL,
  `kondisi` varchar(100) DEFAULT NULL,
  `warga` varchar(5) NOT NULL,
  `anakke` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `jsaudara` tinyint(2) unsigned DEFAULT '0',
  `alamatsiswa` varchar(255) DEFAULT NULL,
  `desa` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `rt` int(3) DEFAULT NULL,
  `rw` int(3) DEFAULT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kota` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `provinsi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kodepos` varchar(8) CHARACTER SET latin1 DEFAULT NULL,
  `jarak` tinyint(1) unsigned DEFAULT '0',
  `hpsiswa` varchar(20) DEFAULT NULL,
  `emailsiswa` varchar(100) DEFAULT NULL,
  `asalsekolah` varchar(100) DEFAULT NULL,
  `noijasah` varchar(25) DEFAULT NULL,
  `tglijasah` varchar(25) DEFAULT NULL,
  `ketsekolah` varchar(100) DEFAULT NULL,
  `darah` varchar(2) DEFAULT NULL,
  `berat` decimal(4,1) unsigned DEFAULT '0.0',
  `tinggi` decimal(4,1) unsigned DEFAULT '0.0',
  `ukuransepatu` int(2) DEFAULT NULL,
  `ukuranbaju` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `ukurancelana` int(2) DEFAULT NULL,
  `kesehatan` varchar(150) DEFAULT NULL,
  `namaayah` varchar(60) DEFAULT NULL,
  `namaibu` varchar(60) DEFAULT NULL,
  `nikayah` varchar(50) DEFAULT NULL,
  `nikibu` varchar(50) DEFAULT NULL,
  `almayah` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `almibu` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `statusayah` varchar(20) DEFAULT NULL,
  `statusibu` varchar(20) DEFAULT NULL,
  `tmplahirayah` varchar(35) DEFAULT NULL,
  `tmplahiribu` varchar(35) DEFAULT NULL,
  `tgllahirayah` varchar(35) DEFAULT NULL,
  `tgllahiribu` varchar(35) DEFAULT NULL,
  `pendidikanayah` varchar(20) DEFAULT NULL,
  `pendidikanibu` varchar(20) DEFAULT NULL,
  `pekerjaanayah` varchar(60) DEFAULT NULL,
  `pekerjaanibu` varchar(60) DEFAULT NULL,
  `penghasilanayah` varchar(70) DEFAULT '0',
  `penghasilanibu` varchar(70) DEFAULT '0',
  `emailayah` varchar(50) DEFAULT NULL,
  `emailibu` varchar(50) DEFAULT NULL,
  `alamatortu` varchar(100) DEFAULT NULL,
  `hportu` varchar(20) DEFAULT NULL,
  `cita` varchar(200) DEFAULT NULL,
  `hobi` text,
  `foto` varchar(255) DEFAULT NULL,
  `sum1` decimal(10,0) NOT NULL DEFAULT '0',
  `sum2` decimal(10,0) NOT NULL DEFAULT '0',
  `binsmt1` decimal(5,2) NOT NULL DEFAULT '0.00',
  `binsmt2` decimal(5,2) NOT NULL DEFAULT '0.00',
  `binsmt3` decimal(5,2) NOT NULL DEFAULT '0.00',
  `binsmt4` decimal(5,2) NOT NULL DEFAULT '0.00',
  `binsmt5` decimal(5,2) NOT NULL DEFAULT '0.00',
  `bingsmt1` decimal(5,2) NOT NULL,
  `bingsmt2` decimal(5,2) NOT NULL,
  `bingsmt3` decimal(5,2) NOT NULL,
  `bingsmt4` decimal(5,2) NOT NULL,
  `bingsmt5` decimal(5,2) NOT NULL,
  `matsmt1` decimal(5,2) NOT NULL,
  `matsmt2` decimal(5,2) NOT NULL,
  `matsmt3` decimal(5,2) NOT NULL,
  `matsmt4` decimal(5,2) NOT NULL,
  `matsmt5` decimal(5,2) NOT NULL,
  `ipasmt1` decimal(5,2) NOT NULL,
  `ipasmt2` decimal(5,2) NOT NULL,
  `ipasmt3` decimal(5,2) NOT NULL,
  `ipasmt4` decimal(5,2) NOT NULL,
  `ipasmt5` decimal(5,2) NOT NULL,
  `ipssmt1` decimal(5,2) NOT NULL,
  `ipssmt2` decimal(5,2) NOT NULL,
  `ipssmt3` decimal(5,2) NOT NULL,
  `ipssmt4` decimal(5,2) NOT NULL,
  `ipssmt5` decimal(5,2) NOT NULL,
  `agamasmt1` decimal(5,2) NOT NULL,
  `agamasmt2` decimal(5,2) NOT NULL,
  `agamasmt3` decimal(5,2) NOT NULL,
  `agamasmt4` decimal(5,2) NOT NULL,
  `agamasmt5` decimal(5,2) NOT NULL,
  `ppknsmt1` decimal(5,2) NOT NULL,
  `ppknsmt2` decimal(5,2) NOT NULL,
  `ppknsmt3` decimal(5,2) NOT NULL,
  `ppknsmt4` decimal(5,2) NOT NULL,
  `ppknsmt5` decimal(5,2) NOT NULL,
  `penjassmt1` decimal(5,2) NOT NULL,
  `penjassmt2` decimal(5,2) NOT NULL,
  `penjassmt3` decimal(5,2) NOT NULL,
  `penjassmt4` decimal(5,2) NOT NULL,
  `penjassmt5` decimal(5,2) NOT NULL,
  `senismt1` decimal(5,2) NOT NULL,
  `senismt2` decimal(5,2) NOT NULL,
  `senismt3` decimal(5,2) NOT NULL,
  `senismt4` decimal(5,2) NOT NULL,
  `senismt5` decimal(5,2) NOT NULL,
  `prestasi` varchar(255) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusfinalisasi` char(2) DEFAULT '',
  PRIMARY KEY (`idcalonsiswa`),
  KEY `iduser` (`iduser`) USING BTREE,
  KEY `nopendaftaran` (`nopendaftaran`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of psb_calonsiswa
-- ----------------------------
INSERT INTO `psb_calonsiswa` VALUES ('00001', '0001', '', '', '', '0', null, null, null, null, null, 'PRAMESTI PRAMUDITA EKTIYAS ANGGRAENI', 'DITA', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'ud.duaberlian@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-04-28 18:19:52', '');
INSERT INTO `psb_calonsiswa` VALUES ('00002', '0002', '', '', '', '0', null, null, null, null, null, 'Muhammad Adham Baehaqi', 'Baehaqi', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'khoirulanwar0529@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-05-04 16:42:34', '');
INSERT INTO `psb_calonsiswa` VALUES ('00003', '0003', 'PSBMBIG217001', 'MBI Amanatul Ummah', 'Gelombang 2', '2017', '011009', '', '5103010408090017', '5103012308020001', '000097/A.K1/IST/2003', 'Mimar Rafi Rizkilla Syafrudin', 'Mimar', 'L', 'denpasar', '0000-00-00', 'Islam', 'Sunda', 'Berkecukupan', 'WNI', '1', '4', 'JL. Sunset Road 639 A Lingk. Jaba Jero Kuta Bali', 'Jaba Jero', '1', '1', 'Kuta', 'Badung', 'Bali', '80361', '255', '081338506688', 'aapsml@gmail.com', 'Mts Darus Sunah', '', '', '', 'O', '45.0', '150.0', '40', 'm', '28', 'Sehat', 'Aap Syafrudin Muslich', 'Ina Kristina', '5103011006690005', '5103015606770005', '0', '0', 'Ortu Kandung', 'Ortu Kandung', 'Garut', 'Garut', '10 Juni 1969', '16 Juni 1977', 'S1', 'D3', 'Wiraswasta', 'Wiraswasta', '> Rp. 5.000.000', '> Rp. 5.000.000', 'aapsml@gmail.com', '', 'Jl. Sunset Road 639 A Lingk. JabaJero Kuta Bali', '081338506688', 'menjadi orang yg berguna', 'membaca', 'PSBMBIG217001-Mimar_Rafi_Rizkilla_Syafrudin-1495121814.jpg', '0', '0', '70.20', '66.38', '74.00', '77.00', '79.50', '80.60', '89.17', '89.75', '87.00', '80.00', '60.10', '76.75', '75.42', '75.40', '79.60', '80.70', '85.50', '84.75', '69.88', '76.30', '60.60', '75.06', '80.00', '80.00', '85.50', '80.00', '78.50', '80.00', '80.00', '76.30', '80.00', '60.69', '78.00', '84.00', '76.50', '70.00', '66.05', '95.00', '96.00', '85.50', '80.00', '65.25', '80.00', '74.75', '62.00', 'Juara Tiga Menulis cerpen Bahasa Arab', '2017-05-18 22:36:54', 'y');
INSERT INTO `psb_calonsiswa` VALUES ('00004', '0004', '', '', '', '0', null, null, null, null, null, 'fatma nur arofah', 'fafa', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'fatmanur15@yahoo.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-05-28 13:02:08', '');
INSERT INTO `psb_calonsiswa` VALUES ('00005', '0005', '', '', '', '0', null, null, null, null, null, 'fatma nur arofah', 'fafa', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'herut511@icloud.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-05-28 13:12:51', '');
INSERT INTO `psb_calonsiswa` VALUES ('00006', '0006', 'PSBMAUG217001', 'MA Unggulan Amanatul Ummah', 'Gelombang 2', '2017', '101052924014', '', '3526041105090005', '3107', '001256/IST/2010', 'Rieke Ardini', 'Keke', 'P', 'Bangkalan', '2004-10-01', 'Islam', 'Madura', 'Berkecukupan', 'WNI', '1', '3', 'Kampung baru', 'Kamal', '1', '2', 'Kamal', 'Bangkalan ', 'Jawa timur', '69162', '200', '083853117350', 'rieke.ardini@yahoo.com', 'SDN Kamal 1', '', '', '', '', '46.0', '155.0', '40', 'M', '28', '', 'M Zahri ', 'Komiyah', '3526041312820002', '3526045408830006', '0', '0', 'Ortu Kandung', 'Ortu Kandung', 'Bangkalan ', 'Wonosobo', '1982-12-13', '1983-08-14', 'SMA', 'SMA', 'Wiraswasta', 'Wiraswasta', '> Rp. 5.000.000', '--Pilih--', 'al_chamalymebel@yahoo.com', '', 'Kampung baru', '0817382362', 'Polwan', 'Renang', 'PSBMAUG217001-Rieke_Ardini-1496324360.jpg', '0', '0', '0.00', '80.22', '90.13', '80.26', '70.72', '0.00', '80.70', '70.00', '70.20', '80.30', '0.00', '80.06', '80.12', '70.30', '70.55', '0.00', '80.52', '80.87', '70.80', '70.81', '0.00', '80.07', '90.05', '80.63', '70.62', '0.00', '80.25', '80.40', '80.45', '80.50', '0.00', '70.79', '90.02', '90.13', '70.62', '0.00', '70.50', '70.60', '70.40', '70.70', '0.00', '80.15', '80.98', '80.52', '70.50', '', '2017-06-01 20:39:20', 'y');
INSERT INTO `psb_calonsiswa` VALUES ('00007', '0007', '', '', '', '0', null, null, null, null, null, 'Nadia Sayyidah Arifah', 'Nadia', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'Nadiasayyidah17@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, '0007-Nadia_Sayyidah_Arifah-1496524240.jpg', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-06-02 12:18:46', '');
INSERT INTO `psb_calonsiswa` VALUES ('00008', '0008', '', '', '', '0', null, null, null, null, null, 'Fatma nur arofah', 'Fafa', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'wwwfatmanur@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-06-03 13:25:28', '');
INSERT INTO `psb_calonsiswa` VALUES ('00009', '0009', '', '', '', '0', null, null, null, null, null, 'Arganoor ramadhan putra satiadi', 'Arga', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'arga2311@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-06-04 09:57:14', '');
INSERT INTO `psb_calonsiswa` VALUES ('00010', '0010', 'PSBMAUG217002', 'MA Unggulan Amanatul Ummah', 'Gelombang 2', '2017', '0026536288', '14441', '3515182501091985', '3515180511020010', '010518', 'Arganoor ramadhan putra satiadi', 'Arga', 'L', 'surabaya', '2002-11-05', 'Islam', 'Jawa', 'Berkecukupan', 'WNI', '2', '2', 'jatisari permai 1/B-1', 'pepelegi', '9', '8', 'waru', 'sidoarjo', 'Jawa Timur', '61256', '6', '082230185430', 'argasatiadi@yahoo.com', 'smp al falah ketintang surabaya', '', '', '', 'O', '77.0', '0.0', '175', 'XL', '34', '', 'Ronny zuchrin satiadi', 'Novarina pangestuti', '3515181801660005', '3515186611670006', '0', '0', 'Ortu Kandung', 'Ortu Kandung', 'surabaya', 'surabaya', '1965-01-18', '1967-11-25', 'S1', 'S2', 'Swasta', 'Swasta', '> Rp. 5.000.000', '> Rp. 5.000.000', '', '', '', '085100500666', 'dokter', 'anggar & sepak bola', 'PSBMAUG217002-Arganoor_ramadhan_putra_satiadi-1496548044.jpg', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'kejuaraan anggar koni kota surabaya {JUARA 3}\r\nGMT spot championship tingkat SD &  SMP {JUARA 3}', '2017-06-04 10:47:24', '');
INSERT INTO `psb_calonsiswa` VALUES ('00011', '0011', '', '', '', '0', null, null, null, null, null, 'ZAINUDDIN ZIDAN ALFARIZY', 'ZIDAN', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'ernirositadewi011311233031@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, '0011-ZAINUDDIN_ZIDAN_ALFARIZY-1496707587.jpg', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-06-06 06:56:43', '');
INSERT INTO `psb_calonsiswa` VALUES ('00012', '0012', 'PSBMAU001', 'MA Unggulan Amanatul Ummah', '', '0', '7228', '', '3275031403080013', '3275032809010032', '12767/TLB/XII/2001', 'M Chaidar Albani', 'Chaidar', 'L', 'Bangil', '2001-09-28', 'Islam', 'Jawa', 'Berkecukupan', 'WNI', '1', '2', 'Rungkut Permai VI / J6', 'Rungkut Tengah', '4', '6', 'Gunung Anyar', 'Surabaya', 'Jawa Timur', '60293', '3', '081331074449', 'dhani.kristianti@gmail.com', 'SMP Muhammadyah 5 Surabaya', '030/SMP/05/01/2017', '2017-06-02', '', 'O', '999.9', '999.9', '43', 'M', '29', '', 'M.  Ferry Harfianto Effendi', 'Ennny Afiah', '3275030902740021', '3275036709730021', '0', '0', 'Ortu Kandung', 'Ortu Kandung', 'Surabaya', 'Pasuruan', '1974-02-09', '1973-09-27', 'S1', 'D3', 'PNS', 'Lain-Lain', '> Rp. 5.000.000', '> Rp. 5.000.000', 'harfianto.f@gmail.com', '', 'Telaga Mas F3 no. 47\r\nRT. 5 RW 11\r\nHarapan Baru,  Bekasi Utara', '081293536185', '', '', 'PSBMAU001-M_Chaidar_Albani-1497418523.jpg', '0', '0', '30.20', '0.00', '0.00', '0.00', '77.00', '0.00', '0.00', '0.00', '0.00', '85.00', '0.00', '0.00', '0.00', '0.00', '75.00', '0.00', '0.00', '0.00', '0.00', '82.00', '0.00', '0.00', '0.00', '0.00', '84.00', '0.00', '0.00', '0.00', '0.00', '80.00', '0.00', '0.00', '0.00', '0.00', '87.00', '0.00', '0.00', '0.00', '0.00', '82.00', '0.00', '0.00', '0.00', '0.00', '85.00', '', '2017-06-14 12:35:23', '');
INSERT INTO `psb_calonsiswa` VALUES ('00013', '0013', '', '', '', '0', null, null, null, null, null, '', '', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, '', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-06-09 16:46:18', '');
INSERT INTO `psb_calonsiswa` VALUES ('00014', '0014', 'PSBMAUG217002', 'MA Unggulan Amanatul Ummah', 'Gelombang 2', '2017', '0026600976', '', '3578180101081635', '3578181704020001', '8337/D/2002', 'Fairuz Azhar Auzan', 'Fairuz', 'L', 'Gresik ', '0000-00-00', 'Islam', 'Jawa', 'Berkecukupan', 'WNI', '1', '3', 'Lakarsantri III/5 Surabaya', 'Lakarsantri', '4', '2', 'Lakarsantri', 'Surabaya', 'Jawa Timur', '60211', '0', '081217255189', 'eva@if.its.ac.id', 'SMP Islam darul Mutaqien', '', '', '', '', '52.0', '170.0', '42', 'xl', '28', '', 'Sugeng Trisno', 'Eva Mursidah', '3578182812680001', '3578186501740001', '0', '0', 'Ortu Kandung', 'Ortu Kandung', 'Gresik, ', 'surabaya', '28 desember 1968', '25 januari 1974', 'SMA', 'D3', 'Wiraswasta', 'PNS', 'Rp. 3.000.000 - Rp. 5.000.000', 'Rp. 3.000.000 - Rp. 5.000.000', 'eva.mursidah@gmail.com', 'eva@if.its.ac.id', 'lakarsantri 5 sby', '081217255189', 'hafiz', 'membaca', 'PSBMAUG217002-Fairuz_Azhar_Auzan-1497007152.jpg', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '2017-06-09 18:19:12', '');
INSERT INTO `psb_calonsiswa` VALUES ('00015', '0015', '', '', '', '0', null, null, null, null, null, 'Neisya Kirana', 'Neisya', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'neky.syna@yahoo.co.id', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, '0015-Neisya_Kirana-1497247949.jpg', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-06-12 12:57:31', '');
INSERT INTO `psb_calonsiswa` VALUES ('00016', '0016', '', '', '', '0', null, null, null, null, null, 'Zakiya Sabila Assaidah', 'Bela', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'zakiyasabila050@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, '0016-Zakiya_Sabila_Assaidah-1498859220.jpg', '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-07-01 04:04:15', '');
INSERT INTO `psb_calonsiswa` VALUES ('00017', '0017', '', '', '', '0', null, null, null, null, null, 'Zakiya Sabila Assaidah', 'Bela', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'ipunks.pd@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-07-01 04:06:58', '');
INSERT INTO `psb_calonsiswa` VALUES ('00018', '0018', 'PSBMBIG317002', 'MBI Amanatul Ummah', 'Gelombang 3', '2017', '0030056273', '15-501-063-2', '3523181912090042', '3523184507030000', '1291/R/2003', 'Rohil Lila Rohman', 'Lila', 'P', 'Tuban', '2003-07-05', 'Islam', 'Jawa', 'Berkecukupan', 'WNI', '2', '3', 'Dsn. Rembes RT 03 RW 05 Ds. Gesikharjo - Palang - Tuban', 'Gesikharjo', '3', '5', 'Palang', 'Tuban', 'Jawa Timur', '62391', '15', '081357883800', 'rohillilarohman03@gmail.com', 'MTs Negeri Tuban', '', '', '', 'A', '40.0', '157.0', '40', 'L', '0', '', 'Rohmat Budiono', 'Hanik Rohmatun', '3523182411660001', '3523185306760002', '0', '0', 'Ortu Kandung', 'Ortu Kandung', 'Tuban', 'Tuban', '1966-11-24', '1976-06-13', 'S1', 'SD', 'Swasta', 'Lain-Lain', 'Rp. 2.000.000 - Rp. 3.000.000', '--Pilih--', '', '', 'Dsn. Rembes RT 03 RW 05 Ds. Gesikharjo - Palang - Tuban', '081357883800', 'Dosen', 'Melukis', 'PSBMBIG317002-Rohil_Lila_Rohman-1499154364.jpg', '0', '0', '0.00', '89.00', '87.75', '91.28', '92.00', '0.00', '83.00', '87.70', '87.20', '84.00', '0.00', '77.00', '86.20', '84.65', '78.00', '0.00', '89.00', '85.45', '85.60', '84.00', '0.00', '83.00', '86.40', '84.65', '87.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '87.00', '85.95', '84.23', '86.00', '0.00', '81.00', '82.75', '82.63', '85.00', '0.00', '86.00', '85.30', '89.60', '77.00', '', '2017-07-04 14:46:04', 'y');
INSERT INTO `psb_calonsiswa` VALUES ('00019', '0019', '', '', '', '0', null, null, null, null, null, 'M Bintang', 'Bintang', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'drsbintaang@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-07-10 09:24:36', '');
INSERT INTO `psb_calonsiswa` VALUES ('00020', '0020', '', '', '', '0', null, null, null, null, null, 'DEVINA SALMA AL INAYAH', 'DEVINA', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'aindramulia@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-07-11 13:23:27', '');
INSERT INTO `psb_calonsiswa` VALUES ('00021', '0021', '', '', '', '0', null, null, null, null, null, 'Devina Salma Al Inayah', 'Devina', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'devinaaslm@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-07-11 23:17:05', '');
INSERT INTO `psb_calonsiswa` VALUES ('00022', '0022', '', '', '', '0', null, null, null, null, null, 'Devina Salma Al Inayah', 'Devina', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'davinocogan@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-07-11 23:21:06', '');
INSERT INTO `psb_calonsiswa` VALUES ('00023', '0023', '', '', '', '0', null, null, null, null, null, 'aa', 'aub', null, null, null, '', null, null, '', '0', '0', null, null, null, null, null, null, null, null, '0', null, 'aaa@gmail.com', null, null, null, null, null, '0.0', '0.0', null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, null, null, null, '0', '0', null, null, null, null, null, null, null, '0', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', null, '2017-08-24 19:47:05', '');

-- ----------------------------
-- Table structure for psb_jenispekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `psb_jenispekerjaan`;
CREATE TABLE `psb_jenispekerjaan` (
  `idpekerjaan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(100) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpekerjaan`),
  KEY `psb_jenispekerjaan_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_jenispekerjaan
-- ----------------------------
INSERT INTO `psb_jenispekerjaan` VALUES ('1', 'PNS', '2016-12-05 11:45:54');
INSERT INTO `psb_jenispekerjaan` VALUES ('2', 'Wiraswasta', '2016-12-05 11:45:56');
INSERT INTO `psb_jenispekerjaan` VALUES ('3', 'Swasta', '2016-12-05 11:45:58');
INSERT INTO `psb_jenispekerjaan` VALUES ('4', 'TNI/POLRI', '2017-01-16 00:24:13');
INSERT INTO `psb_jenispekerjaan` VALUES ('5', 'Petani', '2017-01-16 00:24:20');
INSERT INTO `psb_jenispekerjaan` VALUES ('6', 'Buruh', '2017-01-16 00:24:47');
INSERT INTO `psb_jenispekerjaan` VALUES ('7', 'Lain-Lain', '2017-01-16 00:24:56');

-- ----------------------------
-- Table structure for psb_kelompokcalonsiswa
-- ----------------------------
DROP TABLE IF EXISTS `psb_kelompokcalonsiswa`;
CREATE TABLE `psb_kelompokcalonsiswa` (
  `idkelompok` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kelompok` varchar(100) NOT NULL,
  `idprosespenerimaan` int(10) unsigned DEFAULT NULL,
  `kapasitas` int(10) NOT NULL,
  `tglmulai` date DEFAULT NULL,
  `tglselesai` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idkelompok`),
  KEY `psb_kelompokcalonsiswa_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_kelompokcalonsiswa
-- ----------------------------
INSERT INTO `psb_kelompokcalonsiswa` VALUES ('1', 'Gelombang 1', '1', '100', '2016-12-13', '2017-05-06', 'Gelombang 1 MA Unggulan Amanatul Ummah', '2017-01-16 01:56:25');
INSERT INTO `psb_kelompokcalonsiswa` VALUES ('2', 'Gelombang 2', '1', '100', '2017-05-08', '2017-06-10', 'Gelombang 2 MA Unggulan Amanatul Ummah', '2017-01-16 01:56:37');
INSERT INTO `psb_kelompokcalonsiswa` VALUES ('3', 'Gelombang 1', '2', '100', '2016-12-13', '2017-05-06', 'Gelombang 1 MBI Amanatul Ummah', '2017-01-16 01:44:57');
INSERT INTO `psb_kelompokcalonsiswa` VALUES ('4', 'Gelombang 2', '2', '100', '2017-05-08', '2017-06-10', 'Gelombang 2 MBI Amanatul Ummah', '2017-01-16 01:44:59');
INSERT INTO `psb_kelompokcalonsiswa` VALUES ('5', 'Gelombang 3', '1', '100', '2017-06-17', '2017-07-08', 'Gelombang 3 MA Unggulan Amanatul Ummah', '2017-06-14 20:20:28');
INSERT INTO `psb_kelompokcalonsiswa` VALUES ('6', 'Gelombang 3', '2', '100', '2017-06-17', '2017-07-08', 'Gelombang 3 MBI Amanatul Ummah', '2017-06-14 20:22:15');

-- ----------------------------
-- Table structure for psb_kondisisiswa
-- ----------------------------
DROP TABLE IF EXISTS `psb_kondisisiswa`;
CREATE TABLE `psb_kondisisiswa` (
  `idkondisi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(50) NOT NULL,
  `urutan` tinyint(2) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idkondisi`),
  KEY `psb_kondisisiswa_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_kondisisiswa
-- ----------------------------
INSERT INTO `psb_kondisisiswa` VALUES ('1', 'Berkecukupan', '1', '2016-12-05 11:36:38');
INSERT INTO `psb_kondisisiswa` VALUES ('2', 'Kurang Mampu', '2', '2016-12-05 11:36:40');
INSERT INTO `psb_kondisisiswa` VALUES ('3', 'Kaya Raya', '3', '2016-12-05 11:36:42');

-- ----------------------------
-- Table structure for psb_lembaga
-- ----------------------------
DROP TABLE IF EXISTS `psb_lembaga`;
CREATE TABLE `psb_lembaga` (
  `idlembaga` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lembaga` varchar(50) NOT NULL,
  `urutan` tinyint(2) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `aktif` char(1) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idlembaga`),
  KEY `psb_lembaga_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_lembaga
-- ----------------------------
INSERT INTO `psb_lembaga` VALUES ('1', 'MA Unggulan Amanatul Ummah', '1', 'Lembaga MA Unggulan Amanatul Ummah Surabaya', '1', '2016-12-31 03:09:03');
INSERT INTO `psb_lembaga` VALUES ('2', 'MBI Amanatul Ummah', '2', 'Lembaga MBI Amanatul Ummah Surabaya', '1', '2016-12-31 03:09:20');

-- ----------------------------
-- Table structure for psb_log
-- ----------------------------
DROP TABLE IF EXISTS `psb_log`;
CREATE TABLE `psb_log` (
  `idlog` int(5) NOT NULL AUTO_INCREMENT,
  `iduser` int(4) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `notifikasi` varchar(20) DEFAULT NULL,
  `tipe` int(2) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  PRIMARY KEY (`idlog`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_log
-- ----------------------------
INSERT INTO `psb_log` VALUES ('1', '2', 'Muhammad Adham Baehaqi', 'Telah Login', '1', '2017-05-04', '16:52:29');
INSERT INTO `psb_log` VALUES ('2', '3', 'Mimar Rafi Rizkilla Syafrudin', 'Telah Login', '1', '2017-05-18', '11:08:44');
INSERT INTO `psb_log` VALUES ('3', '3', 'Mimar Rafi Rizkilla Syafrudin', 'Telah Login', '1', '2017-05-18', '21:12:21');
INSERT INTO `psb_log` VALUES ('4', '3', 'Mimar Rafi Rizkilla Syafrudin', 'Telah Login', '1', '2017-05-18', '21:18:31');
INSERT INTO `psb_log` VALUES ('5', '6', 'Rieke Ardini', 'Telah Login', '1', '2017-06-01', '04:43:56');
INSERT INTO `psb_log` VALUES ('6', '6', 'Rieke Ardini', 'Telah Login', '1', '2017-06-01', '19:26:31');
INSERT INTO `psb_log` VALUES ('7', '6', 'Rieke Ardini', 'Telah Login', '1', '2017-06-01', '21:31:39');
INSERT INTO `psb_log` VALUES ('8', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-02', '12:21:39');
INSERT INTO `psb_log` VALUES ('9', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-02', '12:29:53');
INSERT INTO `psb_log` VALUES ('10', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-03', '09:28:51');
INSERT INTO `psb_log` VALUES ('11', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-03', '18:40:52');
INSERT INTO `psb_log` VALUES ('12', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-04', '03:54:19');
INSERT INTO `psb_log` VALUES ('13', '10', 'Arganoor ramadhan putra satiadi', 'Telah Login', '1', '2017-06-04', '10:07:14');
INSERT INTO `psb_log` VALUES ('14', '10', 'Arganoor ramadhan putra satiadi', 'Telah Login', '1', '2017-06-04', '10:14:22');
INSERT INTO `psb_log` VALUES ('15', '11', 'ZAINUDDIN ZIDAN ALFARIZY', 'Telah Login', '1', '2017-06-06', '07:01:36');
INSERT INTO `psb_log` VALUES ('16', '11', 'ZAINUDDIN ZIDAN ALFARIZY', 'Telah Login', '1', '2017-06-06', '07:07:31');
INSERT INTO `psb_log` VALUES ('17', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-07', '10:32:31');
INSERT INTO `psb_log` VALUES ('18', '7', 'Nadia Sayyidah Arifah', 'Telah Login', '1', '2017-06-08', '10:24:33');
INSERT INTO `psb_log` VALUES ('19', '14', 'Fairuz Azhar Auzan', 'Telah Login', '1', '2017-06-09', '16:49:58');
INSERT INTO `psb_log` VALUES ('20', '15', 'Neisya Kirana', 'Telah Login', '1', '2017-06-12', '13:02:43');
INSERT INTO `psb_log` VALUES ('21', '12', 'M Haidar Albani', 'Telah Login', '1', '2017-06-12', '22:09:55');
INSERT INTO `psb_log` VALUES ('22', '12', 'M Haidar Albani', 'Telah Login', '1', '2017-06-13', '20:31:47');
INSERT INTO `psb_log` VALUES ('23', '12', 'M Chaidar Albani', 'Telah Login', '1', '2017-06-14', '06:25:41');
INSERT INTO `psb_log` VALUES ('24', '12', 'M Chaidar Albani', 'Telah Login', '1', '2017-06-14', '06:30:08');
INSERT INTO `psb_log` VALUES ('25', '12', 'M Chaidar Albani', 'Telah Login', '1', '2017-06-14', '12:14:04');
INSERT INTO `psb_log` VALUES ('26', '12', 'M Chaidar Albani', 'Telah Login', '1', '2017-06-14', '12:26:59');
INSERT INTO `psb_log` VALUES ('27', '11', 'ZAINUDDIN ZIDAN ALFARIZY', 'Telah Login', '1', '2017-06-14', '18:03:45');
INSERT INTO `psb_log` VALUES ('28', '16', 'Zakiya Sabila Assaidah', 'Telah Login', '1', '2017-07-01', '04:19:10');
INSERT INTO `psb_log` VALUES ('29', '16', 'Zakiya Sabila Assaidah', 'Telah Login', '1', '2017-07-01', '05:49:36');
INSERT INTO `psb_log` VALUES ('30', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-02', '20:03:15');
INSERT INTO `psb_log` VALUES ('31', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-03', '17:33:07');
INSERT INTO `psb_log` VALUES ('32', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-03', '21:38:01');
INSERT INTO `psb_log` VALUES ('33', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-04', '10:18:34');
INSERT INTO `psb_log` VALUES ('34', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-04', '14:30:09');
INSERT INTO `psb_log` VALUES ('35', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-04', '14:34:23');
INSERT INTO `psb_log` VALUES ('36', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-04', '14:53:22');
INSERT INTO `psb_log` VALUES ('37', '18', 'Rohil Lila Rohman', 'Telah Login', '1', '2017-07-07', '11:21:38');

-- ----------------------------
-- Table structure for psb_penghasilan
-- ----------------------------
DROP TABLE IF EXISTS `psb_penghasilan`;
CREATE TABLE `psb_penghasilan` (
  `idpenghasilan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `penghasilan` varchar(100) NOT NULL,
  `urutan` tinyint(2) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpenghasilan`),
  KEY `psb_penghasilan_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_penghasilan
-- ----------------------------
INSERT INTO `psb_penghasilan` VALUES ('1', '<= Rp. 500.000', '1', '2017-01-16 21:36:55');
INSERT INTO `psb_penghasilan` VALUES ('2', 'Rp. 500.000 - Rp. 1.000.000', '2', '2017-01-16 21:35:58');
INSERT INTO `psb_penghasilan` VALUES ('3', 'Rp. 1.000.000 - Rp. 2.000.000', '3', '2017-01-16 21:36:13');
INSERT INTO `psb_penghasilan` VALUES ('4', 'Rp. 2.000.000 - Rp. 3.000.000', '4', '2017-01-16 21:36:29');
INSERT INTO `psb_penghasilan` VALUES ('5', 'Rp. 3.000.000 - Rp. 5.000.000', '5', '2017-01-16 21:36:40');
INSERT INTO `psb_penghasilan` VALUES ('6', '> Rp. 5.000.000', '6', '2017-01-16 21:36:50');

-- ----------------------------
-- Table structure for psb_prosespenerimaan
-- ----------------------------
DROP TABLE IF EXISTS `psb_prosespenerimaan`;
CREATE TABLE `psb_prosespenerimaan` (
  `idprosespenerimaan` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `proses` varchar(100) NOT NULL,
  `kodeawalan` varchar(8) NOT NULL,
  `lembaga` varchar(50) NOT NULL,
  `aktif` char(1) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idprosespenerimaan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_prosespenerimaan
-- ----------------------------
INSERT INTO `psb_prosespenerimaan` VALUES ('1', 'Pendaftaran MAU 2017', 'PSBMAU17', 'MA Unggulan Amanatul Ummah', '1', 'Pendaftaran MA Unggulan Amanatul Ummah tahun masuk 2017', '2016-12-28 03:18:16');
INSERT INTO `psb_prosespenerimaan` VALUES ('2', 'Pendaftaran MBI 2017', 'PSBMBI17', 'MBI Amanatul Ummah', '1', 'Pendaftaran MBI Amanatul Ummah tahun masuk 2017', '2016-12-28 03:22:01');

-- ----------------------------
-- Table structure for psb_statusortu
-- ----------------------------
DROP TABLE IF EXISTS `psb_statusortu`;
CREATE TABLE `psb_statusortu` (
  `idstatusortu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `statusortu` varchar(50) NOT NULL,
  `urutan` tinyint(2) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idstatusortu`),
  KEY `psb_statusortu_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_statusortu
-- ----------------------------
INSERT INTO `psb_statusortu` VALUES ('1', 'Ortu Kandung', '1', '2016-12-05 11:41:22');
INSERT INTO `psb_statusortu` VALUES ('2', 'Ortu Tiri', '2', '2016-12-05 11:41:03');
INSERT INTO `psb_statusortu` VALUES ('3', 'Ortu Angkat', '3', '2016-12-05 11:41:05');
INSERT INTO `psb_statusortu` VALUES ('4', 'Lainnya', '4', '2016-12-05 11:41:25');

-- ----------------------------
-- Table structure for psb_suku
-- ----------------------------
DROP TABLE IF EXISTS `psb_suku`;
CREATE TABLE `psb_suku` (
  `idsuku` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `suku` varchar(50) NOT NULL,
  `urutan` tinyint(2) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idsuku`),
  KEY `psb_suku_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_suku
-- ----------------------------
INSERT INTO `psb_suku` VALUES ('1', 'Jawa', '1', '2016-12-05 11:31:15');
INSERT INTO `psb_suku` VALUES ('2', 'Sunda', '2', '2016-12-05 11:31:28');
INSERT INTO `psb_suku` VALUES ('3', 'Madura', '3', '2016-12-05 11:31:46');
INSERT INTO `psb_suku` VALUES ('4', 'Minang', '4', '2016-12-05 11:31:48');
INSERT INTO `psb_suku` VALUES ('5', 'Batak', '5', '2016-12-05 11:32:27');
INSERT INTO `psb_suku` VALUES ('6', 'Kerinci', '6', '2016-12-05 11:32:35');
INSERT INTO `psb_suku` VALUES ('7', 'Melayu', '7', '2016-12-05 11:32:44');
INSERT INTO `psb_suku` VALUES ('8', 'Betawi', '8', '2016-12-05 11:33:19');
INSERT INTO `psb_suku` VALUES ('9', 'Bima', '9', '2016-12-05 11:33:30');
INSERT INTO `psb_suku` VALUES ('10', 'Dayak', '10', '2016-12-05 11:33:39');
INSERT INTO `psb_suku` VALUES ('11', 'Banjar', '11', '2016-12-05 11:34:14');
INSERT INTO `psb_suku` VALUES ('12', 'Bali', '12', '2016-12-05 11:34:22');
INSERT INTO `psb_suku` VALUES ('13', 'Toraja', '13', '2016-12-05 11:34:29');
INSERT INTO `psb_suku` VALUES ('14', 'Bugis', '14', '2016-12-05 11:34:38');

-- ----------------------------
-- Table structure for psb_tahunmasuk
-- ----------------------------
DROP TABLE IF EXISTS `psb_tahunmasuk`;
CREATE TABLE `psb_tahunmasuk` (
  `idtahunmasuk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tahunmasuk` varchar(50) NOT NULL,
  `lembaga` varchar(200) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `aktif` char(1) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idtahunmasuk`),
  KEY `psb_tahunmasuk_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_tahunmasuk
-- ----------------------------
INSERT INTO `psb_tahunmasuk` VALUES ('1', '2017', 'MA Unggulan Amanatul Ummah', 'Tahun masuk 2017 lembaga MA Unggulan Amanatul Ummah', '1', '2017-01-14 04:34:52');
INSERT INTO `psb_tahunmasuk` VALUES ('2', '2017', 'MBI Amanatul Ummah', 'Tahun masuk 2017 lembaga MBI Amanatul Ummah', '1', '2017-01-01 00:38:44');

-- ----------------------------
-- Table structure for psb_tingkatpendidikan
-- ----------------------------
DROP TABLE IF EXISTS `psb_tingkatpendidikan`;
CREATE TABLE `psb_tingkatpendidikan` (
  `idpendidikan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(20) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpendidikan`),
  KEY `psb_tingkatpendidikan_ts` (`ts`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_tingkatpendidikan
-- ----------------------------
INSERT INTO `psb_tingkatpendidikan` VALUES ('1', 'D1', '2016-12-05 11:42:39');
INSERT INTO `psb_tingkatpendidikan` VALUES ('2', 'D2', '2016-12-05 11:42:41');
INSERT INTO `psb_tingkatpendidikan` VALUES ('3', 'D3', '2016-12-05 11:42:44');
INSERT INTO `psb_tingkatpendidikan` VALUES ('4', 'D4', '2016-12-05 11:42:46');
INSERT INTO `psb_tingkatpendidikan` VALUES ('5', 'S1', '2016-12-05 11:42:48');
INSERT INTO `psb_tingkatpendidikan` VALUES ('6', 'S2', '2016-12-05 11:42:50');
INSERT INTO `psb_tingkatpendidikan` VALUES ('7', 'S3', '2016-12-05 11:42:52');
INSERT INTO `psb_tingkatpendidikan` VALUES ('8', 'SD', '2016-12-05 11:42:54');
INSERT INTO `psb_tingkatpendidikan` VALUES ('9', 'SMP', '2016-12-05 11:42:57');
INSERT INTO `psb_tingkatpendidikan` VALUES ('10', 'SMA', '2016-12-05 11:42:59');
INSERT INTO `psb_tingkatpendidikan` VALUES ('12', 'Tidak Tamat SD', '2017-01-15 23:06:31');

-- ----------------------------
-- Table structure for psb_user
-- ----------------------------
DROP TABLE IF EXISTS `psb_user`;
CREATE TABLE `psb_user` (
  `iduser` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `panggilan` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `verifikasi` varchar(200) NOT NULL,
  `statusdaftar` char(2) DEFAULT NULL,
  `aktif` char(1) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of psb_user
-- ----------------------------
INSERT INTO `psb_user` VALUES ('0001', 'PRAMESTI PRAMUDITA EKTIYAS ANGGRAENI', 'DITA', 'ud.duaberlian@gmail.com', 'bf0b4521548449c40f839334085b7c96', '9db32e4d3fe7243f3a11254bfd6c3e95', 'n', '1', '2017-05-05 17:16:21');
INSERT INTO `psb_user` VALUES ('0002', 'Muhammad Adham Baehaqi', 'Baehaqi', 'khoirulanwar0529@gmail.com', 'f136d3239b3ab69c0b0082aab956e38f', '14a706cb579661755b94667d52c8b57b', 'n', '1', '2017-05-04 16:50:24');
INSERT INTO `psb_user` VALUES ('0003', 'Mimar Rafi Rizkilla Syafrudin', 'Mimar', 'aapsml@gmail.com', '2eec375537c3be4e558db9cda5f6e0f7', '1da8280438e6c21a25c56260becbeb72', 'y', '1', '2017-05-18 22:28:42');
INSERT INTO `psb_user` VALUES ('0004', 'fatma nur arofah', 'fafa', 'fatmanur15@yahoo.com', '234cb84ab84bf51305ef60797666c995', 'f943fb54300927286bcd8a9c112d99b0', 'n', '', '2017-05-28 13:02:08');
INSERT INTO `psb_user` VALUES ('0005', 'fatma nur arofah', 'fafa', 'herut511@icloud.com', '333aa7542aa8f39162c585a88f466e6e', '665add2b20ee9654808b137d327f1207', 'n', '', '2017-05-28 13:12:51');
INSERT INTO `psb_user` VALUES ('0006', 'Rieke Ardini', 'Keke', 'rieke.ardini@yahoo.com', '212083a7c976286093b9813a277463bb', 'aaa05abcc613c646180b655bd940a051', 'y', '1', '2017-06-01 20:13:00');
INSERT INTO `psb_user` VALUES ('0007', 'Nadia Sayyidah Arifah', 'Nadia', 'Nadiasayyidah17@gmail.com', '94b34094852d1c046b36af21387b0b85', '701b580b254d63363e22d2a14bdc6268', 'n', '1', '2017-06-02 12:21:03');
INSERT INTO `psb_user` VALUES ('0008', 'Fatma nur arofah', 'Fafa', 'wwwfatmanur@gmail.com', '234cb84ab84bf51305ef60797666c995', 'eaab31467ec0a3c9c974a800a03e9065', 'n', '', '2017-06-03 13:25:28');
INSERT INTO `psb_user` VALUES ('0009', 'Arganoor ramadhan putra satiadi', 'Arga', 'arga2311@gmail.com', '8d3dcac732e21e14c1b8fe0aceb6db2b', '9765bc6e70aa4e4a7efb2b9bdc3aa58b', 'n', '', '2017-06-04 09:57:14');
INSERT INTO `psb_user` VALUES ('0010', 'Arganoor ramadhan putra satiadi', 'Arga', 'argasatiadi@yahoo.com', '8f69de57b146311c3a691b718c73a1e6', 'b5bd7eecba23c2dfcb45f741b0672668', 'y', '1', '2017-06-04 10:47:24');
INSERT INTO `psb_user` VALUES ('0011', 'ZAINUDDIN ZIDAN ALFARIZY', 'ZIDAN', 'ernirositadewi011311233031@gmail.com', '348f961d71a5cabe262b77d77716d7aa', 'f2c9b85bbd2317ad80816e4c667a415d', 'n', '1', '2017-06-06 07:01:03');
INSERT INTO `psb_user` VALUES ('0012', 'M Chaidar Albani', 'Chaidar', 'dhani.kristianti@gmail.com', 'f65f5d1bc1b166b3d69dc92098858191', '91281600e8a9f56955efb9b8bc9bda5c', 'y', '1', '2017-06-13 21:29:07');
INSERT INTO `psb_user` VALUES ('0013', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'b6434854568ad162ccb6e5f8ec49270a', 'n', '', '2017-06-09 16:46:18');
INSERT INTO `psb_user` VALUES ('0014', 'Fairuz Azhar Auzan', 'Fairuz', 'eva@if.its.ac.id', '00e45749508fe15ca1af3397eab8db78', '94af1fb4846f8f21640efe8d1a70565c', 'y', '1', '2017-06-09 18:19:12');
INSERT INTO `psb_user` VALUES ('0015', 'Neisya Kirana', 'Neisya', 'neky.syna@yahoo.co.id', '44a73cbd56adaa789271ae7f75d51142', '407afd8643aa17420f9b6d2a39bc852b', 'n', '1', '2017-06-12 13:02:19');
INSERT INTO `psb_user` VALUES ('0016', 'Zakiya Sabila Assaidah', 'Bela', 'zakiyasabila050@gmail.com', '7b0fb5762dcd1b251086259741266725', 'df44d834bcdefc6e9409847cf1bdc16d', 'n', '1', '2017-07-01 04:18:39');
INSERT INTO `psb_user` VALUES ('0017', 'Zakiya Sabila Assaidah', 'Bela', 'ipunks.pd@gmail.com', 'bcb0d536831adb8bdc9628ee3acbda82', '34f07b2685a3b2b812e1e23d1d3d7ef9', 'n', '', '2017-07-01 04:06:58');
INSERT INTO `psb_user` VALUES ('0018', 'Rohil Lila Rohman', 'Lila', 'rohillilarohman03@gmail.com', '848aed2edab58fa2820a273f47f5e671', 'b2ef7e780133e213ab2d2c833215b48d', 'y', '1', '2017-07-04 10:56:07');
INSERT INTO `psb_user` VALUES ('0019', 'M Bintang', 'Bintang', 'drsbintaang@gmail.com', '41cddaba8ed2d2586ec07dce1028df01', '68c40638b3ff466a3f3be0a36a8716bd', 'n', '', '2017-07-10 09:24:36');
INSERT INTO `psb_user` VALUES ('0020', 'DEVINA SALMA AL INAYAH', 'DEVINA', 'aindramulia@gmail.com', 'b2cc1f1122b77bda410a66ac0ce82618', '92f927c882028fdd2c20003ca141805a', 'n', '', '2017-07-11 13:23:27');
INSERT INTO `psb_user` VALUES ('0021', 'Devina Salma Al Inayah', 'Devina', 'devinaaslm@gmail.com', 'cd9eae9358180e26e433737a0856d383', '6f25c4243e0b6878388657d89ad9b73c', 'n', '', '2017-07-11 23:17:05');
INSERT INTO `psb_user` VALUES ('0022', 'Devina Salma Al Inayah', 'Devina', 'davinocogan@gmail.com', 'cd9eae9358180e26e433737a0856d383', '1332fca14ef748b1ee708ec554999f89', 'n', '', '2017-07-11 23:21:06');
INSERT INTO `psb_user` VALUES ('0023', 'aa', 'aub', 'aaa@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '11fcbd4888812ae88e3d84ccde36a7e9', 'n', '', '2017-08-24 19:47:05');
