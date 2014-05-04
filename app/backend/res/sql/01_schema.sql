CREATE TABLE backend_userdata (
  id serial,
  userid varchar(25),
  name varchar(100),
  password text,
  status varchar(10),
  is_admin boolean,
  parent_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (parent_id) REFERENCES backend_userdata (id)
);

CREATE TABLE backend_user_profile (
  id serial,
  user_id integer,
  address text,
  email varchar(255),
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES backend_userdata (id)
);

CREATE TABLE backend_roledata (
  id serial,
  name varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE backend_accessdata (
  id serial,
  name varchar(255),
  type varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE backend_user_role (
  id serial,
  user_id integer,
  role_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES backend_userdata (id),
  FOREIGN KEY (role_id) REFERENCES backend_roledata (id)
);

CREATE TABLE backend_role_access (
  id serial,
  role_id integer,
  access_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (role_id) REFERENCES backend_roledata (id),
  FOREIGN KEY (access_id) REFERENCES backend_accessdata (id)
);

CREATE TABLE backend_user_access (
  id serial,
  user_id integer,
  access_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES backend_userdata (id),
  FOREIGN KEY (access_id) REFERENCES backend_accessdata (id)
);

CREATE TABLE backend_event (
  id serial,
  user_id integer,
  application varchar(100),
  module varchar(100),
  action varchar(100),
  event text,
  created_at timestamp,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES backend_userdata (id)
);

