@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/countries/add')}}" method="post">
  @csrf
  <div class="">
    <span>name</span>
    <input type="text" name="name" value="">
  </div>
  <div class="">
    <span>iso3</span>
    <input type="text" name="iso3" value="">
  </div>
  <div class="">
    <span>iso2</span>
    <input type="text" name="iso2" value="">
  </div>
  <div class="">
    <span>phonecode</span>
    <input type="text" name="phonecode" value="">
  </div>
  <div class="">
    <span>capital</span>
    <input type="text" name="capital" value="">
  </div>
  <div class="">
    <span>currency</span>
    <input type="text" name="currency" value="">
  </div>
  <button type="submit" class="btn btn-primary" name="button">Create</button>
</form>



@endsection
