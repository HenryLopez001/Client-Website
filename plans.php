<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/background.css">
<link rel="stylesheet" href="js/java.js">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<meta charset="UTF-8">
<title>Plans</title>
</head>
<body>

<div class="task">

<div class="up">
<?php include 'header.php'?>    
</div>

<div class="main">
<div class="head1">
<p>Plans</p>
</div>

<div class="lily">
<form>
<label for="firstname">
First Name:
</label>
<input type="text" name="firstname"><br>
<label for="lastname">
Last Name:
</label>
<input type="text" name="lastname"><br>
<label for="email">
Email:
</label>
<input type="text" name="email"><br>
<label for="phonenumber">
Phone Number:
</label>
<input type="text" name="phonenumber"><br>
<label for="address">
Address:
</label> 
<input type="text" name="address"> <br>
<label for="yard">
Which Yard do you Need Taken Care of? 
</label><br>
<input type="checkbox" name="yard">Front
<input type="checkbox" name="yard">Back<br>
<label for="parts">
Which Type of Service do you Need?
</label><br>
<input type="checkbox" name="parts">Holder
<input type="checkbox" name="parts">Bushes
<input type="checkbox" name="parts">Trees <br>
<input type="submit" value="submit">
</form>
</div>
</div>

<div class="foot">
<?php include 'footer.php'?>
</div>
</div>
</body>
</html>