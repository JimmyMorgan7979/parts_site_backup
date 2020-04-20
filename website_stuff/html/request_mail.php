
<?php
$name = $_POST['customer_name'];
$company = $_POST['company_name'];
$email = $_POST['customer_email'];
$phone = $_POST['customer_phone'];
$mailheader = "From: Online Quote Request \r\n";

$part_number = $_POST['part_number'];
$list_price = $_POST['list_price'];
$description = $_POST['description'];

$formcontent="$name Has requested a quote for $company \n 
			  Their Phone: $phone\n 
			  Their contact e-mail address: $email \n

Part Number requested: $part_number
List Price:			   $$list_price
Description: $description";
//$recipient = "jeff.barton@us.abb.com";
$recipient = "jimmy.morgan@us.abb.com";
$subject = "Quote request";


mail($recipient, $subject, $formcontent,$mailheader)or die("We are experiencing a network problem, please contact 502-493-8000 with your request details</h2>");
echo "<h3>Thank You for your inquiry, we appreciate your buisness. $name\n
A member of our customer service team will get back with you very shortly.</h3>\n"; 
echo "<a href='index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
