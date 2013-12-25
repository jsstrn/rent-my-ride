<nav class="navbar navbar-inverse" role="navigation">

	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./index.html">Rent My Ride</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li class="">						
			<a href="./signup.html">
				Create an Account
			</a>			
		</li>

		<li class="">
						
			<a href="#">
				<i class="icon-chevron-left"></i>&nbsp;&nbsp; 
				Back to Homepage
			</a>
			
		</li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div> <!-- /.container -->
</nav>



<div class="account-container stacked">
	
	<div class="content clearfix">
		
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		<form action="./index.html" method="post">
		
			<h1>Sign In</h1>	

			<?php echo $this->Session->flash('auth'); ?>
				<!-- for theme -->

				<div class="container">
				<form class="form-signin" role="form" action="/rentmyride/users/login" id="UserLoginForm" method="post" accept-charset="utf-8">
					<h2 class="form-signin-heading">Please login</h2>
					<input type="text" id="UserUsername" name="data[User][username]" class="form-control" placeholder="Username" required autofocus>
					<input type="password" id="userPassword" name="data[User][password]" class="form-control" placeholder="Password" required>
					<!--
					<label class="checkbox">
					  <input type="checkbox" value="remember-me"> Remember me
					</label>
					-->
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				</form>
				</div>	
			
			<!--<div class="login-fields">
				
				<p>Sign in using your registered account:</p>
				
				<div class="field">
					<label for="username">Username:</label>
					<input type="text" id="UserUsername" name="data[User][username]" placeholder="Username" class="form-control input-lg username-field" />
				</div> <!-- /field -->
				
				<!--<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="userPassword" name="data[User][password]" placeholder="Password" class="form-control input-lg password-field"/>
				</div> <!-- /password -->
				
			<!--</div> <!-- /login-fields -->
			
			<!--<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<button class="login-action btn btn-primary" type="submit">Sign In</button>-->
				
			</div> <!-- .actions -->
			
			<div class="login-social">
				<p>Sign in using social network:</p>
				
				<div class="twitter">
					<a href="#" class="btn_1">Login with Twitter</a>				
				</div>
				
				<div class="fb">
					<a href="#" class="btn_2">Login with Facebook</a>				
				</div>
			</div>
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Don't have an account? <a href="./signup.html">Sign Up</a><br/>
	Remind <a href="#">Password</a>
</div> <!-- /login-extra -->

</body>
</html>
