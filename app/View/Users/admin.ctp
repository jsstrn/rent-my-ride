<h2>Universal Search</h2><hr>

<div class="row">
	<div class="col-md-12">
		  
		  	<div class="text-center">
		  		<?php echo $this->element('Searchable.form'); ?>
		  		<?php //<input class="form-control" placeholder="Universal Search Bar" autofocus> ?>
		  	</div>
		  
	</div>
</div>
<br />

<h2>Statistics</h2><hr>

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title text-center">Total Users</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-center">
		  		<h1><?php echo $users_total; ?></h1>
		  	</div>
		  </div>
		</div><!-- .panel -->
	</div><!-- .col -->
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title text-center">Total Cars</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-center">
		  		<h1><?php echo $cars_total; ?></h1>
		  	</div>
		  </div>
		</div><!-- .panel -->
	</div><!-- .col -->
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title text-center">Total Bookings</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-center">
		  		<h1><?php echo $events_total; ?></h1>
		  	</div>
		  </div>
		</div><!-- .panel -->
	</div><!-- .col -->
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title text-center">Total Comments</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-center">
		  		<h1><h1><?php echo $comments_total; ?></h1></h1>
		  	</div>
		  </div>
		</div><!-- .panel -->
	</div><!-- .col -->
</div>

<h2>Reports</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Number of cars</h3>
  </div>
  <div class="panel-body">
    This is the number of cars (sorted by brand) in our database.
    <hr>
    <div class="panel panel-default" id="chart1" style="width:800px; height:400px; margin:auto;"></div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Trendline</h3>
  </div>
  <div class="panel-body">
    The trendline shows which months are popular with our renters and which brands are most popular. 
    <hr>
    <div class="panel panel-default" id="chart2" style="width:800px; height:400px; margin:auto;"></div>
  </div>
</div>

<script type="text/javascript">

	$(function () { 
	    $('#chart1').highcharts({
	        chart: {
	            type: 'bar'
	        },
	        title: {
	            text: 'Total Number of Cars'
	        },
	        credits: {
	            enabled: false
	        },
	        xAxis: {
	            categories: ['Nissan', 'Toyota', 'Honda']
	        },
	        yAxis: {
	            title: {
	                text: 'Number of cars'
	            }
	        },
	        series: [{
	            name: 'Drivers',
	            data: 
	            [
	           		<?php echo $nissan; ?>,
	           		<?php echo $toyota; ?>,
	           		<?php echo $honda; ?>,
	            ]
	        }]
	    });
	});

	$(function () { 
	    $('#chart2').highcharts({
	        chart: {
	            type: 'spline',
	        },
	        plotOptions: {
	        	spline: {
	        	    marker: {
	        	        radius: 4,
	        	        lineColor: '#666666',
	        	        lineWidth: 1
	        	    }
	        	}
	        },
	        title: {
	            text: 'Total Number of Cars'
	        },
	        credits: {
	            enabled: false
	        },
	        xAxis: {
	            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	        },
	        yAxis: {
	            title: {
	                text: 'Bookings'
	            }
	        },
	        series: [{
	            name: 'Nissan',
	            data: [3, 2, 1, 2, 4, 5, 3, 4, 9, 3, 6, 8]
	        }, {
	            name: 'Toyota',
	            data: [5, 4, 3, 8, 8, 10, 8, 5, 5, 10, 11, 12]
	        }, {
	            name: 'Honda',
	            data: [3, 4, 4, 9, 9, 12, 8, 7, 7, 15, 12, 15]
	        }]
	    });
	});

</script>