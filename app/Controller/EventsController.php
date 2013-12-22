<?php

class EventsController extends AppController {

	public function index() {

	}

	public function view() {

	}

	public function add($car_id = null) {


		if (!$car_id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$car_exists = $this->Event->Car->findById($car_id);

		if ($car_exists) {
			$this->data['Event']['car_id'] = $car_id;
			$this->data['Event']['user_id'] = $this->Auth->user('id');
		} else {
			throw new NotFoundException(__('Invalid Request'));
		}

		// $this->set('test', $this->Event->Car->data['Car']['brand']);



		$this->set('car', $car_exists);

		$this->set('user_id', $this->Auth->user('id'));

		if ($this->request->is('post')) {
			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
				$this->redirect(array('action' => 'success'));
			} else {
				$this->Session->setFlash('Unable to place your booking. Try again later.');
			}
		}

	}

	public function some_function() {

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

	public function confirm() {

	}

	public function success() {

	}
}

?>