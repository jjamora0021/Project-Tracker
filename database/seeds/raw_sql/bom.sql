-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 02:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `material_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`material_code`, `description`, `unit`) VALUES
('PE11001', 'Bolt, Machine 5/8 in. x 4 in. Full Thread / 10cm', 'pc/s'),
('PE11003', 'Bolt, Machine 5/8 in. x 6 in. Full Thread / 15cm', 'pc/s'),
('PE11004', 'Bolt, Machine 5/8 in. x 8 in. Full Thread / 20cm', 'pc/s'),
('PE11027', 'Nut, Square 5/8 in.', 'pc/s'),
('PE11030', 'Nut, IMC Loknut & Bushing 50mm dia', 'set'),
('PE11073', 'Bolt with Nut, 1 1/2 in.x 3/8 in. ', 'pc/s'),
('PE11074', 'Eyebolt', 'pc/s'),
('PE12004', 'Clamp, Pole, CA Type 5/8 in. x 8 in.- 10 in., w/ Bolts and Nuts', 'set'),
('PE12006', 'Clamp, Pole, CA Type 5/8 in. x 10 in. - 12 in., w/ Bolts and Nuts', 'set'),
('PE12011', 'Clamp, Pole, CA Type 5/8 in. x 6 in. - 8 in., w/ Bolts and Nuts', 'set'),
('PE12014', 'Clamp, Pole, CA Type 5/8 in. x 12 in. - 14 in., w/ Bolts and Nuts', 'set'),
('PE12016', 'Clamp, Pole, DEG Type 5/8 in. x 6 in. - 8 in., w/ Bolts and Nuts', 'set'),
('PE12020', 'Clamp, Pole, DEG Type 5/8 in. x 10 in. - 12 in. w/ Bolts and Nuts', 'set'),
('PE12021', 'Clamp, Pole, DEG Type 5/8 in. x 12 in. - 14 in., w/ Bolts and Nuts', 'set'),
('PE12026', 'Clamp, Pole, DEG Type 5/8 in. x 8 in. - 10 in., w/ Bolts and Nuts', 'set'),
('PE14005', 'Guy Grip, 5/16 in., Black', 'pc/s'),
('PE14008', 'Spacer, Thimble Guy 3/8 in.', 'pc/s'),
('PE14011', 'Guy Grip 1/7 in. (China)', 'pc/s'),
('PE15001', 'Rod, Grounding 1/2 in. x 6 ft  (1.27cm x 1.82M)', 'pc/s'),
('PE15008', 'Ground Strand Clamp (Top Set)', 'pc/s'),
('PE15009', 'Ground Rod Clamp (Bottom Set)', 'pc/s'),
('PE16001', 'Wire, Lashing 1.2mm x 190M/roll', 'meter'),
('PE16002', 'Wire, Messenger 5/16 in.', 'meter'),
('PE17001', 'Suspension Clamp, Straight', 'pc/s'),
('PE17002', 'Clamp, Lashing Wire', 'pc/s'),
('PE17010', 'C-Clamp/ U-Clamp 2 holes 2 in. dia.', 'pc/s'),
('PE18001', 'Concrete Poles, 7.5M (25ft), Class 7A (Round) - PLDT Standard', 'pc/s'),
('PE18004', 'Concrete Poles, 9.0M (30ft), Class 7A (Round) - PLDT Standard', 'pc/s'),
('PE18006', 'Concrete Poles, 7.5M (25ft), Class 9 (Round) - PLDT Standard', 'pc/s'),
('PE18007', 'Concrete Poles, 9.0M (30ft), Class 9 (Round) - PLDT Standard', 'pc/s'),
('PE19002', 'Metal, U-Guard, 4 3/16 in. x 8ft', 'pc/s'),
('PE19003', 'Cable Loop Holder (X Frame PLDT-SMART)', 'pc/s'),
('PE19007', 'Wall Strap, Loop typem, HDG, 16mm  dia.', 'pc/s'),
('PE19012', 'J-Hook with Square Nut (Facing Right)', 'pc/s'),
('PE19014', 'Bridle Ring-(NEW)', 'pc/s'),
('PE19020', 'Full Thread Bar 3/8 in. dia. x 3m.', 'pc/s'),
('PE19021', 'Grip Anchor 3/8 in.', 'pc/s'),
('PE19022', 'Nut & Washer for Full Thread Bar 3/8 in.', 'pc/s'),
('PE19023', 'Clevis Hanger Loop 2 in.', 'pc/s'),
('PE21002', 'LCP with 1 x 8 splitter', 'set'),
('PE21006', 'NAP with 1 x 8 splitter', 'set'),
('PE21007', 'NAP Box Only', 'pc/s'),
('PE22001', 'FOC, Figure 8 Semi-dry Cable (24F)', 'meter'),
('PE22003', 'FOC, 72-Core Loose Tube Duct Cable, Traditional ', 'meter'),
('PE22005', 'FOC, 216 Fiber Loose Tube Cable, Traditional ', 'meter'),
('PE22008', 'FOC, 72 core, FIGURE 8', 'meter'),
('PE22014', 'FOC, 144 Fiber Loose Tube Cable, Traditional?', 'meter'),
('PE22015', 'FOC, 24-Core Loose Tube Duct Cable, Traditional ', 'meter'),
('PE23008', 'Joint Closure, 144F', 'pc/s'),
('PE23012 ', 'Joint Closure (72F) mechanical duct', 'pc/s'),
('PE31003', 'Pipe, IMC 2 in. dia. x 3M', 'meter'),
('PE31008', 'Pipe, PVC for Spiralling (black)', 'meter'),
('PE31009', 'Pipe, PVC 4 in. dia. x 6m (Yellow)', 'meter'),
('PE31010', 'Pipe, PVC 4 in. dia. x 90deg. Elbow (114.3mm) x 1m Radius', 'pc/s'),
('PE31015', 'Pipe, HDPE SDR 11 x 50mm x  200M/roll (Black)', 'meter'),
('PE31019', 'Flexible Metal Conduit, 2 in. dia.', 'meter'),
('PE31024', 'Pipe, HDPE SDR 11 x 50mm x  200M/roll (Yellow)', 'meter'),
('PE31028', 'Pipe, PVC 50mm dia.', 'meter'),
('PE31030', 'Riser Steel Pipe (GI); 4 in. Dia x 10) 114mm x 3.05m', 'pc/s'),
('PE31033', 'Pipe, EMT 50mm dia. x 3M (2 in.)', 'meter'),
('PE31039', 'Pipe, HDPE SDR 13.5 x 50mm x 200M/roll (Yellow)', 'meter'),
('PE31040', 'Pipe, HDPE SDR 13.5 x 50mm x 200M/roll (Black)', 'meter'),
('PE31041', 'Pipe, HDPE SDR 13.5 x 32mm x 200M/roll (Yellow)', 'meter'),
('PE32002', 'Coupling, Compression HDPE, 2 in. dia.', 'pc/s'),
('PE32004', 'Elbow, Pipe EMT 50mm dia. x 90Deg x 1 meter radius', 'pc/s'),
('PE32006', 'Coupling, IMC 2 in. dia.', 'pc/s'),
('PE32007', 'Pipe Elbow,IMC 2 in. X 90 deg x 0.5M Radius (long elbow)', 'pc/s'),
('PE32009', 'End Bell, PVC 2 in. dia. x 50mm x 6 in. (Orange - Special Fab)', 'pc/s'),
('PE32010', 'End Cap, PVC 4 in. dia.', 'pc/s'),
('PE32011', 'End Bell, PVC 4 in. dia.', 'pc/s'),
('PE32013', 'Straight Connector w/ Nut (for 2 in. Liquid Tight Flexible Metal Conduit)', 'pc/s'),
('PE32016', 'Coupling, EMT 2 in. dia.', 'pc/s'),
('PE32018', 'Coupling, PVC 2 in. dia.', 'pc/s'),
('PE32019', 'Elbow, Pipe PVC 50mm dia. x 90Deg x 1 meter radius', 'pc/s'),
('PE32021', 'Elbow, Pipe IMC 50mm dia. x 90Deg x 1 meter radius', 'pc/s'),
('PE33003', 'Duct Plug, Simplex, 50mm', 'pc/s'),
('PE33017', 'Mechanical Duct Plug (3/4 in.)', 'pc/s'),
('PE41001', 'Buckle, Stainless Steel 5/8 in.', 'pc/s'),
('PE41008', 'Strap, Stainless Steel 5/8 in.', 'meter'),
('PE42001', 'Cable Tie, Plastic 250mm (Yellow)', 'pc/s'),
('PE42002', 'Cable Tie, Plastic 12 in. (Black)', 'pc/s'),
('PE44003', 'Pull Box, 300mm x 300mm x 100mm', 'pc/s'),
('PE44009', 'Junction Box (Utility, Box 2 in. x 4 in. G.A 18-B Deep) ', 'pc/s'),
('PE44010', 'Junction Box 8 in.x8 in.x4.5 in. (200m x 200m x 100m)', 'pc/s'),
('PE51002', 'Electrical tape (3M)', 'pc/s'),
('PE51004', 'Entrance Cap 50 mm', 'pc/s'),
('PE51049', 'Weather Head Cap, 4 in. (G.I.)', 'pc/s'),
('PE51050', 'G.I. Cable Tray (300mm x 100mm)', 'meter'),
('PE51051', 'Cable Ladder 300mm wide', 'meter'),
('PE64009', 'Cable Loop Holder (Scissor Type)', 'pc/s'),
('PE64012', 'Clamp, Pole, DEG Type 5/8 in. x 8 in. - 10 in., w/ 15cm  Bolts and Nuts', 'set'),
('PE64013', 'Clamp, Pole, CA Type 5/8 in. x 8 in. - 10 in., w/ 15cm  Bolts and Nuts', 'set'),
('PE64013', '', ''),
('PE64015', 'Cable Loop Holder (X-Frame China)', 'pc/s'),
('PE85005', 'ODF 24 CORE', 'set'),
('PE85045', 'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 5M ', 'pc/s'),
('PE85046', 'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 10M ', 'pc/s'),
('PE85047', 'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 15M ', 'pc/s'),
('PE85048', 'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 20M ', 'pc/s'),
('PE85049', 'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 25M ', 'pc/s'),
('PE85050', 'Patchcord LC/UPC-LC/UPC Simplex SM 2.0MM LSZH 30M ', 'pc/s'),
('PE85051', 'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 15M ', 'pc/s'),
('PE85052', 'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 20M ', 'pc/s'),
('PE85057', '216F Closure', 'pc/s'),
('PE85058', '216F ODF(Optical Distribution Frame)', 'set'),
('PE85059', '24 Closure (MECHANICAL)', 'pc/s'),
('PE85060', '19 in. ODF Rack (4 post) Collapsible (45RU 600mm x 600mm) 2142.9mm H', 'unit'),
('PE85074', 'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 10M ', 'pc/s'),
('PE85075', 'Patchcord SC/UPC-LC/UPC Simplex SM 2.0MM LSZH 30M', 'pc/s'),
('PE85076', '48F ODF Wall mounted', 'set'),
('PE85077', 'NAP Box with 1*1:8 Cassette? Splitter', 'set'),
('PE85078', 'NAP Box with 2*1:8 Cassette? Splitter', 'set'),
('PE85079', 'LCP Box with 1*1:8 Cassette? Splitter', 'set'),
('PE85080', 'LCP Box with 2*1:8 Cassette? Splitter', 'set'),
('PE85081', 'Tie cable-216F', 'meter'),
('PE85082', 'Pull-back Cable-48F', 'meter'),
('PE85083', 'Pull-back Cable-24F', 'meter'),
('PE85084', 'LCP with 1 x 4 splitter', 'set'),
('PE85100', 'Mini NAP Box with 1:8 Micro  Splitter', 'set'),
('PE85106', '24F ODF Wall mounted', 'set'),
('PE85107', 'NAP Box with 4*1:8 Cassette  Splitter', 'set'),
('PE85108', 'LCP Box with 4*1:8 Cassette   Splitter', 'set'),
('PE85109', '1-Fiber Fig 8 Drop Cable', 'meter'),
('n/a', 'SIDEWALK, SIDE GUY WITH ANCHOR', 'set'),
('n/a', 'DOWN SIDE GUY', 'set'),
('n/a', '26 in. EXTENSION ARM', 'set'),
('n/a', '44.5 in. EXTENSION ARM', 'set'),
('n/a', '10 PIN ALLEY ARM', 'set');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
