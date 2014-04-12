CREATE TABLE itemtype (
  id serial,
  merchant_id integer,
  name varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id)
);

CREATE TABLE supplierdata (
  id serial,
  merchant_id integer,
  name varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id)
);

CREATE TABLE itemdata (
  id serial,
  merchant_id integer,
  name varchar(100),
  itemtype_id integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id),
  FOREIGN KEY (itemtype_id) REFERENCES itemtype (id)
);

CREATE TABLE customerdata (
  id serial,
  merchant_id integer,
  name varchar(100),
  email varchar(100),
  handphone varchar(20),
  --other communication line (whatsap, line, fb, twitter)
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id)
);


CREATE TABLE itemstocking (
  id serial,
  merchant_id integer,
  item_id integer,
  but_at timestamp,
  buy_by integer,  
  supplier_id integer,
  supplierprice integer,
  retailprice integer,
  paymentmethod integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id),
  FOREIGN KEY (item_id) REFERENCES itemdata (id),
  FOREIGN KEY (createdby) REFERENCES clientdata (id)
  FOREIGN KEY (supplier_id) REFERENCES supplierdata (id)
);