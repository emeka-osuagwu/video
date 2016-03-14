<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

	public $uses = array();

	public function beforeFilter(){	
		$this->Auth->Allow('register');
	}

	public function register() {
	
		$requestType = $this->request->is('post');

		if ($requestType) 
		{

			$data =  $this->request->data;
			$data['password'] = AuthComponent::password($this->request->data['password']);
			$user = $this->User->save($data);
			$this->redirect('login');
		}
	}

public function login() {

	if ($this->request->is('post')) {

		$conditions= ['email' => $this->request->data['email'] , 'password' => $this->request->data['password'] ];
		$check = $this->User->find('first', compact('conditions'));		
		if(!$check){
			return "no record";
			exit;
		}

		if ($this->Auth->login(array('id' =>$check['User']['id']))) {
		
			$user = $this->sWrite("users", $check);
			$this->redirect('/file/index');
		
		}

		$this->Session->setFlash(__('Your username or password was incorrect.'));
	}
}

public function test(){
	$this->autoRender = false;
	return "Hello";
	exit;
}
}
