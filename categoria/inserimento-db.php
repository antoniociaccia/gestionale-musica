<?php 


if(empty($_POST['nome_categoria'])){
    header('Location:./inserimento.php');
    exit();
}




$nome_categoria = $_POST['nome_categoria'];
// Insert
//INSERT INTO nome_tabella(campo1,campo2) VALUES (valore1,valore2)


include('../db/connessione.php');
$sql_insert = "INSERT INTO categoria (nome_categoria) VALUES ('$nome_categoria')";

if(mysqli_query($conn,$sql_insert)){
    header('Location:./index.php');
}else{
    echo "Inserimento non riuscito!" . mysqli_error($conn);
}
?>