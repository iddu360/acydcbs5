<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Hans McMurdy">
  <title>Bootstrap 5 Navbar Bottom Template · Bootstrap</title>
  <meta name="title" content="#JavaScriptFirst">
  <meta name="description"
    content="Learn how to code with #JavaScriptFirst: https://github.com/HansUXdev/JavaScript-First">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/navbar-bottom/">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

  <main class="container">
    <div class="d-flex align-items-center p-3 my-3 text-dark-50 bg-purple rounded shadow-sm">
      <img class="mr-3" src="https://hansmcmurdy.com/JavaScript-First/logo.svg" alt="" width="48" height="48">
      <div class="lh-1">
        <h6 class="mb-1 text-dark lh-2">#JavaScriptFirst</h6>
        <small class="text-sm-left lh-base font-normal text-lowercase text-decoration-none text-reset">
          Learn Modern JavaScript, from an Open Source Book that teaches anyone how to code with JavaScript using the
          node.js runtime environment rather than a browser and by the end, you will build a server and a website using
          JavaScript.
        </small>
      </div>
    </div>
  </main>


  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bottom navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown"
              aria-expanded="false">Dropup</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown10">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</body>

</html>