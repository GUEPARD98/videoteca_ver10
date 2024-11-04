<div class="bg-gradient-to-r from-black via-gray-900 to-red-800 text-white py-8">
    <footer class="max-w-7xl mx-auto px-4 md:px-8 lg:px-12">

        <!-- Sección Superior del Footer -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-center md:text-left">

            <!-- Información de Contacto -->
            <div class="flex flex-col items-center md:items-start gap-4">
                <h2 class="font-semibold text-xl tracking-wide mb-4 text-red-400">Contacto e Información</h2>
                <p><i class="fa-solid fa-map-marker-alt text-red-400"></i> Universidad Tecnológica del Chocó. Sotano
                    coliseo cubierto, radio universidad (emisora) </p>
                <p><i class="fa-solid fa-envelope text-red-400"></i> gonzalodiazster@gmail.com</p>
                <p><i class="fa-solid fa-phone text-red-400"></i> 3104892698-3206707767</p>
                <p><i class="fa-solid fa-phone-office text-red-400"></i> Línea gratuita: Próximamente</p>
            </div>

            <!-- Enlaces de Interés -->
            <div class="flex flex-col items-center md:items-start gap-4">
                <h2 class="font-semibold text-xl tracking-wide mb-4 text-red-400">Links de Interés</h2>
                <ul class="space-y-3">
                    <li><a href="{{ route('pages.contactanos') }}" class="hover:text-red-300 transition-colors"><i
                                class="fa-solid fa-chevron-right text-red-400"></i> Contáctanos</a></li>
                    <li><a href="{{ route('pages.educacion') }}" class="hover:text-red-300 transition-colors"><i
                                class="fa-solid fa-chevron-right text-red-400"></i> Nuestros Servicios</a></li>
                    <li><a href="{{ route('pages.comunicacion') }}" class="hover:text-red-300 transition-colors"><i
                                class="fa-solid fa-chevron-right text-red-400"></i> Últimas Noticias</a></li>
                </ul>
            </div>

            <!-- Información Adicional -->
            <div class="flex flex-col items-center md:items-start gap-4">
                <h2 class="font-semibold text-xl tracking-wide mb-4 text-red-400">Información Adicional</h2>
                <p><i class="fa-solid fa-clock text-red-400"></i> Horario de atención: Lunes a Viernes, 8:00 a.m. - 6:00
                    p.m.</p>

            </div>

        </div>

        <!-- Divisor con Efecto de Mezcla -->
        <div class="relative flex items-center justify-center my-6">
            <div class="w-full h-1 bg-gradient-to-r from-red-500 via-black to-red-500 rounded"></div>
        </div>

        <!-- Sección de Redes Sociales con Funcionalidad de Apertura -->
        <div class="flex justify-center items-center mt-6 space-x-4">
            <div onclick="openSocialMedia('https://www.youtube.com/@archivofilmicodelchoco8759/videos')"
                class="group cursor-pointer">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-600 to-black rounded-full transform scale-0 group-hover:scale-125 transition-transform duration-300">
                    </div>
                    <i class="fa-brands fa-youtube w-12 text-white relative z-10 group-hover:text-red-500 transition-colors hover:scale-110 transition-transform"
                        aria-hidden="true"></i>
                </div>
            </div>
            <div onclick="openSocialMedia('https://www.facebook.com/MemoriaChoco?mibextid=kFxxJD')"
                class="group cursor-pointer">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-600 to-black rounded-full transform scale-0 group-hover:scale-125 transition-transform duration-300">
                    </div>
                    <i class="fa-brands fa-facebook w-12 text-white relative z-10 group-hover:text-red-500 transition-colors hover:scale-110 transition-transform"
                        aria-hidden="true"></i>
                </div>
            </div>
            <div onclick="openSocialMedia('https://www.instagram.com/archivochoco?igsh=bTQ0MXI1Mmw5cjhh')"
                class="group cursor-pointer">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-600 to-black rounded-full transform scale-0 group-hover:scale-125 transition-transform duration-300">
                    </div>
                    <i class="fa-brands fa-instagram w-12 text-white relative z-10 group-hover:text-red-500 transition-colors hover:scale-110 transition-transform"
                        aria-hidden="true"></i>
                </div>
            </div>
            <div onclick="openSocialMedia('https://x.com/MemoriaChoco?t=g8L1Qrc0pyoLcRZGRyb--A&s=09')"
                class="group cursor-pointer">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-600 to-black rounded-full transform scale-0 group-hover:scale-125 transition-transform duration-300">
                    </div>
                    <i class="fa-brands fa-twitter w-12 text-white relative z-10 group-hover:text-red-500 transition-colors hover:scale-110 transition-transform"
                        aria-hidden="true"></i>
                </div>
            </div>
            <div onclick="openSocialMedia('https://memoriavisualdelchoco.blogspot.com/')" class="group cursor-pointer">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-600 to-black rounded-full transform scale-0 group-hover:scale-125 transition-transform duration-300">
                    </div>
                    <i class="fa-solid fa-blog w-12 text-white relative z-10 group-hover:text-red-500 transition-colors hover:scale-110 transition-transform"
                        aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <!-- Sección Inferior del Footer -->
        <div class="text-center py-4 border-t border-red-500 mt-8">
            <p class="text-sm">© 2024
                Archivo fotografico y fílmico del Chocó | Todos los derechos reservados.</p>
        </div>
        <!-- Botón flotante de WhatsApp -->
        <a href="https://acortar.link/u85CKZ" class="whatsapp-button" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
        </a>
        <style>
            /* Estilos generales para el botón flotante de WhatsApp */
            .whatsapp-button {
                position: fixed;
                width: 65px;
                height: 65px;
                bottom: 20px;
                right: 20px;
                background-color: #25D366;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
                z-index: 100;
                transition: transform 0.3s ease, background-color 0.3s ease;
                animation: pulse 1.5s infinite;
            }

            /* Tamaño del ícono */
            .whatsapp-button img {
                width: 35px;
                height: 35px;
            }

            /* Efecto Hover - Agranda el botón y cambia el color */
            .whatsapp-button:hover {
                transform: scale(1.1);
                background-color: #128C7E;
            }

            /* Animación pulsante para que llame más la atención */
            @keyframes pulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
                }

                70% {
                    box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
                }
            }

            /* Responsivo para pantallas más pequeñas */
            @media (max-width: 768px) {
                .whatsapp-button {
                    width: 55px;
                    height: 55px;
                    bottom: 15px;
                    right: 15px;
                }

                .whatsapp-button img {
                    width: 30px;
                    height: 30px;
                }
            }

            @media (max-width: 480px) {
                .whatsapp-button {
                    width: 50px;
                    height: 50px;
                    bottom: 10px;
                    right: 10px;
                }

                .whatsapp-button img {
                    width: 28px;
                    height: 28px;
                }
            }
        </style>
    </footer>
</div>
