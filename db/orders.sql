-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table kedaiku.orders: ~60 rows (approximately)
INSERT INTO `orders` (`id`, `full-name`, `order_no`, `email`, `phone`, `address1`, `address2`, `daerah`, `state`, `poskod`, `total_amount`, `qty`, `items`, `status`, `tracking_no`, `courier`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'ering', '5olmgvtrpq', 'aidatulkhairina@gmail.com', '0142152935', '255, tokyo, saudagara', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, '', NULL, NULL, '2023-11-07 06:32:58', '2023-11-07 06:32:58', NULL),
	(2, 'AIDATUL KHAIRINA BINTI AZMI', '4Xqd3zVcpj', 'aidatulkhairina@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, '', NULL, NULL, '2023-11-07 06:37:28', '2023-11-07 06:37:28', NULL),
	(3, 'AIDATUL KHAIRINA BINTI AZMI', 'h9F5TmeK5C', 'aidatulkhairina@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, '', NULL, NULL, '2023-11-07 06:39:15', '2023-11-07 06:39:15', NULL),
	(4, 'nero nero', 'idefTyCV42', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 06:42:30', '2023-11-07 06:42:30', NULL),
	(5, 'nero nero', 'e8qlUOFq6d', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:18:03', '2023-11-07 07:18:03', NULL),
	(6, 'nero nero', 'lpt53lSDBw', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:18:42', '2023-11-07 07:18:42', NULL),
	(7, 'nero nero', 'IqTEReLfpF', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:20:29', '2023-11-07 07:20:29', NULL),
	(8, 'nero nero', '6fqRG3CovV', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:21:04', '2023-11-07 07:21:04', NULL),
	(9, 'nero nero', 'o7uRxiDLtf', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:22:42', '2023-11-07 07:22:42', NULL),
	(10, 'nero nero', 'GoAfgegYPa', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:22:59', '2023-11-07 07:22:59', NULL),
	(11, 'nero nero', '52v12AHDLx', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:23:33', '2023-11-07 07:23:33', NULL),
	(12, 'nero nero', 'Ey6TViGPd1', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:25:12', '2023-11-07 07:25:12', NULL),
	(13, 'nero nero', 'Pr46BjxKFi', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:25:20', '2023-11-07 07:25:20', NULL),
	(14, 'nero nero', '0RZEKATVy7', 'nero@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 07:25:44', '2023-11-07 07:25:44', NULL),
	(15, 'nero ali', 'OpPIT4Qmqb', 'ali@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 08:58:45', '2023-11-07 08:58:45', NULL),
	(16, 'nero ali', 'lfIcPw9L5D', 'ali@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 717.99, 3, 2, 'pending-payment', NULL, NULL, '2023-11-07 08:59:10', '2023-11-07 08:59:10', NULL),
	(17, 'ahmad', 'qeOSyK9Sv9', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Sarawak', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:40:05', '2023-11-08 01:40:05', NULL),
	(18, 'ahmad', 'yOcpIBQGfr', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:40:24', '2023-11-08 01:40:24', NULL),
	(19, 'ahmad', 'TQqW62rAJJ', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:40:42', '2023-11-08 01:40:42', NULL),
	(20, 'ahmad', 'zcgWlnjxzB', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:40:54', '2023-11-08 01:40:54', NULL),
	(21, 'ahmad', 'B6Ca8MiIuT', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:41:43', '2023-11-08 01:41:43', NULL),
	(22, 'ahmad', 'S7eHFKYHnW', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:41:46', '2023-11-08 01:41:46', NULL),
	(23, 'ahmad', 'qUH81ZT3EJ', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:41:53', '2023-11-08 01:41:53', NULL),
	(24, 'ahmad', 'JDr6lxpNhj', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Negeri Sembilan', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:46:16', '2023-11-08 01:46:16', NULL),
	(25, 'ahmad', 'CNXAoOLeSw', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Negeri Sembilan', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:46:28', '2023-11-08 01:46:28', NULL),
	(26, 'ahmad', 'sm9ormmcpZ', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:46:35', '2023-11-08 01:46:35', NULL),
	(27, 'ahmad', 'wqPeOOZcO4', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:48:14', '2023-11-08 01:48:14', NULL),
	(28, 'ahmad', 'cNwQ7aTh1E', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Negeri Sembilan', '20500', 1464.98, 5, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:49:25', '2023-11-08 01:49:25', NULL),
	(29, 'ahmad', 'b4duF6m8To', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:49:48', '2023-11-08 01:49:48', NULL),
	(30, 'ahmad', '7Sri0dLKhW', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:52:20', '2023-11-08 01:52:20', NULL),
	(31, 'ahmad', '4N74LYHhav', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:57:24', '2023-11-08 01:57:24', NULL),
	(32, 'ahmad', 'WwRve53cC5', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:57:33', '2023-11-08 01:57:33', NULL),
	(33, 'ahmad', 'b5FQ7PfwsG', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:57:49', '2023-11-08 01:57:49', NULL),
	(34, 'ahmad', 'ZkAltkjPf7', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:57:58', '2023-11-08 01:57:58', NULL),
	(35, 'ahmad', 'g6HEoegM1K', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:58:03', '2023-11-08 01:58:03', NULL),
	(36, 'ahmad', 'u0ni7tJcgj', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:59:49', '2023-11-08 01:59:49', NULL),
	(37, 'ahmad', 'UVkykZyfDU', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 01:59:55', '2023-11-08 01:59:55', NULL),
	(38, 'ahmad', 'BPaoTaV5rA', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:00:17', '2023-11-08 02:00:17', NULL),
	(39, 'ahmad', 'JRuw0ko19E', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:02:53', '2023-11-08 02:02:53', NULL),
	(40, 'ahmad', '8t5kNtPFSa', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:04:49', '2023-11-08 02:04:49', NULL),
	(41, 'ahmad', 'fV8ImbbUqP', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:04:53', '2023-11-08 02:04:53', NULL),
	(42, 'ahmad', 'IdiDId5BBI', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:04:57', '2023-11-08 02:04:57', NULL),
	(43, 'ahmad', '2WzR3muh6n', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:05:18', '2023-11-08 02:05:18', NULL),
	(44, 'ahmad', 'w6BxahekX3', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:05:28', '2023-11-08 02:05:28', NULL),
	(45, 'ahmad', '8jikon0w3U', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:05:57', '2023-11-08 02:05:57', NULL),
	(46, 'ahmad', 'DjxsyNrLYI', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:08:43', '2023-11-08 02:08:43', NULL),
	(47, 'ahmad', 'z0rdIOtmEA', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:10:32', '2023-11-08 02:10:32', NULL),
	(48, 'ahmad', 'S758CNA8Iy', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Johor', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:11:16', '2023-11-08 02:11:16', NULL),
	(49, 'ahmad', '8OZ7rVVZ4f', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Johor', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:11:55', '2023-11-08 02:11:55', NULL),
	(50, 'ahmad', 'P4gIXpy7J2', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Melaka', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:12:11', '2023-11-08 02:12:11', NULL),
	(51, 'ahmad', 'wNt2lUSdXI', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:13:50', '2023-11-08 02:13:50', NULL),
	(52, 'ahmad', '61jZpyr5tx', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Perlis', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:19:32', '2023-11-08 02:19:32', NULL),
	(53, 'ahmad', '8VFGyXYBCs', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Perlis', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:21:26', '2023-11-08 02:21:26', NULL),
	(54, 'ahmad', 'U9rgZthPqE', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Kelantan', '20500', 739.99, 3, 3, 'pending-payment', NULL, NULL, '2023-11-08 02:27:13', '2023-11-08 02:27:13', NULL),
	(55, 'ahmad', '1SL5P2oufv', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Kelantan', '20500', 0.00, 0, 0, 'pending-payment', NULL, NULL, '2023-11-08 04:32:34', '2023-11-08 04:32:34', NULL),
	(56, 'ahmad', 'fWGKyo9Wdn', 'ahmad@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 564.00, 2, 2, 'pending-payment', NULL, NULL, '2023-11-08 04:33:36', '2023-11-08 04:33:36', NULL),
	(57, 'nero ali', 'IMMXfI3AYh', 'ali@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 15.00, 1, 1, 'pending-payment', NULL, NULL, '2023-11-08 06:50:13', '2023-11-08 06:50:13', NULL),
	(58, 'nero ali', 'Avxq0nRpGF', 'ali@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Kelantan', '20500', 64.93, 1, 1, 'success', NULL, NULL, '2023-11-08 07:17:58', '2023-11-08 08:17:53', NULL),
	(59, 'AIDATUL KHAIRINA BINTI AZMI', '4otCcZaWX3', 'aidatulkhairina@gmail.com', '+60142152935', 'D-113, right avenue block, CA,USA', 'selnagar', 'k terengganu', 'Terengganu', '20500', 36.95, 1, 1, 'success', NULL, NULL, '2023-11-08 08:29:40', '2023-11-08 08:31:58', NULL),
	(60, 'ering', 'pWf30wTYlp', 'aidatulkhairina@gmail.com', '01139807706', 'japan sri lanka', 'selnagar', 'k terengganu', 'Terengganu', '20500', 125.00, 1, 1, 'success', NULL, NULL, '2023-11-09 01:16:28', '2023-11-09 01:16:52', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
