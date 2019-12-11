@extends('layouts.dashboard')


@section('content')

<div class="">
  <span>title</span>
  <span>{{$notebook->title}}</span>
</div>
<div class="">
  <span>user_id</span>
  <span>{{$notebook->user_id}}</span>
</div>
<div class="">
  <span>visibility</span>
  <span>{{$notebook->visibility}}</span>
</div>


@endsection
