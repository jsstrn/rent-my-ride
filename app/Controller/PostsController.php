<?php

class PostsController extends AppController {


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
