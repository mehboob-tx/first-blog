@extends('admin-frontend.layout')
@section('title')
<title>search for</title>
@stop
@section('content')

<h1>Search Company by Name</h1>


<form action="{{ url('show')}} " method="post">
      @csrf
      @method('PUT')
      <div class="row">
      <div class="col-lg-12">
         <div class="from-group">
            <strong>Company Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
         </div>
      </div>
      </div>
      <br>
      <center>
         <button type="Submit" class="btn btn-info">Submit</button>
      </center>

      
    </form>
    @stop