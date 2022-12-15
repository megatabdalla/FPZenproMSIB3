-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 02:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anews`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'Abel Naseer', 'abel', 'sahda');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`, `idKat`) VALUES
(1, 'Korea Selatan melaju ke babak 16 besar Piala Dunia Qatar 2022', 'Gol kemenangan Hwang Heechan pada menit ke-90 membawa Korea Selatan lolos ke babak 16 besar Piala Dunia dengan kemenangan 2-1 atas Portugal.   Hwang melakukan serangannya setelah kapten Son Heungmin berlari di sepanjang lapangan dalam penguasaan bola untuk membuat gol di Stadion Education City Qatar.   Grup H sangat kompetitif sampai-sampai Korea Selatan tidak mengetahui takdirnya hingga delapan menit setelah peluit akhir dibunyikan: kemenangan Uruguay 2-0 melawan Ghana tidak cukup untuk mengalahkan pasukan Son karena selisih gol.   Tim Korea Selatan berkerumun di lingkaran tengah, menunjukkan saat-saat terakhir, panik, dari permainan saingan mereka sebelum meledak menjadi perayaan yang menggembirakan saat mereka berhasil melewati babak penyisihan grup Piala Dunia untuk ketiga kalinya.   Portugal sudah lolos ke babak sistem gugur sebelum pertandingan grup terakhir ini, dan membuat enam perubahan dari tim yang mengalahkan Uruguay 2-0; Dalot dan Horta adalah di antara mereka yang dibawa masuk. Orang Korea harus menang agar memiliki peluang lolos.   Setelah gol pembuka, Kim Younggwon memberi harapan bagi Korea di menit ke-27 ketika tendangan sudut mengenai punggung Ronaldo dan jatuh dengan baik ke bek dan memasukkan bola ke gawang yang menyamakan kedudukan.   Tapi Portugal masih terlihat berbahaya setiap kali mereka menyerang di babak pertama melawan pertahanan Korea yang kehilangan Kim Minjae dari Napoli. Babak kedua kurang lebih sama – Portugal menikmati lebih banyak penguasaan bola dan menguasai bola, tetapi dengan Korea Selatan dan Son yang semakin berpengaruh menjadi ancaman saat istirahat.   Kemenangan terakhir untuk Korea Selatan melambungkan mereka dari posisi keempat ke posisi kedua di Grup H. Mereka akan melawan pemenang Grup G, kemungkinan besar adalah Brasil – tetapi tidak ada yang dapat dijamin di Piala Dunia ini.', '', 1),
(2, 'Piala Dunia Terakhir Cristiano Ronaldo Berakhir Dengan Kekalahan Portugal ', 'DOHA, Qatar — Tidak akan ada gelar Piala Dunia untuk Cristiano Ronaldo dalam penampilan terakhirnya di turnamen sepak bola terbesar itu.  Setelah berada di bangku cadangan pada awal pertandingan kedua berturut-turut, Ronaldo tidak dapat membantu Portugal bangkit melawan Maroko, kalah 1-0 di perempat final pada hari Sabtu.  Ronaldo yang berusia 37 tahun berjalan keluar lapangan sambil menangis.  Ronaldo masuk sebagai pemain pengganti di awal babak kedua dengan timnya sudah kalah. Dia menggantikan gelandang Rúben Neves pada menit ke-51 untuk penampilan internasionalnya yang ke-196, yang terbanyak sepanjang masa bersama penyerang Kuwait Badr Al-Mutawa.  Ronaldo, bermain di Piala Dunia kelima dan kemungkinan terakhirnya, juga berada di bangku cadangan untuk memulai di babak 16 besar melawan Swiss, tampil sebagai pemain pengganti.  Maroko memimpin pada hari Sabtu dengan sundulan oleh Youssef En-Nesyri pada menit ke-42.  Ronaldo berada di antara pergantian pemain pertama yang dilakukan oleh pelatih Portugal Fernando Santos dan  setelah menerima ban kapten dari Pepe ia bergegas ke lapangan dan mulai menyemangati rekan satu timnya. Seiring berjalannya waktu, dia juga mengangkat tangannya ke arah fans Portugal dan meminta dukungan mereka.  Ronaldo turut meningkatkan intensitas serangan Portugal yang sempat kesulitan melewati pertahanan Maroko yang tertata rapi. Ia langsung menciptakan peluang dengan umpan silang ke area penalti, kemudian kehilangan penguasaan bola tak lama kemudian. Dia juga mengatur tembakan oleh João Félix di menit ke-82, tetapi tembakan rekan setimnya berhasil diselamatkan. Tembakan terakhir Ronaldo di waktu tambahan juga berhasil diselamatkan.  Ronaldo berjalan keluar lapangan setelah peluit akhir dan mulai menangis saat dia memasuki terowongan ke ruang ganti.  Beberapa pemain Maroko pergi untuk menghiburnya, tetapi tidak ada rekan tim Portugal di sampingnya saat dia pergi. Sebagian besar tetap berada di lapangan dan pergi ke arah fans Portugal untuk berterima kasih atas dukungan mereka.  Santos menepuk punggung Ronaldo saat dia melewatinya di dekat pinggir lapangan.  Ronaldo mengatakan sebelum Piala Dunia bahwa dia tidak berencana untuk pensiun dari tim nasional Portugal setelah turnamen di Qatar, dan dia berencana untuk bermain setidaknya di Kejuaraan Eropa 2024.', '', 1),
(3, 'FIFA Selidiki Insiden Belanda Vs Argentina, Messi dkk Dihukum?', 'Laga Perempatfinal Piala Dunia 2022 di Lusail Iconic Stadium, Sabtu (10/12/2022) dini hari WIB itu, berlangsung sengit dan seru. Bahkan wasit Antonio Mateu Lahoz harus mengeluarkan 17 kartu kuning dan satu kartu merah untuk Denzel Dumfries.  Itu merupakan rekor yang tercipta di sebuah pertandingan Piala Dunia. Bahkan para pemain sempat terlibat friksi kecil saat dan sesudah pertandingan.  Lionel Messi yang biasanya kalem saja sampai kena kartu kuning, dan ribut-ribut dengan pemain Belanda Wout Weghorst di lorong ganti, sehingga memicu emosi pemain lainnya.  Argentina akhirnya menang adu penalti dengan skor 3-2. Meski lolos, Tim Tango tidak bisa bernapas lega dulu karena aksi tak terpuji para pemainnya masuk dalam laporan pertandingan.  Menurut AP, FIFA bakal menyelidiki kasus tersebut karena ada potensi pelanggaran disiplin dari para pemain kedua negara.  Sebab, jika satu tim mendapat lima kartu kuning atau lebih, maka akan didenda oleh FIFA. Kemungkinan FIFA hanya akan menjatuhkan hukuman tersebut, tanpa adanya skorsing.  Besaran denda di angka 15 ribu franc Swiss atau sekitar Rp 250 juta untuk masing-masing, Argentina dan Belanda. Namun, Argentina kabarnya bakal didenda lebih besar karena provokasi para pemainnya, termasuk Messi.  Messi melakukan selebrasi yang bernada mengejek ke bench Belanda dan sempat bersitegang dengan Louis van Gaal di akhir laga.  Sementara, Leandro Paredes dan Nicolas Otamendi melakukan selebrasi provokasi ke arah pemain Belanda yang tertunduk lesu usai memenangi adu penalti.  Argentina akan menghadapi Kroasia pada Semifinal Piala Dunia 2022 di Lusail Iconic Stadium, Rabu (14/12/2022) dini hari WIB.', '', 1),
(4, 'Timnas MLBB Sumbang Emas ke-3 untuk Indonesia di IESF WEC 2022!', 'Timnas Mobile Legends: Bang Bang (MLBB) menyumbang emas ke-3 untuk Indonesia di IESF World Esports Championship (WEC), sebagai bagian dari Indonesia Esports Summit 2022.  Di babak Grand Final, Minggu (11/12/2022), timnas MLBB Indonesia mengalahkan tim kuat Filipina dengan skor telak 3-0, dalam match dengan format best of 5 (BO5).  Timnas MLBB Indonesia menyumbang emas untuk Indonesia. Ini adalah emas ke-3 untuk Indonesia di IESF WEC 2022 usai hari sebelumnya disumbang oleh timnas Dota 2 dan eFootball 2023.  Timnas MLBB yang terdiri dari Rachmad “DreamS” Wahyudi, Dalvin “Hijume” Ramadhana Putra, Rizqi “Saykots” Awandi Iskandar Darrel “Tazz” Jovanco Wijaya, Adriansyah “Clawkun” Baihaqi Lesmana, dan Jabran “Branz” Bagus Wiloko, berhasil menyuguhkan performa yang stabil dan dominan.   Meskipun, di gim terakhir pertempuran seru dan seimbang sering terjadi. Babak pertama, Tim Nasional Indonesia bermain dengan baik hingga mendapatkan lord.   Pada menit ke-17, Indonesia langsung mengamankan objektif hingga berhasil mengamankan kemenangan di babak ini dengan skor akhir 13-7.  Pertandingan babak kedua, terdapat karakter hero dari masing-masing negara, Indonesia menggunakan “Kadita” dan Filipina menggunakan “Lapu-Lapu”.   Pertandingan babak kedua sangat memukau pendukung tim Merah-Putih yang hadir langsung di Merusaka, Nusa Dua. Indonesia berhasil mengamankan lord pertama.   Namun, perlawanan yang kuat dari Filipina berhasil mengembalikan keadaan hingga Filipina mendapatkan lord.   Namun, pada saat Filipina ingin mendapatkan lord ke-4, pemain Filipina terkena gangking. Alhasil, pada pertandingan ini dimenangkan oleh Indonesia dengan skor akhir 3-0.  Kemenangan Indonesia atas Filipina di Grand Final MLBB sekaligus menjadi match penutup gelaran IESF WEC 2022. Indonesia mendapatkan perolehan tiga emas dari Dota 2, eFootball 2023, MLBB, dan satu perunggu dan CS:GO Female.', '', 2),
(5, 'Timnas Dota 2 Indonesia juara IESF WEC 2022 secara dramatis!', 'Timnas Dota 2 Indonesia menjalani pertarungan terakhirnya saat bertemu kembali Filipina untuk memperebutkan gelar juara IESF WEC 2022.  Sebelumnya kedua tim pernah bertemu di putaran pertama upper bracket. Saat itu Indonesia tunduk dengan skor tipis 2-1.  Oleh karena itu, grand final ini sangat menarik untuk disaksikan mengingat betepa sengitnya pertemuan pertama mereka.  Timnas Dota 2 Indonesia dan Filipina berbagi poin di dua game pertama, kedua carry silih berganti menggiring poin plus untuk timnya.  Dreamocel fantastis di game pertama dengan Slark, sementara Akashi cemerlang di game kedua bersama Terror Blade.  Meski sama-sama memenangkan satu poin, Filipina lebih diunggulkan karena datang dari upper bracket dan menambahkan satu poin bonus sehingga skor menjadi 2-1 untuk keunggulan mereka.  Indonesia tampaknya enggan bermain late game setelah kalah di game sebelumnya, karena di ronde ini tim Merah Putih mampu menang cepat.  Awalnya semua sangat seimbang untuk kedua tim, sampai Dremocel selesai membuat dua item core utamanya. Pertarungan hanya berlangsung selama 32 menit.  Timnas Dota 2 Indonesia sebenarnya cukup tertekan di game penentuan, Tuskar, Mars, dan Skywrath Mage terbukti sangat merepotkan pertahanan timnas.', '', 2),
(6, 'Team RRQ umumkan kehadiran analyst baru divisi Valorant', 'Welcome to RRQ, Yb.  Team RRQ telah resmi menambahkan satu personil baru untuk mengisi posisi analyst dengan kehadiran Lukas “Yb” Groning.   Usai kekalahan mereka dalam ajang AfreecaTV Valorant SEA Invitational, Team RRQ benar-benar harus berbenah sebelum memasuki tahun 2023.   Salah satu kekurangan yang mungkin mereka butuhkan, adalah kehadiran seorang analyst yang sempat diisi oleh Jose “Rbtx” Carlo Jamir (ex-RRQ PH).   Sang mantan analyst, memutuskan untuk pindah ke tim Oasis Gaming (tim asal Filipina) berdasarkan klarifikasi yang diberikan oleh sang pelatih, Ewok.   Dan kini, tampaknya Team RRQ bisa bernafas lega karena kekosongan tersebut sudah terisi dengan Yb bergabung ke dalam tim.   Lalu, siapakah Lukas “Yb” Groning? Yb merupakan salah satu veteran dalam scene kompetitif FPS yang dulunya lebih dikenal di scene CS:GO selama 8 tahun.   Yb merupakan seorang pria kelahiran Jerman yang sudah bermain untuk berbagai tim-tim tier 2 CS:GO seperti BLUEJAYS dan yang terpopuler, OpTic India.   OpTic India merupakan tim cabang dari OpTic Gaming yang sempat ramai dibahas karena kasus pemain CS:GO, forsaken (bukan PRX f0rsakeN) melakukan cheat.   Usai menghabiskan beberapa tahun dengan OpTic India, Yb bergabung sebagai pemain di tim Enigma Gaming. Ia menghabiskan beberapa tahun di sana.   Bertransisi ke VALORANT, Yb menjadi pelatih Enigma Gaming. Timnya sempat berpartisipasi dalam ajang Valorant Invitational India di Hyderabad, November lalu.   Usai diumumkan pada Minggu (11/12), Yb mengucapkan terima kasih melalui akun Twitter miliknya pada postingan Team RRQ.   “Terima kasih (atas kesempatan emas ini), saya sangat bersemangat,” tulis Yb.   Ewok selaku pelatih juga turut berbahagia dengan kehadiran Yb sebagai asisten barunya di dalam tim dan berharap besar dengan kontribusi positif yang akan ia berikan.   “Selamat datang, semoga kedepannya kami akan bekerja keras untuk membawa kesuksesan bagi roster (Team RRQ) ini,” tulis Ewok.   Welcome aboard, Yb. May the force of the Kingdom with you.', '', 2),
(7, 'Tenis AS Terbuka kembali ke Sky Sports mulai 2023 dalam kontrak lima tahun yang baru', 'Kemitraan dengan Asosiasi Tenis Amerika Serikat (USTA) menyambut tenis kembali ke Sky Sports dan menegaskan kembali penyiar sebagai rumah olahraga langsung di Inggris dan Irlandia.  Perjanjian baru akan dimulai dengan AS Terbuka 2023 di Flushing Meadows, dimulai pada 28 Agustus, dengan Sky Sports memegang hak siar eksklusif hingga dan termasuk acara 2027.  \"Kami sangat senang dapat bermitra dengan USTA sekali lagi untuk menghadirkan AS Terbuka, salah satu turnamen tenis Grand Slam terhebat di dunia,\" kata Jonathan Licht, direktur pelaksana Sky Sports.  \"Kami memiliki sejarah yang hebat dengan USTA dan mengingat kemenangan AS Terbuka 2012 Andy Murray sebagai salah satu momen hebat di Sky Sports. Ini adalah acara olahraga besar lainnya untuk pemirsa kami, dan kami berharap dapat menghadirkan lebih banyak lagi kepada penggemar tenis dari apa yang mereka inginkan.\" cinta dan menyambut penggemar baru untuk olahraga.\"  Sebagai bagian dari liputannya, Sky Sports akan memiliki akses ke semua feed lapangan individu, menyiarkan minimal 135 jam kompetisi selama turnamen Grand Slam yang berlangsung selama dua minggu. Cakupan yang luas akan menyediakan konten untuk penggemar tenis yang ada dan pemirsa baru di saluran linier, digital, dan sosial Sky Sports.  Perjanjian tersebut mencakup cakupan turnamen putra dan putri, di samping kompetisi ganda, ganda campuran, junior, dan kursi roda masing-masing.', '', 1),
(8, 'Pesta mencetak gol Damian Lillard berlanjut, Portland Trail Blazers mengalahkan San Antonio Spurs: Saat bel berbunyi', 'Penembakan bulan-bulan panas Damian Lillard berlanjut Rabu malam di San Antonio, dan akibatnya, begitu pula kemenangan untuk Portland Trail Blazers.  Lillard mencetak 22 poin pada paruh pertama dan menyelesaikannya dengan 37 untuk memimpin Blazers menang 128-112 atas Spurs di AT&T Center.  The Blazers mendominasi babak pertama, membangun keunggulan sebanyak 19 poin. Tapi Spurs membuat hal-hal menarik di kuarter ketiga, menyamakan kedudukan menjadi 87-81 dengan waktu tersisa kurang dari empat menit. Sejak saat itu, bagaimanapun, Blazers mengendalikan permainan dan Spurs tidak pernah mengancam secara serius.  “Saya pikir itu penampilan yang bagus,” kata pelatih Blazers Chauncey Billups. “Saya pikir kami memiliki babak pertama yang hebat, kuartal ketiga yang buruk dan membiarkan mereka kembali ke permainan, mendapatkan harapan. Itu hanya bagian yang mengecewakan, tapi saya pikir itu adalah kemenangan yang bagus.”  Lillard mengatakan tim harus menemukan kembali eksekusinya untuk menahan Spurs.  \"Kami hanya harus memperketat,\" kata Lillard. “Ini adalah permainan lari. Anda tahu terutama di lantai rumah tim lain bahwa mereka akan terus berlari dan mereka akan menemukan cara untuk kembali bermain.  Ini juga membantu saat superstar Anda melakukan pukulan dari seluruh lapangan. Lillard, yang juga membuat tujuh assist dan lima rebound, membuat 14 dari 23 tembakan dari lapangan, termasuk 7 dari 14 tembakan tiga kali. Dalam lima pertandingan Desember, Lillard mencetak rata-rata 34,4 poin, menembak 50,1% dari lapangan (55 dari 108) dan 50,7% dari jarak tiga poin (35 dari 69).  “Dia berada di zona yang luar biasa sekarang,” kata Billups. “Saya merasa kecepatannya, perubahan kecepatannya sangat bagus saat ini.”  Lillard memuji aliran serangan dan eksekusi rekan satu timnya karena membuka segalanya untuknya.  “Saya mendapatkan lebih banyak peluang yang lebih bersih di mana saya tidak perlu bekerja keras,” kata Lillard. \"Dan ketika Anda tidak harus bunuh diri untuk menyelesaikan sesuatu, itu memungkinkan Anda menyelesaikan sesuatu dengan lebih efisien dan itu akan terlihat mudah.\"  Anfernee Simons menambah 23 poin dan empat assist, sambil membuat 9 dari 15 tembakan, untuk Blazers.', '', 1),
(9, 'Update Fragment Shop Mobile Legends Desember 2022, Ini Skin yang Akan Hadir dan Dihilangkan!', 'Fragment Shop merupakan salah satu fitur yang sangat disenangi oleh para pemain gratisan. Pada bulan Desember ini akhirnya skin gratis di Fragment Shop Mobile Legends 2022 mendapatkan update, ini dia bocoran skin yang akan hadir dan dihilangkan!  Buat yang belum tahu, fitur Fragment Shop ini menjadi favorit para pemain Mobile Legends lantaran kamu bisa menukarkan Fragment yang kamu dapatkan dengan beragam skin keren secara gratis.  Skin-skin yang tersedia untuk ditukar di Fragment Shop ini biasanya akan dirotasi setiap beberapa musim. Sehingga bagi pemain yang sudah memiliki semua skin di Fragment Shop masih berkesempatan untuk menukarkan Fragment mereka di kemudian hari.  Ini dia daftar skin baru di update Fragment Shop terbaru!  Baru: 	Bunny Babe (Layla) 	Phantom Dancer (Natalia) 	Dark Earl (Lancelot) 	Cyber Ops (Gusion)  Dihilangkan: 	Dragon Hunter (Freya) 	Black Pearl (Karina) 	Anubis (Roger) 	Nightarrow (Irithel)  Baru: 	Leomord 	Paquito 	Beatrix 	Aamon  Dihilangkan: 	Chou 	Popol & Kupa 	Yu Zhong 	Natan  Itulah update Fragment Shop terbaru yang akan hadir di ML. Dari skin-skin yang mendapatkan rotasi di bulan Desember 2022 di atas, ada skin incaran kamu atau enggak, Sob?', '', 2),
(10, 'Juara Umum di IESF WE Championships 2022, Ini Kata Kepala Pelatih Timnas Soal Rencana ke Depannya', 'Setelah berhasil menjadi juara umum di ajang IESF WE Championships 2022, Kepala Pelatih Timnas Indonesia, Yohannes Siagian sempat memaparkan rencana yang tengah disiapkan untuk beberapa event yang akan datang. Penasaran seperti apa rencananya? Yuk, simak bersama, Sob!  Ditemui dalam acara pelepasan atlet timnas Indonesia untuk IESF Bali 2022, Pria yang akrab disapa Joey ini menyampaikan bahwa apa yang diraih timnas di WE Championships sudah sesuai dengan target awal  “Overall sebetulnya ini sudah sesuai bayangan kita di awal, dari pertama kita sudah confident akan juara umum dan itu yang kita capai.” Terang Yohannes P. Siagian, selaku Kepala Pelatih Timnas Indonesia.  “Ada beberapa evaluasi yang akan perlu kita buat untuk next event, di mana tahun depan jadwal kita untuk timnas sangat padat, ada SEA Games di bulan Mei, Asian Games di bulan September, dan IESF di Desember. Tetapi sukses dan kegagalan di event kali ini akan kita pakai sebagai landasan untuk membangun tim nasional yang lebih kuat lagi ke depannya,” lanjut Pak Joey.  Kemudian untuk menanggapi kritik dari netizen terkait proses seleknas yang dianggap cukup mepet dengan turnamen dan apakah proses seleknas akan mengalami perubahan ke depannya, mantan VP EVOS dan CEO MORPH ini pun menjelaskan, “Sebetulnya sistem seleknasnya tidak terlalu mepet, karena prosesnya sudah lebih panjang dari yang diketahui masyarakat umum.”  “Kita sangat terbuka terhadap kritik asalkan kritik tersebut disampaikan dengan benar. Tetapi, kalau sesuatu menunjukan hasil dan hasilnya positif, kenapa perlu diubah? Kecuali memang ada jalan untuk dibuat lebih bagus lagi.” tutupnya.  Itulah yang disampaikan Kepala Pelatih Timnas Indonesia terkait rencana yang akan disiapkan untuk menghadapi beberapa event di tahun 2023.', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `namaKategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `namaKategori`) VALUES
(1, 'Sport'),
(2, 'E-sport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKat` (`idKat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
