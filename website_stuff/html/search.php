<?php
include 'db_connection.php';
//require './db_connection.php';
$search_term = $_POST['search'];
$conn = OpenCon();
$sql  = "SELECT *  FROM `ecatalog` WHERE `part_number` LIKE '$search_term%'";
$result = $conn->query($sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
CloseCon($conn);
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Louisville, KY | ABBindustrial</title>
  </head>
  <!-- main content -->

  <body>

	<div class="container">
		<div class="row mt-2">
			<div class="col-sm-3">
				<img src="photos/abb.png"/>
			</div>
			<div class="col-sm text-right">
				<strong>Louisville Service Center</strong></br>
				<strong>240 Production Court</strong></br>
				<strong>Louisville, KY 40299</strong></br>
				<strong>P: (502) 493-8000</strong></br>
				<strong>F: (502) 493-0640</strong>
			</div>
		</div>
		
		<div class="row mt-3 mb-3">
			<div class="col-sm text-center"><a href="index.php">Home</a> | 
				<a href="/contact.php">Contact us</a>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-sm text-center border bg-secondary ">
				<div class="text-left text-white px-1">Part Search //  Board Search</div>
			</div>
		</div>
		
		<div class="row mt-3 ">
			<div class="col-sm ">
				<!--spacing-->
			</div>
			<div class="col-sm-6 ">

			</div>
			
			<div class="col-sm  ">
				<!--spacing-->
			</div>
	</div>
		
		<div class="row mt-3">
			<div class="col-sm">
				<!--spacing-->
			</div>
			
	<!-- php file should populate this area -->		
		<div class="col-sm-10 pb-4">
<?php			

				echo "<div class='text-center mb-2 h5'>Search Results for \"$search_term\"</div>";
				echo "<p class='text-center mb-4'><small>---EX = Exchange Board \\ RM = Remanufactured RR = Repair and Return \\ TC = Test and Certify---</small></p>";
				echo "<ol>";
				foreach($row as $key =>$value){
					//next new
					echo "<form  method='POST' action ='quote_request.php'>";
					echo "<input type='hidden' name='varname' value ='$value[id]'>";
					echo "<li name='$value[id]'>";
					echo $value[part_number]."<br>";
					echo "$".$value[list_price]." ". $value[price_unit]."<br>";
					echo $value[description]."<br>";
					echo "<button type='submit' class='btn btn-outline-info btn-sm mt-1 mb-4'>Click for a quote</a>";
					echo "</li>";
					echo "</form>";
				}
				//disclamer block
					echo"<ul>
					<li><small>Applicable to Refurbished Catalog Parts Only: Quantity available is based on current inventory.</small></li>
					<li><small>Prices shown do not include shipping or expediting charges, which may apply.</small></li>
					<li><small>Prices shown do not include any applicable taxes.</small></li>
					<li><small>Items must be quoted or ordered to guarantee price shown.</small></li>
					</ul>";
					echo "<a class='btn btn-danger btn-block mt-4' href='index1.php'>Go Back</a>";
					echo "<ol>";
	
?>
					
			</div>
		
			<div class="col-sm">
				<!--spacing-->
			</div>
				
			</div>
		</div>	
	</div>
  </body>
</html>

