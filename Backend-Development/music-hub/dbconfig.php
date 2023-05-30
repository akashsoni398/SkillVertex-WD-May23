<?php
$db_host = 'localhost';
$db_database = 'music_hub';
$db_user = 'root';
$db_password = '';

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_database);

if(!$conn) {
    echo "Database error:",mysqli_connect_error();
}

?>
