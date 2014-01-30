<?php
class Car extends AppModel {

	// a car can have many events
	// many cars belong to a user
	/*
	public $hasMany = array(
		'Event' => array(
			'className' => 'Event',
			'order' => 'Event.created ASC',
			'foreignKey' => 'event_id',
			'dependent' => true
			)
		); */

	var $actsAs = array('Searchable.Searchable');

	public $hasMany = array(
		'Picture' => array(
			'className' => 'Picture',
			'foreignKey' => 'car_id'
			)
		);

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			)
		);

	public $hasMany = array(
		'Review' => array(
			'className' => 'Review',
				'foreignKey' => 'car_id'
			)
		);

	public $validate = array(
		'license_plate' => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'allowEmpty' => 'false',
				'required' => 'true',
				'message' => 'Only letters and numbers allowed.',
				'last' => 'false'
				)
			), 
		'brand' => array(
			'rule' => 'alphaNumeric',
			'allowEmpty' => 'false',
			'required' => 'true',
			'message' => 'Only letters and numbers allowed.',
			'last' => 'false'
			), 
		'model' => array(
			'rule' => 'alphaNumeric',
			'allowEmpty' => 'false',
			'required' => 'true',
			'message' => 'Only letters and numbers allowed.',
			'last' => 'false'
			), 
		'transmission' => array(
			'valid' => array(
				'rule' => array('inList', array('Automatic', 'Manual')),
				'allowEmpty' => 'false',
				'message' => 'Please select the type of engine.',
				'last' => 'false'
				)
			), 
		'engine_type' => array(
			'valid' => array(
				'rule' => array('inList', array('Petrol', 'Diesel', 'Hybrid')),
				'message' => 'Please select the type of engine.',
				'last' => 'false'
				)
			), 
		'engine_capacity' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber', false),
				'allowEmpty' => 'false',
				'required' => 'true',
				'message' => 'Please enter the engine capacity of the car.',
				'last' => 'true'
				)
			),
		// 'image' => array(
		// 	'rule' => array('extensions', array('jpg', 'jpeg', 'png', 'gif')),
		// 	'message' => 'Please upload a valid image.'
		// 	)
		);
}
?>