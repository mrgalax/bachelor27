
<?php


$emailSubject = 'Customer Has a Question!';
$mailto = 'mads.saust@gmail.com';


$nameField = $_POST['name'];
$emailField = $_POST['email'];
$questionField = $_POST['question'];


$body = <<<EOD
<br><hr><br>
Name: $nameField <br>
Email: $emailField <br>
Question: $questionField <br>
EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $emailSubject, $body, $headers);

?>




