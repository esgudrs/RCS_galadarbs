<?php
  include_once "includes/dbh.inc.php";
?>

<?php

function fill_size($conn)
{
  $output = '';

  $sql = 'SELECT * FROM size';

  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_array($result)) 
  {
    $output .= '<option value"'.$row["id"].'">'.$row["size"].'</option>';
  }

  return $output;

}

function fill_ssize($conn){

  $output = '';
  $sql = "SELECT * FROM item_list";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_array($result)) {

    $output .= '<label for="">Name</label> ';
    $output .= '<input type="text"> <br>';
    // $output .= '';
    // $output .= '';
  }

  return $output;

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
        <h1>Product List</h1>
        <a href="/index.php" class="btn btn-danger ml-5">Product List</a>
        <button class="btn btn-warning ml-auto px-4">Save</button>
      </div>
    </div>

  </header>


  <section>
    
    <div class="container">

      <form action="">
        
        <label for="">SKU</label>
        <input type="text"> <br>
        <label for="">Name</label>
        <input type="text"> <br>
        <label for="">Price</label>
        <input type="text"> <br>
          <br>  
        <label for="">Type Switcher</label>
        <select name="size_sel" id="size_sel">
          <option value="">SELECT SIZE ...</option>

          <?php echo fill_size($conn); ?>

        </select> <br>
        
        <div>
          <div id="show_size">
        <?php echo fill_ssize($conn); ?>
          </div>
        </div>
      </form>
    
    </div>

  </section>





    <!-- Optional JavaScript -->

    <script>
      
      $(document).ready(function(){
        $('#size_sel').change(function(){


          var id = $(this).var();

          $.ajax({
            url:"load_data.php",
            method:"POST",
            data:{id:id},
            success:function(data){
              $('#show_size').html(data);
            }
          });

        })
      });

    </script>

    <script src="js/main.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>