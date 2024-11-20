<?php
include "../conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cita = $_POST['id_cita']; // Asegúrate de tener el ID de la cita que quieres actualizar
    $id_paciente = $_POST['id_paciente'];
    $id_doc = $_POST['id_doc'];
    $fecha_hora = $_POST['fecha_hora'];

    $sql = "UPDATE cita SET id_paciente='$id_paciente', id_doc='$id_doc', fecha_hora='$fecha_hora' WHERE id_cita='$id_cita'";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Cita actualizada exitosamente'); window.location.href='lista.php';</script>";
        // header("Location: ./lista.php?mensaje=Registro actualizado exitosamente");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>