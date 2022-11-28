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
    <h1>Inserisci newsletter</h1>
    <form action="./inserimento-db.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="cognome" placeholder="Cognome" required>
        <input type="date" name="data_nascita" placeholder="Data nascita" required>
        <input type="text" name="mail" placeholder="Email" required>
        <input type="text" name="categoria_id" placeholder="Categoria">
        <button type="submit">Salva</button>
    </form>
</body>
</html>