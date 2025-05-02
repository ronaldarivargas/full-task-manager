<?php

echo "Hasta pronto";
session_start();
session_destroy();
//unset( $_SESSION["user_id"] );
//var_dump($_SESSION);
header('Location: /full-task-manager/index.php');
exit;

?>