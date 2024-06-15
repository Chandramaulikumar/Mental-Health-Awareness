<?php

include 'db_connection.php';

if(isset($_POST["registration_form"])) // to check the clicking of submit button
{
    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $email_id = $_POST["email_id"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $problem = $_POST["problem"];


    $query = "insert into registration_form(name, phone_number, email_id, age, address, problem) values('". $name ."', '". $phone_number ."','". $email_id ."','". $age ."','". $address ."','". $problem ."')";
    $conn->query($query);
    $conn->close();  

?>

<script>
    alert("Registration Successfull");
    window.location.href="thank.html";
</script>

<?php
    }
?>


<html>

<head>

    <title> Registration Form </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style7.css">

    <style>
        th, td {
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 40px;
    }
    body {
        background-image: url('images/10.jpg    ');
        background-repeat:no-repeat;
        background-size:100%100%;
    }
    </style>
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
					<li><a  class="ext" href="contactu.php"> CONTACT US</a></li>
                    <li><a class="ext"href="logout.php">LOGOUT</a>
					
      				
					
				</ul>
			</div>
		</nav>
			
	</header>

    <marquee behavior="" direction="right" style="font-size: 50px; color: blue"><b>CONSULTATION 24*7</b></marquee>
    <h1 style="text-align:center">CONSULTATION Form For Mental Health  </h1>
    <form action="" method="post">
        <table style="margin-left: auto; margin-right: auto; margin-top: 50px;">
            <tr>
                <th>
                    Name:
                </th>
                <td>
                    <input type="text" name="name" required placeholder="Enter your name"  style="width: 230px;">
                </td>
            </tr>
            <tr>
                <th>
                    Phone Number:
                </th>
                <td>
                    <input type="text" required name="phone_number" placeholder="9876******"  pattern="[6789][0-9]{9}" required="Please Enter 10 digit Mobile Number" style="width: 230px;">
                </td>
            </tr>
            <tr>
                <th>
                    Email Id:
                </th>
                <td>
                    <input type="email" required name="email_id" placeholder="Enter your Email Id" style="width: 230px;">
                </td>
            </tr>
            <tr>
                <th>
                    Age:
                </th>
                <td>
                    <input type="number" required name="age" placeholder="eg:-25" style="width: 230px;">
                </td>   
            </tr>
            <!--<tr>
                <th>
                    Password :
                </th>
                <td>
                    <input type="password" required name="password" placeholder="password" style="width: 230px;">

                </td>
            </tr>
            <tr>
                <th>
                    Gender:
                </th>
                <td>
                    <input type="radio" name="gender">Male &nbsp; &nbsp; &nbsp; &nbsp; 
                    <input type="radio" name="gender">Female

                </td>
            </tr>
            <tr>
                <th>
                    Date Of Birth:
                </th>
                <td>
                    <input type="date" style="width: 230px;">
                </td>
            </tr>
            <tr>
                <th>
                    Hobbies:
                </th>
                <td>
                    <input type="checkbox" Singing>Singing  &nbsp; 
                    <input type="checkbox" Dancing>Dancing &nbsp; 
                    <input type="checkbox" Reading>Others
                </td>
            </tr>-->
            <tr>
                <th>
                    Address:
                </th>
                <td>
                    <textarea row="5" col="20" name="address" required placeholder="Address" style="width: 230px;"></textarea>
                </td>
            </tr>
            <tr>
                <th>
                    Problems:
                </th>
                <td>
                    <textarea row="5" col="20" name="problem" required placeholder="Kindly fill your Problem" style="width: 230px;"></textarea>
                </td>
            </tr>
            </table>
            <br>
                    <input class="btn btn-success" type="submit" value="Submit" name="registration_form" style="margin-left: 650px;"> 
                    <input class="btn btn-danger" type="reset" value="Reset" style="margin-left: 90px;">
    </form>
</body>
</html>