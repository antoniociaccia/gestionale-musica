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
            <h3>Carica artista</h3>
        </div>
        <div class="col-4 ps-5">
            <a class="btn btn-success" href="../index.php">Torna indietro</a>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-8">
            <form action="./inserimento-db.php" method="POST">
                <div class="mb-3">
                    <label for="nome_artista" class="form-label">Nome artista</label>
                    <input type="text" name="nome_artista" class="form-control" id="nome_artista" placeholder="Nome artista" required>
                </div>
                <div class="mb-3">
                    <label for="biografia_artista" class="form-label">Biografia artista</label>
                    <textarea name="biografia_artista" class="form-control" id="biografia_artista" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="data_nascita" class="form-label">Data di nascita</label>
                    <input type="date" name="data_nascita" class="form-control" id="data_nascita" placeholder="Data di nascita">
                </div>
                <div class="mb-3">
                    <label for="nazionalita" class="form-label">Nazionalità</label>
                    <input type="text" name="nazionalita" class="form-control" id="nazionalita" placeholder="Nazionalità">
                </div>
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Selezione categoria</label>
                    <input type="text" name="categoria_id" class="form-control" id="categoria_id" placeholder="Seleziona categoria">
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>