-- pertama ada orang yg buat akun
-- orang itu bikin warung (creator_id)
-- pembuat warung bisa add rekan (client_warung)

CREATE TABLE admin_userdata (
  id serial,
  userid varchar(25),
  name varchar(100),
  password text,
  email varchar(255),
  address text,
  status varchar(10),
  is_admin boolean,
  parent_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (parent_id) REFERENCES admin_userdata (id)
);

CREATE TABLE admin_user_profile (
  id serial,
  user_id integer,
  address text,
  email varchar(255),
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES admin_userdata (id)
);

CREATE TABLE admin_roledata (
  id serial,
  name varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE admin_groupdata (
  id serial,
  name varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE admin_accessdata (
  id serial,
  name varchar(255),
  type varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE admin_user_role (
  id serial,
  user_id integer,
  role_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES admin_userdata (id),
  FOREIGN KEY (role_id) REFERENCES admin_roledata (id)
);

CREATE TABLE admin_role_group (
  id serial,
  role_id integer,
  group_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (role_id) REFERENCES admin_roledata (id),
  FOREIGN KEY (group_id) REFERENCES admin_groupdata (id)
);

CREATE TABLE admin_group_access (
  id serial,
  group_id integer,
  access_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (group_id) REFERENCES admin_groupdata (id),
  FOREIGN KEY (access_id) REFERENCES admin_accessdata (id)
);

CREATE TABLE admin_user_group (
  id serial,
  user_id integer,
  group_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES admin_userdata (id),
  FOREIGN KEY (group_id) REFERENCES admin_groupdata (id)
);

CREATE TABLE admin_user_access (
  id serial,
  user_id integer,
  access_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES admin_userdata (id),
  FOREIGN KEY (access_id) REFERENCES admin_accessdata (id)
);


CREATE TABLE admin_warungdata (
  id serial,
  owner_id integer,
  name varchar(100),
  avatar varchar(50),
  status varchar(10),
  --other communication line (whatsap, line, fb, twitter)
  PRIMARY KEY (id),
  FOREIGN KEY (owner_id) REFERENCES admin_userdata (id)
);


-- warung could have more than 1 admin
CREATE TABLE admin_warung_pengurus (
  id serial,
  warung_id integer,
  user_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id),
  FOREIGN KEY (user_id) REFERENCES admin_userdata (id)
);

-- untuk labeling pengirim di paket, have to be wysiwyg, nice to have
CREATE TABLE admin_warung_profile (
  id serial,
  warung_id integer,
  name varchar(100),
  content text,
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id),
  FOREIGN KEY (created_by) REFERENCES admin_userdata (id)
);


CREATE TABLE admin_warung_account (
  id serial,
  warung_id integer,
  account_name varchar(100),
  account_number varchar(100),
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id),
  FOREIGN KEY (created_by) REFERENCES admin_userdata (id)
);

-- DATA 
insert into admin_userdata (userid, name, password, email, parent_id, status) 
                    values ('joni', 'Joni Dip', '1', 'joni@joni.com', NULL, 'Aktif');
insert into admin_userdata (userid, name, password, email, parent_id, status) 
                    values ('hasan', 'Hasan Tiro', '1', 'hasan@joni.com', 1, 'Aktif'); -- parent set to joni
insert into admin_warungdata (owner_id, name, status) values (1, 'Warung Baju Sport', 'Aktif');
insert into admin_warung_pengurus (warung_id, user_id) values (1, 1);
insert into admin_warung_pengurus (warung_id, user_id) values (1, 2);
insert into admin_warung_account (warung_id, account_name, account_number, created_by) 
                    values (1, 'Bank Mandiri', '1260002345856985', 1);

-- TODO, DATA for Access, Group, Role


