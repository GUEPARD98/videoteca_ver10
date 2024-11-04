<x-app-layout>
    <!-- Encabezado con imagen a pantalla completa -->
    <div class="min-h-screen bg-black text-white">
        <!-- Encabezado con imagen -->
        <div class="relative bg-cover bg-center h-[500px] flex items-center justify-center overflow-hidden"
            style="background-image: url('{{ asset('images/portada.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="container text-center relative z-10 animate__animated animate__fadeInDown">
                <h1 class="font-extrabold text-7xl text-red-500 mb-4 shadow-lg">Archivo Fotográfico y Fílmico Del Chocó
                </h1>
                <h2 class="text-white text-3xl font-medium">Noticias</h2>
                <nav class="flex justify-center mt-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-red-500"></i>
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-red-600">
                                Inicio
                            </a>
                        </li>
                        <li class="inline-flex items-center text-gray-500">
                            <span>/</span>
                            <a href="/comunicacion"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-red-600 ml-1">
                                Noticias
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="container py-8 mx-auto max-w-6xl">
            <h1 class="text-4xl font-semibold mb-6 text-center text-red-600 animate__animated animate__bounceIn">
                Noticias</h1>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark border border-red-600 rounded-lg shadow-lg overflow-hidden h-100">
                            <div class="relative">
                                <div
                                    class="badge bg-red-600 text-white position-absolute top-0 start-0 rounded-end px-3 py-1">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>{{ $post->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                            <div class="card-body p-4 animate__animated animate__fadeInUp" data-aos="fade-up">
                                <a href="{{ route('pages.show-comunicacion', $post) }}">
                                    <h5 class="card-title mb-2 text-white text-center">{{ $post->name }}</h5>
                                </a>
                                <p class="card-text text-muted mb-4 text-center">{!! html_entity_decode(Str::limit($post->extract, 90, '...')) !!}</p>
                                <a href="{{ route('pages.show-comunicacion', $post) }}">
                                    <img src="{{ $post->image && $post->image->url ? asset('storage/' . $post->image->url) : asset('images/biblioteca250.jpg') }}"
                                        alt="{{ $post->image && $post->image->url ? 'Imagen' : 'Portada' }}"
                                        class="img-fluid w-100 h-64 object-cover rounded-top border-bottom border-red-600 transition-all transform hover:scale-105 hover:shadow-lg duration-300">
                                </a>
                                <div class="text-center mt-3">
                                    <a href="{{ route('pages.show-comunicacion', $post) }}"
                                        class="btn btn-danger text-white">
                                        Leer más <i class="fa-solid fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Paginación -->
            <div class="mt-8 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <!-- Estilos adicionales -->
    <style>
        .card img:hover {
            transform: scale(1.1) translateY(-10px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.5);
        }

        .container {
            animation: fadeInUp 1s ease-in-out;
        }

        .btn-danger {
            background-color: #e3342f;
            border-color: #e3342f;
        }

        .btn-danger:hover {
            background-color: #c8102e;
            border-color: #c8102e;
        }
    </style>

    <!-- AOS (Animate On Scroll) -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        AOS.init();
    </script>
</x-app-layout>
