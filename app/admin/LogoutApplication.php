<?php

namespace admin;

use PetakUmpet\Application;

class LogoutApplication extends Application {

  public function indexAction()
  {
    $this->session->destroy();
    $this->redirectToLoginPage();
  }
}
