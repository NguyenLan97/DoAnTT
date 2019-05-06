-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 01:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(10) UNSIGNED NOT NULL,
  `bill_userid` int(10) UNSIGNED NOT NULL,
  `bill_fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_price` double NOT NULL DEFAULT '0',
  `bill_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `bill_userid`, `bill_fullname`, `bill_phone`, `bill_address`, `bill_price`, `bill_status`, `created_at`, `updated_at`) VALUES
(7, 2, 'Nguyễn Lan', '0968954840', 'ABC111', 800, 0, '2019-04-17 15:13:31', '2019-04-17 15:13:31'),
(8, 2, 'Nguyễn Lan', '0968954840', 'ABC111', 800, 0, '2019-04-17 15:23:33', '2019-04-17 15:23:33'),
(9, 2, 'Nguyễn Lan', '0968954840', 'ABC111', 800, 0, '2019-04-17 15:23:33', '2019-04-17 15:23:33'),
(10, 2, 'Nguyễn Lan', '0968954840', 'ABC111', 800, 0, '2019-04-17 15:25:43', '2019-04-17 15:25:43'),
(11, 2, 'Nguyễn Lan', '0968954840', 'Ha Noi', 400, 0, '2019-04-17 16:01:37', '2019-04-17 16:01:37'),
(12, 2, 'Nguyễn Lan', '0968954840', 'Hà Nội 2', 400, 0, '2019-04-17 16:02:26', '2019-04-17 16:02:26'),
(13, 2, 'Nguyễn Lan', '354798980', 'Hải Phòng', 400, 0, '2019-04-17 16:03:35', '2019-04-17 16:03:35'),
(14, 2, 'Nguyễn Lan', '0964575534', 'Hải Dương', 999, 0, '2019-04-17 16:04:44', '2019-04-17 16:04:44'),
(15, 6, 'Trâm Anh', '0968954640', 'Đông Anh - Hà Nội', 850, 0, '2019-04-17 16:56:19', '2019-04-17 16:56:19'),
(16, 2, 'Nguyễn Lan', '096894654', 'Đông Anh', 200, 0, '2019-04-18 01:39:28', '2019-04-18 01:39:28'),
(17, 2, 'Nguyễn Lan', '0968954840', 'Đông Anh', 400, 0, '2019-04-18 01:48:52', '2019-04-18 01:48:52'),
(18, 2, 'Nguyễn Lan', '0968954740', 'Hà Nội', 200, 0, '2019-04-18 02:00:11', '2019-04-18 02:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_id` int(10) UNSIGNED NOT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_price` double(11,0) NOT NULL,
  `prod_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_id`, `prod_id`, `prod_price`, `prod_quantity`) VALUES
(7, 12, 400000, 2),
(8, 12, 400000, 2),
(9, 12, 400000, 2),
(10, 12, 400000, 2),
(12, 13, 200000, 2),
(13, 12, 400000, 1),
(14, 10, 599000, 1),
(14, 12, 400000, 1),
(15, 8, 850000, 1),
(16, 13, 200000, 1),
(17, 12, 400000, 1),
(18, 13, 200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'Nồi điện, Nồi cơm điện', 'noi-dien-noi-com-dien', NULL, '2019-04-03 02:03:58'),
(2, 'Lò nướng, bếp nướng', 'lo-nuong-bep-nuong', NULL, '2019-04-04 07:23:29'),
(3, 'Thiết bị điện nhà bếp', 'thiet-bi-dien-nha-bep', '2019-04-04 07:23:45', '2019-04-04 07:23:45'),
(4, 'Máy xay, máy ép', 'may-xay-may-ep', '2019-04-04 07:23:59', '2019-04-04 07:23:59'),
(5, 'Bếp điện, ấm đun', 'bep-dien-am-dun', '2019-04-04 07:24:41', '2019-04-18 16:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Thị Lan', 'lan@gmail.com', 'Sản phẩm chất lượng', 'Sản phẩm của của hàng rất đẹp và chất lương', '2019-04-21 10:00:06', '2019-04-21 10:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_03_053348_create_category', 1),
(4, '2019_04_04_035035_create_product', 1),
(5, '2019_04_16_000000_create_bill', 1),
(6, '2019_04_16_000001_create_bill_details', 1),
(7, '2019_04_17_210548_news', 2),
(8, '2019_04_20_232555_contact', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_image`, `created_at`, `updated_at`) VALUES
(1, 'Bộ xoong hãng SUPOR', 'Với thiết kế nhỏ gọn, cách nhiệt tốt và giữ nóng tốt.', 'bonoi1.png', NULL, '2019-04-25 07:27:34'),
(2, 'Máy xay sinh tố thiết kế sang trọng', 'Với thiết kế sang trọng và bắt mắt \r\nSản phẩm bán chạy nhất trong tháng vừa qua.', 'mxe2.jpg', '2019-04-20 09:18:08', '2019-04-25 07:26:08'),
(3, 'Máy ép đa năng', 'Máy ép hoa quả rất đẹp, sang trọng và đa năng khiến căn bếp của bạn trở nên tiện lợi hơn', 'mxst4.jpg', '2019-04-25 07:29:21', '2019-04-25 07:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` double NOT NULL,
  `prod_price_promotion` double NOT NULL,
  `prod_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_warranty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_producer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_cap_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_pot_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_status` tinyint(4) NOT NULL,
  `prod_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_featured` tinyint(4) NOT NULL,
  `prod_new` tinyint(4) NOT NULL,
  `prod_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_slug`, `prod_price`, `prod_price_promotion`, `prod_img`, `prod_warranty`, `prod_material`, `prod_capacity`, `prod_producer`, `prod_cap_type`, `prod_pot_type`, `prod_status`, `prod_description`, `prod_featured`, `prod_new`, `prod_cate`, `created_at`, `updated_at`) VALUES
