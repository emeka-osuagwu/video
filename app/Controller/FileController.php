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

	public function index()
	{
		$videos = $this->File->query("SELECT * FROM files WHERE type=0;");
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
		$data['user_id'] = 1;
		$new_file = $this->File->save($data);
	}

	public function uploadAudio($data)
	{
		
		$file = $_FILES['audio_file'];
		
		$path = $_SERVER['DOCUMENT_ROOT'] . "/cakephp";

		echo $path . '/' . $file['name'];
		//echo  $target_path = . "webroot/".$file['name'];


		if(move_uploaded_file($file['tmp_name'], "webroot")) {
			echo "string";
		}


		exit;
	}


	public function view($id)
	{
		$file = $this->File->query("SELECT * FROM files WHERE id=$id;");
		$this->set('file', $file);
	}
}
