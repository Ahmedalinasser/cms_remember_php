<?php

$db["db_host"]="localhost";
$db["db_user"]="root";
$db["db_pass"]="012300";
$db["db_name"]="cms";

foreach ($db as $key => $value) {
    define(strtoupper($key),$value);
}

$connect = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);

// $connect = mysqli_connect ("localhost","root","012300","cms");

if ($connect) {
    echo "Database is connected. ";
}else {
    echo "Database is Off not connected. ";
}


?>