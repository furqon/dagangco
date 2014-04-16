<?php

namespace backend;

use PetakUmpet\Application;

use PetakUmpet\UI\DataTables;

use PetakUmpet\Database\Accessor;

use PetakUmpet\Form;
use PetakUmpet\Form\Field;
use PetakUmpet\Form\Component\TableAdapterForm;

class HomeApplication extends Application {

  public function indexAction()
  {
    $dt = new DataTables($this->request);
    $dt->setDataSourceAction('Home/source');
    $dt->setColumnNames(array('id', 'userid', 'name'));
    $dt->setColumnAlias(array('userid' => 'Id Pengguna', 'name' => 'Nama'));
    return $this->render(array('dt' => $dt));
  }

  public function sourceAction()
  {

    $tablename = 'userdata';
    $dba = new Accessor($tablename);
    $form = new TableAdapterForm($tablename, array(), array(), 'x');         

    switch($this->request->get('dtact')) {
      case 'Add':
        return $this->renderView('Home/form', array('form' => $form));
      break;
      case 'Edit':
      case 'View':
        $form->setValuesById($this->request->get('id'));
        return $this->renderView('Home/form', array('form' => $form));
      break;
    }
    // if (!$this->request->isPost() && $this->request->get('id')) {
    //   $this->form->setValuesById($this->request->get('id'));
    // }

    $res = $dba->findAll();
    $a['aaData'] = array();

    foreach ($res as $r) {
      $a['aaData'][] = $r;
    }

    echo json_encode($a);
    exit;
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
