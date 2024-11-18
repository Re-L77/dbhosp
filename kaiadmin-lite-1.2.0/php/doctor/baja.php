<?php
include "../conex.php";

if (isset($_GET['id'])) {
    $id_doc = $_GET['id'];

    // Verificar si el doctor tiene citas asociadas
    $sql_citas = "SELECT id_cita FROM cita WHERE id_doc = ?";
    $stmt_citas = $conn->prepare($sql_citas);
    $stmt_citas->bind_param("i", $id_doc);
    $stmt_citas->execute();
    $result_citas = $stmt_citas->get_result();
    $citas_ids = [];
    while ($row_citas = $result_citas->fetch_assoc()) {
        $citas_ids[] = $row_citas['id_cita'];
    }
    $stmt_citas->close();

    // Si el doctor tiene citas asociadas, mostrar un mensaje de alerta
    if (!empty($citas_ids)) {
        $mensaje = "No se puede eliminar el doctor porque tiene registros asociados en la siguiente tabla: ";
        if (!empty($citas_ids)) {
            $mensaje .= "Citas (IDs: " . implode(", ", $citas_ids) . ") ";
        }
        echo "<script>alert('$mensaje'); window.location.href='eliminar.php';</script>";
    } else {
        // Preparar la consulta SQL para eliminar el registro
        $sql = "DELETE FROM doctor WHERE id_doc = ?";

        // Preparar la declaración
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id_doc);
            $stmt->execute();
            $stmt->close();
            echo "<script>alert('Doctor eliminado exitosamente'); window.location.href='lista.php';</script>";
        } else {
            echo "<script>alert('Error al preparar la consulta'); window.location.href='lista.php';</script>";
        }
    }
} else {
    // Redirigir a la página de lista de doctores si no se ha recibido un ID
    header("Location: lista.php");
    exit();
}
?>