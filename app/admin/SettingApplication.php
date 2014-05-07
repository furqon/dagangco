<?php

namespace admin;

use PetakUmpet\Application;

class SettingApplication extends Application {

  public function indexAction()
  {    
    return $this->render(array('active' => 'setting'));
  }

  public function invoiceAction()
  {    
    return $this->render(array('active' => 'setting'));
  }

  public function socmedAction()
  {    
    return $this->render(array('active' => 'socmed'));
  }
}
