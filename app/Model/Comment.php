<?php

class Comment extends AppModel{

	public $name = 'Comment';

<<<<<<< HEAD:app/Model/Comment.php
	public $actsAs = array('Like.Likeable');

=======
	//public $actsAs = array('Like.Likeable');
	//var $actsAs = array('Searchable.Searchable');
	public $name = 'Post';
>>>>>>> 677119ff1fdd959dca0e13896db4258f164d4003:app/Model/Post.php
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