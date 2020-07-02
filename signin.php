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
    <h2 class="sign_text text-success">Welcome Back</h2>
    <p class="sign_text">Login with your email and password</p>
    <br>
    <form action="" method="post"class="form">
        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email">
        <p></p>
        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password">
        <br>
        <br>
        <input class="btn btn-lg btn-primary btn-block signup-btn create" type="submit" value="Continue">
    </form>
    <br>
    <p class="sign_text">Don't have any account? <a href="http://localhost/Shop/signup.php" class="singin">Sing up<a></p>
</div>
</body>
</html>