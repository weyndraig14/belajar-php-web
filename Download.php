<?php

if(isset($_GET['key']) && $_GET['key'] == 'random'){
    header('Content-Disposition: attachment; filename="1.jpg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/File/1.jpg');
    exit();
}else{
    echo "Invalid Key";
}