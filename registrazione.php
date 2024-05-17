<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body>
<h1>REGISTRAZIONE</h1>
    <form action="scriptregistrazione.php" method="POST">
        <p>Inserisci i tuoi dati per registrare:</p>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="text" name="nome" placeholder="name" required><br>
        <input type="text" name="cognome" placeholder="cognome" required><br>
        <input type="email" name="email" placeholder="email" required><br>
        <input type="submit">
    </form>

    <a href="./index.php">torna a login</a>
    
</body>
</html>