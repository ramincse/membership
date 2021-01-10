@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ url('users') }}">Users</a></li>
                <li class="list-group-item"><a href="{{ route('role.index') }}">Role</a></li>
                <li class="list-group-item"><a href="">Add new role</a></li>
                <li class="list-group-item"><a href="">Settings</a></li>
                <li class="list-group-item"><a href="">SEO</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
