<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "partsfinder";
$dbpass = "cando01B";
$db = "partsfinder";
$conn = new Mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
?>
