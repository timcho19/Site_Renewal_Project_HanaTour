-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 25-07-10 05:40
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `hanatour`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `event_board1`
--

CREATE TABLE `event_board1` (
  `idx` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img_url` varchar(500) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `content` text NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `event_board1`
--

INSERT INTO `event_board1` (`idx`, `title`, `img_url`, `period_start`, `period_end`, `content`, `created_time`) VALUES
(1, '[혜택] 하나투어 APP 설치!', 'uploads/img_686f2fdb0a2f56.73708030.png', '2025-07-01', '2026-12-10', 'QR 코드 스캔해서 하나투어 APP 다운받고, 보다 간편하게 최저가 예약하세요', '2025-07-10 12:13:31');

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `idx` int(11) NOT NULL,
  `userid` varchar(245) NOT NULL,
  `username` varchar(145) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `regdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`idx`, `userid`, `username`, `passwd`, `phone`, `regdate`) VALUES
(1, 'zzoa@naver.com', '조아랑', '$2y$10$JkzUl8V5vM.s9DiAptCwzuxtOlJiTOOh2E3bV.EaeEfejLYQaIv2O', '01011111111', '2025-07-10 10:24:57'),
(2, 'handsome@gmail.com', '차은우', '$2y$10$bNuqrh0UILlYWtlLeDwxP.bV.u7/vcTlQEZNd22Q/YTPpUXYX1MbG', '01012341234', '2025-07-10 10:27:26'),
(3, 'djssam@naver.com', '동주쌤', '$2y$10$5gVzPCI2we2W5M.c7VbQk.6VAPUSE4yi.wKuSlmrIhFQpVXSg1OV.', '01000001234', '2025-07-10 10:28:59'),
(4, 'jws@gmail.com', '장원석', '$2y$10$OBUhtcLo80flKmsuMBsM/.RGNzcK8q8nXFmRerdX/Foz8UodpPFHi', '01012340000', '2025-07-10 10:32:54'),
(7, 'test@naver.com', '테스트', '$2y$10$QjiuXVeiXkWwQnNnjV.8P.wy3hhH4YGIgeGgjsRH9uWDBUEJbCGZi', '01011112222', '2025-07-10 11:32:11'),
(8, 'jjw@gmail.com', '정진욱', '$2y$10$8VYCZxj5OQo.YPRCA7RAt.8v8RyaDz5syOzfkQ6x4jxmdHSfd5D.q', '01001231234', '2025-07-10 12:00:42');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `event_board1`
--
ALTER TABLE `event_board1`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `event_board1`
--
ALTER TABLE `event_board1`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
