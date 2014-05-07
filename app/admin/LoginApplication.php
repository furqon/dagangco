<?php

namespace admin;

use PetakUmpet\Application;
use PetakUmpet\Singleton;
use PetakUmpet\Response;
use admin\AppUser;

class LoginApplication extends Application {

  public function indexAction() 
  {
    $form = new Form\LoginForm;

    if ($this->request->isPost()) {

      if ($form->bindValidate($this->request)) {

        $user = new AppUser($form->getFieldValue('name'), $form->getFieldValue('password'));

        if ($user->validate()) {
          $this->session->setUser($user);
          $this->session->set('username', $user->getName());
          $this->session->set('userid', $user->getUserid());
          $this->session->set('warungid', $this->getWarungid( $user->getId() ));
          $this->session->setAuthenticated(true);          
          // authenticated, go to index
          $this->redirect('Home/dashboard');
        }
        // failed login
        $this->session->setFlash('Login failed, please check username or password.');
      }
    }

    return $this->render(array('form' => $form), 'login');
  }

  public function getWarungid($userid) { 

    $db = Singleton::acquire('\\PetakUmpet\\Database');

    $query = "SELECT warung_id FROM admin_warung_pengurus WHERE user_id = ?";
    $warungid = $db->queryFetchOne($query, array($userid) );

    return $warungid;
  }
}
