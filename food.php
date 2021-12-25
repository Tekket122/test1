<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'test');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM user_mng2";
    $result = $connect->query($sql);

?>
<!DOCTYPE html>
<html>
<title>Chuen Cafe Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Site Metas -->
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">    
<!-- Site CSS -->
<link rel="stylesheet" href="css/style.css">    
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  color:#4F0E0E;
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
  <h1><a href="homepage.html" class="w3-bar-item w3-button">Chuen Cafe</a> </h1>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="basic.php" class="w3-bar-item w3-button">Basic Menu</a>
      <a href="recom.php" class="w3-bar-item w3-button">Recommend Menu</a>
      <a href="food.php" class="w3-bar-item w3-button">Food Menu</a>
      <a href="product.php" class="w3-bar-item w3-button">Product</a>
      <a href="index.php" class="w3-bar-item w3-button">Login</a>
      <br>

    </div>
  </div>
</div>
<br>
<br>

<!-- Header -->

<img class="w3-image" src="image/banner.png" alt="Hamburger Catering" width="1920" height="1080">


<!-- End Contact info -->
<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="image/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Chuen Cafe Food Menu</strong></h1>
							
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="image/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Chuen Cafe Food Menu</strong></h1>
						
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="image/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Chuen Cafe Food Menu</strong></h1>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- Start About -->
	<div class="about-section-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 text-center">
						<div class="inner-column">
							<h1>Welcome To <span>Chuen Cafe Food Menu</span></h1>
							<h4>Little Story</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
							<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<img src="images/about-img.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->
		<!-- Start QT -->
		<div class="qt-box qt-background">
			<div class="container">
				<div class="row">
					<div class="col-md-8 ml-auto mr-auto text-center">
						<p class="lead ">
							" ไม่ได้ชิมก็เหมือนมาไม่ถึง. "
						</p>
						<span class="lead">Chuen Cafe</span>
					</div>
				</div>
			</div>
		</div>
		<br>



		<div class="container">
		<h1><span>Food Menu</span></h1>
        <table>
            <thead>
                <tr>
                    <td width="25%"><h1>ชื่อเมนู</h1></td>
					<td width="25%"><h1>ชื่อเมนู Eng</h1></td>
                    <td width="25%"><h1>ราคา (บาท)</h1></td>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                       
                        <td class="name">
                         <?php echo $row['Thai_name'];?>
                        </td>
						<td class="name">
                         <?php echo $row['Eng_name'];?>
                        </td>
                        <td><?php echo $row['Price']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
	<br>
	<br>
	<br>



<!-- End page content -->
</div>

<!-- Start Contact info -->
<div class="contact-imfo-box">
  <div class="container">
    <div class="row">
      <div class="col-md-4 arrow-right">
        <i class="fa fa-volume-control-phone"></i>
        <div class="overflow-hidden">
          <h4>Phone</h4>
          <p class="lead">
            086 187 7680
          </p>
        </div>
      </div>
      <div class="col-md-4 arrow-right">
        <i class="fa fa-facebook-official"></i>
        <div class="overflow-hidden">
          <h4>Email</h4>
          <p class="lead">
            @chuencafeandbistro
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <i class="fa fa-map-marker"></i>
        <div class="overflow-hidden">
          <h4>Location</h4>
          <p class="lead">
            185, San Kamphaeng District, CNX
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact info -->

<!-- Start Footer -->
<footer class="footer-area bg-f">
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Chuen Cafe</a> Design By : Yurasak Kongkhan</p>
        </div>
      </div>
    </div>
  </div>
  
</footer>
<!-- End Footer -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</html>
