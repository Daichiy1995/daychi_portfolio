<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRATION</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mx-auto w-50 my-5 border border-0">
      <div class="card-header bg-white text-dark border-0">
        <h2 class="text-center">REGISTRATION</h2>
      </div>

      <div class="card-body">
      <form action="../action/userAction.php" method="post">
        <div class="form-row">
          <div class="form_group col-md-6 mt-3">
            <input type="text" name="first_name" id="" class="p-4 form-control" placeholder="FIRST NAME" require>
          </div>
          <div class="form_group col-md-6 mt-3">
            <input type="text" name="last_name" id="" class="p-4 form-control" placeholder="LAST NAME" require>
          </div>
        </div>

          <div class="form-row">
            <div class="form-group col-md-12 mt-3">
              <input type="text" name="address" class="form-control p-4" placeholder="ADDRESS" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="contact_number" class="form-control p-4" placeholder="CONTACT NUMBER" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="username" class="form-control p-4" placeholder="USERNAME" required>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="password" name="password" class="form-control p-4" placeholder="PASSWARD" required>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-12">
              <button type="submit"  class="btn btn-danger text-uppercase" name="register">Registration</button>
            </div>
          </div>
    </div>
  </div>
</body>
</html>