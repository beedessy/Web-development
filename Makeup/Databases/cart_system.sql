
-- Table structure for table `accessoriesproduct`
--

CREATE TABLE `accessoriesproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessoriesproduct`
--

INSERT INTO `accessoriesproduct` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Blue and Gray Pouch Bag', '300', 'Assets\\Products\\Accessories\\Bag\\bag1.jpg', 'a1'),
(2, 'Black Cat Pouch', '450', 'Assets\\Products\\Accessories\\Bag\\bag2.jpg', 'a2'),
(3, 'Flower Gray Pouch Bag', '500', 'Assets\\Products\\Accessories\\Bag\\bag3.jpg', 'a3'),
(4, 'Black Makeup Kit Bag', '500', 'Assets\\Products\\Accessories\\Bag\\bag4.jpg', 'a4'),
(5, 'Intense Red Pouch Bag ', '500', 'Assets\\Products\\Accessories\\Bag\\bag5.jpg', 'a5'),
(6, 'Dark Blue Leather Bag', '200', 'Assets\\Products\\Accessories\\Bag\\bag6.jpg', 'a6'),
(7, 'Exclusive Makeup Box', '250', 'Assets\\Products\\Accessories\\Bag\\bag7.jpg', 'a7'),
(8, 'Silver Makeup Box', '300', 'Assets\\Products\\Accessories\\Bag\\bag8.jpg', 'a8'),
(9, 'Portable mirror', '350', 'Assets\\Products\\Accessories\\Mirrors\\Mirror1.jpg', 'a9'),
(10, 'Mirrored dressing table set', '200', 'Assets\\Products\\Accessories\\Mirrors\\Mirror2.jpg', 'a10'),
(11, 'Makeup kit with mirror', '400', 'Assets\\Products\\Accessories\\Mirrors\\Mirror3.jpg', 'a11'),
(12, 'Mirror stand', '500', 'Assets\\Products\\Accessories\\Mirrors\\Mirror4.jpg', 'a12'),
(13, 'Circular lighted Mirror', '250', 'Assets\\Products\\Accessories\\Mirrors\\Mirror5.jpg', 'a13'),
(14, 'Led Lighted Mirror', '300', 'Assets\\Products\\Accessories\\Mirrors\\Mirror6.jpg', 'a14'),
(15, 'Professional Makeup Mirror', '350', 'Assets\\Products\\Accessories\\Mirrors\\Mirror7.jpg', 'a15'),
(16, 'Hidden Object Mirrors', '400', 'Assets\\Products\\Accessories\\Mirrors\\Mirror8.jpg', 'a16');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eyeproduct`
--

CREATE TABLE `eyeproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eyeproduct`
--

INSERT INTO `eyeproduct` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Eye Quattro Eyeshadow', '300', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow1.JPG', 'e1'),
(2, 'Blue Quad Eyeshadow', '150', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow2.JPG', 'e2'),
(3, 'Multi Eyeshadow', '450', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow3.JPG', 'e3'),
(4, 'Liquid Eyeshadow', '500', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow4.JPG', 'e4'),
(5, '2 Combo Eyeshadow', '200', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow5.JPG', 'e5'),
(6, 'Professional Eyeshadow', '400', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow6.JPG', 'e6'),
(7, 'Elegant Blue Eyeshadow', '500', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow7.JPG', 'e7'),
(8, 'White glitter Eyeshadow', '250', 'Assets\\Products\\Eyes\\Eyeshadows\\Eyeshadow8.JPG', 'e8'),
(9, 'Intense Black Eyeliner', '500', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner1.JPG', 'e9'),
(10, 'Endless Brown Eyeliner', '400', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner2.JPG', 'e10'),
(11, 'Intense Eyeliner', '250', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner3.JPG', 'e11'),
(12, 'Starry Blue Eyeliner', '450', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner4.JPG', 'e12'),
(13, 'Waterproof Black Eyeliner', '500', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner5.JPG', 'e13'),
(14, '3 Combo Eyeliner', '300', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner6.JPG', 'e14'),
(15, 'Brown Eyeliner', '350', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner7.JPG', 'e15'),
(16, 'Blue Glitter Eyeliner', '400', 'Assets\\Products\\Eyes\\Eyeliners\\Eyeliner8.JPG', 'e16'),
(17, 'Perfect Mascaras', '500', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras1.JPG', 'e17'),
(18, 'MultiColor Mascaras', '500', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras2.JPG', 'e18'),
(19, '3D Mascaras', '450', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras3.JPG', 'e19'),
(20, 'Professional Mascaras', '500', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras4.JPG', 'e20'),
(21, 'Intense Black Mascaras', '350', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras5.JPG', 'e21'),
(22, 'Intense Red Mascaras', '300', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras6.JPG', 'e22'),
(23, 'Intense Blue Mascaras', '400', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras7.JPG', 'e23'),
(24, 'Silver Mascaras', '400', 'Assets\\Products\\Eyes\\Mascaras\\Mascaras8.JPG', 'e24');

-- --------------------------------------------------------

--
-- Table structure for table `faceproduct`
--

CREATE TABLE `faceproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faceproduct`
--

INSERT INTO `faceproduct` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'peachy blush', '200', 'Assets\\Products\\Face\\blushes\\blushes1.jpg', 'f1'),
(2, '8 blushes collection', '175', 'Assets\\Products\\Face\\blushes\\blushes2.jpg', 'f2'),
(3, 'pale pink blush', '100', 'Assets\\Products\\Face\\blushes\\blushes3.jpg', 'f3'),
(4, 'Brown blush', '150', 'Assets\\Products\\Face\\blushes\\blushes4.jpg', 'f4'),
(5, 'Glittery Golden blush', '400', 'Assets\\Products\\Face\\blushes\\blushes5.jpg', 'f5'),
(6, 'Dark Brown blush', '200', 'Assets\\Products\\Face\\blushes\\blushes6.jpg', 'f6'),
(7, '4 combo blushes', '250', 'Assets\\Products\\Face\\blushes\\blushes7.jpg', 'f7'),
(8, 'Matte blush', '300', 'Assets\\Products\\Face\\blushes\\blushes8.jpg', 'f8'),
(9, 'Waterproof Concealer', '150', 'Assets\\Products\\Face\\concealers\\concealer1.jpg', 'f9'),
(10, 'Multipurpose Concealer', '200', 'Assets\\Products\\Face\\concealers\\concealer2.jpg', 'f10'),
(11, 'Maestro Concealer', '500', 'Assets\\Products\\Face\\concealers\\concealer3.jpg', 'f11'),
(12, 'High coverage Concealer', '500', 'Assets\\Products\\Face\\concealers\\concealer4.jpg', 'f12'),
(13, 'Stay All Day Concealer', '250', 'Assets\\Products\\Face\\concealers\\concealer5.jpg', 'f13'),
(14, 'Master Cream concealer', '300', 'Assets\\Products\\Face\\concealers\\concealer6.jpg', 'f14'),
(15, 'Compact cream concealer', '350', 'Assets\\Products\\Face\\concealers\\concealer7.jpg', 'f15'),
(16, '4 combo cream concealers', '400', 'Assets\\Products\\Face\\concealers\\concealer8.jpg', 'f16'),
(17, 'Perfect Glow Foundation', '500', 'Assets\\Products\\Face\\foundations\\Foundation1.jpg', 'f17'),
(18, 'Flawless Foundation', '200', 'Assets\\Products\\Face\\foundations\\Foundation2.jpg', 'f18'),
(19, 'Luminous Silk Foundation(C)', '250', 'Assets\\Products\\Face\\foundations\\Foundation3.jpg', 'f19'),
(20, 'Luminous silk Foundation(B)', '500', 'Assets\\Products\\Face\\foundations\\Foundation4.jpg', 'f20'),
(21, 'Tube Foundation', '100', 'Assets\\Products\\Face\\foundations\\Foundation5.jpg', 'f21'),
(22, 'Variety Set Foundation', '300', 'Assets\\Products\\Face\\foundations\\Foundation6.jpg', 'f22'),
(23, 'All purpose Foundation', '400', 'Assets\\Products\\Face\\foundations\\Foundation7.jpg', 'f23'),
(24, 'Oil-Free Foundation', '400', 'Assets\\Products\\Face\\foundations\\Foundation8.jpg', 'f24'),
(25, 'Golden Powder', '200', 'Assets\\Products\\Face\\powders\\powder1.JPG', 'f25'),
(26, 'Loose Pink Powder', '250', 'Assets\\Products\\Face\\powders\\Powder2.JPG', 'f26'),
(27, 'Sand Powder', '300', 'Assets\\Products\\Face\\powders\\Powder3.JPG', 'f27'),
(28, 'Brown Powder', '500', 'Assets\\Products\\Face\\powders\\Powder4.JPG', 'f28'),
(29, 'Silk Powder', '250', 'Assets\\Products\\Face\\powders\\Powder5.JPG', 'f29'),
(30, 'Pink Powder', '150', 'Assets\\Products\\Face\\powders\\Powder6.JPG', 'f30'),
(31, 'Sun Summer Powder', '400', 'Assets\\Products\\Face\\powders\\Powder7.JPG', 'f31'),
(32, 'White Powder', '175', 'Assets\\Products\\Face\\powders\\Powder8.JPG', 'f32'),
(33, 'Silk Primer', '300', 'Assets\\Products\\Face\\Primers\\Primer1.JPG', 'f33'),
(34, 'Luminous Silk Primer', '250', 'Assets\\Products\\Face\\Primers\\Primer2.JPG', 'f34'),
(35, 'Power Primer', '350', 'Assets\\Products\\Face\\Primers\\Primer3.JPG', 'f35'),
(36, 'Defense Primer', '500', 'Assets\\Products\\Face\\Primers\\Primer4.JPG', 'f36'),
(37, 'Glow Primer', '150', 'Assets\\Products\\Face\\Primers\\Primer5.JPG', 'f37'),
(38, 'Hydrating Primer', '100', 'Assets\\Products\\Face\\Primers\\Primer6.JPG', 'f38'),
(39, 'Pure Sandal Primer', '175', 'Assets\\Products\\Face\\Primers\\Primer7.JPG', 'f39'),
(40, 'Maestro UV Master Primer', '250', 'Assets\\Products\\Face\\Primers\\Primer8.JPG', 'f40');

-- --------------------------------------------------------

--
-- Table structure for table `flashsales`
--

CREATE TABLE `flashsales` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flashsales`
--

