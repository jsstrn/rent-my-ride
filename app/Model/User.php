<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
	
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required.'),
			),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A password is required.'),
			),
		'role' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A role is required.'),
			),
		'name' => array(),
		'address' => array(),
		'email' => array('rule' => 'email'),
		'mobile' => array(),
		'license' => array(),
		//'picture' => array(), //validate proper image format (.jpg, .png, etc)
		);
}
?>