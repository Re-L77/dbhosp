<?php
include "../conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['id_paciente'];
    $id_doc = $_POST['id_doc'];
    $fecha_hora = $_POST['fecha_hora'];

    $sql = "INSERT INTO cita (id_paciente, id_doc, fecha_hora) VALUES ('$id_paciente', '$id_doc', '$fecha_hora')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Cita agregada exitosamente'); window.location.href='lista.php';</script>";
        // header("Location: ./lista.php?mensaje=Registro añadido exitosamente");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>