--
-- Dumping data for table `project`
--
INSERT INTO `project` (`id`, `description`, `country`, `city`) VALUES
  (1, 'Construction of a Village Well', 'Sierra Leone', 'Freetown'),
  (2, 'Clean Water Supply', 'Cambodia', 'Krong Samraong'),
  (3, 'South American Wild Animal Rescue', 'Nicaragua', 'Managua'),
  (4, 'Great Barrier Reef Protection', 'Australia', 'Cairns');

--
-- Dumping data for table `category`
--
INSERT INTO `category` (`id`, `name`) VALUES
  (1, 'Apparel '),
  (2, 'Mens'),
  (3, 'Womens'),
  (4, 'T-Shirts'),
  (5, 'Hats'),
  (6, 'Gifts'),
  (7, 'Maps');

--
-- Dumping data for table `product`
--
INSERT INTO `product` (`id`, `name`, `cost_price`, `sale_price`, `country_of_origin`) VALUES
  (1, 'Small Blue T-shirt', '3.99', '20.00', 'China'),
  (2, 'Medium Blue T-shirt', '3.99', '20.00', 'China'),
  (3, 'Large Blue T-shirt', '3.99', '20.00', 'China'),
  (4, 'Small White Skirt', '4.50', '25.00', 'China'),
  (5, 'Medium White Skirt', '4.50', '25.00', 'China'),
  (6, 'Black Hat', '6.00', '15.00', 'India'),
  (7, 'White Hat', '6.00', '15.00', 'India'),
  (8, 'Asia Map', '5.50', '13.00', 'Phillipines'),
  (9, 'Africa Map', '5.50', '13.00', 'Phillipines');

--
-- Dumping data for table `product_category`
--
INSERT INTO `product_category` (`category_id`, `product_id`) VALUES
  (1, 1),
  (1, 2),
  (1, 3),
  (1, 4),
  (1, 5),
  (1, 6),
  (1, 7),
  (2, 1),
  (2, 2),
  (2, 3),
  (2, 6),
  (2, 7),
  (3, 1),
  (3, 2),
  (3, 3),
  (3, 4),
  (3, 5),
  (3, 6),
  (3, 7),
  (4, 1),
  (4, 2),
  (4, 3),
  (5, 6),
  (5, 7),
  (6, 8),
  (6, 9),
  (7, 8),
  (7, 9);

--
-- Dumping data for table `client`
--
INSERT INTO `client` (`id`, `first_name`, `last_name`, `address_street`, `address_suburb`, `address_state`, `address_postcode`, `email`, `phone`, `is_subscribed`) VALUES
  (1, 'Amelia', 'Baynton', '21 Spring Creek Road', 'ROKEBY', 'VIC', '3821', 'AmeliaBaynton@einrot.com', '(03) 5381 45', 1),
  (2, 'Aaron', 'Latour', '31 Railway Street', 'LAVELLE', 'QLD', '4357', 'AaronLatour@superrito.com', '(07) 4534 71', 0),
  (3, 'Archie', 'Frith', '70 Villeneuve Street', 'DOREEN', 'VIC', '3754', 'ArchieFrith@fleckens.hu', '(03) 8156 02', 1),
  (4, 'Jordan', 'Kable', '17 Berambing Crescent', 'BLACKETT', 'NSW', '2770', 'JordanKable@dayrep.com', '(02) 4747 19', 0),
  (5, 'Lilly', 'Northcote', '6 Auricht Road', 'WOOLUMBOOL', 'SA', '5272', 'LillyNorthcote@jourrapide.com', '(08) 8725 72', 1),
  (6, 'Mary', 'Sticht', '82 Raglan Street', 'CHAHPINGAH', 'QLD', '4610', 'MarySticht@jourrapide.com', '(07) 4567 86', 0),
  (7, 'Thomas', 'Swan', '97 Weigall Avenue', 'MOUNT BRYAN', 'SA', '5418', 'ThomasSwan@fleckens.hu', '(08) 8717 30', 0),
  (8, 'Sean', 'Smyth', '99 Kerma Crescent', 'DOCTORS GAP', 'NSW', '2790', 'SeanSmyth@jourrapide.com', '(02) 4044 42', 1),
  (9, 'Hugo', 'Fairweather', '43 Hunter Street', 'TOOWOOMBA BC', 'QLD', '4350', 'HugoFairweather@gustr.com', '(07) 4567 88', 1),
  (10, 'Amy', 'Drakeford', '43 Wallum Court', 'NUMINBAH', 'NSW', '2484', 'AmyDrakeford@cuvox.de', '(02) 6656 15', 1),
  (11, 'Ryan', 'Eve', '12 Maintongoon Road', 'VESPER', 'VIC', '3833', 'RyanEve@fleckens.hu', '(03) 5311 95', 1),
  (12, 'Summer', 'Snowden', '75 Oak Street', 'GREEN FOREST', 'NSW', '2471', 'SummerSnowden@fleckens.hu', '(02) 6751 96', 1),
  (13, 'Mia', 'Boyd', '62 Marloo Street', 'COLLINSWOOD', 'SA', '5081', 'MiaBoyd@einrot.com', '(08) 8239 70', 0),
  (14, 'Ashton', 'Shann', '87 Rimbanda Road', 'BLUFF ROCK', 'NSW', '2372', 'AshtonShann@dayrep.com', '(02) 6782 39', 0),
  (15, 'Isaac', 'Platt', '63 Yarra Street', 'CARRANBALLAC', 'VIC', '3361', 'IsaacPlatt@gustr.com', '(03) 5316 17', 1),
  (16, 'Nate', 'Jude', '53 Creegans Road', 'KYOGLE', 'NSW', '2474', 'NateJude@teleworm.us', '(02) 6701 23', 1),
  (17, 'Chelsea', 'O\'Flaherty', '83 Martens Place', 'LOTA', 'QLD', '4179', 'ChelseaOFlaherty@jourrapide.com', '(07) 3101 58', 1),
  (18, 'Lucas', 'Synnot', '55 Walpole Avenue', 'KIRKSTALL', 'VIC', '3283', 'LucasSynnot@teleworm.us', '(03) 5389 23', 0),
  (19, 'Imogen', 'Schlunke', '25 Quayside Vista', 'HUGHES', 'ACT', '2605', 'ImogenSchlunke@cuvox.de', '(02) 6107 17', 0),
  (20, 'Max', 'Carr-Glyn', '32 Kerma Crescent', 'LITHGOW DC', 'NSW', '2790', 'MaxCarr-Glyn@rhyta.com', '(02) 4061 29', 0),
  (21, 'Kaitlyn', 'Levvy', '48 Carolina Park Road', 'TERRIGAL', 'NSW', '2260', 'KaitlynLevvy@rhyta.com', '(02) 9025 08', 0),
  (22, 'Abby', 'Jonathan', '88 Delan Road', 'ST AGNES', 'QLD', '4671', 'AbbyJonathan@einrot.com', '(07) 3916 00', 0),
  (23, 'Evie', 'McAlroy', '38 Springhill Bottom Road', 'CLAUDE ROAD', 'TAS', '7306', 'EvieMcAlroy@teleworm.us', '(03) 6271 99', 1),
  (24, 'Ryan', 'Tearle', '10 Holthouse Road', 'BIRDWOOD', 'SA', '5234', 'RyanTearle@einrot.com', '(08) 8294 97', 0),
  (25, 'Justin', 'Cade', '8 Plug Street', 'BRIARBROOK', 'NSW', '2365', 'JustinCade@rhyta.com', '(02) 6726 68', 1);
