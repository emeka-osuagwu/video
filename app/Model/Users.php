<?php

App::uses('AppModel', 'Model');

class User extends AppModel {
	public $name = 'User';

	   'email' => [
	        'rule' 		=> 'ruleName',
	        'required' 		=> true,
	        'allowEmpty' 	=> false,
	        'on' 		=> 'create',
	        'message' 	=> 'Your Error Message'
    	];


}
