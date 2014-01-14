<?php

class EventsController extends AppController {


	public function index() {

		$this->set('dates', $this->Event->find('all'));

	}

	public function view() {

	}

	public function add($car_id = null) {


		if (!$car_id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$car_exists = $this->Event->Car->findById($car_id);

		if ($car_exists) {
			$this->request->data['Event']['car_id'] = $car_id;
			$this->request->data['Event']['user_id'] = $this->Auth->user('id');

			if ($this->request->is('post')) {

				$myDate = $this->request->data('date');
				$myTime = $this->request->data('time');

				$interval = $this->request->data('interval');
				$myDateTime = $myDate . ' ' . $myTime;
				$datetime_start = time($myDateTime);
				$datetime_end = $datetime_start + (60 * 60 * $interval);

				$this->request->data['Event']['datetime_start'] = $datetime_start;
				$this->request->data['Event']['datetime_end'] = $datetime_end;

				$this->Event->create();
				if ($this->Event->save($this->request->data)) {
					$this->redirect(array('action' => 'success'));
				} else {
					$this->Session->setFlash('Unable to place your booking. Try again later.');
				}
			}

		} else {
			throw new NotFoundException(__('Invalid Request'));
		}

		$this->set('car', $car_exists);

		$this->set('user_id', $this->Auth->user('id'));

		$this->set('user_name', $this->Auth->user('name'));

	}

	public function confirm() {

	}

	public function success() {

	}
}

?>