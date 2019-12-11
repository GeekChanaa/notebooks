@extends('layouts.dashboard')



@section('content')

<div class="col-lg-8 offset-lg-2">
  <a class="btn btn-primary" href="{{url('/dashboard/countries')}}">Countries</a>
  <a class="btn btn-primary" href="{{url('/dashboard/countries/create')}}">Create country</a>
</div>
<div class="col-lg-8 offset-lg-2">
  <a class="btn btn-primary" href="{{url('/dashboard/users')}}">Users</a>
</div>
<div class="col-lg-8 offset-lg-2">
  <a class="btn btn-primary" href="{{url('/dashboard/notebooks')}}">Notebooks</a>
  <a class="btn btn-primary" href="{{url('/dashboard/notebooks/create')}}">Create notebook</a>
</div>


@endsection
