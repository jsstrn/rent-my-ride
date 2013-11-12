<?php
class CarsController extends AppController {
	
	public $helpers = array('Html', 'Form');

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
		
	}
}
?>