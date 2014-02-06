<!DOCTYPE html>
<html>
<head>
<style>
p.serif{font-family:"Times New Roman",Times,serif;}
p.sansserif{font-family:Arial,Helvetica,sans-serif;}
p.oblique {font-style:oblique;}
</style>
</head>

<body>

<div class="row">
<div class="col-md-4 col-sm-6">
<img class="img-circle img-responsive"
<?php
if ($current_user['username']!= $post['Comment']['fromsender']) {
	echo 'src="' . $this->webroot . 'img/users/default.png"';
} else {
	echo 'src="' . $this->webroot . $current_user['Upload']['path'] . '"';
}
?>>

</div>

<div class="col-md-8 col-sm-6">

<h1> <p class="oblique"><?php echo $post['Comment']['fromsender']; ?> says... </p></h1> </br>

<h3> <p class="serif">"<?php echo $post['Comment']['title']; ?>"</p></h3> </br>

<div>
<h4> <p class="serif"><?php echo $post['Comment']['body']; ?></p></h4>
</div>
	

</br>
</br>
</br>

<p><small>>>>Created on: <?php echo $post['Comment']['created']; ?><<<</small></br>

<small>>>>Last modified on: <?php echo $post['Comment']['modified']; ?><<<</small></p>


<?php echo $this->html->link('Back', array('action'=>'index')). " | " .  
$this->html->link('Delete', array('action'=>'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); ?>