<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $theme = 'Cakestrap';


	public function beforeFilter() {

		parent::beforeFilter();
		$this->Auth->allow('login', 'logout', 'register'); 
		//allows users to login, logout and register for an account 
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
	

		if ($this->request->is('POST'))
		{
			$this->User->create();
			$name = $this->request->data['User']['username'];
			$pass = $this->request->data['User']['password'];
			$emailadd = $this->request->data['User']['email'];
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('New user added successfully.', 'flash/success');
				App::uses('CakeEmail', 'Network/Email');
				$confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "users/login/";
        		$message = 'Hi,' . $name . ', Your Password is: ' . $pass;
        		$email = new CakeEmail('gmail');
        		$email->from('rentmyride.nyp@gmail.com');
        		$email->to($emailadd);
        		$email->subject('Mail Confirmation');
        		$email->send($message . " " . $confirmation_link);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add new user. Please try again.', 'flash/error');
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
		        $this->Session->setFlash('Your details have been updated.', 'flash/success');
		        return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash('Unable to update your user details.', 'flash/error');
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
			$this->Session->setFlash('The user has been removed.', 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
	}

	public function upload($id = null) {

		$path = getcwd() . "/img/uploads/users/";

		$capture = $this->request->data();
		return $capture;
	}

	/*public function signup() {

		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Thank you for signing up with Rent My Ride');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Oops! Something went wrong. Please try again.');
			}
		}
	}*/

	public function login() {

		if ($this->Session->read('Auth.User')) {
        $this->Session->setFlash('You are logged in!', 'flash/success');
        return $this->redirect('/');
    }
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash('Incorrect username and/or password.', 'flash/error');
		}
	}

	public function logout() {

		$this->Session->setFlash('Good-Bye', 'flash/success');
		$this->redirect($this->Auth->logout());
	}

	public function register() {
		

		if(!empty($this->request->data))
		{
			$this->request->data('User.group_id', '2');
			$name = $this->request->data['User']['username'];
			$pass = $this->request->data['User']['password'];
			$emailadd = $this->request->data['User']['email'];

			
			
			if($this->User->save($this->request->data))
			{
				$this->Session->setFlash('Registeration Sucessful.', 'flash/success');
				App::uses('CakeEmail', 'Network/Email');
				$confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "users/login/";
        		$message = 'Hi,' . $name . ', Your Password is: ' . $pass;
        		$email = new CakeEmail('gmail');
        		$email->from('rentmyride.nyp@gmail.com');
        		$email->to('boi100886@gmail.com');
        		$email->subject('Mail Confirmation');
        		$email->send($message . " " . $confirmation_link);
				$this->redirect(array('action'=>'/'));
			}
			else
			{
				$this->Session->setFlash('Registeration Unsucessful, Please Try Again.', 'flash/error');
			}
		}
	}

	// public access
	public function search() {

		$query = $this->request->data['User']['search'];

		if (!$query) 
		{
			UsersController::index();
		} 
		else
		{
			$result1 = $this->User->findAllByUsername($query);
			$result2 = $this->User->findAllByName($query);
			$result3 = $this->User->findAllByAddress($query);
			$result4 = $this->User->findAllByEmail($query);
			$result5 = $this->User->findAllByMobile($query);
			$result6 = $this->User->findAllByLicense($query);

			if ($result1 != null)
			{
				$this->set('users', $result1);
			}
			elseif ($result2 != null)
			{
				$this->set('users', $result2);
			}
			elseif ($result3 != null)
			{
				$this->set('users', $result3);
			}
			elseif ($result4 != null)
			{
				$this->set('users', $result4);
			}
			elseif ($result5 != null)
			{
				$this->set('users', $result5);
			}
			elseif ($result6 != null)
			{
				$this->set('users', $result6);
			}
		}

	}

	public function initDB() {
    	$group = $this->User->Group;
    	//Allow admins to everything
    	$group->id = 1;
    	$this->Acl->allow($group, 'controllers');

    	//allow Users to do the following...
   	 	$group->id = 2;
    	$this->Acl->deny($group, 'controllers');
    	$this->Acl->allow($group, 'controllers/Posts/add');
    	$this->Acl->allow($group, 'controllers/Posts/edit');
    	$this->Acl->allow($group, 'controllers/Uploads/add');
    	$this->Acl->allow($group, 'controllers/Users/search');
		$this->Acl->allow($group, 'controllers/Users/upload'); 
		$this->Acl->allow($group, 'controllers/Events/add');
		$this->Acl->allow($group, 'controllers/Events/confirm');
		$this->Acl->allow($group, 'controllers/Events/success');
		$this->Acl->allow($group, 'controllers/Cars/search');
    	
    	//we add an exit to avoid an ugly "missing views" error message
    	echo "all done";
    	exit;
	}

	public function profile() {}

	public function admin() {
		$this->set('users_total', $this->User->find('count'));
		$this->set('cars_total', $this->User->Car->find('count'));
		$this->set('events_total', $this->User->Event->find('count'));
		$this->set('messages_total', $this->User->Message->find('count'));

		$this->set('nissan', $this->User->Car->find('count', array(
			'conditions' => array('Car.brand' => 'nissan')
			)));
		$this->set('toyota', $this->User->Car->find('count', array(
			'conditions' => array('Car.brand' => 'toyota')
			)));
		$this->set('honda', $this->User->Car->find('count', array(
			'conditions' => array('Car.brand' => 'honda')
			)));

	}

	/*public function mail() {
		App::uses('CakeEmail', 'Network/Email');
		$email = new CakeEmail('gmail');
        //$email->from('Team RMR');
        $email->to('mohafizz@gmail.com');
       // $email->attachments(array(''));
        $email->subject('Account Confirmation');
        $email->viewVars(array('username' => 'Joe'));
        $email->template('welcome', 'default');
        $email->emailFormat('both');
        $email->send('Testing');
        die('E-mail sent!');

	}*/		
}

?>