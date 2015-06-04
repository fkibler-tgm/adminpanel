<!DOCTYPE html>
<html lang="en">

<head>


    <title>Administrator Panel-Dienste</title>
	<!--<link href="{{ URL::asset('flot/examples.css') }}" rel="stylesheet" type="text/css">-->
	<script language="javascript" type="text/javascript" src="canvas/canvasjs.min.js"></script>
	<script language="javascript" type="text/javascript" src="canvas/jquery.canvasjs.min.js"></script>
	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
				theme: "theme2",//theme1
				title:{
					text: "Basic Column Chart - CanvasJS"              
				},
				animationEnabled: false,   // change to true
				data: [              
				{
					// Change type to "bar", "splineArea", "area", "spline", "pie",etc.
					type: "column",
					dataPoints: [
						{ label: "apple",  y: 100  },
						{ label: "orange", y: 15  },
						{ label: "banana", y: 25  },
						{ label: "mango",  y: 30  },
						{ label: "grape",  y: 28  }
					]
				}
				]
			});
			chart.render();
		}	
	</script>
</head>

<body>
        
<div id="chartContainer" style="height: 100%; width: 100%;"></div>
                            
</body>

</html>