INSERT INTO `flashsales` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Golden Powder', '300', 'Assets\\Products\\FlashSales\\powder1.JPG', 'b1'),
(2, 'Maestro Concealer', '450', 'Assets\\Products\\FlashSales\\concealer3.jpg', 'l2'),
(3, '3 Combo Eyeliner', '500', 'Assets\\Products\\FlashSales\\Eyeliner6.JPG', 'l3'),
(4, 'Silver Mascaras', '500', 'Assets\\Products\\FlashSales\\Mascaras8.JPG', 'l4'),
(5, 'Cherries in the Snow Lipstick', '500', 'Assets\\Products\\FlashSales\\Lipstick1.png', 'l5'),
(6, 'White Set Soft Brushes', '200', 'Assets\\Products\\FlashSales\\brush3.jpg', 'l6'),
(7, 'Exclusive Makeup Box', '250', 'Assets\\Products\\FlashSales\\bag7.jpg', 'l7'),
(8, 'Hidden Object Mirrors', '300', 'Assets\\Products\\FlashSales\\Mirror8.jpg', 'l8');

-- --------------------------------------------------------

--
-- Table structure for table `lipproduct`
--

CREATE TABLE `lipproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lipproduct`
--

INSERT INTO `lipproduct` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'XtreamRed Lipglosses', '300', 'Assets\\Products\\Lips\\Lipglosses\\XtreamRed Lipglosses1.JPG', 'l1'),
(2, 'glittery Lipglosses', '450', 'Assets\\Products\\Lips\\Lipglosses\\glittery Lipglosses2.JPG', 'l2'),
(3, 'pale Lipglosses', '500', 'Assets\\Products\\Lips\\Lipglosses\\pale Lipglosses3.JPG', 'l3'),
(4, 'Brown Lipglosses', '500', 'Assets\\Products\\Lips\\Lipglosses\\Brown Lipglosses4.JPG', 'l4'),
(5, 'Glittery pink Lipglosses', '500', 'Assets\\Products\\Lips\\Lipglosses\\Glittery pink Lipglosses5.jpg', 'l5'),
(6, 'Pink Lipglosses', '200', 'Assets\\Products\\Lips\\Lipglosses\\Pink Lipglosses6.jpg', 'l6'),
(7, 'Ecstasy Lacquer Lipglosses', '250', 'Assets\\Products\\Lips\\Lipglosses\\Ecstasy Lacquer Lipglosses7.jpg', 'l7'),
(8, 'Soft Coral Lipglosses', '300', 'Assets\\Products\\Lips\\Lipglosses\\Soft Coral Lipglosses8.jpg', 'l8'),
(9, 'Waterproof Lip Liner', '350', 'Assets\\Products\\Lips\\Lipliners\\Lipliner1.JPG', 'l9'),
(10, 'Sensational LipLiner', '200', 'Assets\\Products\\Lips\\Lipliners\\Lipliner2.JPG', 'l10'),
(11, 'Plumpline Lip Liner', '400', 'Assets\\Products\\Lips\\Lipliners\\Lipliner3.JPG', 'l11'),
(12, 'The Lip Pencil', '500', 'Assets\\Products\\Lips\\Lipliners\\Lipliner4.JPG', 'l12'),
(13, 'Stay All Day Lip Liner', '250', 'Assets\\Products\\Lips\\Lipliners\\Lipliner5.JPG', 'l13'),
(14, 'Professional Lip Pencil', '300', 'Assets\\Products\\Lips\\Lipliners\\Lipliner6.JPG', 'l14'),
(15, 'Smooth Silk Lipliners', '350', 'Assets\\Products\\Lips\\Lipliners\\Lipliner7.JPG', 'l15'),
(16, 'Color Sketcher Red Lipliner', '400', 'Assets\\Products\\Lips\\Lipliners\\Lipliner8.JPG', 'l16'),
(17, 'Cherries in the Snow Lipstick', '500', 'Assets\\Products\\Lips\\Lipstick\\Lipstick1.png', 'l17'),
(18, 'Candy Pink lipstick', '200', 'Assets\\Products\\Lips\\Lipstick\\Lipstick2.JPG', 'l18'),
(19, 'Fushia lipstick', '250', 'Assets\\Products\\Lips\\Lipstick\\Lipstick3.JPG', 'l19'),
(20, 'Red Allure Velvet Lipstick', '500', 'Assets\\Products\\Lips\\Lipstick\\Lipstick4.JPG', 'l20'),
(21, 'Tumultuous Pink Lipstick', '350', 'Assets\\Products\\Lips\\Lipstick\\Lipstick5.JPG', 'l21'),
(22, 'Flamingo Lipstick', '300', 'Assets\\Products\\Lips\\Lipstick\\Lipstick6.JPG', 'l22'),
(23, 'Matte Lipstick', '450', 'Assets\\Products\\Lips\\Lipstick\\Lipstick7.JPG', 'l23'),
(24, 'Rose Lipstick', '400', 'Assets\\Products\\Lips\\Lipstick\\Lipstick8.JPG', 'l24');

