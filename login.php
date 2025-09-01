<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT user_id, user_name, firts_name, lats_name, password 
        FROM users 
        WHERE user_name=? AND active=1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['firts_name'] = $row['firts_name'];
        $_SESSION['lats_name'] = $row['lats_name'];

        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location.href='login.html';</script>";
    }
} else {
    echo "<script>alert('Usuario no encontrado o inactivo'); window.location.href='login.html';</script>";
}
?>
