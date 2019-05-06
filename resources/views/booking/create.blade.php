@extends('master')

@section('content')
<div.class="row">
   <div.class="col-md-12">
      <br  />
      <h3 align="="center">add data </h3>
      <br />
      <form method="post" action="{{url('booking')}}">
  </div>
</div>

@endsection


@extends('master')

@section('content")
<div class="row">

<div class="col-md-12">
<br />
<h3 aling="center">Add Data</h3>
<br />
<form method="post" action="{{url('student')}}">
<div class="form-group">

<input type="text" name="last_name" class="
form-control" placeholder "Enter Last Name" />

<input type="text" name="first_name" class "
form-control" placeholder "Enter First Name" />
</div>
<div class="form-group">

<input type="submit" class="btn btn-primary"/>

</div>

</form>

</div>
</div>
@endsection