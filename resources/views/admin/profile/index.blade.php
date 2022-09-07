@extends('layouts.dashboard')
@section('title', 'Profile')

@section('style')
    <style>
        body{
            margin-top:20px;
            background:#f8f8f8
        }
    </style>
@endsection
@section('content')

    <div class="container col-8 mt-4">
        <h1 class="mb-3 text-dark">Profile</h1>
        @if( session()->has('success'))
            <div class="alert alert-success text-center col-11">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger text-center col-11">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        
        <div class="row">
            <div class="card card-dark card-outline col-4">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <form action="{{ route('updateAvatar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p><input type="file"  accept="image/*" name="avatar" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                            <p><label for="file" style="cursor: pointer;"><img class="profile-user-img img-fluid img-circle" id="output" src="/gameart/public/uploads/avatar/{{ $user->avatar }}" style="width: 120px; height: 120px;" alt="User profile picture"></label></p>
                            
                            <script>
                                var loadFile = event => {
                                    var image = document.getElementById('output');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                    </div>

                    <h3 class="profile-username text-center">{{ Auth::user()->first_name }}</h3>
                    <p class="text-muted text-center">{{ Auth::user()->last_name }}</p>
                    
                    <div class="row">
                        <div class="">
                            <span class="float-left text-muted ml-5 mr-3">
                                {{ implode( ' | ', $user->roles()->get()->pluck('name')->toArray() ) }}
                            </span>
                        
                            <div class="float-right text-muted ml-5 mr-2"><small>Joined on : {{ Auth::user()->created_at->format('d M Y') }}</small></div>
                        </div>
                    </div>

                    <hr>
                    <div class="list-group list-group-unbordered mb-3">
                        <b class="text-center">Comments:&nbsp; {{ Auth::user()->discussions->count() }} &nbsp;|&nbsp; Commented Assets:&nbsp; {{ Auth::user()->discussions->unique('product_id')->count() }} </b>
                    </div>
                    <hr>
                    <div class="mt-2">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-md btn-dark btn-block" type="submit">
                            <i class="fa fa-fw fa-camera"></i>
                            <span>Submit Photo</span>
                        </button>
                    </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

            
        
            <div class="card card-dark card-outline ml-3 col-7" style="border-color: #f26a2b;">
                <div class="card-body">
                    <div class="e-profile">
                    <div class="row">
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                <br>
                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"> Edit Your Profile</h4>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content pt-3">
                        <div class="tab-pane active">
                            <form class="form" action="{{ route('updateUserProfile') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="first_name" placeholder="First Name" value="{{ Auth::user()->first_name}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="{{ Auth::user()->last_name}}">
                                        </div>
                                    </div>
                                
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" value="{{ Auth::user()->email}}" placeholder="user@example.com">
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
        </div>
        </div>
    </div>

@endsection