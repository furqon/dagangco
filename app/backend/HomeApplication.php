<?php

namespace backend;

use PetakUmpet\Application;

class HomeApplication extends Application {

  public function indexAction()
  {
    $this->request->setSubNavMenu(false);
    return $this->render();
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
