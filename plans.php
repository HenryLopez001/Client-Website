<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/background.css">
   <link rel="stylesheet" href="js/java.js">
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
First Name:
<input type="text" name="firstname"><br><br>
Last Name:
<input type="text" name="lastname"><br><br>
Email:
<input type="text" name="email"><br><br>
Phone Number:
<input type="text" name="phonenumber"><br><br>
Address: 
<input type="text" name="address"> <br><br>
1 Question <br>
<input type="radio" name="yard">Front <input type="radio" name="yard">Back <input type="radio" name="yard">Both<br> <br>
2 Question <br>
<input type="radio" name="parts">Yards
<input type="radio" name="parts">Bushes
<input type="radio" name="parts">Trees <br>
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