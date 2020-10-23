<?php
  include '../action/menuAction.php';

  $user_id = $_SESSION['login_id'];

  $order_list = $menu->displayOrders($user_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USERDASHBOARD</title>
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
        <a class="nav-link" href="../views/userMenu.php">User Menu<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/userDashboard.php">UserDashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/reservation.php">reservation<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/Profile.php">Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../views/logout.php">logout<span class="sr-only">(current)</span></a>
      </li>
     
  </div>
</nav>

    <div class="container">
      <h2 class="text-center">Welcome, <?php echo $_SESSION['username']?></h2>
      <div class="row">
        <div class="col-8">
            <table class="table table-hover table-striped table-borderd">
            <thead class="thead-dark text-uppercase">
              <th>menu picture</th>
              <th>menu name</th>
              <th>order quantity</th>
              <th>total price</th>
              <th>order status</th>
              <th></th>
            </thead>
            <tbody>
              <?php
                if($order_list){
                  foreach($order_list as $order_detail){
                    $image = $order_detail['menu_picture'];
                ?>
                  <tr>
                    <td><img src="../uploads/<?php echo $image?>" alt="" class="img-thumbnail"></td>
                    <td><?php echo $order_detail['menu_name']?></td>
                    <td><?php echo $order_detail['order_quantity']?></td>
                    <td><?php echo $order_detail['total_price']?></td>
                    <td><?php echo $order_detail['order_status']?></td>
                    <td>
                    <?php
                      if($order_detail['order_status'] == "PENDING"){
                    ?>
                      <a href="payment.php?order_id=<?php echo $order_detail['order_id']?>" class="btn btn-danger">BUY</a>
                    <?php
                      }elseif($order_detail['order_status'] == "PAID"){
                    ?>
                    <a href="viewOrder.php?order_id=<?php echo $order_detail['order_id']?>" class="btn btn-primary">VIEW</a>
                    <?php
                      }
                    ?>
                    </td>
                  </tr>
                <?php
                  }
                }else{
                ?>

                <tr>
                  <td colspan = 5 class="text-center">No Records Found</td>
                </tr>
                
                <?php
                  }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>