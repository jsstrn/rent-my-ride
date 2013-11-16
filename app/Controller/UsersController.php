<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	// public access - rentmyride/users/index
	public function index() {

		$this->set('users', $this->User->find('all'));
	}

	// user and admin access
	public function view($id = null) {

		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$user = $this->User->findById($id);

		if (!$user) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$this->set('user', $user);
	}

	// admin access only 
	public function add() {
	
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('New user added successfully');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add new user. Please try again.');
			}
		}
	}

	// user and admin access
	public function edit() {
		
	}

	//admin access only 
	public function delete() {
		
	}
}

?>