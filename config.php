<!-- I watched this video to know how to make forms for sign in and login: https://www.youtube.com/watch?v=LiomRvK7AM8 -->

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "all_users";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>