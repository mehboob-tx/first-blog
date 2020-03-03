@extends('admin-frontend.layout')
@section('title')
<title>Home Page</title>
@stop
@section('content')

<table class="table table-boardered">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>phone</td>
            <td>Employe</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->employe }} </td>
         </tr>
         @endforeach
      </table>
      <br>
      <br>

      <a href="{{ url('create') }}">
    <button type="button" class="btn btn-primary">create</button>
    </a>
    <br>
    <br>
    <a href="{{ url('search') }}">
    <button type="button" class="btn btn-info">Search for</button>
    </a>

    
@stop