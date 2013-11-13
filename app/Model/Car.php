<?php
class Car extends AppModel {

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
			), 
		'engine_type' => array(
			), 
		'engine_capacity' => array(
			'rule' => array('naturalNumber', false),
			'allowEmpty' => 'false',
			'required' => 'true',
			'message' => 'Please enter the engine capacity of the car.',
			'last' => 'true'
			)
		);
}
?>