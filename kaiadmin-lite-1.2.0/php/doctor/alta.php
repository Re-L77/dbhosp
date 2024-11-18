<?php
// Incluir el archivo de conexión
include '../conex.php';

// Obtener datos del formulario
$nombre_doc = $_POST['nombre_doc'];
$ap_paterno_doc = $_POST['ap_paterno_doc'];
$ap_materno_doc = $_POST['ap_materno_doc'];
$especialidad = $_POST['especialidad'];
$telefono_doc = $_POST['telefono_doc'];
$calle_doc = $_POST['calle_doc'];
$numero_calle_doc = $_POST['numero_calle_doc'];
$colonia_doc = $_POST['colonia_doc'];
$municipio_doc = $_POST['municipio_doc'];
$estado_doc = $_POST['estado_doc'];

// Insertar datos en la tabla doctor
$sql = "INSERT INTO doctor (nombre_doc, ap_paterno_doc, ap_materno_doc, especialidad, telefono_doc, calle_doc, numero_calle_doc, colonia_doc, municipio_doc, estado_doc)
VALUES ('$nombre_doc', '$ap_paterno_doc', '$ap_materno_doc', '$especialidad', '$telefono_doc', '$calle_doc', '$numero_calle_doc', '$colonia_doc', '$municipio_doc', '$estado_doc')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a lista.php con mensaje de éxito
    echo "<script>alert('Doctor agregado exitosamente'); window.location.href='lista.php';</script>";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>