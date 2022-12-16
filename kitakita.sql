-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: kitakita
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id_admin` varchar(13) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('AD001','Hilma Kiut','081122345677','hil@gmail.com','hilarious11','Jl. Janggi',NULL),('AD002','Arin Hito','083453990011','hit@gmail.com','arinn11','Jl. Jalan',NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buku` (
  `id` varchar(17) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `penerbit` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int DEFAULT NULL,
  `cover` text,
  `pdf` text,
  `created_add` date DEFAULT NULL,
  `updated_add` date DEFAULT NULL,
  `id_kategori` varchar(5) DEFAULT NULL,
  `id_admin` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_buku_kategori` (`id_kategori`),
  KEY `FK_buku_admin` (`id_admin`),
  CONSTRAINT `fk_buku_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES ('976-602-424-694-5','Laut Bercerita','2017','Leila S. Chudori','Kepustakaan Populer Grameida (KPG)','Deskripsi Buku 1',30,'https://imgv2-2-f.scribdassets.com/img/document/390813131/original/111116d801/1596783574?v=1','https://www.academia.edu/40361818/Laut_bercerita','2022-10-01','2022-12-01','KT001','AD001'),('978-602-280-957-9','Memahami Pembentukan Kepribadian Anda','2017','Saludin Muis','\r\nJakarta : Psikosain','Deskripsi Buku 4',35,'https://cdn.gramedia.com/uploads/items/9786025045301_9786025045301.jpg','https://edeposit.perpusnas.go.id/collection/memahami-pembentukan-kepribadian-anda-permasalahan-dan-reaksi-terhadap-suatu-pengalaman-sumber-elektronis/11079#','2022-06-10','2022-06-10','KT002','AD002'),('978-623-256-725-2','Kutudaun Pada Pertanaman Pertanian dan Gulma di Jawa Barat','2021','Yani Maharani | Purnama Hidayat','IPB Press','Deskripsi Buku 3',26,'https://th.bing.com/th/id/OIP.Z3_HdLdQgajIHgtP7qxS_wAAAA?pid=ImgDet&rs=1','https://www.researchgate.net/publication/331039346_Kutudaun_Hemiptera_Aphididae_pada_gulma_di_sekitar_lahan_pertanian_di_Jawa_Barat_beserta_kunci_identifikasinya','2022-09-11','2022-10-11','KT005','AD002'),('978-970-010-504-1','Manajemen Keuangan [: Berbasis Balanced Scorecard]','2019','Dr. Harmono, S.E., M.Si.','Bumi Aksara','Deskripsi Buku 3',20,'https://cdn.gramedia.com/uploads/items/9786026948953C_9786026948953.jpg','https://www.semanticscholar.org/paper/Manajemen-Keuangan-%3A-Berbasis-Balanced-Scorecard-Harmono/757c875054c69a2b314ee5c9c276a7140f1c6656','2021-08-15','2022-07-30','KT004','AD001'),('9786020323138','Kecerdasan Emosional','2009','Daniel Goliman','Gramedia Pustaka Utama','D007',50,'https://cdn.gramedia.com/uploads/items/img20220831_12081251.jpg','https://www.academia.edu/11409260/KECERDASAN_EMOSI_Emotional_Intelligences','2022-10-01','2022-10-02','KT002','AD001'),('9786022911029','Ayah','2015','Andrea Hinata','PT Bentang Pustaka','D0014',43,'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1602300563/smysuqq6ioww9pjnzzgz.jpg','https://www.google.co.id/books/edition/Ayah/tBqoCQAAQBAJ?hl=id&gbpv=1&dq=sirkus+pohon&printsec=frontcover','2022-10-01','2022-10-01','KT001','AD001'),('9786024073213','Kau Kenang Sebagai Apa Aku Nanti?','2018','Kimfricung','Laksana','D008',70,'https://cdn.gramedia.com/uploads/items/9786024073213_Kau-Kenang-Sebagai-Apa-Aku-Nanti.jpg','https://www.gramedia.com/products/kau-kenang-sebagai-apa-aku-nanti','2022-10-01','2022-10-02','KT002','AD002'),('9786025023415','Bitter Sweeet Legacy','2017','Mayang Aeni','Rdm Publishers','D0010',67,'https://cdn.gramedia.com/uploads/items/9786025023415_9786025023415_RYto0jJ.jpg','https://books.google.co.id/books?id=a6AFEAAAQBAJ&pg=PA123&hl=id&source=gbs_toc_r&cad=3#v=onepage&q&f=false','2022-10-01','2022-10-03','KT001','AD002'),('9786025164637','Fangirl Enemy','2018','Ikkina Oktari','Bukit','D009',100,'https://cdn.gramedia.com/uploads/items/FANGIRL_ENEMY.jpg','https://books.google.co.id/books?id=ObUHEAAAQBAJ&printsec=copyright&redir_esc=y#v=onepage&q&f=false','2022-10-01','2022-10-02','KT001','AD001'),('9786025734052','Pergi','2018','Tere Liye','Republika Penerbit','D0012',21,'https://s.kaskus.id/c480x480/images/fjb/2018/06/04/tmp_phpu6nf9y_9470061_1528071827.jpg','https://books.google.co.id/books?id=qwVnDwAAQBAJ&pg=PT25&hl=id&source=gbs_toc_r&cad=3#v=onepage&q&f=false','2022-10-01','2022-10-02','KT001','AD002'),('9786028811316','Cinta di Dalam Kertas','2011','Andrea Hinata','Penerbit Bentang','D0019',43,'https://books.google.co.id/books/content?id=sxT-HENyUZQC&hl=id&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U3qwBU65r-55ww-HU5Jpaz5vuy9rw&w=1025','https://www.google.co.id/books/edition/Cinta_di_Dalam_Gelas/sxT-HENyUZQC?hl=id&gbpv=1&dq=sirkus+pohon&printsec=frontcover','2022-10-01','2022-10-02','KT001','AD002'),('9789792299427','Brida','2013','Paulho Coelho','Gramedia Pustaka Utama','D0012',65,'https://cdn.gramedia.com/uploads/items/9789792299427_CU_1BRIDA.jpg','https://www.pdfdrive.com/3-brida-e49587931.html','2022-10-01','2022-10-02','KT001','AD001'),('9789793062792','Laskar Pelangi','2011','Andrea Hinata','Bintang Pustaka','D006',30,'https://assets-a2.kompasiana.com/items/album/2015/08/13/laskar-pelangi-55cc28c2507a61cb05dd8cb3.jpg?t=o&v=350','https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxhZGlmaWtyaWh1bWFpZGl8Z3g6NzBjODViNzdmOGJmZGQwMg','2022-10-02','2022-10-02','KT001','AD002'),('9789797808969','Cinta Brontosaurus','2017','Raditya Dika','Gagasmedia','D005',40,'https://th.bing.com/th/id/OIP.fAg1lRHjhHbS4sfMxwxJCgHaLZ?pid=ImgDet&rs=1','https://www.academia.edu/38509104/Cinta_Brontosaurus_pdf','2022-10-01','2022-10-01','KT001','AD002'),('9789797809157','Ubur Ubur Lembur','2017','Raditya Dika','Gagas Media','D0013',43,'https://cdn.gramedia.com/uploads/items/9789797809157_9789797809157.jpg','https://www.google.co.id/books/edition/Ubur_Ubur_Lembur/YI5GDwAAQBAJ?hl=id&gbpv=1&dq=ubur+ubur+lembur&printsec=frontcover','2022-10-01','2022-10-01','KT001','AD001'),('9789797809324','Kata : tentang senja yang kehilangan langitnya','2018','Rintik Sendu','Gagas Media','D0013',45,'https://cdn.gramedia.com/uploads/items/9789797809324_kata.jpg','https://www.google.co.id/books/edition/Kata/4S93DwAAQBAJ?hl=id&gbpv=1&dq=novel+Kata+tentang+senja+yang+kehilangan+langitnya&printsec=frontcover','2022-10-01','2022-10-02','KT001','AD002'),('9789797946579','11:11','2011','Fiersa Bersari','Kawah Media Pustaka PT','D0011',45,'https://cdn.gramedia.com/uploads/items/img20220829_17114960.jpg','https://www.academia.edu/40143167/Download_Novel_11_11_Fiersa_Besari','2022-10-01','2022-10-02','KT001','AD002'),('9797808203','Rahasia Pelangi','2015','Riawani Elyta & Shabira Ws','Gagas Media','D0017',21,'https://cdn.gramedia.com/uploads/items/rahasia-pelangi.jpg','https://www.google.co.id/books/edition/Rahasia_Pelangi/maEmCgAAQBAJ?hl=id&gbpv=1&dq=sirkus+pohon&printsec=frontcover','2022-10-01','2022-10-02','KT001','AD002');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_kembali`
--

DROP TABLE IF EXISTS `info_kembali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_kembali` (
  `id_kembali` varchar(30) NOT NULL,
  `waktu_kembali` datetime NOT NULL,
  `id` varchar(17) NOT NULL DEFAULT '',
  `id_pengguna` varchar(13) NOT NULL DEFAULT '',
  `id_pinjam` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kembali`),
  KEY `FK_info_kembali_pengguna` (`id_pengguna`),
  KEY `FK_info_kembali_buku` (`id`) USING BTREE,
  KEY `FK_info_kembali_info_pinjam` (`id_pinjam`),
  CONSTRAINT `fk_info_kembali_buku` FOREIGN KEY (`id`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_info_kembali_info_pinjam` FOREIGN KEY (`id_pinjam`) REFERENCES `info_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_info_kembali_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_kembali`
--

LOCK TABLES `info_kembali` WRITE;
/*!40000 ALTER TABLE `info_kembali` DISABLE KEYS */;
INSERT INTO `info_kembali` VALUES ('KM0001','2022-10-01 20:22:00','978-623-256-725-2','P0003','PJ0001'),('KM0002','2022-02-25 11:29:10','976-602-424-694-5','P0004','PJ0002');
/*!40000 ALTER TABLE `info_kembali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_pinjam`
--

DROP TABLE IF EXISTS `info_pinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_pinjam` (
  `id_pinjam` varchar(30) NOT NULL,
  `waktu_pinjam` date NOT NULL,
  `id` varchar(17) NOT NULL DEFAULT '',
  `id_pengguna` varchar(13) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_pinjam`),
  KEY `FK_info_pinjam_pengguna` (`id_pengguna`),
  KEY `FK_info_pinjam_buku` (`id`) USING BTREE,
  CONSTRAINT `fk_info_pinjam_buku` FOREIGN KEY (`id`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_info_pinjam_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_pinjam`
--

LOCK TABLES `info_pinjam` WRITE;
/*!40000 ALTER TABLE `info_pinjam` DISABLE KEYS */;
INSERT INTO `info_pinjam` VALUES ('PJ0001','2022-10-01','978-623-256-725-2','P0003'),('PJ0002','2022-02-09','976-602-424-694-5','P0004');
/*!40000 ALTER TABLE `info_pinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES ('KT001','Fiksi Populer'),('KT002','Pengembangan Diri'),('KT003','Agama'),('KT004','Finansial'),('KT005','Sains');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengguna` (
  `id_pengguna` varchar(13) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` enum('Perempuan','Laki-laki') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` VALUES ('P0001','Nurul Huda','Perempuan','2002-01-10','nurul@gmail.com','nurul11','2022-04-04 00:00:00'),('P0002','Muda Mudi','Laki-laki','2002-04-01','mudi@gmail.com','mudi22','2022-08-07 00:00:00'),('P0003','Mario Indra','Laki-laki','2002-03-10','mario@gmail.com','mario23','2022-07-05 00:00:00'),('P0004','Anastasia','Perempuan','1999-05-03','anas@gmail.com','anas44','2022-02-02 00:00:00'),('P0005','Nanat','Perempuan','1998-01-14','nat@gmail.com','nano99','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-18 11:02:22
