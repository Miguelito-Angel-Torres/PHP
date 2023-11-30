-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 21:01:30
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mexflix`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movieseries`
--

CREATE TABLE `movieseries` (
  `imdb_id` char(9) NOT NULL,
  `title` varchar(80) NOT NULL,
  `plot` text DEFAULT NULL,
  `author` varchar(100) DEFAULT 'Pending',
  `actors` varchar(100) DEFAULT 'Pending',
  `country` varchar(100) DEFAULT 'Unknown',
  `premiere` year(4) NOT NULL,
  `poster` varchar(150) DEFAULT 'no-poster.jpg',
  `trailer` varchar(150) DEFAULT 'no-trailer.jpg',
  `rating` decimal(2,1) DEFAULT NULL,
  `genres` varchar(50) NOT NULL,
  `mose_statu` int(10) UNSIGNED NOT NULL,
  `category` enum('Movie','Serie') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movieseries`
--

INSERT INTO `movieseries` (`imdb_id`, `title`, `plot`, `author`, `actors`, `country`, `premiere`, `poster`, `trailer`, `rating`, `genres`, `mose_statu`, `category`) VALUES
('tt0380538', 'Matando Cabos', 'In Mexico City, the powerful and violent magnate of steel Oscar Cabos catches his daughter Paulina having sex with her boyfriend and his employee Javier \"Jaque\" and he works Jaque over. On the next day, Jaque pays a visit to Cabos in his office and the angry man comes with a golf club to hit Jaque again. However, Cabos accidentally trips on a golf ball, falls on the floor and faints. Jaque calls his best friend Mudo to help him, but the janitor Nacho finds his boss fainted on the floor and he steals and dresses himself with Cabos\' clothes and jewels. Meanwhile, Nacho\'s son Botcha and his friend Nico have planned to kidnap Cabos and they are waiting for him in the parking garage. When he walks in the parking garage, the two kidnappers hit him on the back of the head, believing that he is Cabos, they cover his head with a bag. They head with the abducted man to the house of Botcha\'s girlfriend Lula. Meanwhile, Jaque and Mudo calls their wrestler friend Ruben \"Mascarita\" and his midget partner Tony \'El Canibal\' to help them to get rid of Cabos in his birthday party. But both plans do not work well along the night.', 'Alejandro Lozano', 'Tony Dalton, Ana Claudia Talancón, Pedro Armendáriz Jr., Kristoff', 'México', 2004, 'https://www.youtube.com/watch?v=nujJ3sXSU18', 'http://ia.media-imdb.com/images/M/MV5BMTI2MzUzNTc1N15BMl5BanBnXkFtZTcwOTM1NzYyMQ@@._V1_SX300.jpg', '7.6', 'Action, Adventure, Comedy', 2, 'Movie'),
('tt0455275', 'Prison Break', 'Due to a political conspiracy, an innocent man is sent to death row and his only hope is his brother who makes it his mission to deliberately get himself sent to the same prison in order to break the both of them from the inside out.', 'Paul Scheuring', 'Dominic Purcell, Wentworth Miller, Amaury Nolasco, Robert Knepper', 'USA', 2005, 'https://www.youtube.com/watch?v=AL9zLctDJaU', 'http://ia.media-imdb.com/images/M/MV5BMTg3NTkwNzAxOF5BMl5BanBnXkFtZTcwMjM1NjI5MQ@@._V1_SX300.jpg', '8.5', 'Action, Crime, Drama', 4, 'Serie'),
('tt0468569', 'The Dark Knight', 'Batman raises the stakes in his war on crime. With the help of Lieutenant Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the city streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as The Joker.', 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart, Michael Caine', 'USA, UK', 2008, 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 'http://ia.media-imdb.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SX300.jpg', '9.0', 'Action, Crime, Drama', 2, 'Movie'),
('tt0479143', 'Rocky Balboa', 'Thirty years after the ring of the first bell, Rocky Balboa comes out of retirement and dons his gloves for his final fight; against the reigning heavyweight champ Mason \'The Line\' Dixon.', 'Sylvester Stallone', 'Sylvester Stallone, Burt Young, Antonio Tarver, Geraldine Hughes', 'USA', 2006, 'https://www.youtube.com/watch?v=8tab8fK2_3w', 'http://ia.media-imdb.com/images/M/MV5BMTM2OTUzNDE3NV5BMl5BanBnXkFtZTcwODczMzkzMQ@@._V1_SX300.jpg', '7.2', 'Drama, Sport', 2, 'Movie'),
('tt0851851', 'Terminator: The Sarah Connor Chronicles', 'This series is set after the events of Terminator 2: Judgment Day (1991). After the sacrifices of Dr. Miles Dyson and T-800 Model 101 Terminator, the Connors find themselves once again being stalked by Skynet\'s agents from the future. Realizing their nightmare isn\'t over, they decide to stop running and focus on preventing the birth of Skynet. With the aid of Cameron Phillips, a beautiful girl who has a mysterious past also linked to the future; Derek Reese, a Tech-Com soldier from the future whose past is linked with the Connors; Riley, a beautiful schoolfriend of John; and FBI Agent James Ellison, who was assigned to capture the Connors but joins them after his own encounter with one of the machines. They begin a quest to stop the United States military and a shadowy conspiracy from the future from creating the program that will stop at nothing to bring humanity to an end.', 'Josh Friedman', 'Lena Headey, Thomas Dekker, Summer Glau, Richard T. Jones', 'USA', 2008, 'https://www.youtube.com/watch?v=i0fXTDI1egY', 'http://ia.media-imdb.com/images/M/MV5BMTMyNjA5ODIxM15BMl5BanBnXkFtZTcwMTA1MjU1MQ@@._V1_SX300.jpg', '7.7', 'Action, Drama, Sci-Fi', 5, 'Serie'),
('tt0903747', 'Breaking Bad', 'A chemistry teacher diagnosed with terminal lung cancer teams up with his former student to cook and sell crystal meth.', 'Vince Gilligan', 'Bryan Cranston, Anna Gunn, Aaron Paul, Dean Norris', 'USA', 2008, 'https://www.youtube.com/watch?v=--z4YzxlT8o', 'http://ia.media-imdb.com/images/M/MV5BMTQ0ODYzODc0OV5BMl5BanBnXkFtZTgwMDk3OTcyMDE@._V1_SX300.jpg', '9.5', 'Crime, Drama, Thriller', 4, 'Serie'),
('tt1010048', 'Slumdog Millionaire', '', 'Danny Boyle, Loveleen Tandan', 'Dev Patel, Saurabh Shukla, Anil Kapoor, Rajendranath Zutshi', 'UK, USA', 2008, 'https://www.youtube.com/watch?v=AIzbwV7on6Q', 'http://ia.media-imdb.com/images/M/MV5BMTU2NTA5NzI0N15BMl5BanBnXkFtZTcwMjUxMjYxMg@@._V1_SX300.jpg', '8.0', 'Drama, Romance', 2, 'Movie'),
('tt1442449', 'Spartacus', 'Watch the story of history\'s greatest gladiator unfold with graphic violence and the passions of the women that love them. This is Spartacus.', 'Steven S. DeKnight', 'Andy Whitfield, Manu Bennett, Daniel Feuerriegel, Peter Mensah, Lucy Lawless', 'USA, New Zealand', 2013, 'https://www.youtube.com/watch?v=ptX_pjz5s2k', 'http://ia.media-imdb.com/images/M/MV5BOTA2NDU2MzM5Nl5BMl5BanBnXkFtZTcwMTk3Njg3OA@@._V1_SX300.jpg', '8.6', 'Action, Adventure, Biography', 4, 'Serie'),
('tt1520211', 'The Walking Dead', 'Rick Grimes is a former Sheriff\'s deputy who has been in a coma for several months after being shot while on duty. When he awakens he discovers that the world has been ravished by a zombie epidemic of apocalyptic proportions, and that he seems to be the only person still alive. After returning home to discover his wife and son missing, he heads for Atlanta to search for his family. Narrowly escaping death at the hands of the zombies on arrival in Atlanta he is aided by another survivor, Glenn, who takes Rick to a camp outside the town. There Rick finds his wife Lori and his son, Carl, along with his partner/best friend Shane and a small group of survivors who struggle to fend off the zombie hordes; as well as competing with other surviving groups who are prepared to do whatever it takes to survive in this harsh new world.', 'Frank Darabont', 'Andrew Lincoln, Steven Yeun, Chandler Riggs, Norman Reedus', 'USA', 2010, 'https://www.youtube.com/watch?v=R1v0uFms68U', 'http://ia.media-imdb.com/images/M/MV5BMTQ3NzQ2Mzk1OF5BMl5BanBnXkFtZTgwNTAzNjI5NjE@._V1_SX300.jpg', '8.6', 'Drama, Horror', 3, 'Serie'),
('tt1606384', 'My Way', 'In World War II-era Korea, rival runners, one Korean (Jang Dong-gun) and one Japanese (Joe Odagiri), go to war together against the Soviets.', 'Je-kyu Kang', 'Dong-gun Jang, Joe Odagiri, Bingbing Fan, In-kwon Kim', 'South Korea', 2011, 'https://www.youtube.com/watch?v=HpYk5ww8Jjc', 'http://ia.media-imdb.com/images/M/MV5BMjM2MTI4OTc5OF5BMl5BanBnXkFtZTgwNDk1MTAzMjE@._V1_SX300.jpg', '7.8', 'Action, Drama, History', 2, 'Movie'),
('tt2356180', 'Bhaag Milkha Bhaag', 'The true story of the \"Flying Sikh\" - world champion runner and Olympian Milkha Singh -- who overcame the massacre of his family, civil war during the India-Pakistan partition, and homelessness to become one of India\'s most iconic athletes.', 'Rakeysh Omprakash Mehra', 'Farhan Akhtar, Sonam Kapoor, Pavan Malhotra, Art Malik', 'India', 2013, 'https://www.youtube.com/watch?v=u71swQ4ksgI', 'http://ia.media-imdb.com/images/M/MV5BMTY1Nzg4MjcwN15BMl5BanBnXkFtZTcwOTc1NTk1OQ@@._V1_SX300.jpg', '8.3', 'Action, Biography, Drama', 2, 'Movie'),
('tt2431438', 'Sense8', 'Sense8 tells the story of eight strangers: Will (Smith), Riley (Middleton), Capheus (Ameen), Sun (Bae), Lito (Silvestre), Kala (Desai), Wolfgang (Riemelt), and Nomi (Clayton). Each individual is from a different culture and part of the world. In the aftermath of a tragic death they all experience through what they perceive as dreams or visions, they suddenly find themselves growing mentally and emotionally connected. While trying to figure how and why this connection happened and what it means, a mysterious man named Jonas tries to help the eight. Meanwhile, another stranger called Whispers attempts to hunt them down, using the same sensate power to gain full access to a sensate\'s mind (thoughts/sight) after looking into their eyes. Each episode reflects the views of the characters interacting with each other while delving deeper into their backgrounds and what sets them apart and brings them together with the others.', 'J. Michael Straczynski, Andy Wachowski, Lana Wachowski', 'Aml Ameen, Doona Bae, Jamie Clayton, Tina Desai', 'USA', 2015, 'https://www.youtube.com/watch?v=riLgCIvE9aU', 'http://ia.media-imdb.com/images/M/MV5BMTY2MjI4MjkxN15BMl5BanBnXkFtZTgwNjU5Nzk4NTE@._V1_SX300.jpg', '8.4', 'Drama, Mystery, Sci-Fi', 3, 'Serie'),
('tt2527338', 'Star Wars: Episode IX', '', 'Colin Trevorrow', '', 'USA', 2019, '', '', '0.0', 'Action, Adventure, Fantasy', 1, 'Movie'),
('tt2575988', 'Silicon Valley', 'In the high-tech gold rush of modern Silicon Valley, the people most qualified to succeed are the least capable of handling success. A comedy partially inspired by Mike Judge\'s own experiences as a Silicon Valley engineer in the late 1980s.', 'John Altschuler, Mike Judge, Dave Krinsky', 'Thomas Middleditch, T.J. Miller, Josh Brener, Martin Starr', 'USA', 2014, 'https://www.youtube.com/watch?v=69V__a49xtw', 'http://ia.media-imdb.com/images/M/MV5BMjIzMjgwMTQzMV5BMl5BanBnXkFtZTgwNDcyMjczMTE@._V1_SX300.jpg', '8.5', 'Comedy', 3, 'Serie'),
('tt2654620', 'The Strain', 'A thriller that tells the story of Dr. Ephraim Goodweather, the head of the Center for Disease Control Canary Team in New York City. He and his team are called upon to investigate a mysterious viral outbreak with hallmarks of an ancient and evil strain of vampirism. As the strain spreads, Eph, his team, and an assembly of everyday New Yorkers, wage war for the fate of humanity itself.', 'Guillermo del Toro, Chuck Hogan', 'Corey Stoll, David Bradley, Kevin Durand, Richard Sammel', 'USA', 2014, 'https://www.youtube.com/watch?v=RiN8Edb4X2w', 'http://ia.media-imdb.com/images/M/MV5BMjE1MjY3OTg5OV5BMl5BanBnXkFtZTgwOTI1NDcwNjE@._V1_SX300.jpg', '7.5', 'Drama, Horror, Thriller', 3, 'Serie'),
('tt2820466', 'Justice League: The Flashpoint Paradox', 'The Flash finds himself in a war torn alternate timeline and teams up with alternate versions of his fellow heroes to return home and restore the timeline.', 'Jay Oliva', 'Justin Chambers, C. Thomas Howell, Michael B. Jordan, Kevin McKidd', 'USA', 2013, 'https://www.youtube.com/watch?v=xe0JiobQ98o', 'http://ia.media-imdb.com/images/M/MV5BOTM0MDI5NTUwM15BMl5BanBnXkFtZTgwMTEyNTEwMDE@._V1_SX300.jpg', '8.1', 'Animation, Action, Adventure', 2, 'Movie'),
('tt3076658', 'Creed', 'The former World Heavyweight Champion Rocky Balboa serves as a trainer and mentor to Adonis Johnson, the son of his late friend and former rival Apollo Creed.', 'Ryan Coogler', 'Sylvester Stallone, Michael B. Jordan, Tessa Thompson, Graham McTavish', 'USA', 2015, 'https://www.youtube.com/watch?v=Uv554B7YHk4', 'http://ia.media-imdb.com/images/M/MV5BMTg1NDY1MTM0Ml5BMl5BanBnXkFtZTgwMTU4Njg4NjE@._V1_SX300.jpg', '7.9', 'Drama, Sport', 2, 'Movie'),
('tt3489184', 'Constantine', 'A man struggling with his faith is haunted by the sins of his past but is suddenly thrust into the role of defending humanity from the gathering forces of darkness.', 'Daniel Cerone, David S. Goyer', 'Matt Ryan, Harold Perrineau, Angélica Celaya, Charles Halford', 'USA', 2014, 'https://www.youtube.com/watch?v=CNPIG40KcbU', 'http://ia.media-imdb.com/images/M/MV5BMTQ2MzQzMjA2NF5BMl5BanBnXkFtZTgwODg1MTI4MjE@._V1_SX300.jpg', '7.5', 'Drama, Fantasy, Horror', 5, 'Serie'),
('tt4154796', 'Avengers: Infinity War - Part II', '', 'Anthony Russo, Joe Russo', '', 'USA', 2019, '', '', '0.0', 'Action, Sci-Fi', 1, 'Movie'),
('tt4158110', 'Mr. Robot', 'Elliot Alderson, a young cyber-security engineer living in New York who assumes the role of a vigilante hacker by night. Elliot meets a mysterious anarchist known as \"Mr. Robot\" who recruits Elliot to join his team of hackers, \"fsociety\". Elliot, who has a social anxiety disorder and connects to people by hacking them, is intrigued but uncertain if he wants to be part of the group. The show follows Mr. Robot\'s attempts to engage Elliot in his mission to destroy the corporation Elliot is paid to protect. Compelled by his personal beliefs, Elliot struggles to resist the chance to take down the multinational CEOs that are running (and ruining) the world.', ' Sam Esmail', 'Rami Malek, Carly Chaikin, Portia Doubleday, Martin Wallström', 'USA', 2015, 'https://www.youtube.com/watch?v=Ug4fRXGyIak', 'http://ia.media-imdb.com/images/M/MV5BMTg3OTQ2NzAzN15BMl5BanBnXkFtZTgwMDUyNjY3NTE@._V1_SX300.jpg', '9.0', 'Crime, Drama', 3, 'Serie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statu`
--

CREATE TABLE `statu` (
  `status_id` int(10) UNSIGNED NOT NULL,
  `statu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `statu`
--

INSERT INTO `statu` (`status_id`, `statu`) VALUES
(1, 'Coming Soon'),
(2, 'Release'),
(3, 'In Issue'),
(4, 'Finished'),
(5, 'Canceled'),
(9, 'Otro Statuxxs'),
(10, 'Otro Status'),
(12, 'Otro Statudds'),
(13, 'xxxxxxxxxdsdsd'),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(26, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name_` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `pass` char(32) NOT NULL,
  `role_` enum('Admin','User') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_`, `email`, `name_`, `birthday`, `pass`, `role_`) VALUES
('@lucas', 'lucas@gmail.com', 'LUC', '2022-05-15', 'd34010cd8bf23607a1333574a484ae96', 'User'),
('@mariasdadwqeqw', 'usuario@gmail.com', 'Maria', '2002-10-09', '527002242dd53d168e970a98dff70ca2', 'Admin'),
('@miki', 'miguel@gmail.com', 'ML', '2022-01-15', 'e5a645b744af115db81246f77b7ace27', 'Admin'),
('@uSSS', 'usuario@gSSSSmail.com', 'MariaSSS', '2002-10-09', '527002242dd53d168e970a98dff70ca2', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movieseries`
--
ALTER TABLE `movieseries`
  ADD PRIMARY KEY (`imdb_id`),
  ADD KEY `FK_statu_movieseries` (`mose_statu`);
ALTER TABLE `movieseries` ADD FULLTEXT KEY `search` (`title`,`author`,`actors`,`genres`);

--
-- Indices de la tabla `statu`
--
ALTER TABLE `statu`
  ADD PRIMARY KEY (`status_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `statu`
--
ALTER TABLE `statu`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movieseries`
--
ALTER TABLE `movieseries`
  ADD CONSTRAINT `FK_statu_movieseries` FOREIGN KEY (`mose_statu`) REFERENCES `statu` (`status_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
