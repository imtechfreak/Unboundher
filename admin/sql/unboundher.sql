-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 02:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unboundher`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `create_at` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `modify` varchar(50) NOT NULL,
  `edit` varchar(50) NOT NULL,
  `delete` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `category`, `create_at`, `image`, `content`, `modify`, `edit`, `delete`) VALUES
(1, 'On The Other Hand', '13', '2016-06-30 11:21:30', '1467265890454bl.jpg', 'At vero eos et accusamus et iusto odio dignissimos', '', '', ''),
(2, 'College Candy', '16', '2016-06-30 12:49:47', '1467271187431untitleds.jpg', 'Some names just hit the spot, and you know it when you see or hear them. This is one of them. You donâ€™t know if the bloggerâ€™s name is Candy or whether sheâ€™s sweet. It doesnâ€™t matter. The alliteration sounds good, you know itâ€™s probably about the non-academic side of colleges, and it makes you want to check it out. What more can a name ask for? And oh yes, itâ€™s super memorable as well.', '', '', ''),
(3, 'Life Begins at 30', '16', '2016-06-30 12:51:55', '146727131585718036773-dancing-in-the-rain.jpg', 'Thereâ€™s no doubt this name works. Itâ€™s simply a tweak on the famous â€˜life begins at 40â€™, which could be adapted to 20, 50, or any age, so itâ€™s not overly creative, but sometimes you donâ€™t need to be. The goal is to get a blog name that is meaningful and memorable, and if you get good marks for creativity in the process, all the better.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhNo` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `Domain_id` int(11) NOT NULL,
  `Domain_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`Domain_id`, `Domain_name`) VALUES
(1, 'business professional '),
(2, ' entrepreneur'),
(3, 'community spirits'),
(4, 'Arts and Culture'),
(5, 'MBA star'),
(6, 'Sports'),
(7, 'Political Leader'),
(8, 'Tutor'),
(9, 'Manager'),
(10, 'Therapist'),
(11, 'Anchor'),
(12, 'Environmentalist'),
(13, 'Designer'),
(14, 'Physicist'),
(15, 'pulisher'),
(16, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ppl` int(11) NOT NULL,
  `image` text NOT NULL,
  `desp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `time`, `date`, `ppl`, `image`, `desp`) VALUES
(14, 'kitttuuu', '11:45:27', 'June 27, 2016', 4999, '1467020727805nKivax0.jpg', 'gfuaweu'),
(15, 'International Women''s Day ', '10:33:27', 'June 30, 2016', 600, '1467275607471ev.jpg', 'Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebrating International Women''s Day - large global gatherings,Each year thousands of events occur celebratinEach year thousands of events occur celebrating International Women''s Day - large global gatherings,g International Women''s Day - large global gatherings,');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_id` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Image` longblob NOT NULL,
  `Url` varchar(125) NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EndDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Location` varchar(50) NOT NULL,
  `LocationAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_id` int(11) NOT NULL,
  `Domain_id` int(11) NOT NULL,
  `Location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_id`, `Domain_id`, `Location_name`) VALUES
(1, 1, 'palasiya'),
(2, 1, 'rajwada'),
(3, 1, 'Vijaynagar'),
(4, 1, 'Regal'),
(5, 1, 'LIG'),
(6, 2, 'LIG'),
(7, 2, 'Navlakha'),
(8, 2, 'Bawarkua'),
(9, 2, 'mgm'),
(10, 2, 'Malwa Meel'),
(11, 2, 'Anand Bazar'),
(12, 2, 'Sayaji square'),
(13, 2, 'MR 10 square'),
(14, 2, 'Bengali Square'),
(15, 2, 'Khajrana Square'),
(16, 3, 'ZANJEER WALA SQUARE'),
(17, 3, 'YN Road'),
(18, 4, 'GEETA BHAWAN SQUARE'),
(19, 4, 'madhumilan Square');

-- --------------------------------------------------------

--
-- Table structure for table `ment`
--

