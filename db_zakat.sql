-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2019 pada 04.33
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `admin_number` varchar(100) NOT NULL,
  `admin_email` varchar(225) NOT NULL,
  `admin_pass` varchar(225) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(225) NOT NULL,
  `admin_job` varchar(225) NOT NULL,
  `admin_gender` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_masjid` varchar(100) NOT NULL,
  `admin_status` varchar(100) NOT NULL,
  `admin_child` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_number`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`, `admin_gender`, `admin_address`, `admin_masjid`, `admin_status`, `admin_child`) VALUES
(3, 'admin', '', 'admin@gmail.com', 'admin', 'profile-2398782_960_720.png', 'Indonesia', 'Bla bla bla', '08123456789', 'Admin', '', '', '', '', ''),
(7, 'Diva', '123123123', '', '', '', '', '', '091293129', '', 'Perempuan', 'Bandung', '', 'Nikah', '2'),
(8, 'Diva', '123123', '', '', '', '', '', '08112881', '', 'Perempuan', 'Pulomas', 'Masjid 1', 'Nikah', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `custom_size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` text NOT NULL,
  `category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Flat Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Slippers', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_subject` text NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(1, 'Rasyid', 'rikushin3@gmail.com', 'Testing', 'Testing Message');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_city` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_masjid` varchar(100) NOT NULL,
  `customer_pos` text NOT NULL,
  `customer_img` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `customer_city`, `customer_address`, `customer_masjid`, `customer_pos`, `customer_img`, `customer_ip`) VALUES
(5, 'customer', 'customer@gmail.com', 'customer', '0812345678', 'Bandung', 'Buah Batu', '', '12345', 'profile-2398782_960_720.png', '::1'),
(6, 'Rasydi', 'awd@gmail.com', '', '', 'adawd', 'awdawd', 'Masjid 1', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `custom_size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `custom_size`, `order_date`, `order_status`) VALUES
(30, 5, 450000, 744695764, 1, '38', '', '2019-07-11', 'Complete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `description`
--

CREATE TABLE `description` (
  `desc_id` int(10) NOT NULL,
  `desciption_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `description`
--

INSERT INTO `description` (`desc_id`, `desciption_about`) VALUES
(1, '<p>Amezing didirikan pada tahun 2018 dimulai dengan menjual baju secara online, namun pada tahun 2019 Amezing berganti produk dengan menjual sepatu. Nama merek Amezing, terinspirasi dari kata bahasa inggris yaitu amazing yang memiliki arti luar biasa. Diubah menjadi Amezing karena kata Ame diambil dari nama pemilik yaitu Amelia Putri Anisa dan kata zing adalah bahasa inggris yang artinya semangat. Produk Amezing dibuat oleh tangan para pengrajin lokal di Indonesia.</p>\r\n<p>Dengan menggunakan kualitas terbaik dari bahan-bahan dan material pilihan. Produk Amezing dibuat dengan desain yang menarik, dimana pada satu sepatu dapat menghasilkan dua sampai tiga model sepatu dengan menambahkan atau bahkan melepas variasi pada sepatu.</p>\r\n<p>Selain itu, Amezing juga menawarkan custom ukuran sepatu dengan model yang sedang dijual. Amezing memberikan pelanggan rasa mewah yang dikemas dengan harga yang sangat menarik.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `payment_img` text NOT NULL,
  `payment_process` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `payment_img`, `payment_process`) VALUES
(16, 744695764, '2027501139_Diva.jpg', 'Ongoing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `custom_size` text NOT NULL,
  `order_status` text NOT NULL,
  `bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `custom_size`, `order_status`, `bank`) VALUES
(30, 5, 744695764, '13', 1, '', '38', 'Complete', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_name` text NOT NULL,
  `product_img_1` text NOT NULL,
  `product_img_2` text NOT NULL,
  `product_img_3` text NOT NULL,
  `product_img_4` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_img_1`, `product_img_2`, `product_img_3`, `product_img_4`, `product_price`, `product_desc`) VALUES
(15, 0, 'Masjid 1', 'gambarmasjid1.jpg', 'kegiatan1.jpg', 'kegiatan2.jpg', 'kegiatan3.jpg', 0, '<p>akdnwakwd</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_name`, `slide_img`) VALUES
(10, 'Slide 10', 'slide-10.jpg'),
(11, 'Slide 12', 'slide-12.jpg'),
(12, 'Slide 11', 'slide-11.jpg'),
(13, 'Slide 13', 'slide-13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`desc_id`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indeks untuk tabel `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `description`
--
ALTER TABLE `description`
  MODIFY `desc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
