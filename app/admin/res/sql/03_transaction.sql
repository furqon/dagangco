CREATE TABLE admin_transaction (
  id serial,
  warung_id integer,
  customer_id integer,
  status varchar(20), -- order/booking, shipping, payment, close
  name varchar(100),
  sales_price integer,
  shipment_method varchar(100),
  shipment_number varchar(100),
  created_at timestamp,
  created_by integer,
  PRIMARY KEY (id),  
  FOREIGN KEY (warung_id) REFERENCES admin_warungdata (id),
  FOREIGN KEY (customer_id) REFERENCES admin_customerdata (id),
  FOREIGN KEY (created_by) REFERENCES admin_userdata (id)
);

-- invoice