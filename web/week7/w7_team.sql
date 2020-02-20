CREATE TABLE w7_users
( id        SERIAL         NOT NULL
, username  VARCHAR(100)   UNIQUE   NOT NULL
, password  VARCHAR(250)   NOT NULL
);