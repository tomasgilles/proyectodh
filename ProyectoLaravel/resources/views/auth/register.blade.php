@extends('layouts.master')

@section('content')
  <div class="techo">
    <h1 id="registerh1">Mi Cuenta</h1>
  </div>

  <div class="cuerpo">
    <div class="cuerpo2">
      <div class="registro">
        <h2 id="registerh2">Registro</h2>
          <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group">
                {{-- <label for="formGroupExampleInput"></label> --}}
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre*">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Apellido*">

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email*">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password*">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password*">
              </div>

              <button type="submit" class="btn btn-outline-primary btn-lg btn-block"> {{ __('Crear Cuenta') }} </button>

          </form>
      </div>
    </div>

  </div>
@endsection
