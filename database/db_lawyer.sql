-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 02:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appointment_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(225) NOT NULL,
  `lawyer_contact_number` varchar(255) NOT NULL,
  `lawyer_service` varchar(255) NOT NULL,
  `lawyer_location` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact_number` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `appoinment_date` date NOT NULL,
  `appoinment_created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `appointment_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appointment_id`, `lawyer_id`, `lawyer_name`, `lawyer_contact_number`, `lawyer_service`, `lawyer_location`, `client_id`, `client_name`, `client_contact_number`, `start_time`, `end_time`, `appoinment_date`, `appoinment_created_on`, `appointment_status`) VALUES
(1, 2, 'Lawyer  ', '+92 345 2418563', 'service', 'Karachi', 3, 'Client  ', '+92 345 2418563', '2:32 PM', '3:32 PM', '2021-02-02', '2021-02-04 17:55:13', 1),
(2, 2, 'Lawyer  ', '+92 345 2418563', 'service', 'Karachi', 3, 'Client  ', '+92 345 2418563', '10:13 PM', '11:13 PM', '2021-02-02', '2021-02-01 17:13:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `City_Id` int(11) NOT NULL,
  `City_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`City_Id`, `City_Name`) VALUES
(1, 'Aba Khel'),
(2, 'Abbotabad'),
(3, 'Abdul Hakim'),
(4, 'Ahmadabad'),
(5, 'Ahmed Pur East'),
(6, 'Ali Pur'),
(7, 'Arifwala'),
(8, 'Astore'),
(9, 'Athmuqam'),
(10, 'Attock'),
(11, 'Awaran'),
(12, 'Baddo Malhi'),
(13, 'Badin'),
(14, 'Bagh'),
(15, 'Bahawalnagar'),
(16, 'Bahawalpur'),
(17, 'Bakhshali'),
(18, 'Balakot'),
(19, 'Banda Daood Shah'),
(20, 'Bannu'),
(21, 'Barkhan'),
(22, 'Barki'),
(23, 'Batkhela'),
(24, 'Battagram'),
(25, 'Bela'),
(26, 'Bhaipheru'),
(27, 'Bhakkar'),
(28, 'Bhalwal'),
(29, 'Bhimber'),
(30, 'Buner'),
(31, 'Bunga Hayat'),
(32, 'Burewala'),
(33, 'Chagi'),
(34, 'Chakwal'),
(35, 'Chamman'),
(36, 'Charsadda'),
(37, 'Chenab Nagar'),
(38, 'Chichawatni'),
(39, 'Chilas'),
(40, 'Chiniot'),
(41, 'Chishtian'),
(42, 'Chitral'),
(43, 'Chunian'),
(44, 'D.G.Khan'),
(45, 'D.I Khan'),
(46, 'Dadu'),
(47, 'Daharki'),
(48, 'Dahranwala'),
(49, 'Dalbandin'),
(50, 'Dara Adam Khel'),
(51, 'Dargai'),
(52, 'Daska'),
(53, 'Depalpur'),
(54, 'Dera Allah Yar'),
(55, 'Dera Bugti'),
(56, 'Dera Murad Jamali'),
(57, 'Diamer'),
(58, 'Digri'),
(59, 'Dina'),
(60, 'Dir'),
(61, 'Dunya Pur'),
(62, 'Faisalabad'),
(63, 'Farooqabad'),
(64, 'Fateh Jang'),
(65, 'Fateh Pur'),
(66, 'Fortabbas'),
(67, 'Gambat'),
(68, 'Gandawah'),
(69, 'Garhi Dupatta'),
(70, 'Ghazni Khel'),
(71, 'Ghizer'),
(72, 'Ghotki'),
(73, 'Gilgit'),
(74, 'Gojra'),
(75, 'Gujar Khan'),
(76, 'Gujranwala'),
(77, 'Gujrat'),
(78, 'Gwadar'),
(79, 'Hafizabad'),
(80, 'Hala'),
(81, 'Hangu'),
(82, 'Harappa'),
(83, 'Haripur'),
(84, 'Haripur Hazara'),
(85, 'Haroonabad'),
(86, 'Hasilpur'),
(87, 'Haveli Lakha'),
(88, 'Havelian'),
(89, 'Hazro'),
(90, 'Hub'),
(91, 'Hujra Shah Muqeem'),
(92, 'Hunza'),
(93, 'Hyderabad'),
(94, 'Isa Khel'),
(95, 'Islam Garh'),
(96, 'Islamabad'),
(97, 'Jacobabad'),
(98, 'Jafarabad'),
(99, 'Jahanian'),
(100, 'Jalal Pur Jattan'),
(101, 'Jalalpur Pirwala'),
(102, 'Jampur'),
(103, 'Jamrud'),
(104, 'Jamshoro'),
(105, 'Jaranwala'),
(106, 'Jauharabad'),
(107, 'Jhal Magsi'),
(108, 'Jhang'),
(109, 'Jhelum'),
(110, 'Karachi'),
(111, 'Kabir Wala'),
(112, 'Kaghan / Naran'),
(113, 'Kahuta'),
(114, 'Kala Shah Kaku'),
(115, 'Kalam'),
(116, 'Kallar Kahar'),
(117, 'Kallar Syedan'),
(118, 'Kamalia'),
(119, 'Kamoki'),
(120, 'Kamra'),
(121, 'Kandh Kot'),
(122, 'Kandiaro'),
(123, 'Karak'),
(124, 'Karka'),
(125, 'Karor'),
(126, 'Kashmore'),
(127, 'Kasur'),
(128, 'Khair Pur'),
(129, 'Khair Pur Nathan Shah'),
(130, 'Khairabad'),
(131, 'Khanewal'),
(132, 'Khanpur'),
(133, 'Khanpur-Kpk'),
(134, 'Khar (Bajor Agency)'),
(135, 'Kharian'),
(136, 'Kharian Cantt'),
(137, 'Khushab'),
(138, 'Khuzdar'),
(139, 'Kohat'),
(140, 'Kohlu'),
(141, 'Kot Addu'),
(142, 'Kot Najibullah'),
(143, 'Kot Radha Kishan'),
(144, 'Kotli'),
(145, 'Kotri City'),
(146, 'Kundian'),
(147, 'Lahore'),
(148, 'Laki Marwat'),
(149, 'Lala Musa'),
(150, 'Lalian'),
(151, 'Larkana'),
(152, 'Lasbela'),
(153, 'Layyah'),
(154, 'Liaquat Pur'),
(155, 'Lodhran'),
(156, 'Loralai'),
(157, 'Lund Khawar'),
(158, 'Mailsi'),
(159, 'Makhdoom Rasheed'),
(160, 'Makhdum Pur Pahooran'),
(161, 'Malakand'),
(162, 'Mamukanjan'),
(163, 'Mandi Bahauddin'),
(164, 'Mansehra'),
(165, 'Mardan'),
(166, 'Mastung'),
(167, 'Matiari'),
(168, 'Matli'),
(169, 'Mian Channu'),
(170, 'Mianwali'),
(171, 'Minchanabad'),
(172, 'Mingora'),
(173, 'Miran Shah'),
(174, 'Mirpur'),
(175, 'Mirpur Khas'),
(176, 'Mirpur Mathelo'),
(177, 'Mitha Tiwana'),
(178, 'Mithi'),
(179, 'Multan'),
(180, 'Muridke'),
(181, 'Murree'),
(182, 'Muzaffarabad'),
(183, 'Muzaffargarh'),
(184, 'Nagar'),
(185, 'Nankana Sahib'),
(186, 'Narang Mandi'),
(187, 'Narowal'),
(188, 'Nasirabad'),
(189, 'Nausharo Feroz'),
(190, 'Nawabshah'),
(191, 'New Jatoi'),
(192, 'Nowshera'),
(193, 'Nushki'),
(194, 'Okara'),
(195, 'Pabbi'),
(196, 'Pak Pattan'),
(197, 'Panjgur'),
(198, 'Pano Aqil'),
(199, 'Para Chinar(Kurram Agency)'),
(200, 'Pasroor'),
(201, 'Pattoki'),
(202, 'Peshawar'),
(203, 'Phalia'),
(204, 'Phool Nagar'),
(205, 'Pind Dadan Khan'),
(206, 'Pindi Gheb'),
(207, 'Piplan'),
(208, 'Pir Baba'),
(209, 'Pir Jo Goth'),
(210, 'Pirmahal'),
(211, 'Pishin'),
(212, 'Poonch'),
(213, 'Qabula'),
(214, 'Qadirpur Raan'),
(215, 'Qila Didar Singh'),
(216, 'Qila Saifullah'),
(217, 'Qilla Abdullah'),
(218, 'Quaidabad'),
(219, 'Quetta'),
(220, 'Rahim Yar Khan'),
(221, 'Raiwind'),
(222, 'Rajan Pur'),
(223, 'Rani Pur'),
(224, 'Rasool Nagar'),
(225, 'Ratto Dero'),
(226, 'Rawalakot'),
(227, 'Rawalpindi'),
(228, 'Renala Khurd'),
(229, 'Rohri'),
(230, 'Rsalpur Cantt'),
(231, 'Sabirabad'),
(232, 'Sadiqabad'),
(233, 'Sahiwal'),
(234, 'Saidu Sharif'),
(235, 'Sambrial'),
(236, 'Sammundri'),
(237, 'Sanghar'),
(238, 'Sangla Hill'),
(239, 'Sargodha'),
(240, 'Sehwan Sharif'),
(241, 'Shah Pur Saddar'),
(242, 'Shahdad Kot'),
(243, 'Shahdad Pur'),
(244, 'Shahkot'),
(245, 'Shakar Garh'),
(246, 'Shangla'),
(247, 'Sheikhum Theh'),
(248, 'Sheikhupura'),
(249, 'Sheringal'),
(250, 'Shigar'),
(251, 'Shikarpur'),
(252, 'Shorkot Cantt'),
(253, 'Shorkot City'),
(254, 'Shujabad'),
(255, 'Sialkot'),
(256, 'Sibbi'),
(257, 'Sillanwali'),
(258, 'Skardu'),
(259, 'Sohawa'),
(260, 'Sudhanoti'),
(261, 'Sui'),
(262, 'Sukkur'),
(263, 'Swabi'),
(264, 'Swat'),
(265, 'Talagang'),
(266, 'Tandlianwala'),
(267, 'Tando Adam'),
(268, 'Tando Allah Yar'),
(269, 'Tando Jam'),
(270, 'Tando Jan Muhammad'),
(271, 'Tando Muhammad Khan'),
(272, 'Tank'),
(273, 'Taunsa Sharif'),
(274, 'Taxila'),
(275, 'Thana'),
(276, 'Tharparkar'),
(277, 'Thatta'),
(278, 'Timergara'),
(279, 'Toba Tek Singh'),
(280, 'Topi'),
(281, 'Toru'),
(282, 'Turbat'),
(283, 'Umar Kot'),
(284, 'Upper Dir'),
(285, 'Uthal'),
(286, 'Vehari'),
(287, 'Wah Cantt'),
(288, 'Wazirabad'),
(289, 'Yazman'),
(290, 'Zafarwal'),
(291, 'Zhob'),
(292, 'Ziarat');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_contact_number` varchar(255) NOT NULL,
  `client_address` text NOT NULL,
  `client_message` text NOT NULL,
  `contact_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `lawyer_id`, `client_id`, `client_name`, `client_email`, `client_contact_number`, `client_address`, `client_message`, `contact_on`, `status`) VALUES
(1, 2, 3, 'Client  ', 'client@gmail.com', '+92 345 2418563', 'House no 4/543, Shah Faisal Colony no 4, Karachi# 25', 'hello hello hello hello ???????', '2021-02-02 10:11:22', 1),
(2, 2, 5, '', '', '', '', '', '2021-02-02 10:13:05', 1),
(3, 2, 5, '', '', '', '', '', '2021-02-02 10:12:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `on_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contact_number`, `address`, `message`, `on_date`) VALUES
(1, 'Abdur Rehman', 'abdurrehman905623@gmail.com', '03452418563', 'House no 4/543, Shah Faisal Colony no 4, Karachi# 25', 'Hello Hello Hello Hello Hello Hello Hello Hello', '2021-02-04 18:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `Country_Id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `Country_Name` varchar(150) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`Country_Id`, `sortname`, `Country_Name`, `nationality`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 'Afghan', 93),
(2, 'AL', 'Albania', 'Albanian', 355),
(3, 'DZ', 'Algeria', 'Algerian', 213),
(4, 'AS', 'American Samoa', 'American Samoan', 1684),
(5, 'AD', 'Andorra', 'Andorran', 376),
(6, 'AO', 'Angola', 'Angolan', 244),
(7, 'AI', 'Anguilla', 'Anguillan', 1264),
(8, 'AQ', 'Antarctica', 'Antarctic', 33330),
(9, 'AG', 'Antigua And Barbuda', 'Antiguan or Barbudan', 1268),
(10, 'AR', 'Argentina', 'Argentine', 54),
(11, 'AM', 'Armenia', 'Armenian', 374),
(12, 'AW', 'Aruba', 'Aruban', 297),
(13, 'AU', 'Australia', 'Australian', 61),
(14, 'AT', 'Austria', 'Austrian', 43),
(15, 'AZ', 'Azerbaijan', 'Azerbaijani, Azeri', 994),
(16, 'BS', 'Bahamas The', 'Bahamian', 1242),
(17, 'BH', 'Bahrain', 'Bahraini', 973),
(18, 'BD', 'Bangladesh', 'Bangladeshi', 880),
(19, 'BB', 'Barbados', 'Barbadian', 1246),
(20, 'BY', 'Belarus', 'Belarusian', 375),
(21, 'BE', 'Belgium', 'Belgian', 32),
(22, 'BZ', 'Belize', 'Belizean', 501),
(23, 'BJ', 'Benin', 'Beninese, Beninois', 229),
(24, 'BM', 'Bermuda', 'Bermudian, Bermudan', 1441),
(25, 'BT', 'Bhutan', 'Bhutanese', 975),
(26, 'BO', 'Bolivia', 'Bolivian', 591),
(27, 'BA', 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian', 387),
(28, 'BW', 'Botswana', 'Motswana, Botswanan', 267),
(29, 'BV', 'Bouvet Island', 'Bouvet Island', 44440),
(30, 'BR', 'Brazil', 'Brazilian', 55),
(31, 'IO', 'British Indian Ocean Territory', 'BIOT', 246),
(32, 'BN', 'Brunei', 'Bruneian', 673),
(33, 'BG', 'Bulgaria', 'Bulgarian', 359),
(34, 'BF', 'Burkina Faso', 'Burkinabé', 226),
(35, 'BI', 'Burundi', 'Burundian', 257),
(36, 'KH', 'Cambodia', 'Cambodian', 855),
(37, 'CM', 'Cameroon', 'Cameroonian', 237),
(38, 'CA', 'Canada', 'Canadian', 1),
(39, 'CV', 'Cape Verde', 'Cape Verdian', 238),
(40, 'KY', 'Cayman Islands', 'Caymanian', 1345),
(41, 'CF', 'Central African Republic', 'Central African', 236),
(42, 'TD', 'Chad', 'Chadian', 235),
(43, 'CL', 'Chile', 'Chilean', 56),
(44, 'CN', 'China', 'Chinese', 86),
(45, 'CX', 'Christmas Island', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 'Cocos Island', 672),
(47, 'CO', 'Colombia', 'Colombian', 57),
(48, 'KM', 'Comoros', 'Comoran, Comorian', 269),
(49, 'CG', 'Republic Of The Congo', 'Congolese', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 'Congolese', 242),
(51, 'CK', 'Cook Islands', 'Cook Island', 682),
(52, 'CR', 'Costa Rica', 'Costa Rican', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 'Ivorian', 225),
(54, 'HR', 'Croatia (Hrvatska)', 'Croatian', 385),
(55, 'CU', 'Cuba', 'Cuban', 53),
(56, 'CY', 'Cyprus', 'Cypriot', 357),
(57, 'CZ', 'Czech Republic', 'Czech', 420),
(58, 'DK', 'Denmark', 'Danish', 45),
(59, 'DJ', 'Djibouti', 'Djiboutian', 253),
(60, 'DM', 'Dominica', 'Dominican', 1767),
(61, 'DO', 'Dominican Republic', 'Dominican', 1809),
(62, 'TP', 'East Timor', 'Timorian', 670),
(63, 'EC', 'Ecuador', 'Ecuadorian', 593),
(64, 'EG', 'Egypt', 'Egyptian', 20),
(65, 'SV', 'El Salvador', 'Salvadoran', 503),
(66, 'GQ', 'Equatorial Guinea', 'Equatorial Guinean, Equatoguinean', 240),
(67, 'ER', 'Eritrea', 'Eritrean', 291),
(68, 'EE', 'Estonia', 'Estonian', 372),
(69, 'ET', 'Ethiopia', 'Ethiopian', 251),
(70, 'XA', 'External Territories of Australia', 'Territorian', 61),
(71, 'FK', 'Falkland Islands', 'Falkland Island', 500),
(72, 'FO', 'Faroe Islands', 'Faroese', 298),
(73, 'FJ', 'Fiji Islands', 'Fijian', 679),
(74, 'FI', 'Finland', 'Finnish', 358),
(75, 'FR', 'France', 'French', 33),
(76, 'GF', 'French Guiana', 'French Guianese', 594),
(77, 'PF', 'French Polynesia', 'French Polynesian', 689),
(78, 'TF', 'French Southern Territories', 'French Southern Territories', 333333),
(79, 'GA', 'Gabon', 'Gabonese', 241),
(80, 'GM', 'Gambia The', 'Gambian', 220),
(81, 'GE', 'Georgia', 'Georgian', 995),
(82, 'DE', 'Germany', 'German', 49),
(83, 'GH', 'Ghana', 'Ghanaian', 233),
(84, 'GI', 'Gibraltar', 'Gibraltar', 350),
(85, 'GR', 'Greece', 'Greek, Hellenic', 30),
(86, 'GL', 'Greenland', 'Greenlandic', 299),
(87, 'GD', 'Grenada', 'Grenadian', 1473),
(88, 'GP', 'Guadeloupe', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 'Guamanian, Guambat', 1671),
(90, 'GT', 'Guatemala', 'Guatemalan', 502),
(91, 'XU', 'Guernsey and Alderney', 'Channel Island', 44),
(92, 'GN', 'Guinea', 'Guinean', 224),
(93, 'GW', 'Guinea-Bissau', 'Bissau-Guinean', 245),
(94, 'GY', 'Guyana', 'Guyanese', 592),
(95, 'HT', 'Haiti', 'Haitian', 509),
(96, 'HM', 'Heard and McDonald Islands', 'Heard Island or McDonald Islands', 33333),
(97, 'HN', 'Honduras', 'Honduran', 504),
(98, 'HK', 'Hong Kong S.A.R.', 'Hong Kong, Hong Kongese', 852),
(99, 'HU', 'Hungary', 'Hungarian, Magyar', 36),
(100, 'IS', 'Iceland', 'Icelandic', 354),
(101, 'IN', 'India', 'Indian', 91),
(102, 'ID', 'Indonesia', 'Indonesian', 62),
(103, 'IR', 'Iran', 'Iranian, Persian', 98),
(104, 'IQ', 'Iraq', 'Iraqi', 964),
(105, 'IE', 'Ireland', 'Irish', 353),
(106, 'IL', 'Israel', 'Israeli', 972),
(107, 'IT', 'Italy', 'Italian', 39),
(108, 'JM', 'Jamaica', 'Jamaican', 1876),
(109, 'JP', 'Japan', 'Japanese', 81),
(110, 'XJ', 'Jersey', 'Channel Island', 44),
(111, 'JO', 'Jordan', 'Jordanian', 962),
(112, 'KZ', 'Kazakhstan', 'Kazakhstani, Kazakh', 7),
(113, 'KE', 'Kenya', 'Kenyan', 254),
(114, 'KI', 'Kiribati', 'I-Kiribati', 686),
(115, 'KP', 'Korea North', 'North Korean', 850),
(116, 'KR', 'Korea South', 'South Korean', 82),
(117, 'KW', 'Kuwait', 'Kuwaiti', 965),
(118, 'KG', 'Kyrgyzstan', 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz', 996),
(119, 'LA', 'Laos', 'Lao, Laotian', 856),
(120, 'LV', 'Latvia', 'Latvian', 371),
(121, 'LB', 'Lebanon', 'Lebanese', 961),
(122, 'LS', 'Lesotho', 'Basotho', 266),
(123, 'LR', 'Liberia', 'Liberian', 231),
(124, 'LY', 'Libya', 'Libyan', 218),
(125, 'LI', 'Liechtenstein', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 'Lithuanian', 370),
(127, 'LU', 'Luxembourg', 'Luxembourg, Luxembourgish', 352),
(128, 'MO', 'Macau S.A.R.', 'Macanese, Chinese', 853),
(129, 'MK', 'Macedonia', 'Macedonian', 389),
(130, 'MG', 'Madagascar', 'Malagasy', 261),
(131, 'MW', 'Malawi', 'Malawian', 265),
(132, 'MY', 'Malaysia', 'Malaysian', 60),
(133, 'MV', 'Maldives', 'Maldivian', 960),
(134, 'ML', 'Mali', 'Malian, Malinese', 223),
(135, 'MT', 'Malta', 'Maltese', 356),
(136, 'XM', 'Man (Isle of)', 'Mans', 44),
(137, 'MH', 'Marshall Islands', 'Marshallese', 692),
(138, 'MQ', 'Martinique', 'Martiniquais, Martinican', 596),
(139, 'MR', 'Mauritania', 'Mauritanian', 222),
(140, 'MU', 'Mauritius', 'Mauritian', 230),
(141, 'YT', 'Mayotte', 'Mahoran', 269),
(142, 'MX', 'Mexico', 'Mexican', 52),
(143, 'FM', 'Micronesia', 'Micronesian', 691),
(144, 'MD', 'Moldova', 'Moldovan', 373),
(145, 'MC', 'Monaco', 'Monégasque, Monacan', 377),
(146, 'MN', 'Mongolia', 'Mongolian', 976),
(147, 'MS', 'Montserrat', 'Montenegrin', 1664),
(148, 'MA', 'Morocco', 'Moroccan', 212),
(149, 'MZ', 'Mozambique', 'Mozambican', 258),
(150, 'MM', 'Myanmar', 'Burmese', 95),
(151, 'NA', 'Namibia', 'Namibian', 264),
(152, 'NR', 'Nauru', 'Nauruan', 674),
(153, 'NP', 'Nepal', 'Nepali, Nepalese', 977),
(154, 'AN', 'Netherlands Antilles', 'Dutch, Netherlandic', 599),
(155, 'NL', 'Netherlands The', 'Dutch, Netherlandic', 31),
(156, 'NC', 'New Caledonia', 'New Caledonian', 687),
(157, 'NZ', 'New Zealand', 'New Zealand, NZ', 64),
(158, 'NI', 'Nicaragua', 'Nicaraguan', 505),
(159, 'NE', 'Niger', 'Nigerien', 227),
(160, 'NG', 'Nigeria', 'Nigerian', 234),
(161, 'NU', 'Niue', 'Niuean', 683),
(162, 'NF', 'Norfolk Island', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 'Northern Marianan', 1670),
(164, 'NO', 'Norway', 'Norwegian', 47),
(165, 'OM', 'Oman', 'Omani', 968),
(166, 'PK', 'Pakistan', 'Pakistani', 92),
(167, 'PW', 'Palau', 'Palauan', 680),
(168, 'PS', 'Palestinian Territory Occupied', 'Palestinian', 970),
(169, 'PA', 'Panama', 'Panamanian', 507),
(170, 'PG', 'Papua new Guinea', 'Papua New Guinean, Papuan', 675),
(171, 'PY', 'Paraguay', 'Paraguayan', 595),
(172, 'PE', 'Peru', 'Peruvian', 51),
(173, 'PH', 'Philippines', 'Philippine, Filipino', 63),
(174, 'PN', 'Pitcairn Island', 'Pitcairn Island', 333333),
(175, 'PL', 'Poland', 'Polish', 48),
(176, 'PT', 'Portugal', 'Portuguese', 351),
(177, 'PR', 'Puerto Rico', 'Puerto Rican', 1787),
(178, 'QA', 'Qatar', 'Qatari', 974),
(179, 'RE', 'Reunion', 'Réunionese, Réunionnais', 262),
(180, 'RO', 'Romania', 'Romanian', 40),
(181, 'RU', 'Russia', 'Russian', 70),
(182, 'RW', 'Rwanda', 'Rwandan', 250),
(183, 'SH', 'Saint Helena', 'Saint Helenian', 290),
(184, 'KN', 'Saint Kitts And Nevis', 'Kittitian or Nevisian', 1869),
(185, 'LC', 'Saint Lucia', 'Saint Lucian', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 'Saint-Pierrais or Miquelonnais', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 'Saint Vincentian, Vincentian', 1784),
(188, 'WS', 'Samoa', 'Samoan', 684),
(189, 'SM', 'San Marino', 'Sammarinese', 378),
(190, 'ST', 'Sao Tome and Principe', 'São Toméan', 239),
(191, 'SA', 'Saudi Arabia', 'Saudi, Saudi Arabian', 966),
(192, 'SN', 'Senegal', 'Senegalese', 221),
(193, 'RS', 'Serbia', 'Serbian', 381),
(194, 'SC', 'Seychelles', 'Seychellois', 248),
(195, 'SL', 'Sierra Leone', 'Sierra Leonean', 232),
(196, 'SG', 'Singapore', 'Singaporean', 65),
(197, 'SK', 'Slovakia', 'Slovak', 421),
(198, 'SI', 'Slovenia', 'Slovenian, Slovene', 386),
(199, 'XG', 'Smaller Territories of the UK', 'Smaller Territorian', 44),
(200, 'SB', 'Solomon Islands', 'Solomon Island', 677),
(201, 'SO', 'Somalia', 'Somali, Somalian', 252),
(202, 'ZA', 'South Africa', 'South African', 27),
(203, 'GS', 'South Georgia', 'South Georgia', 333333),
(204, 'SS', 'South Sudan', 'South Sudanese', 211),
(205, 'ES', 'Spain', 'Spanish', 34),
(206, 'LK', 'Sri Lanka', 'Sri Lankan', 94),
(207, 'SD', 'Sudan', 'Sudanese', 249),
(208, 'SR', 'Suriname', 'Surinamese', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 'Svalbard', 47),
(210, 'SZ', 'Swaziland', 'Swazi', 268),
(211, 'SE', 'Sweden', 'Swedish', 46),
(212, 'CH', 'Switzerland', 'Swiss', 41),
(213, 'SY', 'Syria', 'Syrian', 963),
(214, 'TW', 'Taiwan', 'Chinese, Taiwanese', 886),
(215, 'TJ', 'Tajikistan', 'Tajikistani', 992),
(216, 'TZ', 'Tanzania', 'Tanzanian', 255),
(217, 'TH', 'Thailand', 'Thai', 66),
(218, 'TG', 'Togo', 'Togolese', 228),
(219, 'TK', 'Tokelau', 'Tokelauan', 690),
(220, 'TO', 'Tonga', 'Tongan', 676),
(221, 'TT', 'Trinidad And Tobago', 'Trinidadian or Tobagonian', 1868),
(222, 'TN', 'Tunisia', 'Tunisian', 216),
(223, 'TR', 'Turkey', 'Turkish', 90),
(224, 'TM', 'Turkmenistan', 'Turkmen', 7370),
(225, 'TC', 'Turks And Caicos Islands', 'Turks and Caicos Island', 1649),
(226, 'TV', 'Tuvalu', 'Tuvaluan', 688),
(227, 'UG', 'Uganda', 'Ugandan', 256),
(228, 'UA', 'Ukraine', 'Ukrainian', 380),
(229, 'AE', 'United Arab Emirates', 'Emirati, Emirian, Emiri', 971),
(230, 'GB', 'United Kingdom', 'British, UK', 44),
(231, 'US', 'United States', 'American', 1),
(232, 'UM', 'United States Minor Outlying Islands', 'American', 1),
(233, 'UY', 'Uruguay', 'Uruguayan', 598),
(234, 'UZ', 'Uzbekistan', 'Uzbekistani, Uzbek', 998),
(235, 'VU', 'Vanuatu', 'Ni-Vanuatu, Vanuatuan', 678),
(236, 'VA', 'Vatican City State (Holy See)', 'Vatican', 39),
(237, 'VE', 'Venezuela', 'Venezuelan', 58),
(238, 'VN', 'Vietnam', 'Vietnamese', 84),
(239, 'VG', 'Virgin Islands (British)', 'British Virgin Island', 1284),
(240, 'VI', 'Virgin Islands (US)', 'U.S. Virgin Island', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 'Wallis and Futuna, Wallisian or Futunan', 681),
(242, 'EH', 'Western Sahara', 'Sahrawi, Sahrawian, Sahraouian', 212),
(243, 'YE', 'Yemen', 'Yemeni', 967),
(244, 'YU', 'Yugoslavia', 'Yugoslavian', 38),
(245, 'ZM', 'Zambia', 'Zambian', 260),
(246, 'ZW', 'Zimbabwe', 'Zimbabwean', 263);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_details`
--

CREATE TABLE `lawyer_details` (
  `lawyer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lawyer_types` varchar(255) NOT NULL,
  `lawyer_types_other` varchar(255) NOT NULL,
  `lawyer_image` varchar(255) NOT NULL,
  `short_about_me` text NOT NULL,
  `about_me` text NOT NULL,
  `lawyer_location` varchar(255) NOT NULL,
  `lawyer_casses_done` varchar(255) NOT NULL,
  `lawyer_contact_countrycode` varchar(255) NOT NULL,
  `lawyer_contact_mobilecode` varchar(255) NOT NULL,
  `lawyer_contact_number` varchar(255) NOT NULL,
  `lawyer_email` varchar(255) NOT NULL,
  `lawyer_skype` varchar(255) NOT NULL,
  `lawyer_website` varchar(255) NOT NULL,
  `lawyer_facebook` text NOT NULL,
  `lawyer_twitter` text NOT NULL,
  `lawyer_youtube` text NOT NULL,
  `lawyer_googleplus` text NOT NULL,
  `lawyer_linkedin` text NOT NULL,
  `lawyer_personal_statement` text NOT NULL,
  `service1` varchar(255) NOT NULL,
  `service1Detail` text NOT NULL,
  `service1_Icon` varchar(255) NOT NULL,
  `service2` varchar(255) NOT NULL,
  `service2Detail` varchar(255) NOT NULL,
  `service2_Icon` varchar(255) NOT NULL,
  `service3` varchar(255) NOT NULL,
  `service3Detail` varchar(255) NOT NULL,
  `service3_Icon` varchar(255) NOT NULL,
  `service4` varchar(255) NOT NULL,
  `service4Detail` varchar(255) NOT NULL,
  `service4_Icon` varchar(255) NOT NULL,
  `service5` varchar(255) NOT NULL,
  `service5Detail` varchar(255) NOT NULL,
  `service5_Icon` varchar(255) NOT NULL,
  `service6` varchar(255) NOT NULL,
  `service6Detail` varchar(255) NOT NULL,
  `service6_Icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_details`
--

INSERT INTO `lawyer_details` (`lawyer_id`, `user_id`, `lawyer_types`, `lawyer_types_other`, `lawyer_image`, `short_about_me`, `about_me`, `lawyer_location`, `lawyer_casses_done`, `lawyer_contact_countrycode`, `lawyer_contact_mobilecode`, `lawyer_contact_number`, `lawyer_email`, `lawyer_skype`, `lawyer_website`, `lawyer_facebook`, `lawyer_twitter`, `lawyer_youtube`, `lawyer_googleplus`, `lawyer_linkedin`, `lawyer_personal_statement`, `service1`, `service1Detail`, `service1_Icon`, `service2`, `service2Detail`, `service2_Icon`, `service3`, `service3Detail`, `service3_Icon`, `service4`, `service4Detail`, `service4_Icon`, `service5`, `service5Detail`, `service5_Icon`, `service6`, `service6Detail`, `service6_Icon`) VALUES
(1, 2, 'Criminal Lawyer', '', 'images/lawyers/LawyerImage60105d8f9884f3.61354347.jpg', 'This is a tested lawyer page, I want to speak English, I understand your project, My name is Abdur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare malesuada a mauris.', 'Karachi', '26', '92', '345', '2418563', 'email@gmail.com', 'https://join.skype.com/invite/dTwzt6fxHMvB', 'https://abdur.design/index.php', 'https://www.facebook.com/CarryDeol', 'https://twitter.com/CarryMinati?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.youtube.com/channel/UCj22tfcQrWG7EMEKS0qLeEg', 'https://plus.google.com/+WheelingIslandCasino/posts', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere scelerisque justo id feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In vel sem augue. Nullam imperdiet fringilla blandit. Ut ipsum nulla, viverra vitae tincidunt quis, ullamcorper quis ex. Aenean molestie dictum odio, vel molestie metus consequat fringilla. Fusce efficitur rutrum nisl, at mollis velit faucibus vitae. Maecenas quis malesuada dolor. Donec ornare blandit auctor.', 'service', 'service service service', 'fa fa-heartbeat', 'service', 'service service service', 'fa fa-shield', 'service', 'service service service', 'fa fa-ambulance', 'service', 'service service service', 'fa fa-male', 'service', 'service service service', 'fa fa-beer', '', '', ''),
(2, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 6, 'Personal Lawyer', '', 'images/lawyers/LawyerImage60198c88733083.93773109.jpg', 'Zaki Ahmed, Senior Partner, B.A. LL.B. University of Karachi, Advocate Supreme Court of Pakistan', 'Zaki Ahmed, Senior Partner, B.A. LL.B. University of Karachi, Advocate Supreme Court of Pakistan was called to the Bar in . He has served as Hon. Secretary of the High Court Bar Library for several years and was also Hon. Secretary of the Karachi Bar Association . Mr. Ahmed specializes in Arbitration, Litigation and Dispute Management and Business Startup and Reconstruction and In', 'Karachi', '31', '244', '308', '8977766', 'zakiahmed@gmail.com', '', '', '', '', '', '', '', 'Zaki Ahmed, Senior Partner, B.A. LL.B. University of Karachi, Advocate Supreme Court of Pakistan was called to the Bar in . He has served as Hon. Secretary of the High Court Bar Library for several years and was also Hon. Secretary of the Karachi Bar Association . Mr. Ahmed specializes in Arbitration, Litigation and Dispute Management and Business Startup and Reconstruction and Insolvency.', 'Personal injury', 'car accidents,road accidents,natural disasters', 'fa fa-ambulance', 'Litigation', 'probably the best lawyer for litigation purpose', 'fa fa-beer', 'Criminal Defence', 'to defence the criminal act', 'fa fa-shield', '', '', '', '', '', '', '', '', ''),
(4, 7, 'Personal Lawyer', '', 'images/lawyers/LawyerImage601993b9c6bdc7.36943193.jpg', 'Barrister Masooma Jaffer of the Honble Society of the Middle Temple,', 'Barrister Masooma Jaffer of the Honble Society of the Middle Temple, Senior Associate, earned her LL.M. degree from St. Catherines College, University of Cambridge.  She has also worked as a Research Assistant at the Institute of Advance Legal Studies, London and RIAALAW between two thousand two and two thousand six .  She joined the Firm in two thousand seve and specializes in transaction work.', 'Lahore', '12', '376', '304', '3985093', 'masoomajaffer@gmail.com', '', '', '', '', '', '', '', 'Barrister Masooma Jaffer of the Honble Society of the Middle Temple, Senior Associate, earned her LL.M. degree from St. Catherines College, University of Cambridge.  She has also worked as a Research Assistant at the Institute of Advance Legal Studies, London and riaalaw between two thousand two and two thousand six .  She joined the Firm in two thousand seve and specializes in transaction work.', 'Barrister', 'Can handke youe serious concerns at large scale', 'fa fa-female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 8, 'Tax Lawyer', '', 'images/lawyers/LawyerImage6019988dcb44c7.29283134.jpg', 'Bilal Channah, the Senior Associate, earned his LL.B. Hons. from the University of London', 'Bilal Channah, Senior Associate, earned his LL.B. Hons. from the University of London and completed his LLM and LPC from the University of Law, London. He specializes in business startups and corporate and commercial law advisory matters.', 'Islamabad', '34', '880', '315', '2342390', 'bilalchannah@gmail.com', '', '', '', '', '', '', '', 'Bilal Channah, Senior Associate, earned his LL.B. Hons. from the University of London and completed his LLM and LPC from the University of Law, London. He specializes in business startups and corporate and commercial law advisory matters.', 'Tax Lawyer', 'Bilal Channah is Decent Lawyer for your all kind of Tax concerns', 'fa fa-male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 9, 'Contract Lawyer', '', 'images/lawyers/LawyerImage60199d818932c2.59285150.jpg', 'Jawad A. Sarwana, Partner and Advocate Supreme Court', 'Jawad A. Sarwana, Partner and Advocate Supreme Court, earned his undergraduate degree from USA and his professional law degree from the University of Buckingham, England.  His practice involves advising foreign clients on a range of international transaction work in Pakistan as well as local litigation, and International ADR work.  Mr. Sarwana is an international commercial negotiations trainer.', 'Quetta', '41', '374', '312', '4643262', 'jawadsarwana@gmail.com', '', '', '', '', '', '', '', 'Jawad A. Sarwana, Partner and Advocate Supreme Court, earned his undergraduate degree from USA and his professional law degree from the University of Buckingham, England.  His practice involves advising foreign clients on a range of international transaction work in Pakistan as well as local litigation, and International ADR work.  Mr. Sarwana is an international commercial negotiations trainer.', 'Contract Lawyer', 'it is better to sign a contract before doing any kind of partnership,mutual work  etc,', 'fa fa-shield', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_code`
--

CREATE TABLE `mobile_code` (
  `id` int(11) NOT NULL,
  `mobile_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_code`
--

INSERT INTO `mobile_code` (`id`, `mobile_code`) VALUES
(1, 300),
(2, 301),
(3, 302),
(4, 303),
(5, 304),
(6, 305),
(7, 306),
(8, 307),
(9, 308),
(10, 309),
(11, 310),
(12, 311),
(13, 312),
(14, 313),
(15, 314),
(16, 315),
(17, 316),
(18, 317),
(19, 318),
(20, 319),
(21, 320),
(22, 321),
(23, 322),
(24, 323),
(25, 324),
(26, 325),
(27, 326),
(28, 327),
(29, 328),
(30, 329),
(31, 330),
(32, 331),
(33, 332),
(34, 333),
(35, 334),
(36, 335),
(37, 336),
(38, 337),
(39, 338),
(40, 339),
(41, 340),
(42, 341),
(43, 342),
(44, 343),
(45, 344),
(46, 345),
(47, 346),
(48, 347),
(49, 348),
(50, 349);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `lawyer_email` varchar(255) NOT NULL,
  `lawyer_message` text NOT NULL,
  `lawyer_reply_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services_icons`
--

CREATE TABLE `services_icons` (
  `id` int(11) NOT NULL,
  `icons` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_icons`
--

INSERT INTO `services_icons` (`id`, `icons`) VALUES
(1, 'fa fa-heartbeat'),
(2, 'fa fa-shield'),
(3, 'fa fa-ambulance'),
(4, 'fa fa-male'),
(5, 'fa fa-beer'),
(6, 'fa fa-female'),
(7, 'fa fa-car'),
(8, 'fa fa-code'),
(9, 'fa fa-motorcycle');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob_day` int(11) NOT NULL,
  `dob_month` varchar(255) NOT NULL,
  `dob_year` int(11) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `cnic_type` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mailing_address` text NOT NULL,
  `country_code` int(11) NOT NULL,
  `mobile_code` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `highest_qualification` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `specialization_other` varchar(255) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `future_plan` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `experience_level` varchar(255) NOT NULL,
  `job_city` varchar(255) NOT NULL,
  `salary_income` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `date`, `image`, `first_name`, `middle_name`, `last_name`, `gender`, `dob_day`, `dob_month`, `dob_year`, `cnic`, `cnic_type`, `country`, `nationality`, `city`, `mailing_address`, `country_code`, `mobile_code`, `number`, `highest_qualification`, `specialization`, `specialization_other`, `current_status`, `future_plan`, `employment_status`, `experience_level`, `job_city`, `salary_income`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin905623', 'Admin', '2021-02-03 09:34:39', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 1),
(2, 'lawyer', 'lawyer@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-05 13:30:58', 'images/profile_images/image60151f5ae8dda9.60769765.png', 'Lawyer', '', '', 'male', 4, 'March', 2001, '4220103686585', 'yes', 'Pakistan', 'Pakistani', 'Karachi', 'House no 4/543, Shah Faisal Colony no 4, Karachi# 25', 92, 345, '2418563', 'MS/M.Phil', 'Physical Science', '', 'Student', 'Freelancing', '', '', '', '', 1),
(3, 'client', 'client@gmail.com', 'Client905623', 'Client', '2021-02-05 00:58:27', 'images/profile_images/image601c97d57b3533.04295060.png', 'Client', '', '', 'male', 4, 'March', 2001, '4222037362856', 'yes', 'Pakistan', 'Pakistani', 'Karachi', 'House no 4/543, Shah Faisal Colony no 4, Karachi# 25', 92, 345, '2418563', 'Middle', '', '', 'Student', 'Freelancing', '', '', '', '', 1),
(4, 'ahtisham', 'abdurrehman905623@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-05 13:31:08', '', 'Muhammad', 'Ahtisham', 'Hassan', 'male', 6, 'June', 2001, '6546546464654', 'yes', 'Pakistan', 'nationality', 'Karachi', 'House no 4/543, Shah Faisal Colony No 4, Karachi# 25', 92, 345, '2418563', 'Middle', '', '', 'Student', 'Job', '', '', '', '', 0),
(5, 'sample', 'admin@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-03 19:04:10', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 1),
(6, 'Zaki Ahmed', 'zakiahmed@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-03 08:04:54', 'images/profile_images/image60198c93aaf8d4.34520860.jpg', 'Zaki', '', 'Ahmed', 'male', 16, 'December', 1977, '4220145623737', 'yes', 'Pakistan', 'Pakistani', 'Karachi', 'Stargate, Shahra-e-Faisal', 244, 308, '8977766', 'Masters', 'Physical Science', '', 'Business Owner', 'Own Business', 'Business Owner/Entrepreneur', 'Senior Manager/Director', 'Karachi', 'Above 100,000', 1),
(7, 'Masooma Jaffer', 'masoomajaffer@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-03 08:03:49', 'images/profile_images/image601993c08ecd98.68003063.jpg', 'Masooma', '', 'Jaffer', 'female', 18, 'July', 1988, '4656420428979', 'yes', 'Pakistan', 'Pakistani', 'Lahore', 'Lahore', 1246, 319, '8734695', 'Masters', 'Engineering', '', 'Housewife', 'Own Business', '', '', '', '', 1),
(8, 'Bilal Channah', 'bilalchannah@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-03 08:03:52', 'images/profile_images/image601997b7a2c271.40731982.jpg', 'Bilal', '', 'Channah', 'male', 6, 'August', 1991, '2253455413451', 'yes', 'Pakistan', 'Pakistani', 'Islamabad', 'Islamabad', 43, 323, '8756237', 'Ph.D', 'Mathematics and Statistics', '', 'Unemployed', 'Job', '', '', '', '', 1),
(9, 'Jawad A Sarwana', 'jawadsarwana@gmail.com', 'Lawyer905623', 'Lawyer', '2021-02-03 08:07:11', 'images/profile_images/image60199d76a421a2.89115850.jpg', 'Jawad', 'A', 'Sarwana', 'male', 28, 'May', 1980, '4564633567675', 'yes', 'Pakistan', 'Pakistani', 'Quetta', 'Quetta', 994, 315, '3908279', 'MS/M.Phil', 'Art and Humanities', '', 'Unemployed', 'Own Business', '', '', '', '', 1),
(10, 'client2', 'client2@gmail.com', 'Client9056234', 'Client', '2021-02-05 13:31:14', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`) VALUES
(1, 1927),
(2, 1928),
(3, 1929),
(4, 1930),
(5, 1931),
(6, 1932),
(7, 1933),
(8, 1934),
(9, 1935),
(10, 1936),
(11, 1937),
(12, 1938),
(13, 1939),
(14, 1940),
(15, 1941),
(16, 1942),
(17, 1943),
(18, 1944),
(19, 1945),
(20, 1946),
(21, 1947),
(22, 1948),
(23, 1949),
(24, 1950),
(25, 1951),
(26, 1952),
(27, 1953),
(28, 1954),
(29, 1955),
(30, 1956),
(31, 1957),
(32, 1958),
(33, 1959),
(34, 1960),
(35, 1961),
(36, 1962),
(37, 1963),
(38, 1964),
(39, 1965),
(40, 1966),
(41, 1967),
(42, 1968),
(43, 1969),
(44, 1970),
(45, 1971),
(46, 1972),
(47, 1973),
(48, 1974),
(49, 1975),
(50, 1976),
(51, 1977),
(52, 1978),
(53, 1979),
(54, 1980),
(55, 1981),
(56, 1982),
(57, 1983),
(58, 1984),
(59, 1985),
(60, 1986),
(61, 1987),
(62, 1988),
(63, 1989),
(64, 1990),
(65, 1991),
(66, 1992),
(67, 1993),
(68, 1994),
(69, 1995),
(70, 1996),
(71, 1997),
(72, 1998),
(73, 1999),
(74, 2000),
(75, 2001),
(76, 2002),
(77, 2003),
(78, 2004),
(79, 2005),
(80, 2006);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`City_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`Country_Id`);

--
-- Indexes for table `lawyer_details`
--
ALTER TABLE `lawyer_details`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `mobile_code`
--
ALTER TABLE `mobile_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_icons`
--
ALTER TABLE `services_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `City_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `Country_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `lawyer_details`
--
ALTER TABLE `lawyer_details`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile_code`
--
ALTER TABLE `mobile_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_icons`
--
ALTER TABLE `services_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
