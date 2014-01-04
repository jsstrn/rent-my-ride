<?php
class Message extends AppModel {


// eg. a car can have many events
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

public $id = 'Message';

public $validate = array(
	//'subject' => array(
		'subject'=>array(
//check subject title is not empty
			'please enter a subject'=>array(
				'rule'=>'notEmpty',
				'subject'=>'please enter a subject title'
				),
//check duprecate subject title
			'subject existed'=>array(
				'rule'=>'isUnique',
				'subject'=>'same subject title found!'
				)
			),

//message box start here
		'body'=>array(
//check message body not empty
			'message'=>array(
				'rule'=>'notEmpty',
				'subject'=>'Please enter a message!'
				),
//check message body more then 500 chartacters
			'message'=>array(
				'rule'=> array('minLength',500),
				'subject'=>'message must not more then 500 chartacters long!'
				)
			)
		
	);
}

?>