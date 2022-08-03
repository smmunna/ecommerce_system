-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 03:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'smmunna', '1234'),
(2, 'sadman', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(10) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `city`, `postal_code`, `country`) VALUES
(1, 'Minhazul Abedin Munna', 'minhazulabedinmunna@gmail.com', '1234', 1611765966, 'Mymensingh', 2052, 'Bangladesh'),
(2, 'Sadman Hafeez Shuvo', 'sadmanshuvo@gmail.com', '2345', 1631720204, 'Dhaka', 1200, 'Bangladesh'),
(3, 'Sm Munna', '20103019@iubat.edu', '1234', 1918218964, 'Mymensingh', 1100006, 'Bangladesh'),
(4, 'Rahat', 'rahat@gmail.com', '1234', 1333962338, 'Dhaka', 1230, 'Bangladesh'),
(5, 'Barac Obama', 'obama@gmail.com', '1234', 1918218965, 'Dhaka', 2052, 'Bangladesh'),
(7, 'Maxwell', 'maxwell@gmail.com', '1234', 1611765966, 'Rajsahi', 2052, 'Bangladesh');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`in_id`, `order_id`, `name`, `email`, `address`, `payment`, `quantity`, `product_id`, `supplier_id`, `product_name`, `payment_number`, `delivary`, `transaction_id`, `issue_date`) VALUES
(10001, 1, 'Minhazul Abedin Munna', 'minhazulabedinmunna@gmail.com', 'Jamalpur', 'Unpaid', 1, 15, 2, 'Mouse', 1611765966, '2022-06-15', '8NBVFDXSER4', '2022-06-05'),
(10002, 10, 'Minhazul Abedin Munna', 'minhazulabedinmunna@gmail.com', 'Jamalpur', 'Paid', 1, 12, 2, 'infinix hot 11s back cover', 1935991255, '2022-06-20', '6UIDJKSLDPS', '2022-06-01');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`order_id`, `name`, `email`, `phone`, `address`, `quantity`, `product_id`, `supplier_id`, `product_name`, `updated_price`, `payment_number`, `transaction_id`, `payment_option`) VALUES
(1, 'Minhazul Munna', 'minhazulabedinmunna@gmail.com', 1611765966, '12 road 27 house', 1, 15, 2, 'Mouse', '600', 1611765966, '8NBVFDXSER4', 'Bkash'),
(8, 'Rajib', 'rajib@gmail.com', 1918218965, 'Rajsahi', 1, 10, 0, 'Magnetic Bluetooth Headphone', '0', 1918218965, '9KJFGDUE4N', ''),
(13, 'Munna', 'munna@gmail.com', 2147483647, 'Jamalpur', 1, 27, 1, 'Fashionable Casual Full Sleeve Shirt for Men', '553', 1631720204, '8NFTRE3NSE', 'Bkash'),
(14, 'Munna', 'munna@gmail.com', 2147483647, 'Jamalpur', 1, 27, 1, 'Fashionable Casual Full Sleeve Shirt for Men1', '553', 1234567890, '8NFTRE3NSE', 'Nagad'),
(15, 'Munna', 'munna@gmail.com', 1611233455, 'Jamalpur', 1, 27, 1, 'Fashionable Casual Full Sleeve Shirt for Men', '553', 2147483647, '8NFTRE3NSE', 'Nagad'),
(17, 'Rahat', 'rahat@gmail.com', 1833961327, 'Sector 10, Road-12', 2, 25, 4, 'Kanchipuram Lehenga for women', '7806', 1833961327, '5TWRBN2EYU', 'Bkash'),
(18, 'Barac Obama', 'obama@gmail.com', 1918218965, '27, Hosnabad, Sarishabari, Jamalpur ', 2, 27, 1, 'Fashionable Casual Full Sleeve Shirt for Men', '1106', 1918218965, '4HTUEW34NS', 'Bkash'),
(19, 'Donald Trump', 'trump@gmail.com', 1935991255, '22 , Banagram, Hosnabad, Sarishabari, Jamalpur', 2, 4, 1, 'Men Band Collar Full Shirt', '506', 1935991255, '5THSK3K2KAH', 'Bkash'),
(20, 'Maxwell', 'maxwell@gmail.com', 1611765966, '27, Dhaka, 1230', 1, 27, 1, 'Fashionable Casual Full Sleeve Shirt for Men', '553', 1611765966, '9TRE4JDUTS', 'Bkash'),
(21, 'Munna', 'munna@gmail.com', 1918218965, 'Uttara', 4, 12, 2, 'infinix hot 11s back cover free', '1012', 1611765966, '8GFDRSWASE', 'Bkash');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(17, 'Silk Katan Saree', 1, 7, 10, 'Export Quality Sharee Fabric: 100% Cotton Fabrication: 180 GSM B: Note: See product color in image; The color of the image and actual product may vary slightly depending on the resolution and lighting of your computer.', '3000', 'wall-designify.png'),
(18, 'Palm Print Jersey Half Sleeve T-shirt', 1, 6, 12, 'Product: Jersey Half Hata TshirtColour: LemonQuantity: 1 PcsMade in Bangladesh100% Good qualityColor GuaranteeProduct details of TshirtProduct Type: T-shirtMain Material: Taiwan CVCGender: MenGsm: 160-170M - Length 27\" - Chest 38\"L - Length 28\" - Chest 40\"XL - Length 29\" - Chest 42\"XXL - Length 30\" ', '225', 'Palm Print Jersey Half Sleeve T-shirt.jpg'),
(19, 'Cotton Half Sleeve Polo Shirt for Men', 1, 6, 13, 'Product Type : Polo T-shirt Material : Cotton Gsm- 200(-+10) Gender : Men High Quality Cotton Fabric Size : M, L,XL M Chest - 38 \", Length - 28\" L Chest - 40 \" , Length - 29\" XL Chest - 42 \", Length – 30\"', '500', 'Cotton Half Sleeve Polo Shirt for Men.jpg'),
(20, 'Naviforce Mens Wristwatch', 3, 3, 5, 'Brand: NaviforceMaterial: Stainless Steel and GlassQuality: 100 % WaterproofCondition: New Good Quality And Good Design Naviforce Mens Wristwatch Buy at best price in Bangladesh', '1950', 'Naviforce Mens Wristwatch.jpg'),
(21, 'Curren Mens Wristwatch for you', 3, 3, 5, 'Brand: CurrernMaterial: Stainless Steel and GlassQuality: 100 % WaterproofCondition: New Good Quality And Good Design', '1750', 'Curren Mens Wristwatch.jpg'),
(22, 'Casio Waterproof Watch for men', 3, 3, 10, 'Best water proof casual watch, Very light weight. Quantity: 1 Pcs . Made in China. Product details o', '500', 'Casio-Waterproof-Casual-Watch-for-men.jpg'),
(23, 'Original Indian Cotton Saree for Women', 4, 7, 5, '*Doriya Cotton Saree*with satin zari border. 12 Hate saree 2 gauge Blouse piece original Indian saree.', '4500', 'Original BD Cotton Saree for Women (2).png'),
(24, 'Unstitched Soft Georgette Lehenga', 4, 7, 5, 'Unstitched Soft Georgette Lehenga , Body- Soft Georgette.  Salwer - included(unstitched)  Dopatta - Georgetten.  Work- High-Quality Embroidery Free Size. Dispatch Time 3 - 5 Days', '4500', 'Untitched Soft Georgette Lehenga.png'),
(25, 'Kanchipuram Sharee for women', 4, 7, 8, '😍Kanjiveram Silk full Zari Sharee with blouse along with cutwork Duppta !! Lehanga : 3 meters *Blouse : 1 meter approx*Voni : 2.20 meters Oraganza Fabric with 2 side piping*🥳', '3900', 'afia.png'),
(26, 'Benq GW2283 21.5-inch Stylish Monitor', 2, 2, 0, 'Color Bit: 8 bit Color Gamut: 72% NTSC Input/Output Connector: D-sub x1/HDMI (v1.4) x 2', '13000', '21.5-inch Eye-care Stylish IPS Monitor.jpg'),
(27, 'Fashionable Casual Full Sleeve Shirt for Men', 1, 6, 3, ' Fashionable Casual Full Sleeve Shirt for Men Fabric : Cotton Size Measurement : M = length 28.', '550', 'beautifulShirt.png'),
(29, 'Silk Sharee', 4, 7, 5, 'Product Type-silk Sharee Fabrics- silk Color-Deep Zam Gender- women Sharee with No Lace No Blouse Gender -women Main Material- Silk', '3500', 'maha.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`supplier_id`, `supplier_name`, `contact_name`, `address`, `city`, `postal_code`, `country`, `phone`, `password`, `email`) VALUES
(1, 'Minhazul Abedin Munna', 'Munna', 'Jamalpur', 'Mymensingh', 2052, 'Bangladesh', 1611765966, '1234', 'smmunna@gmail.com'),
(2, 'Sadman Hafeez Shuvo', 'Shuvo', 'Savar', 'Dhaka', 1200, 'Bangladesh', 1935991255, '2345', 'sadman@gmail.com'),
(3, 'Maruf Hasnat', 'Maruf', 'Sarishabari', 'Mymensingh', 2052, 'Bangladesh', 1631720204, '2345', 'maruf@gmail.com');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply_info`
--

INSERT INTO `supply_info` (`product_id`, `order_id`, `customer_name`, `delivary`, `supply_status`) VALUES
(27, 16, 'Munna', '2022-06-21', 'Completed'),
(16, 3, 'Sm Munna', '2022-06-30', 'Completed'),
(27, 18, 'Barac Obama', '2022-07-09', 'Completed'),
(27, 20, 'Maxwell', '2022-07-26', 'Completed');

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
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `in_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10012;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
