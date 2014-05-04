CREATE TABLE itemtype (
  id serial,
  warung_id integer,
  name varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id)
);

insert into itemtype (warung_id, name) values (1, 'pakaian');

CREATE TABLE supplierdata (
  id serial,
  warung_id integer,
  name varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id)
);

insert into supplierdata (warung_id, name) values (1, 'sritex');

CREATE TABLE itemdata (
  id serial,
  warung_id integer,
  name varchar(100),
  itemtype_id integer,
  image varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id),
  FOREIGN KEY (itemtype_id) REFERENCES itemtype (id)
);

insert into itemdata (warung_id, name, itemtype_id) values (1, 'kaos polo c59 hitam', 1);

CREATE TABLE customerdata (
  id serial,
  warung_id integer,
  name varchar(100),
  email varchar(100),
  handphone varchar(20),
  --other communication line (whatsap, line, fb, twitter)
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id)
);


CREATE TABLE itemstocking (
  id serial,
  warung_id integer,
  item_id integer,
  unit integer,
  buy_at timestamp,
  buy_by integer,  
  account_id integer,  
  supplier_id integer,
  supplierprice integer,
  minimumretailprice integer,
  isgrosir boolean,
  minimumunitgrosir integer,
  grosirprice integer,
  paymentmethod integer,
  created_at timestamp,
  created_by integer,  
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id),
  FOREIGN KEY (item_id) REFERENCES itemdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id),
  FOREIGN KEY (supplier_id) REFERENCES supplierdata (id), 
  FOREIGN KEY (account_id) REFERENCES warungaccount (id),   
  FOREIGN KEY (paymentmethod) REFERENCES lookup_paymentmethod (id)
);

insert into itemstocking (warung_id, item_id, unit, buy_by, supplier_id, supplierprice, minimumretailprice, paymentmethod, account_id)
  values (1, 1, 1000, 1, 1, 43000, 60000, 1, 1);