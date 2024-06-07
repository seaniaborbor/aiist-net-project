-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiistdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `featureImg` varchar(225) NOT NULL,
  `postbody` longtext NOT NULL,
  `category` varchar(50) NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `featureImg`, `postbody`, `category`, `createdBy`, `createdAt`) VALUES
(7, 'Media for publication importance', '1689909688_00b1063005f833734a41.png', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme. Save time in Word with new buttons that show up where you need them.\r\nTo change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign. Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device. Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.\r\nClick Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme. Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign. Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.\r\n\r\n', 'Level 2 - AIIST Advanced Professional Diploma in I', '', '2023-07-21'),
(8, 'How to generate placeholder text when you don\'t have you content yet?', '1689912345_00d2e0048d708f382927.png', '<p>When you’re are developing a site and you need a placeholder text, you don’t h</i>ave to dig into your head wasting your time thinking, and surfing the internet for placeholder when you can do it offline with a very short, and sample connand in microsoft word. </p>\r\n\r\n<p><b>If you want latin texts as placeholder, just type the command below:</b></p>\r\n<p><code>=lorem(number1, number2) </code></p>\r\n\r\n<p>In the code above, replace number1 and number2 with real numbers and hit enter. You should have generated Latin texts as show below. Number1 is the number of paragraph and number2 indicates the number of sentences in each paragraph. </p>\r\n\r\n<p><code> =lorem(4,10) </code></p>\r\n\r\n<i><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.</p>\r\n<p>In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.</p>\r\n<p>Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis.</p>\r\n<p>Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin semper, ante vitae sollicitudin posuere, metus quam iaculis nibh, vitae scelerisque nunc massa eget pede. Sed velit urna, interdum vel, ultricies vel, faucibus at, quam. Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi.</p></i>\r\n<h4>Play More secret</h4>>\r\n<p><b>Play Magic! Just tope:</b></p>\r\n\r\n\r\n<p><code> =rand(4,10) </code></p>\r\n<p>Share your experience in the comment box below</p>', 'Level 1 - AIIST Professional Certificate in IT', '', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `postId` int(225) NOT NULL,
  `posted_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `name`, `email`, `comment`, `postId`, `posted_at`) VALUES
(1, 'Test comment', 'admin@gmail.com', 'Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser\r\n\r\nEmilly Blunt', 7, '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `career_table`
--

CREATE TABLE `career_table` (
  `careerId` int(11) NOT NULL,
  `careerName` varchar(255) DEFAULT NULL,
  `careerStatus` varchar(50) DEFAULT NULL,
  `careerDescription` text DEFAULT NULL,
  `careerPic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_table`
--

INSERT INTO `career_table` (`careerId`, `careerName`, `careerStatus`, `careerDescription`, `careerPic`) VALUES
(1, 'Information Technology', '1', '<p>AIIST offers an innovative way to learn and grow from a beginner level to a certified expert in&nbsp;<strong>Database Technology</strong>&nbsp;within eighteen (18) months&rsquo; time. Our Database Technology career path helps you achieve just that. This career path begins with basics knowledge of Microsoft Windows 8.1 and Microsoft Office Professional 2013 and also an advanced level of designing, developing, deploying, managing popular Database Servers like; MySQL, SQL and Oracle.</p>', '1708714440_c3932449cb6acd0de047.jpg'),
(3, 'Database Technology', '1', '<p>AIIST offers an innovative way to learn and grow from a beginner level to a certified expert in&nbsp;<strong>Database Technology</strong>&nbsp;within eighteen (18) months&rsquo; time. Our Database Technology career path helps you achieve just that. This career path begins with basics knowledge of Microsoft Windows 8.1 and Microsoft Office Professional 2013 and also an advanced level of designing, developing, deploying, managing popular Database Servers like; MySQL, SQL and Oracle.</p>\r\n', '1708720914_bd8a48814d2f4b9096cc.png'),
(4, 'Software Engineering', '1', '<p>AIIST offers an innovative way to learn and grow from a beginner level to a certified expert in&nbsp;<strong>Software Engineering</strong>&nbsp;within eighteen (18) months&rsquo; time. Our Software Engineering career path helps you achieve just that. This career path begins with basics knowledge of Microsoft Windows 8.1 and Microsoft Office Professional 2013 and also an advanced level of designing, developing, deploying cross platform application from popular programming languages like; BASIC, HTML5, CSS3, JavaScript, JQuery, Java, and Angular JS.</p>\r\n', '1708743617_64a231af18b703dd8712.png');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certId` varchar(225) NOT NULL,
  `dateIssued` date NOT NULL,
  `course` varchar(200) NOT NULL,
  `certificateType` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `dateAdded` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`certId`, `dateIssued`, `course`, `certificateType`, `duration`, `studentName`, `dateAdded`) VALUES
('X88DvB', '2024-06-18', 'Level 2 - AIIST Advanced Professional Diploma in Database Administration', 'Diploma', '3-months', 'Tarnue P Borbor', '2024-06-06 21:26:36.61414');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `courseStatus` varchar(50) DEFAULT NULL,
  `coursecareer` varchar(255) DEFAULT NULL,
  `courseDuration` text DEFAULT NULL,
  `coursePic` varchar(255) DEFAULT NULL,
  `courseDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseId`, `courseName`, `courseStatus`, `coursecareer`, `courseDuration`, `coursePic`, `courseDescription`) VALUES
