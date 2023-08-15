@extends('layouts.master')
@section('title', 'View Post')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Posts</h4>
            <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Posts</a>
        </div>
           <div class="card-body">
             @if(session('message'))
             <div class="alert alert-success">{{session('message')}}</div>
             @endif
        <div class="table-responsive">
           <table  id="myDatatable" class="table table-bordered">
            <thead>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Post Name</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                
            </thead>
            <tbody>
                @foreach($posts as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category->name ?? 'N/A'}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->status == '1' ? 'hidden': 'shown'}}</td>
                    <td>
                        <a href="{{url('admin/edit-post/' .$item->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('admin/delete-post/' .$item->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
         </table>
     </div>
    </div>
     </div>
</div>
@endsection