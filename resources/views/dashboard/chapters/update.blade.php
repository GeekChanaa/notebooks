@extends('layouts.dashboard')



@section('content')

<form class="" action="{{url('/dashboard/chapters/update')}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$chapter->id}}">
<div class="">
  <span>Title</span>
  <input type="text" name="title" value="{{$chapter->title}}">
</div>
<button type="submit" class="btn btn-primary">Add</button>
</form>


@endsection
