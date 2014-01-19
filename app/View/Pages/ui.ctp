<h1>UI Design Mockups</h1>

<h2>Images</h2>

<?php $src = $this->webroot . 'img/cars/default.png' ; ?>

<img src="<?php echo $src ; ?>">

<br><br><hr><br>

<h2>Button with icon</h2>

<button type="button" class="btn btn-default btn-lg">
  <i class="glyphicon glyphicon-star"></i> Star
</button>

<br><br><hr><br>

<h2>Dashboard</h2>

<div class="row text-center">
	<div class="col-md-3">
		<h1>166</h1>
		<p>Total number of users</p>
	</div><!-- .col -->
	<div class="col-md-3">
		<h1>82</h1>
		<p>Total number of cars</p>
	</div><!-- .col -->
	<div class="col-md-3">
		<h1>126</h1>
		<p>Total number of bookings</p>
	</div><!-- .col -->
	<div class="col-md-3">
		<h1>327</h1>
		<p>Total number of messages</p>
	</div><!-- .col -->
</div><!-- .row -->

<br><br><hr><br>

<h2>Buttons with weblink</h2>

<h3>Example 1</h3>

<?php echo $this->Html->link('Click me', 'cars/map', array('class' => 'btn btn-warning')); ?>

<h3>Example 2</h3>
<button class="btn btn-info" onclick="window.location.href='<?php echo Router::url(array('controller'=>'cars', 'action'=>'view'))?>'">Click me</button>

<h3>Example 3</h3>
<input type="button" class="btn btn-primary" value="Click me" onclick="location.href='http://www.google.com';">
<h3>Example 4</h3>
<button class="btn btn-success" onclick="location.href='http://www.google.com';">Click me</button>

<br><br><hr><br>

<h2>Modal</h2>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Confirm Booking
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body">
      	<p>Are you sure you want to proceed with the booking?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Proceed</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<br><br><hr><br>

<h2>Booking System</h2>

<script>
$(function() {
  $( ".datepicker" ).datepicker({
  	firstDay: 1,
  	dateFormat: 'dd/mm/yy',
  	minDate: 0,
  	maxDate: '+3m',
  });
});
</script>

<div class="row">
	<div class="col-md-7">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Place your booking</h3>
		  </div>
		  <div class="panel-body">
		  	<form class="form-horizontal" role="form">
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">Start Date</label>
		  	    <div class="col-sm-10">
		  	      <input type="date" class="form-control">
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">Start Time</label>
		  	    <div class="col-sm-10">
		  	      <input type="time" class="form-control">
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">End Date</label>
		  	    <div class="col-sm-10">
		  	      <input type="date" class="form-control">
		  	    </div>
		  	  </div>
		  	  <div class="form-group">
		  	    <label class="col-sm-2 control-label">End Time</label>
		  	    <div class="col-sm-10">
		  	      <input type="time" class="form-control">
		  	    </div>
		  	  </div>
		  	  <hr>
		  	  <div class="form-group">
		  	    <div class="col-sm-10 col-sm-offset-2">
		  	      <button type="submit" class="btn btn-default">Place Booking</button>
		  	    </div>
		  	  </div>
		  	</form>

		  </div><!-- #panel-body -->
		</div><!-- #panel-default -->
	</div><!-- #col -->
</div><!-- #row -->

<br><br><hr><br>

