<?php

include '../conex.php';
// Obtener el ID del paciente desde la URL
$id_paciente = $_GET['id'];

// Obtener los datos del paciente
$sql = "SELECT * FROM paciente WHERE id_paciente = $id_paciente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener los datos del paciente
    $row = $result->fetch_assoc();
} else {
    echo "No se encontraron datos del paciente.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>NM Hospital</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../../assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../../assets/css/kaiadmin.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../../index.html" class="logo" style="display: flex; align-items: center">
                        <img src="../../assets/img/kaiadmin/favicon.png" alt="Logo"
                            style="height: 40px; margin-right: 0 0 0 0" />
                        <h2 class="fw-bold mb-0" style="color: white">Hospital</h2>
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary" id="accordionSidebar">
                        <li class="nav-item">
                            <a href="../../index.html">
                                <i class="fas fa-desktop"></i>
                                <p>Principal</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>

                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="#paciente" aria-expanded="false"
                                aria-controls="paciente">
                                <i class="fas fa-address-book"></i>
                                <p>Pacientes</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="paciente" data-bs-parent="#accordionSidebar">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="./lista.php">
                                            <span class="sub-item">Lista de Pacientes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./agregar.php">
                                            <span class="sub-item">Agregar Paciente</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./eliminar.php">
                                            <span class="sub-item">Eliminar Paciente</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./editar.php">
                                            <span class="sub-item">Editar Paciente</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#doctor">
                                <i class="fas fa-user-md"></i>
                                <p>Doctor</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="doctor">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../doctor/lista.php">
                                            <span class="sub-item">Lista de Doctores</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/agregar.php">
                                            <span class="sub-item">Agregar Doctor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/eliminar.php">
                                            <span class="sub-item">Eliminar Doctor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/editar.php">
                                            <span class="sub-item">Editar Doctor</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#cita" aria-expanded="false" aria-controls="cita">
                                <i class="fas fa-calendar-alt"></i>
                                <p>Citas</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="cita" data-bs-parent="#accordionSidebar">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../cita/lista.php">
                                            <span class="sub-item">Lista de Citas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../cita/agregar.php">
                                            <span class="sub-item">Agregar Cita</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../cita/eliminar.php">
                                            <span class="sub-item">Eliminar Cita</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../cita/editar.php">
                                            <span class="sub-item">Editar Cita</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#historial" aria-expanded="false"
                                aria-controls="historial">
                                <i class="fas fa-notes-medical"></i>
                                <p>Historial</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="historial" data-bs-parent="#accordionSidebar">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../historial/lista.php">
                                            <span class="sub-item">Lista de Historiales</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../historial/agregar.php">
                                            <span class="sub-item">Agregar Historial</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../historial/eliminar.php">
                                            <span class="sub-item">Eliminar Historial</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../historial/editar.php">
                                            <span class="sub-item">Editar Historial</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#receta" aria-expanded="false" aria-controls="receta">
                                <i class="fas fa-prescription-bottle-alt"></i>
                                <p>Recetas</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="receta" data-bs-parent="#accordionSidebar">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../receta/lista.php">
                                            <span class="sub-item">Lista de Recetas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/agregar.php">
                                            <span class="sub-item">Agregar Receta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/eliminar.php">
                                            <span class="sub-item">Eliminar Receta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/editar.php">
                                            <span class="sub-item">Editar Receta</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo"> </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
                    data-background-color="dark2">
                    <div class="container-fluid">
                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="../../assets/img/kaiadmin/favicon.ico" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Admin</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box" style="color: white">
                                                <div class="avatar-lg">
                                                    <img src="../../assets/img/kaiadmin/favicon.ico" alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>Admin</h4>
                                                    <p class="text" style="color: white">
                                                        hello@example.com
                                                    </p>
                                                    <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
            <div class="container">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PACIENTES - EDITAR ID<?php echo "[", $id_paciente, "]"; ?>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form class="needs-validation" action="./modificar.php" method="post" novalidate
                                            onsubmit="return validateForm()">
                                            <!-- Formulario para actualizar los datos del paciente -->
                                            <div class="form-group" style="display: none;">
                                                <!-- Campo oculto para el ID del paciente -->
                                                <input type="text" class="form-control" id="id_paciente"
                                                    name="id_paciente" value="<?php echo $row['id_paciente']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el nombre del paciente -->
                                                <label for="nombre_pac">Nombre</label>
                                                <input type="text" class="form-control" id="nombre_pac"
                                                    name="nombre_pac" value="<?php echo $row['nombre_pac']; ?>"
                                                    required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un nombre válido.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el apellido paterno del paciente -->
                                                <label for="ap_paterno_pac">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="ap_paterno_pac"
                                                    name="ap_paterno_pac" value="<?php echo $row['ap_paterno_pac']; ?>"
                                                    required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un apellido paterno
                                                    válido.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el apellido materno del paciente -->
                                                <label for="ap_materno_pac">Apellido Materno</label>
                                                <input type="text" class="form-control" id="ap_materno_pac"
                                                    name="ap_materno_pac" value="<?php echo $row['ap_materno_pac']; ?>"
                                                    required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un apellido materno
                                                    válido.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para la fecha de nacimiento del paciente -->
                                                <label for="fecha_nac">Fecha de Nacimiento</label>
                                                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac"
                                                    value="<?php echo $row['fecha_nac']; ?>" required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese una fecha válida.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el teléfono del paciente -->
                                                <label for="telefono_pac">Teléfono</label>
                                                <input type="tel" class="form-control" id="telefono_pac"
                                                    name="telefono_pac" value="<?php echo $row['telefono_pac']; ?>"
                                                    pattern="[0-9]{10}" required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un teléfono válido de
                                                    10 dígitos.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para la calle del paciente -->
                                                <label for="calle_pac">Calle</label>
                                                <input type="text" class="form-control" id="calle_pac" name="calle_pac"
                                                    value="<?php echo $row['calle_pac']; ?>" required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese una calle válida.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el número de la calle del paciente -->
                                                <label for="numero_calle_pac">Número</label>
                                                <input type="number" min="1" max="999" class="form-control"
                                                    id="numero_calle_pac" name="numero_calle_pac"
                                                    value="<?php echo $row['numero_calle_pac']; ?>" required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un número válido.</div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para la colonia del paciente -->
                                                <label for="colonia_pac">Colonia</label>
                                                <input type="text" class="form-control" id="colonia_pac"
                                                    name="colonia_pac" value="<?php echo $row['colonia_pac']; ?>"
                                                    required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese una colonia válida.
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el municipio del paciente -->
                                                <label for="municipio_pac">Municipio</label>
                                                <input type="text" class="form-control" id="municipio_pac"
                                                    name="municipio_pac" value="<?php echo $row['municipio_pac']; ?>"
                                                    required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un municipio válido.
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Campo para el estado del paciente -->
                                                <label for="estado_pac">Estado</label>
                                                <input type="text" class="form-control" id="estado_pac"
                                                    name="estado_pac" value="<?php echo $row['estado_pac']; ?>"
                                                    required>
                                                <div class="valid-feedback">¡Correcto!</div>
                                                <div class="invalid-feedback">Por favor, ingrese un estado válido.</div>
                                            </div>
                                            <!-- Botón para enviar el formulario -->
                                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                        </form>

                                        <script>
                                            (function () {
                                                'use strict';
                                                window.addEventListener('load', function () {
                                                    var forms = document.getElementsByClassName('needs-validation');
                                                    var validation = Array.prototype.filter.call(forms, function (form) {
                                                        form.addEventListener('submit', function (event) {
                                                            if (form.checkValidity() === false) {
                                                                event.preventDefault();
                                                                event.stopPropagation();
                                                            }
                                                            form.classList.add('was-validated');
                                                        }, false);
                                                    });
                                                }, false);
                                            })();

                                            function validateForm() {
                                                if (confirm("¿Estás seguro de que deseas enviar este formulario?")) {
                                                    return true;
                                                } else {
                                                    return false;
                                                }
                                            }
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../index.html">
                                        <i class="fas fa-globe"></i> NM Hospital
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.facebook.com/PauloooMN?mibextid=LQQJ4d"><i
                                            class="fab fa-facebook"></i> facebook
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.instagram.com/paulitomn/profilecard/?igsh=c3Ixd3BrZGx5Y3Ay">
                                        <i class="fab fa-instagram"></i> Instagram
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Elemento de la lista de navegación -->
                                    <a class="nav-link" href="https://www.tiktok.com/@chuchotrejo0?_t=8rgCjfAxzYW&_r=1">
                                        <!-- Enlace a la página de TikTok -->
                                        <i class="fa-brands fa-tiktok"></i> Tik Tok
                                        <!-- Icono de TikTok y texto -->
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright">
                            2024, made with <i class="fa fa-heart heart text-danger"></i> by
                            <a href="./index.html">NM Hospital</a>
                        </div>
                        <div>
                            Distributed by
                            <a target="_blank" href="./index.html">NM Hospital</a>.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="../../assets/js/core/jquery-3.7.1.min.js"></script>
        <script src="../../assets/js/core/popper.min.js"></script>
        <script src="../../assets/js/core/bootstrap.min.js"></script>
        <!-- jQuery Scrollbar -->
        <script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <!-- Chart JS -->
        <script src="../../assets/js/plugin/chart.js/chart.min.js"></script>
        <!-- jQuery Sparkline -->
        <script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
        <!-- Kaiadmin JS -->
        <script src="../../assets/js/kaiadmin.min.js"></script>
        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src="../../assets/js/setting-demo.js"></script>
        <script src="../../assets/js/demo.js"></script>
</body>

</html>