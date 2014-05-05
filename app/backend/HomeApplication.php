<?php

namespace backend;

use PetakUmpet\Application;
use PetakUmpet\UI\DataTables;

use PetakUmpet\Pager\DataTablePager;
use PetakUmpet\Database\Accessor;

use PetakUmpet\Form;
use PetakUmpet\Form\Field;
use PetakUmpet\Form\Component\TableAdapterForm;

use PetakUmpet\Request;

class HomeApplication extends Application {

  public function indexAction()
  {
    $dt = new DataTables($this->request);
    $dt->setDataSourceAction('Home/source');
    $dt->setColumnNames(array('id', 'name'));
    return $this->render(array('dt' => $dt));
  }

  public function sourceAction()
  {
    $tablename = 'backend_accessdata';

    $form = new TableAdapterForm($tablename, array(), array(), '?dtact=Save');         

    switch($this->request->get('dtact')) {
      case 'Add':
        return $this->renderView('Home/form', array('form' => $form));
        break;
      case 'Edit':
      case 'View':
        $form->setValuesById($this->request->get('id'));
        return $this->renderView('Home/form', array('form' => $form));
        break;
      case 'Save':
        $request = new Request;
        if ($request->isPost()) {
          if (($retId = $form->bindValidateSave($request))) {
            if ($form->isSaveAndAdd($request)) {
              return $this->renderView('Home/form', array('form' => $form));
            }
            $this->session->setFlash('Data is saved.');
          }
        }
        return $this->redirect('backend/home');
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
    // default act
    $pager = new DataTablePager($tablename, array('id', 'name'), $this->request);
    return (string) $pager;

  }

  public function dashboardAction()
  {
    return $this->render();
  }
}
