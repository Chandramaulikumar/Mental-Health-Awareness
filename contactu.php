<?php

include 'db_connection.php';
if(isset($_POST["submit"])) // to check the clicking of submit button
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $message = $_POST["message"];


    $query = "insert into contact(name, email, mobile_number, message) values('". $name ."', '". $email ."','". $mobile_number ."','". $message ."')";
    $conn->query($query);
    $conn->close();  

?>

<script>
    alert("Contacted Successfully.....");
    window.location.href="thank.html";
</script>

<?php
    }
?>
<html>
<head>
	<title>MHA</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/contactu1.css">
</head>

<body>
	<header>
    <nav>
      <div class="row clearfix">
				<img src="images/logo.png" class="logo">

    
        
	<ul>
					<li><a class="ext" href="index.html">HOME</a></li>
					<li><a class="ext" href="near1.html">CONSULTATION</a></li>
          <li><a class="ext" href="podcast.html">PODCAST</a></li>
					<li><a class="ext" href="aboutus.html">ABOUT US</a></li>
					<li><a class="ext" href="contactu.php">CONTACT US</a></li>
					
				</ul>

            </div>
		</nav>
  
<br> <br> <br>

    <div class="contact-form">
      <form method="post" action="">  
    <h1>Contact Us</h1>
      <div class="txtb">
        <label>Full Name :</label>
        <input type="text" name="name" value="" placeholder="Enter Your Name" required>
      </div>

      <div class="txtb">
        <label>Email :</label>
        <input type ="email" name="email" placeholder="Enter Email" required><br>
      </div>

      <div class="txtb">
        <label>Mobile Number :</label>
        <input id="phone" type="tel"required name="mobile_number" required pattern="[0-9]{10}" placeholder="XXXXXXXXXX">  <br><br>
      </div>

      <div class="txtb">
        <label>Message :</label>
        <input id="message" type="textarea" required name="message"  placeholder="Write your message">  <br><br>
      </div>

      <input class="btn" type="submit" value="Submit" name="submit">
    
  </form>

    </div>
  
</header>
<footer class="footer">
        <h3>Get in touch 🚀</h3>
        <div class="handles">
            <img class="handle" src="https://cdn.icon-icons.com/icons2/2631/PNG/512/gmail_new_logo_icon_159149.png">
      
            <img class="handle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/800px-2021_Facebook_icon.svg.png">
         
            <img class="handle" src="https://cdn-icons-png.flaticon.com/512/124/124021.png">
           
            <img class="handle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1024px-Instagram_icon.png">
          
          </div>
        <p>MHA</p>
		</footer>
</body>
</html>