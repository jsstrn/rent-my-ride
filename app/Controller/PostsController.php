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
				return $this->redirect(array('action' =>'index'));
			} else {
				$this->Session->setFlash('Unable to add comment. Please try again.');
			}
		}
	}


}

?>
