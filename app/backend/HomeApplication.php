<?php

namespace backend;

use PetakUmpet\Application;

use PetakUmpet\UI\DataTables;

use PetakUmpet\Pager\DataTablePager;

class HomeApplication extends Application {

  public function indexAction()
  {
    $dt = new DataTables($this->request);
    $dt->setDataSourceAction('Home/source');
    $dt->setColumnNames(array('id', 'userid', 'name', 'status', 'password'));
    $dt->setColumnAlias(array('userid' => 'Id Pengguna', 'name' => 'Nama'));
    return $this->render(array('dt' => $dt));
  }

  public function sourceAction()
  {
    $pager = new DataTablePager('userdata', array('id', 'userid', 'name', 'status', 'password'), $this->request);

    return (string) $pager;
  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
