<?php
  include_once "includes/dbh.inc.php";
?>

<?php 

  $sql = "SELECT * FROM item_list;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mains.css?v=<?php echo rand() ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Product list</title>
  </head>
  <body>

<header>
   
    <div class="container content-size product-list-main my-5">
      <div class="row">
        <h1>Add Product</h1>
        <a href="/add-product.php" class="btn btn-info ml-5">Add Product</a>
          <form action="" class="ml-auto">
            <select class="btn btn-warning">
              <option value="mass-delete">Mass Delete</option>
            </select>
            <input class="btn btn-info" type="submit" onclick="alert('not yet')">
          </form>
      </div>
    </div>
  </header>






  <section class="content-size">
    <div class="container-fluid">
      <div class="row">
        

      <?php foreach ($datas as $data) {
          // echo $data['sku']; ?>
       
        <div class="col-3 m-1 product-item">
          <div class="chechk-box">      
            <input type="checkbox">
          </div>
          <p><?php  echo $data['sku']; ?></p>
          <p><?php  echo $data['name']; ?></p>
          <p><?php  echo $data['price']; ?></p>
          <p>Size: <?php  echo $data['size']; ?></p>
        </div>
      
        <?php } ?>
        


      </div>
    </div>
  </section>


    <!-- Optional JavaScript -->
    <script src="js/main.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>