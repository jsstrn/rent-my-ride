<?php

class Comment extends AppModel{

	public $name = 'Comment';

	public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
	//public $actsAs = array('Like.Likeable');
	var $actsAs = array('Searchable.Searchable');
	public $validate = array(
		'title'=>array(
			'title_must_not_be_blank'=>array(
				'rule'=>'notEmpty',
					'message'=>'This comment is missing a title!'
			),

			'title_must_be_unique'=>array(
				'rule'=>'isUnique',
					'message'=>'A comment with this title already exists!'
			)
		),
		'user_id'=>array(
			'rule'=>'notEmpty',
				'message'=>'A username must be selected!'
		),
		'body'=>array(
			'body_must_not_be_blank'=>array(
					'rule'=>'notEmpty',
						'message'=>'This comment is missing its body!'
			)
		)
	);


}

?>