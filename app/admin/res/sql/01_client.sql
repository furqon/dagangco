CREATE TABLE clientdata (
  id serial,
  userid varchar(25),
  name varchar(100),
  password text,
  avatar varchar(50),
  email varchar(50),
  status varchar(10),
  PRIMARY KEY (id)
);

CREATE TABLE merchantdata (
  id serial,
  creator_id integer,
  name varchar(100),
  avatar varchar(50),
  status varchar(10),
  --other communication line (whatsap, line, fb, twitter)
  PRIMARY KEY (id),
  FOREIGN KEY (creator_id) REFERENCES clientdata (id)
);

CREATE TABLE client_merchant (
  id serial,
  client_id integer,
  merchant_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (client_id) REFERENCES clientdata (id),
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id)
);

-- untuk labeling pengirim di paket, have to be wysiwyg
CREATE TABLE merchantlabel (
  id serial,
  merchant_id integer,
  name varchar(100),
  content text,
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id)
);

CREATE TABLE merchantaccount (
  id serial,
  merchant_id integer,
  account_name varchar(100),
  account_number varchar(100),
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id)
);