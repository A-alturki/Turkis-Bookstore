-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 06:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `asin` varchar(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `soldBy` varchar(255) DEFAULT NULL,
  `imgUrl` varchar(255) DEFAULT NULL,
  `productURL` varchar(255) DEFAULT NULL,
  `stars` float DEFAULT NULL,
  `reviews` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `isKindleUnlimited` tinyint(1) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `isBestSeller` tinyint(1) DEFAULT NULL,
  `isEditorsPick` tinyint(1) DEFAULT NULL,
  `isGoodReadsChoice` tinyint(1) DEFAULT NULL,
  `publishedDate` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
   PRIMARY KEY (`asin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--
INSERT INTO `book` (`asin`, `title`, `author`, `soldBy`, `imgUrl`, `productURL`, `stars`, `reviews`, `price`, `isKindleUnlimited`, `category_id`, `isBestSeller`, `isEditorsPick`, `isGoodReadsChoice`, `publishedDate`, `category_name`) VALUES
('B09JBCGQB8', 'Tomorrow, and Tomorrow, and Tomorrow: A novel', 'Gabrielle Zevin', 'Random House LLC', 'https://m.media-amazon.com/images/I/91HwoNG6iqL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B09JBCGQB8', 4.4, 63975, 13.99, 0, 5, 0, 0, 0, '7/5/2022', 'Literature & Fiction'),
('B0B9KTYMKT', 'No Two Persons: A Novel', 'Erica Bauermeister', 'Macmillan', 'https://m.media-amazon.com/images/I/91Onw2PVkiL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B0B9KTYMKT', 4.4, 978, 14.99, 0, 5, 0, 0, 0, '5/2/2023', 'Literature & Fiction'),
('B0BH4QWM85', 'The Librarianist: A Novel', 'Patrick deWitt', 'HarperCollins Publishers', 'https://m.media-amazon.com/images/I/81bPau8vpjL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B0BH4QWM85', 3.9, 667, 14.99, 0, 5, 0, 0, 0, '7/4/2023', 'Literature & Fiction'),
('B00555X8OA', 'Thinking, Fast and Slow', 'Daniel Kahneman', 'Macmillan', 'https://m.media-amazon.com/images/I/71wvKXWfcML._AC_UY218_.jpg', 'https://www.amazon.com/dp/B00555X8OA', 4.6, 0, 12.99, 0, 15, 0, 0, 0, '10/25/2011', 'Science & Math'),
('B07D23CFGR', 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones', 'James Clear', 'Penguin Group (USA) LLC', 'https://m.media-amazon.com/images/I/81FbjLL8MRL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B07D23CFGR', 4.8, 0, 12.99, 0, 27, 0, 0, 0, '10/16/2018', 'Health, Fitness & Dieting'),
('B0818ZZNLR', 'Breath: The New Science of a Lost Art', 'James Nestor', 'Penguin Group (USA) LLC', 'https://m.media-amazon.com/images/I/8148J4pSFpL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B0818ZZNLR', 4.7, 0, 16.99, 0, 15, 0, 0, 0, '5/26/2020', 'Science & Math'),
('B09JPJ833S', 'I\'m Glad My Mom Died', 'Jennette Mccurdy', 'Simon and Schuster Digital Sales Inc', 'https://m.media-amazon.com/images/I/71ZuzsWWXUL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B09JPJ833S', 4.7, 59038, 14.99, 0, 9, 0, 0, 0, '8/9/2022', 'Biographies & Memoirs'),
('B0B4Z7D4BC', 'The Light We Carry: Overcoming in Uncertain Times', 'Michelle Obama', 'Random House LLC', 'https://m.media-amazon.com/images/I/81Pvpeip3+L._AC_UY218_.jpg', 'https://www.amazon.com/dp/B0B4Z7D4BC', 4.7, 11915, 16.99, 0, 9, 0, 0, 0, '11/15/2022', 'Biographies & Memoirs'),
('B01M5IJM2U', 'The Seven Husbands of Evelyn Hugo: A Novel', 'Taylor Jenkins Reid', 'Simon and Schuster Digital Sales Inc', 'https://m.media-amazon.com/images/I/71sIVAqjlfL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B01M5IJM2U', 4.6, 202512, 14.99, 0, 5, 0, 0, 0, '6/13/2017', 'Literature & Fiction'),
('B098PW8NP8', 'Lessons in Chemistry: A Novel', 'Bonnie Garmus', 'Random House LLC', 'https://m.media-amazon.com/images/I/71P9vV-7WRL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B098PW8NP8', 4.6, 219990, 14.99, 0, 5, 0, 0, 0, '4/5/2022', 'Literature & Fiction'),
('B09QMHZ53K', 'Demon Copperhead: A Pulitzer Prize Winner', 'Barbara Kingsolver', 'HarperCollins Publishers', 'https://m.media-amazon.com/images/I/91mP0HKLEwL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B09QMHZ53K', 4.6, 69379, 16.99, 0, 5, 0, 0, 0, '10/18/2022', 'Literature & Fiction'),
('B06WGTZXG7', 'End Game (Will Robie Book 5)', 'David Baldacci', 'Hachette Book Group', 'https://m.media-amazon.com/images/I/91v247VbcqL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B06WGTZXG7', 4.4, 0, 9.99, 0, 21, 0, 0, 0, '', 'Mystery, Thriller & Suspense'),
('B000FC1JAI', 'Meditations: A New Translation (Modern Library)', 'Marcus Aurelius', 'Random House LLC', 'https://m.media-amazon.com/images/I/71dwCdjTA-L._AC_UY218_.jpg', 'https://www.amazon.com/dp/B000FC1JAI', 4.7, 18934, 7.99, 0, 14, 0, 0, 0, '5/14/2002', 'Politics & Social Sciences'),
('B000SEGMAU', 'Tuesdays with Morrie: An Old Man, a Young Man, and Life\'s Greatest Lesson, 25th Anniversary Edition', 'Mitch Albom', 'Random House LLC', 'https://m.media-amazon.com/images/I/91xgmx9qLUL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B000SEGMAU', 4.8, 32840, 13.99, 0, 9, 0, 0, 0, '6/29/2007', 'Biographies & Memoirs'),
('B000TDGGVU', 'The Paradox of Choice: Why More Is Less, Revised Edition', 'Barry Schwartz', 'HarperCollins Publishers', 'https://m.media-amazon.com/images/I/41M211eZbvL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B000TDGGVU', 4.3, 1988, 13.99, 0, 14, 0, 0, 0, '10/13/2009', 'Politics & Social Sciences'),
('B084HJSJJ2', 'The Psychology of Money: Timeless lessons on wealth, greed, and happiness', 'Morgan Housel', 'Amazon.com Services LLC', 'https://m.media-amazon.com/images/I/81FIHfiU9IL._AC_UY218_.jpg', 'https://www.amazon.com/dp/B084HJSJJ2', 4.7, 0, 9.62, 0, 17, 0, 0, 0, '9/8/2020', 'Business & Money');


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--



-- --------------------------------------------------------

--
-- Table structure for table `feedbackform`
--

CREATE TABLE `feedbackform` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bookname` varchar(100) DEFAULT NULL,
  `satisfaction` varchar(50) NOT NULL,
  `favgenres` varchar(50) DEFAULT NULL,
  `recommendation` varchar(50) NOT NULL,
  `comments` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `feedbackform`
--
ALTER TABLE `feedbackform`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`asin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

