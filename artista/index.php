<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../include/resource.php'); ?>
    <title>Index - Artista</title>
</head>

<body>
<div class="container">
    <?php
    include('../include/header.php'); ?>
    <div class="row justify-content-between">
        <div class="col-4">
            <h3>Index - Artisti</h3>
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
                <li class="list-group-item"><a href="./inserimento.php">Inserisci artista</a></li>
            </ul>
        </div>
        <div class="col-9">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Biografia</th>
                    <th scope="col">Data di Nascita</th>
                    <th scope="col">Nazionalit√†</th>
                    <th scope="col">Categoria</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include '../db/connessione.php';
                $query = "SELECT * FROM artista";
                $risultato = mysqli_query($conn, $query);
                $count_righe = $risultato->num_rows;
                if ($count_righe >= 1) {
                    while ($riga = mysqli_fetch_assoc($risultato)) { ?>
                        <tr>
                            <th scope="row"><?php
                                echo $riga['id']; ?></th>
                            <td><?php
                                echo $riga['nome']; ?>
                            </td>
                            <td><?php
                                echo $riga['biografia']; ?>
                            </td>
                            <td><?php
                                echo date('d-m-Y', strtotime($riga['data_nascita'])); ?>
                            </td>
                            <td><?php
                                echo $riga['nazionalita']; ?>
                            </td>
                            <td><?php
                                echo $riga['categoria_id']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                } else { ?>
                    <tr>
                        <td colspan="6">Non sono presenti artisti</td>
                    </tr>
                    <?php
                } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include('../include/footer.php'); ?>
</div>
</body>

</html>