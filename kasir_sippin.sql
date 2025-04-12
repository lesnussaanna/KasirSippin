-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 05:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_sippin`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertUser` (IN `id_user` INT(11), IN `username` VARCHAR(10), IN `password` VARCHAR(100), IN `nama_user` VARCHAR(100), IN `no_hp` VARCHAR(20), IN `alamat` TEXT, IN `jenis_kelamin` VARCHAR(20), IN `email` VARCHAR(100), IN `level` INT(1))  BEGIN
INSERT INTO user VALUES(id_user, username, password, nama_user, no_hp, alamat, jenis_kelamin, email, level);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlahUser` (OUT `jumlah` INT(5))  BEGIN
SELECT COUNT(id_user)
INTO jumlah FROM user;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_5000`
-- (See below for the actual view)
--
CREATE TABLE `harga_5000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_8000`
-- (See below for the actual view)
--
CREATE TABLE `harga_8000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_10000`
-- (See below for the actual view)
--
CREATE TABLE `harga_10000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_12000`
-- (See below for the actual view)
--
CREATE TABLE `harga_12000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_13000`
-- (See below for the actual view)
--
CREATE TABLE `harga_13000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_15000`
-- (See below for the actual view)
--
CREATE TABLE `harga_15000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_16000`
-- (See below for the actual view)
--
CREATE TABLE `harga_16000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `harga_18000`
-- (See below for the actual view)
--
CREATE TABLE `harga_18000` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(12) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `gambar_jenis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `gambar_jenis`) VALUES
(1, 'YAKULT', 'yakult.jpeg'),
(2, 'RED VELVET', 'redvelvet.jpg'),
(3, 'COFFEE', 'coffee.jpg'),
(4, 'BROWN SUGAR', 'brownsugar.jpg'),
(5, 'CHOCOLATE', 'chocolate.jpg'),
(6, 'TARO', 'taro.jpg'),
(7, 'GREEN TEA', 'greentea.jpg'),
(8, 'HOJICHA', 'hojicha.jpg'),
(9, 'THAI TEA', 'thaitea.jpg'),
(10, 'KITKAT', 'kitkat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(12) NOT NULL,
  `nama_karyawan` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `email`, `profesi`, `status`, `alamat`, `no_hp`, `gambar`) VALUES
(1, 'Katherin Anna Patherisia Lesnussa', 'kettykhaterine@gmail.com', 'Admin', 'Bekerja', 'Jalan Simalungun No 1', '081906354773', 'katherin78.jpeg'),
(2, 'Sriwahyuni', 'sri45@gmail.com', 'Kasir', 'Bekerja', 'Jalan Bunga Teratai No 456', '082234567812', 'yuni45.jpg'),
(3, 'Tritia Mutiara', 'tiara48@gmail.com', 'Bartender', 'Bekerja', 'Jalan Mayang no 450', '089746352251', 'tiara15.jpg'),
(4, 'Nanda Amelia', 'nanda15@gmail.com', 'Bartender', 'Cuti', 'Jalan Kenangan no 456', '087868584833', 'nanda48.jpg'),
(5, 'Jogianan Simangungsong', 'jogi@gmail.com', 'Kasir', 'Bekerja', 'Jlan tanha abang', '08786950458', 'jogiana.jpg'),
(6, 'Tara Dea', 'dea@gmail.com', 'Kasir', 'Keluar', 'Jalan Pelangi', '0895674535', ''),
(7, 'Elsa Jasmin', 'elsa@gmail.com', 'Bartender', 'Keluar', 'Jalan Nasution', '08996535786', '');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kerja` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kasir` varchar(250) NOT NULL,
  `bartender` text NOT NULL,
  `tanggal` date NOT NULL,
  `total_penjualan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kerja`, `id_user`, `nama_kasir`, `bartender`, `tanggal`, `total_penjualan`) VALUES
