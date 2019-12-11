@extends('layouts.dashboard')



@section('content')
<div class="row">
<a class="btn btn-dark" href="{{url('/dashboard/notebook/'.$notebook_id.'/sections/create')}}">Create</a>
</div>
<table class="table table-dark col-lg-8 offset-lg-2">
  <th scope="col">id</th>
  <th scope="col">title</th>
  <th scope="col">notebook</th>
  <th scope="col">user</th>
  <th scope="col">Actions</th>
  @foreach($list_sections as $section)
    <tr>
      <td>{{$section->id}}</td>
      <td>{{$section->title}}</td>
      <td>{{$section->notebook_id}}</td>
      <td></td>
      <td>
        <a class="btn btn-primary" href="{{url('/dashboard/sections/show/'.$section->id.'')}}">Show</a>
        <form class="" action="{{url('/dashboard/sections/delete')}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <input type="hidden" name="id" value="{{$section->id}}">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a class="btn btn-danger" href="{{url('/dashboard/notebook/'.$notebook_id.'/sections/update/'.$section->id.'')}}">Update</a>
      </td>
    </tr>
  @endforeach
</table>



@endsection
