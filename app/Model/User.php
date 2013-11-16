<?php
class User extends AppModel {
	
	public $validate = array(
		'username' => array(),
		'password' => array(),
		'role' => array(),
		'name' => array(),
		'address' => array(),
		'email' => array('rule' => 'email'),
		'mobile' => array(),
		'license' => array(),
		//'picture' => array(), //validate proper image format (.jpg, .png, etc)
		);
}
?>