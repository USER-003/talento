@extends('layouts.app')

@section('content')
<!-- Section: Design Block -->
<section class="vh-100 d-flex align-items-center justify-content-center">
  <!-- Jumbotron -->
  <div class="container">
    <div class="row gx-lg-5 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="my-5 display-3 fw-bold ls-tight">
          TALENTO <br />
          <span class="text-primary">PUBLICA TUS SERVICIOS</span>
        </h1>
        <p style="color: hsl(217, 10%, 50.8%)">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Eveniet, itaque accusantium odio, soluta, corrupti aliquam
          quibusdam tempora at cupiditate quis eum maiores libero
          veritatis? Dicta facilis sint aliquid ipsum atque?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card">
          <div class="card-body py-5 px-md-5">   
            <form action="{{ route('iniciar') }}" method="POST">
            <h2 class="mb-4 text-center fw-bold ls-tight">Iniciar Sesión</h2>
            @csrf
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email" required />
                <label class="form-label" for="form3Example3">Email</label>
                @error('email')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" required  />
                <label class="form-label" for="form3Example4">Contraseña</label>
                @error('password')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>

              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                Iniciar Sesión
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>o inicia sesión con:</p>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
                <p>No tienes una cuenta aún? <a href="{{ route('register') }}" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrarse</a></p>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection
