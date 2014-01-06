<?php

class PostsController extends AppController {

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

		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id = NULL) {
		
		$this->set('post', $this->Post->read(NULL, $id));
	}

	public function comment(){

	}

	public function add() {
	
		if ($this->request->is('post')) {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash('The comment was added successfully');
				$this->redirect(array('action' =>'index'));
			} else {
				$this->Session->setFlash('Unable to add comment. Please try again.');
			}
		}

	}

	public function edit($id = NULL) {

		if (empty($this->data)) {
			$this->data = $this->Post->read(NULL, $id);
		} else {
			if($this->Post->save($this->data)) {
				$this->Session->setFlash('The comment has been updated');
				$this->redirect(array('action'=>'view', $id));
			}
		}	   
	} 

	public function delete($id = NULL) {

		$this->Post->delete($id);
		$this->Session->setFlash('The comment has been deleted');
		$this->redirect(array('action'=>'index'));
	}

}

?>
