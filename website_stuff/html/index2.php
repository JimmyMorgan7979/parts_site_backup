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
			<!--changed from sm-3-->
			<div class="col-sm-5">
				<img class="img-fluid" src="photos/abb.png" />
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
			<div class="col-sm text-center"><a href="/index.php">Home</a> |
				<a href="/index1.php">Board Search</a> | 
				<a href="/contact.php">Contact us</a>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-sm text-center border bg-secondary ">
				<div class="text-left text-white px-1">Part Search</div>
			</div>
		</div>
		
		<div class="row mt-3 ">
			<div class="col-sm ">
				<!--spacing-->
			</div>
			<div class="col-sm-6 ">
				<form  method="POST" action ="search_parts.php" >

				<!-- php connect -->
					<div class="form-group p-2">
						<label for="searchword" class="h4">Enter your part number</label>
						</br>
						<small class="text-muted">Don't know your exact part number?</small></BR>
						<small class="text-muted">You can enter a partial part number. Ex: 36C77454</small>
						<input type="text" name="search" class="form-control my-3" placeholder="Enter a search value">
					</div>
					<button type="submit" name ="submit1" class="btn btn-danger m-2">Submit</button>
				</form>
			</div>
			
			<div class="col-sm  ">
				<!--spacing-->
			</div>
		</div>
		
		<div class="row mt-3">
			<div class="col-sm">
				<!--spacing-->
			</div>
	
		
		<div class="col-sm-10 pb-4">

		</div>
		
			<div class="col-sm">
				<!--spacing-->
			</div>
				
			</div>
		</div>	
	</div>

  </body>
</html>
