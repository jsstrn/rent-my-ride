<?php
class Review extends AppModel {

	public $belongsTo = array(
        'Car' => array(
            'className' => 'Car',
            'foreignKey' => 'car_id'
        )
    );

}
?>