@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="row justify-content-center">
        
        <div class="col-md-8">

                <div class="card">

                <div class="card-header bg-dark mb-5"><h4>Edit User: {{ $user->first_name }}</h4></div>
                        <div class="Card-body">
                            <form action="{{ route('admin.users.update', $user) }}" method="POST">

                                <div class="form-group row">
                                    <label for="first_name" class="col-md-2 col-form-label text-md-right">First Name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autofocus>

                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="last_name" class="col-md-2 col-form-label text-md-right">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                                    <div class="col-md-6">
                                        @foreach ($roles as $role)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                                <label>{{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                        <button type="submit" class="btn btn-dark btn-block">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
