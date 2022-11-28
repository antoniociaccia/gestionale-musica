<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento - Artista</title>
</head>
<body>
    <a href="./index.php">Torna indietro</a>
    <h1>Inserimento artista</h1>
    <form action="./inserimento-db.php" method="POST">
        <input type="text" name="nome" placeholder="Nome artista" required>
        <input type="text" name="biografia" placeholder="Biografia artista" required>
        <input type="date" name="data_nascita" placeholder="Data nascita artista" required>
        <input type="text" name="nazionalita" placeholder="Nazionalità artista" required>
        <button type="submit">Salva</button>
    </form>
</body>
</html>