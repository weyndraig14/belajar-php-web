<?php
session_start();

if($_SESSION['login'] != true){
    header('Location: /Session/Login.php');
    exit();
}

$say = "Hello " . $_SESSION['username'];
?>

<html>
<body>
<h1><?= $say ?></h1>
<a href="/Session/Logout.php">Logout</a>
</body>
</html>