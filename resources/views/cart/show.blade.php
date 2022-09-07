@extends('layouts.main')
@section('title', 'Cart Page')
@section('content')

    <div class="container mb-5">
        <h3 class="ml-3">My Cart</h3>
        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row my-cart">
            @if($cart)
                <div class="col-md-8">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($cart->items as $product)
                            <tr>
                                <th scope="row"></th>
                                <td><img src="{{ url('uploads/products/', $product['image']) }}" class="img-left" width="100" height="50" text="Thumbnail" alt=""></td>
                                <td>{{( $product['name'] )}}</td>
                                <td>€{{( $product['price'] )}}</td>
                                <td>
                                    <form action="{{ route('product.remove', $product['id']) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="href btn btn-danger btn-ms confirmDelete" name="Asset"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-header text-center bg-default">
                                Checkout
                            </h3>
                            <div class="card-text text-center my-3">
                                <p>
                                    Total Amount is : € {{ $cart->totalPrice }}
                                </p>
                                <p>
                                    Total Quantity is : {{ $cart->totalQty }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('cart.checkout', $cart->totalPrice) }}" class="btn btn-dark btn-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @else
        <P class="text_no_assets mt-3 ml-4">There are no Assets in the Cart</P>
    @endif
    </div>

@endsection
