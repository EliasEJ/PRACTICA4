<?php
require_once '../MODEL/model.php';
require_once '../VISTA/registre.vista.php';

function comprovar() {
    // Comprova si s'ha enviat el formulari
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obte les dades del formulari
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // Valida les dades
        $errors = [];
        if (empty($username)) {
            $errors[] = "El camp d'usuario es obligatori.";
        }
        if (empty($password1)) {
            $errors[] = "El camp de contrasenya es obligatori.";
        }
        if ($password1 != $password2) {
            $errors[] = "Les contrasenyes no coincideixen.";
        }

        // Si hi ha errors, els mostra i acaba
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        } else {
            // Si no hi ha errors, encripta la contrasenya i registra l'usuari
            $passEnriptada = password_hash($password1, PASSWORD_DEFAULT);
            registre($username, $passEnriptada);
            echo 'Registro exitoso.';
        }
    }
}

?>
