<x-app-layout>
    <!-- Contenedor principal -->
    <div class="w-full relative">
        <!-- Encabezado con imagen -->
        <div class="relative h-72 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/portada.jpg') }}" alt="Encabezado de la página"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="z-10 text-center text-white">
                <h1 class="font-extrabold text-4xl text-danger animated fadeInDown">Archivo Fotográfico y Fílmico del
                    Chocó</h1>
                <h2 class="text-xl mt-2 animated fadeInUp">Documentos Y Bases De Datos</h2>
                <nav class="flex justify-center my-4 text-sm" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-white">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house text-danger"></i>
                            <a href="/" class="text-white hover:text-danger">Inicio</a> /
                        </li>
                        <li class="inline-flex items-center">
                            <a href="/material" class="text-white hover:text-danger">Archivo</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Sección principal -->
    <div class="container py-5">
        <!-- Sección de introducción -->
        <div class="text-center mb-5">
            <h2 class="text-3xl font-bold text-dark mb-4">Introducción</h2>
            <p class="text-muted lead">
                El Archivo Fílmico del Chocó es una colección de documentos, fotografías, videos y bases de datos que
                representan el patrimonio cultural y audiovisual de la región. Este archivo permite explorar y preservar
                la rica historia de nuestra tierra, con material que abarca desde los inicios del cine y la fotografía,
                hasta documentos que trazan el desarrollo cultural y social del Chocó.
            </p>
        </div>
        <style>
            .card {
                height: 400px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border-radius: 15px;
                overflow: hidden;
                position: relative;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding: 20px;
            }

            .card-title,
            .card-text {
                margin-bottom: 15px;
            }

            .card-footer {
                margin-top: auto;
                background-color: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(10px);
                border-top: 1px solid #ddd;
                text-align: center;
                color: #333;
                padding: 15px;
            }

            /* Estilos para el carrusel */
            .carousel-inner {
                display: flex;
                align-items: center;
            }

            .carousel-item {
                transition: transform 0.5s ease;
            }

            /* Estilos para tarjetas */
            .card {
                background-color: #ffffff;
                border: none;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            }

            .card-title {
                color: #c0392b;
                /* Un rojo más sutil */
                font-weight: bold;
                font-size: 1.4rem;
                /* Aumentar el tamaño */
                text-align: center;
                margin-bottom: 10px;
            }

            .card-text {
                color: #555;
                /* Color gris para el texto */
                font-size: 1rem;
                text-align: justify;
                line-height: 1.6;
                /* Mejora la legibilidad */
            }

            .card-footer a {
                text-decoration: none;
                color: #c0392b;
                font-weight: bold;
                transition: color 0.3s ease;
            }

            .card-footer a:hover {
                color: #e74c3c;
                /* Rojo más claro */
            }

            /* Estilos para los botones de control (flechas) */
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-color: #c0392b;
                border-radius: 50%;
                width: 50px;
                height: 50px;
            }

            /* Flechas movidas a los extremos */
            .custom-control-left {
                left: -50px;
            }

            .custom-control-right {
                right: -50px;
            }

            /* Ocultar flechas en la superposición de tarjetas */
            .carousel-control-prev,
            .carousel-control-next {
                width: 5%;
            }

            /* Estilos para la paginación */
            .pagination {
                justify-content: center;
                margin-top: 20px;
            }

            .pagination .page-item .page-link {
                color: #555;
                border: 1px solid #ddd;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            .pagination .page-item .page-link:hover {
                background-color: #c0392b;
                color: white;
                border-color: #c0392b;
            }
        </style>


        <!-- Sección de documentos destacados -->
        <div class="text-center mb-5">
            <h2 class="text-3xl font-bold text-dark mb-4">Exposiciones</h2>
            <div id="documentosCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Documento PDF 1 -->
                    <div class="carousel-item active">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Historia de la Fotografía en el Chocó - Memoria
                                    Visual</h5>
                                <p class="card-text text-muted">En el año 2006 la Universidad Tecnológica del Chocó ,a
                                    través de la oficina de Comunicaciones, obtiene la Beca en Gestión de Archivos y
                                    Centros de Documentación Audiovisual del Ministerio de Cultura, con lo cual se pudo
                                    avanzar en la creación del Archivo Fotográfico y Fílmico, del cual se derivaron
                                    Documentos como la “FOTOGRAFIA EN EL CHOCO” que condensa la investigación sobre la
                                    aparición de la actividad fotográfica en el Chocó.

                                </p>
                                <a href="https://es.slideshare.net/slideshow/historia-de-la-fotografa-en-el-choc/45038718"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Documento PDF 2 -->
                    <div class="carousel-item">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger text-center">Quibdo Exposicion identidad y convivencia
                                </h5>
                                <p class="card-text text-muted">El documento describe la historia y desarrollo de la
                                    ciudad de Quibdó en Colombia, incluyendo su fundación, crecimiento y desafíos
                                    actuales.</p>
                                <a href="https://es.slideshare.net/slideshow/exposicin-identidad-y-convivencia/4603880"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Documento PDF 3 -->
                    <div class="carousel-item">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Exposiciòn Fotográfica Virtual Memoria histórica de
                                    la Universidad Tecnológica del Chocò en sus 42 años</h5>
                                <p class="card-text text-muted">Los invitamos a conocer nuestra la exposición Memoria
                                    histórica de la UTCH en sus 42 años , que tenemos exhibida por estos días en el
                                    edificio de investigaciones de la Universidad Tecnológica del Chocó,bloque 11 piso
                                    1.</p>
                                <a href="https://es.slideshare.net/slideshow/exposicin-fotogrfica-virtual-memoria-histrica-de-la-universidad-tecnolgica-del-choc-en-sus-42-aos/40046724"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger">EXPOSICIÓN FOTOGRÁFICA “QUIBDÓ Y SU CATEDRAL,
                                    SÍMBOLOS DE ESPIRITUALIDAD FRANCISCANA”</h5>
                                <p class="card-text text-muted">una contribución al rescate de la memoria visual
                                    cultural, histórica y patrimonial de nuestra Catedral y su influencia en el
                                    municipio de Quibdó.

                                </p>
                                <a href="https://es.slideshare.net/slideshow/exposicin-fotogrfica-quibd-y-su-catedral-smbolos-de-espiritualidad-franciscana/255467964"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Exposiciòn HISTORIA DE QUIBDO : 100 Años de
                                    Desarrollo Urbano 1900-2000</h5>
                                <p class="card-text text-muted">"100 Años de Desarrollo Urbano 1900-2000", exposición
                                    con material del Archivo Fotográfico del Chocó e imágenes rescatadas por Douglas
                                    Cujar Cañadas.
                                </p>
                                <a href="https://es.slideshare.net/slideshow/exposicin-fotogrfica-quibd-y-su-catedral-smbolos-de-espiritualidad-franciscana/255467964"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Exposición Fotográfica DEL RÍO A LA PISTA 100 años
                                    de la llegada de la aviación al Chocó</h5>
                                <p class="card-text text-muted">El documento describe cómo entre los años 1960 y 1970,
                                    el río Atrato en Chocó fue utilizado para transportar personas y bienes por vía
                                    fluvial, conectando comunidades a lo largo de sus orillas.

                                </p>
                                <a href="https://es.slideshare.net/udelchoco/exposicin-fotogrfica-del-ro-a-la-pista-100-anos-de-la-llegada-de-la-aviacin-al-c-hocopdf"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0 shadow-lg hover-shadow-lg transition-transform">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Fotos antiguas Carmen de Atrato-Chocó</h5>
                                <p class="card-text text-muted">Fotos antiguas Carmen de Atrato-Chocó
                                    Trabajo realizado por estudiantes del programa de Trabajo Social de la Universidad
                                    Tecnológica del Chocó en el Carmen de Atrato bajo las orientaciones del docente
                                    Gonzalo Diaz Cañadas, año 2010.
                                </p>
                                <a href="https://es.slideshare.net/slideshow/fotos-antiguas-carmen-de-atratochoc/245352918"
                                    target="_blank" class="btn btn-outline-danger">Ver PDF <i
                                        class="fa-solid fa-file-pdf ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controles del carrusel -->
                <a class="carousel-control-prev" href="#documentosCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#documentosCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

        <!-- MEMORIAS DE INVESTIGACION------------------------------------------------------------------>
        <div id="cardCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <h2 class="text-center text-3xl font-bold text-dark mb-4">Memorias De Investigacion </h2>
            <div class="carousel-inner">
                <!-- Primer slide (tarjetas 1 a 4) -->
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Tarjeta 1 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">El patrimonio documental, bibliográfico y
                                        hemerográfico del Chocó</h5>
                                    <p class="card-text">Investigación de Gonzalo Díaz Cañadas sobre narrativas
                                        históricas del Chocó, basadas en documentos y archivos, que destacan su
                                        identidad cultural regional.</p>
                                    <a href="https://es.slideshare.net/slideshow/el-patrimonio-documental-bibliogrfico-y-hemerogrfico-del-choc/253739020"
                                        target="_blank" class="btn btn-outline-danger">Ver
                                        PDF</a>
                                </div>
                                <div class="card-footer text-muted">1 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 2 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Ahí está pintado el chocó</h5>
                                    <p class="card-text">Producción del documento: AHÍ ESTÁ PINTADO EL CHOCÓ - EL ARTE
                                        EN LA MEMORIA VISUAL. Documento analítico sobre el desarrollo histórico de la
                                        actividad artística en el Chocó...</p>
                                    <a href="https://es.slideshare.net/slideshow/ah-est-pintado-el-choc/51176951"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">2 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 3 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Inicios de la Radio en el Chocó</h5>
                                    <p class="card-text">
                                        La radio en el Chocó comenzó en 1933 con "Ecos del Atrato", expandiéndose para
                                        fines culturales y educativos en décadas posteriores. </p>
                                    <a href="https://es.slideshare.net/slideshow/presentacion-universidad-tecnolgica-del-choc-10-marzo-2014/51177984"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">3 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 4 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">CINE EN EL CHOCO 2022</h5>
                                    <p class="card-text">
                                        El cine llegó al Chocó en 1914, destacando como actividad social, con
                                        contribuciones de misioneros claretianos en películas misioneras.
                                    </p>
                                    <a href="https://es.slideshare.net/slideshow/cine-en-el-choco-2022pptx/251794153"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">4 / 7</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segundo slide (tarjetas 5 a 8) -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Tarjeta 5 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Narrando al Choco- resumen</h5>
                                    <p class="card-text">El Chocó narrado a través de la Imagen.
                                        Acompáñanos a vivir una experiencia visual en la que recorreremos los hitos
                                        culturales, paisajísticos y simbólicos más emblemáticos de nuestro departamento
                                    </p>
                                    <a href="https://es.slideshare.net/slideshow/narrando-al-choco-resumenpptx/251720715"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">5 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 6 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">«Desandando» tras las noticias del Chocó años
                                        1970-1975</h5>
                                    <p class="card-text">El Archivo Fotográfico y Fílmico del Chocó ganó una beca para
                                        investigar la memoria visual del Chocó, produciendo documentales sobre temas
                                        históricos y sociales.</p>
                                    <a href="https://es.slideshare.net/slideshow/desandando-tras-las-noticias-del-choc-aos-19701975/69117276"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">6 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 7 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Archivo Fotográfico y Fílmico del Chocò-Proyecto
                                        Desandando</h5>
                                    <p class="card-text">El Archivo Fotográfico y Fílmico del Chocó, unidad de
                                        investigación de la UTCH, conserva y documenta el patrimonio visual del
                                        departamento desde 1899..</p>
                                    <a href="https://es.slideshare.net/slideshow/archivo-fotogrfico-y-flmico-del-chocproyecto-desandando/86698866"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">7 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 8 -->

                    </div>
                </div>

                <!-- tercer slide (tarjetas 6 a 9) -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Tarjeta 5 -->

                        <!-- Tarjeta 7 -->

                        <!-- Tarjeta 8 -->


                        <!-- cuarto slide (tarjetas 10 a 13) -->

                        <!-- Tarjeta 8 -->

                    </div>
                </div>
                <!-- Repite esta estructura por cada conjunto de 4 tarjetas -->
            </div>

            <!-- Controles del carrusel: movidos a los extremos -->
            <a class="carousel-control-prev custom-control-left" href="#cardCarousel" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next custom-control-right" href="#cardCarousel" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>




        <!-- PRESENTACIONES ------------------------------------------------------------------------------->
        <div id="secondCardCarousel" class="carousel slide mt-5" data-ride="carousel" data-interval="false">
            <!-- Título del carrusel -->
            <h2 class="text-center text-3xl font-bold text-dark mb-4">Presentaciones</h2>
            <div class="carousel-inner">
                <!--------------------------------------------------------------------- Primer slide (tarjetas 1 a 4) -->
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Tarjeta 1 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Un estudio analítico al Archivo Fílmico del
                                        Chocó, que reposa en la Fundación Patrimonio Fílmico Colombiano </h5>
                                    <p class="card-text">El proyecto analizó y digitalizó el Archivo Fílmico del Chocó,
                                        centrándose en noticieros de los años 70, recuperando 80 páginas de material
                                        relevante.</p>
                                    <a href="https://es.slideshare.net/slideshow/un-estudio-analtico-al-archivo-flmico-del-choc-que-reposa-en-la-fundacin-patrimonio-flmico-colombiano/86699765"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">1 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 2 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">CONTRIBUCIÓN DEL ARCHIVO FOTOGRÁFICO Y FÍLMICO
                                        DE LA UTCH A LA RECUPERACIÓN DEL PATRIMONIO VISUAL DEL CHOCÓ 1998-2020</h5>
                                    <p class="card-text">El proyecto crea un archivo fotográfico y fílmico
                                        afrocolombiano en la UTCH, preservando el patrimonio visual del Chocó desde
                                        1998-2020.</p>
                                    <a href="https://es.slideshare.net/slideshow/contribucin-del-archivo-fotogrfico-y-flmico-de-la-utch-a-la-recuperacin-del-patrimonio-visual-del-choc-19982020-239374337/239374337"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">2 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 3 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Archivo Noticiero Telediario Chocó 1970-1978
                                    </h5>
                                    <p class="card-text">El proyecto analiza el Archivo Fílmico del Chocó, enfocado en
                                        la catalogación y digitalización de archivos Teletigre y Telediario de los años
                                        70.
                                    </p>
                                    <a href="https://es.slideshare.net/udelchoco/archivo-noticiero-telediario-choc-19701978"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">3 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 4 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Historia de la Fotografía en el Chocó - Memoria
                                        Visual</h5>
                                    <p class="card-text">
                                        En 2006, la UTCH obtuvo una beca del Ministerio de Cultura, avanzando en la
                                        creación del Archivo Fotográfico y Fílmico, recopilando 3,500 fotos.</p>
                                    <a href="https://es.slideshare.net/slideshow/historia-de-la-fotografa-en-el-choc/45038718"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">4 / 7</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segundo slide (tarjetas 5 a 8) -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Tarjeta 5 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Historia del Cine en el Chocò</h5>
                                    <p class="card-text">
                                        El cine en el Chocó inició en 1929 con teatros, producciones en blanco y negro,
                                        y películas realizadas por los hermanos Acevedo y claretianos.</p>
                                    <a href="https://es.slideshare.net/slideshow/historia-del-cine-en-el-choc/45041910"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">5 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 6 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">EL ARCHIVO FOTOGRÁFICO Y FÍLMICO DEL
                                        CHOCÓ,Centro De Memoria Visual</h5>
                                    <p class="card-text">El Archivo Fotográfico y Fílmico del Chocó, creado en 1998,
                                        documenta y preserva el patrimonio visual, incluyendo fotografías y videos, para
                                        consulta pública.</p>
                                    <a href="https://es.slideshare.net/slideshow/el-archivo-fotogrfico-y-flmico-del-choccentro-de-memoria-visual/253031810"
                                        target="_blank" class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">6 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 7 -->
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-danger">Recuperación, digitalización y catalogación del
                                        Archivo Fílmico de la Universidad Tecnológica del Chocó, en sus 40 años.</h5>
                                    <p class="card-text">El proyecto consiste en recuperar, digitalizar y catalogar el
                                        Archivo Fílmico de la Universidad Tecnológica del Chocó, rescatando 40 años de
                                        historia audiovisual.</p>
                                    <a href="{{ asset('pdfs/filmico.pdf') }}" target="_blank"
                                        class="btn btn-outline-danger">Ver PDF</a>
                                </div>
                                <div class="card-footer text-muted">7 / 7</div>
                            </div>
                        </div>
                        <!-- Tarjeta 8 -->

                        <!-- Tarjeta 8 -->

                    </div>
                </div>



                <!-- Repite esta estructura por cada conjunto de 4 tarjetas -->
                <!-- Aquí puedes agregar más <div class="carousel-item"> para cada nuevo slide -->
            </div>

            <!-- Controles del carrusel -->
            <a class="carousel-control-prev custom-control-left" href="#secondCardCarousel" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next custom-control-right" href="#secondCardCarousel" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>


        <!-- Sección de bases de datos -->
        <div class="text-center mb-5">
            <h2 class="text-3xl font-bold text-dark mb-4" style="color: #000;">
                <i class="fas fa-film" style="color: #e60000; margin-right: 10px;"></i>
                Bases de Datos Del Archivo Fotografico Y Filmico Del Chocó
            </h2>
            <div class="table-responsive">
                <table class="table table-hover text-center" style="border: 2px solid #000;">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Base de Datos</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acceso</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #fff;">
                        <tr>
                            <td class="border-bottom">Base de Datos FPFC CHOCÓ 1929-2013 (depurada)</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="{{ asset('pdfs/BASE_DE_DATOS_FPFC_CHOCO.pdf') }}"
                                    class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">ARCHIVO CHOCÓ SEÑAL MEMORIA</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="{{ asset('pdfs/ARCHIVO_CHOCO_SEÑAL_MEMORIA.pdf') }}"
                                    class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">ARCHIVO CHOCÓ SEÑAL MEMORIA 2</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="{{ asset('pdfs/BD_CHOCÓ.pdf') }}" class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">Videoteca Del Pacifico</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="https://es.slideshare.net/slideshow/videoteca-del-pacifico/51177657"
                                    class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">La Maleta Del Patrimonio Audiovisual Afrocolombiano</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="https://es.slideshare.net/slideshow/la-maleta-del-patrimonio-audiovisual-afrocolombiano/246000323"
                                    class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">Memoria Audiovisual Canal UTCH TV, AÑO 2012</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="https://es.slideshare.net/slideshow/memoria-audiovisual-canal-utch-tv-ao-2012/239443583"
                                    class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">Archivo Fotografico Fondo CITARA(Donacion)</td>
                            <td class="border-bottom">Recopilación del material fotografico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="{{ asset('pdfs/fd_citara.pdf') }}" class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">Chocó Memoria Visual</td>
                            <td class="border-bottom">Recopilación del material fotografico del Chocó.</td>
                            <td class="border-bottom d-flex flex-column align-items-center">
                                <img src="{{ asset('images/visual.jpg') }}" alt="Chocó Memoria Visual"
                                    style="width: 80px; height: auto; margin-bottom: 10px;">
                                <a href="{{ asset('pdfs/bd_affc.pdf') }}" class="btn btn-outline-danger">Consultar</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom">Bd Videoteca</td>
                            <td class="border-bottom">Recopilación del material fílmico del Chocó.</td>
                            <td class="border-bottom">
                                <a href="{{ asset('pdfs/BD_VIDEOTECA.pdf') }}" class="btn btn-outline-danger">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>

    </div>
</x-app-layout>
