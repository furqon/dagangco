<?php

namespace backend\Form;

use PetakUmpet\Form;
use PetakUmpet\Validator;
use PetakUmpet\Validator\Required;

use backend\Formatter\LoginFormFormatter;

class LoginForm extends Form {

  public function __construct($name='Login')
  {
    parent::__construct($name,null,null,'POST',new LoginFormFormatter($this));

    $attr = array('required' => 'required', 'class' => 'form-control');

    $this->add('text', 'name', 
        array_merge($attr, array('autofocus' => 'autofocus', 'placeholder' => 'Username')), 
        false  /* no label */
      );

    $this->add('password', 'password', 
      array_merge($attr, array('placeholder' => 'Password')), 
      false /* no label */
    );

    $this->addAction(new Form\Field\Submit('Sign me in', array('class' => 'btn bg-olive btn-block')));

    $vld = new Validator;
    $vld->add('name', new Required);
    $vld->add('password', new Required);

    $this->setValidator($vld);

  } 

}
