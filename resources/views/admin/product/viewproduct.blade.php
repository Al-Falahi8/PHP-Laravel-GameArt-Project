@extends('layouts.main')
@section('title', 'View Product')
@section('content')

    <div class="container mb-5">
        @if( session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">

            @foreach ($products as $product)
                
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="thumbnail">
                        <img src="{{ url('uploads/products/', $product->image) }}" width="100%" height="250px" text="Thumbnail" class="card-img">
                    </div>
                </div>

                <div class="col-lg-6 order-3 ml-5">
                    <div>
                        <h2><strong>{{ $product->name }}</strong></h2>
                    </div>
                    <hr>
                    <p>
                        {{ $product->description }}
                    </p>
                    <br>

                    <div class="row">
                        <div class="col-xs-6 text-left ml-2">
                            <h2 class="text-danger"><span> € </span> {{ $product->price }} </h2>
                        </div>
                        <div class="col-md-10 text-right">
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-dark shop-button ">Add to Cart</a>
                        </div>
                    </div>

                </div>

            @endforeach

        </div>
    

        <hr>
    
        <h3 class="mb-3">Comments: {{ $product->discussions->count() }}</h3>
        <div class="row">
            {{-- Comments List --}}
            <div class="comments ml-4 mr-4 col-6 text-left">
                @foreach ($product->discussions as $comment)
                    
                <li class="row">
                    <div class="col-md-12 p-3" style="border-radius: .3rem; border: 4px solid #333336; font-size: 13px; line-height: 18px; color: #7a8192; background: #f6f6f7;">
                        <img class="float-left" src="/project/public/uploads/avatar/{{ $comment->user->avatar }}" style="width: 40px; height: 40px; bottom: 1px; left:10px; border-radius:50%;" alt="User Image">
                        <p class="float-left"><small><a href="{{ route('userProfile', $comment->user->id )}}">{{ $comment->user->first_name }}</a></small></p>
                        <p class="float-right"><small>{{ $comment->created_at->format('d M Y') }}</small></p><br>
                        <span class="ml-2 justify-content">{{ $comment->body }}</span>
                    </div>
                </li>
                @endforeach
            </div>
            {{-- Comments List --}}
            

            {{-- Comments Form --}}
            <div class="card card-dark card-outline ml-4 col-5 text-right" style="border-color: #f26a2b;">
                <div class="card-body">
                    <div class="e-profile">
                        <div class="row">
                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                    <strong>Add Your Comment</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @guest
                            <div class="alert alert-danger">Please Login To Comment</div>
                        @else
                        <form action="{{ route('discussion.store', $product->id ) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="body">Comment</label>
                                <textarea name="body" class="form-control" cols="80" rows="4" placeholder="Enter Your Comment"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Add Comment</button>
                            </div>
                        </form>
                        @endguest
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Comments Form --}}
@endsection








































{{-- <body>
    @include('layouts.navbar')

        <div class="single_product">
            <div class="container" style=" background-color: #fff; padding: 11px;">
                <div class="row">
                    <div class="col-lg-2 order-lg-1 order-2">
                        <ul class="image_list">
                            <li data-image="{{asset('dist/img/bg1.jpg')}}"><img src="{{asset('dist/img/bg1.jpg')}}" alt=""></li>
                            <li data-image="{{asset('dist/img/bg2.jpg')}}"><img src="{{asset('dist/img/bg2.jpg')}}" alt=""></li>
                            <li data-image="{{asset('dist/img/bg3.jpg')}}"><img src="{{asset('dist/img/bg3.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="image_selected"><img src="{{asset('dist/img/bg1.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6 order-3">
                        <div class="product_description">

                            <div class="product_name">2D Background Assets</div>
                            <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                            <div> <span class="product_price">€ 12.00</span> <strike class="product_discount"> <span style='color:black'>€ 2.00<span> </strike> </div>
                            <div> <span class="product_saved">You Saved:</span> <span style='color:black'>€ 2.00<span> </div>
                            <hr class="singleline">
                            <div> <span class="product_info"> Description <span><br> <span class="product_info">Warranty: 6 months warranty<span><br> <span class="product_info"><span><br> <span class="product_info">7 Days easy return policy<span><br> <span class="product_info">In Stock: 25 units sold this week<span> </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="br-dashed">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-3"> <img src=""> </div>
                                                <div class="col-md-9 col-xs-9">
                                                    <div class="pr-info"> <span class="break-all"></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> </div>
                                </div>
                            </div>
                            <hr class="singleline">
                            <div class="order_info d-flex flex-row">
                                <form action="#">
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 13px;">
                                        <div class="quantity_buttons">
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer') --}}