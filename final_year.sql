-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 11:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
(' dhruv ', ' dhruvpitwala@gmail.com ', '  hlo '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  olla '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf '),
(' DHRUV ', ' dhruvpitwala@gmail.com ', '  dgf ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `course` int(10) NOT NULL,
  `compiler` int(10) NOT NULL,
  `templates` int(10) NOT NULL,
  `games` int(10) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`course`, `compiler`, `templates`, `games`, `exp`, `message`) VALUES
(8, 10, 10, 10, '  nice ', ' make this changes ');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(2, 'digital-ad.zip', 56349, 1),
(13, 'Batch-files-master.zip', 10168, 0),
(14, 'vghcgfxfg.docx', 11853, 0);

-- --------------------------------------------------------

--
-- Table structure for table `p1q1`
--

CREATE TABLE `p1q1` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p1q1`
--

INSERT INTO `p1q1` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'HTML stands for?', 'Hyper Text Markup Language', 'High Text Markup Language', 'Hyper Tabular Markup Language', 'None of this', 'Hyper Text Markup Language', 'Hyper Text Markup Language'),
(2, 'From which tag descriptive list starts ?', 'LL', 'DL', 'DD', 'DS', 'DL', 'DL'),
(3, 'Correct HTML tag for the largest heading is', 'head', 'h6', 'lh', 'h1', 'h1', 'h1'),
(4, 'The attribute of <form>tag?', 'method', 'action', 'both a & b', 'None of this', 'both a & b', 'both a & b'),
(5, 'Which is not a property of table', 'colspan', 'cellspacing', 'src', 'rowspan', 'src', 'src'),
(6, 'Which tag is use to link webpages?', 'a', 'href', 'linked', 'embeed', 'a', 'a'),
(7, 'A much better approach to establish the base URL is to use', 'BASE element', 'HEAD element', 'both a & b', 'None of this', 'BASE element', 'BASE element'),
(8, 'HTML cannot run on', 'notepad', 'visualstudio', 'microsoft word', 'dreamweaver', 'microsoft word', 'microsoft word'),
(9, 'Main container for TR , TD , TH is ', 'DATA', 'TABLE', 'GROUP', 'ALL OF THESE', 'TABLE', 'TABLE'),
(10, 'The web standard allows programmers on many different computer platforms to dispersed format and display the information server. These programs are called', 'Web Browsers', 'HTML', 'Internet Explorer', 'None of this', 'Web Browsers', 'Web Browsers');

-- --------------------------------------------------------

--
-- Table structure for table `p2q1`
--

CREATE TABLE `p2q1` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p2q1`
--

INSERT INTO `p2q1` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'What is CSS stands for', 'Color Style Sheets', 'Cascade Sheets Style', 'Cascade Style Sheet', 'Cascading Style Sheets', 'Cascading Style Sheets', 'Cascading Style Sheets'),
(2, 'In CSS what does \"color:red\" can be called as', 'Selector', 'Rule', 'Declaration', 'None of the above ', 'Declaration', 'Declaration'),
(3, 'Which of the following attribute is used to specify elements to bind style rules to?', 'id', 'class', 'tag', 'All of the mentioned', 'All of the mentioned', 'All of the mentioned'),
(4, 'In CSS what does h1 can be called as', 'Selector', 'Attribute', 'Value', 'Tag ', 'Selector', 'Selector'),
(5, '______ selectors, which are used to specify a rule to bind to a particular unique element ', 'id', 'class', 'tag', 'both B and C', 'id', 'id'),
(6, 'If we want to use a nice looking green dotted border around an image, which css property will we use?', 'border-color', 'border-decoration', 'border-style', 'border-line', 'border-style', 'border-style'),
(7, 'When we write <img src=\"img.png\">, what \"img.png\" inside double quote implies?', 'element', 'attribute', 'value', 'operator', 'value', 'value'),
(8, 'The property in CSS used to change the background color of an element is -', 'bgcolor', 'color', 'background-color', 'All of the above', 'background-color', 'background-color'),
(9, 'Which of the following CSS property defines the different properties of all four sides of an element’s border in a single declaration?', 'border', 'padding', 'border-collapse', 'border-width', 'border-width', 'border-width'),
(10, 'Which CSS properties are used to create space around elements, outside of any defined borders?', 'Padding', 'Margin', 'Both A and B', 'None of the mentioned ', 'Margin', 'Margin');

-- --------------------------------------------------------

--
-- Table structure for table `p3q1`
--

