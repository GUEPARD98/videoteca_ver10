<x-app-layout>
    <!-- Encabezado con imagen -->
    <div class="relative bg-cover bg-center h-64 flex items-center justify-center"
        style="background-image: url('{{ asset('images/portada.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="font-extrabold text-5xl text-red-500 animate__animated animate__fadeInDown">Noticias:
                {{ $post->name }}</h1>
            <h2 class="text-white text-2xl font-medium mt-2 animate__animated animate__fadeInUp">Nuestra Colección</h2>
            <nav class="flex mt-4 justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                    <li class="inline-flex items-center gap-2">
                        <i class="fa-solid fa-house text-red-500"></i>
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">
                            Inicio
                        </a>
                    </li>
                    <li class="inline-flex items-center text-white">
                        <span>/</span>
                        <a href="{{ url('/comunicacion') }}"
                            class="inline-flex items-center text-sm font-medium text-white hover:text-red-600 ml-1">
                            Noticias
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container md:px-8 py-5 gap-5 max-w-6xl my-0 mx-auto">
        <nav class="flex my-4 justify-between" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <div class="flex gap-2 items-center">
                    <i class="fa-regular fa-calendar hover:text-red-600 ml-1"></i>
                    {{ $post->created_at }}
                </div>
            </ol>
        </nav>
        <div>
            <h1 class="text-4xl font-semibold text-gray-900 mb-4"> {{ $post->name }}</h1>
            <div class="text-lg text-gray-500 item-detail mb-4">
                {!! html_entity_decode($post->extract) !!}
            </div>
        </div>
        <div class="grid gap-6 my-4">
            <!-- Contenido principal -->
            <div class="col-span-3 md:col-span-2">
                <img src="{{ asset('storage/' . $post->image->url) }}" alt="Imagen"
                    class="w-full h-80 object-contain rounded-lg border border-gray-300 shadow-md mb-4">

                <div class="text-[18px] text-gray-700 item-detail text-justify my-5">
                    {!! html_entity_decode($post->body) !!}
                </div>
            </div>
            <div>
                @if ($post->archivo)
                    <embed src="{{ Storage::url($post->archivo->url) }}" type="application/pdf" width="100%"
                        height="600px" class="border border-red-500 rounded-lg shadow-lg my-4" />
                @endif
            </div>
        </div>
    </div>

    <!-- Estilos y animaciones adicionales -->
    <style>
        .hover\:shadow-lg:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .animate__animated {
            animation-duration: 1s;
        }

        .text-red-600 {
            color: #e3342f;
        }
    </style>

    <!-- AOS (Animate On Scroll) para las animaciones -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</x-app-layout>
