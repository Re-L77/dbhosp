<?php
include '../conex.php';

// Check if all required POST variables are set
if (isset($_POST['id_doctor'], $_POST['nombre_doc'], $_POST['ap_paterno_doc'], $_POST['ap_materno_doc'], $_POST['especialidad'], $_POST['telefono_doc'], $_POST['calle_doc'], $_POST['numero_calle_doc'], $_POST['colonia_doc'], $_POST['municipio_doc'], $_POST['estado_doc'])) {
    // Obtener datos del formulario
    $id_doctor = $_POST['id_doctor'];
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

    // Actualizar datos en la tabla doctor
    $sql = "UPDATE doctor SET 
        nombre_doc='$nombre_doc', 
        ap_paterno_doc='$ap_paterno_doc', 
        ap_materno_doc='$ap_materno_doc', 
        especialidad='$especialidad', 
        telefono_doc='$telefono_doc', 
        calle_doc='$calle_doc', 
        numero_calle_doc='$numero_calle_doc', 
        colonia_doc='$colonia_doc', 
        municipio_doc='$municipio_doc', 
        estado_doc='$estado_doc' 
        WHERE id_doc='$id_doctor'";
    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Doctor actualizado exitosamente'); window.location.href='lista.php';</script>";
        exit();
    } else {
        echo "Error: {$sql}<br>{$conn->error}";
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "Error: Datos incompletos.";
}
?>