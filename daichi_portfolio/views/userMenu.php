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
</body>
</html>