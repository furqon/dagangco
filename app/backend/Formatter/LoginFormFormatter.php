<?php

namespace backend\Formatter;

use PetakUmpet\Formatter\Form\BaseFormFormatter;

class LoginFormFormatter extends BaseFormFormatter {

  protected $form;

  public function __construct($form)
  {
    $this->form = $form;

    $this->formClass = '';
    $this->formStart = '<fieldset><div class="body bg-gray">';
    $this->formEnd = '</div></fieldset>';

    $this->fieldRowStart['normal'] = '<div class="form-group">';
    $this->fieldRowEnd['normal'] = '</div>';

    $this->fieldRowStart['hide'] = '<div class="form-group" style="display: none;">';

    $this->fieldRowStart['error'] = '<div class="form-group has-error">';
    $this->fieldRowEnd['error'] = '</div>';

    $this->fieldLabelClass = '';

    $this->fieldStart = '';
    $this->fieldEnd = '';

    $this->fieldHelpTagFormat = '<span class="help-block">%s</span>';

    $this->actionStart = '<div class="footer">';
    $this->actionEnd = '<p><a href="#">I forgot my password</a></p>            
            <a href="register.html" class="text-center">Register a new membership</a>
        </div>';
  }


}