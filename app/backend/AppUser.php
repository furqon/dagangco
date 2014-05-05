<?php

namespace backend;

use PetakUmpet\Singleton;
use PetakUmpet\User;

class AppUser extends User {

  public function __construct($username, $password, $userTable='backend_userdata', $userProfile='backend_user_profile')
  {
    parent::__construct($username, $password, $userTable, $userProfile);

    $accessQuery = "SELECT a.name FROM backend_userdata u "
            . "JOIN backend_user_role ur ON u.id = ur.user_id "
            . "JOIN backend_role_access ra ON ra.role_id = ur.role_id "
            . "JOIN backend_accessdata a ON ra.access_id = a.id "
            . "WHERE u.userid = ?" ;
 
    $this->setAccessQuery($accessQuery);
  } 


}
