<?php

class Picture extends AppModel {

	public $belongsTo = array(
		'Car' => array(
			'className' => 'Car',
			'foreignKey' => 'car_id'
			)
		);

	public $validate = array(
		'image' => array(
			'validImage' => array(
				'rule' => array('extension', array('jpg', 'jpeg', 'png', 'gif')),
				'message' => 'Please upload a valid image file.'
				),
			'fileSize' => array(
				'rule' => array('fileSize', '<', '100MB'),
				'message' => 'File size must be less than 100MB.'
				)
			)
		);

}

?>