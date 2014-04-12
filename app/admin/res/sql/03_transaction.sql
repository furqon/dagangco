CREATE TABLE transaction (
  id serial,
  merchant_id integer,
  name varchar(100),
  sales_price integer,
  shipment_method varchar(100),
  shipment_number varchar(100),
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (merchant_id) REFERENCES merchantdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id)
);