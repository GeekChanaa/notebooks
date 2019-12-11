@extends('layouts.dashboard')


@section('content')



<table class="table table-dark col-lg-8 offset-lg-2">
  <th scope="col">id</th>
  <th scope="col">title</th>
  <th scope="col">user_id</th>
  <th scope="col">visibility</th>
  <th scope="col">Actions</th>
  @foreach($list_notebooks as $notebook)
  <tr>
    <td>{{$notebook->id}}</td>
    <td>{{$notebook->title}}</td>
    <td>{{$notebook->user_id}}</td>
    <td>{{$notebook->visibility}}</td>
    <td>
      <a class="btn btn-danger" href="{{url('/dashboard/notebooks/show/'.$notebook->id.'')}}">Show</a>
      <a class="btn btn-danger" href="{{url('/dashboard/notebooks/update/'.$notebook->id.'')}}">Update</a>
      <form class="" action="{{url('/dashboard/notebooks/delete')}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="hidden" name="id" value="{{$notebook->id}}">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <a class="btn btn-primary" href="{{url('/dashboard/notebook/'.$notebook->id.'/sections')}}">Sections</a>
    </td>
  </tr>
  @endforeach
</table>


@endsection
