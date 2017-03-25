-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 03:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passkey` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='admin of the site ';

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `passkey`) VALUES
('aashi2309joshi@gmail.com', '5dc545ce34453d7f2e4184127015ea1f', 1),
('yashwant.bokadia@technonjr.org', '123', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Name`, `email`, `message`) VALUES
('Yashwant', 'bokadiayashwant@gmail.com', 'Hiiii,These is DEMO.');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `institute` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`institute`, `email`, `password`, `phone`) VALUES
('TINIT', 'bokadiayashwant@gmail.com', '12345', 9783972424);

-- --------------------------------------------------------

--
-- Table structure for table `tinit`
--

CREATE TABLE `tinit` (
  `id` varchar(30) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `branch` tinytext,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinit`
--

INSERT INTO `tinit` (`id`, `name`, `rollno`, `email`, `password`, `branch`, `status`) VALUES
('1', 'Aayushi Joshi', 'ug2019tiniot52', 'aayushi.joshi4@gmail.com', 'aayush7308', 'Computer Science Engineering', 0),
('2', 'Akash Manawat', 'ug2019tiniot53', 'akashmanawat11@gmail.com', 'akashm9064', 'Computer Science Engineering', 0),
('3', 'Akshi Panwar', 'ug2019tiniot54', 'akshipanwar97@gmail.com', 'akship6732', 'Computer Science Engineering', 0),
('4', 'Ananya Bhatnagar', 'ug2019tiniot55', 'ananyabhatnagar96@gmail.com', 'ananya7673', 'Computer Science Engineering', 0),
('5', 'Anirudh Muhnot', 'ug2019tiniot56', 'muhnot@icloud.com', 'anirud4975', 'Computer Science Engineering', 0),
('6', 'Anishi Jain', 'ug2019tiniot57', 'anishisemlawat@gmail.com', 'anishi8331', 'Computer Science Engineering', 0),
('7', 'Anmol Mehta', 'ug2019tiniot58', 'anmolmehta506@gmail.com', 'anmolm4325', 'Computer Science Engineering', 0),
('8', 'Anshul Porwal', 'ug2019tiniot59', 'anshulp2015@gmail.com', 'anshul2684', 'Computer Science Engineering', 0),
('9', 'Ayush Jain', 'ug2019tiniot60', 'ayush0626jain@gmail.com', 'ayushj9234', 'Computer Science Engineering', 0),
('10', 'Ayushi Jain', 'ug2019tiniot61', 'ayushijain212@gmail.com', 'ayushi5393', 'Computer Science Engineering', 0),
('11', 'Bhavya Jain', 'ug2019tiniot62', 'bhavyajainbh@gmail.com', 'bhavya2912', 'Computer Science Engineering', 0),
('12', 'Dikshi Jain', 'ug2019tiniot63', 'dikshi.01@gmail.com', 'dikshi7672', 'Computer Science Engineering', 0),
('13', 'Disha Verma', 'ug2019tiniot64', 'dishaverma291097@gmail.com', 'dishav7118', 'Computer Science Engineering', 0),
('14', 'Divesh Sankhla', 'ug2019tiniot65', 'diveshsankhla6@gmail.com', 'divesh7818', 'Computer Science Engineering', 0),
('15', 'Divya Tamboli', 'ug2019tiniot66', 'divyatamboli72@gmail.com', 'divyat7393', 'Computer Science Engineering', 0),
('16', 'Divya Teli', 'ug2019tiniot67', 'divyateli1996@gmail.com', 'divyat7861', 'Computer Science Engineering', 0),
('17', 'Gunjan Agarawal', 'ug2019tiniot68', 'gunjanagrawal085@gmail.com', 'gunjan9150', 'Computer Science Engineering', 0),
('18', 'Gunjan Shah', 'ug2019tiniot69', 'aarohiahluwalia234@gmail.com', 'gunjan1366', 'Computer Science Engineering', 0),
('19', 'Himanshu Kotadia', 'ug2019tiniot70', 'himanshukotadia.hk@gmail.com', 'himans6455', 'Computer Science Engineering', 0),
('20', 'Jagrati Godake', 'ug2019tiniot71', 'jagratigodake298@gmail.com', 'jagrat4225', 'Computer Science Engineering', 0),
('21', 'Jatin Meghwal', 'ug2019tiniot72', 'jatin.meghwal@gmail.com', 'jatinm3804', 'Computer Science Engineering', 0),
('22', 'Jugal Kukreja', 'ug2019tiniot73', 'jugalkukreja7@gmail.com', 'jugalk5725', 'Computer Science Engineering', 0),
('23', 'Jugal Kumar Porwal', 'ug2019tiniot74', 'jugalporwal97@gmail.com', 'jugalk7523', 'Computer Science Engineering', 0),
('24', 'Juhi Sankhla', 'ug2019tiniot75', 'juhisankhla97@gmail.com', 'juhisa5714', 'Computer Science Engineering', 0),
('25', 'Kajal Gupta', 'ug2019tiniot76', 'guptakj8@gmail.com', 'kajalg7274', 'Computer Science Engineering', 0),
('26', 'Kanishka Paliwal', 'ug2019tiniot77', 'kanishkapaliwal7535@gmail.com', 'kanish9330', 'Computer Science Engineering', 0),
('27', 'Kunal Jain', 'ug2019tiniot78', 'jainkunal1603@gmail.com', 'kunalj3684', 'Computer Science Engineering', 0),
('28', 'Lokesh Dangi', 'ug2019tiniot79', 'lokeshdangi002@gmail.com', 'lokesh1344', 'Computer Science Engineering', 0),
('29', 'Madhu Dangi', 'ug2019tiniot80', 'madhu.dangi2015@gmail.com', 'madhud7714', 'Computer Science Engineering', 0),
('30', 'Mahendra Singh Deora', 'ug2019tiniot81', 'mahendrasinghdeora555@gmail.com', 'mahend3146', 'Computer Science Engineering', 0),
('31', 'Manali Jain', 'ug2019tiniot82', 'manali.jain.750@gmail.com', 'manali7419', 'Computer Science Engineering', 0),
('32', 'Mohit Sahu', 'ug2019tiniot83', 'mohitsahu1219@gmail.com', 'mohits8094', 'Computer Science Engineering', 0),
('33', 'Neeraj Yadav', 'ug2019tiniot84', 'yadav.neeraj3025@gmail.com', 'neeraj4594', 'Computer Science Engineering', 0),
('34', 'Nidhi Vyas', 'ug2019tiniot85', 'vyas.nidhi656@gmail.com', 'nidhiv3686', 'Computer Science Engineering', 0),
('35', 'Pooja Chotrani', 'ug2019tiniot86', 'poojachotrani7773@gmail.com', 'poojac4639', 'Computer Science Engineering', 0),
('36', 'Prachi Jain', 'ug2019tiniot87', 'prachitruejain@gmail.com', 'prachi7952', 'Computer Science Engineering', 0),
('37', 'Purvi Sharma', 'ug2019tiniot88', 'sharmavijay01.pal@gmail.com', 'purvis8972', 'Computer Science Engineering', 0),
('38', 'Rakshit Kothari', 'ug2019tiniot89', 'rakshit007kothari@gmail.com', 'rakshi4363', 'Computer Science Engineering', 0),
('39', 'Ramya Kr', 'ug2019tiniot90', 'ramyakarimpuzhar@gmail.com', 'ramyak8834', 'Computer Science Engineering', 0),
('40', 'Ravina Jain', 'ug2019tiniot91', 'ravinajain410@gmail.com', 'ravina1474', 'Computer Science Engineering', 0),
('41', 'Aashi Joshi', 'ug2019tiniot170', 'aashi2309joshi@gmail.com', 'aashij5973', 'Information Technology', 0),
('42', 'Aayushi Nahar', 'ug2019tiniot171', 'aayushinahar0105@gmail.com', 'aayush1408', 'Information Technology', 0),
('43', 'Aishwarya Malvi', 'ug2019tiniot172', 'malviaishwarya12@gmail.com', 'aishwa3563', 'Information Technology', 0),
('44', 'Akhilesh Vyas', 'ug2019tiniot173', 'akhilesh8507@gmail.com', 'akhile9928', 'Information Technology', 0),
('45', 'Amrutiya Shiv Kumar', 'ug2019tiniot174', 'amrutiyashiv@gmail.com', 'amruti7731', 'Information Technology', 0),
('46', 'Ankush Choudhary', 'ug2019tiniot175', 'ankushchoudhary919@gmail.com', 'ankush1074', 'Information Technology', 0),
('47', 'Aqsa Sarwar Siddiqui', 'ug2019tiniot176', 'siddiqui.aqsa17@gmail.com', 'aqsasa5279', 'Information Technology', 0),
('48', 'Bharat Jain', 'ug2019tiniot177', 'scotttwojaff@gmail.com', 'bharat9980', 'Information Technology', 0),
('49', 'Bharat Mali', 'ug2019tiniot178', 'bharatmali321@gmail.com', 'bharat1375', 'Information Technology', 0),
('50', 'Bhavya Dave', 'ug2019tiniot179', 'bdbhavyadave@gmail.com', 'bhavya2005', 'Information Technology', 0),
('51', 'Chanda Mali', 'ug2019tiniot180', 'chandamali777@gmail.com', 'chanda9435', 'Information Technology', 0),
('52', 'Chirag Ameta', 'ug2019tiniot181', 'chiraga779@gmail.com', 'chirag5447', 'Information Technology', 0),
('53', 'Deepak Khatik', 'ug2019tiniot182', 'dkofficial1996@gmail.com', 'deepak2265', 'Information Technology', 0),
('54', 'Deepak Meena', 'ug2019tiniot183', 'meenadeepak952@gmail.com', 'deepak4518', 'Information Technology', 0),
('55', 'Deepshikha Paliwal', 'ug2019tiniot184', 'deepshikhapaliwal.18@gmail.com', 'deepsh4633', 'Information Technology', 0),
('56', 'Dhairyaa Jain', 'ug2019tiniot185', 'palomajain005@gmail.com', 'dhairy8001', 'Information Technology', 0),
('57', 'Divya Purbiya', 'ug2019tiniot186', 'dishpurbia22@gmail.com', 'divyap3112', 'Information Technology', 0),
('58', 'Ekansh Sen', 'ug2019tiniot187', 'vitthisen@gmail.com', 'ekansh3149', 'Information Technology', 0),
('59', 'Garvit Mehta', 'ug2019tiniot188', 'mehta.garvit97@gmail.com', 'garvit2003', 'Information Technology', 0),
('60', 'Gaurav Sharma', 'ug2019tiniot189', 'harshita749@gmail.com', 'gaurav8371', 'Information Technology', 0),
('61', 'Gourav Pushkarna', 'ug2019tiniot190', 'gauravbhardwaj8791@gmail.com', 'gourav8397', 'Information Technology', 0),
('62', 'Gunjan Parmar', 'ug2019tiniot191', 'gunjan223pr@gmail.com', 'gunjan5773', 'Information Technology', 0),
('63', 'Harish Choudhary', 'ug2019tiniot192', 'harishchoudhary164@gmail.com', 'harish1520', 'Information Technology', 0),
('64', 'Harsh Varma', 'ug2019tiniot193', 'sonusv84@gmail.com', 'harshv8249', 'Information Technology', 0),
('65', 'Harshit Tailor', 'ug2019tiniot194', 'harshittailor96@gmail.com', 'harshi3574', 'Information Technology', 0),
('66', 'Harshita Bapna', 'ug2019tiniot195', 'harshitabapna@yahoo.com', 'harshi3693', 'Information Technology', 0),
('67', 'Harshul Bhaliya', 'ug2019tiniot196', 'harshul2804@gmail.com', 'harshu8627', 'Information Technology', 0),
('68', 'Himani Goswami', 'ug2019tiniot197', 'himanigoswami645@gmail.com', 'himani2382', 'Information Technology', 0),
('69', 'Jaidev Meghwal', 'ug2019tiniot198', 'jaidevmeghwal@gmail.com', 'jaidev6415', 'Information Technology', 0),
('70', 'Jay Paliwal', 'ug2019tiniot199', 'jaipaliwal98@gmail.com', 'jaypal9125', 'Information Technology', 0),
('71', 'Jeevika Gothwal', 'ug2019tiniot200', 'jeevika.2015@gmail.com', 'jeevik1787', 'Information Technology', 0),
('72', 'Kunal Bhardwaj', 'ug2019tiniot201', 'kunal.bhardwaj7910@gmail.com', 'kunalb1072', 'Information Technology', 0),
('73', 'Kunal Jain', 'ug2019tiniot202', 'kunaljain229.kj@gmail.com', 'kunalj3262', 'Information Technology', 0),
('74', 'Madhvi Mathur', 'ug2019tiniot203', 'mmahi326@gmail.com', 'madhvi1382', 'Information Technology', 0),
('75', 'Mahendra Dangi', 'ug2019tiniot204', 'jaipatel5050@gmail.com', 'mahend8696', 'Information Technology', 0),
('76', 'Mahima Sharma', 'ug2019tiniot205', 'mahimasharmanjr@gmail.com', 'mahima8179', 'Information Technology', 0),
('77', 'Manjima Mathur', 'ug2019tiniot206', 'manjima.mathur01@gmail.com', 'manjim9101', 'Information Technology', 0),
('78', 'Megha Dave', 'ug2019tiniot207', 'dave.meghadave.megha@gmail.com', 'meghad2019', 'Information Technology', 0),
('79', 'Nalin Vyas', 'ug2019tiniot208', 'jainroyal11@gmail.com', 'nalinv6131', 'Information Technology', 0),
('80', 'Nikita Kabra', 'ug2019tiniot209', 'kabranikita.nk@gmail.com', 'nikita3208', 'Information Technology', 0),
('81', 'Nosheen Sheikh', 'ug2019tiniot210', 'nosheenudr@gmail.com', 'noshee4747', 'Information Technology', 0),
('82', 'Pranay Mann', 'ug2019tiniot211', 'mann.pranay@gmail.com', 'pranay8743', 'Information Technology', 0),
('83', 'Prateek Jain', 'ug2019tiniot212', 'prateekj778@gmail.com', 'pratee5158', 'Information Technology', 0),
('84', 'Priyanka Upadhyay', 'ug2019tiniot213', 'upadhyay.1998.priyanka@gmail.com', 'priyan3823', 'Information Technology', 0),
('85', 'Rahul Prajapat', 'ug2019tiniot214', 'prajapatrahul550@gmail.com', 'rahulp1608', 'Information Technology', 0),
('86', 'Rajat Joshi', 'ug2019tiniot215', 'joshirajat29@gmail.com', 'rajatj2531', 'Information Technology', 0),
('87', 'Sandhya Badlani', 'ug2019tiniot216', 'badlanikishore52@gmail.com', 'sandhy2958', 'Information Technology', 0),
('88', 'Shameema Nazneen', 'ug2019tiniot217', 'shameenanaz15@gmail.com', 'shamee2745', 'Information Technology', 0),
('89', 'Shanu Agrawal', 'ug2019tiniot218', 'shanua1996@gmail.com', 'shanua9553', 'Information Technology', 0),
('90', 'Shreeman Purohit', 'ug2019tiniot219', 'drhspurohit@gmail.com', 'shreem7029', 'Information Technology', 0),
('91', 'Shubhanshu Sharma', 'ug2019tiniot220', 'sharmashubhanshu16@gmail.com', 'shubha7287', 'Information Technology', 0),
('92', 'Shyam Sunder Upadhyay', 'ug2019tiniot221', 'shyam.ssu24@gmail.com', 'shyams2747', 'Information Technology', 0),
('93', 'Sonali Jhala', 'ug2019tiniot222', 'sonalijhala23@gmail.com', 'sonali9622', 'Information Technology', 0),
('94', 'Vaishali Valot', 'ug2019tiniot223', 'valotvaishali@gmail.com', 'vaisha4020', 'Information Technology', 0),
('95', 'Vedant Sharma', 'ug2019tiniot224', 'mailvedantsharma@gmail.com', 'vedant1477', 'Information Technology', 0),
('96', 'Vikas Dave', 'ug2019tiniot225', 'vikas5244dave@gmail.com', 'vikasd7963', 'Information Technology', 0),
('97', 'Yashraj Singh Shaktawat', 'ug2019tiniot226', 'yashraj7876@gmail.com', 'yashra6470', 'Information Technology', 0),
('98', 'Yashwant Bokadia', 'ug2019tiniot227', 'bokadiayashwant@gmail.com', 'yashwa5738', 'Information Technology', 0),
('99', 'Yogini Chaturvedi', 'ug2019tiniot228', 'yoginichaturvedi14@gmail.com', 'yogini2729', 'Information Technology', 0),
('100', 'Yuvraj Singh Chundawat', 'ug2019tiniot229', 'singhyuvraj.151@gmail.com', 'yuvraj9169', 'Information Technology', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
