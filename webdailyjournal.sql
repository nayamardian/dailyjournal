-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 08:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Mengenal Kearifan Lokal di Jawa Tengah', 'Penduduk Jawa Tengah memiliki banyak tradisi yang kaya akan nilai budaya. Salah satu yang menarik adalah tarian Gambyong. Tarian ini awalnya merupakan tarian rakyat yang kemudian diangkat menjadi tarian istana oleh Sultan Hamengkubuwono VII. Tarian ini menggambarkan keluwesan dan keindahan gerak tubuh perempuan Jawa.', 'gambyong.jpg', '2024-12-04', 'admin'),
(2, 'Teknologi Ramah Lingkungan yang Sedang Tren', 'Dari panel surya hingga kendaraan listrik, teknologi ramah lingkungan semakin populer di kalangan masyarakat modern. Penggunaan teknologi ini membantu mengurangi jejak karbon dan mempromosikan keberlanjutan. Panel surya, misalnya, mampu menghasilkan energi bersih dan mengurangi ketergantungan pada bahan bakar fosil.', 'panel.jpg', '2024-12-04', 'admin'),
(3, 'Mengapa Olahraga Penting untuk Kesehatan Mental?', 'Berolahraga tidak hanya baik untuk tubuh, tetapi juga membantu mengurangi stres dan meningkatkan mood. Studi menunjukkan bahwa aktivitas fisik dapat melepaskan endorfin, zat kimia di otak yang bertindak sebagai pereda nyeri alami dan meningkatkan perasaan bahagia.', 'olahraga.jpg', '2024-12-04', 'admin'),
(4, 'Wisata Kuliner di Semarang: Dari Lumpia hingga Wingko Babat', 'Semarang memiliki ragam kuliner yang lezat dan unik. Lumpia Semarang, misalnya, terkenal dengan isian rebungnya yang gurih. Sementara Wingko Babat adalah kue tradisional yang terbuat dari kelapa parut dan ketan, memberikan rasa manis dan tekstur kenyal yang memikat.', 'lumpia.jpg', '2024-12-04', 'admin'),
(5, 'Tips Efektif dalam Manajemen Waktu untuk Pelajar', 'Manajemen waktu adalah kunci keberhasilan dalam pendidikan. Buatlah jadwal harian yang jelas, prioritaskan tugas berdasarkan urgensi, dan jangan lupa memberikan waktu istirahat yang cukup. Penggunaan aplikasi manajemen waktu juga bisa sangat membantu.', 'siswa.jpg', '2024-12-04', 'admin'),
(6, 'Peran Penting Wanita dalam Teknologi di Indonesia', 'Banyak wanita Indonesia yang berperan besar dalam kemajuan teknologi. Misalnya, tokoh seperti Ainun Najib, yang telah menciptakan berbagai inovasi dalam bidang teknologi informasi. Para wanita ini tidak hanya memberikan kontribusi signifikan, tetapi juga menginspirasi generasi muda untuk mengejar karir di bidang STEM (Science, Technology, Engineering, and Mathematics).', 'woman.jpg', '2024-12-04', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `tanggal`, `username`) VALUES
(1, 'gambyong.jpg', '2024-12-12', 'admin'),
(2, 'panel.jpg', '2024-12-12', 'admin'),
(3, 'olahraga.jpg', '2024-12-12', 'admin'),
(4, 'lumpia.jpg', '2024-12-12', 'admin'),
(5, 'siswa.jpg', '2024-12-12', 'admin'),
(6, 'woman.jpg', '2024-12-12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'Nayya', '5650cbd85bcc86a4eca8276b38137d98', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
