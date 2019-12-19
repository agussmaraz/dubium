@extends('layouts.plantillaA')

@section('contenido')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">--}}
                <div class="cajita-button">
                    <a href="/login" class="button-volver">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                </div>
                <div class="titulo--login">{{ __('Reset Password') }}</div>
                
                {{--<div class="card-body">--}}
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <form method="POST" class="login--form" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="form--caja">
                            <label for="email" class="texto--login">{{ __('E-Mail Address') }}</label>
                            
                            <div>
                                <input id="email" type="email" class="in--login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form--caja">
                            {{-- <div> --}}
                                <button type="submit" class="boton--login">
                                    {{ __('Enviar') }}
                                </button>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    
    