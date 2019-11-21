@extends('layouts.plantillaA')
@section('contenido')
<div class="container">
    
    <div class = "p--registro">{{ __('Registro') }}</div>
    <form method="POST" class="form--regis" action="{{ route('register') }}">
        @csrf
        
        <div class="form">
            <label for="name" class="sub--texto">{{ __('Nombre') }}</label> 
            <div>
                <input  placeholder="Ingrese su nombre" id="name" type="text" class="in--regis @error('name') is-invalid @enderror" name="nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>          
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        {{-- <div class="form">
            <label for="file"><p class="sub--texto"> Avatar </p></label>
            <input type="file" name="archivo" class="input--avatar">
        </div> --}}
        
        <div class="form">
            <label for="email" class="sub--texto">{{ __('E-Mail') }}</label>
            
            <div>
                <input  placeholder="Ingrese su email" id="email" type="email" class="in--regis @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form">
            <label for="password" class="sub--texto">{{ __('Contraseña') }}</label>
            
            <div>
                <input  placeholder="Ingrese su contraseña" id="password" type="password" class="in--regis @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form">
            <label for="password-confirm" class="sub--texto">{{ __('Confirmar contraseña') }}</label>
            
            <div>
                <input  placeholder="Repetir contraseña" id="password-confirm" type="password" class="in--regis" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        
        {{-- <div class="form-group row mb-0"> --}}
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="boton--login">
                    {{ __('Enviar') }}
                </button>
            </div>
            {{-- </div> --}}
        </form>
        <div class="cuenta">
            <p class="p--usuario"> Ya tenes cuenta? </p>
            <a class = "b--ingresa" href="login.php">Ingresa</a>
        </div>
    </div>
    @endsection
    