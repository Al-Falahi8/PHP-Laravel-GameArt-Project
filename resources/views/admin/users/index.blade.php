@extends('layouts.dashboard')
@section('title', 'Users Table')
@section('content')

        <div class="container mt-5">
        <h1 class="mb-3 text-dark">Users</h1>
        @if( session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="table col-12 text-left">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                    </thead>

                    <tbody>
                        <div class="row">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img src="../public/uploads/avatar/{{ $user->avatar }}" style="width: 32px; height: 32px; bottom: 1px; left:10px; border-radius:50%;"></td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ implode( ' | ', $user->roles()->get()->pluck('name')->toArray() ) }}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success float-left"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger confirmDelete" name="User"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>

    @endsection