<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: login-admin.html'); 
}



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);


$query = "INSERT INTO RESTAURANTS(name,email,contact,address,M_ID) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $address ."','" . $_SESSION['login_user1'] ."')";
$success = $conn->query($query);

if (!$success){
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>change</title>
  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">FOODSHALA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vegmenu.html">VEG</a></li>
            <li><a href="non-vegmenu.html">NON-VEG</a></li>
          </ul>
        <li><a href="#">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOG IN
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login-customer.html">Customer</a></li>
            <li><a href="login-admin.html">Restaurant Admin</a></li>
          </ul>
        </li>
    </ul>
    </div>

    <div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Your already have one restaurant.</h1>
		<p>Go back to your <a href="view_food_items.php">Restaurant</a></p>
	</div>
</div>
	
	</body>
	</html>

	<?php
}
else {
	header('Location: myrestaurant.php');
}

$conn->close();


?>