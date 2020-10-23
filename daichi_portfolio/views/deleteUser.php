<?php

  include "../action/userAction.php";

  $user_id = $_GET['user_id'];

  $user->deleteUser($user_id);

?>