@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>Add new user</h2>
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="" id="" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{ $role -> id }}">{{ $role -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Add new user</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
