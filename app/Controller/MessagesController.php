<?php
class MessagesController extends AppController {
	public $helpers = array('Html', 'Form' );

	public function index()
	{
		# code...
		// $this ->set('messages', $this->Message->find('all'));

		$messages = $this->Message->find('all');
		$test = 'Hello';
		$this->set('messages'. $messages);
		$this->set('test', $test);

		
	}
}

?>