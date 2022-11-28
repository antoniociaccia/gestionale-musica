<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../include/resource.php'); ?>
    <title>Inserimento - newsletter</title>
</head>
<body>
<div class="container">
    <?php
    include('../include/header.php'); ?>
    <div class="row justify-content-between">
        <div class="col-5">
            <h3>Caricati utenti per newsletter</h3>
        </div>
        <div class="col-4 ps-5">
            <a class="btn btn-success" href="../index.php">Torna indietro</a>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-8">
            <form action="./inserimento-db.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome utente</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome utente" required>
                </div>
                <div class="mb-3">
                    <label for="cognome" class="form-label">Cognome utente</label>
                    <input type="text" name="cognome" class="form-control" id="cognome" placeholder="Cognome utente" required>
                </div>
                <div class="mb-3">
                    <label for="data_nascita" class="form-label">Data nascita utente</label>
                    <input type="date" name="data_nascita" class="form-control" id="data_nascita" placeholder="Data nascita utente" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email utente</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email utente" required>
                </div>
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Seleziona categoria</label>
                    <input type="text" name="categoria_id" class="form-control" id="categoria_id" placeholder="Seleziona categoria">
                </div>
                <button type="submit" name="" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>