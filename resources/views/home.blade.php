@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <h3><center>WELCOME</center> </h3><br>
            <div class="panel panel-default">
               
                <div class="panel-heading">Dashboard</div>
                <br>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="form-group">
                            <label for="" class="col-md-4 control-label">Enter Country Name</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" required>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
