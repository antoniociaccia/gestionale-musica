<?php

if(((empty($_POST['nome'])) OR 
    (empty($_POST['biografia'])) OR 
    (empty($_POST['data_nascita'])) OR 
    (empty($_POST['nazionalita']))) 
){
    header('Location:./inserimento.php');
    exit();
}


include('../db/connessione.php');

$nome = $_POST['nome'];
$biografia = $_POST['biografia'];
$data_nascita = $_POST['data_nascita'];
$nazionalita = $_POST['nazionalita'];


$pluto = "INSERT INTO artista(nome,biografia,data_nascita,nazionalita) 
          VALUES ('$nome','$biografia','$data_nascita','$nazionalita')";


if(mysqli_query($conn,$pluto)){
    header('Location:./index.php');
}else{
    echo "Errore inseriemto ". mysqli_error($conn);
}





?>