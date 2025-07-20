<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/db.php';

    // Validar campos requeridos
    if (empty($_POST['nombre']) || empty($_POST['email'])) {
        die("❌ Nombre y correo electrónico son obligatorios.");
    }

    $nombre    = trim($_POST['nombre']);
    $email     = trim($_POST['email']);
    $telefono  = trim($_POST['telefono'] ?? '');
    $empresa   = trim($_POST['empresa'] ?? '');
    $direccion = trim($_POST['direccion'] ?? '');

    // Validar formato de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("❌ El correo electrónico no es válido.");
    }

    // Consulta preparada (segura)
    $stmt = $conn->prepare("INSERT INTO clientes (nombre, email, telefono, empresa, direccion) VALUES (?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssss", $nombre, $email, $telefono, $empresa, $direccion);

        if ($stmt->execute()) {
            echo "<div style='padding:20px; font-family:Arial; color:green;'>
                    ✅ Cliente registrado correctamente.<br>
                    <a href='index.php'>Volver al formulario</a>
                  </div>";
        } else {
            echo "❌ Error al registrar: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "❌ Error en la consulta: " . $conn->error;
    }

    $conn->close();
}
?>
