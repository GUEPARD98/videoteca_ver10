<x-app-layout>
    <div class="w-full relative">
        <!-- Encabezado con imagen -->
        <div class="relative h-72 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/portada.jpg') }}" alt="Encabezado de la página"
                class="absolute inset-0 w-full h-full object-cover brightness-75 animate-fadeIn">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="z-10 text-center text-white">
                <h1 class="font-extrabold text-5xl text-red-700 drop-shadow-md animate-slideDown">Archivo Fotográfico y
                    Fílmico del Chocó</h1>
                <h2 class="text-2xl mt-2 animate-slideDownDelay">Archivo Fílmico</h2>
                <nav class="flex justify-center my-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-red-700"></i>
                            <a href="/" class="hover:text-red-500 transition-colors duration-200">Inicio</a> /
                        </li>
                        <li class="inline-flex items-center">
                            <a href="/documents" class="hover:text-red-500 transition-colors duration-200">Archivo
                                Fílmico</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="container py-10 mx-auto px-4 lg:px-8">
            <div
                class="text-lg text-justify text-gray-200 bg-black p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fadeInUp">
                <h3 class="text-3xl font-semibold text-red-500 mb-6">El Archivo Fílmico del Chocó</h3>
                <p>
                    Desde el Archivo Fotográfico y Fílmico Afrocolombiano Chocó que venimos impulsando en la UTCH, se
                    han dado pasos importantes en el proceso de recuperación de la Memoria Visual del Chocó.
                </p>
                <p class="mt-4">
                    Luego de una búsqueda y gestiones durante más de 10 años, se logra adquirir y tener en la región
                    gran parte del acervo fílmico del Chocó y su colección patrimonial que la constituye material en
                    cine y video, debidamente catalogado por el Archivo Fotográfico y Fílmico del Chocó. Esto incluye
                    producciones cinematográficas como la película <em>Chocó</em> realizada en 1929 por los hermanos
                    Acevedo, <em>Gold Platinun</em> de la antropóloga Katlen Romoli, restaurada con recursos del Fondo
                    para el Desarrollo Cinematográfico, y <em>Amanecer en la Selva</em>, sobre la evangelización
                    Claretiana en el Baudó. También <em>La Isla de los Deseos</em>, inspirada en la vida y obra del
                    misionero aviador Alcides Fernández, y <em>Tierra Amarga</em>, primer largometraje filmado en Quibdó
                    en 1963 por el cubano Roberto Ochoa con guion del maestro Manuel Zapata Olivella.
                </p>
                <p class="mt-4">
                    A este acervo se suman algunos archivos familiares del destacado médico cartagenero Lascario Barbosa
                    Avendaño y del exgobernador Ricardo Eleazar Valencia. Estos constituyen varias horas de interesantes
                    aspectos de la vida de la intendencia, que permiten reconocer pueblos, industrias como Sautatá, la
                    actividad minera en Andagoya, el empuje y modernismo de pueblos como Quibdó, eventos civiles,
                    militares, culturales, que sirven para recuperar la memoria en medio de la amnesia colectiva.
                </p>
                <p class="mt-4">
                    El Archivo Fotográfico y Fílmico del Chocó ha dado pasos importantes en el proceso de recuperación
                    de la Memoria Visual del Chocó, comenzando a encontrar, adquirir y repatriar imágenes.
                </p>
                <h3 class="text-3xl font-semibold text-red-500 mb-6 mt-8">Colección Patrimonial</h3>
                <p>
                    Esta colección incluye archivos como el Archivo Acevedo 1929, Archivo Ricardo Eleazar Valencia,
                    Archivo Lascario Barboza, Archivo Katlen Romoli, y diversas películas como <em>La Isla de los
                        Deseos</em>, <em>Amanecer en la Selva</em>, <em>Tierra Amarga</em>, y el documental <em>El Chocó
                        en Blanco y Negro</em>.
                </p>
                <p class="mt-4">
                    Con una muestra de cada una de estas imágenes y como resultado del trabajo de investigación, se
                    realizó la producción del Documental <em>El Chocó en Blanco y Negro</em>, elaborado a partir de
                    imágenes de archivos y fotografías. Este documental recrea aspectos vitales en la historia del
                    desarrollo del departamento a principios del siglo pasado, época de auge económico y liderazgo de la
                    clase política en el departamento por la presencia de compañías extranjeras dedicadas a la
                    explotación de diversos recursos naturales, en especial el oro.
                </p>
                <p class="mt-4">
                    Estas imágenes nos permiten entender y comprender fenómenos que han contribuido a la conformación
                    del territorio chocoano, con una geografía marcada por ríos que se constituyeron en vías de
                    comunicación y comercio, y que hoy forman parte del patrimonio cultural inmaterial del Chocó.
                </p>

                <!-- Links con efecto de hover -->
                <div class="mt-6 space-y-4">
                    <a href="https://es.slideshare.net/slideshow/memoria-audiovisual-canal-utch-tv-ao-2012/239443583"
                        target="_blank" class="text-red-500 hover:text-red-700 transition-colors duration-200">
                        Memoria Audiovisual - Canal UTCH TV
                    </a>
                    <a href="https://elmanduco.com.co/en-1929-los-hermanos-acevedos-realizaron-la-primera-pelicula-sobre-el-choco/"
                        target="_blank" class="text-red-500 hover:text-red-700 transition-colors duration-200">
                        En 1929 los hermanos Acevedo realizaron la primera película sobre el Chocó
                    </a>
                    <a href="https://elmanduco.com.co/el-teatro-popular-y-la-historia-del-cine-en-condoto-por-enrique-c-hauad/"
                        target="_blank" class="text-red-500 hover:text-red-700 transition-colors duration-200">
                        El Teatro Popular y la historia del Cine en Condoto - Enrique C. Hauad
                    </a>
                    <a href="https://elmanduco.com.co/llega-a-la-utch-la-exposicion-quibdo-y-su-catedral/"
                        target="_blank" class="text-red-500 hover:text-red-700 transition-colors duration-200">
                        Llega a la UTCH la exposición Quibdó y su Catedral
                    </a>
                    <a href="https://elmanduco.com.co/desandando-tras-las-noticias-del-choco-el-documental-que-recrea-la-historia-del-choco-en-los-70/"
                        target="_blank" class="text-red-500 hover:text-red-700 transition-colors duration-200">
                        Desandando tras las noticias del Chocó
                    </a>
                </div>
            </div>
        </div>

        <!-- Contenedor de Video -->
        <div class="container py-10 mx-auto px-4 lg:px-8">
            <div
                class="bg-black p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 animate-fadeInUp">
                <h3 class="text-3xl font-semibold text-red-500 mb-6">Exposición Fotográfica Itinerante de Quibdó y su
                    Catedral Franciscana</h3>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/PWjd9WowFNs"
                        class="w-full h-full rounded-lg shadow-md border-4 border-red-600" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos personalizados -->
    <style>
        .animate-fadeIn {
            animation: fadeIn 1s ease-in-out forwards;
        }

        .animate-slideDown {
            animation: slideDown 1s ease-in-out forwards;
        }

        .animate-slideDownDelay {
            animation: slideDown 1s ease-in-out 0.5s forwards;
        }

        .animate-fadeInUp {
            animation: fadeInUp 1.2s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</x-app-layout>
