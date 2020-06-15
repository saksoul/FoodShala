<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FoodShala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
    
    .login-page{
        background-color: blue;
        width: 360px;
        padding: 10% 20px 5%;
        margin: 100px 0 100px 39%;
    }
    .form{
        position: relative;
        z-index: 1;
        max-width: 360px;
        margin: 0 auto 100px;
        text-align: center;
    }
    .form input{
        font-family: sans-serif;
        outline: 1;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button{
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;
    }

.form .message{
    margin: 15px 0 0;
    color: black;
    font-size: 12px;
}
.form .message a{
    color: #4CAF50;
    text-decoration: none;
}
.form .register-form{
    display: none;
}
  
</style>
</head>

<body>
<div class= "login-page">
    <div class="form">
        <form class="register-form">
            <!-- display validation errors here -->
            <?php include('errors.php'); ?>
            <input name="username" class="form-control" placeholder="Full name" type="text" required value="<?php echo $username; ?>">
          
            <input name="email" class="form-control" placeholder="Email address" type="email" required value="<?php echo $email; ?>">
          
            <input name="phone" class="form-control" placeholder="Phone number" type="number" required>
          
            <input class="form-control" placeholder="Create Password" type="password" name="password" value="" required>
          
            <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
           
            <input name="choice of food" class="form-control" placeholder="Veg/Non-Veg" type="choice" required>
          
            <button type="submit" name="submit"> Register </button>
            <p class="message">Already Registered? <a href="#">Log In</a> </p> 
        </form>

        <form class="login-form"> 

            <input typ="text" placeholder="user name"/>

            <input type="password" placeholder="password"/>

            <button>login</button>

            <p class="message">Not Registered? <a href="#">Register</a></p>
        </form>
    </div>
</div> 
<script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>

<script>
$('.message a').click(function(){
 $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>