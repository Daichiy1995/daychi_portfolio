<?php
  include '../action/menuAction.php';
  $menu_id = $_GET['menu_id'];

  $menu_detail = $menu->getSpecificMenu($menu_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BUYMENU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
      <div class="card mx-auto w-75 my-5 border border-0">
        <div class="card-header bg-white text-warning border-0 mx-auto">
          <h2 class="display-4 text-center"><?php echo $menu_detail['menu_name']?></h2>
          <img src="../uploads/<?php echo $menu_detail['menu_picture']?>" alt=""
            class="img-thumbnail" height="50%" width="50%">
        </div>
        <div class="card-body">
  
          <form action="../action/menuAction.php" method="post">
          
            <div class="form-row text-danger">
              <div class="form-group col-md-12 mb-4">
              <input type="hidden" name="menu_id" value="<?php echo $menu_detail['menu_id']?>">
              </div>
            </div>

            <div class="form-row text-danger">
              <div class="form-group col-md-6 mb-4">
                <h1>Price:</h1>
              </div>
              <div class="form-group col-md-6 mb-4">
              <input type="hidden" name="menu_price" value="<?php echo $menu_detail['menu_price']?>">
                <h1><?php echo $menu_detail['menu_price']?></h1>
              </div>
            </div>
            <div class="form-row text-danger">
              <div class="form-group col-md-6 mb-4">
                <h1>Stock:</h1>
              </div>
              <div class="form-group col-md-6 mb-4">
              <input type="hidden" name="stock_quantity" value="<?php echo $menu_detail['stock_quantity']?>">
                <h1><?php echo $menu_detail['stock_quantity']?></h1>
              </div>
            </div>

            <div class="form-row text-danger">
              <div class="form-group col-md-6 mb-4">
                <h1>Order Quantity:</h1>
              </div>
              <div class="form-group col-md-6 mb-4">
                <input type="text" name="order_quantity"
                class="form-control p-4">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12 mb-4">
                <input type="submit" name="order" class="btn btn-info text-uppercase form-control" value="Order">
              </div>
            </div>
          </form>
        
        </div>
      </div> 
</div>
</body>
</html>