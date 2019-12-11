@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/notebooks/add')}}" method="post">
@csrf
  <div class="">
    <span>title</span>
    <input type="text" name="title" value="">
  </div>
  <div class="">
    <span></span>
    <select type="text" name="user_id">
      @foreach($list_users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="">
    <span>visibility</span>
    <input type="number" name="visibility" value="">
  </div>
  <div class="">
    <button type="submit" class="btn btn-primary" name="button">Create</button>
  </div>
</form>


@endsection
