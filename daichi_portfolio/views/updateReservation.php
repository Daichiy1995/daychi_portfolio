<?php
  include '../action/reservationAction.php';

  $reservation_id = $_GET['reservation_id'];
  $reservation_detail = $reservation->getSpecificReservation($reservation_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIEWUPDATE</title>
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
    <div class="card mx-auto w-50 mt-5 border border-0">
      <div class="card-header bg-white text-dark border-0">
        <h2 class="text-center">Update</h2>
      </div>
    
      <div class="card-body">
        <form action="../action.reservationAction.php"method="post">
        <div class="form-row">
          <div class="form-group col-md-12 mb-4">
            <input type="date"name="date" class="form-control p-4" placeholder="DATE" value="<?php echo $reservation_detail['date']?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12 mb-4">
            <input type="text"name="time" class="form-control p-4" placeholder="TIME" value="<?php echo $reservation_detail['time']?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12 mb-4">
            <input type="number"name="numberofpeople" class="form-control p-4" placeholder="Number of people" value="<?php echo $reservation_detail['numberofpeople']?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12 mb-4">
          <input type="hidden"name="reservation_id" value="<?php echo $reservation_detail['reservation_id']?>">
            <input type="submit"name="Update"class="btn btn-primary text-uppercase form-control" value="UPDATE">
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