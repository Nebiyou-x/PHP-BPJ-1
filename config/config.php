<?php


//HOST
define("HOST", "localhost");

//DBNAME
define("DBNAME", "pay");

//USER
define("USER", "root");

//PASSWORD
define("PASS", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";",USER,PASS);

if($conn == true){
    echo "connection is Success ";
} else{
     echo "Error";
}