CREATE TABLE `p3q1` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p3q1`
--

INSERT INTO `p3q1` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'Which CSS border property defines the shape of the border of the bottom-right corner', 'border-top-left-radius', 'border-top-right-radius', 'border-bottom-right-radius', 'border-bottom-left-radius', 'border-bottom-right-radius', 'border-top-left-radius'),
(2, 'Which CSS property allows you to specify an image to be used instead of the normal border around an element.', 'border-radius', 'border-image', 'Both', 'None of the above', 'border-image', 'border-top-left-radius'),
(3, 'CSS defines how many types of gradients?', '1', '2', '3', '4', '2', 'border-top-left-radius'),
(4, 'With CSS you can add shadow to text and to elements.', 'True', 'False', 'May be ', 'Not sure', 'True', 'border-top-left-radius'),
(5, 'What are the types of Shadow Effect?', 'Text-shadow', 'Box-shadow', 'None of the above', 'Both A and B', 'Both A and B', 'border-top-left-radius'),
(6, 'Select the correct CSS 2D transformation methods', 'translate()', 'rotate()', 'skew()', 'All', 'All', 'border-top-left-radius'),
(7, 'Which 2D transform method skews an element along the X and Y-axis by the given angles?', 'scaleY()', 'scaleX()', 'skew()', 'skewX()', 'skew()', 'border-top-left-radius'),
(8, 'Which are the correct CSS 3D Transforms Methods?', 'rotateZ()', 'rotateY()', 'rotateA()', 'Both A and B', 'Both A and B', 'border-top-left-radius'),
(9, 'Which CSS property allows you to change property values smoothly, over a given duration?', 'transitions ', 'shadow effect', 'gradient', 'animation', 'transitions ', 'border-top-left-radius'),
(10, 'Which animation property specifies a delay for the start of an animation?', 'animation-direction', 'animation-delay', 'animation-duration', 'animation-name', 'animation-delay', 'border-top-left-radius');

-- --------------------------------------------------------

--
-- Table structure for table `p4q1`
--

CREATE TABLE `p4q1` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p4q1`
--

