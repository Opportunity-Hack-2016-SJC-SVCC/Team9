-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 07:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npowebportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `CID` varchar(100) NOT NULL,
  `OID` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CID`, `OID`, `Name`, `Email`, `Phone`) VALUES
('5001', '1001', 'John', 'john@ixentia.com', '4084084080'),
('5002', '1002', 'Ruben', 'ruben@etindex.com', '3553553535'),
('5003', '1003', 'robert', 'robert@purefish.com', '2252252255');

-- --------------------------------------------------------

--
-- Table structure for table `main_programs`
--

CREATE TABLE `main_programs` (
  `MID` varchar(100) NOT NULL,
  `OID` varchar(100) NOT NULL,
  `Program_Name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_programs`
--

INSERT INTO `main_programs` (`MID`, `OID`, `Program_Name`) VALUES
('2001', '1001', 'mobile'),
('2002', '1002', 'Weather'),
('2003', '1003', 'seafood');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `OID` varchar(4) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Income` varchar(100) NOT NULL,
  `Assets` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `ZIP` varchar(100) NOT NULL,
  `Mission_Statement` varchar(10000) NOT NULL,
  `Funds_Raised` int(11) NOT NULL,
  `Units_Sold` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`OID`, `Name`, `Income`, `Assets`, `City`, `State`, `ZIP`, `Mission_Statement`, `Funds_Raised`, `Units_Sold`, `Category`) VALUES
('1001', 'iXentia', '500000', '1000000', 'San Jose', 'CALIFORNIA', '95126', 'iXtentia a division of Extentia Information Technology builds useful inventive interesting and reliable mobile applications for Apple Android Windows and all other major platforms for global clients. Widely recognized as a trendsetter and knowledge leader in mobile technology iXtentia s development and execution credentials allow businesses from industries like e commerce utility retail finance branding & visibility education travel lifestyle gaming as well as enterprise deployments to leverage the scope of mobile apps.Drawing from years of experience iXtentia also offers consulting for mobile strategy and marketing. Several iXtentia applications are listed among the top 200 on the Apple App Store.', 0, 0, ''),
('1002', 'ET Index', '200000', '5000000', 'San Jose', 'CALIFORNIA', '95113', 'ET Index Research provides investors with tools to help avoid catastrophic climate change and generate sustainable returns. The current focus is global warming as this is the most time-sensitive existential threat faced by human civilisation. This is the purpose of the ET Carbon Rankings and corresponding ET Low Carbon & Fossil Free Index Series. Environmental Tracking is a systematic market mechanism designed to reallocate capital from high-carbon to low-carbon companies in order to create the necessary incentive for companies to expedite the shift towards a carbon neutral economy. Practically, it works by publicly ranking companies and reweighting them in investable indexes according to their position in the ranking. For companies, the only way to gain a greater weighting within the indexes is to move up the rankings. As the share of global capital allocated to passive index investing continues to grow, the ability for index benchmarks to influence company behaviour and drive emissions reductions across the economy will increase. Longer term, ET Index Research will add additional Environmental, Social and Governance (ESG) metrics to the Environmental Tracking index suite. The underlying mechanism will remain the same: companies will be publicly ranked according to their publicly disclosed ESG metrics; and ET Indexes will reweight companies according to their position in these public, fully transparent rankings. The objective is to provide investors with a systematic, transparent tool to incentivise a sustainable form of corporate stewardship that acts for people, planet and profit.', 0, 0, ''),
('1003', 'PureFish', '535000', '1000000', 'Dallas', 'Texas', '75209', 'PureFish, founded in 2002, began as an attempt to change the direction of the seafood industry. After years in the seafood business, the founders came to the realization that the seafood products presently in the market were mostly being treated as a commodity. Massive large scale fisheries and farms were becoming evermore concerned about scales of economies, higher volumes, and higher production, than the future of their fisheries, and the environment. The art of raising or fishing for high quality, fresh, good fish was being lost for the most part, and we chose to not be a part of that movement.', 0, 0, ''),
('1004', 'Navdy', '250000', '3000000', 'San Francisco', 'California', '94112', 'Navdy''s tagline is "Feels like driving in the future" because it is. The South of Market-based startup created a heads-up display that sits on your dashboard and projects onto your windshield. When you''re driving, the directions seem to magically appear on the road before you, telling you to turn left in half a mile or how fast you''re going. For drivers, not having to look down at your phone for directions could be a literal lifesaver.', 40000, 500, 'StartUp'),
('1004', 'Brigade', '300000', '400000', 'San Francisco', 'CALIFORNIA', '94122', 'It''s an election year, and Brigade is facing its make-or-break moment. In a bold attempt to try to engage a millennial class in politics, Brigade turns political discussions into an app. Instead of un-friending your high-school classmates on Facebook because of their political viewpoints, Brigade tries to identify friends or neighbors that you''re most similar to so you can team up to sign petitions or champion causes you are passionate about.\r\n\r\nIt''s earned the nickname "a Tinder for politics."\r\n\r\nBut Brigade wants to do more than have its users hit agree or disagree on important issues. The company used interactive voting guides to draw millennials into local politics. Its users'' opinions on a local San Francisco election accurately reflected — with one exception — how the voter base ended up voting in the polls.', 300000, 650, 'StartUp'),
('1006', 'Chariot', '350000', '2000000', 'San Francisco', 'CALIFORNIA', '94111', 'ut of all the startups that have tried to create private-shuttle networks in San Francisco, Chariot is the only one still in business — and growing.\r\n\r\nThe company crowdsources new routes based on demand from its riders. A person can suggest a route, and if there are enough votes to support it, the company launches it. Already people are ditching public-transit options in San Francisco to take more efficient routes between the Financial District and the Marina, or the Embarcadero to Potrero Hill.', 40000, 550, 'Venture Capitalist'),
('1007', 'Product Hunt', '420000', '4000000', 'San Jose', 'CALIFORNIA', '95113', 'Some of the most tech-prolific investment firms in New York and Silicon Valley — including Greylock Partners, Andreessen Horowitz, Betaworks, SV Angel, Y Combinator, and Techstars — use Product Hunt to find the next big thing or recommend what''s just launching.\r\n\r\nThe company evolved from an email newsletter to a site similar to Reddit, but for products. Users up-vote the new products, startups, apps, podcasts, and websites that are the most popular that day. As it''s grown, the company has added sections for games, podcasts, and books, although it still leans heavily on its tech audience. It doesn''t stop either at attracting the hot new products — top Valley investors and founders now do "Live" sessions, where they answer questions and provide advice.', 450000, 300, 'Venture Capitalist'),
('1008', 'Gigster', '360000', '4500000', 'San Jose', 'CALIFORNIA', '95116', ' Gigster sounds like another freelance platform, but it connects programmers with companies. Customers write in plain English what they want done, like a website, and Gigster analyzes the request and spits out a guaranteed price. Under the hood, though, Gigster is using machine learning to identify similarities between requests and even speed up completion time by suggesting bits of code that can be used again to complete a task. Its freelancers, often ex-Google or Facebook employees, take on the projects as creative challenges, but get to skip the mundane code that can be easily swapped in and out on each project. As its investor described it, Gigster is all about "software eating software."', 40000, 500, 'StartUp'),
('1005', 'FHI 360', '300000', '1200000', 'San Jose', 'CALIFORNIA', '95117', 'FHI 360 is a nonprofit human development organization dedicated to improving lives in lasting ways by advancing integrated, locally driven solutions. FHI 360 staff includes experts in education, health, nutrition, economic development, civil society, environment, gender, youth, research, and technology – creating a unique mix of capabilities to address today''s interrelated development challenges. FHI 360 serves more than 60 countries and all U.S. states and territories.', 70000, 450, 'Investment Banker');

