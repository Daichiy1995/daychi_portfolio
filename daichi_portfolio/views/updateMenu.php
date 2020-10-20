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
  <title>UPDATE MENU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mx-auto w-50 my-5 border border-0">
      <div class="card-header bg-white text-dark border-0">
        <h2 class="text-center">Update Menu</h2>
      </div>
      <div class="card-body">
        <form action="../action/menuAction.php" method="post">

          <div class="form-row">
            <div class="form-group col-md-12 mb-4">
              <input type="text" name="new_menu_name"
              class="form-control p-4" value="<?php echo
              $menu_detail['menu_name']?>">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12 mb-4">
              <input type="text" name="new_menu_price"
              class="form-control p-4" value="<?php echo
              $menu_detail['menu_price']?>">
            </div>
          </div>

          <div class="form-row">
          <input type="hidden" name="menu_id" value="<?php echo
          $menu_detail['menu_id']?>">
            <div class="form-group col-md-12 mb-4">
              <input type="submit" name="updateMenu" value="UpdateMenu"
              class="btn btn-dark btn-lg form-control text-uppercase">
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</body>
</html>