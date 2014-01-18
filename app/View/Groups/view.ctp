
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">
				<?php if ($current_user['group_id'] == 1): ?>			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id']), array('class' => '')); ?> </li>
				<?php endif; ?>
				<?php if ($current_user['group_id'] == 1): ?>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
				<?php endif; ?>
				
		<li class="list-group-item"><?php echo $this->Html->link(__('List Groups'), array('action' => 'index'), array('class' => '')); ?> </li>
				<?php if ($current_user['group_id'] == 1): ?>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Group'), array('action' => 'add'), array('class' => '')); ?> </li>
				<?php endif; ?>

			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="groups view">

			<h2><?php  echo __('Group'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
