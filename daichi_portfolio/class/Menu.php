<?php
  require_once 'Database.php';

  class Menu extends Database{
    public function addMenu($menu_name,$menu_price,$stock_quantity,$menu_picture){
      $sql = "INSERT INTO menu(menu_name,menu_price,stock_quantity,menu_picture)
      VALUES('$menu_name','$menu_price','$stock_quantity','$menu_picture')";

      $result = $this->conn->query($sql);

      if($result == false){
        die("CANNOT ADD item: ".$this->conn->error);
      }else{
        return 1;
      }
    }

    public function getAllMenu(){
      $sql = "SELECT * FROM menu";
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

    public function getSpecificMenu($menu_id){
      $sql = "SELECT * FROM menu WHERE
      menu_id = '$menu_id'";
      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();
      }else{
        return false;
      }
    }
    
    public function updateMenu($menu_name,$menu_price,$menu_id){
      $sql = "UPDATE menu SET menu_name = '$menu_name', menu_price ='$menu_price' WHERE menu_id ='$menu_id'";

      $result = $this->conn->query($sql);

      if($result == false){
        die("Cannot Update: ".
        $this->conn->error);
      }else{
        header("Location: ../views/adminMenu.php");
      }
    }

    public function getUserMenu(){
      $sql = "SELECT * FROM menu WHERE
      stock_quantity > 0";

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

    public function orderMenu($user_id, $menu_id, $order_quantity,$total_price){
      $sql = "INSERT INTO orders(user_id,menu_id,order_quantity,total_price) VALUES('$user_id','$menu_id','$order_quantity','$total_price')";

      $result = $this->conn->query($sql);

      if($result == false){
      die("CANNOT ADD order: ".$this->conn->error);
      }else{
        return 1;
      }
    }
      public function updateStock($new_stock,$menu_id){
        $sql = "UPDATE menu SET stock_quantity = '$new_stock' WHERE menu_id = '$menu_id'";

        $result = $this->conn->query($sql);

        if($result == false){
          die("Cannot userMenu: ".
          $this->conn->error);
        }else{
          header("Location: ../views/userMenu.php");
        }
    }
        public function deleteMenu($menu_id){
          $sql = "DELETE FROM menu WHERE menu_id = '$menu_id'";
          $result = $this->conn->query($sql);

          if($result == false){
              die("Cannot Delete: " .$this->conn->error);
          }else{
            header("Location: ../views/adminMenu.php");
          }
        }
        public function displayOrders($user_id){
          $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id WHERE user_id = '$user_id'";

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

        public function displayPayment($order_id){
          $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id WHERE order_id = '$order_id'";
          $result = $this->conn->query($sql);
          
          if($result == false){
            die("Error".$this->conn->error);
          }else{
            return $result->fetch_assoc();
          }
        }

        public function payment($order_id,$user_id, $menu_id, $total_price, $payment, $change){
          $sql = "INSERT INTO transactions(order_id,user_id,menu_id, total_price, payment, money_change)VALUES('$order_id','$user_id','$menu_id','$total_price','$payment','$change')";

          $result = $this->conn->query($sql);

          if($result == false){
          die("CANNOT BUY: ".$this->conn->error);
          }else{
            return 1;
          }
        }

        public function updateOrderStatus($order_id){
          $sql = "UPDATE orders SET order_status = 'PAID' WHERE order_id = '$order_id'";

          $result = $this->conn->query($sql);

          if($result == false){
            die("Cannot : ".$this->conn->error);
          }else{
            header("Location: ../views/userDashboard.php");
          }
        }

        public function displayReceipt($order_id){
          $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id INNER JOIN transactions ON orders.order_id = transactions.order_id WHERE orders.order_id = '$order_id'";
          $result = $this->conn->query($sql);
          
          if($result == false){
            die("Error".$this->conn->error);
          }else{
            return $result->fetch_assoc();
          }
        }
        public function displayAdminOrders(){
          $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id INNER JOIN transactions ON orders.order_id = transactions.order_id INNER JOIN users ON orders.user_id = users.user_id";
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
        public function displayAdminViewOrder($order_id){
          $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id INNER JOIN users ON orders.user_id = users.user_id INNER JOIN transactions ON transactions.order_id =orders.order_id WHERE orders.order_id = '$order_id'";
          $result = $this->conn->query($sql);

          if($result == false){
            die("Error".$this->conn->error);
          }else{
            return $result->fetch_assoc();
          }
        }
        
        public function updateAdminOrderStatus($order_id, $order_status){
          $sql = "UPDATE orders SET order_status = '$order_status' WHERE order_id = '$order_id'";

          $result = $this->conn->query($sql);

          if($result == false){
            die("Cannot : ".$this->conn->error);
          }else{
            header("Location: ../views/adminDashboard.php");
          }
        }
  } 


?>