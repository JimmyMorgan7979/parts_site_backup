
<?php
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_phone = $_POST['contact_phone'];
$contact_message = $_POST['contact_message'];


$formcontent="From:  $contact_name
Phone:  $contact_phone 
Email:  $contact_email 
Message:\n
$contact_message";


//$recipient = "jeff.barton@us.abb.com";
$recipient = "ishamael.59@gmail.com";
$subject = "Contact Form";
$mailheader = "From: Online Contact Request \r\n";


mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

?>
