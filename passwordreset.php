<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include 'meta.php'
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="./assets/img/logo.jpg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="./assets/logs.css">
  <title>Password Reset</title>
</head>
<body>
  <section class="video-bg">
    <video src="./assets/img/abstractbg2.mp4" muted autoplay loop></video>
  </section>
  <div class="d-flex m-auto col-md-5 col-sm-11">
    <div class="loginboxx p-5 text-light m-auto">
      <img src="./assets/img/logo.jpg" class="avatarx">
      <h1 class="text-center">Password Reset</h1>
      <form action="#">
        <p>User name</p>
        <input type="text" class="form-control" name="username" placeholder="enter last used username" required>
        <p>Email</p>
        <input type="email" class="form-control" name="email" placeholder="enter Email" required>
        <input type="submit" name="" value="Request Password" class="btn btn-outline-light">
        <button class="btn btn-outline-light my-2" onclick="goBack()">Back<i class="bx bx-chevron-left"></i></button> <br>
        <a href="./accountrequest.php">Dont have an account?</a> <br>
        <a href="./login.php">Login <i class="bx bx-log-in"></i></a><br>
        <a href="./index.php">Home <i class="bx bx-home"></i></a>
      </form>
    </div>
  </div>
</body>

<script src="./assets/script.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"
  ></script>
</html>