<h2>User Profile</h2>
<div class="alert alert-danger">
	<p><span class="label label-danger">IMPORTANT</span> Users should only be allowed to see their own profile!
	Redirect users after they register to their profile page (rentmyride/users/profile).</p>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Profile</h3>
			</div>
			<div class="panel-body">
				<br>
				<table class="table table-hover">
					<tr>
						<th>Name</th>
						<td>Jesstern Rays</td>
					</tr>
					<tr>
						<th>License</th>
						<td>123456A</td>
					</tr>
					<tr>
						<th>Address</th>
						<td>9 Bishan Street 22</td>
					</tr>
				</table>
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-default pull-right">Edit Profile</button>
					</div>
				</div>
			</div><!-- #panel-body -->
		</div><!-- #panel-default -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Messages <span class="badge pull-right">3</span></h3>
			</div>
			<div class="panel-body">
				<br>
				<table class="table table-hover">
					<tr>
						<th>From</th>
						<th>Message snippet</th>
						<th></th>
					</tr>
					<tr>
						<td>James Watt</td>
						<td>Lorem ipsum dolor sit amet...</td>
						<td><button class="btn btn-default pull-right">Read</button></td>
					</tr>
					<tr>
						<td>Tim Roberts</td>
						<td>Praesent et diam eget libero...</td>
						<td><button class="btn btn-default pull-right">Read</button></td>
					</tr>
					<tr>
						<td>Sam Ali</td>
						<td>Donec viverra mi quis quam...</td>
						<td><button class="btn btn-default pull-right">Read</button></td>
					</tr>
				</table>
			</div><!-- #panel-body -->
		</div><!-- #panel-default -->
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">You have 3 cars</h3>
		  </div>
		  <div class="panel-body">
		   	<div class="col-md-3">
		   		<img src="holder.js/150x150" class="img-thumbnail center-block">
		   	</div>
			<div class="col-md-9">
				<table class="table table-hover">
					<tr>
						<td><strong>Brand</strong></td>
						<td>BMW</td>
						<td><strong>Model</strong></td>
						<td>7 Series</td>
					</tr>
					<tr>
						<td><strong>Model</strong></td>
						<td>Text</td>
						<td><strong>Text</strong></td>
						<td>Text</td>
					</tr>
					<tr>
						<td><strong>Transmission</strong></td>
						<td>Automatic</td>
						<td><strong>Capacity</strong></td>
						<td>2000cc</td>
					</tr>
					<tr>
						<td><strong>Text</strong></td>
						<td>Text</td>
						<td><strong>Price</strong></td>
						<td>$100/hr</td>
					</tr>
				</table>
				<div class="pull-right">
					<button class="btn btn-default">View Details</button>
				</div>
			</div>
		  </div>
		</div>
	</div><!-- #col -->
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Display Picture</h3>
			</div>
			<div class="panel-body">
				<img class="center-block" data-src="holder.js/300x300/">
			</div><!-- #panel-body -->
		</div><!-- #panel-default -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Map</h3>
			</div>
			<div class="panel-body">
				<img class="center-block" data-src="holder.js/300x300">
			</div><!-- #panel-body -->
		</div><!-- #panel-default -->
	</div><!-- #col -->
</div>

<br><br><hr><br>

<h2>Car snippet</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Car #1</h3>
  </div>
  <div class="panel-body">
   	<div class="col-md-3">
   		<img src="holder.js/200x200" class="img-thumbnail center-block">
   	</div>
	<div class="col-md-9">
		<table class="table table-hover">
			<tr>
				<td><strong>Brand</strong></td>
				<td>BMW</td>
				<td><strong>Model</strong></td>
				<td>7 Series</td>
			</tr>
			<tr>
				<td><strong>Model</strong></td>
				<td>Text</td>
				<td><strong>Text</strong></td>
				<td>Text</td>
			</tr>
			<tr>
				<td><strong>Transmission</strong></td>
				<td>Automatic</td>
				<td><strong>Capacity</strong></td>
				<td>2000cc</td>
			</tr>
			<tr>
				<td><strong>Text</strong></td>
				<td>Text</td>
				<td><strong>Price</strong></td>
				<td>$100/hr</td>
			</tr>
		</table>
		<div class="pull-right">
			<button class="btn btn-default">View Details</button>
			<button class="btn btn-primary">Book Now!</button>
		</div>
	</div>
  </div>
</div>

<br><br><hr><br>

<h2>Calendar</h2>

 <script type="text/javascript">
 $(document).ready(function() {

     // page is now ready, initialize the calendar...

     var date = new Date();
     var d = date.getDate();
     var m = date.getMonth();
     var y = date.getFullYear();
     var h = date.getHours();

     $('#calendar').fullCalendar({
         // put your options and callbacks here
         header: {
         	left: 'prev,next today',
         	center: 'title',
         	right: 'month,agendaWeek,agendaDay'
         },
         firstDay: 1,
         minDate: 0,
         editable: true,
         selectable: true,
         events: [
         {
         	id: 123,
         	title: 'This is today!',
         	start: new Date(y,m,d,h),
         	end: new Date(y,m,d,h+2),
         	allDay: false
         }]
     })

 });
 </script>

 <div id="calendar"></div>