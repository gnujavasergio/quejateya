--
-- Base de datos: `upds_bdquejateya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `hashtag` varchar(30) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `code` varchar(15) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(150) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `published` tinyint(1) DEFAULT '0',
  `solved` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `solved_date` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  `user_solved` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `valuation_id` int(11) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `priorities`
--

CREATE TABLE `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `color` varchar(15) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valuations`
--

CREATE TABLE `valuations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `position` tinyint(4) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `user_created` int(11) NOT NULL,
  `user_modified` int(11) DEFAULT NULL,
  PRIMARY KEY(id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

