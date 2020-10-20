<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mx-auto w-50 mt-5 border border-0">
      <div class="card-header bg-white text-dark border-0">
        <h2 class="text-center">LOGIN</h2>
      </div>
      <div class="card-body">
        <form action="../action/userAction.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-12 mb-4">
              <input type="text" name="username"
              class="form-control p-4" placeholder="USERNAME">
            </div>
            <div class="form-group col-md-12 mb-4">
              <input type="password" name="password"
              class="form-control p-4" placeholder="PASSWORD">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12 mb-4">
              <input type="submit" name="login" class="btn btn-dark text-uppercase form-control"
              value="login">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>