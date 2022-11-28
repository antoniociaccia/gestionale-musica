<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../include/resource.php'); ?>
    <title>Index | Brano</title>
</head>

<body>
    <div class="container">
        <?php include('../include/header.php'); ?>
        <div class="row justify-content-between">
            <div class="col-4">
                <h3>Index - Brano</h3>
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
                    <li class="list-group-item"><a href="./inserimento.php">Inserisci brano</a></li>
                </ul>
            </div>
            <div class="col-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Durata</th>
                        <th scope="col">Anno</th>
                        <th scope="col">Piattaforma</th>
                        <th scope="col">Artista</th>
                        <th scope="col">Categoria</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include '../db/connessione.php';
                    $query = "SELECT * FROM brano";
                    $risultato = mysqli_query($conn, $query);
                    $count_righe = $risultato->num_rows;
                    if ($count_righe >= 1) {
                        while ($riga = mysqli_fetch_assoc($risultato)) { ?>
                            <tr>
                                <th scope="row"><?php
                                    echo $riga['id']; ?></th>
                                <td><?php
                                    echo $riga['titolo']; ?>
                                </td>
                                <td><?php
                                    echo $riga['durata']; ?>
                                </td>
                                <td><?php
                                    echo $riga['anno']; ?>
                                </td>
                                <td><?php
                                    echo $riga['piattaforma_ascolto']; ?>
                                </td>
                                <td><?php
                                    echo $riga['artista_id']; ?>
                                </td>
                                <td><?php
                                    echo $riga['categoria_id']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else { ?>
                        <tr>
                            <td colspan="7">Non sono presenti brani</td>
                        </tr>
                        <?php
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include('../include/footer.php'); ?>
    </div>
</body>

</html>