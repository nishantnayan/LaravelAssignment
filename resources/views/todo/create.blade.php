
@extends('layout.app')
@section('body')
<br>

<div class="col-lg-4 col-lg-offset-4">
	
</div>

<div class="col-lg-4 col-lg-offset-4">
	<br>
	<a href="/todo" class="btn btn-info" style="float: right">Back</a>
	<center><h3>USER INFORMATION</h3> </center>

	<form class="form-horizontal" action="/todo" method="post">
		{{csrf_field()}}
  <fieldset>
    
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="password" class="form-control" name="full_name" id="exampleInputPassword1" placeholder="">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
     <div class="form-group">
      <label for="exampleSelect1">Select Coutnry</label>
      <select class="form-control" name="country"id="exampleSelect1">
        <option value="IN">India</option>
        <option value="USA">USA</option>
        <option value="CAN">Canada</option>
        <option value="BR">Brazil</option>
        <option value="PAK">Pakistan</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
	</div>
@endsection