-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 10 月 23 日 09:37
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `daichi_portfolio`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `menu_price` float NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `menu_picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_price`, `stock_quantity`, `menu_picture`) VALUES
(1, 'Bear roast', 1500, 50, ' Bear roast.jpeg'),
(2, 'Jibie ham', 1000, 50, 'Jibie ham.jpeg'),
(3, 'Jibie pot', 900, 60, 'Jibie pot.jpeg'),
(4, 'Jibie soup', 1200, 50, 'Jibie soup.jpeg'),
(5, 'Potato fries', 500, 50, 'Potato fries.jpeg'),
(6, 'Roast deer', 1500, 50, 'Roast deer.jpeg'),
(7, 'salad', 900, 30, 'salad.jpeg'),
(8, 'Sandwich', 1300, 60, 'Sandwich.jpeg'),
(9, 'Wild boar roast', 1500, 50, 'Wild boar roast.jpeg'),
(10, 'Wild boar steak', 1500, 30, 'Wild boar steak.jpeg');

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `total_price` float(50,2) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `menu_id`, `order_quantity`, `total_price`, `order_status`) VALUES
(1, 2, 8, 25, 32500.00, 'DELIVERED'),
(2, 2, 9, 30, 45000.00, 'PAID'),
(3, 2, 10, 10, 15000.00, 'PAID'),
(4, 2, 1, 30, 45000.00, 'DELIVERED');

-- --------------------------------------------------------

--
-- テーブルの構造 `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL,
  `numberofpeople` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `user_id`, `first_name`, `last_name`, `date`, `time`, `numberofpeople`) VALUES
(1, 1, 'admin123', 'admin123', '2020-11-01', '18:00', 2),
(2, 2, 'user', 'user', '2020-11-01', '18:00', 2),
(3, 2, 'user', 'user', '2020-11-01', '18:00', 2),
(4, 1, 'admin123', 'admin123', '2020-11-02', '18:00', 2),
(5, 1, 'admin123', 'admin123', '2020-11-12', '18:00', 2),
(6, 2, 'user', 'user', '2020-12-01', '18:00', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `total_price` float(50,2) NOT NULL,
  `payment` float(50,2) NOT NULL,
  `money_change` float(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `order_id`, `user_id`, `menu_id`, `total_price`, `payment`, `money_change`) VALUES
(1, 1, 2, 8, 32500.00, 40000.00, 7500.00),
(2, 2, 2, 9, 45000.00, 50000.00, 5000.00),
(3, 3, 2, 10, 15000.00, 20000.00, 5000.00),
(4, 4, 2, 1, 45000.00, 50000.00, 5000.00);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `username`, `password`, `status`) VALUES
(1, 'admin123', 'admin123', 'admin123', '12345', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'A'),
(2, 'user', 'user', 'user2', '12345', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'U');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- テーブルのインデックス `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- テーブルのインデックス `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- テーブルのインデックス `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- テーブルのAUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルのAUTO_INCREMENT `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルのAUTO_INCREMENT `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルのAUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;