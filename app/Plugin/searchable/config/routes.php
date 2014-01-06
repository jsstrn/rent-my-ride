<?php
Router::connect('/search/:type/:term/*', array(
  'Plugin' => 'Searchable',
  'controller' => 'SearchIndices',
  'action' => 'index',
));
?>