(1, 2, 'Sriwahyuni', 'Tritia Mutiara', '2021-05-11', 500000),
(2, 2, 'Sriwahyuni', 'Nanda Amelia', '2021-06-22', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(12) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `jenis_minuman` varchar(100) NOT NULL,
  `stock_minuman` varchar(10) NOT NULL,
  `gambar_minuman` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `nama_minuman`, `jenis_minuman`, `stock_minuman`, `gambar_minuman`) VALUES
(1, 'GREEN TEA LATTE', 'GREEN TEA', '110', 'greentealatte.jpg'),
(2, 'GREEN TEA COOKIES CREAM', 'GREEN TEA', '100', 'greenteacookiescream.jpg'),
(3, 'GREEN TEA CHEESE', 'GREEN TEA', '100', 'greenteacheese.jpg'),
(4, 'GREEN TEA RED BEAN', 'GREEN TEA', '100', 'greentearedbean.jpg'),
(5, 'GREEN TEA PRESSO', 'GREEN TEA', '100', 'greenteapresso.jpg'),
(6, 'THAI TEA', 'THAI TEA', '100', 'thaitea.jpg'),
(7, 'THAI TEA COOKIES CREAM', 'THAI TEA', '100', 'thaiteacookiescream.jpg'),
(8, 'THAI TEA CHOCO LAVA', 'THAI TEA', '100', 'thaiteachocolava.jpg'),
(9, 'THAI TEA CHEESE', 'THAI TEA', '100', 'thaiteacheese.jpg'),
(10, 'THAI TEA BERRYCHEESE', 'THAI TEA', '50', 'thaiteaberrycheese.jpg'),
(11, 'SIGNATURE CHOCOLATE', 'CHOCOLATE', '50', 'signaturechocolate.jpg'),
(12, 'CHOCOLATE LAVA MILO', 'CHOCOLATE', '100', 'chocolavamilo.jpg'),
(13, 'HAZELNUT CHOCOLATE', 'CHOCOLATE', '50', 'hazelnutchocolate.jpg'),
(14, 'CARAMEL CHOCOLATE', 'CHOCOLATE', '50', 'caramelchocolate.jpg'),
(15, 'CHOCO CHEESE', 'CHOCOLATE', '50', 'chococheese.jpg'),
(16, 'TARO LATTE', 'TARO', '100', 'tarolatte.jpg'),
(17, 'TARO COOKIES CREAM', 'TARO', '50', 'tarocookiescream.jpg'),
(18, 'TARO CHEESE', 'TARO', '50', 'tarocheese.jpg'),
(19, 'TARO RED BEAN', 'TARO', '50', 'taroredbean.jpg'),
(20, 'RED VELVET', 'RED VELVET', '50', 'redvelvet.jpg'),
(21, 'RED VELVET COOKIES CREAM', 'RED VELVET', '100', 'redvelvetcookiescream.jpg'),
(22, 'RED VELVET CHEESE', 'RED VELVET', '50', 'redvelvetcheese.jpg'),
(23, 'CHOCO VELVET', 'RED VELVET', '50', 'chocovelvet.jpg'),
(24, 'MANGGO JELLY YAKULT', 'YAKULT', '100', 'manggojellyyakult.jpg'),
(25, 'PINEAPPLE JELLY YAKULT', 'YAKULT', '100', 'pineapplejellyyakult.jpg'),
(26, 'PASSION JELLY YAKULT', 'YAKULT', '50', 'passionjellyyakult.jpg'),
(27, 'ORANGE LEMON JELLY YAKULT', 'YAKULT', '50', 'orangelemonjellyyakult.jpg'),
(28, 'BLUE LIME JELLY YAKULT', 'YAKULT', '50', 'bluelimejellyyakult.jpg'),
(29, 'DRAGON CREAMY YAKULT', 'YAKULT', '50', 'dragoncreamyyakult.jpg'),
(30, 'AMERICANO', 'COFFEE', '50', 'americano.jpg'),
(31, 'COFFEE LATTE', 'COFFEE', '100', 'coffelatte.jpg'),
(32, 'COFFEE BROWN SUGAR', 'COFFEE', '48', 'coffeebrownsugar.jpg'),
(33, 'COFFEE PANDAN', 'COFFEE', '50', 'coffeepandan.jpg'),
(34, 'COFFEE RUM REGAL', 'COFFEE', '50', 'cofferumregal.jpg'),
(35, 'COFFEE CHEESE BRULEE', 'COFFEE', '50', 'coffeecheesebrulee.jpg'),
(36, 'HOJICHA LATTE', 'HOJICHA', '50', 'hojichalatte.jpg'),
(37, 'BROWN SUGAR HOJICHA', 'HOJICHA', '46', 'brownsugarhojicha.jpg'),
(38, 'CARAMEL HOJICHA', 'HOJICHA', '50', 'caramelhojicha.jpg'),
(39, 'BERRY HOJICHA', 'HOJICHA', '50', 'berryhojicha.jpg'),
(40, 'MOODCHA KITKAT', 'KITKAT', '50', 'moodchakitkat.jpg'),
(41, 'CHEESY MILK BOBA KITKAT', 'KITKAT', '50', 'cheesymilkbobakitkat.jpg'),
(42, 'CHOCO COTTON CANDY KITKAT', 'KITKAT', '50', 'chococottoncandykitkat.jpg'),
(43, 'CLASSY CRUNCY CHOCO KITKAT', 'KITKAT', '50', 'classycruncychocokitkat.jpg'),
(44, 'BROWN SUGAR BUBBLE FRESH MILK', 'BROWN SUGAR', '50', 'brownsugarfreshmilk.jpg'),
(45, 'BROWN SUGAR BUBBLE MILK TEA', 'BROWN SUGAR', '50', 'brownsugarbubblemilktea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `nama_pelanggan` varchar(250) NOT NULL,
  `jumlah_minuman` int(10) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `tanggal_pesanan` varchar(25) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `username`, `nama_pelanggan`, `jumlah_minuman`, `total_bayar`, `tanggal_pesanan`, `waktu`) VALUES
