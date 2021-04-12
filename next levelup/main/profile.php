<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/fontawesome/css/all.css">
  <script src="../css/fontawesome/js/all.js"></script>
  <link rel="stylesheet" href="../css/main.css">
  <script src="../js/main.js"></script>
  <title>Document</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg  justify-content-between">
    <div class="container">
      <a class="navbar-brand" href="#">LEVEL UP</a>
      <div>
        <form class="form-inline justify-content-center" style="text-align: center;">
          <input class="form-control mr-sm-2" type="text" placeholder="&#xf002   Search" aria-label="Search" name="search" id="search">
        </form>
      </div>
      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#" id="navbar">
              <i class="fas fa-home"></i>
            </a>
            <a class="nav-item nav-link" href="#">
              <i class="far fa-plus-circle"></i>
            </a>
            <a class=" nav-item nav-link" href="#">
              <i class="far fa-comments"></i>
            </a>
            <a class="nav-item nav-link" href="#">
              <i class="far fa-shopping-cart"></i>
            </a>
            <a class="nav-item nav-link" href="#">
              <i class="far fa-heart"></i>
            </a>
            <a class="nav-item nav-link" href="#">
              <img src="../images/profile/profil1.png" alt="" class="act">
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row profile justify-content-center">
      <div class="col-auto left">
        <div class="row">
          <img src="../images/profile/profil1.png" alt="" class="img-profile">
        </div>
        <div class="row justify-content-center coin">
          <i class="fad fa-coins icon"></i>
          <p>1.000.000</p>
        </div>
      </div>
      <div class="col-auto">
        <div class="row description">
          <div class="col-auto my-auto">
            <h3>orangcantik</h3>
          </div>
          <div class="star col-auto my-auto">
            <i class="fas fa-star icon"></i>
            <i class="fas fa-star icon"></i>
            <i class="fas fa-star icon"></i>
            <i class="fas fa-star icon"></i>
            <i class="fas fa-star icon"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row header-search justify-content-center">
      <button class="header-button">Mobile Game</button>
      <button class="header-button active">Pc Game</button>
      <button class="header-button">Voucher Game</button>
      <button class="header-button">Aplikasi</button>
      <button class="header-button">Pulsa</button>
    </div>
    <div class="row header-icon justify-content-center vertical-icon">
      <div class="left">
        <i class="fas fa-arrow-circle-left"></i>
      </div>
      <div class="sell-icon">
        <img src="../images/sell-icon/freefire.jpg" alt="">
        <p>Free Fire</p>
      </div>
      <div class="sell-icon">
        <img src="../images/sell-icon/arenaofvalor.jpg" alt="">
        <p>Arena of Valor</p>
      </div>
      <div class="sell-icon">
        <img src="../images/sell-icon/steam.jpg" alt="">
        <p>Steam</p>
      </div>
      <div class="sell-icon">
        <img src="../images/sell-icon/mobilelegend.jpg" alt="">
        <p>Mobile Legend</p>
      </div>
      <div class="sell-icon">
        <img src="../images/sell-icon/pubg.jpg" alt="">
        <p>PUBG</p>
      </div>
      <div class="sell-icon active">
        <img src="../images/sell-icon/valorant.jpg" alt="">
        <p>Valorant</p>
      </div>
      <div class="sell-icon">
        <img src="../images/sell-icon/codm.jpg" alt="">
        <p>CODM</p>
      </div>
      <div class="right">
        <i class="fas fa-arrow-circle-right"></i>
      </div>
    </div>
  </div>

</body>

</html>