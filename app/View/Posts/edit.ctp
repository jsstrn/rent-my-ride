<h2>Edit Comment</h2>

<?php
echo $this->Form->create('Post', array('action' => 'edit'));
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Edit Comment');
?>
<?php echo $this->html->link('Back', array('action'=>'index'));?>