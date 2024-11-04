<x-app-layout>
    <div class="w-full relative bg-white">
        <!-- Encabezado con imagen -->
        <div class="relative h-72 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/portada.jpg') }}" alt="Encabezado de la página"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="z-10 text-center text-white">
                <h1 class="font-extrabold text-4xl text-red-700">Archivo Fotográfico y Fílmico Del Chocó</h1>
                <h2 class="text-xl mt-2">Investigaciones</h2>
                <nav class="flex justify-center my-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-red-700"></i>
                            <a href="/" class="hover:text-red-500">Inicio</a> /
                        </li>
                        <li class="inline-flex items-center">
                            <a href="/publicaciones" class="hover:text-red-500">Investigaciones</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Contenido Principal -->
        <div class="container py-8 mx-auto px-4 lg:px-8">
            <div class="text-lg text-justify text-gray-800 bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-red-500 mb-4">Investigaciones</h3>
                <p>El Archivo Fotográfico y Fílmico del Chocó ha llevado a cabo diversas investigaciones relacionadas
                    con la preservación y difusión del patrimonio cultural y visual de la región. Algunas de las áreas
                    de enfoque incluyen:</p>

                <ul class="list-disc list-inside mt-4">
                    <li><strong>Documentación del Patrimonio Cultural:</strong> Recopilación de fotografías y material
                        fílmico que documentan las tradiciones, costumbres y eventos significativos de las comunidades
                        del Chocó.</li>
                    <li><strong>Investigación Histórica:</strong> Estudio de la historia local a través de imágenes y
                        películas, proporcionando contexto y narrativas sobre el desarrollo social, económico y cultural
                        de la región.</li>
                    <li><strong>Conservación y Restauración:</strong> Proyectos dedicados a la conservación de archivos
                        visuales, asegurando que el material fotográfico y fílmico se mantenga en buen estado para
                        futuras generaciones.</li>
                    <li><strong>Educación y Sensibilización:</strong> Programas que utilizan el material del archivo
                        para educar a la comunidad sobre su historia y cultura, fomentando un sentido de identidad y
                        pertenencia.</li>
                    <li><strong>Exhibiciones y Proyectos Artísticos:</strong> Organización de exposiciones que muestran
                        el trabajo realizado, así como la colaboración con artistas para reinterpretar el patrimonio
                        visual del Chocó.</li>
                </ul>

                <p class="mt-4">Estas investigaciones no solo ayudan a preservar la memoria colectiva de la región,
                    sino que también contribuyen a la apreciación y valoración del Chocó como un lugar rico en historia
                    y cultura.</p>

                <h3 class="text-2xl font-semibold text-red-500 mt-8">Proyectos Ejecutados</h3>
                <!-- Tarjetas de Proyectos Ejecutados -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h4 class="font-semibold text-lg">Beca Gestión de Archivos y Centros de Documentación
                            Audiovisual</h4>
                        <p class="text-gray-600">Programa Nacional de Estímulos Ministerio de Cultura, año 2011</p>
                        <p class="text-gray-600">GRUPO DE INVESTIGACIÓN FAMILIA Y VIDA COTIDIANA – UTCH</p>
                        <p class="mt-2 text-gray-700">“UN ESTUDIO ANALÍTICO AL ARCHIVO FÍLMICO DEL CHOCÓ, QUE REPOSA EN
                            LA FUNDACIÓN PATRIMONIO
                            FÍLMICO COLOMBIANO.”</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h4 class="font-semibold text-lg">Proyecto Ganador Convocatoria Interna a Grupos de
                            Investigación</h4>
                        <p class="text-gray-600">Universidad Tecnológica del Chocó, 2013-2014</p>
                        <p class="text-gray-600">GRUPO DE INVESTIGACIÓN FAMILIA Y VIDA COTIDIANA</p>
                    </div>
                    <!-- Agregar más proyectos aquí -->
                </div>

                <h3 class="text-2xl font-semibold text-red-500 mt-8">Trabajos de Grado</h3>
                <p class="mt-2 text-justify">Sistematización de Experiencias de trabajo social del proyecto “Archivo
                    Fotográfico y Fílmico para la Recuperación del Patrimonio Visual del Chocó”, Universidad Tecnológica
                    del Chocó, años 2010 - 2012.</p>

                <h3 class="text-2xl font-semibold text-red-500 mt-8">Exposiciones</h3>
                <ul class="list-disc list-inside mt-2">
                    <li><a href="https://es.slideshare.net/slideshow/exposicin-historia-de-quibdo-100-aos-de-desarrollo-urbano-19002000/45282647"
                            target="_blank" class="text-blue-500 hover:underline">HISTORIA DE QUIBDO: 100 Años de
                            Desarrollo Urbano 1900-2000</a></li>
                    <li><a href="https://es.slideshare.net/slideshow/exposicin-fotogrfica-virtual-memoria-histrica-de-la-universidad-tecnolgica-del-choc-en-sus-42-aos/40046724"
                            target="_blank" class="text-blue-500 hover:underline">Memoria histórica de la Universidad
                            Tecnológica del Chocó en sus 42 años</a></li>
                    <li><a href="https://es.slideshare.net/slideshow/base-de-datos-choc-en-la-fpfc/140544321"
                            target="_blank" class="text-blue-500 hover:underline">Base de DATOS Archivo Fílmico del
                            Chocó 1929-2013, disponible en la Fundación Patrimonio Fílmico Colombiano</a></li>
                </ul>

                <h3 class="text-2xl font-semibold text-red-500 mt-8">Documentos de interés</h3>
                <ul class="list-disc list-inside mt-2">
                    <li><a href="https://es.slideshare.net/slideshow/memoria-audiovisual-del-choc/140656423"
                            target="_blank" class="text-blue-500 hover:underline">Memoria audiovisual del Chocó</a></li>
                    <li><a href="https://es.slideshare.net/slideshow/un-estudio-analtico-al-archivo-flmico-del-choc-que-reposa-en-la-fundacin-patrimonio-flmico-colombiano/86699765"
                            target="_blank" class="text-blue-500 hover:underline">Un estudio analítico al Archivo
                            Fílmico del Chocó, que reposa en la Fundación Patrimonio Fílmico Colombiano</a></li>
                    <li><a href="https://es.slideshare.net/slideshow/archivo-fotogrfico-y-flmico-del-chocproyecto-desandando/86698866"
                            target="_blank" class="text-blue-500 hover:underline">Presentación Archivo Fotográfico y
                            Fílmico del Chocó</a></li>
                    <li><a href="https://es.slideshare.net/slideshow/desandando-tras-las-noticias-del-choc-aos-19701975/69117276"
                            target="_blank" class="text-blue-500 hover:underline">«Desandando» tras las noticias del
                            Chocó años 1970-1975</a></li>
                </ul>

                <h3 class="text-2xl font-semibold text-red-500 mt-8">Artículos históricos</h3>
                <ul class="list-disc list-inside mt-2">
                    <li><a href="https://es.slideshare.net/slideshow/10429536" target="_blank"
                            class="text-blue-500 hover:underline">Artículo sobre la historia local y su impacto en la
                            cultura del Chocó</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
