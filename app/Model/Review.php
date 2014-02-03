<?php
class Review extends AppModel {

	public $belongsTo = array(
        'Car' => array(
            'className' => 'Car',
            'foreignKey' => 'car_id'
        )
    );

	var $actsAs = array('Searchable.Searchable');
	
    public $validate = array(
    	'car_id' => array(
    		'rule' => 'notEmpty',
    			'message' => 'Please select a car.'
    	),
    	'title' => array(
    		'rule' => 'notEmpty',
    			'message' => 'A title is required.'
    	),
    	'body' => array(
    		'rule' => 'notEmpty',
    			'message' => 'A body is required.'
    	),
    	'ratings' => array(
    		'rule' => 'notEmpty',
    			'message' => 'Please select a rating.'
    	)
    );


}
?>