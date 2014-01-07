<!--
This should be saved as comment.ctp, index.ctp, and view.ctp //Mhz noted, changes made//

They correspond to the PostsController functions:
comment.ctp must have a public function comment() written in PostsController, etc. 

 -->

<h2>
Comment
</h2>

<?php echo $this->Like->like('post', $post_id);
      echo $this->Like->dislike('post', $post_id);

?>
<p>Please feel free to comment!</p>