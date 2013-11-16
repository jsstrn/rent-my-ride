<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	// public access - rentmyride/users/index
	public function index() {

		$this->set('users', $this->User->find('all'));
	}

	// user and admin access
	public function view() {

		$this->set();	
	}

	// admin access only 
	public function add() {
		
	}

	// user and admin access
	public function edit() {
		
	}

	//admin access only 
	public function delete() {
		
	}
}

?>