<h2> <?php echo $post['Comment']['title']; ?> </h2>
<hr></hr>
<p> <?php echo $post['Comment']['body']; ?> </p>

<p> <small>Created on: <?php echo $post['Comment']['created']; ?> 

Last modified on: <?php echo $post['Comment']['modified']; ?> </p>

<?php echo $this->Like->like('post', $post['Comment']['id']);
      echo $this->Like->dislike('post', $post['Comment']['id']); ?>

</br>

<?php echo $this->html->link('Back', array('action'=>'index')). " | " .  
$this->html->link('Delete', array('action'=>'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); 

?>