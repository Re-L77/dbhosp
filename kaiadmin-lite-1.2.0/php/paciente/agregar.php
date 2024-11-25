<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta tags for character set and compatibility -->
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Title of the page -->
    <title>NM Hospital</title>
    <!-- Meta tag for responsive design -->
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <!-- Favicon for the page -->
    <link rel="icon" href="../../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] }, // Google fonts to load
            custom: {
                families: [
                    "Font Awesome 5 Solid", // Custom font family
                    "Font Awesome 5 Regular", // Custom font family
                    "Font Awesome 5 Brands", // Custom font family
                    "simple-line-icons", // Custom font family
                ],
                urls: ["../../assets/css/fonts.min.css"], // URL to the custom fonts CSS
            },
            active: function () {
                sessionStorage.fonts = true; // Store fonts in session storage
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" /> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/plugins.min.css" /> <!-- Plugins CSS -->
    <link rel="stylesheet" href="../../assets/css/kaiadmin.min.css" /> <!-- Main CSS for the admin panel -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css" /> <!-- Demo CSS -->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <!-- Enlace del logo a la página principal -->
                    <a href="../../index.html" class="logo" style="display: flex; align-items: center">
                        <!-- Imagen del logo -->
                        <img src="../../assets/img/kaiadmin/favicon.png" alt="Logo"
                            style="height: 40px; margin-right: 0 0 0 0" />
                        <!-- Texto del logo -->
                        <h2 class="fw-bold mb-0" style="color: white">Hospital</h2>
                    </a>
                    <!-- Botones de navegación -->
                    <div class="nav-toggle">
                        <!-- Botón para alternar la barra lateral -->
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <!-- Botón para alternar la barra de navegación -->
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <!-- Botón para alternar la barra superior -->
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <!-- Sidebar wrapper with scrollbar -->
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <!-- Sidebar content -->
                <div class="sidebar-content">
                    <!-- Navigation list -->
                    <ul class="nav nav-secondary" id="accordionSidebar">
                        <!-- Navigation item -->
                        <li class="nav-item">
                            <a href="../../index.html">
                                <i class="fas fa-desktop"></i>
                                <p>Principal</p>
                            </a>
                        </li>
                        <!-- Navigation section for components -->
                        <li class="nav-section">
                            <!-- Mini icon for the section -->
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <!-- Section title -->
                            <h4 class="text-section">Components</h4>
                        </li>

                        <li class="nav-item active">
                            <!-- Elemento de lista con clase 'nav-item active' para indicar que está activo en la navegación -->
                            <a data-bs-toggle="collapse" href="#paciente" aria-expanded="false"
                                aria-controls="paciente">
                                <!-- Enlace que controla la expansión/colapso del menú con el ID 'paciente' -->
                                <i class="fas fa-address-book"></i>
                                <!-- Icono de FontAwesome para representar la sección de pacientes -->
                                <p>Pacientes</p> <!-- Texto que se muestra en el enlace -->
                                <span class="caret"></span>
                                <!-- Elemento visual adicional, posiblemente una flecha para indicar que se puede expandir -->
                            </a>
                            <div class="collapse" id="paciente" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID 'paciente', parte del acordeón 'accordionSidebar' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación dentro del contenedor colapsable -->
                                    <li> <!-- Elemento de lista -->
                                        <a href="./lista.php"> <!-- Enlace a la página 'lista.php' -->
                                            <span class="sub-item">Lista de Pacientes</span> <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="./agregar.php"> <!-- Enlace a la página 'agregar.php' -->
                                            <span class="sub-item">Agregar Paciente</span> <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="./eliminar.php"> <!-- Enlace a la página 'eliminar.php' -->
                                            <span class="sub-item">Eliminar Paciente</span> <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li> <!-- Elemento de lista -->
                                        <a href="./editar.php"> <!-- Enlace a la página 'editar.php' -->
                                            <span class="sub-item">Editar Paciente</span> <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de lista con clase 'nav-item' -->
                            <a data-bs-toggle="collapse" href="#doctor">
                                <!-- Enlace que controla la expansión/colapso del menú con el ID 'doctor' -->
                                <i class="fas fa-user-md"></i>
                                <!-- Icono de FontAwesome para representar la sección de doctores -->
                                <p>Doctor</p> <!-- Texto que se muestra en el enlace -->
                                <span class="caret"></span>
                                <!-- Elemento visual adicional, posiblemente una flecha para indicar que se puede expandir -->
                            </a>
                            <div class="collapse" id="doctor">
                                <!-- Contenedor colapsable con el ID 'doctor' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación dentro del contenedor colapsable -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/lista.php">
                                            <!-- Enlace a la página 'lista.php' -->
                                            <span class="sub-item">Lista de Doctores</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/agregar.php">
                                            <!-- Enlace a la página 'agregar.php' -->
                                            <span class="sub-item">Agregar Doctor</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/eliminar.php">
                                            <!-- Enlace a la página 'eliminar.php' -->
                                            <span class="sub-item">Eliminar Doctor</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../doctor/editar.php">
                                            <!-- Enlace a la página 'editar.php' -->
                                            <span class="sub-item">Editar Doctor</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de lista con clase 'nav-item' -->
                            <a data-bs-toggle="collapse" href="#cita" aria-expanded="false" aria-controls="cita">
                                <!-- Enlace que controla la expansión/colapso del menú con el ID 'cita' -->
                                <i class="fas fa-calendar-alt"></i>
                                <!-- Icono de FontAwesome para representar la sección de citas -->
                                <p>Citas</p> <!-- Texto que se muestra en el enlace -->
                                <span class="caret"></span>
                                <!-- Elemento visual adicional, posiblemente una flecha para indicar que se puede expandir -->
                            </a>
                            <div class="collapse" id="cita" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID 'cita', parte del acordeón 'accordionSidebar' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación dentro del contenedor colapsable -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/lista.php">
                                            <!-- Enlace a la página 'lista.php' -->
                                            <span class="sub-item">Lista de Citas</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/agregar.php">
                                            <!-- Enlace a la página 'agregar.php' -->
                                            <span class="sub-item">Agregar Cita</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/eliminar.php">
                                            <!-- Enlace a la página 'eliminar.php' -->
                                            <span class="sub-item">Eliminar Cita</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../cita/editar.php">
                                            <!-- Enlace a la página 'editar.php' -->
                                            <span class="sub-item">Editar Cita</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de lista con clase 'nav-item' -->
                            <a data-bs-toggle="collapse" href="#historial" aria-expanded="false"
                                aria-controls="historial">
                                <!-- Enlace que controla la expansión/colapso del menú con el ID 'historial' -->
                                <i class="fas fa-notes-medical"></i>
                                <!-- Icono de FontAwesome para representar la sección de historial -->
                                <p>Historial</p> <!-- Texto que se muestra en el enlace -->
                                <span class="caret"></span>
                                <!-- Elemento visual adicional, posiblemente una flecha para indicar que se puede expandir -->
                            </a>
                            <div class="collapse" id="historial" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID 'historial', parte del acordeón 'accordionSidebar' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación dentro del contenedor colapsable -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/lista.php">
                                            <!-- Enlace a la página 'lista.php' -->
                                            <span class="sub-item">Lista de Historiales</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/agregar.php">
                                            <!-- Enlace a la página 'agregar.php' -->
                                            <span class="sub-item">Agregar Historial</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/eliminar.php">
                                            <!-- Enlace a la página 'eliminar.php' -->
                                            <span class="sub-item">Eliminar Historial</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../historial/editar.php">
                                            <!-- Enlace a la página 'editar.php' -->
                                            <span class="sub-item">Editar Historial</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Elemento de lista con clase 'nav-item' -->
                            <a data-bs-toggle="collapse" href="#receta" aria-expanded="false" aria-controls="receta">
                                <!-- Enlace que controla la expansión/colapso del menú con el ID 'receta' -->
                                <i class="fas fa-prescription-bottle-alt"></i>
                                <!-- Icono de FontAwesome para representar la sección de recetas -->
                                <p>Recetas</p> <!-- Texto que se muestra en el enlace -->
                                <span class="caret"></span>
                                <!-- Elemento visual adicional, posiblemente una flecha para indicar que se puede expandir -->
                            </a>
                            <div class="collapse" id="receta" data-bs-parent="#accordionSidebar">
                                <!-- Contenedor colapsable con el ID 'receta', parte del acordeón 'accordionSidebar' -->
                                <ul class="nav nav-collapse">
                                    <!-- Lista de navegación dentro del contenedor colapsable -->
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../receta/lista.php">
                                            <!-- Enlace a la página 'lista.php' -->
                                            <span class="sub-item">Lista de Recetas</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../receta/agregar.php">
                                            <!-- Enlace a la página 'agregar.php' -->
                                            <span class="sub-item">Agregar Receta</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../receta/eliminar.php">
                                            <!-- Enlace a la página 'eliminar.php' -->
                                            <span class="sub-item">Eliminar Receta</span>
                                            <!-- Texto del enlace -->
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Elemento de lista -->
                                        <a href="../receta/editar.php">
                                            <!-- Enlace a la página 'editar.php' -->
                                            <span class="sub-item">Editar Receta</span>
                                            <!-- Texto del enlace -->
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
                            <!-- Navbar for search functionality, visible only on large screens -->
                            <div class="input-group">
                                <!-- Input group for search bar -->
                                <div class="input-group-prepend">
                                    <!-- Prepend button for search -->
                                    <button type="submit" class="btn btn-search pe-1">
                                        <!-- Search button with icon -->
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                                <!-- Search input field -->
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <!-- Navigation item for search functionality, visible only on small screens -->
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <!-- Dropdown toggle for search -->
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
                                    <!-- Search icon -->
                                    <i class="fa fa-search"></i>
                                </a>
                                <!-- Dropdown menu for search -->
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <!-- Form for search functionality -->
                                    <form class="navbar-left navbar-form nav-search">
                                        <!-- Input group for search bar -->
                                        <div class="input-group">
                                            <!-- Search input field -->
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <!-- Navigation item for messages -->
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <!-- Dropdown toggle for messages -->
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- Envelope icon for messages -->
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <!-- Dropdown menu for messages -->
                                <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                    aria-labelledby="messageDropdown">
                                    <!-- Dropdown title with a link to mark all messages as read -->
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <!-- Scrollable area for message notifications -->
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center"></div>
                                        </div>
                                    </li>
                                    <!-- Link to see all messages -->
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <!-- Dropdown toggle for user profile -->
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <!-- User avatar -->
                                    <div class="avatar-sm">
                                        <img src="../../assets/img/kaiadmin/favicon.ico" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <!-- Username display -->
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">Admin</span>
                                    </span>
                                </a>
                                <!-- Dropdown menu for user profile -->
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <!-- User box with avatar and profile link -->
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
        </div> <!-- Cierra el div de la barra lateral -->
        <div class="container"> <!-- Contenedor principal -->
            <div class="page-inner"> <!-- Contenedor para el contenido de la página -->
                <div class="row"> <!-- Fila para organizar el contenido -->
                    <div class="col-md-12"> <!-- Columna que ocupa todo el ancho en pantallas medianas -->
                        <div class="card"> <!-- Tarjeta para agrupar contenido -->
                            <div class="card-header"> <!-- Encabezado de la tarjeta -->
                                <h4 class="card-title">PACIENTES - ALTAS</h4> <!-- Título de la tarjeta -->
                            </div>
                            <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                                <div class="row"> <!-- Fila dentro del cuerpo de la tarjeta -->
                                    <form class="needs-validation" action="./alta.php" method="POST" novalidate
                                        onsubmit="return validateForm()">
                                        <!-- Formulario con clase 'needs-validation' para validación, acción './alta.php', método POST y validación al enviar -->
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="nombre_pac">Nombre</label>
                                            <!-- Etiqueta para el campo de nombre -->
                                            <input type="text" class="form-control" id="nombre_pac" name="nombre_pac"
                                                required>
                                            <!-- Campo de entrada de texto para el nombre, con clase 'form-control', id 'nombre_pac', nombre 'nombre_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un nombre válido.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="ap_paterno_pac">Apellido Paterno</label>
                                            <!-- Etiqueta para el campo de apellido paterno -->
                                            <input type="text" class="form-control" id="ap_paterno_pac"
                                                name="ap_paterno_pac" required>
                                            <!-- Campo de entrada de texto para el apellido paterno, con clase 'form-control', id 'ap_paterno_pac', nombre 'ap_paterno_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un apellido paterno válido.
                                            </div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="ap_materno_pac">Apellido Materno</label>
                                            <!-- Etiqueta para el campo de apellido materno -->
                                            <input type="text" class="form-control" id="ap_materno_pac"
                                                name="ap_materno_pac" required>
                                            <!-- Campo de entrada de texto para el apellido materno, con clase 'form-control', id 'ap_materno_pac', nombre 'ap_materno_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un apellido materno válido.
                                            </div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="fecha_nac">Fecha de Nacimiento</label>
                                            <!-- Etiqueta para el campo de fecha de nacimiento -->
                                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac"
                                                required>
                                            <!-- Campo de entrada de fecha para la fecha de nacimiento, con clase 'form-control', id 'fecha_nac', nombre 'fecha_nac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese una fecha de nacimiento
                                                válida.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="telefono_pac">Teléfono</label>
                                            <!-- Etiqueta para el campo de teléfono -->
                                            <input type="tel" class="form-control" id="telefono_pac" name="telefono_pac"
                                                pattern="[0-9]{10}" required>
                                            <!-- Campo de entrada de teléfono para el teléfono, con clase 'form-control', id 'telefono_pac', nombre 'telefono_pac', patrón de 10 dígitos y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un teléfono válido de 10
                                                dígitos.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="calle_pac">Calle</label>
                                            <!-- Etiqueta para el campo de calle -->
                                            <input type="text" class="form-control" id="calle_pac" name="calle_pac"
                                                required>
                                            <!-- Campo de entrada de texto para la calle, con clase 'form-control', id 'calle_pac', nombre 'calle_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese una calle válida.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="numero_calle_pac">Número</label>
                                            <!-- Etiqueta para el campo de número de calle -->
                                            <input type="number" min="1" max="999" class="form-control"
                                                id="numero_calle_pac" name="numero_calle_pac" required>
                                            <!-- Campo de entrada de número para el número de calle, con clase 'form-control', id 'numero_calle_pac', nombre 'numero_calle_pac', mínimo 1, máximo 999 y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un número válido.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="colonia_pac">Colonia</label>
                                            <!-- Etiqueta para el campo de colonia -->
                                            <input type="text" class="form-control" id="colonia_pac" name="colonia_pac"
                                                required>
                                            <!-- Campo de entrada de texto para la colonia, con clase 'form-control', id 'colonia_pac', nombre 'colonia_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese una colonia válida.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="municipio_pac">Municipio</label>
                                            <!-- Etiqueta para el campo de municipio -->
                                            <input type="text" class="form-control" id="municipio_pac"
                                                name="municipio_pac" required>
                                            <!-- Campo de entrada de texto para el municipio, con clase 'form-control', id 'municipio_pac', nombre 'municipio_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un municipio válido.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <div class="form-group">
                                            <!-- Grupo de formulario -->
                                            <label for="estado_pac">Estado</label>
                                            <!-- Etiqueta para el campo de estado -->
                                            <input type="text" class="form-control" id="estado_pac" name="estado_pac"
                                                required>
                                            <!-- Campo de entrada de texto para el estado, con clase 'form-control', id 'estado_pac', nombre 'estado_pac' y requerido -->
                                            <div class="valid-feedback">¡Correcto!</div>
                                            <!-- Mensaje de retroalimentación para entrada válida -->
                                            <div class="invalid-feedback">Por favor, ingrese un estado válido.</div>
                                            <!-- Mensaje de retroalimentación para entrada inválida -->
                                        </div>
                                        <button type="submit" class="btn btn-primary">Agregar Paciente</button>
                                        <!-- Botón de envío del formulario con clase 'btn btn-primary' y texto 'Agregar Paciente' -->
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
                <!-- Inicia el pie de página con la clase 'footer' -->
                <div class="container-fluid d-flex justify-content-between">
                    <!-- Contenedor fluido con clases para distribuir el contenido -->
                    <nav class="pull-left">
                        <!-- Navegación alineada a la izquierda -->
                        <ul class="nav">
                            <!-- Lista de navegación -->
                            <li class="nav-item">
                                <!-- Elemento de lista de navegación -->
                                <a class="nav-link" href="../../index.html">
                                    <!-- Enlace a la página principal -->
                                    <i class="fas fa-globe"></i> NM Hospital
                                    <!-- Icono de globo y texto 'NM Hospital' -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- Elemento de lista de navegación -->
                                <a class="nav-link" href="https://www.facebook.com/PauloooMN?mibextid=LQQJ4d">
                                    <!-- Enlace a la página de Facebook -->
                                    <i class="fab fa-facebook"></i> facebook
                                    <!-- Icono de Facebook y texto 'facebook' -->
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- Elemento de lista de navegación -->
                                <a class="nav-link"
                                    href="https://www.instagram.com/paulitomn/profilecard/?igsh=c3Ixd3BrZGx5Y3Ay">
                                    <!-- Enlace a la página de Instagram -->
                                    <i class="fab fa-instagram"></i> Instagram
                                    <!-- Icono de Instagram y texto 'Instagram' -->
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
                        <!-- Texto '2024, made with' y un icono de corazón -->
                        <a href="./index.html">NM Hospital</a>
                        <!-- Enlace a la página principal con el texto 'NM Hospital' -->
                    </div>
                    <div>
                        <!-- Contenedor adicional para distribución -->
                        Distributed by
                        <!-- Texto 'Distributed by' -->
                        <a target="_blank" href="./index.html">NM Hospital</a>.
                        <!-- Enlace a la página principal con el texto 'NM Hospital' -->
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