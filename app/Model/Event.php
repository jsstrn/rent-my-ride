<?php

class Event extends AppModel {

	// many events belong to a car
	public $belongsTo = array(
		'Car' => array(
			'className' => 'Car',
			'foreignKey' => 'car_id'
			),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			)
		);
}

?>