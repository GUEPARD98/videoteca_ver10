<x-app-layout>
    @include('components/slider-home')

    <div class="bg-cover bg-center" style="background-image: url('{{ asset('/images/fondo.jpg') }}');">
        <div class="max-w-7xl mx-auto flex flex-col gap-6 my-8 p-4 bg-white rounded-lg shadow-lg">

            <!-- Contenedor principal que agrupa la descripción y las galerías -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Columna Principal: Descripción y características (ocupa dos tercios del ancho) -->
                <div class="md:col-span-2 bg-white text-black p-6 rounded-lg shadow-md">
                    <h2 class="welcome-title text-4xl font-bold mb-4 text-center text-red-600">Bienvenidos</h2>
                    <p class="welcome-description text-lg text-justify leading-relaxed mb-6 line-clamp-5">
                        El archivo Fotográfico y Fílmico del Chocó es una plataforma en línea dedicada a la
                        preservación, difusión y promoción del rico patrimonio cultural y educativo de la región del
                        Chocó, Colombia. Esta videoteca se ha creado con el propósito de proporcionar acceso a un
                        amplio repertorio de contenidos audiovisuales que abarcan temas culturales, históricos,
                        educativos y sociales relacionados con esta región.
                    </p>
                    <ul class="welcome-list list-disc list-inside text-lg my-4 text-left space-y-2">
                        <li><strong>Documentales:</strong> Obras que exploran la historia, las tradiciones y la vida
                            cotidiana del Chocó.</li>
                        <li><strong>Cultura y Tradiciones:</strong> Videos que destacan las festividades locales, la
                            música tradicional, la danza y las artesanías.</li>
                        <li><strong>Educación y Formación:</strong> Contenidos didácticos sobre temas educativos
                            relevantes.</li>
                    </ul>
                    <!-- Carrusel de Banners -->

                    <div id="customBannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <!-- Banner de Noticias -->
                            <div class="carousel-item active">
                                <a href="/comunicacion" class="custom-banner research"
                                    style="background-image: url('{{ asset('images/noticias.png') }}');">
                                    <div class="custom-banner-content">
                                        Noticias
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Exposiciones -->
                            <div class="carousel-item">
                                <a href="/material" class="custom-banner exhibitions"
                                    style="background-image: url('{{ asset('images/ex.jpg') }}');">
                                    <div class="custom-banner-content">
                                        Exposiciones
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Publicaciones -->
                            <div class="carousel-item">
                                <a href="/byne" class="custom-banner photos"
                                    style="background-image: url('{{ asset('images/publicacion1.jpg') }}');">
                                    <div class="custom-banner-content">
                                        Publicaciones
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Documentales -->
                            <div class="carousel-item">
                                <a href="/perfiles" class="custom-banner documentales"
                                    style="background-image: url('{{ asset('images/qui.png') }}');">
                                    <div class="custom-banner-content">
                                        Equipo De Trabajo
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Conferencias -->
                            <div class="carousel-item">
                                <a href="/contratacion" class="custom-banner conferencias"
                                    style="background-image: url('{{ asset('images/somos.jpg') }}');">
                                    <div class="custom-banner-content">
                                        ¿Quienes Somos?
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Talleres -->
                            <div class="carousel-item">
                                <a href="/mision" class="custom-banner talleres"
                                    style="background-image: url('{{ asset('images/mision.jpg') }}');">
                                    <div class="custom-banner-content">
                                        Mision
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Entrevistas -->
                            <div class="carousel-item">
                                <a href="/vision" class="custom-banner entrevistas"
                                    style="background-image: url('{{ asset('images/vision.jpg') }}');">
                                    <div class="custom-banner-content">
                                        Vision
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Festivales -->
                            <div class="carousel-item">
                                <a href="/objetivos" class="custom-banner festivales"
                                    style="background-image: url('{{ asset('images/Objetivos.jpg') }}');">
                                    <div class="custom-banner-content">
                                        Objetivos
                                    </div>
                                </a>
                            </div>

                            <!-- Banner de Eventos Especiales -->
                            <div class="carousel-item">
                                <a href="/documentos" class="custom-banner eventos"
                                    style="background-image: url('{{ asset('images/archi.jpg') }}');">
                                    <div class="custom-banner-content">
                                        Archivo Fílmico
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Controles del carrusel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#customBannerCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#customBannerCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <script></script>

                    <style>
                        /* Ajustamos el contenedor del carrusel */
                        .carousel {
                            width: 100%;
                            max-width: 600px;
                            margin: auto;
                        }

                        /* Hacemos el banner más pequeño */
                        .custom-banner {
                            display: block;
                            width: 100%;
                            height: 300px;
                            background-size: cover;
                            background-position: center;
                            position: relative;
                            display: flex;
                            justify-content: center;
                            align-items: flex-end;
                            text-align: center;
                            color: #fff;
                            font-size: 1rem;
                            border-radius: 10px;
                            overflow: hidden;
                            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                            transition: transform 0.4s ease;
                            text-decoration: none;
                        }

                        /* Efecto hover para el banner */
                        .custom-banner:hover {
                            transform: translateY(-5px);
                        }

                        /* Contenido dentro del banner */
                        .custom-banner-content {
                            background: rgba(0, 0, 0, 0.6);
                            width: 100%;
                            padding: 5px;
                        }
                    </style>



                    <style>
                        /* Estilos específicos para la sección "Bienvenidos" */
                        .welcome-section {
                            /* Aquí puedes añadir estilos específicos de la sección */
                        }

                        .welcome-title {
                            text-shadow: 1px 1px 2px rgba(255, 0, 0, 0.6);
                            /* Sombra de texto para el título */
                        }

                        .welcome-description {
                            background-color: rgba(255, 255, 255, 0.8);
                            /* Fondo semi-transparente para el párrafo */
                            border-radius: 8px;
                            /* Bordes redondeados */
                            padding: 16px;
                            /* Espaciado interno */
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                            /* Sombra suave */
                            transition: background-color 0.3s ease;
                            /* Transición suave al pasar el ratón */
                        }

                        .welcome-description:hover {
                            background-color: rgba(255, 255, 255, 1);
                            /* Cambio de fondo al pasar el ratón */
                        }

                        /* Espaciado entre los elementos de la lista */
                        .welcome-list>*+* {
                            margin-top: 0.5rem;
                            /* Espaciado entre elementos de la lista */
                        }
                    </style>

                    <div class="container mx-auto py-6">
                        <h1 class="text-3xl font-bold text-center text-black-400 mb-8">
                            <a href="/peliculas"> Destacados De La Videoteca Del Chocó</a>


                            <span class="star-animation">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </span>
                        </h1>

                        <style>
                            .star-animation {
                                display: inline-block;
                            }

                            .star-animation span {
                                display: inline-block;
                                opacity: 0.5;
                                color: #FFD700;
                                /* Color dorado para las estrellas */
                                animation: glow 1s infinite alternate;
                            }

                            .star-animation span:nth-child(1) {
                                animation-delay: 0s;
                                /* Primera estrella */
                            }

                            .star-animation span:nth-child(2) {
                                animation-delay: 0.2s;
                                /* Segunda estrella */
                            }

                            .star-animation span:nth-child(3) {
                                animation-delay: 0.4s;
                                /* Tercera estrella */
                            }

                            .star-animation span:nth-child(4) {
                                animation-delay: 0.6s;
                                /* Cuarta estrella */
                            }

                            .star-animation span:nth-child(5) {
                                animation-delay: 0.8s;
                                /* Quinta estrella */
                            }

                            @keyframes glow {
                                0% {
                                    text-shadow: 0 0 5px rgba(255, 215, 0, 1), 0 0 10px rgba(255, 215, 0, 0.8), 0 0 15px rgba(255, 215, 0, 0.6);
                                    opacity: 0.5;
                                    /* Opacidad al 50% */
                                }

                                100% {
                                    text-shadow: 0 0 10px rgba(255, 215, 0, 1), 0 0 20px rgba(255, 215, 0, 0.8), 0 0 30px rgba(255, 215, 0, 0.6);
                                    opacity: 1;
                                    /* Opacidad al 100% */
                                }
                            }
                        </style>

                        <!-- resources/views/welcome.blade.php -->
                        <form action="{{ route('pages.peliculas') }}" method="GET" class="search-form">
                            <div class="search-container">
                                <input type="text" name="search" class="search-input" placeholder="Buscar Videos..."
                                    required>
                                <button type="submit" class="search-button">Buscar</button>
                            </div>
                        </form>
                        <br>
                        <style>
                            /* Estilos del formulario de búsqueda */
                            .search-form {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                margin-top: 30px;
                            }

                            .search-container {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                border: 2px solid #ff0000;
                                /* Borde rojo */
                                border-radius: 50px;
                                /* Bordes redondeados */
                                padding: 10px;
                                background-color: #000;
                                /* Fondo negro */
                                width: 80%;
                                /* Ancho ajustable según la necesidad */
                                max-width: 600px;
                                /* Ancho máximo para que no se extienda demasiado */
                            }

                            /* Estilo para el input de búsqueda */
                            .search-input {
                                flex: 1;
                                padding: 10px 20px;
                                border: none;
                                border-radius: 50px;
                                font-size: 1rem;
                                background-color: #222;
                                /* Color de fondo oscuro */
                                color: #fff;
                                /* Texto blanco */
                                outline: none;
                                transition: background-color 0.3s ease;
                                width: 100%;
                                margin-right: 10px;
                            }

                            /* Efecto cuando el input está enfocado */
                            .search-input:focus {
                                background-color: #333;
                                /* Cambia ligeramente el color al enfocar */
                            }

                            /* Estilo para el botón de búsqueda */
                            .search-button {
                                padding: 10px 20px;
                                border: none;
                                border-radius: 50px;
                                background-color: #ff0000;
                                /* Color rojo */
                                color: #fff;
                                font-size: 1rem;
                                cursor: pointer;
                                transition: background-color 0.3s ease, transform 0.3s ease;
                            }

                            /* Efecto hover en el botón */
                            .search-button:hover {
                                background-color: #cc0000;
                                /* Rojo más oscuro en hover */
                                transform: scale(1.05);
                                /* Ligera animación al pasar el cursor */
                            }

                            /* Ajustes de estilo para pantallas más pequeñas */
                            @media (max-width: 768px) {
                                .search-container {
                                    width: 90%;
                                    /* Para dispositivos móviles */
                                }
                            }
                        </style>

                        <div id="videoCarousel" class="carousel slide mb-6" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Video 1 -->
                                <div class="carousel-item active">
                                    <div class="flex justify-center">
                                        <iframe src="https://www.youtube.com/embed/-zjNyhDL5i0?si=iyjQbWFX24H1Ps8i"
                                            class="w-full h-64 rounded-lg shadow-md border-4 border-red-600"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="flex justify-center mb-2">
                                        <span class="text-yellow-400">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                                        <!-- Estrellas -->
                                    </div>
                                </div>
                                <!-- Video 2 -->
                                <div class="carousel-item">
                                    <div class="flex justify-center">
                                        <iframe src="https://www.youtube.com/embed/cjMXMXU4Iwk?si=aFbxvAR31nf4gZfx"
                                            class="w-full h-64 rounded-lg shadow-md border-4 border-red-600"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="flex justify-center mb-2">
                                        <span class="text-yellow-400">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                                        <!-- Estrellas -->
                                    </div>
                                </div>
                                <!-- Video 3 -->
                                <div class="carousel-item">
                                    <div class="flex justify-center">
                                        <iframe src="https://www.youtube.com/embed/epmorDnKhZE?si=e2LygbdO52FPPQmz"
                                            class="w-full h-64 rounded-lg shadow-md border-4 border-red-600"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="flex justify-center mb-2">
                                        <span class="text-yellow-400">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                                        <!-- Estrellas -->
                                    </div>
                                </div>
                                <!-- Video 4 -->
                                <div class="carousel-item">
                                    <div class="flex justify-center">
                                        <iframe src="https://www.youtube.com/embed/rDQwfkQLaVM?si=vHAMPkgKOVonavm6"
                                            class="w-full h-64 rounded-lg shadow-md border-4 border-red-600"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="flex justify-center mb-2">
                                        <span class="text-yellow-400">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                                        <!-- Estrellas -->
                                    </div>
                                </div>
                                <!-- Video 5 -->
                                <div class="carousel-item">
                                    <div class="flex justify-center">
                                        <iframe src="https://www.youtube.com/embed/GZ4BwSGhR_Y?si=lcnKjEIrfe6rWdMG"
                                            class="w-full h-64 rounded-lg shadow-md border-4 border-red-600"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="flex justify-center mb-2">
                                        <span class="text-yellow-400">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                        <!-- Estrellas -->
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <style>
                        /* Estilo para el borde luminoso */
                        .carousel-item {
                            border: 4px solid red;
                            /* Borde rojo */
                            padding: 10px;
                            /* Espacio interno */
                            border-radius: 10px;
                            /* Bordes redondeados */
                            box-shadow: 0 0 15px rgba(255, 0, 0, 0.7);
                            /* Sombra luminosa */
                            transition: transform 0.3s;
                        }

                        .carousel-item:hover {
                            transform: scale(1.05);
                            /* Aumenta el tamaño al pasar el ratón */
                        }
                    </style>


                    <!-- Contenido oculto al inicio -->
                    <!-- Estilos en la misma hoja -->
                    <!-- Estilos en la misma hoja -->
                    <style>
                        /* Estilos generales para la sección */
                        h2 {
                            text-align: center;
                            font-size: 1.5rem;
                            margin-bottom: 20px;
                        }

                        .creadores-container,
                        .aliados-container {
                            display: flex;
                            justify-content: center;
                            flex-wrap: wrap;
                            gap: 20px;
                            /* Espacio entre los elementos */
                            margin-bottom: 30px;
                        }

                        .creador,
                        .aliado {
                            text-align: center;
                        }

                        .creador img,
                        .aliado img {
                            max-width: 180px;
                            height: auto;
                            transition: transform 0.3s ease;
                        }

                        /* Efecto hover para que las imágenes se agranden al pasar el ratón */
                        .creador img:hover,
                        .aliado img:hover {
                            transform: scale(1.1);
                        }

                        /* Ajuste para pantallas más pequeñas */
                        @media (max-width: 768px) {

                            .creadores-container,
                            .aliados-container {
                                flex-direction: column;
                                /* Cambia la dirección de los elementos a columna */
                                align-items: center;
                                /* Centra los elementos */
                            }

                            .creador img,
                            .aliado img {
                                max-width: 120px;
                                /* Reduce el tamaño de las imágenes en pantallas pequeñas */
                            }

                            h2 {
                                font-size: 1.2rem;
                            }
                        }

                        @media (max-width: 480px) {

                            .creador img,
                            .aliado img {
                                max-width: 100px;
                                /* Ajusta el tamaño en pantallas más pequeñas */
                            }

                            h2 {
                                font-size: 1rem;
                            }
                        }
                    </style>
                    <div id="contenido-completo" class="hidden mt-4">
                        <p><strong>Promoviendo la Conservación del Patrimonio Fílmico del Chocó</strong></p>
                        <p>En El <strong>Archivo Fotográfico y Fílmico del Chocó</strong>, nuestra principal intención
                            es la de preservar y difundir el patrimonio fílmico de nuestra región, un archivo visual que
                            captura la riqueza cultural, histórica y social del Chocó.</p>
                        <p>Es importante destacar que no poseemos los derechos de autor de todos los videos que
                            compartimos en nuestra plataforma.</p>

                        <!-- Sección de Creadores -->
                        <h2 class="font-semibold text-xl tracking-wide mb-4 text-black-400">Creadores</h2>
                        <div class="creadores-container">
                            <div class="creador">
                                <a href="https://utch.edu.co/nueva/" target="_blank">
                                    <img src="{{ asset('/images/log_utch.png') }}" alt="Creador 1">
                                </a>
                            </div>
                            <div class="creador">
                                <a href="https://elmanduco.com.co/" target="_blank">
                                    <img src="{{ asset('/images/log_manduco.png') }}" alt="Creador 2">
                                </a>
                            </div>
                            <div class="creador">
                                <a href="https://fundacionbeteguma.org.co/presentacion/" target="_blank">
                                    <img src="{{ asset('/images/log_beteguma.png') }}" alt="Creador 3">
                                </a>
                            </div>
                        </div>

                        <!-- Sección de Aliados -->
                        <h2 class="font-semibold text-xl tracking-wide mb-4 text-black-400">Aliados</h2>
                        <div class="aliados-container">
                            <a href="https://www.archivogeneral.gov.co/consulte" target="_blank" class="aliado">
                                <img src="{{ asset('/images/log_agn.png') }}" alt="Aliado 1">
                            </a>
                            <a href="/" target="_blank" class="aliado">
                                <img src="{{ asset('/images/log_sipac.jpg') }}" alt="Aliado 2">
                            </a>
                            <a href="https://www.mincultura.gov.co/" target="_blank" class="aliado">
                                <img src="{{ asset('/images/log_mincultura.png') }}" alt="Aliado 3">
                            </a>
                            <a href="https://patrimoniofilmico.org.co/" target="_blank" class="aliado">
                                <img src="{{ asset('/images/log_fpfc.png') }}" alt="Aliado 4">
                            </a>
                        </div>
                    </div>


                    <!-- Botón para alternar el contenido adicional -->
                    <div class="flex justify-center items-center mt-4">
                        <button id="toggle-contenido" class="text-red-500 font-bold">Leer más</button>
                    </div>

                    <!-- Redes sociales -->
                    <div class="flex justify-center items-center mt-6 space-x-4">
                        <div onclick="openSocialMedia('https://www.youtube.com/@archivofilmicodelchoco8759/videos')"
                            class="cursor-pointer">
                            <img src="{{ asset('/images/youtubeicon.png') }}" alt="YouTube"
                                class="w-12 hover:scale-110 transition-transform" />
                        </div>
                        <div onclick="openSocialMedia('https://www.facebook.com/MemoriaChoco?mibextid=kFxxJD')"
                            class="cursor-pointer">
                            <img src="{{ asset('/images/facebook.png') }}" alt="Facebook"
                                class="w-12 hover:scale-110 transition-transform" />
                        </div>
                        <div onclick="openSocialMedia('https://www.instagram.com/archivochoco?igsh=bTQ0MXI1Mmw5cjhh')"
                            class="cursor-pointer">
                            <img src="{{ asset('/images/instagram.png') }}" alt="Instagram"
                                class="w-12 hover:scale-110 transition-transform" />
                        </div>
                        <div onclick="openSocialMedia('https://x.com/MemoriaChoco?t=g8L1Qrc0pyoLcRZGRyb--A&s=09')"
                            class="cursor-pointer">
                            <img src="{{ asset('/images/twitter.png') }}" alt="Twitter"
                                class="w-12 hover:scale-110 transition-transform" />
                        </div>
                        <div onclick="openSocialMedia('https://memoriavisualdelchoco.blogspot.com/')"
                            class="cursor-pointer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Blogger.svg" alt="Blogger"
                                class="w-12 hover:scale-110 transition-transform" />
                        </div>
                    </div>
                </div>

                <div class="bg-black text-white p-6 rounded-lg shadow-md">
                    <!-- Título dinámico -->
                    <div class="text-center mt-8">
                        <h1 class="text-lg text-red-600 font-semibold mt-2"><b>Galerías Y Archivos Fotográficos Del
                                Chocó</b></h1>
                    </div>
                    <div class="space-y-2">
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/199708344@N07/" target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/radio.png') }}" alt="Recurso 1">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">Emisora radio
                                    universidad del chocó 97.3 FM</p>
                            </a>
                        </div>
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/198881723@N02/" target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/pintado.jpg') }}" alt="Recurso 2">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">Ahi esta pintado el
                                    chocó</p>
                            </a>
                        </div>
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/artechocoano/" target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/arte.png') }}" alt="Recurso 3">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">El arte en la memoria
                                    visula del chocó</p>
                            </a>
                        </div>
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/centroafro/albums/" target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/atrato.jpg') }}" alt="Recurso 4">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">Archivo fotografico y
                                    fílmico del chocó</p>
                            </a>
                        </div>
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/197769500@N02/albums/" target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/avion.jpg') }}" alt="Recurso 5">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">Archivo historico del
                                    patrimonio cultural del chocó</p>
                            </a>
                        </div>
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/195645830@N05/albums/with/72177720312991978"
                                target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/promocion.jpg') }}" alt="Recurso 6">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">Universidad tecnologica
                                    del chocó</p>
                            </a>
                        </div>
                        <div
                            class="bg-transparent p-2 rounded-lg shadow-none transform transition-transform hover:scale-105">
                            <a href="https://www.flickr.com/photos/194635754@N08/albums/" target="_blank">
                                <img class="w-full h-28 object-cover rounded-none shadow-none"
                                    src="{{ asset('/images/gonza.jpg') }}" alt="Recurso 7">
                                <p class="text-lg text-red-600 font-semibold mt-2 text-center">Las fotos de
                                    Gonzo-Chocó-Colombia</p>
                            </a>
                        </div>
                    </div>
                </div>

                <style>
                    /* Estilos adicionales para mejorar la apariencia */
                    h2 {
                        text-shadow: 1px 1px 2px rgba(255, 0, 0, 0.6);
                        /* Sombra de texto para un efecto más atractivo */
                    }

                    p {
                        background-color: rgba(255, 255, 255, 0.8);
                        /* Fondo semi-transparente para el párrafo */
                        border-radius: 8px;
                        /* Bordes redondeados */
                        padding: 16px;
                        /* Espaciado interno */
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                        /* Sombra suave */
                        transition: background-color 0.3s ease;
                        /* Transición suave al pasar el ratón */
                    }

                    p:hover {
                        background-color: rgba(255, 255, 255, 1);
                        /* Cambio de fondo al pasar el ratón */
                    }

                    /* Espaciado entre los elementos de la lista */
                    .space-y-2>*+* {
                        margin-top: 0.5rem;
                        /* Espaciado entre elementos de la lista */
                    }
                </style>
                <!-- Agrega los demás recursos de la misma manera -->
            </div>
        </div>
    </div>
    </div>

    <!-- Script para abrir las redes sociales en una ventana emergente -->
    <script>
        function openSocialMedia(url) {
            window.open(url, '_blank', 'width=800,height=600,scrollbars=yes,resizable=yes');
            return false;
        }

        document.getElementById('toggle-contenido').addEventListener('click', function() {
            const contenido = document.getElementById('contenido-completo');
            contenido.classList.toggle('hidden');
            this.textContent = contenido.classList.contains('hidden') ? 'Leer más' : 'Leer menos';
        });
    </script>


</x-app-layout>
