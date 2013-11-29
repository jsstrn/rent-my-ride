<?php

class UploadsController extends AppController {

	public function index() {

		$this->set('uploads', $this->Upload->find('all'));
	}

	public function add() {

		$uploaddir = '/app/webroot/img/uploads/';
		$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);

		echo '<pre>';
		if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
		    echo "File is valid, and was successfully uploaded.\n";
		} else {
		    echo "Possible file upload attack!\n";
		}

		echo 'Here is some more debugging info:';
		print_r($_FILES);

		print "</pre>";

		/*
		$uploaddir = '/var/www/uploads/';
		$uploadfile = $uploaddir . basename($_FILES['Upload']['name']);

		echo '<pre>';
		if (move_uploaded_file($_FILES['Upload']['tmp_name'], $uploadfile)) {
		    echo "File is valid, and was successfully uploaded.\n";
		} else {
		    echo "Possible file upload attack!\n";
		}

		echo 'Here is some more debugging info:';
		print_r($_FILES);

		print "</pre>";


		$name = $_FILES['Upload']['name'];

		$tmp = $_FILES['Upload']['tmp_name'];
		$dir = "img/uploads/";
		$path = $dir . basename($_FILES['Upload']['id']);
		$x = move_uploaded_file($tmp, $path);

		$this->set('tmp', $_FILES['Upload']['tmp_name']);
		*/
	}
}
?>