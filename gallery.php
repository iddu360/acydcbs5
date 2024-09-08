<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'meta.php'
    ?>
  <title>Gallery-Awindiri CYDC</title>
  <link rel="icon" href="./assets/img/logo.jpg" />
  <link rel="stylesheet" href="./assets/style.css" />
</head>

<body>
  <div class="bg-light">

    <?php
    include './header.php';
    ?>

    <div class="container mt-5">
      <!-- images only -->
      <div id="gallery-top" class="">
        <input type="radio" name="photos" id="check1" value="" checked />
        <input type="radio" name="photos" id="check2" value="" checked />
        <input type="radio" name="photos" id="check3" value="" checked />
        <input type="radio" name="photos" id="check4" value="" checked />
        <input type="radio" name="photos" id="check5" value="" checked />
        <input type="radio" name="photos" id="check6" value="" checked />

        <div class="text-center container mt-3">
          <div class="feature-tpx text-light px-2 mt-5 py-4 gy-4">
            <h1 class="my-4" data-aos="fade-down">Our Photo Gallery</h1>
            <div class="top-contentX mx-auto" data-aos="zoom-in">
              <p class="h2 p-2 m-auto rounded bg-secondary w-100 h-100">
                Photos
              </p>
              <label for="check1"><text>All</text> <i class="bx bx-user"></i></label>
              <label for="check2"><text>Social</text> <i class="bx bx-user"></i></label>
              <label for="check3"><text>Skills</text> <i class="bx bx-user"></i></label>
              <label for="check4"><text>Education</text> <i class="bx bx-user"></i></label>
              <label for="check5"><text>Spiritual</text> <i class="bx bx-user"></i></label>
              <label for="check6"><text>Health</text> <i class="bx bx-user"></i></label>
            </div>
          </div>

          <div class="photo-galleryX bg-light">
            <div class="row g-3 mt-2 mb-3">


              <?php
              require_once('assets/config.php');

              $sql3 = 'Select * from img_table';
              $query = $conn->prepare($sql3);
              $query->execute();
              $result = $query->fetchAll();
              foreach ($result as $row) {

                ?>
                <div class=" <?php echo $row['album'] . ' col-md-6 col-sm-12 imghvr-shutter-in-horiz picX'; ?>">
                  <img src="image/<?php echo $row['image']; ?>" class="img-fluid m-1" />
                  <figcaption class="m-2 mround">
                    <small>
                      <?php echo $row['caption']; ?>
                    </small>
                  </figcaption>
                  <p class="text-dark text-center p-2">
                    <?php echo $row["album"]; ?>
                  </p>
                </div>
              <?php } ?>

            </div>
          </div>
        </div>

        <!-- videos only -->

        <section class="p-2 love rounded" style="z-index: 100; position: relative;" id="videogallery">
          <h3 class="heading" data-aos="zoom-in">Video Gallery</h3>
          <div class="containervX">
            <div class="main-video">
              <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
              <h3 class="title">Adriko Samuel's Story-1</h3>
            </div>

            <div class="video-list">
              <div class="vid active">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">Adriko Samuel's Story-1</p>
              </div>
              <div class="vid">
                <!-- <video src="./assets/vid/production ID_4982413.mp4" muted></video> -->
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">02 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">03 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">04 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">05 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">06 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">07 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">08 video title goes here</p>
              </div>
              <div class="vid">
                <iframe src="https://www.youtube.com/embed/F_PO5athvEM" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
                <p class="title h3">09 video title goes here</p>
              </div>
            </div>
          </div>
        </section>
        <div class="row text-center py-3" data-aos="fade-up">
          <h3>Help Us Reach out!</h3>
          <p>
            Support Awindiri CYDC to impact more lives and change the
            community, enriching Christian foundation and bringing up children
            and youth with strong principles and upright social relations.
          </p>
          <div>
            <div class="btn-group pb-3">
              <button role="button" class="btn btn-outline-primary">
                Submit Story
              </button>
              <button role="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Donate
              </button>
              <a role="button" class="btn btn-outline-primary" href="./gallery.php#videogallery">
                Watch Stories
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>