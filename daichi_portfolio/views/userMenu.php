<?php
  include '../action/menuAction.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USERMENU</title>
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
    <h2 class="text-center">User Menu</h2>
    <table class="table table-hover table-striped table-bordered
    mx-auto text-center my-5">
      <thead class="thead-dark text-uppercase">
        <th>Menu Picture</th>
        <th>Menu Name</th>
        <th>Menu Price</th>
        <th>Stock</th>
        <th></th>
      </thead>
    
    <tbody>
      <?php
        $menu_list = $menu->getUserMenu();

        foreach($menu_list as $menu_detail){
          $image = $menu_detail['menu_picture'];
      ?>
        <tr>
          <td><img src="../uploads/<?php echo $image?>" alt=""
            class="img-thumbnail" height="50%" width="50%"></td>
          <td><?php echo $menu_detail['menu_name']?></td>
          <td><?php echo $menu_detail['menu_price']?></td>
          <td><?php echo $menu_detail['stock_quantity']?></td>
          <td><a href="orderMenu.php?menu_id=<?php echo $menu_detail
          ['menu_id']?>" class="btn btn-danger text-white">ORDER</a></td>
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
</body>
</html>