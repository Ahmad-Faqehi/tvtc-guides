-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 11:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reared` int(11) NOT NULL DEFAULT '0',
  `date` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `reared`, `date`) VALUES
(1, 'أحمد', 'ahmad@mail.com', '55555748', 'Hello MES', 1, 0),
(2, 'علي سهة', 'ahmfsdf7@gmail.com', '123564', 'ملان يتبلال تيباللائميتباللا مئيبلمئ ايلب', 1, 0),
(3, 'سيب', 'dfsdf7@gmail.com', '', 'dfsdfsdf sd fsd', 1, 0),
(4, 'مشهور خالد', 'sfsa@mil.com', '0566552', 'وي ذات مان', 1, 0),
(5, 'سامي علي', 'lpo@mail.com', '123456', 'هاي هاي', 1, 1605294550),
(6, 'dfg dfg', 'ah54n7@gmail.com', '', 'انتا تال رتار ناىلر ىلار نا لر نتالؤرنارنتر نلرنارانلب نبنباتن', 1, 1605315768),
(7, 'kdfj', 'ahmadpsn7@gmail.com', '', 'sdrtrt v vert', 1, 1605604511);

-- --------------------------------------------------------

--
-- Table structure for table `info_list`
--

CREATE TABLE `info_list` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depart` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `supervisor` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_list`
--

INSERT INTO `info_list` (`id`, `name`, `email`, `depart`, `rank`, `supervisor`) VALUES
(1, 'هيفاء عبدالله العتيبي', 'haifa.a@tvtc.gov.sa', 'عميدة الكلية التقنية الرقمية بالرياض', 1, 0),
(2, 'أثير العمري', 'atheer.a1@tvtc.gov.sa', 'مسؤوله رايات', NULL, 0),
(3, 'ثناء الحربي', 'thalharbi@tvtc.gov.sa', 'مسؤوله الاكاديميات', NULL, 0),
(4, 'رنا الحماد', 'lmsadminRFDC@tvtc.gov.sa', 'مسؤوله بلاك بورد', NULL, 0),
(5, 'عهود ناصر المسعد', 'ahood.a@tvtc.gov.sa', 'رئيسة قسم الحاسب الآلي', NULL, 0),
(6, 'ساره خالد البغدادي', 's.albaghdadi@tvtc.gov.sa', 'رئيسة قسم الدراسات العامة', NULL, 0),
(7, 'زينب ناص الناصر', 'z.alnasser1@tvtc.gov.sa', 'وكيلة المدربات', NULL, 1),
(8, 'ملاك عبدالرحمن اليوسف', 'm.alyousef@tvtc.gov.sa', 'وكيلة المتدربات', NULL, 0),
(9, 'ملاك عبدالرحمن اليوسف', 'm.alyousef@tvtc.gov.sa', 'وكيلة المتدربات', NULL, 0),
(10, 'شهد هذال السبيعي', 'salsabiai@tvtc.gov.sa', 'وحدة التوجيه والارشاد', NULL, 0),
(11, 'تهاني شديد المطيري', 'Tahani.a2@tvtc.gov.sa', 'وحدة الصحه والسلامة المهنية', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `id` int(11) NOT NULL,
  `title` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` int(225) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `title`, `description`, `image`, `date`, `state`) VALUES
(3, 'جوال ايفون 7', 'هلا واله هذا نص جميل جدا عن ماذا لو لك  نت نتايكسبنتلا كنسيتبل ', 'iphone.jpg', 1605130201, 0),
(4, 'شنطة', '', 'bag.jpg', 1605130201, 1),
(5, 'جهاز ون بلس 7', 'عثرت على جهاز جوال ون بلس 7 برو عند البوابة الرئيسية', '1605629946-oneplus-7-pro_8_1200.jpg', 1605629950, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `to_who` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `important` int(11) NOT NULL DEFAULT '0',
  `from_who` int(11) NOT NULL,
  `reared` int(11) NOT NULL DEFAULT '0',
  `date_order` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `to_who`, `message`, `important`, `from_who`, `reared`, `date_order`) VALUES
