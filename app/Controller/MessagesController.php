<?php
class MessagesController extends AppController {
	public $helpers = array('Html', 'Form' );

	public function index() {

		$this->set('messages', $this->Message->find('all'));
	}
	
	//View Start here 
	public function view($id = null) {

		$this->set('messages', $this->Message->read(null, $id));

		}

	//View End here

//add start here
	public function add() {

		if ($this->request->is('Message')) {
			$this->message->create();
			if ($this->message->save($this->request->data)) {
				$this->Session->setFlash('Your message has been added!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your message. Please Try again.');
			}
		}
	}
//add end here

	// edit start here
	public function edit($id = null) {

		if (empty($this->data)) {
			$this->data = $this->message->read(null, $id);
		} else {
			if($this->message->save($this->data)) {
				$this->Session->setFlash('your message has been updated');
				$this->redirect(array('action'=>'view', $id));
			}
		}	   
	} 
	// edit end here

// delete start here
	public function delete($id = null) {
		
		$this->message->save($id);
				$this->Session->setFlash('your message has been deleted');
				$this->redirect(array('action'=>'index'));
	}
// delete end here

	
}

?>