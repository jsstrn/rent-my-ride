<?php

/**
 * 2014 Copyright (c) Rent My Ride Pte Ltd. 
 * All rights reserved. 
 */

class EventsController extends AppController {

	private function create() {
		// this function will write a new entry to its Model
		$this->Event->create();
		if ($this->Event->save($this->request->data)) {
			$this->redirect(array('action' => 'payment'));
		} else {
			$this->Session->setFlash('Unable to place your booking. Try again later.');
		}
	}


	public function index() {

		$this->set('events', $this->Event->find('all'));

	}

	public function all() {

		$this->set('events', $this->Event->find('all'));

	}

	public function view() {

	}

	public function add($car_id = null) {


		if (!$car_id) {
			throw new NotFoundException(__('No car is no longer listed with us. Try another car.'));
		}

		if (!$this->Auth->user('id')) {
			throw new NotFoundException(__('You must be logged in to book a car'));
		}

		$car_exists = $this->Event->Car->findById($car_id);

		if ($car_exists) {
			$this->request->data['Event']['car_id'] = $car_id;
			$this->request->data['Event']['user_id'] = $this->Auth->user('id');
			$checkDate = $this->Event->findByCarId($car_id);

			$this->set('checkDate', $checkDate);

			if ($this->request->is('post')) {
				
				$datetime_str = $this->request->data('myDate') . ' ' . $this->request->data('myTime');

				$datetime_start = strtotime($datetime_str);

				$interval = $this->request->data('interval');
				$interval = $this->request->data['Event']['interval'];
				$datetime_end = $datetime_start + (60 * 60 * $interval);

				$this->request->data['Event']['datetime_start'] = $datetime_start;
				$this->request->data['Event']['datetime_end'] = $datetime_end;

				if (!$checkDate) {
					$this->create();
				} else {
					if ($datetime_start >= $checkDate['Event']['datetime_start'] && $datetime_start <= $checkDate['Event']['datetime_end']) {
						$this->Session->setFlash('1 You cannot book this date and time. This date and time has already been booked.', 'flash/error');
					} else {
						$this->create();
					}
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

	public function payment() {

		$lastRecord = $this->Event->find('first', array(
		    'order' => array('Event.created' => 'desc')
		));

		$amount = $lastRecord['Car']['rate'] * $lastRecord['Event']['interval'];

		$gst = $amount * 0.07;
		$total = $amount + $gst;

		$this->set('amount', $amount);
		$this->set('gst', $gst);
		$this->set('total', $total);
		$this->set('lastRecord', $lastRecord);

	}
}

?>