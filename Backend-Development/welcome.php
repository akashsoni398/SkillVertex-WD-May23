<?php 

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

if($uname=='akashsoni' && $pwd=='12345') {
    session_start();
    $_SESSION['username'] = $uname;
}
else {
    echo "Username or password wrong";
}

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location:welcome.php");
}

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Hello <?php echo $_SESSION['username'] ?></b>
    <a href="./welcome.php?logout=true"><button>Logout</button></a>
</body>
</html>