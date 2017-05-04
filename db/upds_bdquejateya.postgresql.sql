CREATE TABLE categories (
  id serial NOT NULL,
  name varchar(30) NOT NULL,
  hashtag varchar(30) NOT NULL,
  published boolean DEFAULT false,
  created date NOT NULL,
  modified date DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE cities (
  id serial NOT NULL,
  name varchar(30) NOT NULL,
  code varchar(15) NOT NULL,
  published boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  country_id serial NOT NULL,
  PRIMARY KEY(id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla comments
--

CREATE TABLE comments (
  id serial NOT NULL,
  text text NOT NULL,
  published boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  PRIMARY KEY(id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla countries
--

CREATE TABLE countries (
  id serial NOT NULL,
  name varchar(30) NOT NULL,
  code varchar(30) NOT NULL,
  published boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  PRIMARY KEY(id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla posts
--

CREATE TABLE posts (
  id serial NOT NULL,
  title varchar(60) NOT NULL,
  description text NOT NULL,
  tags varchar(150) NOT NULL,
  latitude double precision DEFAULT NULL,
  longitude double precision DEFAULT NULL,
  published boolean DEFAULT false,
  solved boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  solved_date timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  user_solved integer DEFAULT NULL,
  category_id serial NOT NULL,
  city_id serial NOT NULL,
  priority_id serial NOT NULL,
  valuation_id serial NOT NULL,
  PRIMARY KEY(id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla priorities
--

CREATE TABLE priorities (
  id serial NOT NULL,
  name varchar(30) NOT NULL,
  level smallint NOT NULL,
  color varchar(15) NOT NULL,
  published boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  PRIMARY KEY(id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla tags
--

CREATE TABLE tags (
  id serial NOT NULL,
  name varchar(30) NOT NULL,
  published boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  PRIMARY KEY(id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla valuations
--

CREATE TABLE valuations (
  id serial NOT NULL,
  name varchar(30) NOT NULL,
  position smallint NOT NULL,
  published boolean DEFAULT false,
  created timestamp NOT NULL,
  modified timestamp DEFAULT NULL,
  user_created integer NOT NULL,
  user_modified integer DEFAULT NULL,
  PRIMARY KEY(id)
);