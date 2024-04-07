<?php

include './assets/config.php';

session_start();

if (isset($_POST['submit'])) {
  // echo 'start';
  // $name = $_POST['name'];
  // $emp_id = $_POST['emp_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $password = $_POST['position'];
  // $confirm_password = $_POST['cpassword'];
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  $sql = "SELECT * FROM user_data WHERE email = '$email' limit 1";
  $select = $conn->prepare($sql);

  $select->execute();

  if ($select->rowCount() > 0) {

    $row = $select->fetch();
    // var_dump($row['password']);
    // var_dump($select->rowCount());

    if (password_verify($password, $row['password'])) {

      $_SESSION['user_name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['position'] = $row['position'];
      $_SESSION['contact'] = $row['contact'];

      header('location: dashboard.php');
      exit();

    } else {
      $error[] = 'Incorrect email or password!';
      // echo'Incorrect email or password!';
    }
    ;

  } else {
    $error[] = 'Invalid User!';
    // echo 'Incorrect email or password!';
  }
  ;

} 
// else {
  // $error[] = "messed up";
// }

?>



<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'meta.php'
  ?>
  <link rel="stylesheet" href="./assets/logs.css">
  <title>Admin login</title>
</head>

<body>
  <section class="video-bg">
    <video src="./assets/img/abstractbg2.mp4" muted autoplay loop></video>
  </section>
  <div class="d-flex centerIt m-auto col-md-5 col-sm-11">
    <div class="loginboxx p-5 text-light m-auto">
      <img src="./assets/img/logo.jpg" class="avatarx">
      <h1 class="text-center">Login</h1>
      <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
        <?php

        if (isset($error)) {
          foreach ($error as $errors) {
            echo '<span class="error-msg text-center">' . $errors . '</span>';
          }
        }

        ?>
        <input id="email" type="email" class="form-control my-2" name="email" placeholder="Enter email" required>
        <input id="pass" type="password" class="form-control my-2" name="password" placeholder="Enter password" required>
        <input type="submit" class="btn btn-outline-light my-2" name="submit" value="Login" onclick="">
        <button class="btn btn-outline-light my-2" onclick="goBack()">Back</button> <br>
        <a href="./passwordreset.php">Lost your password?</a><br>
        <a href="./accountrequest.php">Dont have an account?</a> <br>
        <a href="./index.php">Home <i class="bx bx-home"></i></a>
      </form>
    </div>
  </div>


  <!-- <script src="./assets/js/login.js"></script> -->
  <!-- <script
src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script src="./assets/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>

   
<script>
  // var email= $('#email').val();
  // var password= $('#pass').val();
  // $.ajax({
  // 					url:"testarea.php",
  // 					type:"POST",
  // 					data: {email:email,password:password},
  // 					success:function(data) {
  //             if(data == 1){
  //               console.log(error);
  //             }
              
  //             // $('.error-msg').append('Fucked up');
  // 					}

  // 				});
</script>
</body>

</html>