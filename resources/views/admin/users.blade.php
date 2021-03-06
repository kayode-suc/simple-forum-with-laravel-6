@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Welcome Dashboard {{Auth::user()->name}}</h4>
                    <div class="row">
                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                            <div class="" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Admin<span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="/admin/home">Posts</a></li>
                                            <li class="dropdown-item"><a href="/admin/cats">Categories</a></li>
                                            <li class="dropdown-item"><a href="/admin/users">Users</a></li>
                                            <li class="dropdown-item"><a href="/admin/comments">Comments</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr class="thead-dark">
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Is_admin</th>
                            <th>Action</th>
                        </tr>
                        @foreach($user as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            @if($row->is_admin == 1)
                            <td>Admin</td>
                            @else
                            <td>User</td>
                            @endif 
                            <td>
                                <span class="row">
                                    <a href="" class="btn btn-primary">Add as Admin</a> &nbsp;
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" required name="delete_id" value="{{$row->id}}">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$user->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection