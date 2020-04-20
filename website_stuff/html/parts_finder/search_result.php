<?php
include 'db_connection.php';
$search_term = $_POST['search'];
$conn = OpenCon();
//$sql = "SELECT * FROM `allparts` WHERE `part_number` LIKE '$search_term%'";
$sql = "SELECT * FROM `all_parts_new` WHERE `stocked_as` LIKE '%$search_term%' OR (`sap_number` = '$search_term')"; 
$result = $conn->query($sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
CloseCon($conn);
?>
<!doctype HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Parts Finder|ABBindustrial</title>
  </head>

  <body>

	<div class="container">
		<div class="row mt-3">
			<div class="col-sm-2 text-right">
				<a href="index.php">
					<img class="img-fluid" src="pictures/partsfinderlogo.png"/>
				</a>
			</div>

			<div class="col-sm-7">
				<form method="POST" action="search_result.php">
					<div class="form-group">
					<?php
						echo"<input type='text' name='search' class='form-control my-2' style='border-radius: 30px' value='$search_term'>";
					?>
					</div>
				</form>
			</div>

			<div class="col-sm">
				<button type="submit" name="submit1"class="btn btn-light mt-2 mb-1">Search</button>
			</div>
		</div>

<hr>

		<div class="row mb-4">
			<div class="col-sm">
	
			</div>
			<div class="col-sm-8 text-left">
<!--TODO:// The following div will be produced for each search result -->
			<?php
				if(count($row) < 1){
					echo "<strong>No Results </strong>"."</br>";
					echo "Try A Broader Search (remove 1-2 characters from the end of your search)";
				}
				foreach($row as $key =>$value){
					echo"<div name='varname' value='$value[id]' style='border-bottom:1px solid red;' class='py-2'>";
					if(strlen($value[sap_number]) > 1){
						echo "<strong>Sap Number: </strong>"."  ".$value[sap_number]."</br>";
					}
					echo"<strong>Part Number: </strong>"."  ".$value[stocked_as]."</br>";
					echo"<strong>Manufacturer: </strong>"."  ".$value[manufacturer]."</br>";
					if(strlen($value[location1]) > 1){
						echo"<strong>Location1: </strong>"."  ".$value[location1]."</br>";
					}
					if(strlen($value[location2]) > 1){
						echo"<strong>Location2: </strong>"."  ".$value[location2]."</br>";
					}
					if(strlen($value[location3]) > 1){
						echo"<strong>Location3: </strong>"."  ".$value[location3]."</br>";
					}
					if(strlen($value[location4]) > 1){
						echo"<strong>Location4: </strong>"."  ".$value[location4]."</br>";
					}
					if(strlen($value[location5]) > 1){
						echo"<strong>Location5: </strong>"."  ".$value[location5]."</br>";
					}
					if(strlen($value[location6]) > 1){
						echo"<strong>Location6: </strong>"."  ".$value[location6]."</br>";
					}
					if(strlen($value[drawer]) > 1){
						echo"<strong>Drawer: </strong>"."  ".$value[drawer]."</br>";
					}
					echo"<strong>Description1: </strong>"."  ".$value[description1]."</br>";
					if (strlen($value[description2]) > 1){
						echo "<strong>Description2: </strong>"."  ".$value[description2]."</br>";
					}
				echo"</div>";
			}
			?>
			</div>
			<div class="col-sm">
	
			</div>
		</div>


	</div>
  </body>
</html>

