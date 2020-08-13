@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        <svg width="529" height="700" viewBox="0 0 529 700" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="529" height="700" fill="#E5E5E5" />
            <g id="undraw_Login_v483 1">
                <path id="Vector" d="M323 691.063L0 674.063V17.063L323 0.0629883V691.063Z" fill="#6C63FF" />
                <path id="Vector_2"
                    d="M296 381.063C298.209 381.063 300 379.273 300 377.063C300 374.854 298.209 373.063 296 373.063C293.791 373.063 292 374.854 292 377.063C292 379.273 293.791 381.063 296 381.063Z"
                    fill="#535461" />
                <path id="Vector_3"
                    d="M296 377.66L298.773 382.463L301.545 387.265H296H290.455L293.227 382.463L296 377.66Z"
                    fill="#535461" />
                <path id="Vector_4" d="M337 691.063L317.217 691L318 0.0629883H337V691.063Z" fill="#6C63FF" />
                <g id="Group" opacity="0.1">
                    <path id="Vector_5" opacity="0.1" d="M337.217 691H317.217L318.217 0H337.217V691Z" fill="white" />
                </g>
                <path id="Vector_6" opacity="0.1"
                    d="M296 361.063C303.18 361.063 309 355.243 309 348.063C309 340.884 303.18 335.063 296 335.063C288.82 335.063 283 340.884 283 348.063C283 355.243 288.82 361.063 296 361.063Z"
                    fill="black" />
                <path id="Vector_7"
                    d="M296 359.063C303.18 359.063 309 353.243 309 346.063C309 338.884 303.18 333.063 296 333.063C288.82 333.063 283 338.884 283 346.063C283 353.243 288.82 359.063 296 359.063Z"
                    fill="#535461" />
                <path id="Vector_8" opacity="0.1" d="M52.8194 16.108V677.156" stroke="black" stroke-width="2"
                    stroke-miterlimit="10" />
                <path id="Vector_9" opacity="0.1" d="M109.819 12.108V679.156" stroke="black" stroke-width="2"
                    stroke-miterlimit="10" />
                <path id="Vector_10" opacity="0.1" d="M166.819 9.108V683" stroke="black" stroke-width="2"
                    stroke-miterlimit="10" />
                <path id="Vector_11" opacity="0.1" d="M223.819 6.108V687.156" stroke="black" stroke-width="2"
                    stroke-miterlimit="10" />
                <path id="Vector_12" opacity="0.1" d="M280.819 3.108V688" stroke="black" stroke-width="2"
                    stroke-miterlimit="10" />
            </g>
        </svg>


    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
