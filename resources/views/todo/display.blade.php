
@extends('layout.app')
@section('body')
<br>

<div class="col-lg-4 col-lg-offset-4">
	
</div>

<div class="col-lg-4 col-lg-offset-4">
	<br>
	<a href="todo/create" class="btn btn-info" style="float: right">Add New</a>
	<center><h1>Todo Lists</h1></center>

	<ul class="list-group">
		@foreach($todos as $todo)
		<li class="list-group-item ">
           {{$todo->email}}
         </li>
		@endforeach
  
  
</ul>
	</div>
@endsection