<?php

class LikesController extends AppController{
	
	public function like($model_name, $comments_id){
		$Model = ClassRegistry::init(Inflector::classify($model_name));
		$referer = $this->referer('/');
		$user_id = $this->Auth->user('id'); 
		
		if(!$user_id){
			$this->Session->setFlash(__d('like', 'You are not connected.'));
			return $this->redirect($referer);
		}
		
		if(!$Model->Behaviors->attached('Likeable')){
			$this->Session->setFlash(__d('like', 'You cannot like this element.'));
			return $this->redirect($referer);
		}
		
		if(!$Model->exists($comments_id)){
			$this->Session->setFlash(__d('like', 'This element does not exist.'));
			return $this->redirect($referer);
		}
		
		$Model->like($comments_id, $user_id);
		return $this->redirect($referer);

	}
	
	public function dislike($model_name, $comments_id){
		$Model = ClassRegistry::init(Inflector::classify($model_name));
		$referer = $this->referer('/');
		$user_id = $this->Auth->user('id');
	
		if(!$user_id){
			$this->Session->setFlash(__d('like', 'You are not connected.'));
			return $this->redirect($referer);
		}
	
		if(!$Model->Behaviors->attached('Likeable')){
			$this->Session->setFlash(__d('like', 'You cannot like this element.'));
			return $this->redirect($referer);
		}
	
		if(!$Model->exists($comments_id)){
			$this->Session->setFlash(__d('like', 'This element does not exist.'));
			return $this->redirect($referer);
		}
	
		$Model->dislike($comments_id, $user_id);
		return $this->redirect($referer);
	}
	
}