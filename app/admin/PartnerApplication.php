<?php

namespace admin;

use PetakUmpet\Application;
use PetakUmpet\UI\DataTables;
use PetakUmpet\Database\Accessor;

use PetakUmpet\Form;
use PetakUmpet\Form\Field;
use PetakUmpet\Form\Component\TableAdapterForm;

use PetakUmpet\Request;

class PartnerApplication extends Application {

  public function indexAction()
  {    
    $dt = new DataTables($this->request);
    $dt->setDataSourceAction('Order/source');
    $dt->setColumnNames(array('id', 'name', 'status'));
    $dt->setColumnAlias(array('name' => 'Produk'));
    return $this->render(array('dt' => $dt, 'active' => 'partner'));
  }

  public function sourceAction()
  {
    $tablename = 'admin_transaction';
    $dba = new Accessor($tablename);
    $form = new TableAdapterForm($tablename, array(), array(), '?dtact=Save');         

    $title = 'Partner';

    switch($this->request->get('dtact')) {
      case 'Add':
        return $this->renderView('Home/form', array('form' => $form, 'title' => $title));
      break;
      case 'Edit':
      case 'View':
        $form->setValuesById($this->request->get('id'));
        return $this->renderView('Home/form', array('form' => $form, 'title' => $title));
      break;
      case 'Save':
        $request = new Request;
        if ($request->isPost()) {
          if (($retId = $form->bindValidateSave($request))) {
            if ($form->isSaveAndAdd($request)) {
              return $this->renderView('Home/form', array('form' => $form, 'title' => $title));
            }
            $this->session->setFlash('Data is saved.');
          }
        }
        return $this->redirect('Admin/product');
      break;
      case 'Delete':
        if ($this->readOnly === true) return;

        $dbm = new Model($tableName);
        if ($dbm->delete(array('id' => $this->request->get('id')))) {
          return new Response('success');
        }
        return new Response('fail', 404);        
      break;
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
