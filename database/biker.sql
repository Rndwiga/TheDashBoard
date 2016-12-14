-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 07:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biker`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_serial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asset_notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `asset_model`, `asset_status`, `asset_location`, `asset_type`, `asset_serial`, `asset_tag`, `asset_user`, `asset_notes`, `contact_number`, `created_at`, `updated_at`) VALUES
(392, 'Samsung Old', 'Available', 'Head Office', 'Tablet', 'Not Captured', '00499', 'IN STORE', '', '0700000000', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(393, 'Samsung(New Version)-SM-T231', 'Available', 'Nakuru', 'Tablet', '353620075710796', '1324', 'Wellington Omuche Omondi ->Transferred', 'New Tablet. App installed. policy not signed.', '0716138764', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(394, 'Samsung(New Version)-SM-T231', 'Available', 'Kawangware', 'Tablet', '353620075697142', '1279', 'David Theuri', 'New Tablet. App not installed', '0716436871', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(395, 'Samsung(New Version)-SM-T231', 'Available', 'Nakuru', 'Tablet', '353620075701076', '1273', 'Doreen Kimonda', 'New Tablet. App installed. has cover. no policy. has sim.', '0716439517', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(396, 'Samsung(New Version)-SM-T231', 'Available', 'Rongai', 'Tablet', '353620075679272', '1324', 'vera Mandere', 'New Tablet. App not installed', '0716439451', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(397, 'Huawei', 'Available', 'Rongai', 'Tablet', 'test', 'Test', 'Test', 'Test', '0', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(398, 'Samsung(New Version)-SM-T231', 'Available', 'Head Office', 'Tablet', '353620075218147', '1262', 'Store', 'New Tablet', '0', '2016-11-08 22:01:09', '2016-11-08 22:01:09'),
(399, 'Samsung(New Version)-SM-T231', 'Available', 'Head Office', 'Tablet', '353620075676485', '1304', 'Store', 'New Tablet', '', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(400, 'Huawei', 'Retired', 'Nakuru', 'Tablet', '357368041871856', 'No tag', 'Samuel Mwaura - Dead', 'working', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(401, 'Huawei', 'Retired', 'Nakuru', 'Tablet', '356262054212119', '00514', 'Winnie Monda - old', 'working', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(402, 'Huawei', 'Retired', 'Kawangware', 'Tablet', '3.57368E+14', '475', 'Mary Okwayo', 'No Sim card', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(403, 'Samsung Old', 'Retired', 'Naivasha', 'Tablet', 'Not Captured', '534', 'Store - Ruth Njoroge', 'Working', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(404, 'Samsung Old', 'Retired', 'Head Office', 'Tablet', 'Not Captured', '00515', 'Store', 'Dead', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(405, 'Samsung(New Version)-SM-T231', 'Retired', 'Head Office', 'Tablet', '353620075679496', '1277', 'Rosemary Muyeshi ->Timothy Munyoki', 'Transferred to timothy Munyoki', '0791823160', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(406, 'Samsung Old', 'Active', 'Kisii', 'Tablet', '356262054261934/01', '1250', 'Fredrick Olick', 'COVER WORN OUT,NEED REPLACEMENT.', '0720243272', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(407, 'Huawei', 'Active', 'Kisii', 'Tablet', '3.57581E+14', '1251', 'Sheril Edith', 'Cover worn out,need replacement.', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(408, 'Huawei', 'Active', 'Kisii', 'Tablet', '3.57368E+14', '1254', 'Christine Atieno', 'The charging system has a problem.Cover worn out,need replacement.', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(409, 'Huawei', 'Active', 'Kisii', 'Tablet', '3.57581E+14', '1252', 'Wanjira Musumbi', 'COVER WORN OUT,NEED REPLACEMENT,', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(410, 'Samsung(New Version)-SM-T231', 'Active', 'Kisii', 'Tablet', '358310063202619/01', 'M00620', 'Timothy Munyoki', 'Lost', '0726465935', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(411, 'Samsung Old', 'Active', 'Muranga', 'Tablet', '356262054214727/01', '00510', 'Patrick Muriithi', 'Doesnt keep charge/missing sim card', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(412, 'Samsung Old', 'Active', 'Muranga', 'Tablet', '356262052617954/01', '00500', 'Nancy Ngigi - OLD', 'Doesnt keep charge/old cover - OLD', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(413, 'Samsung Old', 'Active', 'Kisii', 'Tablet', '356262054264995/01', '00545', 'Hannah Kamau', '  Doesnt keep charge/sim card  not working', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(414, 'Samsung(New Version)-SM-T231', 'Active', 'Gikomba', 'Tablet', '358310/06/3503743/01', 'M00616', 'Ephantus Munoka', 'Disconnected from network.', '0700000000', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(415, 'Samsung Old', 'Active', 'Gikomba', 'Tablet', '358310/06/864969/9', 'M001060', 'Eliah Pkiror', 'NO SM CARD,NO COVER', '0717186070', '2016-11-08 22:01:10', '2016-11-08 22:01:10'),
(416, 'Samsung(New Version)-SM-T231', 'Active', 'Gikomba', 'Tablet', '358310/06/867761/7', '001068', 'Roseline Muriuki', 'NO SM CARD,NO COVER', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(417, 'Samsung(New Version)-SM-T231', 'Active', 'Gikomba', 'Tablet', '358310/06/798292/7', 'M001041', 'Mirriam Muthiani', 'NO SM CARD', '0711471613', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(418, 'Samsung Old', 'Active', 'Gikomba', 'Tablet', 'Not Captured', 'M00537', 'Henry Tambo', 'Good', '0724671118', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(419, 'Samsung Old', 'Active', 'Kitengela', 'Tablet', 'Not Captured', 'M1131', 'Justin Munene', '  Missing charger', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(420, 'Huawei', 'Active', 'Kitengela', 'Tablet', 'Not Captured', 'M00603', 'Collins Yator', '  Old cover', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(421, 'Huawei', 'Active', 'Kitengela', 'Tablet', 'Not Captured', 'M00513', 'Alex Owino', '  Doesnt keep charge', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(422, 'Huawei', 'Active', 'Kitengela', 'Tablet', 'Not Captured', 'M00533', 'Mirriam Kimaru', 'ok', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(423, 'Huawei', 'Active', 'Kitengela', 'Tablet', 'Not Captured', 'M1049', 'Jones Mongare', 'ok', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(424, 'Huawei', 'Active', 'Kitengela', 'Tablet', 'Not Captured', 'M00', 'Hillary Odhiambo', 'ok', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(425, 'Samsung Old', 'Active', 'Kiambu', 'Tablet', '356262054262395/01', '1148(New)', 'Francis Waweru', 'Old Cover, Doesnt keep charge', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(426, 'Samsung Old', 'Active', 'Kiambu', 'Tablet', '352850062776275/01', '1146(New)', 'Michael Ngigi', 'Cracked Screen, missing simcard, missing charger, no cover', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(427, 'Samsung Old', 'Active', 'Kiambu', 'Tablet', '3562620542114271/01', '1147(New)', 'Teresia Wanja', 'No Cover, missing charger', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(428, 'Samsung Old', 'Active', 'Nakuru', 'Tablet', '35626205428704/01', '00530', 'Rahab Gichure', 'Simcard not working', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(429, 'Samsung Old', 'Active', 'Nakuru', 'Tablet', '356262054264649/01', '00538', 'Jared Nyantika', 'working', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(430, 'Huawei', 'Active', 'Nakuru', 'Tablet', '357581043514353', '00707', 'John Wamathai', 'working', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(431, 'Huawei', 'Active', 'Nakuru', 'Tablet', '358310/06/867648/6', '001047', 'Edwin Nyandwa', 'working', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(432, 'Samsung Old', 'Active', 'Nakuru', 'Tablet', '356262054260001/01', '00539', 'Elizabeth Mutua', 'LOST', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(433, 'Samsung(New Version)-SM-T231', 'Active', 'Donholm', 'Tablet', '3528550062716685/01', '711', 'Agnes Jepkorir', 'broken screen\r\ncharger damaged', '0700000000', '2016-11-08 22:01:11', '2016-11-08 22:01:11'),
(434, 'Samsung Old', 'Active', 'Thika', 'Tablet', '356262054264961/01', '543', 'Fredrick Kiprono', 'cracked screen,old cover,doesn?t keep charge', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(435, 'Samsung Old', 'Active', 'Thika', 'Tablet', '356262052618077/01', '494', 'Allan Kamau', 'cracked screen,missing cover,', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(436, 'Huawei', 'Active', 'Thika', 'Tablet', '3.57581E+14', '601', 'Titus Kingori', 'old cover,doesn?t keep charge', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(437, 'Samsung Old', 'Active', 'Thika', 'Tablet', '356262052618226/01', '498', 'Charles Ndungu', 'oldcover,missing head charger', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(438, 'Samsung Old', 'Active', 'Thika', 'Tablet', '356262052617855/01', '501', 'Cyrus Njuguna', 'old cover,doesn?t keep charge', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(439, 'Samsung(New Version)-SM-T231', 'Active', 'Thika', 'Tablet', '358310068017657/01', '1042', 'Yobesh Mbaka', 'ok', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(440, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', '358310064140347/01', 'M00613', 'Karanja Lydia', 'No cover. camera not clear. does not store images using musoni app.', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(441, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', '358310064048102/01', 'M00923', 'Eva Njogu', 'Needs new cover.', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(442, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', 'RS2G60D3RSV', 'No tag', 'Isaac Makori', 'Working', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(443, 'Samsung Old', 'Active', 'Kariobangi', 'Tablet', 'Not Captured', '528', 'Joseph Mwihia', 'Good. Changed ownership', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(444, 'Not Captured', 'Active', 'Kariobangi', 'Tablet', 'Not Captured', '1046', 'Felesters Ambiyo', 'Good', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(445, 'Not Captured', 'Active', 'Kariobangi', 'Tablet', 'Not Captured', '544', 'Caroline Nyambura', 'Good', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(446, 'Not Captured', 'Active', 'Kariobangi', 'Tablet', 'Not Captured', '619', 'Nixon Musyoka', 'Good', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(447, 'Not Captured', 'Active', 'Kariobangi', 'Tablet', 'Not Captured', '618', 'Everlyn Kagure ', 'Good', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(448, 'Samsung Old', 'Active', 'Kariobangi', 'Tablet', 'Not Captured', '509', 'Peter Owino', 'Good', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(449, 'Samsung Old', 'Active', 'Kawangware', 'Tablet', '356262/25/426021/7', '540', 'Ann Chepkorir', 'ok', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(450, 'Samsung Old', 'Active', 'Kawangware', 'Tablet', '3.57368E+14', '482', 'Mary Okwayo', 'No Sim card', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(451, 'Samsung Old', 'Active', 'Kawangware', 'Tablet', '356262/05/411721/9', 'n/a', 'David Theuri', 'ok', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(452, 'Samsung(New Version)-SM-T231', 'Active', 'Kawangware', 'Tablet', '3.5285E+14', '710', 'Peter Wekesa', 'Cracked screen', '0700000000', '2016-11-08 22:01:12', '2016-11-08 22:01:12'),
(453, 'Samsung Old', 'Active', 'Kawangware', 'Tablet', 'Not Captured', '00521', 'Joseph Thuo - old', 'Not Captured -OLD', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(454, 'Not Captured', 'Active', 'Zimmerman', 'Tablet', '356262054212077/01', '506', 'Philip Otema', 'Cracked screen, very old Cover', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(455, 'Not Captured', 'Active', 'Zimmerman', 'Tablet', '356262/05/426752/7', '527', 'John Mutinda', 'Cracked screen, Old cover', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(456, 'Not Captured', 'Active', 'Zimmerman', 'Tablet', '356262054257981/01', '511', 'Victor Kogei', 'Very old cover, cracked screen', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(457, 'Not Captured', 'Active', 'Zimmerman', 'Tablet', '356262054217423/01', '531', 'BM', 'Very old cover', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(458, 'Not Captured', 'Active', 'Zimmerman', 'Tablet', '358310/06/867900/1', '1053', 'Lucy Wahu', 'No sim card', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(459, 'Not Captured', 'Active', 'Zimmerman', 'Tablet', '356262054267386/01', '525', 'Purity Mworia', 'No sim card', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(460, 'Samsung Old', 'Active', 'Zimmerman', 'Tablet', '356262054284761/01', 'Not Captured', 'Not Captured', 'ok', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(461, 'Samsung(New Version)-SM-T231', 'Active', 'Donholm', 'Tablet', 'Not Captured', 'M00614', 'charity kibonge', 'missing sim card,tablet is not booting', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(462, 'Samsung(New Version)-SM-T231', 'Active', 'Donholm', 'Tablet', 'Not Captured', '1052', 'Collins nyagoto', 'missing sim card\r\nold cover\r\ndamaged cable', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(463, 'Samsung Old', 'Active', 'Thika', 'Tablet', 'Not Captured', '519', 'Edward mukora', '', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(464, 'Samsung Old', 'Active', 'Donholm', 'Tablet', 'Not Captured', '1125', 'Catherine ndinda', 'old cover\r\nno sim card\r\ncable not working', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(465, 'Samsung Old', 'Active', 'Donholm', 'Tablet', 'Not Captured', '522', 'Joab Pascaliano', 'cracked screen, old cover,', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(466, 'Samsung Old', 'Active', 'Donholm', 'Tablet', 'Not Captured', '1051', 'Beatrice cherono', 'missing sim card\r\nold cover\r\ndamaged charger', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(467, 'Acer', 'Active', 'Rongai', 'Monitor', 'Not Captured', 'M00587', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(468, 'Acer', 'Active', 'Rongai', 'CPU', 'Not Captured', 'No Tag', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(469, 'Mecer (ME-650VU)', 'Active', 'Rongai', 'UPS', 'Not Captured', 'M00585', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:13', '2016-11-08 22:01:13'),
(470, 'TP-Link', 'Active', 'Rongai', 'Router', 'Not Captured', 'No Tag', 'ALL', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(471, 'Not Captured', 'Active', 'Rongai', 'Printer', 'Not Captured', '00029', 'ALL', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(472, 'emachine', 'Active', 'Rongai', 'CPU', 'Not Captured', '00071', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(473, 'Dell', 'Active', 'Rongai', 'Monitor', 'Not Captured', '00460', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(474, 'Mecer (ME-650VU)', 'Active', 'Rongai', 'UPS', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(475, 'Not Captured', 'Active', 'Rongai', 'Camera', 'Not Captured', 'No Tag', 'ALL', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(476, 'Acer', 'Active', 'Rongai', 'Monitor', 'Not Captured', '00367', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(477, 'Acer', 'Active', 'Rongai', 'CPU', 'Not Captured', '00365', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(478, 'Mecer (ME-650VU)', 'Active', 'Rongai', 'UPS', 'Not Captured', '00366', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(479, 'Huawei', 'Active', 'Rongai', 'Tablet', 'Not Captured', '00472', 'Helen Nthuka', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(480, 'Samsung Old', 'Active', 'Rongai', 'Tablet', 'Not Captured', '1048', 'Mercy Adeba', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(481, 'Samsung Old', 'Active', 'Rongai', 'Tablet', 'Not Captured', '1044', 'Jared Opiyo', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(482, 'Samsung(New Version)-SM-T231', 'Active', 'Rongai', 'Tablet', 'Not Captured', '1065', 'Kevin Muthoka', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(483, 'Acer', 'Active', 'Kariobangi', 'Monitor', 'Not Captured', 'M00649', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:14', '2016-11-08 22:01:14'),
(484, 'Acer', 'Active', 'Kariobangi', 'Monitor', 'Not Captured', 'M00646', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(485, 'Acer', 'Active', 'Kariobangi', 'Monitor', 'Not Captured', 'M00626', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(486, 'Toshiba', 'Active', 'Kariobangi', 'Laptop', 'Not Captured', '00598', 'Fildema Muthengi', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(487, 'Acer', 'Active', 'Kariobangi', 'CPU', 'Not Captured', 'M00636', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(488, 'Acer', 'Active', 'Kariobangi', 'CPU', 'Not Captured', 'M00640', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(489, 'Acer', 'Active', 'Kariobangi', 'CPU', 'Not Captured', 'M00644', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(490, 'Acer', 'Active', 'Kariobangi', 'CPU', 'Not Captured', 'M00638', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(491, 'Acer', 'Active', 'Kariobangi', 'CPU', 'Not Captured', 'M00648', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(492, 'Acer', 'Active', 'Kariobangi', 'Keyboard', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(493, 'Acer', 'Active', 'Kariobangi', 'Keyboard', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(494, 'Acer', 'Active', 'Kariobangi', 'Keyboard', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(495, 'Kyocera', 'Active', 'Kariobangi', 'Printer', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(496, 'Acer', 'Active', 'Kariobangi', 'CPU', 'Not Captured', '00304', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(497, 'Acer', 'Active', 'Kariobangi', 'Monitor', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:15', '2016-11-08 22:01:15'),
(498, 'Not Captured', 'Active', 'Kariobangi', 'Mouse', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(499, 'HP', 'Active', 'Kariobangi', 'Printer', 'Not Captured', '00421', 'All', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(500, 'Nokia', 'Active', 'Kariobangi', 'Phone', 'Not Captured', 'No Tag', 'purity Mukiri', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(501, 'Orange', 'Active', 'Kiambu', 'Modem', 'Not Captured', 'No Tag', 'All', 'Missing', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(502, 'Cisco', 'Active', 'Kiambu', 'Router', 'FCZ191392WX', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(503, 'TP-Link', 'Active', 'Kiambu', 'Router', 'Not Captured', '1071', 'All', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(504, 'Acer', 'Active', 'Kiambu', 'Monitor', '92402101240', '00164', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(505, 'Mecer (ME-650VU)', 'Active', 'Kiambu', 'UPS', '4310311453', '00160', 'CSA', 'Not Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(506, 'Acer', 'Active', 'Kiambu', 'Keyboard', 'KBPS203287001002090B01', '1145', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(507, 'Kyocera', 'Active', 'Kiambu', 'Printer', 'Not Captured', '1147', 'All', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(508, 'Acer', 'Active', 'Kiambu', 'Monitor', '25201223142', 'M00592', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(509, 'Acer', 'Active', 'Kiambu', 'CPU', '31302457096', 'M00593', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(510, 'Mecer (ME-650VU)', 'Active', 'Kiambu', 'UPS', '24311322322', 'M00595', 'WCO', 'Not Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(511, 'Acer', 'Active', 'Kiambu', 'Keyboard', 'O3L3120017EK701', 'M00590', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(512, 'Acer', 'Active', 'Kiambu', 'Monitor', '0519351640', '00185', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(513, 'Acer', 'Active', 'Kiambu', 'CPU', '00807071227', '00186', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(514, 'Mecer (ME-650VU)', 'Active', 'Kiambu', 'UPS', '439A08619', '00187', 'WCO', 'Not Working', '0700000000', '2016-11-08 22:01:16', '2016-11-08 22:01:16'),
(515, 'Acer', 'Active', 'Kiambu', 'Keyboard', '169005106080E02', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(516, 'Toshiba', 'Active', 'Kiambu', 'Laptop', '2E058373U', 'M00621', 'SWCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(517, 'Samsung(New Version)-SM-T231', 'Active', 'Kiambu', 'Tablet', '8310/06/419221/5', '924', 'Samuel Kimaru', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(518, 'TP-Link', 'Active', 'Muranga', 'Router', 'Tp-Link', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(519, 'Cisco', 'Active', 'Muranga', 'Router', 'Cisco Router', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(520, 'Acer', 'Active', 'Muranga', 'Monitor', 'Monitor', 'M00655', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(521, 'Acer', 'Active', 'Muranga', 'Monitor', 'Monitor', 'M00693', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(522, 'Acer', 'Active', 'Muranga', 'Monitor', 'Monitor', 'M00659', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(523, 'Acer', 'Active', 'Muranga', 'CPU', 'CPU', 'M00653', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(524, 'Acer', 'Active', 'Muranga', 'CPU', 'CPU', 'M00654', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(525, 'Acer', 'Active', 'Muranga', 'CPU', 'CPU', 'M00689', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(526, 'Mecer (ME-650VU)', 'Active', 'Muranga', 'UPS', 'UPS', 'M00692', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(527, 'Mecer (ME-650VU)', 'Active', 'Muranga', 'UPS', 'UPS', 'M00657', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(528, 'Mecer (ME-650VU)', 'Active', 'Muranga', 'UPS', 'UPS', 'M00682', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(529, 'Samsung(New Version)-SM-T231', 'Active', 'Muranga', 'Tablet', 'Tablet', '1063', 'Lillian Mbuthia -> Grace Mwangi', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(530, 'Samsung Old', 'Active', 'Muranga', 'Tablet', 'Tablet', 'M00481', 'Jane', 'Working', '0700000000', '2016-11-08 22:01:17', '2016-11-08 22:01:17'),
(531, 'HP', 'Active', 'Muranga', 'Laptop', 'Laptop', 'No Tag', 'Lillian Mbuthia', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(532, 'HP', 'Active', 'Gikomba', 'Laptop', 'hp Laptop', 'M00584', 'Felix Musinga', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(533, 'Acer', 'Active', 'Gikomba', 'Monitor', 'Desktop Computer', '00132', 'Marion Munyuira', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(534, 'Mecer (ME-650VU)', 'Active', 'Gikomba', 'UPS', 'UPS', '00132', 'Marion Munyuira', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(535, 'Acer', 'Active', 'Gikomba', 'Monitor', 'Acer Desktop', '00098', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(536, 'Acer', 'Active', 'Gikomba', 'Monitor', 'Acer Desktop', '00088', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(537, 'Acer', 'Active', 'Gikomba', 'Monitor', 'Acer Desktop', '00670', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(538, 'Acer', 'Active', 'Gikomba', 'CPU', 'Acer CPU', '00094', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(539, 'Acer', 'Active', 'Gikomba', 'CPU', 'Acer CPU', '00099', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(540, 'Acer', 'Active', 'Gikomba', 'CPU', 'Acer CPU', '00089', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(541, 'Acer', 'Active', 'Gikomba', 'CPU', 'Acer CPU', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(542, 'Acer', 'Active', 'Gikomba', 'CPU', 'Acer CPU', '00089', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(543, 'Mecer (ME-650VU)', 'Active', 'Gikomba', 'UPS', 'Mecer UPS', '00090', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(544, 'Mecer (ME-650VU)', 'Active', 'Gikomba', 'UPS', 'Mecer UPS', '00105', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(545, 'Mecer (ME-650VU)', 'Active', 'Gikomba', 'UPS', 'Mecer UPS', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(546, 'Mecer (ME-650VU)', 'Active', 'Gikomba', 'UPS', 'Mecer UPS', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:18', '2016-11-08 22:01:18'),
(547, 'Huawei', 'Active', 'Donholm', 'Tablet', 'Huawei Tablet', 'M00462', 'Leonard Murithi', 'Old cover', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(548, 'Mecer', 'Active', 'Thika', 'Monitor', 'Not Captured', '261', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(549, 'Mecer (ME-650VU)', 'Active', 'Thika', 'UPS', 'Not Captured', '273', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(550, 'Mecer', 'Active', 'Thika', 'CPU', 'Not Captured', '267', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(551, 'Mecer', 'Active', 'Thika', 'Monitor', 'Not Captured', '294', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(552, 'Mecer', 'Active', 'Thika', 'UPS', 'Not Captured', '275', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(553, 'Mecer', 'Active', 'Thika', 'CPU', 'Not Captured', '269', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(554, 'Mecer', 'Active', 'Thika', 'Monitor', 'Not Captured', '260', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(555, 'Mecer (ME-650VU)', 'Active', 'Thika', 'UPS', 'Not Captured', '272', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(556, 'Mecer', 'Active', 'Thika', 'CPU', 'Not Captured', '266', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(557, 'Mecer', 'Active', 'Thika', 'CPU', 'Not Captured', '265', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(558, 'Mecer (ME-650VU)', 'Active', 'Thika', 'UPS', 'Not Captured', '276', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(559, 'Mecer', 'Active', 'Thika', 'CPU', 'Not Captured', '270', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(560, 'Mecer', 'Active', 'Thika', 'CPU', 'Not Captured', '274', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(561, 'Kyocera', 'Active', 'Machakos', 'Printer', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:19', '2016-11-08 22:01:19'),
(562, 'D-Link', 'Active', 'Machakos', 'Router', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(563, 'Orange', 'Active', 'Machakos', 'Modem', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(564, 'Acer', 'Active', 'Machakos', 'Monitor', 'Not Captured', 'M00009', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(565, 'Acer', 'Active', 'Machakos', 'Monitor', 'Not Captured', 'M00344', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(566, 'Acer', 'Active', 'Machakos', 'CPU', 'Not Captured', 'M0065', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(567, 'Acer', 'Active', 'Machakos', 'CPU', 'Not Captured', 'M00433', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(568, 'Acer', 'Active', 'Machakos', 'CPU', 'Not Captured', 'M00350', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(569, 'Mecer (ME-650VU)', 'Active', 'Machakos', 'UPS', 'Not Captured', 'No Tag', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(570, 'Mecer (ME-650VU)', 'Active', 'Machakos', 'UPS', 'Not Captured', 'M00037', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(571, 'Mecer (ME-650VU)', 'Active', 'Machakos', 'UPS', 'Not Captured', 'M00277', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(572, 'Toshiba', 'Active', 'Machakos', 'Laptop', 'Not Captured', 'M00602', 'Jessi Mbaraka', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(573, 'Huawei', 'Active', 'Machakos', 'Laptop', 'Not Captured', 'M00476', 'Jessi Mbaraka', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(574, 'Acer', 'Active', 'Machakos', 'CPU', 'Not Captured', '00200', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(575, 'Huawei', 'Active', 'Machakos', 'CPU', 'Not Captured', 'M00465', 'Moses Mukunza', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(576, 'Acer', 'Active', 'Narok', 'Monitor', 'ETLKR0D01911314D3D8501', '000300', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:20', '2016-11-08 22:01:20'),
(577, 'Acer', 'Active', 'Narok', 'CPU', 'PEC7E7Z17700217F1D2700', '00058', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(578, 'Mecer (ME-650VU)', 'Active', 'Narok', 'UPS', '241406328928', 'No Tag', 'CSA', 'Does not have enough power to sustain the CPU when there is a power shortage', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(579, 'Acer', 'Active', 'Narok', 'Keyboard', 'KBPS20P1191290000EK701', 'No Tag', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(580, 'Acer', 'Active', 'Narok', 'CPU', 'Not Captured', '00099', 'Calvince', 'Windows not installed. Serial n/o not clear.', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(581, 'Mecer (ME-650VU)', 'Active', 'Narok', 'UPS', 'Not Captured', '00095', 'Calvince', 'Working. Serial n/o erased', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(582, 'Acer', 'Active', 'Narok', 'Monitor', 'ETLKR0D0031240848D8501', '00281', 'Calvince', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(583, 'Acer', 'Active', 'Narok', 'Monitor', 'Not clear.  Snid no: 02002310785', '00120', 'John Kilili', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(584, 'Mecer (ME-650VU)', 'Active', 'Narok', 'UPS', '241406329265', 'No Tag', 'John Kilili', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(585, 'Acer', 'Active', 'Narok', 'CPU', 'P1C7E7Z1F793405E672703', '00046', 'John Kilili', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(586, 'HP', 'Active', 'Narok', 'Laptop', 'CND4340RVJ', 'M000888', 'Calvince Ochieng', 'Working.', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(587, 'Acer', 'Active', 'Kitengela', 'Monitor', 'Not Captured', '00656', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(588, 'Acer', 'Active', 'Kitengela', 'Monitor', 'Not Captured', '00351', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(589, 'Acer', 'Active', 'Kitengela', 'Monitor', 'Not Captured', '00370', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(590, 'Acer', 'Active', 'Kitengela', 'CPU', 'Not Captured', '00369', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(591, 'Acer', 'Active', 'Kitengela', 'CPU', 'Not Captured', '00683', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(592, 'Acer', 'Active', 'Kitengela', 'CPU', 'Not Captured', '00345', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:21', '2016-11-08 22:01:21'),
(593, 'Mecer (ME-650VU)', 'Active', 'Kitengela', 'UPS', 'Not Captured', '00349', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(594, 'Mecer (ME-650VU)', 'Active', 'Kitengela', 'UPS', 'Not Captured', '00375', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(595, 'Mecer (ME-650VU)', 'Active', 'Kitengela', 'UPS', 'Not Captured', '00691', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(596, 'HP', 'Active', 'Kitengela', 'Printer', 'Not Captured', '00352', 'All', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(597, 'Huawei', 'Active', 'Kitengela', 'Tablet', 'Not Captured', '0048', 'Easton', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(598, 'Toshiba', 'Active', 'Kitengela', 'Laptop', 'Not Captured', '2E045989U', 'Easton', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(599, 'Acer', 'Active', 'Kitengela', 'Monitor', 'Not Captured', '00401', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(600, 'Acer', 'Active', 'Kitengela', 'Monitor', 'Not Captured', '00402', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(601, 'Acer', 'Active', 'Kitengela', 'Monitor', 'Not Captured', '00407', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(602, 'Mecer (ME-650VU)', 'Active', 'Kitengela', 'UPS', 'Not Captured', 'No Tag', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(603, 'HP', 'Active', 'Kisii', 'Laptop', 'Laptop', 'M00622', 'Timothy Munyoki', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(604, 'Acer', 'Active', 'Kisii', 'CPU', 'Acer CPU', 'M00637', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(605, 'Mecer (ME-650VU)', 'Active', 'Kisii', 'UPS', 'Mecer UPS', 'M00631', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(606, 'Acer', 'Active', 'Kisii', 'Monitor', 'Acer', 'M00651', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(607, 'Acer', 'Active', 'Kisii', 'Keyboard', 'Acer Keyboard', 'KBPS20P24922000227K701', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(608, 'Acer', 'Active', 'Kisii', 'Keyboard', 'Acer Keyboard', 'MMLXNEE007310091284201', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:22', '2016-11-08 22:01:22'),
(609, 'Acer', 'Active', 'Kisii', 'Monitor', 'Acer Desktop', 'M00641', 'ILO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(610, 'Mecer (ME-650VU)', 'Active', 'Kisii', 'CPU', 'Mecer CPU', 'M00623', 'ILO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(611, 'Acer', 'Active', 'Kisii', 'CPU', 'Acer CPU', 'M00652', 'ILO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(612, 'Acer', 'Active', 'Kisii', 'Monitor', 'Acer Desktop', 'M00651', 'ILO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(613, 'Mecer (ME-650VU)', 'Active', 'Kisii', 'UPS', 'Mecer UPS', 'M00624', 'ILO', 'Does not hold power.Currently at headoffice.', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(614, 'Acer', 'Active', 'Kisii', 'CPU', 'Acer CPU', 'M00642', 'ILO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(615, 'Acer', 'Active', 'Kisii', 'Keyboard', 'Acer Keyboard', 'KBPS20P2492320014EK701', 'ILO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(616, 'Acer', 'Active', 'Kisii', 'Monitor', 'Acer Desktop', 'M00632', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(617, 'Mecer (ME-650VU)', 'Active', 'Kisii', 'UPS', 'Mecer UPS', 'M00623', 'WCO', 'Does hold power,currently at HQ.', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(618, 'Acer', 'Active', 'Kisii', 'CPU', 'Acer CPU', 'M00643', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(619, 'Acer', 'Active', 'Kisii', 'Keyboard', 'Acer Keyboard', 'KBPS20P249232000CDK701', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(620, 'Kyocera', 'Active', 'Kisii', 'Printer', 'Kyocera Printer', '1249', 'All', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(621, 'Huawei', 'Active', 'Naivasha', 'Tablet', 'Not Captured', '00482', 'Raphael Muchina', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(622, 'Toshiba', 'Active', 'Naivasha', 'Laptop', 'Not Captured', '548', 'Raphael Muchina', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(623, 'Mecer (ME-650VU)', 'Active', 'Naivasha', 'UPS', 'Not Captured', '00310', 'Jane ', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(624, 'Acer', 'Active', 'Naivasha', 'CPU', 'Not Captured', 'No Tag', 'Jane', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(625, 'Acer', 'Active', 'Naivasha', 'Monitor', 'Not Captured', '00311', 'Jane', 'Working', '0700000000', '2016-11-08 22:01:23', '2016-11-08 22:01:23'),
(626, 'Acer', 'Active', 'Naivasha', 'Monitor', 'Not Captured', '00300', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(627, 'Acer', 'Active', 'Naivasha', 'Monitor', 'Not Captured', '00305', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(628, 'Mecer (ME-650VU)', 'Active', 'Naivasha', 'UPS', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(629, 'Mecer (ME-650VU)', 'Active', 'Naivasha', 'UPS', 'Not Captured', '00313', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(630, 'Acer', 'Active', 'Naivasha', 'CPU', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(631, 'Acer', 'Active', 'Naivasha', 'CPU', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(632, 'Acer', 'Active', 'Naivasha', 'CPU', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(633, 'Acer', 'Active', 'Naivasha', 'CPU', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(634, 'HP', 'Active', 'Naivasha', 'Printer', 'Not Captured', '00299', 'All', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(635, 'Kyocera', 'Active', 'Naivasha', 'Printer', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(636, 'Acer', 'Active', 'Naivasha', 'Monitor', 'Not Captured', '00281', 'All', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(637, 'Acer', 'Active', 'Naivasha', 'CPU', 'Not Captured', '00288', 'All', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(638, 'Mecer (ME-650VU)', 'Active', 'Naivasha', 'UPS', 'Not Captured', '00302', 'All', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(639, 'Samsung Old', 'Active', 'Naivasha', 'Tablet', 'Not Captured', '', 'Jane Wanjiku', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(640, 'Samsung Old', 'Active', 'Naivasha', 'Tablet', 'Not Captured', '450', 'Leah Wanjiku', 'Working', '0700000000', '2016-11-08 22:01:24', '2016-11-08 22:01:24'),
(641, 'Samsung Old', 'Active', 'Naivasha', 'Tablet', '358310/06/867159/4', '1045', 'Vivian Opande', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(642, 'Samsung Old', 'Active', 'Naivasha', 'Tablet', 'Not Captured', '466', 'David Kosgey', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(643, 'HP', 'Active', 'Head Office', 'Projector', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(644, 'Dell', 'Active', 'Head Office', 'Laptop', 'Not Captured', 'No Tag', 'Ann Mwasi', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(645, 'HP', 'Active', 'Head Office', 'Laptop', 'Not Captured', 'M00557', 'Rosemary Muyeshi', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(646, 'Acer', 'Active', 'Head Office', 'Monitor', 'Not Captured', 'M0064', 'N/A', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(647, 'HP', 'Active', 'Head Office', 'Laptop', 'Not Captured', 'M00583', 'James Onyutta', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(648, 'HP', 'Active', 'Head Office', 'Printer', 'Not Captured', '00443', 'James Onyutta', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(649, 'Kyocera', 'Active', 'Head Office', 'Printer', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(650, 'HP', 'Active', 'Head Office', 'Laptop', 'Not Captured', 'No Tag', 'COO', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(651, 'HP', 'Active', 'Head Office', 'Laptop', 'Not Captured', 'M00559', 'HR', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(652, 'Acer', 'Active', 'Head Office', 'Monitor', 'Not Captured', '00035', 'Lillian', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(653, 'Mecer (ME-650VU)', 'Active', 'Head Office', 'UPS', 'Not Captured', '00444', 'Lillian', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(654, 'Acer', 'Active', 'Head Office', 'CPU', 'Not Captured', '00437', 'Lillian', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(655, 'Acer', 'Active', 'Head Office', 'CPU', 'Not Captured', 'M00548', 'All', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(656, 'Acer', 'Active', 'Head Office', 'Monitor', 'Not Captured', 'M00501', 'All', 'Working', '0700000000', '2016-11-08 22:01:25', '2016-11-08 22:01:25'),
(657, 'HP', 'Active', 'Head Office', 'Laptop', 'Not Captured', 'M00600', 'James Owino', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(658, 'Samsung Old', 'Active', 'Head Office', 'Tablet', 'Not Captured', '00529', 'Christine Atieno', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(659, 'Samsung Old', 'Active', 'Head Office', 'Tablet', 'Not Captured', '00535', 'James Onyuta', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(660, 'Huawei', 'Active', 'Head Office', 'Tablet', 'Not Captured', '00502', 'Charles Mutinda', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(661, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', 'Not Captured', 'M00617', 'Raphael Ndwiga', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(662, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', 'Not Captured', '1050', 'Gregory Makau', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(663, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', 'Not Captured', '1065', 'Pearson Njeru', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(664, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', 'Not Captured', 'Not Captured', 'Angel De Michelle', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(665, 'Huawei', 'Active', 'Head Office', 'Tablet', 'Not Captured', '00464', 'In Store', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(666, 'Acer', 'Active', 'Nakuru', 'Monitor', 'Not Captured', '00041', 'Winnie Ogega', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(667, 'Mecer', 'Active', 'Nakuru', 'Monitor', 'Not Captured', '00262', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(668, 'Mecer', 'Active', 'Nakuru', 'Monitor', 'Not Captured', '00263', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(669, 'Acer', 'Active', 'Nakuru', 'Monitor', 'Not Captured', '00685', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(670, 'Acer', 'Active', 'Nakuru', 'CPU', 'Not Captured', '00052', 'Winnei Ogega', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(671, 'Mecer (ME-650VU)', 'Active', 'Nakuru', 'CPU', 'Not Captured', '00271', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(672, 'Mecer (ME-650VU)', 'Active', 'Nakuru', 'CPU', 'Not Captured', '00268', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(673, 'Acer', 'Active', 'Nakuru', 'CPU', 'Not Captured', '00663', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:26', '2016-11-08 22:01:26'),
(674, 'Mecer (ME-650VU)', 'Active', 'Nakuru', 'UPS', 'Not Captured', 'No Tag', 'Winnie Ogega', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(675, 'Mecer (ME-650VU)', 'Active', 'Nakuru', 'UPS', 'Not Captured', '00661', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(676, 'Mecer (ME-650VU)', 'Active', 'Nakuru', 'UPS', 'Not Captured', '00681', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(677, 'Mecer (ME-650VU)', 'Active', 'Nakuru', 'UPS', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(678, 'Acer', 'Active', 'Nakuru', 'Keyboard', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(679, 'Tech-com', 'Active', 'Nakuru', 'Keyboard', 'Not Captured', 'No Tag', 'Winnei Ogega', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(680, 'Tech-com', 'Active', 'Nakuru', 'Keyboard', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(681, 'Logi-tech', 'Active', 'Nakuru', 'Keyboard', 'Not Captured', 'No Tag', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(682, 'HP', 'Active', 'Nakuru', 'Printer', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(683, 'Kyocera', 'Active', 'Nakuru', 'Printer', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(684, 'TP-Link', 'Active', 'Nakuru', 'Router', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(685, 'D-Link', 'Active', 'Nakuru', 'Network Switch', 'Not Captured', 'No Tag', 'All', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(686, 'HP', 'Active', 'Nakuru', 'Laptop', 'Not Captured', '00575', 'John Wamathai', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(687, 'Huawei', 'Active', 'Nakuru', 'Tablet', 'Not Captured', '507', 'John Wamathai', 'Dead HO', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(688, 'Acer', 'Active', 'Donholm', 'Keyboard', 'Not Captured', 'M00538', 'margaret', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(689, 'Acer', 'Active', 'Donholm', 'Monitor', 'Not Captured', '00446', 'margaret', 'Working', '0700000000', '2016-11-08 22:01:27', '2016-11-08 22:01:27'),
(690, 'Acer', 'Active', 'Donholm', 'CPU', 'Not Captured', '00756', 'Margaret', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(691, 'Mecer (ME-650VU)', 'Active', 'Donholm', 'UPS', 'Not Captured', '00428', 'margaret', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(692, 'Acer', 'Active', 'Donholm', 'Keyboard', 'Not Captured', 'M00824', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(693, 'Acer', 'Active', 'Donholm', 'Monitor', 'Not Captured', 'M00665', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(694, 'Acer', 'Active', 'Donholm', 'CPU', 'Not Captured', 'M00666', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(695, 'Mecer (ME-650VU)', 'Active', 'Donholm', 'UPS', 'Not Captured', '00679', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(696, 'Acer', 'Active', 'Donholm', 'Keyboard', 'Not Captured', 'M00667', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(697, 'Acer', 'Active', 'Donholm', 'Monitor', 'Not Captured', 'M00830', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(698, 'Acer', 'Active', 'Donholm', 'CPU', 'Not Captured', 'M00124', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(699, 'Mecer (ME-650VU)', 'Active', 'Donholm', 'UPS', 'Not Captured', '00053', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(700, 'HP', 'Active', 'Donholm', 'Laptop', 'Not Captured', 'M00828', 'Charity', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28');
INSERT INTO `inventories` (`id`, `asset_model`, `asset_status`, `asset_location`, `asset_type`, `asset_serial`, `asset_tag`, `asset_user`, `asset_notes`, `contact_number`, `created_at`, `updated_at`) VALUES
(701, 'Acer', 'Active', 'Donholm', 'Keyboard', 'Not Captured', '1101', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(702, 'Acer', 'Active', 'Donholm', 'CPU', 'Not Captured', '00104', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(703, 'Acer', 'Active', 'Donholm', 'Monitor', 'Not Captured', '00093', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(704, 'Samsung Old', 'Active', 'Zimmerman', 'Tablet', 'Not Captured', '531', 'Faith Mwatha', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(705, 'Toshiba', 'Active', 'Zimmerman', 'Laptop', 'Not Captured', 'No Tag', 'Faith Mwatha', 'Working', '0700000000', '2016-11-08 22:01:28', '2016-11-08 22:01:28'),
(706, 'Acer', 'Active', 'Zimmerman', 'Monitor', 'Not Captured', '00208', 'Margaret Muiruri', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(707, 'Mecer (ME-650VU)', 'Active', 'Zimmerman', 'UPS', 'Not Captured', '00210', 'Margaret Muiruri', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(708, 'Acer', 'Active', 'Zimmerman', 'CPU', 'Not Captured', '00209', 'Margaret Muiruri', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(709, 'Acer', 'Active', 'Zimmerman', 'Monitor', 'Not Captured', '00149', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(710, 'Acer', 'Active', 'Zimmerman', 'Monitor', 'Not Captured', '00175', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(711, 'Acer', 'Active', 'Zimmerman', 'CPU', 'Not Captured', '00176', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(712, 'Acer', 'Active', 'Zimmerman', 'CPU', 'Not Captured', '00010', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(713, 'Mecer (ME-650VU)', 'Active', 'Zimmerman', 'UPS', 'Not Captured', '00151', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(714, 'Mecer (ME-650VU)', 'Active', 'Zimmerman', 'UPS', 'Not Captured', '00177', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(715, 'Mecer (ME-650VU)', 'Active', 'Zimmerman', 'UPS', 'Not Captured', '00167', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(716, 'Mecer (ME-650VU)', 'Active', 'Zimmerman', 'UPS', 'Not Captured', 'M00558', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(717, 'Acer', 'Active', 'Zimmerman', 'Monitor', 'Not Captured', 'M00589', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(718, 'Acer', 'Active', 'Zimmerman', 'Monitor', 'Not Captured', '00158', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(719, 'Mecer (ME-650VU)', 'Active', 'Zimmerman', 'UPS', 'Not Captured', '00166', 'All', 'Working', '0700000000', '2016-11-08 22:01:29', '2016-11-08 22:01:29'),
(720, 'Acer', 'Active', 'Kawangware', 'Monitor', 'Not Captured', '00057', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(721, 'Acer', 'Active', 'Kawangware', 'CPU', 'Not Captured', '00042', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(722, 'Mecer (ME-650VU)', 'Active', 'Kawangware', 'UPS', 'Not Captured', 'M00579', 'CSA', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(723, 'Acer', 'Active', 'Kawangware', 'Monitor', 'Not Captured', '0076', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(724, 'Acer', 'Active', 'Kawangware', 'CPU', 'Not Captured', '00036', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(725, 'Mecer (ME-650VU)', 'Active', 'Kawangware', 'UPS', 'Not Captured', '00166', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(726, 'Acer', 'Active', 'Kawangware', 'CPU', 'Not Captured', 'M00578', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(727, 'Mecer (ME-650VU)', 'Active', 'Kawangware', 'UPS', 'Not Captured', '00011', 'WCO', 'Working', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(728, 'Acer', 'Active', 'Kawangware', 'Keyboard', 'Not Captured', 'M00597', 'WCO', 'In working condition', '0700000000', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(729, 'Samsung(New Version)-SM-T231', 'Active', 'Thika', 'Tablet', '353620075188225', '1310', 'Mercy Ngaine', 'New Tablet. sim sent', '0716146584', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(730, 'Samsung(New Version)-SM-T231', 'Active', 'Machakos', 'Tablet', '3536200756806217', '1269', 'Louis Julio Mukiira', 'New Tablet sim sent', '0716440450', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(731, 'Samsung(New Version)-SM-T231', 'Active', 'Machakos', 'Tablet', '353620075679066', '1307', 'Geoffrey Mulandi Muia', 'New Tablet without a simcard', '0716146187', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(732, 'Samsung(New Version)-SM-T231', 'Active', 'Muranga', 'Tablet', '353620075694750', '1302', 'Joseph Gathuthi', 'New Tablet. sim sent', '0716146493', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(733, 'Samsung(New Version)-SM-T231', 'Active', 'Kitengela', 'Tablet', '353620075707743', '1275', 'Susan  Wanjiku Njoroge', 'New Tablet sim sent', '0716146376', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(734, 'Samsung(New Version)-SM-T231', 'Active', 'Kitengela', 'Tablet', '353620075679108', '1274', 'Meshack Sila Munyao', 'New Tablet sim sent', '0716146676', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(735, 'Samsung(New Version)-SM-T231', 'Active', 'Muranga', 'Tablet', '353620075694859', '1301', 'Alex Wambua Mutua', 'New Tablet sim sent', '0791823154', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(736, 'Samsung(New Version)-SM-T231', 'Active', 'Thika', 'Tablet', '353620075675999', '1311', 'Denis Kivindu Musyoka', 'New Tablet. simcard sent', '0716146404', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(737, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075706463', '1303', 'Judy Ndungu', 'New tablet', '0716435981', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(738, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075677110', '1305', 'Anne Mwasi', 'New Tablet', '0716138107', '2016-11-08 22:01:30', '2016-11-08 22:01:30'),
(739, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075706919', '1276', 'Jared Nyantika - Lost', 'New Tablet - Lost', '0716440249', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(740, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075679256', '1278', 'Felix Musinga', 'New Tablet', '0717528072', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(741, 'Samsung(New Version)-SM-T231', 'Active', 'Nakuru', 'Tablet', '353620075714558', '1272', 'Samuel Mwaura Gatiru', 'New Tablet. App installed. policy not', '0791820231', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(742, 'Samsung(New Version)-SM-T231', 'Active', 'Nakuru', 'Tablet', '353620075679934', '1321', 'Philis Kanjau Mueni', 'New Tablet. App installed', '0791824052', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(743, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075707586', '1326', 'Amos Mwenda', 'New Tablet. policy not signed.', '0716138623', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(744, 'Samsung(New Version)-SM-T231', 'Active', 'Kisii', 'Tablet', '353620075679140', '1325', 'Wycliff Fwai', 'New Tablet. App installed. policy not signed.', '0791823156', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(745, 'Samsung(New Version)-SM-T231', 'Active', 'Zimmerman', 'Tablet', '353620075676658', '1323', 'Mary Okwayo', 'New Tablet. With the app', '0791823155', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(746, 'Samsung(New Version)-SM-T231', 'Active', 'Kiambu', 'Tablet', '353620075697233', '1313', 'Bonface Makokha', 'New Tablet, with app. Policy not signed', '0716138314', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(747, 'Samsung(New Version)-SM-T231', 'Active', 'Gikomba', 'Tablet', '353620075676385', '1322', 'Kenneth Nganga', 'New Tablet Wit app. Policy not signed', '0716138389', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(748, 'Samsung(New Version)-SM-T231', 'Active', 'Machakos', 'Tablet', '353620075712990', '1308', 'Bonface Mboleo', 'New Tablet with app. Policy not signed', '0716138615', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(749, 'Samsung(New Version)-SM-T231', 'Active', 'Kawangware', 'Tablet', '353620075679124', '1312', 'Thuo Joseph', 'New tablet with app, with simcard, with cover', '0716146019', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(750, 'Samsung(New Version)-SM-T231', 'Active', 'Kitengela', 'Tablet', '353620075678076', '1314', 'Alex Owino', 'New tablet with app', '0716138283', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(751, 'Huawei', 'Active', 'Head Office', 'Tablet', '357368041869207', '00473', 'Store', 'Huawei tablet with touch issues but responsive', '0716138862', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(752, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075680593', '1280', 'Ernest Mbitha', 'New tablet, with cover, with simcard, with app', '0716146615', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(753, 'Samsung(New Version)-SM-T231', 'Active', 'Nakuru', 'Tablet', '353620075712107', '1268', 'Winnie Moige Monda', 'New tablet. with app. with cover. policy not signed', '0791823157', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(754, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', '353620075712875', '1271', 'Stephen Omina', 'New tablet', '0716435843', '2016-11-08 22:01:31', '2016-11-08 22:01:31'),
(755, 'Samsung(New Version)-SM-T231', 'Active', 'Nakuru', 'Tablet', '353620075193134', '1266', 'Milka Chebet', 'New tablet. app installed. policy not', '0716436715', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(756, 'Samsung(New Version)-SM-T231', 'Active', 'Kisii', 'Tablet', '353620075254035', '1267', 'Sylvester Musyoka', 'New tablet. has cover. has app. policy not', '0791823159', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(757, 'Samsung(New Version)-SM-T231', 'Active', 'Kawangware', 'Tablet', '353620075710077', '1316', 'Roanald Marwanga', 'New tablet. has cover. has simcard. No policy.', '0716439568', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(758, 'Samsung(New Version)-SM-T231', 'Active', 'Kawangware', 'Tablet', '353620075222578', '1265', 'Josphat njeru', 'New tablet. has cover. has sim. no policy', '0791824046', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(759, 'Samsung(New Version)-SM-T231', 'Active', 'Donholm', 'Tablet', '353620075680031', '1327', 'Joab Pascaliano', 'New tab. Has cover. No policy. has sim.', '0716436710', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(760, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', '353620075251106', '1260', 'Calvins Ochieng', 'New tablet.has cover. has sim.no policy', '0716438316', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(761, 'Samsung(New Version)-SM-T231', 'Active', 'Zimmerman', 'Tablet', '3536200752294', '1261', 'Stephen Karinge', 'New tab. has cover.has sim. no policy', '0716146144', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(762, 'Samsung(New Version)-SM-T231', 'Active', 'Kariobangi', 'Tablet', '353620075254092', '1264', 'Michael Owino', 'New tablet. Has cover. has sim. no policy', '0791823158', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(763, 'Samsung(New Version)-SM-T231', 'Active', 'Kariobangi', 'Tablet', '353620075709533', '1318', 'Mark Langat', 'New tablet. Has sim. has cover. no policy', '0716440118', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(764, 'Samsung(New Version)-SM-T231', 'Active', 'Nakuru', 'Tablet', '353620075713436', '1059', 'Wellington Omondi', 'New tablet. has sim. has cover. no policy', '0716436786', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(765, 'Samsung(New Version)-SM-T231', 'Active', 'Muranga', 'Tablet', '353620075678845', '1319', 'Nancy Ngige', 'New tablet. Has cover. Has sim. no policy.', '0716436797', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(766, 'Samsung(New Version)-SM-T231', 'Active', 'Thika', 'Tablet', '353620075197416', '1263', 'Leonard Mbucheche -> Titus Kingori', 'New tablet. has sim. has cover. no policy.', '0716436761', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(767, 'Samsung(New Version)-SM-T231', 'Active', 'Kawangware', 'Tablet', '1270', '353620075711133', 'Denis Kinyua', 'New Tablet. has sim. has cover. no policy.', '0716138254', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(768, 'Samsung(New Version)-SM-T231', 'Active', 'Head Office', 'Tablet', '353620075711844', '1315', 'Mary Joseph', 'Temporal Tablet Assignment', '0716435841', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(769, 'Samsung(New Version)-SM-T231', 'Active', 'Gikomba', 'Tablet', 'Not Captured', 'M1322', 'Kenneth Nyaga', 'no cover', '0721811034', '2016-11-08 22:01:32', '2016-11-08 22:01:32'),
(770, 'Lenovo', 'Active', 'Gikomba', 'Laptop', 'PF0AFS55MTN80L0008QUE', 'M1138', 'Kenneth Nyaga', '', '0721811034', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(771, 'Samsung Old', 'Active', 'Gikomba', 'Tablet', '358310068652008/01', 'M1064', 'Jorum Omunametsa', 'No simcard', '0729506113', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(772, 'Samsung(New Version)-SM-T231', 'Active', 'Naivasha', 'Tablet', '35360075679322', '1309', 'Ruth Njoroge', 'New tablet with cover and', '0791737496', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(773, 'Mecer (ME-650VU)', 'Active', 'Kiambu', 'UPS', '4311403158', '00303', 'For Router', 'Working', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(774, 'Samsung(New Version)-SM-T231', 'Active', 'Naivasha', 'Tablet', '353620075689140', '1306', 'Leah Mutembei', 'New Tablet', '0', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(775, 'Mecer (ME-650VU)', 'Active', 'Kitengela', 'UPS', 'M00982', 'M00982', 'WCO', 'ups sent to kiengela', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(776, 'Samsung(New Version)-SM-T231', 'Active', 'Kisii', 'Tablet', '353620/07/567949/6', '1277', 'Timothy Munyoki', 'OK', '0726465935', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(777, 'Samsung(New Version)-SM-T231', 'Active', 'Nakuru', 'Tablet', '1061', '1061', 'John Wamathai', 'good', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(778, 'Samsung(New Version)-SM-T231', 'Active', 'Naivasha', 'Tablet', '358310/06/867646/0', '1067', 'Jane Kinyua', 'Good', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(779, 'Acer', 'Active', 'Nakuru', 'CPU', 'MK9026323', '0094', 'CSA', 'working', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(780, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', 'SM-T231', '1260', 'Calvince Ochieng', 'Working', '0727504646', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(781, 'Samsung(New Version)-SM-T231', 'Active', 'Narok', 'Tablet', 'R52H115TLZA', '1271', 'Stephen Omina', 'Working', '0728483281', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(782, 'SM-T285', 'Active', 'Kiambu', 'Tablet', '357103/07/221746/7', '1332', 'Lorna Rucha', 'new', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(783, 'SM-T285', 'Active', 'Kiambu', 'Tablet', '357103/07/129175/2', '1331', 'Marius Koech', 'New. No sim.policy not signed', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(784, 'HP', 'Active', 'Head Office', 'Laptop', 'CND6096LWC', 'CND6096LWC', 'Rosemary Muyeshi', 'New Laptop. 15-ac105nia', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(785, 'SM-T285', 'Active', 'Rongai', 'Tablet', '357103/07/128915/2', '1336', 'Rongai User ->update later', 'New tablet without policy or simcard', '', '2016-11-08 22:01:33', '2016-11-08 22:01:33'),
(786, 'SM-T285', 'Active', 'Eldoret', 'Tablet', '', '1339', 'Eldoret user', 'Eldoret user', '', '2016-11-08 22:01:34', '2016-11-08 22:01:34'),
(787, 'SM-T285', 'Active', 'Head Office', 'Tablet', '357103/07/444872/2', '1372', 'Gladys Wango', 'Simcard', '0796087604', '2016-11-08 22:01:34', '2016-11-08 22:01:34'),
(788, 'SM-T285', 'Active', 'Rongai', 'Tablet', '', '1336', 'Hellen Nthuka/hillary', '', '', '2016-11-08 22:01:34', '2016-11-08 22:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2016_11_02_122133_create_user_profiles_table', 1),
(37, '2016_11_06_090844_create_tickets_table', 1),
(40, '2016_11_06_091412_create_ticket_categories_table', 2),
(42, '2016_11_08_073738_create_inventories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_categories`
--

CREATE TABLE `ticket_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raphael Ndwiga', 'Male', 'raphndwi@gmail.com', '$2y$10$Or9y33jsdtfZ4ZfO3ObmPe1OADeULayG0s5CYrpw2vYuf08z9An42', 0, 'SYyD995frKe6KfIeigsbkvcWqNr6n4EDnRfwwprD9Yej1lGftWH76eDXdfxZ', '2016-11-06 07:09:52', '2016-11-08 21:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `dob`, `mobile`, `profile_picture`, `facebook`, `twitter`, `gplus`, `github`, `bio`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'assets/images/userProfiles/1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2016-11-08 19:33:52', '2016-11-08 19:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_ticket_id_unique` (`ticket_id`);

--
-- Indexes for table `ticket_categories`
--
ALTER TABLE `ticket_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket_categories`
--
ALTER TABLE `ticket_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