CREATE TABLE `ment` (
  `ment_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `qualifctn` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ment`
--

INSERT INTO `ment` (`ment_id`, `name`, `category`, `date`, `image`, `email`, `phoneno`, `address`, `qualifctn`, `status`) VALUES
(1, 'hiiiii', '3', '', '1467101925979User-Completed-Image-Make-Handmade-Greeting-Cards-2014.09.15-03.46.38.0.jpeg', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ConPass` varchar(50) NOT NULL,
  `PhoneNo` varchar(50) NOT NULL,
  `AltPhNo` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Qualifictn` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `Name`, `Email`, `Password`, `ConPass`, `PhoneNo`, `AltPhNo`, `Address`, `Qualifictn`, `status`) VALUES
(1, 'drgfgfdddddddddddd', 'rico@gmail.com', '12', '12', '456456', '645', 'jhejw', 'uu', 1),
(2, 'kjrhfkjre', 'rico@gmail.com', '12', '12', '968987', '85769', 'hfjkdkfjgk', 'iuriutiurit', 1),
(3, 'ruchi nishod', 'rico@gmail.com', '12', '12', '12345', '45235', 'rtgeaaaaaaaaaaaaaa', 'tttttttt', 1),
(4, 'fsfffffffff', 'rico@gmail.com', '12', '12', '3444444445', '533335', 'fddddddddg', 'dgggggggggg', 1),
(5, 'sdggggggggggg', 'rico@gmail.com', '12', '12', '344444445', '', '', '', 1),
(6, 'ruchi nishodddddd', 'rico@gmail.com', '12', '12', '45', '', '', '', 1),
(7, 'juhuygyh', 'nishod@gmail.com', '1234', '1234', '32312321321', '3213123123', 'dsdsad', 'fefewf', 1),
(8, 'eeeeeee', 'rico@gmail.com', '12', '12', '87983', '9839', 'kjdks', 'ehifhif', 1),
(9, 'pooo', 'rico@gmail.com', '3', '3', '87328', '83278', 'jfksjflkdj', 'kjksjkd', 1),
(10, 'varrrrr', 'rico@gmail.com', '567676y', '652365', '73676327', '6567356', 'hdshgdjs', 'gghsdg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`ID`, `FirstName`, `LastName`) VALUES
(1, 'Ruchi', 'Nishod'),
(2, 'Riya', 'Agrawal'),
(3, 'Aditi', 'Chourasiya'),
(4, 'Arpita', 'Dubey'),
(5, 'Safalta', 'Gupta'),
(6, 'Soumya', 'Gupta');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `content` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `slides` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `name`, `title`, `image`, `content`, `time`, `slides`) VALUES
(1, 'doll', 'happy', '1467023037516User-Completed-Image-Make-Handmade-Greeting-Cards-2014.09.15-03.46.38.0.jpeg', 'hekhkieuw', '', 0),
(2, 'piyuuuu', 'eeeeee', '1467023134315untitleds.jpg', 'uhwkuiek', '', 0),
(3, 'kituu', 'demo', '1467023219183chocolate-good-morning.jpg', 'eiueiwe', '', 0),
(8, 'Raju Bhaiya', 'Entrekjshfhkjh ak', '1467288825188aa2.jpg', 'hsagjhagj dkjA, fhjfjhf kjf kljf jflihfikhsfak fks', '', 0),
(9, 'yuteytry', 'gerywerw', '1467289706618bl.jpg', 'te376te7ytwqyety7teywtqeyewt', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Username`, `Password`, `Role`) VALUES
(1, 'Users', '123', 1),
(2, 'Admin', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conpass` varchar(50) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `altphno` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `qualifictn` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `conpass`, `phoneno`, `altphno`, `address`, `qualifictn`, `status`) VALUES
(1, 'ritu', 'rico@gmail.com', '1234', '1234', '1234567', '1234567', '', '', 0),
(2, 'eee', 'r', '', '', '', '', '', '', 0),
(3, 'sdffef', 'ttytyty', '', '', '', '', '', '', 0),
(4, 'yutyu', 'rico@gmail.com', '', '', '', '', '', '', 0),
(5, 'riya', 'rico@gmail.com', '', '45', '', '', '', '', 0),
(6, 'tiuuu', 'rico@gmail.com', '', '90', '', 'huihyuiy', '', '', 0),
(7, 'iiii', 'rico@gmail.com', '123', '', '1234567', '23455', '', '', 0),
(8, 'fhuhi', 'ruchinishod@gmail.com', '123', '', '456', '789', '', '', 0),
(9, 'buuuuu', 'ruchinishod@gmail.com', 'fgh', '', '123', '456', '', '', 0),
(10, 'ddddddd', 'rico@gmail.com', '1234', '', '123', '123', '', '', 0),
(11, 'rrrrrrrr', 'rico@gmail.com', '123', '123', '12', '123', '', '', 0),
(12, 'hfiuhiuhf', 'rico@gmail.com', '123', '123', '1234567', '', '', '', 0),
(13, 'hgkjhfkjef', 'rico@gmail.com', '123', '123', '34', '343', '', '', 0),
(14, 'ricooooooooooo', 'rico@gmail.com', '1234', '1234', '', '', '', '', 0),
(15, 'rituuuu', 'ruchinishod@gmail.com', '123', '123', '123', '345', '', '', 0),
(16, 'riyaa', 'rico@gmail.com', '123', '123', '123', '343', '', '', 0),
(17, 'rituuuuu', 'rico@gmail.com', '123', '123', '123', '343', '', '', 0),
(18, 'fioooo', 'kamininagraj97@gmail.com', '123', '123', '123', '343', '', '', 0),
(19, 'Ruchi', 'rico@gmail.com', '123', '123', '34', '244', '', '', 0),
(20, 'jiyaaaaaaaaaaaaa', 'ruchinishod@gmail.com', '123', '123', '123', '344', '', '', 0),
(21, 'rfffffffffffff', 'rico@gmail.com', '12', '12', '234', '344444', '', '', 0),
(22, 'ruyiuyyyyyyyy', 'rico@gmail.com', '123', '123', '8763487678', '83748789', '', '', 0),
(23, 'donnnnnnnnnnnn', 'rico@gmail.com', '123', '123', '786128', '87875', '', '', 0),
(24, 'jsdhjkfhkj', 'rico@gmail.com', '123', '123', '89798739', '', '', '', 0),
(25, 'ertttttttttttttert', 'rico@gmail.com', '123', '123', '8736874', '', '', '', 0),
(26, 'happpyyyyyy', 'rico@gmail.com', '123', '123', '65767', '', '', '', 0),
(27, 'tyyuyriuwyiue', 'rico@gmail.com', '123', '123', '87389', '', '', '', 0),
(28, 'kjhdjhkjjjjjjjjjjjj', 'rico@gmail.com', '12', '12', '12', '', '', '', 0),
(29, 'jroiwjtoir', 'rico@gmail.com', '123', '123', '466', '', '', '', 0),
(30, 'dsddd', 'ruchinishod@gmail.com', '1234', '1234', '988899989', '', '', '', 0),
(31, 'ricooooo', 'ruchinishod@gmail.com', '1234', '1234', '1234567', '', '', '', 0),
(32, 'king', 'king@gmail.com', '1234', '1234', '9898989898', '', '', '', 0),
(33, 'dkdskd', 'kamininagraj97@gmail.com', '1234', '1234', '1234839489', '', '', '', 0),
(34, 'dwqdqw', 'ruchinishod@gmail.com', '1234', '1234', '32323232', '', '', '', 0),
(35, 'iueryeiu', 'rico@gmail.com', '12', '12', '98475', '', '', '', 0),
(36, 'iruo', 'rico@gmail.com', '12', '12', '9834789', '', '', '', 0),
(37, 'sqss', 'asasasas@gmail.com', '1234', '1234', '32323232', '', '', '', 0),
(38, 'retert', 'rico@gmail.com', '13', '12', '7346873', '', '', '', 0),
(39, 'sdggggggggggg', 'rico@gmail.com', '12', '12', '344444445', '355555', '', '', 0),
(40, 'ruchi nishodddddd', 'rico@gmail.com', '12', '12', '45', '345', '', '', 0),
(41, 'dnskndsk', 'jj@gmail.cdc', '1234', '1234', '5656565656', '566565', '', '', 0),
(42, 'tytyyyyyyy', 'rico@gmail.com', '12', '12', '958789', '94389', '', '', 0),
(43, 'ghdshsgj', 'rico@gmail.com', '12', '12', '7823687', '8237687', '', '', 0),
(44, 'dwdwqd', 'ds@dwd.cco', '1234', '1234', '3812931283', '283491849123', '', '', 0),
(45, 'jkjdjoj', 'djij@dwd.co', '1234', '1234', '4143124141', '312312312312', '', '', 0),
(46, 'dwqdw', 'sdsd@dssd.co', '1234', '1234', '31231213213', '2112123213', '', '', 0),
(47, 'fefefd', 'kamininagraj97@gmail.comc', '1234', '1234', '42343243243213123', '32131232132132', '', '', 0),
(48, 'fadfaf', 'jdsj@wdojwd.ccq', '1234', '1234', '3213123123', '213213213213', '', '', 0),
(49, 'reeeeeee', 'rico@gmail.com', '12', '12', '4555553', '4555', '', '', 0),
(50, 'rituuuuuu', 'rico@gmail.com', '12', '12', '34', '34', '', '', 0),
(51, 'ehjkhkj', 'rico@gmail.com', '12', '12', '8378987', '380938', '', '', 0),
(52, 'happyyyyyyyyyyyyyyy', 'rico@gmail.com', '12', '12', '98958', '9898943', '', '', 0),
(53, 'hsddghs', 'rico@gmail.com', '12', '12', '324', '43', '', '', 0),
(54, 'jhfhdjkhjkh', 'rico@gmail.com', '12', '12', '322', '324', '', '', 0),
(55, 'poooooojaaaaa', 'rico@gmail.com', '12', '12', '87498', '8789794', '', '', 0),
(56, 'diwj', 'nishod222@gmail.com', '123', '123', '211223', '3213123', '', '', 0),
(57, 'difjejoi', 'djsijw@kdkmd.cdd', '123', '123', '132323', '32132133', '', '', 0),
(58, 'guiiiiii', 'rico@gmail.com', '123', '123', '87849379', '874878843', '', '', 0),
(59, 'ruchi nishodll', 'rico@gmail.com', '123', '123', '8748787', '664', '', '', 0),
(60, 'viniiiii', 'rico@gmail.com', '123', '123', '72367863287', '6512675321', '', '', 0),
(61, 'varrrrrr', 'rico@gmail.com', '12', '12', '12332', '123321', '', '', 0),
(62, 'Utkuuuuuuuuuu', 'rico@gmail.com', '12', '12', '2424', '32', '', '', 0),
(63, 'ricooooottttt', 'rico@gmail.com', '12', '12', '2333', '33333', '', '', 0),
(64, 'vinuuuuu', 'rico@gmail.com', '123', '123', '342', '32234', '', '', 0),
(65, 'ferewe', 'rico@gmail.com', '12', '12', '352', '45785', '', '', 0),
(66, 'dsdsd', 'rico@gmail.com', 'dsdsdsd', 'sdsdsdsd', 'dsdsdsd', 'dsdsdsd', '', '', 0),
(67, 'kinhhh', 'king@sja.com', '1233', '122121', '44444', '43443434', '', '', 0),
(68, 'kokekr', 'kdokw@dwe.co', 'jwkjekwej', 'ejwijewj', 'jdjdji', 'jriejrji', '', '', 0),
(69, 'jjjjj', 'jjs@sss.co', '123', '123', '21323131313', '33131313131', '', '', 0),
(70, 'hhhh', 'jjjj@sss.com', '1234', '2121121', '313133131331', '1213133131', '', '', 0),
(71, 'dsjh', 'jdw@ewee.cc', '1234', '1234', '098765432', '0987654', '', '', 0),
(72, 'hfdsjhfj', 'rico@gmail.com', '21354321', '672576', '2653765217', '87326862386', '', '', 0),
(73, 'poojaa', 'ruchi.nishod@facebook.com', '1234', '1234', '8787328', '7643876873', '', '', 0),
(74, 'ranjaa', 'ruchinishod@gmail.com', '12', '12', '67243', '6746', '', '', 0),
(75, 'nivuuu', 'ruchinishod@gmail.com', '342', '45345', '3454345', '5432', 'dsgg', 'rgeag', 0),
(76, 'shaaaaaa', 'ruchinishod@gmail.com', '123', '123', '243534', '534534', '', '', 0),
(77, 'abhi', 'Ruchi.Nishod@facebook.com', '123', '123', '231324', '23423423', '', '', 0),
(78, 'arpitaaa', 'Ruchi.Nishod@facebook.com', '123', '123', '234', '3442', '234234', '344323', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`Domain_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_id`);

--
-- Indexes for table `ment`
--
ALTER TABLE `ment`
  ADD PRIMARY KEY (`ment_id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `Domain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `ment`
--
ALTER TABLE `ment`
  MODIFY `ment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
