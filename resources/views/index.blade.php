<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Talento</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@talento.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+503 6046 1315</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TALEN</span>TO</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#" class="nav-item nav-link active">Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nosotros</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="#nosotros" class="dropdown-item">¿Quienes somos?'</a>
                                <a href="#testimonios" class="dropdown-item">Testimonios</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Explorar</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="#explorar" class="dropdown-item">Todos</a>
                                <a href="#tech" class="dropdown-item">Tecnologia</a>
                                <a href="#negocios" class="dropdown-item">Negocios</a>
                                <a href="#educacion" class="dropdown-item">Educación</a>
                                <a href="#leyes" class="dropdown-item">Legales</a>
                            </div>
                        </div>
                        <a href="{{ route('servicio.index') }}" class="nav-item nav-link">Mis servicios</a>

                        <a href="#" class="nav-item nav-link">GUEST</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">TALENTO</h4>
                            <h1 class="display-3 text-white mb-md-4">Encuentra el servicio adecuado para ti</h1>
                            <a href="#explorar" class="btn btn-primary py-md-3 px-md-5 mt-2">Explorar</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Talento</h4>
                            <h1 class="display-3 text-white mb-md-4">Ofrece tus servicios de forma fácil y segura </h1>
                            <a href="{{ route('servicio.index') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Mis
                                Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid py-5" id="nosotros">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nosotros</h6>
                        <h1 class="mb-3">La Manera Simple y Segura de Encontrar y Ofrecer Servicios Profesionales.
                        </h1>
                        <p>Talento es tu plataforma para encontrar y ofrecer servicios profesionales de manera fácil y
                            segura. Con una interfaz intuitiva, puedes explorar diversas categorías de servicios,
                            revisar perfiles detallados y comunicarte directamente con proveedores especializados para
                            acordar los términos. Únete a Talento hoy y simplifica la manera en que contratas y ofreces
                            servicios profesionales.</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="#explorar" class="btn btn-primary mt-1">Explorar</a>
                        <a href="#testimonios" class="btn btn-primary mt-1">Comentarios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Ajústate a tu presupuesto</h5>
                            <p class="m-0">Encuentra el servicio adecuado para ti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Paga cuando estés conforme</h5>
                            <p class="m-0">Cotizaciones por adelantado para evitar sorpresas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-building text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Obtén un trabajo de calidad con rapidez</h5>
                            <p class="m-0">Entrega tu proyecto a un talento en minutos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Destination Start -->
    <div class="container-fluid py-5" id="explorar">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Explorar</h6>
                <h1>Categorías</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4"> <!-- Para dos categorías por fila en pantallas grandes -->
                    <div class="card">
                        <img class="card-img-top" src="img/destination-1.jpg" alt="Tecnología">
                        <div class="card-body">
                            <h5 class="card-title">Tecnología</h5>
                            <p class="card-text">3 Servicios</p>
                            <a href="#tech" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/destination-2.jpg" alt="Negocios">
                        <div class="card-body">
                            <h5 class="card-title">Negocios</h5>
                            <p class="card-text">3 Servicios</p>
                            <a href="#negocios" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/destination-3.jpg" alt="Educación">
                        <div class="card-body">
                            <h5 class="card-title">Educación</h5>
                            <p class="card-text">3 Servicios</p>
                            <a href="#educacion" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/destination-4.jpg" alt="Legales">
                        <div class="card-body">
                            <h5 class="card-title">Legales</h5>
                            <p class="card-text">3 Servicios</p>
                            <a href="#leyes" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->



    <div class="container-fluid py-5" id="tech">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios de</h6>
                <h1>TECNOLOGÍA</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/package-1.jpg" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Búsqueda avanzada de servicios</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/package-2.jpg" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Integración de pagos seguros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/package-3.jpg" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Gestión de citas y horarios</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#explorar">Todos los servicios</a>
        </div>
    </div>
    <div class="container-fluid py-5" id="educacion">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios de</h6>
                <h1>EDUCACIÓN</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/destination-1.jpg" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Clases en línea</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/destination-2.jpg" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Recursos educativos interactivos</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/destination-3.jpg" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Plataformas de aprendizaje
                                personalizadas</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#explorar">Todos los servicios</a>
        </div>
    </div>

    <!-- Packages Start -->
    <div class="container-fluid py-5" id="negocios">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios de</h6>
                <h1>NEGOCIOS</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/package-3.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                            </div>
                            <a class="h5 text-decoration-none" href="">Consultoría de estrategia
                                empresarial</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/package-4.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                            </div>
                            <a class="h5 text-decoration-none" href="">Marketing digital y publicidad</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/package-5.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">

                            </div>
                            <a class="h5 text-decoration-none" href="">Asesoría financiera y contable</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#explorar">Todos los servicios</a>
        </div>
    </div>

    <div class="container-fluid py-5" id="leyes">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
                <h1>LEGALES</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/destination-4.jpg"
                            alt="Asesoramiento legal en línea">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Asesoramiento legal en línea</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/destination-5.jpg"
                            alt="Gestión de documentos legales">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Gestión de documentos legales</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/servicios/destination-6.jpg"
                            alt="Representación jurídica digital">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Representación jurídica digital</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-map-marker text-primary mr-2"></i>San Miguel
                                    </h6>
                                    <h5 class="m-0">$360</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#explorar">Todos los servicios</a>
        </div>
    </div>

    <!-- Packages End -->




    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonios">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonios</h6>
                <h1>Qué Dicen Nuestros Clientes</h1>
                <div class="text-center">
                    <a href="#nosotros">¿Quienes somos?</a>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">¡Increíble experiencia! Encontré exactamente lo que necesitaba en poco tiempo
                            y a un precio justo. ¡Altamente recomendado!
                        </p>
                        <h5 class="text-truncate">Juan López</h5>
                        <span>Cliente</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">¡El mejor servicio que he encontrado en mucho tiempo! Fácil de usar, rápido y
                            eficiente. ¡No puedo pedir más!
                        </p>
                        <h5 class="text-truncate">Ana García</h5>
                        <span>Diseñadora</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">¡Impresionante! Encontré al profesional perfecto para mi proyecto y la
                            comunicación fue excelente en todo momento.
                        </p>
                        <h5 class="text-truncate">David Rodríguez</h5>
                        <span>Cliente</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">¡Increíble plataforma! Me ayudó a encontrar rápidamente al abogado que
                            necesitaba para mi caso legal. ¡Altamente recomendado!
                        </p>
                        <h5 class="text-truncate">Pedro Martínez</h5>
                        <span>Cliente</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




    <!-- Footer Start -->

    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#" style="color: white;">Talento</a>.
                    All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by Talento
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
