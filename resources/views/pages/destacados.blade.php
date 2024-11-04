<!-- resources/views/pages/destacados.blade.php -->
<x-app-layout>
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold text-center text-red-400 mb-8">Videos Destacados del Archivo Fotográfico y Fílmico
            del Chocó</h1>

        <div id="videoCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Video 1 -->
                <div class="carousel-item active">
                    <h2 class="text-xl font-semibold text-center mb-4">Título del Video 1</h2>
                    <iframe class="w-full h-60" src="https://www.youtube.com/embed/-zjNyhDL5i0" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <!-- Video 2 -->
                <div class="carousel-item">
                    <h2 class="text-xl font-semibold text-center mb-4">Título del Video 2</h2>
                    <iframe class="w-full h-60" src="https://www.youtube.com/embed/cjMXMXU4Iwk" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <!-- Video 3 -->
                <div class="carousel-item">
                    <h2 class="text-xl font-semibold text-center mb-4">Título del Video 3</h2>
                    <iframe class="w-full h-60" src="https://www.youtube.com/embed/epmorDnKhZE" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <!-- Video 4 -->
                <div class="carousel-item">
                    <h2 class="text-xl font-semibold text-center mb-4">Título del Video 4</h2>
                    <iframe class="w-full h-60" src="https://www.youtube.com/embed/rDQwfkQLaVM" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <!-- Video 5 -->
                <div class="carousel-item">
                    <h2 class="text-xl font-semibold text-center mb-4">Título del Video 5</h2>
                    <iframe class="w-full h-60" src="https://www.youtube.com/embed/GZ4BwSGhR_Y" frameborder="0"
                        allowfullscreen></iframe>
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
</x-app-layout>
