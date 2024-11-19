<?php
include "../conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_historial = $_POST['id_historial'];
    $medicamento = $_POST['medicamento'];
    $instrucciones = $_POST['instrucciones'];
    $dosis = $_POST['dosis'];

    $sql = "INSERT INTO receta (id_historial, medicamento, instrucciones, dosis) VALUES ('$id_historial', '$medicamento', '$instrucciones', '$dosis')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Receta agregada exitosamente'); window.location.href='lista.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>