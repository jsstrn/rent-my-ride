<nav class="navbar navbar-inverse" role="navigation">

	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <i class="icon-cog"></i>
    </button>
    <a class="navbar-brand" href="/rentmyride">Rent My Ride</a>
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
				<li><a href="/rentmyride/pages/started">How To Get Started</a></li>
				<li><a href="/rentmyride/pages/about">About Us</a></li>
				<li><a href="/rentmyride/pages/contact">Contact Us</a></li>
				<li><a href="/rentmyride/pages/gallery">Gallery</a></li>
				<li><a href="/rentmyride/pages/faq">FAQ</a></li>
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
				<li><a href="/rentmyride/cars">View All Cars</a></li>
				<li><a href="/rentmyride/users">View All Users</a></li>
				<li><a href="/rentmyride/users/admin">Admin Panel</a></li>
				<li><a href="/rentmyride/groups">List All Groups</a></li>
				<li><a href="/rentmyride/uploads">List Uploads</a></li>
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
				<li><a href="/rentmyride/cars/search">Find A Cars</a></li>
				<li><a href="/rentmyride/events">Check Avaliability Of Cars</a></li>
				<li><a href="/rentmyride/cars/map">View All Cars Location</a></li>
				<li><a href="/rentmyride/reviews/add">Add Review To A Car</a></li>
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
				<li><a href="/rentmyride/Comments/">View All Comments</a></li>
				<li><a href="/rentmyride/Comments/add">Add A Comment</a></li>
			</ul>
			
		</li>

		<?php endif; ?>

		<?php if (!$logged_in): ?>
		<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
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
				<li><a href="/rentmyride/users/profile/<?php echo $current_user['id']; ?>">My Profile</a></li>
				<li><a href="/rentmyride/groups/view/<?php echo $current_user['group_id']; ?>">My Groups</a></li>
				<li><a href="/rentmyride/users/search">Search Users</a></li>
				<li><a href="/rentmyride/users/upload">Upload Photos</a></li>
				<li><a href="/rentmyride/comments/support">Report A Problem</a></li>
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