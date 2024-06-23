<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario$usuario'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    if (empty($usuario)) {
        $errores[] = 'El campo usuario es obligatorio.';
    }
    if (empty($password)) {
        $errores[] = 'El campo contraseña es obligatorio.';
    }
    if (empty($edad)) {
        $errores[] = 'El campo edad es obligatorio.';
    }
    if (!empty($edad) && (!is_numeric($edad) || $edad < 18)) {
        $errores[] = 'Debe tener 18 años o más.';
    }

    if ($usuario !== 'luis' || $password !== 'mendoza') {
        $errores[] = 'Usuario o contraseña incorrectos.';
    }
 else {
        echo "<p>Login exitoso. Bienvenido, $usuario!</p>";
    }
}
?>
