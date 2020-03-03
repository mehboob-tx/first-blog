@extends('admin-frontend.layout')
@section('title')
<title>Home Page</title>
@stop
@section('content')
	<form action="{{ url('store') }}" method="post">
		@csrf
		@method('PUT')
		<div class="row">
		<div class="col-lg-12">
			<div class="from-group">
				<strong>Company Name:</strong>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
		</div>

		<div class="col-lg-12">
			<div class="from-group">
				<strong>Address</strong>
				<textarea  name="address" class="form-control" placeholder="Address"></textarea>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="from-group">
				<strong>Phone:</strong>
				<input type="text" name="phone" class="form-control" placeholder="phone">
			</div>
		</div>
		<div class="col-lg-12">
			<div class="from-group">
				<strong>Total Employee</strong>
				<input type="text" name="employe" class="form-control" placeholder="Total Numbers of Employee ">
			</div>
		</div>
	<br>
		<div class="col-lg-12">
			<button type="Submit" class="btn btn-primary">Submit</button>
		</div>
		</div>
	</form>
	<br>
	<br>
	<a href="{{ url('company') }}">
    <button type="button" class="btn btn-info">Show</button>
    </a>

    

	@stop
