<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email'])	||
   empty($_POST['phone']) 		||
   empty($_POST['city'])	||
   empty($_POST['postcode'])	||
   empty($_POST['brand-name'])	||
   empty($_POST['vehicle-model'])	||
   empty($_POST['message']) 		||
   
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Please fill up the form Properly, Maybe you have missed something!";
	return false;
   }

$charger_type = $_POST['first'];
// $second = $_POST['check'];
// $type = implode(', ', $second); //vehicle type
$installer = $_POST['second'];
// $area = $_POST['type']; // in which area
$urgency = $_POST['third']; //timeline
// $timeline = $_POST['fourth']; //material purchase


// if(!empty($second)) {

//    foreach($_POST['lang'] as $value){
//        echo "value : ".$value.'<br/>';
//    }

// }


 $name = $_POST['name'];
   $company = $_POST['company'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $city = $_POST['city'];
   $postcode = $_POST['postcode'];
   $brand_name = $_POST['brand-name'];
   $model = $_POST['vehicle-model'];
   $message = $_POST['message'];
	
// Create the email and send the message

$to = 'tripkeys@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Quote Engine:  $name";

$email_body = "You have received a new message from your Electric vehicle charging website Quote Engine .\n\n"."Here are the details:\n\nName: $name\n\n  Company Name: $company \n\nPhone: $phone\n\nEmail: $email\n\n City: $city\n\n Postcode: $postcode\n\n Vehicle Brand-name: $brand_name\n\n Vehicle Model: $model\n\n Message: $message

\n\n\n Here is the Quote Request: \n Charger Type: $charger_type\n Need of installer: $installer \n Urgency: $urgency";

// Weekly Price range: $price_range\n Area: $area \n How urgent : $urgency \n  For how long: $timeline 

$headers = "From: noreply@london-ec.co.uk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);

// echo "<h4>The details have been sent and a member of staff will be in touch shortly!</h4>";

header("Location: ../../thank-you.html");
return true;	

?>