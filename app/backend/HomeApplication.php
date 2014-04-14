<?php

namespace backend;

use PetakUmpet\Application;

use PetakUmpet\UI\DataTables;

use PetakUmpet\Database\Accessor;

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
    // $a['aaData'] = array();
    // for($i=1; $i<20; $i++) {
    //   $row = array('id' => $i, 'no' => $i, 'nama_orang' => 'AMU-' . $i, 'deskripsi' => 'Sungguh bosan yah ' . (string) ($i*2-4+3));
    //   $a['aaData'][] = $row;
    // }

    $dba = new Accessor('userdata');

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
