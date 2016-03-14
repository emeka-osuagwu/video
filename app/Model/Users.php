<?php

App::uses('AppModel', 'Model');

class User extends AppModel {
	public $name = 'User';
	
	public $validate = array(
	     'email' => [
		       'rule' => 'email'
	    	];
	);
	  


}
