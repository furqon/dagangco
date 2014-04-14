<?php

namespace admin;

use PetakUmpet\Application;

class HomeApplication extends Application {

  public function indexAction()
  {
    return $this->render();
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
