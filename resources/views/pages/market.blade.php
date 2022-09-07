@extends('layouts.main')
@section('title', 'Market')
@section('content')

    <div class="container my-5 my-container">
        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            @foreach ($allproducts as $product)
            <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img src="{{ url('uploads/products/', $product->image) }}"alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $product->name }}</h5>
                        <p class="card-text ">
                            {{ $product->description }}
                        </p>
                        <div class="card__info">
                            <div class="card__price">
                                <p><strong>Price: €&nbsp;</strong>{{ $product->price }}</p>
                            </div>
                            <div>
                                <a href="{{ url('/admin/product.viewproduct', $product->id)}}" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-cart-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="card-com-created">
                            <p class="mb-3">Comments: {{ $product->discussions->count() }}</p>
                            <p class="mb-3">{{ $product->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $allproducts->links() }}
    </div>


    


@endsection
