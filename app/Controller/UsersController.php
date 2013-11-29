<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function beforeFilter() {

		parent::beforeFilter();
		$this->Auth->allow('add'); //allows users to add themselves 
	}

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
	
		if ($this->request->is('POST')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('New user added successfully');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add new user. Please try again.');
			}
		}
	}

	// user and admin access
	public function edit($id = null) {

		if (!$id) {
		    throw new NotFoundException(__('Invalid Request'));
		}

		$user = $this->User->findById($id);
		if (!$user) {
		    throw new NotFoundException(__('Invalid Request'));
		}

		if ($this->request->is(array('post', 'put'))) {
		    $this->User->id = $id;
		    if ($this->User->save($this->request->data)) {
		        $this->Session->setFlash(__('Your details have been updated.'));
		        return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Unable to update your user details.'));
		}

		if (!$this->request->data) {
		    $this->request->data = $user;
		}
	}

	//admin access only 
	public function delete($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->User->delete($id)) {
			$this->Session->setFlash('The user has been removed.');
			$this->redirect(array('action' => 'index'));
		}
	}

	public function upload($id = null) {

		$path = getcwd() . "/img/uploads/users/";

		$capture = $this->request->data();
		return $capture;
	}

	public function signup() {

		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Thank you for signing up with Rent My Ride');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Oops! Something went wrong. Please try again.');
			}
		}
	}

	public function login() {

		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Incorrect username and/or password.'));
		}
	}

	public function logout() {

		return $this->redirect($this->Auth->logout());
	}
}

?>