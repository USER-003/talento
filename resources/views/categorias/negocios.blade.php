@extends('layouts.app')

@section('title', 'Talento')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Servicios</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('inicio') }}">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Negocios</p>
                </div>
                <form class="input-group input-group-lg mt-3" role="search" action="{{ route('category') }}"
                    method="GET">
                    <input type="hidden" name="categoria_id" value="2">
                    <input class="form-control me-2" type="search" name="query"
                        placeholder="Buscar servicios relacionados a Tecnología" aria-label="Search"
                        value="{{ $query ?? '' }}">
                    <button class="btn btn-danger" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Header End -->




    <div class="container-fluid py-5" id="tech">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios de</h6>
                <h1>NEGOCIOS</h1>
            </div>
            <div class="row">

                @forelse ($servicios as $servicio)
                    @if ($servicio->id_categoria === 2)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="{{ $servicio->imagen }}" alt="">
                                <div class="p-4">
                                    <a class="h5 text-decoration-none"
                                        href="{{ route('servicio.info', $servicio->id_servicios_personales) }}">{{ $servicio->nombre_servicio }}</a>
                                    <p>{{ $servicio->descripcion_servicio }}</p>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0">Precio:</h6>
                                            <h5 class="m-0">${{ $servicio->precio }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div>
                        <hr>
                        <h2>Resultados de la búsqueda de: {{ $query }}</h2>
                        <p>No hay resultados</p>
                        <p>Lo sentimos, no hay entradas que coincidan con tus criterios de búsqueda. Por favor, inténtalo de
                            nuevo.</p>
                        <p>Para obtener los mejores resultados de búsqueda, sigue estos consejos:</p>
                        <ul>
                            <li>Comprueba la ortografía.</li>
                            <li>Prueba con términos similares o sinónimos.</li>
                            <li>Prueba con más de una sola palabra.</li>
                        </ul>
                    </div>
                @endforelse

            </div>
        </div>
    </div>

    <!-- Packages End -->

@endsection
