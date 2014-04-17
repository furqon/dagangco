<?php

namespace admin;

use PetakUmpet\Application;
use PetakUmpet\UI\DataTables;
use PetakUmpet\Database\Accessor;

class ProductApplication extends Application {

  public function indexAction()
  {
    $dt = new DataTables($this->request);
    $dt->setDataSourceAction('Product/source');
    $dt->setColumnNames(array('id', 'userid', 'name'));
    $dt->setColumnAlias(array('userid' => 'Id Pengguna', 'name' => 'Nama'));
    return $this->render(array('dt' => $dt));
  }

  public function sourceAction()
  {
    $dba = new Accessor('userdata');
    echo $this->request->get('dtact'); 
    if (!$this->request->isPost() && $this->request->get('id')) {
      $this->form->setValuesById($this->request->get('id'));
    }

    $res = $dba->findAll();
    $a['aaData'] = array();

    foreach ($res as $r) {
      $a['aaData'][] = $r;
    }

    echo json_encode($a);
    exit;
  }
}
