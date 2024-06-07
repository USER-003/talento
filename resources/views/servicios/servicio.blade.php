@extends('layouts.app')

@section('content')

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
                        <th scope="row">{{ $servicio->id_servicios_personales }}</th>
                        <td>{{ $servicio->nombre_servicio }}</td>
                        <td class="truncate-text">{{ $servicio->descripcion_servicio }}</td>
                        <td>{{ $servicio->precio }}</td>
                        <td class="text-center">{{ $servicio->categoria->nombre_categoria }}</td>
                        <td class="truncate-text">{{ $servicio->imagen }}</td>
                        <td>
                            <a class="btn btn-primary mb-3" style="width: 100%"
                                href="{{ route('servicio.edit', $servicio->id_servicios_personales) }}" role="button">Editar</a>
                            <a class="btn btn-danger" style="width: 100%" href="#"
                                onclick="confirmDelete('{{ $servicio->id_servicios_personales }}')">Eliminar</a>

                            <form action="{{ route('servicio.destroy', $servicio->id_servicios_personales) }}" method="POST"
                                id="delete-form-{{ $servicio->id_servicios_personales }}" style="display: none;">
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

    @endsection