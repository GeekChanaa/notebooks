@extends('layouts.dashboard')


@section('content')


<div class="">
  <span>name</span>
  <span>{{$user->name}}</span>
</div>

<div class="">
  <span>email</span>
  <span>{{$user->email}}</span>
</div>
<div class="">
  <span>phone</span>
  <span>{{$user->phone}}</span>
</div>
<div class="">
  <span>country</span>
  <span>{{$user->country_id}}</span>
</div>





@endsection
