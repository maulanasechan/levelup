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
            <a class="nav-item nav-link active" href="#" id="navbar">
              <i class="far fa-home"></i>
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
              <i class="fas fa-heart"></i>
            </a>
            <a class="nav-item nav-link" href="#">
              <img src="../images/profile/profil1.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container notification">
    <div class="row header-menu">
      <div class="col-auto">
        <h3>Notification</h3>
      </div>
      <div class="col-auto ml-auto list">
        <a class="active" href="#">All Notification</a>
        <a href="#">Followed</a>
        <a href="#">Buyer</a>
        <a class="last" href="#">Refund</a>
      </div>
    </div>
    <!-- Diisi sama jumlah notifikasi yang melakukan perulangan -->
    <hr class="overline">
    <div class="row menu justify-content-center">
      <div class="col-auto">
        <img src="../images/profile/profil1.png" class="profile" alt="">
      </div>
      <div class="col-auto">
        <div class="row">
          <h5>maulanasechan</h5>
        </div>
        <div class="row">
          <p>mengajukan refund pada nomor produk "V0114092000001"</p>
        </div>
      </div>
      <div class="col-auto ml-auto">
        <p class="date">20 Sept 2020, 14:15</p>
      </div>
      <div class="col-auto">
        <img src="../images/profile/profil1.png" alt="">
      </div>
    </div>
    <hr class="underline">
    <!-- Akhir perulangan -->
    <!-- Di bawah ini cuman contoh, jadi hapus aja setelah ada perulangan di atas -->
    <hr class="overline">
    <div class="row menu justify-content-center">
      <div class="col-auto">
        <img src="../images/profile/profil1.png" class="profile" alt="">
      </div>
      <div class="col-auto">
        <div class="row">
          <h5>maulanasechan</h5>
        </div>
        <div class="row">
          <p>mengajukan refund pada nomor produk "V0114092000001"</p>
        </div>
      </div>
      <div class="col-auto ml-auto">
        <p class="date">20 Sept 2020, 14:15</p>
      </div>
      <div class="col-auto">
        <img src="../images/profile/profil1.png" alt="">
      </div>
    </div>
    <hr class="underline">
    <!-- Akhir dari contoh -->
  </div>

</body>

</html>