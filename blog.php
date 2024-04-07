<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include 'meta.php';
  ?>
  <title>ACYDC Blog</title>
  <link rel="stylesheet" href="./assets/style.css" />
</head>
<body>
  <?php
  include 'header.php';
  ?>



  <div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal00" data-bs-whatever="@mdo">Open modal for @mdo</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal00" data-bs-whatever="@fat">Open modal for @fat</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal00" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
  
  <div class="modal fade" id="exampleModal00" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>



  <script>
    const exampleModal00 = document.getElementById('exampleModal00')
    if (exampleModal00) {
      exampleModal00.addEventListener('show.bs.modal', event => {
      // Button that triggered the modal
      const button = event.relatedTarget
      // Extract info from data-bs-* attributes
      const recipient = button.getAttribute('data-bs-whatever')
      // If necessary, you could initiate an Ajax request here
      // and then do the updating in a callback.

      // Update the modal's content.
      const modalTitle = exampleModal00.querySelector('.modal-title')
      const modalBodyInput = exampleModal00.querySelector('.modal-body input')

      modalTitle.textContent = `New message to ${recipient}`
      modalBodyInput.value = recipient
    })
    }
  </script>
  </div>


  <?php
  include 'footer.php';
  ?>
</body>
</html>