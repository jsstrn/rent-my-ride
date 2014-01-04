<?php
class EmailsController extends AppController {

public function index(){}

public function send_mail($receiver = null, $name = null, $pass = null) {
        $confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "users/login/";
        $message = 'Hi,' . $name . ', Your Password is: ' . $pass;
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from('rentmyride.nyp@gmail.com');
        $email->to('boi100886@gmail.com');
        $email->subject('Mail Confirmation');
        $email->send($message . " " . $confirmation_link);
    }


public function mail() {
		App::uses('CakeEmail', 'Network/Email');
		$email = new CakeEmail('gmail');
        //$email->from('Team RMR');
        $email->to('mohafizz@gmail.com');
       // $email->attachments(array(''));
        $email->subject('Account Confirmation');
        $email->viewVars(array('username' => 'Joe'));
        $email->template('welcome', 'default');
        $email->emailFormat('both');
        $email->send('Testing');
        die('E-mail sent!');

	}	
}
?>
