
<?php //echo $this->Session->flash(); ?>
<!-- for theme -->

<?php echo $this->Html->css('signin'); ?>

<div class="container">
<form class="form-signin" role="form" action="<?php echo $this->webroot . '/users/login' ;?>" id="UserLoginForm" method="post" accept-charset="utf-8">
	<h2 class="form-signin-heading">Please login</h2>
	<input type="text" id="UserUsername" name="data[User][username]" class="form-control" placeholder="Username" required autofocus>
	<input type="password" id="userPassword" name="data[User][password]" class="form-control" placeholder="Password" required>
	<!--
	<label class="checkbox">
	  <input type="checkbox" value="remember-me"> Remember me
	</label>
	-->
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	<a class="btn btn-lg btn-primary btn-block" href="register" role="button">No account? Sign up!</a></p>
</form>
</div>
