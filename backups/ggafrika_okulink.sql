-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2024 at 03:48 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggafrika_okulink`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodations`
--

CREATE TABLE `accomodations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `rates` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accomodations`
--

INSERT INTO `accomodations` (`id`, `name`, `slug`, `category`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `location`, `rates`, `description`, `user_id`, `published`, `created_at`, `updated_at`) VALUES
(7, 'Marjan Apartment', 'Marjan-Apartment', 'apartments', 'images/Eh69BjSNTPT7oMnpJkY7JalhaKF6I2XDnYkkhKk9.jpg', 'images/2b4mzJaDW4mSgVAtaSvZMeuHt5LtDZGJAdlQSBHg.jpg', 'images/xPO74NKsquvMDdo9Eadnr5AE0SB9YtBK39yR31PL.jpg', 'images/iXCaPfbHl1YudhcZX6OueHeTlMPByaqxhbyX8Un5.jpg', '', '', 'Mombasa Tudor island', '13500', '<p>Exclusive 2bedroom fully furnished located in Tudor Mombasa island. The facility is open for daily and monthly rental</p>', 1, 1, '2023-01-28 01:45:39', '2023-01-28 01:45:46'),
(8, 'Executive 3bedroom', 'Executive-3bedroom', 'apartments', 'images/mSq6SABOxWB8MjtBReaMyQvI3N8nwzuUonR5HzaE.jpg', 'images/PLfYGLHuRuJ51LunBem2u2HWfFQhiS92RspXhNRq.jpg', 'images/D2qHUz507vx0jwg8GcB79IqPr7ZJ3YHP2SRK44tK.jpg', 'images/L220RN1DiT4zofn5xAYxwM6h1gYU1dXSqcY4KDmF.jpg', '', '', 'Nyali Mombasa', '21000', '<p>Come down to Mombasa and unwind at this spacious 3 bedroom apartment in Nyali. Perfect for friends, families and colleague.</p><p><br></p><p><b>Key features</b>&nbsp;</p><ul><li>* Swimming pool&nbsp;</li><li>* Airconditioners and fans</li><li>* 3 spacious bedrooms ensuite</li><li>* WIFI</li><li>*Smart Tv</li><li>* Secured parking&nbsp;</li><li>* Equipped kitchen&nbsp;</li><li>* Self catering&nbsp;</li><li>* Housekeeper available&nbsp;</li><li><br></li><li>*Comfortably fits 6 people&nbsp;</li><li><br></li></ul>', 1, 1, '2023-01-30 18:20:38', '2023-01-30 18:20:55'),
(9, 'Affluent 3bedroom sea view', 'Affluent-3bedroom-sea-view', 'apartments', 'images/5A32xRSPMpYd3ZJp9ijmRScorAB4BMOP7h4txtgo.jpg', 'images/65Cm2t6Pu2cNCaL3sSCyl7M9zpxQ7LggNkPDhytW.jpg', 'images/Xx2ACdHipqvrPRhcm8WsvG0A6bAM69BBxIGXB06w.jpg', 'images/ZUU1BgMrG676ZSQsK8a0GO0WljKjl0Ni11XTb1Jq.jpg', '', '', 'Shanzu Mombasa', '14500', '<p>A luxurious sea view 3 bedroom apartment located in Shanzu, Mombasa.&nbsp;</p><p><br></p><p>Sleeps 6 people at the price of ksh 14500 per night.</p><p>Contact: +254701790144 |info@okulinksafaris.com</p><p><br></p><p><b>Key features</b>:&nbsp;</p><p><br></p><ul><li>Beachfront</li><li>* Swimming pool</li><li>* Airconditioners&nbsp;</li><li>* 3 spacious bedroom all ensuite</li><li>* Large balcony with Seaview</li><li>* WIFI</li><li>*Smart Tv</li><li>* Lift and staircase case</li><li>* Secured parking</li><li>* Equipped kitchen</li><li>* Self catering</li></ul>', 1, 1, '2023-01-30 18:39:37', '2023-01-30 18:39:51'),
(10, 'Luxurious duplex Seaview apartment', 'Luxurious-duplex-Seaview-apartment', 'apartments', 'images/Y2utEFIY3dvtmRGkHLKU99T5PNABWq3pHEMx8ZJq.webp', 'images/lFxTJhE8TMCTu47Zkxmvh2DCHprck7JAN45zCJ8y.webp', 'images/VHyIXIRALW2RhXF5jGYeBBZ6fXpbhZrUV5srtUu3.webp', 'images/NVs6p63tsZsaioXXFLyiTgGBLbIszmTgAzKUnqv5.jpg', '', '', 'Shanzu Mombasa', '14000', '<p>\"I followed my heart, and it led me to the Shanzu, Mombasa. Seaview experience at best. Unwind at this 3 bedroom duplex beachfront apartment with breathtaking views&nbsp; Perfect for soul healing, liberal vacation, open staycation.</p><p><br></p><p><b>Key features</b></p><ul><li>* Beachfront</li><li>* Swimming pool&nbsp;</li><li>* Airconditioners&nbsp;</li><li>* 3 spacious bedrooms all ensuite&nbsp;</li><li>* Large balconies with Seaview 🌊&nbsp;</li><li>* WIFI and NETFLIX</li><li>* Lift and staircase case</li><li>* Secured parking&nbsp;</li><li>* Equipped kitchen</li><li>* Self-catering</li><li>* Housekeeping</li><li>* Chef on request at extra cost&nbsp;</li><li><br></li></ul><p>* Comfortably fits 6 people&nbsp;</p><p><br></p><p><b>Rates</b></p><ul><li>* High season Dec to 3rd Jan- 24k per night&nbsp;</li><li>* High season 4th to 31st Jan- 17k per night</li><li>*Low season from 1st Feb- 14k per night&nbsp;</li></ul>', 1, 1, '2023-01-31 11:50:33', '2023-01-31 11:50:40'),
(11, 'Neptune Palm Hotel', 'Neptune-Palm-Hotel', 'botique-hotels', 'images/H7TPxlsTudjf4GGDLUw37RYneZU4qlTNDkfzXtHm.webp', 'images/9cdowrCnaPH20a7uOj059ryNJDk435RuVGbpRkrp.jpg', 'images/jwfOQAq6OjQMMxB39g1nMMQENeacXhEKzbbtP5XC.webp', 'images/7THobk9tkkS1ctd2DP5zJs4tPx5oru3zRxoZjg7k.webp', '', '', 'Diani Ukunda', '12000', '<p><br></p><p>Neptune palm beach boutique resort and spa extravaganza banquet.</p><p>From Ksh. 9,500 per person sharing per night on all inclusive</p><p><b>Package Includes</b>:</p><p>One child (3-12yrs) sharing with 1 Adult is free of charge.</p><p><br></p><p>Buffet restaurants serving breakfast, lunch and dinner.</p><p><br></p><p>Two a\'la carte restaurants (Italian &amp; Indian Cuisines) open for dinner at Diani hotels.</p><p><br></p><p>All day snacks and unlimited selected drinks as per bar opening times.</p><p><br></p><p>Full Access to Neptune Palm Beach Boutique Resort &amp; Spa for guests booked in the Master Suite at Neptune Village Beach Resort &amp; Spa.</p><p><br></p><p>Complimentary return airport transfers from Ukunda Airstrip to Diani Hotels for upto 9 pax.</p><p><br></p><p>𝗡𝗕: 𝗟𝗜𝗣𝗔 𝗣𝗢𝗟𝗘𝗣𝗢𝗟𝗘 𝗔𝗩𝗔𝗜𝗟𝗔𝗕𝗟𝗘 <b>ACCEPTED</b>&nbsp;</p><p><br></p><p><br></p>', 1, 1, '2023-01-31 11:58:42', '2023-01-31 11:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `content` text NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `content`, `published`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'The  South Coastal Circuit', 'images/7QVBpvj3oM1s0l7wohcBY3ObKJ7QZMuRBKX8y3Z8.webp', '', '', '', '', '', '<p dir=\"ltr\">Mombasa’s south coast, is an exceptional seaside destination with impeccable and personalized services in the hospitality industry. It\'s home for the luxurious boutique and exotic accommodations facilities best suited for individuals who long for coastal paradise and serene surroundings it should be noted that mode of accessibility is by air (ukunda airstrip) and ferry (likoni).<br>\r\n.<br>\r\nOther secluded beaches south of Diani are Galu, Msambweni, Funzi island&nbsp;and&nbsp;<u>Chale island</u>, and these tend to be more exclusive than the north coast beaches. Other seashores include Shelly near the Likoni Ferry and then Tiwi that is adjacent to Diani ending with Shimoni near the Tanzania border.<br>\r\nDuring your tour we highly recommend that you take full advantage of the sand and surf by partaking of the many water sports activities, all of which are available to book at the time of planning your trip to Kenya Coast. Even if you are a novice, you will find an aquatic activity that fits your personal taste, whether it be reeling in a marlin or sailfish during an exhilarating deep-sea fishing excursion, sailing through tranquil waters, skimming across the surface of the Indian Ocean while windsurfing, kite surfing or waterskiing or discovering endemic marine species while snorkeling or scuba diving at Kisite Marine Park or nearby reefs.</p><p dir=\"ltr\">World record catches make the south coast a much-desired destination for anglers, and we recommend that your adventure-seeking beach front tour of Kenya include some time set aside for catching a giant of the Indian Ocean, such as marlin, swordfish, sailfish, yellowfin tuna, to name just a few of the most challenging fish. Billfish season is November through March while August to October is the Yellowfin Tuna season, and many other species are found in the waters during any time of the year. Whether you need rejuvenation after your safari or time to rest after an international flight to Kenya, the picturesque setting of Mombasa’s south coast is sure to revive your energy.</p><p>\r\n\r\n</p><p dir=\"ltr\">Moreover Diani boasts of natural forest reserve wildlife and historical sites. We highly recommend our guest to tour Shimoni Slave Caves best know for harboring slaves during slave trade . Shimba hills well known for waterfalls and other natural excursion and Bora Bora wildlife reserve.</p>', 1, 0, '2022-11-04 19:26:33', '2023-01-26 06:30:20'),
(7, 'Experience the Best of Africa with Okulink Safaris', 'images/edOBcstpKL0PydAm7ouozLeQ6RIPucUccLwWsfa2.jpg', 'images/6MjXFUEifyFb6TmCJkPkS8p5ceNBOnl57QBfIvlV.jpg', 'images/zRs3PBwKqUQQbQo4S1KU2e3lfYEnZhcFnu7CBmd8.jpg', 'images/EsmpwMEagEQRjydJkGgbuzc97ruHxDqGh5nunnni.jpg', 'images/pD2vEBGUbvdn1uWyCOQpNxNxPdZeimG3tZnNZpXh.jpg', 'images/fdnLmWRdHxXX6k8uhNnygavXNtOOqDkMGsVeRyIv.jpg', '<p><br></p><p>Africa is a land of vibrant cultures, stunning landscapes, and incredible wildlife. Whether you\'re seeking an adventure-filled safari, a cultural immersion, or a relaxing beach getaway, Africa has something to offer every traveler. At Okulink Safaris, we specialize in creating unforgettable experiences that showcase the best of this amazing continent.</p><p>Embark on a Safari Adventure</p><p><span style=\"font-size: 1rem;\">One of the most popular activities in Africa is embarking on a safari adventure. With Okulink Safaris, you can experience the thrill of getting up close and personal with the iconic \"Big Five\" animals – lions, leopards, elephants, rhinos, and buffaloes – as well as a host of other incredible wildlife. Our experienced guides will take you on game drives through national parks such as the Masai Mara in Kenya or Kruger National Park in South Africa, where you\'ll witness nature in all its glory.</span><br></p><p><br></p><p>Explore Africa\'s Cultures</p><p><br></p><p>Africa is also a land of rich and diverse cultures, with hundreds of different ethnic groups each with their own traditions, music, and art. At Okulink Safaris, we offer cultural tours that take you off the beaten path to meet local communities and learn about their way of life. Whether you\'re visiting a Maasai village in Tanzania, learning to play the djembe drum in Senegal, or exploring the ancient rock-hewn churches of Ethiopia, you\'ll gain a deeper understanding of the continent\'s fascinating cultures.</p><p><br></p><p>Relax on Africa\'s Beautiful Beaches</p><p><br></p><p>For those seeking a more laid-back vacation, Africa\'s beautiful beaches offer the perfect getaway. With miles of pristine coastline and crystal-clear waters, destinations such as Zanzibar in Tanzania and the Seychelles offer a tropical paradise that\'s hard to beat. Okulink Safaris can arrange a range of beach activities such as snorkeling, scuba diving, and sunset cruises to help you make the most of your time in this stunning region.</p><p><br></p><p>Choose Okulink Safaris for Your Next African Adventure</p><p><br></p><p>At Okulink Safaris, we\'re passionate about showcasing the best of Africa and creating unforgettable travel experiences for our clients. With our experienced guides, personalized itineraries, and commitment to sustainable tourism, we\'re confident that we can help you create the trip of a lifetime. Contact us today to start planning your African adventure.</p><p><br></p><p><br></p><p><br></p>', 1, 1, '2023-03-18 07:25:25', '2023-03-18 07:25:54'),
(8, 'Embark on a Thrilling Adventure with Okulinksafaris Road Trips', 'images/6SkiVwJ64UWcMF91kIZ92EAo1Lasw34PLD0YEEd1.jpg', 'images/frOmurWgD4RIdE5ipzHKELCNHnxC2wYpuMTeUTUG.jpg', NULL, NULL, NULL, NULL, '<p><span style=\"font-size: 1rem;\">Are you looking for an unforgettable adventure? Do you want to explore the hidden gems of Africa\'s vast and diverse landscapes? If so, then Okulinksafaris road trips are the perfect way to experience the beauty and excitement of Africa.</span><br></p><p>Our road trips offer a unique opportunity to discover the stunning scenery, wildlife, and culture of Africa. Whether you want to embark on a thrilling safari in the Serengeti, climb Mount Kilimanjaro, or explore the vibrant cities of East Africa, Okulinksafaris has got you covered.</p><p><br></p><p>Our road trips are designed to cater to all types of travelers, whether you\'re a solo adventurer or traveling with family and friends. We offer a range of customizable tours and packages to suit your preferences and budget.</p><p>One of our most popular road trip packages is the Serengeti Safari, which takes you on a once-in-a-lifetime journey through the world-famous Serengeti National Park You\'ll have the chance to witness the majestic wildebeest migration, spot the \"Big Five\" (lions, elephants, leopards, buffalos, and rhinos), and experience the unique culture of the Maasai people.</p><p>For those looking for a more active adventure, our Mount Kilimanjaro climb package offers a challenging yet rewarding experience. You\'ll hike through lush forests, rocky terrain, and icy glaciers to reach the summit of Africa\'s highest mountain. Along the way, you\'ll be accompanied by experienced guides who will ensure your safety and provide you with valuable insights into the local flora and fauna.</p><p>At Okulinksafaris, we believe that travel should be an enriching and transformative experience. That\'s why we focus on responsible and sustainable tourism practices, supporting local communities and conservation efforts in the regions we operate.</p><p>So why wait? Embark on a thrilling adventure with Okulinksafaris road trips and discover the beauty and wonder of Africa. Contact us today to book your trip and start your journey towards a life-changing experience.</p>', 1, 1, '2023-03-18 07:46:31', '2023-03-18 08:10:23'),
(10, 'Experience the Majesty of Maasai Mara with Okulinksafaris', 'images/sTN9t4slaaiDi3QZZITsKhgJwoXtxDHJVjPLudyq.jpg', 'images/n5GVsseWFn5oT5TRNskK8BQvL51gH1kC1Q66fRkS.jpg', NULL, NULL, NULL, NULL, '<p>Maasai Mara is one of the most incredible destinations in the world, known for its breathtaking landscapes, abundant wildlife, and vibrant Maasai culture. And there\'s no better way to experience this natural wonderland than with Okulinksafaris, your expert guide to the magic of Maasai Mara.</p><p>With Okulinksafaris, you\'ll have the opportunity to explore the vast expanse of the Maasai Mara National Reserve, home to the largest concentration of wildlife in Africa. You\'ll have the chance to witness the Great Migration, one of the most spectacular natural phenomena on the planet, as millions of wildebeest and zebras make their way across the plains in search of food and water.</p><p>But that\'s just the beginning of what this stunning destination has to offer. You\'ll also have the chance to spot Africa\'s iconic \"Big Five\" – lions, leopards, elephants, rhinos, and buffalos – as well as countless other species, from cheetahs to giraffes to hyenas.</p><p>But Maasai Mara is more than just a wildlife destination. It\'s also home to the Maasai people, a proud and vibrant culture that has lived in harmony with the land for centuries. With Okulinksafaris, you\'ll have the opportunity to connect with the Maasai people and learn about their customs, traditions, and way of life.</p><p>And when the sun sets over the savannah, you\'ll retire to luxurious lodges and camps, where you can relax and reflect on the day\'s adventures. With Okulinksafaris, you\'ll experience the best of Maasai Mara in comfort and style.</p><p>At Okulinksafaris, we understand that every traveler is different, and that\'s why we offer personalized tour packages tailored to your specific interests and preferences. We work with you to create an itinerary that fits your budget, time frame, and desired level of activity.</p><p>So, what are you waiting for? Book your Maasai Mara adventure with Okulinksafaris today, and experience the majesty of one of Africa\'s most awe-inspiring destinations.</p>', 1, 1, '2023-03-18 08:09:47', '2023-03-18 08:10:28'),
(11, 'Take to the Skies with Okulink- Air Safaris', 'images/ZS9xZmtZ0TXEmgitJWKUL4vTio4MPul1tPPqhtnt.jpg', 'images/1coeQclUmB1H617ADztVtJKZfjkte2wKtpc7gI4J.jpg', NULL, NULL, NULL, NULL, '<p><span style=\"font-size: 1rem;\">If you\'re looking for a unique and unforgettable way to experience Africa\'s natural wonders, look no further than Okulink air safaris. With our expertly crafted itineraries and experienced pilots, you\'ll have the opportunity to see Africa\'s most breathtaking destinations from a whole new perspective.</span><br></p><p>Whether you\'re interested in exploring&nbsp;<span style=\"font-size: 1rem;\">expansive nature of Kenyan\'s wild,</span><span style=\"font-size: 1rem;\">&nbsp;</span><span style=\"font-size: 1rem;\">the lush rainforests of Uganda, or the sweeping savannahs of Tanzania, our air safaris give you a bird\'s-eye view of these incredible landscapes. You\'ll soar over towering mountains, winding rivers, and endless expanses of green, seeing Africa\'s diverse flora and fauna from a completely different angle.</span></p><p>And the best part? You\'ll have the opportunity to spot wildlife that you might not be able to see from the ground. With our air safaris, you\'ll have the chance to witness herds of elephants, giraffes, and other animals moving across the land, giving you a unique and unforgettable perspective on Africa\'s incredible biodiversity.</p><p>At Okulinksafaris, we understand that every traveler is different, and that\'s why we offer personalized air safari packages tailored to your specific interests and preferences. Whether you\'re looking for a quick day trip or a multi-day adventure, we can create an itinerary that fits your budget, time frame, and desired level of activity.</p><p>And when you\'re not up in the air, you\'ll stay in luxurious lodges and camps, where you can relax and reflect on your unforgettable experiences. With Okulinksafaris, you\'ll discover and explore Africa\'s natural wonders in comfort and style.</p><p>So, if you\'re ready to take your African adventure to new heights, book an air safari with Okulinksafaris today info@okulinksafaris.com. call/ WhatsApp us; +254701700144. With our expert pilots, personalized itineraries, and unparalleled views, you\'re sure to have the trip of a lifetime.</p>', 1, 1, '2023-03-18 08:24:26', '2023-03-18 10:24:25'),
(12, 'Essentials Travel Items for Your Safaris', 'images/oWOMRMqLmBYUYVvgEgzdfYGd0JrZBDxorwsV5cCb.jpg', 'images/56mvb1O5ag5yZP0WrVWObotQM4jtxfNLqmF4WOc2.jpg', NULL, NULL, NULL, NULL, '<p><span style=\"font-size: 1rem;\">Are you planning to embark on an unforgettable Okulinksafari adventure? If so, it\'s important to make sure you have all the travel products you need to make your trip as comfortable and stress-free as possible. Here are some essential travel products to consider when planning your Okulinksafari adventure:</span><br></p><p><br></p><p>Backpack: A good <a href=\"https://www.okulinksafaris.com/\" target=\"_blank\">backpack</a> is essential for carrying your personal belongings such as sunscreen, camera, water bottle, and snacks. Look for a backpack that is lightweight, durable, and has multiple compartments for easy organization.</p><p><br></p><p>Water <a href=\"https://www.okulinksafaris.com/\" target=\"_blank\">Bottle</a>: Hydration is important when traveling, especially in hot climates. Invest in a good quality water bottle that is easy to carry and can hold a sufficient amount of water to last throughout the day.</p><p><br></p><p><a href=\"https://www.okulinksafaris.com/\" target=\"_blank\">Sunscreen</a>: Protection from the sun\'s harmful rays is crucial, especially during outdoor activities. Choose a sunscreen with a high SPF rating and apply it generously before heading out.</p><p><br></p><p>Insect Repellent: To avoid mosquito bites and other insect-related issues, it\'s important to have an effective insect repellent. Look for a product that contains DEET or other effective insect repellent ingredients.</p><p><br></p><p>Portable Charger: In today\'s world, staying connected is essential, so a portable charger is a must-have travel accessory. Look for a portable charger that can hold enough charge to keep your electronic devices powered up for the entire day.</p><p><br></p><p>First Aid Kit: Accidents can happen when traveling, so it\'s always a good idea to carry a small first aid kit with you. Make sure it contains essentials like bandages, antiseptic cream, and painkillers.</p><p><br></p><p>Travel Adapter: If you\'re traveling internationally, a travel adapter is a must-have item. Make sure you choose a travel adapter that can accommodate the type of plug used in the country you are visiting.</p><p><br></p><p>Travel Pillow: Long flights or bus rides can be tiring, so a travel pillow can be a lifesaver. Look for a pillow that is lightweight and can easily be packed in your backpack.</p><p><br></p><p>Quick-Dry Towel: A quick-dry towel can be a valuable travel accessory, especially if you plan to participate in water activities like swimming or rafting. Look for a towel that is lightweight, compact, and dries quickly.</p><p><br></p><p>Camera: Okulinksafari offers breathtaking scenery and wildlife, so a good camera is a must-have. Choose a camera that is lightweight, durable, and has good zoom capabilities.</p><p><br></p><p>In conclusion, packing the right travel products is essential to ensuring a smooth and enjoyable Okulinksafari adventure. Make sure you have all the essentials listed above, and don\'t forget to check the weather conditions before packing to ensure you have the appropriate clothing and gear. Happy travels!</p><p><br></p><p><br></p><p><br></p><p><br></p><p>Aki Ken</p><p>What\'s okulinksafaris.com</p><p><br></p><p>As an AI language model, I don\'t have access to current information outside of the internet. However, based on my search results, Okulinksafaris.com is a website that offers safari tours and travel packages in various countries in Africa. They specialize in creating customized safari experiences for individuals, families, and groups, with a focus on responsible tourism and wildlife conservation. Their tours include activities such as game drives, guided walks, cultural experiences, and luxury accommodations. The company also offers travel planning services to help clients plan their safari adventure from start to finish.</p><p><br></p><p><br></p><p><br></p><p><br></p><p>Aki Ken</p><p>You are correct&nbsp;</p><p><br></p><p>Thank you for confirming that the information I provided was correct. If you have any other questions or if there\'s anything else I can assist you with, please don\'t hesitate to ask.</p><p><br></p><p><br></p><p><br></p><p><br></p><p>Aki Ken</p><p>Do you mind writing an article about essentials travel products for okulinksafaris&nbsp;</p><p><br></p><p>Sure, I can certainly do that! Here\'s an article about essential travel products to consider when planning an Okulinksafari adventure:</p><p><br></p><p>Are you planning to go on an Okulinksafari adventure? If so, you\'re in for an amazing experience! However, before you pack your bags and set off, it\'s important to make sure you have all the travel products you need to make your trip as comfortable and enjoyable as possible. Here are some essential travel products to consider when planning your Okulinksafari adventure:</p><p><br></p><p>Sunscreen: The sun in Africa can be intense, so it\'s important to protect your skin from harmful UV rays. Choose a sunscreen with a high SPF rating and apply it generously before heading out on your safari adventure.</p><p><br></p><p>Insect Repellent: Mosquitoes and other insects can be a nuisance when traveling in Africa. Invest in an effective insect repellent to keep them at bay.</p><p><br></p><p>Lightweight Clothing: Africa can get hot, so pack lightweight and breathable clothing to keep cool. Long-sleeved shirts and pants can also help protect you from the sun and insects.</p><p><br></p><p>Comfortable Walking Shoes: You\'ll be doing a lot of walking on your safari adventure, so it\'s important to have comfortable and sturdy walking shoes. Choose shoes that are breathable, have good grip, and provide support to your feet.</p><p><br></p><p>Portable Charger: In today\'s world, staying connected is important, even when you\'re on a safari adventure. A portable charger will ensure that your electronic devices are charged and ready to use when you need them.</p><p><br></p><p>Camera: An Okulinksafari adventure is an incredible opportunity to see amazing wildlife and scenery. Make sure you bring a good camera to capture those memories!</p><p><br></p><p>Binoculars: You\'ll want to get up close and personal with the wildlife, but it\'s important to keep a safe distance. A good pair of binoculars will help you get a closer look without getting too close.</p><p><br></p><p>Water Bottle: It\'s important to stay hydrated when traveling in Africa, so make sure you bring a good quality water bottle that can hold a sufficient amount of water to last throughout the day.</p><p><br></p><p>Hat: A hat can help protect your face and head from the sun, as well as keep your hair out of your face during windy game drives.</p><p><br></p><p>First Aid Kit: Accidents can happen, so it\'s important to carry a small first aid kit with you. Make sure it contains essentials like bandages, antiseptic cream, and painkillers.</p><p><br></p><p>In conclusion, packing the right travel products is essential to ensuring a comfortable and enjoyable Okulinksafari adventure. Make sure you have all the essentials listed above, and don\'t forget to check the weather conditions before packing to ensure you have the appropriate clothing and gear. Happy travels!</p>', 1, 1, '2023-03-18 10:21:46', '2023-03-18 10:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` text NOT NULL,
  `sub_category` text NOT NULL,
  `sub_category1` text NOT NULL,
  `sub_category2` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `sub_category`, `sub_category1`, `sub_category2`, `created_at`, `updated_at`) VALUES
(2, 'Wildlife Safaris', 'Amboseli National Park', 'Nairobi National Park', 'Nakuru National Park', '2022-11-04 17:20:43', '2022-11-04 17:20:43'),
(4, 'Road Trips', 'Nanyuki', 'Naivasha', 'Machakos', '2022-11-05 08:25:46', '2022-11-05 08:25:46'),
(5, 'City tours', 'Nairobi City', 'Kisumu City', 'Nakuru city', '2022-11-05 11:39:24', '2022-11-05 11:39:47'),
(6, 'Safaris', 'Maasai mara', 'Nairobi National Park', 'North Coast', '2023-01-11 14:03:50', '2023-01-11 14:03:50'),
(7, 'Wildlife Safaris', 'Maasai Mara', 'Amboseli national park', 'Tsavo national park', '2023-03-18 10:48:47', '2023-03-18 10:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `destinations` text NOT NULL,
  `nationality` text NOT NULL,
  `travel_date` text NOT NULL,
  `adults` text NOT NULL,
  `kids` text NOT NULL,
  `budget` text NOT NULL,
  `medium` text NOT NULL,
  `luxury` text NOT NULL,
  `additional_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `when` date NOT NULL,
  `starts` time NOT NULL,
  `ends` time NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `slug`, `category`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `location`, `price`, `when`, `starts`, `ends`, `description`, `user_id`, `published`, `created_at`, `updated_at`) VALUES
(6, 'Magical Kenya Ladies Open', 'Magical-Kenya-Ladies-Open', 'Charities', 'images/wTFm0VqvyBm0DMUrXW0lMLMRs5zYymHdqEhLr312.jpg', 'images/GBiMOA4mjfVIzEfhwmKGDN7tOq0ey94Bnc1CpUef.jpg', '', '', '', '', 'Vipingo Ridge, Baobab Course', '580', '2023-02-05', '06:00:00', '19:00:00', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(51, 51, 51); font-family: Muli, sans-serif; font-size: 12.6px;\"><li style=\"background: url(&quot;../img/tick_16.png&quot;) left 5px no-repeat; padding: 3px 0px 3px 22px; margin: 0px; line-height: 20px !important;\"><p style=\"color: rgb(72, 72, 72); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 14px;\">***Public health measures and&nbsp;restrictions must be followed.<br>Only fully vaccinated people can enter after going through the temperature check at the entrance****<br><br>The hotly anticipated Magical Kenya Ladies Open is the Ladies European Tour (LET) season opener for 2023, &nbsp;returning to Vipingo Ridge, Kilifi County, in February.</p><p style=\"color: rgb(72, 72, 72); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 14px;\"><br>Preparations for the event are in top gear as organisers&nbsp;<a class=\"vglnk\" href=\"http://u.com/\" rel=\"nofollow\" style=\"color: rgb(189, 30, 30);\">U.COM</a>&nbsp;Event and Vipingo Ridge prepare to host a spectacular tournament, the only women\'s professional golf competition in the East African region. The tournament will be held at the Ridge’s 18-hole Baobab Course, the continent’s single PGA-accredited course.</p><p style=\"color: rgb(72, 72, 72); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 14px;\"><br>First held at the end of 2019, the tournament features golfers from many different nationalities who battle it out for the prestigious title.</p></li></ul>', 1, 1, '2023-01-28 01:54:50', '2023-01-28 01:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`id`, `image`, `created_at`, `updated_at`) VALUES
(56, 'images/kxKBfvfAJPl8KJDDE9GtZo9Fw44WkzsMVWcVsBpq.jpg', '2023-03-18 09:21:17', '2023-03-18 09:21:17'),
(57, 'images/Yopc8a8vatpX7jDqY5UYDkyeOGFinMRIUk2q6pvs.jpg', '2023-03-18 09:22:04', '2023-03-18 09:22:04'),
(58, 'images/eNppcMc80WEvD8svWlqhjlxtTWOF6ILSKpdhdnID.jpg', '2023-03-18 09:23:07', '2023-03-18 09:23:07'),
(60, 'images/qFlL7nhql91DXLsThSm368MDVd83aXbGvUKx8Xg2.jpg', '2023-03-18 09:53:33', '2023-03-18 09:53:33'),
(61, 'images/dcVsPeo5x5MDNmKmcLEyqIqlmR4Vf2LOxHSEnfVC.jpg', '2023-03-18 09:55:06', '2023-03-18 09:55:06'),
(63, 'images/0qVEqOxoHbZvk1dXYqU6K0ePplfHvM3hFUOpABDA.jpg', '2023-03-18 10:04:21', '2023-03-18 10:04:21'),
(65, 'images/9pOjlSswRLxmQwERGRhgqsl2rcfGsd4p2KtTZBu4.jpg', '2023-03-18 10:07:31', '2023-03-18 10:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_000001_create_categories_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_05_01_071637_create_tours_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_05_01_081632_create_tour_booking_table', 1),
(8, '2022_05_05_103428_create_enquiries_table', 1),
(9, '2022_05_13_174630_create_blogs_table', 1),
(10, '2022_05_13_213354_create_highlights_table', 1),
(11, '2022_05_14_080334_add_videos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wawinyedwin44@gmail.com', '$2y$10$wbYXCfBajbUhzUgnVvUDYOwnR4HdOARPeF226ssya.GX7Rp/NSEFa', '2022-12-07 09:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity_available` int(11) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `location`, `price`, `quantity_available`, `description`, `user_id`, `published`, `created_at`, `updated_at`) VALUES
(3, 'La Roche-Posay Anthelios Shaka Spray Spf50+ 200ml', 'La-Roche-Posay-Anthelios-Shaka-Spray-Spf50+-200ml', 'Hair-and-beauty', 'images/i9zF80jxJ61DUeC7eQUAO1lAcS8Epa9CqPIxTSQU.png', 'images/JiWhWBLwRNttbaSvSeQ7Y3pbJJRN7DY1f3ncKpcW.jpg', '', '', '', '', 'Nairobi Mpaka road', '3520', 40, '<div id=\"topZone\" class=\"navbar navbar-default navbar-fixed-top\" data-location=\"2775eb32-1c23-41b4-842e-c00d37997d7f\" style=\"position: fixed; min-height: 50px; margin-bottom: 0px; border: 0px; right: 0px; left: 0px; z-index: 1030; top: 0px; padding-bottom: 0px; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\"><div class=\"container\" style=\"width: 360px; position: relative;\"><div id=\"branding\" class=\"row\"><div class=\"col-xs-3 hidden-sm hidden-md hidden-lg hidden-xl\" style=\"position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px; float: left; width: 90px;\"><ul class=\"nav nav-tabs\" style=\"border-bottom: 0px;\"><li style=\"position: relative; display: block; float: left; margin-bottom: -1px;\"><a id=\"mobileNavigation\" class=\"menu-link\" style=\"color: rgb(43, 48, 62); transition: all 0.4s ease-in-out 0s; position: relative; display: block; padding: 10px 15px; margin-right: 2px; line-height: 1.42857; border: 1px solid transparent; border-radius: 4px 4px 0px 0px; font-size: 25px;\"></a></li></ul></div></div></div></div><dt class=\"listclose\" style=\"line-height: 1.42857; margin-bottom: 10px; margin-top: 30px; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">Description</dt><dd style=\"line-height: 1.42857; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">La Roche Posay Anthelios spray with spf50 is light, moisturizing very high broad-spectrum sun protection that is ideal for all skin types. Its light formula with a non-greasy finish makes it easy to apply. Its very water-resistant, has fast absorption with a virtually invisible finish and does not leave an ashy look.</dd><dt style=\"line-height: 1.42857; margin-bottom: 10px; margin-top: 30px; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">Ingredients</dt><dd style=\"line-height: 1.42857; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">This product contains: AQUA / WATER • ALCOHOL DENAT. • HOMOSALATE • ETHYLHEXYL SALICYLATE • BUTYL METHOXYDIBENZOYLMETHANE • ETHYLHEXYL TRIAZONE • OCTOCRYLENE • GLYCERIN • PROPANEDIOL • BIS-ETHYLHEXYLOXYPHENOL METHOXYPHENYL TRIAZINE • C12-22 ALKYL ACRYLATE/HYDROXYETHYLACRYLATE COPOLYMER • DIISOPROPYL ADIPATE • DIISOPROPYL SEBACATE • DICAPRYLYL ETHER • TRIETHANOLAMINE • TOCOPHEROL • PHENYLBENZIMIDAZOLE SULFONIC ACID • ACRYLATES/C10-30 ALKYL ACRYLATE CROSSPOLYMER • CAPRYLYL GLYCOL • DROMETRIZOLE TRISILOXANE • SODIUM POLYACRYLATE • TRISODIUM ETHYLENEDIAMINE DISUCCINATE • PARFUM / FRAGRANCE</dd><dt style=\"line-height: 1.42857; margin-bottom: 10px; margin-top: 30px; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">How to use</dt><dd style=\"line-height: 1.42857; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">Shake the product well before use and apply a generous amount to the body &amp; face before exposure to the sun. Reapply again after exercise or swimming at least once every two hours.</dd><dt style=\"line-height: 1.42857; margin-bottom: 10px; margin-top: 30px; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">Precautions</dt><dd style=\"line-height: 1.42857; color: rgb(51, 51, 51); font-family: Inter; font-size: 13px;\">This product contains: AQUA / WATER • ALCOHOL DENAT. • HOMOSALATE • ETHYLHEXYL SALICYLATE • BUTYL METHOXYDIBENZOYLMETHANE • ETHYLHEXYL TRIAZONE • OCTOCRYLENE • GLYCERIN • PROPANEDIOL • BIS-ETHYLHEXYLOXYPHENOL METHOXYPHENYL TRIAZINE • C12-22 ALKYL ACRYLATE/HYDROXYETHYLACRYLATE COPOLYMER • DIISOPROPYL ADIPATE • DIISOPROPYL SEBACATE • DICAPRYLYL ETHER • TRIETHANOLAMINE • TOCOPHEROL • PHENYLBENZIMIDAZOLE SULFONIC ACID • ACRYLATES/C10-30 ALKYL ACRYLATE CROSSPOLYMER • CAPRYLYL GLYCOL • DROMETRIZOLE TRISILOXANE • SODIUM POLYACRYLATE • TRISODIUM ETHYLENEDIAMINE DISUCCINATE • PARFUM / FRAGRANCE</dd>', 1, 1, '2023-01-30 18:33:25', '2023-01-30 18:33:32'),
(4, 'In the Star Bath and Body work', 'In-the-Star-Bath-and-Body-work', 'Hair-and-beauty', 'images/eO8WmaUJ1RqB128tuh1756xzjzJA8CZtLPkKXyg0.jpg', 'images/03xmNUkfuWPsXCbWw4VY6XqEr2zeZlFNyrVglPd7.jpg', '', '', '', '', 'Country wide', '1799', 300, '<p>Bath &amp; Body works in the Stars combo and several other scents now available Get each item for only 2000. Ability for creativity by allowing combination and mixture of scents. If you need special package let us know beforehand and we\'ll definitely hook it up. </p><p>Reach us via call /WhatsApp: 0704257373.</p><p>visit us jubilee Exchange House MaMa Ngina Street opposite Java 4th floor suite #406<br></p>', 1, 1, '2023-02-12 16:22:02', '2023-02-12 16:22:46'),
(5, 'Old Spice  Swagger Gift', 'Old-Spice--Swagger-Gift', 'Hair-and-beauty', 'images/7pdHSLVaUMLHwA9U2JBdrNQpWm47gzfzU1WhfjkW.jpg', 'images/NN2AyXZNyczz9Xk3H59wHarFV5vGMDrITmho2cBa.png', '', '', '', '', 'Nairobi CBD', '6800', 30, '<p>Get the Antiperspirant Lotion Body wash and Body Spray.</p><p>Going for only 6696&nbsp; Speciality to packaging available upon request for proper presentation.</p><p> Call us&nbsp; WhatsApp us 0704257373. </p><p>Location Jubilee Exchange House MaMa Ngina Street opposite Java 4th floor suite 406<span style=\"font-size: 1rem;\">N</span></p><p><span style=\"font-size: 1rem;\">Nairobi Kenya&nbsp;</span></p>', 1, 1, '2023-02-12 16:33:37', '2023-02-12 16:36:25'),
(6, 'Antiperspirant, lotion body wash and spray', 'Antiperspirant,-lotion-body-wash-and-spray', 'Hair-and-beauty', 'images/Ifm468Oec5p0enlblYy53fC6i8WtQcRI3Hgij4k4.jpg', 'images/rvSb0VWluIjk8AR2IvZP6zihhahn6IrGvFj3OYuj.jpg', '', '', '', '', 'Nairobi cbd', '7448', 20, '<p>We are making gifting that special someone this season super easy!!!</p><p><br></p><p>Get the Antiperspirant, Lotion, Body wash and the body spray from us.&nbsp;</p><p><br></p><p>Get any combination for that woman in your life this season and they\'ll really love it.&nbsp;</p><p><br></p><p>Make their valentines special 😍</p><p><br></p><p>Get the pack for only 7448/- ,&nbsp; special packaging is available upon request for proper presentation 😉</p><p><br></p><p>Reach us via DM, Call/WhatsApp us 0704257373. We deliver countrywide 😎</p><p><br></p><p>You can also stop by our shop at:</p><p>Jubilee Exchange House,</p><p>Mama Ngina Street opposite Java,</p><p>4th floor suite # 406,</p><p>Nairobi.</p><p><br></p>', 1, 1, '2023-02-12 16:41:12', '2023-02-12 16:49:11'),
(11, 'Gillette Clear Dri Tech Cool Wave', 'Gillette-Clear-Dri-Tech-Cool-Wave', 'Hair-and-beauty', 'images/MTGNPAxnNjzpcF48R6AMaT0KzIjUv3rszEq1rHoM.jpg', 'images/rS3gjsheEbhVGGmaUJ6lPpfUq6YecOFcdAVdUYqr.jpg', '', '', '', '', 'Nairobi cbd', '1299', 60, '<p><span style=\"font-size: 1rem;\">Specially designed to offer 72-hour sweat protection, Dri-Tech technology, Non-irritant clear gel so it\'s very gentle to the skin without leaving any white marks.</span><br></p><p>Basically it\'s all you need in an antiperspirant!&nbsp;</p><p>Get this for only 1299/- for guaranteed freshness.</p><p>To order DM, Call/WhatsApp us on 0704257373. We deliver countrywide&nbsp;</p><p>You can also pick from our shop at:</p><p>Jubilee Exchange House,</p><p>Mama Ngina Street opposite Java,</p><p>4th floor suite # 406.</p>', 1, 1, '2023-02-12 17:01:19', '2023-02-12 17:01:31'),
(12, 'Polo Tshirts', 'Polo-Tshirts', 'fashion', 'images/3OXrgTlIzCwx1chZsojv753nv8vX6hlGKEUjZGhu.jpg', 'images/ASlxotlSPVu3314YW7fpAlVaPoTglURf2gKRzjMS.jpg', '', '', '', '', 'Country wide', '2200', 40, '<p>Polo shirts available in L to 2XL&nbsp;</p><p>Kshs. 2,200&nbsp;</p><p>&nbsp;Online </p><p>📞 0713557551</p>', 1, 1, '2023-02-12 17:08:22', '2023-02-12 17:08:30'),
(13, 'Sneakers', 'Sneakers', 'fashion', 'images/Bqz0c67cDrBMNqs6quq9dDbppd3BL4QzMemtDa1A.jpg', 'images/9fqHYCn27vThwFeCSrBvJINhyuC1dP7MoAxDoNi9.jpg', '', '', '', '', 'Country wide delivery', '4500', 3500, '<p>When it comes to simplicity, style and comfortability, these pairs always come in handy for your intensive ease to use as a travel ware&nbsp;</p><p> These pairs are available instore and online in sizes: 37Eu to 45EU&nbsp;</p><p>4500</p><p> 📞📩0710625165</p><p>📍Star Mall&nbsp; Shop G1</p><p>🌍Countrywide Deliveries Available</p>', 1, 1, '2023-02-12 17:35:04', '2023-02-12 17:35:12'),
(14, 'Classic hoodie', 'Classic-hoodie', 'fashion', 'images/K1XVEnZXo2RmdjgsvEBsMzJF1qJoyVTGa04tNV78.jpg', 'images/MingmaE3zmnrVRGaHwN3aoLgAV9Y315S9YKVhI4i.jpg', '', '', '', '', 'Country wide', '3300', 3500, '<p><span style=\"font-size: 1rem;\">Original product customized with authentic touch and classy taste.</span></p><p><span style=\"font-size: 1rem;\">From sizes small to XL.</span></p><p><span style=\"font-size: 1rem;\"> </span></p><p><span style=\"font-size: 1rem;\">@ Ksh3300</span></p><p><span style=\"font-size: 1rem;\">Plus&nbsp; size and kids sizes are available at slightly different prices, kindly call / text&nbsp; to make a purchase/ enquiries&nbsp;</span><span style=\"font-size: 1rem;\">.</span></p><p></p><p>📞0705691277 or 0714773113</p><p><span style=\"font-size: 1rem;\">1st floor room f11 Kenya Complex House Koinange street Nairobi CBD&nbsp;</span></p><p><span style=\"font-size: 1rem;\"><br></span></p><p><span style=\"font-size: 1rem;\"><br></span></p><p><span style=\"font-size: 1rem;\"><br></span></p>', 1, 1, '2023-02-12 17:43:49', '2023-02-12 17:44:03'),
(15, 'Canva Wall Art', 'Canva-Wall-Art', 'Foods-and-Groceries', 'images/GHurpR8mpsgIan8UAdC2sjnlXvedBh6mM1zepaGX.jpg', 'images/WViwItPGImOwYC6scGsclCZ8rTqVFeGiNHgloLgR.jpg', '', '', '', '', 'Westlands Nairobi', '5600', 20, '<p>Fill your space in a beautiful way with these canvas wall art pieces at affordable prices.</p><p>A1 size - 5000</p><p>A2 size - 3200</p><p>A3 size - 2500</p><p>A4 size - 2000</p><p><br></p><p>30 X 40 cm - 2500</p><p>40 X 50 cm - 3000</p><p>45 X 60 cm - 3300</p><p>60 X 75 cm - 4000</p><p>30 X 90 cm - 4000</p><p>60 X 60 cm - 4500</p><p>75 X 90 cm - 4500</p><p>75 X 100 cm - 5000</p><p>90 X 90 cm - 5300</p><p>120 X 60 cm - 6000</p><p>100 X 125 cm - 6800</p><p>100 X 150 cm - 8000</p><p><br></p><p>We also custom make them in your preferred sizes.</p><p>📍Westlands Commercial Center</p><p>Delivery within 24 hrs.</p><p>☎️ 0774193417</p>', 1, 1, '2023-02-12 17:49:08', '2023-02-12 17:49:23'),
(16, 'Canva Wall Ard', 'Canva-Wall-Ard', 'Home-Appliances-and-Accessories', 'images/VRwlMq1u4ITHhpMj5Fae5HTasq9mlG8gozmofHGe.jpg', 'images/bLxMQ3CClfU7ifA5oU6lnEe2YwEFpSY7TRaumrm3.jpg', '', '', '', '', 'Westlands Nairobi', '6500', 20, '<p>Fill your space in a beautiful way with these canvas wall art pieces at affordable prices.</p><p>A1 size - 5000</p><p>A2 size - 3200</p><p>A3 size - 2500</p><p>A4 size - 2000</p><p><br></p><p>30 X 40 cm - 2500</p><p>40 X 50 cm - 3000</p><p>45 X 60 cm - 3300</p><p>60 X 75 cm - 4000</p><p>30 X 90 cm - 4000</p><p>60 X 60 cm - 4500</p><p>75 X 90 cm - 4500</p><p>75 X 100 cm - 5000</p><p>90 X 90 cm - 5300</p><p>120 X 60 cm - 6000</p><p>100 X 125 cm - 6800</p><p>100 X 150 cm - 8000</p><p><br></p><p>We also custom make them in your preferred sizes.</p><p>📍Westlands Commercial Center</p><p>Delivery within 24 hrs.</p><p>☎️ 0774193417</p>', 1, 1, '2023-02-12 17:53:07', '2023-02-12 17:53:16'),
(17, 'Sisi Natural  Skin heal', 'Sisi-Natural--Skin-heal', 'Hair-and-beauty', 'images/CRGDRHaPOUZHeQaLZhkYgtqNKFzXSD7xsLLK9jbF.jpg', 'images/0QUWhSkHgnMFGEoroOXsA03vxlXe595o8y6PbCEv.jpg', '', '', '', '', 'Nairobi', '2500', 28, '<p>Skin has never been the same&nbsp;</p><p>Say goodbye to Frequent break outs, dry flaky skin, rough oily skin, dull skin, hyperpigmentation, countless black spots, acne scars and skin irritation.&nbsp;</p><p>Rates&nbsp; @2599</p><p>Start your acne free journey today ✨</p><p>Call 0798 876370</p><p>Pick and country delivery available&nbsp;</p>', 1, 1, '2023-02-12 18:02:25', '2023-02-19 09:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `category`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `location`, `price`, `description`, `user_id`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Pet grooming and training', 'Pet-grooming-and-training', 'Pet-and-animal-training', 'images/8LaWH0etjCnNCk3mv7leqBzNfH3QjlH9JauxkSDx.jpg', 'images/8LaWH0etjCnNCk3mv7leqBzNfH3QjlH9JauxkSDx.jpg', '', '', '', '', 'Mombasa / Diani', '2000', '<p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">When it comes to grooming, each dog is different. Our professional groomers specialize in offering the haircut that suits the needs of your individual pet. We offer a full-range of grooming services to pamper your pooch.<br>At Bestcare Pet Grooming we pride ourselves in going the extra mile to serve our clients and their pets.<br>Taking the time necessary to do it right, we ensure your pet has an enjoyable grooming experience with each visit.</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Our expert team of groomers combined with our state-of-the-art grooming system</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Call us 0722466091</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">&nbsp;removes hair and dirt while giving your dog a gentle water massage. From all breed grooming and specialty cuts, you will notice the difference immediately and enjoy a shed-free dog long after the treatment. &nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">OUR &nbsp;SERVICES</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">Hair cutting<br>Trimming<br>Shaving<br>Pet Grooming<br>Dog Training<br>Dog Walking<br>Teeth Brushing</p><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; word-break: break-word; line-height: 1.65; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">With more than 50 years’ combined experience, our expert staff has your dog’s needs at heart. We cater to your dog regardless of its size or temperament. When you want the best for your best friend, you can find peace of mind with Bestcare! &nbsp;Hire Reliable Dog Grooming,Dog Walking, Dog Training,Pet Training &amp; Cleaning Services.</p>', 1, 1, '2023-01-28 02:01:55', '2023-01-28 02:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `transport` text NOT NULL,
  `location` text NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `image` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `per_person_sharing` text NOT NULL,
  `single_room` text NOT NULL,
  `meals` text NOT NULL,
  `additional_info` text DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `hotel`, `transport`, `location`, `category`, `sub_category`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `per_person_sharing`, `single_room`, `meals`, `additional_info`, `published`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'Kili Spring Camp', 'Yes', 'Amboseli National Park', 'Tembea Ujionee', 'Amboseli National Park', 'images/UavVPe2dIG3kpCp0LAX4Y5oAA2xdDuH85nii9TMN.jpg', 'images/4KMgxcuQaS2i4imbHDpbHAFH0kaczcFc3h628nQK.jpg', 'images/JH0X6R6IoERyeojKrIneZ9duK6swvJkXxzVvuGZj.jpg', '', '', '', '', 'Ksh30,000', 'Ksh45,000', 'full board', '<div style=\"text-align: center;\"><br></div><div style=\"text-align: center;\"><br></div><div style=\"text-align: center;\"><h2 style=\"margin: 10px 0px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: bold; font-size: 20px; color: rgb(0, 0, 0); line-height: 40px; text-rendering: optimizelegibility; text-align: start;\">Home of the African Elephant”</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.6em; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: start;\">Crowned by Mount Kilimanjaro, Africa\'s highest peak, the Amboseli National Parks is one of Kenya\'s most popular parks. The name \"Amboseli\" comes from a Maasai word meaning \"salty dust\", and it is one of the best places in Africa to view large herds of elephants up close. Nature lovers can explore five different habitats here ranging from the dried-up bed of Lake Amboseli, wetlands with sulphur springs, the savannah and woodlands.&nbsp; They can also visit the local Maasai community who live around the park and experience their authentic culture.</p></div><div style=\"text-align: center;\"><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"font-weight: bolder;\"><br></span></span></font></div><div style=\"text-align: center;\"><font color=\"#000000\"><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"font-weight: bolder;\">INCLUSIVE OF</span></span></font></div><ul style=\"text-align: center;\"><li>&nbsp;Transportation&nbsp;</li><li>Refillable water bottle&nbsp;</li><li><span style=\"font-size: 1rem;\">Park entrance fees</span><br></li><li><span style=\"font-size: 1rem;\">Tour guide</span><br></li></ul><p style=\"text-align: center;\"><span style=\"font-weight: bolder;\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">EXCLUSIVE OF&nbsp;</font></span></p><ul style=\"text-align: center;\"><li><span style=\"font-size: 1rem;\">Anything not mentioned</span></li></ul><p style=\"text-align: center;\"><span style=\"font-size: 1rem;\"><br></span></p><p style=\"text-align: center;\"><span style=\"font-size: 1rem;\">&nbsp;</span><br></p>', 1, 0, '2022-11-05 10:11:20', '2023-01-26 06:29:08'),
(13, 'Neptune village Hotel', 'Yes (Within Diani and return SGR ticket)', 'Diani South Coast', 'Exciting Holiday Offers', 'South Coast', 'images/SnVUsXYLumGeDcylQTA9MCsPE5jILKgGParLxw5k.webp', 'images/6LJ2TSifBwUQLKTRfKzmHku5r0cVNdg6nxHBfFXm.jpg', 'images/tIg3U3p28pdoTnBrUfin6b3KupmTlTXD1J1RFBtS.jpg', '', '', '', '', '8800', 'Ksh14000', 'Yes {full board}', '<p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">INCLUSIVE OF</font></p><ul><li>&nbsp;Transportation from the pick point within Diani and drop off point</li><li>Refillable water bottle for outdoor activities</li><li>A visit to Bora bora wildlife reserve</li><li>A visit to Shimoni slave caves</li><li>Park entrance fees</li><li>Tour guide</li></ul><p><br></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">EXCLUSIVE OF&nbsp;</font></p><ul><li>Anything not mentioned</li></ul><p><br></p><p><u><b>NOTE</b></u></p><p>A visit to wasini dhow, dolphin excursion and snorkeling at kisite mpunguti and shimba hills national reserve are a half day activity&nbsp;</p><p><span style=\"font-size: 1rem;\">We offer package to those who want to explore the night life of the south coast comment when booking if you\'d be interested in exploring the two activities&nbsp;</span><br></p><p><br></p>', 1, 0, '2022-11-05 10:53:37', '2023-01-26 06:29:04'),
(14, 'Neptune palm Hotel', 'Yes (Within Diani and return SGR ticket)', 'Diani South coast', 'Exciting Holiday Offers', 'South Coast', 'images/PN546GL2OVbSdji4THxdrU8L4y3rQA5DKCgWtVzd.jpg', 'images/AHI0IcqcQVdY0LXweDu0DcUWH02Xyg5Mi6r4JlGY.jpg', 'images/Jx0g8Vb6jI9k2PJaJKwlLH111PNigTXq6Cn4OHFV.jpg', '', '', '', '', 'Ksh10,000', 'Ksh16,000', 'Yes {full board}', 'INCLUSIVE OF</font></p><ul><li> Transportation from the pick point within Diani and drop off point</li><li>Refillable water bottle for outdoor activities</li><li>A visit to Bora bora wildlife reserve</li><li>A visit to Shimoni slave caves</li><li>Park entrance fees</li><li>Tour guide</li></ul><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">EXCLUSIVE OF </font></p><ul><li>Anything not mentioned</li></ul><p><u><b>NOTE</b></u></p><p>A visit to wasini dhow, dolphin excursion and snorkeling at kisite mpunguti and shimba hills national reserve are a half day activity </p><p>We offer package to those who want to explore the night life of the south coast call for more information</p><p><br></p>\">', 1, 0, '2022-11-05 11:23:06', '2023-01-26 06:28:59'),
(15, 'Silver Palm Spa & Resort Kilifi', 'Sgr ticket / hotel transfer available', 'Kilifi County North Coast', 'Exciting Holiday Offers', 'North Coast', 'images/H5BD7IPEv56R3cSlvR3xG4Ld6JSUTJ4vQj6BxnS7.jpg', 'images/q3U6bPAhYlv9ffe2GmbDMKLocLrCeayr1crgMcGO.jpg', 'images/f6jvHj986O8lEvLzNKYFWQk8OvNmQEuTc19CfXgy.jpg', '', '', '', '', 'Ksh. 35,000', 'KSH 22,400', 'Half board / Evening Tea, Coffee & Snacks', '<div><br></div><div><br></div><div>&nbsp;<b>2NIGHTS STAYCATION&nbsp;</b></div><div><br></div><div><br></div><div>Take that much needed break with a mini vacation to Silver Palm Spa &amp; Resort Kilifi</div><div><div>Great get away for weekend and short time staycation&nbsp;</div><div>Enjoy the classic vibe and healing aroma for the soul&nbsp;</div></div><div><br></div><div>2 NIGHTS STAY</div><div><br></div><div>Kshs 22,530 Per Person Sharing</div><div>Kshs 35,000 Single person in the room&nbsp;</div><div><br></div><div>Meals on Half Board | Evening Tea, Coffee &amp; Snacks | SGR | Transfers | Use of hotel facilities</div><div><br></div><div><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Package Valid till 20th Dec</font></div><div><br></div><div>To Book, Call; 0701700144 | | info@okulinksafaris.com</div><div><br></div><div>#SilverPalmSpaandResort #kılıfı</div>', 1, 0, '2022-12-03 16:26:51', '2023-01-26 06:28:56'),
(16, 'ELEWANA AFROCHIC', 'Sgr ticket / hotel transfer available', 'Diani South coast', 'Tembea Ujionee', 'South Coast', 'images/Y0DQDj9aIL8ujYU7QqAfhEvXrZKwplOkdUnsU6R8.jpg', 'images/sDz4kpkFsDtN8aVEfFQrtWv02Ct3ARXQ0DhLyPqa.jpg', 'images/GnLa4Kz42Cq9LswRbiHQfMjjxHyy21NeoGYiH5y9.jpg', '', '', '', '', 'Kshs 65,000', 'Kshs 47,960', 'Half board / Evening Tea, Coffee & Snacks', '<p><u><b>ELEWANA AFROCHIC&nbsp;</b></u><br></p><p><br></p><p>Need a luxury escape to the beach?</p><p>Twende Diani to the boutique Elewana Afrochic, located in one of the world\'s cleanest beach!</p><p><br></p><p><b><u>3 DAYS &amp; 2 NIGHTS</u></b></p><p>■ Kshs 47,960 Per Person Sharing</p><p>■ Kshs 65,000 Single Person in the Room&nbsp;<br></p><p>INCLUDED IN THE RATE</p><p>• Accommodation in spacious garden view room</p><p>• Meals on Half Board</p><p>• Evening tea, coffee &amp; snacks</p><p>• Return SGR train tickets</p><p>• Return hotel transfers on private basis</p><p><br></p><p>NOTE</p><p>• Kids under 5 sharing room with adult(s) stays Free</p><p><br></p><p>To Book, Call; 0701700144 |0742659292| info@okulinksafaris.com</p><p><br></p>', 1, 0, '2022-12-03 17:25:45', '2023-01-26 06:28:53'),
(17, 'ELEWANA AFROCHIC', 'Sgr ticket / hotel transfer available', 'Diani South coast', 'Tembea Ujionee', 'South Coast', 'images/Z0E168Vk1VlGQoPe9LEMQVaVRGrP9eznj120XakN.jpg', 'images/z4rPHzNulTYXwlIhjyP04qOY8sfit7qojHA8plML.jpg', 'images/1ZWEsrJWWtfC72UROqVOmtDw5IijZAIBmseLUhLX.jpg', '', '', '', '', 'Kshs 105,890', 'Kshs 69,215', 'Half board / Evening Tea, Coffee & Snacks', '<p><u><span style=\"font-weight: bolder;\">ELEWANA AFROCHIC&nbsp;</span></u><br></p><p><br></p><p>Need a luxury escape to the beach?</p><p>Twende Diani to the boutique Elewana Afrochic, located in one of the world\'s cleanest beach!</p><p><span style=\"font-weight: bolder;\"><u>4 DAYS &amp; 3 NIGHTS STAY</u></span></p><p>■ Kshs 69,215 Per Person Sharing</p><p>■ Kshs 105,890 Single Person in the Room&nbsp;<br></p><p>INCLUDED IN THE RATE</p><p>• Accommodation in spacious garden view room</p><p>• Meals on Half Board</p><p>• Evening tea, coffee &amp; snacks</p><p>• Return SGR train tickets</p><p>• Return hotel transfers on private basis</p><p><br></p><p>NOTE</p><p>• Kids under 5 sharing room with adult(s) stays Free</p><p>• Package rates are subject to change.</p><p><br></p><p>To Book, Call; 0701700144 |0742659292| info@okulinksafaris.com</p><p><br></p>', 1, 0, '2022-12-03 17:31:42', '2023-01-26 06:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tour_bookings`
--

CREATE TABLE `tour_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `arrival_date` date NOT NULL,
  `adults` varchar(255) NOT NULL,
  `kids` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `special_requirements` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_bookings`
--

INSERT INTO `tour_bookings` (`id`, `transaction_code`, `first_name`, `last_name`, `email`, `phone_number`, `country`, `arrival_date`, `adults`, `kids`, `destination`, `special_requirements`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'eefefef', 'Edwin', 'Odhiambo', 'wawinyedwin44@gmail.com', '+254759701314', 'Kenya', '2022-10-07', '1', '2', 'Exciting', 'efegrgrgr', 3, '0', '2022-10-11 12:04:34', '2022-10-11 12:04:34'),
(2, 'euueu89', 'Edwin', 'Odhiambo', 'wawinyedwin44@gmail.com', '+254759701314', 'Kenya', '2023-02-22', '2', '1', 'Tembea Ujionee', '3tt3', 1, '0', '2023-02-19 10:29:38', '2023-02-19 10:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isAdmin` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Okulink', 'okulinksafaris@gmail.com', '1', '2022-11-02 19:07:02', '$2y$10$2sVYbzVSXxhOtYmI5vac9.3LauWSCX89mCHqLmLZ.Mn/W5Ze93mjq', 'ifPWnTioGmMYp1ed26AsY0e33lYXiq9gBlAWXjDIp6rwqCKWUj9lRmTZggaH', NULL, '2022-11-02 19:07:02'),
(2, 'super user', 'crud3swift@gmail.com', '1', '2022-11-05 05:16:56', '$2y$10$EwC9zbjwX2j6Xm6ppIvTLO1P4HS.qZHWpLj9mwaiz5Vn89DCpL/Ie', NULL, NULL, '2022-11-05 05:16:56'),
(4, 'brian', 'okubasubrian@gmail.com', '0', NULL, '$2y$10$XGe6pL/nejR6/HlhyuWTc.RLww9fSgjItT2vKlU7tqMZwGzjA.O8i', NULL, '2022-10-18 07:11:48', '2022-10-18 07:11:48'),
(6, 'edwin', 'wawinyedwin44@gmail.com', '0', '2022-11-02 19:08:05', '$2y$10$SZhGPhyr1RhU1cieJa.Hx.nKENQq6bviDrztJQeYNjEdooN8BvZt.', 'iNDkYxcf6qqDFA4zz7s5DAiJuMoJ1oVgnIb48UySYmpsGKxuI8oWJIvrE057', '2022-11-02 19:07:02', '2022-11-02 19:10:00'),
(7, 'Kwetu', 'kwetustar@gmail.com', '0', '2022-11-03 03:27:00', '$2y$10$EtT52wrq1WGMz2vRk5SEsOhhpeglnyKNpcj9l9oiWcUxiTGOTxLbC', NULL, '2022-11-03 03:26:06', '2022-11-03 03:27:00'),
(8, 'Mimi', 'akiken61@gmail.com', '0', NULL, '$2y$10$2JnF0/fJVTBC2.x57fuGNuF4arqiqfGT2PA2I45oMM29omD1Xd8tO', NULL, '2023-01-01 13:33:46', '2023-01-01 13:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Coastal Beach Vlog by our own the Fisayo', 'UYLVs56xOs4', '2022-11-04 18:14:52', '2022-11-04 18:14:52'),
(2, 'Story of Maasai Mara  by Adventure Singh', 'rfW1ZkZCdSU', '2022-11-04 18:18:22', '2022-11-04 18:18:22'),
(3, 'Get to know Takawira and Rusinga island in Nyanza', '8QECjGIQap4', '2022-11-04 18:23:46', '2022-11-04 18:23:46'),
(5, 'Feel The Sounds of Kenya by Cee-Roo -', '__yvrxmpDh4', '2022-12-22 08:06:32', '2022-12-22 08:06:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodations`
--
ALTER TABLE `accomodations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accomodations_slug_unique` (`slug`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_bookings`
--
ALTER TABLE `tour_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodations`
--
ALTER TABLE `accomodations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tour_bookings`
--
ALTER TABLE `tour_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
