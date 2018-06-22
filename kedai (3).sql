-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: kedai
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aset_managemen`
--

DROP TABLE IF EXISTS `aset_managemen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aset_managemen` (
  `id_asset_management` int(3) NOT NULL AUTO_INCREMENT,
  `nama_asset` varchar(50) NOT NULL,
  `jumlah_asset` int(2) NOT NULL,
  `kondisi_asset` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_outlet` int(2) NOT NULL,
  PRIMARY KEY (`id_asset_management`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aset_managemen`
--

LOCK TABLES `aset_managemen` WRITE;
/*!40000 ALTER TABLE `aset_managemen` DISABLE KEYS */;
/*!40000 ALTER TABLE `aset_managemen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_member`
--

DROP TABLE IF EXISTS `group_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_member` (
  `id_group` int(1) NOT NULL AUTO_INCREMENT,
  `level_group` char(10) NOT NULL,
  `diskon_member` double NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_member`
--

LOCK TABLES `group_member` WRITE;
/*!40000 ALTER TABLE `group_member` DISABLE KEYS */;
INSERT INTO `group_member` VALUES (1,'Silver',5),(2,'Gold',10),(3,'Platinum',100);
/*!40000 ALTER TABLE `group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `harga_produk`
--

DROP TABLE IF EXISTS `harga_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `harga_produk` (
  `id_harga` int(5) NOT NULL AUTO_INCREMENT,
  `level_harga` tinyint(1) NOT NULL COMMENT '0. non member  |  1. Member',
  `id_produk` int(5) NOT NULL,
  `harga_jual` int(8) NOT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `harga_produk`
--

LOCK TABLES `harga_produk` WRITE;
/*!40000 ALTER TABLE `harga_produk` DISABLE KEYS */;
INSERT INTO `harga_produk` VALUES (1,1,7,6000),(2,0,7,9000),(3,1,8,6000),(4,0,8,9000),(5,1,9,6000),(6,0,9,9000),(7,1,1,9000),(8,0,1,12000),(9,1,2,9000),(10,0,2,12000),(11,1,3,9000),(12,0,3,12000),(13,1,4,3000),(14,0,4,6000),(15,1,5,3000),(16,0,5,12000),(17,1,6,3000),(18,0,6,12000),(19,1,10,3000),(20,0,10,6000),(21,1,11,3000),(22,0,11,6000),(23,1,12,3000),(24,0,12,6000);
/*!40000 ALTER TABLE `harga_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id_member` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tanggal_member` date NOT NULL,
  `status_member` tinyint(1) NOT NULL,
  `id_group` int(1) NOT NULL,
  `rfid_card` char(15) NOT NULL,
  `saldo` int(8) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_outlet` int(2) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (2,'Aji Darmawan','Jakarta','laki-laki','000978787767','2018-06-01',1,1,'0009570889',100000,2,1),(3,'Husnul Hamidi','Jakarta','laki-laki','','2018-06-01',1,1,'0009516226',100000,0,0),(4,'Sirojudin Ahmad','Jakarta','laki-laki','','2018-06-01',1,1,'0007018198',100000,0,0),(5,'Elok Putri Arizka','Jakarta','perempuan','','2018-06-01',1,1,'0007016316',100000,0,0),(6,'Rafika Wulandari','Jakarta','perempuan','','2018-06-01',1,1,'0009547772',100000,0,0),(7,'Mauriza Bayu Kurniawan','Jakarta','laki-laki','','2018-06-01',1,2,'0009514969',100000,0,0),(8,'Putri Mayasari','Jakarta','perempuan','','2018-06-01',1,2,'0009547399',100000,0,0),(9,'Angga Nugroho','Jakarta','laki-laki','','2018-06-01',1,2,'0009581598',1116300,0,0),(10,'Agung','Jakarta','laki-laki','','2018-06-01',1,2,'0009531860',100000,0,0),(11,'Mala Inanialti','Jakarta','perempuan','','2018-06-01',1,2,'0009532566',100000,0,0),(12,'Devi Aldiva','Jakarta','perempuan','','2018-06-01',1,2,'0009534348',100000,0,0),(13,'Wiwik Sagita','Jakarta','perempuan','','2018-06-01',1,3,'0009512741',100000,0,0),(14,'Arlida Putri','Jakarta','perempuan','','2018-06-01',1,3,'0009512122',100000,0,0),(15,'Gerry Mahesa','Jakarta','laki-laki','','2018-06-01',1,3,'0009515282',100000,0,0),(16,'Jihan Audy','Jakarta','perempuan','','2018-06-01',1,3,'0009516543',100000,0,0),(17,'Faizal Dinar Alfaqih','Jakarta','laki-laki','085713236317','2018-06-16',1,2,'0009568515',8000,2,1);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mutasi`
--

DROP TABLE IF EXISTS `mutasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mutasi` (
  `id_mutasi` int(5) NOT NULL AUTO_INCREMENT,
  `amount` int(10) NOT NULL,
  `last_amount` int(10) NOT NULL,
  `note` varchar(30) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `tanggal_mutasi` datetime NOT NULL,
  `kode_transaksi` varchar(30) NOT NULL,
  `trans_mut` bigint(15) NOT NULL,
  `id_member` int(5) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_outlet` int(2) NOT NULL,
  PRIMARY KEY (`id_mutasi`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mutasi`
--

LOCK TABLES `mutasi` WRITE;
/*!40000 ALTER TABLE `mutasi` DISABLE KEYS */;
INSERT INTO `mutasi` VALUES (1,-5400,94600,'Transaksi Produk','D','2018-06-11 01:29:01','INV/20180611/9581598/012901',159811060129010,9,2,1),(2,-5400,89200,'Transaksi Produk','D','2018-06-11 01:29:01','INV/20180611/9581598/012901',159811060129011,9,2,1),(3,-5400,83800,'Transaksi Produk','D','2018-06-11 01:29:01','INV/20180611/9581598/012901',159811060129012,9,2,1),(4,-8100,75700,'Transaksi Produk','D','2018-06-11 01:29:01','INV/20180611/9581598/012901',159811060129013,9,2,1),(5,-5400,70300,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129430,9,2,1),(6,-5400,64900,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129431,9,2,1),(7,-5400,59500,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129432,9,2,1),(8,-8100,51400,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129433,9,2,1),(9,-2700,48700,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129434,9,2,1),(10,-8100,40600,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129435,9,2,1),(11,-8100,32500,'Transaksi Produk','D','2018-06-11 01:29:43','INV/20180611/9581598/012943',159811060129436,9,2,1),(12,-5400,27100,'Transaksi Produk','D','2018-06-11 01:33:44','INV/20180611/9581598/013344',159811060133440,9,2,1),(13,-5400,21700,'Transaksi Produk','D','2018-06-11 01:33:44','INV/20180611/9581598/013344',159811060133441,9,2,1),(14,-5400,16300,'Transaksi Produk','D','2018-06-11 01:33:44','INV/20180611/9581598/013344',159811060133442,9,2,1),(15,-42000,-25700,'Transaksi Produk With Cash','D','2018-06-11 01:34:57','INV/20180611/9581598/013457',159811060134570,9,2,1),(16,-12000,-37700,'Transaksi Produk With Cash','D','2018-06-11 01:34:57','INV/20180611/9581598/013457',159811060134571,9,2,1),(17,-42000,-25700,'Transaksi Produk With Cash','D','2018-06-11 01:39:12','INV/20180611/9581598/013912',159811060139120,9,2,1),(18,-12000,-37700,'Transaksi Produk With Cash','D','2018-06-11 01:39:12','INV/20180611/9581598/013912',159811060139121,9,2,1),(19,-42000,-25700,'Transaksi Produk With Cash','D','2018-06-11 01:41:40','INV/20180611/9581598/014140',159811060141400,9,2,1),(20,-12000,-37700,'Transaksi Produk With Cash','D','2018-06-11 01:41:40','INV/20180611/9581598/014140',159811060141401,9,2,1),(21,-6000,10300,'Transaksi Produk With Cash','D','2018-06-11 01:55:38','INV/20180611/9581598/015537',159811060155370,9,2,1),(22,-36000,-25700,'Transaksi Produk With Cash','D','2018-06-11 01:55:38','INV/20180611/9581598/015537',159811060155371,9,2,1),(23,-36000,-19700,'Transaksi Produk With Cash','D','2018-06-11 01:59:37','INV/20180611/9581598/015937',159811060159370,9,2,1),(24,-24000,-7700,'Transaksi Produk With Cash','D','2018-06-11 03:39:28','INV/20180611/9581598/033928',159811060339280,9,2,1),(33,-9000,-9000,'Transaksi Produk With Cash','D','2018-06-13 11:23:47','INV/20180613/NONMEMBER/1/11234',113061123470,0,2,1),(34,-9000,-18000,'Transaksi Produk With Cash','D','2018-06-13 11:23:47','INV/20180613/NONMEMBER/1/11234',113061123471,0,2,1),(35,-9000,-27000,'Transaksi Produk With Cash','D','2018-06-13 11:23:47','INV/20180613/NONMEMBER/1/11234',113061123472,0,2,1),(36,1000000,16300,'Topup Saldo ','K','2018-06-14 10:26:31','',0,9,0,0),(37,100000,1016300,'Topup Saldo ','K','2018-06-14 10:31:13','',0,9,2,1);
/*!40000 ALTER TABLE `mutasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outlet`
--

DROP TABLE IF EXISTS `outlet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outlet` (
  `id_outlet` int(2) NOT NULL AUTO_INCREMENT,
  `kode_outlet` varchar(10) NOT NULL,
  `nama_outlet` varchar(50) NOT NULL,
  `alamat_outlet` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_outlet`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outlet`
--

LOCK TABLES `outlet` WRITE;
/*!40000 ALTER TABLE `outlet` DISABLE KEYS */;
INSERT INTO `outlet` VALUES (1,'','Kedai 1','bintaro','Jawa Barat','Jakarta','Jakarta','Jakarta',12123,'32423232');
/*!40000 ALTER TABLE `outlet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembelian`
--

DROP TABLE IF EXISTS `pembelian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembelian` (
  `id_pembelian` int(3) NOT NULL AUTO_INCREMENT,
  `inv_pembelian` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `kondisi_barang` varchar(10) NOT NULL,
  `harga_barang` int(8) NOT NULL,
  `penanganan` varchar(50) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `bukti_pembelian` varchar(50) NOT NULL,
  `id_supplier` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_outlet` int(2) NOT NULL,
  `sistem_pembayaran` varchar(30) NOT NULL COMMENT 'konsinyasi | bayar full',
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembelian`
--

LOCK TABLES `pembelian` WRITE;
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembelian_reject`
--

DROP TABLE IF EXISTS `pembelian_reject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembelian_reject` (
  `id_reject` int(3) NOT NULL AUTO_INCREMENT,
  `nama_brg_reject` varchar(50) NOT NULL,
  `jumlah_reject` int(11) NOT NULL,
  `nominal_reject` int(11) NOT NULL,
  `tanggal_reject` date NOT NULL,
  `estimasi_reject` date NOT NULL,
  `keterangan_reject` varchar(30) NOT NULL COMMENT 'dikembalikan dalam bentuk apa?',
  `inv_pembelian` varchar(15) NOT NULL,
  `id_supplier` int(2) NOT NULL,
  PRIMARY KEY (`id_reject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembelian_reject`
--

LOCK TABLES `pembelian_reject` WRITE;
/*!40000 ALTER TABLE `pembelian_reject` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembelian_reject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(6) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori_menu` varchar(30) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_supplier` int(2) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (1,'brg001','Kari Kambing Aceh','Makanan Utama',10,'/assets/gretong/images/kari_kambing_aceh.jpg',1),(2,'brg002','Gulai Ikan Aceh','Makanan Utama',10,'/assets/gretong/images/gulai_ikan_aceh.jpeg',1),(3,'brg003','Ayam bakar Aceh','Makanan Utama',10,'/assets/gretong/images/ayam_bakar_aceh.jpeg',1),(4,'brg004','Kopi Gayo Aceh','Minuman Hangat Sehat',10,'/assets/gretong/images/kopi_gayo.jpg',1),(5,'brg005','Jahe Aceh','Minuman Hangat Sehat',60,'/assets/gretong/images/jahe_aceh.jpg',1),(6,'brg006','Teh Tarik Aceh','Minuman Hangat Sehat',10,'/assets/gretong/images/teh_tarik.jpg',1),(7,'brg007','Nasi Gurih Aceh','Sarapan',10,'/assets/gretong/images/nasi_gurih.jpg',1),(8,'brg008','Kopi Aceh + Kue Kampung','Sarapan',10,'/assets/gretong/images/kue_lampung.jpg',1),(9,'brg009','Bubur Ayam Aceh','Sarapan',10,'/assets/gretong/images/bubur_ayam.jpg',1),(10,'brg010','Jus Alpukat','Jus Sehat',10,'/assets/gretong/images/jus_alpukat.jpg',1),(11,'brg011','Semangka','Jus Sehat',10,'/assets/gretong/images/jus_semangka.jpeg',1),(12,'brg012','Jus Sirsak','Jus Sehat',10,'/assets/gretong/images/jus_sirsak.jpeg',1);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `id_supplier` int(2) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email_supplier` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(30) NOT NULL,
  `trans_mut` bigint(15) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `id_produk` int(5) NOT NULL,
  `qty` int(4) NOT NULL,
  `harga_jual` int(8) NOT NULL,
  `diskon` int(1) NOT NULL,
  `diskon_amount` int(10) NOT NULL,
  `total` int(8) NOT NULL,
  `type_pembayaran` varchar(20) NOT NULL,
  `bayar_cash` int(11) NOT NULL,
  `id_member` int(5) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_outlet` int(2) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,'INV/20180611/9581598/012901',159811060129010,'2018-06-11 01:29:01',7,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(2,'INV/20180611/9581598/012901',159811060129011,'2018-06-11 01:29:01',8,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(3,'INV/20180611/9581598/012901',159811060129012,'2018-06-11 01:29:01',9,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(4,'INV/20180611/9581598/012901',159811060129013,'2018-06-11 01:29:01',1,1,9000,10,900,8100,'Potong Saldo RFID',0,9,2,1),(5,'INV/20180611/9581598/012943',159811060129430,'2018-06-11 01:29:43',7,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(6,'INV/20180611/9581598/012943',159811060129431,'2018-06-11 01:29:43',8,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(7,'INV/20180611/9581598/012943',159811060129432,'2018-06-11 01:29:43',9,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(8,'INV/20180611/9581598/012943',159811060129433,'2018-06-11 01:29:43',1,1,9000,10,900,8100,'Potong Saldo RFID',0,9,2,1),(9,'INV/20180611/9581598/012943',159811060129434,'2018-06-11 01:29:43',4,1,3000,10,300,2700,'Potong Saldo RFID',0,9,2,1),(10,'INV/20180611/9581598/012943',159811060129435,'2018-06-11 01:29:43',3,1,9000,10,900,8100,'Potong Saldo RFID',0,9,2,1),(11,'INV/20180611/9581598/012943',159811060129436,'2018-06-11 01:29:43',2,1,9000,10,900,8100,'Potong Saldo RFID',0,9,2,1),(12,'INV/20180611/9581598/013344',159811060133440,'2018-06-11 01:33:44',7,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(13,'INV/20180611/9581598/013344',159811060133441,'2018-06-11 01:33:44',8,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(14,'INV/20180611/9581598/013344',159811060133442,'2018-06-11 01:33:44',9,1,6000,10,600,5400,'Potong Saldo RFID',0,9,2,1),(15,'INV/20180611/9581598/013457',159811060134570,'2018-06-11 01:34:57',7,7,6000,0,0,42000,'Cash',55000,9,2,1),(16,'INV/20180611/9581598/013457',159811060134571,'2018-06-11 01:34:57',8,2,6000,0,0,12000,'Cash',55000,9,2,1),(17,'INV/20180611/9581598/013912',159811060139120,'2018-06-11 01:39:12',7,7,6000,0,0,42000,'Cash',55000,9,2,1),(18,'INV/20180611/9581598/013912',159811060139121,'2018-06-11 01:39:12',8,2,6000,0,0,12000,'Cash',55000,9,2,1),(19,'INV/20180611/9581598/014140',159811060141400,'2018-06-11 01:41:40',7,7,6000,0,0,42000,'Cash',55000,9,2,1),(20,'INV/20180611/9581598/014140',159811060141401,'2018-06-11 01:41:40',8,2,6000,0,0,12000,'Cash',55000,9,2,1),(21,'INV/20180611/9581598/015537',159811060155370,'2018-06-11 01:55:37',7,1,6000,0,0,6000,'Cash',43000,9,2,1),(22,'INV/20180611/9581598/015537',159811060155371,'2018-06-11 01:55:37',8,6,6000,0,0,36000,'Cash',43000,9,2,1),(23,'INV/20180611/9581598/015937',159811060159370,'2018-06-11 01:59:37',7,6,6000,0,0,36000,'Cash',37000,9,2,1),(24,'INV/20180611/9581598/033928',159811060339280,'2018-06-11 03:39:28',7,4,6000,0,0,24000,'Cash',25000,9,2,1),(33,'INV/20180613/NONMEMBER/1/11234',113061123470,'2018-06-13 11:23:47',7,1,9000,0,0,9000,'Cash',30000,0,2,1),(34,'INV/20180613/NONMEMBER/1/11234',113061123471,'2018-06-13 11:23:47',8,1,9000,0,0,9000,'Cash',30000,0,2,1),(35,'INV/20180613/NONMEMBER/1/11234',113061123472,'2018-06-13 11:23:47',9,1,9000,0,0,9000,'Cash',30000,0,2,1);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `status_user` tinyint(1) NOT NULL COMMENT '0. SA 1. Admin 2. Kasir',
  `last_login` date NOT NULL,
  `cookie` text NOT NULL,
  `id_outlet` int(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'super_admin','admin@gmail.com','9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa',0,'2018-05-24','9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa',0),(2,'kasir','kasir@gmail.com','9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa',2,'2018-05-21','',1),(3,'admin','admin@gmail.com','9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa',1,'2018-06-06','',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-21 20:59:11
