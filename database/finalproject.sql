-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 10, 2021 at 04:04 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `icon` varchar(150) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `active`, `icon`, `total`, `create_at`) VALUES
(3, 'Accountant', 1, 'fa-university', 230, '2019-09-22 14:43:44'),
(4, 'Web Development', 1, 'fa-android', 109, '2019-09-22 14:43:44'),
(5, 'HR', 1, 'fa-user', 100, '2019-09-22 14:43:44'),
(6, 'Economic', 1, 'fa-usd', 50, '2019-09-22 14:49:19'),
(7, 'Customer Service/Support', 1, ' fa-comments\r\n', 44, '2019-09-22 14:49:25'),
(8, 'Law', 1, ' fa-book\r\n', 60, '2019-09-24 08:01:09'),
(9, 'Health/Medicine', 1, ' fa-hospital-o\r\n', 85, '2019-09-24 08:01:09'),
(10, 'Engineer ', 1, ' fa-cog\r\n', 102, '2019-09-24 08:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  `location` text NOT NULL,
  `photo` varchar(120) NOT NULL DEFAULT 'default.png',
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `view`, `create_at`, `active`, `location`, `photo`, `description`) VALUES
(13, 'Krawma', 0, '2019-09-30 09:26:34', 1, 'Phnom Penh', 'default.png', 'Krawma is a Cambodian company with close to 20 years of experience. We are the company that operates the BongThom.com and BongSrey.com web sites. We are regarded as the premier jobs announcements portal in Cambodia Krawma is expanding and so we now want to hire a qualified Cambodia candidate to join our team in the role described below.'),
(19, 'ARCHETYPE CAMBODIA LTD.', 0, '2019-10-03 10:23:05', 1, 'Phnom Penh', 'default.png', '<p>Archetype Group is a multidisciplinary construction consultancy with a core services portfolio including Architecture; Urban and Master Planning; Civil, Structural, Mechanical &amp; Electrical Engineering; Project &amp; Construction Management, and Cost Management. Passionate, driven and possessing rich, local knowledge, the founders of Archetype had a vision of bringing together an international team to form a world-class consultancy for fast-changing markets.</p>\r\n\r\n<p>Now an internationally recognized firm, Archetype has more than 500 employees in offices in Vietnam, Cambodia, Thailand, Laos, India, Mongolia, France, Qatar, Indonesia, Myanmar and Kazakhstan. From these offices, Archetype Group delivers a wide scope of projects ranging from luxury hospitality properties to mixed-use high rises to educational and healthcare facilities to large scale industrial projects.</p>\r\n\r\n<p>Archetype is ranked 62nd in the Top 100 Architectural Firms in the World</p>'),
(20, 'HRINC (CAMBODIA) CO., LTD', 0, '2019-10-03 10:30:05', 1, 'Phnom Penh', 'default.png', '<p>HRINC is the leading provider of HR Services to the Cambodia market and expanding to the South East Asia region.&nbsp; We support multinational companies and leading ASEAN conglomerates and SMEs with their Human Resource needs, from consulting and market intelligence, to outsourcing and compliance as well as recruitment.</p>'),
(21, 'STAR EMPIRE PROPERTY LIMITED', 0, '2019-10-03 10:39:02', 1, 'Phnom Penh', 'default.png', NULL),
(22, 'THE ARBITRATION COUNCIL FOUNDATION (ACF)', 0, '2019-10-03 10:52:01', 1, 'Phnom Penh', 'default.png', '<p>The Arbitration Council Foundation (ACF) is a non-political and not-for-profit organization. ACF supports the operations of Cambodia&rsquo;s Arbitration Council (AC), which is an independent national institution established by Law to resolve labor disputes. Supported by the Ministry of Labor and Vocational Training, employers and unions, ACF is recognized as a model institution for justice in labor dispute resolution in Cambodia and has won praise from the national and international communities.</p>'),
(23, 'FTB Bank', 0, '2019-10-03 10:53:12', 1, 'Phnom Penh', 'default.png', '<p>Foreign Trade Bank of Cambodia (<strong>FTB</strong>) is Cambodia&#39;s first and foremost bank. It has been providing customers with safe and reliable banking services for over 37 years. With our head office in Phnom Penh, we currently operate eleven branches and office in Phnom Penh, Sihanoukville, Siem Reap, Battambang and Kampong Cham province and plan to continue expanding our distribution network. In order to cope with the growth, we are looking for highly motivated and qualified candidates to join with our &ldquo;<strong>Employer of Choice</strong>&nbsp;<strong>bank</strong>&rdquo;</p>'),
(24, 'RAFFLES HOTEL LE ROYAL', 0, '2019-10-04 02:45:07', 1, 'Phnom Penh', 'default.png', '<p><strong>Raffles Hotels &amp; Resorts</strong>&nbsp;is a collection of award-winning luxury hotels located in vibrant destinations around the world. Unique with its own distinct personality, each Raffles hotel distinguishes itself with the highest standards of product and service.</p>\r\n\r\n<p>We offer excellent career development and growth opportunities for our colleagues who have the talent, dedication, drive and passion to be part of a leading global luxury hospitality brand.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Raffles Hotel Le Royal, Phnom Penh (<a href=\"http://www.raffles.com/phnompenh\">http://www.raffles.com/phnompenh</a>) is one of Asia&rsquo;s great classic hotels. Originally open in 1929, Raffles Hotel Le Royal is a warm and welcoming property, reflecting the middle era of Indochina, a vibrant French colony, with its own lifestyle and accompanying attributes. In international, regional and local markets it is regarded for its delivery of heartfelt service levels and personal attention, often recognized as setting the benchmark for Khmer hospitality. It is an exciting time to join the team as the hotel is currently undergoing a revitalizing refurbishment and Phnom Penh is developing rapidly.</p>'),
(25, 'LIFE EDUCATION', 0, '2019-10-04 14:32:15', 1, 'Phnom Penh', 'default.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` longtext,
  `company` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `feature` varchar(10) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `company`, `location_id`, `category`, `shift_id`, `active`, `feature`, `create_at`) VALUES
