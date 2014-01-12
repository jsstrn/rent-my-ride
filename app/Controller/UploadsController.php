<?php

class UploadsController extends AppController {


	public function index() {

		$this->set('uploads', $this->Upload->find('all'));
	}

	public function add() {

		if ($this->request->is('POST')) {
			
			$dir = 'img/uploads/';
			$path = $dir . basename($_FILES['uploader']['name']);
			$name = $_FILES['uploader']['name'];
			$type = $_FILES['uploader']['type'];
			$size = $_FILES['uploader']['size'];

			$this->request->data['Upload']['path'] = $path;
			$this->request->data['Upload']['name'] = $name;
			$this->request->data['Upload']['type'] = $type;
			$this->request->data['Upload']['size'] = $size;

			$this->Upload->create();
			if ($this->Upload->save($this->request->data)) {
				$this->Session->setFlash('Your file has been uploaded!', 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to upload the file. Try again later.', 'flash/error');
			}
		}
	}
}
?>