(2, 'key', 'مرحبا لدي طلب\nيبلبيل', 1, 2, 1, 0),
(3, 'key', 'نحتاج مفتاح في الطابق الثاني', 0, 2, 1, 0),
(4, 'doctor', 'هلا بالي له الخافق يهلي', 0, 2, 1, 0),
(5, 'doctor', 'هلا بالي له الخافق يهلي', 0, 2, 1, 0),
(6, 'security', 'لماذا نحن هنا', 1, 3, 1, 0),
(7, 'doctor', 'اعاني من صداع في الانف', 0, 2, 1, 0),
(8, 'key', 'احتاج مفتاح معمل G75 في الطابق السفلي', 1, 4, 1, 0),
(9, 'key', 'يقال ان الحب اعمى ', 0, 2, 1, 0),
(10, 'doctor', 'هزم الصباح طلائع الظلماء', 0, 2, 1, 0),
(11, 'security', 'لقد رايت من لا استطيع ان اوصفه لقد كان شخصا غريب الاطوار ', 0, 2, 1, 1605147681),
(12, 'support', 'لقد سئمت من الاختبارات ف ما الحل؟', 0, 2, 1, 1605314345),
(13, 'support', 'واجب واجب واجب واجب شنوا هذا ؟؟', 1, 2, 1, 1605314981),
(14, 'support', 'kfghj fkgh', 0, 2, 1, 1605603142),
(15, 'key', 'kjfgh kfjgh ;fjhg ', 0, 2, 1, 1605604463),
(16, 'support', 'asas sdf sdfa', 1, 2, 1, 1605772477),
(17, 'security', 'sad', 0, 2, 1, 1605773145),
(18, 'security', 'مرحبا هذا اختبار', 0, 2, 1, 1605773531),
(19, 'security', 'تجربة رسالة ', 0, 2, 1, 1605773767),
(20, 'security', 'مرحبا بكم ايه الابطال', 0, 2, 0, 1605915602),
(21, 'security', 'مرحا لقد ارسلنا بنجاح', 1, 2, 0, 1605915764);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roal` int(11) NOT NULL DEFAULT '4',
  `token` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `roal`, `token`, `token_end`) VALUES
(1, 'أحمد فقيهي', 'hayder775blog@gmail.com', '$2y$10$gwXQ9sxoDDgPnHYWupKK3.iLZXW5L5ysU7QV2W1rdsOfTIS6QLR5S', 4, 'hmi04GnspE', '2020-11-21 04:14:02'),
(2, 'سعود علي', 'asd@mail.com', '$2y$10$iT7gvnv1EybDMlQ5U0Pt3.g/3ofj3PzMoO8ZggmWnKchi/1NtLuyW', 1, '', '0000-00-00 00:00:00'),
(3, 'علي يحيىش', 'asds@mail.com', '$2y$10$1JKx/VCX4C0l5y5MDwJLo.q1Smm3O2m/M6p4VaSTSQZyd76Tiup1O', 4, '', '0000-00-00 00:00:00'),
(4, 'ساره العتيبي', 'Ahmad07@protonmail.com', '$2y$10$30e/KRr1ERbagURyYIJ5XuW7OB/8p73wJLV2dtllkD5AJMKqzefZq', 2, '', '0000-00-00 00:00:00'),
(5, 'محمد جابر', 'alone@mail.com', '$2y$10$xLqoTjZD.xX1jIggOklH3.vKl9MTrIlVLvYbMy.gkVjWx8ujPj.N2', 1, '', '0000-00-00 00:00:00'),
(6, 'ديالا علي', 'ahmadpsn7@gmail.com\r\n', '$2y$10$/ziLfBeBT4Pj.19eC3XICu8nIjeHXTgmeOzxaefB4uZxTXpTfdF9q', 2, '', '0000-00-00 00:00:00'),
(7, 'سارة الوجدان', 'hayder775@gmail.com', '$2y$10$odZEz5jG.2SSgGrRJxyofe1L2CC5wYozjdNbRS4a4m9Fwvqyt474a', 2, '', '2020-11-21 05:41:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_list`
--
ALTER TABLE `info_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_who` (`from_who`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `info_list`
--
ALTER TABLE `info_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`from_who`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
