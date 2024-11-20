<?php
include "../conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_receta = $_POST['id_receta'];
    $id_historial = $_POST['id_historial'];
    $medicamento = $_POST['medicamento'];
    $instrucciones = $_POST['instrucciones'];
    $dosis = $_POST['dosis'];

    $sql = "UPDATE receta SET id_historial='$id_historial', medicamento='$medicamento', instrucciones='$instrucciones', dosis='$dosis' WHERE id_receta='$id_receta'";
    if ($conn->query($sql) === TRUE) {
        // Redirigir a lista.php con mensaje de éxito
        echo "<script>alert('Receta actualizada exitosamente'); window.location.href='lista.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>