(2, 'Level 1 - AIIST Professional Certificate in IT', '1', '1', '6', '1708715443_a0fbd1dac49cca8f56e0.jpg', '<p>Is a good starting point career choice for aspiring IT professionals. This Certificate program will help you start your career as an Information Technology Professional in Microsoft Technologies. This Certificate Program begins with basics knowledge of Microsoft Windows 8.1 and Microsoft Office Professional 2013 and also an introduction to Computer Hardware and Networking.</p>\r\n\r\n<p>AIIST Professional Certificate in Information Technology Courses</p>\r\n\r\n<ul>\r\n	<li>Computer Awareness</li>\r\n	<li>Ms. Windows 8.1</li>\r\n	<li>Touch Typing</li>\r\n	<li>Ms. Word 2013</li>\r\n	<li>Ms. Excel 2013</li>\r\n	<li>Ms. PowerPoint 2013</li>\r\n	<li>Ms. Outlook 2013</li>\r\n	<li>Internet Research &amp; Reporting</li>\r\n	<li>Introduction to Hardware &amp; Computer Maintenance</li>\r\n	<li>Networking Concept</li>\r\n</ul>\r\n'),
(3, 'Level 2 - AIIST Advanced Professional Diploma in Information Technology:', '2', '1', NULL, '1708719399_216d126a83b4b86b9fc2.jpg', '<p>Starts with CompTIA&rsquo;s vendor neutral certifications A+ and N+, which are an industry standard for computer support technicians. It then builds on with Microsoft technologies. Towards the end of this Advanced Diploma program, students are challenged with real life situations in the Simulated Internship from Masterly Digital Solutions wherein students troubleshoot scenarios on all Microsoft Client technologies required. AIIST Advanced Professional Diploma in Information Technology is issued on successfully completing all the practical assignments.</p>\r\n\r\n<ul>\r\n	<li>Working with CPUs, RAM, motherboards, power supplies, and other PC components</li>\r\n	<li>Install, configure and troubleshoot hard drives</li>\r\n	<li>Manage input devices and removable media</li>\r\n	<li>Install, upgrade and troubleshoot Microsoft Windows</li>\r\n	<li>Install video and multimedia cards</li>\r\n	<li>Work with smartphones, tablets and other mobile devices</li>\r\n	<li>Software troubleshooting</li>\r\n	<li>Network Architectures</li>\r\n	<li>Cabling and Topology</li>\r\n	<li>Ethernet basics</li>\r\n	<li>Network Installation</li>\r\n	<li>TCI/IP Applications and Network Protocols</li>\r\n	<li>Routing</li>\r\n	<li>Network Naming</li>\r\n	<li>Advanced Networking Devices</li>\r\n	<li>Remote Connectivity</li>\r\n	<li>Wireless Networking</li>\r\n	<li>Virtualization and Cloud Computing</li>\r\n	<li>Network Operations</li>\r\n	<li>Managing Risk</li>\r\n	<li>Network Security</li>\r\n	<li>Network Monitoring and Troubleshooting</li>\r\n</ul>\r\n'),
(4, 'Level 3 - AIIST Expert Diploma in System Engineering:', '2', '1', NULL, '1708719605_931a656eb9925231c07a.jpg', '<p>Introduces students to various new capabilities in storage, networking, virtualization, information access, protection etc. This Expert Diploma program will not only cover the essentials of the latest version of Windows Server, but also take you through its complete administration and advanced services. Students will also gain in-depth knowledge of latest management tools available for performing post deployment tasks on Windows Server 2012 R2.<br />\r\nThis Expert Diploma training will also allow students to design, configure, implement and manage Windows Server deployments on desktops and devices in an enterprise environment. The skills learnt in this Expert Diploma program will also help IT professionals working in enterprise environment to reduce their IT costs and maximize business value.</p>\r\n\r\n<ul>\r\n	<li>Installing and Configuring Windows 8 Client</li>\r\n	<li>Deploying Windows Server 2012</li>\r\n	<li>Configuring and Troubleshooting a Windows Server 2012 Network Infrastructure</li>\r\n	<li>Designing a Windows Server 2012 Active Directory Infrastructure and Services</li>\r\n	<li>Configuring and Troubleshooting Windows Server 2012 Active Directory Domain Services</li>\r\n	<li>Configuring, Managing, and Troubleshooting Microsoft Exchange Server 2016</li>\r\n	<li>Designing and Deploying Messaging Solutions with Microsoft Exchange Server 2016</li>\r\n</ul>\r\n'),
(5, 'Level 1 - AIIST Professional Certificate in Database Technology', '1', '3', NULL, '1708721292_e766feb28fa6a1ad3168.jpg', '<p>It&#39;s a good starting point career choice for aspiring Database professionals. This Certificate program will help you start your career as a Database Developer in Microsoft Technologies. This Certificate Program begins with basics knowledge of Microsoft Windows 8.1 and Microsoft Office Professional 2013 and also design, develop and program Microsoft Access 2013 Database for enterprise environment.</p>\r\n\r\n<ul>\r\n	<li>Computer Awareness</li>\r\n	<li>Ms. Windows 8.1</li>\r\n	<li>Touch Typing</li>\r\n	<li>Ms. Word 2013</li>\r\n	<li>Ms. Excel 2013</li>\r\n	<li>Ms. PowerPoint 2013</li>\r\n	<li>Ms. Outlook 2013</li>\r\n	<li>Internet Research &amp; Reporting</li>\r\n	<li>Microsoft Access Database Design and Development</li>\r\n	<li>Microsoft Access Database Security</li>\r\n</ul>\r\n'),
(6, 'Level 2 - AIIST Advanced Professional Diploma in Database Administration', '1', '3', NULL, '1708721677_83a1d6447a8571d164ea.jpg', '<p>will train students how to plan and execute enterprise database infrastructure solutions with the help of SQL Server 2014 and other MS technologies. This level is intended for students who are willing to learn SQL Server 2014 or 2016 and also basics knowledge of Oracle Database.<br />\r\nAfter completing AIIST Advanced Professional Diploma in Database Administration, students will be able to evaluate an existing enterprise environment and implement Policy-Based Management.<br />\r\n\r\n<ul class=\"list-group\">\r\n  <li class=\"list-group-item\"><i class=\"bi bi-database\"></i> Advanced Programming in Microsoft Access 2013</li>\r\n  <li class=\"list-group-item\"><i class=\"bi bi-database\"></i> Microsoft SQL Server 2014 Development</li>\r\n  <li class=\"list-group-item\"><i class=\"bi bi-database\"></i> Microsoft SQL Server 2014 Administration</li>\r\n  <li class=\"list-group-item\"><i class=\"bi bi-database\"></i> Introduction to Oracle 11g PL/SQL</li>\r\n  <li class=\"list-group-item\"><i class=\"bi bi-database\"></i> Oracle 11g Administration Workshop</li>\r\n  <li class=\"list-group-item\"><i class=\"bi bi-tools\"></i> Project Work</li>\r\n</ul>\r\n\r\nTowards the end of this Advanced Professional Diploma program, students are challenged with real life situations in the Simulated Internship from Masterly Digital Solutions wherein students troubleshoot scenarios on all Microsoft Client and Oracle technologies required. AIIST Advanced Professional Diploma in Database Administration is issued on successfully completing all the practical assignments.</p>\r\n'),
(7, 'Level 3 - AIIST Expert Diploma in Database Development:', '1', '3', NULL, '1708722030_80bfd21fcac541045aec.jpg', '<p>will teach students about SQL and Oracle Servers, logical table design, and query plans. This Expert Diploma program will focused on the creation of database objects including stored procedures, views, parameters, and functions. The audience for this Expert Diploma is for Database professionals who desire to be proficient on SQL and Oracle Servers product features and technologies. This Expert Diploma training will also teach students how to execute a data warehouse platform to support a Business Intelligent solutions. Students will also learn how to create a data warehouse with MS SQL or Oracle Servers and employ PowerPivot in Microsoft Excel to create analytical data models reporting system.</p>\r\n'),
(8, 'Level 1 - AIIST Professional Certificate Software Engineering:', '1', '4', '6', '1708744292_9eb054682d41a7be3a37.jpg', '<p>Is a good starting point career choice for aspiring Software developers. This Certificate program will help you start your career as a Software Engineer. This Certificate Program begins with basics knowledge of Microsoft Windows 8.1 and Microsoft Office Professional 2013 and also design, develop and program in BASIC, HTML5, CSS3 and JQuery.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `fullName` varchar(225) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passportNum` varchar(20) NOT NULL,
  `currencySelect` varchar(12) NOT NULL,
  `orderNo` varchar(225) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriberId` int(10) NOT NULL,
  `subscriberEmail` varchar(50) NOT NULL,
  `subacribedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriberId`, `subscriberEmail`, `subacribedAt`) VALUES
(28, 'mathematics104@gmail.com', '2024-04-09 03:38:18'),
(29, 'tarnueatalx@gmail.com', '2024-06-07 01:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(225) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passwd` varchar(225) NOT NULL,
  `userRole` varchar(10) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `fbHandle` varchar(225) NOT NULL,
  `xHandle` varchar(225) NOT NULL,
  `linkinHandle` varchar(225) NOT NULL,
  `profileImg` varchar(225) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `fullName`, `email`, `passwd`, `userRole`, `profession`, `fbHandle`, `xHandle`, `linkinHandle`, `profileImg`, `createdAt`) VALUES
