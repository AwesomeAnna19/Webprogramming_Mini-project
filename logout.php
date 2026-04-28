<?php 

session_start();
session_unset();
session_destroy();

session_start();
$_SESSION['active_tab'] = '#home';

header("Location: main.php");
exit();

?>