<?php

use PHPMailer\PHPMailer\PHPMailer;

// include('config/database.php');
include('assets/config1.php');
if (isset($_POST['submit'])) {
  $name = $_POST['yourname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['message'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  //SMTP Settings
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "idduemmanuel19@gmail.com"; //enter you email address
  $mail->Password = 'eufecsflajdkgjca'; //enter you email password
  $mail->Port = 465;
  // $mail->SMTPSecure = "ssl";
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption

  //Email Settings
  $mail->isHTML(true);
  $mail->setFrom($email, $name);

  $mail->addAddress("legacybronsels@gmail.com"); //enter you email address
  $mail->Subject = ("$email ($subject)");
  $mail->Body = $body;

  if ($mail->send()) {
    $status = "success";
    $response = "Email is sent!";

    $sql = $conn->query("INSERT INTO mailbox (name, email,subject, message)
        VALUES ('{$name}', '{$email}', '{$subject}', '{$body}')");
    if (!$sql) {
      die("MySQL query failed.");
    } else {
      $response = 
      array(
        "status" => "alert-success",
        "message" => "We have received your query and stored your information. We will contact you shortly."
      );
    }
    // json_encode(array("status" => $status, "response" => $response));
  } else {
    $status = "failed";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
  }

  exit(json_encode(array("status" => $status, "response" => $response)));
}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'meta.php'
    ?>
  <title>Contact-Awindiri CYDC</title>
  <link rel="stylesheet" href="./assets/style.css" />
</head>

<body>
  <div class="bg-light">
    <?php
    include 'header.php';
    ?>
    <div class="container mt-5 pt-1">
      <div class="row feature-tpx text-light py-5 text-center" data-aos="fade-up">
        <h1>Contact US</h1>
        <p>
          <span><i class="bx bx-mail-send"></i> awindiricdc@gmail.com</span>
          <span><i class="bx bx-phone"></i> 0393193145</span>
        </p>
        <marquee behavior="" direction="" class="pt-2">
          <span><i class="bx bx-mail-send"></i> awindiricdc@gmail.com</span>
          <span><i class="bx bxl-facebook"></i> @awindiricydc</span>
          <span><i class="bx bxl-twitter"></i> @awindiricydc</span>
          <span><i class="bx bxl-youtube"></i> @awindiricdc</span>
        </marquee>
      </div>

      <div class="row py-5">
        <div class="col-md-8 col-sm-11 m-auto border rounded contact-form" data-aos="zoom-in">
          <div class="p-3">
            <p class="text-center">
              Send us a message and we will get back to you as soon as possible!
            </p>
            <form action="" method="POST" autocomplete="off">
              <label for="name" autocapitalize="words">name</label>
              <input type="text" name="yourname" id="name" class="form-control" required />
              <label for="email">email</label>
              <input type="email" name="email" id="email" class="form-control" required />
              <label for="subject">subject</label>
              <input type="text" name="subject" id="subject" class="form-control" />
              <label for="message">message</label>
              <textarea name="message" id="body" cols="30" rows="10" class="form-control"></textarea>
              <p class="text-center">
                <input type="submit" value="Send" id="submit" name="submit" class="m-3 btn btn-outline-primary" />
              </p>
            </form>
          </div>
        </div>
      </div>
      <div class="row p-md-5">
        <div class="col-md-6 col-sm-12 p-3" data-aos="fade-right">
          <p>
            Are you a Center Child? You can access your <a href="https://www.blg.org">MyConnect</a> from here..
            Write to your sponsor, or reply your sponsor. Keep in touch! Click
            here to access your MyConnect. <br> To our dear sponsors, please <a href="https://www.compassion.com">Click
              here</a> to access your Compassion International login Account. You
            can write to your child from here! <a href="https://www.compassion.com"></a> to write to your
            sponsored child.
          </p>
        </div>
        <div class="col-md-6 col-sm-12 p-2 text-center" data-aos="fade-left" id="contactLogins">
          <p>
            Help reach a child in need. Donate to help get a child out of poverty. <br />
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Donate Now <i class="bx bx-gift"></i>
            </button>
          </p>
          <p>
            Or get a child to sponsor, motivate and bless.<br />
            <a class="btn btn-outline-primary" href="https://www.compassion.com">
              Sponsor a Child <i class="bx bx-heart"></i>
            </a>
          </p>
          <p>
            click below to login <br />
            <a class="btn btn-outline-secondary" href="./login.php">Login <i class="bx bx-log-in"></i></a>
          </p>
        </div>
        <div class="row" data-aos="zoom-out">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d915.3646911991542!2d30.91073654583822!3d3.0015485340458867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x176e616be826eaf9%3A0xe6779f6ae238a686!2sAwindiri%20Child%20Development%20Center!5e1!3m2!1sen!2sug!4v1682524355444!5m2!1sen!2sug"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>