(1, 'Tamba Bundor', 'admin@gmail.com', '$2y$10$UW2MagTthF8IPBHMrlvSB.vqwJtq5Nk65aN9/h/bOR6asUSE.js3.', 'SUDO', 'Chairman, Board of Director', 'http://facebook.com/tarnuea', '', '', '1708578007_a783d58376afd567a98b.jpg', '2023-12-24 15:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_title` varchar(30) NOT NULL,
  `customer_testimoney` varchar(225) NOT NULL,
  `customer_pic` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_name`, `customer_title`, `customer_testimoney`, `customer_pic`) VALUES
(6, 'Jane S Doe', 'Database Administrator', '\"Studying at this computer school was a game-changer for me. The database technology course was incredibly hands-on, and the instructors were always available to help. I gained practical skills that I\'m already using in my jo', 'janedoe.jpg'),
(7, 'Mark Morlu', 'Software Engineer', '\"I enrolled in the software engineering program here, and I have to say, it exceeded my expectations. The curriculum was comprehensive, covering both theory and practical applications. What sets this school apart is the empha', 'testimonial_img_1.png'),
(8, 'Miatta Kamara', 'Graphic Designer', '\"As a graphic design enthusiast, I was thrilled with the courses offered. From typography to branding, each lesson was engaging and pushed me creatively. The best part? The instructors are industry professionals who not only ', 'miattakamara.jpg'),
(9, 'Thomas K Morlu', 'IT Instructor', 'Studying information technology here was a transformative experience. The curriculum was up-to-date with the latest trends, and the lab sessions were invaluable. What I loved most was the supportive community. There\'s a real ', 'download__1_-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `ipId` int(11) NOT NULL,
  `IpAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_table`
--
ALTER TABLE `career_table`
  ADD PRIMARY KEY (`careerId`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certId`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriberId`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`ipId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career_table`
--
ALTER TABLE `career_table`
  MODIFY `careerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriberId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `ipId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
