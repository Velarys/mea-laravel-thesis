CREATE SCHEMA `mea_db`;

use mea_db;

-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 02:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databasetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` int(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;





-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE IF NOT EXISTS `completed` (
  `id_completed` int(2) NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`id_completed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`id_completed`, `author`) VALUES
(0, 'Patient'),
(1, 'Caregiver'),
(2, 'Caregiver-assisted');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `pain` int(2) NOT NULL,
  `tiredness` int(2) NOT NULL,
  `nausea` int(2) NOT NULL,
  `depression` int(2) NOT NULL,
  `anxiety` int(2) NOT NULL,
  `drowsiness` int(2) NOT NULL,
  `appetite` int(2) NOT NULL,
  `wellbeing` int(2) NOT NULL,
  `sob` int(2) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `other_value` int(2) NOT NULL,
  `completed_by` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `data` (`id`, `user_id`, `pain`, `tiredness`, `nausea`, `depression`, `anxiety`, `drowsiness`, `appetite`, `wellbeing`, `sob`, `other_name`, `other_value`, `completed_by`, `created_at`) VALUES
(1, 2, 5, 6, 7,10, 10, 10, 0, 1, 10, 'Retardism', 10, 0, '2015-12-06 02:00:10');

INSERT INTO `data` (`id`, `user_id`, `pain`, `tiredness`, `nausea`, `depression`, `anxiety`, `drowsiness`, `appetite`, `wellbeing`, `sob`, `other_name`, `other_value`, `completed_by`, `created_at`) VALUES
(2, 2, 2, 3, 9, 1, 2, 0, 10, 4, 1, 'Retardism', 10, 0, '2015-12-07 02:00:10');

INSERT INTO `data` (`id`, `user_id`, `pain`, `tiredness`, `nausea`, `depression`, `anxiety`, `drowsiness`, `appetite`, `wellbeing`, `sob`, `other_name`, `other_value`, `completed_by`, `created_at`) VALUES
(3, 2, 7, 3, 8, 10, 7, 4, 2, 7, 9, 'Evil', 10, 0, '2015-12-08 02:00:10');

INSERT INTO `data` (`id`, `user_id`, `pain`, `tiredness`, `nausea`, `depression`, `anxiety`, `drowsiness`, `appetite`, `wellbeing`, `sob`, `other_name`, `other_value`, `completed_by`, `created_at`) VALUES
(4, 2, 2, 3, 9, 2, 5, 6, 8, 8, 8, 'Gahd Damn', 10, 0, '2015-12-09 02:00:10');

INSERT INTO `data` (`id`, `user_id`, `pain`, `tiredness`, `nausea`, `depression`, `anxiety`, `drowsiness`, `appetite`, `wellbeing`, `sob`, `other_name`, `other_value`, `completed_by`, `created_at`) VALUES
(5, 2, 9, 9, 5, 9, 9, 9, 9, 9, 9, 'Gahd Damn', 10, 1, '2015-12-10 02:00:10');

INSERT INTO `data` (`id`, `user_id`, `pain`, `tiredness`, `nausea`, `depression`, `anxiety`, `drowsiness`, `appetite`, `wellbeing`, `sob`, `other_name`, `other_value`, `completed_by`, `created_at`) VALUES
(6, 2, 9, 9, 5, 9, 9, 9, 9, 9, 9, 'Kuplanism', 3, 1, '2015-12-10 02:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id_edu` int(2) NOT NULL,
  `edu_level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_edu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_edu`, `edu_level`) VALUES
(0, 'None'),
(1, 'Pre-School'),
(2, 'Elementary'),
(3, 'Highschool'),
(4, 'College');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `levelofeducation` int(2) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `remember_token` int(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `sex`, `birthdate`, `address`, `levelofeducation`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tony', 'Stark', 'M', '1990-09-09', 'New York City', 4, 'tony@starkindustries.com', '$2y$10$/9APuKB4M4q7XM1ffMoLUe332zP0Sj/5bmKBWkJT9F/oL8dAp.qre', 1, 0, '2015-11-23 01:18:58', '2015-12-06 02:00:10');

INSERT INTO `users` (`id`, `firstname`, `lastname`, `sex`, `birthdate`, `address`, `levelofeducation`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Jason', 'Jover', 'M', '1990-09-09', 'New York City', 4, 'jason@jover.com', '$2y$10$/9APuKB4M4q7XM1ffMoLUe332zP0Sj/5bmKBWkJT9F/oL8dAp.qre', 1, 0, '2015-11-23 01:18:58', '2015-12-06 02:00:10');

INSERT INTO `users` (`id`, `firstname`, `lastname`, `sex`, `birthdate`, `address`, `levelofeducation`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Mang', 'Kanor', 'M', '1990-09-09', 'New York City', 4, 'wew@wew.com', '$2y$10$/9APuKB4M4q7XM1ffMoLUe332zP0Sj/5bmKBWkJT9F/oL8dAp.qre', 1, 0, '2015-11-23 01:18:58', '2015-12-06 02:00:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
