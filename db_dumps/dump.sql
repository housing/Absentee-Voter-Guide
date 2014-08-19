-- MySQL dump 9.11
--
-- Host: localhost    Database: ethyl
-- ------------------------------------------------------
-- Server version	4.0.21-log

--
-- Table structure for table `absentees`
--

CREATE TABLE `absentees` (
  `id` int(11) NOT NULL auto_increment,
  `input1` text,
  `input2` text,
  `input3` text,
  `input4` text,
  `input5` text,
  `state` varchar(5) default NULL,
  `input6` text,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

--
-- Dumping data for table `absentees`
--


