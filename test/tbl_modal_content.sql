--
-- Database: `phpsamples`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modal_content`
--

CREATE TABLE `tbl_modal_content` (
  `id` int(11) NOT NULL,
  `modal` varchar(255) NOT NULL,
  `modal_content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_modal_content`
--

INSERT INTO `tbl_modal_content` (`id`, `modal`, `modal_content`, `image`) VALUES
(1, 'jquery', 'jQuery is a Javascript library provides API functions for handling events with animation effects.', 'jquery-logo.jpg'),
(2, 'bootstrap', 'Bootstrap is a popular framework helps in fast and furious web developement.', 'bootstrap-logo.jpg'),
(3, 'responsive', 'Web design methodology used to make the page content responsive to the size of various viewport.', 'responsive.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_modal_content`
--
ALTER TABLE `tbl_modal_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_modal_content`
--
ALTER TABLE `tbl_modal_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
