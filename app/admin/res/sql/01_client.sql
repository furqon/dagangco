-- pertama ada orang yg buat akun
-- orang itu bikin warung (creator_id)
-- pembuat warung bisa add rekan (client_warung)

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

insert into clientdata (userid, name, password, email, status) values ('joni', 'Joni Dip', '1', 'joni@joni.com', 'aktif');
insert into clientdata (userid, name, password, email, status) values ('hasan', 'Hasan Tiro', '1', 'hasan@joni.com', 'aktif');

CREATE TABLE warungdata (
  id serial,
  creator_id integer,
  name varchar(100),
  avatar varchar(50),
  status varchar(10),
  --other communication line (whatsap, line, fb, twitter)
  PRIMARY KEY (id),
  FOREIGN KEY (creator_id) REFERENCES clientdata (id)
);

insert into warungdata (creator_id, name, status) values (1, 'warung baju sport', 'aktif');

-- warung could have more than 1 admin
CREATE TABLE client_warung (
  id serial,
  client_id integer,
  warung_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (client_id) REFERENCES clientdata (id),
  FOREIGN KEY (warung_id) REFERENCES warungdata (id)
);

insert into client_warung (client_id, warung_id) values (1, 1);
insert into client_warung (client_id, warung_id) values (2, 1);

-- untuk labeling pengirim di paket, have to be wysiwyg, nice to have
CREATE TABLE warunglabel (
  id serial,
  warung_id integer,
  name varchar(100),
  content text,
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id)
);


CREATE TABLE warungaccount (
  id serial,
  warung_id integer,
  account_name varchar(100),
  account_number varchar(100),
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),
  FOREIGN KEY (warung_id) REFERENCES warungdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id)
);

insert into warungaccount (warung_id, account_name, account_number, created_by) values (1, 'Bank Mandiri', '1260002345856985', 1);