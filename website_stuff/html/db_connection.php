<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "web";
$dbpass = "cando01B";
$db = "parts";
$conn = new Mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
?>
