<?php
// Incluir el archivo de conexión
include '../conex.php';

// Obtener datos del formulario
$nombre_pac = $_POST['nombre_pac'];
$ap_paterno_pac = $_POST['ap_paterno_pac'];
$ap_materno_pac = $_POST['ap_materno_pac'];
$fecha_nac = $_POST['fecha_nac'];
$telefono_pac = $_POST['telefono_pac'];
$calle_pac = $_POST['calle_pac'];
$numero_calle_pac = $_POST['numero_calle_pac'];
$colonia_pac = $_POST['colonia_pac'];
$municipio_pac = $_POST['municipio_pac'];
$estado_pac = $_POST['estado_pac'];

// Insertar datos en la tabla paciente
$sql = "INSERT INTO paciente (nombre_pac, ap_paterno_pac, ap_materno_pac, fecha_nac, telefono_pac, calle_pac, numero_calle_pac, colonia_pac, municipio_pac, estado_pac)
VALUES ('$nombre_pac', '$ap_paterno_pac', '$ap_materno_pac', '$fecha_nac', '$telefono_pac', '$calle_pac', '$numero_calle_pac', '$colonia_pac', '$municipio_pac', '$estado_pac')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a lista.php con mensaje de éxito
    echo "<script>alert('Paciente agregado exitosamente'); window.location.href='lista.php';</script>";
    // header("Location: ./lista.php?mensaje=Registro añadido exitosamente");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>