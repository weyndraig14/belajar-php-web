<?php
session_start();

if($_SESSION['login'] == true){
    header('Location: /Session/Member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == "agung" && $_POST['password'] == 'agung'){
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'agung';
        header('Location: /Session/Member.php');
        exit();
    }else{
        // gagal
        $error = "Login Gagal";
    }
}

?>

<html>
<body>
<?php if($error != ""){ ?>
    <h2><?= $error ?></h2>
<?php } ?>
<h1>Login</h1>
<form action="/Session/Login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br/>
    <input type="submit" value="Login">
</form>
</body>
</html>