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
			'Pleae enter username' => array(
				'rule' => 'notEmpty',
						'message' => 'A username is required.'
			),
			'This username is already taken' => array(
				'rule' => 'isUnique',
					'message' => 'This username is already taken.'
			),
			'Size of username' => array(
				'rule' => array('between', 5, 15),
					'message' => 'Username must be between 5 and 15 characters long.'
			)
		),
		'password' => array(
			'Please enter password' => array(
				'rule' => 'notEmpty',
						'message' => 'A password is required.'
			),
			'Size of password' => array(
				'rule' => array('between', 1, 20),
					'message' => 'Password must be between 8 and 20 characters long.'
			),
			'Match passwords' => array(
				'rule' => 'matchPasswords',
				'message' => 'Both password and confirm password do not match.'
			)			
		),
		'confirm_password' => array(
			'Please enter password' => array(
				'rule' => 'notEmpty',
						'message' => 'A password confirmation is required.'
			),
			'Size of confirm_password' => array(
				'rule' => array('between', 8, 20),
					'message' => 'Password must be between 8 and 20 characters long.'
			)
		),
		'group_id' => array(
			'rule' => 'notEmpty',
					'message' => 'A role is required.'
		),
		'name' => array(
				'rule' => 'notEmpty',
					'message' => 'A name is required.'
		),
		'address' => array(
				'rule' =>'notEmpty',
					'message' => 'An address is required.'
		),
		'email' => array(
			'rule' => 'email',
					'message' => 'This is an invalid email address.'
		),
		'mobile' => array(
			'Please enter phone number' => array(
					'rule' => 'notEmpty',
						'message' => 'A mobile number is required.'
			),
			'Invalid mobile phone number' => array(
				'rule' => array('phone', '/^[89]\d{7}$/'),
					'message' => 'This is an invalid mobile phone number.'
			)
		),
		'license' => array(
				'rule' => 'notEmpty',
					'message' => 'A license number is required.'
		),
		'postal_code' => array(
			'Please enter postal code' => array(
					'rule' => 'notEmpty',
						'message' => 'A postal code is required.'
			),
			'Invalid postal code' => array(
				'rule' => array('postal', '/^[\d]{6}$/'),
					'message' => 'This is an invalid postal code.'
			)
		),
/*		'picture' => array(
			'image' => array(
				'rule' => array('extensions', array('jpg', 'jpeg', 'png', 'gif')),
				'message' => 'Please upload a valid image.'),
			),*/
	);

	public function matchPasswords($data)
	{
		if ($data['password'] == $this->data['User']['confirm_password'])
		{
			return true;
		}
		$this->invalidate('confirm_password', 'Both password and confirm password do not match.');
		return false;
		
	}
}
?>