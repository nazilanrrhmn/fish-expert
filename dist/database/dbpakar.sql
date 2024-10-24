-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 05.54
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapdiagnosa`
--

CREATE TABLE `lapdiagnosa` (
  `id` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_konsul` date NOT NULL,
  `gejala` text NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `kepercayaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapdiagnosa`
--

INSERT INTO `lapdiagnosa` (`id`, `nama`, `alamat`, `tgl_konsul`, `gejala`, `penyakit`, `kepercayaan`) VALUES
(1, 'Mas Kepin', 'Ketinggring Mansion', '2023-07-21', 'Bintik Kemerahan, Penurunan nafsu makan., Luka borok pada tubuh', 'Aeromonas', '48'),
(2, 'Haris Dwi', 'Kaliwiro', '2023-07-21', 'Bintik Kemerahan, Penurunan nafsu makan., Luka borok pada tubuh, Pendarahan di Punggung', 'Aeromonas', '89.6'),
(3, 'Aldi', 'Selomerto', '2023-07-22', 'Bintik Kemerahan, Menggosokan tubuh pada benda keras, Penurunan nafsu makan., Kulit terlihat bengkak', 'Gatal (Trichodina sp.)', '44.44'),
(4, 'Nazil', 'Kalibeber', '2023-07-22', 'Menggosokan tubuh pada benda keras, Tubuh tampak Kurus, Penurunan nafsu makan., Luka borok pada tubuh, Tutup Insang, Sirip dan pada tubuh yang luka ditumbuhi benang', 'Kutu (Argulosis),Gatal (Trichodina sp.)', '56.4'),
(5, 'Mas Kepin', 'Ketinggring Mansion', '2023-07-22', 'Bintik Kemerahan, Sirip ekor tampak rontok, Penurunan nafsu makan., Luka borok pada tubuh, Pendarahan di Punggung, Pendarahan pada insang, Sisik tampak kusam', 'Aeromonas', '98.5'),
(6, 'Ma\'ruf', 'Kebondalem', '2023-07-22', 'Penurunan nafsu makan., Pendarahan pada insang, Bola mata yang menonjol', 'Koi Herpes Virus (KHV)', '90'),
(7, 'Haris Dwi', 'Kaliwiro', '2023-07-22', 'Penurunan nafsu makan., Benjolan Pada Insang', 'Bengkak Insang', '80'),
(8, 'Aldi', 'Selomerto', '2023-07-22', 'Penurunan nafsu makan., Luka borok pada tubuh, Tutup Insang, Sirip dan pada tubuh yang luka ditumbuhi benang', 'Jamur (Saprolegniasis)', '90'),
(9, 'Harianto', 'Wonosobo', '2023-07-22', 'Menggosokan tubuh pada benda keras, Penurunan nafsu makan., Luka borok pada tubuh, Tutup Insang, Sirip dan pada tubuh yang luka ditumbuhi benang', 'Jamur (Saprolegniasis)', '66.18'),
(10, 'Harianto', 'Wonosobo', '2023-07-22', 'Bintik Kemerahan, Sirip ekor tampak rontok, Penurunan nafsu makan., Luka borok pada tubuh, Pendarahan pada insang, Sisik tampak kusam', 'Aeromonas', '92.5'),
(11, 'Harianto', 'Wonosobo', '2023-07-22', 'Bintik Kemerahan, Menggosokan tubuh pada benda keras, Tubuh tampak Kurus, Sirip ekor tampak rontok, Penurunan nafsu makan.', 'Kutu (Argulosis)', '87.3'),
(12, 'Harianto', 'Wonosobo', '2023-07-22', 'Menggosokan tubuh pada benda keras, Tubuh tampak Kurus, Penurunan nafsu makan., Kulit terlihat bengkak', 'Gatal (Trichodina sp.)', '80'),
(13, 'Harianto', 'Wonosobo', '2023-07-22', 'Penurunan nafsu makan., Pendarahan pada insang, Bola mata yang menonjol', 'Koi Herpes Virus (KHV)', '90'),
(14, 'Harianto', 'Wonosobo', '2023-07-22', 'Penurunan nafsu makan., Luka borok pada tubuh', 'Aeromonas,Jamur (Saprolegniasis)', '60'),
(15, 'Nazil', 'Kalibeber', '2023-07-22', 'Menggosokan tubuh pada benda keras, Tubuh tampak Kurus, Kulit terlihat bengkak', 'Gatal (Trichodina sp.)', '80'),
(16, 'Harianto', 'Wonosobo, Jawa Tengah, Indonesia', '2023-07-21', 'Bintik Kemerahan, Penurunan nafsu makan., Luka borok pada tubuh, Pendarahan di Punggung', 'Aeromonas', '89.6'),
(18, 'Harianto', 'Wonosobo', '2023-10-16', 'Bintik Kemerahan, Penurunan nafsu makan., Luka borok pada tubuh, Pendarahan di Punggung', 'Aeromonas', '89.6'),
(19, 'Harianto', 'Wonosobo', '2023-10-16', 'Bintik Kemerahan, Pendarahan di Punggung', 'Aeromonas', '80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(1, 'G1', 'Bintik Kemerahan'),
(2, 'G2', 'Menggosokan tubuh pada benda keras'),
(3, 'G3', 'Tubuh tampak Kurus'),
(4, 'G4', 'Sirip ekor tampak rontok'),
(5, 'G5', 'Penurunan nafsu makan.'),
(6, 'G6', 'Luka borok pada tubuh'),
(7, 'G7', 'Pendarahan di Punggung'),
(8, 'G8', 'Benjolan Pada Insang'),
(9, 'G9', 'Pendarahan pada insang'),
(10, 'G10', 'Tutup Insang, Sirip dan pada tubuh yang luka ditumbuhi benang'),
(11, 'G11', 'Sisik tampak kusam'),
(22, 'G12', 'Kulit terlihat bengkak'),
(23, 'G13', 'Bola mata yang menonjol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text NOT NULL,
  `pencegahan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`, `definisi`, `solusi`, `pencegahan`, `gambar`) VALUES
(1, 'P1', 'Kutu (Argulosis)', 'Argulosis merupakan penyakit kutu ikan yang disebabkan oleh genus Argulus. Argulus sp. memiliki bentuk tubuh pipih bundar dengan ukuran diameter betina 6 - 6,5 mm dan diameter jantan 2 - 3 mm.', 'Disarankan untuk memberikan pengobatan menggunakan zat kimia seperti Abate atau Kutublas.', 'Disarankan untuk melakukan karantina terlebih dahulu terhadap ikan yang baru dibeli.', '64b5e19b650da.png'),
(2, 'P2', 'Aeromonas', 'Penyakit ini disebabkan oleh bakteri Aeromonas Hydrophila, yang dapat menyerang ikan air tawar seperti ikan mas dan lainnya, tanpa memandang usia. Serangan penyakit ini bersifat akut dan berpotensi menyebabkan kematian total.', 'Pengobatan penyakit aeromonas pada ikan mas dapat dilakukan dengan beberapa metode, seperti terapi garam dengan konsentrasi tertentu selama waktu tertentu atau penggunaan antibiotik seperti enrofloksasin dan oksitetrasiklin dengan pengawasan dokter hewan. Terapi herbal menggunakan bawang putih, daun ketapang, daun kelor, atau daun kirinyuh juga telah digunakan. Dalam hal ini, penting untuk mendapatkan saran dari ahli ikan atau dokter hewan yang berpengalaman untuk dosis dan penggunaan yang tepat sesuai dengan kondisi spesifik.', 'Disarankan untuk melakukan karantina terlebih dahulu terhadap ikan yang baru dibeli, memastikan kualitas air yang baik, serta menerapkan manajemen pakan yang optimal.', '64b5e3b3bf6a7.png'),
(3, 'P3', 'Gatal (Trichodina sp.)', 'Penyakit Gatal, disebabkan oleh parasit Trichodina sp., merupakan kondisi yang sering ditemukan pada ikan mas. Parasit ini dapat menginfeksi ikan melalui kontak langsung dengan air yang terkontaminasi atau melalui transfer dari ikan yang terinfeksi.', 'Untuk mengobati penyakit Gatal pada ikan mas, langkah pertama adalah mengisolasi ikan terinfeksi dalam karantina. Selanjutnya, gunakan obat anti-parasit seperti formalin, malachite green, atau potassium permanganate yang direkomendasikan oleh dokter hewan atau ahli akuakultur.', 'Disarankan untuk melakukan karantina terhadap ikan yang baru dibeli sebagai langkah pencegahan dan untuk mengurangi risiko penyebaran penyakit. Selain itu, sangat penting untuk menjaga kebersihan kolam atau lingkungan tempat ikan berada.', '64b5e52c9d6cc.png'),
(4, 'P4', 'Bengkak Insang', 'Penyakit bengkak insang, juga dikenal sebagai Dropsy, adalah kondisi kesehatan yang umum terjadi pada ikan mas. Penyakit ini ditandai dengan pembengkakan yang terlihat pada area insang ikan, yang bisa terlihat seperti gelembung berisi cairan atau tanda-tanda peradangan yang jelas.', 'Pengobatan penyakit bengkak insang pada ikan dapat dilakukan dengan merendam ikan menggunakan desinfektan seperti Kalium Permanganat (PK) dengan dosis 1 gram/100 liter air atau Methylene blue dengan dosis 3-5 ppm selama 24 jam.', 'Untuk menjaga kesehatan ikan, disarankan untuk melakukan karantina terhadap ikan baru sebelum memasukkannya ke dalam lingkungan yang sudah ada. Hal ini penting untuk mencegah penyebaran penyakit antara ikan baru dan yang sudah ada. Selama proses karantina, perhatikan kesehatan ikan dengan cermat dan teliti.', '64b5e64080934.jpg'),
(29, 'P5', 'Koi Herpes Virus (KHV)', 'Penyakit Koi Herpes Virus (KHV), juga dikenal sebagai Carp Herpes Virus (CyHV-3), merupakan penyakit yang sangat menghancurkan pada ikan mas (koi) dan beberapa spesies ikan karper lainnya. KHV termasuk dalam keluarga Alloherpesviridae dan menyebabkan infeksi sistemik pada ikan, dengan tingkat mortalitas yang tinggi.', 'Sayangnya, hingga saat ini belum ditemukan pengobatan yang efektif untuk menyembuhkan penyakit Koi Herpes Virus (KHV).', 'Untuk mencegah penyebaran penyakit Koi Herpes Virus (KHV), lakukan karantina ikan baru, menjaga kebersihan air, menghindari stres pada ikan, dan pantau tanda-tanda infeksi KHV pada ikan yang ada. Jika mencurigai adanya KHV, segera hubungi ahli akuakultur atau dokter hewan berpengalaman untuk diagnosis dan penanganan yang tepat.', '64b5e7b3eacfe.png'),
(30, 'P6', 'Jamur (Saprolegniasis)', 'Penyakit jamur pada ikan mas, juga dikenal sebagai infeksi jamur atau saprolegniasis, adalah kondisi yang disebabkan oleh pertumbuhan jamur pada tubuh ikan. Infeksi jamur pada ikan mas sering terjadi ketika ikan mengalami kerusakan pada kulit atau luka yang memungkinkan masuknya jamur.', 'Untuk mengobati infeksi jamur pada ikan mas, langkah-langkah yang perlu dilakukan meliputi perbaikan kualitas air, menjaga suhu dan kebersihan yang tepat, serta memastikan tingkat oksigen yang cukup. Selanjutnya, perlu melakukan perawatan topikal menggunakan obat antijamur seperti malachite green, formalin, atau garam rendah sesuai rekomendasi dokter hewan atau ahli akuakultur.', 'Pertahankan kebersihan kolam atau akuarium, hindari stres pada ikan, dan pastikan kondisi air yang baik. Pemberian pakan seimbang dan nutrisi yang adekuat akan meningkatkan daya tahan tubuh ikan terhadap infeksi jamur.', '64b5e8ea6f8fb.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_rules` int(11) NOT NULL,
  `id_gejala` int(11) DEFAULT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `belief` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_rules`
--

INSERT INTO `tb_rules` (`id_rules`, `id_gejala`, `id_penyakit`, `belief`) VALUES
(39, 22, 3, 0.8),
(21, 3, 1, 0.7),
(23, 4, 1, 0.5),
(25, 5, 1, 0.2),
(5, 5, 3, 0.2),
(32, 6, 30, 0.6),
(20, 2, 3, 0.9),
(19, 2, 1, 0.9),
(18, 1, 2, 0.8),
(17, 1, 1, 0.8),
(40, 23, 29, 0.9),
(24, 4, 2, 0.5),
(26, 5, 2, 0.2),
(29, 5, 29, 0.2),
(28, 5, 4, 0.2),
(30, 5, 30, 0.2),
(31, 6, 2, 0.6),
(33, 7, 2, 0.8),
(34, 8, 4, 0.8),
(35, 9, 2, 0.5),
(36, 9, 29, 0.5),
(37, 10, 30, 0.9),
(38, 11, 2, 0.7),
(41, 3, 3, 0.7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapdiagnosa`
--
ALTER TABLE `lapdiagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lapdiagnosa`
--
ALTER TABLE `lapdiagnosa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
