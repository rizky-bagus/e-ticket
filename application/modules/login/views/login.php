<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo base_url() ?>assets/icon/main-icon.png" type="image/png">
    <title>AyoHotel</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styleLogin.css">
  </head>
  <body>
<div class="login-box">
  <h1>Login</h1>
  <form name="Login" class="form" action="<?php echo base_url()."Login/actionLogin"; ?>" method="POST">
      <div class="textbox">
       <div class="input-area">
         <i class="fas fa-user"></i>
         <input type="text" placeholder="Email" name="username" required>
         <small>Error message</small>
        </div>
      </div>
    <div class="textbox">
      <div class=" input-area">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="password" required>
        <small>Error message</small>
      </div>
    </div>
    <button>Submit</button>
    <p class="sign-up">Belum punya akun? <a href="<?php echo base_url() ?>Register/index">Buat Sekarang</a></p></div>
  </form>
  </body>
</html>
