<?php
require_once '../MODEL/model.php';
require_once '../VISTA/registre.vista.php';

function comprovar() {
    // Comprueba si el formulario ha sido enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recoge los datos del formulario
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // Valida los datos
        $errors = [];
        if (empty($username)) {
            $errors[] = 'El campo de usuario es obligatorio.';
        }
        if (empty($password1)) {
            $errors[] = 'El campo de contraseña es obligatorio.';
        }
        if ($password1 != $password2) {
            $errors[] = 'Las contraseñas no coinciden.';
        }

        // Si hay errores, muéstralos
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        } else {
            // Si todo está bien, llama a la función del modelo para guardar los datos
            $passEnriptada = password_hash($password1, PASSWORD_DEFAULT);
            registre($username, $passEnriptada);
            echo 'Registro exitoso.';
        }
    }
}

?>
