<h2>Dashboard (Testing)</h2>
<p>This is the dashboard testing site. You should see a chart here.</p>

<div id="chart1" style="width:800px; height:400px; margin:auto;"></div>

<div id="chart2" style="width:800px; height:400px; margin:auto;"></div>

<script type="text/javascript">

	$(function () { 
	    $('#chart1').highcharts({
	        chart: {
	            type: 'bar'
	        },
	        title: {
	            text: 'Total Number of Cars'
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
	            type: 'spline'
	        },
	        title: {
	            text: 'Total Number of Cars'
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