-- --------------------------------------------------------

--
-- Table structure for table `makeupbrushproduct`
--

CREATE TABLE `makeupbrushproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makeupbrushproduct`
--

INSERT INTO `makeupbrushproduct` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Trio wide Brush', '300', 'Assets\\Products\\Brush\\brush1.jpg', 'b1'),
(2, 'Complete Set Brushes', '450', 'Assets\\Products\\Brush\\brush2.jpg', 'l2'),
(3, 'White Set Soft Brushes', '500', 'Assets\\Products\\Brush\\brush3.jpg', 'l3'),
(4, 'Professional Brushes', '500', 'Assets\\Products\\Brush\\brush4.jpg', 'l4'),
(5, 'Touch up Brush', '500', 'Assets\\Products\\Brush\\brush5.jpg', 'l5'),
(6, 'Trio powder Brushes', '200', 'Assets\\Products\\Brush\\brush6.jpg', 'l6'),
(7, '7 collection Brushes', '250', 'Assets\\Products\\Brush\\brush7.jpg', 'l7'),
(8, '6 collection Brushes', '300', 'Assets\\Products\\Brush\\brush8.jpg', 'l8');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(0, 'lucshika', 'beedessyluck@gmail.com', '58196501', 'ioll', 'netbanking', 'peachy blush(2)', '400');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `verify_code` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessoriesproduct`
--
ALTER TABLE `accessoriesproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eyeproduct`
--
ALTER TABLE `eyeproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faceproduct`
--
ALTER TABLE `faceproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flashsales`
--
ALTER TABLE `flashsales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lipproduct`
--
ALTER TABLE `lipproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makeupbrushproduct`
--
ALTER TABLE `makeupbrushproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

