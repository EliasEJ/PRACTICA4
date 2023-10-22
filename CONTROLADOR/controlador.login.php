<?php
require_once '../MODEL/model.php';
require_once '../VISTA/login.vista.php';

function comprovar() {
    // Comprova si s'ha enviat el formulari
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obte les dades del formulari
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Valida les dades
        $errors = [];
        if (empty($username)) {
            $errors[] = "El camp d'usuario es obligatori.";
        }
        if (empty($password)) {
            $errors[] = "El camp de contrasenya es obligatori.";
        }

        // Si hi ha errors, els mostra i acaba
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        } else {
            // Si no hi ha errors, encripta la contrasenya i fa el login
            $passEnriptada = password_hash($password, PASSWORD_DEFAULT);
            login($username, $passEnriptada);
        }
    }
}

?>
