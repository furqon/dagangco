<?php

namespace admin;

use PetakUmpet\Singleton;
use PetakUmpet\User;

class AppUser extends User {

  public function __construct($username, $password, $userTable='admin_userdata', $userProfile='admin_user_profile')
  {
    parent::__construct($username, $password, $userTable, $userProfile);

    $accessQuery = "SELECT a.name FROM admin_userdata u "
            . "JOIN admin_user_role ur ON u.id = ur.user_id "
            . "JOIN admin_role_access ra ON ra.role_id = ur.role_id "
            . "JOIN admin_accessdata a ON ra.access_id = a.id "
            . "WHERE u.userid = ?" ;
 
    $this->setAccessQuery($accessQuery);
  } 
}
