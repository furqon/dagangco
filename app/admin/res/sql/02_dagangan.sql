CREATE TABLE admin_itemtype (
  id serial,
  warung_id integer,
  name varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id)
);


CREATE TABLE admin_supplierdata (
  id serial,
  warung_id integer,
  name varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id)
);


CREATE TABLE admin_itemdata (
  id serial,
  warung_id integer,
  name varchar(100),
  itemtype_id integer,
  image varchar(100),
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id),
  FOREIGN KEY (itemtype_id) REFERENCES admin_itemtype (id)
);


CREATE TABLE admin_customerdata (
  id serial,
  warung_id integer,
  name varchar(100),
  email varchar(100),
  handphone varchar(20),
  --other communication line (whatsap, line, fb, twitter)
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id)
);


CREATE TABLE admin_itemstocking (
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
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id),
  FOREIGN KEY (item_id) REFERENCES admin_itemdata (id),
  FOREIGN KEY (created_by) REFERENCES admin_userdata (id),
  FOREIGN KEY (supplier_id) REFERENCES admin_supplierdata (id), 
  FOREIGN KEY (account_id) REFERENCES admin_warung_account (id),   
  FOREIGN KEY (paymentmethod) REFERENCES admin_lookup_paymentmethod (id)
);

insert into admin_itemtype (warung_id, name) values (1, 'Pakaian');
insert into admin_supplierdata (warung_id, name) values (1, 'Sritex');
insert into admin_itemdata (warung_id, name, itemtype_id) values (1, 'Kaos Polo C59 Hitam', 1);
insert into admin_itemstocking (warung_id, item_id, unit, buy_by, supplier_id, supplierprice, minimumretailprice, paymentmethod, account_id)
                  values (1, 1, 1000, 1, 1, 43000, 60000, 1, 1);