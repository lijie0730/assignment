-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 08:32 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `name`, `email`, `comment`) VALUES
(9, 12, 'lijie', 'jie97@outlook.my', 'testing123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `f_name`, `l_name`, `username`, `password`, `email`, `gender`) VALUES
(12, 'Ang', 'Li Jie', 'lijie0730', 'Aa12345@', 'jie97@outlook.my', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `image`, `price`, `quantity`, `description`, `category`) VALUES
(1, 'Bud Light', 'b1.png', 59, 9, 'Bud Light is the best-selling beer in the United States. First introduced in 1982, by Anheuser-Busch, it has since become the go-to beer for many. You\'d be hard-pressed to go anywhere in the U.S. that doesn\'t serve this brew. The smooth taste makes it a perfect pick for a backyard BBQ or pairing for a game day tailgate.', 'beer'),
(2, 'Lagunitas IPA', 'b2.png', 58, 9, 'This India Pale Ale adds quite the tropical component to the flavors that Lagunitas usually brings to the table. The nose has aspects of grapefruit, orange, and other citrus elements that balance out the strong scent of hops. These flavors are well known amongst other West Coast IPAs. ', 'beer'),
(3, 'New Belgium Fat Tire Belgian Style Ale', 'b3.png', 59, 10, 'New Belgium\'s most well-known beer is Fat Tire Amber Ale. It\'s a clear, coppery-colored amber ale that\'s smooth and easy to drink. Fat Tire was inspired by a co-founder’s bicycle trip around Belgium, and the recipe incorporates the sweet aromas and flavors of his travels—toasty, caramel malts; fresh fennel, clean green apple; and sweet biscuits.', 'beer'),
(4, 'Angry Orchard Crisp Apple Cider', 'b4.png', 59, 10, 'A crisp and refreshing cider, its fresh apple aroma and slightly sweet, ripe apple flavors make it hard to resist.', 'beer'),
(5, 'Sierra Neveda Pale Ale', 'b5.png', 59, 10, 'Pale Ale began as a home brewer’s dream, grew into an icon, and inspired countless brewers to follow a passion of their own. Its unique piney and grapefruit aromas from the use of whole-cone American hops have fascinated beer drinkers for decades and made this beer a classic, yet it remains new, complex and surprising to thousands of beer drinkers every day. ', 'beer'),
(7, 'Oyster Bay Sauvignon Blanc', 'w1.png', 27, 10, 'The philosophy of Oyster Bay is to produce fine, distinctly regional wines that are elegant and assertive with glorious fruit flavours.', 'wine'),
(8, '19 Crimes Red Blend', 'w2.png', 22, 10, 'Dark red and maroon hues extend from the core of the glass as dark fruits, licorice and spice linger. The Shiraz is the brooding component that brings the core of dark fruits, licorice and round ripe tannins. The Grenache is focussed in the red and blue fruits spectrum and delivers plushness to the final blend. ', 'wine'),
(9, 'Dark Horse Rose', 'w3.png', 18, 10, 'Don’t let the pale pink fool you, this wine’s only blushing from all the attention. Most bottles of Rosé are imported or created as small batch offerings from U.S. producers. That means a premium price tag.', 'wine'),
(10, 'Veuve Clicquot Brut Yellow', 'w4.png', 99, 10, 'Veuve Clicquot Yellow Label is the signature champagne of the House. Dominated by Pinot Noir, it offers a perfect balance of structure and finesse.', 'wine'),
(11, 'Martini & Rossi Rosso Sweet', 'w5.png', 17, 10, 'Fortified wine from Italy that is distilled with a combination of more than 30 herbs and spices including sage, coriander, allspice, and Roman camomile. Used as an ingredient in many cocktails, the most well known being the Manhattan. Sweet vermouth is red in color. ', 'wine'),
(13, 'Smirnoff No. 21 Vodka', 'l1.png', 27, 10, 'Smirnoff is America\'s favorite vodka, and the most-awarded vodka of the past decade. Its long legacy includes the invention of the Original Moscow Mule. Smirnoff is filtered 10 times and gluten free, and today it\'s enjoyed in a whole range of classic cocktails, from Mules to Cosmopolitans.', 'liquor'),
(14, 'Espolòn Blanco', 'l2.png', 49, 10, 'Espolòn Blanco, our signature tequila, is the purest expression of our passion for Mexico’s legendary spirit. Made only with 100% Blue Weber agave it carries delicate  floral and tropical fruit notes and a clean finish. Espolòn Blanco can be enjoyed neat or as the perfect accompaniment to a classic tequila cocktail. ', 'liquor'),
(15, 'Del Maguey Vida Mezcal', 'l3.png', 57, 10, 'Del Maguey Vida San Luis Del Rio Mezcal is the perfect place to start when you want to try mezcal. This Mexican liquor is a little harder to find than tequila and other options, but Del Maguey has made its Vida Mezcal easy to get and at an entry-level price. It tastes delicious in mixed drinks and will introduce you to the world of mezcal.', 'liquor'),
(16, 'Tanqueray London Dry Gin', 'l4.png', 41, 10, 'Very fresh and smooth on the nose with slight hints of juniper and citrus coming through. A good hit of liquorice is present on the palate, with a slight spice that creates a long tingle.', 'liquor'),
(17, 'Captain Morgan Original Spiced Rum', 'l5.png', 34, 10, 'Captain Morgan is the original party spirit, a spiced rum that was born and blended to have a good time. So grab a bottle of Original Spiced Rum, raise a leg, and toast to the adventure to be had. Captain’s orders!', 'liquor');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `product_id`, `user_id`, `product`, `price`) VALUES
(10, 1, 12, 'Bud Light', 59),
(11, 2, 12, 'Lagunitas IPA', 58);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
