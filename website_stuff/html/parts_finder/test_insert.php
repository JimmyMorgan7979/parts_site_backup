<?php
$link = mysqli_connect("localhost","partsfinder","cando01B","partsfinder");
if($link === false){
	die("ERROR: Could not connect. ".mysqli_connect_error());
}
$sql = "INSERT INTO all_parts_new (stocked_as, location1, drawer) VALUES ('TEST', 'TEST', 'TEST')";
if(mysqli_query($link,$sql)){
	echo "Inserted successfully";
}else{
	echo "Failed";
}
mysqli_close($link);

?>
