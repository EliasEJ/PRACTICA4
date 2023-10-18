<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../ESTIL/estils.css"> 
    <title>Registre</title>
    <style>
    </style>
</head>
<body>
    <div class="login">
    </div>
    <form action="" method="post" class="centrarFormulari">
        <label for="nom" id="nom">Nom</label><br>
        <input type="text" id="nom"><br>
        <label for="correu" id="correu">Correu</label><br>
        <input type="email" id="correu"><br>
        <label for="password1">Contrasenya</label><br>
        <input type="password" id="password1"><br>
        <label for="password2">Repeteix la contrasenya</label><br>
        <input type="password" id="password2"><br><br>
        <button type="submit" value="Registre" class="bttRegistre">Registre</button>
        <button type="submit" value="Tornar" onclick="window.location.href='../index.php'" class="bttRegistre">Tornar</button>
    </form>
</body>
</html>