<?php
include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully <br>";

$sql  = 'SELECT *  FROM `ecatalog` WHERE `part_number` LIKE \'ds200lrpa%\'';
$result = $conn->query($sql);


$row = mysqli_fetch_all($result,MYSQLI_ASSOC);

//	THIS SERIES OF COMMANDS WILL DISPLAY THE ENTIRE QUERY RETURN IN 
//	HUMAN READABLE FORMAT
//echo '<pre>'; print_r($row); echo '</pre>';


//test line showing how the variables can be accessed 
//echo $row[3][id];

echo "<ol>";

foreach($row as $key =>$value){
//	echo($key)."<br>";
//	echo $value[id]."<br>";
	echo "<li name='$value[id]'>";
	echo $value[part_number]."<br>";
	echo "$".$value[list_price]." ". $value[price_unit]."<br>";
	echo $value[description]."<br>";
	echo "</li>";
}

echo "<ol>";










CloseCon($conn);

?>

