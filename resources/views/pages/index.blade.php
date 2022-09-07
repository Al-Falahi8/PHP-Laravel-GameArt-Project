@extends('layouts.main')
@section('title', 'Home')
@section('content')

    <div id="mein-m" class="container col-8">

        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif

        <!-- 2D Game Assets section -->
        <section class="container mt-5 px-0">
            <div class="container-fluid row align-items-center">
                <div class="col-lg-6 image-element">
                    <div class="img-wrap">
                        <img src="{{asset('dist/img/background-2d.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 text-element text-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <div class="text-content">
                                <h2 class="title display-5">2D Game Assets</h2>
                                <div class="mbr-section-text">
                                    <p class="text display-7">
                                        In our 2D Section you can find the right 2D Backgrounds for your game,&nbsp;find what you're looking for and make your game look great.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mbr-section-btn pt-3 align-left">
                        @php
                            $categories = DB::table('categories')->where('id', 2)->get();
                        @endphp
                        @foreach ($categories as $category)
                            <a class="btn btn-md btn-dark" href="{{url('categories', $category->id)}}">Browse all 2D</a>
                        @endforeach
                    </div>
                </div>        
            </div>
        </section>

        <!-- 3D Game Assets section -->
        <section class="container-fluid mt-5 px-0">
            <div class="row align-items-center">
                <div class="col-lg-6 text-element text-center order-2 order-md-1">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <div class="text-content">
                                <h2 class="title display-5">3D Game Assets</h2>
                                <div class="mbr-section-text">
                                    <p class="text pt-3 align-left display-7">
                                        In our 3D Section you can find the right 3D Backgrounds for your game,&nbsp;find what you're looking for and make your game look great.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mbr-section-btn pt-3 align-left">
                        @php
                            $categories = DB::table('categories')->where('id', 3)->get();
                            @endphp
                        @foreach ($categories as $category)
                            <a class="btn btn-md btn-dark" href="{{url('categories', $category->id)}}">Browse all 3D</a>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-md-2">
                    <div class="img-wrap">
                        <img src="{{asset('dist/img/3D-background.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>         
        </section>

        <!-- GUI Game Assets -->
        <section class="container-fluid mt-5 px-0">
            <div class="row align-items-center">
                <div class="col-lg-6 image-element ">
                    <div class="img-wrap">
                        <img src="{{asset('dist/img/GUL.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 text-element text-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <div class="text-content">
                                <h2 class="title display-5">GUI Game Assets</h2>
                                <div class="mbr-section-text">
                                    <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-left display-7">
                                        In our GUI Section you can find the right GUI SET for your game,&nbsp;find what you're looking for and make your game look great.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mbr-section-btn pt-3 align-left">
                        @php
                            $categories = DB::table('categories')->where('id', 4)->get();
                        @endphp
                        @foreach ($categories as $category)
                            <a class="btn btn-md btn-dark display-4" href="{{url('categories', $category->id)}}">Browse all GUI</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Characters Assets section -->
        <section class="container-fluid mt-5 mb-5 px-0">
            <div class="row align-items-center">
                <div class="col-lg-6 text-element text-center order-2 order-md-1">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8">
                            <div class="text-content">
                                <h2 class="title display-5">2D-3D Character</h2>
                                <div class="mbr-section-text">
                                    <p class="text pt-3 align-left display-7">
                                        In our Character Section you can find the right 2D and 3D Characters for your game,&nbsp;find what you're looking for and make your game look great.
                                    </p>
                                </div>
                            </div>

                            <div class="mbr-section-btn pt-3 align-left">
                                @php
                                    $categories = DB::table('categories')->where('id', 1)->get();
                                @endphp
                                @foreach ($categories as $category)
                                    <a class="btn btn-md btn-dark display-4" href="{{url('categories', $category->id)}}">Browse all Characters</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-md-2">
                    <div class="img-wrap">
                        <img src="{{asset('dist/img/2D-Character.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>         
        </section>
    </div>

@endsection