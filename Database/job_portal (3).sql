-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `agency_`
--

CREATE TABLE `agency_` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(150) DEFAULT NULL,
  `agency_phone` varchar(20) DEFAULT NULL,
  `agency_desc` text DEFAULT NULL,
  `agency_address` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `agency_email` varchar(150) DEFAULT NULL,
  `agency_pwd` text DEFAULT NULL,
  `agency_logo` varchar(100) DEFAULT NULL,
  `agency_status` enum('active','deactive') DEFAULT NULL,
  `agency_reg_no` varchar(100) DEFAULT NULL,
  `reg_on` timestamp NULL DEFAULT current_timestamp(),
  `agency_incorporation` varchar(255) DEFAULT NULL,
  `agency_aoa` varchar(255) DEFAULT NULL,
  `agency_moa` varchar(255) DEFAULT NULL,
  `agency_gst` varchar(255) DEFAULT NULL,
  `agency_plan_type` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_`
--

INSERT INTO `agency_` (`agency_id`, `agency_name`, `agency_phone`, `agency_desc`, `agency_address`, `country`, `state`, `city`, `zipcode`, `website_url`, `agency_email`, `agency_pwd`, `agency_logo`, `agency_status`, `agency_reg_no`, `reg_on`, `agency_incorporation`, `agency_aoa`, `agency_moa`, `agency_gst`, `agency_plan_type`) VALUES
(1, 'Test Agency', '12345678', 'sdfdsfsdf', 'sdfsdf', NULL, NULL, NULL, NULL, '', 'agency@gmail.com', '123', NULL, NULL, 'sdfsdfds', '2021-01-19 06:56:28', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agency_wallet`
--

