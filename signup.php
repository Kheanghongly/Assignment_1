<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}



if(isset($_POST["submit_signup"])){

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $name = $firstname." ".$lastname;
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  //Insert comment to database
    
  $sql_users = "INSERT INTO users (  `name`,  `email`, `password` ) VALUE (  '$name','$email','$password')";
  $user = $conn->query($sql_users);}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/style.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="http://localhost/Shop/index.php"><b>Awesome</b> <span class="text-success"><b>Shop</b></span></a>
      <div class="form-inline">
        <img src="/Shop/assets/icon/questionMark.png" alt="questionMark" height="15px" width="15px">
        <a href="" id="link1">&nbsp; Need help &nbsp; &nbsp;</a>
      </div>
    </div>
</nav>
<br>
<div class="container form_sign">
    <h2 class="sign_text text-success">Sign Up</h2>
    <p class="sign_text">Please create account in my Shop</p>
    <form action="" method="post"class="form">
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"></div>
            <div class="col-xs-6 col-md-6">
                <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"></div>
        </div>
        <p></p>
        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email">
        <p></p>
        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password">
        <p></p>
        <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"> 
        <br>
        <input class="btn btn-lg btn-primary btn-block signup-btn create" type="submit" name="submit_signup" value="Continue">
    </form>
    <br>
    <p class="sign_text">Already have an account? <a href="http://localhost/Shop/signin.php" class="singin">Sing in<a></p>
</div>
</body>
</html>
<?php
$firstname = 1;
$lastname = 2; 
$name = $firstname.$lastname;
  echo $name;
?>