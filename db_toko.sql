/*
SQLyog Community v12.4.3 (32 bit)
MySQL - 10.1.19-MariaDB : Database - db_toko
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_toko` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_toko`;

/*Table structure for table `tbl_detail_order` */

DROP TABLE IF EXISTS `tbl_detail_order`;

CREATE TABLE `tbl_detail_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detail_order` */

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`id`,`nama_kategori`) values 
(1,'Laptop'),
(2,'Smartphone'),
(3,'Aksesoris');

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order` */

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelanggan` */

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`id_produk`,`nama_produk`,`deskripsi`,`harga`,`gambar`,`kategori`) values 
(1,'MacBook Air','Apple Macbook Air hadir dengan slogan wujudkan banyak hal mengagumkan sepanjang hari, MacBook Air memiliki daya baterai hingga 12 jam dari sekali pengisian. Ini memberi laptop daya sepanjang hari untuk menjelajah di dunia maya atau menonton film iTunes. Biarkan MacBook Air tidur selama lebih dari 3 jam, dan ia akan memasuki mode siaga untuk menjaga kekuatan baterai hingga 30 hari. MacBook Air didukung oleh prosesor Intel Core i5 generasi, arsitektur yang ultra efisien ini didesain memakai lebih sedikit daya dan tetap menghasilkan performa tinggi. Desain Macbook Air sangatlah elegan dengan body tipis berbahan kualitas premium dan sangat ringan tapi tetap bertenaga sehingga nyaman untuk dibawah kemana saja. MacBook Air memberikan resolusi 1440 x 900 piksel pada layar yang hanya setebal 4,86 mm. Dan lampu latar LED menghadirkan warna yang cerah ke tiap sudut. Jadi, baik saat mengedit foto, menyempurnakan presentasi, maupun menonton film, Anda akan menyukai apa yang Anda lihat.','5000000','laptop1.png',1),
(2,'MacBook 2R10','New MacBook tidak hanya lebih ringan dan tipis, namun juga lebih baik. Papan ketik berukuran normal dalam ruang minimal hadir pada New MacBook. Trackpad Force Touch dirancang untuk menghadirkan klik yang responsif dan seragam. Saat Anda membuka MacBook baru, layar Retina 12 inci dengan kaca hingga ke ujung menampilkan segalanya menjadi lebih fokus. Lebih dari 3 juta piksel merender tiap huruf menjadi sejernih kristal. MacBook baru didesain untuk mengurangi penggunaan kabel. Hampir segala hal bisa dilakukan lewat udara, berkat perangkat lunak Apple yang memanfaatkan teknologi nirkabel WiFi dan Bluetooth terbaru. Selain itu port USB-C baru menyediakan semua kebutuhan Anda di satu tempat. Port luar biasa ini tersedia untuk mengisi daya, transfer data USB 3 yang kencang, dan output video dalam desain kecil yang dapat dibalik serta berukuran sepertiga dari port USB masa kini. MacBook baru telah dirancang secara keseluruhan agar tidak bersuara dan memiliki performa yang efisien.','4250000','laptop2.png',1),
(3,'Asus MR2051','Asus ini adalah laptop untuk beragam kebutuhan, baik kerja maupun bermain. Dibeklai prosesor Intel, menjadikan Asus X455 Series sebagai notebook gaya yang dirancang untuk mereka yang ingin tampil beda. Asus menempatkan kualitas suara terbaik dari Asus Sonic Master pada perangkat ini dapatkan juga pengalaman bekerja instan dengan fitur instant on yang menyiapkan sistem dalam 2 detik dari moda tidur. Sementara USB 3.0 menyediakan transfer data super cepat.Asus X455 Series menghadirkan semua kebutuhan komputasi dengan desain dan kualitas terbaik serta kesan yang mewah. Dengan beragam model dan pilihan warna, notebook Asus X455 Series membebaskan Anda untuk mengekspresikan gaya pribadi.Perangkat ini dilengkapi dengan grafis Nvidia GeForce untuk menghadirkan tampilan visual memukau untuk menyunting foto dan video atau menjalankan game terbaru. Bukan sekedar tampilan, Asus X455 Series menyediakan semua fitur dan port yang Anda butuhkan untuk komputasi harian.','3450000','laptop3.png',1),
(4,'Samsung Note 8','Seri berkelas Galaxy Note 8 hadir dibalut bahan alumunium pilihan dengan ukuran yang cukup besar 162.5 x 74.8 x 8.6mm dan berat 195 gram.\r\n\r\nKurang nyaman untuk dimasukkan ke dalam kantong.Sebagai jaminan tampilan, Galaxy Note 8 memiliki layar AMOLED 6,3 inci, rasio 18:9 danj resolusi 1440 x 2960 piksel.\r\n\r\nLayar hape tersebut juga telah dilengkapi pelindung Gorilla Glass 5 agar tidak pecah dan tidak mudah tergores.Menjadi salah satu flagship Samsung, Galaxy Note 8 mengusung Android Nougat 7.1 yang akan diupgrade menjadi Oreo 8.0.\r\n\r\nSementara untuk mempercepat kinerja, perangkat tersebut telah dilengkapi RAM 6GB yang dipasangkan dengan SoC Exynos 8895 Octa-core 2.3 Ghz dan 1.7 Ghz untuk produk yang tersebar selain di negara Amerika dan Tiongkok.','7500000','hp1.png',2),
(5,'Samsung A5','Samsung Galaxy A5 (2017) merupakan smartphone berkategori kelas menengah (mid-range) yang memiiki desain bodi elegan dan berkelas yang hampir menyerupai Samsung Galaxy S7. Selain itu, untuk mejalankan perangkat ini, samsung menyematkan beberapa hardware unggulan seperti CPU Exynos 7880, RAM dan penyimpanan internal berkapasitas besar, kamera beresolusi tinggi, layar Super AMOLED dan dukungan teknologi berbasi 4G berkecepatan hingga 300 mbps serta beberapa spesifikasi unggulan lainnya.','3490000','hp2.png',2),
(6,'LG G6','LG G6 dibekali prosesor Snapdragon 821, RAM 4 GB, media internal 64 GB, dan baterai 3.300 mAh. Seperti G5, kamera belakang G6 terdiri dari dua unit dengan lensa terpisah. Satu kamera menangkap foto dengan sudut pandang normal, sementara lainnya wide-angle selebar 125 derajat. Kedua kamera belakang ini sama-sama memiliki resolusi 12 megapiksel. Adapun kamera depan datang dengan resolusi 5 megapiksel. Layar LG G6 berukuran 5,7 inci dengan aspect ratio 18:9 (2880x1440 piksel), namun ukuran bodinya diklaim sama dengan smartphone lain yang memiliki layar 5,2 inci. Kemampuan lain termasuk fitur waterproof dengan sertifikasi IP68 dan audio dengan teknologi quad-DAC\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"LG G6 Resmi di Indonesia, Android dengan Kamera Ganda dan Anti-air\", https://tekno.kompas.com/read/2017/04/20/14300067/lg.g6.resmi.di.indonesia.android.dengan.kamera.ganda.dan.anti-air. \r\nPenulis : Oik Yusuf','3600000','hp3.png',2),
(7,'Headphone JBL','Headphone JBL T450BT Wireless On-Ear membiarkan Anda menikmati hingga 11 jam dari JBL Pure suara Bass sementara juga membiarkan Anda mengontrol musik dan panggilan berkat tombol yang ditempatkan pada earcup. Headphone JBL T450BT memiliki sepasang driver 32mm yang membantu memberikan berdebar bass yang mereproduksi JBL suara Murni Bass yang berpengalaman dalam tempat musik yang lebih besar. Menampilkan Bluetooth 4.0, Headphone JBL T450BT mengambil kebutuhan untuk kabel merepotkan dan memungkinkan Anda mendengarkan denyut favorit Anda dari bluetooth perangkat yang kompatibel diaktifkan. Anda dapat terkoneksi dengan perangkat music Anda dengan jarak maksimal 10 meter. Dengan demikian, Anda dapat tetap beraktivitas sambil mendengarkan music favorit Anda.','200000','aksesoris1.png',3),
(8,'Mouse Logitech','Koneksi wireless yang kuat dan konsisten dengan jarak hingga 10 meter (32 kaki). Nyaris tanpa jeda atau terputus-putus, Anda dapat bekerja dan bermain dengan penuh percaya diri.\r\n\r\n \r\n\r\nDiuji hingga 10 meter, jangkauan wireless dapat berbeda tergantung kondisi dan lingkungan komputasi Anda.Dapat digunakan hingga setahun antara pergantian baterai. Untuk memperpanjang daya tahan baterai, gunakan tombol On/Off untuk mematikan perangkat saat sedang tidak digunakan.\r\n\r\nPengalaman daya tahan baterai dapat berbeda tergantung kondisi komputasi dan pola penggunaan mouse.','525000','aksesoris2.png',3),
(9,'Keyboard NYK','Keyboard Gaming NYK TKL K-01 dengan 5 mode lampu RGB + Bonus Keycaps (nuts) dan pinset\r\nHarga Murah kualitas Mantap.\r\nGaransi resmi.\r\n \r\nmemiliki nuts ultra durable dan perfect keys dan adanya bonus 8 keycaps warna orange sebagai pengganti + pinset (pencabut keycaps), material bahan keyboard yang menggunakan plat besi, kabel yang sudah braided.\r\nTidak hanya itu NYK membuat keyboard ini juga bisa 3 x mode ganti warna lampu dan 2 mode LED diantara lain ( breathing, static ) serta juga bisa mengatur mode penerangan untuk mengatur LEDnya.','1580000','aksesoris3.png',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