(1, 2, 'sriwahyuni', 'Bunga', 4, 60000, '22-06-2021', '06:33:53'),
(2, 2, 'sriwahyuni', 'Aditya', 2, 30000, '22-06-2021', '06:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_minuman`
--

CREATE TABLE `pesanan_minuman` (
  `no_pesanan_minuman` int(12) NOT NULL,
  `id_pesanan` int(12) NOT NULL,
  `id_minuman` int(12) NOT NULL,
  `nama_minuman` varchar(250) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `ukuran_minuman` varchar(2) NOT NULL,
  `harga_minuman` int(10) NOT NULL,
  `sub_bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_minuman`
--

INSERT INTO `pesanan_minuman` (`no_pesanan_minuman`, `id_pesanan`, `id_minuman`, `nama_minuman`, `jumlah`, `ukuran_minuman`, `harga_minuman`, `sub_bayar`) VALUES
(1, 1, 32, 'COFFEE BROWN SUGAR', 2, 'M', 15000, 30000),
(2, 1, 37, 'BROWN SUGAR HOJICHA', 2, 'M', 15000, 30000),
(3, 2, 37, 'BROWN SUGAR HOJICHA', 2, 'M', 15000, 30000);

--
-- Triggers `pesanan_minuman`
--
DELIMITER $$
CREATE TRIGGER `minuman_after_jual` AFTER INSERT ON `pesanan_minuman` FOR EACH ROW BEGIN UPDATE minuman SET stock_minuman = stock_minuman - NEW.jumlah WHERE id_minuman = NEW.id_minuman; END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_topping`
--

CREATE TABLE `pesanan_topping` (
  `id_pesanan_topping` int(12) NOT NULL,
  `no_pesanan` int(12) NOT NULL,
  `id_topping` int(12) NOT NULL,
  `nama_topping` varchar(100) NOT NULL,
  `harga_topping` int(10) NOT NULL,
  `jumlah_topping` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_topping`
--

INSERT INTO `pesanan_topping` (`id_pesanan_topping`, `no_pesanan`, `id_topping`, `nama_topping`, `harga_topping`, `jumlah_topping`) VALUES
(1, 1, 4, 'PUDDING', 6000, 2),
(2, 1, 2, 'GRASS JELLY', 3000, 1);

--
-- Triggers `pesanan_topping`
--
DELIMITER $$
CREATE TRIGGER `topping_after_jual` AFTER INSERT ON `pesanan_topping` FOR EACH ROW BEGIN UPDATE topping SET stock_topping = stock_topping - NEW.jumlah_topping WHERE id_topping = NEW.id_topping; END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `topping`
--

CREATE TABLE `topping` (
  `id_topping` int(11) NOT NULL,
  `nama_topping` varchar(100) NOT NULL,
  `harga_topping` int(11) NOT NULL,
  `stock_topping` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topping`
--

INSERT INTO `topping` (`id_topping`, `nama_topping`, `harga_topping`, `stock_topping`) VALUES
(1, 'BUBBLE', 3000, 70),
(2, 'GRASS JELLY', 3000, 99),
(3, 'RAINBOW JELLY', 3000, 100),
(4, 'PUDDING', 3000, 98),
(5, 'RED BEAN', 5000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE `ukuran` (
  `id_ukuran` int(12) NOT NULL,
  `id_minuman` int(12) NOT NULL,
  `ukuran` varchar(2) NOT NULL,
  `harga_minuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `id_minuman`, `ukuran`, `harga_minuman`) VALUES
(1, 1, 'M', 8000),
(2, 1, 'L', 10000),
(3, 2, 'M', 10000),
(4, 2, 'L', 13000),
(5, 3, 'M', 13000),
(6, 3, 'L', 15000),
(7, 4, 'M', 13000),
(8, 4, 'L', 15000),
(9, 5, 'M', 15000),
(10, 5, 'L', 16000),
(11, 6, 'M', 5000),
(12, 6, 'L', 8000),
(13, 7, 'M', 10000),
(14, 7, 'L', 13000),
(15, 8, 'M', 10000),
(16, 8, 'L', 13000),
(17, 9, 'M', 13000),
(18, 9, 'L', 15000),
(19, 10, 'M', 13000),
(20, 10, 'L', 15000),
(21, 11, 'M', 8000),
(22, 11, 'L', 10000),
(23, 12, 'M', 10000),
(24, 12, 'L', 13000),
(25, 13, 'M', 13000),
(26, 13, 'L', 15000),
(27, 14, 'M', 13000),
(28, 14, 'L', 15000),
(29, 15, 'M', 13000),
(30, 15, 'L', 15000),
(31, 16, 'M', 8000),
(32, 16, 'L', 10000),
(33, 17, 'M', 10000),
(34, 17, 'L', 13000),
(35, 18, 'M', 13000),
(36, 18, 'L', 15000),
(37, 19, 'M', 13000),
(38, 19, 'L', 15000),
(39, 20, 'M', 8000),
(40, 20, 'L', 10000),
(41, 21, 'M', 10000),
(42, 21, 'L', 12000),
(43, 22, 'M', 13000),
(44, 22, 'L', 15000),
(45, 23, 'M', 13000),
(46, 23, 'L', 15000),
(47, 24, 'M', 12000),
(48, 25, 'M', 12000),
(49, 26, 'M', 12000),
(50, 27, 'M', 12000),
(51, 28, 'M', 12000),
(52, 29, 'M', 12000),
(53, 30, 'M', 5000),
(54, 31, 'M', 10000),
(55, 32, 'M', 15000),
(56, 33, 'M', 15000),
(57, 34, 'M', 15000),
(58, 35, 'M', 15000),
(59, 36, 'M', 13000),
(60, 37, 'M', 15000),
(61, 38, 'M', 18000),
(62, 39, 'M', 18000),
(63, 40, 'M', 18000),
(64, 41, 'M', 18000),
(65, 42, 'M', 16000),
(66, 43, 'M', 16000),
(67, 44, 'M', 15000),
(68, 44, 'L', 18000),
(69, 45, 'M', 15000),
(70, 45, 'L', 18000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ukuran_l`
-- (See below for the actual view)
--
CREATE TABLE `ukuran_l` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ukuran_m`
-- (See below for the actual view)
--
CREATE TABLE `ukuran_m` (
`id_ukuran` int(12)
,`id_minuman` int(12)
,`ukuran` varchar(2)
,`harga_minuman` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `no_hp`, `alamat`, `jenis_kelamin`, `email`, `level`) VALUES
(1, 'katherin', 'annapatherisia', 'Katherin Anna Patherisia Lesnussa', '081906354663', 'Jalan Simalungun no 1', 'Perempuan', 'lesnussa45@gmail.com', 1),
(2, 'sriwahyuni', 'yuni25', 'Sriwahyuni', '08234665734', 'Jalan Bunga', 'Perempuan', 'yuni@gmail.com', 2),
(3, 'Tiara', 'disiniaja', 'Tritia Mutiara', '085358210077', 'Stabat', 'Perempuan', 'mutiaratritia06@gmail.com', 3);

-- --------------------------------------------------------

--
-- Structure for view `harga_5000`
--
DROP TABLE IF EXISTS `harga_5000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_5000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '5000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_8000`
--
DROP TABLE IF EXISTS `harga_8000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_8000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '8000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_10000`
--
DROP TABLE IF EXISTS `harga_10000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_10000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '10000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_12000`
--
DROP TABLE IF EXISTS `harga_12000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_12000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '12000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_13000`
--
DROP TABLE IF EXISTS `harga_13000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_13000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '13000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_15000`
--
DROP TABLE IF EXISTS `harga_15000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_15000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '15000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_16000`
--
DROP TABLE IF EXISTS `harga_16000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_16000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '16000' ;

-- --------------------------------------------------------

--
-- Structure for view `harga_18000`
--
DROP TABLE IF EXISTS `harga_18000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `harga_18000`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`harga_minuman` = '18000' ;

-- --------------------------------------------------------

--
-- Structure for view `ukuran_l`
--
DROP TABLE IF EXISTS `ukuran_l`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ukuran_l`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`ukuran` = 'L' ;

-- --------------------------------------------------------

--
-- Structure for view `ukuran_m`
--
DROP TABLE IF EXISTS `ukuran_m`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ukuran_m`  AS  select `ukuran`.`id_ukuran` AS `id_ukuran`,`ukuran`.`id_minuman` AS `id_minuman`,`ukuran`.`ukuran` AS `ukuran`,`ukuran`.`harga_minuman` AS `harga_minuman` from `ukuran` where `ukuran`.`ukuran` = 'M' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kerja`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesanan_minuman`
--
ALTER TABLE `pesanan_minuman`
  ADD PRIMARY KEY (`no_pesanan_minuman`);

--
-- Indexes for table `pesanan_topping`
--
ALTER TABLE `pesanan_topping`
  ADD PRIMARY KEY (`id_pesanan_topping`);

--
-- Indexes for table `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id_topping`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_ukuran`),
  ADD KEY `id_minuman` (`id_minuman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan_minuman`
--
ALTER TABLE `pesanan_minuman`
  MODIFY `no_pesanan_minuman` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan_topping`
--
ALTER TABLE `pesanan_topping`
  MODIFY `id_pesanan_topping` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topping`
--
ALTER TABLE `topping`
  MODIFY `id_topping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `id_ukuran` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD CONSTRAINT `ukuran_ibfk_1` FOREIGN KEY (`id_minuman`) REFERENCES `minuman` (`id_minuman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
