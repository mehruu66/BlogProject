@extends('layouts.master')
@section('title', 'Edit User')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Users
            <a href="{{ url('admin/users') .$users->id }}" class="btn btn-danger">Back</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="">Full Name</label>
                <p class="form-control">{{ $users->name }}</p>
            </div>
            <div class="mb-3">
                <label for="">Email Id</label>
                <p class="form-control">{{ $users->email }}</p>
            </div>
            <div class="mb-3">
                <label for="">Created At</label>
                <p class="form-control">{{ $users->created_at->format('d/m/y') }}</p>
            </div>
            <form action="{{ url('admin/update-user/' .$users->id)}}" method="POST">
                @csrf
                @method('PUT')
            <div class="mb-3">
                <label for="">Role As</label>
                <select name="usertype" class="form-control">
                    <option value="1" {{$users->usertype == 1 ? 'selected': '' }}>Admin</option>
                    <option value="0" {{$users->usertype == 0 ? 'selected': '' }}>User</option>
                    <option value="2" {{$users->usertype == 2 ? 'selected': '' }}>Blogger</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update User Role</button>
            </div>
           </form>
        </div>
    </div>
</div>
@endsection
