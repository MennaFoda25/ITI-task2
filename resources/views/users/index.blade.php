@extends('layouts.app')
@section('title' , 'Users Table')
@section('content')
@include('includes.navbar')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td >{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td><button > <a href="{{route('users.edit',['id'=>$user['id']])}}" class="btn btn-primary">Edit</a> </button></td>
      <td><button > <a href="btn btn-danger">Delete</a> </button></td>
    </tr>
    @endforeach
  </tbody>
@endsection
</table>