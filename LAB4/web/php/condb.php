<?php
$host = "db";
$user = "root";
$pass = "1234";
$db   = "mydb";


try{
    $condb = new mysqli($host, $user, $pass, $db); 
    if($condb->connect_error){
        throw new Exception("Connect failed: ");
    }
}
catct(Exception $e){
    echo $e->getMessage();

}

?>