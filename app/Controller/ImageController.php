<?php 
class ImageController extends AppController {

public function index() {

	$this->set('images', $this->Image->find('all'));
}



}



?>
