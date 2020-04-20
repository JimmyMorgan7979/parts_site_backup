<?php
include 'db_connection.php';

$search_term = $_POST['varname'];
$conn = OpenCon();
$sql  = "SELECT *  FROM `ecatalog` WHERE `id`='$search_term'";
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
			  	<strong>F: (502) 558-2703</strong>
		  	</div>
	  	</div>
		
	  	<div class="row mt-3 mb-3">
		  	<div class="col-sm text-center"><a href="/index.php">Home</a> | 
				<a href="#">Contact us</a>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-sm text-center bg-secondary ">
				<div class="text-left text-white px-1">Request a quote</div>
			</div>
		</div>
		<!--contact/form information starts here-->
<form action="request_mail.php" method="POST">
		<div class="row mt-3 ">
			<div class="col-sm-8">
				<p>
					<?php
					echo "<p><strong>Your Selection:</strong></p>";
					foreach($row as $key =>$value){
						echo "<input type='hidden' name='part_number' value ='$value[part_number]'>";
						//$partnumber = $value[part_number];
						echo $value[part_number]."<br>";
						echo "<input type='hidden' name='list_price' value ='$value[list_price]'>";
						//$price = "$".$value[list_price]." ". $value[price_unit];
						echo "$".$value[list_price]." ". $value[price_unit]."<br>";
						echo "<input type='hidden' name='description' value ='$value[description]'>";
						//$partdescription = $value[description];
						echo $value[description]."<br>";
					}
					?>
				</p>
			
<!--form used to start here-->				
					
					<div class="form-group">
						<label for="customer_name">Name</label>
						<input type="text" class="form-control" name="customer_name" placeholder="Enter your Name">
					</div>

					<div class="form-group">
						<label for="company_name">Company name</label>
						<input type="text" class="form-control" name="company_name"  placeholder="Enter your company name">
					</div>

					<div class="form-group">
						<label for="customer_email">Your Email</label>
						<input type="text" class="form-control" name="customer_email" placeholder="Enter your email">
					</div>

					<div class="form-group">
						<label for="customer_phone">Your Phone</label>
						<input type="text" class="form-control" name="customer_phone" placeholder="(555)-555-5555">
 				  </div>
  
					<button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
				</form>

      </div>
			
			

	  	
  	</div>
  </body>
</html>

