<?php
include("conexion.php"); // archivo con la conexión a la DB

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['usuario'];      // Nombre de usuario completo
    $firts_name = $_POST['nombre'];      // Nombre(s)
    $lats_name = $_POST['apellido'];     // Apellido
    $mail = $_POST['correo'];            // Correo electrónico
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // encriptar
    $active = 1;                         // activo por defecto

    // Verificar si ya existe usuario o correo
    $check = $conn->query("SELECT * FROM users WHERE user_name='$user_name' OR mail='$mail'");
    if($check->num_rows > 0){
        echo "<script>alert('El usuario o correo ya existe'); window.history.back();</script>";
        exit;
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO users (user_name, firts_name, lats_name, mail, password, active, user_id) 
            VALUES ('$user_name', '$firts_name', '$lats_name', '$mail', '$password', $active, NULL)";

    if($conn->query($sql) === TRUE){
        echo "<script>alert('Usuario registrado correctamente'); window.location='login.html';</script>";
    } else {
        echo "<script>alert('Error al registrar usuario'); window.history.back();</script>";
    }
}
?>
