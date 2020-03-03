@extends('admin-frontend.layout')
@section('title')
<title>Home Page</title>
@stop
@section('content')

<table class="table table-boardered">
         <tr>
           <!--  <td>ID</td> -->
            <td>Name</td>
            <td>Address</td>
            <td>phone</td>
            <td>Employe</td>
         </tr>
          <tr>
            <!-- <td>{{ $company ?? ''->id }}</td> -->
            <td>{{ $company->name }}</td>
            <td>{{ $company->address }}</td>
            <td>{{ $company->phone }}</td>
            <td>{{ $company ->employe }} </td>
         </tr>
        
      </table>
      <br>
      <br>

      <a href="{{ url('create') }}">
    <button type="button" class="btn btn-primary">create</button>
    </a>

    
@stop