-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 07:42 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smoking_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `cigarete_order_outbound`
--

CREATE TABLE `cigarete_order_outbound` (
  `id` int(11) NOT NULL,
  `collection_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_id` varchar(255) NOT NULL,
  `product_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product_SKU` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_id_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `outbound_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_datetime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Outbound_confirm_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `Status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cigarete_order_outbound`
--

INSERT INTO `cigarete_order_outbound` (`id`, `collection_id`, `stock_id`, `token_id`, `product_id`, `product_name`, `Product_SKU`, `stock_id_status`, `buy_price`, `Product_img`, `outbound_time`, `collection_datetime`, `collection_time`, `Outbound_confirm_type`, `Status`) VALUES
(13, '6', '111', 'ocom55aq87htngsk76aogs3vyn87770okcagraqpgy2yxh7hfh', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '01-02-2022', '30-01-2022 06:57:09pm', '0', 'confirm', 'confirm'),
(14, '6', '110', 'ocom55aq87htngsk76aogs3vyn87770okcagraqpgy2yxh7hfh', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '01-02-2022', '30-01-2022 06:57:09pm', '0', 'confirm', 'confirm'),
(15, '6', '109', '2slf49nzhjfpjv189xaeo3bx42j74f7349t2aglrlt7wl3w40k', '10', 'Hollywood', 'Hollywood', 'sell', '780', 'images/Hollywood.jpg', '01-02-2022', '30-01-2022 06:56:57pm', '0', 'confirm', 'confirm'),
(19, '6', '113', 'k94eo9pfv6jcarzesekg5re7m35vy61802m0acjlplk3zljlic', '5', 'Gold Leaf Red', 'GoldLeafRed', 'sell', '2040', 'images/GoldLeafRed.jpg', '02-02-2022', '30-01-2022 06:57:58pm', '0', 'confirm', 'confirm'),
(20, '1', '10', 'brnlh8r42v67s60559vv6bmksvlk5004mfm7dika9a2qfepnfw', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '02-02-2022', '30-01-2022 02:58:14pm', '0', 'confirm', 'confirm'),
(24, '6', '115', 'em16jew40es0pvxl71q4dext64q4ch708d7ntuzo34y26ga0xl', '6', 'Gold Leaf light', 'GoldLeaflight', 'sell', '2040', 'images/GoldLeaflight.jpg', '02-02-2022', '30-01-2022 06:58:24pm', '0', 'confirm', 'confirm'),
(25, '6', '112', '5d1a3efdi1xhuchigjb6q5qdfqa72duip7h2tnn4mc4jdvwsrm', '7', 'Royal red', 'Royalred', 'sell', '840', 'images/Royalred.jpg', '03-02-2022', '30-01-2022 06:57:46pm', '0', 'confirm', 'confirm'),
(26, '1', '1', 'rivh6pcbhgtu31jvej7zjz5ognv448evvfgdsmem1da3ljxd52', '1', 'B&H Red', 'BandHred', 'sell', '2700', 'images/B&HRed.jpg', '03-02-2022', '30-01-2022 02:56:11pm', '0', 'confirm', 'confirm'),
(27, '1', '8', '356hw96pror083lfaenoenyxilpwzhgvgtb9as7sknbu1elko9', '8', 'DERBY', 'DERBY', 'sell', '780', 'images/DERBY.jpg', '03-02-2022', '30-01-2022 02:58:06pm', '0', 'confirm', 'confirm'),
(28, '1', '11', 'brnlh8r42v67s60559vv6bmksvlk5004mfm7dika9a2qfepnfw', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '04-02-2022', '30-01-2022 02:58:14pm', '0', 'confirm', 'confirm'),
(29, '1', '12', 't9hyhmmcxusizu0rjhe1ppatczo5un6za5uw13z1diglbo89u5', '10', 'Hollywood', 'Hollywood', 'sell', '780', 'images/Hollywood.jpg', '04-02-2022', '30-01-2022 02:58:26pm', '0', 'confirm', 'confirm'),
(30, '1', '5', 'bqf7zuifyqccc8xt1vwjfxye7o90rd9qd41lag24lpl3mieejc', '5', 'Gold Leaf Red', 'GoldLeafRed', 'sell', '2040', 'images/GoldLeafRed.jpg', '06-02-2022', '30-01-2022 02:57:13pm', '0', 'confirm', 'confirm'),
(31, '2', '32', 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', '1', 'B&H Red', 'BandHred', 'sell', '2700', 'images/B&HRed.jpg', '06-02-2022', '30-01-2022 04:58:36pm', '0', 'confirm', 'confirm'),
(32, '2', '22', 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '06-02-2022', '30-01-2022 04:57:18pm', '0', 'confirm', 'confirm'),
(33, '6', '106', 'w8wyxmcc3uquthdd1imf9p7or0who83htwss7kga6mm32dqu8l', '2', 'B&H White', 'BandHWhite', 'sell', '2700', 'images/B&HWhite.jpg', '06-02-2022', '30-01-2022 06:56:10pm', '0', 'confirm', 'confirm'),
(34, '6', '108', '2slf49nzhjfpjv189xaeo3bx42j74f7349t2aglrlt7wl3w40k', '10', 'Hollywood', 'Hollywood', 'sell', '780', 'images/Hollywood.jpg', '06-02-2022', '30-01-2022 06:56:57pm', '0', 'confirm', 'confirm'),
(35, '1', '3', 'iioof4taqelxjhi2oqiy23gzwmty0s0fea7iesikx34h1ebml9', '3', 'Star Red', 'StarRed', 'sell', '1260', 'images/StarRed.jpg', '07-02-2022', '30-01-2022 02:56:49pm', '0', 'confirm', 'confirm'),
(36, '1', '9', '356hw96pror083lfaenoenyxilpwzhgvgtb9as7sknbu1elko9', '8', 'DERBY', 'DERBY', 'sell', '780', 'images/DERBY.jpg', '07-02-2022', '30-01-2022 02:58:06pm', '0', 'confirm', 'confirm'),
(37, '2', '17', 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '07-02-2022', '30-01-2022 04:57:18pm', '0', 'confirm', 'confirm'),
(38, '1', '13', 't9hyhmmcxusizu0rjhe1ppatczo5un6za5uw13z1diglbo89u5', '10', 'Hollywood', 'Hollywood', 'sell', '780', 'images/Hollywood.jpg', '08-02-2022', '30-01-2022 02:58:26pm', '0', 'confirm', 'confirm'),
(39, '1', '6', 'uac504tv5yq66ezayrsztvvv1ray2p4uhmdst9t9i681qnmzwm', '6', 'Gold Leaf light', 'GoldLeaflight', 'sell', '2040', 'images/GoldLeaflight.jpg', '09-02-2022', '30-01-2022 02:57:21pm', '0', 'confirm', 'confirm'),
(40, '2', '20', 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '09-02-2022', '30-01-2022 04:57:18pm', '0', 'confirm', 'confirm'),
(41, '3', '43', 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', '10', 'Hollywood', 'Hollywood', 'sell', '780', 'images/Hollywood.jpg', '10-02-2022', '30-01-2022 05:31:35pm', '0', 'confirm', 'confirm'),
(42, '2', '30', 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', '1', 'B&H Red', 'BandHred', 'sell', '2700', 'images/B&HRed.jpg', '10-02-2022', '30-01-2022 04:58:36pm', '0', 'confirm', 'confirm'),
(43, '1', '2', 'rlb8dwhgwsciavwnj95c85jq038qqhye3p9tln0dfxhytyu7ax', '2', 'B&H White', 'BandHWhite', 'sell', '2700', 'images/B&HWhite.jpg', '10-02-2022', '30-01-2022 02:56:34pm', '0', 'confirm', 'confirm'),
(44, '2', '19', 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', '9', 'Royal White', 'RoyalWhite', 'sell', '840', 'images/RoyalWhite.jpg', '10-02-2022', '30-01-2022 04:57:18pm', '0', 'confirm', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `cigarette_products`
--

CREATE TABLE `cigarette_products` (
  `id` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_SKU` varchar(255) NOT NULL,
  `Product_img` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_price` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `status` varchar(11) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cigarette_products`
--

INSERT INTO `cigarette_products` (`id`, `Product_Name`, `Product_SKU`, `Product_img`, `date`, `product_price`, `stock`, `status`) VALUES
(1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', '2022-01-31 09:49:17', '2700', 0, 'active'),
(2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', '2022-01-31 09:49:30', '2700', 0, 'active'),
(3, 'Star Red', 'StarRed', 'images/StarRed.jpg', '2022-01-30 08:53:17', '1260', 0, 'active'),
(4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', '2022-01-30 08:53:42', '2040', 0, 'active'),
(5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', '2022-01-30 08:54:10', '2040', 0, 'active'),
(6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', '2022-01-30 08:54:25', '2040', 0, 'active'),
(7, 'Royal red', 'Royalred', 'images/Royalred.jpg', '2022-01-30 08:54:43', '840', 0, 'active'),
(8, 'DERBY', 'DERBY', 'images/DERBY.jpg', '2022-01-30 08:55:03', '780', 0, 'active'),
(9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', '2022-01-30 08:55:23', '840', 0, 'active'),
(10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', '2022-01-30 08:55:39', '780', 0, 'active'),
(11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', '2022-01-31 10:16:32', '1620', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `collect_expence`
--

CREATE TABLE `collect_expence` (
  `id` int(11) NOT NULL,
  `collection_id` varchar(255) DEFAULT NULL,
  `Amount` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `expence_user` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `confirm_user` varchar(255) DEFAULT NULL,
  `confirm_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `collect_products_stock`
--

CREATE TABLE `collect_products_stock` (
  `id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `token_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_SKU` varchar(255) NOT NULL,
  `Product_img` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `Paid_Price` int(11) NOT NULL DEFAULT 0,
  `auto_last_price` varchar(255) NOT NULL DEFAULT 'no',
  `stock` varchar(255) NOT NULL DEFAULT 'pending',
  `Update_Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collect_products_stock`
--

INSERT INTO `collect_products_stock` (`id`, `collection_id`, `token_id`, `product_id`, `Product_Name`, `Product_SKU`, `Product_img`, `quantity`, `Paid_Price`, `auto_last_price`, `stock`, `Update_Date`) VALUES
(1, 1, 'rivh6pcbhgtu31jvej7zjz5ognv448evvfgdsmem1da3ljxd52', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '30-01-2022 02:56:11pm'),
(2, 1, 'rlb8dwhgwsciavwnj95c85jq038qqhye3p9tln0dfxhytyu7ax', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '30-01-2022 02:56:34pm'),
(3, 1, 'iioof4taqelxjhi2oqiy23gzwmty0s0fea7iesikx34h1ebml9', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1, 1260, 'no', 'pending', '30-01-2022 02:56:49pm'),
(4, 1, 'nf4mpahzobzc77hg3ae2hfhbtixbl5bwlnkw3oqk3if75zsmui', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 1, 2040, 'no', 'pending', '30-01-2022 02:57:04pm'),
(5, 1, 'bqf7zuifyqccc8xt1vwjfxye7o90rd9qd41lag24lpl3mieejc', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '30-01-2022 02:57:13pm'),
(6, 1, 'uac504tv5yq66ezayrsztvvv1ray2p4uhmdst9t9i681qnmzwm', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '30-01-2022 02:57:21pm'),
(7, 1, 'qb78mwczac9bc7azuh2wrql06jysgvir835230y9dlezxz51x9', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 1, 840, 'no', 'pending', '30-01-2022 02:57:42pm'),
(8, 1, '356hw96pror083lfaenoenyxilpwzhgvgtb9as7sknbu1elko9', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 2, 780, 'no', 'pending', '30-01-2022 02:58:06pm'),
(9, 1, 'brnlh8r42v67s60559vv6bmksvlk5004mfm7dika9a2qfepnfw', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 2, 840, 'no', 'pending', '30-01-2022 02:58:14pm'),
(10, 1, 't9hyhmmcxusizu0rjhe1ppatczo5un6za5uw13z1diglbo89u5', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '30-01-2022 02:58:26pm'),
(11, 2, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 9, 840, 'no', 'pending', '30-01-2022 04:57:18pm'),
(12, 2, '47zavg8j5f0ed89rtz560wdjzxzqnkmdkxbd2ygg8zm3hc10l6', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 4, 840, 'no', 'pending', '30-01-2022 04:57:40pm'),
(13, 2, 'dlgnjxepk4c0garqz1u584i41sbfos0f9bagsnjqhbd6jsg82l', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 1, 780, 'no', 'pending', '30-01-2022 04:58:00pm'),
(14, 2, '0ko6lwey1yd1igw3zdrrxnpq1sgtvfvfn182ns4zkc3tz1gcp1', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 1, 780, 'no', 'pending', '30-01-2022 04:58:12pm'),
(15, 2, 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 4, 2700, 'no', 'pending', '30-01-2022 04:58:36pm'),
(16, 2, 'ei8viy14g7hmetz97ebvd7pjguzqpm1l268ysy5g86k3mw6tzr', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 4, 2700, 'no', 'pending', '30-01-2022 04:58:48pm'),
(17, 2, '2d8njy68fug2z88ejxvq7542f0bnxynzgfxesu2rehxhemhor9', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 2, 1620, 'no', 'pending', '30-01-2022 04:59:39pm'),
(21, 3, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 10, 780, 'no', 'pending', '30-01-2022 05:31:35pm'),
(22, 3, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 8, 780, 'no', 'pending', '30-01-2022 05:32:15pm'),
(23, 4, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 6, 1260, 'no', 'pending', '30-01-2022 05:42:31pm'),
(24, 4, 'jf1m6xlwi92z8sjx18je0qqu3pn6swt3yt5t9geyjdihk4pgy6', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 3, 2040, 'no', 'pending', '30-01-2022 05:42:46pm'),
(25, 4, 'z6ot5ci9ioh9mi3ma2h0uhm4hde4llrakhvgfrleobcl3wc5tw', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 5, 2040, 'no', 'pending', '30-01-2022 05:43:06pm'),
(26, 4, 'qbbyxjgyxr5fnqy0uoif70ivh09sunlfdaj7ohxb3qmatu5wt6', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 4, 2040, 'no', 'pending', '30-01-2022 05:43:18pm'),
(27, 5, 'mvinuos43ko1bb2ne8w2dv04swkzwrfrjz6fd6ipgi78rqxpnx', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '30-01-2022 05:50:00pm'),
(28, 5, 'xdutbjdvfi32all3jo6po3buvvnh2gsqe6duolk6j8mek081e5', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '30-01-2022 05:50:06pm'),
(29, 5, 'xrsfphbft74ppj3xhcrzc8xc4l96wf4zmppo1no6ss0suuv2rg', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1, 1260, 'no', 'pending', '30-01-2022 05:50:16pm'),
(30, 5, 'hry03xlnqa8mmxtrtf0trdvglshfmzevbhc8yrtksqlg49uxer', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '30-01-2022 05:50:26pm'),
(31, 5, 'yqmubwt8tvna198hfe4u5unn6xsfjmtj6q0jfxphfixklwq173', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '30-01-2022 05:50:32pm'),
(32, 5, 'n8eve14kgytxg44a3w2zdbp0w3a0ks39xxvec63hevdrq6t7ix', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 2, 780, 'no', 'pending', '30-01-2022 05:50:39pm'),
(33, 5, 'cc5cfl63nallh6shh4rdumel2oji9wsort3ybazt7mo378cd1t', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 3, 840, 'no', 'pending', '30-01-2022 05:50:47pm'),
(34, 5, '57029qu35vl8sky5xpclhrhcyk8pzbkbwis9ofkp26jxgri5nz', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 3, 780, 'no', 'pending', '30-01-2022 05:50:57pm'),
(35, 5, 'lj57ppg3f87hb2s4sf43quos3h1uyw9m5ah146vmzfgqtsfoez', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 1, 840, 'no', 'pending', '30-01-2022 05:51:55pm'),
(36, 6, 'nhlbg6trw4hdr7etl43tlsr1694ixvrf32ju4jn3fsy3cpozie', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '30-01-2022 06:55:52pm'),
(37, 6, 'w8wyxmcc3uquthdd1imf9p7or0who83htwss7kga6mm32dqu8l', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '30-01-2022 06:56:10pm'),
(38, 6, 'clpdzde0pvm3w59rduo642rkd2im73miyy5iujp5hs3st5nhjz', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1, 1620, 'no', 'pending', '30-01-2022 06:56:31pm'),
(39, 6, '2slf49nzhjfpjv189xaeo3bx42j74f7349t2aglrlt7wl3w40k', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '30-01-2022 06:56:57pm'),
(40, 6, 'ocom55aq87htngsk76aogs3vyn87770okcagraqpgy2yxh7hfh', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 2, 840, 'no', 'pending', '30-01-2022 06:57:09pm'),
(41, 6, '5d1a3efdi1xhuchigjb6q5qdfqa72duip7h2tnn4mc4jdvwsrm', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 1, 840, 'no', 'pending', '30-01-2022 06:57:46pm'),
(42, 6, 'k94eo9pfv6jcarzesekg5re7m35vy61802m0acjlplk3zljlic', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '30-01-2022 06:57:58pm'),
(43, 6, '0iw3wh9pfd9m4f3ctpn9m9ix5g6l378po10z5o67572xu57a89', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 1, 2040, 'no', 'pending', '30-01-2022 06:58:12pm'),
(44, 6, 'em16jew40es0pvxl71q4dext64q4ch708d7ntuzo34y26ga0xl', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '30-01-2022 06:58:24pm'),
(47, 8, '15hnxtfx5ihswgay20oeu5ar4tavm0w200pj1frukklrreoatg', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '01-02-2022 07:22:11pm'),
(48, 8, '8e77cd4fdt0il1kyg3l5kzbp7nx1aljszc992mc4us0e2u00gv', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '01-02-2022 07:22:58pm'),
(49, 8, 'jv905hostftc4mfnrm5howryseos5vrj2v7nf251opye04xp3a', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1, 1260, 'no', 'pending', '01-02-2022 07:23:10pm'),
(50, 8, 'tq8w8wtfmezye1p7kzv9jqx04ixffotkcs08po76btx0lyggy2', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '01-02-2022 07:23:20pm'),
(51, 8, '0ru4j58kakkvb3cswv8qfpv2khjim29jfz9r2ineei9w5uudlf', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '01-02-2022 07:23:33pm'),
(52, 8, '3qen9pgyxzrbi8zqy5jj8ckyok1n0oqw8dp5srfy53bdxd58b2', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 1, 840, 'no', 'pending', '01-02-2022 07:23:43pm'),
(53, 8, 'aqdn85zatt4svoumpndr5srxtughb87ewhdag8cfjauf63zubp', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 1, 780, 'no', 'pending', '01-02-2022 07:23:57pm'),
(54, 8, 'rwixi225tj7ozueedhun65dtyhs1cvf84xu4oiqume11f60vds', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 3, 840, 'no', 'pending', '01-02-2022 07:24:08pm'),
(55, 8, 'vufhgauxmi8h3rlegbfnct9zalvk84a0g17s1u3gx6y19uremn', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '01-02-2022 07:24:14pm'),
(56, 8, 'le849xgpyy9iykjouytngkr980qqf6dyh8eca0j6y6vk4c0sre', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1, 1620, 'no', 'pending', '01-02-2022 07:24:18pm'),
(57, 9, '20kffj2di29oqo7gflzvvb7wc44vl3mn990whdrnqb6h789ldo', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '03-02-2022 09:33:18pm'),
(58, 9, 'loiazfwqzzyv6lgnsju9jzzpfwwtq3kn7hjcg5oe70ow0saw5w', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '03-02-2022 09:33:40pm'),
(59, 9, 'e3pryt8sxj8eeebi96ja1tl87ydqs6vuhe9lgbh2i32qowmyuc', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '03-02-2022 09:33:54pm'),
(60, 9, 'repc2fw3r13045md238mih2utd4mfonao8uvjv18yksubv4qa9', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '03-02-2022 09:34:03pm'),
(61, 9, 'p84aouhlb81oyprw8iitl29u656dbmbbgsvkh7zius6bwi23v7', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1, 1260, 'no', 'pending', '03-02-2022 09:34:12pm'),
(62, 9, 'k7ac0x1h81tl0dibzlw5908vovris5cibmy3q76a1z0s5p6c67', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 3, 840, 'no', 'pending', '03-02-2022 09:34:26pm'),
(63, 9, 'vgycnmo2zly9thc1jjigld8kvthbd0se1n3qaitb4aujfw6uac', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '03-02-2022 09:34:37pm'),
(65, 9, 'qbq6xh71go1sk55qo3pbcwkc6qluk0qhii6iexwlq3crhfg171', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 1, 840, 'no', 'pending', '03-02-2022 09:38:48pm'),
(66, 9, 'gj1xxnpw4ntdfoc9nut5cvhezz5xxq6btyx5rrafl84kj3vh99', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 2, 780, 'no', 'pending', '03-02-2022 09:46:01pm'),
(67, 10, 'b4a918ubvmya546fc7wsb93wjh4ktdc2r7k6l511okan6rb4mn', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '06-02-2022 02:54:02pm'),
(68, 10, '1vmlio5zuwxqitkcm40i6p4g7wbrad5z70rhdhez5w65k4gi5k', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '06-02-2022 02:54:07pm'),
(69, 10, '5p29g0t1a6m1hwgl3t5dyfe4dyd16quoieo9x12xrgw3j62ohr', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '06-02-2022 02:54:11pm'),
(70, 10, '6o8hnsbhb6v1r13dyitiallife8o7vo34g4mq2a2b6x1e17wsc', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '06-02-2022 02:54:14pm'),
(71, 10, 'ij2g1vka4n01wc3p9n84ram8c636mze84nj6fjzidxok4qyvt6', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 3, 840, 'no', 'pending', '06-02-2022 02:54:20pm'),
(72, 10, 'r6cn36jkbdhj56j51gvhfrlsnf7k76jimsl7e1a575p4yqq734', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 2, 780, 'no', 'pending', '06-02-2022 02:54:27pm'),
(73, 10, 'zcvg1jb77l6lrohkod6cpnunbwfjq77otgk1dyv9amhfdeyt50', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '06-02-2022 02:54:35pm'),
(74, 10, 'unw1jhther8hrcjwvye9jneb59xsq8opxm24nyyr6u4kdw10ah', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1, 1620, 'no', 'pending', '06-02-2022 02:54:39pm'),
(75, 13, 'owhj8evuv9fqil6g6ymws9mh7d99kz9qnonsoebozp6j6p9iar', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 1, 2040, 'no', 'pending', '08-02-2022 03:58:07pm'),
(76, 13, 'txod8e2gcnqymw58k4rognrpvmp1amvefbifidmpsu7kyy71ax', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '08-02-2022 03:58:12pm'),
(77, 13, '79e4q87wpikfynfcyx2mnh5xxkdr2usz4xjbtmrl9mn01is8sm', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1, 1620, 'no', 'pending', '08-02-2022 03:58:18pm'),
(78, 13, '57qb3yvczainpraqeinpbngvlcnoov6vn01fqpcpe16v1rlfhw', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '08-02-2022 03:58:25pm'),
(79, 13, 'coukaxd2dqz5hqbmuqerfrmtvz0r1m0txp0kbwi9z0k0m6jw5n', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 2, 840, 'no', 'pending', '08-02-2022 03:58:30pm'),
(80, 13, 'ds5pixva48aqo0fjgb214740huxe53e8iskinp5f45yb0qohdc', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 1, 780, 'no', 'pending', '08-02-2022 03:58:35pm'),
(81, 13, 'c51dxondonj9z6osq35mdxv8vncxg06uijddsmtg0w2veqfd3j', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2, 2700, 'no', 'pending', '08-02-2022 03:58:40pm'),
(82, 13, 'lxpru96af530k33mp9vgpldoa2uhso0gig0osyvwjkbnnb622c', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1, 1260, 'no', 'pending', '08-02-2022 03:58:46pm'),
(83, 14, '1jy9z75p01nqg7tnl7jk85qh45n6s9mo3oatk2h8708n7gge1b', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 1, 2700, 'no', 'pending', '10-02-2022 03:56:04pm'),
(85, 14, 'ex4ifgii4sg7iz3tntm3ssxjpkezpn64k8kpdym0g4686qzgl3', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 1, 2700, 'no', 'pending', '10-02-2022 03:56:20pm'),
(86, 14, '80kbm62zjmqalw0yt614h9385jxx7lzb2nn6nvcndz1hu882a8', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 1, 2040, 'no', 'pending', '10-02-2022 03:56:27pm'),
(87, 14, 'dr9zvpxkwn97yjneno1h3r1wzyzmnperxahxm0891162useg5o', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 2, 840, 'no', 'pending', '10-02-2022 03:56:31pm'),
(88, 14, 'unv375lgandkds22lotms0j0mpdq3cn3wg3od6qy7w7o82dizn', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 2, 780, 'no', 'pending', '10-02-2022 03:56:35pm');

-- --------------------------------------------------------

--
-- Table structure for table `collect_products_stocks`
--

CREATE TABLE `collect_products_stocks` (
  `id` int(255) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL DEFAULT 0,
  `token_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `Product_SKU` varchar(255) NOT NULL,
  `Product_img` varchar(255) NOT NULL,
  `buy_Price` int(11) NOT NULL,
  `collection_datetime` varchar(255) NOT NULL,
  `collection_time` varchar(255) NOT NULL DEFAULT '0',
  `stock_status` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collect_products_stocks`
--

INSERT INTO `collect_products_stocks` (`id`, `collection_id`, `stock_id`, `token_id`, `product_id`, `product_name`, `Product_SKU`, `Product_img`, `buy_Price`, `collection_datetime`, `collection_time`, `stock_status`, `payment_status`) VALUES
(1, 1, 1, 'rivh6pcbhgtu31jvej7zjz5ognv448evvfgdsmem1da3ljxd52', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 02:56:11pm', '0', 'sell', 'paid'),
(2, 1, 2, 'rlb8dwhgwsciavwnj95c85jq038qqhye3p9tln0dfxhytyu7ax', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 02:56:34pm', '0', 'sell', 'paid'),
(3, 1, 3, 'iioof4taqelxjhi2oqiy23gzwmty0s0fea7iesikx34h1ebml9', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 02:56:49pm', '0', 'sell', 'paid'),
(4, 1, 4, 'nf4mpahzobzc77hg3ae2hfhbtixbl5bwlnkw3oqk3if75zsmui', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 2040, '30-01-2022 02:57:04pm', '0', 'stock', 'unpaid'),
(5, 1, 5, 'bqf7zuifyqccc8xt1vwjfxye7o90rd9qd41lag24lpl3mieejc', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 02:57:13pm', '0', 'sell', 'paid'),
(6, 1, 6, 'uac504tv5yq66ezayrsztvvv1ray2p4uhmdst9t9i681qnmzwm', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 02:57:21pm', '0', 'sell', 'paid'),
(7, 1, 7, 'qb78mwczac9bc7azuh2wrql06jysgvir835230y9dlezxz51x9', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 02:57:42pm', '0', 'stock', 'unpaid'),
(8, 1, 8, '356hw96pror083lfaenoenyxilpwzhgvgtb9as7sknbu1elko9', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 02:58:06pm', '0', 'sell', 'paid'),
(9, 1, 8, '356hw96pror083lfaenoenyxilpwzhgvgtb9as7sknbu1elko9', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 02:58:06pm', '0', 'sell', 'paid'),
(10, 1, 9, 'brnlh8r42v67s60559vv6bmksvlk5004mfm7dika9a2qfepnfw', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 02:58:14pm', '0', 'sell', 'paid'),
(11, 1, 9, 'brnlh8r42v67s60559vv6bmksvlk5004mfm7dika9a2qfepnfw', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 02:58:14pm', '0', 'sell', 'paid'),
(12, 1, 10, 't9hyhmmcxusizu0rjhe1ppatczo5un6za5uw13z1diglbo89u5', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 02:58:26pm', '0', 'sell', 'paid'),
(13, 1, 10, 't9hyhmmcxusizu0rjhe1ppatczo5un6za5uw13z1diglbo89u5', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 02:58:26pm', '0', 'sell', 'paid'),
(14, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'stock', 'unpaid'),
(15, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'stock', 'unpaid'),
(16, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'stock', 'unpaid'),
(17, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'sell', 'paid'),
(18, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'stock', 'unpaid'),
(19, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'sell', 'paid'),
(20, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'sell', 'paid'),
(21, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'stock', 'unpaid'),
(22, 2, 11, 'yxpr59bf0kqfc0uifdscg4jlgjxfv2ocwiqab11ii8i8zjaktc', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 04:57:18pm', '0', 'sell', 'paid'),
(23, 2, 12, '47zavg8j5f0ed89rtz560wdjzxzqnkmdkxbd2ygg8zm3hc10l6', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 04:57:40pm', '0', 'stock', 'unpaid'),
(24, 2, 12, '47zavg8j5f0ed89rtz560wdjzxzqnkmdkxbd2ygg8zm3hc10l6', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 04:57:40pm', '0', 'stock', 'unpaid'),
(25, 2, 12, '47zavg8j5f0ed89rtz560wdjzxzqnkmdkxbd2ygg8zm3hc10l6', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 04:57:40pm', '0', 'stock', 'unpaid'),
(26, 2, 12, '47zavg8j5f0ed89rtz560wdjzxzqnkmdkxbd2ygg8zm3hc10l6', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 04:57:40pm', '0', 'stock', 'unpaid'),
(27, 2, 13, 'dlgnjxepk4c0garqz1u584i41sbfos0f9bagsnjqhbd6jsg82l', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 04:58:00pm', '0', 'stock', 'unpaid'),
(28, 2, 14, '0ko6lwey1yd1igw3zdrrxnpq1sgtvfvfn182ns4zkc3tz1gcp1', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 04:58:12pm', '0', 'stock', 'unpaid'),
(29, 2, 15, 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 04:58:36pm', '0', 'stock', 'unpaid'),
(30, 2, 15, 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 04:58:36pm', '0', 'sell', 'paid'),
(31, 2, 15, 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 04:58:36pm', '0', 'stock', 'unpaid'),
(32, 2, 15, 'ai6apjg4fjtf9c8qgsvjunouquvkdjlw3ocsnc5dsd1i8ujwmk', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 04:58:36pm', '0', 'sell', 'paid'),
(33, 2, 16, 'ei8viy14g7hmetz97ebvd7pjguzqpm1l268ysy5g86k3mw6tzr', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 04:58:48pm', '0', 'stock', 'unpaid'),
(34, 2, 16, 'ei8viy14g7hmetz97ebvd7pjguzqpm1l268ysy5g86k3mw6tzr', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 04:58:48pm', '0', 'stock', 'unpaid'),
(35, 2, 16, 'ei8viy14g7hmetz97ebvd7pjguzqpm1l268ysy5g86k3mw6tzr', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 04:58:48pm', '0', 'stock', 'unpaid'),
(36, 2, 16, 'ei8viy14g7hmetz97ebvd7pjguzqpm1l268ysy5g86k3mw6tzr', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 04:58:48pm', '0', 'stock', 'unpaid'),
(37, 2, 17, '2d8njy68fug2z88ejxvq7542f0bnxynzgfxesu2rehxhemhor9', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1620, '30-01-2022 04:59:39pm', '0', 'stock', 'unpaid'),
(38, 2, 17, '2d8njy68fug2z88ejxvq7542f0bnxynzgfxesu2rehxhemhor9', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1620, '30-01-2022 04:59:39pm', '0', 'stock', 'unpaid'),
(42, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(43, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'sell', 'paid'),
(44, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(45, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(46, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(47, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(48, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(49, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(50, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(51, 3, 21, 'e03n3m0zlerq3l3u7i1jerqwi81o2e3vgaou8co6wgix44xdno', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:31:35pm', '0', 'stock', 'unpaid'),
(52, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(53, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(54, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(55, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(56, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(57, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(58, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(59, 3, 22, '5w48u8y885gcmfwkb6y38fd2500ced5o12ybx3wm6o09bbl6fr', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:32:15pm', '0', 'stock', 'unpaid'),
(60, 4, 23, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:42:31pm', '0', 'stock', 'unpaid'),
(61, 4, 23, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:42:31pm', '0', 'stock', 'unpaid'),
(62, 4, 23, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:42:31pm', '0', 'stock', 'unpaid'),
(63, 4, 23, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:42:31pm', '0', 'stock', 'unpaid'),
(64, 4, 23, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:42:31pm', '0', 'stock', 'unpaid'),
(65, 4, 23, 'f1jjuv71bwvxl57sr9kv8llm41x1kyqrhcfw09dhs4xn6s2tz6', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:42:31pm', '0', 'stock', 'unpaid'),
(66, 4, 24, 'jf1m6xlwi92z8sjx18je0qqu3pn6swt3yt5t9geyjdihk4pgy6', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 2040, '30-01-2022 05:42:46pm', '0', 'stock', 'unpaid'),
(67, 4, 24, 'jf1m6xlwi92z8sjx18je0qqu3pn6swt3yt5t9geyjdihk4pgy6', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 2040, '30-01-2022 05:42:46pm', '0', 'stock', 'unpaid'),
(68, 4, 24, 'jf1m6xlwi92z8sjx18je0qqu3pn6swt3yt5t9geyjdihk4pgy6', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 2040, '30-01-2022 05:42:46pm', '0', 'stock', 'unpaid'),
(69, 4, 25, 'z6ot5ci9ioh9mi3ma2h0uhm4hde4llrakhvgfrleobcl3wc5tw', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 05:43:06pm', '0', 'stock', 'unpaid'),
(70, 4, 25, 'z6ot5ci9ioh9mi3ma2h0uhm4hde4llrakhvgfrleobcl3wc5tw', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 05:43:06pm', '0', 'stock', 'unpaid'),
(71, 4, 25, 'z6ot5ci9ioh9mi3ma2h0uhm4hde4llrakhvgfrleobcl3wc5tw', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 05:43:06pm', '0', 'stock', 'unpaid'),
(72, 4, 25, 'z6ot5ci9ioh9mi3ma2h0uhm4hde4llrakhvgfrleobcl3wc5tw', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 05:43:06pm', '0', 'stock', 'unpaid'),
(73, 4, 25, 'z6ot5ci9ioh9mi3ma2h0uhm4hde4llrakhvgfrleobcl3wc5tw', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 05:43:06pm', '0', 'stock', 'unpaid'),
(74, 4, 26, 'qbbyxjgyxr5fnqy0uoif70ivh09sunlfdaj7ohxb3qmatu5wt6', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 05:43:18pm', '0', 'stock', 'unpaid'),
(75, 4, 26, 'qbbyxjgyxr5fnqy0uoif70ivh09sunlfdaj7ohxb3qmatu5wt6', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 05:43:18pm', '0', 'stock', 'unpaid'),
(76, 4, 26, 'qbbyxjgyxr5fnqy0uoif70ivh09sunlfdaj7ohxb3qmatu5wt6', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 05:43:18pm', '0', 'stock', 'unpaid'),
(77, 4, 26, 'qbbyxjgyxr5fnqy0uoif70ivh09sunlfdaj7ohxb3qmatu5wt6', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 05:43:18pm', '0', 'stock', 'unpaid'),
(78, 5, 27, 'mvinuos43ko1bb2ne8w2dv04swkzwrfrjz6fd6ipgi78rqxpnx', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 05:50:00pm', '0', 'stock', 'unpaid'),
(79, 5, 28, 'xdutbjdvfi32all3jo6po3buvvnh2gsqe6duolk6j8mek081e5', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 05:50:06pm', '0', 'stock', 'unpaid'),
(80, 5, 29, 'xrsfphbft74ppj3xhcrzc8xc4l96wf4zmppo1no6ss0suuv2rg', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '30-01-2022 05:50:16pm', '0', 'stock', 'unpaid'),
(81, 5, 30, 'hry03xlnqa8mmxtrtf0trdvglshfmzevbhc8yrtksqlg49uxer', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 05:50:26pm', '0', 'stock', 'unpaid'),
(82, 5, 31, 'yqmubwt8tvna198hfe4u5unn6xsfjmtj6q0jfxphfixklwq173', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 05:50:32pm', '0', 'stock', 'unpaid'),
(83, 5, 32, 'n8eve14kgytxg44a3w2zdbp0w3a0ks39xxvec63hevdrq6t7ix', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:50:39pm', '0', 'stock', 'unpaid'),
(84, 5, 32, 'n8eve14kgytxg44a3w2zdbp0w3a0ks39xxvec63hevdrq6t7ix', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '30-01-2022 05:50:39pm', '0', 'stock', 'unpaid'),
(85, 5, 33, 'cc5cfl63nallh6shh4rdumel2oji9wsort3ybazt7mo378cd1t', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 05:50:47pm', '0', 'stock', 'unpaid'),
(86, 5, 33, 'cc5cfl63nallh6shh4rdumel2oji9wsort3ybazt7mo378cd1t', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 05:50:47pm', '0', 'stock', 'unpaid'),
(87, 5, 33, 'cc5cfl63nallh6shh4rdumel2oji9wsort3ybazt7mo378cd1t', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 05:50:47pm', '0', 'stock', 'unpaid'),
(88, 5, 34, '57029qu35vl8sky5xpclhrhcyk8pzbkbwis9ofkp26jxgri5nz', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:50:57pm', '0', 'stock', 'unpaid'),
(89, 5, 34, '57029qu35vl8sky5xpclhrhcyk8pzbkbwis9ofkp26jxgri5nz', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:50:57pm', '0', 'stock', 'unpaid'),
(90, 5, 34, '57029qu35vl8sky5xpclhrhcyk8pzbkbwis9ofkp26jxgri5nz', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 05:50:57pm', '0', 'stock', 'unpaid'),
(91, 5, 35, 'lj57ppg3f87hb2s4sf43quos3h1uyw9m5ah146vmzfgqtsfoez', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 05:51:55pm', '0', 'stock', 'unpaid'),
(105, 6, 36, 'nhlbg6trw4hdr7etl43tlsr1694ixvrf32ju4jn3fsy3cpozie', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '30-01-2022 06:55:52pm', '0', 'sell', 'paid'),
(106, 6, 37, 'w8wyxmcc3uquthdd1imf9p7or0who83htwss7kga6mm32dqu8l', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '30-01-2022 06:56:10pm', '0', 'sell', 'paid'),
(107, 6, 38, 'clpdzde0pvm3w59rduo642rkd2im73miyy5iujp5hs3st5nhjz', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1620, '30-01-2022 06:56:31pm', '0', 'stock', 'unpaid'),
(108, 6, 39, '2slf49nzhjfpjv189xaeo3bx42j74f7349t2aglrlt7wl3w40k', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 06:56:57pm', '0', 'sell', 'paid'),
(109, 6, 39, '2slf49nzhjfpjv189xaeo3bx42j74f7349t2aglrlt7wl3w40k', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '30-01-2022 06:56:57pm', '0', 'sell', 'paid'),
(110, 6, 40, 'ocom55aq87htngsk76aogs3vyn87770okcagraqpgy2yxh7hfh', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 06:57:09pm', '0', 'sell', 'paid'),
(111, 6, 40, 'ocom55aq87htngsk76aogs3vyn87770okcagraqpgy2yxh7hfh', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '30-01-2022 06:57:09pm', '0', 'sell', 'paid'),
(112, 6, 41, '5d1a3efdi1xhuchigjb6q5qdfqa72duip7h2tnn4mc4jdvwsrm', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '30-01-2022 06:57:46pm', '0', 'sell', 'paid'),
(113, 6, 42, 'k94eo9pfv6jcarzesekg5re7m35vy61802m0acjlplk3zljlic', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '30-01-2022 06:57:58pm', '0', 'sell', 'paid'),
(114, 6, 43, '0iw3wh9pfd9m4f3ctpn9m9ix5g6l378po10z5o67572xu57a89', 4, 'Gold Leaf switch', 'GoldLeafswitch', 'images/GoldLeafswitch.jpg', 2040, '30-01-2022 06:58:12pm', '0', 'stock', 'unpaid'),
(115, 6, 44, 'em16jew40es0pvxl71q4dext64q4ch708d7ntuzo34y26ga0xl', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '30-01-2022 06:58:24pm', '0', 'sell', 'paid'),
(119, 8, 47, '15hnxtfx5ihswgay20oeu5ar4tavm0w200pj1frukklrreoatg', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '01-02-2022 07:22:11pm', '0', 'stock', 'unpaid'),
(120, 8, 48, '8e77cd4fdt0il1kyg3l5kzbp7nx1aljszc992mc4us0e2u00gv', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '01-02-2022 07:22:58pm', '0', 'stock', 'unpaid'),
(121, 8, 49, 'jv905hostftc4mfnrm5howryseos5vrj2v7nf251opye04xp3a', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '01-02-2022 07:23:10pm', '0', 'stock', 'unpaid'),
(122, 8, 50, 'tq8w8wtfmezye1p7kzv9jqx04ixffotkcs08po76btx0lyggy2', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '01-02-2022 07:23:20pm', '0', 'stock', 'unpaid'),
(123, 8, 51, '0ru4j58kakkvb3cswv8qfpv2khjim29jfz9r2ineei9w5uudlf', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '01-02-2022 07:23:33pm', '0', 'stock', 'unpaid'),
(124, 8, 52, '3qen9pgyxzrbi8zqy5jj8ckyok1n0oqw8dp5srfy53bdxd58b2', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '01-02-2022 07:23:43pm', '0', 'stock', 'unpaid'),
(125, 8, 53, 'aqdn85zatt4svoumpndr5srxtughb87ewhdag8cfjauf63zubp', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '01-02-2022 07:23:57pm', '0', 'stock', 'unpaid'),
(126, 8, 54, 'rwixi225tj7ozueedhun65dtyhs1cvf84xu4oiqume11f60vds', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '01-02-2022 07:24:08pm', '0', 'stock', 'unpaid'),
(127, 8, 54, 'rwixi225tj7ozueedhun65dtyhs1cvf84xu4oiqume11f60vds', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '01-02-2022 07:24:08pm', '0', 'stock', 'unpaid'),
(128, 8, 54, 'rwixi225tj7ozueedhun65dtyhs1cvf84xu4oiqume11f60vds', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '01-02-2022 07:24:08pm', '0', 'stock', 'unpaid'),
(129, 8, 55, 'vufhgauxmi8h3rlegbfnct9zalvk84a0g17s1u3gx6y19uremn', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '01-02-2022 07:24:14pm', '0', 'stock', 'unpaid'),
(130, 8, 55, 'vufhgauxmi8h3rlegbfnct9zalvk84a0g17s1u3gx6y19uremn', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '01-02-2022 07:24:14pm', '0', 'stock', 'unpaid'),
(131, 8, 56, 'le849xgpyy9iykjouytngkr980qqf6dyh8eca0j6y6vk4c0sre', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1620, '01-02-2022 07:24:18pm', '0', 'stock', 'unpaid'),
(132, 9, 57, '20kffj2di29oqo7gflzvvb7wc44vl3mn990whdrnqb6h789ldo', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '03-02-2022 09:33:18pm', '0', 'stock', 'unpaid'),
(133, 9, 58, 'loiazfwqzzyv6lgnsju9jzzpfwwtq3kn7hjcg5oe70ow0saw5w', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '03-02-2022 09:33:40pm', '0', 'stock', 'unpaid'),
(134, 9, 59, 'e3pryt8sxj8eeebi96ja1tl87ydqs6vuhe9lgbh2i32qowmyuc', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '03-02-2022 09:33:54pm', '0', 'stock', 'unpaid'),
(135, 9, 60, 'repc2fw3r13045md238mih2utd4mfonao8uvjv18yksubv4qa9', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '03-02-2022 09:34:03pm', '0', 'stock', 'unpaid'),
(136, 9, 61, 'p84aouhlb81oyprw8iitl29u656dbmbbgsvkh7zius6bwi23v7', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '03-02-2022 09:34:12pm', '0', 'stock', 'unpaid'),
(137, 9, 62, 'k7ac0x1h81tl0dibzlw5908vovris5cibmy3q76a1z0s5p6c67', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '03-02-2022 09:34:26pm', '0', 'stock', 'unpaid'),
(138, 9, 62, 'k7ac0x1h81tl0dibzlw5908vovris5cibmy3q76a1z0s5p6c67', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '03-02-2022 09:34:26pm', '0', 'stock', 'unpaid'),
(139, 9, 62, 'k7ac0x1h81tl0dibzlw5908vovris5cibmy3q76a1z0s5p6c67', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '03-02-2022 09:34:26pm', '0', 'stock', 'unpaid'),
(140, 9, 63, 'vgycnmo2zly9thc1jjigld8kvthbd0se1n3qaitb4aujfw6uac', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '03-02-2022 09:34:37pm', '0', 'stock', 'unpaid'),
(141, 9, 63, 'vgycnmo2zly9thc1jjigld8kvthbd0se1n3qaitb4aujfw6uac', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '03-02-2022 09:34:37pm', '0', 'stock', 'unpaid'),
(144, 9, 65, 'qbq6xh71go1sk55qo3pbcwkc6qluk0qhii6iexwlq3crhfg171', 7, 'Royal red', 'Royalred', 'images/Royalred.jpg', 840, '03-02-2022 09:38:48pm', '0', 'stock', 'unpaid'),
(145, 9, 66, 'gj1xxnpw4ntdfoc9nut5cvhezz5xxq6btyx5rrafl84kj3vh99', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '03-02-2022 09:46:01pm', '0', 'stock', 'unpaid'),
(146, 9, 66, 'gj1xxnpw4ntdfoc9nut5cvhezz5xxq6btyx5rrafl84kj3vh99', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '03-02-2022 09:46:01pm', '0', 'stock', 'unpaid'),
(147, 10, 67, 'b4a918ubvmya546fc7wsb93wjh4ktdc2r7k6l511okan6rb4mn', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '06-02-2022 02:54:02pm', '0', 'stock', 'unpaid'),
(148, 10, 68, '1vmlio5zuwxqitkcm40i6p4g7wbrad5z70rhdhez5w65k4gi5k', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '06-02-2022 02:54:07pm', '0', 'stock', 'unpaid'),
(149, 10, 69, '5p29g0t1a6m1hwgl3t5dyfe4dyd16quoieo9x12xrgw3j62ohr', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '06-02-2022 02:54:11pm', '0', 'stock', 'unpaid'),
(150, 10, 70, '6o8hnsbhb6v1r13dyitiallife8o7vo34g4mq2a2b6x1e17wsc', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '06-02-2022 02:54:14pm', '0', 'stock', 'unpaid'),
(151, 10, 71, 'ij2g1vka4n01wc3p9n84ram8c636mze84nj6fjzidxok4qyvt6', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '06-02-2022 02:54:20pm', '0', 'stock', 'unpaid'),
(152, 10, 71, 'ij2g1vka4n01wc3p9n84ram8c636mze84nj6fjzidxok4qyvt6', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '06-02-2022 02:54:20pm', '0', 'stock', 'unpaid'),
(153, 10, 71, 'ij2g1vka4n01wc3p9n84ram8c636mze84nj6fjzidxok4qyvt6', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '06-02-2022 02:54:20pm', '0', 'stock', 'unpaid'),
(154, 10, 72, 'r6cn36jkbdhj56j51gvhfrlsnf7k76jimsl7e1a575p4yqq734', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '06-02-2022 02:54:27pm', '0', 'stock', 'unpaid'),
(155, 10, 72, 'r6cn36jkbdhj56j51gvhfrlsnf7k76jimsl7e1a575p4yqq734', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '06-02-2022 02:54:27pm', '0', 'stock', 'unpaid'),
(156, 10, 73, 'zcvg1jb77l6lrohkod6cpnunbwfjq77otgk1dyv9amhfdeyt50', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '06-02-2022 02:54:35pm', '0', 'stock', 'unpaid'),
(157, 10, 73, 'zcvg1jb77l6lrohkod6cpnunbwfjq77otgk1dyv9amhfdeyt50', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '06-02-2022 02:54:35pm', '0', 'stock', 'unpaid'),
(158, 10, 74, 'unw1jhther8hrcjwvye9jneb59xsq8opxm24nyyr6u4kdw10ah', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1620, '06-02-2022 02:54:39pm', '0', 'stock', 'unpaid'),
(159, 13, 75, 'owhj8evuv9fqil6g6ymws9mh7d99kz9qnonsoebozp6j6p9iar', 5, 'Gold Leaf Red', 'GoldLeafRed', 'images/GoldLeafRed.jpg', 2040, '08-02-2022 03:58:07pm', '0', 'stock', 'unpaid'),
(160, 13, 76, 'txod8e2gcnqymw58k4rognrpvmp1amvefbifidmpsu7kyy71ax', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '08-02-2022 03:58:12pm', '0', 'stock', 'unpaid'),
(161, 13, 77, '79e4q87wpikfynfcyx2mnh5xxkdr2usz4xjbtmrl9mn01is8sm', 11, 'B&H mini cartoon', 'BandHminicartoon', 'images/B&Hminicartoon.jpg', 1620, '08-02-2022 03:58:18pm', '0', 'stock', 'unpaid'),
(162, 13, 78, '57qb3yvczainpraqeinpbngvlcnoov6vn01fqpcpe16v1rlfhw', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '08-02-2022 03:58:25pm', '0', 'stock', 'unpaid'),
(163, 13, 78, '57qb3yvczainpraqeinpbngvlcnoov6vn01fqpcpe16v1rlfhw', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '08-02-2022 03:58:25pm', '0', 'stock', 'unpaid'),
(164, 13, 79, 'coukaxd2dqz5hqbmuqerfrmtvz0r1m0txp0kbwi9z0k0m6jw5n', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '08-02-2022 03:58:30pm', '0', 'stock', 'unpaid'),
(165, 13, 79, 'coukaxd2dqz5hqbmuqerfrmtvz0r1m0txp0kbwi9z0k0m6jw5n', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '08-02-2022 03:58:30pm', '0', 'stock', 'unpaid'),
(166, 13, 80, 'ds5pixva48aqo0fjgb214740huxe53e8iskinp5f45yb0qohdc', 8, 'DERBY', 'DERBY', 'images/DERBY.jpg', 780, '08-02-2022 03:58:35pm', '0', 'stock', 'unpaid'),
(167, 13, 81, 'c51dxondonj9z6osq35mdxv8vncxg06uijddsmtg0w2veqfd3j', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '08-02-2022 03:58:40pm', '0', 'stock', 'unpaid'),
(168, 13, 81, 'c51dxondonj9z6osq35mdxv8vncxg06uijddsmtg0w2veqfd3j', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '08-02-2022 03:58:40pm', '0', 'stock', 'unpaid'),
(169, 13, 82, 'lxpru96af530k33mp9vgpldoa2uhso0gig0osyvwjkbnnb622c', 3, 'Star Red', 'StarRed', 'images/StarRed.jpg', 1260, '08-02-2022 03:58:46pm', '0', 'stock', 'unpaid'),
(170, 14, 83, '1jy9z75p01nqg7tnl7jk85qh45n6s9mo3oatk2h8708n7gge1b', 1, 'B&H Red', 'BandHred', 'images/B&HRed.jpg', 2700, '10-02-2022 03:56:04pm', '0', 'stock', 'unpaid'),
(171, 14, 0, 'ldc71k7qxgfqqq3l87q9qaulwoxsjvyt9jlzlrc21i6kxrc9op', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '10-02-2022 03:56:08pm', '0', 'stock', 'unpaid'),
(172, 14, 0, 'ldc71k7qxgfqqq3l87q9qaulwoxsjvyt9jlzlrc21i6kxrc9op', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '10-02-2022 03:56:08pm', '0', 'stock', 'unpaid'),
(173, 14, 85, 'ex4ifgii4sg7iz3tntm3ssxjpkezpn64k8kpdym0g4686qzgl3', 2, 'B&H White', 'BandHWhite', 'images/B&HWhite.jpg', 2700, '10-02-2022 03:56:20pm', '0', 'stock', 'unpaid'),
(174, 14, 86, '80kbm62zjmqalw0yt614h9385jxx7lzb2nn6nvcndz1hu882a8', 6, 'Gold Leaf light', 'GoldLeaflight', 'images/GoldLeaflight.jpg', 2040, '10-02-2022 03:56:27pm', '0', 'stock', 'unpaid'),
(175, 14, 87, 'dr9zvpxkwn97yjneno1h3r1wzyzmnperxahxm0891162useg5o', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '10-02-2022 03:56:31pm', '0', 'stock', 'unpaid'),
(176, 14, 87, 'dr9zvpxkwn97yjneno1h3r1wzyzmnperxahxm0891162useg5o', 9, 'Royal White', 'RoyalWhite', 'images/RoyalWhite.jpg', 840, '10-02-2022 03:56:31pm', '0', 'stock', 'unpaid'),
(177, 14, 88, 'unv375lgandkds22lotms0j0mpdq3cn3wg3od6qy7w7o82dizn', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '10-02-2022 03:56:35pm', '0', 'stock', 'unpaid'),
(178, 14, 88, 'unv375lgandkds22lotms0j0mpdq3cn3wg3od6qy7w7o82dizn', 10, 'Hollywood', 'Hollywood', 'images/Hollywood.jpg', 780, '10-02-2022 03:56:35pm', '0', 'stock', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `collect_product_info`
--

CREATE TABLE `collect_product_info` (
  `id` int(11) NOT NULL,
  `status` varchar(22) NOT NULL DEFAULT 'pending',
  `create_user` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `expence_amount` int(11) NOT NULL DEFAULT 0,
  `products_amount` int(11) NOT NULL DEFAULT 0,
  `Cash_Amount` double NOT NULL DEFAULT 0,
  `Paid_Old_Due` double NOT NULL DEFAULT 0,
  `Return_Amount` double NOT NULL DEFAULT 0,
  `Due_Amount` double NOT NULL DEFAULT 0,
  `Suppliers_amount` double NOT NULL DEFAULT 0,
  `Suppliers_paid_Amount` double DEFAULT NULL,
  `Suppliers_due_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collect_product_info`
--

INSERT INTO `collect_product_info` (`id`, `status`, `create_user`, `create_time`, `expence_amount`, `products_amount`, `Cash_Amount`, `Paid_Old_Due`, `Return_Amount`, `Due_Amount`, `Suppliers_amount`, `Suppliers_paid_Amount`, `Suppliers_due_amount`) VALUES
(1, 'pending', '', '30-01-2022 02:45:37pm', 0, 18420, 0, 0, 0, 0, 0, NULL, NULL),
(2, 'pending', '', '30-01-2022 04:55:43pm', 0, 37320, 0, 0, 0, 0, 0, NULL, NULL),
(3, 'pending', '', '30-01-2022 05:31:10pm', 0, 14040, 0, 0, 0, 0, 0, NULL, NULL),
(4, 'pending', '', '30-01-2022 05:41:27pm', 0, 32040, 0, 0, 0, 0, 0, NULL, NULL),
(5, 'pending', '', '30-01-2022 05:41:29pm', 0, 18000, 0, 0, 0, 0, 0, NULL, NULL),
(6, 'pending', '', '30-01-2022 06:49:38pm', 0, 17220, 0, 0, 0, 0, 0, NULL, NULL),
(8, 'pending', '', '01-02-2022 07:17:59pm', 0, 18060, 0, 0, 0, 0, 0, NULL, NULL),
(9, 'pending', '', '03-02-2022 09:32:37pm', 0, 17220, 0, 0, 0, 0, 0, NULL, NULL),
(10, 'pending', '', '06-02-2022 02:51:43pm', 0, 16740, 0, 0, 0, 0, 0, NULL, NULL),
(13, 'pending', '', '08-02-2022 03:57:33pm', 0, 16380, 0, 0, 0, 0, 0, NULL, NULL),
(14, 'pending', '', '10-02-2022 03:55:48pm', 0, 10680, 0, 0, 0, 0, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cigarete_order_outbound`
--
ALTER TABLE `cigarete_order_outbound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cigarette_products`
--
ALTER TABLE `cigarette_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect_expence`
--
ALTER TABLE `collect_expence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect_products_stock`
--
ALTER TABLE `collect_products_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect_products_stocks`
--
ALTER TABLE `collect_products_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect_product_info`
--
ALTER TABLE `collect_product_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cigarete_order_outbound`
--
ALTER TABLE `cigarete_order_outbound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cigarette_products`
--
ALTER TABLE `cigarette_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `collect_expence`
--
ALTER TABLE `collect_expence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collect_products_stock`
--
ALTER TABLE `collect_products_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `collect_products_stocks`
--
ALTER TABLE `collect_products_stocks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `collect_product_info`
--
ALTER TABLE `collect_product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