CREATE TABLE `agency_wallet` (
  `wallet_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `wallet_balance` float NOT NULL,
  `updated_on` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_wallet`
--

INSERT INTO `agency_wallet` (`wallet_id`, `agency_id`, `wallet_balance`, `updated_on`, `created_at`) VALUES
(1, 1, 10000, '', '2021-01-19 12:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarked_job`
--

CREATE TABLE `bookmarked_job` (
  `bk_mk_id` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmarked_job`
--

INSERT INTO `bookmarked_job` (`bk_mk_id`, `job_post_id`, `applied_by`, `added_on`) VALUES
(1, 15, 5, '2020-12-09 16:55:36'),
(2, 14, 5, '2020-12-16 17:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `company_`
--

CREATE TABLE `company_` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `comp_phone` varchar(20) DEFAULT NULL,
  `comp_desc` text DEFAULT NULL,
  `comp_address` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `company_email` varchar(150) DEFAULT NULL,
  `company_pwd` text DEFAULT NULL,
  `company_logo` varchar(100) DEFAULT NULL,
  `company_status` enum('active','deactive') DEFAULT NULL,
  `company_reg_no` varchar(100) DEFAULT NULL,
  `reg_on` timestamp NULL DEFAULT current_timestamp(),
  `comp_incorporation` varchar(255) DEFAULT NULL,
  `comp_aoa` varchar(255) DEFAULT NULL,
  `comp_moa` varchar(255) DEFAULT NULL,
  `comp_gst` varchar(255) DEFAULT NULL,
  `comp_plan_type` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_`
--

INSERT INTO `company_` (`company_id`, `company_name`, `comp_phone`, `comp_desc`, `comp_address`, `country`, `state`, `city`, `zipcode`, `website_url`, `company_email`, `company_pwd`, `company_logo`, `company_status`, `company_reg_no`, `reg_on`, `comp_incorporation`, `comp_aoa`, `comp_moa`, `comp_gst`, `comp_plan_type`) VALUES
(1, 'Greenusys Technology ', '', 'Company Description', 'Noida', NULL, NULL, NULL, NULL, 'http://greenusys.com/', 'abc@gmail.com', '123', 'abc.png', 'active', 'ABC123456', '2020-04-27 08:01:48', 'file-sample_15000kB.pdf', 'file-sample_500kB.docx', 'file-sample_100kB.docx', 'file-sample_100kB.doc', 1),
(3, 'Google', '', 'googlessss', 'torernto', NULL, NULL, NULL, NULL, 'google.com', 'google@google.com', '123', 'g_(1).png', 'active', 'Goo1478', '2020-04-29 11:25:29', '', '', '', '', 1),
(5, 'Accenture', '', 'Accenture', 'shimla ', NULL, NULL, NULL, NULL, 'Accenture.com', 'shubhambhattshubh@gmail.com', '123', 'Accenture1.png', 'active', 'Goo1478erh', '2020-05-05 10:06:53', 'GSTR-1-CT-GST-Desktop-App-11.pdf', '11KB.docx', '11KB.doc', 'GST-Invoice-Format-Word.docx', 3),
(6, 'Evon', '', 'Evon', 'shimla ', NULL, NULL, NULL, NULL, 'evon.com', 'evon@admin.com', '123', 'Accenture2.png', 'active', 'Goo1478rg', '2020-05-07 05:32:03', 'pdf1.pdf', '11KB.docx', 'new.doc', 'GST-Invoice-Format-Word1.docx', 4),
(11, 'Company One', '9953470167', '                 sfsfsdf                     \r\n                                    ', 'Devpuram phase 2 d 17 lane', 'India', 'Uttarakhand', 'Dehra Dun', '248002', 'asdfsdf@ddd.com', 'admin@admin.com', '15b5ba8b7ec8234bb776f1a28a3a00595f08e1cd12ba52442ce92e4cee4dea85a6bd42f037a6c124aa52353d054b7183cb758b14dbee844a826189b29786380akSxd9Up6OKeqNAhNXd9GeNYi2X8h47f+Zz2ch28RhT8=', 'test-03-12-20-11-36-01-Logo.jpg', 'active', 'sfsdsd', '2020-12-03 10:36:01', 'IncorProfile-03-12-20-11-36-01-Image.docx', 'AOA-03-12-20-11-36-01-Image.docx', 'MOA-03-12-20-11-36-01-Image.docx', 'GST-03-12-20-11-36-01-Image.pdf', NULL),
(13, 'HCL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rahul@greenusys.com', '15b5ba8b7ec8234bb776f1a28a3a00595f08e1cd12ba52442ce92e4cee4dea85a6bd42f037a6c124aa52353d054b7183cb758b14dbee844a826189b29786380akSxd9Up6OKeqNAhNXd9GeNYi2X8h47f+Zz2ch28RhT8=', NULL, 'active', NULL, '2020-12-04 12:54:32', NULL, NULL, NULL, NULL, NULL),
(14, 'rersr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ransih14061995@gmail.com', 'e93bdc8deabf926802493217f005c98a6717ccf18ecd6dec0435b841f167bf96108ad0553495c26daccfa81555fd43b35d2b2c703d30134ba2db3e1e40cf5153r3pxCxs5lrPMva51oGvD8Cwj0N0Plch7xak/9Ckq6Rg=', NULL, NULL, NULL, '2021-01-20 05:02:43', NULL, NULL, NULL, NULL, NULL),
(15, 'syolo group', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'syologroupnoida@gmail.com', 'dcd534788abfc7a3f1ac7e4465a0ddc6db43edf54d71909bf6098cb2d220e75c8200f87fd5d05c45985b74f73d39f46187d6666865c1572cfa4ce7800c76eb0dPnBWPSY4kcnvJaW91mhVmD/BbSL7gPv5Hy26nNFA0fI=', NULL, NULL, NULL, '2021-01-25 09:52:28', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_msg`
--

CREATE TABLE `company_msg` (
  `c_msg_id` int(6) NOT NULL,
  `c_msg` longtext NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `send_company` int(6) NOT NULL,
  `send_company_email` varchar(255) NOT NULL,
  `recieve_user` int(6) NOT NULL,
  `receive_user_email` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_msg`
--

INSERT INTO `company_msg` (`c_msg_id`, `c_msg`, `c_subject`, `send_company`, `send_company_email`, `recieve_user`, `receive_user_email`, `added_on`) VALUES
(1, '<p>selected Your interview on date 30/04/2020&nbsp;</p>\r\n', '', 3, '', 3, '', '2020-04-29 13:06:48'),
(2, '<p>rejected</p>\r\n', 'rejected', 3, 'google@google.com', 3, 'rahul@wgmail.com', '2020-05-06 10:59:33'),
(3, '<p>dfgdfg</p>\r\n', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 12:50:03'),
(4, '', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 12:55:03'),
(5, '<p>sdfsdf</p>\r\n', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 12:55:26'),
(6, '<p>dfgdfgff</p>\r\n', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 13:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `currency_type`
--

CREATE TABLE `currency_type` (
  `curr_id` int(6) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `curr_added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_type`
--

INSERT INTO `currency_type` (`curr_id`, `currency_name`, `curr_added_on`) VALUES
(1, 'Rs', '2020-05-06 06:19:47'),
(2, 'US $', '2020-05-06 06:23:44'),
(3, 'Euro', '2020-05-06 06:25:32'),
(4, 'dinnar', '2020-05-06 07:09:04'),
(5, 'Japanese Yen ', '2020-05-07 10:18:23'),
(6, 'British Pound (GBP)', '2020-05-07 12:29:41'),
(7, 'Swiss Franc (CHF)', '2020-05-07 12:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_added`
--

CREATE TABLE `jobs_added` (
  `job_id` int(11) NOT NULL,
  `added_by_company_id` int(11) NOT NULL,
  `job_title` text NOT NULL,
  `job_desc` text NOT NULL,
  `hr_email_id` varchar(255) DEFAULT NULL,
  `job_location_` varchar(255) NOT NULL,
  `exp` int(11) DEFAULT NULL,
  `job_type` int(11) NOT NULL,
  `job_category` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `vacancies_` int(11) NOT NULL,
  `job_status` enum('Filled','Vacant') NOT NULL DEFAULT 'Vacant',
  `job_apps_status` enum('active','deactive') NOT NULL,
  `last_date` varchar(50) NOT NULL,
  `min_work_exp` varchar(255) NOT NULL,
  `max_work_exp` varchar(255) NOT NULL,
  `currency_type` int(10) NOT NULL,
  `min_annual_sal` int(10) NOT NULL,
  `max_annaul_sal` int(10) NOT NULL,
  `ug_qualification` varchar(255) DEFAULT NULL,
  `pg_qualification` varchar(255) DEFAULT NULL,
  `phd_qualification` varchar(255) DEFAULT NULL,
  `adde_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_added`
--

INSERT INTO `jobs_added` (`job_id`, `added_by_company_id`, `job_title`, `job_desc`, `hr_email_id`, `job_location_`, `exp`, `job_type`, `job_category`, `skills`, `vacancies_`, `job_status`, `job_apps_status`, `last_date`, `min_work_exp`, `max_work_exp`, `currency_type`, `min_annual_sal`, `max_annaul_sal`, `ug_qualification`, `pg_qualification`, `phd_qualification`, `adde_on`) VALUES
(1, 1, 'PHP Developer', '                                                                                        PHP Developer Needed                                                                                ', 'hr@greenusys.com', 'Dehradun', 3, 1, 6, '1,2,3,5', 6, 'Filled', 'deactive', '10/05/2020', '1', '3', 1, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-27 13:33:25'),
(2, 2, 'Node/Angular Developer Needed', 'Anuglar Developer Is neede', 'hr@greenusys.com', 'Dehradun', 10, 2, 7, '1,2,4', 4, 'Vacant', 'active', '10/05/2020', '2', '4', 2, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-27 14:11:27'),
(7, 1, 'New JoB', '                      \r\n                    Job Desc', 'hr@greenusys.com', 'Dehradun', 4, 1, 9, '3', 1, 'Vacant', 'active', '2020-04-30', '3', '5', 1, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-29 19:23:37'),
(8, 3, 'test', 'test', 'hr@greenusys.com', 'Dehradun', 0, 2, 2, '2,4', 4, 'Vacant', 'deactive', '2020-05-22', '4', '6', 2, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-30 13:33:30'),
(9, 5, 'Laravel Developers', 'Laravel Developer', 'hr@greenusys.com', 'Gurugram', 0, 3, 8, '1,2,5,6', 2, 'Vacant', 'active', '2020-08-14', '2', '5', 2, 2, 1, 'B.tech (CS)', 'None', 'None', '2020-05-06 13:25:41'),
(10, 1, 'Selenium testers', '                                                                                                              Selenium tester\r\n                                                                                                    ', 'hr@greenusys.com', 'Gurugram', NULL, 2, 7, '1,3,5', 2, 'Vacant', 'active', '08-05-2020', '2', '3', 3, 2, 1, 'B.tech (CS)', 'None', 'None', '2020-05-07 15:56:32'),
(11, 5, 'Php Developer', '<p>Responsible for creating and implementing an array of Web-based products using PHP, MySQL, Ajax, and JavaScript. Develop back-end components, connect the application with other web services, and assist front-end developers by ensuring their work integrates with the application. Also, might be asked to develop and integrate plug-ins for Codeigniter &amp; laravel frameworks.</p>\r\n\r\n<p><strong>Key Skills</strong>: CorePHP, PHP, codeigniter &amp; laravel Framework, Mysql, HTML5, CSS3, Javascript, Jquery, Ajax, Deployment, Agile Methodologies, Third-party integration.</p>\r\n\r\n<p><strong>Skills / Attributes Required</strong></p>\r\n\r\n<ul>\r\n	<li>Expertise in Programming Core Php, Php, Any framework.</li>\r\n	<li>Expertise with HTML5/CSS3/Javascript for web application development.</li>\r\n	<li>Hands-on with third party integration is mandatory.</li>\r\n	<li>MySQL for implementing database-driven, web-based applications.</li>\r\n	<li>Knowledge of new web developments like Ajax, Xml Building Web applications with an</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Emphasis on performance and user experience.</li>\r\n	<li>Familiarity with and adherence to web standards and best practices for load time.</li>\r\n</ul>\r\n\r\n<p><strong>Reduction and accessibility.</strong></p>\r\n\r\n<p><em>We are keen to hire someone who is passionate about the web, with excellent knowledge of PHP, and experience with object-oriented programming. Knowledge of best practices is essential.</em></p>\r\n\r\n<p>Job Types: Full-time, Walk-In</p>\r\n\r\n<p>Salary: ?18,000.00 - ?35,000.00 per month</p>\r\n\r\n<p>Schedule:</p>\r\n\r\n<ul>\r\n	<li>Day shift</li>\r\n</ul>\r\n\r\n<p>Experience:</p>\r\n\r\n<ul>\r\n	<li>Software Development: 3 years (Preferred)</li>\r\n	<li>Laravel: 2 years (Preferred)</li>\r\n</ul>\r\n\r\n<p>Licence:</p>\r\n\r\n<ul>\r\n	<li>Core PHP (Preferred)</li>\r\n</ul>\r\n\r\n<p>Programming Languages needed:</p>\r\n\r\n<ul>\r\n	<li>PHP (Required)</li>\r\n</ul>\r\n', 'hr@greenusys.com', 'Noida Sector 19', NULL, 2, 6, '1', 3, 'Vacant', 'active', '2020-12-12', '1', '8', 1, 2, 10, 'B.Tech', 'NA', 'NA', '2020-12-03 12:22:23'),
(12, 1, 'Php Developer', '<p>We are a start-up. We want a great WordPress developer with great attitude who thrive under pressure.</p>\r\n\r\n<p>The ideal candidate would be responsible for complete development for WordPress</p>\r\n\r\n<p>websites including creating WordPress themes and plugins with an ability to understand CSS changes and their ramifications to ensure consistent style across platforms and browsers. Ability to convert comprehensive layout and wireframes into working HTML pages, knowledge of how to interact with RESTful APIs and formats (JSON, XML) is a must. This position requires a combination of programming skills [WordPress, PHP, MYSQL, MVC frameworks (Codignator) NoSQL database, HTML, CSS, JS, etc.).</p>\r\n\r\n<p>Experience with responsive and adaptive design is a must.</p>\r\n\r\n<p><strong><em>RESPONSIBILITIES:</em></strong></p>\r\n\r\n<ul>\r\n	<li>3+ years of Wordpress Development experience with a minimum of 2 years of Plugin and</li>\r\n</ul>\r\n\r\n<p>Theme development.</p>\r\n\r\n<ul>\r\n	<li>Should have experience in PHP development with proven experience in developing</li>\r\n</ul>\r\n\r\n<p>scalable, reliable and robust products.</p>\r\n\r\n<ul>\r\n	<li>Must have Created Complex Custom Modules</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Hands on experience in developing in WordPress, PHP Framework &amp; MVC Architecture</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Should be able to perform unit testing on source code wherever required.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Should be able to maintain source code, and analyse and fix bugs wherever necessary.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Optimizing Websites as per SEO Standards and requirements given by SEO Team.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Experience with front end technologies JavaScript, AJAX , JSON, and jQuery, HTML, CSS</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Should have knowledge of caching technologies, Web Services for mobile apps and</li>\r\n</ul>\r\n\r\n<p>Payment gateways such as Bildesk, Citrus pay Etc.</p>\r\n\r\n<ul>\r\n	<li>Should be able to perform timely evaluation of new technologies and methodologies</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Should be able to maintain existing websites, which are developed in open source</li>\r\n</ul>\r\n\r\n<p>format</p>\r\n\r\n<ul>\r\n	<li>Understanding of LINUX and Cloud platforms (AWS/GCP/Azure) is preferred</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Good knowledge of MySQL as well as in-memory databases</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>1-3 years&#39; of experience using HTML, CSS, and JavaScript</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Proficiency in at least one server-side technology (Java, PHP, NodeJS, Python, Ruby)</li>\r\n</ul>\r\n\r\n<p><strong>REMEMBER:&nbsp;</strong>?</p>\r\n\r\n<p>?At Buffalo Soldiers&rsquo;, there ain&rsquo;t a job for people who like a safe desk job. We are an experimental, on-the-go start-up, focused on innovation, interaction and engagement. We are exploring futuristic ways in everything - from design to development, from content to communication, from A to Z of everything and anything we do.</p>\r\n\r\n<p>This is a job that will require you to jump from one medium to the another in any one given day. We are lo-fi and immediate. We ask questions all the time. What we value day in and day out are relentless curiosity, fearlessness, enterprise and an entrepreneurial attitude.</p>\r\n\r\n<p><strong><em>WE LOVE PEOPLE:</em></strong></p>\r\n\r\n<ul>\r\n	<li>Who can work closely with peers to resolve problems effectively and positively.</li>\r\n	<li>Who are organized and can multi-task</li>\r\n	<li>Who are flexible and aware that some deadlines are accomplished after hours or in weekends.</li>\r\n	<li>Who can create clean, modern, testable, well-documented code</li>\r\n	<li>Who can be autonomous or work in a cross-functional agile team</li>\r\n</ul>\r\n\r\n<p>A good sense of humor is always a plus!</p>\r\n\r\n<p>Contract length: 12 months</p>\r\n\r\n<p>Application Deadline: 15/12/2020</p>\r\n\r\n<p>Expected Start Date: 21/12/2020</p>\r\n\r\n<p>Job Types: Full-time, Contract</p>\r\n\r\n<p>Salary: ?20,893.00 - ?38,742.00 per month</p>\r\n\r\n<p>Schedule:</p>\r\n\r\n<ul>\r\n	<li>Day shift</li>\r\n</ul>\r\n\r\n<p>Supplemental Pay:</p>\r\n\r\n<ul>\r\n	<li>Performance bonus</li>\r\n	<li>Yearly bonus</li>\r\n</ul>\r\n\r\n<p>Experience:</p>\r\n\r\n<ul>\r\n	<li>WordPress: 2 years (Required)</li>\r\n	<li>PHP: 1 year (Required)</li>\r\n	<li>total work: 2 years (Required)</li>\r\n	<li>Plugin and Theme development: 1 year (Required)</li>\r\n</ul>\r\n\r\n<p>Education:</p>\r\n\r\n<ul>\r\n	<li>Bachelor&#39;s (Required)</li>\r\n</ul>\r\n\r\n<p>Application Question:</p>\r\n\r\n<ul>\r\n	<li>Why would you want to join a start-up agency? Do you know about agency life and culture?</li>\r\n</ul>\r\n\r\n<p>Work Remotely:</p>\r\n\r\n<ul>\r\n	<li>Yes, temporarily due to COVID-19</li>\r\n</ul>\r\n', 'hr@greenusys.com', 'Noida Sector 19', NULL, 1, 5, '1,3,6', 2, 'Vacant', 'active', '2020-12-18', '1', '3', 1, 3, 4, 'B.Tech', 'NA', 'NA', '2020-12-04 11:18:50'),
(13, 1, 'Android/Flutter Developer', '<p>We are looking for self-motivated &quot;Android / Flutter Developer&quot; with excellent communication. Our ideal candidate is a great Android developer who is proficient with Android/Flutter and its ecosystem. Your primary focus will be developing full user-facing applications, along with individual user interface components. These will be implemented following well-established best practices in Android/Flutter. You will ensure that these components and the overall application are robust and easy to maintain, coordinating with the rest of the team. Therefore, a commitment to collaborative problem solving, sophisticated design, and product quality are important.</p>\r\n\r\n<ul>\r\n	<li>Minimum 2 years of experience in software development</li>\r\n	<li>Hands-On Programming Experience in Android/Flutter</li>\r\n	<li>Exposure to Mobile developer domain and SQL lite</li>\r\n</ul>\r\n\r\n<p><strong>Job Skills:</strong></p>\r\n\r\n<ul>\r\n	<li>Experience building and deploying a moderately complex Flutter/Android/IOS app,</li>\r\n	<li>Translating UI/UX designs into code,</li>\r\n	<li>Firebase and GCM</li>\r\n	<li>Advanced debugging/testing/optimization,</li>\r\n	<li>General knowledge of Location Services, Maps, and other common Android/IOS libraries</li>\r\n</ul>\r\n\r\n<p>Job Types: Full-time, Walk-In</p>\r\n\r\n<p>Salary: ?30,000.00 - ?45,000.00 per month</p>\r\n\r\n<p>Schedule:</p>\r\n\r\n<ul>\r\n	<li>Day shift</li>\r\n</ul>\r\n\r\n<p>Experience:</p>\r\n\r\n<ul>\r\n	<li>total work: 2 years (Required)</li>\r\n</ul>\r\n\r\n<p>Work Remotely:</p>\r\n\r\n<ul>\r\n	<li>Yes, temporarily due to COVID-19</li>\r\n</ul>\r\n\r\n<p><strong>Speak with the employer</strong><br />\r\n+91 9692596925</p>\r\n', 'hr@greenusys.com', '', NULL, 1, 5, '2', 3, 'Vacant', 'active', '2020-12-31', '2', '6', 1, 3, 12, 'B.Tech', 'NA', 'NA', '2020-12-04 11:20:37'),
(14, 1, 'Digital Marketing Executive', '<p>As a digital marketing executive is responsible for looking into the online marketing strategies for the organization. They plan and execute marketing campaigns, and maintain and supply content for the organization&rsquo;s website. Here is a list of digital marketing executive roles and responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Develop and manage digital marketing campaigns</li>\r\n	<li>Manage organization&rsquo;s website</li>\r\n	<li>Optimize content for the website and social networking channels such as Facebook, Twitter, Instagram, Google Plus, etc</li>\r\n	<li>Track the website traffic flow and provide internal reports regularly</li>\r\n	<li>Fix any error in online content and arrange webinars and webcasts</li>\r\n	<li>Attend networking events and product launches.</li>\r\n	<li>Identify new digital marketing trends and ensure that the brand is in front of the industry developments.</li>\r\n	<li>Work on SEO of the website pages.</li>\r\n	<li>Edit and post content, videos, podcasts, and audio content on online sites.</li>\r\n	<li>Promote company&rsquo;s product and services in the digital space.</li>\r\n	<li>Execute social media efforts to improve KPIs, likes, shares, tweets, etc.</li>\r\n	<li>Creating and executing SMS, and email-based marketing campaigns.</li>\r\n</ul>\r\n\r\n<p>Job Type: Full-time</p>\r\n\r\n<p>Salary: ?15,000.00 - ?20,000.00 per month</p>\r\n\r\n<p>Experience:</p>\r\n\r\n<ul>\r\n	<li>work: 1 year (Preferred)</li>\r\n	<li>total work: 1 year (Preferred)</li>\r\n	<li>Digital Marketing: 1 year (Preferred)</li>\r\n</ul>\r\n\r\n<p>Education:</p>\r\n\r\n<ul>\r\n	<li>Diploma (Preferred)</li>\r\n</ul>\r\n\r\n<p>Digital Marketing Experience:</p>\r\n\r\n<ul>\r\n	<li>Social Media Marketing (Required)</li>\r\n	<li>SEM (Required)</li>\r\n	<li>Google Adwords (Required)</li>\r\n	<li>SEO Marketing (Required)</li>\r\n</ul>\r\n\r\n<p>Work Remotely:</p>\r\n\r\n<ul>\r\n	<li>No</li>\r\n</ul>\r\n', 'hr@greenusys.com', 'Noida Sector 19', NULL, 1, 5, '4', 4, 'Vacant', 'active', '2020-12-30', '1', '6', 1, 2, 9, 'B.Tech', 'NA', 'NA', '2020-12-04 11:22:05'),
(15, 1, 'Sr. Marketing Manager', '<p>Urgently hiring</p>\r\n\r\n<ul>\r\n	<li>Implement a marketing strategy that is aligned with the overall Mac/Mego brands marketing objectives.</li>\r\n	<li>Implement assigned brand plans and budget to meet revenue and profit targets.</li>\r\n	<li>Implement brand/project/destination strategies to maximize profitable sales for each customer segment, identify new growth opportunities and enhance customer satisfaction.</li>\r\n	<li>Build and manage relationships with advertising agencies, vendors and suppliers.</li>\r\n	<li>In conjunction with CRM, build and manage effective relationships with customers and identify specific initiatives that improve the overall customer journey and overall retention.</li>\r\n	<li>Ensure that agreed formal briefs are provided to Marketing Services &amp; External agencies for all relevant marketing activity.</li>\r\n	<li>Work with Development and Sales to ensure that optimal product characteristics by consumer target segment are jointly agreed for each project.</li>\r\n	<li>Achieve the standards that are established in KPIs / KRAs.</li>\r\n	<li>Support senior management in achieving the desired project / destination ROIs as per the business plan.</li>\r\n	<li>Maintain standards and guidelines for external marketing communications for assigned brand group.</li>\r\n	<li>Train, develop and motivate subordinates.</li>\r\n</ul>\r\n\r\n<p>Required Candidate profile</p>\r\n\r\n<p>:</p>\r\n\r\n<p>7 - 12 years experience in Marketing with a minimum of 3 years in a senior position. Experience in Automobile marketing would be an added advantage</p>\r\n\r\n<ul>\r\n	<li>Demonstrated skills, knowledge and experience in the development and positioning of brands</li>\r\n	<li>Experience in strategic planning, leadership, team/people management, and driving change.</li>\r\n	<li>Experience in providing leadership with cross-disciplinary internal / external teams</li>\r\n</ul>\r\n\r\n<p>Ability to:</p>\r\n\r\n<ul>\r\n	<li>Achieve high results in brand awareness and recognition (based on survey conducted by third parties).</li>\r\n	<li>Increase market share.</li>\r\n	<li>Manage marketing costs as a percentage of sales.</li>\r\n	<li>Be innovative and creative.</li>\r\n</ul>\r\n\r\n<p>. Key Performance Indicators</p>\r\n\r\n<ul>\r\n	<li>Unit Sales / Revenues / Profitability.</li>\r\n	<li>Qualified Leads.</li>\r\n	<li>Effective management of external agencies and suppliers.</li>\r\n	<li>Marketing ROI.</li>\r\n	<li>Market share.</li>\r\n	<li>Effective external communication (through survey results).</li>\r\n	<li>Participation in media and other events.</li>\r\n	<li>Effective digital marketing presence as judged by analytics.</li>\r\n	<li>Adherence to Corporate budgets, timelines, and guidelines.</li>\r\n	<li>Effective relationships between Mac Auto/Mego Electric &amp; Channel Partners</li>\r\n</ul>\r\n\r\n<p>Industry Type: Ev, Automobile 2w or 3w<br />\r\nFunctional Area Marketing, Advertising, MR, PR, Media Planning<br />\r\nRoleMarketing Manager<br />\r\nEmployment Type Full Time, Permanent<br />\r\nEducation<br />\r\nMBA/PGDM in Any Specialization</p>\r\n\r\n<p>Job Type: Full-time</p>\r\n\r\n<p>Salary: ?700,000.00 - ?800,000.00 per year</p>\r\n\r\n<p>Schedule:</p>\r\n\r\n<ul>\r\n	<li>Morning shift</li>\r\n</ul>\r\n\r\n<p>Supplemental Pay:</p>\r\n\r\n<ul>\r\n	<li>Performance bonus</li>\r\n	<li>Yearly bonus</li>\r\n</ul>\r\n\r\n<p>Experience:</p>\r\n\r\n<ul>\r\n	<li>Automobile,Logistics,Digital Marketing : 10 years (Preferred)</li>\r\n	<li>work: 7 years (Preferred)</li>\r\n</ul>\r\n\r\n<p>Education:</p>\r\n\r\n<ul>\r\n	<li>Master&#39;s (Preferred)</li>\r\n</ul>\r\n\r\n<p>Benefits:</p>\r\n\r\n<ul>\r\n	<li>Health insurance</li>\r\n	<li>Provident fund (PF)</li>\r\n	<li>Paid leaves / Leave encashment</li>\r\n	<li>Travel allowance</li>\r\n	<li>Meal card / Food coupons</li>\r\n	<li>Work from home</li>\r\n</ul>\r\n\r\n<p>Industry:</p>\r\n\r\n<ul>\r\n	<li>Sales</li>\r\n</ul>\r\n', 'hr@greenusys.com', 'Noida Sector 19', NULL, 1, 5, '3', 1, 'Vacant', 'active', '2020-12-25', '2', '6', 1, 1, 9, 'B.Tech', 'NA', 'NA', '2020-12-04 11:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `job_application_id` int(11) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `app_status` enum('Pending','Accepted','Rejected') NOT NULL,
  `applied_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`job_application_id`, `applied_by`, `job_post_id`, `app_status`, `applied_on`) VALUES
(1, 1, 1, 'Pending', '2020-04-27 08:04:14'),
(3, 3, 1, 'Pending', '2020-04-29 15:02:18'),
(4, 2, 15, 'Pending', '2020-12-09 11:23:22'),
(5, 5, 15, 'Pending', '2020-12-16 11:33:49'),
(6, 5, 13, 'Pending', '2020-12-16 11:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`category_id`, `category_name`, `category_icon`) VALUES
(5, 'IT & Telecoms', 'coding.png'),
(6, 'Banking', 'bank.png'),
(7, 'Engineering', 'engineering.png'),
(8, 'Education', 'mortarboard.png'),
(9, 'Legal', 'legal.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `CompanyCurrecy` varchar(100) DEFAULT NULL,
  `CompanyPrice` float DEFAULT NULL,
  `CompanyDesc` text DEFAULT NULL,
  `data_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`type_id`, `type_name`, `CompanyCurrecy`, `CompanyPrice`, `CompanyDesc`, `data_added`) VALUES
(1, 'Full Time', NULL, NULL, NULL, '2020-12-03 16:26:37'),
(2, 'Part Time', NULL, NULL, NULL, '2020-12-03 16:26:37'),
(3, 'Permanent', NULL, NULL, NULL, '2020-12-03 16:26:37'),
(4, 'test', NULL, NULL, NULL, '2020-12-03 16:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `max_salary`
--

CREATE TABLE `max_salary` (
  `max_sal_id` int(6) NOT NULL,
  `max_sal` varchar(255) NOT NULL,
  `max_sal_addedon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `max_salary`
--

INSERT INTO `max_salary` (`max_sal_id`, `max_sal`, `max_sal_addedon`) VALUES
(1, '8000', '2020-05-06 06:59:54'),
(2, '10000', '2020-05-06 07:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `min_salary`
--

CREATE TABLE `min_salary` (
  `min_sal_id` int(11) NOT NULL,
  `min_salary` varchar(255) NOT NULL,
  `min_sal_addedon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `min_salary`
--

INSERT INTO `min_salary` (`min_sal_id`, `min_salary`, `min_sal_addedon`) VALUES
(1, '5000', '2020-05-06 06:54:17'),
(2, '6000', '2020-05-06 07:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `plan_type`
--

CREATE TABLE `plan_type` (
  `c_type_id` int(6) NOT NULL,
  `c_type_name` varchar(100) NOT NULL,
  `CompanyCurrecy` varchar(20) DEFAULT NULL,
  `CompanyPrice` float DEFAULT NULL,
  `CompanyDesc` text DEFAULT NULL,
  `data_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_type`
--

INSERT INTO `plan_type` (`c_type_id`, `c_type_name`, `CompanyCurrecy`, `CompanyPrice`, `CompanyDesc`, `data_added`) VALUES
(1, 'Free', NULL, NULL, NULL, '2020-12-03 16:33:16'),
(2, 'Trial', NULL, NULL, NULL, '2020-12-03 16:33:16'),
(3, 'Paid', NULL, NULL, NULL, '2020-12-03 16:33:16'),
(4, 'Premium', NULL, NULL, NULL, '2020-12-03 16:33:16'),
(5, 'name', NULL, NULL, NULL, '2020-12-03 16:33:16'),
(7, 'name', 'currecny', 4343, 'name', '2020-12-03 16:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `resume_upload`
--

CREATE TABLE `resume_upload` (
  `resume_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume_path` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_upload`
--

INSERT INTO `resume_upload` (`resume_id`, `user_id`, `resume_path`, `added_on`) VALUES
(1, 2, 'steve-jobs--david-paul-morrisbloomberg-via-getty-images.jpg', '2020-04-29 09:30:05'),
(2, 3, '1_swEsfQdCfFAyOPWMgqL7wg.jpeg', '2020-04-29 09:56:20'),
(3, 3, 'XpgonN0X_400x400.jpg', '2020-04-29 10:09:34'),
(4, 4, 'steve-jobs--david-paul-morrisbloomberg-via-getty-images1.jpg', '2020-04-29 10:12:12'),
(5, 3, '1_swEsfQdCfFAyOPWMgqL7wg1.jpeg', '2020-04-29 10:13:24'),
(6, 3, 'XpgonN0X_400x4001.jpg', '2020-04-29 10:14:27'),
(7, 3, 'XpgonN0X_400x4002.jpg', '2020-04-29 10:32:59'),
(8, 5, 'Resume-17-12-20-10-49-18-Image.docx', '2020-12-17 09:17:40'),
(9, 8, 'Resume-01-02-21-07-52-52-Image.pdf', '2021-02-01 06:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_interiew`
--

CREATE TABLE `scheduled_interiew` (
  `sche_id` int(11) NOT NULL,
  `job_profile` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `interview_date` varchar(50) NOT NULL,
  `interview_time` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduled_interiew`
--

INSERT INTO `scheduled_interiew` (`sche_id`, `job_profile`, `company_id`, `application_id`, `interview_date`, `interview_time`, `added_on`) VALUES
(7, 'PHP Developer', 1, 3, 'Friday, 22-05-2020', '02:00 PM', '2020-05-17 16:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `skills_`
--

CREATE TABLE `skills_` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_`
--

INSERT INTO `skills_` (`skill_id`, `skill_name`) VALUES
(1, 'PHP'),
(2, 'NODE.js'),
(3, 'HTML'),
(4, 'C#'),
(5, 'Bootstrap'),
(6, 'laravel');

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `story_id` int(6) NOT NULL,
  `story` longtext NOT NULL,
  `story_image` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`story_id`, `story`, `story_image`, `added_on`) VALUES
(1, '<p>Steve Jobs: Steve Jobs has been known as an iconic figure for the establishment of Apple like the biggest company. However, it is extremely shocking to know that the $2 billion company with over 4000 employees has been started with only two persons in a garage. It is also to be noticed that this great establisher has been dismissed and fired from the company from which he has started his career. Further, realizing his potential and capabilities, Steve Jobs proceeded further towards establishing this biggest company which is famously known as &lsquo;Apple&rsquo;.</p>\r\n', 'steve-jobs--david-paul-morrisbloomberg-via-getty-images.jpg', '2020-04-29 06:10:22'),
(2, '<p>Bill Gates: It was very much important for Bill gates to heed the lessons of failure in comparison to celebrating the joy of success. This great entrepreneur who has established Microsoft like the biggest software company is a dropout student from Harvard. Furthermore, he has also been known for his self-owned business figure known as&nbsp;&nbsp;&nbsp;&nbsp;Traf-O-Data which was one of the biggest failures in history. The entire investment of Bill Gates got vanished and unfortunately, even the education could also not get completed. But, the keen desire and the passion for the computer programming based stuff led him to establish such biggest software company with the brand name &lsquo;Microsoft&rsquo;.</p>\r\n', 'XpgonN0X_400x400.jpg', '2020-04-29 06:11:43'),
(4, '<p>Albert Einstein: Albert Einstein is a well-known scientist and extraordinary genius personality known by almost all of us all over the world due to his great inventions and contributions towards science. He quoted that success is a failure in progress and someone who has never failed cannot truly be a successful person. During childhood, he suffered from continuous failures. He was not even able to speak fluently till the age of nine years following which he has been expelled from the school. Furthermore, his admission to Zurich Polytechnic School was also not considered. But, leading to the ways of success consistently, he proved himself as a renowned gem in the ocean of science and technology and finally won the Nobel Prize for Physics in 1921.</p>\r\n', '1_swEsfQdCfFAyOPWMgqL7wg.jpeg', '2020-04-29 06:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `basic_introduction` text NOT NULL,
  `nationality_` varchar(100) DEFAULT NULL,
  `phone_` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `profile_pic` varchar(150) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `skill_ids` text NOT NULL,
  `dob_` varchar(100) NOT NULL,
  `gender_` enum('Male','Female','Others') NOT NULL,
  `address_` varchar(255) NOT NULL,
  `user_status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`user_id`, `fullname`, `basic_introduction`, `nationality_`, `phone_`, `email`, `password`, `profile_pic`, `resume_id`, `skill_ids`, `dob_`, `gender_`, `address_`, `user_status`) VALUES
(1, 'Shuhani Sing', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '1234567890', 'suhani@gmail.com', '123', 'download_(8).jpg', 1, '1,2,3,4', '14-06-1996', 'Female', 'Dehradun India', 'deactive'),
(2, 'Ankit', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '1234567890', 'rahul@gmail.com', '123', 'rah.jpg', 2, '1,3,4', '14-06-1995', 'Male', 'Dehradun India', 'active'),
(3, 'Rahul Kumar', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '45327327', 'rahul@wgmail.com', '123', 'rah.jpg', 3, '1,2,3,4,5', '14-06-1995', 'Male', 'Dehradun India', 'active'),
(4, 'Rohan bhatt', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '1234567890', 'dpknouliya@gmail.com', '123', 'download_(8)1.jpg', 4, '1,2,3,4,5', '14-06-1995', 'Male', 'Dehradun India', 'deactive'),
(5, 'John Cen', 'I have moved to this city three months ago. I love the street food here. On weekends, I explore new eating joints. This way, I get to learn the routes of this city and prepare myself professionally. Being a sales professional, my profile requires a lot of traveling.', NULL, '09953470167', 'admin@admin.com', 'c8d37d2eb2081ff5354a624f9b08cc4cb905146217335fb69631839b29a6b2436c4a6513ce85df96ad815585329afa35dd2107bcc3f956fb61a39e951a110f80qwnPLSV7CMFuJeRAS/gpvPFcEt8BUqUv2ntmIvpL1nE=', 'rah.jpg', 0, '1,2,3,4,5', '', 'Male', '', 'active'),
(6, 'rser', '', NULL, '12345678954', 'rohansih14061995@gmail.com', '019b7e008a98ef9ee359466be27114ff5b24f1ff4447b9dca2a597949dd0bd73cfc4d1603055b05fb0914f52e5e8aa89ab299a971fb87bd7f8b705da5180d7a89fL6a3qO70ApDmH83s5+9ITrUbn3cUsQ16z+cHnjS3w=', '', 0, '', '', 'Male', '', 'active'),
(7, 'dgdfg', '', NULL, '32534534', 'sdfgologroupnoida@gmail.com', 'd655b6a0b4859601a91efc9a8dc2827650994dfad7348fbb4255e490d3018eae7bcefe6ad92e522d78d1fab51ff4cd138cb7eb110068a959e099db65798fd3fbPgmw5kWTQl+IgpOPMDZ2fRn/M2p6UqH8iIw2RswfM7g=', '', 0, '', '', 'Male', '', 'active'),
(8, 'Test  user', '', NULL, '9953470167', 'test@gmail.com', '9413d4f98c705646012d3942e08e879e9e79e1382392b5775f11e01a7f062f9006a634f9fe50be0abdb4cb0d435584442f0bd20a9d0adf76a855ab4d9bcd7cb36Je7BBksw68/Mh8TrCazYaRyQZ20fHYj4MEAzS95CpM=', '', 0, '', '', 'Male', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_` varchar(150) NOT NULL,
  `institute_` text NOT NULL,
  `passing_year` int(11) NOT NULL,
  `course_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `degree`, `user_id`, `course_`, `institute_`, `passing_year`, `course_type`) VALUES
(1, 'B.Tech', 5, 'Computer Science', 'Maharshi Dayanand University', 2017, 'Regular'),
(2, '12th', 5, 'Computer Science', 'Kendriya Vidyalaya', 2013, 'Regular'),
(3, 'dfdfs', 5, 'dsfdf', 'sdfsdf', 203, 'Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `user_employment`
--

CREATE TABLE `user_employment` (
  `emp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` text NOT NULL,
  `company_name` text NOT NULL,
  `company_address` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `join_year` int(11) NOT NULL,
  `to_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_employment`
--

INSERT INTO `user_employment` (`emp_id`, `user_id`, `job_title`, `company_name`, `company_address`, `category_id`, `join_year`, `to_year`) VALUES
(1, 5, 'Php Developer', 'Greenusys Technology', 'noida', 1, 2015, 2017),
(2, 5, 'Web Developer', 'Green11', 'noida11', 6, 2013, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `user_msg`
--

CREATE TABLE `user_msg` (
  `u_msg_id` int(6) NOT NULL,
  `u_msg` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `send_user` int(6) NOT NULL,
  `send_user_email` varchar(255) NOT NULL,
  `recieve_company` int(6) NOT NULL,
  `receive_company_email` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`u_msg_id`, `u_msg`, `subject`, `send_user`, `send_user_email`, `recieve_company`, `receive_company_email`, `added_on`) VALUES
(1, '<p>any vacancies left ?</p>\r\n', '', 3, '', 3, '', '2020-04-29 12:56:03'),
(2, '<p>test</p>\r\n', 'testesddd', 4, 'dpknouliya@gmail.com', 5, 'shubhambhattshubh@gmail.com', '2020-05-06 10:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_work_summary`
--

CREATE TABLE `user_work_summary` (
  `summ_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_title` text NOT NULL,
  `profile_summary` text NOT NULL,
  `exp_year` int(11) NOT NULL,
  `exp_month` int(11) NOT NULL,
  `current_salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_work_summary`
--

INSERT INTO `user_work_summary` (`summ_id`, `user_id`, `work_title`, `profile_summary`, `exp_year`, `exp_month`, `current_salary`) VALUES
(1, 5, 'PHP Developer', 'I worked As a software Developer in Greenusys Technology', 2, 3, 6),
(2, 3, 'Node Developer', 'I workes as Node Developer in Microsoft', 4, 3, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency_`
--
ALTER TABLE `agency_`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `agency_wallet`
--
ALTER TABLE `agency_wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- Indexes for table `bookmarked_job`
--
ALTER TABLE `bookmarked_job`
  ADD PRIMARY KEY (`bk_mk_id`);

--
-- Indexes for table `company_`
--
ALTER TABLE `company_`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_msg`
--
ALTER TABLE `company_msg`
  ADD PRIMARY KEY (`c_msg_id`);

--
-- Indexes for table `currency_type`
--
ALTER TABLE `currency_type`
  ADD PRIMARY KEY (`curr_id`);

--
-- Indexes for table `jobs_added`
--
ALTER TABLE `jobs_added`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`job_application_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `max_salary`
--
ALTER TABLE `max_salary`
  ADD PRIMARY KEY (`max_sal_id`);

--
-- Indexes for table `min_salary`
--
ALTER TABLE `min_salary`
  ADD PRIMARY KEY (`min_sal_id`);

--
-- Indexes for table `plan_type`
--
ALTER TABLE `plan_type`
  ADD PRIMARY KEY (`c_type_id`);

--
-- Indexes for table `resume_upload`
--
ALTER TABLE `resume_upload`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `scheduled_interiew`
--
ALTER TABLE `scheduled_interiew`
  ADD PRIMARY KEY (`sche_id`);

--
-- Indexes for table `skills_`
--
ALTER TABLE `skills_`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `success_story`
--
ALTER TABLE `success_story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_employment`
--
ALTER TABLE `user_employment`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `user_msg`
--
ALTER TABLE `user_msg`
  ADD PRIMARY KEY (`u_msg_id`);

--
-- Indexes for table `user_work_summary`
--
ALTER TABLE `user_work_summary`
  ADD PRIMARY KEY (`summ_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agency_`
--
ALTER TABLE `agency_`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agency_wallet`
--
ALTER TABLE `agency_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookmarked_job`
--
ALTER TABLE `bookmarked_job`
  MODIFY `bk_mk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_`
--
ALTER TABLE `company_`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_msg`
--
ALTER TABLE `company_msg`
  MODIFY `c_msg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `currency_type`
--
ALTER TABLE `currency_type`
  MODIFY `curr_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs_added`
--
ALTER TABLE `jobs_added`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `job_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `max_salary`
--
ALTER TABLE `max_salary`
  MODIFY `max_sal_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `min_salary`
--
ALTER TABLE `min_salary`
  MODIFY `min_sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plan_type`
--
ALTER TABLE `plan_type`
  MODIFY `c_type_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resume_upload`
--
ALTER TABLE `resume_upload`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scheduled_interiew`
--
ALTER TABLE `scheduled_interiew`
  MODIFY `sche_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills_`
--
ALTER TABLE `skills_`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `story_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_msg`
--
ALTER TABLE `user_msg`
  MODIFY `u_msg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_work_summary`
--
ALTER TABLE `user_work_summary`
  MODIFY `summ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
