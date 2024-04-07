<?php

session_start();

// $servername="localhost";
// $username="root";
// $password="lonewolffe";
// try{
// $connect=new PDO("mysql:host=$servername;dbname=acydc_db",$username,$password);
// $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected successfully";
// }catch(PDOException $e){
// echo "<h2>Failed to connect to server: " . $e->getMessage() . "</h2>";
// }

$connect = new mysqli('localhost', 'root', 'lonewolffe', 'acydc_db');

if (isset($_POST["add_to_cart"])) {
  if (isset($_SESSION["shopping_cart"])) {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if (!in_array($_GET["id"], $item_array_id)) {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][$count] = $item_array;
    } else {
      echo '<script>alert{"Item Already added!"}</script>';
      echo '<script>window.location="cart.php</script>';
    }
  } else {
    $item_array = array(
      'item_id' => $_GET["id"],
      'item_name' => $_POST["hidden_name"],
      'item_price' => $_POST["hidden_price"],
      'item_quantity' => $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}

if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
      if ($values["item_id"] == $_GET["id"]) {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Removed!")</script>';
        echo '<script>window.locaton="cart.php"</script>';
      }
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

  <title>ACYDC online Shop</title>

  <script src="./assets/script.js"></script>
  <!-- <link rel="stylesheet" href="./assets/logs.css" /> -->
  <style>
    body {
      height: 100vh;
    }

    .container {
      overflow: scroll;
      /* overflow-y: hidden; */
    }

    .container::-webkit-scrollbar {
      display: none;
    }

    .container form img {
      width: 100%;
    }
  </style>
</head>

<body class="bg-secondary d-flex align-item-center align-content-center">
  <section class="container my-3 bg-light rounded">
    <h3 class="text-center">Shopping cart</h3>
    <div class="d-flex row">

      <?php

      $query = "SELECT * FROM product_table ORDER BY id ASC";
      $result = mysqli_query($connect, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          ?>

          <div class="col-md-3 p-2">
            <form method="post" class="d-flex row p-2" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
              <div
                style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; text-align:center;"
                class="">
                <img src="image/<?php echo $row["image"]; ?>" alt="" class="img-responsive">
                <h4 class="text-info">
                  <?php echo $row["name"]; ?>
                </h4>
                <h4 class="text-danger">
                  <?php echo $row["price"]; ?>
                </h4>
                <input type="text" name="quantity" min="1" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary"
                  value="add to cart" />
              </div>
            </form>
          </div>

          <?php
        }
      }
      ;
      ?>
    </div>

    <div style="clear:both"></div>
    <br>
    <h3>Order details</h3>
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th width="40%">Item Name</th>
          <th width="10%">Quantity</th>
          <th width="20%">Price</th>
          <th width="15%">Total</th>
          <th width="5%">Action</th>
        </tr>
        <?php
        if (!empty($_SESSION["shopping_cart"])) {
          $total = 0;
          foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            ?>

            <tr>
              <td>
                <?php echo $values["item_name"]; ?>
              </td>
              <td>
                <?php echo $values["item_quantity"]; ?>
              </td>
              <td>
                <?php echo $values["item_price"]; ?>
              </td>
              <td>
                <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?>
              </td>
              <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
                    class="text-danger">Remove</span></a></td>
            </tr>

            <?php
            $total = $total + ($values["item_quantity"] * $values["item_price"]);
          }
          ?>
          <tr>
            <td colspan="3">Total</td>
            <td>
              <?php echo number_format($total, 2); ?>
            </td>
            <td></td>
          </tr>
          <?php
        }
        ?>
      </table>
      <button class="btn btn-outline-primary mb-3 text-center">Proceed to checkout</button>
    </div>
  </section>
</body>

</html>