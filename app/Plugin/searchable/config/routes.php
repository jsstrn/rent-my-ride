<?php
Router::connect('/search/:type/:term/*', array(
  'Plugin' => 'searchable',
  'controller' => 'SearchIndexes',
  'action' => 'index',
));
?>