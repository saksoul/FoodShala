<?php
$username = "";
$email = "";
$errors = array();
     //connect to the database
     $db = mysqli_connect('localhost', 'root', '', 'customer');

     //if the register button is clicked
     if (isset($_POST['submit'])) {
         $username = mysql_real_escape_string($POST['username']);
         $email = mysql_real_escape_string($POST['email']);
         $phone = mysql_real_escape_string($POST['phone']);
         $password = mysql_real_escape_string($POST['password']);
         $cpassword = mysql_real_escape_string($POST['cpassword']);
         $choice = mysql_real_escape_string($POST['choice']);

         if (empty($username)) {
             array_push($errors, "Username is required");
         }
         if (empty($smail)) {
             array_push($errors, "Email is required");
         }
         if(empty($phone)) {
             array_push($errors, "Phone is required");
         }
         if(empty($password)) {
             array_push($errors, "Password is required");
         }
         if($password != $cpassword) {
             array_push($errors, "The two passwords do not match");
         }

         if (count($errors) == 0) {
             $password = md5($password);
             $sql = "INSERT INTO users(username, email, phone, password)
                                VALUES ('username', '$email', '$phone', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = "You are now logged in";
            header('location: index.php'); //redirect to home page
         }
     }
