@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>Add new role</h2>
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Role Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Permission</label><br>
                            <input name="per[]" id="User" type="checkbox" value="User"><label for="User">User</label>
                            <input name="per[]" id="Role" type="checkbox" value="Role"><label for="Role">Role</label>
                            <input name="per[]" id="Settings" type="checkbox" value="Settings"><label for="Settings">Settings</label>
                            <input name="per[]" id="SEO" type="checkbox" value="SEO"><label for="SEO">SEO</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Add new role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
