@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/countries/update')}}" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$country->id}}">
  <div class="">
    <span>name</span>
    <input type="text" name="name" value="{{$country->name}}">
  </div>
  <div class="">
    <span>iso3</span>
    <input type="text" name="iso3" value="{{$country->iso3}}">
  </div>
  <div class="">
    <span>iso2</span>
    <input type="text" name="iso2" value="{{$country->iso2}}">
  </div>
  <div class="">
    <span>phonecode</span>
    <input type="text" name="phonecode" value="{{$country->phonecode}}">
  </div>
  <div class="">
    <span>capital</span>
    <input type="text" name="capital" value="{{$country->capital}}">
  </div>
  <div class="">
    <span>currency</span>
    <input type="text" name="currency" value="{{$country->currency}}">
  </div>
  <button type="submit" class="btn btn-primary" name="button">Update</button>
</form>



@endsection
