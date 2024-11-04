<x-app-layout>
    <div class="w-full relative">
        <!-- Encabezado con imagen -->
        <div class="relative h-72 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/portada.jpg') }}" alt="Encabezado de la página"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="z-10 text-center text-white">
                <h1 class="font-extrabold text-4xl text-red-700">Archivo Fotografico Y Filmico Del Chocó</h1>
                <h2 class="text-xl mt-2">Investigaciones</h2>
                <nav class="flex justify-center my-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-red-700"></i>
                            <a href="/" class="hover:text-red-500">Inicio</a> /
                        </li>

                        <li class="inline-flex items-center">
                            <a href="byn" class="hover:text-red-500">Publicaciones</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="container mx-auto px-4 py-8 bg-white text-black flex flex-col md:flex-row">
            <!-- Contenido principal -->
            <div class="md:w-2/3">
                <!-- Sección 1: FOTOGRAFÍA EN EL CHOCO -->
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Documento <a
                            href="https://es.slideshare.net/slideshow/historia-de-la-fotografa-en-el-choc/45038718"
                            target="_blank" onmouseover="this.style.color='red'"
                            onmouseout="this.style.color='black'">“FOTOGRAFIA EN EL CHOCO”</a></h2>
                    <p class="text-justify text-base md:text-lg mb-4">
                        Este documento condensa la investigación sobre la aparición de la actividad fotográfica en el
                        Chocó, destacando el trabajo y biografía de los más importantes fotógrafos chocoanos y foráneos.
                    </p>
                    <h3 class="text-lg md:text-xl font-semibold text-red-500">MULTIMEDIA: Álbum Fotográfico del Chocó
                    </h3>
                    <p class="text-justify text-base md:text-lg">
                        Se recopilaron y ficharon cerca de 3.500 fotografías antiguas en blanco y negro, archivadas en
                        un CD ROM. Además, se está trabajando en la realización de una exposición fotográfica y la
                        producción de un CD multimedia interactivo.
                    </p>
                </div>

                <!-- Sección 2: EL CINE EN EL CHOCO -->
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Documento <a
                            href="https://es.slideshare.net/slideshow/historia-del-cine-en-el-choc/45041910"
                            target="_blank" onmouseover="this.style.color='red'"
                            onmouseout="this.style.color='black'">“EL CINE EN EL CHOCO”</a></h2>
                    <p class="text-justify text-base md:text-lg">
                        Historias de película sobre esta actividad cultural en el Chocó, sus inicios, los teatros y la
                        producción cinematográfica realizada a partir de 1929. Incluye registros de imágenes en blanco y
                        negro realizadas por pioneros del cine en Colombia.
                    </p>
                </div>

                <!-- Sección 3: VIDEOTECA DEL PACÍFICO -->
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2"><a
                            href="https://es.slideshare.net/slideshow/videoteca-del-pacifico/51177657" target="_blank"
                            onmouseover="this.style.color='red'" onmouseout="this.style.color='black'">Videoteca del
                            Pacífico</a></h2>
                    <p class="text-justify text-base md:text-lg">
                        La Videoteca constituye un importante acervo informativo compuesto por videos documentales que
                        registran cómo los medios e investigadores nacionales han interpretado la realidad de la región
                        desde perspectivas históricas, étnicas y ambientales.
                    </p>
                </div>

                <!-- Sección 4: AHÍ ESTÁ PINTADO EL CHOCÓ -->
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Investigación Curatorial: <a
                            href="https://es.slideshare.net/slideshow/ah-est-pintado-el-choc/51176951" target="_blank"
                            onmouseover="this.style.color='red'" onmouseout="this.style.color='black'">"Ahí está
                            pintado el Chocó"</a></h2>
                    <p class="text-justify text-base md:text-lg">
                        Este documento analiza el desarrollo histórico de la actividad artística en el Chocó,
                        recopilando obras de pintores desde la época colonial hasta la actualidad, incluyendo dibujos,
                        pinturas e ilustraciones inspiradas en la región.
                    </p>
                </div>

                <!-- Sección 5: PROYECTO "DESANDANDO" -->
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Proyecto <a
                            href="https://es.slideshare.net/slideshow/archivo-fotogrfico-y-flmico-del-chocproyecto-desandando/86698866"
                            target="_blank" onmouseover="this.style.color='red'"
                            onmouseout="this.style.color='black'">"Desandando" Tras los Archivos
                            Fílmicos del Chocó</a></h2>
                    <p class="text-justify text-base md:text-lg">
                        Investigación enfocada en la búsqueda y recuperación de archivos fílmicos del Chocó, con el
                        objetivo de preservar la memoria visual de esta región.
                    </p>
                </div>
            </div>

            <!-- Columna futurista derecha con imágenes -->
            <div
                class="md:w-1/3 md:pl-8 flex flex-col items-center text-white rounded-lg shadow-lg p-6 futuristic-border">
                <!-- Imagen 1 -->
                <div class="mb-6 w-full">
                    <img src="{{ asset('/images/publicacion1.png') }}" alt="Imagen principal del Chocó"
                        class="w-full h-auto rounded-lg border-4 border-red-500 shadow-xl hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Espacio para imágenes adicionales -->
                <div class="mb-6 w-full">
                    <img src="{{ asset('/images/publicacion2.png') }}" alt="Imagen secundaria del Chocó"
                        class="w-full h-auto rounded-lg border-4 border-red-500 shadow-xl hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Detalle visual adicional para el estilo futurista -->
                <div class="w-full h-2 bg-red-500 animate-pulse rounded-lg"></div>
            </div>
        </div>


</x-app-layout>
