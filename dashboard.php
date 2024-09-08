<?php

include './assets/config1.php';

session_start();

if (!isset($_SESSION['user_name'])) {
  // header('location:dashboard.php');
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'meta.php';
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/dashboard.css" />
  <link rel="stylesheet" href="./assets/boxicons-2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="./assets/boxicons.css" />
  <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
  <title>ACYDC Dashboard</title>



  <!-- temporary link and script files -->
  <!-- <script src="https://d3js.org/d3.v4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" /> -->
  <!-- <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" /> -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> -->
  </script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> -->
  </script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
</head>

<body class="bg-light">
  <section class="video-bg">
    <video src="./assets/img/abstractbg.mp4" muted autoplay loop></video>
  </section>
  <div class="dsidebar dclose">
    <div class="dlogo-details">
      <i class="bx bx-category-alt"></i>
      <span class="dlogo_name">ACYDC</span>
    </div>
    <ul class="dnav-links">
      <li>
        <a href="#dashboard">
          <i class="bx bx-grid-alt"></i>
          <span class="dlink_name">Dashboard</span>
        </a>
        <ul class="dsub-menu dblank">
          <li><a class="dlink_name" href="#dashboard">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="diocn-link">
          <a href="#analytics">
            <i class="bx bx-line-chart"></i>
            <span class="dlink_name">Analytics</span>
          </a>
          <i class="bx bxs-chevron-down d-arrow"></i>
        </div>
        <ul class="dsub-menu">
          <li><a class="dlink_name" href="#analytics">Analytics</a></li>
          <li><a href="#revenue">Revenue</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#employees">Employee details</a></li>
        </ul>
      </li>
      <li>
        <div class="diocn-link">
          <a href="#messages">
            <i class="bx bx-book-alt"></i>
            <span class="dlink_name">Messages</span>
          </a>
          <i class="bx bxs-chevron-down d-arrow"></i>
        </div>
        <ul class="dsub-menu">
          <li><a class="dlink_name" href="#messages">Messages</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#updates">Updates</a></li>
          <li><a href="#chat">Chat</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-selection"></i>
          <span class="dlink_name">Projects</span>
        </a>
        <ul class="dsub-menu dblank">
          <li><a class="dlink_name" href="#">Projects</a></li>
        </ul>
      </li>
      <li>
        <a href="#charts">
          <i class="bx bx-pie-chart-alt"></i>
          <span class="dlink_name">Charts</span>
        </a>
        <ul class="dsub-menu dblank">
          <li><a class="dlink_name" href="#charts">Charts</a></li>
        </ul>
      </li>
      <li>
        <div class="diocn-link">
          <a href="#report">
            <i class="bx bx-layer"></i>
            <span class="dlink_name">Reports</span>
          </a>
          <i class="bx bxs-chevron-down d-arrow"></i>
        </div>
        <ul class="dsub-menu">
          <li><a class="dlink_name" href="#report">Reports</a></li>
          <li><a href="#admins">Admins</a></li>
          <li><a href="#cgs">CGs</a></li>
        </ul>
      </li>
      <li>
        <a href="#blog">
          <i class="bx bx-history"></i>
          <span class="dlink_name">Blog</span>
        </a>
        <ul class="dsub-menu dblank">
          <li><a class="dlink_name" href="#blog">Blog</a></li>
        </ul>
      </li>
      <li>
        <a href="#settings">
          <i class="bx bx-cog"></i>
          <span class="dlink_name">Settings</span>
        </a>
        <ul class="dsub-menu dblank">
          <li><a class="dlink_name" href="#settings">Settings</a></li>
        </ul>
      </li>
      <li>
        <div class="dprofile-details">
          <a href="logout.php"><i class="bx bx-log-out"></i><span>Logout</span></a>
        </div>
      </li>
    </ul>
  </div>
  <section class="dhome-section container-fluid m-0" id="dashboard">
    <div class="dhome-content">
      <div>
        <i class="text-light bx bx-menu rounded mt-2"></i>
        <span class="dtext display-6 ps-5 ms-2">Dashboard</span>
      </div>
      <div class="dprofile d-flex align-item-center">
        <div class="text-center">
          <span class="h5 fw-bold">
            <?php echo $_SESSION['user_name'] ?>
          </span> <br>
          <span class="">
            <?php echo $_SESSION['position'] ?>
          </span>
        </div>
        <div class="top-dp">
          <img src="./assets/img/childrentour.jpg" alt="dp" class="img-fluid">
        </div>
        <div class="dicon">
          <i class="bx bxs-chevron-down" data-bs-toggle="modal" data-bs-target="#acModal"></i>
        </div>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-8 p-2">
        <div class="p-2 bg-one rounded">
          <p class="h3">Welcome, <span class="fw-bold text-primary">
              <?php echo $_SESSION['user_name'] ?>
            </span>!</p>
          <p>Here's a quick overview</p>
          <div class="d-flex">
            <div class="col-8">
              <div class="chartCard">
                <div class="chartBox">
                  <canvas id="myChart00"></canvas>
                </div>
              </div>
            </div>
            <div class="col-4">
              <h5>Budget allocation</h5>
              <p>This is the graphic representation of the current budget allocation for the different sectors. All
                planning shall fall in line with this allocation</p>
              <small>Have a great day!</small> <br>
              <a href="#charts" class="mb-0">Browse Charts &raquo</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 p-2">
        <div class="bg-one rounded p-2 h-100 updatex">
          <h2>Quick Updates</h2>
          <div class="d-flex bg-light rounded-5 m-1">
            <img src="./assets/img/childrentour.jpg" class="img-fluid" alt="dp">
            <p class="h6 my-auto ps-2">Admin_one <span class="text-secondary"> online</span> <small>1 mins ago</small>
            </p>
          </div>
          <div class="d-flex bg-light rounded-5 m-1">
            <img src="./assets/img/childrentour.jpg" class="img-fluid" alt="dp">
            <p class="h6 my-auto ps-2">Admin_two <span class="text-secondary"> On leave</span> <small>2 min ago</small>
            </p>
          </div>
          <div class="d-flex bg-light rounded-5 m-1">
            <img src="./assets/img/childrentour.jpg" class="img-fluid" alt="dp">
            <p class="h6 my-auto ps-2">Admin_three <span class="text-secondary"> Back from leave</span>
              <small>3 mins ago</small>
            </p>
          </div>
          <div class="d-flex bg-light rounded-5 m-1">
            <img src="./assets/img/childrentour.jpg" class="img-fluid" alt="dp">
            <p class="h6 my-auto ps-2">Admin_four <span class="text-secondary"> online</span> <small>6 mins ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-block" id="analytics">
      <h4 class="text-center">Revenue</h4>
      <div class="d-flex">
        <div class="col-6 p-1 ps-0">
          <div class="rounded bg-one p-2">
            <h4>Funds received</h4>
            <div>
              <div class="chartCard">
                <div class="chartBox col-md-12">
                  <canvas id="myChartDoughnut"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 p-1 pe-0">
          <div class="bg-one rounded p-2">
            <h4>Expenses</h4>
            <div>
              <div class="chartCard">
                <div class="chartBox col-md-12">
                  <canvas id="myChartPie"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex p-2" id="events">
      <div class="bg-one rounded">
        <!-- <div class="display-6 text-center fw-bold">Events</div> -->
        <h3 class="text-center">Events</h3>
        <div class="d-flex">
          <div class="col-8 p-1">
            <div class="container">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                      <h2 class="pull-left">Event Details</h2>
                      <a href="create.php" class="btn btn-outline-primary pull-right"><i class="bx bx-plus"></i> Add New
                        Event</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "assets/config1.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM events";
                    if ($result = mysqli_query($conn, $sql)) {
                      if (mysqli_num_rows($result) > 0) {
                        echo '<table id="example" class="table table-borderless table-striped table-primary table-hover">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>Event date</th>";
                        echo "<th>Event</th>";
                        echo "<th>Event Location</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['id'] . "</td>";
                          echo "<td>" . $row['event_date'] . "</td>";
                          echo "<td>" . $row['event'] . "</td>";
                          echo "<td>" . $row['event_location'] . "</td>";
                          echo "<td>";
                          echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="bx bx-low-vision text-primary"></span></a>';
                          echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="bx bx-pencil"></span></a>';
                          echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="bx bx-trash text-danger"></span></a>';
                          echo "</td>";
                          echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                      } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                      }
                    } else {
                      echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    // mysqli_close($conn);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 p-2 rounded bg-one h-100">
            <h4 class="text-center">Scheduled Events</h4>
            <p>Mark your important events</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex p-2" id="employees">
      <div class="bg-one rounded">
        <h3 class="text-center">Employee Details</h3>
        <div class="d-flex">
          <div class="col-8 p-1">
            <div class="container">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                      <h2 class="pull-left">Employees Details</h2>
                      <a href="create.php" class="btn btn-outline-primary pull-right"><i class="fa fa-plus"></i> Add New
                        Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "assets/config1.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM emp";
                    if ($result = mysqli_query($conn, $sql)) {
                      if (mysqli_num_rows($result) > 0) {
                        echo '<table id="example" class="table table-borderless table-striped table-primary table-hover">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Id</th>";
                        echo "<th>First Name</th>";
                        echo "<th>Last Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['id'] . "</td>";
                          echo "<td>" . $row['firstname'] . "</td>";
                          echo "<td>" . $row['lastname'] . "</td>";
                          echo "<td>" . $row['email'] . "</td>";
                          echo "<td>";
                          echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="bx bx-low-vision text-primary"></span></a>';
                          echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="bx bx-pencil"></span></a>';
                          echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="bx bx-trash text-danger"></span></a>';
                          echo "</td>";
                          echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                      } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                      }
                    } else {
                      echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    // mysqli_close($conn);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 p-2 rounded bg-one h-100">
            <h4 class="text-center">Successful engagements</h4>
            <p>Here are events that are marked successful. give a feedback on what you think</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-block p-2" id="messages">
      <div class="bg-one rounded">
        <h4 class="text-center pt-2">Messages</h4>
        <div class="d-flex">
          <div class="col-7 d-flex">
            <div class="col-6 p-1" id="team">
              <h4 class="text-center">WebSite & Blog</h4>
              <hr>
              <h5 class="text-danger">You have no new messages</h5>
            </div>
            <div class="col-6 p-1" id="updates">
              <h4 class="text-center">Updates</h4>
              <hr>
              <h5 class="text-success">You have one new messages</h5>
            </div>
          </div>
          <div class="col-5 p-2" id="chat">
            <div class="rounded bg-one h-100 p-2">
              <h4 class="text-center">Team Chat</h4>
              <div class="bg-light rounded d-block" style="height: 50vh;">
                <div class="pull-left bg-primary m-1 rounded-end-5">
                  <small>Name</small>
                  <p>Message Lorem ipsum, m ipsum, dolor slorem5</p>
                </div>
                <div class="pull-right bg-info m-1 rounded-start-5">
                  <small class="text-end">Name</small>
                  <p>Message Lorem ipsum, dolor sit ame</p>
                </div>
                <div class="input-group bg-secondary rounded mb-0">
                  <input type="text" class="form-control" id="" placeholder="Type here" required="">
                  <span class="input-group-text"><i class="bx bxl-telegram"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex" id="charts">
      <div class="col-5">
        <div class="rounded bg-one p-2 h-100">
          <h3 class="text-center">Revenue</h3>
          <div class="chartCard">
            <div class="chartBox">
              <canvas id="myChartLine"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-7">
        <div class="rounded bg-one p-2">
          <h3 class="text-center">Yearly overview</h3>
          <div class="chartCard">
            <div class="chartBox">
              <canvas id="myChartBar"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-block" id="report">
      <h4 class="text-center" id="admins">Admin Staff</h4>
      <div class="d-flex p-2">
        <div class="col-4 p-1">
          <div class="p-1 bg-one rounded">
            <h4 class="text-center">PD</h4>
            <p>Two last <span class="text-info">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>
        <div class="col-4 p-1">
          <div class="p-1 bg-one rounded">
            <h4 class="text-center">CDO-SDR</h4>
            <p>Two last <span class="text-primary">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>
        <div class="col-4 p-1">
          <div class="p-1 bg-one rounded">
            <h4 class="text-center">CDO-H</h4>
            <p>Two last <span class="text-info">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-block" id="cgs">
      <h4 class="text-center">Support Staff</h4>
      <div class="d-flex p-2">
        <div class="col-3 p-1">
          <div class="rounded bg-one p-2">
            <h4 class="text-center">Reception</h4>
            <p>Two last <span class="text-info">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>
        <div class="col-3 p-1">
          <div class="rounded bg-one p-2">
            <h4 class="text-center">Welfare</h4>
            <p>Two last <span class="text-primary">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>
        <div class="col-3 p-1">
          <div class="rounded bg-one p-2">
            <h4 class="text-center">CG</h4>
            <p>Two last <span class="text-warning">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>

        <div class="col-3 p-1">
          <div class="rounded bg-one p-2">
            <h4 class="text-center">Security</h4>
            <p>Two last <span class="text-success">Reports</span></p>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name1" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <div class="input-group bg-secondary rounded my-1">
              <input type="text" class="form-control" id="" placeholder="File Name2" required="">
              <span class="input-group-text"><i class="bx bx-download"></i></span>
              <span class="input-group-text"><i class="bx bx-low-vision"></i></span>
            </div>
            <a href="#" class="text-center" data-bs-toggle="modal" data-bs-target="#reportModal"> Browse More &raquo</a>
          </div>
        </div>
      </div>
    </div>

    <!-- report modal here -->
    <div class="modal fade" id="reportModalinsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="exampleModalLabel">Reports <i class="bx bx-task"></i></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-md-12 rounded bg-info p-2">
              <h6>Report Upload</h6>
              <div class="input-group">
                <i class="input-group-text">choose file</i>
                <input type="text" enctype="multipart" class="form-control">
              </div>
              <input type="text" placeholder="File name" class="form-control m-1">
              <select class="form-select m-1" aria-label="Default select example">
                <option selected>Uploaded By:</option>
                <option value="1">PD</option>
                <option value="2">CDO-R</option>
                <option value="3">CDO-H</option>
                <option value="3">CDO-SDR</option>
                <option value="3">CG</option>
                <option value="3">Support staff</option>
              </select>
              <input type="text" placeholder="Your name" class="form-control m-1">
              <input type="submit" name="submit" value="Submit" class="btn btn-outline-light">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->
    <!-- report modal here -->
    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="exampleModalLabel">Reports <i class="bx bx-task"></i></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="m-1 clearfix">
                <a href="create.php" class="btn btn-outline-primary pull-right"><i class="bx bx-plus"></i> Add New
                  Employee</a>
              </div>
              <?php
              // Include config file
              require_once "assets/config1.php";

              // Attempt select query execution
              $sql = "SELECT * FROM report_table";
              if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  echo '<table id="example" class="table table-borderless table-striped table-primary table-hover">';
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th>Id</th>";
                  echo "<th>Title</th>";
                  echo "<th>File</th>";
                  echo "<th>Uploaded By</th>";
                  echo "<th>Action</th>";
                  echo "</tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['sno'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['file'] . "</td>";
                    echo "<td>" . $row['uploaded_by'] . "</td>";
                    echo "<td>";
                    echo '<a href="read.php?id=' . $row['sno'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="bx bx-low-vision text-primary"></span></a>';
                    echo '<a href="update.php?id=' . $row['sno'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="bx bx-pencil"></span></a>';
                    echo '<a href="delete.php?id=' . $row['sno'] . '" title="Delete Record" data-toggle="tooltip"><span class="bx bx-trash text-danger"></span></a>';
                    echo "</td>";
                    echo "</tr>";
                  }
                  echo "</tbody>";
                  echo "</table>";
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
              } else {
                echo "Oops! Something went wrong. Please try again later.";
              }

              // Close connection
              mysqli_close($conn);
              ?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <!-- blog edit modal here -->
    <div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="exampleModalLabel">Blog <i class="bx bx-world"></i></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <input type="text" placeholder="Enter The Post Title" class="form-control my-1">
              <input type="text" placeholder="Enter The Post Body" class="form-control my-1">
              <div class="input-group bg-secondary rounded my-1">
                <span class="input-group-text">Choose File</span>
                <input type="text" class="form-control" id="" placeholder="Filename" required="">
              </div>
              <input type="submit" placeholder="submit" class="btn btn-outline-primary">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <!-- account modal here -->
    <div class="modal fade" id="acModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fs-3" id="exampleModalLabel">My Account <i class="bx bx-cog"></i></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="ac-overview bg-one d-block mx-auto rounded h-auto p-3 w-100">
              <div class="dp">
                <img src="./assets/img/childrentour.jpg" class="img-fluid" alt="dp">
              </div>
              <div class="d-block text-center fw-bold h5 py-2">
                <p>Name:
                  <?php echo $_SESSION['user_name'] ?>
                </p>
                <p>Position:
                  <?php echo $_SESSION['position'] ?>
                </p>
                <p>Email:
                  <?php echo $_SESSION['email'] ?>
                </p>
                <p>Number:
                  <?php echo $_SESSION['contact'] ?>
                </p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <!-- site edit modal here -->
    <div class="modal fade" id="siteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="exampleModalLabel">Blog <i class="bx bx-world"></i></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <input type="text" placeholder="Enter The Post Title" class="form-control my-1">
              <input type="text" placeholder="Enter The Post Body" class="form-control my-1">
              <div class="input-group bg-secondary rounded my-1">
                <span class="input-group-text">Choose File</span>
                <input type="text" class="form-control" id="" placeholder="Filename" required="">
              </div>
              <input type="submit" placeholder="submit" class="btn btn-outline-primary">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <div class="row d-block" id="blog">
      <h4 class="text-center">Updates</h4>
      <div class="d-flex">
        <div class="col-7 p-2">
          <div class="rounded bg-one p-2">
            <h4 class="text-center">Blog</h4>
            <p>The Blog is one point of reach to all who want to hear from us! Write, edit and delete posts on the blog
              to keep the audience engaged.</p>
            <ul>
              <li data-bs-toggle="modal" data-bs-target="#blogModal" data-bs-whatever="Add Post">Add post <i
                  class="bx bx-upload"></i></li>
              <li data-bs-toggle="modal" data-bs-target="#blogModal" data-bs-whatever="Remove Post">Remove a post <i
                  class="bx bx-trash-alt"></i></li>
              <li data-bs-toggle="modal" data-bs-target="#blogModal" data-bs-whatever="Edit Post">Edit Post <i
                  class="bx bx-rotate-left"></i></li>
              <li data-bs-toggle="modal" data-bs-target="#blogModal" data-bs-whatever="Add Image">Include image <i
                  class="bx bx-camera"></i></li>
            </ul>
          </div>
        </div>
        <div class="col-5 p-2">
          <div class="rounded bg-one p-2">
            <h4 class="text-center">Site</h4>
            <h6>Edit the site gallery <i class="bx bx-list-plus"></i> , and write newletters <i
                class="bx bx-spreadsheet"></i> to all those who have subscribed from here!</h6>
            <ul>
              <li data-bs-toggle="modal" data-bs-target="#siteModal" data-bs-whatever="Edit Image gallery">Images <i
                  class="bx bx-images"></i></li>
              <li data-bs-toggle="modal" data-bs-target="#siteModal" data-bs-whatever="Edit Video gallery">Videos <i
                  class="bx bx-video"></i></li>
              <li data-bs-toggle="modal" data-bs-target="#siteModal" data-bs-whatever="Edit Newsletter">Newsletter <i
                  class="bx bx-detail"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-block p-2" id="settings">
      <h4 class="text-center">Profile</h4>
      <div class="d-flex bg-one rounded p-3">
        <div class="ac-settings col-5 bg-one m-auto rounded">
          <div class="rounded p-3">
            <div class="ac-set">
              <p>Edit your account information from here.</p>
              <p>Username <input type="text" placeholder="Username" class="form-control"></p>
              <p>Add Contact <input type="text" placeholder="Contact" class="form-control"></p>
              <p>Change password </p>
              <input type="password" placeholder="Current Password" class="my-1 form-control">
              <input type="password" placeholder="New Password" class="my-1 form-control">
              <input type="password" placeholder="Confirm Password" class="my-1 form-control">
              <button class="btn btn-outline-primary">Change</button>
              <a href="#report" class="btn btn-outline-primary">View Reports</a>
              <div class="dropdown">
                <button class="btn btn-outline-primary my-2 dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Upload
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><button class="dropdown-item" href="#" data-bs-toggle="modal"
                      data-bs-target="#reportModalinsert">Report</button></li>
                  <li><a class="dropdown-item" href="#">Attendance</a></li>
                  <li><a class="dropdown-item" href="#">Other</a></li>
                </ul>
              </div>
            </div>
            <div class="ac-notifs">
              <h3>Notifications <i class="bx bx-task"></i></h3>
              <p class="text-danger">No notifications</p>
            </div>
          </div>
        </div>
        <div class="ac-overview col-4 bg-one d-block mx-auto rounded h-auto p-3">
          <div class="dp">
            <img src="./assets/img/childrentour.jpg" class="img-fluid" alt="dp">
          </div>
          <div class="d-block text-center fw-bold h5 py-2">
            <p>Name:
              <?php echo $_SESSION['user_name'] ?>
            </p>
            <p>Position:
              <?php echo $_SESSION['position'] ?>
            </p>
            <p>Email:
              <?php echo $_SESSION['email'] ?>
            </p>
            <p>Number:
              <?php echo $_SESSION['contact'] ?>
            </p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="./assets/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script>
    const blogModal = document.getElementById('blogModal')
    const siteModal = document.getElementById('siteModal')
    if (blogModal) {
      blogModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const titleContext = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitle = blogModal.querySelector('.modal-title')
        // const modalBodyInput = blogModal.querySelector('.modal-body input')

        modalTitle.textContent = `${titleContext}`
        // modalBodyInput.value = recipient
      })
    }
    if (siteModal) {
      siteModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const titleContext = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const modalTitle = siteModal.querySelector('.modal-title')
        // const modalBodyInput = blogModal.querySelector('.modal-body input')

        modalTitle.textContent = `${titleContext}`
        // modalBodyInput.value = recipient
      })
    }
  </script>
  <script>
    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly Sales',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart00'),
      config
    );
    // setup 
    const dataBar = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly Sales',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const configBar = {
      type: 'bar',
      data: dataBar,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChartBar = new Chart(
      document.getElementById('myChartBar'),
      configBar
    );



    //piechart  
    // setup 
    const dataPie = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'piechart',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const configPie = {
      type: 'pie',
      data: dataPie,
      options: {
        aspectRatio: 2,
      }
    };

    // render init block
    const myChartPie = new Chart(
      document.getElementById('myChartPie'),
      configPie
    );


    //line  
    // setup 
    const dataLine = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'linechart',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const configLine = {
      type: 'line',
      data: dataLine,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChartLine = new Chart(
      document.getElementById('myChartLine'),
      configLine
    );


    //dough ut
    // setup 
    const dataDoughnut = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'doughnutchart',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const configDoughnut = {
      type: 'doughnut',
      data: dataDoughnut,
      options: {
        aspectRatio: 2,
      }
    };

    // render init block
    const myChartDoughnut = new Chart(
      document.getElementById('myChartDoughnut'),
      configDoughnut
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
  </script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</body>

</html>