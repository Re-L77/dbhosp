<?php
include "../conex.php";

if (isset($_GET['id'])) {
    $id_historial = $_GET['id'];

    // Verificar si el historial tiene recetas asociadas
    $sql_citas = "SELECT id_receta FROM receta WHERE id_historial = ?";
    $stmt_citas = $conn->prepare($sql_citas);
    $stmt_citas->bind_param("i", $id_historial);
    $stmt_citas->execute();
    $result_citas = $stmt_citas->get_result();
    $citas_ids = [];
    while ($row_citas = $result_citas->fetch_assoc()) {
        $citas_ids[] = $row_citas['id_receta'];
    }
    $stmt_citas->close();

    // Si el historial tiene citas asociadas, mostrar un mensaje de alerta
    if (!empty($citas_ids)) {
        $mensaje = "No se puede eliminar el historial porque tiene registros asociados en la siguiente tabla: ";
        if (!empty($citas_ids)) {
            $mensaje .= "Citas (IDs: " . implode(", ", $citas_ids) . ") ";
        }
        echo "<script>alert('$mensaje'); window.location.href='eliminar.php';</script>";
    } else {
        // Preparar la consulta SQL para eliminar el registro
        $sql = "DELETE FROM historial WHERE id_historial = ?";

        // Preparar la declaración
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id_historial);
            $stmt->execute();
            $stmt->close();
            echo "<script>alert('Historial eliminado exitosamente'); window.location.href='lista.php';</script>";
        } else {
            echo "<script>alert('Error al preparar la consulta'); window.location.href='lista.php';</script>";
        }
    }
} else {
    // Redirigir a la página de lista de historiales si no se ha recibido un ID
    header("Location: lista.php");
    exit();
}
?>