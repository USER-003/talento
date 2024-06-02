@extends('layouts.guest')

@section('content')
<!-- Section: Design Block -->
<section class="vh-100 d-flex align-items-center justify-content-center">
  <!-- Jumbotron -->
  <div class="container">
    <div class="row gx-lg-5 align-items-center">
      <!-- Formulario a la izquierda -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card">
          <div class="card-body py-5 px-md-5">
            <h3 class="mb-4 text-center">Regístrate</h3>

            <form action="{{ route('registrarse') }}" method="POST">
            @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="nombres" class="form-control" name="nombres" value="{{ old('nombres') }}" required />
                    <label class="form-label" for="form3Example1">Nombres</label>
                    @error('nombres')
                      <div style="color: red;">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="apellidos" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required/>
                    <label class="form-label" for="form3Example2">Apellidos</label>
                    @error('apellidos')
                      <div style="color: red;">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required/>
                <label class="form-label" for="form3Example3">Email</label>
                @error('email')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="password" class="form-control" name="password" required/>
                <label class="form-label" for="form3Example4">Contraseña</label>
                @error('password')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>

              <!-- Password Confirmation input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required/>
                <label class="form-label" for="form3Example5">Confirmar Contraseña</label>
                @error('password_confirmation')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>

              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                Registrarse
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                  <p>o registrate con:</p>
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
                    <p>Ya tienes una cuenta? <a href="{{ route('login') }}" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Iniciar Sesion</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Texto a la derecha -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="my-5 display-3 fw-bold ls-tight">
          TALENTO <br />
          <span class="text-primary">SERVICIOS AL ALCANCE DE TODOS</span>
        </h1>
        <p style="color: hsl(217, 10%, 50.8%)">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Eveniet, itaque accusantium odio, soluta, corrupti aliquam
          quibusdam tempora at cupiditate quis eum maiores libero
          veritatis? Dicta facilis sint aliquid ipsum atque?
        </p>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection
