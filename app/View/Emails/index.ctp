<html>
<body>

<?php
echo $this->Session->flash();

echo $this->Form->create('Email');
echo $this->Form->input('from_email');
echo $this->Form->input('from_name');

echo $this->Form->input('to_email');
echo $this->Form->input('subject');
echo $this->Form->input('message', array('type' => 'text'));

echo $this->Form->end('Send');
?>

</body>
</html>