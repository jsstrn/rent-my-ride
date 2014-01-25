<?php

class ReviewsController extends AppController {

	public function add($id = null)
	{
		if ($id != NULL)
		{
			$this->loadModel('Car');
			$b = $this->request->params['pass'];
			$c = $this->Car->find('list', array(
        	'fields' => array('Car.id', 'Car.license_plate'),
        	'conditions' => array('Car.id' => $b)
    		));

			$this->set('a', $c);
			$this->set('loggeduser', $this->Auth->User('username'));
	
			if ($this->request->is('post')) 
			{
				$this->request->data('Review.fromsender', $this->Auth->User('username'));
				if ($this->Review->save($this->data)) 
				{
					$this->Session->setFlash('The review was added successfully.', 'flash/success');
					$this->redirect(array('controller' => 'pages', 'action' => '/'));
				} 
				else 
				{
					$this->Session->setFlash('Unable to add review. Please try again.', 'flash/error');
				}
			}
		}

		if (!$id)
		{
			$this->loadModel('Car');
			$a = $this->Car->find('list', array('fields' => array('Car.id', 'Car.license_plate')));
			$this->set('a', $a);
			$this->set('loggeduser', $this->Auth->User('username'));
	
			if ($this->request->is('post')) 
			{
				$this->request->data('Review.fromsender', $this->Auth->User('username'));
				if ($this->Review->save($this->data)) 
				{
					$this->Session->setFlash('The review was added successfully.', 'flash/success');
					$this->redirect(array('controller' => 'pages', 'action' => '/'));
				} 
				else 
				{
					$this->Session->setFlash('Unable to add review. Please try again.', 'flash/error');
				}
			}
		}
	}


}
?>