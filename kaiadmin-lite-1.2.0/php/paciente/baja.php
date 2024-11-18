<?php
// Incluir el archivo de conexión a la base de datos
include "../conex.php";

// Verificar si se ha recibido el ID del paciente a eliminar
if (isset($_GET['id'])) {
    $id_paciente = $_GET['id'];

    // Verificar si el paciente tiene citas asociadas
    $sql_citas = "SELECT id_cita FROM cita WHERE id_paciente = ?";
    $stmt_citas = $conn->prepare($sql_citas);
    $stmt_citas->bind_param("i", $id_paciente);
    $stmt_citas->execute();
    $result_citas = $stmt_citas->get_result();
    $citas_ids = [];
    while ($row_citas = $result_citas->fetch_assoc()) {
        $citas_ids[] = $row_citas['id_cita'];
    }
    $stmt_citas->close();

    // Verificar si el paciente tiene historiales asociados
    $sql_historiales = "SELECT id_historial FROM historial WHERE id_paciente = ?";
    $stmt_historiales = $conn->prepare($sql_historiales);
    $stmt_historiales->bind_param("i", $id_paciente);
    $stmt_historiales->execute();
    $result_historiales = $stmt_historiales->get_result();
    $historiales_ids = [];
    while ($row_historiales = $result_historiales->fetch_assoc()) {
        $historiales_ids[] = $row_historiales['id_historial'];
    }
    $stmt_historiales->close();

    // Si el paciente tiene citas o historiales asociados, mostrar un mensaje de alerta
    if (!empty($citas_ids) || !empty($historiales_ids)) {
        $mensaje = "No se puede eliminar el paciente porque tiene registros asociados en las siguientes tablas: ";
        if (!empty($citas_ids)) {
            $mensaje .= "Citas (ID: " . implode(", ", $citas_ids) . ") ";
        }
        if (!empty($historiales_ids)) {
            $mensaje .= "Historiales (ID: " . implode(", ", $historiales_ids) . ") ";
        }
        echo "<script>alert('$mensaje'); window.location.href='eliminar.php';</script>";
    } else {
        // Preparar la consulta SQL para eliminar el registro
        $sql = "DELETE FROM paciente WHERE id_paciente = ?";

        // Preparar la declaración
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id_paciente);
            $stmt->execute();
            $stmt->close();
            echo "<script>alert('Paciente eliminado exitosamente'); window.location.href='lista.php';</script>";
        } else {
            echo "<script>alert('Error al preparar la consulta'); window.location.href='lista.php';</script>";
        }
    }
} else {
    // Redirigir a la página de lista de pacientes si no se ha recibido un ID
    header("Location: lista.php");
    exit();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>