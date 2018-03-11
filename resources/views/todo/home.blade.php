
@extends('layout.app')
@section('body')
<br>

<div class="col-lg-4 col-lg-offset-4">
	
</div>

<div class="col-lg-4 col-lg-offset-4">
	<br>
    <br>
	<center><h3>LOGIN  NOW</h3> </center>

	<form class="form-horizontal" action="/todo" method="post">
		{{csrf_field()}}
  <fieldset>
    
   

    <div class="form-group"><br>
      <label for="exampleInputEmail1">Username</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
    
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-info">Login</button>
    <a href="todo/create" class="btn btn-info" style="float: right">New User </a>
  </fieldset>
</form>
	</div>
@endsection