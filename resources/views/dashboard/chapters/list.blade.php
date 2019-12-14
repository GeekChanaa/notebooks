@extends('layouts.dashboard')



@section('content')
<a class="btn btn-dark" href="{{url('/dashboard/section/'.$section_id.'/chapters/create')}}">Create</a>
<table class="col-lg-8 offset-lg-2 table table-dark">
  <th scope="col">Id</th>
  <th scope="col">Section</th>
  <th scope="col">Title</th>
  <th scope="col">Actions</th>
  @foreach($list_chapters as $chapter)
  <tr>
    <td>{{$chapter->id}}</td>
    <td>{{$chapter->section_id}}</td>
    <td>{{$chapter->title}}</td>
    <td>
      <form class="" action="{{url('/dashboard/chapters/delete')}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="hidden" name="id" value="{{$chapter->id}}">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <a class="btn btn-danger" href="{{url('/dashboard/section/'.$section_id.'/chapters/show/'.$chapter->id.'')}}">Show</a>
      <a class="btn btn-danger" href="{{url('/dashboard/section/'.$section_id.'/chapters/update/'.$chapter->id.'')}}">Update</a>
    </td>
  </tr>

  @endforeach
</table>



@endsection
