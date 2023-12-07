-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 02:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_system1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'susmita', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `category_name`) VALUES
(1, 'Mobile Accessories'),
(2, 'Computer Accessories'),
(3, 'Watch'),
(4, 'Television'),
(5, 'Smart Watch'),
(6, 'T-Shirt'),
(7, 'Sharee'),
(8, 'Kitchen'),
(9, 'House Hold'),
(10, 'Kitching & Dining'),
(11, 'Medicine & Health Care');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_phone` int(13) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `city`, `postal_code`, `country`) VALUES
(1, 'Susmita Dhar', 'susmita@gmail.com', '1234', 1611765966, 'Mymensingh', 2052, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `in_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `payment_number` int(13) NOT NULL,
  `delivary` date NOT NULL,
  `transaction_id` varchar(13) NOT NULL,
  `issue_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`in_id`, `order_id`, `name`, `email`, `address`, `payment`, `quantity`, `product_id`, `supplier_id`, `product_name`, `payment_number`, `delivary`, `transaction_id`, `issue_date`) VALUES
(10014, 1, 'Susmita Dhar', 'susmita@gmail.com', 'uttara', 'Unpaid', 1, 15, 1, 'Mouse', 1611765966, '2023-12-10', '8NBVFDXSER4', '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `order_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `address` varchar(150) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `updated_price` decimal(65,0) NOT NULL,
  `payment_number` int(13) NOT NULL,
  `transaction_id` varchar(12) NOT NULL,
  `payment_option` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`order_id`, `name`, `email`, `phone`, `address`, `quantity`, `product_id`, `supplier_id`, `product_name`, `updated_price`, `payment_number`, `transaction_id`, `payment_option`) VALUES
(1, 'Susmita Dhar', 'susmita@gmail.com', 1611765966, 'uttara', 1, 15, 1, 'Mouse', 600, 1611765966, '8NBVFDXSER4', 'Bkash');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `categoryid` int(10) NOT NULL,
  `instock` int(10) NOT NULL,
  `unit` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `supplier_id`, `categoryid`, `instock`, `unit`, `price`, `image`) VALUES
