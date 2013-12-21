<?php
class MessagesController extends AppController {
	public $helpers = array('Html', 'Form' );

	public function index()
	{
		# code...
		$this ->set('messages', $this->Message->find('all'));

		
	}
}

?>