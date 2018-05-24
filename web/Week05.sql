DROP TABLE IF EXISTS scriptures CASCADE;

-- Core Requirement 1: Create the Scriptures Table

CREATE TABLE scriptures (
  scripture_id  SERIAL        NOT NULL, -- SERIAL or AUTO_INCREMENT?
  book          VARCHAR(30)   NOT NULL,
  chapter       INT           NOT NULL,
  verse         INT           NOT NULL,
  content       VARCHAR(1000) NOT NULL, -- https://100hourboard.org/questions/37087/  - POGP (JS-H 1:28), with 931 characters
  CONSTRAINT pk_scripture_id PRIMARY KEY (scripture_id)
);


--Core Requirement 2: Insert the following scriptures (along with the text of the verse as content) into your database. 

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('John', '1', '5', 'And the light shineth in darkness; and the darkness comprehended it not.');

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('Doctrine and Covenants', '88', '49', 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('Doctrine and Covenants', '93', '28', 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');

INSERT INTO scriptures (book, chapter, verse, content) VALUES ('Mosiah', '16', '9', 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');


