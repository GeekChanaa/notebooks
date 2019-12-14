@extends('layouts.dashboard')



@section('content')

<form class="" action="{{url('/dashboard/chapters/add')}}" method="post">
@csrf
<input type="hidden" name="section_id" value="{{$section_id}}">
<div class="">
  <span>Title</span>
  <input type="text" name="title">
</div>
<button type="submit" class="btn btn-primary">Add</button>
</form>


@endsection
