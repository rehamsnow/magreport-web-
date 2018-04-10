<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - Pie Chart</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<canvas id="mycanvas" width="256" height="256">
		<script>
			$(document).ready(function(){
				var ctx = $("#mycanvas").get(0).getContext("2d");
                var Chart = require('Chart.js')
				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
		</script>
	</body>
</html>