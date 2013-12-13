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

	function Index(){

		$this->set('posts', $this->Post->find('all'));
	}

	function View($id = NULL) {
		
		$this->set('post', $this->Post->read(NULL, $id));
	}

	function Comment(){


	}

}

?>
