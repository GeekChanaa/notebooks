@extends('layouts.dashboard')



@section('content')

<table class="col-lg-8 offset-lg-2 table table-dark">
  <th scipe="col">id</th>
  <th scipe="col">name</th>
  <th scipe="col">email</th>
  <th scipe="col">phone</th>
  <th scipe="col">country_id</th>
  <th scipe="col">Actions</th>
  @foreach($list_users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->country_id}}</td>
      <td>
        <a class="btn btn-danger" href="{{url('/dashboard/users/show/'.$user->id.'')}}">Show</a>
        <a class="btn btn-danger" href="{{url('/dashboard/users/update/'.$user->id.'')}}">Update</a>
        <form class="" action="{{url('/dashboard/users/delete')}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <input type="hidden" name="id" value="{{$user->id}}">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>


@endsection