(1, 'Ash Cotton Short Sleeve T-Shirt', 1, 6, 4, 'Product Type: T-Shirt Color: Ash Main Material: Cotton Gender: Men Stylish and trendy Fashionable and Attractive Design GSM: 160+Size: M, L, XL', '200', '1 (1).jpg'),
(2, 'Camouflage Cotton T-shirt for ', 1, 6, 3, 'Fabrics Material: Cotton Main Material: Cotton Sleeve: Short Sleeve Wash & Care: Machine Wash Fit: Slim -fit Gsm:165-170 Size : M, L, XL Made in: Bangladesh Measurements Size : M : Chest 38, Length 27 L : Chest 40, Length 28 XL : Chest 42, Length 29', '175', '1 (2).jpg'),
(3, 'Half sleeve T-shirt with Short', 1, 6, 3, 'Combo Set for Men Fabrics- Fleece GSM: 160 Size-M,L,XL M - Chest-38,Length 28 L - Chest-40 Length - 29', '150', '1 (3).jpg'),
(4, 'Men Band Collar Full Shirt', 1, 6, 0, 'Fabrics : 100% Cotton Quality: 100% export quality. Collection for Men Styling & Slim Fit Color: As given picture Size: M, L, XL, XXL M- long: 29 \", body: 40\" L- long: 30 \", body: 42\" XL- long: 31\", body: 44\" XXL- long: 32\", body: 46\"', '250', '1 (4).jpg'),
(5, 'Full Sleeve Formal Shirt For M', 1, 6, 2, 'Fabrics : 60% Cotton + 40% SilkShape : FullStyle : Slim FittingQuality : ExportMade in : Bangladesh M- long: 29\", body: 40\"• L- long: 30 \", body: 42\"•XL- long: 31\", body: 44\"N:B: Color can be slightly vary based on your device color & contrast setting', '199', '1 (5).jpg'),
(6, 'SKY BLUE LONG SLEEVE', 1, 6, 3, 'Brand : Plus PointFabrics : 60% Cotton + 40% SilkShape : FullColor : Sky BlueStyle : SlimFitting Quality : ExportMade in : BangladeshSize: S, M, L, XL, XXL, 3XL, 4XL, 5XLS: Chest 36, Long 26M: Chest 38, Long 27L: Chest 40, Long 27.5XL: Chest 42, Long 28.5XXL: Chest 44, Long 29.53XL: Chest 46, Long 3', '200', '1 (6).jpg'),
(7, 'Multicolor Cotton Short Sleeve for Men', 1, 6, 5, 'Quality: Mens short Sleeve T-Shirt Color: Multicolor Stitching: top stitch 2 needle bottom Main materials: 100% Cotton Fabrication: 160/170+GSMPrint: Rubber paint Stylish& fashionable Neck Rib: 100% cotton Comfortable & Good quality product', '200', '1 (5).jpg'),
(8, '2 Cool Tshirt combo offer', 1, 6, 3, 'এক্সপোর্ট কোয়ালিটি টি-শার্ট ফেব্রিক: ১০০% কটন ফেব্রিকেশন: ১৬০ GSM বি: দ্র: ইমেজে পণ্যের রঙ দেখুন; আপনার কম্পিউটার রেজুলেশন ও লাইটিং এর জন্য ইমেজ ও প্রকৃত পণ্যের রঙ -এ সামান্য তারতম্য ঘটতে পারে', '150', '1 (6).jpg'),
(9, '26 March Menz Synthetic Fabric', 1, 6, 3, 'Fabric: Taiwan CVC Fabric (Jersey) Fabric GSM: 165-170. T-Shirt Measurement: Asian and Regular Fit. Print Quality: 100% Guaranteed Status: Comfortable and Fashionable Exclusive T-shirt.', '180', '1_26-march-menz-synthetic-fabric-t-shirt-white.jpg'),
(10, 'Magnetic Bluetooth Headphone', 2, 1, 0, 'Universal for Bluetooth device（as Android/ios mobile phone）Magnetic suction design, easy to wear, Fashion Bluetooth Sports Headphones ,Bluetooth version: 4.1Job scope: > 10 meters (disabled), Standby time: > 180 hours ,Lifetime: > 3~4 hours, Charging time: 1 hours Support agreement: A2DP, AVRCP, HSP', '300', '1 (7).jpg'),
(11, 'Desktop Phone & Tab Stand Blac', 2, 1, 5, 'Adjustable height & viewing angle0-72 degree large adjustable viewing angle and height design can suffice your different viewing needs, providing comfortable using experience Foldable & portable . The phone desktop holder can be folded into a compact size, which is convenient to carry out or store. ', '185', '1.jpg'),
(12, 'infinix hot 11s back cover free', 2, 1, 3, 'No Specifiaction', '250', '1_infinix-hot-11s.jpg'),
(13, 'Writing Tablet Drawing Board', 2, 1, 5, 'Product details of Writing Tablet Drawing Board 8.5 Inch LCD , Name: 8.5 inch LCD Writing Board ,Product model: HYX085S02, Panel: Flexible LCD Screen, Easy to match your Baby Good quality , product Color: Multicolor, Material: ABS + LCD LCD screen', '180', 'writting_tab.jpg'),
(14, 'Wireless Keyboard  computer', 2, 2, 3, 'Pocket Wireless Keyboard with Touchpad Mouse, LED Backlit, Rechargeable Li-ion Battery-Black Multifunction: Wireless Bluetooth Keyboard + Touchpad + Multimedia control keys and PC gaming control keys. Used: PC, Smartphones(OTG) Support, Notebook, Smart TV, HTPC, Android TV BOX, PS3, XBOX, etc. Three', '620', 'wirless keyboard.jpg'),
(15, 'Mouse for your Computer', 2, 2, 4, 'Model - A4 Tech OP-620DSeries - Regular Type - USB Mouse Connectivity - Wired Interface - USB Style & Size - Ergonomic', '365', 'mouse.jpg'),
(16, 'Aluminum Stand Laptop Stand', 2, 2, 10, 'Adjusts to any desired multi-angle Unique shaft design makes the stand stable and heavy duty . Fold-able to easy organization.', '650', 'stand.jpg'),
(18, 'Palm Print Jersey Half Sleeve T-shirt', 1, 6, 12, 'Product: Jersey Half Hata TshirtColour: LemonQuantity: 1 PcsMade in Bangladesh100% Good qualityColor GuaranteeProduct details of TshirtProduct Type: T-shirtMain Material: Taiwan CVCGender: MenGsm: 160-170M - Length 27\" - Chest 38\"L - Length 28\" - Chest 40\"XL - Length 29\" - Chest 42\"XXL - Length 30\" ', '225', 'Palm Print Jersey Half Sleeve T-shirt.jpg'),
(19, 'Cotton Half Sleeve Polo Shirt for Men', 1, 6, 13, 'Product Type : Polo T-shirt Material : Cotton Gsm- 200(-+10) Gender : Men High Quality Cotton Fabric Size : M, L,XL M Chest - 38 \", Length - 28\" L Chest - 40 \" , Length - 29\" XL Chest - 42 \", Length – 30\"', '500', 'Cotton Half Sleeve Polo Shirt for Men.jpg'),
(20, 'Naviforce Mens Wristwatch', 3, 3, 5, 'Brand: NaviforceMaterial: Stainless Steel and GlassQuality: 100 % WaterproofCondition: New Good Quality And Good Design Naviforce Mens Wristwatch Buy at best price in Bangladesh', '1950', 'Naviforce Mens Wristwatch.jpg'),
(21, 'Curren Mens Wristwatch for you', 3, 3, 5, 'Brand: CurrernMaterial: Stainless Steel and GlassQuality: 100 % WaterproofCondition: New Good Quality And Good Design', '1750', 'Curren Mens Wristwatch.jpg'),
(22, 'Casio Waterproof Watch for men', 3, 3, 10, 'Best water proof casual watch, Very light weight. Quantity: 1 Pcs . Made in China. Product details o', '500', 'Casio-Waterproof-Casual-Watch-for-men.jpg'),
(26, 'Benq GW2283 21.5-inch Stylish Monitor', 2, 2, 0, 'Color Bit: 8 bit Color Gamut: 72% NTSC Input/Output Connector: D-sub x1/HDMI (v1.4) x 2', '13000', '21.5-inch Eye-care Stylish IPS Monitor.jpg'),
(29, 'Silk Sharee', 4, 0, 5, 'Product Type-silk Sharee Fabrics- silk Color-Deep Zam Gender- women Sharee with No Lace No Blouse Gender -women Main Material- Silk', '3500', 'pic-4.png'),
(30, 'T Shirt 45 Lg', 4, 6, 2, 'Product Type: T-Shirt Color: Ash Main Material: Cotton Gender: Men Stylish and trendy Fashionable and Attractive Design GSM: 160+Size: M, L, XL', '500', 'pic-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

CREATE TABLE `supplier_info` (
  `supplier_id` int(10) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` int(12) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`supplier_id`, `supplier_name`, `contact_name`, `address`, `city`, `postal_code`, `country`, `phone`, `password`, `email`) VALUES
(1, 'Jhon Doe', 'Jhon', 'Dhaka', 'Uttara', 2052, 'Bangladesh', 1611765966, '1234', 'jhon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `supply_info`
--

CREATE TABLE `supply_info` (
  `product_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `delivary` varchar(100) NOT NULL,
  `supply_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `supplier_info`
--
ALTER TABLE `supplier_info`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `in_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
