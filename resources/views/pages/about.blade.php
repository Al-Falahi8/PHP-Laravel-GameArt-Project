@extends('layouts.main')
@section('title', 'About Us')
@section('content')

    <div class="container">
        <div class="about-section">
            <div class="inner-container">
                <h1>About Us title come here</h1>
                <p>    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    incidunt doloremque impedit hic amet sed repellat nobis aliquid ipsam
                    Cumque voluptate accusantium aperiam quis laborum, quia facere totam dolorum ullam! Nemo.
                    incidunt doloremque impedit hic amet sed repellat nobis aliquid ipsam?
                </p>
            </div>
        </div>
        <div class="team-section">
            <h1>Our Team</h1>
            <span class="border"></span>
            <div class="ps">
                <a href="#ps1"><img src="{{ asset('dist/img/ps1.jpg')}}" alt=""></a>
                <a href="#ps2"><img src="{{ asset('dist/img/ps2.jpg')}}" alt=""></a>
                <a href="#ps3"><img src="{{ asset('dist/img/ps3.jpg')}}" alt=""></a>
            </div>

            <div class="section" id="ps1">
                <span class="name">Jana Harrishal</span>
                <span class="border"></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, delectus.
                    incidunt doloremque impedit hic amet sed repellat nobis aliquid ipsam
                </p>
            </div>

            <div class="section" id="ps2">
                <span class="name">John Doe</span>
                <span class="border"></span>
                <p>
                    incidunt doloremque impedit hic amet sed repellat nobis aliquid ipsam
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, delectus.
                </p>
            </div>

            <div class="section" id="ps3">
                <span class="name">Arnold Larson</span>
                <span class="border"></span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, delectus.
                    incidunt doloremque impedit hic amet sed repellat nobis aliquid ipsam
                </p>
            </div>
        </div>
    </div>

@endsection  