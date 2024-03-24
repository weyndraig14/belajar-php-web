<?php
session_start();
session_destroy();

header('Location: /Session/Login.php');
exit();