<?php
class CarsController extends AppController {
	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {

		$this->set('cars', $this->Car->find('all'));
	}

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
}
?>