-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2023 at 01:46 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `womensgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `addemployee`
--

CREATE TABLE IF NOT EXISTS `addemployee` (
  `employeeid` varchar(50) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `teamlocation` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addemployee`
--

INSERT INTO `addemployee` (`employeeid`, `employeename`, `gender`, `contactnumber`, `emailid`, `address`, `teamname`, `teamlocation`, `username`, `password`) VALUES
(' 1', 'sabari', 'Male', '9003670809', 'sabari@gmail.com', 'Coimbatore', 'Lotus', 'Gandhipuram', 'sabari', 'sabari'),
(' 2', 'Vasanth', 'Male', '7708029339', 'vasanth@gmail.com', 'Coimbatore', 'Lilly', 'Ganapathy', 'vasanth', 'vasanth');

-- --------------------------------------------------------

--
-- Table structure for table `addfeedback`
--

CREATE TABLE IF NOT EXISTS `addfeedback` (
  `feedbackid` int(20) NOT NULL,
  `feedbackname` varchar(30) NOT NULL,
  `memberid` varchar(20) NOT NULL,
  `membername` varchar(30) NOT NULL,
  `teamname` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfeedback`
--

INSERT INTO `addfeedback` (`feedbackid`, `feedbackname`, `memberid`, `membername`, `teamname`, `description`) VALUES
(1, ' 22-03-2023', '1', ' Sumithra', ' Lotous', 'useful website');

-- --------------------------------------------------------

--
-- Table structure for table `addmeeting`
--

CREATE TABLE IF NOT EXISTS `addmeeting` (
  `meetingid` int(20) NOT NULL,
  `meetingdate` varchar(20) NOT NULL,
  `teamname` varchar(30) NOT NULL,
  `meetingplace` varchar(100) NOT NULL,
  `guestname` varchar(30) NOT NULL,
  `membersdetails` varchar(100) NOT NULL,
  `totalmembers` varchar(30) NOT NULL,
  `meetingdescriptions` varchar(100) NOT NULL,
  `starttime` varchar(30) NOT NULL,
  `endtime` varchar(30) NOT NULL,
  `meetinglink` varchar(50) NOT NULL,
  `meetingimage` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmeeting`
--

INSERT INTO `addmeeting` (`meetingid`, `meetingdate`, `teamname`, `meetingplace`, `guestname`, `membersdetails`, `totalmembers`, `meetingdescriptions`, `starttime`, `endtime`, `meetinglink`, `meetingimage`) VALUES
(1, ' 03-04-2023', 'Lotous', 'Akshaya Hall Saravanampatti', 'Arun', 'Sumithra,Devi,Priya,\r\nAnjali,Suhasini', '5', 'self motivation meeting', '11am', '4pm', 'www.onlinelink.com', 0x31322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE IF NOT EXISTS `addmember` (
  `memberid` int(20) NOT NULL,
  `membername` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadharnumber` varchar(50) NOT NULL,
  `nomineename` varchar(50) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `loanname` varchar(50) NOT NULL,
  `loanamount` varchar(50) NOT NULL,
  `totalmonths` varchar(50) NOT NULL,
  `dueamount` varchar(50) NOT NULL,
  `duedate` varchar(50) NOT NULL,
  `proofdetails` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`memberid`, `membername`, `gender`, `contact`, `emailid`, `address`, `aadharnumber`, `nomineename`, `teamname`, `employeename`, `loanname`, `loanamount`, `totalmonths`, `dueamount`, `duedate`, `proofdetails`, `image`) VALUES
(1, 'Sumithra', 'Female', '9629444242', 'sumithra@gmail.com', 'Coimbatore', '89562314700', 'Prakash', 'Lotous', 'sabari', 'Tailaring', '100000', '36', '2780', '22-03-2023', 'aadharcard,pan card', 0x61625f696d672e6a7067),
(2, 'Devi', 'Female', '9629444242', 'devi@gmail.com', 'Coimbatore', '7894561230', 'Sabari', 'Lotous', 'Vasanth', 'Tailaring', '200000', '36', '1500', '04-04-2023', 'bank pass book', 0x31332e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `addpayment`
--

CREATE TABLE IF NOT EXISTS `addpayment` (
  `paymentid` int(20) NOT NULL,
  `paymentdate` varchar(20) NOT NULL,
  `memberid` int(20) NOT NULL,
  `membername` varchar(30) NOT NULL,
  `teamname` varchar(30) NOT NULL,
  `loanname` varchar(50) NOT NULL,
  `loanamount` varchar(30) NOT NULL,
  `dueamount` varchar(30) NOT NULL,
  `duecount` varchar(30) NOT NULL,
  `collectionamount` varchar(30) NOT NULL,
  `paymentreceipt` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpayment`
--

INSERT INTO `addpayment` (`paymentid`, `paymentdate`, `memberid`, `membername`, `teamname`, `loanname`, `loanamount`, `dueamount`, `duecount`, `collectionamount`, `paymentreceipt`) VALUES
(1, ' 22-03-2023', 1, 'sumi', ' Lotous', 'Tailaring', ' 100000', ' 2780', '1', '2780', '');

-- --------------------------------------------------------

--
-- Table structure for table `addteam`
--

CREATE TABLE IF NOT EXISTS `addteam` (
  `teamid` varchar(50) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `teamtype` varchar(50) NOT NULL,
  `totalmembers` varchar(50) NOT NULL,
  `loanname` varchar(50) NOT NULL,
  `amountlimit` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `indivuduallimit` varchar(50) NOT NULL,
  `timeduration` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addteam`
--

INSERT INTO `addteam` (`teamid`, `teamname`, `teamtype`, `totalmembers`, `loanname`, `amountlimit`, `description`, `indivuduallimit`, `timeduration`) VALUES
(' 1', 'Lotous', 'Embroidery', '20', 'Tailaring', '2000000', 'this group for physically disabled peoples', '100000', '24months'),
(' 2', 'Lilly', 'Embroidery', '20', 'Tailaring', '1500000', 'this group for textitle peoples support', '1000000', '36month');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registerid` varchar(50) NOT NULL,
  `registername` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `registerid`, `registername`) VALUES
('Admin', 'Admin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `registerid` varchar(50) NOT NULL,
  `registername` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registerdate` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`registerid`, `registername`, `gender`, `contactnumber`, `emailid`, `address`, `username`, `password`, `registerdate`) VALUES
(' 1', 'Sumithra', 'Female', '9629568909', 'sumidevi@gmail.com', 'Coimbatore', 'sumi', 'devi', '05-04-2023'),
(' 2', 'Induja', 'Female', '7358588185', '1832j08@kgcas.com', 'Chennai', 'induja', 'indu14', '05-04-2023');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
