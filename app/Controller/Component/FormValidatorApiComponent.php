<?php

/**
  Filename: FormValidatorApiComponent.php 
  @author: Femi TAIWO [dftaiwo@gmail.com]
  Created: Jul 2, 2013  1:17:58 PM
 */

App::uses('Component', 'Controller');

App::uses('Component', 'FormValidatorComponent');
require_once(APP.'Controller/Component/FormValidatorComponent.php');

class FormValidatorApiComponent extends FormValidatorComponent {
      
      public $useModel = 'Data';
      public $validationErrors = "";
      function setRules($rules = array(), $_formName='postform') {
            
            $rules = array("{$this->useModel}"=>$rules);
            parent::setRules($rules,$_formName);
            
      }
      
      function validate() {
	$valErrors = array();			
            if(empty($this->_controller->data)){
		$valErrors[] = "No data was sent";
		$this->validationErrors = join("\n",$valErrors);
		return false;
      
	  }
            $validated = parent::validate();
            if($validated) return true;
            $valErrors = array();
            foreach($this->validationError as $errors){
                  $valErrors[] = $errors['error'];
                  
            }
            $this->validationErrors = join("\n",$valErrors);
            return false;
            
            
      }
      
      function getErrors(){
            return $this->validationErrors;
      }
}      
      
      