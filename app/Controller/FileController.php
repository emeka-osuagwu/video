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
class FileController extends AppController {

	public $files = array();

	public function beforeFilter(){
		$this->Auth->Allow('index');
		$this->Auth->Allow('view');
	}
	public function beforeRender(){
		$authp = $this->sRead('users');
		$this->set('auth',$authp);
	}

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		)
	);

	public function index()
	{	
		$conditions = ['type' => '0'];
		$videos = $this->File->find('all', compact('conditions'));
		$audios = $this->File->query("SELECT * FROM files WHERE type=1;");
		
		$data = [
			"videos" => $videos,
			"audios" => $audios
		];


		$this->set('data', $data);
	}


	public function upload() {
	
		$requestType = $this->request->is('post');
		
		if ($requestType) 
		{
			if (!isset($this->request->data['type'])) 
			{
				$this->uploadAudio($this->request->data);
			}
			else 
			{
				$this->uploadVIdeo($this->request->data);
			}
			
		}
	}

	public function uploadVIdeo($data)
	{
		$new_file = $this->File->save($data);
		$this->redirect('/file/index');
	}

	public function uploadAudio($data)
	{
		
		$data['type'] = 1;

		$file = $_FILES['audio_file'];
		
		$path = $_SERVER['DOCUMENT_ROOT'] . "/cakephp";

		$path =  $path . '/app/webroot/';

		$file_name = $file['name'];

		if(move_uploaded_file($file['tmp_name'],  $path . $file_name)) {
			
			$data['link'] 		= $file_name;
			$new_file = $this->File->save($data);
			$this->redirect('index');
		}
	}


	public function view($id)
	{
		$conditions = ['id' => $id];
		$file = $this->File->find('all', compact('conditions'));
		
		$this->set('file', $file);
	}
}
