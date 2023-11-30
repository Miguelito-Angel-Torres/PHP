<header class="px-2 bcolor-principal">
    <nav class="bcolor-principal navbar  mb-3 ">
        <button class="navbar-toggler p-2 border-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="p-2">
            <span class="dg-light text-light fs-4">MALLQUI TORRES, MIGUEL ANGEL</span> 
        </div>
        <div class="dropdown  ms-auto p-2">
            <button class="btn btn-secondary dropdown-toggle button-infogeneral fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                INFO GENERAL
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <div class="d-flex py-lg-2 ps-lg-1">
                    <img src="" class="w-25 h-25 border border-secondary border-3 rounded-circle" alt="">
                    <div class="ps-lg-2">
                        <h5 class="m-0 fw-bold">Roles</h5>
                        <p class="m-0 fw-bold">Docente</p>
                    </div>
                </div>
                <li><a class="dropdown-item active" href="#">Mi informacion</a></li>
                <li><a class="dropdown-item" href="#">Reiniciar Clave</a></li>
                <li><hr class="dropdown-divider "></li>
                <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
            </ul>
        </div>
        <div class="offcanvas offcanvas-end barra-navegacion" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header d-flex ">
                <a href="{{route('home.index')}}" class= "d-flex ">
                    <img src="" class=" image-uni border border-secondary
                        border-3 rounded-circle" alt="">
                    <div class="contenedor-titulo-barra px-2">
                        <h4 class="offcanvas-title color-tercer" id="offcanvasNavbarLabel">UNI EARPFIM</h4>
                        <b >Docente</b>
                    </div>
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> General
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('alumnos.index')}}"><i class="fa-solid fa-user"></i> Registro Alumno</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Aula Virtual FIM</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Mis Horario de Clases</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Informacion Docente</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Mis Cursos Asignados</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Tutoria Alumnos</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Cargar Notas ORCE</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Biblioteca Virtual</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Mi Disponibilidad</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Reclamo del reclamo docente</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Correcion de notas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('home.index')}}"><i class="fa-solid fa-user"></i> Asistencia</a></li>
                    </ul>
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-envelope"></i> Administrador
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>  
                    </ul>
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bolt"></i> Acreditacion FIM
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>  
                    </ul>
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-umbrella"></i> Virtual
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>  
                    </ul>
                    <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-inbox"></i>Documentos académicos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>#</a></li>  
                    </ul>  
                </ul>
            </div>
        </div>
    </nav>
</header>