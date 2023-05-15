DROP DATABASE if EXISTS db_video2;

CREATE DATABASE db_video2;

USE db_video2;

CREATE TABLE `db` (
  `id` int(100) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_location` varchar(255) NOT NULL,
  `subs` varchar(255) NOT NULL,
  `subs_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

  INSERT INTO `db` (`id`, `video`, `video_location`, `subs`, `subs_location`) VALUES
(1, 'The Three Billy Goats Gruff.mp4', '../videos/The Three Billy Goats Gruff.mp4', 'The Three Billy Goats Gruff.vtt', '../subtitles/The Three Billy Goats Gruff.vtt'),
(2, 'Bedtime for Gus.mp4', '../videos/Bedtime for Gus.mp4', 'Bedtime For Gus.vtt', '../subtitles/Bedtime For Gus.vtt');

ALTER TABLE `db`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;