-- --------------------------------------------------------

--
-- Table structure for table `performance_metrics`
--

CREATE TABLE `performance_metrics` (
  `OID` int(11) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Popularity` int(11) NOT NULL,
  `Coverage` int(11) NOT NULL,
  `Fund_Raised` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance_metrics`
--

INSERT INTO `performance_metrics` (`OID`, `Company_Name`, `Popularity`, `Coverage`, `Fund_Raised`, `Category`) VALUES
(1001, 'iXentia', 80, 35, 1000000, 'Investment Bankers'),
(1002, 'ET Index', 65, 85, 850000, 'Investment Bankers'),
(1003, 'PureFish', 90, 20, 500000, 'Investment Bankers'),
(1004, 'SpringU', 15, 65, 250000, 'Investment Bankers'),
(1005, 'SMART', 66, 80, 1500000, 'Investment Bankers'),
(1006, 'mySociety', 90, 53, 200000, 'StartUp'),
(1007, 'Personify', 83, 36, 120000, 'StartUp'),
(1008, 'Bench', 78, 65, 400000, 'StartUp'),
(1009, 'OpenTrail', 84, 75, 500000, 'StartUp'),
(1010, 'Ecodomum', 92, 58, 650000, 'StartUp'),
(1011, 'idacapita', 45, 30, 140000, 'Venture Capitalist'),
(1012, 'Naturevest', 73, 68, 700000, 'Venture Capitalist'),
(1013, 'Cenfri', 72, 38, 600000, 'Venture capitalist'),
(1014, 'Wealth Plus', 80, 47, 920000, 'Venture Capitalist'),
(1015, 'Nisaba Fund', 74, 55, 850000, 'Venture Capitalist');

-- --------------------------------------------------------

--
-- Table structure for table `service_areas`
--

CREATE TABLE `service_areas` (
  `SID` varchar(100) NOT NULL,
  `OID` varchar(100) NOT NULL,
  `Ruling_Year` varchar(200) NOT NULL,
  `Area` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_areas`
--

INSERT INTO `service_areas` (`SID`, `OID`, `Ruling_Year`, `Area`) VALUES
('3001', '1001', '2015', 'Americas'),
('3002', '1002', '2014', 'Europe'),
('3003', '1003', '2016', 'APAC');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `UserID` int(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `FilterType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`UserID`, `UserName`, `FilterType`) VALUES
(1, 'Jey', 'investment'),
(2, 'manoj', 'Banker');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
