CREATE TABLE transaction (
  id serial,
  warung_id integer,
  name varchar(100),
  sales_price integer,
  shipment_method varchar(100),
  shipment_number varchar(100),
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES warungdata (id),
  FOREIGN KEY (created_by) REFERENCES clientdata (id)
);

-- invoice