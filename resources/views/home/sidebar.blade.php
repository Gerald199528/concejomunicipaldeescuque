<!-- Estilo de imagen de perfil de usuario en el sidebar -->
<link rel="stylesheet" href="{!! asset('menu/sidebar/style_img.css') !!}">
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <livewire:imagen />
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt- pb-4mb-2 d-flex"></div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
               
               
                <li class="nav-item">
                    <a href="{{ route('miuser.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Mi Perfil</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book-open-reader"></i>
                        <p>Instrumentos Legales <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('ordenanzas.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Ordenanzas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gasetas.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Gacetas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('resoluciones.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Resoluciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('acuerdos.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Acuerdos</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book-journal-whills"></i>
                        <p>Actas de sesión <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('ordinarias.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Ordinaria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('extraordinarias.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Extraordinarias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('solemnes.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Solemne</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('especiales.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Especiales</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-address-book"></i>
                        <p>Expedientes <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('expedientes.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Expedientes de Usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i>
                                <p>Ceses</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bullhorn"></i>
                            <p>Eventos <i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('news.create') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i> Subir Noticia
                                </a>
                            </li>
                        </ul>
                        
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('videos.create') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i> Subir video
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('news.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i> Noticias en Foro
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('videos.index') }}" class="nav-link">
                                <i class="fa-regular fa-circle"></i> Videos en Foro
                                </a>
                            </li>
                        </ul>
                    </li>                   
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-gear"></i>
                        <p>Configuración <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('listausuario.index') }}" class="nav-link">
                                <i class="fa-solid fa-users"></i>
                                <p>Panel de Usuarios</p>
                            </a>
                        </li>
                    </ul>
                </li>




                
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>Cerrar Sesión</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>