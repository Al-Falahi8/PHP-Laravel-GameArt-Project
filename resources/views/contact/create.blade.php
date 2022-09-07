@extends('layouts.main')
@section('title', 'Contact')
@section('content')

    <div class="container my-5">
        <br><br>
        <section class="contact-section dark-grey-text mb-5">
        
        <style>
            .contact-section .form .btn-floating {
            left: 3px;
            }
        </style>

        

            @if( session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="card">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="card-body form">
                                <h3 class="font-weight-bold dark-grey-text mt-4"><i class="fas fa-envelope pr-2 mr-1"></i>Write to us:</h3>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-subject" class="form-control" name="subject" value="{{ old('subject') }}">
                                            @error('subject')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="form-contact-subject">Your Subject</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-name" class="form-control" name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="form-contact-name">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form-contact-email" class="form-control" name="email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="form-contact-email">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="md-form form-md">
                                            <textarea type="text" id="form-contact-message" class="form-control" name="message" value="{{ old('message') }}"></textarea>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="form-contact-message"><span>Write your message here...</span></label>
                                        </div>
                                    </div>

                                    <div class="md-form form-lg">
                                        <button class="btn-floating btn-lg btn-dark"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>

                        <div class="col-lg-4">

                            <div class="card-body contact text-center h-100 white-text">

                                <h3 class="font-weight-bold my-4 pb-2">Contact information</h3>
                                <ul class="text-lg-left list-unstyled ml-5">
                                    <li>
                                        <p>
                                            <i class="fas fa-map-marker-alt pr-2"></i>
                                            Mollardgasse, 1060<br> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wien, Österreich
                                        </p>
                                    </li>

                                    <li>
                                        <p>
                                            <i class="fas fa-phone pr-2"></i>
                                            068 120 215 259
                                        </p>
                                    </li>

                                    <li>
                                        <p>
                                            <i class="fas fa-envelope pr-2"></i>
                                            mostafa_alfalahi@yahoo.com
                                        </p>
                                    </li>
                                </ul>
                                <hr class="hr-light my-4">
                                <ul class="list-inline text-center list-unstyled">
                                    <li class="list-inline-item">
                                        <a href="#" class="p-2 fa-lg tw-ic">
                                            <i class="fab fa-twitter"></i> 
                                        </a>
                                    </li>
                                    |
                                    <li class="list-inline-item">
                                        <a href="#" class="p-2 fa-lg li-ic">
                                            <i class="fab fa-facebook"> </i>
                                        </a>
                                    </li>
                                    |
                                    <li class="list-inline-item">
                                        <a href="#" class="p-2 fa-lg ins-ic">
                                            <i class="fab fa-instagram"> </i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <br><br>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                <br>
    </section>
    <br>
    </div>

@endsection