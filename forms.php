<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Complete</title>
</head>
<body>
    Your Form Has Been Sent, 
</body>
</html>






<?php echo
$_POST["firstname"];
$_POST["lastname"];
$_POST["email"];
$_POST["phonenumber"];
$_POST["address"];
$_POST["yard"];
$_POST["parts"];
?>




<?php
$to = "tailshenry@icloud.com";
$subject = "New Client";
$message = "forms.php";
mail($to,$subject,$message);
?>