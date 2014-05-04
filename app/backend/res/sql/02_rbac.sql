INSERT INTO backend_userdata (userid, name, password, is_admin) VALUES ('admin', 'Administrator', '1', true);
INSERT INTO backend_userdata (userid, name, password, is_admin) VALUES ('user', 'Test User', '1', false);

INSERT INTO backend_roledata (name) VALUES ('Default');
INSERT INTO backend_roledata (name) VALUES ('Administrator');
INSERT INTO backend_roledata (name) VALUES ('CRUD');

-- default access
INSERT INTO backend_accessdata (name) VALUES ('Home/index');
INSERT INTO backend_accessdata (name) VALUES ('Logout/index');
INSERT INTO backend_accessdata (name) VALUES ('User/profile');

-- admin access
INSERT INTO backend_accessdata (name) VALUES ('Admin/index');

-- Userdata table CRUD access
INSERT INTO backend_accessdata (name) VALUES ('Userdata/index');
INSERT INTO backend_accessdata (name) VALUES ('Userdata/edit');
INSERT INTO backend_accessdata (name) VALUES ('Userdata/pager');
INSERT INTO backend_accessdata (name) VALUES ('Userdata/delete');

-- Userdata relations table CRUD access
INSERT INTO backend_accessdata (name) VALUES ('Userdata/tabPager');
INSERT INTO backend_accessdata (name) VALUES ('Userdata/tabForm');
INSERT INTO backend_accessdata (name) VALUES ('Userdata/tabDelete');

-- Roledata table CRUD access
INSERT INTO backend_accessdata (name) VALUES ('Roledata/index');
INSERT INTO backend_accessdata (name) VALUES ('Roledata/edit');
INSERT INTO backend_accessdata (name) VALUES ('Roledata/pager');
INSERT INTO backend_accessdata (name) VALUES ('Roledata/delete');

-- Accessdata table CRUD access
INSERT INTO backend_accessdata (name) VALUES ('Accessdata/index');
INSERT INTO backend_accessdata (name) VALUES ('Accessdata/edit');
INSERT INTO backend_accessdata (name) VALUES ('Accessdata/pager');
INSERT INTO backend_accessdata (name) VALUES ('Accessdata/delete');

-- Master Table CRUD access
INSERT INTO backend_accessdata (name) VALUES ('TableMaster/index');
INSERT INTO backend_accessdata (name) VALUES ('TableMaster/edit');
INSERT INTO backend_accessdata (name) VALUES ('TableMaster/pager');
INSERT INTO backend_accessdata (name) VALUES ('TableMaster/delete');

-- Default Roles
INSERT INTO backend_role_access (role_id, access_id) 
  SELECT r.id, a.id FROM backend_roledata r, backend_accessdata a WHERE r.name = 'Default' 
    AND a.name IN ('Home/index', 'Logout/index', 'User/profile') ;

-- Multi-tables CRUD role
INSERT INTO backend_role_access (role_id, access_id) 
  SELECT r.id, a.id FROM backend_roledata r, backend_accessdata a WHERE r.name = 'CRUD' 
    AND a.name LIKE 'TableMaster%';

--
-- ADD NEW ROLES HERE
--

-- Administrator Roles
-- Other accessdata not included in above roles are considered Administrator only roles
INSERT INTO backend_role_access (role_id, access_id)
  SELECT r.id, a.id FROM backend_roledata r, backend_accessdata a WHERE r.name = 'Administrator'
    AND a.id NOT IN (SELECT access_id FROM backend_role_access);

-- Give Administrators access to everything 
INSERT INTO backend_user_role (user_id, role_id) 
  SELECT u.id, r.id FROM backend_userdata u, backend_roledata r 
    WHERE u.is_admin IS TRUE;

-- Give Regular users access to default menu
INSERT INTO backend_user_role (user_id, role_id) 
  SELECT u.id, r.id FROM backend_userdata u, backend_roledata r 
    WHERE u.is_admin IS FALSE AND r.name = 'Default';

