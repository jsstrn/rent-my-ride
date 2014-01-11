<h2>Universal Search</h2><hr>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="text-center">
		  		<input class="form-control" placeholder="Universal Search Bar" autofocus>
		  	</div>
		  </div>
		</div><!-- .panel -->
	</div>
</div>

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
		    <h3 class="panel-title text-center">Total Messages</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-center">
		  		<h1><h1><?php echo $messages_total; ?></h1></h1>
		  	</div>
		  </div>
		</div><!-- .panel -->
	</div><!-- .col -->
</div>

<h2>Charts</h2>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
    <hr>
    <div class="panel panel-default" id="chart1" style="width:800px; height:400px; margin:auto;"></div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
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
	            type: 'pie',
	        },
	        plotOptions: {
	            pie: {
	                dataLabels: {
	                    enabled: true,
	                    distance: -50,
	                    style: {
	                        fontWeight: 'bold',
	                        color: 'white',
	                        textShadow: '0px 1px 2px black'
	                    }
	                },
	                innerSize: '50%',
	                startAngle: -90,
	                endAngle: 90,
	                center: ['50%', '75%']
	            }
	        },
	        title: {
	            text: 'Total Number of Cars'
	        },
	        credits: {
	            enabled: false
	        },
	        xAxis: {
	            categories: ['BMW', 'Mercedes Benz', 'Audi']
	        },
	        yAxis: {
	            title: {
	                text: 'Number of cars'
	            }
	        },
	        series: [{
	            name: 'Men',
	            data: [1, 8, 4]
	        }, {
	            name: 'Women',
	            data: [5, 7, 3]
	        }]
	    });
	});

</script>