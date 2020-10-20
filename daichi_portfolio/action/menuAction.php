<?php
  require_once '../class/Menu.php';

  $menu = new Menu();
  session_start();

  if(isset($_POST['add'])){
    $menu_name = $_POST['menu_name'];
    $menu_price = $_POST['menu_price'];
    $stock_quantity = $_POST['stock_quantity'];
    $menu_picture = $_FILES['menu_picture']['name'];

    $target_dir = "../uploads/";

    $target_file = $target_dir . basename($_FILES['menu_picture']['name']);

      $add_menu = $menu->addMenu($menu_name,$menu_price,$stock_quantity,$menu_picture);

      if($add_menu == 1){
        move_uploaded_file($_FILES['menu_picture']['tmp_name'],$target_file);
        header("Location: ../views/adminMenu.php");
      }else{
        echo "ERROR IN ADDING ";
      }

  }elseif(isset($_POST['updateMenu'])){
    $menu_name = $_POST['new_menu_name'];
    $menu_price = $_POST['new_menu_price'];
    $menu_id = $_POST['menu_id'];

    $menu->updateMenu($menu_name,$menu_price,$menu_id);

  }elseif(isset($_POST['order'])){
    $menu_id = $_POST['menu_id'];
    $menu_price = $_POST['menu_price'];
    $stock_quantity = $_POST['stock_quantity'];
    $order_quantity = $_POST['order_quantity'];
    $user_id = $_SESSION['login_id'];
    if($order_quantity <= $stock_quantity){
      $total_price = $menu_price * $order_quantity;

      $order = $menu->orderMenu($user_id, $menu_id, $order_quantity,$total_price);
      if($order){
        header("Location: ../views/userDashboard.php");
       //$new_stock = $stock_quantity - $order_quantity;

       //$menu->updateStock($new_stock,$menu_id);
      }else{
        echo "Error in ordering";
      }
    }
  }elseif(isset($_POST['buy'])){  
      $user_id = $_SESSION['login_id'];
      $menu_id = $_POST['menu_id'];
      $order_id = $_POST['order_id'];
      $total_price = $_POST['total_price'];
      $payment = $_POST['payment'];
      if($payment >= $total_price){
        $change = $payment - $total_price;

        $paid = $menu->payment($order_id,$user_id,$menu_id,$total_price,$payment,$change);

        if($paid == 1){
          $menu->updateOrderStatus($order_id);
        }

      }elseif($payment < $total_price){
        echo "Error buy";
      }

  }elseif(isset($_POST['update'])){
      $order_id = $_POST['order_id'];
      $order_status = $_POST['order_status'];

      $menu->updateAdminOrderStatus($order_id,$order_status);
  }


?>