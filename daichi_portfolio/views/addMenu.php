<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADDMENU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mx-auto w-50 my-5 border border-0">
      <div class="card-header bg-white text-dark border-0">
        <h2 class="text-center">Addmenu</h2>
      </div>

      <div class="card-body">
        <form action="../action/menuAction.php" method="post" enctype="multipart/form-data">

        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="file" name="menu_picture" id=""
            class="form-control border border-0" placeholder="Menu Picture" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="text" name="menu_name" id=""
            class="p-4 form-control" placeholder="Menu_name" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="text" name="menu_price" id=""
            class="p-4 form-control" placeholder="Menu_price" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="text" name="stock_quantity" id=""
            class="p-4 form-control" placeholder="stock_quantity" required>
          </div>
        </div>fsv

        <div class="form-row">
          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-danger text-uppercase" name="add">ADD</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>