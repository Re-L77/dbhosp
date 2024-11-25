<?php
// Incluir el archivo de conexión a la base de datos
include "../conex.php";

// Verificar si se ha recibido el ID del paciente a eliminar
if (isset($_GET['id'])) {
    // Obtener el ID del paciente desde la URL
    $id_paciente = $_GET['id'];

    // Verificar si el paciente tiene citas asociadas
    $sql_citas = "SELECT id_cita FROM cita WHERE id_paciente = ?";
    // Preparar la consulta SQL
    $stmt_citas = $conn->prepare($sql_citas);
    // Vincular el parámetro ID del paciente a la consulta
    $stmt_citas->bind_param("i", $id_paciente);
    // Ejecutar la consulta
    $stmt_citas->execute();
    // Obtener el resultado de la consulta
    $result_citas = $stmt_citas->get_result();
    // Inicializar un array para almacenar los IDs de las citas
    $citas_ids = [];
    // Recorrer los resultados y almacenar los IDs de las citas en el array
    while ($row_citas = $result_citas->fetch_assoc()) {
        $citas_ids[] = $row_citas['id_cita'];
    }
    // Cerrar la declaración
    $stmt_citas->close();

    // Verificar si el paciente tiene historiales asociados
    $sql_historiales = "SELECT id_historial FROM historial WHERE id_paciente = ?";
    // Preparar la consulta SQL
    $stmt_historiales = $conn->prepare($sql_historiales);
    // Vincular el parámetro ID del paciente a la consulta
    $stmt_historiales->bind_param("i", $id_paciente);
    // Ejecutar la consulta
    $stmt_historiales->execute();
    // Obtener el resultado de la consulta
    $result_historiales = $stmt_historiales->get_result();
    // Inicializar un array para almacenar los IDs de los historiales
    $historiales_ids = [];
    // Recorrer los resultados y almacenar los IDs de los historiales en el array
    while ($row_historiales = $result_historiales->fetch_assoc()) {
        $historiales_ids[] = $row_historiales['id_historial'];
    }
    // Cerrar la declaración
    $stmt_historiales->close();

    // Si el paciente tiene citas o historiales asociados, mostrar un mensaje de alerta
    if (!empty($citas_ids) || !empty($historiales_ids)) {
        // Construir el mensaje de alerta
        $mensaje = "No se puede eliminar el paciente porque tiene registros asociados en las siguientes tablas: ";
        if (!empty($citas_ids)) {
            $mensaje .= "Citas (ID: " . implode(", ", $citas_ids) . ") ";
        }
        if (!empty($historiales_ids)) {
            $mensaje .= "Historiales (ID: " . implode(", ", $historiales_ids) . ") ";
        }
        // Mostrar el mensaje de alerta y redirigir a la página de eliminación
        echo "<script>alert('$mensaje'); window.location.href='eliminar.php';</script>";
    } else {
        // Preparar la consulta SQL para eliminar el registro
        $sql = "DELETE FROM paciente WHERE id_paciente = ?";

        // Preparar la declaración
        if ($stmt = $conn->prepare($sql)) {
            // Vincular el parámetro ID del paciente a la consulta
            $stmt->bind_param("i", $id_paciente);
            // Ejecutar la consulta
            $stmt->execute();
            // Cerrar la declaración
            $stmt->close();
            // Mostrar un mensaje de éxito y redirigir a la lista de pacientes
            echo "<script>alert('Paciente eliminado exitosamente'); window.location.href='lista.php';</script>";
        } else {
            // Mostrar un mensaje de error si la consulta no se pudo preparar
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