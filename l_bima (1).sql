-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 02:20 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l_bima`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'OUR JOURNEY TO CREATE THE BEST COOKWARE indogdpMENCIPTAKAN CARA MEMASAK TERBAIK', '<p>Established since the 1950, PT. Logam Bima is proud to be one of the first cookware manufacturers in Indonesia, producing premium quality stainless steel and aluminum cookware and culinary utensils for both local and international market.</p>\r\n\r\n<p>Through more than 65 years of experience in the industry, the manufacturer have been producing a wide range of finest cooking and serving products, as well as to cater various types of necessities and functions for households, hotels, restaurants and catering.</p>\r\n\r\n<p>Internationally trusted for being one of the finest cookware manufacturers in the world, Bima has been exporting its excellent quality products to many different countries across the globe since the 1985. Every piece made is an interpretation of passion, art, innovation, dedication, and precision.</p>\r\n\r\n<p>The name Bima originates from a great warrior character in the Epic Story of Mahabarata, who is admired for his incredible strength, massive posture, ability to survive in any condition, and a character with dignity and integrity. He is also well known as a food enthusiast with distinctive cooking skills.</p>\r\nindogdp<p>Didirikan sejak tahun 1950, PT. Logam Bima bangga menjadi salah satu produsen peralatan masak pertama di Indonesia, menghasilkan kualitas premium stainless steel dan aluminium peralatan masak dan peralatan kuliner untuk pasar lokal dan internasional.</p>\r\n\r\n<p>Melalui lebih dari 65 tahun pengalaman di industri, produsen telah memproduksi berbagai macam memasak dan melayani produk-produk terbaik, serta untuk memenuhi berbagai jenis kebutuhan dan fungsi untuk rumah tangga, hotel, restoran dan katering.</p>\r\n\r\n<p>internasional dipercaya untuk menjadi salah satu produsen peralatan masak terbaik di dunia, Bima telah mengekspor produk-produk berkualitas yang sangat baik ke berbagai negara di seluruh dunia sejak tahun 1985. Setiap bagian dibuat adalah interpretasi gairah, seni, inovasi, dedikasi , dan presisi.</p>\r\n\r\n<p>Nama Bima berasal dari seorang prajurit karakter besar di Epic Story of Mahabarata, yang dikagumi karena kekuatannya yang luar biasa, postur besar, kemampuan untuk bertahan hidup dalam kondisi apapun, dan karakter dengan martabat dan integritas. Dia juga terkenal sebagai penggila makanan dengan keterampilan memasak khas.</p>\r\n', '2015-10-12 15:00:00', '2015-12-13 00:50:04'),
(2, 'OUR COMMITMENT FOR YOUR SATISFACTION indogdp KOMITMEN KAMI UNTUK KEPUASAN ANDA', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid magnite mporestem quiscitem harum rescien ducias et ommolor nullab int, comnisimus, quam simint ut repedit, officae perfernatur. Gent voluptio que pa quas culpa vellendam rem. Ore, ommolupid et, verfero id quosae deliquos dolor sum exerit, iur rest, sequi blabo. Et rates alibustist fuga. Libus aliquo commoluptas si volupti archil eum non dolor sum exerit eatem.</p>\r\nindogdp<p>Ulles ni officipiende et expeliquibae conseri ULPA sam, consequia dolorpor here penis maju volut ma nonse lab ium qui quam Eum qui quis mantan eos debita volupid magnite mporestem quiscitem harum rescien ducias et ommolor nullab int, comnisimus, quam Simint ut repedit, officae perfernatur . Gent voluptio que Quas pa culpa vellendam rem. Ore, et ommolupid, verfero id quosae deliquos dolor sum exerit, sisanya iur, sequi blabo. Et tarif alibustist fuga. Libus aliquo commoluptas si volupti archil Eum non dolor sum exerit eatem</p>\r\n', '2015-10-12 15:00:00', '2015-12-13 01:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'example-image.jpg',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `firstname`, `lastname`, `image`, `created_at`, `updated_at`) VALUES
(8, 'ORIGIN', 'SERIES', '1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'HERITANCE', 'SERIES', '2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'CHEFS', 'SERIES', '3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'MICHE', 'SERIES', '4.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'SPECIALITY', 'COOKWARE', '5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'GENERAL', 'IT', '6.jpg', '0000-00-00 00:00:00', '2015-10-21 20:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` int(10) UNSIGNED NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `factory_stores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_hour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_signup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `latitude`, `longitude`, `factory_stores`, `open_hour`, `contact`, `title_signup`, `description`, `created_at`, `updated_at`) VALUES
(1, '-6.1873755', '106.8468626', '<ul>\r\n	<li>JL. Arjuna no: 56-58, Bandung</li>\r\n	<li>Jawa Barat, Indonesia</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Monday-Friday 07.30 - 17.00</li>\r\n	<li>Saturday 07.30 - 13.00</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Phone: +62 22 6030313</li>\r\n	<li>Email: logam-bima@bdg.centrin.net.id</li>\r\n</ul>\r\n', 'SIGN UP TO GET LATEST NEWS AND GOOD DEALSindogdpDAFTAR UNTUK MENDAPATKAN BERITA TERBARU', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid magnite mporestem quiscitem harum rescien ducias et ommolor nullab int, comnisimus, quam simint ut repedit, officae perfernatur.</p>\nindogdp<p>Kami ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid magnite mporestem quiscitem harum rescien ducias et ommolor nullab int, comnisimus, quam simint ut repedit, officae perfernatur.</p>\n', '2015-10-12 15:00:00', '2015-12-13 04:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `term` text COLLATE utf8_unicode_ci NOT NULL,
  `sitemap` text COLLATE utf8_unicode_ci NOT NULL,
  `privacy` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `term`, `sitemap`, `privacy`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '<h2>Terms &amp; Conditions of Use</h2>\r\n\r\n<p>Welcome to the website www.bima.co.id and / or mobile applications BIMA. Please read these Terms of Use carefully. These Terms of Use govern your use of and access platform (defined below) and use the service (defined below). By accessing the Platform and / or use the Service, you agree to be bound by these Terms of Use. If you do not agree to the Terms of Use, then you do not / stop accessing and / or using the Platform or the Services. Access to and use of password protected password and / or certain areas diterlindungi on the Platform and / or use of the Service is limited to customers who have a single account. You may not obtain or attempt to obtain unauthorized access to the area of ​​Platform and / or the Services, or other information area to be protected, in any way without our permission special use. Violation of this provision is based on the violation of Indonesian law and / or legislation and regulations. If you are under 18 years old: You must obtain the consent of a parent or guardian, the reception ataupersetujuan parent / guardian to these Terms of Use as well as their agreement to take responsibility for:</p>\r\nindogdp<h2>Syarat &amp; Ketentuan Penggunaan</h2>\r\n\r\n<p>Selamat datang di website www.bima.co.id dan/atau aplikasi mobile BIMA. Silahkan membaca Syarat Penggunaan ini dengan seksama. Syarat Penggunaan ini mengatur penggunaan dan akses Platform (di definisikan di bawah) dan penggunaan layanan (di definisikan di bawah). Dengan mengakses Platform dan / atau menggunakan Layanan, Anda setuju untuk terikat dengan Syarat Penggunaan ini. Jika Anda tidak menyetujui Syarat Penggunaan ini, maka Anda jangan/berhenti mengakses dan/atau menggunakan Platform atau Layanan ini. Akses atas password dan penggunaan password dilindungi dan/atau area tertentu yang diterlindungi pada Platform dan/atau penggunaan Layanan dibatasi hanya untuk Pelanggan yang memiliki akun saja. Anda tidak diperbolehkan memperoleh atau berusaha memperoleh akses tidak sah ke area Platform dan / atau Layanan ini, atau ke area informasi lain yang dilindungi, dengan cara apapun yang tanpa ijin penggunaan khusus oleh kami. Pelanggaran terhadap ketentuan ini merupakan pelanggaran yang didasarkan pada hukum Indonesia dan / atau undang-undang dan peraturan yang berlaku. Jika Anda berusia di bawah 18 tahun: Anda harus memperoleh persetujuan dari orang tua atau wali Anda, penerimaan ataupersetujuan orang tua/wali terhadap Persyaratan Penggunaan ini beserta persetujuan mereka untuk mengambil tanggung jawab untuk:</p>\r\n', '<h2>HALLO</h2>\r\n', '<h2>We maintain the privacy of our customers very seriously and we will only collect, record, hold, store, disclose, and use your personal information as described below ..</h2>\r\n\r\n<p>Data protection is a matter of trust and privacy is very important to us. We will only use your name and information relating to you as stated in this Privacy Policy below. We will only collect information we need and we will only collect information that is relevant to the transaction between us and you. We will only store your privacy information during required by law or as long as the information is still relevant to the purpose of gathering information.</p>\r\n\r\n<p>You can visit our Platform (As described in the Terms and Conditions) and explore it without providing any personal information. During your visit to our site, your identity will remain intact and we will not be able to identify you unless you have an account on our website and sign in using your username and password. If you have comments, suggestions or complaints, you can contact us (and our Data Protection Officer) via e-mail at support@bima.co.id</p>\r\n\r\n<p>&nbsp;</p>\r\nindogdp<h2>Kami menjaga privasi pelanggan kami dengan serius dan kami hanya akan mengumpulkan, merekam, menahan, menyimpan, mengungkapkan, dan menggunakan informasi pribadi Anda seperti yang diuraikan di bawah..</h2>\r\n\r\n<p>Perlindungan data adalah masalah kepercayaan dan privasi Anda sangat penting bagi kami. Kami hanya akan menggunakan nama Anda dan informasi yang berhubungan dengan Anda sebagaimana yang dinyatakan dalam Kebijakan Privasi berikut. Kami hanya akan mengumpulkan informasi yang kami perlukan dan kami hanya akan mengumpulkan informasi yang relevan dengan transaksi antara kami dengan Anda. Kami hanya akan menyimpan informasi privasi Anda selama diwajibkan oleh hukum atau selama informasi tersebut masih relevan dengan tujuan pengumpulan informasi.</p>\r\n\r\n<p>Anda dapat mengunjungi Platform kami (Seperti yang dijelaskan pada Syarat &amp; Ketentuan) dan menjelajahinya tanpa harus memberikan informasi pribadi. Selama kunjungan Anda ke situs kami, identitas Anda akan tetap terjaga dan kami tidak akan bisa mengidentifikasi Anda kecuali Anda memiliki akun dalam situs kami dan masuk dengan menggunakan username dan password Anda. Jika Anda memiliki komentar, saran atau keluhan, Anda dapat menghubungi kami (dan Data Protection Officer kami) melalui e-mail di&nbsp;<a href="mailto:support@bima.co.id">support@bima.co.id</a></p>\r\n', 'http://www.facebook.com/bima', 'http://www.twitter.com/bima', '2015-10-14 02:00:00', '2015-12-13 01:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `messages` text COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `messages`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dwi Mustika Rahayu', 'dwi_mustika@gmail.com', '089123123123', 'Pesanan', 'Saya pesan panci ya.', '0', '2015-10-15 18:53:43', '2015-10-15 18:53:43'),
(2, 'Firmansyah', 'firman_syah@gmail.com', '089123123111', 'Pemesanan', 'Saya pesan es teh manis dua', '0', '2015-10-20 19:06:58', '2015-10-20 19:06:58'),
(3, 'Hilda Meliawati', 'hilda_meilawati@gmail.com', '089111222333', 'Pesan Panggangan', 'Saya pesan panggangan ya, dua biji.\r\nKirim ke:\r\nJln jendral sudirman no.431\r\nJakarta Pusat.', '0', '2015-10-20 19:12:30', '2015-10-20 19:12:30'),
(4, 'Fahrul Rizal', 'fazrial_fah@gmail.com', '089111111222', 'Pesan Sendok', 'Saya pesan sendok ya.', '0', '2015-10-21 21:35:36', '2015-10-21 21:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_13_113127_create_abouts_table', 1),
('2015_10_13_113942_create_factories_table', 1),
('2015_10_13_122946_create_messages_table', 1),
('2015_10_13_123248_create_masters_table', 1),
('2015_10_15_043258_create_categories_table', 1),
('2015_10_15_043321_create_products_table', 1),
('2015_10_16_043127_create_slides_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'example-image.jpg',
  `catalogue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `caption`, `description`, `image`, `catalogue`, `created_at`, `updated_at`) VALUES
