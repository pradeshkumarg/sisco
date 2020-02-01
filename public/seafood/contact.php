<?php
//echo "hai";
//echo $_POST["first_name"];

if(!empty($_POST["send"])) {
	$name = $_POST["first_name"];
	$last = $_POST["last_name"];
	$company = $_POST["company"];
	$email = $_POST["userEmail"];


	$to = "pradesh@winacore.com"; // this is your Email address
    $from = $_POST['userEmail']; // this is the sender's Email address
    $subject = "Downloaded the catalogue";
	$message="Details about the downloaded customer" . "\n\n" . "First Name : " . $_POST['first_name'] . "\n\n" . "Name : " . $_POST['last_name'] . "\n\n" . "Company Name : " . $_POST['company'] . "\n\n" . "Email ID : " . $_POST['userEmail'];


    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

header('Location: ../files/SEAFOODS_Product_Catalogue_2020_NEW.pdf');

}


?>