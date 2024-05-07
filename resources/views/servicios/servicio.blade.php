<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Talento | Servicios</title>
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
                        <a href="{{ route('inicio') }}" class="nav-item nav-link">Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nosotros</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{ route('inicio') }}#nosotros" class="dropdown-item">¿Quienes somos?'</a>
                                <a href="{{ route('inicio') }}#testimonios" class="dropdown-item">Testimonios</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Explorar</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{ route('inicio') }}#explorar" class="dropdown-item">Todos</a>
                                <a href="{{ route('inicio') }}#tech" class="dropdown-item">Tecnologia</a>
                                <a href="{{ route('inicio') }}#negocios" class="dropdown-item">Negocios</a>
                                <a href="{{ route('inicio') }}#educacion" class="dropdown-item">Educación</a>
                                <a href="{{ route('inicio') }}#leyes" class="dropdown-item">Legales</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link active">Mis servicios</a>

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
                    <img class="w-100" src="img/servicios/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">TALENTO</h4>
                            <h1 class="display-3 text-white mb-md-4">Comienza a recibir ofertas de trabajo </h1>
                            <a href="{{ route('servicio.create') }}"
                                class="btn btn-primary py-md-3 px-md-5 mt-2">Empezar ahora</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/servicios/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Talento</h4>
                            <h1 class="display-3 text-white mb-md-4">Ofrece tus servicios de forma fácil y segura </h1>
                            <a href="#servicios" class="btn btn-primary py-md-3 px-md-5 mt-2">Mis
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

    <div class="container py-5" id="servicios">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                    <tr>
                        <th scope="row">{{ $servicio->id }}</th>
                        <td>{{ $servicio->nombre_servicio }}</td>
                        <td class="truncate-text">{{ $servicio->descripcion_servicio }}</td>
                        <td>{{ $servicio->precio_servicio }}</td>
                        <td class="text-center">{{ $servicio->categoria_id }}</td>
                        <td class="truncate-text">{{ $servicio->imagen }}</td>
                        <td>
                            <a class="btn btn-primary mb-3" style="width: 100%"
                                href="{{ route('servicio.edit', $servicio->id) }}" role="button">Editar</a>
                            <a class="btn btn-danger" style="width: 100%" href="#"
                                onclick="confirmDelete('{{ $servicio->id }}')">Eliminar</a>

                            <form action="{{ route('servicio.destroy', $servicio->id) }}" method="POST"
                                id="delete-form-{{ $servicio->id }}" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <script>
                                function confirmDelete(id) {
                                    if (confirm('¿Estás seguro de que quieres eliminar este servicio?')) {
                                        document.getElementById('delete-form-' + id).submit();
                                    }
                                }
                            </script>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('servicio.create') }}" role="button">AGREGAR SERVICIO</a>
        </div>
    </div>


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
