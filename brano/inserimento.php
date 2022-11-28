<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../include/resource.php'); ?>
    <title>Inserisci Categoria</title>
</head>
<body>
<div class="container">
    <?php
    include('../include/header.php'); ?>
    <div class="row justify-content-between">
        <div class="col-4">
            <h3>Carica brano</h3>
        </div>
        <div class="col-4 ps-5">
            <a class="btn btn-success" href="../index.php">Torna indietro</a>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-8">
            <form action="./inserimento-db.php" method="POST">
                <div class="mb-3">
                    <label for="titolo" class="form-label">Titolo brano</label>
                    <input type="text" name="titolo" class="form-control" id="titolo" placeholder="Titolo brano" required>
                </div>
                <div class="mb-3">
                    <label for="durata" class="form-label">Durata</label>
                    <input type="text" name="durata" class="form-control" id="durata" placeholder="Durata" required>
                </div>
                <div class="mb-3">
                    <label for="anno" class="form-label">Anno di uscita</label>
                    <input type="date" name="anno" min="1970" max="2100" class="form-control" id="anno" placeholder="Anno di uscita" required>
                </div>
                <div class="mb-3">
                    <label for="piattaforma_ascolto" class="form-label">Piattaforma di ascolto</label>
                    <input type="text" name="piattaforma_ascolto" class="form-control" id="piattaforma_ascolto" placeholder="Piattaforma di ascolto" required>
                </div>
                <div class="mb-3">
                    <label for="artista_id" class="form-label">Seleziona artista</label>
                    <input type="text" name="artista_id" class="form-control" id="artista_id" placeholder="Nome artista">
                </div>
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoria</label>
                    <input type="text" name="categoria_id" class="form-control" id="categoria_id" placeholder="Nome artista">
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>