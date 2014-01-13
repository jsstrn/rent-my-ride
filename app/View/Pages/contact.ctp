<h2>Contact Us</h2>

<?php
echo $this->Form->create('Contactform.Contactform');

echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'name')));
echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'email')));
echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'message')));
echo $this->Form->label('Contactform.Spamprotection', __d('contactform', 'spam protection').' - '.$calculation);
echo $this->Form->input('Contactform.Spamprotection', array('label' => false, 'autocomplete' => 'off'));

echo $this->Form->submit('Absenden', array('label' => __d('contactform', 'submit')));

echo $this->Form->end();

?>