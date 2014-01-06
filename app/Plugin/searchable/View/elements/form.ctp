<?php
echo $this->Form->create('SearchIndex', array(
  'url' => array(
    'Plugin' => 'Searchable',
    'Controller' => 'SearchIndices',
    'action' => 'index'
  )
));
echo $this->Form->input('term', array('label' => 'Search', 'id' => 'SearchSearch'));
echo $this->Form->end();
?>
