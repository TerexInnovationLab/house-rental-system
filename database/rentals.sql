-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2026 at 12:03 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
CREATE TABLE IF NOT EXISTS `amenities` (
  `amenity_id` int NOT NULL AUTO_INCREMENT,
  `amenity_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`amenity_id`),
  UNIQUE KEY `amenity_name` (`amenity_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `application_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `status` enum('submitted','under_review','approved','declined') COLLATE utf8mb4_unicode_ci DEFAULT 'submitted',
  `applied_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`application_id`),
  KEY `property_id` (`property_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_profiles`
--

DROP TABLE IF EXISTS `customer_profiles`;
CREATE TABLE IF NOT EXISTS `customer_profiles` (
  `customer_id` int NOT NULL,
  `preferred_location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `customer_id` int NOT NULL,
  `property_id` int NOT NULL,
  PRIMARY KEY (`customer_id`,`property_id`),
  KEY `property_id` (`property_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landlord_profiles`
--

DROP TABLE IF EXISTS `landlord_profiles`;
CREATE TABLE IF NOT EXISTS `landlord_profiles` (
  `landlord_id` int NOT NULL,
  `verification_status` enum('pending','verified','rejected') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  PRIMARY KEY (`landlord_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leases`
--

DROP TABLE IF EXISTS `leases`;
CREATE TABLE IF NOT EXISTS `leases` (
  `lease_id` int NOT NULL AUTO_INCREMENT,
  `application_id` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `rent` decimal(10,2) DEFAULT NULL,
  `lease_document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lease_id`),
  UNIQUE KEY `application_id` (`application_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_requests`
--

DROP TABLE IF EXISTS `maintenance_requests`;
CREATE TABLE IF NOT EXISTS `maintenance_requests` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('open','in_progress','completed') COLLATE utf8mb4_unicode_ci DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`),
  KEY `property_id` (`property_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int NOT NULL AUTO_INCREMENT,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `notification_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notification_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `lease_id` int NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_type` enum('rent','deposit') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('paid','pending','late') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  PRIMARY KEY (`payment_id`),
  KEY `lease_id` (`lease_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `property_id` int NOT NULL AUTO_INCREMENT,
  `landlord_id` int NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `rent` decimal(10,2) NOT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `location` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedrooms` int DEFAULT NULL,
  `availability_date` date DEFAULT NULL,
  `status` enum('available','occupied','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`property_id`),
  KEY `landlord_id` (`landlord_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_amenities`
--

DROP TABLE IF EXISTS `property_amenities`;
CREATE TABLE IF NOT EXISTS `property_amenities` (
  `property_id` int NOT NULL,
  `amenity_id` int NOT NULL,
  PRIMARY KEY (`property_id`,`amenity_id`),
  KEY `amenity_id` (`amenity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_photos`
--

DROP TABLE IF EXISTS `property_photos`;
CREATE TABLE IF NOT EXISTS `property_photos` (
  `photo_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `property_id` (`property_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `rating` int DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_id`),
  KEY `property_id` (`property_id`),
  KEY `customer_id` (`customer_id`)
) ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `role_name` (`role_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','suspended','banned') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `viewings`
--

DROP TABLE IF EXISTS `viewings`;
CREATE TABLE IF NOT EXISTS `viewings` (
  `viewing_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `viewing_date` datetime NOT NULL,
  `status` enum('requested','confirmed','declined','completed') COLLATE utf8mb4_unicode_ci DEFAULT 'requested',
  PRIMARY KEY (`viewing_id`),
  KEY `property_id` (`property_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
