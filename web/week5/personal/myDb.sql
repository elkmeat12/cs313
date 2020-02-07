CREATE TABLE category 
( id             SERIAL         NOT NULL    PRIMARY KEY
, category_name  VARCHAR(50)    NOT NULL
);

CREATE TABLE item 
( id                   SERIAL         NOT NULL    PRIMARY KEY
, category_id          INT            NOT NULL    REFERENCES     category(id)
, image                VARCHAR(500)   NOT NULL
, item_name            VARCHAR(100)   NOT NULL
, item_description     TEXT           NOT NULL
, price                DECIMAL(10,2)  NOT NULL
);

CREATE TABLE customer 
( id             SERIAL         NOT NULL    PRIMARY KEY
, first_name     VARCHAR(50)    NOT NULL
, last_name      VARCHAR(50)    NOT NULL
, email          VARCHAR(100)   NOT NULL
, phone_number   VARCHAR(15)    NOT NULL
, street         VARCHAR(255)   NOT NULL
, city           VARCHAR(50)    NOT NULL
, state          VARCHAR(50)    NOT NULL
, zip_code       VARCHAR(5)     NOT NULL
, purchase_date  DATE           NOT NULL
);

CREATE TABLE customer_order 
( id             SERIAL   NOT NULL PRIMARY KEY
, customer_id    INT      NOT NULL REFERENCES customer(id)
);

CREATE TABLE order_items 
( order_id    INT   NOT NULL REFERENCES customer_order(id)
, item_id     INT   NOT NULL REFERENCES item(id)
);