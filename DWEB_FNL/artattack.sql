-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2026 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artattack`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `summary` varchar(254) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `summary`, `content`, `created`, `category_id`, `member_id`, `image_id`, `published`) VALUES
(1, 'Neon Grid', 'Digital poster design for tech conference', 'This digital poster is part of a cohesive visual campaign promoting a global technology conference. The design features layered neon grids and dynamic light trails symbolizing data flow, connectivity, and innovation within complex digital systems.', '2026-01-05 02:12:00', 1, 2, 1, 1),
(2, 'Future Forecast', '3D illustration for online fashion editorial', 'Commissioned for a digital fashion magazine, this 3D illustration visualizes emerging trends through stylized virtual garments floating in a surreal cloudscape. Repetition and reflective materials emphasize the predictive power of trend forecasting in digital culture.', '2026-01-10 06:30:00', 3, 2, 2, 1),
(3, 'Virtual Habitat', 'Architectural visualization render', 'This high-resolution 3D render was created for an online architecture publication showcasing modern residential concepts. Designed with realistic lighting and texturing, the digital environment highlights minimalist design principles within immersive virtual spaces.', '2026-01-15 01:45:00', 4, 1, 3, 1),
(4, 'Psychedelic Motion', 'Animated visuals for music streaming platforms', 'This animated digital artwork blends retro color palettes with contemporary motion graphics to promote a new music release across streaming platforms. The looping visuals were optimized for social media engagement and gained significant online traction.', '2026-01-20 08:20:00', 3, 3, 4, 1),
(5, 'Digital Connections', 'Illustrated infographics for psychology blog', 'These vector-based illustrations accompany an online article discussing evolving human relationships in the digital age. The visuals abstractly represent connection, distance, and social drift through interconnected nodes and fragmented compositions.', '2026-01-25 03:10:00', 3, 1, 5, 1),
(6, 'Micro Worlds', 'Macro digital photography series', 'Captured using advanced macro photography techniques and enhanced digitally, this series explores micro-textures and abstract forms. The final images were optimized for high-resolution digital publication.', '2026-02-01 10:00:00', 4, 3, 6, 1),
(7, 'SoundWave Platform', 'Interactive website for music artist', 'This responsive website integrates immersive visuals and seamless audio streaming to create an engaging digital experience. The platform strengthens artist branding while offering fans exclusive content and updates.', '2026-02-05 05:40:00', 2, 2, 7, 1),
(8, 'HealthSync App', 'UI/UX design for wellness application', 'Designed for a digital health startup, this app interface prioritizes clarity, accessibility, and intuitive navigation. The minimalist aesthetic aligns with the brand identity while ensuring a smooth user booking and tracking experience.', '2026-02-08 01:25:00', 2, 3, 8, 1),
(9, 'Coastal Tones', 'Digital photo manipulation series', 'This digital photography project captures coastal landscapes enhanced through duotone color grading and cinematic post-production. The series was created for an online music campaign inspired by oceanic themes.', '2026-02-10 07:15:00', 4, 1, 9, 1),
(10, 'Urban Canvas', 'Large-scale digital mural concept', 'Created as a digital-first mural concept, this artwork was designed for projection mapping and large LED installations. The vibrant composition reflects contemporary urban culture and fashion aesthetics.', '2026-02-12 09:50:00', 3, 2, 10, 1),
(11, 'Cosmic Vortex', 'A futuristic digital art showcase exploring neon gradients and motion design', 'This immersive digital artwork features swirling neon gradients, layered light effects, and experimental typography. The composition emphasizes depth, contrast, and movement to create a visually engaging futuristic atmosphere. Designed as an interactive digital experience, the project demonstrates how motion and color can transform modern visual storytelling.', '2026-02-15 12:10:00', 2, 1, 11, 1),
(12, 'Frozen Echo', 'Digital book cover design', 'This eBook cover design emphasizes atmospheric minimalism with layered textures and cool-toned gradients. The composition reflects the narrative tension of the story while remaining optimized for digital storefront thumbnails.', '2026-02-18 04:05:00', 1, 1, 12, 1),
(13, 'LitSpace Platform', 'Website design for independent publisher', 'Built with a content-first approach, this digital platform allows readers to discover, preview, and share new releases. Strategic UX decisions were informed by audience research and engagement analytics.', '2026-02-20 02:45:00', 2, 3, 13, 1),
(14, 'Echo Album Art', 'Digital packaging for music release', 'This streaming-optimized album artwork uses layered photography and subtle animation loops for digital platforms. The visual identity extends across social banners, thumbnails, and promotional assets.', '2026-02-22 06:30:00', 1, 2, 14, 1),
(15, 'Ocean Dream', 'Digital ocean artwork', 'This digital artwork features a calm ocean scene enhanced with vibrant colors and lighting effects. Created using advanced editing and digital painting techniques, the piece highlights mood, depth, and modern visual storytelling.', '2026-02-25 08:00:00', 4, 1, 15, 1),
(16, 'Fashion UI Design', 'Modern fashion website design', 'This digital design project showcases a clean and responsive fashion website interface. The layout focuses on user experience, smooth navigation, and visually appealing product presentation.', '2026-02-28 03:35:00', 2, 1, 16, 1),
(17, 'Fantasy Character Art', 'Game character digital illustration', 'This project features digitally illustrated fantasy characters designed for games. The artwork emphasizes expressive design, detailed costumes, and animation-ready layers.', '2026-03-02 01:50:00', 3, 3, 17, 1),
(18, 'Creative Brand Website', 'Digital website for creative studio', 'This visually engaging website design uses soft animations and modern typography to present a creative brand online. The layout enhances storytelling through interactive elements.', '2026-03-05 10:15:00', 2, 1, 18, 1),
(19, 'City Light Art', 'Urban digital photo artwork', 'This digital art piece transforms an urban photograph using layered editing and color grading. The design highlights contrast, texture, and modern city aesthetics.', '2026-03-08 05:20:00', 4, 1, 19, 1),
(20, 'Branding Design Kit', 'Digital branding and identity assets', 'This project includes a complete digital branding kit featuring social media templates, digital cards, and clean typography. The design creates a strong and modern visual identity.', '2026-03-10 02:00:00', 1, 2, 20, 1),
(21, 'Color Wave Illustrations', 'Vibrant digital illustration series', 'This collection of digital illustrations uses bold colors and expressive characters. The artwork focuses on creativity, diversity, and modern visual style.', '2026-03-12 11:10:00', 3, 2, 21, 1),
(22, 'Fashion Poster Design', 'Digital poster artwork', 'This digital poster series features strong composition and vibrant colors. Designed for online campaigns, the artwork highlights modern fashion branding.', '2026-03-15 00:45:00', 1, 3, 22, 1),
(23, 'Warm Light Interiors', 'Digital interior photography art', 'This digital photography project enhances interior spaces using cinematic lighting and warm color tones. The artwork creates a cohesive and stylish atmosphere.', '2026-03-18 06:25:00', 4, 1, 23, 1),
(24, 'Travel App Design', 'Interactive digital travel interface', 'This digital design project presents a clean and interactive travel guide interface. It combines modern layout design, visual balance, and user-friendly navigation.', '2026-03-20 12:30:00', 1, 2, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `description` varchar(254) NOT NULL,
  `navigation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `navigation`) VALUES
