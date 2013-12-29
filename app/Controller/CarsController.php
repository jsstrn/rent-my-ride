<?php
App::uses('AppController', 'Controller');

class CarsController extends AppController {

	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function beforeFilter() {

		parent::beforeFilter();
		$this->Auth->allow('search'); //allows unregistered users to search 
	}

	// public access
	public function index() {

		$this->set('cars', $this->Car->find('all'));
	}

	//users and admin access
	
	public function view($id = null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$car = $this->Car->findById($id);

		if (!$car) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$this->set('car', $car);
	}

	// users and admin access
	public function add() {

		if ($this->request->is('post')) {
			$this->Car->create();
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash('Your car has been added!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your car. Try again later.');
			}
		}
	}

	// users and admin access
	public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Request'));
	    }

	    $car = $this->Car->findById($id);
	    if (!$car) {
	        throw new NotFoundException(__('Invalid Request'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Car->id = $id;
	        if ($this->Car->save($this->request->data)) {
	            $this->Session->setFlash(__('Your car has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your car details.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $car;
	    }
	}

	// users and admin access
	public function delete($id = null) {
		
		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Car->delete($id)) {
			$this->Session->setFlash('Your car has been removed.');
			$this->redirect(array('action' => 'index'));
		}

		// // experimenting with SQL transactions
		// // http://book.cakephp.org/2.0/en/models/transactions.html
		// $dataSource = $this->getDataSource();
		// $dataSource->begin();
		// // Perform some tasks
		// if (/*all's well*/) {
		//     $dataSource->commit();
		// } else {
		//     $dataSource->rollback();
		// }
	}

	// public access
	public function search() {

		$query = $this->request->data['Car']['brand'];

		if (!$query) {
			CarsController::index();
		} else {
			$result = $this->Car->findAllByBrand($query);
			$this->set('cars', $result);
		}

	}

	public function map() {
		
	}
}	
?>