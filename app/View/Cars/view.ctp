<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5AkVMzStH2F21VpFIMfg3tXxcFOsHUxg&sensor=false">
</script>

<div class="page-header">
	<h1>Car Profile</h1>
</div>
<div class='row'>
	<div class="page-header">
		<h2>Car specifications</h2>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<table class='table'>
					<tr>
						<td><strong>Brand</strong></td>
						<td><?php echo h($car['Car']['brand']) ?></td>
						<td><strong>Model</strong></td>
						<td><?php echo h($car['Car']['model']) ?></td>
					</tr>
					<tr>
						<td><strong>Transmission</strong></td>
						<td><?php echo h($car['Car']['transmission']) ?></td>
						<td><strong>Engine Type</strong></td>
						<td><?php echo h($car['Car']['engine_type']) ?></td>
					</tr>
					<tr>
						<td><strong>Engine Capacity</strong></td>
						<td><?php echo h($car['Car']['engine_capacity']) ?></td>
						<td><strong>Rates</strong></td>
						<td><?php echo '$'.h($car['Car']['rate']).'.00' ?></td>
					</tr>
				</table>
				<div class="well">
					<center><h4><strong>Ratings:</strong></h4></center>
					<?php foreach ($review as $reviews): ?>
					<?php $total_ratings = $total_ratings + $reviews['Review']['ratings']; ?>
				<?php endforeach; ?>
				<?php if (!$average) {
					echo '<center><h4>No Ratings Available</center></h4>';
				} else {
					echo'<center><h3><strong>' . $total_ratings / $average . ' Stars' . '</center></h3></strong>';
				} 
				?>
			</div>
			<div class="pull-right">
				<?php echo $this->Html->link('Submit Review', array(
					'controller' => 'reviews',
					'action' => 'add',
					$car['Car']['id']),
					array('class' => 'btn btn-primary'))
				;?>
				<?php echo $this->Html->link('Book Now', array(
					'controller' => 'events',
					'action' => 'add',
					$car['Car']['id']),
					array('class' => 'btn btn-success'))
				;?>
			</div>
		</div>
		<?php if ($current_user['group_id'] == 1)
		{
			echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $this->html->link('Back', array('action'=>'index')). " | " . 
			$this->html->link('Edit', array('action'=>'edit', $car['Car']['id'])). " | " . 
			$this->html->link('Delete', array('action'=>'delete', $car['Car']['id']), NULL, 'Are you sure you want to delete this user?'); 
		}
		else
		{
			echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $this->html->link('Back', array('action'=>'search'));
		}
		?>
		<br />
		<br />
	</div>
</div>

<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-body">
			<img class="img-responsive center-block"
			<?php
			if (!$car['Picture']['path']) {
				echo 'data-src="holder.js/300x300"';
			} else {
				echo 'src="' . $this->webroot . $car['Picture']['path'] . '"';
			}
			?>>
		</div>
	</div>
</div>
</div>

<div class="row">
	<div class="page-header">
		<h2>Location map</h2>
	</div>
	<div class="col-md-12">
		<div id="map-canvas" style="width: 1100px; height: 400px; margin: 0 auto;"></div>
	</div>
</div>

<div class="row">
	<div class="page-header">
		<h2>Owner</h2>
	</div>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-3 center-block">
					<img class="img-circle img-responsive"
					<?php
					if (!$image['Upload']['path']) {
						echo 'data-src="holder.js/300x300"';
					} else {
						echo 'src="' . $this->webroot . $image['Upload']['path'] . '"';
					}
					?>>
				</div>
				<div class="col-md-9">
					<style>
					p.serif{font-family:"Times New Roman",Times,serif;}
					p.sansserif{font-family:Arial,Helvetica,sans-serif;}
					p.oblique {font-style:oblique;}
					</style>
					<h2><p class="serif">Hi, I'm <?php echo $car['User']['name'];?> and this is my ride!</p></h2> </br>
					<h4><p class="sansserif">Feel free to rent my ride for only $<?php echo $car['Car']['rate']; ?> per hour!</p></h4></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="page-header">
			<h2>Calendar</h2>
		</div>
		<div class="col-md-12">
			<div id="calendar"></div>
		</div>
	</div>

	<div class="row">
		<div class="page-header">
			<h2>Reviews</h2>
		</div>
		<?php foreach ($review as $reviews): ?>
		<div class='row'>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div><strong><?php echo h($reviews['Review']['title']) ?></strong><div class="pull-right"><strong>Ratings: <?php echo h($reviews['Review']['ratings']) . ' Stars' ?></strong></div></div>
					</div>
					<div class="panel-body">
						<p><?php echo h($reviews['Review']['body']) ?></p>
						<hr></hr>
						<p><small>Commented By: <?php echo h($reviews['Review']['fromsender'])?></small>&nbsp;&nbsp;
							<small>Created On: <?php echo h($reviews['Review']['created'])?></small></p>

						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<script type="text/javascript">

	var content = 	'<h5>Location: </h5>' + 
	'<p><?php echo $car['Car']['formatted_address']; ?></p>';

	function initialize() {

		var position = new google.maps.LatLng(1.3024213, 103.839922);
		var image = "<?php echo $this->webroot ;?>img/map/pin-red.png";

		var mapOptions = {
			'center' : new google.maps.LatLng(<?php echo $car['Car']['lat']; ?>, <?php echo $car['Car']['lng']; ?>),
			'zoom' : 12,
			'disableDefaultUI': true,
			'scrollwheel': false,
			'navigationControl': false,
			'mapTypeControl': false,
			'scaleControl': false,
			'draggable': false,
		};

		var map = new google.maps.Map(document.getElementById("map-canvas"),
			mapOptions);

		var marker = new google.maps.Marker({
			'position' : new google.maps.LatLng(<?php echo $car['Car']['lat']; ?>, <?php echo $car['Car']['lng']; ?>),
			'map' : map,
			'icon' : image,
			'animation' : google.maps.Animation.DROP
		});

		var infowindow = new google.maps.InfoWindow({
			content: content,
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<script type="text/javascript">

	var arrayEvents = <?php echo json_encode($events); ?>;

	$(document).ready(function calc() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'agendaWeek',
			firstDay: 1,
			editable: false,
			selectable: true,
			eventColor: '#378006',
			events: [
			{
				title: 'Today',
				start: new Date(),
				date: new Date(),
				allDay: false,
			}
			]
		})
	});
	</script>
