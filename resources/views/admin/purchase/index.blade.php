@extends('layouts.dashboard')

@section('content')

<div class="container">
    @if( session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    <h3 class="mt-3 mb-3">Your purchases</h3>
        <div class="row">
            @foreach ($carts as $cart)
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Download</th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse ($cart->items as $item)
                    <tr>
                        <th scope="row"></th>
                        <td>{{( $item['name'] )}}</td>
                        <td>€{{( $item['price'] )}}</td>
                        <td>{{( $item['qty'] )}}</td>
                        <td> Paid </td>
                        <td>
                            <a href="uploads/products/{{$item['image']}}" download="{{$item['image']}}" class="btn btn-success"><i class="fas fa-download"></i></a>
                        </td>
                    </tr>
                    @empty
                        <p>No purchases</p>
                    @endforelse
                </tbody>
            </table>
            <p class="badge badge-pill badge-dark bm-3 p-3 text-white">Total Price : € {{ $cart->totalPrice}}</p>
            @endforeach
        </div>
    </div>

@endsection  