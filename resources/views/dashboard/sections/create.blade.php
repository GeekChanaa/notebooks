@extends('layouts.dashboard')



@section('content')
<form class="" action="{{url('/dashboard/sections/add')}}" method="post">
@csrf
<input type="hidden" name="notebook_id" value="{{$notebook_id}}">
<div class="">
  <span>Title</span>
  <input type="text" name="title">
</div>
<div class="">
  <button class="btn btn-primary" type="submit">Create</button>
</div>
</form>




@endsection
