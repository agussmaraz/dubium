@extends('layouts.plantillaA')

@section('contenido')
<div class="container">
  {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">--}}
                <div class="titulo--login">{{ __('Reset Password') }}</div>

               {{-- <div class="card-body">--}}
                    <form method="POST" class="login--form" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form--caja">
                            <label for="email" class="texto--login">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="in--login @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form--caja">
                            <label for="password" class="texto--login">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="in--login @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form--caja">
                            <label for="password-confirm" class="texto--login">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="in--login" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form--caja">
                            <div>
                                <button type="submit" class="boton--login">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection