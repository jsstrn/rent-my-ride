<?php 
 echo $this->Comment->findLikedBy($this->Auth->user('id'));
?>