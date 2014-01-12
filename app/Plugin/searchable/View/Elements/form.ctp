<?php
echo $this->Form->create('SearchIndex', array(
  'url' => array(
    'plugin' => 'searchable',
    'controller' => 'search_indexes',
    'action' => 'index'
  )
));
echo $this->Form->input('term', array('label' => '<h3><b>Search</b></h3>', 'id' => 'SearchSearch', 'class' => 'form-control', 'placeholder' => 'Universal Search Bar', 'autofocus'));
echo $this->Form->end();
?>
