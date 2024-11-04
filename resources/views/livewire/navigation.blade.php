<header class="border-b-[1px] border-gray-800">
    <div class="bg-gradient-to-r from-black to-red-800 text-white">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-2 px-4">
            <div class="flex gap-2 items-center">
                <span class="text-sm" id="current-datetime"></span>
            </div>
            @auth
                <div class="flex items-center relative" x-data="{ open: false }">
                    <button type="button" x-on:click="open=true" id="user-menu-button"
                        class="flex text-sm rounded-full focus:ring-4 focus:ring-red-500 transition-transform transform hover:scale-105">
                        <img class="w-8 h-8 rounded-full border-2 border-red-500"
                            src="{{ auth()->user()->profile_photo_url }}" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div x-show="open" x-on:click.away="open=false" id="user-menu"
                        class="absolute right-0 mt-2 w-48 bg-black text-white rounded-lg shadow-lg transition-transform transform scale-95 origin-top-right duration-300">
                        <div class="px-4 py-3 border-b border-gray-700">
                            <span class="block text-sm font-semibold">{{ auth()->user()->name }}</span>
                            <span class="block text-xs text-gray-400">{{ auth()->user()->email }}</span>
                        </div>
                        <ul class="py-1">
                            @can('admin.index')
                                <li>
                                    <a href="{{ route('admin.index') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">Dashboard</a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{ route('profile.show') }}"
                                    class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">Configuración</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white transition-colors">
                                        Cerrar sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="flex gap-2 items-center text-sm">
                    <a href="{{ route('login') }}" class="hover:text-red-500 transition-colors">Inicia sesión</a>
                    <span class="hidden md:block"></span>

                </div>
            @endauth
        </div>
    </div>

    <nav class="bg-gradient-to-r from-black via-red-800 to-black border-gray-800 px-2 py-2 rounded-b-lg shadow-md">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto">
            <div class="flex items-center gap-2">
                <a href="/" class="flex items-center transition-transform transform hover:scale-105">
                    <img src="{{ asset('images/logo.png') }}" class="w-[60px] hover:opacity-80" alt="Logo">
                    <div class="text-white ml-2">
                        <strong class="text-xl">Archivo Fotografico </strong><br>
                        <strong class="text-xl">Y Filmico Del Chocó</strong>
                    </div>
                </a>
            </div>

            <!-- Contenedor del VMS -->
            <div class="vms-container">
                <div class="vms-message">
                    <p>¡Explora nuestro Archivo Fotografico Y Fílmico Del Chocó! - Descubre nuestro
                        patrimonio
                        cultural.</p>
                </div>
            </div>

            <!-- Estilos CSS del VMS -->
            <style>
                /* Contenedor del VMS */
                .vms-container {
                    overflow: hidden;
                    white-space: nowrap;
                    position: relative;
                }

                /* Estilo del mensaje VMS */
                .vms-message {
                    display: inline-block;
                    padding-left: 100%;
                    /* El mensaje empezará fuera del contenedor */
                    animation: scrollMessage 15s linear infinite;
                    /* La animación para desplazar el texto */
                }

                .vms-message p {
                    display: inline;
                    color: rgb(2, 20, 32);
                    /* Color verde tipo LED */
                    font-weight: bold;
                    font-size: 1rem;
                    /* Ajusta el tamaño según el menú */
                }

                /* Animación para desplazar el mensaje de derecha a izquierda */
                @keyframes scrollMessage {
                    from {
                        transform: translateX(100%);
                    }

                    to {
                        transform: translateX(-100%);
                    }
                }

                /* Responsividad */
                @media (max-width: 768px) {
                    .vms-message p {
                        font-size: 0.85rem;
                        /* Ajusta el tamaño del texto en pantallas pequeñas */
                    }
                }
            </style>

            <button data-collapse-toggle="main-menu" type="button"
                class="inline-flex items-center p-2 text-gray-500 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none transition-colors">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>




            <div id="main-menu" class="items-center justify-between hidden w-full md:flex md:w-auto">
                <ul class="flex flex-col md:flex-row md:space-x-8">


                    <li>
                        <a href="/"
                            class="block py-2 px-4 text-gray-300 hover:bg-red-600 hover:text-white rounded-md {{ request()->routeIs('pages.index') ? 'font-bold' : '' }} transition-colors"><b>Inicio</b></a>
                    </li>
                    <li>
                        <a href="{{ route('pages.comunicacion') }}"
                            class="block py-2 px-4 text-gray-300 hover:bg-red-600 hover:text-white rounded-md {{ request()->routeIs('pages.comunicacion') ? 'font-bold' : '' }} transition-colors"><b>Noticias</b></a>
                    </li>

                    <li>
                        <a href="{{ route('pages.peliculas') }}"
                            class="block py-2 px-4 text-gray-300 hover:bg-red-600 hover:text-white rounded-md {{ request()->routeIs('pages.peliculas') ? 'font-bold' : '' }} transition-colors"><b>Videoteca</b></a>
                    </li>

                    <li class="relative">
                        <div id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown"
                            class="py-2 pl-3 pr-4 flex cursor-pointer items-center text-gray-300 hover:text-white rounded-md hover:bg-red-600 md:p-0 transition-colors">
                            <b>Institucional</b>
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div id="mega-menu-icons-dropdown"
                            class="z-40 font-normal hidden bg-black divide-y divide-gray-700 rounded-lg shadow-lg w-44 transition-transform transform scale-95 origin-top-right duration-300">
                            <ul class="py-1 text-sm text-gray-300" aria-labelledby="mega-menu-icons-dropdown-button">
                                <li>
                                    <a href="{{ route('pages.mision') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Misión</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.vision') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Visión</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.objetivos') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Objetivos</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.documents') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Archivo
                                            Filmico</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.byn') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Publicaciones</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.publicaciones') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Investigaciones</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.material') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Archivos</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.contratacion') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>¿Quienes
                                            Somos?</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.tenemos') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Tenemos</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.perfiles') }}"
                                        class="block px-4 py-2 text-gray-300 hover:bg-red-600 hover:text-white rounded-md transition-colors"><b>Equipo
                                            De Trabajo</b></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ route('pages.educacion') }}"
                            class="block py-2 px-4 text-gray-300 hover:bg-red-600 hover:text-white rounded-md {{ request()->routeIs('pages.educacion') ? 'font-bold' : '' }} transition-colors"><b>Servicios</b></a>
                    </li>

                    <li>
                        <a href="{{ route('pages.contactanos') }}"
                            class="block py-2 px-4 text-gray-300 hover:bg-red-600 hover:text-white rounded-md {{ request()->routeIs('pages.contactanos') ? 'font-bold' : '' }} transition-colors"><b>Contáctanos</b></a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


</header>
