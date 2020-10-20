<?php
  include '../action/menuAction.php';
  $order_id = $_GET['order_id'];

  $payment_detail = $menu->displayPayment($order_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAYMENT</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <div class="card mx-auto w-75 my-5 border-0">
    <div class="card-header bg-white text-warning border-0 text-center">
      <h2 class="display-4"><?php echo $payment_detail['menu_name']?></h2>
      <img src="../uploads/<?php echo $payment_detail['menu_picture']?>" alt="" class="img-thumbnail" height="50%" width="50%">
    </div>
    <div class="card-body">
      <form action="../action/menuAction.php" method="post">

        <div class="form-row text-danger">
          <div class="form-group col-md-12 mb-4">
          <input type="hidden" name="menu_id" value="<?php echo $payment_detail['menu_id']?>">
          </div>
          <div class="form-group col-md-12 mb-4">
          <input type="hidden" name="order_id" value="<?php echo $payment_detail['order_id']?>">
          </div>
        </div>

        <div class="form-row ">
          <div class="form-group col-md-6 mb-4">
            <h1 class="text-danger">Menu Price:</h1>
          </div>
          <div class="form-group col-md-6 mb-4">
            <input type="hidden" name="menu_price"value="<?php echo $payment_detail['menu_price']?>">
            <h1><?php echo $payment_detail['menu_price']?></h1>
          </div>
        </div>

        <div class="form-row ">
          <div class="form-group col-md-6 mb-4">
            <h1 class="text-danger">Quantity:</h1>
          </div>
          <div class="form-group col-md-6 mb-4">
            <input type="hidden" name="quantity"value="<?php echo $payment_detail['order_quantity']?>">
            <h1><?php echo $payment_detail['order_quantity']?></h1>
          </div>
        </div>

        <div class="form-row ">
          <div class="form-group col-md-6 mb-4">
            <h1 class="text-danger">Total Price:</h1>
          </div>
          <div class="form-group col-md-6 mb-4">
            <input type="hidden" name="total_price"value="<?php echo $payment_detail['total_price']?>">
            <h1><?php echo $payment_detail['total_price']?></h1>
          </div>
        </div>

        <div class="form-row ">
          <div class="form-group col-md-6 mb-4">
            <h1 class="text-danger">Payment:</h1>
          </div>
          <div class="form-group col-md-6 mb-4">
            <input type="text" name="payment" class="form-control">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6 ">
            <input type="submit" name="buy" class="btn btn-success text-uppercase form-control" value="buy">
          </div>
          <div class="form-group col-md-6">
            <input type="submit" name="cancel" class="btn btn-danger text-uppercase form-control" value="cansel order">
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</body>
</html>