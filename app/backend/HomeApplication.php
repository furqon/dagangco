<?php

namespace backend;

use PetakUmpet\Application;

class HomeApplication extends Application {

  public function indexAction()
  {
    $test = 'text';
    // $this->request->setSubNavMenu(false);
    return $this->render(array('t' => $test));
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
