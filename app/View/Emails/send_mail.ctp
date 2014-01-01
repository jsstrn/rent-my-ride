<html>
<body>

<?php

echo $this->Session->flash();

echo $this->Form->create();
echo $this->Form->input('from_email', $receiver);
echo $this->Form->input('from_name', $name);
echo $this->Form->input('from_pass', $pass);

echo $this->Form->input('to_email');
echo $this->Form->input('subject');
echo $this->Form->input('message', array('type' => 'text'));

echo $this->Form->end('Send');

echo $this->Form->create();
echo $this->Form->input('username'); 
echo $this->Form->input('password'); 
echo $this->Form->input('approved');
echo $this->Form->input('quote');

//text
//password
//day, month, year, hour, minute,
//meridian
//textarea


?>

</body>
</html>


($receiver = null, $name = null, $pass = null) {
        $confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot . "users/login/";
        $message = 'Hi,' . $name . ', Your Password is: ' . $pass;
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from('headcrush@gmail.com');
        $email->to($receiver);
        $email->subject('Mail Confirmation');
        $email->send($message . " " . $confirmation_link);