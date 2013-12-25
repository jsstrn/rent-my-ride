<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

	public $belongsTo = array('Group');
    public $actsAs = array('Acl' => array('type' => 'requester'));

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }

    public function bindNode($user) {
    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}





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
		'name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A name is required.'),
			),
		'address' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'An address is required.'),
			),
		'email' => array('rule' => 'email'),
		'mobile' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A mobile number is required.'),
			),
		'license' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A license number is required.'),
			),
		'postal_code' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A postal code is required.'),
			),
/*		'picture' => array(
			'image' => array(
				'rule' => array('extensions', array('jpg', 'jpeg', 'png', 'gif')),
				'message' => 'Please upload a valid image.'),
			),*/
		);
}
?>