(8, 'Nồi Cơm Điện Niêu Supor CFXB50YB13VN', 'noi-com-dien-nieu-supor-cfxb50yb13vn', 1099000, 850000, 'ncd1.jpg', '12 tháng', 'Nhôm tráng men chống dính', '1.5L - 2L', 'SUPOR', 'Nắp gà', 'Nồi điện tử', 1, '<p><strong>Nồi Cơm Điện Ni&ecirc;u Supor CFXB50YB13VN-50 - 1.8L&nbsp;</strong>c&oacute; kiểu d&aacute;ng nhỏ gọn, m&agrave;u sắc nh&atilde; nhặn ph&ugrave; hợp với mọi kh&ocirc;ng gian bếp. Nồi cơm trang bị với nhiều t&iacute;nh năng th&ocirc;ng minh sẽ mang đến những b&aacute;t cơm thơm ngon, xốp dẻo như cơm được nấu tr&ecirc;n l&ograve; ni&ecirc;u cho bữa cơm th&ecirc;m phần trọn vẹn<strong>.</strong></p>\r\n\r\n<p><strong>Van vi &aacute;p điều chỉnh &aacute;p suất</strong></p>\r\n\r\n<p>Van vi &aacute;p điều chỉnh c&oacute; chức năng điều chỉnh &aacute;p suất tạo điều kiện để cơm được ch&iacute;n nhanh v&agrave; ch&iacute;n đều.</p>\r\n\r\n<p><strong>Thiết kế hiện đại, dễ sử dụng</strong></p>\r\n\r\n<p>Với tay cầm c&aacute;ch nhiệt gi&uacute;p bạn dễ d&agrave;ng hơn khi di chuyển v&agrave; sử dụng.</p>\r\n\r\n<p>2 chế độ nấu c&ugrave;ng đ&egrave;n led b&aacute;o gi&uacute;p bạn kiểm so&aacute;t chế độ hoạt động của nồi một c&aacute;ch dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng.</p>\r\n\r\n<p>C&aacute;c bộ phận nồi c&oacute; thể th&aacute;o lắp, gi&uacute;p bạn dễ d&agrave;ng hơn với c&ocirc;ng việc ch&ugrave;i rửa, vệ sinh cho nồi.</p>', 1, 1, 1, '2019-04-04 10:15:31', '2019-04-04 10:15:31'),
(9, 'Nồi cơm điện tử Supor lòng nồi X-Ceramic', 'noi-com-dien-tu-supor-long-noi-x-ceramic', 2100000, 1800000, 'ncd2.jpg', '12 tháng', 'Nhôm tráng men chống dính', '1.5L - 2L', 'SUPOR', 'Nắp gài', 'Nồi điện tử', 1, '<p>Dung t&iacute;ch 1.8L tương đương khả năng nấu 1.5kg gạo, l&agrave; sự lựa chọn hợp l&yacute; cho những gia đ&igrave;nh c&oacute; 4-6 th&agrave;nh vi&ecirc;n.<strong>8 chế độ nấu tự động tiện lợi v&agrave; đa năng khi chuẩn bị bữa ăn</strong>8 chế độ nấu tự động: cơm, x&ocirc;i, ch&aacute;o, l&agrave;m b&aacute;nh, hầm, hấp&hellip; gi&uacute;p bạn dễ d&agrave;ng nấu một bữa ăn thật thịnh soạn cho gia đ&igrave;nh.</p>\r\n\r\n<p><strong>L&ograve;ng nồi hợp kim d&agrave;y 2.5mm chống d&iacute;nh nấu cơm ngon hơn v&agrave; kh&ocirc;ng bị b&aacute;m</strong></p>\r\n\r\n<p>Nồi trong l&agrave;m bằng hợp kim nh&ocirc;m cao cấp d&agrave;y 1.5mm chống d&iacute;nh, sản sinh tia hồng ngoại khi gia nhiệt gi&uacute;p nấu cơm ngon hơn v&agrave; kh&ocirc;ng bị d&iacute;nh v&agrave;o đ&aacute;y nồi.</p>', 1, 1, 1, '2019-04-04 10:18:30', '2019-04-04 10:18:30'),
(10, 'Lò Nướng Halogen Bigsun Bo-12CGH - 12L', 'lo-nuong-halogen-bigsun-bo-12cgh-12l', 790000, 599000, 'ln1.jpg', '12 tháng', 'Nhôm tráng men chống dính', 'Dưới 25L', 'BIGSUN', 'Nắp đậy', 'Lò nướng thủy tinh', 1, '<p><strong>L&ograve; nướng thủy tinh Bigsun BO-12CGH&nbsp;</strong>c&oacute; nhiều chức năng nấu đa dạng như nướng, quay, r&aacute;n, h&acirc;m n&oacute;ng mang đến những m&oacute;n ăn ngon miệng, hợp vệ sinh cho gia đ&igrave;nh bạn.<strong>L&ograve; nướng Bigsun BO-12CGH</strong>nhiều tiện &iacute;ch đa năng g&oacute;p phần l&agrave;m những bữa cơm th&ecirc;m đậm đ&agrave; v&agrave; l&agrave; vật dụng kh&ocirc;ng thể thiếu trong căn bếp của mỗi gia đ&igrave;nh</p>', 1, 1, 2, '2019-04-04 10:23:36', '2019-04-04 10:23:36'),
(11, 'Máy xay sinh tố Tefal BL142A42', 'may-xay-sinh-to-tefal-bl142a42', 1250000, 1000000, 'mxst1.jpg', '12 tháng', 'Thủy tinh', '1,8L', 'TEFAL', 'Xoáy', 'Máy xay', 1, '<p>Đặc điểm nổi bật</p>\r\n\r\n<p>- C&ocirc;ng suất 300 W xay nhanh, xay mịn mọi nguy&ecirc;n liệu.</p>\r\n\r\n<p>- 1 cối xay lớn bằng thủy tinh, 2 cối nhỏ bằng nhựa bền đẹp, dễ vệ sinh.</p>\r\n\r\n<p>- 2 tốc độ xay điều khiển bằng n&uacute;t nhấn dễ d&ugrave;ng.</p>\r\n\r\n<p>- Chế độ&nbsp;tự ngắt khi qu&aacute; tải&nbsp;gia tăng độ bền v&agrave; t&iacute;nh an to&agrave;n.</p>', 1, 1, 4, '2019-04-09 07:28:01', '2019-04-09 07:28:01'),
(12, 'Máy xay thịt đa năng lucky house MT-098', 'may-xay-thit-da-nang-lucky-house-mt-098', 450000, 400000, 'mxt1.jpg', '12 tháng', 'thủy tinh', '1,2L', 'TEFAL', 'Đậy', 'Máy xay', 1, '<p>- Th&ocirc;ng tin sản phẩm M&aacute;y xay thịt đa năng lucky house MT-098</p>\r\n\r\n<p><strong>C&ocirc;ng suất</strong> : 300W</p>\r\n\r\n<p><strong>Điện &Aacute;p</strong> : 220V</p>\r\n\r\n<p><strong>Dung t&iacute;ch</strong> : 1,2 l&iacute;t</p>\r\n\r\n<p><strong>Xuất xứ</strong> : Việt nam</p>\r\n\r\n<p>-&nbsp;M&aacute;y xay thịt đa năng lucky house MT-098&nbsp;300W gi&uacute;p c&aacute;c b&agrave; nội trợ hiện đại chế biến thức ăn thật dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng, lại đảm bảo an to&agrave;n vệ sinh thực phẩm tối đa trong qu&aacute; tr&igrave;nh chuẩn bị nguy&ecirc;n liệu chế biến.</p>\r\n\r\n<p>- Cối đựng thịt xay bằng chất liệu thủy tinh dầy v&agrave; trong suốt, kh&ocirc;ng trầy xướt, dễ l&agrave;m sạch. Cối lớn hơn c&aacute;c d&ograve;ng m&aacute;y xay thịt th&ocirc;ng thường trước đ&acirc;y, gi&uacute;p xay được nhiều thịt hơn. Cối c&ograve;n c&oacute; nắp đậy gi&uacute;p bảo quản thực phẩm trước, trong v&agrave; sau khi xay, tr&aacute;nh bụi, ruồi, c&ocirc;n tr&ugrave;ng... x&acirc;m nhập.</p>\r\n\r\n<p>- M&aacute;y c&oacute; lưỡi dao k&eacute;p l&agrave;m từ th&eacute;p kh&ocirc;ng gỉ, cứng c&aacute;p v&agrave; sắc b&eacute;n. Kết hợp với c&ocirc;ng suất 300W mạnh mẽ, sản phẩm gi&uacute;p xay thịt v&agrave; c&aacute;c loại hạt, củ quả nhuyễn mịn m&agrave; kh&ocirc;ng l&agrave;m thất tho&aacute;t chất dinh dưỡng c&oacute; trong thực phẩm.</p>\r\n\r\n<p>- M&aacute;y xay thịt sẽ tự động ngắt điện v&agrave; ngưng hoạt động khi qu&aacute; tải, bảo đảm kh&ocirc;ng chập ch&aacute;y, rất an to&agrave;n cho người sử dụng. Điểm nổi bật nữa của sản phẩm ch&iacute;nh l&agrave; ở thiết kế kh&oacute;a an to&agrave;n, gi&uacute;p giữ cối cố định khi m&aacute;y hoạt động kh&ocirc;ng xảy ra x&ecirc; dịch, kh&ocirc;ng đổ vỡ.</p>\r\n\r\n<p>-&nbsp;M&aacute;y xay thịt đa năng lucky house MT-098&nbsp;300W được l&agrave;m bằng inox kh&ocirc;ng gỉ, c&oacute; m&agrave;u bắt mắt, tạo độ thẩm mỹ cao, ph&ugrave; hợp với mọi kh&ocirc;ng gian b&agrave;y tr&iacute; trong gian bếp.</p>', 1, 1, 4, '2019-04-09 07:32:34', '2019-04-09 07:32:34'),
(13, 'Máy đánh trứng 6610', 'may-danh-trung-6610', 300000, 200000, 'mdt1.jpg', '12 tháng', 'Nhôm', 'Không có', 'Trung Quốc', 'Tròn', 'Máy điện', 0, '<h3><em><strong>- M&aacute;y đ&aacute;nh trứng 6610 - M&aacute;y đ&aacute;nh trứng cầm tay</strong></em></h3>\r\n\r\n<p>K&iacute;ch thước m&aacute;y: d&agrave;i&nbsp;18 x 13 x 7 (cm)</p>\r\n\r\n<p>Trọng lượng: 680g</p>\r\n\r\n<p>C&ocirc;ng suất: 180 W</p>\r\n\r\n<p>Bảo h&agrave;nh 1 năm&nbsp;kể từ ng&agrave;y nhận h&agrave;ng (do lỗi nh&agrave; sản xuất).</p>\r\n\r\n<h3><strong>- M&aacute;y đ&aacute;nh trứng 6610:</strong>&nbsp;l&agrave; d&ograve;ng m&aacute;y đ&aacute;nh trứng gi&aacute; rẻ, chất lượng ổn định với người l&agrave;m b&aacute;nh c&oacute; nhu cầu cơ bản l&agrave;m c&aacute;c loại b&aacute;nh b&ocirc;ng lan, l&agrave;m kem,... M&aacute;y đ&aacute;nh trứng cầm tay 6610 ph&ugrave; hợp với người l&agrave;m b&aacute;nh tại nh&agrave;, l&agrave;m b&aacute;nh trong gia đ&igrave;nh.&nbsp;</h3>', 1, 1, 3, '2019-04-09 07:40:48', '2019-04-09 07:40:48'),
(14, 'Bếp hồng ngoại Bigsun BIF-4TH tặng vỉ nướng', 'bep-hong-ngoai-bigsun-bif-4th-tang-vi-nuong', 1250000, 900000, 'bhn1.jpg', '12 tháng', 'Nhôm tráng men chống dính', 'Không có', 'BIGSUN', 'Đậy', 'Bếp đơn', 1, '<h3>TH&Ocirc;NG TIN CHI TIẾT</h3>\r\n\r\n<p>&nbsp;​</p>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>SKU</td>\r\n			<td>1982325471439</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thương hiệu</td>\r\n			<td>Bigsun</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sản xuất tại</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>BIF-4TH</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Điện &aacute;p</td>\r\n			<td>220V/50Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bảng điều khiển</td>\r\n			<td>Cảm ứng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trọng lượng</td>\r\n			<td>3.2kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>K&iacute;ch thước</td>\r\n			<td>D&agrave;i 40cm x Rộng 35cm x D&agrave;y 10cm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 0, 0, 5, '2019-04-09 07:47:34', '2019-04-09 07:47:34'),
(15, 'Bếp điện Supor', 'bep-dien-supor', 600000, 500000, 'bnd2.jpg', '12 tháng', 'Nhôm tráng men chống dính', 'Không có', 'VN', 'Đậy', 'Điện', 1, '<p>ABC</p>', 0, 0, 5, '2019-04-20 02:04:12', '2019-04-20 15:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `address`, `phone`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@kitchenart.vn', '$2y$10$jfdPt2R37WvaL/91ouYyo.cl1xSIeVNLiVERCdpBHG2sGRDwyzev6', 'Admin', 'Đông Anh, Hà Nội', '0123456789', 1, '5rhQMefDoHQztFcdxkZi1AcQYoVKGnqvBcuG6e0DpuRzaRI6vrRN53XZvoZ3', NULL, NULL),
(2, 'nguyenlan220897@gmail.com', '$2y$10$rLAHP2rBuEIMjy0fWT3l9eyLHNWyAqBS.wX5jD1./fAycH77sypqK', 'Nguyễn Lan', 'ABC111', '0968954840', 0, 'KDF1ke2fShUL7hiyNNkjEveqFc28ZFTVuHa8vwV5vFckBwTb1mJCWpEqKL3E', '2019-04-16 16:53:19', '2019-04-16 16:53:19'),
(3, 'abc@121z3.com', '$2y$10$YZWjXjbMOglp.tO7d/4JAeJU6CZAPkWkaN94AuWvSQPKc1bJOjTHO', 'test', NULL, NULL, 0, NULL, '2019-04-16 16:59:00', '2019-04-16 16:59:00'),
(4, 'nguyenlan2208971@gmail.com', '$2y$10$08IXSkbScLyUolbqMOTxTeGTwCB/PSKaRrsxG6URvwkHr7Ex6gwKS', 'Nguyễn Lan1', NULL, NULL, 0, NULL, '2019-04-16 17:01:43', '2019-04-16 17:01:43'),
(5, 'nguyenlan@gmail.com', '$2y$10$t/E8LAsi3.hg1JwpJIRCYuhSG9tBZ8VKexjbj7HvSw/Pwb4x4XfZC', 'NguyenLan', NULL, NULL, 1, NULL, NULL, NULL),
(6, 'anh@gmail.com', '$2y$10$BLVbU.0ScoFAlpIPc4Pz3eINuka2llIY2.DdTFDh/PfHyBk88tXNq', 'Trâm Anh', NULL, NULL, 0, 'AUxF61Qz6MeZprJeJDOaLkPYPcmr2PSqocPrlZhbm1HRbsHuGXRy049Bv8Rq', '2019-04-17 16:55:30', '2019-04-17 16:55:30'),
(7, 'anh@gmail.com', '$2y$10$5BFE8L.FZy2TZDweMxUkAuUQCS5kwxaE2iaYZkp1aGmoFFG826f3a', 'Trâm Anh', NULL, NULL, 0, NULL, '2019-04-17 16:55:30', '2019-04-17 16:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_bill_userid_foreign` (`bill_userid`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_id`,`prod_id`),
  ADD KEY `bill_details_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `product_prod_cate_foreign` (`prod_cate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_bill_userid_foreign` FOREIGN KEY (`bill_userid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bill_details_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_prod_cate_foreign` FOREIGN KEY (`prod_cate`) REFERENCES `category` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
