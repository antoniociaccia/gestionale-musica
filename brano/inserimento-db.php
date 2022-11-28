<?php 


if(empty($_POST['titolo'])){
    header('Location:./inserimento.php');
    exit();
}


include('../db/connessione.php');

$titolo = $_POST['titolo'];
$durata = $_POST['durata'];
$anno = $_POST['anno'];
$piattaforma_ascolto = $_POST['piattaforma_ascolto'];
//$artista_id = $_POST['artista_id'];
//$categoria_id = $_POST['categoria_id'];
$artista_id = 0;
$categoria_id = 0;

$sql_insert = "INSERT INTO brano (titolo, durata, anno, piattaforma_ascolto, artista_id, categoria_id) 
               VALUES ('$titolo','$durata','$anno','$piattaforma_ascolto','$artista_id','$categoria_id')";

if(mysqli_query($conn,$sql_insert)){
    header('Location:./index.php');
}else{
    echo "Inserimento non riuscito!" . mysqli_error($conn);
}
?>