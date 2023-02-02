-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Feb 2023 um 04:31
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mytasks`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `blogs`
--

CREATE TABLE `blogs` (
  `blogID` int(10) UNSIGNED NOT NULL,
  `typ` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `discription` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `blogs`
--

INSERT INTO `blogs` (`blogID`, `typ`, `title`, `image`, `discription`, `text`) VALUES
(1, 'Userinterface Design', 'UI und UX – Wo liegt der Unterschied?', '<div id =\"divBlogImage\" class=\"my-5\"><img id= \"blogImage\" src=\"img/projectImages/userinterfacedesign.png\" alt=\"picture\"></div>', 'UX und UI gehören zu den am häufigsten verwechselten und falsch verwendeten Begriffen im Web. Beide sind zwar entscheidend für ein Produkt und gehören eng zusammen. Dennoch sind ihre Rollen völlig unterschiedlich...', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.   \r\n\r\nUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.   \r\n\r\nNam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.   \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.   \r\n\r\nAt vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur'),
(2, 'CSS', 'CSS Animation - Sieh was möglich ist!', '<div class=\"center\"><div class=\"circle1\"></div><div class=\"circle2\"></div><div class=\"circle3\"></div></div>', 'In CSS können die verschiedensten Animationen als Keyframe Klassen definiert werden...', 'In CSS können die verschiedensten Animationen als Keyframe Klassen definiert werden...');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `community`
--

CREATE TABLE `community` (
  `msgID` int(255) UNSIGNED NOT NULL,
  `userID` int(10) NOT NULL,
  `nowDate` date NOT NULL,
  `nowTime` varchar(20) NOT NULL,
  `comments` int(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `community`
--

INSERT INTO `community` (`msgID`, `userID`, `nowDate`, `nowTime`, `comments`, `msg`) VALUES
(1, 1, '2021-08-02', 'UTC +2 12h 39m 15s', 4, 'Hello World!'),
(2, 1, '2021-08-02', 'UTC +2 12h 39m 15s', 0, 'It works!!!'),
(5, 1, '2021-08-02', 'UTC +2: 23h 7m 42s', 4, 'text'),
(6, 1, '2021-08-03', 'UTC +2: 9h 9m 36s', 0, 'jajajajajaja'),
(16, 1, '2021-08-04', 'UTC +2: 12h 19m 24s', 2, 'jippie'),
(17, 1, '2021-08-04', 'UTC +2: 12h 20m 38s', 4, 'super'),
(18, 1, '2021-08-13', 'UTC +2: 13h 59m 56s', 2, 'hello world'),
(19, 1, '2021-09-09', 'UTC +2: 10h 38m 30s', 0, 'Willkommen in der Community, wird sind froh euch dabei zu haben was passiert wenn Ihr mehr schreibt '),
(20, 1, '2021-09-09', 'UTC +2: 10h 40m 54s', 1, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
(21, 1, '2021-09-11', 'UTC +2: 21h 1m 43s', 4, 'irgendwas'),
(22, 27, '2021-09-14', 'UTC +2: 11h 45m 9s', 2, 'denkst es funkt noch ???\r\n'),
(23, 27, '2021-09-14', 'UTC +2: 11h 45m 32s', 1, 'hello'),
(24, 27, '2021-09-14', 'UTC +2: 12h 4m 47s', 0, 'hello Worldchen'),
(25, 27, '2021-09-14', 'UTC +2: 12h 5m 7s', 2, 'hello du'),
(26, 1, '2021-09-14', 'UTC +2: 16h 23m 54s', 1, 'wie geht das ??'),
(27, 27, '2021-09-16', 'UTC +2: 8h 46m 20s', 3, 'hey wie machen wir das ???'),
(28, 27, '2021-09-21', 'UTC +2: 13h 52m 8s', 1, 'hallo gruppe 338!!!'),
(29, 27, '2022-10-25', 'UTC +2: 25h 29m 48s', 1, 'waass geht upp ???'),
(30, 27, '2022-10-25', 'UTC +2: 25h 30m 25s', 0, 'eeeeinn scheisss');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `communitycomments`
--

CREATE TABLE `communitycomments` (
  `commentID` int(10) UNSIGNED NOT NULL,
  `msgID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `nowTime` varchar(20) NOT NULL,
  `nowDate` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `communitycomments`
