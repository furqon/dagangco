<?php

namespace frontend;

use PetakUmpet\Application;

class HomeApplication extends Application {

  public function indexAction()
  {
    return $this->render();
  }
}
