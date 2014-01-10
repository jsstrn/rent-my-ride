<?php

class CommentsController extends AppController {

	/*
	*	we write a function like this:
	*
	*	public function index() {
	*
	*	}
	*
	*/

	//public $theme = 'Cakestrap';

	public $helpers = array('Like.Like');

	public function index(){

		$this->set('posts', $this->Comment->find('all'));
	}

	public function view($id = NULL) {
		
		$this->set('post', $this->Comment->read(NULL, $id));
	}

	public function comment(){

	}

	public function add() {
	
		if ($this->request->is('post')) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash('The comment was added successfully');
				$this->redirect(array('action' =>'index'));
			} else {
				$this->Session->setFlash('Unable to add comment. Please try again.');
			}
		}

	}

	public function edit($id = NULL) {

		if (empty($this->data)) {
			$this->data = $this->Comment->read(NULL, $id);
		} else {
			if($this->Comment->save($this->data)) {
				$this->Session->setFlash('The comment has been updated');
				$this->redirect(array('action'=>'view', $id));
			}
		}	   
	} 

	public function delete($id = NULL) {

		$this->Comment->delete($id);
		$this->Session->setFlash('The comment has been deleted');
		$this->redirect(array('action'=>'index'));
	}

	public function support() 
	{
		if(!empty($this->request->data))
		{
			$head = $this->request->data['Comment']['heading'];
			$body = $this->request->data['Comment']['body'];
			$myuser = $this->Auth->user('username');
			App::uses('CakeEmail', 'Network/Email');
			//$confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "users/login/";
        	$message = 'Hi Admin,' . '<br /><br />' . $head . '<br /><br />' . $body;
        	$email = new CakeEmail('gmail');
        	$email->from('rentmyride.nyp@gmail.com');
        	$email->to('rentmyride.nyp@gmail.com');
        	$email->subject('Complaint Reported By ' . $myuser);
        	$email->emailFormat('html');
       		$email->send($message);
			$this->redirect(array('action'=>'/'));
		}
	}

}

?>
