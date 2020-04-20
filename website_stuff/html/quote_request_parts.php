<?php
include 'db_connection.php';

$search_term = $_POST['varname'];
$conn = OpenCon();
$sql  = "SELECT *  FROM `atp_inventory` WHERE `id`='$search_term'";
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
			  	<strong>240 Production Court</small></strong>
			  	<strong>Louisville, KY 40299</small></strong>
				<strong>P: (502) 493-8000</small></strong>
			  	<strong>F: (502) 558-2703</strong>
		  	</div>
	  	</div>
		
	  	<div class="row mt-3 mb-3">
		  	<div class="col-sm text-center"><a href="/index.php">Home</a> | 
				<a href="/contact.php">Contact us</a>
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
						$sale_price = $value[our_cost] * 6;
						if ($value[our_cost] + 0 < 50){
							$sale_price = 50;
						}
						echo "<input type='hidden' name='part_number' value ='$value[material_number]'>";
						echo $value[material_number]."<br>";
						echo "<input type='hidden' name='list_price' value ='$sale_price'>";
						echo "$".$sale_price."<br>";
						echo "<input type='hidden' name='description' value ='$value[material_description]'>";
						echo $value[material_description]."<br>";
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