(10, 8, 'PREMIERE', 'BEST SELECTION FOR YOUR DREAM KITCHEN', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '1_1.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '2015-10-21 20:49:35'),
(11, 8, 'CLASSIC', 'A SPECIAL COOKWARE FOR HOMEY KITCHEN', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '1_2.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 8, 'NON STICK', 'A FUN COOKING EXPERIENCE WITH NON STICK PANS', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '3_3.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 9, 'CLASSIC', 'DESIGNED WITH FLAWLESS HEAT CONDUCTIVITY', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '2_1.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 9, 'PRO-LITE', 'ALL-CLAD CRAFTS PREMIUM-QUALITY KITCHEN COOKWARE', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '2_2.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 10, 'ALUMINUM', 'COOK LIKE A PROFESIONAL CHEF AT HOME', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '3_1.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 10, 'STAINLESS STEEL', 'STAINLESS COOKWARE THAT MAKES YOU COOK', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '3_2.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 10, 'BLACK STEEL', 'MAKING THE PERFECT SAUCE HAS!', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '3_3.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 11, 'SERVINGWARE', 'BEST SELECTION FOR YOUR DREAM KITCHEN', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '4_1.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 11, 'TABLE TOP', 'A SPECIAL COOKWARE FOR HOMEY KITCHEN', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '4_2.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 11, 'FLATWARE', 'A FUN COOKING EXPERIENCE WITH NON STICK PANS', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '4_3.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 12, 'BAKING PAN', 'DESIGNED WITH FLAWLESS HEAT CONDUCTIVITY', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '5_1.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 12, 'BIMA SATAY', 'ALL-CLAD CRAFTS PREMIUM-QUALITY KITCHEN COOKWARE', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '5_2.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 13, 'ALUMINUM', 'THE BEST PAN IS THE PAN THAT''S RIGHT FOR YOU', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '6_1.jpg', 'catalog.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 13, 'STAINLESS STEEL', 'AN ELEGANT AND EFFECTIVE ADITION TO YOUR KITCHEN', '<p>Ulles ni officipiende et expeliquibae conseri ulpa sam, consequia dolorpor sini venis volut ma nonse lab ium qui quam eum qui quis ex eos debita volupid.</p>\r\n', '6_2.jpg', 'catalogue.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'slide-image.jpg',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Slide One', 'slide1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Slide Two', 'slide2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gugun Dwi Permana', 'gugundwipermana@gmail.com', '$2y$10$Nxvpvwz9ipBActrAUVMnZuLkpxgTKOk5jUu6WyBghgA4a9hlyojgG', 'ljhrxyNUFuB2G5Crsc364Z7nzBqsKwFatMlvY6SXo4SC9frgGlVPTeSpZALl', '2015-10-12 08:40:03', '2015-10-18 22:15:41'),
(2, 'Administrator', 'admin@bima.com', '$2y$10$q8iko2EBK18W5dt3f5JmL.wBTmfmLlsVsSw0n.opTTASQ9AS39Tai', 'O8J7vwHuVE0lf4qkEtcHsl9sgOApiNAKckPcMGwz43HLGW8hygvadYTPU9kx', '2015-10-15 21:25:02', '2015-11-02 18:47:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `messages_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
