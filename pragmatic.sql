-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2022 at 10:25 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slot_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gamelists`
--

CREATE TABLE `gamelists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gamelists`
--

INSERT INTO `gamelists` (`id`, `title`, `slug`, `image`, `iframe`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Sweet Bonanza Xmas', 'sweet-bonanza-xmas', 'gamelist/1654936937_Sweet-Bonanza-Xmas.png', 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=id&amp;cur=IDR&amp;gameSymbol=vs20sbxmas&amp;websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&amp;jurisdiction=99&amp;lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com', '<p><a href=\"http://206.189.157.198/sweet-bonanza-xmas/\"><strong>Sweet Bonanza Xmas</strong></a>&nbsp;&ndash; Permainan slot game online sangat banyak peminat oleh para penggemar slot dan para pemain slot online, kini kami akan menjelaskannya.</p>\r\n\r\n<p><strong>Slot Demo</strong>&nbsp;adalah situs game slot online terbaik dan terpercaya di indonesia, untuk para pemula slot bisa mencoba&nbsp;<a href=\"http://174.138.21.96/\"><strong>slot demo</strong></a>.</p>\r\n\r\n<p>Pemain pada umumnya menghabiskan banyak waktu dengan uang yang relatif tidak terlalu banyak ketika bermain game slot sehingga pengalaman berjudi terasa lebih menghibur dan tidak merugikan.</p>\r\n\r\n<p><strong>Review Slot Bonaza</strong></p>\r\n\r\n<p>Untuk para pemain slot boleh di coba dengan Sweet Xmas, karena slot bonanza sangat seru banget. Kemenangan di slot bonanza bisa sampai ratusan juta dari modal kecil banget satu kali spin. Di slot bonanza tidak ada maksimal kemenangan karena dibuat oleh pragmatic play.</p>\r\n\r\n<h2><strong>Mengenal Tentang Bonanza</strong></h2>\r\n\r\n<p>Sweet Bonanza Xmas adalah game yang sangat banyak peminat di indonesia, karena game tersebut sering mengeluarkan jackpot online.</p>\r\n\r\n<p>Sebagai informasi, Sweet Xmas memiliki 6 reels, 5 rows, dan banyak fitur menyenangkan yang akan membantu kamu meraih kemenangan besar, di&nbsp;<strong>slot demo online</strong>.</p>\r\n\r\n<p>Hadiah tertinggi yang bisa diberikan oleh game slot online ini adalah 21,175x taruhanmu, diperuntukkan bagi mereka yang ada di slot.</p>\r\n\r\n<h3><strong>Cara Bermain Game Slot Bonanza Xmas</strong></h3>\r\n\r\n<p>Sebelum mulai bermain, kamu harus menetapkan nilai taruhan terlebih dahulu. Untuk melakukan ini, klik tanda plus dan minus untuk menampilkan opsi taruhan.</p>\r\n\r\n<p>Dengan ini, total nilai taruhan per putaran berkisar dari 0,20 hingga 100. Namun, kamu dapat memilih untuk meningkatkan pengganda taruhan menjadi 25x.</p>\r\n\r\n<p>Jika kamu melakukan ini, jumlah taruhan maksimum per putaran meningkat menjadi 125.</p>\r\n\r\n<p>Tekan &lsquo;AUTOPLAY&rsquo; untuk mengaktifkan putaran otomatis dan slot akan memutar reel secara otomatis untukmu, putuskan berapa banyak putaran yang ingin dibuat untukmu dan batasan apa (jika ada) yang ingin ditempatkan. Kamu juga dapat membuat reel berputar lebih cepat dari biasanya.</p>\r\n\r\n<p>Sekian artikel di atas tentang&nbsp;<strong>Sweet Bonanza Xmas</strong>&nbsp;semoga bermanfaat bagi para pemain slot game online terbaik dan para penggemar slot.</p>', '2022-06-11 08:42:17', '2022-06-11 08:42:17'),
(2, 'Sweet Bonanza', 'sweet-bonanza', 'gamelist/1654937005_Sweet-Bonanza.png', 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=id&cur=IDR&gameSymbol=vs20fruitsw&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com', '<p><strong>Sweet Bonanza</strong>&nbsp;adalah permainan yang kini sangat banyak orang bermain karena sangat mudah bermain dan mudah dapat jackpot.</p>\r\n\r\n<p>Untuk permain demo slot sudah sangat banyak peminat di indonesia ataupun di dunia online, game slot online sangat terkenal sekali.</p>\r\n\r\n<p>Kini admin akan memberikan sedikit informasi tentang slot yang terpopuler di indonesia yaitu =&gt; Sweet Bonanza.</p>\r\n\r\n<h2><strong>Cara Bermain Sweet Bonanza</strong></h2>\r\n\r\n<p>Seperti permainan slot umumnya, Anda hanya tinggal menekan tombol spin untuk memulai permainan. Sebelum itu, pastikan berapa besar jumlah taruhan yang akan Anda pasang pada setiap putaran.</p>\r\n\r\n<p>Tentu saja setiap taruhan yang besar akan memenangkan taruhan yang besar juga, begitu juga sebaliknya jika Anda kalah. Untuk itu, pastikan lebih bijak dalam menempatkan jumlah taruhan.</p>\r\n\r\n<p>Game slot sweet bonanza memiliki 6 reel (gulungan), setiap reel terdapat 5 (lima) baris untuk penempatan simbol. Total keselurahan simbol yang muncul di semua reel dalam permainan sebanyak 30 simbol. Setiap 1X spin atau bermain maka akan muncul 30 kombinasi simbol yang akan dijadikan acuan pembayaran.</p>\r\n\r\n<p>Simbol yang muncul tidak harus berdampingan dalam reel permainan, biarpun dalam posisi acak simbol yang muncul harus memenuhi syarat minimal 8 simbol yang sama maka dalam ronde permainan itu Anda akan menang sebanyak harga pembayaran simbol tersebut.</p>\r\n\r\n<h3><strong>Hitungan Pembayaran Simbol</strong></h3>\r\n\r\n<p>tabel pembayaran sweet bonanza slotDalam permainan sweet bonanza terdapat 9 simbol dan 1 Scatter, setiap simbol memiliki harga pembayaran yang berbeda. Untuk menang dengan maksimal tentu saja harus simbol dengan pembayaran terbesar harus muncul dengan jumlah yang banyak yaitu 12 atau lebih simbol sama.</p>\r\n\r\n<p>Diatas adalah tabel pembayaran untuk taruhan 1X spin seharga Rp.1000. Jika Anda menaikan taruhan, pembayaran juga akan berubah sesuai jumlah taruhan.</p>\r\n\r\n<p><strong>Catatan Akhir</strong></p>\r\n\r\n<p>Slot bonanza memiliki taruhan yang lain yaitu &ldquo;membeli fitur&rdquo;. Untuk bermain taruhan ini, Anda harus membayar 100X lipat dari nilai taruhan 1x spin. Misalkan taruhan Anda Rp.1000 per spin maka harga yang dibayar untuk bermain taruhan ini adalah Rp.100.000.</p>\r\n\r\n<p>Dengan membeli fitur ini, Anda akan mendapatkan 10X free spin dengan keuntungan akan ada simbol perkalian yang bisa mencapai 100x dari total perhitungan pembayaran taruhan Anda.<br />\r\nSekian artikel kami di atas cara bermain bonanza semoga bermanfaat bagi parag pecinta slot dan para penggemar&nbsp;<strong>slot demo pragmatic</strong>.</p>', '2022-06-11 08:43:25', '2022-06-11 08:43:25'),
(3, 'Gate Of olympus', 'gate-of-olympus', 'gamelist/1654940154_gates-of-olympus.png', 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=IDR&gameSymbol=vs20olympgate&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com', '<p><strong>Gate Of olympus</strong>&nbsp;adalah situs game online dan terpopuler di indonesia dengan permainan terbaik yang di sediakan oleh&nbsp;<strong>demo slot</strong>.</p>\r\n\r\n<p>Untuk anda yang ingin bermain game slot online tanpa uang bisa hubungi kami di sini =&gt;&nbsp;Slot Demo.</p>\r\n\r\n<p>Permainan yang di sediakan&nbsp;<strong>demo slot</strong>&nbsp;sangat banyak sekalia yang terpopuler di dunia game salah satunya,&nbsp;<strong>Gate Of olympus</strong>, thor.</p>\r\n\r\n<p>Olympus adalah permainan slot terbaik dari pragmatic play, serta berdasarkan pada mekanik&rdquo; menang seluruh metode&rdquo; mereka.</p>\r\n\r\n<p>Slot ini mempunyai rtp default 96, 50% serta bisa di mainkan oleh banyak orang di dunia online dan dapatkan 100 kredit per putaran. ada sebagian bonus serta fitur yang di tawarkan pula, tercantum pengganda simbol, putaran free, serta, bergantung posisi, opsi pembelian bonus.</p>\r\n\r\n<h2><strong>Grafik Serta Tema Gate Of olympus</strong></h2>\r\n\r\n<p>Semacam namanya, demo gates of olympus berjudul di dunia Yunani Kuno dan seluruhnya didasarkan pada Dewa Olympus, serta kehadirannya yang kokoh. Gim ini penuh aksi, serta animasinya mencakup petir yang menghantam gulungan serta banyak lagi.</p>\r\n\r\n<p>kala berdialog tentang simbol &ndash; simbol olympus dengan bayaran lebih rendah merupakan wujud yang berbeda seperti hijau, merah, ungu.</p>\r\n\r\n<p>Simbol yang pembayarannya besar seperti, piala, cincin dan mahkota olympus.</p>\r\n\r\n<p>Permainan olympus sekarang semakin terkenal di indonesia, karena sering mengeluarkan maxwin yang di sebut jackpot.</p>\r\n\r\n<p>Sekian artikel dari kami tentang&nbsp;<strong>gate of olympus</strong>, semoga bermanfaat bagi para pemain slot demo online terbaik dan para penggemar game online terbaik, jika anda ingin mencoba langsung hubungi kami melalui link =&gt;&nbsp;</p>\r\n\r\n<p>langsung mencoba game terbaik di slot game online terbaik dan terpercaya di dunia online dengan menggunakan internet.</p>\r\n\r\n<h3><strong>Game Slot Terbaik dan Terpopuler</strong></h3>\r\n\r\n<p>Slot pragmatic adalah slot yang saat ini yang lagi banyak peminat di banding dengan slot lainnya. Karena slot ini yang sering memberikan para pemain menang banyak di judi online yang menggunakan uang asli, untuk anda yang ingin bermain slot tanpa mengeluarkan uang hanya di&nbsp;<strong>Slot Demo online</strong>&nbsp;terbaik dan terpercaya di indonesia.</p>', '2022-06-11 09:35:54', '2022-06-11 09:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `homedescs`
--

CREATE TABLE `homedescs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homedescs`
--

INSERT INTO `homedescs` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Demo Slot Pragmatic</strong>&nbsp;adalah situs game slot online terbaik dan terbesar di indonesia dengan permainan yang sangat populer. Slot Demo Bisa anda bermain melalui android, komputer dan laptop asal anda memiliki internet.</p>\r\n\r\n<h2><strong>Demo Play</strong></h2>\r\n\r\n<p><strong>Pragmatic Play</strong>&nbsp;merupakan perusahaan&nbsp;<strong>Game online</strong>&nbsp;yang berfokus pada pengembangan slot mobile dan juga aplikasi slot online. Dengan bermain menggunakan taruhan uang asli, game slot pragmatic ini sangat banyak menjadi pencarian pemain yang bermain game online.</p>\r\n\r\n<p>Terdapat banyak permainan slot dan juga Live casino yang bisa anda mainkan dari menggunakan Smartphone dan juga Live Casino. Semua permainan<strong>&nbsp;Slot demo</strong>&nbsp;juga bisa anda mainkan secara GRATIS tanpa harus deposit dan juga daftar.</p>\r\n\r\n<p>Game slot gratis yang bisa anda mainkan sebagai pengisi waktu hiburan karena tidak menggunakan deposit. Banyak permainan game slot gratis yang kami sediakan yang semua itu juga bisa membantu pemain mendapatkan pengetahuan cara bermain slot yang aman.</p>\r\n\r\n<h3><strong>Game Slot Pragmatic Terpercaya</strong></h3>\r\n\r\n<p>Tentunya dalam permainan game gratis ini anda tidak perlu mengeluarkan sepersen pun uang untuk bisa bermain. Pemain cukup menyediakan internet yang stabil untuk mendapatkan permainan yang lacar.<br />\r\nKami juga akan terus memperbaharui jenis permainan slot terbaru yang dikeluarkan oleh Pragmatic Play. Semua permainan tersebut aman dan bisa anda mainkan setiap saat dan juga anda bisa mendownload apk dari permainan slot tersebut.</p>\r\n\r\n<h3><strong>Situs Slot Demo Menggunakan Uang Asli</strong></h3>\r\n\r\n<p>Apabila anda bosan dalam bermain game&nbsp;<strong>demo slot pragmatic</strong>&nbsp;tersebut dan ingin bermain menggunakan uang asli maka bisa mengkunjungi agen pragmatic yang menyediakan layanan permainan uang asli. Untuk bisa bermain pemain tentu harus mendaftar terlebih dahulu dengan mengisikan formulir pendaftaran seperti Nama dan juga Nomor Rekening Bank.</p>\r\n\r\n<p>Semua pendaftaran tersebut GRATIS tanpa ada biaya apapun, setelah berhasil maka anda akan mendapatkan AKUN GAME. Lakukan pengisian pendaftaran dengan benar karena akan berpengaruh pada pengiriman transaksi deposit dan juga withdraw.</p>\r\n\r\n<p>Terdapat beberapa rekomendasi agen slot terpercaya yang menggunakan taruhan uang asli yang bisa anda coba. Sampai saat ini semua kemenangan yang pemain dapatkan selalu mendapatkan bayaran dan juga layanan Livechat dan respon yang cepat.</p>\r\n\r\n<h3><strong>Link Alternatif Game Slot Terpercaya</strong></h3>\r\n\r\n<p>Percayakan taruhan uang asli anda melalui agen game slot terpercaya yang juga siap membantu anda memenangkan permainan. Anda bisa memilih banyak agen yang kami rekomendasikan untuk membantu anda dalam memperoleh kemenangan yang juga mungkin belum pernah anda rasakan sebelumnya. Situs&nbsp;<strong>Slot demo</strong>&nbsp;terpercaya yang juga akan siap memberikan pengalaman bermain anda terbaru. Latihan bermain dan juga pengembangan untuk mengetahui jumlah stake yang tepat dalam memulai sebiah permainan game&nbsp;<strong>Demo slot</strong>.</p>', '2022-06-11 08:10:31', '2022-06-11 08:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2021_10_16_182353_create_permission_tables', 1),
(25, '2022_06_10_112831_create_gamelists_table', 1),
(26, '2022_06_11_134812_create_homedescs_table', 1),
(27, '2022_06_11_154448_create_views_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-06-11 08:07:05', '2022-06-11 08:07:05'),
(2, 'editor', 'web', '2022-06-11 08:07:05', '2022-06-11 08:07:05'),
(3, 'user', 'web', '2022-06-11 08:07:05', '2022-06-11 08:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@gmail.com', 1, '2022-06-11 08:07:05', '$2y$10$yRmzx5DojVl5soRnjbaZFOYV1.GvFLFprBLyYfJ3ynlQiZV1C/rJe', 't873GMN09Q', '2022-06-11 08:07:05', '2022-06-11 08:07:05'),
(2, 'Editor', 'editor', 'editor@mail.com', 0, '2022-06-11 08:07:05', '$2y$10$fOWYcnHY.STP3ipGotAQBe0ivaBU3hBGmqkSzz4DC5a3hELSZ.FcK', 'muRsAhMQxR', '2022-06-11 08:07:06', '2022-06-11 08:07:06'),
(3, 'User', 'user', 'user@mail.com', 0, '2022-06-11 08:07:06', '$2y$10$FI/IU6yOWXpBqYYZMPq3zOzD.Ookowe2dDMJyOIxcu7CL72/C8xWe', 'GteSs1qSWs', '2022-06-11 08:07:06', '2022-06-11 08:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8mb4_unicode_ci,
  `collection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gamelists`
--
ALTER TABLE `gamelists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gamelists_title_unique` (`title`),
  ADD UNIQUE KEY `gamelists_slug_unique` (`slug`);

--
-- Indexes for table `homedescs`
--
ALTER TABLE `homedescs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamelists`
--
ALTER TABLE `gamelists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homedescs`
--
ALTER TABLE `homedescs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
