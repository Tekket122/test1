<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h3, h4, h5, h6 {
  color:#4F0E0E;
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
h2{
     color:#4F0E0E;
     font-family: "Playfair Display";
     letter-spacing: 5px;
     font-size: 150%;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="sub/homepage1.html" class="w3-bar-item w3-button">Chuen Cafe</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="sub/basic1.html" class="w3-bar-item w3-button">Basic Menu</a>
      <a href="sub/recom1.html" class="w3-bar-item w3-button">Recommend Menu</a>
      <a href="sub/food1.html" class="w3-bar-item w3-button">Food Menu</a>
      <a href="sub/product1.html" class="w3-bar-item w3-button">Product</a>
    </div>
  </div>
</div>
<br>
<body>
     <h1>You have signed in </h1>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <a href="sub/homepage1.html">Go to Homepage</a>
     <br>
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
       <a href="logout.php">Sign out</a>
     </nav>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>