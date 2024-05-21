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
        <label for="username">Username</label>
        <input id="username" type="text" name="username" placeholder="Username" required><br>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" placeholder="Password" required><br>
        <label for="eta">Eta</label>
        <input type="number" name="eta" placeholder="eta" required><br>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="email" required><br>
        <label for="telefono">Telefono</label>
        <input id="telefono" type="number" name="telefono" placeholder="telefono" required><br>
        <label for="classe">Classe</label>
        <input type="text" name="classe" id="classe" placeholder="classe" required><br>
        <input type="submit"> <br>
    </form>

    <a href="./index.php">torna a login</a>
    
</body>
</html>