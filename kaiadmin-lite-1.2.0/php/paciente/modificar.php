<?php
// Incluir el archivo de conexión
include '../conex.php';

// Obtener el ID del paciente desde el formulario
$id_paciente = $_POST['id_paciente'];

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

// Actualizar datos en la tabla paciente
$sql = "UPDATE paciente SET 
    nombre_pac = '$nombre_pac', 
    ap_paterno_pac = '$ap_paterno_pac', 
    ap_materno_pac = '$ap_materno_pac', 
    fecha_nac = '$fecha_nac', 
    telefono_pac = '$telefono_pac', 
    calle_pac = '$calle_pac', 
    numero_calle_pac = '$numero_calle_pac', 
    colonia_pac = '$colonia_pac', 
    municipio_pac = '$municipio_pac', 
    estado_pac = '$estado_pac' 
    WHERE id_paciente = $id_paciente";

if ($conn->query($sql) === TRUE) {
    // Redirigir a lista.php con mensaje de éxito
    echo "<script>alert('Paciente actualizado exitosamente'); window.location.href='lista.php';</script>";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>