@extends('layouts.app')

@section('content')

<div class="container">
  <h2>Contact List</h2>
@if(session('msg'))
      <div class="alert alert-success">{{session('msg')}}</div>
      @endif
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($messages as $list)
    <tr>
      <td scope="row">{{$list['id']}}</td>
      <td scope="row">{{$list->name}}</td>
      <td scope="row">{{$list->email}}</td>
      <td scope="row">{{$list->subject}}</td>
      <td scope="row">{{$list->message}}</td>
      <td> <a href="/contact/edit/{{$list->id}}">Edit</a> | <a href="/contact/delete/{{$list->id}}">Delete</a> </td> 
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
   