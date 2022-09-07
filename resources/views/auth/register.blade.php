@extends('layouts.main')

@section('content')

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 coll-md-3">
                    <div id="signup" class="jumbotron">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="form-group">
                                <label for="first_name">{{ __('First Name') }}</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                    <input type="First" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus id="first_name" placeholder="First Name" required>
                                
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="last_name">{{ __('Last Name') }}</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                                    <input type="Last" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus id="last_name" placeholder="Last Name" required>
                                
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Email@Example.at" minlength="8 chareckters" required>
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-lock"></i></span>
                                    <input type="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Password" minlength="8 chareckters" required>
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-lock"></i></span>
                                    <input type="Password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password-confirm" placeholder="Password" minlength="8 chareckters" required>
                                    

                                </div>
                            </div>

                            <button type="Submit" class="btn btn-dark btn-lg btn-block">{{ __('Register') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
@endsection
