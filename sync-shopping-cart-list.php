<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['shoppingCart'])) {
    $_SESSION['shoppingCart'] = $_POST['shoppingCart'];
    echo "Saved";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo $_SESSION['shoppingCart'] ?? '[]';
    exit;
}

?>