(1, 'Digital Branding', 'Strategic visual identities for modern brands', 1),
(2, 'UI/UX Design', 'User-centered interfaces and interactive experiences', 1),
(3, 'Digital Illustration', 'Creative visual storytelling through digital art', 1),
(4, 'Digital Photography & Me', 'Enhanced imagery and visual content creation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file` varchar(254) NOT NULL,
  `alt` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file`, `alt`) VALUES
(1, 'neon-grid.jpg', 'Digital poster design with neon grid and light trails'),
(2, 'future-forecast.jpg', '3D rendered fashion illustration in surreal cloudscape'),
(3, 'virtual-habitat.jpg', 'Architectural 3D visualization of modern residence'),
(4, 'psychedelic-motion.jpg', 'Animated retro-inspired digital artwork'),
(5, 'digital-connections.jpg', 'Illustrated infographics for psychology blog'),
(6, 'micro-worlds.jpg', 'Macro digital photograph of abstract textures'),
(7, 'soundwave-platform.jpg', 'Interactive music artist website interface'),
(8, 'healthsync-app.jpg', 'Minimalist wellness app user interface design'),
(9, 'coastal-tones.jpg', 'Digitally enhanced coastal landscape artwork'),
(10, 'urban-canvas.jpg', 'Large-scale digital mural concept design'),
(11, 'cosmic-vortex.jpg', 'Immersive digital art experience showcasing swirling neon gradients, dynamic motion effects, and futuristic typography'),
(12, 'frozen-echo.jpg', 'Atmospheric digital book cover design'),
(13, 'litspace-platform.jpg', 'Independent publisher website interface'),
(14, 'echo-album-art.jpg', 'Digital album artwork for streaming platforms'),
(15, 'ocean-dream.jpg', 'Digital ocean art with vibrant lighting'),
(16, 'fashion-ui-design.jpg', 'Modern fashion website interface design'),
(17, 'fantasy-character-art.jpg', 'Digital fantasy game character illustration'),
(18, 'creative-brand-website.jpg', 'Interactive creative studio website design'),
(19, 'city-light-art.jpg', 'Urban digital photography artwork'),
(20, 'branding-design-kit.jpg', 'Modern digital branding identity assets'),
(21, 'color-wave-illustrations.jpg', 'Vibrant digital illustration series'),
(22, 'fashion-poster-design.jpg', 'Modern digital fashion poster artwork'),
(23, 'warm-light-interiors.jpg', 'Cinematic digital interior photography'),
(24, 'travel-app-design.jpg', 'Interactive digital travel app interface');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `forename` varchar(254) NOT NULL,
  `surname` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `joined` timestamp NOT NULL DEFAULT current_timestamp(),
  `picture` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `forename`, `surname`, `email`, `password`, `joined`, `picture`) VALUES
(1, 'RR', 'Ever', 'RR@eg.link', 'c63j-82ve-2sv9-qlb38', '2021-01-26 04:04:23', 'RR.jpg'),
(2, 'Cy', 'UuuYyy', 'Cy@eg.link', 'saq8-2f2k-3nv7-fa4k', '2021-01-26 04:15:18', 'cy.jpg'),
(3, 'Japoy', 'Mobile', 'Japs@eg.link', 'sk3r-vd92-3vn1-exm2', '2021-02-12 02:53:47', 'Japs.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `author_id` (`member_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `category_exists` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `image_exists` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `member_exists` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
