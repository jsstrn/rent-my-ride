<?php

class UploadsController extends AppController {


	public function index() {

		$this->set('uploads', $this->Upload->find('all'));
	}

	public function add() {

		if ($this->request->is('POST')) {

			$loggedIn = $this->Auth->user('id');

			if (!$loggedIn) {
				$this->Session->setFlash('Please log in to upload your profile picture.', 'flash/error');
			} else {

			}
			
			$dir = 'img/uploads/';
			$path = $dir . basename($_FILES['uploader']['name']);
			$name = $_FILES['uploader']['name'];
			$type = $_FILES['uploader']['type'];
			$size = $_FILES['uploader']['size'];

			$this->request->data['Upload']['path'] = $path;
			$this->request->data['Upload']['name'] = $name;
			$this->request->data['Upload']['type'] = $type;
			$this->request->data['Upload']['size'] = $size;
			$this->request->data['Upload']['user_id'] = $loggedIn;

			$userExists = $this->Upload->findByUserId($loggedIn);

			if (!$userExists) {
				$this->Upload->create();
				if ($this->Upload->save($this->request->data)) {
					$this->Session->setFlash('Your file has been uploaded!', 'flash/success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Unable to upload your profile picture. Try again later.', 'flash/error');
				}
			} else {

				$this->Upload->id = $userExists['Upload']['id'];

				if ($this->Upload->save($this->request->data)) {
				    $this->Session->setFlash(__('Your profile picture has been updated.', 'flash/success'));
				    return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Unable to update your profile picture.', 'flash/error'));
			}
		}
	}
}
?>