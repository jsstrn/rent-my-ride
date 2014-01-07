<?php

class Post extends AppModel {

	//public $actsAs = array('Like.Likeable');
	//var $actsAs = array('Searchable.Searchable');
	public $name = 'Post';
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
		'body'=>array(
			'body_must_not_be_blank'=>array(
				'rule'=>'notEmpty',
				'message'=>'This comment is missing its body!'
				)
			)
		);
}

?>