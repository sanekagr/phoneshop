-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 10:36 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phoneshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `machine_name` varchar(255) NOT NULL,
  `cat_order` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `machine_name`, `cat_order`) VALUES
(1, 'Phones', 'phones.jpg', 'phones', 1),
(2, 'Tablets', 'tablets.jpg', 'tablets', 2),
(3, 'Memory Cards', 'memory_cards.jpg', 'memory_cards', 4),
(4, 'Cameras', 'cameras.jpg', 'cameras', 3),
(5, 'Phone Accessories ', 'accessories.jpg', 'phone_accessories', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4ac3cb6b71b0e43c38609b007c70f3d5', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430162817, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"3";s:4:"name";s:5:"admin";s:5:"email";s:16:"admin@domain.com";s:5:"admin";b:1;}'),
('929c52e54b7e2fea59badfd97738e397', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430070857, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_log`
--

CREATE TABLE IF NOT EXISTS `contact_log` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `contact_log`
--

INSERT INTO `contact_log` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date`) VALUES
(63, 'stam', 'sanekagr@walla.com', '+972508777105', 'General question', 'Message:  \nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '2015-04-11 15:05:24'),
(64, 'Karina Popov', 'sanekagr@gmail.com', '', 'General question', 'Message:  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '2015-04-11 15:05:45'),
(66, 'suchok', 'sanekagr@walla.com', '', 'General question', 'gnida', '2015-04-24 17:02:53'),
(67, 'suchok', 'sanekagr@walla.com', '', 'General question', 'asaasasasa', '2015-04-24 17:06:03'),
(68, 'suchok', 'sanekagr@walla.com', '', 'General question', 'aasasas', '2015-04-24 17:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `order` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `uid`, `order`, `time`) VALUES
(92, 'user', 'user@domain.com', 1, '{"c81e728d9d4c2f636f067f89cc14862c":{"rowid":"c81e728d9d4c2f636f067f89cc14862c","id":"2","qty":"1","price":"550.00","name":"Samsung Galaxy S5","cat_name":"phones","machine_name":"phones-2","subtotal":550},"735b90b4568125ed6c3f678819b6e058":{"rowid":"735b90b4568125ed6c3f678819b6e058","id":"67","qty":"1","price":"25.00","name":"SanDisk Ultra 32gb &#8362;","cat_name":"memory_cards","machine_name":"memory_cards-67","subtotal":25}}', '2015-04-15 18:13:54'),
(93, 'admin', 'admin@domain.com', 3, '{"14bfa6bb14875e45bba028a21ed38046":{"rowid":"14bfa6bb14875e45bba028a21ed38046","id":"69","qty":"1","price":"129.95","name":"SanDisk Extreme PROu00ae CompactFlash 64gb","cat_name":"memory_cards","machine_name":"memory_cards-69","subtotal":129.95}}', '2015-04-15 18:28:12'),
(94, 'sasha2', 'sanekagr@gmail.com', 9, '{"1679091c5a880faf6fb5e6087eb1b2dc":{"rowid":"1679091c5a880faf6fb5e6087eb1b2dc","id":"6","qty":"1","price":"599.00","name":"Canon 600d","cat_name":"cameras","machine_name":"cameras-6","subtotal":599},"a3f390d88e4c41f2747bfa2f1b5f87db":{"rowid":"a3f390d88e4c41f2747bfa2f1b5f87db","id":"68","qty":"1","price":"24.00","name":"SanDisk Ultra SDHC/SDXC Memory Card 32gb","cat_name":"memory_cards","machine_name":"memory_cards-68","subtotal":24}}', '2015-04-15 18:29:11'),
(95, 'admin', 'admin@domain.com', 3, '{"c81e728d9d4c2f636f067f89cc14862c":{"rowid":"c81e728d9d4c2f636f067f89cc14862c","id":"2","qty":"1","price":"550.00","name":"Samsung Galaxy S5","cat_name":"phones","machine_name":"phones-2","main_image":"1.jpg","subtotal":550},"7cbbc409ec990f19c78c75bd1e06f215":{"rowid":"7cbbc409ec990f19c78c75bd1e06f215","id":"70","qty":"1","price":"680.99","name":"Samsung Galaxy S6","cat_name":"phones","machine_name":"phones-70","main_image":"15731.jpg","subtotal":680.99}}', '2015-04-22 20:44:00'),
(96, 'admin', 'admin@domain.com', 3, '{"8f14e45fceea167a5a36dedd4bea2543":{"rowid":"8f14e45fceea167a5a36dedd4bea2543","id":"7","qty":"1","price":"15.50","name":"Charger Micro Usb","cat_name":"phone_accessories","machine_name":"accessories-7","main_image":"charger.jpg","subtotal":15.5},"e4da3b7fbbce2345d7772b0674a318d5":{"rowid":"e4da3b7fbbce2345d7772b0674a318d5","id":"5","qty":"1","price":"20.50","name":"headphones apple","cat_name":"phone_accessories","machine_name":"accessories-5","main_image":"headphones.jpg","subtotal":20.5}}', '2015-04-22 21:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`role_id`, `name`) VALUES
(1, 'admin'),
(2, 'authenticated user'),
(3, 'anonymous user');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `machine_name` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `the_order` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `categorie_id`, `machine_name`, `main_image`, `images`, `price`, `the_order`, `visibility`) VALUES
(1, 'Apple iPhone 6', '<p><strong> </strong><span style="font-size:10pt;"><em><strong>iPhone 6</strong> isn’t simply bigger — it’s better in every way. Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. It’s one continuous form where hardware and software function in perfect unison, creating a new generation of iPhone that’s better by any measure.</em></span></p>\r\n<p><span style="font-size:12pt;"><strong>The iPhone 6 represents Apple''s second largest departure in terms of design since the iPhone 4, and ushers in an era of rounded aesthetics.</strong> Equipped with a <strong>4.7-inch display</strong>, the iPhone 6 is also much larger than its predecessor, the iPhone 5s, but Apple has managed to trim some extra fat in order to make the new iPhone even thinner, at 0.27 in (6.9 mm). The innards of the iPhone 6, too, went through improvements. The home-grown dual-core A8 processor is the third consecutive Apple chip to be custom-designed, and offers performance improvements of up to 25% and 50% in the of CPU and GPU departments respectively. The 8-megapixel, 1/3” iSight camera also received several upgrades, mostly on the software side, and now offers faster, phase detection auto focus, plus support for super-smooth 720p clips at the industry-leading 240 frames per second.</span></p>\r\n<p><span style="font-size:12pt;"><strong><a href="https://www.apple.com/il/iphone-6/">Apple Site</a></strong></span></p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.phonearena.com/phones/Apple-iPhone-6_id8346">Phonearena</a></strong></span></p>', 1, 'phones-1', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,34132.jpg,74403.jpg', '699.00', 1, 1),
(2, 'Samsung Galaxy S5', '<h3>With a 5.1" 1080p screen, 16 MP camera and 2 GB of RAM, the Galaxy S5 might not be the utmost specs beast that the Android world has to offer,</h3>\r\n<p>but it comes with plenty of new features, both in comparison with its predecessor, the S4, and when measured up to the other flagships. The heart beat sensor, for instance, is unique for the Galaxy S5, while something like the Finger Scanner can also be observed on the iPhone 5s, but in a rather different implementation. Samsung also introduced two new launch colors, including Copper Gold, and a brand new perforated design for the rear cover. The addition of Snapdragon 801 chipset brings on LTE-A download speeds, and 4K video recording, to an already superb handset</p>\r\n<p><strong><span style="text-decoration:underline;"><a href="http://www.phonearena.com/phones/Samsung-Galaxy-S5_id8202">Phonearena</a></span></strong><span style="color:#3366ff;"><strong><span style="text-decoration:underline;"><br /></span></strong></span></p>\r\n<p><a href="http://www.samsung.com/uk/consumer/mobile-devices/smartphones/android/SM-G900FZWABTU?cid=uk_ppc_google_uk-brandproductsamsunggalaxys5broad-1559134832-promob_20140729&amp;tmcampid=7&amp;tmad=c&amp;tmplaceref=c_Brand+%2B+Product%3A+Samsung+Galaxy+S5_Broad&amp;tmclickref=b_%2Buk%20%2Bsamsung%20%2Bs5&amp;ef_id=VQ3FbAAABcyIh0KP:20150415192820:s"><strong><span style="text-decoration:underline;"><span style="text-decoration:underline;">Samsung</span> Site</span></strong></a></p>', 1, 'phones-2', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', '550.00', 4, 1),
(3, 'Apple iPad Air 2', '<p>"<span style="font-size:12pt;"><em>So capable, you won’t want to put it down. So thin and light, you won’t have to." With iPad, we’ve always had a somewhat paradoxical goal: to create a device that’s immensely powerful, yet so thin and light you almost forget it’s there. A device that helps you do amazing things, without ever getting in your way. iPad Air 2 is all that. And then some.</em></span></p>\r\n<p><span style="font-size:12pt;">The iPad Air 2 is technically Apple''s sixth generation iPad, and the second to carry the ''Air'' moniker. It''s slightly thinner than the original Air, but differs little in appearance. The main changes are under the hood: the tablet runs on iOS 8 and is powered by Apple''s A8X chip, and it gets a higher-resolution 8-megapixel camera.</span></p>\r\n<p>  <strong><span style="font-size:12pt;"><a href="https://www.apple.com/il/ipad-air-2/">Apple</a></span></strong></p>\r\n<p>  <strong><span style="font-size:12pt;"><a href="http://www.phonearena.com/phones/Apple-iPad-Air-2_id8948">Phonearena</a><br /></span></strong>  </p>', 2, 'tablets-3', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg', '499.00', 1, 1),
(4, 'Apple iPad mini 3', '<p><span style="font-size:12pt;"><strong><em>We made iPad mini small. We made it fast. We made it incredibly capable. And now we made it even better. With advancements like Touch ID and iOS 8, and a new gold ﬁnish, there’s even more about iPad mini to love.</em></strong></span></p>\r\n<p><span style="font-size:12pt;">The iPad mini 3 is Apple''s third-generation mini tablet, although technically, it is almost identical to its predecessor. The device offers a 7.9-inch Retina Display with a resolution of <strong>2048 by 1536 pixels</strong>. Processing power is provided by an Apple-designed A7 system-on-chip, and up to 128GB of storage are available for storing files and media. In charge is the latest version of iOS, Apple''s mobile operating system. All this is housed in a lightweight, 7.5-millimeter thin body made of premium aluminium. Unlike its predecessor, the iPad mini 3 has a Touch ID fingerprint scanner built into its home button.</span></p>\r\n<p><strong><span style="font-size:12pt;"><a href="https://www.apple.com/il/ipad-mini-3/">Apple</a><br /></span></strong></p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.phonearena.com/phones/Apple-iPad-mini-3_id8949">Phonearena</a></strong></span></p>', 2, 'tablets-4', '1.jpg', '1.jpg ,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', '399.00', 2, 1),
(5, 'headphones apple', 'Headphones apple', 5, 'accessories-5', 'headphones.jpg', 'headphones.jpg', '20.50', 1, 1),
(6, 'Canon 600d', '<p>Ever since Canon introduced its original ''Digital Rebel'' back in August 2003 - famously the first ''affordable'' digital SLR - the company has continually developed and refined its entry-level line with ever-more-frequent releases, adding in more and more features in the process. So true to form, almost precisely a year to the day after the advent of the EOS Rebel T2i / 550D Canon launched its next model, predictably named the <strong>EOS Rebel T3i / 600D</strong>. As usual the 550D remains in Canon''s range at a lower price point, with the EOS 1100D slotting in beneath it to round off the company''s offerings to entry-level SLR users.</p>\r\n<p>The new kid on the block can most succinctly be described as a 550D with an articulated screen, that also incorporates many of the beginner-friendly features we first saw on the more enthusiast-orientated EOS 60D. Perhaps most notable of these is ''Basic+'', a simple, results-orientated approach to image adjustments in the scene-based exposure modes, that allows the user to change the look of their images and control background blur without needing to know anything technical about how this all works. The 600D also gains multi-aspect ratio shooting (in live view) plus the 60D''s ''Creative Filters'', a range of effects than can be applied to images after shooting, including toy camera, fisheye and fake-miniature looks. Additionally it can now wirelessly control off-camera flashes, including the Speedlite 320EX and 270EX II announced alongside it.</p>\r\n<p>The fully-automatic ''green square'' exposure mode has also been updated to ''Scene Intelligent Auto'', with a new ''A+'' icon on the mode dial to match. According to Canon, this mode (as its name might suggest) now analyses the scene in front of the camera and sets its exposure and image-processing parameters accordingly, and even tweaks the colour output to match. Continuing the ''beginner-friendly'' theme, the camera now also incorporates a ''Feature Guide'', that displays short explanations of what each function does on the screen to help beginners learn how things work.</p>\r\n<p>There''s an intriguing ''Video Snapshot'' movie mode too, that''s borrowed from Canon''s camcorder range. This is based on the idea that movies are often more interesting when stitched together from a number of short ''takes'', rather than one long continuous clip. It therefore limits movie recording to short snippets of 2, 4 or 8 seconds, then plays them back sequentially as a composite movie, with the option of adding a soundtrack to help tie them together. This, in effect, allows to you produce complex, multi-take movies without having to resort to computer editing.</p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.dpreview.com/reviews/canoneos600d">dpreview</a><br /></strong></span></p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.usa.canon.com/cusa/consumer/products/cameras/slr_cameras/eos_rebel_t3i_18_55mm_is_ii_lens_kit">Canon</a></strong></span></p>', 4, 'cameras-6', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', '599.00', 1, 1),
(7, 'Charger Micro Usb', 'Charger Micro Usb', 5, 'accessories-7', 'charger.jpg', 'charger.jpg', '15.50', 2, 1),
(8, 'Sony Alpha a7s', '<h2>Sony Alpha a7S Mirrorless Digital Camera.</h2>\r\n<p><br /><span style="font-size:12pt;">The Sony Alpha a7S Mirrorless Digital Camera features a full-frame <strong>12.2MP Exmor CMOS</strong> sensor and <strong>BIONZ X</strong> image processor to enable notable video and still image quality with an expansive dynamic range, low noise, and extended sensitivity to ISO 409600. At the sensor level, this full-frame sensor features a unique on-chip gapless lens design, which incorporates small lenses between neighboring pixels in order to increase light-gathering efficiency and promote greater image quality across the entirety of the sensor plane. The sensor and processor combination also avails a wealth of speed throughout the camera system, including a top continuous shooting rate of 5 fps, support for 4K video recording, and a fast 25-point contrast-detection AF system with sensitivity to -4 EV.</span></p>\r\n<p><strong><span style="font-size:12pt;"><a href="http://store.sony.com/alpha-a7/cat-27-catid-All-Alpha-a7-Cameras">Sony</a><br /></span></strong></p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.dpreview.com/reviews/sony-alpha-a7r">dpreview</a></strong></span></p>', 4, 'cameras-8', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,71886.jpg', '2499.00', 2, 1),
(67, 'SanDisk Ultra microSDHC 32gb', '<p>Shoot and save more high-quality photos and Full HD video** on your Android smartphone or tablet with SanDisk Ultra microSDHC and microSDXC UHS-I Cards. With storage capacities up to 128GB** you can take more photos and videos without worrying about running out of space. And the SanDisk Memory Zone app, available on the Google Play™ store, makes it easy to view, access, and back up all of your files from your phone’s memory in one convenient place. To help your smartphone run at its peak performance, this app can be set to automatically off-load files from your smartphone’s internal memory to your memory card**.<br />Capacities up to 128GB** to capture, carry and keep it allFast transfer speeds of up to 48MB/s**Featuring Class 10 for Full HD video**Waterproof, X-ray proof, temperature proof, and shockproof**SD™ adapter included for compatibility with digital camerasInformation from SanDisk site</p>\r\n<p><a href="http://www.sandisk.com/products/memory-cards/microsd/ultra-class10-for-android/">The page of the product on SanDisk site</a></p>', 3, 'memory_cards-67', '83304.jpg', '23016.jpg,51723.jpg,83304.jpg', '25.00', 1, 1),
(68, 'SanDisk Ultra SDHC/SDXC Memory Card 32gb', '<p>Store lots of photos and Full HD videos—and transfer them quickly to your computer—using SanDisk Ultra SDXC and SDHC Memory Cards. Great for compact-to-midrange point-and-shoot digital cameras and camcorders, these memory cards offer read speeds of up to 40 MB/s** and are twice as fast as ordinary SDHC cards, allowing you to take pictures and transfer files quickly. SanDisk Ultra SDXC and SDHC Memory Cards come with up to 128 GB of storage and are resistant to water, extreme temperatures, x-rays, and shocks. A label allows you to note what''s on the card for easy identification.</p>\r\n<p>Ideal for compact-to-midrange point-and-shoot cameras and camcorders<br />Twice as fast as ordinary SDHC cards**<br />Class 10 speed rating for recording Full HD videos**<br />Storage capacity of up to 128 GB**<br />Waterproof, temperature-proof, x-ray-proof, and shock-proof**</p>\r\n<p><br /><a href="http://www.sandisk.com/products/memory-cards/sd/ultra-uhs-1-class10/">SanDisk site</a></p>', 3, 'memory_cards-68', '49814.jpg', '49814.jpg', '24.00', 2, 1),
(69, 'SanDisk Extreme PRO CompactFlash 64gb', '<h2>Industry-Leading Combination of Storage Capacity and Professional-Grade Performance</h2>\r\n<p> </p>\r\n<p>Get high-capacity storage, faster shot-to-shot performance, and cinema-quality video with the SanDisk Extreme PRO CompactFlash Memory Card. With transfer speeds of up to 160MB/s, this card offers the fast, efficient performance you expect from the global leader in flash memory cards**. This industry-leading memory card is optimized for professional-grade video capture, with a minimum sustained write speed of 65MB/s for rich 4K and Full HD video. Capacities up to 256GB accommodate hours of video and thousands of high-resolution images. So you never miss a scene or shot, this memory card resists extreme temperatures, shock, and other conditions.</p>\r\n<ul><li>Designed for professional videographers and photographers</li>\r\n<li>Optimized for 4K video capture**</li>\r\n<li>Transfer speeds of up to 160MB/s</li>\r\n<li>Shot speeds up to 150MB/s</li>\r\n<li>VPG-65 for sustained video recording speeds of 65MB/s**</li>\r\n<li>Capacities up to 256GB for storing hours of video**</li>\r\n</ul>\r\n\r\n<p><a href="http://www.sandisk.com/products/memory-cards/compactflash/extremepro-160mbs/?capacity=256GB">More information on manufactor site</a></p>', 3, 'memory_cards-69', '41641.jpg', '41641.jpg,04128.jpg', '129.95', 3, 1),
(70, 'Samsung Galaxy S6', '<h1>NEXT IS NOW</h1>\r\n<p>Next is two of the most beautiful smartphones ever created - the Galaxy S6 and the Galaxy S6 edge - and they''re available now.</p>\r\n<h1>Next is beautifully crafted</h1>\r\n<p>With their slim, seamless, full metal and glass construction, the sleek, ultra thin edged Galaxy S6 and unique, dual curved Galaxy S6 edge are crafted from the finest materials.</p>\r\n<p>And while they may be the thinnest smartphones we''ve ever created, when it comes to cutting-edge technology and flagship Galaxy experience, these 5.1" QHD Super AMOLED smartphones are certainly no lightweights.</p>\r\n<h1>Next is smarter charging</h1>\r\n<p>When you''re on the go and short on time, fear not - the Galaxy S6 and Galaxy S6 edge feature the ability to fast charge your battery - letting you watch 2 hours of HD video from just 10 minutes charging.</p>\r\n<p>And with their built-in wireless charging capabilities, the Galaxy S6 and Galaxy S6 edge offer you all the convenience of charging without the need to plug in1 - ensuring you’re always powered and ready for what''s next.</p>\r\n<h1>Next is better camera</h1>\r\n<p>Whether you''re into capturing stunning ‘selfies’ or spectacular sunsets, the 5-megapixel front camera and 16-megapixel rear camera are ready when you are.</p>\r\n<p>With a launch time of just 0.7 seconds, you can capture more of your favourite moments, as they happen. And thanks to its Optical Image Stabilisation, fast tracking auto focus and bigger, f1.9 aperture for better low light results, every shot will be as amazing as the next.</p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.samsung.com/uk/galaxys6/">Samsung site</a></strong></span></p>\r\n<p> </p>', 1, 'phones-70', '15731.jpg', '15731.jpg,13951.png,55896.jpg,00432.jpg,10400.jpg', '680.99', 2, 1),
(71, 'LG G3', '<h2>The new LG G3 flagship</h2>\r\n<p>Sports 5.5-inch, <strong>1440 x 2560 (QHD</strong>) pixel resolution screen, which provides the super-crisp, 538 pixels per inch. Dimensions are pretty compact for the screen size, resulting in excellent 76.4% screen to body size ratio. The Android 4.4 KitKat-based handset is powered by a quad-core Snapdragon 801 and 3GB of LPDDR3 RAM. It features 32GB of internal storage and a microSD slot. The main 13-megapixel rear shooter comes with the company''s improved Optical Image Stabilization+ and has a laser auto focus assist beam, which delivers fast focus even in low light scenarios. The 2.1-megapixel front-facing cam comes with an "enhanced selfie mode".</p>\r\n<h4><span style="color:#3366ff;font-size:12pt;"><a href="http://www.phonearena.com/phones/LG-G3_id8347"><span style="color:#3366ff;">Phonearena</span></a></span></h4>\r\n<p><span style="font-size:12pt;"><strong><span style="color:#3366ff;"><a href="http://www.lg.com/global/g3/index.html"><span style="color:#3366ff;">LG<span style="color:#3366ff;"> </span>Site</span></a></span></strong></span></p>', 1, 'phones-71', '55403.jpg', '55403.jpg,95775.jpg,48820.JPG,62159.jpg,32250.jpg,22519.jpg', '449.99', 3, 1),
(72, 'Samsung Galaxy Tab S 10.5', '<h3>Galaxy Tab®S - Hands-On</h3>\r\n<p>We asked people all over New York City to try out the Galaxy Tab®S and see how it compares to the competition. Check out what they had to say.</p>\r\n<ul><li>Super AMOLED® display (1600 x 2560)</li>\r\n<li>Our thinnest (0.26") and lightest (1.02 lbs.) yet</li>\r\n<li>Unique innovations like Fingerprint Scanner, Multi-window™, and more</li>\r\n<li>Get up to 9 hours of battery life, and even more with Ultra Power Saving Mode</li>\r\n</ul>\r\n\r\n<p><img src="http://www.samsung.com/us/system/features/GTS10_white_Video.jpg" alt="" /></p>\r\n<h3>Detail-Oriented Display</h3>\r\n<p>See your movies and games pop with vivid colors, dark shadows and stunning contrast on the 10.5" display. With twice the resolution of an HDTV, the screen also keeps everything clear by auto-adjusting brightness levels based on where you are and what you’re viewing.</p>\r\n<h3>Lightweight Design</h3>\r\n<p>An ultra-thin build with a comfortable design makes this tablet difficult to put down. Lightweight and perfect for travel, it connects seamlessly with other Galaxy products for you to effortlessly share photos and videos from wherever you are.</p>\r\n<p><img src="http://www.samsung.com/us/system/features/GTS10_White_fingerscan_1.jpg" alt="Family-Friendly" /></p>\r\n<h3>Family-Friendly</h3>\r\n<p>With Multi User Mode, everyone in the family can create a private and personalized tablet experience that can be secured with the fingerprint scanner. And for those wanting to keep the little ones entertained, Kids Mode lets you customize playtime and apps with parental controls.</p>\r\n<p> </p>\r\n<p><strong><span style="font-size:12pt;"><a href="http://www.samsung.com/us/mobile/galaxy-tab/SM-T800NZWAXAR">Samsung Site</a></span></strong></p>', 2, 'tablets-72', '10324.jpg', '10324.jpg,22890.jpg,65959.jpg,58245.jpg,81497.jpg,32815.jpg,48329.jpg', '499.99', 3, 1),
(73, 'Samsung Galaxy Tab 4 10.1 T530', '<h1>Something for Everyone</h1>\r\n<p>Designed with the whole family in mind, the Samsung Galaxy Tab® 4 offers endless entertainment options. The new Multi User Mode, brilliant display and lightweight design make this tablet easy to use and difficult to put down.</p>\r\n<p><img src="http://www.samsung.com/us/system/features/Tab4_10_OneTablet.jpg" alt="" /></p>\r\n<h3>Always Entertaining</h3>\r\n<p>Watch your movies come to life and take your games to the next level on the 10.1“ display. You can also browse online, read a book and easily stream videos to your TV to share with the whole family.</p>\r\n<p><img src="http://www.samsung.com/us/system/features/Tab4_10_Entertaining_3.jpg" alt="" /></p>\r\n<p><span style="font-size:12pt;">The Samsung Galaxy Tab 4 10.1 comes with a 10.1-inch (1280 x 800 resolution) display, quad-core SoC, running at 1.2GHz and 1.5GB of RAM. Other features include Andorid 4.4 KitKat, 16GB internal storage, microSD slot, 3-megapixels back camera, and a 6,800mAh battery.</span></p>\r\n<p><strong><span style="font-size:16px;"><a href="http://www.samsung.com/us/mobile/galaxy-tab/SM-T530NZWAXAR">Samsung</a><br /></span></strong></p>\r\n<p> </p>', 2, 'tablets-73', '74408.jpg', '74408.jpg,33760.jpg,84715.jpg,33526.jpg', '299.99', 4, 1),
(74, 'Samsung NX1', '<p><span style="font-size:14pt;color:#ff0000;"><strong>Samsung</strong></span> has been pretty inventive in the digital camera world. It was the first to offer an<a href="http://www.dpreview.com/articles/8487041176/samsungsmart-camera"> really extensive Wi-Fi system</a> (which continues to this day), <a href="http://connect.dpreview.com/post/8746850893/samsung-galaxy-camera-in-depth-review">Android-based cameras</a> (though Nikon launched a model at about the same time), and arguably the first dedicated ''selfie cams'' with its <a href="http://www.dpreview.com/articles/8876564955/samsungst550st500">DualView models</a>.</p>\r\n<p>The company has yet again come up with something new, this time in the enthusiast mirrorless space. For the first time ever, Samsung has managed to create an APS-C-sized, 28MP CMOS sensor that''s backside illuminated. BSI sensors move all the circuitry behind the light-capturing part of the sensor which allows it to capture more light, improving low light performance and reducing noise. Until now, the largest sensor with backside illumination was 1"-type (around 1/3rd the size of APS-C).</p>\r\n<p>The NX1 sits in a crowded field of excellent cameras - both DSLR and mirrorless - such as the Nikon D7200, Canon EOS 7D Mark II, Panasonic DMC-GH4 and Fujifilm X-T1. Each of these models has its own appeal, whether it be the excellent video specification of the Panasonic, the compactness of the Fujifilm or the all-round capability of the Nikon. While they share similar price tags and build quality and aim for broadly the same audience, the NX1 has quite a few tricks up its sleeve beyond its clever sensor, to try to break into that respectable club.</p>\r\n<h3><span style="color:#ff0000;">Samsung NX1 key features</span></h3>\r\n<ul><li>28.2 megapixel APS-C BSI-CMOS sensor</li>\r\n<li>Hybrid AF system with 205 phase-detect points covering 90% of the frame</li>\r\n<li>15 fps burst shooting with continuous autofocus</li>\r\n<li>4K (DCI 4K &amp; UHD) video recording using H.265 codec</li>\r\n<li>Can output 4:2:2 8-bit 4K video over HDMI</li>\r\n<li>Stripe pattern AF illuminator with 15m range</li>\r\n<li>Weather-resistant magnesium alloy body Context-sensitive adaptive noise reduction</li>\r\n<li>3" tilting Super AMOLED touchscreen display</li>\r\n<li>2.36M dot OLED EVF with 5ms lag</li>\r\n<li>LCD info display on top of camera</li>\r\n<li>Built-in 802.11ac Wi-Fi and Bluetooth</li>\r\n<li><span style="color:#000000;"><strong>USB 3.0 interface</strong></span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:12pt;"><strong><span style="color:#3366ff;"><a href="http://www.dpreview.com/reviews/samsung-nx1?utm_campaign=internal-link&amp;utm_source=reviews-latest-widget&amp;utm_medium=image&amp;ref=reviews-latest-widget"><span style="color:#3366ff;">dpreview</span></a></span><br /></strong></span></p>\r\n<p><span style="font-size:12pt;color:#3366ff;"><strong><a href="http://www.samsung.com/global/microsite/SAMSUNGCAMERA/web/main/intro.html"><span style="color:#3366ff;">Samsung</span></a></strong></span></p>', 4, 'cameras-74', '19117.jpg', '19117.jpg,83457.jpg,20717.JPG', '1499.00', 4, 1),
(75, 'Nikon D5500', '<p><strong>The Nikon D5000</strong> series has long been a good choice for photographers who wanted a very capable compact DSLR that offer a higher level of enthusiast features than the D3000 series that sits below it. Nikon''s latest model - the D5500 - continues that trend, though the differences between it and the D5300 that came before it aren''t enormous. The <a href="http://www.dpreview.com/products/nikon/slrs/nikon_d5300">D5300</a>, introduced in the fall of 2013, <a href="http://www.dpreview.com/reviews/nikon-d5300/18">impressed us</a> with its image quality, flip-out LCD, and feature set. We were less enthused about its menu system and live view performance.</p>\r\n<p>So what''s changed? In brief, the D5500 has a smaller and lighter body with an improved grip, a faster processor, touch-enabled LCD, ''flat'' picture control, and built-in Wi-Fi. We''ll see later if the company addressed some of the <a href="http://www.dpreview.com/reviews/nikon-d5300/18">issues</a> that we encountered with the D5300.</p>\r\n<p>To say the D5500 sits in a crowded field is an understatement. On the DSLR side it competes against the<a href="http://www.dpreview.com/products/canon/slrs/canon_eos750d">Canon EOS Rebel T6i (750D)</a> and <a href="http://www.dpreview.com/products/pentax/slrs/pentax_ks2">Pentax K-S2</a>, as well as the <a href="http://www.dpreview.com/products/fujifilm/slrs/fujifilm_xt1">Fujifilm X-T1</a>, <a href="http://www.dpreview.com/products/olympus/slrs/oly_em10">Olympus E-M10</a>, <a href="http://www.dpreview.com/products/panasonic/slrs/panasonic_dmcg6">Panasonic DMC-G6</a>, and <a href="http://www.dpreview.com/products/sony/slrs/sony_a6000">Sony a6000</a> mirrorless cameras.</p>\r\n<h3>Nikon D5500 key features</h3>\r\n<ul><li>24.2MP CMOS sensor with no optical low-pass filter</li>\r\n<li>Ultra-compact and lightweight body</li>\r\n<li>Multi-CAM 4800DX 39-point autofocus system</li>\r\n<li>2,016-pixel RGB metering sensor, used for 3D subject tracking in AF-C</li>\r\n<li>Sensitivity range of ISO 100-25,600</li>\r\n<li>5 fps continuous shooting</li>\r\n<li>1/4000 sec maximum shutter speed</li>\r\n<li>3.2", 1.2M dot fully-articulating touchscreen LCD display</li>\r\n<li>1080/60p video with clean output over HDMI and Flat Picture Control</li>\r\n<li>Built-in Wi-Fi</li>\r\n</ul>\r\n\r\n<p>The D5500 appears to use the same 24.2MP CMOS sensor as the D5300, though it is interesting to note that its top ISO setting of 25,600 is no longer an ''extension'', as was the case previously. There''s continues to be no optical low-pass filter in front of the sensor, which maximizes resolution, though moiré may be an unwanted side effect. The D5500 also features Nikon''s latest Expeed 4 image processing engine.</p>\r\n<p>The design of the D5500 has changed for the better. It uses what is known as a <a href="http://en.wikipedia.org/wiki/Monocoque">monocoque</a> design which allows the body to be a single unit that also ''increases durability without weighing it down'', according to Nikon. Indeed, the camera is very light and compact - even more than the D3300. The grip is also much deeper than on the D5300, making it a whole lot easier to hold onto. Nikon has also added touch functionality to the already-nice 3.2" fully articulating LCD, making menu navigation a bit less tedious.</p>\r\n<p>In the video department, the D5500 continues to support 1080/60p recording but now offers a ''Flat'' Picture Control, which allows for easier color grading in post-production.</p>\r\n<p>Something has disappeared though, and that''s the built-in GPS that was featured on the D5300. It''s probably a safe bet that Nikon is assuming that people will use their smartphone app to handle geotagging on the D5500.</p>\r\n<p><span style="font-size:12pt;"><strong><a href="http://www.dpreview.com/reviews/nikon-d5500?utm_campaign=internal-link&amp;utm_source=reviews-latest-widget&amp;utm_medium=image&amp;ref=reviews-latest-widget">dpreview</a><br /></strong></span></p>\r\n<p><a href="http://www.nikonusa.com/en/Nikon-Products/Product/dslr-cameras/D5500.html">Nikon</a></p>\r\n<p> </p>', 4, 'cameras-75', '49347.jpg', '49347.jpg,03076.png,44236.jpg,44106.jpg,17755.jpg', '796.99', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `uid` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`uid`, `role`) VALUES
(1, 2),
(2, 2),
(3, 1),
(5, 2),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'user', 'user@domain.com', '39a0f738ce71f8af777634261715a56604556ef6'),
(2, 'user2', 'user2@domain.com', '39a0f738ce71f8af777634261715a56604556ef6'),
(3, 'admin', 'admin@domain.com', '609d72df3f01f6fd2314a9d5c992fb02102dd82e'),
(5, 'sasha', 'sanekagr@walla.com', '609d72df3f01f6fd2314a9d5c992fb02102dd82e'),
(9, 'sasha2', 'sanekagr@gmail.com', '39a0f738ce71f8af777634261715a56604556ef6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `contact_log`
--
ALTER TABLE `contact_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`role_id`), ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `categorie_id` (`categorie_id`), ADD KEY `categorie_id_2` (`categorie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD KEY `uid` (`uid`,`role`), ADD KEY `role` (`role`), ADD KEY `role_2` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_log`
--
ALTER TABLE `contact_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`role`) REFERENCES `permissions` (`role_id`),
ADD CONSTRAINT `roles_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
