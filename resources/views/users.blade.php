@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}<a class="btn btn-sm btn-primary float-right" href="">All users</a></div>

                <div class="card-body">
                    <h2>All registered users</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Cell</th>
                                <th>Email</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_users as $users)                            
                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{ $users -> name }}</td>
                                <td>{{ $users -> uname }}</td>
                                <td>{{ $users -> cell }}</td>
                                <td>{{ $users -> email }}</td>
                                <td><img style="width: 50px; height: 50px; display: block;" src="media/photos/users/{{ $users -> photo }}" alt=""></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="">View</a>
                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="profile">
                        <img src="media/photos/users/{{ Auth::user() -> photo }}" alt="">
                        <h2 class="mt-3">{{ Auth::user() -> name }}</h2>
                        <table class="table table-striped">
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user() -> name }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ Auth::user() -> uname }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ Auth::user() -> email }}</td>
                            </tr>
                            <tr>
                                <td>Cell</td>
                                <td>{{ Auth::user() -> cell }}</td>
                            </tr>
                        </table>
                    </div> --}}
                </div>

                {{ $all_users -> links() }}

            </div>
        </div>
    </div>
</div>
@endsection
