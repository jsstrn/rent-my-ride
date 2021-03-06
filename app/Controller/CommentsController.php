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

	public function index(){

		//$this->set('posts', $this->Comment->find('all'));
		$n = $this->Comment->findAllByUserId($this->Auth->User('id'));
		$o = $this->Comment->findAllByFromsender($this->Auth->User('username'));

		$this->set('n', $n);
		$this->set('o', $o);
		$this->set('receive', $this->Comment->find('count', array(
       'conditions' => array('Comment.user_id' => $this->Auth->user('id')))));
		$this->set('sent', $this->Comment->find('count', array('conditions' => array(
			'Comment.fromsender' => $this->Auth->user('username')))));
		
	}

	public function view($id = NULL) {
		
		$this->set('post', $this->Comment->read(NULL, $id));
	}

	public function comment(){

	}

	public function find(){

	}

	public function add($id = NULL) {

		if ($id != NULL)
		{
			$this->loadModel('User');
			$b = $this->request->params['pass'];
			$c = $this->User->find('list', array(
        	'fields' => array('User.id', 'User.username'),
        	'conditions' => array('User.id' => $b)
    		));

			$this->set('a', $c);
			$this->set('loggeduser', $this->Auth->User('username'));
	
			if ($this->request->is('post')) 
			{
				$this->request->data('Comment.fromsender', $this->Auth->User('username'));
				if ($this->Comment->save($this->data)) 
				{
					$this->Session->setFlash('The comment was added successfully.', 'flash/success');
					$this->redirect(array('action' =>'index'));
				} 
				else 
				{
					$this->Session->setFlash('Unable to add comment. Please try again.', 'flash/error');
				}
			}
		}


		if (!$id)
		{
			$this->loadModel('User');
			$a = $this->User->find('list', array('fields' => array('User.username')));
			$this->set('a', $a);
			$this->set('loggeduser', $this->Auth->User('username'));
	
			if ($this->request->is('post')) 
			{
				$this->request->data('Comment.fromsender', $this->Auth->User('username'));
				if ($this->Comment->save($this->data)) 
				{
					$this->Session->setFlash('The comment was added successfully.', 'flash/success');
					$this->redirect(array('action' =>'index'));
				} 
				else 
				{
					$this->Session->setFlash('Unable to add comment. Please try again.', 'flash/error');
				}
			}
		}

	}

	public function edit($id = NULL) {

		if (empty($this->data)) {
			$this->data = $this->Comment->read(NULL, $id);
		} else {
			if($this->Comment->save($this->data)) {
				$this->Session->setFlash('The comment has been updated.', 'flash/success');
				$this->redirect(array('action'=>'view', $id));
			}
			else{

				 $this->Session->setFlash('The comment cannot be updated.', 'flash/error');
			}
		}	   
	} 

	public function delete($id = NULL) {

		$this->Comment->delete($id);
		$this->Session->setFlash('The comment has been deleted.', 'flash/success');
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
       		$this->Session->setFlash('Your complaint has been submitted to admin.', 'flash/success');
			$this->redirect(array('controller' => 'pages', 'action'=>'/'));
		}
	}

}

?>
