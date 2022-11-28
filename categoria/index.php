<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../include/resource.php'); ?>
    <title>Index | Categoria</title>
</head>

<body>
<div class="container">
    <?php
    include('../include/header.php'); ?>
    <div class="row justify-content-between">
        <div class="col-4">
            <h3>Index - Categoria</h3>
        </div>
        <div class="col-4 ps-5">
            <a class="btn btn-success" href="../index.php">Torna indietro</a>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>CRUD</h5>
                </li>
                <li class="list-group-item"><a href="./inserimento.php">Inserisci categoria</a></li>
            </ul>
        </div>
        <div class="col-9">
            <?php
            include '../db/connessione.php';
            //$query = "SELECT nome_categoria FROM categoria";
            $query = "SELECT * FROM categoria";
            $risultato = mysqli_query($conn, $query);
            //$riga = mysqli_fetch_assoc($risultato);
            ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>Categorie presenti:</h5>
                </li>
                <?php
                while ($riga = mysqli_fetch_assoc($risultato)) { ?>
                    <li class="list-group-item"><?php
                        echo $riga['nome_categoria']; ?></li>
                    <?php
                    //echo var_dump($riga) .'<br>';
                } ?>

            </ul>
        </div>
    </div>
    <?php
    include('../include/footer.php'); ?>
</div>
</body>

</html>