-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql-1:3306
-- Generation Time: Feb 05, 2025 at 05:32 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `category`, `cover_image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vel.', 'Elvis Gusikowski', 'Comedy', 'cover_images/peter-pan-cover201.jpg', 'I COULD NOT SWIM--\" you can\'t help it,\' she said this, she came upon a Gryphon, lying fast asleep.', '2025-02-05 00:45:18', '2025-02-05 00:45:18'),
(2, 'Enim.', 'Rosa Von DVM', 'Romance', 'cover_images/45585256013b968.jpg', 'Hatter trembled so, that Alice quite hungry to look for her, and said, \'It was a body to cut it.', '2025-02-05 00:45:18', '2025-02-05 00:45:18'),
(3, 'Hic.', 'Mrs. Lauriane Kunze III', 'Educational', 'cover_images/cd12f8daa7ace9a5cfd4b77c7448ee9a.jpg', 'King. \'Nothing whatever,\' said Alice. \'Well, I can\'t quite follow it as well as she said this, she.', '2025-02-05 00:45:18', '2025-02-05 00:45:18'),
(4, 'Quos.', 'Noe Sawayn', 'Adventure', 'cover_images/45585256013b968.jpg', 'Dinah! I wonder if I would talk on such a neck as that! No, no! You\'re a serpent; and there\'s no.', '2025-02-05 00:45:18', '2025-02-05 00:45:18'),
(5, 'Ut.', 'Dorris Grant', 'Thriller', 'cover_images/6d6cd2b7b4b7430e3e0bdee5a0bd8319.jpg', 'He sent them word I had it written down: but I hadn\'t quite finished my tea when I breathe\"!\' \'It.', '2025-02-05 00:45:18', '2025-02-05 00:45:18'),
(6, 'Vel.', 'Lizeth Quitzon', 'Romance', 'cover_images/cd12f8daa7ace9a5cfd4b77c7448ee9a.jpg', 'After a while she was losing her temper. \'Are you content now?\' said the Gryphon. \'Turn a.', '2025-02-05 00:45:18', '2025-02-05 00:45:18'),
(7, 'Eos.', 'Cecile Metz DDS', 'Thriller', 'cover_images/45585256013b968.jpg', 'Dodo, pointing to Alice with one eye; \'I seem to be\"--or if you\'d like it put the Lizard as she.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(8, 'Hic.', 'Kristopher Lemke', 'Sci-fi', 'cover_images/flat-lay-summer-concept-with-copy-space.jpg', 'Adventures of hers that you weren\'t to talk about her repeating \'YOU ARE OLD, FATHER WILLIAM,\"\'.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(10, 'Qui.', 'Dane Kozey PhD', 'Adventure', 'cover_images/6d6cd2b7b4b7430e3e0bdee5a0bd8319.jpg', 'Alice ventured to taste it, and finding it very much,\' said Alice; \'that\'s not at all like the.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(11, 'Sunt.', 'Tremaine Ritchie', 'Adventure', 'cover_images/peter-pan-cover201.jpg', 'I wonder if I\'ve been changed for any of them. \'I\'m sure I\'m not particular as to bring but one.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(12, 'Id.', 'Prof. Chandler Daugherty', 'Educational', 'cover_images/6d6cd2b7b4b7430e3e0bdee5a0bd8319.jpg', 'Miss, we\'re doing our best, afore she comes, to--\' At this moment the door and found herself.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(13, 'Qui.', 'Keyon Gleichner', 'Sci-fi', 'cover_images/flat-lay-summer-concept-with-copy-space.jpg', 'She generally gave herself very good height indeed!\' said Alice, swallowing down her anger as well.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(14, 'Iste.', 'Lucile Lockman', 'Adventure', 'cover_images/6d6cd2b7b4b7430e3e0bdee5a0bd8319.jpg', 'Puss,\' she began, in a soothing tone: \'don\'t be angry about it. And yet I wish you wouldn\'t have.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(15, 'Nam.', 'Mr. Felton Murazik DDS', 'Fantasy', 'cover_images/flat-lay-summer-concept-with-copy-space.jpg', 'But she waited patiently. \'Once,\' said the King repeated angrily, \'or I\'ll have you executed.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(16, 'Unde.', 'Eli Ortiz', 'Educational', 'cover_images/6d6cd2b7b4b7430e3e0bdee5a0bd8319.jpg', 'The Caterpillar was the only difficulty was, that anything that looked like the three gardeners.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(17, 'Ut.', 'Sadie Kshlerin', 'Sci-fi', 'cover_images/pngtree-blue-atmospheric-solid-polygon-gradient-background-picture-image_920309.jpg', 'The master was an old conger-eel, that used to know. Let me see: four times seven is--oh dear! I.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(19, 'Aut.', 'Renee Lynch II', 'Sci-fi', 'cover_images/cd12f8daa7ace9a5cfd4b77c7448ee9a.jpg', 'IS the fun?\' said Alice. \'Call it what you were down here with me! There are no mice in the wind.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(21, 'Ett.', 'Lucie Hodkiewicz', 'Sci-fi', 'books/oVzk1BktPFUjCeLDbOwwgh1LxS5gXiua1COi5E9s.jpg', 'I can\'t quite follow it as far down the chimney as she was now about a thousand times as large as.', '2025-02-05 00:45:19', '2025-02-05 03:18:05'),
(22, 'Sit.', 'Dr. Keaton Wuckert', 'Sci-fi', 'cover_images/58344cebb0af1b62fd57eb64ecf2b300.jpg', 'ONE with such sudden violence that Alice quite hungry to look at the sides of it; then Alice.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(23, 'Et.', 'Minerva Block', 'Sci-fi', 'cover_images/cd12f8daa7ace9a5cfd4b77c7448ee9a.jpg', 'Who ever saw in another moment, when she found her head was so much about a foot high: then she.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(24, 'Sit.', 'Prof. Golda Tillman II', 'Adventure', 'cover_images/flat-lay-summer-concept-with-copy-space.jpg', 'I\'d hardly finished the guinea-pigs!\' thought Alice. \'Now we shall get on better.\' \'I\'d rather.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(25, 'Quia.', 'Layne Little', 'Comedy', 'cover_images/58344cebb0af1b62fd57eb64ecf2b300.jpg', 'I can kick a little!\' She drew her foot slipped, and in despair she put it. She went in without.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(26, 'Amet.', 'Angel Dare', 'Educational', 'cover_images/flat-lay-summer-concept-with-copy-space.jpg', 'Queen. \'I haven\'t the slightest idea,\' said the Duchess. \'Everything\'s got a moral, if only you.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(27, 'Ut.', 'Marcella Mante', 'Sci-fi', 'cover_images/pngtree-blue-atmospheric-solid-polygon-gradient-background-picture-image_920309.jpg', 'King. \'When did you call it sad?\' And she kept tossing the baby with some surprise that the poor.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(28, 'Qui.', 'Roy Schmitt PhD', 'Thriller', 'cover_images/peter-pan-cover201.jpg', 'Exactly as we were. My notion was that she hardly knew what she was a treacle-well.\' \'There\'s no.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(29, 'Et.', 'Mr. Madyson Kerluke III', 'Thriller', 'cover_images/58344cebb0af1b62fd57eb64ecf2b300.jpg', 'Time!\' \'Perhaps not,\' Alice cautiously replied, not feeling at all anxious to have been a RED.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(30, 'Vel.', 'Jamir Willms IV', 'Comedy', 'cover_images/45585256013b968.jpg', 'I had not got into it), and sometimes she scolded herself so severely as to the little passage.', '2025-02-05 00:45:19', '2025-02-05 00:45:19'),
(31, 'Carriage', 'Unknown', 'Fantasy', 'cover_images/3EclH9vgxnvaTlnkf86wVryjUYCU9PGyWyX3VSd4.jpg', 'A carriage at night', '2025-02-05 00:45:53', '2025-02-05 00:45:53'),
(32, 'Lanterns', 'Author', 'Romance', 'books/kVsO2vufSiBzSgETCJZZecKrZmYJOmFe4mDYrT2l.jpg', 'author@example.com can manage this book.', '2025-02-05 04:21:23', '2025-02-05 04:23:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
