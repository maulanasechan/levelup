<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../js/croppie.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/croppie.css">
  <script src="../js/main.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center loginpage vertical-center">
      <div class="col-auto visi hide1">
        <h3>LEVEL UP</h3>
        <div class="row">
          <div class="col-auto">
            <img src="../images/icon/icons-1.png" class="icon" alt="">
          </div>
          <div class="col-auto">
            <h5>Terlengkap dan Terpercaya</h5>
            <p>Lebih dari ratusan produk dan penjual yang
              <br>telah berlangganan
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-auto">
            <img src="../images/icon/icons-2.png" class="icon" alt="">
          </div>
          <div class="col-auto">
            <h5>Pengiriman Instan</h5>
            <p>Hanya dalam waktu kurang dari 5 menit
              <br>produk sampai
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-auto">
            <img src="../images/icon/icons-3.png" class="icon" alt="">
          </div>
          <div class="col-auto">
            <h5>Produk Legal</h5>
            <p>Produk legal 100% sehingga akun aman
              <br>sentosa
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-auto">
            <img src="../images/icon/icons-4.png" class="icon" alt="">
          </div>
          <div class="col-auto">
            <h5>Tempat Favorit Gamer</h5>
            <p>Ribuan gamer telah berbelanja dan
              <br>berlangganan di level up
            </p>
          </div>
        </div>
      </div>
      <div class="col-auto regist my-auto">
        <div class="box1">
          <h3>Sign Up</h3>
          <div class="isi isi1">
            <input class="input1" type="text" name="fullname" id="fullname" placeholder="&#xf007   Full Name" pattern=".{5,}" oninvalid="this.setCustomValidity('Please Enter minimal 5 character')" required>
            <input class="input3" type="text" name="username" id="username" placeholder="&#xf2bb   Username" pattern=".{5,}" oninvalid="this.setCustomValidity('Please Enter minimal 5 character')" maxlength="12" required>
            <input class="input3" type="text" name="email" id="email" placeholder="&#xf0e0   Email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" oninvalid="this.setCustomValidity('Please Enter valid email')" required>
            <div class="row2">
              <input class="input2" type="password" name="password" id="password" placeholder="&#xf084   Password" pattern=".{5,}" required>
              <button class="show" id="show" onclick="hideandshow()">show</button>
            </div>
            <div class="row2">
              <input class="input4" type="tel" name="phone" id="phone" placeholder="&#xf10b   Phone Number" pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Please Enter valid number phone')" required>
              <select name="phoneid" id="phoneid" class="minimal" required>
                <option value="+62">+62</option>
                <option value="+12">+12</option>
              </select>
            </div>
            <div class="row justify-content-center">
              <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
            </div>
            <input type="submit" value="Next" class="input6" onclick="next1()">
          </div>
          <div class="isi isi2">
            <input class="input1" type="text" name="address" id="address" placeholder="&#xf2b9   Address" required>
            <input class="input3" type="text" name="city" id="city" placeholder="&#xf124   City" required>
            <input class="input3" type="text" name="country" id="country" placeholder="&#xf041   Country" required>
            <textarea class="input5" name="biodata" id="biodata" placeholder="&#xf036   Biodata" required></textarea>
            <div class="row justify-content-center">
              <ul>
                <li></li>
                <li class="active"></li>
                <li></li>
              </ul>
            </div>
            <div class="row justify-content-center">
              <input type="submit" value="Back" onclick="back1()" class="input8">
              <input type="submit" value="Next" onclick="next2()" class="input7">
            </div>
          </div>
          <div class="isi isi3">
            <div class="row justify-content-center">
              <div class="fileUpload">
                <span><i class="fa fa-user"></i>Upload Profile</span>
                <input type="file" class="upload" name="upload_image" id="upload_image" accept="image/*" />
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <div id="image_demo"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <ul>
                <li></li>
                <li></li>
                <li class="active"></li>
              </ul>
            </div>
            <div class="row justify-content-center">
              <input type="submit" value="Back" onclick="back2()" class="input8">
              <input type="submit" value="Submit" onclick="push()" class="input7">
            </div>
          </div>
          <p class="terms">By signing up, you agree to Our <span>Terms,</span><br>
            <span>Data Policy</span> and Cookies
          </p>
        </div>
        <div class="box2">
          <p>Have an account? <span onclick="window.location='login_page.php'">Log In</span></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>