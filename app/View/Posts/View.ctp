<h2> <?php echo $post['Post']['title']; ?> </h2>

<p> <?php echo $post['Post']['body']; ?> </p>

<p> <small>Created on: <?php echo $post['Post']['created']; ?> 

Last modified on: <?php echo $post['Post']['modified']; ?> </p>

</br>

<?php echo $this->html->link('Back', array('action'=>'index')). " | " . 
$this->html->link('Edit', array('action'=>'edit', $post['Post']['id'])). " | " . 
$this->html->link('Delete', array('action'=>'delete', $post['Post']['id']), NULL, 'Are you sure you want to delete this comment?'); 

echo $this->Like->like('post', $post_id);
echo $this->Like->dislike('post', $post_id);

?>