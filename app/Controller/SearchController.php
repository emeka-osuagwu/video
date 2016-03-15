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
class SearchController extends AppController {

	public $uses = array();

	public function beforeFilter(){	
		$this->Auth->Allow('search');
	}

	public function index()
	{
		if($this->data['formtype'] ==1){
		dd($searchWords);
		$searchWords = isset($this -> data['Search']['search']) ? $this -> data['Search']['search'] : false;

		
		if ($searchWords) {
			$searchParts = explode(' ', $searchWords);
			foreach ($searchParts as $part) {

				$part = trim($part);

				if (!$part)
					continue;

				$conditions = array('OR' => array('Report.message LIKE' => "%$part%", 'Report.from LIKE' => "%$part%"));

				$paginateParams = urlencode("search:$searchWords");
				$this -> set('paginateParams', $paginateParams);
			}
		}
	}
}


