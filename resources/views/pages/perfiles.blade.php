<x-app-layout>
    <div class="w-full relative">
        <!-- Encabezado con imagen -->
        <div class="relative h-72 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/portada.jpg') }}" alt="Encabezado de la página"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="z-10 text-center text-white">
                <h1 class="font-extrabold text-4xl text-red-700">Archivo Fotográfico y Fílmico del Chocó</h1>
                <h2 class="text-xl mt-2">Equipo de Trabajo</h2>
                <nav class="flex justify-center my-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-red-700"></i>
                            <a href="/" class="hover:text-red-500">Inicio</a> /
                        </li>
                        <li class="inline-flex items-center">
                            <a href="/perfiles" class="hover:text-red-500">Equipo de Trabajo</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Perfiles del equipo -->
        <div class="max-w-7xl mx-auto py-8 px-4">
            <h2 class="text-3xl font-bold text-center text-red-700 mb-6">Conoce a Nuestro Equipo</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Perfil: Director -->

                <!-- Perfil: Director -->
                <div
                    class="relative bg-gradient-to-br from-red-500 to-red-700 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 text-white">
                        <i class="fa-solid fa-star fa-2x"></i>
                    </div>
                    <img src="{{ asset('images/director.jpg') }}" alt="Gonzalo Díaz Cañadas"
                        class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg object-cover">
                    <h3 class="text-xl font-semibold text-white">Gonzalo Díaz Cañadas</h3>
                    <p class="text-gray-200">Director Del Archivo Fotográfico Y Fílmico del Chocó</p>

                    <ul class="mt-4 text-gray-300 space-y-1">
                        <li><i class="fa-solid fa-user text-gray-400"></i> <strong>Comunicador Social y
                                Periodista</strong></li>
                        <li><i class="fa-solid fa-building text-gray-400"></i> <strong>Director de
                                Comunicaciónes</strong> en la Universidad Tecnológica del Chocó</li>
                        <li><i class="fa-solid fa-folder text-gray-400"></i> <strong>Fundador</strong> del Archivo
                            Fotográfico y Fílmico del Chocó</li>
                        <li><i class="fa-solid fa-users text-gray-400"></i> Miembro de la Red de Archivos Históricos
                            Colombianos</li>
                        <li><i class="fa-solid fa-trophy text-gray-400"></i> Ganador de <strong>5 menciones de
                                honor</strong> en periodismo ambiental</li>
                        <li><i class="fa-solid fa-broadcast-tower text-gray-400"></i> Director de la <strong>Emisora
                                Radio Universidad del Chocó</strong></li>
                        <li><i class="fa-solid fa-newspaper text-gray-400"></i> Conductor del informativo <strong>El
                                Mirador</strong></li>
                    </ul>

                    <p class="mt-4 text-gray-300">
                        Apasionado por la historia del cine, la fotografía, la aviación y las telecomunicaciones en el
                        Chocó.
                    </p>


                </div>

                <!-- Perfil: Desarrollador Web -->
                <div
                    class="relative bg-gradient-to-br from-gray-800 to-black rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 text-white">
                        <i class="fa-solid fa-code fa-2x"></i>
                    </div>
                    <img src="{{ asset('images/ing.jpg') }}" alt="Andrés Murillo"
                        class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg object-cover">
                    <h3 class="text-xl font-semibold text-white">Andrés Murillo</h3>
                    <p class="text-gray-200">Ingeniero en Telecomunicaciones e Informática</p>

                    <ul class="mt-4 text-gray-300 space-y-1">
                        <li><i class="fa-solid fa-laptop-code text-gray-400"></i> <strong>Desarrollador Web</strong> y
                            Administrador de Bases de Datos</li>
                        <li><i class="fa-solid fa-server text-gray-400"></i> Especialista en <strong>Windows Server
                                2003, 2012, 2019</strong></li>
                        <li><i class="fa-solid fa-tools text-gray-400"></i> Experto en administración y optimización de
                            servidores</li>
                        <li><i class="fa-solid fa-shield-alt text-gray-400"></i> Foco en <strong>rendimiento y
                                seguridad</strong> de sistemas operativos</li>
                        <li><i class="fa-solid fa-file-code text-gray-400"></i> Responsable del desarrollo del
                            <strong>sitio web</strong>
                        </li>
                    </ul>

                    <p class="mt-4 text-gray-300">
                        Apasionado por la tecnología y la innovación, comprometido con garantizar entornos seguros y
                        eficientes.
                    </p>

                    <div class="flex justify-center space-x-2 mt-4">
                        <a href="https://www.linkedin.com/in/andres-murillo-5188441a7/"
                            class="text-white hover:text-gray-400">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/GUEPARD98" class="text-white hover:text-gray-400">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>
                <!-- Perfil: Digitalizador -->
                <div
                    class="relative bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 text-white">
                        <i class="fa-solid fa-digital-tachograph fa-2x" title="Digitalización"></i>
                    </div>

                    <img src="{{ asset('images/digitalizador.png') }}" alt="Digitalizador"
                        class="w-36 h-36 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">

                    <h3 class="text-xl font-semibold text-white">Andrés Lozano Olier</h3>

                    <div class="flex items-center justify-center mt-2">
                        <i class="fa-solid fa-microphone-alt text-blue-300 mr-2" title="Ingeniero de Sonido"></i>
                        <p class="text-gray-200">Ingeniero de Sonido</p>
                    </div>

                    <!-- Resaltando la experiencia -->
                    <div class="flex items-center justify-center mt-2">
                        <i class="fa-solid fa-briefcase text-yellow-300 mr-2" title="Gestión de Proyectos"></i>
                        <p class="mt-2 text-gray-300">Experto en gestión de proyectos culturales y artísticos.</p>
                    </div>

                    <p class="mt-2 text-gray-300">
                        Andrés Lozano Olier es un ingeniero de sonido y productor cultural con experiencia en
                        digitalización de archivos culturales, garantizando que el patrimonio hemerográfico del Chocó
                        esté disponible en formatos digitales.
                    </p>

                    <div class="flex items-center justify-center mt-2">
                        <i class="fa-solid fa-paint-brush text-green-300 mr-2" title="Cultura"></i>
                        <p class="mt-2 text-gray-300">Fundador de la Asociación Eco Creativo, promoviendo las industrias
                            creativas en el Chocó.</p>
                    </div>


                </div>



                <div
                    class="relative bg-gradient-to-br from-green-500 to-green-700 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 text-white">
                        <i class="fa-solid fa-palette fa-2x" title="Gestión Cultural"></i>
                    </div>
                    <img src="{{ asset('images/curador.png') }}" alt="Curador"
                        class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">

                    <h3 class="text-xl font-semibold text-white">PERFIL CULTURAL DE DOUGLAS CUJAR CAÑADAS</h3>

                    <div class="mt-4 text-gray-300">
                        <p class="flex items-center justify-center">
                            <i class="fa-solid fa-archway text-green-300 mr-2" title="Arquitecto"></i>
                            Douglas Cujar Cañadas es Arquitecto, gestor cultural y militante ambientalista.
                        </p>

                        <p class="flex items-center justify-center mt-2">
                            <i class="fa-solid fa-building text-yellow-300 mr-2" title="Fundación"></i>
                            Creador de la Fundación Beteguma, donde promueve, recupera y valora el patrimonio material e
                            inmaterial del Chocó.
                        </p>

                        <p class="flex items-center justify-center mt-2">
                            <i class="fa-solid fa-landmark text-blue-300 mr-2" title="Restauración"></i>
                            Ha trabajado en la restauración del Teatro César Conto y en convertir el Colegio
                            Carrasquilla de Quibdó en un escenario para la formación en artes.
                        </p>

                        <p class="flex items-center justify-center mt-2">
                            <i class="fa-solid fa-pencil-alt text-purple-300 mr-2" title="Publicaciones"></i>
                            Publica artículos culturales y patrimoniales en periódicos y revistas de la región.
                        </p>

                        <p class="flex items-center justify-center mt-2">
                            <i class="fa-solid fa-comments text-red-300 mr-2" title="Conferencias"></i>
                            Es expositor sobre memoria urbana y patrimonio cultural, enfocándose en la música del
                            Pacífico colombiano.
                        </p>

                        <p class="flex items-center justify-center mt-2">
                            <i class="fa-solid fa-users text-teal-300 mr-2" title="Coordinador"></i>
                            Coordinador de la Mesa de cultura del Comité Cívico del Chocó, donde trabaja con artistas y
                            gestores para proteger la cultura local.
                        </p>
                    </div>


                </div>


                <div
                    class="relative bg-gradient-to-br from-purple-500 to-purple-700 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 text-white">
                        <i class="fa-solid fa-flask fa-2x"></i>
                    </div>
                    <img src="{{ asset('images/investigadora.png') }}" alt="Investigadora"
                        class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">
                    <h3 class="text-xl font-semibold text-white">Katy Romaña Córdoba</h3>
                    <p class="text-gray-200">Investigadora</p>
                    <p class="mt-2 text-gray-300">
                        Katy Romaña Córdoba es una investigadora enfocada en la documentación y análisis de las
                        tradiciones culturales y
                        educativas del Chocó. Su trabajo contribuye al enriquecimiento de la Videoteca Cultural y
                        Didáctica del Chocó,
                        apoyando con su conocimiento en la preservación de la memoria cultural de la región.
                    </p>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
