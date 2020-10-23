<?php

  require_once 'Database.php';

  class Reservation extends Database{

    public function createReservation($user_id,$first_name,$last_name,$date,$time,$numberofpeople){
      $sql = "INSERT INTO reservations(user_id,first_name,last_name,date,time,numberofpeople)VALUES('$user_id','$first_name','$last_name','$date','$time','$numberofpeople')";

      $result = $this->conn->query($sql);

      if($result == false){
        die("CANNOT ADD RESERVATION: ".$this->conn->error);
      }else{
        header("Location: ../views/viewReservation.php");
      }
    }
    public function getUserReservation($user_id){
      $sql = "SELECT * FROM reservations WHERE user_id ='$user_id'";

      $result = $this->conn->query($sql);

      $rows = array();

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
      }else{
        return false;
      }
    }

    public function getReservationDetail($reservation_id){
      $sql = "SELECT * FROM reservations WHERE reservation_id = '$reservation_id'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();
      }else{
        return false;
      }

    }
    public function getSpecificReservation($reservation_id){
      $sql = "SELECT * FROM reservations WHERE reservation_id = '$reservation_id'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();
      }else{
        return false;
      }
    }

    public function updateReservation($date,$time,$numberofpeople, $reservation_id){
      $sql = "UPDATE reservations SET date = '$date', time ='$time',numberofpeople ='$numberofpeople'.reservation_id ='$reservation_id'";

      $result = $this->conn->query($sql);

      if($result == false){
        die("Cannot reservartions; ".$this->conn->error);
      }else{
        header("Location: ../views/viewReservation.php");
      }
    }
  }

?>