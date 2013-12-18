<h2>Dashboard</h2>

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


	$(function () { 
	    $('#chart2').highcharts({
	        chart: {
	            type: 'column'
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