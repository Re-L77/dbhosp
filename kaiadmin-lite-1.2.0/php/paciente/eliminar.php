<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="es"> <!-- Establece el idioma del documento como español -->

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
                urls: ["../../assets/css/fonts.min.css"], // URL de los estilos de las fuentes
            },
            active: function () {
                sessionStorage.fonts = true; // Almacena en la sesión que las fuentes están activas
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" /> <!-- Carga el archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="../../assets/css/plugins.min.css" /> <!-- Carga el archivo CSS de plugins -->
    <link rel="stylesheet" href="../../assets/css/kaiadmin.min.css" />
    <!-- Carga el archivo CSS principal de Kaiadmin -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Carga el archivo CSS de Font Awesome -->

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
                        <!-- Enlace al índice con estilo para alinear elementos -->
                        <img src="../../assets/img/kaiadmin/favicon.png" alt="Logo"
                            style="height: 40px; margin-right: 0 0 0 0" />
                        <!-- Imagen del logo con altura de 40px y sin margen derecho -->
                        <h2 class="fw-bold mb-0" style="color: white">Hospital</h2>
                        <!-- Título "Hospital" con estilo de fuente en negrita y color blanco -->
                    </a>
                    <div class="nav-toggle">
                        <!-- Contenedor para los botones de alternar navegación -->
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                            <!-- Botón para alternar la barra lateral con icono de menú derecho -->
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                            <!-- Botón para alternar la barra lateral con icono de menú izquierdo -->
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                        <!-- Botón para alternar la barra superior con icono de más opciones vertical -->
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <!-- Contenedor del contenido de la barra lateral con barra de desplazamiento interna -->
                <div class="sidebar-content">
                    <!-- Contenido de la barra lateral -->
                    <ul class="nav nav-secondary" id="accordionSidebar">
                        <!-- Lista de navegación secundaria con ID "accordionSidebar" -->
                        <li class="nav-item">
                            <!-- Elemento de la lista de navegación -->
                            <a href="../../index.html">
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

                        <li class="nav-item active"> <!-- Elemento de la lista de navegación activo -->
                            <a data-bs-toggle="collapse" href="#paciente" aria-expanded="false"
                                aria-controls="paciente">
                                <!-- Enlace que despliega el submenú de pacientes -->
                                <i class="fas fa-address-book"></i> <!-- Icono de libreta de direcciones -->
                                <p>Pacientes</p> <!-- Texto del enlace -->
                                <span class="caret"></span> <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="paciente" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable del submenú de pacientes -->
                                <ul class="nav nav-collapse"> <!-- Lista de navegación colapsable -->
                                    <li>
                                        <a href="./lista.php"> <!-- Enlace a la lista de pacientes -->
                                            <span class="sub-item">Lista de Pacientes</span>
                                            <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./agregar.php"> <!-- Enlace para agregar un paciente -->
                                            <span class="sub-item">Agregar Paciente</span> <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./eliminar.php"> <!-- Enlace para eliminar un paciente -->
                                            <span class="sub-item">Eliminar Paciente</span>
                                            <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./editar.php"> <!-- Enlace para editar un paciente -->
                                            <span class="sub-item">Editar Paciente</span> <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"> <!-- Elemento de la lista de navegación -->
                            <a data-bs-toggle="collapse" href="#doctor">
                                <!-- Enlace que despliega el submenú de doctores -->
                                <i class="fas fa-user-md"></i> <!-- Icono de doctor -->
                                <p>Doctor</p> <!-- Texto del enlace -->
                                <span class="caret"></span> <!-- Icono de caret -->
                            </a>
                            <div class="collapse" id="doctor"> <!-- Contenedor colapsable del submenú de doctores -->
                                <ul class="nav nav-collapse"> <!-- Lista de navegación colapsable -->
                                    <li>
                                        <a href="../doctor/lista.php"> <!-- Enlace a la lista de doctores -->
                                            <span class="sub-item">Lista de Doctores</span>
                                            <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/agregar.php"> <!-- Enlace para agregar un doctor -->
                                            <span class="sub-item">Agregar Doctor</span> <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/eliminar.php"> <!-- Enlace para eliminar un doctor -->
                                            <span class="sub-item">Eliminar Doctor</span> <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../doctor/editar.php"> <!-- Enlace para editar un doctor -->
                                            <span class="sub-item">Editar Doctor</span> <!-- Texto del sub-enlace -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de lista con clase 'nav-item' -->
                            <a data-bs-toggle="collapse" href="#cita" aria-expanded="false" aria-controls="cita">
                                <!-- Enlace que activa el colapso del elemento con id 'cita' -->
                                <i class="fas fa-calendar-alt"></i>
                                <!-- Icono de calendario -->
                                <p>Citas</p>
                                <!-- Texto del enlace 'Citas' -->
                                <span class="caret"></span>
                                <!-- Icono de caret para indicar que el elemento es colapsable -->
                            </a>
                            <div class="collapse" id="cita" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con id 'cita' y padre '#accordionSidebar' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista con clase 'nav nav-collapse' -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/lista.php">
                                            <!-- Enlace a 'lista.php' en el directorio 'cita' -->
                                            <span class="sub-item">Lista de Citas</span>
                                            <!-- Texto del enlace 'Lista de Citas' -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/agregar.php">
                                            <!-- Enlace a 'agregar.php' en el directorio 'cita' -->
                                            <span class="sub-item">Agregar Cita</span>
                                            <!-- Texto del enlace 'Agregar Cita' -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/eliminar.php">
                                            <!-- Enlace a 'eliminar.php' en el directorio 'cita' -->
                                            <span class="sub-item">Eliminar Cita</span>
                                            <!-- Texto del enlace 'Eliminar Cita' -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/editar.php">
                                            <!-- Enlace a 'editar.php' en el directorio 'cita' -->
                                            <span class="sub-item">Editar Cita</span>
                                            <!-- Texto del enlace 'Editar Cita' -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de lista con clase 'nav-item' -->
                            <a data-bs-toggle="collapse" href="#historial" aria-expanded="false"
                                aria-controls="historial">
                                <!-- Enlace que activa el colapso del elemento con id 'historial' -->
                                <i class="fas fa-notes-medical"></i>
                                <!-- Icono de notas médicas -->
                                <p>Historial</p>
                                <!-- Texto del enlace 'Historial' -->
                                <span class="caret"></span>
                                <!-- Icono de caret para indicar que el elemento es colapsable -->
                            </a>
                            <div class="collapse" id="historial" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con id 'historial' y padre '#accordionSidebar' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista con clase 'nav nav-collapse' -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/lista.php">
                                            <!-- Enlace a 'lista.php' en el directorio 'historial' -->
                                            <span class="sub-item">Lista de Historiales</span>
                                            <!-- Texto del enlace 'Lista de Historiales' -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/agregar.php">
                                            <!-- Enlace a 'agregar.php' en el directorio 'historial' -->
                                            <span class="sub-item">Agregar Historial</span>
                                            <!-- Texto del enlace 'Agregar Historial' -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/eliminar.php">
                                            <!-- Enlace a 'eliminar.php' en el directorio 'historial' -->
                                            <span class="sub-item">Eliminar Historial</span>
                                            <!-- Texto del enlace 'Eliminar Historial' -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/editar.php">
                                            <!-- Enlace a 'editar.php' en el directorio 'historial' -->
                                            <span class="sub-item">Editar Historial</span>
                                            <!-- Texto del enlace 'Editar Historial' -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#receta" aria-expanded="false" aria-controls="receta">
                                <!-- Enlace que activa la funcionalidad de colapso de Bootstrap, apuntando al elemento con id "receta" -->
                                <i class="fas fa-prescription-bottle-alt"></i>
                                <!-- Icono de FontAwesome que representa una botella de prescripción -->
                                <p>Recetas</p>
                                <!-- Texto que se muestra en el enlace -->
                                <span class="caret"></span>
                                <!-- Elemento visual que indica que el enlace tiene un submenú -->
                            </a>
                            <div class="collapse" id="receta" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable de Bootstrap, con id "receta" y que pertenece al contenedor padre con id "accordionSidebar" -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación dentro del contenedor colapsable -->
                                    <li>
                                        <a href="../receta/lista.php">
                                            <!-- Enlace a la página "lista.php" dentro del directorio "receta" -->
                                            <span class="sub-item">Lista de Recetas</span>
                                            <!-- Texto que se muestra en el enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/agregar.php">
                                            <!-- Enlace a la página "agregar.php" dentro del directorio "receta" -->
                                            <span class="sub-item">Agregar Receta</span>
                                            <!-- Texto que se muestra en el enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/eliminar.php">
                                            <!-- Enlace a la página "eliminar.php" dentro del directorio "receta" -->
                                            <span class="sub-item">Eliminar Receta</span>
                                            <!-- Texto que se muestra en el enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../receta/editar.php">
                                            <!-- Enlace a la página "editar.php" dentro del directorio "receta" -->
                                            <span class="sub-item">Editar Receta</span>
                                            <!-- Texto que se muestra en el enlace -->
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
                    <!-- Contenedor del logo del encabezado principal -->
                    <div class="logo-header" data-background-color="dark">
                        <!-- Encabezado del logo con fondo oscuro -->
                        <a href="index.html" class="logo"> </a>
                        <!-- Enlace al índice con clase 'logo' -->
                        <div class="nav-toggle">
                            <!-- Contenedor para los botones de alternar navegación -->
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                                <!-- Botón para alternar la barra lateral con icono de menú derecho -->
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                                <!-- Botón para alternar la barra lateral con icono de menú izquierdo -->
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                            <!-- Botón para alternar la barra superior con icono de más opciones vertical -->
                        </button>
                    </div>
                    <!-- Fin del encabezado del logo -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
                    data-background-color="dark2">
                    <!-- Barra de navegación con clases de Bootstrap y color de fondo oscuro -->
                    <div class="container-fluid">
                        <!-- Contenedor fluido para la barra de navegación -->
                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <!-- Barra de navegación interna para búsqueda, visible solo en pantallas grandes -->
                            <div class="input-group">
                                <!-- Grupo de entrada para el campo de búsqueda -->
                                <div class="input-group-prepend">
                                    <!-- Contenedor para el botón de búsqueda -->
                                    <button type="submit" class="btn btn-search pe-1">
                                        <!-- Botón de búsqueda -->
                                        <i class="fa fa-search search-icon"></i>
                                        <!-- Icono de búsqueda -->
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                                <!-- Campo de entrada de texto para búsqueda -->
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <!-- Lista de navegación en la parte superior derecha -->
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <!-- Elemento de lista para búsqueda en pantallas pequeñas -->
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
                                    <!-- Enlace para desplegar el menú de búsqueda -->
                                    <i class="fa fa-search"></i>
                                    <!-- Icono de búsqueda -->
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <!-- Menú desplegable para búsqueda -->
                                    <form class="navbar-left navbar-form nav-search">
                                        <!-- Formulario de búsqueda -->
                                        <div class="input-group">
                                            <!-- Grupo de entrada para el campo de búsqueda -->
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                            <!-- Campo de entrada de texto para búsqueda -->
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <!-- Elemento de lista para mensajes -->
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- Enlace para desplegar el menú de mensajes -->
                                    <i class="fa fa-envelope"></i>
                                    <!-- Icono de sobre -->
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <!-- Menú desplegable para mensajes -->
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            <!-- Título del menú desplegable -->
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                            <!-- Enlace para marcar todos los mensajes como leídos -->
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <!-- Contenedor para los mensajes con barra de desplazamiento -->
                                            <div class="notif-center"></div>
                                            <!-- Centro de notificaciones -->
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i
                                                class="fa fa-angle-right"></i>
                                            <!-- Enlace para ver todos los mensajes -->
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <!-- Elemento de lista para el usuario -->
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <!-- Enlace para desplegar el menú del usuario -->
                                    <div class="avatar-sm">
                                        <!-- Contenedor para el avatar del usuario -->
                                        <img src="../../assets/img/kaiadmin/favicon.ico" alt="..."
                                            class="avatar-img rounded-circle" />
                                        <!-- Imagen del avatar del usuario -->
                                    </div>
                                    <span class="profile-username">
                                        <!-- Contenedor para el nombre de usuario -->
                                        <span class="op-7">Hi,</span>
                                        <!-- Texto de saludo -->
                                        <span class="fw-bold">Admin</span>
                                        <!-- Nombre del usuario -->
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <!-- Menú desplegable para el usuario -->
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <!-- Contenedor para el menú del usuario con barra de desplazamiento -->
                                        <li>
                                            <div class="user-box" style="color: white">
                                                <!-- Contenedor para la información del usuario -->
                                                <div class="avatar-lg">
                                                    <!-- Contenedor para el avatar grande del usuario -->
                                                    <img src="../../assets/img/kaiadmin/favicon.ico" alt="image profile"
                                                        class="avatar-img rounded" />
                                                    <!-- Imagen del avatar del usuario -->
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
            <div class="container"> <!-- Contenedor principal -->
                <div class="page-inner"> <!-- Contenedor para el contenido de la página -->
                    <div class="row"> <!-- Fila para organizar el contenido -->
                        <div class="col-md-12"> <!-- Columna que ocupa todo el ancho en pantallas medianas y grandes -->
                            <div class="card"> <!-- Tarjeta para agrupar el contenido -->
                                <div class="card-header"> <!-- Encabezado de la tarjeta -->
                                    <h4 class="card-title">PACIENTES - BAJAS</h4> <!-- Título de la tarjeta -->
                                </div>
                                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                                    <div class="row"> <!-- Fila dentro del cuerpo de la tarjeta -->
                                        <?php
                                        // Incluye el archivo de conexión a la base de datos
                                        include "../conex.php";

                                        // Consulta SQL para seleccionar todos los registros de la tabla 'paciente'
                                        $sql = "SELECT * FROM paciente";

                                        // Ejecuta la consulta y almacena el resultado
                                        $result = $conn->query($sql);
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
                                                            <!-- Encabezado de la columna para la acción de borrar -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // Verifica si hay resultados en la consulta
                                                        if ($result->num_rows > 0) {
                                                            // Itera sobre cada fila de resultados
                                                            while ($row = $result->fetch_assoc()) {
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
                                                                // Muestra el botón de borrar con el ID del paciente
                                                                echo "<td><a href='baja.php?id=" . $row["id_paciente"] . "' class='btn btn-danger btn-sm delete-btn' data-id='" . $row["id_paciente"] . "'><i class='fas fa-trash-alt'></i></a></td>";
                                                                echo "</tr>";
                                                            }
                                                        } else {
                                                            // Muestra un mensaje si no se encontraron resultados
                                                            echo "<tr><td colspan='12'>No se encontraron resultados</td></tr>";
                                                        }
                                                        // Cierra la conexión a la base de datos
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
                <footer class="footer"> <!-- Inicio del pie de página -->
                    <div class="container-fluid d-flex justify-content-between">
                        <!-- Contenedor fluido con clases de Bootstrap para justificar el contenido -->
                        <nav class="pull-left"> <!-- Navegación alineada a la izquierda -->
                            <ul class="nav"> <!-- Lista de navegación -->
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