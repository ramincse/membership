@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>All Users</h2>
            <a class="btn btn-sm btn-primary" href="{{ route('user.create') }}">Add new user</a>
            <br>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> role -> name }}</td>
                        <td>
                            @if( json_decode($user -> role -> permission) > 0 )
                            @foreach( json_decode($user -> role -> permission) as $per )
                            {{ $per }} |
                            @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
