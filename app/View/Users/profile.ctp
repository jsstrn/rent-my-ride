<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Account :: Base Admin</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    
    <link href="./css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">
    
    <link href="./css/base-admin-3.css" rel="stylesheet">
    <link href="./css/base-admin-3-responsive.css" rel="stylesheet">

    <link href="./css/custom.css" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>


    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">
			
			<a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <i class="icon-reorder"></i>
		      
		    </a>

			<div class="collapse subnav-collapse">
				<ul class="mainnav">
				
					<li class="">
						<a href="./index.html">
							<i class="icon-home"></i>
							<span>Home</span>
						</a>	    				
					</li>
					
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-th"></i>
							<span>Components</span>
							<b class="caret"></b>
						</a>	    
					
						<ul class="dropdown-menu">
							<li><a href="./elements.html">Elements</a></li>
							<li><a href="./forms.html">Form Styles</a></li>
							<li><a href="./jqueryui.html">jQuery UI</a></li>
							<li><a href="./charts.html">Charts</a></li>
							<li><a href="./popups.html">Popups/Notifications</a></li>
						</ul> 				
					</li>
					
					<li class="dropdown active">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-copy"></i>
							<span>Sample Pages</span>
							<b class="caret"></b>
						</a>	    
					
						<ul class="dropdown-menu">
							<li><a href="./pricing.html">Pricing Plans</a></li>
							<li><a href="./faq.html">FAQ's</a></li>
							<li><a href="./gallery.html">Gallery</a></li>
							<li><a href="./reports.html">Reports</a></li>
							<li><a href="./account.html">User Account</a></li>
						</ul> 				
					</li>
					
					<li class="dropdown">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-external-link"></i>
							<span>Extra Pages</span>
							<b class="caret"></b>
						</a>	
					
						<ul class="dropdown-menu">
							<li><a href="./login.html">Login</a></li>
							<li><a href="./signup.html">Signup</a></li>
							<li><a href="./error.html">Error</a></li>
							<li class="dropdown-submenu">
							    <a tabindex="-1" href="#">More options</a>
							    <ul class="dropdown-menu">
							      <li><a tabindex="-1" href="#">Second level</a></li>

							      <li><a href="#">Second level</a></li>
							      <li><a href="#">Second level</a></li>
							    </ul>
							  </li>
						</ul>    				
					</li>
				
				</ul>
			</div> <!-- /.subnav-collapse -->

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    

<div class="main">

    <div class="container">

      <div class="row">
      	
      	<div class="col-md-8">      		
      		
      		<div class="widget stacked ">
      			
      			<div class="widget-header">
      				<i class="icon-user"></i>
      				<h3>Your Account</h3>
  				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					
					
					<div class="tabbable">
					<ul class="nav nav-tabs">
					  <li class="active">
					    <a href="#profile" data-toggle="tab">Profile</a>
					  </li>
					  <li><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>
					
					<br>
					
				  <?php 
				  		echo $this->Form->create('User', array('type' => 'post'));
				  		echo $this->Form->input('id', array('type' => 'hidden'));
						echo $this->Form->input('username', array('required'=>'false', 'disabled' => 'true', 'class' => 'form-control')); ?>
						<p> Your username is for logging in and cannot be changed. </p>
						<?php 
						//echo $this->Form->input('password', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('name', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('email', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('mobile', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('address', array('required'=>'false', 'class' => 'form-control'));
						echo $this->Form->input('postal_code', array('required'=>'false', 'class' => 'form-control'));
						echo '<div class="col-md-2">';
						echo $this->Form->submit('Update', array('class' => "btn btn-primary") );
		  				echo '</div>';
		  				?>


						<div class="tab-content">
							<div class="tab-pane active" id="profile">
							<form id="edit-profile" class="form-horizontal col-md-8">
								<fieldset>
									
									<div class="form-group">											
										<label for="username" class="col-md-4">Username</label>
										<div class="col-md-8">
											<?php echo h($user['User']['username']) ?>
											
											<p class="help-block">Your username is for logging in and cannot be changed.</p>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									
									<div class="form-group">											
										<label for="fullname" class="col-md-4">Full Name</label>
										<div class="col-md-8">
											<?php echo h($user['User']['name']) ?>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									
									<div class="form-group">											
										<label class="col-md-4" for="email">Email Address</label>
										<div class="col-md-8">
											<?php echo h($user['User']['email']) ?>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									
									<div class="form-group">											
										<label class="col-md-4" for="mobile">Mobile</label>
										<div class="col-md-8">
											<?php echo h($user['User']['mobile']) ?>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->


									<div class="form-group">											
										<label class="col-md-4" for="license">Mobile</label>
										<div class="col-md-8">
											<?php echo h($user['User']['license']) ?>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->


									<hr /><br />
									
									<div class="form-group">											
										<label class="col-md-4" for="password1">Password</label>
										<div class="col-md-8">
											<input type="password" class="form-control" id="password1" value="password">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									
									<div class="form-group">											
										<label class="col-md-4" for="password2">Confirm</label>
										<div class="col-md-8">
											<input type="password" class="form-control" id="password2" value="password">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									
										
										<br />
									
										
									<div class="form-group">

										<div class="col-md-offset-4 col-md-8">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn btn-default">Cancel</button>
										</div>
									</div> <!-- /form-actions -->
								</fieldset>
							</form>
							</div>
							
							<div class="tab-pane" id="settings">
								<form id="edit-profile2" class="form-horizontal col-md-8">
									<fieldset>
										
										
										<div class="form-group">
											<label class="col-md-4" for="accounttype">Account Type</label>
											<div class="col-md-8">
												<div class="radio">
													<label>
														<input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
														POP3
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="accounttype" value="option2">
														IMAP
													</label>
												</div>

											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4" for="accountusername">Account Username</label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="accountusername" value="rod.howard@example.com">
												<p class="help-block">Leave blank to use your profile email address.</p>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4" for="emailserver">Email Server</label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="emailserver" value="mail.example.com">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-4" for="accountpassword">Password</label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="accountpassword" value="password">
											</div>
										</div>
										
																					
										
										
										<div class="form-group">
											<label class="col-md-4" for="accountadvanced">Advanced Settings</label>

											<div class="col-md-8">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="accountadvanced" value="option1" checked="checked" id="accountadvanced">
														User encrypted connection when accessing this server
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" name="accounttype" value="option2">
														Download all message on connection
													</label>
												</div>
											</div>
										</div>

										
										<div class="form-group">
											<div class="col-md-offset-4 col-md-8">
												<button type="submit" class="btn btn-primary">Save</button> <button class="btn btn-default">Cancel</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
							
						</div>
					  
					  
					</div>
					
					
					
					
					
				</div> <!-- /widget-content -->
					
			</div> <!-- /widget -->
      		
	    </div> <!-- /span8 -->
      	
      	</br>
      	<div class="col-md-4">

      		<div class="well">

      			<h4>Extra Info</h4>

				<p>This is your account page...</p>
					
					
				<p> To insert additional information here...or maybe user picture?</p>
				<img class="featurette-image img-responsive" src="http://www.placehold.it/500" alt="Generic placeholder image">
      		</div>
								
	      </div> <!-- /span4 -->
      	
      </div> <!-- /row -->

    </div> <!-- /container -->
    
</div> <!-- /main -->


    


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/libs/jquery-1.9.1.min.js"></script>
<script src="./js/libs/jquery-ui-1.10.0.custom.min.js"></script>
<script src="./js/libs/bootstrap.min.js"></script>

<script src="./js/Application.js"></script>


  </body>
</html>
