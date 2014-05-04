CREATE TABLE admin_lookup_paymentmethod (
  id serial,
  name varchar(100),
  PRIMARY KEY (id)
);

insert into admin_lookup_paymentmethod (name) values ('Transfer');
insert into admin_lookup_paymentmethod (name) values ('Cash');