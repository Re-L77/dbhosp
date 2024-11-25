<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Establece la codificación de caracteres y compatibilidad con IE -->
    <title>NM Hospital</title> <!-- Título de la página -->
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="icon" href="../../assets/img/kaiadmin/favicon.ico" type="image/x-icon" /> <!-- Favicon de la página -->

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script> <!-- Carga el script de WebFont -->
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] }, // Carga las fuentes de Google
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ], // Carga las fuentes personalizadas
                urls: ["../../assets/css/fonts.min.css"], // URL de las fuentes personalizadas
            },
            active: function () {
                sessionStorage.fonts = true; // Almacena en la sesión que las fuentes están cargadas
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" /> <!-- Carga el archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="../../assets/css/plugins.min.css" /> <!-- Carga el archivo CSS de plugins -->
    <link rel="stylesheet" href="../../assets/css/kaiadmin.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Carga el archivo CSS principal de Kaiadmin -->

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css" /> <!-- Carga el archivo CSS de demostración -->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <!-- Contenedor del encabezado del logo con fondo oscuro -->
                    <a href="../../index.html" class="logo" style="display: flex; align-items: center">
                        <!-- Enlace al inicio con estilo de flexbox para centrar los elementos -->
                        <img src="../../assets/img/kaiadmin/favicon.png" alt="Logo"
                            style="height: 40px; margin-right: 0 0 0 0" />
                        <!-- Imagen del logo con altura de 40px y sin margen -->
                        <h2 class="fw-bold mb-0" style="color: white">Hospital</h2>
                        <!-- Título del logo con texto blanco y estilo de fuente en negrita -->
                    </a>
                    <div class="nav-toggle"> <!-- Contenedor para los botones de navegación -->
                        <button class="btn btn-toggle toggle-sidebar"> <!-- Botón para alternar la barra lateral -->
                            <i class="gg-menu-right"></i> <!-- Icono de menú derecho -->
                        </button>
                        <button class="btn btn-toggle sidenav-toggler"> <!-- Botón para alternar la barra lateral -->
                            <i class="gg-menu-left"></i> <!-- Icono de menú izquierdo -->
                        </button>
                    </div>
                    <button class="topbar-toggler more"> <!-- Botón para mostrar más opciones en la barra superior -->
                        <i class="gg-more-vertical-alt"></i> <!-- Icono de más opciones vertical -->
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <!-- Contenedor de la barra lateral con barra de desplazamiento -->
                <div class="sidebar-content">
                    <!-- Contenido de la barra lateral -->
                    <ul class="nav nav-secondary" id="accordionSidebar">
                        <!-- Lista de navegación secundaria con ID para el acordeón -->
                        <li class="nav-item">
                            <!-- Elemento de navegación -->
                            <a href="../../index.html">
                                <!-- Enlace a la página de inicio -->
                                <i class="fas fa-desktop"></i>
                                <p>Principal</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <!-- Sección de navegación -->
                            <span class="sidebar-mini-icon">
                                <!-- Icono mini de la barra lateral -->
                                <i class="fa fa-ellipsis-h"></i>
                                <!-- Icono de elipsis horizontal -->
                            </span>
                            <h4 class="text-section">Components</h4>
                            <!-- Título de la sección de componentes -->
                        </li>

                        <li class="nav-item active"> <!-- Elemento de navegación activo -->
                            <a data-bs-toggle="collapse" href="#paciente" aria-expanded="false"
                                aria-controls="paciente"> <!-- Enlace para colapsar la sección de pacientes -->
                                <i class="fas fa-address-book"></i> <!-- Icono de libreta de direcciones -->
                                <p>Pacientes</p> <!-- Texto del enlace -->
                                <span class="caret"></span> <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="paciente" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable para pacientes -->
                                <ul class="nav nav-collapse"> <!-- Lista de navegación colapsable -->
                                    <li> <!-- Elemento de lista -->
                                        <a href="./lista.php"> <!-- Enlace a la lista de pacientes -->
                                            <span class="sub-item">Lista de Pacientes</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="./agregar.php"> <!-- Enlace para agregar un paciente -->
                                            <span class="sub-item">Agregar Paciente</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="./eliminar.php"> <!-- Enlace para eliminar un paciente -->
                                            <span class="sub-item">Eliminar Paciente</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="./editar.php"> <!-- Enlace para editar un paciente -->
                                            <span class="sub-item">Editar Paciente</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de navegación para doctores -->
                            <a data-bs-toggle="collapse" href="#doctor">
                                <!-- Enlace para colapsar la sección de doctores -->
                                <i class="fas fa-user-md"></i>
                                <!-- Icono de doctor -->
                                <p>Doctor</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="doctor">
                                <!-- Contenedor colapsable para doctores -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsable -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/lista.php">
                                            <!-- Enlace a la lista de doctores -->
                                            <span class="sub-item">Lista de Doctores</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/agregar.php">
                                            <!-- Enlace para agregar un doctor -->
                                            <span class="sub-item">Agregar Doctor</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/eliminar.php">
                                            <!-- Enlace para eliminar un doctor -->
                                            <span class="sub-item">Eliminar Doctor</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
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
                            <!-- Elemento de navegación para citas -->
                            <a data-bs-toggle="collapse" href="#cita" aria-expanded="false" aria-controls="cita">
                                <!-- Enlace para colapsar la sección de citas -->
                                <i class="fas fa-calendar-alt"></i>
                                <!-- Icono de calendario -->
                                <p>Citas</p>
                                <!-- Texto del enlace -->
                                <span class="caret"></span>
                                <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="cita" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable para citas -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación colapsable -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/lista.php">
                                            <!-- Enlace a la lista de citas -->
                                            <span class="sub-item">Lista de Citas</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/agregar.php">
                                            <!-- Enlace para agregar una cita -->
                                            <span class="sub-item">Agregar Cita</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/eliminar.php">
                                            <!-- Enlace para eliminar una cita -->
                                            <span class="sub-item">Eliminar Cita</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/editar.php">
                                            <!-- Enlace para editar una cita -->
                                            <span class="sub-item">Editar Cita</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"> <!-- Elemento de navegación para historial -->
                            <a data-bs-toggle="collapse" href="#historial" aria-expanded="false"
                                aria-controls="historial">
                                <!-- Enlace para colapsar la sección de historial -->
                                <i class="fas fa-notes-medical"></i> <!-- Icono de historial médico -->
                                <p>Historial</p> <!-- Texto del enlace -->
                                <span class="caret"></span> <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="historial" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable para historial -->
                                <ul class="nav nav-collapse"> <!-- Lista de navegación colapsable -->
                                    <li> <!-- Elemento de lista -->
                                        <a href="../historial/lista.php"> <!-- Enlace a la lista de historiales -->
                                            <span class="sub-item">Lista de Historiales</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="../historial/agregar.php"> <!-- Enlace para agregar un historial -->
                                            <span class="sub-item">Agregar Historial</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="../historial/eliminar.php"> <!-- Enlace para eliminar un historial -->
                                            <span class="sub-item">Eliminar Historial</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="../historial/editar.php"> <!-- Enlace para editar un historial -->
                                            <span class="sub-item">Editar Historial</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"> <!-- Elemento de navegación para recetas -->
                            <a data-bs-toggle="collapse" href="#receta" aria-expanded="false" aria-controls="receta">
                                <!-- Enlace para colapsar la sección de recetas -->
                                <i class="fas fa-prescription-bottle-alt"></i> <!-- Icono de recetas -->
                                <p>Recetas</p> <!-- Texto del enlace -->
                                <span class="caret"></span> <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="receta" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable para recetas -->
                                <ul class="nav nav-collapse"> <!-- Lista de navegación colapsable -->
                                    <li> <!-- Elemento de lista -->
                                        <a href="../receta/lista.php"> <!-- Enlace a la lista de recetas -->
                                            <span class="sub-item">Lista de Recetas</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="../receta/agregar.php"> <!-- Enlace para agregar una receta -->
                                            <span class="sub-item">Agregar Receta</span> <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="../receta/eliminar.php"> <!-- Enlace para eliminar una receta -->
                                            <span class="sub-item">Eliminar Receta</span>
                                            <!-- Texto del sub-elemento -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="../receta/editar.php"> <!-- Enlace para editar una receta -->
                                            <span class="sub-item">Editar Receta</span> <!-- Texto del sub-elemento -->
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
                        <!-- Contenedor del encabezado del logo con fondo oscuro -->
                        <a href="index.html" class="logo"> </a>
                        <!-- Enlace al inicio con clase logo -->
                        <div class="nav-toggle">
                            <!-- Contenedor para los botones de navegación -->
                            <button class="btn btn-toggle toggle-sidebar">
                                <!-- Botón para alternar la barra lateral -->
                                <i class="gg-menu-right"></i>
                                <!-- Icono de menú derecho -->
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <!-- Botón para alternar la barra lateral -->
                                <i class="gg-menu-left"></i>
                                <!-- Icono de menú izquierdo -->
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <!-- Botón para mostrar más opciones en la barra superior -->
                            <i class="gg-more-vertical-alt"></i>
                            <!-- Icono de más opciones vertical -->
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
                            <!-- Barra de navegación con clases para estilo y comportamiento -->
                            <div class="input-group">
                                <!-- Grupo de entrada para el campo de búsqueda -->
                                <div class="input-group-prepend">
                                    <!-- Contenedor para el botón de búsqueda -->
                                    <button type="submit" class="btn btn-search pe-1">
                                        <!-- Botón de búsqueda con clase para estilo -->
                                        <i class="fa fa-search search-icon"></i>
                                        <!-- Icono de búsqueda -->
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                                <!-- Campo de entrada de texto para la búsqueda con clase para estilo -->
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <!-- Elemento de navegación para búsqueda en dispositivos pequeños -->
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
                                    <!-- Enlace para desplegar el menú de búsqueda -->
                                    <i class="fa fa-search"></i>
                                    <!-- Icono de búsqueda -->
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <!-- Menú desplegable para búsqueda con animación -->
                                    <form class="navbar-left navbar-form nav-search">
                                        <!-- Formulario de búsqueda -->
                                        <div class="input-group">
                                            <!-- Grupo de entrada para el campo de búsqueda -->
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                            <!-- Campo de entrada de texto para la búsqueda con clase para estilo -->
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <!-- Elemento de navegación para mensajes -->
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- Enlace para desplegar el menú de mensajes -->
                                    <i class="fa fa-envelope"></i>
                                    <!-- Icono de sobre -->
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <!-- Menú desplegable para mensajes con animación -->
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            <!-- Título del menú desplegable con estilo de flexbox -->
                                            Messages
                                            <!-- Texto del título -->
                                            <a href="#" class="small">Mark all as read</a>
                                            <!-- Enlace para marcar todos los mensajes como leídos -->
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <!-- Contenedor con barra de desplazamiento para los mensajes -->
                                            <div class="notif-center"></div>
                                            <!-- Centro de notificaciones (vacío por ahora) -->
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i
                                                class="fa fa-angle-right"></i>
                                            <!-- Enlace para ver todos los mensajes con icono de flecha -->
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <!-- Elemento de navegación para el usuario en la barra superior -->
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <!-- Enlace para desplegar el menú del perfil de usuario -->
                                    <div class="avatar-sm">
                                        <!-- Contenedor para el avatar pequeño -->
                                        <img src="../../assets/img/kaiadmin/favicon.ico" alt="..."
                                            class="avatar-img rounded-circle" />
                                        <!-- Imagen del avatar con clase para estilo redondeado -->
                                    </div>
                                    <span class="profile-username">
                                        <!-- Contenedor para el nombre de usuario -->
                                        <span class="op-7">Hi,</span>
                                        <!-- Texto de saludo -->
                                        <span class="fw-bold">Admin</span>
                                        <!-- Nombre de usuario en negrita -->
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <!-- Menú desplegable para el usuario con animación -->
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <!-- Contenedor con barra de desplazamiento para el menú del usuario -->
                                        <li>
                                            <div class="user-box" style="color: white">
                                                <!-- Contenedor para la caja de usuario con estilo de color blanco -->
                                                <div class="avatar-lg">
                                                    <!-- Contenedor para el avatar grande -->
                                                    <img src="../../assets/img/kaiadmin/favicon.ico" alt="image profile"
                                                        class="avatar-img rounded" />
                                                    <!-- Imagen del avatar con clase para estilo redondeado -->
                                                </div>
                                                <div class="u-text">
                                                    <!-- Contenedor para el texto del usuario -->
                                                    <h4>Admin</h4>
                                                    <!-- Nombre del usuario -->
                                                    <p class="text" style="color: white">
                                                        hello@example.com
                                                    </p>
                                                    <!-- Correo electrónico del usuario -->
                                                    <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View
                                                        Profile</a>
                                                    <!-- Enlace para ver el perfil del usuario -->
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <!-- Divisor del menú desplegable -->
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <!-- Enlace al perfil del usuario -->
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <!-- Enlace al balance del usuario -->
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <!-- Enlace a la bandeja de entrada del usuario -->
                                            <div class="dropdown-divider"></div>
                                            <!-- Divisor del menú desplegable -->
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <!-- Enlace a la configuración de la cuenta del usuario -->
                                            <div class="dropdown-divider"></div>
                                            <!-- Divisor del menú desplegable -->
                                            <a class="dropdown-item" href="#">Logout</a>
                                            <!-- Enlace para cerrar sesión -->
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
            <div class="container"> <!-- Contenedor principal que agrupa todo el contenido -->
                <div class="page-inner"> <!-- Contenedor para el contenido interno de la página -->
                    <div class="row"> <!-- Fila para organizar el contenido en columnas -->
                        <div class="col-md-12"> <!-- Columna que ocupa todo el ancho en pantallas medianas y grandes -->
                            <div class="card"> <!-- Componente de tarjeta para agrupar contenido relacionado -->
                                <div class="card-header"> <!-- Encabezado de la tarjeta -->
                                    <h4 class="card-title">PACIENTES - EDITAR</h4> <!-- Título de la tarjeta -->
                                </div>
                                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                                    <div class="row"> <!-- Fila dentro del cuerpo de la tarjeta -->
                                        <?php
                                        include "../conex.php"; // Incluye el archivo de conexión a la base de datos
                                        $sql = "SELECT * FROM paciente"; // Consulta SQL para seleccionar todos los pacientes
                                        $result = $conn->query($sql); // Ejecuta la consulta y almacena el resultado
                                        ?>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <!-- Encabezado de la columna para el ID del paciente -->
                                                            <th>Nombre</th>
                                                            <!-- Encabezado de la columna para el nombre del paciente -->
                                                            <th>Apellido Paterno</th>
                                                            <!-- Encabezado de la columna para el apellido paterno del paciente -->
                                                            <th>Apellido Materno</th>
                                                            <!-- Encabezado de la columna para el apellido materno del paciente -->
                                                            <th>Fecha de Nacimiento</th>
                                                            <!-- Encabezado de la columna para la fecha de nacimiento del paciente -->
                                                            <th>Teléfono</th>
                                                            <!-- Encabezado de la columna para el teléfono del paciente -->
                                                            <th>Calle</th>
                                                            <!-- Encabezado de la columna para la calle del paciente -->
                                                            <th>Número</th>
                                                            <!-- Encabezado de la columna para el número de la calle del paciente -->
                                                            <th>Colonia</th>
                                                            <!-- Encabezado de la columna para la colonia del paciente -->
                                                            <th>Municipio</th>
                                                            <!-- Encabezado de la columna para el municipio del paciente -->
                                                            <th>Estado</th>
                                                            <!-- Encabezado de la columna para el estado del paciente -->
                                                            <th>Borrar</th>
                                                            <!-- Encabezado de la columna para las acciones de borrar -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if ($result->num_rows > 0) { // Verifica si hay resultados en la consulta
                                                            while ($row = $result->fetch_assoc()) { // Itera sobre cada fila de resultados
                                                                echo "<tr>";
                                                                echo "<th scope='row'>" . $row["id_paciente"] . "</th>"; // Muestra el ID del paciente
                                                                echo "<td>" . $row["nombre_pac"] . "</td>"; // Muestra el nombre del paciente
                                                                echo "<td>" . $row["ap_paterno_pac"] . "</td>"; // Muestra el apellido paterno del paciente
                                                                echo "<td>" . $row["ap_materno_pac"] . "</td>"; // Muestra el apellido materno del paciente
                                                                echo "<td>" . $row["fecha_nac"] . "</td>"; // Muestra la fecha de nacimiento del paciente
                                                                echo "<td>" . $row["telefono_pac"] . "</td>"; // Muestra el teléfono del paciente
                                                                echo "<td>" . $row["calle_pac"] . "</td>"; // Muestra la calle del paciente
                                                                echo "<td>" . $row["numero_calle_pac"] . "</td>"; // Muestra el número de la calle del paciente
                                                                echo "<td>" . $row["colonia_pac"] . "</td>"; // Muestra la colonia del paciente
                                                                echo "<td>" . $row["municipio_pac"] . "</td>"; // Muestra el municipio del paciente
                                                                echo "<td>" . $row["estado_pac"] . "</td>"; // Muestra el estado del paciente
                                                                echo "<td><a href='actualizar.php?id=" . $row["id_paciente"] . "' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a></td>"; // Botón de editar
                                                                echo "</tr>";
                                                            }
                                                        } else {
                                                            echo "<tr><td colspan='12'>No se encontraron resultados</td></tr>"; // Muestra un mensaje si no hay resultados
                                                        }
                                                        $conn->close(); // Cierra la conexión a la base de datos
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
                    <div class="container-fluid d-flex justify-content-between">
                        <!-- Contenedor principal con clases para estilo de flexbox y justificación entre elementos -->
                        <nav class="pull-left">
                            <!-- Navegación alineada a la izquierda -->
                            <ul class="nav">
                                <!-- Lista de navegación -->
                                <li class="nav-item">
                                    <!-- Elemento de navegación -->
                                    <a class="nav-link" href="../../index.html">
                                        <!-- Enlace a la página de inicio -->
                                        <i class="fas fa-globe"></i> NM Hospital
                                        <!-- Icono de globo y texto del enlace -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Elemento de navegación -->
                                    <a class="nav-link" href="https://www.facebook.com/PauloooMN?mibextid=LQQJ4d">
                                        <!-- Enlace a la página de Facebook -->
                                        <i class="fab fa-facebook"></i> facebook
                                        <!-- Icono de Facebook y texto del enlace -->
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- Elemento de navegación -->
                                    <a class="nav-link"
                                        href="https://www.instagram.com/paulitomn/profilecard/?igsh=c3Ixd3BrZGx5Y3Ay">
                                        <!-- Enlace a la página de Instagram -->
                                        <i class="fab fa-instagram"></i> Instagram
                                        <!-- Icono de Instagram y texto del enlace -->
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
                            <!-- Contenedor para el texto de derechos de autor -->
                            2024, made with <i class="fa fa-heart heart text-danger"></i> by
                            <!-- Texto de derechos de autor con icono de corazón -->
                            <a href="./index.html">NM Hospital</a>
                            <!-- Enlace al inicio con texto de NM Hospital -->
                        </div>
                        <div>
                            <!-- Contenedor para el texto de distribución -->
                            Distributed by
                            <!-- Texto de distribución -->
                            <a target="_blank" href="./index.html">NM Hospital</a>.
                            <!-- Enlace al inicio con texto de NM Hospital -->
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
        <script>
            // Script para mostrar un alert de confirmación de eliminación
            document.addEventListener('DOMContentLoaded', function () {
                var deleteButtons = document.querySelectorAll('.delete-btn');
                deleteButtons.forEach(function (button) {
                    button.addEventListener('click', function (event) {
                        var patientId = this.getAttribute('data-id');
                        var confirmDelete = confirm('¿Estás seguro de que deseas eliminar al paciente con ID ' + patientId + '?');
                        if (!confirmDelete) {
                            event.preventDefault(); // Cancela la acción de eliminación si el usuario no confirma
                        }
                    });
                });
            });
        </script>
</body>

</html>