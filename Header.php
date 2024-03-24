<?php

header('Application: Belajar PHP Web');
header('Author: Agung Sinaga');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";