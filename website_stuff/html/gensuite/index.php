<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/rpie.js"></script>
    <title>Gensuite Tracker | ABBindustrial</title>
  </head>


  <body>

	<div class="container">
		<div class="row mt-4 mb-3">
			<div class="col py-5 mt-2">
				<p class="h1 text-danger">ABB | Gensuite</br>Task Tracker</p>
			</div>

			<div class="col-2 mt-5 text-center">
				<p class="h1">?10?</p>
				<p>Days Left to Complete</p>
			</div>

			<div class="col">
				<div class="row" style="width: 100% height:100%">
					<div class="col">
					<!--spacing-->
					</div>

					<div class="col">
					<canvas id="myCanvas" width="200" height="200"></canvas>
					</div>
					<div class="col">
					<!--spacing-->
					</div>
				</div>

				<div class="row mt-2">
					<div class="col">
						<button type="button" class="btn btn-warning btn-sm btn-block">Not Started</button>
					</div>
					<div class="col">
						<button type="button" class="btn btn-danger btn-sm btn-block">Late</button>
					</div>
					<div class="col">
						<button type="button" class="btn btn-success btn-sm btn-block">Complete</button>
					</div>
				</div>
			</div>
		</div>
</div>
		
		<div class="row">
			<div class="col-sm text-center border bg-secondary">
				<div class="text-center text-white">Tasks To Be Completed This Month</div>
			</div>
		</div>
		
		<div class="row mt-3 ">
			<div class="col">
				<!--spacing-->
			</div>
			<div class="col-10 ">
				<?php
					echo "<div class='row border'>
						<div class='col border'>
							<p><small><strong>Task Date</strong></small></p>
							<p>Date</p>
						</div>
						<div class='col border'>
							<p><small><strong>Task Name</strong></small></p>
							<p>NameOFTask</p>
						</div>
						<div class='col border'>
							<p><small><strong>Responsible Person</strong></small></p>
							<p>PersonResponsible</p>
						</div>
						<div class='col border'>
							<p><small><strong>Responsible CC</strong></small></p>
							<p>NameOfPerson</p>
						</div>
					</div>";
				?>
			</div>

			<div class="col">
				<!--spacing-->
			</div>
		</div>



			</div>
		</div>
	</div>

  </body>
  <script>

		var obj = {
			pieId: 'myPieCanvas',
			values: [40, 30, 30],
			colors: ['#4CAF50', '#cc3300', '#f7b80a'],
			animation: true, // Takes boolean value & default behavious is false
			animationSpeed: .1, // Time in miliisecond & default animation speed is 20ms
			fillTextData: true, // Takes boolean value & text is not generate by default
			fillTextColor: '#fff', // For Text colour & default colour is #fff (White)
			fillTextAlign: 1.70, // for alignment of inner text position i.e. higher values gives closer view to center & default text alignment is 1.85 i.e closer to center
			fillTextPosition: 'inner', // 'horizontal' or 'vertical' or 'inner' & default text position is 'horizontal' position i.e. outside the canvas
			doughnutHoleSize: 0, // Percentage of doughnut size within the canvas & default doughnut size is null
			doughnutHoleColor: '#fff', // For doughnut colour & default colour is #fff (White)
			offset: 0, // Offeset between two segments & default value is null


			pie: 'normal', // if the pie graph is single stroke then we will add the object key as "stroke" & default is normal as simple as pie graph
			isStrokePie: { 
				stroke: 20, // Define the stroke of pie graph. It takes number value & default value is 20
				overlayStroke: true, // Define the background stroke within pie graph. It takes boolean value & default value is false
				overlayStrokeColor: '#eee', // Define the background stroke colour within pie graph & default value is #eee (Grey)
				strokeStartEndPoints: 'Yes', // Define the start and end point of pie graph & default value is No
				strokeAnimation: true, // Used for animation. It takes boolean value & default value is true
				strokeAnimationSpeed: 40, // Used for animation speed in miliisecond. It takes number & default value is 20ms
				fontSize: '60px', // Used to define text font size & default value is 60px
				textAlignement: 'center', // Used for position of text within the pie graph & default value is 'center'
				fontFamily: 'Arial', // Define the text font family & the default value is 'Arial'
				fontWeight: 'bold' //  Define the font weight of the text & the default value is 'bold'
			}
	};
	generatePieGraph('myCanvas',obj);
  </script>
</html>
