<?php
include "../conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['id_paciente'];
    $fecha_hist = $_POST['fecha_hist'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];

    $sql = "INSERT INTO historial (id_paciente, fecha_hist, diagnóstico, tratamiento) VALUES ('$id_paciente', '$fecha_hist', '$diagnostico', '$tratamiento')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Historial agregado exitosamente'); window.location.href='lista.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>