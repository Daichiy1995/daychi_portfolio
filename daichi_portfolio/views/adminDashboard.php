<?php
  include '../action/menuAction.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN DASHBOAD</title>
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
        <a class="nav-link" href="../views/adminUserlist.php">adminUserlist<span class="sr-only">(current)</span></a>
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
    <table class="table table-hover table-striped table-bordered mx-auto text-center my-5">
      <thead class="thead-dark text-uppercase">
        <th>Menu Picture</th>
        <th>Menu Name</th>
        <th>quantity</th>
        <th>total_price</th>
        <th>payment</th>
        <th>username</th>
        <th>address</th>
        <th>order_status</th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $order_list = $menu->displayAdminOrders();
        // print_r($menu_list);
        if($order_list){
          foreach($order_list as $order_detail){
            $image = $order_detail['menu_picture'];
        ?>
          <tr>
            <td><img src="../uploads/<?php echo $image?>" alt=""
            class="img-thumbnail">
            </td>
            <td><?php echo $order_detail['menu_name']?></td>
            <td><?php echo $order_detail['order_quantity']?></td>
            <td><?php echo $order_detail['total_price']?></td>
            <td><?php echo $order_detail['payment']?></td>
            <td><?php echo $order_detail['username']?></td>
            <td><?php echo $order_detail['address']?></td>
            <td><?php echo $order_detail['order_status']?></td>
            <td><a href="adminviewOrder.php?order_id=<?php echo $order_detail['order_id']?>" class="btn btn-warning text-white">view</a></td>
            <td><a href="updateadminOrder.php?order_id=<?php echo $order_detail['order_id']?>" class="btn btn-danger text-white">update</a></td>
           
          </tr>


        <?php
            }
          }else{
        ?>

          <tr>
            <td colspan = "9" class="text-center">No Records Found</td>
          </tr>

        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>