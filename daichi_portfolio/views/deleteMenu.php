<?php

  include "../action/menuAction.php";

  $menu_id = $_GET['menu_id'];

  $menu->deleteMenu($menu_id);


?>