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

	public function edit($id = null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$car = $this->Car->findById('$id');

		if (!$car) {
			throw new NotFoundException(__('Invalid Request'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Car->id = $id;

			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash('Your car details have been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your car details.');
			}
		}

		if (!$this->request->data) {
			$this->request->data = $car;
		}
	}

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
	}
}
?>