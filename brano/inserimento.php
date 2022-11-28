<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Categoria</title>
</head>
<body>
    <a href="./index.php">Torna indietro</a>
    <h1>Inserisci categoria</h1>
    <form action="./inserimento-db.php" method="POST">
        <input type="text" name="titolo" placeholder="Titolo" required>
        <input type="text" name="durata" placeholder="Durata" required>
        <input type="text" name="anno" placeholder="Anno" required>
        <input type="text" name="piattaforma_ascolto" placeholder="Piattaforma di ascolto" required>
        <input type="text" name="artista_id" placeholder="Artista">
        <input type="text" name="categoria_id" placeholder="Categoria">
        <button type="submit">Salva</button>
    </form>
</body>
</html>