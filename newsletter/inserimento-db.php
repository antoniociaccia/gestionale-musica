<?php 


if(empty($_POST['nome'])){
    header('Location:./inserimento.php');
    exit();
}


include('../db/connessione.php');

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data_nascita = $_POST['data_nascita'];
$mail = $_POST['email'];
//$categoria_id = $_POST['categoria_id'];
$categoria_id = 0;
// Insert
//INSERT INTO nome_tabella(campo1,campo2) VALUES (valore1,valore2)

$sql_insert = "INSERT INTO newsletter (nome, cognome, data_nascita, mail, categoria_id) 
               VALUES ('$nome','$cognome','$data_nascita','$mail','$categoria_id')";

if(mysqli_query($conn,$sql_insert)){
    header('Location:./index.php');
}else{
    echo "Inserimento non riuscito!" . mysqli_error($conn);
}
?>