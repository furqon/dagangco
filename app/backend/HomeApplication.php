<?php

namespace backend;

use PetakUmpet\Application;

use PetakUmpet\UI\DataTables;

class HomeApplication extends Application {

  public function indexAction()
  {
    $dt = new DataTables($this->request);
    $dt->setDataSourceAction('Home/source');
    $dt->setColumnNames(array('id', 'no', 'nama_orang', 'deskripsi'));
    $dt->setColumnAlias(array('no' => 'Nomer'));
    return $this->render(array('dt' => $dt));
  }

  public function sourceAction()
  {
    $a['aaData'] = array();
    for($i=1; $i<20; $i++) {
      $row = array('id' => $i, 'no' => $i, 'nama_orang' => 'AMU-' . $i, 'deskripsi' => 'Sungguh bosan yah ' . (string) ($i*2-4+3));
      $a['aaData'][] = $row;
    }

    echo json_encode($a);
    exit;
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
