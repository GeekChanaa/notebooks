@extends('layouts.dashboard')


@section('content')
<div class="">
  <span>title</span>
  <span>{{$chapter->title}}</span>
</div>
<div class="">
  <span>section</span>
  <span>{{$chapter->section_id}}</span>
</div>
@endsection
