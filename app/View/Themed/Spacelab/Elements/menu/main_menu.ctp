<nav class="navbar navbar-inverse" role="navigation">

	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <i class="icon-cog"></i>
    </button>
    <a class="navbar-brand" href="/">Rent My Ride</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">

		<li class="dropdown">
						
			<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-cog"></i>
				Home
				<b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu">
				<li><a href="<? echo $this->webroot . 'pages/started' ;?>">How it works</a></li>
				<li><a href="<? echo $this->webroot . 'pages/about' ;?>">About us</a></li>
				<li><a href="/rentmyride/pages/faq">FAQ</a></li>
				<li><a href="http://www.facebook.com/rentmyride.SG">Facebook page</a></li>
			</ul>
			
		</li>

		<?php if ($logged_in && $current_user['group_id'] == 1): ?>

		<li class="dropdown">
						
			<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-cog"></i>
				Admin
				<b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu">
				<li><a href="<? echo $this->webroot . '/cars' ;?>">Car Directory</a></li>
				<li><a href="/rentmyride/users">User Directory</a></li>
				<li><a href="/rentmyride/users/admin">Admin Dashboard</a></li>
				<li><a href="/rentmyride/events/all">Events Listing</a></li>
				<li><a href="/rentmyride/groups">Group Management</a></li>
			</ul>
			
		</li>

		<?php endif; ?>

		<?php if ($logged_in): ?>

		<li class="dropdown">
						
			<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-cog"></i>
				Cars
				<b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu">
				<li><a href="/rentmyride/cars/add">List your car</a></li>
				<li><a href="/rentmyride/cars/search">Search for cars</a></li>
				<li><a href="/rentmyride/events">Calendar</a></li>
				<li><a href="/rentmyride/cars/map">Map view</a></li>
				<li><a href="/rentmyride/pictures">Add car photos</a></li>
				<li><a href="/rentmyride/reviews/add">Review cars</a></li>
			</ul>
			
		</li>

		<?php endif; ?>

		<?php if ($logged_in): ?>

		<li class="dropdown">
						
			<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-cog"></i>
				Comments
				<b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu">
				<li><a href="/rentmyride/Comments/">View all comments</a></li>
				<li><a href="/rentmyride/Comments/add">Add a comment</a></li>
			</ul>
			
		</li>

		<?php endif; ?>

		<?php if (!$logged_in): ?>
		<li><?php echo $this->Html->link('Login | Signup', array('controller' => 'users', 'action' => 'login')); ?>
		</li>
		<?php endif; ?>

		<?php if ($logged_in): ?>

		<li class="dropdown">

			<a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-user"></i> 
					<?php echo $current_user['username']; ?>
				<b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu">
				<li><a href="/rentmyride/users/profile/<?php echo $current_user['id']; ?>">My profile</a></li>
				<li><a href="/rentmyride/groups/view/<?php echo $current_user['group_id']; ?>">My groups</a></li>
				<li><a href="/rentmyride/uploads">Upload new photo</a></li>
				<li><a href="/rentmyride/users/search">Search users</a></li>
				<li><a href="/rentmyride/comments/support">Report an issue</a></li>
				<li class="divider"></li>
				<li><a href="/rentmyride/users/logout">Logout</a></li>
			</ul>
			
		</li>
		<?php endif; ?>
    </ul>
    
     <form class="navbar-form navbar-left" role="search">
    	<?php /*<div class="form-group">
        	<input type="text" class="input-sm search-query" placeholder="Search">
        	<button type="submit" class="btn btn-primary">Search</button>
        </div>*/?>
    </form>
  </div><!-- /.navbar-collapse -->
</div> <!-- /.container -->
</nav>