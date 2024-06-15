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
<body>
<header>
		<nav>
			<div class="row clearfix">
				<img src="images/logo.png" class="logo">
				
			
					
				
				
				<ul>
					
					<li><a class="ext" href="index.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</a></li>	

					<li><a class="ext" href="near1.html">CONSULTATION</a></li>
					<li><a class="ext" href="podcast.html">PODCAST</a></li>
					<li><a class="ext" href="aboutus.html">ABOUT US</a></li>
					<li><a  class="ext" href="contactu.php"> CONTACT US</a></li>
                         <li><a class="ext"href="logout.php">Logout</a>
					
      				
					
				</ul>
			</div>
		</nav>
</header>
     <h1>Back to home Page <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index2.php");
     exit();
}
 ?>