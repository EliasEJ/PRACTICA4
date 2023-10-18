<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="ESTIL/estils.css"> 
    <title>Login</title>
    <style>
    </style>
</head>
<body>
    <div class="login">
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
    <button type="submit" value="Login">Login</button><br> O
    </form>
    <button type="submit" value="Registre" onclick="window.location.href='registre.php'">Registrar-se</button>
    </div>
</body>
</html>
