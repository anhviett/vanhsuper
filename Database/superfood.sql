-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2021 lúc 08:59 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `superfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_news_tag`
--

CREATE TABLE `link_news_tag` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `link_news_tag`
--

INSERT INTO `link_news_tag` (`id`, `news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(37, 15, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(38, 15, 10, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(39, 15, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(40, 16, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(41, 16, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(42, 16, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(43, 16, 7, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(44, 3, 13, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(45, 3, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(46, 3, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(47, 3, 8, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(48, 4, 12, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(49, 4, 13, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(50, 4, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(51, 4, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(52, 4, 7, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(53, 4, 11, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(54, 5, 12, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(55, 5, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(56, 5, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(57, 5, 7, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(58, 5, 11, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(59, 14, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(60, 14, 10, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(61, 14, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(62, 14, 8, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(63, 14, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(64, 6, 13, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(65, 6, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(66, 6, 10, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(67, 6, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(68, 6, 8, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(69, 13, 12, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(70, 13, 13, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(71, 13, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(72, 13, 10, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(73, 13, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(74, 13, 7, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(75, 13, 11, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(76, 11, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(77, 11, 10, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(78, 11, 15, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(79, 11, 8, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(80, 11, 14, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(81, 11, 7, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(82, 10, 9, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(83, 10, 8, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(84, 10, 7, '2021-03-10 02:54:06', '2021-03-10 02:54:19'),
(85, 18, 7, '2021-03-09 20:54:29', '2021-03-09 20:54:29'),
(86, 18, 8, '2021-03-09 20:54:29', '2021-03-09 20:54:29'),
(87, 18, 9, '2021-03-09 20:54:29', '2021-03-09 20:54:29'),
(88, 17, 9, '2021-03-09 21:34:44', '2021-03-09 21:34:44'),
(89, 17, 10, '2021-03-09 21:34:44', '2021-03-09 21:34:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_role_permission`
--

CREATE TABLE `link_role_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `link_role_permission`
--

INSERT INTO `link_role_permission` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(205, 2, 6, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(206, 2, 8, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(207, 2, 7, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(208, 2, 5, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(209, 2, 2, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(210, 2, 4, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(211, 2, 3, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(212, 2, 1, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(213, 2, 10, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(214, 2, 12, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(215, 2, 11, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(216, 2, 9, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(217, 2, 14, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(218, 2, 16, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(219, 2, 15, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(220, 2, 13, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(221, 15, 6, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(222, 15, 2, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(223, 15, 13, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(246, 1, 2, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(247, 1, 3, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(248, 1, 4, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(249, 1, 5, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(250, 1, 6, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(251, 1, 7, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(252, 1, 8, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(253, 1, 9, '2021-03-10 03:42:05', '2021-03-10 03:42:05'),
(254, 1, 13, '2021-03-10 03:42:05', '2021-03-10 03:42:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `author`, `category_id`, `images`, `date`, `created_at`, `updated_at`) VALUES
(3, 'qưdqwd  ds ssds q', 'qdwqwd', '<p>qưdqwdqw</p>\r\n', 'Huy', 4, '../../../../public/admin/assets/images/newsImages/6040ab03ee61b.jpg', '2021-01-30 12:32:58', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(4, 'sadasd', 'qưdqw', '<p>qưeqweq</p>\r\n', 'Ád', 4, '../../../../public/admin/assets/images/newsImages/6040aafb027ae.jpg', '2021-01-30 12:42:26', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(5, 'dqwq', 'qưdqwd', '<p>dqwdqdqw</p>\r\n', 'qưeqwe', 4, '../../../../public/admin/assets/images/newsImages/6040aaf43ae5d.jpg', '2021-01-30 12:48:21', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(6, 'test', 'test testt', '<p>llsadascnanoeqcqefcqcbkbvybc,yxbajcasncqcnoicxc .s;SM</p>\r\n', 'sdncacaskc', 5, '../../../../public/admin/assets/images/newsImages/6040aaed9ddec.jpg', '2021-02-08 10:36:54', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(10, 'ádasda', 'sdqwdqwd', '<p>&aacute;dasd<strong>&aacute;dasdaqw<em>&egrave;qefefe</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'sadasd', 4, '../../../../public/admin/assets/images/newsImages/6040aae71b57f.jpg', '2021-03-01 05:18:14', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(11, 'đâs sca ae dứ', 'fewfefwe', '<h1>xin ch&agrave;o</h1>\r\n\r\n<p><strong><em>hưng hahaha</em></strong></p>\r\n', 'fefwfe', 4, '../../../../public/admin/assets/images/newsImages/6040aae041c62.jpg', '2021-03-01 05:19:37', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(13, 'táo', 'ưqwqdqwdqw', '<p>hfdshsfdkjadsiucashlnshcslkdioqdkcdoiasldqoiads</p>\r\n', 'ádasdasd', 4, '../../../../public/admin/assets/images/newsImages/6040aad9394fe.jpg', '2021-03-03 14:18:50', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(14, 'kkskkx', 'ad', '<p>hihihih xin ch&agrave;o sasscxycy</p>\r\n', 'kkaslsacxy', 8, '../../../../public/admin/assets/images/newsImages/60437e1de8ebd.jpg', '2021-03-03 15:16:44', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(15, 'ấdsdqw', 'qdwqwdqwd', '<p>fvwefsdgdsdvvcsfcycdas</p>\r\n', '3223423', 5, '../../../../public/admin/assets/images/newsImages/60437e278d4bd.jpg', '2021-03-03 15:17:09', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(16, 'fergfeffwdscsdfvf', 'dsgfdsgsdfsdf', '<p>ewfwdfsdfdsaf ừ ứd</p>\r\n', 'gg3gw', 6, '../../../../public/admin/assets/images/newsImages/60437e326480a.jpg', '2021-03-03 15:17:31', '2021-03-10 02:52:52', '2021-03-10 02:53:08'),
(18, 'test', 'test', '<p>test</p>\r\n', 'test', 5, '', NULL, '2021-03-09 20:54:29', '2021-03-09 20:54:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(4, 'Ngoài nước', 0, '2021-03-09 17:15:55', '2021-03-09 11:15:55'),
(5, 'Thể thao', 0, '2021-03-09 17:06:18', '2021-03-09 17:06:51'),
(6, 'Bóng đá', 5, '2021-03-09 17:06:18', '2021-03-09 17:06:51'),
(7, 'Trong nước', 0, '2021-03-09 17:06:18', '2021-03-09 17:06:51'),
(8, 'Thời sự', 0, '2021-03-09 17:06:18', '2021-03-09 17:06:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_tags`
--

CREATE TABLE `news_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news_tags`
--

INSERT INTO `news_tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'Thời sự', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(8, 'Thế giới', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(9, 'Pháp luật', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(10, 'Sức khỏe', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(11, 'Đời sống', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(12, 'Du lịch', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(13, 'Khoa học', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(14, 'Thể thao', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(15, 'Tâm sự', '2021-03-09 17:29:38', '2021-03-09 17:29:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'product_view', 'Xem sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(2, 'product_add', 'Thêm sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(3, 'product_edit', 'Sửa sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(4, 'product_delete', 'Xóa sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(5, 'post_view', 'Xem bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(6, 'post_add', 'Thêm bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(7, 'post_edit', 'Sửa bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(8, 'post_delete', 'Xóa bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(9, 'role_view', 'Xem quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(10, 'role_add', 'Thêm quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(11, 'role_edit', 'Sửa quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(12, 'role_delete', 'Xóa quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(13, 'user_view', 'Xem người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(14, 'user_add', 'Thêm người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(15, 'user_edit', 'Sửa người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(16, 'user_delete', 'Xóa người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'nv_nhap_lieu', 'Nhân viên nhập liệu', '2021-03-09 17:50:53', '2021-03-09 17:51:10'),
(2, 'quan_ly', 'Quản lý', '2021-03-09 17:50:53', '2021-03-09 17:51:10'),
(15, '', 'Ăn hại', '2021-03-09 17:50:53', '2021-03-09 17:51:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `images`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`, `is_active`, `status`, `role_id`) VALUES
(18, '../../../../public/admin/assets/images/userImages/603cbb52836c9.jpg', 'Huy', 'Đào', 'namhuydao@tutamail.com', '164d5fdfd02634293161afac4cf47299', '2021-01-27 03:01:30', '2021-03-11 01:24:51', 1, 1, 2),
(23, '', 'huy', 'ádasdasd', 'lackilu1ke@tutamail.com', '46e44aa0bc21d8a826d79344df38be4b', '2021-03-01 03:53:04', '2021-03-09 09:02:14', 1, 1, 15),
(24, '../../../../../webadmin/public/admin/assets/images/userImages/603f0a78c9eb2.jpg', 'Vũ', 'Hưng', 'vanvthy@gmail.com', '2b4110cde52d9be3748854a44e1105af', '2021-03-02 16:03:04', '2021-03-09 09:02:14', 1, 1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `link_news_tag`
--
ALTER TABLE `link_news_tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link_role_permission`
--
ALTER TABLE `link_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `link_news_tag`
--
ALTER TABLE `link_news_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `link_role_permission`
--
ALTER TABLE `link_role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