INSERT INTO `p4q1` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, '1. What does PHP stand for?\r\n\r\n   i) Personal Home Page\r\n   ii) Hypertext Preprocessor\r\n   iii) Pretext Hypertext Processor\r\n   iv) Preprocessor Home Page', 'Both i) and iii)', 'Both ii) and iv)', 'Only ii)', 'Both i) and ii)', 'Both i) and ii)', 'Both i) and ii)'),
(2, 'PHP files have a default file extension of_______', '.html', '.xml', '.php', '.ph', '.php', '.php'),
(3, 'What should be the correct syntax to write a PHP code?', '< php >', '< ? php ?>', '<? ?>', '<?php ?>', '<?php ?>', '<?php ?>'),
(4, 'Which of the following is/are a PHP code editor?\r\n\r\n    i) Notepad\r\n    ii) Notepad++\r\n    iii) Adobe Dreamweaver\r\n    iv) PDT', 'Only iv)', 'i), ii), iii) and iv)', 'i), ii) and iii)', 'Only iii)', 'i), ii), iii) and iv)', 'i), ii), iii) and iv)'),
(5, 'Which of the following must be installed on your computer so as to run PHP script?\r\n\r\ni) Adobe Dreamweaver \r\nii) XAMPP\r\niii) Apache and PHP\r\niv) IIS', 'i), ii), iii) and iv)', 'Only ii)', 'ii) and iii)', 'ii), iii) and iv)', 'ii), iii) and iv)', 'ii), iii) and iv)'),
(6, 'Which version of PHP introduced Try/catch Exception?', 'PHP 4', 'PHP 5', 'PHP 6', 'PHP 5 and later', 'PHP 5 and later', 'PHP 5 and later'),
(7, 'How should we add a single line comment in our PHP code?\r\n\r\n    i) /?\r\n    ii) //\r\n    iii) #\r\n    iv) /* */', 'Only ii)', 'i), iii) and iv)', 'ii), iii) and iv)', 'Both ii) and iv)', 'ii), iii) and iv)', 'ii), iii) and iv)'),
(8, 'Which of the following PHP statement/statements will store 111 in variable num?\r\n\r\n    i) int $num = 111;\r\n    ii) int mum = 111;\r\n    iii) $num = 111;\r\n    iv) 111 = $num;\r\n', 'Both i) and ii)', 'i), ii), iii) and iv)', 'Only iii)', 'Only i)\r\n', 'Only iii)', 'Only iii)'),
(9, 'What will be the output of the following PHP code?\r\n    <?php\r\n    $num  = 1;\r\n    $num1 = 2;\r\n    print $num . \"+\". $num1;\r\n    ?>', '3', '1+2', '1.+.2', 'ERROR', '1+2', '1+2'),
(10, 'What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $num  = \"1\";\r\n    $num1 = \"2\";\r\n    print $num+$num1;', '13', '1+2', '3', 'ERROR', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `p5q1`
--

CREATE TABLE `p5q1` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p5q1`
--

INSERT INTO `p5q1` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'The command to eliminate a table from a database is:', 'REMOVE TABLE CUSTOMER;', 'DROP TABLE CUSTOMER;', 'UPDATE TABLE CUSTOMER;', 'DELETE TABLE CUSTOMER;', 'DROP TABLE CUSTOMER;', 'DROP TABLE CUSTOMER;'),
(2, 'SQL data definition commands make up a(n) ____ .', 'DDL', 'DML', 'HTML', 'XML', 'DDL', 'DDL'),
(3, 'The result of a SQL SELECT statement is a(n) ____ .', 'report', 'form', 'file', 'table', 'table', 'DDL'),
(4, 'SQL can be used to:', 'create database structures only.', 'query database data only.', 'modify database data only.', 'All of the above can be done by SQL.', 'All of the above can be done by SQL.', 'DDL'),
(5, 'The SQL statement that queries or reads data from a table is ____ .', 'SELECT', 'READ', 'QUERY', 'None of the above is correct.', 'SELECT', 'DDL'),
(6, '.SQL is:', 'a programming language.', 'an operating system.', 'a data sublanguage.', 'a DBMS.', 'a data sublanguage.', 'DDL'),
(7, 'Which of the following code will successfully delete the table LOCATIONS from the database?', 'DROP TABLE locations;', 'DELETE TABLE locations;', 'TRUNCATE TABLE locations;', 'None of the above.', 'DROP TABLE locations;', 'DDL'),
(8, 'What is the full form of SQL?', 'Structured Query List', 'Structure Query Language', 'Sample Query Language', 'None of these.', 'Structure Query Language', 'DDL'),
(9, '__ is NOT a type of constraint in SQL language?', 'FOREIGN KEY', 'PRIMARY KEY', 'UNIQUE', 'ALTERNATE KEY', 'ALTERNATE KEY', 'DDL'),
(10, 'The UPDATE SQL clause can _____', 'update only one row at a time', 'update more than one row at a time', 'delete only one row at a time', 'delete more than one row at a time', 'update more than one row at a time', 'DDL');

-- --------------------------------------------------------

--
-- Table structure for table `p6q1`
--

CREATE TABLE `p6q1` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p6q1`
--

INSERT INTO `p6q1` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'There is an arrangement where you allow an agency to host your website for you on their Web Server for a fee, this is called as ?', 'Web Service', 'Web Hosting', 'Web Marketing', 'None of these', 'Web Hosting', 'Web Hosting'),
(2, 'The World Wide Web is a massive collection of web sites, all hosted on', 'computers', 'a network', 'world wide web', 'internet', 'computers', 'computers'),
(3, 'The web server (computer) where your web site\'s html files, graphics, etc. reside is known as the', 'web localhost', 'web host', 'web server', 'None of these', 'web host', 'web host'),
(4, 'WWW is the acronym of the', 'Web World Wide', 'World Wide Webpages', 'World Wide Web', 'World Wide Websites', 'World Wide Web', 'World Wide Web'),
(5, 'A domain name is the unique text name corresponding to the ______ of a computer on the Internet.', 'numeric MAC address', 'numeric IP address', 'numeric network address', 'All the above', 'numeric IP address', 'numeric IP address'),
(6, 'Domain name is', 'case sensitive', 'not case sensitive', 'not always case sensitive', 'not always case insensitive', 'not case sensitive', 'not case sensitive'),
(7, 'What is used as a separator in a domain name ?', 'dot(.)', 'slash(/)', 'colon(:)', 'None of this', 'dot(.)', 'dot(.)'),
(8, 'Which of these is not a proper Top Level Domain (TLD) ?', '.com', '.net', '.edu', '.man', '.man', '.man'),
(9, 'Which of these is not an E-mail protocol ?', 'POP3', 'IMAP', 'SMTP', 'HTTP', 'HTTP', 'HTTP'),
(10, 'Which service is used to resolve the domain names to IP addresses ?', 'Resolver', 'Name-Converter', 'DNS', 'None of this', 'DNS', 'DNS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`) VALUES
(1, 'D_ITWALA', 'dhruvpitwala@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'DHRUV ITWALA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p1q1`
--
ALTER TABLE `p1q1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);

--
-- Indexes for table `p4q1`
--
ALTER TABLE `p4q1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);

--
-- Indexes for table `p5q1`
--
ALTER TABLE `p5q1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);

--
-- Indexes for table `p6q1`
--
ALTER TABLE `p6q1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option 1` (`option 1`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
