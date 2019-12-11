@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/users/update')}}" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$user->id}}">
  <div class="">
    <span>name</span>
    <input type="text" name="name" value="{{$user->name}}">
  </div>
  <div class="">
    <span>email</span>
    <input type="text" name="email" value="{{$user->email}}">
  </div>
  <div class="">
    <span>phone</span>
    <input type="text" name="phone" value="{{$user->phone}}">
  </div>
  <div class="">
    <span>country</span>
    <input type="text" name="country_id" value="{{$user->country_id}}">
  </div>

  <button type="submit" class="btn btn-primary" name="button">Update</button>
</form>



@endsection
