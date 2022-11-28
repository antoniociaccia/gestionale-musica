<?php

if (((empty($_POST['nome_artista'])) or
		(empty($_POST['biografia_artista'])) or
		(empty($_POST['data_nascita'])) or
		(empty($_POST['nazionalita'])))
) {
	header('Location:./inserimento.php');
	exit();
}
include('../db/connessione.php');
$nome = $_POST['nome_artista'];
$biografia = $_POST['biografia_artista'];
$data_nascita = $_POST['data_nascita'];
$nazionalita = $_POST['nazionalita'];
//$categoria_id = $_POST['categoria_id'];
$categoria_id = 0;
$pluto = "INSERT INTO artista(nome,biografia,data_nascita,nazionalita, categoria_id) 
          VALUES ('$nome','$biografia','$data_nascita','$nazionalita','$categoria_id')";
if (mysqli_query($conn, $pluto)) {
	header('Location:./index.php');
} else {
	echo "Errore inseriemto " . mysqli_error($conn);
}
?>