--

INSERT INTO `communitycomments` (`commentID`, `msgID`, `userID`, `nowTime`, `nowDate`, `comment`) VALUES
(48, 17, 1, 'UTC +2: 13h 39m 31s', '2021-08-04', 'comment'),
(49, 5, 1, 'UTC +2: 13h 55m 5s', '2021-08-04', 'helllo'),
(50, 16, 1, 'UTC +2: 9h 8m 14s', '2021-08-05', 'hello'),
(51, 17, 1, 'UTC +2: 13h 23m 15s', '2021-08-12', 'helo'),
(52, 18, 1, 'UTC +2: 14h 19s', '2021-08-13', 'hello du'),
(53, 18, 1, 'UTC +2: 21h 32m 57s', '2021-08-18', 'ohh man'),
(54, 17, 1, 'UTC +2: 21h 33m 51s', '2021-08-18', 'its really interessting to see'),
(55, 17, 1, 'UTC +2: 21h 37m 37s', '2021-08-18', 'ups'),
(56, 16, 1, 'UTC +2: 11h 16m 28s', '2021-09-08', 'hii'),
(57, 20, 1, 'UTC +2: 10h 41m 7s', '2021-09-09', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'),
(58, 21, 1, 'UTC +2: 21h 1m 56s', '2021-09-11', 'helllo'),
(59, 21, 1, 'UTC +2: 21h 2m 11s', '2021-09-11', 'hello2'),
(60, 21, 27, 'UTC +2: 11h 29m 22s', '2021-09-14', 'super '),
(61, 21, 27, 'UTC +2: 11h 43m 53s', '2021-09-14', 'ich wein gleich es geht sonst so super aber das hier nervt tooooooottal blblblbllbllbbllblblblblblblb'),
(62, 25, 27, 'UTC +2: 13h 2m 46s', '2021-09-14', 'hello'),
(63, 25, 1, 'UTC +2: 16h 23m 40s', '2021-09-14', 'mach das so und so'),
(64, 26, 1, 'UTC +2: 16h 24m 5s', '2021-09-14', 'mach das so'),
(65, 1, 27, 'UTC +2: 8h 45m 29s', '2021-09-16', 'hihi'),
(66, 27, 27, 'UTC +2: 8h 46m 36s', '2021-09-16', 'was sagst du ???'),
(67, 27, 27, 'UTC +2: 8h 46m 47s', '2021-09-16', 'davor oder danach ???'),
(68, 1, 27, 'UTC +2: 8h 58m 23s', '2021-09-16', 'hello du'),
(69, 1, 27, 'UTC +2: 8h 58m 37s', '2021-09-16', 'hellöchen'),
(70, 5, 27, 'UTC +2: 8h 59m 57s', '2021-09-16', 'was auch immer '),
(71, 1, 27, 'UTC +2: 22h 38m 41s', '2021-09-16', 'hello'),
(72, 28, 27, 'UTC +2: 13h 52m 48s', '2021-09-21', 'hallo du !!!'),
(73, 27, 27, 'UTC +2: 11h 30m 46s', '2021-09-28', 'jippie'),
(74, 5, 27, 'UTC +2: 21h 54m 1s', '2021-09-28', 'na du gurkerl '),
(75, 5, 27, 'UTC +2: 21h 54m 19s', '2021-09-28', 'es ist schwierig hierfür einen guten ansatz zu finden '),
(76, 22, 27, 'UTC +2: 25h 20m 11s', '2022-10-25', 'was soll ich sagen jaaaaaa'),
(77, 22, 27, 'UTC +2: 25h 20m 57s', '2022-10-25', 'oder sooowas'),
(78, 23, 27, 'UTC +2: 25h 21m 8s', '2022-10-25', 'hello'),
(79, 29, 27, 'UTC +2: 25h 31m 9s', '2022-10-25', 'antwortet mal es narrisch !!!!!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `files`
--

CREATE TABLE `files` (
  `fileID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `filenames` varchar(50) NOT NULL,
  `category` set('all','html','css','js','php','python','java','frames','notes','other') NOT NULL,
  `datatyp` varchar(10) NOT NULL,
  `community` tinyint(1) NOT NULL,
  `datapath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `files`
--

INSERT INTO `files` (`fileID`, `userID`, `filenames`, `category`, `datatyp`, `community`, `datapath`) VALUES
(1, 1, 'Mitschrift 28.09.2021', '', 'doc', 1, ''),
(4, 1, 'dfdsf', '', 'docx', 0, 'files/16293600034311.docx'),
(9, 1, 'ddd', '', 'docx', 0, 'files/16293925432229.docx'),
(10, 1, 'ddd', '', 'pdf', 1, 'files/16293925572726.pdf'),
(11, 1, 'new', '', 'pdf', 0, 'files/16294450308857.pdf'),
(14, 1, 'fff', 'js', 'js', 0, 'files/16297011327594.js'),
(19, 1, 'testfile', 'other', 'docx', 0, 'files/16316293483053.docx'),
(20, 27, 'haha', 'html', 'pdf', 1, 'files/1631777372766.pdf'),
(21, 27, 'warum', 'html', 'docx', 0, 'files/16317774016593.docx'),
(22, 27, 'jaja', 'python', 'pdf', 0, 'files/16317775047052.pdf'),
(23, 27, 'myWord', 'html', 'pdf', 1, 'files/16317775256817.pdf'),
(24, 27, 'mein ', 'css', 'docx', 1, 'files/16317775593329.docx');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gallery`
--

CREATE TABLE `gallery` (
  `galleryID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) NOT NULL,
  `imageName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `gallery`
--

INSERT INTO `gallery` (`galleryID`, `userID`, `imageName`) VALUES
(21, 1, '16310928394354.jpg'),
(22, 1, '16310928454060.jpg'),
(23, 1, '16310928612760.jpg'),
(25, 1, '16310981927307.jpg'),
(26, 1, '16310981987110.png'),
(27, 1, '16310982025554.jpg'),
(28, 1, '16310982176603.jpg'),
(29, 1, '16310982244854.jpg'),
(30, 1, '16310982289855.jpg'),
(34, 33, '16311863638664.jpg'),
(35, 33, '1631186392902.jpg'),
(36, 33, '16311864014457.jpg'),
(37, 33, '1631186405964.jpg'),
(39, 1, '16313868828626.jpg'),
(62, 27, '16666544542012.jpg'),
(63, 27, '16666544647519.jpg'),
(64, 27, '16666544707358.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `links`
--

CREATE TABLE `links` (
  `linkID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `linktitle` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `linkpicture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `links`
--

INSERT INTO `links` (`linkID`, `userID`, `linktitle`, `link`, `linkpicture`) VALUES
(8, 1, 'Nginx vs Apache', 'https://kinsta.com/de/blog/nginx-vs-apache/', 'img/userIcons/16292865711818.png'),
(9, 33, 'PHP MyAdmin', 'http://localhost/phpmyadmin/', 'img/userIcons/16311865508232.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tasks`
--

CREATE TABLE `tasks` (
  `taskID` int(6) UNSIGNED NOT NULL,
  `userID` int(6) NOT NULL,
  `taskname` varchar(60) NOT NULL,
  `taskdate` date NOT NULL,
  `tasknote` varchar(500) NOT NULL,
  `taskpriority` set('high','medium','low','none') NOT NULL,
  `tasktype` set('home','work','private') NOT NULL,
  `reminder` date DEFAULT NULL,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tasks`
--

INSERT INTO `tasks` (`taskID`, `userID`, `taskname`, `taskdate`, `tasknote`, `taskpriority`, `tasktype`, `reminder`, `done`) VALUES
(150, 1, 'I am the best', '2021-07-13', 'Lalelusdfsddsf', 'high', 'private', '0000-00-00', 1),
(153, 1, 'hello', '2021-08-13', 'ok es reicht mir gerade weils nicht funkt', 'medium', 'work', '0000-00-00', 1),
(174, 1, 'fff', '2021-09-08', 'ddd', 'high', 'private', '0000-00-00', 1),
(178, 1, 'dfdsf', '2021-09-14', 'dfds', 'medium', 'private', '0000-00-00', 0),
(179, 33, 'lala', '2021-09-16', 'hihi', 'medium', 'private', '0000-00-00', 1),
(180, 33, 'it work', '2021-09-15', '', 'medium', 'private', '2021-09-23', 1),
(182, 33, 'musst noch besser machen', '2021-09-14', 'juhu', 'medium', 'home', '0000-00-00', 1),
(183, 33, 'task', '2021-09-21', 'test', 'medium', 'private', '0000-00-00', 1),
(184, 33, 'ass', '2021-09-15', 'ssds', 'medium', 'work', '0000-00-00', 1),
(185, 33, 'SADSDSAD', '2021-09-07', 'ADSD', 'medium', 'private', '0000-00-00', 1),
(186, 33, 'SDSDS', '2021-09-13', 'sasdsad', 'low', 'work', '0000-00-00', 0),
(187, 33, 'test', '2021-09-20', '', 'medium', 'private', '0000-00-00', 1),
(188, 33, 'test', '2021-09-28', '', 'high', 'work', '0000-00-00', 1),
(189, 33, 'hihi', '2021-09-15', '', 'medium', 'work', '0000-00-00', 1),
(190, 33, 'test', '2021-09-07', '', 'medium', 'work', '0000-00-00', 1),
(191, 33, 'test', '2021-09-14', '', 'medium', 'work', '0000-00-00', 1),
(192, 33, 'test3', '2021-08-30', '', 'high', 'private', '0000-00-00', 1),
(193, 33, 'test', '2021-09-14', '', 'medium', 'private', '0000-00-00', 0),
(194, 33, 'test', '2021-09-22', '', 'high', 'private', '0000-00-00', 1),
(195, 33, 'reminder', '2021-09-07', 'give me some', 'medium', 'private', '2021-09-14', 0),
(196, 33, 'if i have a reaaaaallllyyyy long text by reminding', '2021-09-30', '', 'none', 'private', '2021-09-14', 0),
(199, 1, 'test', '2021-09-14', 'hallo', 'high', 'private', '0000-00-00', 0),
(206, 27, 'ggg', '2021-09-08', 'asfdf', 'none', 'private', '2021-08-30', 1),
(222, 27, 'test high', '2023-02-09', 'test high', 'high', 'home', '2023-02-03', 0),
(223, 27, 'test medium', '2023-02-16', 'test medium note', 'medium', 'work', '2023-02-08', 0),
(224, 27, 'test low', '2023-02-09', 'test low', 'low', 'private', '2023-02-06', 0),
(225, 27, 'test none', '2023-02-09', 'test none', 'none', 'work', '2023-02-07', 0),
(226, 27, 'test done', '2023-02-01', 'test done', 'none', 'private', '2023-01-31', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `userID` int(6) UNSIGNED NOT NULL,
  `gender` set('female','male') NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `country` varchar(60) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(80) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userID`, `gender`, `firstname`, `lastname`, `username`, `birth`, `country`, `phone`, `email`, `pwd`, `approved`, `img`) VALUES
(27, 'female', 'Iris', 'Stiawa', 'iris1006', '2021-07-06', 'Österreich', '+436603500660', 'iris.stiawa@gmx.at', '$2y$10$ylICubDOUOqJhXCxVuj8VueYi1boA8F3GHeQEyveQpxbnfmiEE9g2', 1, '16666545421321.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogID`);

--
-- Indizes für die Tabelle `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`msgID`);

--
-- Indizes für die Tabelle `communitycomments`
--
ALTER TABLE `communitycomments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indizes für die Tabelle `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileID`);

--
-- Indizes für die Tabelle `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryID`);

--
-- Indizes für die Tabelle `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`linkID`);

--
-- Indizes für die Tabelle `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `community`
--
ALTER TABLE `community`
  MODIFY `msgID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT für Tabelle `communitycomments`
--
ALTER TABLE `communitycomments`
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT für Tabelle `files`
--
ALTER TABLE `files`
  MODIFY `fileID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT für Tabelle `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT für Tabelle `links`
--
ALTER TABLE `links`
  MODIFY `linkID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
