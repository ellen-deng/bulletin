-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 15 日 11:45
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bulletin`
--
CREATE DATABASE IF NOT EXISTS `bulletin` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bulletin`;

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, '生活'),
(2, '體育'),
(6, '健康'),
(7, ' 3 C'),
(9, '國際'),
(10, '政治');

-- --------------------------------------------------------

--
-- 資料表結構 `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(20) NOT NULL,
  `member_id` int(20) NOT NULL,
  `news_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_id` int(20) NOT NULL,
  `member_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `rank` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `email`, `password`, `rank`) VALUES
(1, 'Admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(13, 'Max', 'max@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `category_id` int(5) NOT NULL,
  `member_id` int(20) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`news_id`, `category_id`, `member_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '雨還要下！週三中南部清晨短時強降雨 北北桃留意高溫', '中央氣象局預報，明天持續受西南風影響，中南部有短暫陣雨或雷雨，易有短時強降雨，並有局部大雨或豪雨發生的機率；東南部及澎湖有局部短暫陣雨；其他地區及金門、馬祖為多雲到晴，午後有局部短暫雷陣雨。提醒適逢大潮期間，低窪地區應慎防積淹水，由於連日降雨，前往中南部山區請留意坍方、落石等現象。 天氣風險公司指出，預計週四（15日）開始，台灣附近的西南風將有明顯增強趨勢，屆時西半部近山地區須留意降雨狀況，可能出現長延時降雨及短延時強降雨，提醒民眾在天候不佳時，避免到山區及河川下游進行戶外活動，預計類似的天氣型態至少影響到週末。 溫度方面，明天白天各地高溫約31度至35度，低溫約25度至28度。其中，氣象局針對明日台北市、新北市及桃園市發布高溫警報，高溫恐突破36度。 紫外線方面，明天台東縣達危險級；台中市達高量級；其他縣市達過量級。 空氣品質方面，明天竹苗、中部、雲嘉南、高屏、宜蘭、花東及澎湖以「良好」等級為主；北部及馬祖、金門為「普通」等級。 氣象局也提醒，明天北部、東半部（含蘭嶼、綠島）、南部及恆春半島沿海地區有長浪發生的機率，其中東北角海邊容易有突發性大浪發生，海邊活動請注意安全。', '2019-08-14 01:14:00', '2019-08-14 01:14:00'),
(2, 2, 1, '林安可棒子持續加溫 生涯首次猛打賞', '統一獅第1指名新人林安可打擊火力持續加溫，今天對中信兄弟擊出3支安打，包括2支二壘打，生涯首度演出猛打賞。  林安可大學時期以投球為主，沒有在國內比賽上場打擊過，但打擊天賦深受肯定，二軍只出賽5場就在上週六上到一軍，雖然首戰還在適應期、沒有安打，週日就打出生涯首安、首轟、首打點。今天林安可第3局打出先馳得點的二壘打、第5局再敲一壘打，第7局轟出直擊左外野全壘打牆的深遠飛球，夾在牆上縫隙形成場地二壘打。林安打連3打席安打，生涯第3戰就演出猛打賞。', '2019-08-14 01:19:10', '2019-08-14 01:19:10'),
(3, 1, 1, '中南部今雨勢漸緩 彭啟明：未來幾天降雨再增強', '延續過去幾天盛行西南風的天氣，今天中南部仍有降雨，不過與昨天相比雨勢明顯零星許多，氣象專家彭啟明表示，這兩天降雨雖緩和，但未來幾天仍將受西南風影響，綜合柯羅莎颱風北移牽動，降雨強度與大氣不穩定性將再度增強。\r\n\r\n彭啟明在臉書PO文指出，今天中部以北與東半部地區依舊是西南風的背風側，中午前後氣溫將飆高，台北盆地可能出現37度高溫，午後山區與近山平地將有熱對流發展，有引發零星降雨的機率，提醒外出民眾務必注意防曬，若身處地區鄰近山區則需視情形攜帶雨具。\r\n\r\n彭啟明進一步表示，近期太平洋高壓明顯東退，尚未出現重新延伸至東亞的趨勢，缺乏此一條件，影響了颱風等熱帶系統發展，「這幾天會緩和平靜一些」。\r\n\r\n至於民眾關心的颱風動態，彭啟明表示，「很大範圍」的科羅莎颱風已降為輕度颱風，外圍環流今起逐漸影響日本九州至四國地區，颱風中心明天將在前述兩地間登陸，整個環流將影響關西至九州地區，直到週五（16日）才逐漸脫離影響。他也提醒赴日旅行的朋友，期間若前往上述地區應注意安全。', '2019-08-13 17:55:09', '2019-08-14 02:50:08'),
(15, 1, 1, '大雨沖刷 雲林二崙大義崙大排護岸崩塌', '雲林縣二崙鄉大義崙大排護岸疑因大雨沖刷，今天出現約10多公尺崩塌，避免危及防汛道路安全，縣府已拉起封鎖線，請民眾改道，同時已通知廠商搶修。\r\n\r\n二崙鄉大義崙大排埤塘寶塔旁護岸不敵昨天滂沱大雨崩塌，不僅護欄掉落河中，防汛道路路基與柏油也都出現沖蝕，由於氣象預報這幾天仍有可能發生大雨，居民憂心崩塌情況擴大，危及鄰近地區安全，要求縣府趕緊搶修。\r\n\r\n縣府水利處長許宏博表示，縣府接獲通報已派員前往勘查，於防汛道路入口處拉封鎖線，請民眾不要通行，以免發生危險，也通知廠商儘速完成搶修。', '2019-08-14 07:51:09', '2019-08-15 09:37:58');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- 資料表索引 `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `news_id` (`news_id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `member_id` (`member_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `collection_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`);

--
-- 資料表的限制式 `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
