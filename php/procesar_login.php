<?php
require_once('./connection.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreUsuario = $_POST['nombreUsuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    $sql = "SELECT nombreUsuario, contrasena FROM usuario WHERE nombreUsuario = ? AND contrasena = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ss", $nombreUsuario, $contrasena);
        
        if ($stmt->execute()) {
            $stmt->store_result();
            
            if ($stmt->num_rows == 1) {
                $_SESSION['nombre_usuario'] = $nombreUsuario;
                
                header("Location: ../index.php");
                exit;
            } else {
                echo "El nombre de usuario o la contraseña no son correctos.";
            }
        } else {
            echo "Algo salió mal al intentar ejecutar tu consulta.";
        }
        $stmt->close();
    }
    $mysqli->close();
}
?>
