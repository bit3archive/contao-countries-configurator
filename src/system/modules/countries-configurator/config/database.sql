-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_page`
--

CREATE TABLE `tl_page` (
  `filter_countries` char(1) NOT NULL default '',
  `page_countries` text NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
