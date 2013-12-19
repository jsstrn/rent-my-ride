<h1>Date Picker</h1>

<script>
$(function() {
  $( ".datepicker" ).datepicker();
});
</script>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Select Your Dates</h3>
  </div>
  <div class="panel-body">
  	<div class="row">
  		<div class="col-md-6 text-center">
  			<h5>Start Date</h5>
  			<div class="datepicker"></div>
  			<p>You have selected:</p>
  		</div>
  		<div class="col-md-6 text-center">
  			<h5>End Date</h5>
  			<div class="datepicker"></div>
  			<p>You have selected:</p>
  		</div>
  	</div><!-- #row-->
  	<div class="row text-center">
  		<button class="btn btn-success btn-lg">Book Now</button>
  	</div>
  </div><!-- #panel-body -->
</div><!-- #panel-default -->

<br><br><hr><br>

<h1>User Profile</h1>
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

<h1>Car snippet</h1>

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

<h1>Calendar</h1>

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