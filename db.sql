-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 29, 2014 at 01:22 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
`id` int(11) unsigned NOT NULL,
  `todo_id` int(11) DEFAULT NULL,
  `files` varchar(500) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `todo_id`, `files`, `updated_at`, `created_at`, `user`) VALUES
(12, 7, 'zIP1D_7_80baf74895941fef8bc9a63ebfc70d1a4210b51b5bcc4c1f2e65933f595e9a3e-3.jpg', '2014-10-28 17:25:48', '2014-10-28 17:25:48', 1),
(13, 8, 'G4zx9_8_gvOXd_4_html5Logo.png', '2014-10-28 17:32:26', '2014-10-28 17:32:26', 2),
(14, 11, 'QoaQ5_11_nPZR5Ru.png', '2014-10-28 22:58:31', '2014-10-28 22:58:31', 1),
(15, 13, 'Em2cj_13_nPZR5Ru.png', '2014-10-28 23:14:15', '2014-10-28 23:14:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
`id` int(11) unsigned NOT NULL,
  `kullanici` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'murat', '$2y$10$6fD8a1LQfvBUfCXroswE..bMNV0tmJQoMzlRN3NdyNXhtcqk76Ouq', NULL, '2014-10-28 23:14:48', 'nSJxrwteqD07CRGQLmh66gxT3xMCcCQtkpqIcIk1J5emoBOCLPYvj264rjzb'),
(2, 'aysegul', '$2y$10$6fD8a1LQfvBUfCXroswE..bMNV0tmJQoMzlRN3NdyNXhtcqk76Ouq', NULL, '2014-10-28 17:33:04', 'wjYx5Fhn0OAWIIKzeWtKEMYp1mIfzUuuj8q5VfII6YmABB1kFRnyjorQy7xn'),
(3, 'test', '$2y$10$/q5p2JIAZaWW5KoMl9kJf.rAlXdxbAvlWYNx4tfDGFn4l/Z8GcLvq', '2014-10-28 23:10:49', '2014-10-28 23:12:27', '7otBTjoqVbngQsVGGpwmSL3QW3uztxLhQ5gSmQv41cl57dQlvT9CGxBONlGG');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `body` text,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `title`, `body`, `status`, `created_at`, `updated_at`, `user`) VALUES
(8, 'Test ayşegül', 'test ayşegül', 0, '2014-10-28 17:32:17', '2014-10-28 17:32:17', 2),
(12, 'dsad', 'dsad', 0, '2014-10-28 23:11:15', '2014-10-28 23:11:15', 3),
(13, 'Test', 'Test body', 1, '2014-10-28 23:13:40', '2014-10-28 23:14:25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;