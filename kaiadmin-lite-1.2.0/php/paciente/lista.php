<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta tags para el conjunto de caracteres y compatibilidad -->
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Título de la página -->
    <title>NM Hospital</title>
    <!-- Meta tag para diseño responsivo -->
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <!-- Favicon de la página -->
    <link rel="icon" href="../../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fuentes e iconos -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        // Cargar fuentes e iconos personalizados
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
                // Almacenar el estado de carga de las fuentes en el almacenamiento de sesión
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
            <!-- Sidebar container with dark background color -->
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <!-- Logo container with dark background color -->
                    <a href="../../index.html" class="logo" style="display: flex; align-items: center">
                        <!-- Link to the homepage with logo and title -->
                        <img src="../../assets/img/kaiadmin/favicon.png" alt="Logo"
                            style="height: 40px; margin-right: 0 0 0 0" />
                        <!-- Logo image -->
                        <h2 class="fw-bold mb-0" style="color: white">Hospital</h2>
                        <!-- Hospital title -->
                    </a>
                    <div class="nav-toggle">
                        <!-- Navigation toggle buttons -->
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                            <!-- Button to toggle sidebar -->
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                            <!-- Button to toggle sidebar navigation -->
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                        <!-- Button for more options in the top bar -->
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <!--
            * Esta sección del código representa el contenedor de la barra lateral y su contenido.
            *
            * - La clase `sidebar-wrapper` se utiliza para dar estilo al contenedor de la barra lateral.
            * - Las clases `scrollbar scrollbar-inner` se utilizan para aplicar estilos personalizados a la barra de
            desplazamiento.
            * - La clase `sidebar-content` se utiliza para dar estilo al contenido dentro de la barra lateral.
            -->
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary" id="accordionSidebar">
                        <!-- Lista de navegación secundaria con el ID "accordionSidebar" -->
                        <li class="nav-item">
                            <!-- Elemento de navegación -->
                            <a href="../../index.html">
                                <!-- Enlace a la página principal -->
                                <i class="fas fa-desktop"></i>
                                <!-- Icono de escritorio -->
                                <p>Principal</p>
                                <!-- Texto del enlace -->
                            </a>
                        </li>
                        <li class="nav-section">
                            <!-- Sección de navegación -->
                            <span class="sidebar-mini-icon">
                                <!-- Icono miniatura de la sección -->
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                            <!-- Título de la sección -->
                        </li>

                        <li class="nav-item active">
                            <!-- Elemento de navegación activo -->
                            <a data-bs-toggle="collapse" href="#paciente" aria-expanded="false"
                                aria-controls="paciente">
                                <!-- Enlace que colapsa la sección "paciente" -->
                                <i class="fas fa-address-book"></i>
                                <!-- Icono de libreta de direcciones -->
                                <p>Pacientes</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="paciente" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID "paciente" -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsada -->
                                    <li>
                                        <!-- Elemento de la lista -->
                                        <a href="./lista.php">
                                            <!-- Enlace a la lista de pacientes -->
                                            <span class="sub-item">Lista de Pacientes</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./agregar.php">
                                            <!-- Enlace para agregar un paciente -->
                                            <span class="sub-item">Agregar Paciente</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./eliminar.php">
                                            <!-- Enlace para eliminar un paciente -->
                                            <span class="sub-item">Eliminar Paciente</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./editar.php">
                                            <!-- Enlace para editar un paciente -->
                                            <span class="sub-item">Editar Paciente</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de navegación -->
                            <a data-bs-toggle="collapse" href="#doctor">
                                <!-- Enlace que colapsa la sección "doctor" -->
                                <i class="fas fa-user-md"></i>
                                <!-- Icono de doctor -->
                                <p>Doctor</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="doctor">
                                <!-- Contenedor colapsable con el ID "doctor" -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsada -->
                                    <li>
                                        <a href="../doctor/lista.php">
                                            <!-- Enlace a la lista de doctores -->
                                            <span class="sub-item">Lista de Doctores</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/agregar.php">
                                            <!-- Enlace para agregar un doctor -->
                                            <span class="sub-item">Agregar Doctor</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/eliminar.php">
                                            <!-- Enlace para eliminar un doctor -->
                                            <span class="sub-item">Eliminar Doctor</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/editar.php">
                                            <!-- Enlace para editar un doctor -->
                                            <span class="sub-item">Editar Doctor</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de navegación -->
                            <a data-bs-toggle="collapse" href="#cita" aria-expanded="false" aria-controls="cita">
                                <!-- Enlace que colapsa la sección "cita" -->
                                <i class="fas fa-calendar-alt"></i>
                                <!-- Icono de calendario -->
                                <p>Citas</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="cita" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID "cita" -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsada -->
                                    <li>
                                        <a href="../cita/lista.php">
                                            <!-- Enlace a la lista de citas -->
                                            <span class="sub-item">Lista de Citas</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../cita/agregar.php">
                                            <!-- Enlace para agregar una cita -->
                                            <span class="sub-item">Agregar Cita</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../cita/eliminar.php">
                                            <!-- Enlace para eliminar una cita -->
                                            <span class="sub-item">Eliminar Cita</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../cita/editar.php">
                                            <!-- Enlace para editar una cita -->
                                            <span class="sub-item">Editar Cita</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de navegación -->
                            <a data-bs-toggle="collapse" href="#historial" aria-expanded="false"
                                aria-controls="historial">
                                <!-- Enlace que colapsa la sección "historial" -->
                                <i class="fas fa-notes-medical"></i>
                                <!-- Icono de notas médicas -->
                                <p>Historial</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="historial" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID "historial" -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsada -->
                                    <li>
                                        <a href="../historial/lista.php">
                                            <!-- Enlace a la lista de historiales -->
                                            <span class="sub-item">Lista de Historiales</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../historial/agregar.php">
                                            <!-- Enlace para agregar un historial -->
                                            <span class="sub-item">Agregar Historial</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../historial/eliminar.php">
                                            <!-- Enlace para eliminar un historial -->
                                            <span class="sub-item">Eliminar Historial</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../historial/editar.php">
                                            <!-- Enlace para editar un historial -->
                                            <span class="sub-item">Editar Historial</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de navegación -->
                            <a data-bs-toggle="collapse" href="#receta" aria-expanded="false" aria-controls="receta">
                                <!-- Enlace que colapsa la sección "receta" -->
                                <i class="fas fa-prescription-bottle-alt"></i>
                                <!-- Icono de botella de prescripción -->
                                <p>Recetas</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="receta" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID "receta" -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsada -->
                                    <li>
                                        <a href="../receta/lista.php">
                                            <!-- Enlace a la lista de recetas -->
                                            <span class="sub-item">Lista de Recetas</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/agregar.php">
                                            <!-- Enlace para agregar una receta -->
                                            <span class="sub-item">Agregar Receta</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/eliminar.php">
                                            <!-- Enlace para eliminar una receta -->
                                            <span class="sub-item">Eliminar Receta</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/editar.php">
                                            <!-- Enlace para editar una receta -->
                                            <span class="sub-item">Editar Receta</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fin de la barra lateral -->
        <!-- Contenedor del panel principal -->
        <div class="main-panel">
            <!-- Sección principal del encabezado -->
            <div class="main-header">
                <!-- Contenedor del logo del encabezado principal -->
                <div class="main-header-logo">
                    <!-- Encabezado del logo -->
                    <div class="logo-header" data-background-color="dark">
                        <!-- Enlace del logo -->
                        <a href="index.html" class="logo"> </a>
                        <!-- Botones de alternancia de navegación -->
                        <div class="nav-toggle">
                            <!-- Botón de alternancia de la barra lateral -->
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <!-- Botón de alternancia del sidenav -->
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <!-- Botón de alternancia de la barra superior -->
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- Fin del encabezado del logo -->
                </div>
                <!-- Encabezado de la barra de navegación -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
                    data-background-color="dark2">
                    <div class="container-fluid">
                        <!-- Formulario de búsqueda de la barra de navegación para pantallas grandes -->
                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <!-- Botón de búsqueda -->
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <!-- Campo de entrada de búsqueda -->
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>

                        <!-- Elementos de navegación de la barra superior -->
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <!-- Icono de búsqueda para pantallas pequeñas -->
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <!-- Formulario de búsqueda desplegable para pantallas pequeñas -->
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <!-- Desplegable de mensajes -->
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <!-- Caja de notificaciones de mensajes -->
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <li>
                                        <!-- Título de mensajes con enlace para marcar todos como leídos -->
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Contenedor de desplazamiento de notificaciones de mensajes -->
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Enlace para ver todos los mensajes -->
                                        <a class="see-all" href="javascript:void(0);">See all messages<i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Desplegable de perfil de usuario -->
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <!-- Avatar del usuario -->
                                    <div class="avatar-sm">
                                        <img src="../../assets/img/kaiadmin/favicon.ico" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <!-- Saludo y nombre del usuario -->
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Admin</span>
                                    </span>
                                </a>
                                <!-- Menú desplegable del usuario -->
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <!-- Caja del usuario con avatar y enlace al perfil -->
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
                                            <!-- Divisor del menú desplegable -->
                                            <div class="dropdown-divider"></div>
                                            <!-- Enlace al perfil del usuario -->
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <!-- Enlace al balance del usuario -->
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <!-- Enlace a la bandeja de entrada del usuario -->
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <!-- Divisor del menú desplegable -->
                                            <div class="dropdown-divider"></div>
                                            <!-- Enlace a la configuración de la cuenta -->
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <!-- Divisor del menú desplegable -->
                                            <div class="dropdown-divider"></div>
                                            <!-- Enlace para cerrar sesión -->
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
            <div class="container">
                <!-- Contenedor principal -->
                <div class="page-inner">
                    <!-- Contenedor de la página interna -->
                    <div class="row">
                        <!-- Fila para organizar el contenido -->
                        <div class="col-md-12">
                            <!-- Columna que ocupa todo el ancho en pantallas medianas y grandes -->
                            <div class="card">
                                <!-- Tarjeta para contener el contenido -->
                                <div class="card-header">
                                    <!-- Encabezado de la tarjeta -->
                                    <h4 class="card-title">PACIENTES - CONSULTA</h4>
                                    <!-- Título de la tarjeta -->
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php
                                        // Incluir el archivo de conexión a la base de datos
                                        include "../conex.php";
                                        // Consulta SQL para seleccionar todos los registros de la tabla "paciente"
                                        $sql = "SELECT * FROM paciente";
                                        // Ejecutar la consulta y almacenar el resultado
                                        $result = $conn->query($sql);
                                        ?>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <!-- Tabla con bordes para mostrar los datos de los pacientes -->
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <!-- Encabezados de la tabla -->
                                                            <th>#</th>
                                                            <th>Nombre</th>
                                                            <th>Apellido Paterno</th>
                                                            <th>Apellido Materno</th>
                                                            <th>Fecha de Nacimiento</th>
                                                            <th>Teléfono</th>
                                                            <th>Calle</th>
                                                            <th>Número</th>
                                                            <th>Colonia</th>
                                                            <th>Municipio</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // Verificar si hay registros en el resultado de la consulta
                                                        if ($result->num_rows > 0) {
                                                            // Recorrer cada registro y mostrarlo en una fila de la tabla
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo "<tr>";
                                                                echo "<th scope='row'>" . $row["id_paciente"] . "</th>";
                                                                echo "<td>" . $row["nombre_pac"] . "</td>";
                                                                echo "<td>" . $row["ap_paterno_pac"] . "</td>";
                                                                echo "<td>" . $row["ap_materno_pac"] . "</td>";
                                                                echo "<td>" . $row["fecha_nac"] . "</td>";
                                                                echo "<td>" . $row["telefono_pac"] . "</td>";
                                                                echo "<td>" . $row["calle_pac"] . "</td>";
                                                                echo "<td>" . $row["numero_calle_pac"] . "</td>";
                                                                echo "<td>" . $row["colonia_pac"] . "</td>";
                                                                echo "<td>" . $row["municipio_pac"] . "</td>";
                                                                echo "<td>" . $row["estado_pac"] . "</td>";
                                                                echo "</tr>";
                                                            }
                                                        } else {
                                                            // Mostrar un mensaje si no hay registros
                                                            echo "<tr><td colspan='11'>No hay pacientes registrados</td></tr>";
                                                        }
                                                        // Cerrar la conexión a la base de datos
                                                        $conn->close();
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <!-- Contenedor del pie de página -->
                    <div class="container-fluid d-flex justify-content-between">
                        <!-- Contenedor fluido con distribución flexible -->
                        <nav class="pull-left">
                            <!-- Navegación alineada a la izquierda -->
                            <ul class="nav">
                                <!-- Lista de navegación -->
                                <li class="nav-item">
                                    <!-- Elemento de la lista de navegación -->
                                    <a class="nav-link" href="../../index.html">
                                        <!-- Enlace a la página principal -->
                                        <i class="fas fa-globe"></i> NM Hospital
                                        <!-- Icono de globo y texto -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Elemento de la lista de navegación -->
                                    <a class="nav-link" href="https://www.facebook.com/PauloooMN?mibextid=LQQJ4d">
                                        <!-- Enlace a la página de Facebook -->
                                        <i class="fab fa-facebook"></i> facebook
                                        <!-- Icono de Facebook y texto -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Elemento de la lista de navegación -->
                                    <a class="nav-link"
                                        href="https://www.instagram.com/paulitomn/profilecard/?igsh=c3Ixd3BrZGx5Y3Ay">
                                        <!-- Enlace a la página de Instagram -->
                                        <i class="fab fa-instagram"></i> Instagram
                                        <!-- Icono de Instagram y texto -->
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
                            <!-- Contenedor de derechos de autor -->
                            2024, made with <i class="fa fa-heart heart text-danger"></i> by
                            <!-- Texto de derechos de autor con icono de corazón -->
                            <a href="./index.html">NM Hospital</a>
                            <!-- Enlace a la página principal -->
                        </div>
                        <div>
                            <!-- Contenedor de distribución -->
                            Distributed by
                            <!-- Texto de distribución -->
                            <a target="_blank" href="./index.html">NM Hospital</a>.
                            <!-- Enlace a la página principal -->
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