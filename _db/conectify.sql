--
-- Database: `conectify`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `surname` varchar(25) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `address_1` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `address_2` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `city` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `region` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `zip` mediumint(5) NOT NULL,
  `country` varchar(150) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `facebook` mediumtext CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `twitter` mediumtext CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `linkedin` mediumtext CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_slovenian_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `name`, `surname`, `birthday`, `address_1`, `address_2`, `city`, `region`, `zip`, `country`, `facebook`, `twitter`, `linkedin`) VALUES
(3, 'Mohamed', 'Ali', '1901-01-01', 'Paka street 3', '', 'Muslimland', 'Muslimania', 43242, 'Syria', '', '', ''),
(7, 'TomaÅ¾', 'TomaÅ¾ov', '2016-12-14', 'Lepa ulica', '', 'Grdo mesto', 'Osrednjeslovenska', 1001, 'Slovenia', '', '', ''),
(8, 'Mike', 'Mayer', '0000-00-00', 'Short st 2', 'Shorter lane', 'Cityful', 'Stateful', 22222, 'United States of America', 'mike', 'mike', 'mike'),
(9, 'joan', 'mikel', '2017-01-12', 'short st 3', 'shorter st', 'towniful', 'regional', 33321, 'United Kingdom', 'joanny', 'mikelyjona', 'jonymikel'),
(10, 'Jure', 'PokerÅ¾nik', '2014-06-13', 'Mariborska 30a', '', 'Maribor', 'Podravska', 2000, 'Slovenia', 'jurcy', 'pokerjury', 'yuripoki'),
(11, 'Å½an', 'ÄŒreÅ¡nik', '2017-01-21', 'Ob Gozdu 2a', '', 'Maribor', 'Podravska', 2000, 'Slovenia', 'zany', 'cresky', 'zancresky'),
(12, 'Tomi', 'Toman', '2017-01-27', 'Cesta na Falo 2a', '', 'Fala', 'Podravska', 2341, 'Slovenia', 'tomytomi', 'tomantomi', 'tomitotma');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `ename` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `contact_email` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `s_date` date NOT NULL,
  `address_1` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `address_2` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `region` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `zip` mediumint(5) NOT NULL,
  `country` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `phone_nr` mediumint(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_slovenian_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `ename`, `contact_email`, `s_date`, `address_1`, `address_2`, `city`, `region`, `zip`, `country`, `description`, `phone_nr`) VALUES
(6, 'Monopoly', 'monopo@gmai.com', '2017-01-19', 'Cesta na Agrarno 3', '', 'Maribor', 'Podravska', 2000, 'Slovenia', 'Monopoly day with food and everything you want to drink!', 16777215),
(7, 'Painting', 'paintme@gmail.com', '2017-01-20', 'Ljubljanska ', '', 'Ljubljana', 'Osrednjeslovenska', 1000, 'Slovenia', 'Canvass painting in central Slovenia. Bring your own brushes.', 16777215),
(8, 'HighLANder', 'lander@high.com', '2017-01-21', 'Smetanova ulica 30a', '', 'Maribor', 'Podravska', 2000, 'Slovenia', 'LAN party all day!', 16777215),
(9, 'Pool', 'pool@pool.me', '2016-12-31', 'Jamaician street 3', 'Little Jamajca', 'Jamajca Town', 'Jamaica', 2101, 'Jamaica', 'Pool party in Jamaica', 10224142);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
