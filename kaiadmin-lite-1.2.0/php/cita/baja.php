<?php
include "../conex.php";

if (isset($_GET['id'])) {
    $id_cita = $_GET['id'];
    // Preparar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM cita WHERE id_cita = ?";

    // Preparar la declaración
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id_cita);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Cita eliminada exitosamente'); window.location.href='lista.php';</script>";
    } else {
        echo "<script>alert('Error al preparar la consulta'); window.location.href='lista.php';</script>";
    }

} else {
    // Redirigir a la página de lista de doctores si no se ha recibido un ID
    header("Location: lista.php");
    exit();
}
?>