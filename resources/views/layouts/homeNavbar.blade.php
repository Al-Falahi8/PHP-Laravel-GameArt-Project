<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HomeNavbar</title>
</head>
<body>
    <!-- Hero Section -->
    <div class="p-5 bg-dark">
      <div class="container py-5">
        <h1 class="display-4 fw-bold text-white">Choose Your Assets</h1>
        <p class="col-md-8 fs-4 text-white">Find out more Assets that suits your Game</p>
        <p class="col-md-8 fs-4 text-white">See Our Collection in Our Shope.</p>
        <a href="{{ route('market')}}" class="btn btn-outline-light ml-3 btn-lg text-white" type="button">Shop</a>
      </div>
    </div>
    <!-- Hero Section End -->

    <!-- Navbar -->
    <div class="navbar-dark bg-dark mb-5">
        <nav class="container navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('home')}}"><img class="logo pb-2 m-0" src="{{ asset('dist/img/Artboard 2.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')}}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('market')}}">Shop <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @php
                            $categories = DB::table('categories')->get();
                        @endphp
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ url('categories', $category->id) }}">{{ ucwords($category->name) }}</a></li>
                        @endforeach
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pages.about')}}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.create')}}">CONTACT US</a>
                    </li>
                </ul>
                
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.show') }}">
                            <span class="fas fa-cart-arrow-down">
                            ({{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}) MY CART
                            </span>
                        </a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left: 50px;">
                            <img src="../public/uploads/avatar/{{ Auth::user()->avatar }}" style="width: 32px; height: 32px; position:absolute; bottom: 5px; left:10px; border-radius:50%;">
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>
                    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('manage-users')
                            <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
                            @endcan
                            <a class="dropdown-item" href="{{ route('Product') }}"><i class="fas fa-plus-square mr-3"></i>Add Asset</a>
                            <a class="dropdown-item" href="{{ route('userProfile') }}"><i class="fas fa-user mr-3"></i>Profile</a>
                            <a class="dropdown-item" href="{{ route('purchase.index') }}"><i class="fas fa-money-bill-alt mr-2"></i>Your Purchases</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off mr-3"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>