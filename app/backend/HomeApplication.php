<?php

namespace backend;

use PetakUmpet\Application;

class HomeApplication extends Application {

  public function indexAction()
  {
    $test = 'text';
    return $this->render(array('t' => $test));
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
