<?php

$username = "root";
$password = "root";
$hostname = "localhost";
$database = "gestionale_musica";

$conn = mysqli_connect($hostname,$username,$password,$database);

//if($conn){
//    echo "Connessione avvenuta correttamente!";
//}else{
//    echo "Connessione fallita! ".mysqli_connect_error();
//}


if(!$conn){
    echo "Connessione fallita! ".mysqli_connect_error();
}

?>