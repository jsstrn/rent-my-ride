<div class="row">
      	
      	<div class="col-md-12">      		
      		
      		<div class="widget stacked ">
      			
      			<div class="widget-header">
      				<i class="icon-user"></i>
      				<h2>View All Comments</h2>
  				</div> <!-- /widget-header -->

  				<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add a comment', array('action' => 'add')); ?></button>

  				<br /><br /><br />

				
				<div class="widget-content">
					
					
					
					<div class="tabbable">
						<ul class="nav nav-tabs">
					  		<li class="active">
					    	<a href="#receive" data-toggle="tab">Received Comments&nbsp;&nbsp;<span class="badge pull-right"><?php echo $receive; ?></span></a>
					  		</li>
					  		<li><a href="#sent" data-toggle="tab">Sent Comments&nbsp;&nbsp;<span class="badge pull-right"><?php echo $sent; ?></span></a></li>
						</ul>
					
						<br>
					
						<div class="tab-content">
							<div class="tab-pane active" id="receive">
							
							<table class='table table-striped'>
								<tr>
								<th>#</th>
								<th>Title</th>
								<th>Body</th>
								<th>Sender</th>
								<th>Actions</th>
								</tr>

								<?php $num = 1; ?>
								<?php foreach($n as $post): ?>
								<tr>
								<td><?php echo $num; ?></td>
								<td><?php echo $post['Comment']['title']; ?></td>
								<td><?php echo $post['Comment']['body']; ?></td>
								<td><?php echo $post['Comment']['fromsender']; ?></td>
								<td><?php echo $this->html->link('View', array('action'=>'view', $post['Comment']['id'])) . " | " . 
								$this->Html->link('Delete', array('action' => 'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); ?></td>
								</tr>
								<?php $num ++; ?>
								<?php endforeach; ?>
								<?php unset($post); ?>

							</table>	

						</div> 
							
						<div class="tab-pane" id="sent">
						
							<table class='table table-striped'>
								<tr>
								<th>#</th>
								<th>Title</th>
								<th>Body</th>
								<th>Sender</th>
								<th>Actions</th>
								</tr>

								<?php $num = 1; ?>
								<?php foreach($o as $post): ?>
								<tr>
								<td><?php echo $num; ?></td>
								<td><?php echo $post['Comment']['title']; ?></td>
								<td><?php echo $post['Comment']['body']; ?></td>
								<td><?php echo $post['Comment']['fromsender']; ?></td>
								<td><?php echo $this->html->link('View', array('action'=>'view', $post['Comment']['id'])) . " | " . 
								$this->Html->link('Delete', array('action' => 'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); ?></td>
								</tr>
								<?php $num ++; ?>
								<?php endforeach; ?>
								<?php unset($post); ?>

							</table>
							
						</div>
					  
					 </div>
					
				</div> <!-- /widget-content -->
					
			</div> <!-- /widget -->
      		
	    </div> <!-- /span8 -->
</div>


<?php /*<h2>View all comments</h2>
<p>This is a list comments</p>

<button class="btn btn-lg btn-default"><?php echo $this->Html->link('Add a comment', array('action' => 'add')); ?></button>

<br><br>

<table class='table table-striped'>
	<tr>
		<th>#</th>
		<th>Title</th>
		<th>Body</th>
		<th>Actions</th>
	</tr>

	<?php $num = 1; ?>
	<?php foreach($posts as $post): ?>
	<tr>
		<td><?php echo $num; ?></td>
		<td><?php echo $post['Comment']['title']; ?></td>
		<td><?php echo $post['Comment']['body']; ?></td>
		<td><?php echo $this->html->link('View', array('action'=>'view', $post['Comment']['id'])) . " | " . 
			$this->html->link('Edit', array('action'=>'edit', $post['Comment']['id'])) . " | " . 
			$this->Html->link('Delete', array('action' => 'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); ?></td>
	</tr>
	<?php $num ++; ?>
	<?php endforeach; ?>
	<?php unset($post); ?>

	
</table>*/ ?>
