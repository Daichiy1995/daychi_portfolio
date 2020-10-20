<?php
  include '../action/menuAction.php';
  $order_id = $_GET['order_id'];
  $order_detail = $menu->displayAdminViewOrder($order_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Order Status</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Jibie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../views/adminMenu.php">adminMenu<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/adminDashboard.php">adminDashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/reservation.php">reservation<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/Profile.php">Profile<span class="sr-only">(current)</span></a>
      </li>
     
  </div>
</nav>
<div class="container">
  <div class="card mx-auto w-75 my-5 border border-0">
    <div class="card-header bg-white text-warning border-0 mx-auto text-center">
      <h2 class="display-4 text-center"><?php echo $order_detail['menu_name']?></h2>
      <img src="../uploads/<?php echo $order_detail['menu_picture']?>" alt="" class="img-thumbnail" height="50%" width="50%">
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-4 text-danger">
            <h1>Menu Name:</h1>
          </div>
          <div class="col-md-6 mb-4">
            <h1><?php echo $order_detail['menu_name']?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 text-danger">
            <h1>Username:</h1>
          </div>
          <div class="col-md-6 mb-4">
            <h1><?php echo $order_detail['username']?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 text-danger">
            <h1>First Name:</h1>
          </div>
          <div class="col-md-6 mb-4">
            <h1><?php echo $order_detail['first_name']?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 text-danger">
            <h1>Last Name:</h1>
          </div>
          <div class="col-md-6 mb-4">
            <h1><?php echo $order_detail['last_name']?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 text-danger">
            <h1>Address:</h1>
          </div>
          <div class="col-md-6 mb-4">
            <h1><?php echo $order_detail['address']?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 text-danger">
            <h1>Contact Number:</h1>
          </div>
          <div class="col-md-6 mb-4">
            <h1><?php echo $order_detail['contact_number']?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-4">
          <form action="../action/menuAction.php" method="post">
            <select name="order_status" id="" class="form-control">
              <option selected disabled value="<?php echo $order_detail['order_status']?>"><?php echo $order_detail['order_status']?></option>
              <option value="PENDING">PENDING</option>
              <option value="PAID">PAID</option>
              <option value="PREPARING">PREPARING</option>
              <option value="DELIVERED">DELIVERED</option>
              <option value="RECEIVED">RECEIVED</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <input type="hidden" name="order_id" value="<?php echo $order_detail['order_id']?>">
         <input type="submit" value="Update" name="update" class="btn btn-danger form-control">
          </div>
        </div>
      </form> 
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>