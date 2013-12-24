<?php

class UploadsController extends AppController {

	public $theme = 'BaseAdmin';

	public $helpers = array('Html', 'Form', 'Session');

	public function index() {

		$this->set('uploads', $this->Upload->find('all'));
	}

	public function add() {

		if ($this->request->is('POST')) {
			
			$uploaddir = 'img/uploads/';
			$uploadfile = $uploaddir . basename($_FILES['path']['name']);

			echo '<pre>';
			if (move_uploaded_file($_FILES['path']['tmp_name'], $uploadfile)) {
			    echo "File is valid, and was successfully uploaded.\n";
			} else {
			    echo "Possible file upload attack!\n";
			}

			echo 'Here is some more debugging info:';
			print_r($_FILES);

			print "</pre>";
		}
	}
}
?>