<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../include/resource.php'); ?>
    <title>Inserimento - Artista</title>
</head>
<body>
<div class="container">
    <?php
    include('../include/header.php'); ?>
    <div class="row justify-content-between">
        <div class="col-4">
            <h3>Carica categoria</h3>
        </div>
        <div class="col-4 ps-5">
            <a class="btn btn-success" href="../index.php">Torna indietro</a>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-8">
            <form action="./inserimento-db.php" method="POST">
                <div class="mb-3">
                    <label for="nome_categoria" class="form-label">Titolo categoria</label>
                    <input type="email" class="form-control" id="nome_categoria" placeholder="Titolo categoria" required>
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>