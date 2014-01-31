<?php

class PicturesController extends AppController {


	public function index() {

		$this->set('pictures', $this->Picture->find('all'));

	}

	public function add() {

		$currentUser = $this->Auth->user('id');

		if (!$currentUser) {
			throw new NotFoundException("Please log in to upload images.");
		}

		$this->loadModel('Car');
		$myCars = $this->Car->find('list', array(
			'fields' => array('Car.id', 'Car.license_plate'),
			'conditions' => array('Car.user_id' => $currentUser),
			));
		$this->set('myCars', $myCars);

		if ($this->request->is('POST')) {

			$dir = 'img/pictures/';
			$tmp_name = $_FILES['uploader']['tmp_name'];
			$name = $_FILES['uploader']['name'];
			$type = $_FILES['uploader']['type'];
			$size = $_FILES['uploader']['size'];
			$path = $dir . basename($_FILES['uploader']['name']);

			$this->request->data['Picture']['path'] = $path;
			$this->request->data['Picture']['name'] = $name;
			$this->request->data['Picture']['type'] = $type;
			$this->request->data['Picture']['size'] = $size;
			$this->request->data['Picture']['user_id'] = $loggedIn;

			/*

			$userExists = $this->Upload->findByUserId($loggedIn);

			if (!$userExists) {

				$this->Upload->create();
				move_uploaded_file($tmp_name, $path);

				if ($this->Upload->save($this->request->data)) {
					$this->Session->setFlash('Your file has been uploaded!', 'flash/success');
					$this->redirect(array('action' => 'index'));

				} else {
					$this->Session->setFlash('Unable to upload your profile picture. Try again later.', 'flash/error');
				}
			} else {

				$this->Upload->id = $userExists['Upload']['id'];
				move_uploaded_file($tmp_name, $path);

				if ($this->Upload->save($this->request->data)) {
				    $this->Session->setFlash('Your profile picture has been updated.', 'flash/success');
				    return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Unable to update your profile picture.', 'flash/error'));
				}
			}
			*/
		}
	}

}?>