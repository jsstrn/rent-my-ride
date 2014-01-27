<?php
App::uses('AppController', 'Controller');

class CarsController extends AppController {

	
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function beforeFilter() {

		parent::beforeFilter();
		$this->Auth->allow('search'); //allows unregistered users to search 
	}

	// public access
	public function index() {

		$this->set('cars', $this->Car->find('all'));
	}

	//users and admin access
	
	public function view($id = null) {

		$this->loadModel('Review');
		$car = $this->Car->findById($id);
		$review = $this->Review->findAllByCarId($id);
		$average = $this->Review->find('count', array(
        'conditions' => array('Review.car_id' => $id)
    	));

		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		if (!$car) {
			throw new NotFoundException(__('Invalid Request'));
		}

		$this->set('car', $car);
		$this->set('review', $review);
		$this->set('total_ratings');
		$this->set('average', $average);

	}

	// users and admin access
	public function add() {

		if ($this->request->is('post')) {

			$dir = 'img/cars/';
			$path = $dir . basename($_FILES['image']['name']);
			$this->request->data['Car']['image'] = $path;
			$this->request->data['Car']['user_id'] = $this->Auth->user('id');

			$this->Car->create();
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash('Your car has been added!', 'flash/success');
				$this->redirect(array('controller' => 'pages', 'action'=>'/'));
			} else {
				$this->Session->setFlash('Unable to add your car. Try again later.', 'flash/error');
			}
		}
	}

	public function image() {

		$dir = 'img/cars/';
		$path = $dir . basename($_FILES['uploader']['name']);
		$this->request->data['Car']['image'] = $path;

		echo '<pre>';
		if (move_uploaded_file($_FILES['uploader']['tmp_name'], $dir)) {
		    echo "File is valid, and was successfully uploaded.\n";
		} else {
		    echo "Possible file upload attack!\n";
		}
		echo 'Here is some more debugging info:';
		print_r($_FILES);
		print "</pre>";

	}

	// users and admin access
	public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Request'));
	    }

	    $car = $this->Car->findById($id);
	    if (!$car) {
	        throw new NotFoundException(__('Invalid Request'));
	    }

	    if ($this->request->is(array('post', 'put'))) {

	    	$this->Car->id = $id;
	        
	        if ($this->Car->save($this->request->data)) {
	            $this->Session->setFlash(__('Your car has been updated.', 'flash/success'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your car details.', 'flash/error'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $car;
	    }
	}

	// users and admin access
	public function delete($id = null) {
		
		if (!$id) {
			throw new NotFoundException(__('Invalid Request'));
		}

		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Car->delete($id)) {
			$this->Session->setFlash('Your car has been removed.', 'flash/success');
			$this->redirect(array('action' => 'index'));
		}

		// // experimenting with SQL transactions
		// // http://book.cakephp.org/2.0/en/models/transactions.html
		// $dataSource = $this->getDataSource();
		// $dataSource->begin();
		// // Perform some tasks
		// if (/*all's well*/) {
		//     $dataSource->commit();
		// } else {
		//     $dataSource->rollback();
		// }
	}

	// public access
	public function search() {

		$query = $this->request->data['Car']['search'];
		

		if (!$query) {
			CarsController::index();
		} 
		else
		{
			$result1 = $this->Car->findAllByBrand($query);
			$result2 = $this->Car->findAllByModel($query);
			$result3 = $this->Car->findAllByLicensePlate($query);
			$result4 = $this->Car->findAllByTransmission($query);
			$result5 = $this->Car->findAllByEngineType($query);
			$result6 = $this->Car->findAllByEngineCapacity($query);
			$result7 = $this->Car->findAllByFormattedAddress($query);

			if ($result1 != null)
			{
				$this->set('cars', $result1);
			}
			elseif ($result2 != null)
			{
				$this->set('cars', $result2);
			}
			elseif ($result3 != null)
			{
				$this->set('cars', $result3);
			}
			elseif ($result4 != null)
			{
				$this->set('cars', $result4);
			}
			elseif ($result5 != null)
			{
				$this->set('cars', $result5);
			}
			elseif ($result6 != null)
			{
				$this->set('cars', $result6);
			}
			elseif ($result7 != null)
			{
				$this->set('cars', $result7);
			}

		}

			
	}
	public function map() {
		$this->set('cars', $this->Car->find('all'));
	}

	public function admin() {
		$this->set('cars_total', $this->Car->find('count'));
	}
}	
?>