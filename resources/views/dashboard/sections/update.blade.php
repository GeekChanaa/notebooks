@extends('layouts.dashboard')



@section('content')
<form class="" action="{{url('/dashboard/sections/update')}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$section->id}}">
<div class="">
  <span>Title</span>
  <input type="text" name="title" value="{{$section->title}}">
</div>
<div class="">
  <button class="btn btn-primary" type="submit">Update</button>
</div>
</form>




@endsection
