-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 12, 2025 at 03:14 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: gallery
--

-- --------------------------------------------------------

--
-- Table structure for table artists
--

CREATE TABLE artists (
  id int UNSIGNED NOT NULL,
  name varchar(300) NOT NULL,
  lifedates varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  background varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table artists
--

INSERT INTO artists (id, name, lifedates, background) VALUES
(1, 'Wassily Kandinsky', '1866 – 1944', 'He is a Russian painter and theorist, credited as a pioneer of abstract art.'),
(2, 'Pablo Picasso', '1881 - 1973', 'Picasso\'s work evolved across multiple styles, but he is best known for pioneering Cubism and his politically charged artworks.'),
(3, 'Salvador Dalí', '1904 – 1989', 'Dalí was a Spanish surrealist known for his bizarre, dreamlike imagery and technical precision.'),
(4, 'Henri Matisse', '1869 – 1954', 'Henri was a French artist known for his bold use of color and as a leading figure in Fauvism. His work evolved from expressive paintings to abstract forms, making him one of the most influential modern artists.'),
(5, 'Edvard Munch', '1863 – 1944', 'Edvard was a Norwegian Symbolist and Expressionist painter, exploring themes of anxiety and existentialism.'),
(6, 'Vincent van Gogh', '1853 – 1890', 'Vincent was a Dutch Post-Impressionist painter, known for his expressive brushwork and emotional intensity.');

-- --------------------------------------------------------

--
-- Table structure for table paintings
--

CREATE TABLE paintings (
  id int UNSIGNED NOT NULL,
  title varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  artist_id int UNSIGNED NOT NULL,
  publishedyear varchar(200) NOT NULL,
  image_url varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table paintings
--

INSERT INTO paintings (id, title, artist_id, publishedyear, image_url) VALUES
(1, 'Composition VII', 1, '1913', 'composition-VII.png'),
(2, 'Guernica', 2, '1937', 'guernica.jpeg'),
(3, 'Les Demoiselles d’Avignon', 2, '1907', 'les-demoiselles-d’avignon.jpg'),
(4, 'The Persistence of Memory', 3, '1931', 'the-persistence-of-memory.jpg'),
(5, 'The Red Studio', 4, '1911', 'the-red-Studio.jpg'),
(6, 'The Scream', 5, '1893', 'the-scream.jpeg'),
(7, 'The Starry Night', 6, '1889', 'the-starry night.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table artists
--
ALTER TABLE artists
  ADD PRIMARY KEY (id);

--
-- Indexes for table paintings
--
ALTER TABLE paintings
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table artists
--
ALTER TABLE artists
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table paintings
--
ALTER TABLE paintings
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
