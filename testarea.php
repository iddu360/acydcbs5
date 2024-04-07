<?php

include './assets/config.php';


// if (isset($_POST['submit'])) {
  // $name = 'mark';
  // $emp_id = $_POST['emp_id'];
  // $email = 'iddu@gmail.com';
  // $password = '123abc';
  // $confirm_password = '123abc';


  // $select = "SELECT * FROM user_data WHERE email = '$email' LIMIT 1";
  // $stmt = $conn->prepare($select);
  // $stmt->execute();

  // // if ($stmt->errorCode() !== '00000') {
  //   // $error[] = 'Error inserting data: ' . implode(', ', $stmt->errorInfo());
  // // }
  // // if (!empty($error)) {
  //   // var_dump($error);
  // // }

  // $user = $stmt->fetchAll();
  // $user_count = $stmt->rowCount();

  // var_dump( $user_count);

  // if ($user_count > 0) {
  //   $error[] = 'User already exists!';
  //   echo 'User already exists!';
  //   header('location:login.php');
  // } 
  // else {
  //   if ($password !== $confirm_password) {
  //     $error[] = 'Passwords do not match!';
  //     echo 'Passwords do not match!';
  //   } 
  //   else {
  //     $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  //     $insert = "INSERT INTO user_data(name, email, password) VALUES('$name', '$email', '$hashed_password')";
  //     $stmt = $conn->prepare($insert);
  //     $stmt->execute();
  //     ;
  //     if($stmt->rowCount()> 0){
  //       echo 'recorded Entered Successfully';
  //       header('location:login.php');
  //     }
  //     // header('location:logins.php');
  //   }
  // }
// }

// $hashed_password = password_hash($password, PASSWORD_BCRYPT);
// $sql ="SELECT * FROM user_data WHERE email = '$email' limit 1";
// $select = $conn->prepare($sql);

//   $select->execute();

//   if ($select->rowCount() > 0) {

//     $row = $select->fetch();
//     // var_dump($row['password']);
//     // var_dump($select->rowCount());

//     if (password_verify($password, $row['password'])) {

//       // $_SESSION['user_name'] = $row['name'];

//       header('location: dashboard.php');
//       exit();

//     } else {
//       $error[] = 'Incorrect email or password!';
//       echo'Incorrect email or password!';
//     }
//     ;

//   } else {
//     $error[] = 'Incorrect email or password!';
//     echo 'Incorrect email or password!';
//   }
//   ;

// // }


// if (isset($_POST['submit'])) {
//   // $name = $_POST['name'];
//   // $emp_id = $_POST['emp_id'];
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   // $confirm_password = $_POST['cpassword'];
//   $hashed_password = password_hash($password, PASSWORD_BCRYPT);
// $sql ="SELECT * FROM user_data WHERE email = '$email' limit 1";
// $select = $conn->prepare($sql);

//   $select->execute();

//   if ($select->rowCount() > 0) {

//     $row = $select->fetch();
//     // var_dump($row['password']);
//     // var_dump($select->rowCount());

//     if (password_verify($password, $row['password'])) {

//       // $_SESSION['user_name'] = $row['name'];

//       header('location: dashboard.php');
//       exit();

//     } else {
//       // $error= 'Incorrect email or password!';
//       echo'Incorrect email or password!';
//     }
//     ;

//   } else {
//     // $error = 'Incorrect email or password!';
//     echo 'Incorrect email or password!';
//   }
  

// }else{
//   echo 'fuck u';
// }
                  require_once('assets/config.php');

                  $sql3 = 'Select * from img_table';
                  $query = $conn->prepare($sql3);
                  $query->execute();
                  $result = $query->fetchAll();
                  // var_dump($result['image']);

                  foreach ($result as $row) {
                    echo $row["image"] . ' ';
                    echo $row['album'] . ' ';
                    echo $row['caption'] . ' ';
                    echo $row['note'] . ' ';
                    echo '<br>';
                    // echo  "class= 'col-md-6 col-sm-12 imghvr-shutter-in-horiz picX ' . $row["album"]'";
                  
              }
              $test = "boy";
              echo  "class= 'col-md-6 col-sm-12 imghvr-shutter-in-horiz picX  $test ";



?>