@extends('layouts.plantillaA')
@section('contenido')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> --}}
                <div class="titulo--login">{{ __('Iniciar Sesion') }}</div>
                @if ($errors)
                <ul class="errors">
                    @foreach ($errors->all() as $error)
                     <li>{{$error}}</li>   
                    @endforeach
                </ul>
                @endif
                {{-- <div class="card-body"> --}}
                    <form method="POST" class="login--form" action="{{ route('login') }}">
                        @csrf

                        <div class="form--caja">
                            <label for="email" class="texto--login">{{ __('E-Mail') }}</label>

                            <div>
                                <input placeholder="Ingrese su email" id="email" type="email" class="in--login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form--caja">
                            <label for="password" class="texto--login">{{ __('Contraseña') }}</label>

                            <div>
                                <input placeholder="Ingrese su contraseña" id="password" type="password" class="in--login @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form--caja">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="input--recordarme" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="label--recordarme" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form--caja">
                                <button type="submit" class="boton--login">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif

                                <a href="{{route('register')}}">¿No tenes cuenta?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
