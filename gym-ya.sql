-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 14.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym-ya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(40) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `jml_like` int(30) NOT NULL,
  `jml_dislike` int(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tgl_buat` date NOT NULL,
  `id_pembuat` int(30) NOT NULL,
  `thumbnail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `jml_like`, `jml_dislike`, `kategori`, `tgl_buat`, `id_pembuat`, `thumbnail`) VALUES
(6, 'Ternyata Banyak Manfaat Olahraga di Malam Hari', 'Sibuk bekerja sepanjang hari bukan lagi menjadi alasan untuk tidak berolahraga. Mendatangi fitness center bisa jadi pilihan karena tetap buka layanan hingga tengah malam.\r\n\r\nFitness malam hari sudah menjadi gaya hidup di kalangan para pekerja. Alasannya untuk menjaga kesehatan, menurunkan berat badan, dan membentuk badan lebih ideal. Selain itu, tempat fitness di dalam ruangan dengan fasilitas yang mendukung akan membuat olahraga lebih nyaman.\r\n\r\nSudah hampir dua tahun ini, saya rutin latihan angkat beban di fitness center. Aktivitas kerja sepanjang hari lebih banyak duduk di depan komputer, sementara asupan makan dan minum berkalori tinggi terus masuk ke dalam tubuh.\r\n\r\nSadar akan pentingnya olahraga ketika melihat perut yang semakin buncit dan sering sakit.\r\n\r\nMalam menjadi waktu yang fleksibel untuk semua orang. Awalnya, saya memulai latihan angkat beban di fitness center setiap pulang kerja. Rupanya tubuh saya gampang lelah dan pusing.\r\n\r\nIni mungkin disebabkan energi dalam tubuh sudah habis. Kondisi ini tidak memungkinkan melakukan angkat beban dengan maksimal.\r\n\r\nMengalihkan olahraga pada malam hari menjadi waktu yang tepat. Tubuh sudah dapat istirahat, makan, mandi, dan salat. Sehingga ketika pergi ke fitness center kondisi badan sudah kembali segar.\r\n\r\nJangan takut untuk fitness malam hari. Sejauh ini saya tidak merasakan gangguan kesehatan. Sebaliknya, tubuh mendapatkan banyak manfaat kesehatan, berat badan ideal, dan jarang sakit.', 8, 9, 'tipsdantrik', '2020-12-10', 1, 'jogging-track.jpg'),
(11, 'Apa Saja Gerakan Pemanasan yang Dilakukan Sebelum Berenang Agar Tidak Cedera?', 'Patokan latihan pemanasan yang efektif ialah mampu mengeluarkan sedikit keringat sebelum masuk ke kolam renang. Berbeda dari olahraga lain, pemanasan sebelum berenang bisa dilakukan di darat (di pinggir kolam) atau di dalam kolam renang itu sendiri.Berikut ini adalah daftar apa saja gerakan pemanasan di darat yang dilakukan sebelum berenang:\r\n\r\n    Skipping\r\n    Selain melakukan olahraga skipping atau lompat tali, Anda juga dapat menggantinya dengan gerakan melompat atau jogging di tempat.\r\n    Mengayunkan lengan\r\n    Rentangkan kedua tangan selebar mungkin, kemudian ayunkan dengan gerakan memutar secara sinkron antara tangan kanan dan kiri.\r\n    Plank\r\n    Posisikan badan seperti push-up, tapi lengan tegak lurus dan Anda harus menahan posisi itu selama mungkin.\r\n    Peregangan lutut-ke-dada\r\n    Berbaring di lantai dengan punggung rileks dan lurus, lalu tarik kedua lutut ke arah dada sampai Anda merasakan regangan di punggung bawah.\r\n    Peregangan hamstring\r\n    Jaga agar dada tetap tegak dan pertahankan lengkungan di punggung bawah saat Anda mencondongkan tubuh ke depan, kemudian tahan posisi itu untuk beberapa detik.\r\n    Hamstring curl\r\n    Posisikan kedua kaki di atas bola stabilitas dengan pinggul terangkat. Jaga otot inti (core) dan perut tetap kencang, tarik tumit ke arah tubuh, dan jaga agar pinggul Anda tetap tinggi.\r\n\r\nIdealnya, pemanasan di darat ini dilakukan selama minimal 10 menit. Untuk hasil yang maksmal, kombinasikan beberapa gerakan dengan masing-masing gerakan berdurasi 40 detik hingga 1 menit.Selain di darat, pemanasan juga bisa dilakukan langsung di kolam renang. Namun, hal ini biasanya dilakukan oleh atlet profesional, terutama sebelum mengikuti pertandingan, atau setidaknya di bawah pengawasan instruktur yang berpengalaman.Apa saja gerakan pemanasan yang bisa langsung dilakukan di kolam renang ini? Gerakan yang dijadikan pemanasan terlihat seperti berenang biasa, tapi dimulai dengan intensitas yang lebih pelan dan kepakan tangan yang tidak terburu-buru.Pada satu titik, Anda harus menambah kecepatan sepanjang 2x100 meter sehingga terasa seperti sedang lomba dan diakhiri dengan berenang 200 meter menggunakan kecepatan sedang. Pemanasan di dalam kolam renang ini idealnya dilakukan selama 30 menit.', 3, 6, 'tipsdantrik', '2020-12-10', 1, 'swimming.jpg'),
(13, 'Studi: Musik dengan Tempo Cepat, Bikin Olahraga Terasa Lebih Mudah', 'Di era sekarang, banyak pegiat gym yang merasa tak bisa berolahraga dengan baik tanpa sepasang headphone dan musik favorit. Kini, sebuah studi terbaru memvalidasi pendekatan olahraga yang sering dilakukan di tempat-tempat fitness tersebut.\r\n\r\nMelansir laman studyfinds.org, Selasa (4/2/2020), para peneliti dari Universitas Veroa di Italia menemukan bahwa lagu-lagu upbeat dan bertempo cepat dapat mengurangi kelelahan dan kesulitan saat berolahraga. Tak hanya itu, dengan mendengarkan musik bertempo cepat juga dapat meningkatkan manfaat olahraga secara keseluruhan.\r\n\r\nMenurut penelitian tersebut, musik terbukti sangat membantu meningkatkan daya tahan tubuh seseorang saat berolahraga seperti berjalan atau berlari. Tapi tak banyak bermanfaat untuk orang-orang yang berolahraga demi menaikkan berat badan.\r\n\r\nDalam studi ini, tim peneliti ingin fokus dalam mengidentifikasi beberapa kualitas musik universal yang dapat membantu meningkatkan performa olahraga seseorang. Khususnya, musik jenis apa yang terbaik dalam meningkatkan beberapa jenis olahraga tertentu.\r\n\r\n\"Kami menemukan bahwa mendengarkan musik bertempo cepat saat berolahraga dapat lebih baik dalam meningkatkan fungsi jantung, dan menekan jumlah tenaga yang dikerahkan, dibandingkan mereka yang berolahraga tanpa mendengarkana musik,\" tutur Profesor Luca. P. Ardigo.', 3, 3, 'tipsdantrik', '2020-12-10', 3, '90495418-man-running-and-listening-music-on-street-portrait-of-handsome-male-runner-in-sportswear-wearing-spo.jpg'),
(14, '3 Gerakan Freelatic untuk Melatih Otot Tubuh Bagian Atas', 'Banyak gerakan yang dikenalkan oleh olahraga freeletics. Selain itu, manfaatnya pun beragam. Mulai dari fungsinya yang bisa digunakan untuk mengencangkan otot perut, mengencangkan otot bagian tubuh atas hingga mengencangkan otot tubuh bagian bawah.\r\n\r\nBerikut adalah gerakan-gerakan sederhana dari freeletics yang bisa kamu gunakan untuk melatih otot tubuh bagian atas kamu agar semakin kencang.\r\n\r\n1. Push Up\r\n\r\nGerakan push up merupakan salah satu gerakan yang bisa kamu gunakan untuk melatih otot bagian atas yang cukup penting. Selain itu, gerakan push up bisa kamu lakukan di mana saja dan kapan saja. Gerakan push up memang banyak menggunakan otot tubuh bagian atas, sehingga sangat tepat jika kamu ingin mengolah tubuh bagian atas kamu dengan melakukan push up. Biasanya pada saat melakukan push up, kamu banyak menggunakan bagian tricep, yaitu otot bagian luar lengan atas dan juga otot dada.\r\n\r\nUntuk menghindari rasa bosan pada saat push up, kamu bisa menggunakan gerakan variasi dalam push up, beberapa diantaranya adalah clap push up. Clap push up dilakukan dengan dasar yang sama dengan push up biasa. Namun, kamu harus mendorong tubuh ke atas dengan cukup kuat dan tinggi agar kamu bisa menepuk kedua tangan dan bisa mengembalikan dalam posisi push up seperti di awal. Sebelum melakukan variasi push up, sebaiknya kamu melatih push up yang umum terlebih dahulu.\r\n\r\n2. Plank\r\n\r\nGerakan plank hampir mirip dengan gerakan untuk melakukan push up. Biasanya, gerakan ini dilakukan untuk mendapatkan perut yang rata dan juga menjaga tubuh bagian atas tetap proporsional. Saat melakukan gerakan plank, kamu harus menahan posisi seperti push up selama beberapa detik dengan menjadikan tangan dan kaki sebagai tumpuan untuk menahan beban tubuh. Berdasarkan American Council on Exercise, dengan melakukan planking secara rutin kamu bisa membuat otot punggung semakin kuat.\r\n\r\n3. Pull Up\r\n\r\nGerakan pull up dilakukan untuk membentuk tubuh bagian atas, khususnya bagian bahu. Tidak hanya bahu, biasanya gerakan pull up juga akan membentuk otot punggung dan otot pada bagian bawah ketiak. Untuk membentuk otot bahu dengan gerakan pull up, kamu harus rutin melakukan gerakan pull up dengan menggantungkan tubuh pada palang menggunakan tangan.\r\n\r\nBiasanya untuk melakukan gerakan freeletics, satu gerakan dilakukan dalam hitungan waktu tertentu. Misalnya 10 gerakan untuk masing-masing gerakan seperti push up, plank, dan pull up. Tidak hanya untuk mendapatkan tubuh bagian atas, nyatanya freeletics juga bisa kamu gunakan untuk membentuk bagian tubuh yang lain. Tidak hanya itu, dengan melakukan freeletics kesehatan dan stamina kamu pun akan tetap terjaga. Namun, jangan lupa untuk tetap mengonsumsi makanan sehat dan bernutrisi.', 0, 0, 'Workout', '2020-12-11', 8, 'freeletics.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disliked_artikel`
--

CREATE TABLE `disliked_artikel` (
  `user_id` int(30) NOT NULL,
  `artikel_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disliked_artikel`
--

INSERT INTO `disliked_artikel` (`user_id`, `artikel_id`) VALUES
(1, 6),
(1, 6),
(1, 11),
(1, 11),
(1, 6),
(3, 13),
(3, 6),
(3, 11),
(3, 13),
(3, 11),
(3, 6),
(3, 6),
(3, 6),
(4, 6),
(4, 11),
(4, 13),
(8, 11),
(8, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(30) NOT NULL,
  `isi_komen` text NOT NULL,
  `tgl_buatkomen` date NOT NULL,
  `id_buatkomen` int(30) NOT NULL,
  `id_artikel` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `isi_komen`, `tgl_buatkomen`, `id_buatkomen`, `id_artikel`) VALUES
(14, 'pertamax', '2020-12-10', 3, 13),
(15, 'hoax nih', '2020-12-10', 3, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `liked_artikel`
--

CREATE TABLE `liked_artikel` (
  `user_id` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `liked_artikel`
--

INSERT INTO `liked_artikel` (`user_id`, `artikel_id`) VALUES
(1, 6),
(1, 6),
(3, 6),
(3, 6),
(3, 13),
(3, 11),
(4, 6),
(4, 11),
(4, 13),
(8, 11),
(8, 6),
(8, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contributor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `contributor`) VALUES
(1, '19523197', '19523197@students.ui', '19523197', 1),
(2, 'Lio nandar', 'lio992@gmail.com', 'lionnasa', 1),
(3, 'muffron', '19523197@students.ui', '123456', 0),
(4, 'Arya', '19523188@students.ui', '123456', 0),
(5, 'Ilham', 'ilhamnddr@gmail.com', '123456', 0),
(8, 'rama', 'fahri279@gmail.com', '123456', 1),
(9, 'anomymous', 'anoumyous@anoumys.xyz', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembuat` (`id_pembuat`);

--
-- Indeks untuk tabel `disliked_artikel`
--
ALTER TABLE `disliked_artikel`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buatkomen` (`id_buatkomen`,`id_artikel`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indeks untuk tabel `liked_artikel`
--
ALTER TABLE `liked_artikel`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_pembuat`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `disliked_artikel`
--
ALTER TABLE `disliked_artikel`
  ADD CONSTRAINT `disliked_artikel_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `disliked_artikel_ibfk_2` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_buatkomen`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `liked_artikel`
--
ALTER TABLE `liked_artikel`
  ADD CONSTRAINT `liked_artikel_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `liked_artikel_ibfk_2` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
