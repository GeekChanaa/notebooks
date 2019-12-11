@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/notebooks/update')}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$notebook->id}}">
  <div class="">
    <span>title</span>
    <input type="text" name="title" value="{{$notebook->title}}">
  </div>
  <div class="">
    <span></span>
    <select type="text" name="user_id">
      @foreach($list_users as $user)
      <option @if($notebook->user_id == $user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="">
    <span>visibility</span>
    <input type="number" name="visibility" value="{{$notebook->visibility}}">
  </div>
  <div class="">
    <button type="submit" class="btn btn-primary" name="button">Create</button>
  </div>
</form>


@endsection
