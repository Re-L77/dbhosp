<?php
include "../conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_historial = $_POST['id_historial'];
    $id_paciente = $_POST['id_paciente'];
    $fecha_hist = $_POST['fecha_hist'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];

    $sql = "UPDATE historial SET id_paciente='$id_paciente', fecha_hist='$fecha_hist', diagnóstico='$diagnostico', tratamiento='$tratamiento' WHERE id_historial='$id_historial'";
    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Historial actualizado exitosamente'); window.location.href='lista.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>