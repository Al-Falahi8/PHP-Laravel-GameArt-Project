@extends('layouts.main')

@section('content')

    @if( session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mt-5 mb-5">
        <br><br>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div id="signin" class="jumbotron">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Email">
                            </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Password">
                            </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="checkbox">
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                            <input class="form-check-input ml-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            @if (Route::has('password.request'))
                                <div class="float-right for_get_pass">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </div>

                        <div class="mt-5 mb-0">
                            <button type="Submit" class="btn btn-dark btn-lg btn-block">{{ __('Login') }}</button>
                        </div>
                    </form>
                    <br>
                </div>
                <br>
            </div>
            <br>
        </div>
        <br>
    </div>
    <br>

@endsection
