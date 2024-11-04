<x-app-layout>
    <div class="min-h-screen bg-black text-white">
        <!-- Encabezado con imagen -->
        <div class="relative bg-cover bg-center h-96 flex items-center overflow-hidden"
            style="background-image: url('{{ asset('images/portada.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="container mx-auto px-4 relative z-10 text-center">
                <h1 class="font-extrabold text-5xl text-red-500">Archivo Fotografico Y Filmico Del Chocó</h1>
                <h2 class="text-white text-2xl font-medium mt-2">Periodismo, Grabación y Prensa</h2>
                <nav class="flex justify-center mt-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-red-500"></i>
                            <a href="{{ url('/') }}"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">Inicio</a>
                        </li>
                        <li class="inline-flex items-center text-white">
                            <span>/</span>
                            <a href="{{ url('/educacion') }}"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-red-600 ml-1">Servicios</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>


        <!-- Contenido Principal -->
        <div class="container py-12 mx-auto max-w-6xl px-6 lg:px-8">
            <h1 class="text-3xl font-semibold mb-6 text-red-500">Nuestros Servicios</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Tarjeta de Servicio -->
                @foreach ([
        ['title' => 'Preservación y Restauración', 'description' => 'Aseguramos la preservación a largo plazo de material audiovisual y ofrecemos servicios de restauración de archivos dañados o deteriorados.'],
        ['title' => 'Digitalización', 'description' => 'Convertimos materiales audiovisuales de formatos físicos a digitales, preservando el patrimonio histórico y facilitando el acceso en línea.'],
        ['title' => 'Acceso a Contenidos', 'description' => 'Ofrecemos un catálogo en línea, servicios de préstamo de películas, y streaming para que accedas a tus contenidos favoritos desde cualquier lugar.'],
        ['title' => 'Asesorías y Formación', 'description' => 'Te ofrecemos asesoría en producción audiovisual, edición, postproducción y periodismo audiovisual. Aprende a crear contenido de calidad con nosotros.'],
        ['title' => 'Organización de Eventos Culturales', 'description' => 'Organizamos proyecciones, ciclos de cine, festivales y conferencias para promover la cultura y el patrimonio audiovisual.'],
        ['title' => 'Investigación y Educación', 'description' => 'Apoyamos la investigación académica y cultural, y ofrecemos talleres educativos sobre la historia del cine y la producción audiovisual.'],
        ['title' => 'Gestión de Archivos', 'description' => 'Servicios de catalogación, almacenamiento y consultoría para la correcta gestión y preservación de archivos audiovisuales.'],
        ['title' => 'Producción de Contenidos', 'description' => 'Ofrecemos servicios de producción audiovisual, desde la preproducción hasta la postproducción, para la creación de documentales, películas y más.'],
        ['title' => 'Servicios de Prensa y Comunicación', 'description' => 'Te ayudamos a gestionar relaciones con medios, crear contenido para prensa y destacar en el ámbito mediático.'],
        ['title' => 'Comercialización de Contenidos', 'description' => 'Distribuimos y vendemos películas, documentales y otros productos audiovisuales, tanto en formato físico como digital.'],
    ] as $service)
                    <div class="bg-gray-800 border border-gray-700 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105"
                        data-aos="fade-up">
                        <div class="relative p-6">
                            <h2 class="text-2xl font-bold text-white mb-4">{{ $service['title'] }}</h2>
                            <p class="text-gray-400 mb-6">{{ $service['description'] }}</p>
                            <a href="/contactanos"
                                class="bg-red-600 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition-colors duration-300">
                                Más información <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="/contactanos"
                    class="bg-red-600 hover:bg-red-500 text-white py-3 px-6 rounded-full text-lg font-semibold">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>


</x-app-layout>
