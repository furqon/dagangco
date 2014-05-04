CREATE TABLE lookup_paymentmethod (
  id serial,
  name varchar(100),
  PRIMARY KEY (id)
);

insert into lookup_paymentmethod (name) values ('transfer');
insert into lookup_paymentmethod (name) values ('cash');