<section class="video-bg">
  <video src="./assets/img/abstractbg.mp4" muted autoplay loop no-download></video>
</section>
<nav class="navbar navbar-expand-lg bg-primaryx navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./assets/img/logo.jpg" alt="" width="35" height="35" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activity.php">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
      </ul>
      <form class="d-flex btn-group" role="search">
        <a class="btn btn-outline-light" href="./login.php">Login<i class="bx bx-log-in"></i></a>
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
          data-bs-target="#exampleModal">Donate<i class="bx bx-donate-heart"></i></button>
      </form>
    </div>
  </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="exampleModalLabel">Donate <i class="bx bx-heart"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex align-content-center">
          <div class="text-center">
            <p>Please Select the choice of your Support Below</p>
            <div class="support-hold d-block">
              <div class="switch-box">
                <div class="sbutton-box bg-light">
                  <div id="sbtn"></div>
                  <button type="button" class="stoggle-btn py-1 px-5 text-center" onclick="leftClick()">Local Project
                  </button>
                  <button type="button" class="stoggle-btn py-1 px-5 text-center"
                    onclick="rightClick()">Compassion</button>
                </div>
              </div>
              <div class="support-content project-side m-1">
                <p>
                  Reach us by filling out the form below to support local projects
                  and Put a smile <i class="bx bx-smile"></i> on a Child's face
                </p>
                <form action="">
                  <input type="text" name="name" placeholder="Name" class="form-control m-1" required />
                  <input type="email" name="Email" placeholder="Email" class="form-control m-1" required />
                  <input type="text" class="form-control m-1" placeholder="Your Contact" />
                  <select name="Fund" id="" class="form-control">
                    <option value="">Click to Select Funding<i class="bx bx-"></i></option>
                    <option value="Finance">Financially</option>
                    <option value="Material">Materially</option>
                  </select>
                  <input type="submit" value="Submit" class="btn btn-outline-secondary m-1" />
                </form>
              </div>
              <div class="support-content sponsor-side">
                <p>
                  Sponsor a child from the program through Compassion international
                  by Clicking the button below. <br />Your Support gives hope to a
                  Child <i class="bx bx-smile"></i>
                </p>
                <a href="https://www.compassion.com" class="btn btn-outline-secondary">Sponsor a Child</a>
              </div>
            </div>
            <!-- <button type="button" id="cslose" class="btn btn-outline-secondary">Close</button> -->
            <div>
              <p>Follow Us on our Social Media Platforms</p>
              <div class="social-icons">
                <a href="#"><i title="Mail" class="bx bxs-envelope"></i></a>
                <a href="#"><i title="Facebook" class="bx bxl-facebook"></i></a>
                <a href="#"><i title="Twitter" class="bx bxl-twitter"></i></a>
                <a href="#"><i title="YouTube" class="bx bxl-youtube"></i></a>
                <a href="#"><i title="TikTok" class="bx bxl-tiktok"></i></a>
              </div>
            </div>
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