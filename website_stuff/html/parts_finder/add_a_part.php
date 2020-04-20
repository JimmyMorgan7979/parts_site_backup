
<!doctype HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel='apple-touch-icon' href='apple-touch-icon.png'/>
    <link rel='icon' type='image/png' href='favicon-32x32.png'/>
    <link rel='icon' type='image/png' href='favicon-16x16.png'/>
    <title>Parts Finder| ABBindustrial</title>
  </head>

  <body>

	<div class="container">
		<div class="row mt-2">
	
		</div>

		<div class="row mt-2 mb-4">

			<div class="col-sm text-left">
				<small><a href="index.php" class="text-dark">Home</a></small>
				<small><a href="#" class="text-dark pl-3">Sci calculator</a></small>
	
			</div>
			<div class="col-sm text-center">
	
			</div>
			<div class="col-sm text-right">
				<small><a href="#" class="text-dark">Ohm's law</a></small>
				<small><a href="#" class="text-dark pl-3">Add Parts</a></small>
			</div>
		</div>

		<div class="row mb-4">
			<div class="col-sm">
			</div>
			<div class="col-sm-8 text-center mt-5">
	
			</div>
			<div class="col-sm">

			</div>
		</div>

		<div class="row mb-4 mt-5">
			<div class="col-sm">
	
			</div>

			<div class="col-sm-7  text-center">
 				<img class="img-fluid" src="pictures/partsfinderlogo.png"/>
					<form method="POST"action="add_a_part.php">
						<div class='form-group mx-2'>
							<input type='password' name='password'style='border-radius:30px'class='px-1 py-1 text-center' placeholder='Enter your password'></br>
							<button type='submit' class='btn btn-primary mt-4'>Logon</button>
						</div>
					</form>
					<form method="POST" action="add_a_part.php">
						<input type="hidden" name="password" value="">
						<button type="submit" class='btn btn-secondary'>Logout</button>
					</form>
<hr>
				<?php
					function draw_form(){
					echo"<p><h3>Add a Part Form</h3></p>";
					echo"<form method='POST' action ='add_part_script.php'>";
					echo"<div class='form-group mx-2'>";
						echo"<input type='text' name='part_number' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Part number'>";
						echo"<input type='text' name='description' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Description'>";
						echo"<input type='text' name='preferred_vendor' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Preferred Vendor'>";
						echo"<input type='text' name='sap_number' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Sap Number'>";
						echo"<input type='text' name='location1' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Location1'>";
						echo"<input type='text' name='location2' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Location2'>";
						echo"<input type='text' name='location3' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Location3'>";
						echo"<input type='text' name='drawer' class='form-control my-2 py-3' style='border-radius: 30px'
							placeholder='Drawer'>";
						echo"<button type='submit' name='submit1' class='btn btn-danger mt-4 mb-5'>Add Part</button>";
					echo"</div>";
					echo"</form>";
					}
					$passwordtry = $_POST['password'];
					$password = "hello";
					if($passwordtry == $password){
					draw_form();
					}
				?>


			</div>

			<div class="col-sm">
	
			</div>
		</div>

	</div>
		</div>
	</div>
  </body>
</html>

