<?php
require_once '../CONTROLADOR/controlador.registre.php'
?>
<!DOCTYPE html>
<html lang="es">
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="centrarFormulari">
        <label for="username" id="username">Username</label>
        <input type="text" name="username"><br>
        <label for="password1">Contrasenya</label><br>
        <input type="password" name="password1"><br>
        <label for="password2">Repeteix la contrasenya</label><br>
        <input type="password" name="password2"><br><br>
        <button type="submit" id="boto" class="bttRegistre">Registre</button>
        <button type='reset' value='Tornar' onclick="window.location.href='../index.php'" class="bttRegistre">Tornar</button>
        <br>
        <?php comprovar()?>
    </form>
    
</body>
</html>