-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 19:27:08
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_miranda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `guest` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL,
  `check_in` date NOT NULL,
  `check_in_hour` time NOT NULL,
  `check_out` date NOT NULL,
  `check_out_hour` time NOT NULL,
  `room_type` enum('Suite','Double bed','Single bed','Double Superior') NOT NULL,
  `room_number` int(11) NOT NULL,
  `status` enum('Check In','In Progress','Check Out') NOT NULL,
  `room_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bookings`
--

INSERT INTO `bookings` (`id`, `guest`, `order_date`, `check_in`, `check_in_hour`, `check_out`, `check_out_hour`, `room_type`, `room_number`, `status`, `room_id`) VALUES
(1, 'Belinda Ernser', '2023-02-27 04:08:32', '2023-08-31', '05:28:00', '2023-04-21', '21:55:00', 'Double bed', 932, 'In Progress', 289),
(2, 'Shaun Wilderman', '2022-11-15 18:28:15', '2023-04-08', '17:33:00', '2022-10-10', '02:16:00', 'Double Superior', 138, 'Check In', 513),
(3, 'Jeremy Leuschke', '2023-06-01 04:02:28', '2023-04-19', '13:57:00', '2023-09-18', '00:15:00', 'Double bed', 400, 'Check In', 274),
(4, 'Ken Blanda', '2023-05-20 11:30:53', '2023-03-11', '16:24:00', '2023-08-29', '18:06:00', 'Double bed', 136, 'Check In', 615),
(5, 'Dr. Rosa Ritchie PhD', '2023-03-04 16:59:24', '2022-12-25', '01:55:00', '2023-07-29', '07:58:00', 'Suite', 468, 'Check Out', 636),
(6, 'Ron Labadie', '2023-09-18 06:07:26', '2023-02-14', '22:49:00', '2023-07-02', '20:59:00', 'Double bed', 314, 'Check Out', 935),
(7, 'Renee Gutkowski', '2023-08-17 04:25:11', '2023-06-18', '04:50:00', '2022-12-11', '20:15:00', 'Single bed', 253, 'Check Out', 721),
(8, 'Angelina Veum', '2023-03-25 09:43:12', '2023-09-02', '01:21:00', '2023-07-12', '05:03:00', 'Suite', 647, 'In Progress', 4),
(9, 'Jennifer Jast', '2023-07-30 06:16:16', '2023-02-28', '02:31:00', '2023-01-04', '13:18:00', 'Single bed', 734, 'Check Out', 425),
(10, 'Dr. Adam Terry', '2023-02-26 11:34:10', '2023-09-12', '10:10:00', '2023-02-12', '02:35:00', 'Double Superior', 105, 'Check In', 564),
(11, 'Katrina Boehm', '2023-04-14 15:10:04', '2022-12-31', '10:14:00', '2023-09-20', '21:16:00', 'Double Superior', 177, 'Check In', 329),
(12, 'aaa ', '2023-11-27 13:51:05', '2023-08-20', '22:26:00', '2023-08-17', '10:51:00', 'Double Superior', 865, 'In Progress', 945),
(13, 'Sherry Murray-Mante', '2023-01-23 14:57:51', '2023-02-11', '17:28:00', '2022-12-12', '10:39:00', 'Suite', 651, 'In Progress', 99),
(14, 'Joyce McKenzie', '2023-09-09 12:32:25', '2023-06-02', '17:34:00', '2022-10-21', '02:32:00', 'Suite', 228, 'In Progress', 173),
(15, 'Francisco Upton', '2022-10-22 18:22:58', '2023-04-03', '11:34:00', '2022-11-17', '14:21:00', 'Single bed', 650, 'In Progress', 688),
(16, 'Bertha Wolf', '2023-08-12 00:42:40', '2023-04-08', '15:10:00', '2023-07-10', '20:00:00', 'Suite', 217, 'In Progress', 527),
(17, 'Patsy Nitzsche', '2023-09-27 23:23:36', '2023-08-08', '07:28:00', '2022-11-26', '08:40:00', 'Single bed', 533, 'Check In', 400),
(18, 'Miriam Gutmann', '2023-07-07 11:05:31', '2023-04-06', '15:27:00', '2022-10-17', '14:52:00', 'Suite', 767, 'In Progress', 680),
(19, 'Jeremiah Bogisich', '2022-10-08 20:31:19', '2023-02-02', '07:32:00', '2023-07-09', '20:32:00', 'Double bed', 185, 'Check Out', 551),
(20, 'Megan Brown', '2023-07-08 20:38:51', '2023-05-10', '18:30:00', '2023-06-02', '17:04:00', 'Double Superior', 963, 'In Progress', 133),
(21, 'ddd', '2023-09-23 00:00:00', '2023-12-23', '05:30:00', '2023-10-05', '10:32:00', 'Single bed', 50, 'In Progress', 500),
(22, 'ddd', '2023-09-23 00:00:00', '2023-12-23', '05:30:00', '2023-10-05', '10:32:00', 'Single bed', 50, 'In Progress', 500),
(23, 'ddd', '2023-09-23 00:00:00', '2023-12-23', '05:30:00', '2023-10-05', '10:32:00', 'Single bed', 50, 'In Progress', 500),
(24, 'ddd', '2023-09-23 00:00:00', '2023-12-23', '05:30:00', '2023-10-05', '10:32:00', 'Single bed', 50, 'In Progress', 500),
(25, 'ddd', '2023-09-23 00:00:00', '2023-12-23', '05:30:00', '2023-10-05', '10:32:00', 'Single bed', 50, 'In Progress', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `customer` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `order_id`, `date`, `customer`, `comment`) VALUES
(1, 3702883934, '2022-12-22', 'Kenneth Hirthe MD', 'Doloremque laudantium vero consequuntur tenetur omnis laborum consequatur doloribus. Fugit natus nam modi vel similique repudiandae.'),
(2, 5555, '2023-09-20', 'casandra@gmail.com', 'aaaaaaaaaaaa'),
(3, 5153105244, '2023-03-19', 'Cindy Bergstrom', 'Officia provident a tenetur iure praesentium dicta reprehenderit.'),
(4, 5833878297, '2022-11-10', 'Rudolph Erdman', 'Enim nam fuga laboriosam iste occaecati. Excepturi aliquid laborum ea ab temporibus. Quae a error culpa fugiat perferendis. Ea eaque perspiciatis nemo veritatis.'),
(5, 7295630087, '2023-06-21', 'Wanda Stamm', 'Animi ratione unde vitae. Praesentium quisquam accusantium quis unde. Corrupti saepe accusamus aspernatur quos esse. Quae aperiam magnam iste. Assumenda dolor ad optio fugit commodi error accusamus veritatis. Exercitationem doloribus numquam voluptatum ipsum.'),
(6, 7563597481, '2023-02-12', 'Keith Parker Sr.', 'Temporibus totam asperiores ab nam quos inventore consequuntur.'),
(7, 1254550084, '2022-10-17', 'Rosa Ritchie', 'In deleniti nam necessitatibus aut perferendis nesciunt porro minima. Commodi neque consequuntur ut consequatur eaque. Cum incidunt nisi earum iure molestiae illum itaque asperiores.\nMinus rerum quidem nihil dolor ipsa asperiores sit corrupti quae. Cupiditate maiores eius officia ab. Maiores dolorum quod tenetur voluptas harum neque.\nIncidunt consectetur dolores. Libero possimus quibusdam odit eos expedita. Deserunt quos fugit error.'),
(8, 4338802711, '2022-10-17', 'Edmond Bechtelar DDS', 'Omnis ipsa aspernatur expedita ea esse dolore cumque.'),
(9, 4611224888, '2023-02-01', 'Nathaniel Nienow', 'Ab laborum voluptates laborum voluptatem vel porro corrupti molestiae cum.'),
(10, 6777275435, '2023-04-03', 'Jody Yost', 'Ipsum soluta recusandae perferendis dignissimos aliquid magni. In occaecati quisquam iure beatae. Expedita eveniet delectus ab esse nulla.\nVoluptatem nesciunt itaque. Inventore dicta aliquid. Necessitatibus nemo autem vero nisi fuga facere optio reiciendis.\nTenetur laborum maiores sunt cum ipsum placeat consectetur. Veritatis ipsam ipsa quo aperiam officiis aut fuga saepe. Sunt quidem debitis.'),
(11, 6959514742, '2023-08-18', 'Rick Weber DDS', 'Incidunt ab totam laborum.'),
(12, 7553393203, '2023-06-18', 'Cedric Kulas', 'Quia similique doloribus totam nobis consequuntur. Cupiditate doloremque in ex eius. Ea aspernatur iste sequi harum doloribus fugit ipsa minima nobis.\nVoluptatem voluptates animi eum laudantium cupiditate aut optio odit natus. Sunt debitis asperiores iure culpa sunt nesciunt enim ipsa fuga. Iste voluptate enim.\nQuibusdam voluptatum minus sunt esse mollitia aut. Dolore molestiae ut consectetur laboriosam veniam vitae ipsum hic. Doloremque nulla ipsam minus qui.'),
(13, 6182902900, '2023-01-15', 'Marty Lowe', 'Saepe similique consectetur alias quaerat asperiores saepe quis provident. Suscipit excepturi itaque accusamus velit necessitatibus ducimus at minus. Non qui facere dolore non deserunt consequuntur vel. Beatae earum reiciendis odit nulla perferendis omnis placeat quae earum. Iste eligendi perspiciatis cupiditate voluptatum neque. Eum deserunt sapiente id.'),
(14, 9520232562, '2023-10-04', 'Amelia Buckridge', 'Voluptates labore earum inventore earum nemo magnam est nulla unde.'),
(15, 7181990876, '2023-07-15', 'Miss Charlene Hauck', 'Atque molestias quaerat eaque maiores ducimus. Aspernatur dolorum libero quae ab quibusdam earum. Nisi illum enim at laudantium aliquid asperiores ea laboriosam. Ad illum ipsum quae cupiditate sit eligendi mollitia dolore.'),
(16, 5789023783, '2023-03-29', 'Ted Walsh', 'Placeat aperiam sint dolorum maxime.\nVeniam rerum reiciendis error.'),
(17, 4328734677, '2023-04-16', 'Elsie Kunde', 'Harum beatae totam dignissimos ea voluptatum excepturi corporis quas. Repellendus deleniti sit. Porro corrupti error.'),
(18, 2526176583, '2023-09-24', 'Eleanor Welch', 'Officiis commodi consequatur pariatur quia alias unde dolores.\nQuae tempore ut blanditiis ipsa.\nSapiente quam quis voluptatem nemo id suscipit.\nEveniet fugiat odit.'),
(19, 6011054200, '2023-09-25', 'Ashley Feeney', 'Nesciunt repellendus in sunt perspiciatis nulla optio accusantium esse. Ipsam ut corporis.'),
(20, 609997342, '2022-12-13', 'Santos Macejkovic', 'Repudiandae cum repellat architecto dolor expedita aperiam quae ipsam.\nNam commodi saepe consectetur incidunt nesciunt maiores voluptatibus.\nUnde necessitatibus iusto velit rerum dolorum animi explicabo dolores.'),
(21, 5555, '2023-09-20', 'casandra@gmail.com', 'aaaaaaaaaaaa'),
(22, 5555, '2023-09-20', 'casandra@gmail.com', 'aaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_form`
--

CREATE TABLE `post_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `shipping_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `post_form`
--

INSERT INTO `post_form` (`id`, `name`, `phone`, `subject`, `email`, `shipping_date`, `message`) VALUES
(1, 'dd', '44', 'd', 'admin@admin.com', '2023-07-31 12:13:39', 'sadsa'),
(2, 'casandra', '600', 'd', 'Casandra.Stark71@hotmail.es', '2023-07-31 12:34:10', 'scasf'),
(3, 'casandra', '600', 'd', 'Casandra.Stark71@hotmail.es', '2023-07-31 12:34:25', 'scasf'),
(4, '', '3', 's', 'admin@admin.com', '2023-07-31 12:49:06', 's'),
(5, 'apple', '3', 'd', 'admin@admin.com', '2023-07-31 12:54:05', 'dd'),
(6, 'dd', '44', 'ddd', 'ddd@hotmail.es', '2023-07-31 13:06:32', 'dd'),
(7, 'dd', '123456789', 'd', 'admin@admin.com', '2023-07-31 13:11:11', 'dd'),
(8, 'dd', '123456789', 'd', 'admin@admin.com', '2023-07-31 13:11:46', 'dd'),
(9, 'd', '123456789', 'd', 'admin@admin.com', '2023-07-31 13:12:59', 'd'),
(10, 'dd', '344333222', 'd', 'admin@admin.com', '2023-07-31 13:26:20', 'd'),
(11, 'apple', '123245789', 'd', 'admin@admin.com', '2023-07-31 13:34:38', 'd'),
(12, 'dd', '122324578', 'dd', 'admin@admin.com', '2023-07-31 13:52:45', 'dd'),
(13, 'dd', '122324578', 'dd', 'admin@admin.com', '2023-07-31 16:19:29', 'dd'),
(14, 'Giuseppe', '122324578', 'dd', 'admin@admin.com', '2023-07-31 16:25:22', 'dd'),
(15, 'Casandra', '123456789', 'Cv', 'admin@admin.com', '2023-07-31 16:29:18', 'gtdgfhg'),
(16, 'Casandra', '123456789', 'Cv', 'admin@admin.com', '2023-07-31 16:36:16', 'gtdgfhg'),
(17, 'apple', '123245789', 'Cv', 'casandra211@gmail.com', '2023-07-31 16:38:25', 'tttttttttttttttttttt'),
(18, 'Ricard', '123245789', 's', 'casandra211@gmail.com', '2023-07-31 16:41:03', 'adas'),
(19, 'Ricard', '123245789', 's', 'casandra211@gmail.com', '2023-07-31 16:42:56', 'adas'),
(20, 'Ricard', '123245789', 's', 'casandra211@gmail.com', '2023-07-31 16:43:05', 'adas'),
(21, 'apple', '123245789', 'df', 'admin@admin.com', '2023-07-31 16:43:21', 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_id` bigint(20) NOT NULL,
  `amenities` varchar(500) NOT NULL,
  `bed_type` enum('Suite','Double Superior','Double bed','Single bed') NOT NULL,
  `rate` int(11) NOT NULL,
  `offer_price` int(11) NOT NULL,
  `status` enum('Occupied','Available') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `room_id`, `amenities`, `bed_type`, `rate`, `offer_price`, `status`) VALUES
(1, 979, 496, 'Kitchen', 'Double bed', 406, 235, 'Available'),
(2, 684, 382, 'Breakfast', 'Double Superior', 198, 733, 'Available'),
(3, 220, 209, 'Tea / Coffee Maker', 'Single bed', 166, 579, 'Occupied'),
(4, 462, 268, 'Air Conditioner', 'Double bed', 948, 396, 'Available'),
(5, 708, 967, 'Air Conditioner', 'Double bed', 194, 316, 'Available'),
(6, 365, 738, 'Swimming pool', 'Double bed', 397, 33, 'Available'),
(7, 259, 782, 'Recreational activities', 'Double bed', 34, 939, 'Available'),
(8, 218, 629, 'Kitchen', 'Double bed', 246, 425, 'Available'),
(9, 464, 778, 'Tea / Coffee Maker', 'Double bed', 642, 874, 'Occupied'),
(10, 597, 395, 'Mini Bar / Mini Fridge', 'Suite', 664, 383, 'Occupied'),
(11, 996, 951, 'Recreational activities', 'Single bed', 338, 786, 'Occupied'),
(12, 236, 131, 'Mini Bar / Mini Fridge', 'Double bed', 545, 959, 'Occupied'),
(13, 75, 67, 'Air Conditioner', 'Suite', 610, 937, 'Available'),
(14, 475, 546, 'Tea / Coffee Maker', 'Double Superior', 487, 856, 'Occupied'),
(15, 452, 22, 'Swimming pool', 'Double Superior', 922, 191, 'Available'),
(16, 738, 678, 'Recreational activities', 'Suite', 696, 155, 'Occupied'),
(17, 105, 923, 'Mini Bar / Mini Fridge', 'Double bed', 264, 590, 'Available'),
(18, 407, 733, 'Kitchen', 'Double Superior', 693, 117, 'Occupied'),
(19, 301, 324, 'Tea / Coffee Maker', 'Suite', 111, 220, 'Available'),
(20, 773, 352, 'Mini Bar / Mini Fridge', 'Single bed', 287, 820, 'Available'),
(21, 444, 200, 'swim', 'Suite', 50, 700, 'Available'),
(22, 11, 200, 'swim', 'Suite', 50, 700, 'Available'),
(23, 11, 200, 'swim', 'Suite', 50, 700, 'Available');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `contact`, `description`, `email`, `name`, `startDate`, `status`, `password`) VALUES
(1, 'caasa ', 'test description', 'casandra@gmail.com', 'lolo', '2023-10-05', 'inactive', 'ad576a956b3de8156baada5cbc9d1de4771cbe7bcb7e8c957497d9aa8e6d762a6a852f63b0dec98d2d2a5ff1566a65462a7d15c0465d5353f395887ab2c018cf'),
(2, '363.711.5442 x4097', 'Sapiente iusto illo alias accusamus autem iusto itaque. Officia eligendi fuga deserunt aliquam fugiat optio. Tempora sapiente similique cupiditate ea voluptates tempora at iusto.\nPorro molestiae illum impedit doloremque. Minus modi sunt asperiores molestiae natus dolor. Totam quos quo molestias quia.\nQuas ex expedita dicta. Dolorum totam eligendi. Assumenda iusto necessitatibus earum assumenda sequi quaerat architecto exercitationem.', 'Violette.Little3@gmail.com', 'Amber Gleason', '2022-11-11', 'inactive', '230ead75f91eaf79b8aa0bb67f761799ffc61489f6d6ea8d77434c1390d3b76a87ad24947f8fdffccae9d26193c817fa1a4010e015337d9fdb32342f3a66668f'),
(3, '665-902-5419 x337', 'Harum sequi asperiores optio incidunt sunt blanditiis aut veritatis repellendus.', 'Reynold.Abernathy@gmail.com', 'Alyssa Huel', '2023-06-06', 'inactive', '6b3a65bffec83cb785c86c2a023de014641855f6231bf452bd6d3127ef428f610d4e54f5b10e52ed771df6a5f822acd70750b4b413c1e7b325409bd8fa125dc2'),
(4, '1-255-501-3236', 'Quis dolorum aperiam. Ipsum necessitatibus id iste itaque voluptatem itaque tenetur velit omnis. Iure dicta delectus officia libero vero officia dicta expedita. Animi autem molestiae. Deserunt ullam beatae perferendis nostrum illo nesciunt veniam dolor. Totam omnis nesciunt non vitae porro ex accusamus quam.', 'Brett_Emmerich@gmail.com', 'Gail Aufderhar', '2022-12-08', 'inactive', 'f88228220be176ba7b54f3ac9be665184c519b0e5f93453f1ceb84bae5b8acfa3581e4329d4b20df93364122499aca77b01a35c00fdc9431d846015b104d84cd'),
(5, '963.259.5857', 'Doloribus architecto aliquid maiores vel velit minima harum ullam.', 'Raul.Kuphal26@gmail.com', 'Arlene Rohan', '2023-05-02', 'active', 'df90f39319a9665a22f0b6ef38d7374e005fca6e5ec0e9ce18f725c66127e17d589b27296926d122b46a223ddb5353bdd7f3e89963d057e19d44ffcee1fb5e14'),
(6, '666.201.3414 x4852', 'Explicabo quo minima perspiciatis quia fugit ab qui quod. Occaecati ratione maiores quidem atque aspernatur.', 'Phoebe.Connelly11@gmail.com', 'Alexandra Hoeger', '2022-10-28', 'inactive', '0f1408de33881e2af4d484b2f17b99c3aa18fc5ea3ef964cd386fec98204e7e13dcea9f15140a15f4ca26d0b8438098a70dfe41ad281c48fcd7272c5f73467b7'),
(7, '(844) 731-2318 x691', 'Provident repudiandae quisquam totam. Eligendi amet atque perferendis voluptatum sunt facilis. Architecto non ullam temporibus consequuntur ratione.\nMinus quaerat iusto accusantium optio voluptatibus voluptate sapiente nesciunt. Explicabo est inventore consectetur nobis. Sapiente mollitia odit atque non.\nSapiente ex esse deleniti porro corporis totam. Molestias nam veritatis. Aliquid dolor necessitatibus doloremque nemo molestias.', 'Reagan35@yahoo.com', 'Audrey Gerhold-Bogan', '2023-03-28', 'active', '68bd9228ecdc0f0c749be466935dd31ee37fb57a9a35d728e3b800f8b31d7c433deeb938724ca780b6a2028b6d20e75391e946c9655a384a5bd721a274d9fc39'),
(8, '540-652-2106 x10262', 'Minima debitis cum rem consequuntur quos quasi natus veritatis.\nNemo ipsum necessitatibus repellat aspernatur accusantium numquam.', 'Leland_Bashirian18@gmail.com', 'Roosevelt Willms', '2023-04-04', 'inactive', '20fd33106d25a5d3dadde3e9b1c4c4e1697722900e0668638d471f0f6c9530df1823d74b039f368f998d08883e24f5788740e73c1f9e5b246d47e650cfa05512'),
(9, '1-225-927-6643 x7957', 'Tenetur eveniet consequatur consectetur voluptas excepturi ipsa optio.\nNon fuga nam quibusdam nulla fugiat dolore.\nFacere possimus quisquam ad numquam laborum.\nNeque eaque aperiam assumenda rerum assumenda officia.', 'Marietta95@yahoo.com', 'Santos Walsh', '2022-12-27', 'inactive', 'bad4e1a043f765b0de51db53615829b9760e2f78b295c8886d7fcbd8be50392c999e11b1ff4c515a1ceb6e06feb9ea0aafe377a9360d8fda1c0bcbe3e0f73ad0'),
(10, '218.375.1744 x265', 'Illo quidem illo iure quas reprehenderit sit ullam. Natus ipsam ut deleniti voluptatibus labore. Repellat eius amet ducimus dolorem.', 'Jazmin.Jacobson@hotmail.com', 'Natalie Russel', '2022-12-30', 'active', 'da8762fb6ac1a62c6a9f2559a8438e70e1df74b2be44206ea26eeb5c82cf34f3e508290189d4d2b55d68478861d095f5f92cf210641e5d28f31f4f66cafdce26'),
(11, '(634) 323-2742 x66458', 'Officia voluptatibus distinctio quisquam dolor provident consequatur qui natus blanditiis. Aut vitae quae sint porro provident exercitationem corrupti. Necessitatibus libero quo consequatur debitis. Dolores quam quod fugit. Hic beatae ipsum id dolore. Dolores itaque molestias dolor.', 'Holden_Hirthe@hotmail.com', 'Della Douglas', '2023-05-07', 'inactive', '0aba56ff314e741b6fce38ed92a60f47b0e4d9ff305800c4834223fbfe756f5b0f8b72f249b0d30e656f4831080f5b976b1c53bbaa3be00164c735b56968127a'),
(12, '(836) 416-6865 x4482', 'Repudiandae ad doloribus.', 'Janae.Shanahan@yahoo.com', 'Jacob Beier', '2023-07-11', 'inactive', '4f2e04aed176f278169d20156c1c8fbac113e4d8ab34e8e66a2f006d26f30f02660a3b439cc0cf921a2eb27d17df8535e641165a698d88dfd45df7864e7ace08'),
(13, '972-737-1101', 'Ea non aperiam quo eligendi vel. Quod maiores dolor aut reprehenderit eligendi blanditiis blanditiis expedita. Neque ratione consequatur totam soluta ratione mollitia.\nPerferendis nobis praesentium facilis alias. Esse enim adipisci illo eligendi aspernatur voluptatem enim cum. Ipsum ipsa nihil praesentium voluptatum dicta error in.\nProvident architecto animi consequatur nihil at dolores ad nemo doloribus. Reprehenderit quas minus atque repellendus. Soluta sunt perferendis suscipit ipsa consequuntur esse.', 'Nadia.Gislason@yahoo.com', 'Dwayne Swift', '2023-01-22', 'inactive', '3e693c2cbaccd4fb6c19fed59c453583c08c8ab3222776c6fac5dd43bc532697dc14ff7b3033e18dbf780d9bc10429d094b2d085361f60b1a7c01aab13930bb1'),
(14, '464.684.8196 x494', 'Repellat possimus quod velit vero fuga nulla eius provident perferendis. Reprehenderit aperiam repudiandae quas odit. Iste repellendus dolor blanditiis assumenda velit nam consequatur at necessitatibus.\nQui libero suscipit. Ipsum assumenda culpa ea. Doloribus placeat ipsam quod dolor error amet eligendi.\nMinima velit rem. Iure distinctio odio sapiente. Assumenda dignissimos a dolorem sequi inventore illo tempora.', 'Laney.Homenick1@yahoo.com', 'Nancy Hodkiewicz', '2023-02-06', 'active', 'adff73dd7915788f178c6356f062904a2c5b4acb40906f7cd0886398fae13e036ec35201903114f763c2caec3648ff4a38f43081ecc73457ae78d9c251dba974'),
(15, '(862) 239-7999 x5937', 'Ut architecto ab sunt ducimus voluptas. Cumque unde dolore totam excepturi.', 'Lavina85@gmail.com', 'Ray Nicolas', '2022-10-14', 'active', '0e1da50976dfb9257093193e4670f61bef910c89ecf60c432473b2698aef34b02c6a149b9b0de408ed96232705f4d6ee6ef2a6326a533662a97a3737a3bc4dc5'),
(16, '244-425-2061 x0777', 'Quas nesciunt fugit accusamus. Possimus similique dolorem sit quae eveniet reprehenderit in.', 'Joe_Wiza36@yahoo.com', 'Marilyn McDermott', '2022-10-11', 'active', '97a328f947ce94176a8c47286fd723ff1d012a1c2b7445cd54c1ca0a888de1c1a6e5a5d26db2dae939b4137c7512a69137260388baea8f2b84feb5402b8c1afd'),
(17, '207.844.4307', 'Autem ad expedita iure quasi vel aut. Ducimus temporibus nesciunt esse eligendi sed eligendi porro. Repellat facere enim iusto fuga saepe maxime.\nQuisquam consequuntur facilis. Neque perspiciatis sit totam asperiores molestias sed quae aliquid. Maxime provident laboriosam ab.\nAnimi illum dolorem quasi ducimus ipsum. Reprehenderit veritatis cum quasi repellat pariatur ea repellendus iste aliquam. Quod voluptatem eveniet error.', 'Courtney52@gmail.com', 'Jackie Adams DDS', '2023-01-25', 'inactive', 'b7ad27eb8ca021aab64f3af4f2f9154aa92650dd91f059919f9da74aac036bfec4765a85b9f3b72f67db360b0278b55e3b496a24c8afb202705c17f9e60e5b22'),
(18, '1-238-410-2516 x4046', 'Esse ad dignissimos dolorum corporis similique itaque quaerat. Quo dolorum quis suscipit ad tempora sit. Sapiente fugit sapiente.\nExplicabo in voluptatem error aliquam quae. Vero optio rem minus. Nulla molestias a rerum.\nConsectetur occaecati alias distinctio dicta. A ipsam tempora aliquid quasi assumenda expedita. Placeat doloremque numquam tempora beatae fugit maxime nesciunt.', 'Kianna_Dibbert85@yahoo.com', 'Ramiro Kessler', '2022-11-05', 'inactive', 'd7daa42fdb951bf6fe527e15c36d7d2510a996486a04f437834bb5186c88d37708e4137db91ddccb142c3d9c8647777ee09931d47a534be4d1e362a52c2e3833'),
(19, '513.892.7825 x97938', 'Ab molestiae quasi pariatur expedita omnis illo praesentium.', 'Kiera.Mitchell78@yahoo.com', 'Miss Ollie Christiansen', '2023-07-29', 'active', '4c65e3f49ee07d55763f0c031f415e009ab26038fcbe563f45f078d5be043e370251030bd1873954dc07cc13bdba16050f463dc4734dcebcee1d570626e2a332'),
(20, 'test ', 'test description', 'casandra@gmail.com', 'lolo', '2023-10-05', 'inactive', '39bbdd7b2c86d8e68fe352dde9e30495e8a91d61fe20d68f197dfea06a5a8b69baf339fb05070295b01cd4460d5bc92b79e8a7ed7595401214d9a468ae9ac712'),
(22, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', '8e8913ebf578dafdca5e2670179a5c561f85285f80b403503d478bc19015e325e4130e0030fe32078fdfb2e1ddee9ab3f7bd4649b52042791c55c1339bea1b73'),
(23, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', '32d570287a8906bfd1cf1c420dc4956a144af057cb99522051292849b712870bc726a116db5ba93e59786360ea8c7a2c5a53aed2b96f3c373658530a9015cd8f'),
(24, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', '66f442adc878eadb92c8cce31828bcf875c3700c3e7b9df02e5af2494fc2ac00a62c736cf386e74967961622fd2c2214c0516a21ed3013355dd8296d940b539c'),
(25, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', '3e35978930f12b962d8427921ae5dedaab0d608159754e1e57b066f0fb1703108c2fca3f5306c68012ba8dd6d997c8215ea26b0a76cf9fdf54997fec1cfe3bd2'),
(26, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-01-05', 'inactive', '1dd8a22b34175b693a43c79d24def572f16d217ed3f124dcae2f149d963e95e57c2ff675eb164a91e1adb784c78b2b0e0b93e3989af04bca6274070c254f717e'),
(27, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', 'fa1173b4c70002c208509bde902fcb97b5cdf4dc6c426f56ee1d24ae74995b3c4a618eb5595178cecca41d24914799164476336c3aa428123f94002fdb0be977'),
(28, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', '9c95807122a790c70605d62bd0bf2c2b29901d1b2346e2ee0c41af7a80928abf1c4beaa8bbeea9efc036f2076ae03e89c35642053fccc923566fe4786003c385'),
(29, 'casandra', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', 'b76555e2bdfb4e27e12549829394deaa9e372a2b54581032b7bac9a0ffc85426b45be5b7c80b4611e5b6fd242aa01b0553fad2f9a535286cc4a6981e3d62b0b3'),
(30, 'aaa', 'test description', 'casandra@gmail.com', 'casa', '2023-10-05', 'inactive', '9d7d52d7a3e2c12cb7390176f0da02261406d2b810bc3a620e70f7c007ffdc81575de13369c0725467d55e50d0827f55bcc3379b0a747854ffc68016572f5721');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post_form`
--
ALTER TABLE `post_form`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `post_form`
--
ALTER TABLE `post_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
