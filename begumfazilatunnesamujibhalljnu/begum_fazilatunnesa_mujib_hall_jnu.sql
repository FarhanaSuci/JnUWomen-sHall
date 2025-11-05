-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `begum_fazilatunnesa_mujib_hall_jnu`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivments`
--

CREATE TABLE `achivments` (
  `serial` int(11) NOT NULL,
  `achivment_name` varchar(500) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `link_read_more` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achivments`
--

INSERT INTO `achivments` (`serial`, `achivment_name`, `image`, `date`, `link_read_more`) VALUES
(1, 'Students were 1st runners up at national Coding Contest', 'activity2.jpg', '2023-06-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `phnNo` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tenure_from` date DEFAULT NULL,
  `tenure_to` date DEFAULT NULL,
  `designation` varchar(70) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `phnNo`, `email`, `tenure_from`, `tenure_to`, `designation`, `image`, `gender`, `password`, `id`, `serial`) VALUES
('David', '019....00', 'david1@gmail.com', '2021-06-01', '2023-09-30', NULL, 'rahim.png', 'Male', '000', 'david1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_app_vacation`
--

CREATE TABLE `admin_app_vacation` (
  `serial` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `id` varchar(300) NOT NULL,
  `reason` text NOT NULL,
  `file` varchar(300) DEFAULT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `approval_status` varchar(200) DEFAULT 'Pending',
  `reply_seen_status` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_app_vacation`
--

INSERT INTO `admin_app_vacation` (`serial`, `name`, `id`, `reason`, `file`, `startTime`, `endTime`, `applied_at`, `seen_status`, `approval_status`, `reply_seen_status`) VALUES
(1, 'David', 'david1', 'Grandfather died. Need to go village.', '', '2023-07-15 12:00:00', '2023-07-17 00:00:00', '2023-06-28 16:39:51', 1, 'Pending', '0');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `serial` int(11) NOT NULL,
  `written_by` varchar(100) NOT NULL,
  `writer_department` varchar(100) NOT NULL,
  `writer_session` varchar(10) NOT NULL,
  `writer_id` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `blog` varchar(10000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`serial`, `written_by`, `writer_department`, `writer_session`, `writer_id`, `image`, `headline`, `blog`, `date`) VALUES
(2, 'Rifah', 'Computer Science and Engineering', '2019-2020', 'B190305004', 'canteen-4.jpg', 'গুপ্তচরবৃত্তি থেকে বাঁচতে নিরাপদ প্রযুক্তি উদ্ভাবনের প্রয়োজনীয়তা', 'প্রযুক্তি, আবিষ্কার, উদ্ভাবনী এই শব্দগুলোর সাথে আমরা সবাই পরিচিত। আমাদের দৈনন্দিন জীবনে এগুলো ছাড়া যেকোনো কাজ করা খুব কঠিন। প্রযুক্তির উপর আমরা পুরোপুরি নির্ভর হয়ে পরেছি। তবে, প্রযুক্তি আমাদের জীবনকে যেমন সহজ ও আনন্দদায়ক করে তুলেছে তেমনি, আমাদের নিরাপত্তাকেও ঝুঁকির মুখে ফেলেছে। আমাদের তথ্য খুব সহজেই অন্য কেউ পেয়ে যেতে পারেন, তার পেছনেও প্রযুক্তির অবদান রয়েছে। আজকে আমরা প্রযুক্তির অন্য একটি দিক নিয়ে আলোচনা করতে যাচ্ছি। প্রযুক্তির কারণে আমাদের এই তথ্য ঝুঁকি থেকে বাঁচতে নতুন নিরাপদ প্রযুক্তি উদ্ভাবনের প্রয়োজনীয়তা সম্পর্কে জানতে পড়ে ফেলুন ব্লগটি। \r\nগুপ্তচরবৃত্তি কি? \r\nঅন্যের অনুমতি ছাড়া তার সম্পর্কে কোনোকিছু জানার চেষ্টা করা এবং জানার জন্য তাকে দৃষ্টিগোচরে রাখা, তার ব্যবহার্য জিনিসপত্র ঘাটাই হল গুপ্তচরবৃত্তি। অর্থাৎ, কারোর অনুমতি না নিয়ে তার সম্পর্কে গোপন কোনো তথ্য জানার চেষ্টা করাই হল গুপ্তচরবৃত্তি।\r\nপ্রযুক্তি ও গুপ্তচরবৃত্তি \r\nমোবাইল, কম্পিউটার, ট্যাব ইত্যাদিসহ বিভিন্ন ইলেক্ট্রনিক ডিভাইস আমাদের প্রাত্যহিক জীবনের সঙ্গী। কখনো ছবি, কখনোবা ফাইল আকারে আমরা আমাদের তথ্যগুলো সংরক্ষণ করি এসব ডিভাইসে। বিভিন্ন পাসওয়ার্ডও সংরক্ষণ করা থাকে এই ডিভাইসগুলতে। এসব তথ্য খুব সহজেই হ্যাক করে অন্য কেউ জেনে নিতে পারে। এমনকি আমাদের মোবাইল ফোনের যে ক্যামেরাটি আছে সেটি ব্যবহার করেও আমাদের কাজকর্ম অবজার্ভ করা হয়।\r\nগুপ্তচরবৃত্তি করে তথ্য হাতিয়ে নেওয়া এখন খুব কঠিন কিছু না। খেয়াল করলে দেখবেন, ইউটিউব বা ফেসবুকে আপনি সেসব অ্যাডগুলোই দেখতে পাবেন যেগুলো নিয়ে আপনি সার্চ করেন বা যেসব কন্টেন্ট আপনি ফলো করে থাকেন। আপনার প্রতিনিয়ত করা কাজগুলো মনিটরিং করা হয়। বিভিন্ন সামাজিক যোগাযোগ মাধ্যমের সার্ভারে আপনার এসব তথ্যগুলো জমা রাখা হয়।\r\nএসব বিষয়ে সাধারণ মানুষ কম জানলেও যারা প্রযুক্তি নিয়ে কাজ করেন তারা খুব ভালভাবেই এসব জানেন। তাই বিশেষজ্ঞরা সাধারণ মানুষের নিরাপত্তা নিয়ে চিন্তিত।\r\nকিছু বিশেষজ্ঞের কথা জেনে নেয়া যাক-\r\nমি. ডনকার্স, সুইজারল্যান্ডের এআরএমএ ইন্সট্রুমেন্টস-এর একজন সহ-প্রতিষ্ঠাতা এবং প্রধান নির্বাহী। এআরএমএ ইন্সট্রুমেন্টস একটি প্রযুক্তি কোম্পানি যা অতি-সুরক্ষিত যোগাযোগ ডিভাইস তৈরি করে থাকে। তাই, অধিকাংশের চেয়ে বেশি, তিনি তাদের স্মার্টফোনের সম্ভাব্য নিরাপত্তাজনিত দুর্বলতা সম্পর্কে মানুষকে সতর্ক করতে আগ্রহী।তিনি একটি স্মার্টফোনের সাথে একটি মৌমাছির তুলনা করেন এবং বলেন,\r\n                                                                                                         \"তৃতীয় পক্ষগুলি বাইরে থেকে খুব সহজেই আপনার সমস্ত  ডেটা সেন্সরের মাধ্যমে সংগ্রহ করে এবং এভাবেই তারা তথ্যের অপব্যবহার করে ব্যবসা করে থাকে\"।\r\n\r\nস্মার্টফোনের গোপনীয়তার ত্রুটিগুলি সম্পর্কে তার গভীর উদ্বেগ সাম্প্রতিক খবরের একটি সিরিজ দ্বারা সমর্থিত হয়েছে, বিশেষত ইসরায়েলের এনএসও গ্রুপের একটি পণ্য পেগাসাস নামে পরিচিত গুপ্তচর সফটওয়্যার প্রকাশ সম্পর্কে।\r\n\r\nজুলাই মাসে, এটি জানা যায় যে পেগাসাস আইফোন এবং অ্যান্ড্রয়েড ডিভাইসে ইনস্টল করা যেতে পারে, যার ফলে অপারেটররা বার্তা, ফটো এবং ইমেল, রেকর্ড এবং এমনকি গোপনে মাইক্রোফোন এবং ক্যামেরা সক্রিয় করতে পারে।\r\n\r\nপিউ রিসার্চ সেন্টারের একটি জরিপে দেখা গেছে যে ৭২% আমেরিকান মনে করেন যে তারা তাদের ফোন ব্যবহার করার সময় যা করেন তা বিজ্ঞাপনদাতারা, প্রযুক্তি সংস্থা বা অন্যান্য কোম্পানি ট্র্যাক করছে।\r\n\r\nফিনল্যান্ডের বিটিয়াম  কোম্পানি একটি ফোন বিক্রি করে যার মধ্যে একটি গোপনীয়তা মোড রয়েছে যা ডিভাইসের মাইক্রোফোন, ক্যামেরা এবং ব্লুটুথ ডিজএবল করে রাখে। বিটিয়ামের ভাইস প্রেসিডেন্ট টেরো সাভোলাইনেন হুঁশিয়ারি দিয়েছেন যে, মোবাইল ডিভাইসটি ঠিক ততটুকুই নিরাপদ যতজন একে ব্যবহার করেন। তিনি বলেন, \r\n\r\n\"আপনার কাছে একটি নিরাপদ ফোন থাকলেও, এর অর্থ এই নয় যে নিরাপদে ডিভাইসটি কীভাবে ব্যবহার করতে হয় সেটি আপনি ব্যবহারকারীকে না জানালে আপনি নিরাপদ।\"\r\n\r\nনিরাপদ প্রযুক্তি \r\n\r\nপ্রযুক্তি আমাদের জীবনের সাথে ওতপ্রোতভাবে জড়িয়ে গেছে। তাই, একে বাদ দিয়ে চলা এখন অসম্ভব।\r\nতাই তথ্য সুরক্ষা করার জন্য আমাদের নতুন প্রযুক্তি ব্যবহার করতে হবে। আমাদের মোবাইল, কম্পিউটার, ট্যাব এসব ইলেক্ট্রনিক ডিভাইসে বিভিন্ন ফিচার যোগ করতে হবে যাতে আমাদের ক্যামেরা, মাইক্রোফোন, স্টোরেজ এসব যন্ত্রে অন্য কারোর ট্র্যাক করার সুযোগই না থাকে। উন্নততর ও উদ্ভাবনীমূলক প্রযুক্তি তৈরি করার পাশাপাশি নিরাপদ প্রযুক্তি তৈরি করার প্রতি গুরুত্ব আরোপ করতে হবে এবং পুরনো প্রযুক্তি, ইলেক্ট্রনিক ডিভাইসগুলোতেও নিরাপত্তা জোরদার করতে হবে।\r\n\r\nতথ্য চুরি করা বা গুপ্তচরবৃত্তি একটি দণ্ডনীয় অপরাধ। যারা এই কজাগুলো করে তাদের শাস্তি নিশ্চিত করতে হবে।\r\nসর্বোপরি, একুশ শতকের সবচেয়ে মূল্যবান সম্পদ হচ্ছে ‘তথ্য’। সবার আগে আমাদের তথ্যের নিরাপত্তা নিশ্চিত করতে হবে। নয়তো, দেশ ও জাতিসহ কোনকিছুর ভারসাম্য বজায় রাখা সম্ভব হবে না। আর তাই, প্রযুক্তিকে উন্নত করার পাশাপাশি সমান ও অধিক গুরুত্ব সহকারে নিরাপদ করার লক্ষ্য নিয়ে কাজ করতে হবে। আসলে, উন্নয়নের তুলনায় প্রযুক্তিকে নিরাপদ করাটা তুলনামূলক কঠিন কাজ। এটিই এখন আমাদের সবচেয়ে বড় চ্যালেঞ্জ। তবে ভবিষ্যৎ রক্ষা করতে হলে এই চ্যালেঞ্জটির মোকাবেলা করতে হবে। প্রযুক্তি ব্যবহারে তথ্যের নিরাপত্তা নিশ্চিত করতে হবে।\r\n', '2023-06-10'),
(3, 'Rifah', 'Computer Science and Engineering', '2019-2020', 'B190305004', 'blogbg.jpeg', 'Head turning colors for creatives', 'The contrast of neon blue and primary yellow feels extreme: it goes beyond demanding to be noticed, it makes my eyes physically water. Yet, somehow I’m not opposed to it. This courageous color scheme captures the forced charisma of a creative agency: it’s bold, exciting and I’m thoroughly enjoying engaging with it.', '2023-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `serial` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `link_read_more` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`serial`, `club_name`, `image`, `about`, `link_read_more`) VALUES
(1, 'ডিবেটিং ক্লাব', 'activity2.jpg', '...', ''),
(2, 'ল্যাঙ্গুয়েজ ক্লাব', 'activity1.jpg', '...', '');

-- --------------------------------------------------------

--
-- Table structure for table `complains_from_housetutors`
--

CREATE TABLE `complains_from_housetutors` (
  `serial` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `assigned_floor_no` varchar(100) NOT NULL,
  `complain` text NOT NULL,
  `detail` text DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `complained_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `response_status` text DEFAULT 'Pending',
  `result` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains_from_housetutors`
--

INSERT INTO `complains_from_housetutors` (`serial`, `name`, `id`, `assigned_floor_no`, `complain`, `detail`, `file`, `complained_at`, `seen_status`, `response_status`, `result`) VALUES
(1, 'Dr. Neegar Sultana', 'nsapoly@gmail.com', '3', 'sad lipe', '', '', '2023-06-25 16:08:30', 1, 'Pending', NULL),
(2, 'Dr. Anowara Akter', 'anowarasumi@gmail.com', '5', 'Electricity problem', '', '', '2023-06-29 07:38:41', 0, 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains_from_staff`
--

CREATE TABLE `complains_from_staff` (
  `serial` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `staffType` varchar(100) NOT NULL,
  `complain` text NOT NULL,
  `detail` text DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `complained_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `response_status` text DEFAULT 'Pending',
  `result` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains_from_staff`
--

INSERT INTO `complains_from_staff` (`serial`, `name`, `id`, `staffType`, `complain`, `detail`, `file`, `complained_at`, `seen_status`, `response_status`, `result`) VALUES
(1, 'Rajib Hossain', 'rajib', 'Canteen Manager', 'Vallagtase na', 'osojjjo', 'blackWoodbg.jpg', '2023-06-25 15:11:23', 1, 'Pending', NULL),
(2, 'Rajib Hossain', 'rajib', 'Canteen Manager', 'Electricity problem', '', '', '2023-06-29 07:23:56', 0, 'Pending', NULL),
(3, 'Shihab Uddin', 'A1203004', 'Canteen Accountant', 'Need more stove in kitchen.', '', 'canteeen.jpg', '2023-06-29 09:01:53', 0, 'Canceled', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains_from_students_to_housetutor`
--

CREATE TABLE `complains_from_students_to_housetutor` (
  `serial` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `roomNo` varchar(200) NOT NULL,
  `seatNo` varchar(200) NOT NULL,
  `complain` text NOT NULL,
  `detail` text DEFAULT NULL,
  `file` varchar(300) DEFAULT NULL,
  `complained_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `response_status` text DEFAULT 'Pending',
  `floorNo` varchar(100) DEFAULT NULL,
  `result` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains_from_students_to_housetutor`
--

INSERT INTO `complains_from_students_to_housetutor` (`serial`, `name`, `id`, `roomNo`, `seatNo`, `complain`, `detail`, `file`, `complained_at`, `seen_status`, `response_status`, `floorNo`, `result`) VALUES
(1, 'Rifah', 'B190305004', '301', 'A-1', 'sad lipe', '', '', '2023-06-25 15:55:04', 1, 'Pending', '3', NULL),
(3, 'Fima', 'B190305005', '502', 'B-2', 'Filter is not working in our floor', '', '', '2023-06-28 18:54:35', 1, 'Pending', '5', NULL),
(4, 'Rifah', 'B190305004', '301', 'A-1', 'Fan is not working in my room', '', '', '2023-06-29 05:51:03', 0, 'Pending', '3', NULL),
(5, 'Rifah', 'B190305004', '302', 'A-1', 'Fan is not working in my seat', 'exhaustedexhaustedexhaustedvexhaustedexhaustedexhaustedvexhausted', 'ha2.webp', '2023-06-30 16:01:48', 0, 'Pending', '3', 'I want my fan to be repaired as soon as possible.'),
(6, 'Margan Tara', 'C190304005', '801', 'A-1', 'Light is not working in my room', 'Yesterday, at night the light in my room got fused.', 'lecture10- 2023.ppt', '2023-07-01 01:44:31', 0, 'Pending', '8', 'Please get a new light in our room immediately.'),
(7, 'Tamanna Zaman', 'C20405023', '705', 'B-1', 'Washroom light got fused', '', 'activity1.jpg', '2023-07-01 02:03:29', 0, 'Pending', '7', 'Get a new light in washroom immediately.'),
(8, 'Sabikun-nahar Shima', 'A190405001', '705', 'A-2', 'Electricity problem', '', '', '2023-07-01 02:10:43', 0, 'Pending', '7', 'Proper supply of electricity all time.');

-- --------------------------------------------------------

--
-- Table structure for table `complains_from_students_to_provosts`
--

CREATE TABLE `complains_from_students_to_provosts` (
  `serial` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `floorNo` varchar(200) NOT NULL,
  `roomNo` varchar(200) NOT NULL,
  `seatNo` varchar(200) NOT NULL,
  `complain` text NOT NULL,
  `detail` text DEFAULT NULL,
  `file` varchar(300) DEFAULT NULL,
  `complained_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `response_status` text DEFAULT 'Pending',
  `result` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains_from_students_to_provosts`
--

INSERT INTO `complains_from_students_to_provosts` (`serial`, `name`, `id`, `floorNo`, `roomNo`, `seatNo`, `complain`, `detail`, `file`, `complained_at`, `seen_status`, `response_status`, `result`) VALUES
(1, 'Rifah', 'B190305004', '3', '301', 'A-1', 'sad lipe', '', '', '2023-06-25 15:36:48', 1, 'Pending', NULL),
(2, 'Rifah', 'B190305004', '3', '301', 'A-1', 'sad lipe', '', '', '2023-06-25 15:37:40', 1, 'Canceled', NULL),
(3, 'Rifah', 'B190305004', '3', '301', 'A-1', 'Vallagtase na', '', '', '2023-06-25 15:51:06', 1, 'Approved', NULL),
(4, 'Rifah', 'B190305004', '3', '301', 'A-1', 'Electricity problem', '', '', '2023-06-29 05:52:00', 0, 'Canceled', NULL),
(5, 'Tamanna Zaman', 'C20405023', '7', '705', 'B-1', 'House tutor is not responding in our complain.', 'Our house-tutor is not active.', 'activity1.jpg', '2023-07-01 02:07:55', 0, 'Pending', 'We want our house-tutor to be active.');

-- --------------------------------------------------------

--
-- Table structure for table `current_house_tutors`
--

CREATE TABLE `current_house_tutors` (
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `roomNo` varchar(20) NOT NULL,
  `seatNo` varchar(20) NOT NULL,
  `assigned_floor_no` varchar(100) NOT NULL,
  `tenure_from` date NOT NULL,
  `tenure_to` date NOT NULL,
  `phnNo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id` varchar(30) NOT NULL,
  `serial` int(11) NOT NULL,
  `house_tutor_designation` varchar(100) NOT NULL,
  `fblink` varchar(200) DEFAULT NULL,
  `instalink` varchar(200) DEFAULT NULL,
  `linkdnlink` varchar(200) DEFAULT NULL,
  `twitterlink` varchar(200) DEFAULT NULL,
  `googleScholarlink` varchar(200) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_house_tutors`
--

INSERT INTO `current_house_tutors` (`name`, `department`, `designation`, `password`, `roomNo`, `seatNo`, `assigned_floor_no`, `tenure_from`, `tenure_to`, `phnNo`, `email`, `image`, `id`, `serial`, `house_tutor_designation`, `fblink`, `instalink`, `linkdnlink`, `twitterlink`, `googleScholarlink`, `date_of_birth`) VALUES
('Dr. Neegar Sultana', 'Unknown', 'Unknown', 'nsapoly@gmail.com', 'Unknown', 'Unknown', '3', '2022-03-02', '2024-01-07', '01619062009', 'nsapoly@gmail.com', 'rahima.png', 'nsapoly@gmail.com', 2, 'House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('MS. Mansura Begum', 'Unknown', 'Unknown', 'mansura.ziz@gmail.com', 'Unknown', 'Unknown', '4', '2021-01-08', '2025-06-10', '01915614903', 'mansura.ziz@gmail.com', 'rahima.png', 'mansura.ziz@gmail.com', 3, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Dr. Anowara Akter', 'Unknown', 'Unknown', '1111', 'Unknown', 'Unknown', '5', '2022-07-07', '2024-09-22', '0167267800', 'anowarasumi@gmail.com', 'rahima.png', 'anowarasumi@gmail.com', 4, 'House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Dr. Sharaban Thohura', 'Unknown', 'Unknown', 'sthohura@gmail.com', 'Unknown', 'Unknown', '6', '2022-03-25', '2024-06-13', '01712623332', 'sthohura@gmail.com', 'rahima.png', 'sthohura@gmail.com', 5, 'House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Dr. Sabina Yeasmin', 'Unknown', 'Unknown', 'sabinayeasmin450@gmail.com', 'Unknown', 'Unknown', '7', '2022-03-24', '2024-04-29', '01717424637', 'sabinayeasmin450@gmail.com', 'rahima.png', 'sabinayeasmin450@gmail.com', 6, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('MS. Sameena Begum', 'Unknown', 'Unknown', 'sameena.9515@gmail.com', 'Unknown', 'Unknown', '8', '2022-03-24', '2024-02-29', '01918533766', 'sameena.9515@gmail.com', 'rahima.png', 'sameena.9515@gmail.com', 7, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Professor Dr. Protiva Rani Karmakar', 'Unknown', 'Unknown', 'protiva.karmakar@gmail.com', 'Unknown', 'Unknown', '9', '2022-02-24', '2024-02-29', '01726024685', 'protiva.karmakar@gmail.com', 'rahima.png', 'protiva.karmakar@gmail.com', 8, 'House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Dr. Nipa Debnath', 'Unknown', 'Unknown', 'nipadebnath.ju32@gmail.com', 'Unknown', 'Unknown', '10', '2021-09-25', '2023-09-24', '01783913779', 'nipadebnath.ju32@gmail.com', 'rahima.png', 'nipadebnath.ju32@gmail.com', 9, 'House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('MS. Bushra Zaman', 'Unknown', 'Unknown', 'bushrazaman864@gmail.com', 'Unknown', 'Unknown', '11', '2022-07-01', '2024-07-01', '01717470910', 'bushrazaman864@gmail.com', 'rahima.png', 'bushrazaman864@gmail.com', 10, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('MS. Dipika Majumdar', 'Unknown', 'Unknown', 'dipikamajumdersupti@gmail.com', 'Unknown', 'Unknown', '12', '2022-03-24', '2024-03-25', '01710468035', 'dipikamajumdersupti@gmail.com', 'rahima.png', 'dipikamajumdersupti@gmail.com', 11, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('MS. Shamima Akter', 'Unknown', 'Unknown', 'shamimaakter09@gmail.com', 'Unknown', 'Unknown', '13', '2022-03-31', '2024-03-31', '01676322906', 'shamimaakter09@gmail.com', 'rahima.png', 'shamimaakter09@gmail.com', 12, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Dr. Nusrat Jahan Panna', 'Unknown', 'Unknown', 'npanna6@gmail.com', 'Unknown', 'Unknown', '14', '2022-03-31', '2024-03-31', '01726050290', 'npanna6@gmail.com', 'rahima.png', 'npanna6@gmail.com', 13, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00'),
('Dr. Taslima Islam', 'Unknown', 'Unknown', 'taslimaimi@gmail.com', 'Unknown', 'Unknown', '15', '2022-03-31', '2024-03-31', '01764059069', 'taslimaimi@gmail.com', 'rahima.png', 'taslimaimi@gmail.com', 14, 'Assistant House Tutor', '', '', '', '\r\n         ', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `current_provost`
--

CREATE TABLE `current_provost` (
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `tenure_from` date NOT NULL,
  `tenure_to` date NOT NULL,
  `phnNo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `biography` varchar(3000) NOT NULL,
  `linkdnlink` varchar(200) DEFAULT NULL,
  `googleScholarlink` varchar(200) DEFAULT NULL,
  `fblink` varchar(200) DEFAULT NULL,
  `instalink` varchar(200) DEFAULT NULL,
  `twitterlink` varchar(200) DEFAULT NULL,
  `password` varchar(300) NOT NULL,
  `message_from_provost` varchar(3000) DEFAULT NULL,
  `id` varchar(100) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_provost`
--

INSERT INTO `current_provost` (`name`, `department`, `designation`, `date_of_birth`, `tenure_from`, `tenure_to`, `phnNo`, `email`, `image`, `biography`, `linkdnlink`, `googleScholarlink`, `fblink`, `instalink`, `twitterlink`, `password`, `message_from_provost`, `id`, `serial`) VALUES
('Professor Dr. Deepika Rani Sarkar', 'Department of Physics', 'Professor', '1981-03-04', '2023-03-04', '2025-02-03', '018......24', 'drs123@gmail.com', 'current_provost_image.jpg', '১৭ মার্চ ২০২২-এ বঙ্গবন্ধু শেখ মুজিবুর রহমানের ১০২তম জন্মবার্ষিকীতে ছাত্রীদের হলে ওঠার মাধ্যমে অবসান হলো জবির অনাবাসিক বিশ্ববিদ্যালয়ের তকমা। ১৬ তলা বিশিষ্ট হলটির ১৫৬ টি কক্ষ রয়েছে। ‘বেগম ফজিলাতুন্নেসা মুজিব’ হল এমন এক আবাসস্থল যেখান থেকে শিক্ষার্থীরা জীবনের পরবর্তী ধাপগুলোর জন্য ধৈর্য্য, নেতৃত্ব, সহনশীলতা, সহযোগিতা ও ঐক্যবদ্ধতার মত দারুণ সব গুণাবলি অর্জনের সুযোগ পান। প্রিয় বিদ্যাপীঠ জগন্নাথ বিশ্ববিদ্যালয়ের প্রতিষ্ঠা ও পথচলা যেমন ঐতিহাসিক তেমনই এর হল গুলোর নেপথ্যেও রয়েছে দীর্ঘ ইতিহাস। অবিভক্ত ভারতবর্ষের সবচেয়ে বড় আবাসিক সুবিধাসংবলিত কলেজগুলোর অন্যতম একটি ছিল প্রিয় এ শিক্ষাঙ্গন। তৎকালে আবাসিক হল ছিল ১১ টি যেগুলো কাল পরিক্রমায় বেদখল হয়ে যায় আর অনাবাসিক তকমা জোটে বিশ্ববিদ্যালয়টির। তবে ইতিহাস থেকেই প্রাপ্ত অধিকার আদায়ে দীক্ষিত শিক্ষার্থীদের আন্দোলন-ত্যাগের মুখে ও প্রশাসনের সুদৃষ্টির কল্যাণে হারিয়ে যাওয়া হলগুলো পুনরোদ্ধার না হলেও সূচনা হয় নতুন এক পথচলার। বঙ্গমাতা শেখ ফজিলাতুন্নেছা মুজিব হল। প্রায় সাড়ে বারোশত ছাত্রীদের বৃহৎ পরিবার । সারাবেলা ছুটোছুটি-ক্লান্তির পর বিহঙ্গের স্বস্তির নীড়ের ন্যায় নিরাপদ ও প্রশান্তিময় এ নিবাস। ছাত্রীদের দায়িত্বশীলতা ও প্রশাসনের আন্তরিকতায় এই ধারাবাহিকতা অব্যাহত ।', NULL, NULL, NULL, NULL, NULL, '444', 'জগন্নাথ বিশ্ববিদ্যালয়ের প্রথম ও একমাত্র ছাত্রী হল, বেগম ফজিলাতুন্নেছা মুজিব হল বাংলাদেশের ইতিহাসের এক অনন্য নারীর নামে নামকরণ করা হয়েছে । এই হলের প্রভোস্ট হিসেবে দায়িত্ব পেয়ে আমি অত্যন্ত গর্বিত বোধ করছি। বঙ্গমাতা বেগম ফজিলাতুন্নেছা মুজিব (৮ আগস্ট ১৯৩০ - ১৫ আগস্ট ১৯৭৫) ছিলেন বাংলাদেশের প্রথম ফার্স্ট লেডি এবং প্রথম রাষ্ট্রপতি শেখ মুজিবুর রহমান এর সহধর্মিনী। তিনি ছিলেন বঙ্গবন্ধুর বন্ধু,পরামর্শক, সমর্থক এবং স্বপ্নজয়ের সারথী। বাংলাদেশের স্বাধীনতা সংগ্রামের ইতিহাসে সবচেয়ে প্রভাবশালী ও অনুপ্রেরণা দানকারী নারী । দেশের স্বার্থে বঙ্গবন্ধুকে অসংখ্যবার কারাবরণ করতে হয়েছে। তাঁর অবর্তমানে বঙ্গমাতা সেই কঠিন দিনগুলো দৃঢ়তার সঙ্গে মোকাবিলা করেছেন। আমাদের মুক্তিসংগ্রাম ও মুক্তিযুদ্ধের ইতিহাসে তার অবদান চিরস্মরণীয় হয়ে থাকবে। জীবনের শেষ মুহূর্ত পর্যন্ত তিনি বঙ্গবন্ধুর পাশে ছিলেন। ১৯৭৫ সালের ১৫ আগস্ট তাকে তার স্বামী, তিন পুত্র এবং দুই পুত্রবধূর সাথে হত্যা করা হয়। ছাত্রী হলের প্রতিটি মেয়ে যেন ইতিহাসের এই অনন্য নারীর জীবন থেকে দীক্ষা লাভ করে। ছাত্রী হলে ২০২২ সালের ৮ আগস্ট বঙ্গমাতার জন্মদিন পালন করা হয় এবং বঙ্গমাতা কর্নারের শুভ উদ্বোধন করা হয়। হলে জাতীয় দিবসগুলো (একুশে ফেব্রুয়ারি, ১৭ মার্চ, ২৬ মার্চ, ১৫ আগস্ট, ১৪ ডিসেম্বর, ১৬ ডিসেম্বর) যথাযোগ্য মর্যাদার সাথে উদযাপন করা হয়। এ ছাড়াও বিশ্ববিদ্যালয় দিবস, বিশ্ব নারী দিবস, পহেলা বৈশাখ পালন এবং শোভাযাত্রায় অংশগ্রহণ করা হয়। ধর্মীয় উৎসব যেমন ইফতার মাহফিল এবং সরস্বতী পুজা উদযাপন করা হয়। বঙ্গবন্ধুর স্বদেশ প্রত্যাবর্তন দিবসে ১০ জানুয়ারি জাতির পিতার প্রতিকৃতিতে পুস্পস্তবক অর্পণের মাধ্যমে শ্রদ্ধা জানানো হয়। হলের ছাত্রীরা বিশ্ববিদ্যালয়ের এবং জাতীয় পর্যায়ের বিভিন্ন প্রতিযোগিতায় (ক্রীড়া, ডিবেট, আবৃত্তি, সঙ্গীত, ফিল্ম) অংশগ্রহন করে। হলের ছাত্রীরা তাদের নিজস্ব উদ্যোগে ফ্লোরে ফ্লোরে সরৎ ও বসন্ত উৎসব করে থাকে। আমি জগন্নাথ বিশ্ববিদ্যালয় এবং বেগম ফজিলাতুন্নেছা মুজিব হলের সর্বাঙ্গীন মঙ্গল কামনা করি।', 'provost2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `serial` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `link_read_more` varchar(600) DEFAULT NULL,
  `event_name` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`serial`, `image`, `link_read_more`, `event_name`, `date`, `about`) VALUES
(1, 'activity2.jpg', '', 'A Speech on Bangabandhu and his Philosophy', '2023-06-12', '................................');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `serial` int(11) NOT NULL,
  `facility_name` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `link_read_more` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`serial`, `facility_name`, `image`, `about`, `link_read_more`) VALUES
(1, 'ডাইনিং সিস্টেম', 'breakfast.png', '..................', ''),
(2, 'হল লাইব্রেরী', 'activity1.jpg', '.............', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `serial` int(11) NOT NULL,
  `history` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`serial`, `history`) VALUES
(1, 'জগন্নাথ বিশ্ববিদ্যালয় প্রতিষ্ঠিত হওয়ার পর শিক্ষার্থীদের কোন আবাসিক হল ছিল না। জগন্নাথ বিশ্ববিদ্যালয় এর শিক্ষার্থীদের কয়েক দফা প্রবল আন্দোলনের মুখে তৎকালীন উপাচার্য অধ্যাপক ড. মীজানুর রহমান শিক্ষার্থীদের আবাসিক হল করে দেবার প্রতিশ্রুতি দেন। সেই প্রক্ষিতে ২০১৩ সালের ডিসেম্বর মাসে বাংলাদেশ গণপ্রজাতন্ত্রী সরকারের মাননীয় শিক্ষামন্ত্রী জনাব নুরুল ইসলাম নাহিদ, এম. পি. বুড়িগঙ্গা নদীর অতি নিকটে জগন্নাথ বিশ্ববিদ্যালয় এর প্রথম ছাত্রী হল বেগম ফজিলাতুন্নেছা মুজিব হলের ভিত্তি প্রস্তর স্থাপন করেন। ২০১৪ সালের ২০ অক্টোবর ৯ম বিশ্ববিদ্যালয় দিবসে ছাত্রী হলের নির্মান কাজের শুভ সূচনা করেন বাংলাদেশ বিশ্ববিদ্যালয় গ্রান্ডস কমিশনের চেয়ারম্যান (প্রতিমন্ত্রী) অধ্যাপক ড. এ. কে. আজাদ চৌধুরী। দীর্ঘ পথ পরিক্রমায় ১৬ তলা বিল্ডিং টি আলোর মুখ দেখেতে পায় ২০২০ সালে। ২০ অক্টোবর ২০২০ মঙ্গলবার সকাল নয় ঘটিকায় বহুল প্রতিক্ষিত ছাত্রী হল বেগম ফজিলাতুন্নেছা মুজিব হলের শুভ উদ্বোধন করেন জগন্নাথ বিশ্ববিদ্যালয় এর তৎকালীন উপাচার্য অধ্যাপক ড. মীজানুর রহমান। এ সময়ে উপস্থিত ছিলেন বিশ্ববিদ্যালয়ের ট্রেজারার অধ্যাপক ড. কামাল উদ্দিন আহমদ, বিভিন্ন অনুষদের ডিনবৃন্দ, বিভাগীয় চেয়ারম্যানবৃন্দ, ইনস্টিটিউটের পরিচালকবৃন্দ, এবং বেগম ফজিলাতুন্নেছা হলের প্রথম প্রভোস্ট অধ্যাপক ড. এস. এম. আনোয়ারা বেগম, রেজিস্ট্রার, বিভিন্ন দপ্তরের পরিচালকবৃন্দ, শিক্ষক, শিক্ষার্থী, কর্মকর্তা, কর্মচারী প্রমূখ। ২০২০ সালে বিশ্বব্যাপী করোনা অতিমারীর কারণে হলের পরবর্তী কার্যাবলী বিঘ্নিত হয়। যার ফলে হলে ছাত্রীদের উঠানো সম্ভব হয় নি। ২০২১ সালে প্রভোস্ট অধ্যাপক ড. এস. এম. আনোয়ারা বেগম এর দায়িত্বকালীন মেয়াদ (০১/০১/২০১৯-০৩/০৩/২০২১) উত্তীর্ণ হবার পর ৪ মার্চ ২০২১ সালে অনুজীব বিজ্ঞান বিভাগের অধ্যাপক ড. শামীমা বেগম, পরবর্তী দুবছরের জন্য হল প্রভোস্ট হিসেবে দায়িত্বপ্রাপ্ত হন। একই দিনে হলের একমাত্র আবাসিক শিক্ষক হিসেবে অধ্যাপক ড. প্রতীভা রানী কর্মকার পরবর্তী দুবছরের জন্য দায়িত্বপ্রাপ্ত হন। অধ্যাপক ড. শামীমা বেগম এর সময়কালে প্রথম এক বছর হল গুছানোর কাজে ব্যয় হয়। শিক্ষা অধিদপ্তর থেকে হল বুঝে নেয়া থেকে শুরু করে হলের নীতিমালা তৈরি করা, ক্যান্টিন ক্যাটারার নিয়োগ দেয়া ছাড়াও লিফট, পানির পাম্প, জেনারেটর বুঝে নেয়া ইত্যাদি। বেগম ফজিলাতুন্নেছা মুজিব হল সম্পুর্ন বসবাসের উপযোগী হবার পর ১ অক্টোবর ২০২১ সালে হলে আবাসিক ছাত্রী হওয়ার জন্য অন লাইনে আবেদন এর শভ উদ্বোধন করেন বিশ্ববিদ্যালয়ের উপাচার্য (রুটিন দায়িত্বপ্রাপ্ত) ও ট্রেজারার অধ্যাপক ড. কামাল উদ্দিন আহমদ। এসময়ে উপস্থিত ছিলেন হলের প্রভোস্ট অধ্যাপক ড. শামীমা বেগম, রেজিস্ট্রার প্রকৌশলী মোঃ অহিদিজ্জামান, আই সি টি সেল এর পরিচালক অধ্যাপক ড. উজ্জ্বল কুমার আচার্য্য । প্রায় ২৮০০ ছাত্রীর আবেদনের পর হলে মোট ১২৬৮ জন ছাত্রী আবাসন পায়। ২০২২ সালের ১৩ ফেব্রুয়ারি হলে নতুন ১৪ জন আবাসিক শিক্ষক দায়িত্বপ্রাপ্ত হন। ১৬ মার্চ ২০২২ সালে দ্বারোদঘাটন অনুষ্ঠানের মাধ্যমে হলের দ্বার উন্মোচনের শুভ সূচনা হয়। অনুষ্ঠানের প্রধান অতিথী হিসেবে ভার্চুয়ালি উপস্থিত ছিলেন বাংলাদেশ গণপ্রজাতন্ত্রী সরকারের মাননীয় শিক্ষামন্ত্রী ড. দীপু মনি, এম. পি. বিশেষ অতিথী হিসেবে উপস্থিত ছিলেন জগন্নাথ বিশ্ববিদ্যালয়ের মাননীয় উপাচার্য অধ্যাপক ড. মোঃ ইমদাদুল হক এবং বিশ্ববিদ্যালয়ের মাননীয় ট্রেজারার অধ্যাপক ড. কামাল উদ্দিন আহমদ, অনুষ্ঠানের সভাপতিত্ব করেন হলের প্রভোস্ট অধ্যাপক ড. শামীমা বেগম । শিক্ষক সমিতির সম্মানিত সভাপতি ও সাধারণ সম্পাদক, শিক্ষকবৃন্দ ও ছাত্রীবৃন্দ উপস্থিত ছিলেন। ১৭ মার্চ ২০২২ সালে হাজার বছরের শ্রেষ্ঠ বাঙ্গালী জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এর শুভ জন্মদিনে ছাত্রীরা হল আই ডি কার্ড দিয়ে ডিজিটাল এন্ট্রির মাধ্যমে হলে প্রবেশ শুরু করে। হলে ছাত্রীদের ১৫৭ টি কক্ষ, একটি ডাইনিং কক্ষ, একটি ক্যান্টিন কক্ষ, একটি লাইব্রেরী, একটি কমন রুম আছে।');

-- --------------------------------------------------------

--
-- Table structure for table `ht_app_vacation`
--

CREATE TABLE `ht_app_vacation` (
  `serial` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `id` varchar(300) NOT NULL,
  `assigned_floor_no` varchar(300) NOT NULL,
  `reason` text NOT NULL,
  `file` varchar(300) DEFAULT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `approval_status` varchar(200) DEFAULT 'Pending',
  `reply_seen_status` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ht_app_vacation`
--

INSERT INTO `ht_app_vacation` (`serial`, `name`, `id`, `assigned_floor_no`, `reason`, `file`, `startTime`, `endTime`, `applied_at`, `seen_status`, `approval_status`, `reply_seen_status`) VALUES
(2, 'Dr. Anowara Akter', 'anowarasumi@gmail.com', '5', 'Suddenly feeling ill.', '', '2023-07-13 13:30:00', '2023-07-14 14:30:00', '2023-06-28 16:49:06', 1, 'Approved', '0'),
(3, 'Dr. Sabina Yeasmin', 'sabinayeasmin450@gmail.com', '7', 'Going for a family trip.', '', '2023-07-11 13:00:00', '2023-07-18 00:00:00', '2023-06-28 16:50:47', 1, 'Canceled', '0');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `serial` int(11) NOT NULL,
  `intro` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`serial`, `intro`) VALUES
(1, 'জগন্নাথ বিশ্ববিদ্যালয় প্রতিষ্ঠিত হওয়ার পর শিক্ষার্থীদের কোন আবাসিক হল ছিল না। জগন্নাথ বিশ্ববিদ্যালয় এর শিক্ষার্থীদের কয়েক দফা প্রবল আন্দোলনের মুখে তৎকালীন উপাচার্য অধ্যাপক ড. মীজানুর রহমান শিক্ষার্থীদের আবাসিক হল করে দেবার প্রতিশ্রুতি দেন। সেই প্রক্ষিতে ২০১৩ সালের ডিসেম্বর মাসে বাংলাদেশ গণপ্রজাতন্ত্রী সরকারের মাননীয় শিক্ষামন্ত্রী জনাব নুরুল ইসলাম নাহিদ, এম. পি. বুড়িগঙ্গা নদীর অতি নিকটে জগন্নাথ বিশ্ববিদ্যালয় এর প্রথম ছাত্রী হল বেগম ফজিলাতুন্নেছা মুজিব হলের ভিত্তি প্রস্তর স্থাপন করেন। ২০১৪ সালের ২০ অক্টোবর ৯ম বিশ্ববিদ্যালয় দিবসে ছাত্রী হলের নির্মান কাজের শুভ সূচনা করেন বাংলাদেশ বিশ্ববিদ্যালয় গ্রান্ডস কমিশনের চেয়ারম্যান (প্রতিমন্ত্রী) অধ্যাপক ড. এ. কে. আজাদ চৌধুরী।\r\nদীর্ঘ পথ পরিক্রমায় ১৬ তলা বিল্ডিং টি আলোর মুখ দেখেতে পায় ২০২০ সালে। ২০ অক্টোবর ২০২০ মঙ্গলবার সকাল নয় ঘটিকায় বহুল প্রতিক্ষিত ছাত্রী হল বেগম ফজিলাতুন্নেছা মুজিব হলের শুভ উদ্বোধন করেন জগন্নাথ বিশ্ববিদ্যালয় এর তৎকালীন উপাচার্য অধ্যাপক ড. মীজানুর রহমান। এ সময়ে উপস্থিত ছিলেন বিশ্ববিদ্যালয়ের ট্রেজারার অধ্যাপক ড. কামাল উদ্দিন আহমদ, বিভিন্ন অনুষদের ডিনবৃন্দ, বিভাগীয় চেয়ারম্যানবৃন্দ, ইনস্টিটিউটের পরিচালকবৃন্দ, এবং বেগম ফজিলাতুন্নেছা হলের প্রথম প্রভোস্ট অধ্যাপক ড. এস. এম. আনোয়ারা বেগম, রেজিস্ট্রার, বিভিন্ন দপ্তরের পরিচালকবৃন্দ, শিক্ষক, শিক্ষার্থী, কর্মকর্তা, কর্মচারী প্রমূখ।\r\n২০২০ সালে বিশ্বব্যাপী করোনা অতিমারীর কারণে হলের পরবর্তী কার্যাবলী বিঘ্নিত হয়। যার ফলে হলে ছাত্রীদের উঠানো সম্ভব হয় নি। ২০২১ সালে প্রভোস্ট অধ্যাপক ড. এস. এম. আনোয়ারা বেগম এর দায়িত্বকালীন মেয়াদ (০১/০১/২০১৯-০৩/০৩/২০২১) উত্তীর্ণ হবার পর ৪ মার্চ ২০২১ সালে অনুজীব বিজ্ঞান বিভাগের অধ্যাপক ড. শামীমা বেগম, পরবর্তী দুবছরের জন্য হল প্রভোস্ট হিসেবে দায়িত্বপ্রাপ্ত হন। একই দিনে হলের একমাত্র আবাসিক শিক্ষক হিসেবে অধ্যাপক ড. প্রতীভা রানী কর্মকার পরবর্তী দুবছরের জন্য দায়িত্বপ্রাপ্ত হন। অধ্যাপক ড. শামীমা বেগম এর সময়কালে প্রথম এক বছর হল গুছানোর কাজে ব্যয় হয়। শিক্ষা অধিদপ্তর থেকে হল বুঝে নেয়া থেকে শুরু করে হলের নীতিমালা তৈরি করা, ক্যান্টিন ক্যাটারার নিয়োগ দেয়া ছাড়াও লিফট, পানির পাম্প, জেনারেটর বুঝে নেয়া ইত্যাদি। বেগম ফজিলাতুন্নেছা মুজিব হল সম্পুর্ন বসবাসের উপযোগী হবার পর ১ অক্টোবর ২০২১ সালে হলে আবাসিক ছাত্রী হওয়ার জন্য অন লাইনে আবেদন এর শভ উদ্বোধন করেন বিশ্ববিদ্যালয়ের উপাচার্য (রুটিন দায়িত্বপ্রাপ্ত) ও ট্রেজারার অধ্যাপক ড. কামাল উদ্দিন আহমদ। এসময়ে উপস্থিত ছিলেন হলের প্রভোস্ট অধ্যাপক ড. শামীমা বেগম, রেজিস্ট্রার প্রকৌশলী মোঃ অহিদিজ্জামান, আই সি টি সেল এর পরিচালক অধ্যাপক ড. উজ্জ্বল কুমার আচার্য্য । প্রায় ২৮০০ ছাত্রীর আবেদনের পর হলে মোট ১২৬৮ জন ছাত্রী আবাসন পায়। ২০২২ সালের ১৩ ফেব্রুয়ারি হলে নতুন ১৪ জন আবাসিক শিক্ষক দায়িত্বপ্রাপ্ত হন। ১৬ মার্চ ২০২২ সালে দ্বারোদঘাটন অনুষ্ঠানের মাধ্যমে হলের দ্বার উন্মোচনের শুভ সূচনা হয়। অনুষ্ঠানের প্রধান অতিথী হিসেবে ভার্চুয়ালি উপস্থিত ছিলেন বাংলাদেশ গণপ্রজাতন্ত্রী সরকারের মাননীয় শিক্ষামন্ত্রী ড. দীপু মনি, এম. পি. বিশেষ অতিথী হিসেবে উপস্থিত ছিলেন জগন্নাথ বিশ্ববিদ্যালয়ের মাননীয় উপাচার্য অধ্যাপক ড. মোঃ ইমদাদুল হক এবং বিশ্ববিদ্যালয়ের মাননীয় ট্রেজারার অধ্যাপক ড. কামাল উদ্দিন আহমদ, অনুষ্ঠানের সভাপতিত্ব করেন হলের প্রভোস্ট অধ্যাপক ড. শামীমা বেগম ।\r\nশিক্ষক সমিতির সম্মানিত সভাপতি ও সাধারণ সম্পাদক, শিক্ষকবৃন্দ ও ছাত্রীবৃন্দ উপস্থিত ছিলেন। ১৭ মার্চ ২০২২ সালে হাজার বছরের শ্রেষ্ঠ বাঙ্গালী জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান এর শুভ জন্মদিনে ছাত্রীরা হল আই ডি কার্ড দিয়ে ডিজিটাল এন্ট্রির মাধ্যমে হলে প্রবেশ শুরু করে। হলে ছাত্রীদের ১৫৭ টি কক্ষ, একটি ডাইনিং কক্ষ, একটি ক্যান্টিন কক্ষ, একটি লাইব্রেরী, একটি কমন রুম আছে।');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `serial` int(11) NOT NULL,
  `news` varchar(3000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`serial`, `news`, `image`, `headline`, `date`) VALUES
(1, 'জবি ছাত্রীহলের প্রতিটি রুম থেকে বছরে ৪০ হাজার টাকা নবায়ন ফি নামে ভাড়া উঠান জবি প্রশাসন। মানে এত ছোট এক রুমে থাকা আটজন শিক্ষার্থীকে প্রতি মাসে সাড়ে তিন হাজার টাকা করে দেওয়া লাগছে।\r\n\r\nপুরান ঢাকায় সাড়ে তিন হাজার টাকায় একটা রুম পাবেন না? ২ রুমের বাসা/ফ্ল্যাট সাত হাজারে পাওয়া যায়। তাহলে ছাত্রীদের কী এমন উপকার হলো?\r\nউপাচার্য তখন একটা কৌশল করে বললো- আমাদের হল একটা তাই, প্রতি রুমে ৪ জনের বিপরীতে ৮ জন উঠাবো, তাহলে উদ্দেশ্য ছিল ৮ জন উঠাতে পারলে প্রতি রুম থেকে দিগুণ ভাড়া পাবেন। ব্যাবসা তাহলে ভালোই হচ্ছে।', 'h3.jpg', '৪ সিটের একরুম, ভাড়া ৪০ হাজার!', '2023-06-10'),
(2, 'দেশে তৃতীয়বারের মতো অনুষ্ঠিত হতে যাওয়া ২০২২-২৩ শিক্ষাবর্ষের সমন্বিত ২২ বিশ্ববিদ্যালয়ে গুচ্ছ ভর্তি পরীক্ষায় থাকছে না জগন্নাথ বিশ্ববিদ্যালয় (জবি)। তবে এ বিষয়ে চূড়ান্ত সিদ্ধান্ত হবে ৯২ তম সিন্ডিকেটে। যদিও এ সিন্ডিকেট সভা কবে নাগাদ হবে তার নির্ধারিত তারিখ জানানো হয়নি। বুধবার (১৫ মার্চ) বিশ্ববিদ্যালয়ের অ্যাকাডেমিক কাউন্সিলে এ সিদ্ধান্ত নেওয়া হয়। এ বিষয়ে জবি শিক্ষক সমিতির সভাপতি অধ্যাপক আইনুল ইসলাম বলেন, আজকের অ্যাকাডেমিক কাউন্সিলের সভায় সর্বসম্মতিতে সিদ্ধান্ত হয়েছে গুচ্ছে থাকছে না জগন্নাথ বিশ্ববিদ্যালয়। উপাচার্য চেয়েছেন বিষয়টি সিন্ডিকেট সভায় উপস্থাপন করে চূড়ান্ত সিদ্ধান্ত নিতে।অ্যাকাডেমি কাউন্সিলে ৬৮ জন সদস্যদের মধ্যে উপস্থিত ছিলেন ৫০ জন সদস্য। তাদের মধ্যে গুচ্ছের বিপক্ষে ৩৫ জন ও পক্ষে ছিলেন দু’জন সদস্য। বাকি ১৩ জন সদস্য গুচ্ছে থাকা না থাকার বিষয়ে কোনো মতামত দেননি। অ্যাকাডেমিক কাউন্সিলের একাধিক সদস্যের সঙ্গে কথা বলে জানা গেছে, জবির শিক্ষকরা গুচ্ছ থেকে বের হয়ে এসে নিজস্ব পদ্ধতিতে ভর্তি পরীক্ষা নিতে দাবি জানিয়ে আসছিলেন। এ ব্যাপারে তারা উপাচার্য বরাবর লিখিত দাবিও জানিয়েছিলেন তারা।', 'h4.jpg', 'গুচ্ছে থাকছে না জগন্নাথ বিশ্ববিদ্যালয়', '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `serial` int(11) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `notice` varchar(8000) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`serial`, `headline`, `notice`, `image`, `date`) VALUES
(1, 'বেগম ফজিলাতুন্নেছা মুজিব হলে সিট বরাদ্দকৃত ছাত্রীদের তৃতীয় তালিকা', '', 'hall2.pdf', '2023-06-10'),
(2, 'বেগম ফজিলাতুন্নেছা মুজিব হলে সিট বরাদ্দকৃত ছাত্রীদের তালিকা', NULL, 'hall07.pdf', '2023-06-10'),
(3, 'বেগম ফজিলাতুন্নেছা মুজিব হলঅঙ্গীকারনামা এবং আবাসিকতা লাভ ও বসবাসের শর্তাবলী সংক্রান্ত বিজ্ঞপ্তি', NULL, '6512bd43d9caa6e02c990b0a82652dca.pdf', '2023-06-10'),
(4, 'ছাত্রী হল সংক্রান্ত বিজ্ঞপ্তি', NULL, 'hall05.pdf', '2023-06-10'),
(5, 'বেগম ফজিলাতুন্নেছা মুজিব হল সংক্রান্ত বিজ্ঞপ্তি', NULL, 'hall4.pdf', '2023-06-10'),
(6, 'বেগম ফজিলাতুন্নেছা মুজিব হলে সিট বরাদ্দকৃত ছাত্রীদের দ্বিতীয় তালিকা', NULL, 'hall03.pdf', '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset`
--

CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset`
--

INSERT INTO `pass_reset` (`id`, `email`, `token`) VALUES
(0, 'b190305001@cse.jnu.ac.bd', '48a9de7ec3c392685b1b79977363cdb9'),
(0, 'b190305001@cse.jnu.ac.bd', 'b36cb106bdc076cbf9d3c10a281c03bb'),
(0, 'b190305001@cse.jnu.ac.bd', '93ce9d9190fa45be1a491b335f6c3509'),
(0, 'b190305001@cse.jnu.ac.bd', '9a3ad1d459d0b6be03d8aea786f411d4'),
(0, 'b190305001@cse.jnu.ac.bd', 'dbc0c21718117d97ff8642c4f2a61d28'),
(0, 'b190305001@cse.jnu.ac.bd', '87428341eaa7598ee282386f77a055ca'),
(0, 'b190305001@cse.jnu.ac.bd', '156c8e782044cdd7923cff2e4a8a49a6'),
(0, 'b190305001@cse.jnu.ac.bd', 'e289fb14a76be890985af438ecab1e1f'),
(0, 'b190305001@cse.jnu.ac.bd', 'd4cf9ee220d8250665e25f52ad15ecbc');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset2`
--

CREATE TABLE `pass_reset2` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset2`
--

INSERT INTO `pass_reset2` (`id`, `email`, `token`) VALUES
(0, 'farhanaaktersuci@gmail.com', '7cd28f0498c63b063bc610e820d6a44e'),
(0, 'b190305001@cse.jnu.ac.bd', 'a15f5ceb3a8882459de6aed84ec26458');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset3`
--

CREATE TABLE `pass_reset3` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset3`
--

INSERT INTO `pass_reset3` (`id`, `email`, `token`) VALUES
(0, 'farhanaaktersuci@gmail.com', '10467e8870f567b4382e715c605f27ea'),
(0, 'rifahsajida7@gmail.com', 'a2ca8b40bf8762d0385f19b90285138c'),
(0, 'b190305001@cse.jnu.ac.bd', '99b02959e50260ab67d94d26e12b3708'),
(0, 'b190305001@cse.jnu.ac.bd', '1c2e144095afa13f1420c9d332e11102'),
(0, 'anowarasumi@gmail.com', '1b7303c74d513f9c7e41e0542afae42b');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset4`
--

CREATE TABLE `pass_reset4` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset4`
--

INSERT INTO `pass_reset4` (`id`, `email`, `token`) VALUES
(0, 'b190305001@cse.jnu.ac.bd', '8af83eb7e2517e0b119c3a29cd9e4b56'),
(0, 'b190305001@cse.jnu.ac.bd', '1dd569451df6d5012c0ad5f22fd79852'),
(0, 'b190305001@cse.jnu.ac.bd', '14879ec3898079e07aaabfd76b866ba4'),
(0, 'b190305001@cse.jnu.ac.bd', '324057cf0180b92111905c441bc427be');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset5`
--

CREATE TABLE `pass_reset5` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset5`
--

INSERT INTO `pass_reset5` (`id`, `email`, `token`) VALUES
(0, 'b190305001@cse.jnu.ac.bd', 'f8242774131f73d75ee50fe28b55122d'),
(0, 'b190305001@cse.jnu.ac.bd', '05e374b064e041b0c8ae8ff76b0a2fc6'),
(0, 'b190305001@cse.jnu.ac.bd', 'd10beb4eae894edb7b4047b64a3bb7b2'),
(0, 'b190305001@cse.jnu.ac.bd', 'c52f8498857f8cbdb957dba272ac6c0f'),
(0, 'b190305001@cse.jnu.ac.bd', '3507c62d07d8c39745ed928113dbfe43'),
(0, 'b190305001@cse.jnu.ac.bd', '7d3fa3d068a23beac0e6b39212c3227f'),
(0, 'b190305001@cse.jnu.ac.bd', '93bd2f7e2f2aa51c4a9cd1a473c0c419'),
(0, 'b190305001@cse.jnu.ac.bd', 'af18cdc6adacfd598b29657278e5e4da'),
(0, 'b190305001@cse.jnu.ac.bd', 'a583295604b5e7460e48a3ba511cfeae'),
(0, 'b190305001@cse.jnu.ac.bd', '8cd65d386b0bbba32d972d27ca9dd9a2'),
(0, 'b190305001@cse.jnu.ac.bd', '0317c31cbae65b479402c63ae5dfe78c'),
(0, 'b190305001@cse.jnu.ac.bd', '3cfc09d3be6ef9c4cefb36cc350a56f4'),
(0, 'b190305001@cse.jnu.ac.bd', 'f0f93ba14a23a2d0e22b1dafa142e971'),
(0, 'b190305001@cse.jnu.ac.bd', '13bba366aaed675c307447362adcd8d4'),
(0, 'b190305001@cse.jnu.ac.bd', '10d92378f1bbe82abe8ffb1a5fe05c38'),
(0, 'b190305001@cse.jnu.ac.bd', '5e4adbac74b97bccd15c716a4bf56d53'),
(0, 'b190305001@cse.jnu.ac.bd', '5d446b0d66e848fea74fe3f02099a62f'),
(0, 'b190305001@cse.jnu.ac.bd', 'dd0ca633cd8b54397a6911509187f8ae'),
(0, 'b190305001@cse.jnu.ac.bd', 'f241d583dfdb08624e63c690a1deff0e'),
(0, 'b190305001@cse.jnu.ac.bd', '328e3b719bcec8be50d094693c622e45'),
(0, 'b190305001@cse.jnu.ac.bd', '2d5011a068a2b920a667b8b5fc1c0fa4'),
(0, 'b190305001@cse.jnu.ac.bd', '6892a4aa0a569afac2f5f989328f444f'),
(0, 'b190305001@cse.jnu.ac.bd', 'a5f9b786774a743199067287e7ebd942'),
(0, 'b190305001@cse.jnu.ac.bd', '49eb0f71866f6db2e9c22550e8abb80a'),
(0, 'b190305001@cse.jnu.ac.bd', '6a8c75e0d7a2aa1e751b4101b4ca7c59'),
(0, 'b190305001@cse.jnu.ac.bd', 'f975a9382ca046cf2e744abb6a3f0473'),
(0, 'b190305001@cse.jnu.ac.bd', '612ce75adaba374631a328b24916acd5'),
(0, 'b190305001@cse.jnu.ac.bd', '810f5e94c75e4c2b919f202cc6f924e2'),
(0, 'b190305001@cse.jnu.ac.bd', '6679bb5005c7f7a4afb09ff07e0d752d'),
(0, 'b190305001@cse.jnu.ac.bd', '7f228ced29dc79242faab2f385bda637');

-- --------------------------------------------------------

--
-- Table structure for table `photogallery`
--

CREATE TABLE `photogallery` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `alt` varchar(100) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photogallery`
--

INSERT INTO `photogallery` (`serial`, `date`, `alt`, `image`) VALUES
(1, '2023-06-10', '', 'image13.jpg'),
(2, '2023-06-10', '', 'image10.jpg'),
(3, '2023-06-10', '', 'image4.jpg'),
(4, '2023-06-10', '', 'image8.jpg'),
(5, '2023-06-10', '', 'image9.jpg'),
(6, '2023-06-10', '', 'image15.jpg'),
(7, '2023-06-10', 'Function', 'image16.jpg'),
(8, '2023-06-10', '', 'Slider_rali.jpg'),
(9, '2023-06-10', '', 'image5.jpg'),
(10, '2023-06-10', '', 'image6.jpg'),
(11, '2023-06-10', '', 'বঙ্গমাতা_কর্ণার_উদ্বোধন_দিন_.jpg'),
(12, '2023-06-10', '', 'image14.jpg'),
(13, '2023-06-10', '', 'বঙ্গমাতা_কর্ণার_উদ্বোধন_(2)1.jpg'),
(14, '2023-06-10', '', 'Slider_rali.jpg'),
(15, '2023-06-10', '', 'image7.jpg'),
(16, '2023-06-10', '', 'বঙ্গমাতার_জন্মদিনে_হলের_ছাত্রীদের_তৈরী_দেয়ালিকা_উদ্বোধন_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provosts`
--

CREATE TABLE `provosts` (
  `serial` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `tenure_from` date NOT NULL,
  `tenure_to` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `fblink` varchar(300) DEFAULT NULL,
  `instalink` varchar(300) DEFAULT NULL,
  `linkdnlink` varchar(300) DEFAULT NULL,
  `twitterlink` varchar(300) DEFAULT NULL,
  `googleScholarlink` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provosts`
--

INSERT INTO `provosts` (`serial`, `name`, `department`, `tenure_from`, `tenure_to`, `image`, `fblink`, `instalink`, `linkdnlink`, `twitterlink`, `googleScholarlink`) VALUES
(1, 'Professor Dr. Shamima Begum', 'Department of Microbiology', '2021-03-04', '2023-03-03', 'post-1.jpg', '', '', '', '', ''),
(2, 'Professor Dr. Deepika Rani Sarkar', 'Department of Physics', '2023-03-04', '2025-03-04', 'current_provost_image.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `provost_login`
--

CREATE TABLE `provost_login` (
  `id` varchar(200) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phnNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seatcancellation_applications`
--

CREATE TABLE `seatcancellation_applications` (
  `serial` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `id` varchar(500) NOT NULL,
  `floorNo` varchar(100) NOT NULL,
  `roomNo` varchar(100) NOT NULL,
  `seatNo` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `reason` text NOT NULL,
  `seen_status` int(11) DEFAULT 0,
  `approval_status` varchar(200) DEFAULT 'Waiting',
  `file` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatcancellation_applications`
--

INSERT INTO `seatcancellation_applications` (`serial`, `name`, `id`, `floorNo`, `roomNo`, `seatNo`, `date`, `reason`, `seen_status`, `approval_status`, `file`) VALUES
(84, 'Rifah', 'B190305004', '3', '301', 'A-1', '2023-06-25 12:49:52', 'blah blah blah', 1, 'Waiting', NULL),
(85, 'Rifah', 'B190305004', '3', '301', 'A-1', '2023-06-25 12:51:33', '33333', 1, 'Waiting', NULL),
(86, 'Fima', 'B190305005', '5', '502', 'B-2', '2023-06-29 09:44:40', 'Graduation complete.', 1, 'Waiting', NULL),
(87, 'Fima', 'B190305005', '5', '502', 'B-2', '2023-06-29 10:08:01', 'dfksezldfgxmn gkxcflsodl;gh,brewtryuawdwmjkgh,', 1, 'Canceled', NULL),
(88, 'Margan Tara', 'C190304005', '8', '801', 'A-1', '2023-07-01 01:39:23', 'Full family shifted in Dhaka. We have our new home near the campus. The house is owned by my father.', 0, 'Waiting', 'lecture 11, 12_ special numbers.pptx'),
(89, 'Tamanna Zaman', 'C20405023', '7', '705', 'B-1', '2023-07-01 02:02:42', 'Hall facilities are so limited. Want to shift in flat.', 0, 'Waiting', ''),
(90, 'Sabikun-nahar Shima', 'A190405001', '7', '705', 'A-2', '2023-07-01 02:37:44', 'Graduation complete.', 0, 'Waiting', 'graduate7.webp'),
(91, 'Rifah', 'B190305004', '3', '303', 'A-1', '2023-07-02 14:47:22', 'Canteen valo na', 0, 'Waiting', 'canteeen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `serial` int(11) NOT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`serial`, `caption`, `image`) VALUES
(2, 'বঙ্গমাতা কর্ণার উদ্বোধন দিন বঙ্গমাতার প্রতিকৃতিতে পুস্পস্তবক অর্পণের মাধ্যমে শ্রদ্ধাঞ্জলি নিবেদন', 'বঙ্গমাতা_কর্ণার_উদ্বোধন_দিন_.jpg'),
(3, 'বঙ্গমাতার জন্মদিনে হলের ছাত্রীদের তৈরী দেয়ালিকা উদ্বোধন', 'বঙ্গমাতার_জন্মদিনে_হলের_ছাত্রীদের_তৈরী_দেয়ালিকা_উদ্বোধন_.jpg'),
(4, 'বঙ্গমাতা কর্ণার উদ্বোধন', 'বঙ্গমাতা_কর্ণার_উদ্বোধন_(2)1.jpg'),
(5, 'পহেলা বৈশাখ উপলক্ষ্যে', 'image7.jpg'),
(6, 'মাননীয় ভিসি স্যার বেগম ফজিলাতুন্নেছা মুজিব হল পরিদর্শন করেন', 'Slider_VC_at_hall1.jpg'),
(7, 'র‌্যালি', 'image10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_canteen`
--

CREATE TABLE `slider_canteen` (
  `serial` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_canteen`
--

INSERT INTO `slider_canteen` (`serial`, `image`, `caption`) VALUES
(1, 'slider6.jpg', ''),
(3, 'slider5.jpg', ''),
(5, 'slider2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `tenure_from` date NOT NULL,
  `tenure_to` date NOT NULL,
  `phnNo` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `staffType` varchar(100) DEFAULT NULL,
  `working_hr` varchar(30) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `serial` int(11) NOT NULL,
  `id` varchar(200) DEFAULT NULL,
  `had_last_vacction_from` datetime DEFAULT NULL,
  `had_last_vacction_to` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`name`, `password`, `date_of_birth`, `tenure_from`, `tenure_to`, `phnNo`, `email`, `image`, `staffType`, `working_hr`, `gender`, `serial`, `id`, `had_last_vacction_from`, `had_last_vacction_to`) VALUES
('Rajib Hossain', '123', '1984-06-08', '2022-06-01', '2027-06-18', '019......11', 'rhossain23@gmail.com', 'rahim.png', 'Canteen Manager', '6 am to 6 pm', 'Male', 1, 'rajib', '2023-07-21 12:00:00', '2023-08-04 12:00:00'),
('Rimi Begum', '121', '1990-06-05', '2021-03-03', '2027-06-18', '019.....11', 'rbegum@gmail.com', 'rahim.png', 'Librarian', '6 am to 6 pm', 'Female', 2, 'rbegum@gmail.com', NULL, NULL),
('Shihab Uddin', 'A1203004', '1992-01-28', '2023-06-16', '2024-10-15', '019.....12', 'shu45@gmail.com', 'rahim.png', 'Canteen Accountant', '12am to 5pm', 'Male', 3, 'A1203004', NULL, NULL),
('Mrinal Jaman', 'S-203005', '1994-03-09', '2023-01-01', '2024-12-31', '019.....10', 'mjaman15@gmail.com', 'rahim.png', 'Librarian', '12pm to 12 am', ' Male', 4, 'S-203005', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_app_vacation`
--

CREATE TABLE `staff_app_vacation` (
  `serial` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `id` varchar(300) NOT NULL,
  `staffType` varchar(300) NOT NULL,
  `reason` text NOT NULL,
  `file` varchar(300) DEFAULT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(11) DEFAULT 0,
  `approval_status` varchar(200) DEFAULT 'Pending',
  `reply_seen_status` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_app_vacation`
--

INSERT INTO `staff_app_vacation` (`serial`, `name`, `id`, `staffType`, `reason`, `file`, `startTime`, `endTime`, `applied_at`, `seen_status`, `approval_status`, `reply_seen_status`) VALUES
(2, 'Rajib Hossain', 'rajib', 'Canteen Manager', 'Food poisoning', 'activity1.jpg', '2023-07-21 12:00:00', '2023-08-04 12:00:00', '2023-06-29 07:25:05', 0, 'Approved', '0'),
(3, 'Shihab Uddin', 'A1203004', 'Canteen Accountant', 'Suffering from Dengue', 'dengu_report.webp', '2023-08-31 12:00:00', '2023-09-08 12:00:00', '2023-06-29 09:00:41', 0, 'Pending', '0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `session` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `roomNo` varchar(20) NOT NULL,
  `seatNo` varchar(20) NOT NULL,
  `seat_expire_date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `floorNo` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `maritial_status` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phnNo` varchar(20) DEFAULT NULL,
  `had_last_vacation_from` datetime DEFAULT NULL,
  `had_last_vacation_to` datetime DEFAULT NULL,
  `previous_seatNo` varchar(200) DEFAULT NULL,
  `previous_roomNo` varchar(200) DEFAULT NULL,
  `previous_floorNo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `department`, `password`, `session`, `date_of_birth`, `bloodGroup`, `roomNo`, `seatNo`, `seat_expire_date`, `image`, `floorNo`, `email`, `maritial_status`, `address`, `phnNo`, `had_last_vacation_from`, `had_last_vacation_to`, `previous_seatNo`, `previous_roomNo`, `previous_floorNo`) VALUES
('A190302033', 'Yeasmin Akter', 'Accounting and Information System', 'A190302033', '2019-2020', '2000-07-07', 'A+', '1005', 'B-2', '2024-02-15', 'rahima.png', '10', 'ysak54@gmail.com', 'Unmarried', 'Cumilla', '016......34', NULL, NULL, 'B-1', '1005', '10'),
('A190304041', 'Rima Jahan Jim', 'Music', 'A190304041', '2019-2020', '2001-01-25', 'B+', '1505', 'A-1', '2024-04-05', 'rahima.png', '15', 'rjjim2001@gmail.com', ' Unmarried', 'Noakhali', '013.......99', NULL, NULL, NULL, NULL, NULL),
('A190405001', 'Sabikun-nahar Shima', 'Psychology', '020', '2019-2020', '2000-12-01', 'A-', '705', 'A-2', '2024-06-08', 'rahima.png', '7', 'snns45@gmail.com', ' Unmarried', 'Chittagong', '019.......345', '2023-09-23 08:09:00', '2023-10-12 12:00:00', NULL, NULL, NULL),
('B190305004', 'Rifah', 'Computer Science and Engineering', '12', '2019-2020', '2001-10-11', 'A+', '303', 'A-1', '2024-06-30', 'rahima.png', '3', 'rifah@gmail.com', 'Unmarried', 'Dhaka', '018.......53', '2023-06-24 15:34:00', NULL, 'A-1', '303', '3'),
('B190305005', 'Fima', 'Physics', '333', '2019-2020', '2001-06-03', 'A+', '501', 'A-2', '2024-06-01', 'rahima.png', '5', 'abc33@gmail.com', 'Married', 'Dhaka', '019.......44', '2023-07-22 12:20:00', NULL, 'B-2', '503', '5'),
('C190304005', 'Margan Tara', 'Chemistry', 'C190304005', '2019-2020', '2000-07-20', 'B+', '801', 'A-1', '2024-04-06', 'rahima.png', '8', 'mt456@gmail.com', ' Unmarried', 'Sylhet', '013........67', '2023-11-03 12:00:00', NULL, NULL, NULL, NULL),
('C20405023', 'Tamanna Zaman', 'Accounting and Information System', '010', '2020-2021', '2001-12-30', 'AB-', '705', 'B-1', '2024-12-06', 'rahima.png', '7', 'tz5@gmail.com', ' Unmarried', 'Noakhali', '016........33', '2023-10-03 23:00:00', NULL, NULL, NULL, NULL),
('D-190305004', 'Mohima Islam', 'Mass and Communication Department', 'D-190305004', '2019-2020', '2000-10-28', 'O-', '403', 'A-1', '2024-06-30', 'rahima.png', '4', 'mohim678@gmail.com', 'Married', 'Dhaka', '016....12', NULL, NULL, 'B-1', '405', '4'),
('D190302025', 'Rumi Islam', 'Islamic History and Culture', 'D190302025', '2019-2020', '2000-07-05', 'B+', '606', 'D-2', '2023-12-02', 'rahima.png', '6', 'rumi097@gmail.com', ' Unmarried', 'Jessore', '017.........22', NULL, NULL, NULL, NULL, NULL),
('E20403045', 'Moumita Alam', 'Fine Arts', 'E20403045', '2020-2021', '2000-11-24', 'A-', '905', 'C-2', '2024-05-10', 'rahima.png', '9', 'mou2001@gmail.com', ' Merried', 'Rangamati', '017.......33', NULL, NULL, NULL, NULL, NULL),
('H190304028', 'Mim Akter', 'Theatre', 'H190304028', '2019-2020', '2001-01-16', 'A+', '1404', 'B-1', '2024-04-05', 'rahima.png', '14', 'mm980@gmail.com', 'Unmarried', 'Dhaka', '016.......78', NULL, NULL, 'B-1', '1204', '12'),
('M-20304047', 'Rihana Islam', 'Botany', 'M-20304047', '2020-2021', '1999-05-06', 'B+', '1102', 'B-1', '0000-00-00', 'rahima.png', '11', 'r2312@gmail.com', 'Unmarried', 'Mymensingh', '018......17', NULL, NULL, 'B-1', '1005', '10'),
('M180304005', 'Bithi Sarkar', 'Zoology', 'M180304005', '2018-2019', '1998-12-28', 'B+', '1301', 'D-1', '2024-03-28', 'rahima.png', '13', 'abc@gmail.com', 'Married', 'Chittagong', '016........44', NULL, NULL, 'B-1', '307', '3'),
('M180405030', 'Najnin Sultana', 'Microbiology', 'M180405030', '2018-2019', '2000-01-03', 'B-', '301', 'A-2', '2024-01-04', 'rahima.png', '3', 'nst45@gmail.com', 'Unmarried', 'Cumilla', '016......00', NULL, NULL, 'A-1', '301', '3'),
('M19030204', 'Musfirat Rifat', 'English', 'M19030204', '2019-2020', '2001-02-15', 'B+', '1502', 'B-1', '2024-07-05', 'rahima.png', '15', 'mrifag50@gmail.com', 'Umnarried', 'Mymensingh', '019.....334', NULL, NULL, 'A-2', '1502', '15'),
('S20304034', 'Samia Azad', 'Statistics', 'S20304034', '2020-2018', '2001-11-22', 'A-', '1203', 'C-2', '2024-01-06', 'rahima.png', '12', 'saz11@gmail.com', 'Unmarried', 'Bangkok, Thailand', '018......456', NULL, NULL, 'B-1', '1005', '10');

-- --------------------------------------------------------

--
-- Table structure for table `students_app_vacation`
--

CREATE TABLE `students_app_vacation` (
  `serial` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id` varchar(100) NOT NULL,
  `floorNo` varchar(100) NOT NULL,
  `roomNo` varchar(100) NOT NULL,
  `seatNo` varchar(100) NOT NULL,
  `reason` text NOT NULL,
  `applied_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `file` varchar(500) DEFAULT NULL,
  `seen_status` int(11) DEFAULT 0,
  `approval_status` varchar(200) DEFAULT 'Pending',
  `reply_seen_status` varchar(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_app_vacation`
--

INSERT INTO `students_app_vacation` (`serial`, `name`, `id`, `floorNo`, `roomNo`, `seatNo`, `reason`, `applied_at`, `startTime`, `endTime`, `file`, `seen_status`, `approval_status`, `reply_seen_status`) VALUES
(1, 'Rifah', 'B190305004', '3', '301', 'A-1', 'Illness', '2023-06-25 09:37:39', '2023-06-10 15:34:00', '2023-06-24 15:34:00', '', 0, 'Pending', '1'),
(10, 'Rifah', 'B190305004', '3', '301', 'A-1', 'Bashay jabooooooooo', '2023-06-25 12:52:42', '2023-06-26 08:54:00', '2023-06-24 22:52:00', 'breakfastmenu.png', 0, 'Canceled', '1'),
(13, 'Rifah', 'B190305004', '3', '301', 'A-1', 'Food poisoning from Canteen meal!', '2023-06-29 05:53:20', '2023-07-14 13:01:00', '2023-07-22 12:01:00', 'dinner5.webp', 0, 'Pending', '1'),
(14, 'Fima', 'B190305005', '5', '502', 'B-2', 'Urgent leave to home.', '2023-06-29 06:25:22', '2023-07-21 05:30:00', '2023-07-22 12:20:00', '', 0, 'Approved', '1'),
(15, 'Rifah', 'B190305004', '3', '301', 'A-1', 'Tooth pain', '2023-06-29 09:13:22', '2023-07-08 21:17:00', '2023-07-18 09:14:00', 'breaksuper.webp', 0, 'Canceled', '0'),
(16, 'Margan Tara', 'C190304005', '8', '801', 'A-1', 'Illness', '2023-07-01 01:37:07', '2023-08-17 12:30:00', '2023-08-24 00:35:00', 'assignmentThread.txt', 0, 'Pending', '0'),
(17, 'Margan Tara', 'C190304005', '8', '801', 'A-1', 'Dengue positive.', '2023-07-01 02:00:04', '2023-10-10 00:00:00', '2023-11-03 12:00:00', 'dengu_report.webp', 0, 'Pending', '0'),
(18, 'Tamanna Zaman', 'C20405023', '7', '705', 'B-1', 'Sister marriage.', '2023-07-01 02:01:59', '2023-09-27 13:00:00', '2023-10-03 23:00:00', 'activity2.jpg', 0, 'Pending', '0'),
(19, 'Sabikun-nahar Shima', 'A190405001', '7', '705', 'A-2', 'Corona positive.', '2023-07-01 02:09:52', '2023-09-23 08:09:00', '2023-10-12 12:00:00', 'dengu_report.webp', 0, 'Approved', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achivments`
--
ALTER TABLE `achivments`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `admin_app_vacation`
--
ALTER TABLE `admin_app_vacation`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `complains_from_housetutors`
--
ALTER TABLE `complains_from_housetutors`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `complains_from_staff`
--
ALTER TABLE `complains_from_staff`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `complains_from_students_to_housetutor`
--
ALTER TABLE `complains_from_students_to_housetutor`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `complains_from_students_to_provosts`
--
ALTER TABLE `complains_from_students_to_provosts`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `current_house_tutors`
--
ALTER TABLE `current_house_tutors`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `current_provost`
--
ALTER TABLE `current_provost`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ht_app_vacation`
--
ALTER TABLE `ht_app_vacation`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `provosts`
--
ALTER TABLE `provosts`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `provost_login`
--
ALTER TABLE `provost_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatcancellation_applications`
--
ALTER TABLE `seatcancellation_applications`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `slider_canteen`
--
ALTER TABLE `slider_canteen`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `staff_app_vacation`
--
ALTER TABLE `staff_app_vacation`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_app_vacation`
--
ALTER TABLE `students_app_vacation`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achivments`
--
ALTER TABLE `achivments`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_app_vacation`
--
ALTER TABLE `admin_app_vacation`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complains_from_housetutors`
--
ALTER TABLE `complains_from_housetutors`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complains_from_staff`
--
ALTER TABLE `complains_from_staff`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complains_from_students_to_housetutor`
--
ALTER TABLE `complains_from_students_to_housetutor`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `complains_from_students_to_provosts`
--
ALTER TABLE `complains_from_students_to_provosts`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `current_house_tutors`
--
ALTER TABLE `current_house_tutors`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `current_provost`
--
ALTER TABLE `current_provost`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ht_app_vacation`
--
ALTER TABLE `ht_app_vacation`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `provosts`
--
ALTER TABLE `provosts`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seatcancellation_applications`
--
ALTER TABLE `seatcancellation_applications`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider_canteen`
--
ALTER TABLE `slider_canteen`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_app_vacation`
--
ALTER TABLE `staff_app_vacation`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students_app_vacation`
--
ALTER TABLE `students_app_vacation`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
