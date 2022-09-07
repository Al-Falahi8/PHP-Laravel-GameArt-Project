@extends('layouts.dashboard')
@section('title', 'Create Catagories')
@section('content')

    <div class="container mt-5">
        <h1 class="mb-3 ml-3 text-dark mb-5">Create Category</h1>
        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif

        
        
        <div class="card card-dark card-outline ml-3 col-7" style="border-color: #f26a2b;">
            <div class="card-body">
                <div class="e-profile">
                    <div class="row">
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                            <br>
                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"> Add New Category </h4>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content pt-3">
                    <div class="tab-pane active">
                        <form class="form" action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Catagory Name">
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-2">
                                                @foreach($errors->all() as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-md btn-dark" type="submit" value="save">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection