<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talento | Agregar</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Formulario -->
    <div class="container py-5">
        <h2>AGREGAR SERVICIO</h2>
        <form action="{{ route('servicio.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nombre_servicio" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_servicio" name="nombre_servicio">
            </div>
            <div class="mb-3 form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="descripcion_servicio" style="height: 100px"
                    name="descripcion_servicio"></textarea>
                <label for="descripcion_servicio">Descripción</label>
            </div>
            <div class="mb-3">
                <label for="precio_servicio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio_servicio" name="precio_servicio">
            </div>
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select class="form-select" id="categoria_id" name="categoria_id">
                    <option value="1">Tecnologia</option>
                    <option value="2">Negocios</option>
                    <option value="3">Educacion</option>
                    <option value="4">Legales</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="imagen_servicio" class="form-label">URL de la imagen</label>
                <input type="url" class="form-control" id="imagen_servicio" name="imagen">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('servicio.index') }}#servicios" class="btn btn-danger" role="button">Cancelar</a>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
