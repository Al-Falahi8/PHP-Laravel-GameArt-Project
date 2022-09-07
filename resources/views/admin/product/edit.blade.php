@extends('layouts.dashboard')
@section('title', 'Edit Assets')
@section('content')

<div class="container mt-5 mb-5">
    @if( session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

        <div class="card card-dark card-outline ml-3 col-7" style="border-color: #f26a2b;">
            <div class="card-body">
                <div class="e-profile">
                <div class="row">
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                            <br>
                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"> Edit Assets</h4>
                        </div>
                    </div>
                </div>

                <div class="tab-content pt-3">
                    <div class="tab-pane active">
                        <form class="form" action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Image</label>
                                    <span><input class="form-control" type="file" name="image">{{ $product->image }}</span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" type="text" name="price" value="{{ $product->price }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Category_id</label>
                                    <input class="form-control" type="text" name="category_id" value="{{ $product->category_id }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" type="text" name="description">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            </div>
                            </div>

                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-md btn-dark" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection