<?php

// include './assets/config.php';

// if (isset($_POST['submit'])) {
//   $name = $_POST['name'];
//   $emp_id = $_POST['emp_id'];
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   $confirm_password = $_POST['cpassword'];

//   $select = "SELECT * FROM user_data WHERE email = :email LIMIT 1";
//   $stmt = $conn->prepare($select);
//   $stmt->execute(['email' => $email]);

  // if ($stmt->errorCode() !== '00000') {
    // $error[] = 'Error inserting data: ' . implode(', ', $stmt->errorInfo());
  // }
  // if (!empty($error)) {
    // var_dump($error);
  // }

//   $user = $stmt->fetch();

//   if ($user) {
//     $error[] = 'User already exists!';
//   } else {
//     if ($password !== $confirm_password) {
//       $error[] = 'Passwords do not match!';
//     } else {
//       $hashed_password = password_hash($password, PASSWORD_BCRYPT);
//       $insert = "INSERT INTO user_data(name, emp_id, email, password) VALUES(:name, :emp_id, :email, :password)";
//       $stmt = $conn->prepare($insert);
//       $stmt->execute(['name' => $name, 'emp_id' => $emp_id, 'email' => $email, 'password' => $hashed_password]);
//       header('location:logins.html');
//     }
//   }
// }


include './assets/config.php';


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emp_id = $_POST['emp_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['cpassword'];


  $select = "SELECT * FROM user_data WHERE email = '$email' LIMIT 1";
  $stmt = $conn->prepare($select);
  $stmt->execute();

  // if ($stmt->errorCode() !== '00000') {
    // $error[] = 'Error inserting data: ' . implode(', ', $stmt->errorInfo());
  // }
  // if (!empty($error)) {
    // var_dump($error);
  // }

  $user = $stmt->fetchAll();
  $user_count = $stmt->rowCount();

  // var_dump( $user_count);

  if ($user_count > 0) {
    $error[] = 'User already exists!';
  } 
  else {
    if ($password !== $confirm_password) {
      $error[] = 'Passwords do not match!';
    } 
    else {
      $hashed_password = password_hash($password, PASSWORD_BCRYPT);
      $insert = "INSERT INTO user_data(name, email, password) VALUES($name, $email, $hashed_password)";
      $stmt = $conn->prepare($insert);
      $stmt->execute();
      header('location:login.php');
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php
  include 'meta.php'
  ?>
  <link rel="stylesheet" href="./assets/css/signup.css">
  <link rel="stylesheet" href="./assets/logs.css">
  <title>Account SignUp</title>
</head>

<body>
  <section class="video-bg">
    <video src="./assets/img/abstractbg2.mp4" muted autoplay loop></video>
  </section>
  <div class="d-flex m-auto col-md-5 col-sm-11">
    <div class="loginboxx p-5 text-light m-auto">
      <img src="./assets/img/logo.jpg" class="avatarx">
      <h1 class="text-center">Account Sign Up</h1>
      <form action="" method="POST">
        <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<span class="error-msg">' . $error . '</span>';
          };
        };
        ?>
        <input type="text" class="form-control my-2" name="name" placeholder="Enter name" required>
        <input type="text" class="form-control my-2" name="emp_id" placeholder="Enter your employee ID" required>
        <input type="email" class="form-control my-2" name="email" placeholder="Enter email" required>
        <input type="password" class="form-control my-2" name="password" placeholder="enter password" required>
        <input type="password" class="form-control my-2" name="cpassword" placeholder="re-enter password" required>
        <div class="d-flex justify-content-center">
          <input type="submit" class="btn btn-outline-light m-2" name="submit" value="Sign Up">
          <button class="btn btn-outline-light m-2" onclick="goBack()">Back<i class="bx bx-home"></i></button>
        </div>
        <a href="./login.php">Login <i class="bx bx-log-in"></i></a><br>
        <a href="./index.php">Home <i class="bx bx-home"></i></a>
      </form>
    </div>
  </div>


  <!-- <script src="./assets/js/login.js"></script> -->
  <script src="./assets/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</body>

</html>