(41, 'M&E ENGINEER', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Undertake any M&amp;E repair works as instructed for the office building or retail units</li>\r\n	<li>Assist in fire safety activities conducted in-house and response to minor issues</li>\r\n	<li>Assist service provider technicians to carry out their task as and when required</li>\r\n	<li>Assist Technical Supervisor to do stock checking pertaining to engineering material</li>\r\n	<li>Assist management to oversee contractors in M&amp;E, building and landscape works as requested.</li>\r\n	<li>Carry out any other works as requested by the Technical Supervisor.</li>\r\n</ul>\r\n\r\n<p><strong>Job Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor Degree of Electrical Engineering/Mechanical or related fields</li>\r\n	<li>At least one year of relevant work experience</li>\r\n</ul>\r\n\r\n<p>Interested candidates should submit your CV and cover letter to Sokimex Investment Group Building # 22, Kramounsar Street, Sangkat Phsar Thmey 2, Khan Daun Penh, not later than 26 October 2019, or through email: hr@skmig.com .</p>\r\n\r\n<p>First come First serve. For further information, please feel free to contact us at 088 731 82 93.</p>\r\n\r\n<ul>\r\n</ul>', 'SOKIMEX INVESTMENT GROUP CO., LTD', 1, 'Electricity / Mechanic', 2, 1, 'No', '2019-10-03 07:33:13'),
(48, 'ARCHITECT', '<p><strong>Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Perform duties assigned by Architectural Team Leader/ Design Manager/ Design Director</li>\r\n	<li>Undertake architectural, schematic and concept design for assigned projects, with the ability to undertake design details (windows, doors etc) including preliminary design calculations, preliminary sketches/drawings, preliminary specifications and other required design information</li>\r\n	<li>Liaise with engineers and other disciplines to ensure coherent and correct, as well as aesthetically pleasing design</li>\r\n	<li>Make amendments to the design as required</li>\r\n	<li>Undertake detailed design work on projects as required, and fully check and ensure designs are properly validated as per the approved design process</li>\r\n	<li>Undertake site visits as required</li>\r\n	<li>Undertake quality assurance checking of drawings and calculations produced by self and that of other team members as directed by Team Leader/Design Manager</li>\r\n	<li>Ensure that all drawings are reviewed and checked by Team Leader/Design Manager prior to external issue</li>\r\n	<li>Produce architectural design briefs, documents, reports and specifications as required</li>\r\n	<li>Produce architectural drawings utilizing Revit and/or AutoCAD as appropriate for the project</li>\r\n	<li>Follow Company&rsquo;s design procedures.Perform duties assigned by Architectural Team Leader/ Design Manager/ Design Director</li>\r\n</ul>\r\n\r\n<p><strong>Competencies</strong></p>\r\n\r\n<ul>\r\n	<li>Degree qualified in Architecture</li>\r\n	<li>Years of experience: Level I: Minimum 1 Years Post Graduate Experience. Level II: Minimum 3 Years Post Graduate Experience. Level III: Minimum 4 Years Post Graduate Experience. Level IV: Minimum 5 Years Post Graduate Experience</li>\r\n	<li>Previous experience working within an architectural design company</li>\r\n	<li>Advanced knowledge of AutoCad and Revit</li>\r\n	<li>Intermediate knowledge of Design Standards in Asia and in Europe</li>\r\n	<li>Intermediate written and spoken communication skills with a minimum basic understanding of English</li>\r\n</ul>\r\n\r\n<p>If you are interested in this job opportunity, please send us your updated Resume to sokthida.sim@archetype-group.com or call +855(0)92880470 for further information.</p>', 'ARCHETYPE CAMBODIA LTD.', 1, 'Building and construction, Graphic Designer', 2, 1, 'Yes', '2019-10-03 10:21:59'),
(49, 'PUBLIC RELATION OFFICER', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Assist Public Relation Manager on overall tasks of the division</li>\r\n	<li>Preparing press releases, keynote speeches and entrepreneurial culture promotional material</li>\r\n	<li>Collaborate with internal teams (e.g. marketing) and maintain open communication with senior management</li>\r\n	<li>Building positive relationships with stakeholders, media and the public</li>\r\n	<li>Organize PR events (e.g. open days, press conferences)</li>\r\n	<li>Seek opportunities for partnerships, sponsorships and advertising</li>\r\n	<li>Address inquiries from the media and other parties</li>\r\n	<li>Track media coverage and follow industry trends</li>\r\n	<li>Prepare and submit PR and impact reports</li>\r\n	<li>Manage PR issues</li>\r\n	<li>Other tasks assigned by manager</li>\r\n</ul>\r\n\r\n<p><strong>Job Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor&rsquo;s degree in public Relations, Journalism, Communications or related field</li>\r\n	<li>At least 2 years&rsquo; experience in Public Relations Officer or similar PR role</li>\r\n	<li>Familiarity with project management software and video/photo editing is a plus</li>\r\n	<li>Experience managing media relations (online, broadcast and print)</li>\r\n	<li>Background in researching, writing and editing publications</li>\r\n	<li>Strong organizational communication ability (oral and written)</li>\r\n	<li>Ability to work well under pressure</li>\r\n	<li>Creativity and problem-solving aptitude</li>\r\n	<li>Good command in English</li>\r\n</ul>\r\n\r\n<p><strong>How to Apply</strong></p>\r\n\r\n<p>Interested candidates are invited to submit Curriculum Vitae to the E-mail address below:</p>\r\n\r\n<ul>\r\n	<li>Contact Person: Mr. SEN Chanto</li>\r\n	<li>E-mail: Sen.Chanto@hrinc.com.kh</li>\r\n	<li>Tel: 023 211 437</li>\r\n	<li>Address: 10, Oknha Pich Avenue (Street 242), Sankat Chaktumok, Khan Daun Penh Phnom Penh</li>\r\n	<li>Website: www.hrinc.com.kh</li>\r\n</ul>', 'HRINC (CAMBODIA) CO., LTD', 1, 'Public communication', 2, 1, 'Yes', '2019-10-03 10:29:43'),
(50, 'SALES MANAGER', '<p><strong>Position Summary</strong></p>\r\n\r\n<p>The Sales Manager - focusing on achieving sales targets, increasing revenue and market share for the apartment.</p>\r\n\r\n<p><strong>Responsibilities</strong></p>\r\n\r\n<ol>\r\n	<li>Identifies, develops, and evaluates sales strategy, based on knowledge of establishment objectives, market characteristics, and cost and mark up factors</li>\r\n	<li>Assists in preparation, administration and documentation of proposals</li>\r\n	<li>Maintains existing accounts and secures new accounts through aggressive and creative sales &amp; marketing programmes</li>\r\n	<li>Takes care customers throughout the guest&rsquo;s cycle: pre-arrival, upon arrival, settling in and moving around, stay experience, pre-departure and departure</li>\r\n	<li>Conducts sales presentations to prospective clients</li>\r\n	<li>Coordinates and participates in promotional activities and trade shows, working with developers, advertisers, and production managers, to market the serviced apartment</li>\r\n	<li>Prepares monthly reports of leasing for review of plans and procedures</li>\r\n	<li>Conducts economic and commercial surveys to identify potential markets for the Company</li>\r\n	<li>Other works as assigned</li>\r\n</ol>\r\n\r\n<p><strong>Qualifications</strong></p>\r\n\r\n<p>Degree in Business Administration/Sales &amp; Marketing/Hospitality</p>\r\n\r\n<p><strong>Experience</strong></p>\r\n\r\n<p>At least 3 years of relevant experience</p>\r\n\r\n<p><strong>Competencies</strong></p>\r\n\r\n<ul>\r\n	<li>Knowledge in the Hospitality Industry</li>\r\n	<li>Excellent spoken and written English</li>\r\n	<li>Well versed in use of computers such as Microsoft Word, PowerPoint and Excel</li>\r\n	<li>Confident, Positive Minded, Good organizational &amp; people development sales, Outgoing personality</li>\r\n</ul>\r\n\r\n<p><strong>Contact Person</strong></p>\r\n\r\n<ul>\r\n	<li>Ms. Chen Phalla</li>\r\n	<li>Phone : 023 900797 (ext: 107)</li>\r\n	<li>E-mail : admin@meridian-international-holding.com</li>\r\n	<li>Address:&nbsp;Casa by Meridian, Ovest Tower, 4F Floor, No. 1, Harvard Street, Diamond Island, Tonle Bassac, Chamkamorn, Phnom Penh, Cambodia</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'STAR EMPIRE PROPERTY LIMITED', 1, 'Marketing and Sales', 2, 1, 'Yes', '2019-10-03 10:38:36'),
(51, 'DEPUTY EXECUTIVE DIRECTOR', '<p>The Arbitration Council Foundation seeks a talented and experienced candidate with management and legal experience for the position of Deputy Executive Director.</p>\r\n\r\n<p><strong>1. What is the Abritration Council?</strong></p>\r\n\r\n<p>The Arbitration Council (AC) of the Kingdom of Cambodia is a national institution for the resolution of labour disputes provided for in the Labour Law. The Arbitration Council is widely recognised as a model for independence and transparency in legal decision-making.</p>\r\n\r\n<p><strong>2. What is the Abritration Council Foundation?</strong></p>\r\n\r\n<p>The Arbitration Council Foundation (ACF) is an independent and non-political organization that provides technical and administrative support to the Arbitration Council.</p>\r\n\r\n<p><strong>3. Areas of work of the Deputy Executive Director include:</strong></p>\r\n\r\n<ul>\r\n	<li>Management of the Arbitration Council Foundation</li>\r\n	<li>Reporting on the work and functions of the ACF and the AC</li>\r\n	<li>Monitoring and evaluation of the Arbitration Council Foundation performance</li>\r\n</ul>\r\n\r\n<p><strong>4. Specific duties include but not limit to working with ACF staff and assisting the ACF Executive Director to :</strong></p>\r\n\r\n<ul>\r\n	<li>Manage operation of the Foundation</li>\r\n	<li>Develop, write, review, and submit funding proposals to donors</li>\r\n	<li>Coordinate internal and external monitoring and evaluation including analysis and reporting of results</li>\r\n	<li>Strengthen systems and training to support arbitrators and staff</li>\r\n	<li>Implement measures which help to maintain the integrity, impartiality and effectiveness of the Arbitration Council</li>\r\n	<li>Build and maintain professional relationships with stakeholders such as employer and employee groups, government, donors &amp; CSOs</li>\r\n	<li>Provide accurate and timely reporting to donors and ACF Board of Directors</li>\r\n</ul>\r\n\r\n<p><strong>5. The qualities of ideal candidate</strong></p>\r\n\r\n<ul>\r\n	<li>Honest and ethical individual who works to the highest standards of integrity and propriety</li>\r\n	<li>Excellent management experience and the ability to work in a management team</li>\r\n	<li>Excellent experience in development and implementation of monitoring and evaluation system for projects</li>\r\n	<li>Excellent experience in proposal writing and reporting to donors is required</li>\r\n	<li>Good skills and the ability to maintain relationships with different stakeholder groups</li>\r\n	<li>Experience in financial management and budgeting is required</li>\r\n	<li>Experience working with employer and employee groups, government, NGOs, and donors is desirable</li>\r\n</ul>\r\n\r\n<p><strong>6. Minimun skills and qualification</strong></p>\r\n\r\n<ul>\r\n	<li>Master&rsquo;s degree in business administration, law, social science or related fields</li>\r\n	<li>At least seven years of experience in a management position</li>\r\n	<li>High level of resourcefulness and the ability to work under pressure and without supervision</li>\r\n	<li>Good at interpersonal relations, organization and planning</li>\r\n	<li>Ability to be a team player in a multi-cultural environment</li>\r\n	<li>Excellent training and presentation skills</li>\r\n	<li>Fluent written and spoken Khmer and English</li>\r\n</ul>\r\n\r\n<p><strong>7. Salary package</strong></p>\r\n\r\n<p>A competitive package of salary and benefits will be provided.</p>\r\n\r\n<p><strong>8. How to apply for the position</strong></p>\r\n\r\n<p>The interested candidates are encouraged to obtained detail job descriptions and required qualifications and skills via e-mail job@arbitrationcouncil.org.</p>\r\n\r\n<p>A statement addressing the above selection criteria and CV with 3 referees should be sent by mail to the ACF at No. 72, Street 592, Sangkat Boeung Kak II, Khan Tuol Kork, Phnom Penh or by the above e-mail address. Please do not send copies of diplomas or certificates.</p>\r\n\r\n<p>We regret that only short-listed candidates will be contacted for an interview. ACF is an equal opportunity employer; however, women are particularly encouraged to apply. The deadline for applications is:</p>\r\n\r\n<p>16:00hrs, 18 October 2019.</p>', 'THE ARBITRATION COUNCIL FOUNDATION (ACF)', 1, 'Supervisory and Management', 2, 1, 'Yes', '2019-10-03 10:49:15'),
(52, 'STAFF OF TRADE FINANCE UNIT', '<ul>\r\n	<li>Use SWIFT network to communicate with all correspondent banks</li>\r\n	<li>Issuing the Documentary Letter of Credit (L/C), Bank Guarantee (BG), Checking and preparing the documents presented by negotiating bank and collecting payment for each L/C</li>\r\n	<li>Received the Documentary Letter of credit from the correspondent bank</li>\r\n	<li>Received the documents preparing and checking for D/P or D/A (Documents against Payment or Documents against Acceptance</li>\r\n	<li>On maturity date make the payment for L/C terms and conditions</li>\r\n	<li>Promote Customers to use bank services</li>\r\n	<li>Do other tasks assigned by manager</li>\r\n</ul>', 'FTB BANK', 1, 'Accounting / Finance and Audit', 2, 1, 'No', '2019-10-03 10:54:40'),
(53, 'MARKETING MANAGER', '<p><strong>Job Description</strong></p>\r\n\r\n<ul>\r\n	<li>Set specific marketing goals</li>\r\n	<li>Initiates Marketing research and survey and analyze market trends to identify new opportunities and recommend changes to marketing and business development strategies basing on analysis and feedback</li>\r\n	<li>Brainstorm and implement new and creative marketing led growth strategies</li>\r\n	<li>Responsible for initiating creative campaigns - planning and executing</li>\r\n	<li>Develop and implement marketing strategies for each brand</li>\r\n	<li>Builds strong collaboration with team and cross functional department to ensure all marketing plans are well executed with strong results</li>\r\n	<li>Works closely to identify the full scale of marketing delivery channels that best activate the strategic plans - including media</li>\r\n	<li>Build up strong customer&rsquo;s relationship to increase product distributions</li>\r\n	<li>Develop KPI for marketing team</li>\r\n	<li>Provide training and coaching teams to ensure that team hit KPI</li>\r\n	<li>Lead and motivate staffs to work more effectively and archive company&rsquo;s goal</li>\r\n	<li>Provide support to team and other department as needed</li>\r\n	<li>Other tasks will be assigned by director</li>\r\n</ul>\r\n\r\n<p><strong>Job Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in Management or Marketing or related field</li>\r\n	<li>Minimum 3-5 year experience in Marketing/strategy field</li>\r\n	<li>Good management and leadership skill</li>\r\n	<li>Good planning and organizing and budget preparation</li>\r\n	<li>Strong business and market analysis capabilities</li>\r\n	<li>&nbsp;Good understanding of marketing, media and communication channels for both internal and external audiences</li>\r\n	<li>Have ability to lead and motivate team</li>\r\n	<li>Dynamic and creative, social and networking person</li>\r\n	<li>&nbsp;Honest, hardworking and willing to work overtime and under pressure</li>\r\n	<li>Excellence in communication and negotiation skill</li>\r\n	<li>Able to handle effectively all queries in professional manner</li>\r\n	<li>Excellence in communication and negotiation skill</li>\r\n	<li>Good at English language both in speaking and writing and Computer skill</li>\r\n</ul>\r\n\r\n<p><strong>Contact Information</strong></p>\r\n\r\n<p><strong>Contact Person&nbsp;</strong>Mr. Ith Titrithy</p>\r\n\r\n<p><strong>Phone&nbsp;</strong>096 854 2007</p>\r\n\r\n<p><strong>Email&nbsp;</strong>camborithy@yahoo.com</p>\r\n\r\n<p><strong>Address&nbsp;</strong>Sangkat Chaktomuk, Khan Daun Penh, Phnom Penh, Cambodia</p>', 'K.E.T IMPORT EXPORT CO., LTD', 1, 'Marketing and Sales', 2, 1, 'No', '2019-10-03 11:01:03'),
(54, 'FRONT DESK AGENT', '<p>Raffles Hotel Le Royal are inviting applications from dynamic, motivated, creative, and experienced professionals for the following opportunity:</p>\r\n\r\n<p><strong>Key Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>To consistently provide thoughtful, caring and sincere service</li>\r\n	<li>To greet, check in and settle guest accounts while ensuring all service standards are followed</li>\r\n	<li>To assist guests regarding hotel facilities in an informative and helpful way</li>\r\n	<li>To respond to each Guest who approaches the Reception Desk</li>\r\n	<li>To drive rate through up-selling room brands</li>\r\n	<li>To follow department policies, procedures and service standards</li>\r\n	<li>To follow all safety policies</li>\r\n	<li>Other duties as assigned</li>\r\n</ul>\r\n\r\n<p><strong>Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Priority for Male Applicant</li>\r\n	<li>Previous customer related experience preferred</li>\r\n	<li>Previous PMS experience an asset</li>\r\n	<li>Computer literate in Microsoft Window applications an asset</li>\r\n	<li>Must be able to type 25 words per minute</li>\r\n	<li>Must possess a professional presentation</li>\r\n	<li>Strong interpersonal and problem solving abilities</li>\r\n	<li>Highly responsible &amp; reliable</li>\r\n	<li>Ability to work well under pressure in a fast paced environment</li>\r\n	<li>Ability to work cohesively with fellow colleagues as part of a team</li>\r\n	<li>Ability to focus attention on guest needs, remaining calm and courteous at all times</li>\r\n</ul>\r\n\r\n<p><strong>How to Apply</strong></p>\r\n\r\n<p>For applications, please contact Ms. Sok Makara, Assistant Talent &amp; Culture Manager via email&nbsp;Makara.Sok@raffles.com</p>\r\n\r\n<p>Address: 92 Rukhak Vithei Daun Penh (off Monivong Blvd), Sangkat Wat Phnom,&nbsp;Khan Daun Penh, Phnom Penh, Kingdom of Cambodia, Tel: 023 981 888 / 081 686 951, Fax: 023 981 148</p>', 'RAFFLES HOTEL LE ROYAL', 1, 'Hotel / Restaurant', 2, 1, 'No', '2019-10-04 02:44:32'),
(55, 'HR OFFICER', '<p>CEO Master Club of Life Education Co., Ltd. is the first business coaching, networking, and awarding platform in Cambodia that empowers Cambodian SME business leaders to transform their family businesses into more standard, corporate ones, thus contributing to the enhancement of the quality and sustainability of local enterprises and to the development of the country? local economy and preparing Cambodia to better benefit from the ASEAN integration and globalization processes..</p>\r\n\r\n<p>We are currently looking for qualified candidate to join us in the position of&nbsp;<strong>HR&nbsp;</strong><strong>Officer</strong><strong>&nbsp;(01 position) Urgent.</strong></p>\r\n\r\n<p><strong>Job Responsibilties</strong></p>\r\n\r\n<ul>\r\n	<li>Support the Admin &amp; HR Manager to familiar and enforces local HR policies and procedures in order it consistency with Labor Law</li>\r\n	<li>Develops and implements recruiting and screening systems and procedures in order to attract qualified candidates for position vacancies</li>\r\n	<li>Prepare job offer and employment contract for all successful candidates of Life Education</li>\r\n	<li>Conduct new staff orientation to ensure all new employees attend the Orientation Program in accordance with guidelines</li>\r\n	<li>Maintains company Disciplinary Procedures, conducts disciplinary meetings and completes the necessary documentation as necessary</li>\r\n	<li>Set up the finger scan for new staffs</li>\r\n	<li>Develop and implement HR strategies and initiatives aligned with overall business strategy</li>\r\n	<li>Prepare the monthly staff attendance and staff payroll</li>\r\n	<li>Manage filling system and maintain personnel files and maintains and updates files on employee records, legal documents and other personnel matters, efficiently and confidentiality.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Job Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor Degree in Business Administration/Human Resource Management or equivalent</li>\r\n	<li>At least 2 years professional experience in HR field</li>\r\n	<li>Good command of both spoken and written English and Khmer</li>\r\n	<li>Good knowledge of Cambodian Labor Law</li>\r\n	<li>Able to communicate well with all levels of people</li>\r\n	<li>Good presentation and communication skill</li>\r\n	<li>Computer and office technology: Word, Excel, E-mail, Internet, and Power point.</li>\r\n	<li>Good track records in handling recruitment &amp; selection</li>\r\n</ul>\r\n\r\n<p>We are offering a benefits packages and better salary, attractive long term career prospects with friendly and good working environments.</p>\r\n\r\n<p>Interested candidates are requested to submit a cover letter with CV and recent photo (4x6) and salary expectation to CEO Institute Office&rsquo;s Address: # 02, St. 484/97, Sangkat Phsar Deoum Thkov, Khan Chamkamorn, Phnom Penh, Tel: H/P: 012 682 802/070 222 671, Email: hr@ceomasterclub.com with caption subject.&nbsp;<strong>HR Officer</strong>.&nbsp;<strong><em>Early applications will be prioritized</em></strong>.</p>\r\n\r\n<p>Applications must be submitted before&nbsp;<strong>07 September 2019</strong>&nbsp;and will not be returned.</p>\r\n\r\n<p>Only short-listed candidates will be contacted for interview.</p>', 'LIFE EDUCATION', 1, 'Human Resource', 2, 1, 'No', '2019-10-04 14:31:56'),
(56, 'SAFETY MANAGER', '<p><strong>Job Purpose</strong></p>\r\n\r\n<p>A&nbsp;<strong>Safety Manager</strong>&nbsp;ensures workplace safety, with the goal of reducing injury and related legal issues. This role is found in many different industries, including in outdoor settings; for example, safety managers commonly are needed on construction sites where manual labor and the operation of heavy machinery occur. A typical day in the role of a safety manager may be split among working on a site to oversee a project or it may be conducted in an office, making calls, and resolving certain health and safety issues that may be holding up a project.</p>\r\n\r\n<p><strong>Major Accountabilities</strong></p>\r\n\r\n<ul>\r\n	<li>Visit job sites to conduct safety audits on personnel, equipment and materials</li>\r\n	<li>Prepare safety policy and safety manual</li>\r\n	<li>Evaluate, assess and alter safety procedures and policies for the benefit of employees and clients</li>\r\n	<li>Research and implement new materials handling processes</li>\r\n	<li>Analyze accident reports and evaluate injury case studies based on available facts</li>\r\n	<li>Prepare and conduct safety training sessions for employees and vendors</li>\r\n	<li>Ensure compliance with all regulatory bodies and standards (including OSHA, EPA, etc.)</li>\r\n	<li>Research environmental regulations and policies and institute changes to ensure compliance</li>\r\n	<li>Track incident metrics and apply findings</li>\r\n	<li>Oversee the applications for and receipt of necessary permits</li>\r\n	<li>Lead injury and incident inquiries and evaluations.</li>\r\n</ul>\r\n\r\n<p><strong>Qualification and Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Proven experience as safety manager</li>\r\n	<li>Deep understanding of legal health and safety guidelines</li>\r\n	<li>Ability in producing reports and developing relevant policies</li>\r\n	<li>Good knowledge of data analysis and risk assessment</li>\r\n	<li>Excellent organizational and motivational skills</li>\r\n	<li>Outstanding attention to detail and observation ability</li>\r\n	<li>Exceptional communication and interpersonal abilities</li>\r\n	<li>BSc/BA in safety management or relevant field is preferred</li>\r\n	<li>Valid qualification in occupational health and safety</li>\r\n</ul>', 'UNI SUN DEVELOPMENT CORP', 1, 'Construction', 2, 1, 'No', '2019-10-04 14:36:45'),
(57, 'Web DevOps', '<p><s><em><strong>Hello world</strong></em></s></p>', 'Facebook', 4, 'Development', 2, 1, 'Yes', '2019-10-05 03:37:06'),
(58, 'UP Job', '<p><strong>Hot&nbsp;</strong></p>', 'UP Universiry', 1, 'Web Development', 3, 1, 'Yes', '2019-10-05 03:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `active`, `create_at`) VALUES
(1, 'Phnom Penh', 1, '2019-07-28 08:31:48'),
(2, 'Battambang', 1, '2019-07-30 03:58:28'),
(4, 'Siem Reap', 1, '2019-07-30 03:59:39'),
(5, 'Kompot', 1, '2019-07-30 03:59:56'),
(6, 'Keb', 1, '2019-07-30 04:00:01'),
(7, 'Pailin', 1, '2019-07-30 04:00:20'),
(8, 'Prey Veng', 1, '2019-07-31 02:31:26'),
(9, 'Banteay MeanChey', 1, '2019-07-31 02:31:45'),
(10, 'Pursat', 1, '2019-07-31 02:31:57'),
(11, 'Oddar MeacChey', 1, '2019-09-22 14:51:43'),
(12, 'Preah Vihear', 1, '2019-09-22 14:51:51'),
(13, 'Stung Treng', 1, '2019-09-22 14:51:59'),
(14, 'Ratanakiri', 1, '2019-09-22 14:52:04'),
(15, 'Mondulkiri', 1, '2019-09-22 14:52:08'),
(16, 'Kratie', 1, '2019-09-22 14:52:14'),
(17, 'Tbong Kmoum', 1, '2019-09-22 14:52:32'),
(18, 'Svay Rieng', 1, '2019-09-22 14:52:40'),
(19, 'Takeo', 1, '2019-09-22 14:52:42'),
(20, 'Kompong Spue', 1, '2019-09-22 14:52:50'),
(21, 'Koh Kong', 1, '2019-09-22 14:52:54'),
(22, 'Kompong Cham', 1, '2019-09-22 14:53:02'),
(23, 'Kom Pong Chhang', 1, '2019-09-22 14:53:09'),
(24, 'Prey Veng', 1, '2019-09-22 14:53:54'),
(25, 'Preah Sihanouk', 1, '2019-09-22 14:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `photo` varchar(120) DEFAULT 'uploads/members/photos/default.png',
  `address` varchar(120) DEFAULT NULL,
  `description` longtext,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `gender`, `email`, `phone`, `username`, `password`, `photo`, `address`, `description`, `active`, `create_at`) VALUES
(1, 'Teng', 'Touch', 'male', 'touchteng@gmail.com', '086836457', 'tengboss', '$2y$10$zw5FHYdGFDArk4WJf6B2Euo/YsS7iwMIcWVXH/7Jkzwewsq5rNsHq', 'uploads/backend/members/4Q9G8LM4qnm7VXdrV1KmUGqK4t9OFK1sHHtVU0Q7.jpeg', 'BTB', '<p><strong>Fuck You Bitch</strong></p>', 0, '2019-07-28 04:38:27'),
(2, 'Teng', 'Touch', 'Male', 'Touchteng@gamil.com', '086836457', 'Teng Boss', '$2y$10$rWeFH0CfEPBmIoea77.gY.hGIp7P4OMidCv0xvnsqjLyOzTPvLHU2', 'uploads/backend/members/5paxawf0QgdVZmSJLsSf62rTx9hrqS9ddIsYIOfr.jpeg', 'BTB', NULL, 0, '2019-07-28 04:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `active`, `create_at`) VALUES
(1, 'Fuck', 'Fucking is the most popular exercise in Cambodia', 0, '2019-07-27 08:20:16'),
(2, 'Fuck', 'excursive', 0, '2019-07-27 08:20:40'),
(3, 'Love is a Feeling of Love', '<p><strong>Are born to love</strong>. <s>Love can be defined in an infinite amount of words</s>, <em>terms and definitions.</em> More important than the definition itself is the actual act of love. Love is profound and we as humans encounter love at every, albeit different stages of our lives. For most individuals, we experience love as early on as birth, our first memories of love are generally between three and five years of age, whether that memory is being tucked in by a parent or relative, or a kiss goodnight. Love is a feeling</p>', 0, '2019-07-27 09:31:03'),
(4, 'A kind of Love', '<p><strong>Intro to lit</strong>. <em>125 A Kind of Love Love is eternal</em>. <s>The boundary of love is not defined yet and can never be defined.</s> Love has created a wonderful cities and has also destroyed the wonderland. Some classify love as something that you feel for some people sometimes. It is often linked or used interchangeably with lust. Others feel that it is something that is constant and untouched by judgement and feeling. The true eternal love is hard to find in this world and few lucky people</p>', 0, '2019-07-27 10:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `active`) VALUES
(1, 'Administrator', 0),
(2, 'Manager', 0),
(3, 'hello World!', 0),
(4, 'TouchTeng', 0),
(5, 'TouchTeng', 0),
(6, 'Manager', 1),
(7, 'Assistant', 1),
(8, 'Sale', 1),
(9, 'CEO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `name`, `active`, `create_at`) VALUES
(2, 'Full-Time', 1, '2019-09-22 14:44:18'),
(3, 'Part-Time', 1, '2019-09-22 14:44:18'),
(4, 'Intern', 1, '2019-09-22 14:44:18'),
(5, 'Training/Workshops', 1, '2019-10-03 04:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `role_id`, `photo`) VALUES
(8, 'Admin', 'admin@gmail.com', NULL, '$2y$10$nys70BIebDn9WAg4s8ovwueyO8GCN99rkB.JmYursOuC.zIWC/DPy', NULL, NULL, NULL, 'admin', 9, 'uploads/backend/users/C33PwMkBBptOhWFS76lAkh4tFeJV0Y6eXck8IR2f.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
