<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/main.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center loginpage vertical-center">
      <div class="col-auto hide1">
        <img src="../images/login1.png" class="img-fluid">
      </div>
      <div class="col-auto">
        <div class="box1">
          <h3>LEVEL UP</h3>
          <input class="input1" type="text" name="username" id="username" placeholder="&#xf007   Phone number, Username or Email">
          <div class="row2">
            <input class="input2" type="password" name="password" id="password" placeholder="&#xf084   Password">
            <button class="show" id="show" onclick="hideandshow()">show</button>
          </div>
          <input type="submit" name="username" id="username" value="Log In" class="input6">
          <p class="forgot default">Forgot Password ?</p>
        </div>
        <div class="box2">

          <p class="default">Don't have an account? <span onclick="window.location='register_page.php'">Sign Up</span></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>