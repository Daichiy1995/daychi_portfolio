<?php
  require_once  '../class/reservation.php';
  $reservation = new Reservation();
  session_start();

  if(isset($_POST['reservation'])){
    $user_id = $_SESSION['login_id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $numberofpeople = $_POST['numberofpeople'];

    $reservation->createReservation($user_id,$first_name,$last_name,$date,$time,$numberofpeople);
  }elseif(isset($_POST['update'])){
    $reservation_id = $_POST['reservation_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $numberofpeople = $_POST['numberofpeople'];

    $reservation->updateReservation($date,$time,$numberofpeople, $reservation_id);
  }
  
?>