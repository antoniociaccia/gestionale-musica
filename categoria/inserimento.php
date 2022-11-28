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
        <input type="text" name="nome_categoria" required>
        <button type="submit">Salva</button>
    </form>
</body>
</html>