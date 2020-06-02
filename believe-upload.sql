-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 10:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template-compact`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(12) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `konten_artikel` text NOT NULL,
  `id_kategori` int(12) NOT NULL,
  `tanggal_artikel` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(12) NOT NULL,
  `id_status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `konten_artikel`, `id_kategori`, `tanggal_artikel`, `id_user`, `id_status`) VALUES
(3, 'Percobaan pembuatan artikel beneran', '<p>Percobaan untuk pembuatan artikel yang lebih proper dan sungguh-sungguh. Disini merupakan contoh postingan yang seharusnya dibuat oleh psikolog terkait dengan apa yang seharusnya diketahui oleh semua pengguna terkait dengan bla bla yang harus mereka ke', 1, '2020-05-12 17:00:00', 18, 2),
(4, 'Percobaan karena sebelumnya terpotong', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<ol>\r\n	<li>List pertama</li>\r\n	<li>list kedua</li>\r\n	<li>list ketiga</li>\r\n	<li>dan seterusnya sampai ke list yang keempat</li>\r\n</ol>\r\n\r\n<p>Sekian dan terima kasih semoga ini tidak terpotong dan bisa sesuai dengan apaa yang seharusnya ditampilkan.</p>\r\n', 2, '2020-05-12 17:00:00', 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `id_diary` int(12) NOT NULL,
  `konten_diary` text NOT NULL,
  `tanggal_diary` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL,
  `only_psikolog` int(12) NOT NULL,
  `id_status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`id_diary`, `konten_diary`, `tanggal_diary`, `id_user`, `only_psikolog`, `id_status`) VALUES
(1, 'Hai Psikolog, Saya Google and Facebook buttons are available featuring each company\'s respective brand color. They are used on the user login and registration pages.\r\nYou can create more custom buttons by adding a new color variable in the _variables.scss file and then using the Bootstrap button variant mixin to create a new style, as demonstrated in the _buttons.scss file', '2020-05-13 07:21:10', 20, 1, 2),
(2, 'Hai netizen, saya merasa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-05-13 07:21:29', 20, 0, 2),
(3, 'Hai Psikolog, Saya Google and Facebook buttons are available featuring each company\'s respective brand color. They are used on the user login and registration pages. You can create more custom buttons by adding a new color variable in the _variables.scss file and then using the Bootstrap button variant mixin to create a new style, as demonstrated in the _buttons.scss file', '2020-06-01 08:29:04', 20, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(12) NOT NULL,
  `judul_kategori` varchar(255) NOT NULL,
  `deskripsi_kategori` varchar(255) DEFAULT NULL,
  `id_status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`, `deskripsi_kategori`, `id_status`) VALUES
(1, 'Fun fact', 'Fun Fact', 2),
(2, 'Family', 'Family', 2),
(3, 'Social life', 'Social life', 2),
(4, 'Anxiety', 'Anxiety', 2),
(5, 'Depression', 'Depression', 2),
(6, 'Worlife Balance', 'Worlife Balance', 2);

-- --------------------------------------------------------

--
-- Table structure for table `komentar_artikel`
--

CREATE TABLE `komentar_artikel` (
  `id_komentar_artikel` int(12) NOT NULL,
  `konten_komentar` text NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_artikel` int(12) NOT NULL,
  `waktu_komentar_artikel` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_artikel`
--

INSERT INTO `komentar_artikel` (`id_komentar_artikel`, `konten_komentar`, `id_user`, `id_artikel`, `waktu_komentar_artikel`) VALUES
(1, 'qwe', 20, 3, '2020-05-14 01:44:38'),
(2, 'Google and Facebook buttons are available featuring each companys respective brand color. They are used on the user login and registration pages.', 20, 4, '2020-05-14 02:00:35'),
(3, '<p>Google and Facebook buttons are available featuring each company&#39;s respective brand color. They are used on the user login and registration pages.</p>\r\n', 20, 4, '2020-05-14 02:01:25'),
(4, '<p>Google and Facebook buttons are available featuring each company&#39;s respective brand color. They are used on the user login and registration pages. Google and Facebook buttons are available featuring each company&#39;s respective brand color. They are used on the user login and registration pages. Google and Facebook buttons are available featuring each company&#39;s respective brand color. They are used on the user login and registration pages.</p>\r\n', 20, 4, '2020-05-14 02:01:48'),
(5, '<p>Saya mecoba berkomentar sebagai psikolog</p>\r\n', 18, 4, '2020-05-14 02:08:58'),
(6, '<p>percobaan</p>\r\n', 20, 3, '2020-05-17 05:27:45'),
(7, '<p>percobaan komentar sebagai psikolog lagi</p>\r\n', 18, 4, '2020-05-17 05:30:46'),
(8, '<p>test psikolog</p>\r\n', 18, 4, '2020-05-17 05:31:11'),
(9, 'komentar', 20, 3, '2020-06-01 03:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_diary`
--

CREATE TABLE `komentar_diary` (
  `id_komentar_diary` int(12) NOT NULL,
  `konten_komentar` text NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_diary` int(12) NOT NULL,
  `waktu_komentar_diary` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_diary`
--

INSERT INTO `komentar_diary` (`id_komentar_diary`, `konten_komentar`, `id_user`, `id_diary`, `waktu_komentar_diary`) VALUES
(1, '<p>test komentar di postingan diary</p>\r\n', 20, 1, '2020-05-14 02:36:21'),
(2, '<p>test koment&#39; yang kedua</p>\r\n', 20, 1, '2020-05-14 02:39:12'),
(3, '<p>percobaan koment di postingan diary sebagai psikolog</p>\r\n', 18, 1, '2020-05-14 02:43:45'),
(4, '<p>Sebagai psikolog percobaan komentar di postingan diary</p>\r\n', 18, 1, '2020-05-14 02:44:23'),
(5, '<p>test komentar diary public</p>\r\n', 20, 2, '2020-05-14 02:50:44'),
(6, '<p>komentar user</p>\r\n', 20, 1, '2020-05-16 18:23:43'),
(7, '<p>komentar psikolog</p>\r\n', 18, 2, '2020-05-16 18:23:56'),
(8, '<p>komentar psikolog 2</p>\r\n', 18, 2, '2020-05-16 18:24:46'),
(9, '<p>saya berkomentar sebagai user biasa</p>\r\n', 20, 3, '2020-05-16 18:27:32'),
(10, '<p>kalau saya berkomentar sebagai psikolog</p>\r\n', 18, 3, '2020-05-16 18:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_forum`
--

CREATE TABLE `komentar_forum` (
  `id_komentar_forum` int(12) NOT NULL,
  `konten_komentar` text NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_forum` int(12) NOT NULL,
  `waktu_komentar_forum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_forum`
--

INSERT INTO `komentar_forum` (`id_komentar_forum`, `konten_komentar`, `id_user`, `id_forum`, `waktu_komentar_forum`) VALUES
(1, '<p>test</p>\r\n', 20, 1, '2020-05-14 03:18:21'),
(2, '<p>test sebagai psikolog&#39;</p>\r\n', 18, 1, '2020-05-14 03:26:34'),
(3, '<p>test sebagai psikolog lagi</p>\r\n', 18, 1, '2020-05-14 03:27:06'),
(4, '<p>Hallo, saya psikolog believe. silahkan tulis apa yang ingin anda diskusikan seputar pendidikan disini ya. Sebisa mungkin akan saya jawab</p>\r\n', 18, 3, '2020-05-14 03:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_psikolog` int(12) NOT NULL,
  `pesan` text NOT NULL,
  `waktu_konsultasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_user`, `id_psikolog`, `pesan`, `waktu_konsultasi`) VALUES
(1, 20, 18, '<p>nama saya hidayat. saya mencoba untuk mengirim konsultasi kepada psikolog 1</p>\r\n', '2020-05-31 12:23:04'),
(2, 20, 23, '<p>Mencoba konsultasi dengan psikolog 2</p>\r\n', '2020-05-31 12:21:58'),
(3, 20, 23, '<p>Konsultasi dengan psikolog 2 sangat menyenangkan</p>\r\n', '2020-05-31 12:22:48'),
(4, 24, 18, '<p>Saya user 2 ingin melakukan konsultasi dengan psikolog 1</p>\r\n', '2020-05-31 12:22:35'),
(5, 24, 23, '<p>Saya user 2 juga ingin melakukan konsultasi dengan psikolog 2</p>\r\n', '2020-05-31 12:22:10'),
(6, 24, 23, '<p>Hai user 2 terima kasih sudah chat dengan psikolog 2</p>\r\n', '2020-05-30 19:27:47'),
(7, 24, 23, '<p>User 2, silahkan cerita apa yang bisa psikolog 2 bantu</p>\r\n', '2020-05-30 19:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `list_forum`
--

CREATE TABLE `list_forum` (
  `id_list_forum` int(12) NOT NULL,
  `nama_list_forum` varchar(255) NOT NULL,
  `deskripsi_list_forum` text DEFAULT NULL,
  `image_list_forum` varchar(100) DEFAULT NULL,
  `id_status` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_forum`
--

INSERT INTO `list_forum` (`id_list_forum`, `nama_list_forum`, `deskripsi_list_forum`, `image_list_forum`, `id_status`) VALUES
(1, 'Hubungan', 'Forum hubungan adalah Lorem ipsum lorem ipsum lorem ipsum', 'fas fa-fw fa-user', 2),
(2, 'Keluarga', 'Forum keluarga adalah Lorem ipsum lorem ipsum lorem ipsum', 'fas fa-fw fa-user', 2),
(3, 'Pendidikan', 'Forum pendidikan adalah Lorem ipsum lorem ipsum lorem ipsum', 'fas fa-fw fa-user', 2),
(4, 'Masalah umum', 'Forum masalah umum adalah Lorem ipsum lorem ipsum lorem ipsum', 'fas fa-fw fa-user', 2),
(5, 'Karir', 'Forum karir adalah Lorem ipsum lorem ipsum lorem ipsum', 'fas fa-fw fa-user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(12) NOT NULL,
  `id_list_forum` int(12) NOT NULL,
  `konten_pesan` varchar(255) NOT NULL,
  `id_user` int(12) NOT NULL,
  `waktu_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(14, 'arief hidayat', 'blackconnor78@gmail.com', 'chef.png', '$2y$10$3IqD8DGUYMtONqqObZtMIO59bKMNrXL9DZiXsIwFrx1aAB1KDoYnm', 1, 1, 1582170943),
(18, 'Psikolog 1', 'psikolog1@gmail.com', '20200228115434chef.png', '$2y$10$FXjcCALl0OVJEonaEdB.seKEBQ2dlaAHqI9Rt34ijnglkxLF/PPpW', 2, 1, 1582174136),
(20, 'user 1', 'user1@gmail.com', '20200228115434chef.png', '$2y$10$riSRspUWryHDneQYgB9AR.B6Yu7B3ZAZnuer/u3bmFGIBSW4gfISu', 3, 1, 1582522227),
(23, 'Psikolog 2', 'psikolog2@gmail.com', 'default.jpg', '$2y$10$eqB.gCtAWHyG53HYJZz1uO/XyZFAnKEiwzm1Yuo0/F0Y22ZBGRFSW', 2, 1, 1583309952),
(24, 'user 2', 'user2@gmail.com', 'default.jpg', '$2y$10$JtE9U2KXLhzjcIS8p7zbUuK9m2XgoeTfsX/MWkvnAN6cggTpyM2lm', 3, 1, 1590926271);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2),
(10, 2, 5),
(11, 1, 5),
(12, 1, 6),
(13, 3, 7),
(15, 1, 7),
(16, 3, 2),
(18, 1, 8),
(19, 1, 9),
(20, 1, 10),
(21, 1, 11),
(22, 3, 8),
(23, 3, 9),
(24, 3, 10),
(25, 3, 11),
(26, 2, 12),
(27, 2, 13),
(28, 2, 14),
(29, 2, 15),
(30, 1, 15),
(31, 1, 14),
(32, 1, 12),
(33, 1, 13),
(34, 1, 18),
(35, 1, 19),
(36, 1, 16),
(37, 1, 17),
(38, 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(8, 'Diary'),
(9, 'Artikel'),
(10, 'Forum'),
(11, 'Konsultasi'),
(12, 'Diary_psikolog'),
(13, 'Artikel_psikolog'),
(14, 'Forum_psikolog'),
(15, 'Konsultasi_psikolog'),
(16, 'Psikolog'),
(17, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Psikolog'),
(3, 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(24, 8, 'Diary Saya', 'diary/saya', 'fas fa-fw fa-folder', 1),
(25, 8, 'Diary Public', 'diary', 'fas fa-fw fa-folder', 1),
(26, 9, 'Artikel', 'artikel', 'fas fa-fw fa-folder', 1),
(27, 10, 'Forum', 'forum', 'fas fa-fw fa-folder', 1),
(28, 11, 'Konsultasi', 'konsultasi', 'fas fa-fw fa-folder', 1),
(29, 8, 'Tulis Diary', 'diary/tulis', 'fas fa-fw fa-edit', 1),
(30, 12, 'Diary Public', 'diary_psikolog', 'fas fa-fw fa-folder', 1),
(31, 13, 'Buat Artikel', 'artikel_psikolog/buat', 'fas fa-fw fa-edit', 1),
(32, 13, 'Artikel', 'artikel_psikolog', 'fas fa-fw fa-folder', 1),
(34, 14, 'Forum', 'forum_psikolog', 'fas fa-fw fa-folder', 1),
(35, 15, 'Konsultasi Masuk', 'konsultasi_psikolog/masuk', 'fas fa-fw fa-folder', 1),
(36, 16, 'List Psikolog', 'psikolog', 'fas fa-fw fa-folder', 1),
(37, 17, 'List Pengguna', 'pengguna', 'fas fa-fw fa-folder', 1),
(38, 12, 'Diary Psikolog', 'diary_psikolog/psikolog', 'fas fa-fw fa-folder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'blackconnor78@gmail.com', 'yDtc22cjr8Ck7wcWu5ernMng4pUqaYgHpZHj+kdOumg=', 1579145083),
(12, 'blackconnor78@gmail.com', 'oGsHW1JvC0Kq4Y1eJLY3lrCqjik7COvaFShrgehWII4=', 1582170943),
(21, 'photograrief@gmail.com', 'U2tXrK5zw0QXlBOLffbIAmiB76p/vXSU4zUOCE/lQzQ=', 1583309952),
(22, 'user2@gmail.com', 'mDHY9lepaHr5NgtxGhxwBw5/JB/NAbPTsXgMCVXaMQ4=', 1590926271);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id_diary`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar_artikel`
--
ALTER TABLE `komentar_artikel`
  ADD PRIMARY KEY (`id_komentar_artikel`);

--
-- Indexes for table `komentar_diary`
--
ALTER TABLE `komentar_diary`
  ADD PRIMARY KEY (`id_komentar_diary`);

--
-- Indexes for table `komentar_forum`
--
ALTER TABLE `komentar_forum`
  ADD PRIMARY KEY (`id_komentar_forum`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `list_forum`
--
ALTER TABLE `list_forum`
  ADD PRIMARY KEY (`id_list_forum`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `id_diary` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar_artikel`
--
ALTER TABLE `komentar_artikel`
  MODIFY `id_komentar_artikel` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komentar_diary`
--
ALTER TABLE `komentar_diary`
  MODIFY `id_komentar_diary` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentar_forum`
--
ALTER TABLE `komentar_forum`
  MODIFY `id_komentar_forum` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_forum`
--
ALTER TABLE `list_forum`
  MODIFY `id_list_forum` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
