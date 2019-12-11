@extends('layouts.dashboard')


@section('content')


<div class="bg-dark col-lg-8 offset-lg-2">
<table class="table table-dark">
  <th scope="col">id</th>
  <th scope="col">name</th>
  <th scope="col">iso3</th>
  <th scope="col">iso2</th>
  <th scope="col">phonecode</th>
  <th scope="col">capital</th>
  <th scope="col">currency</th>
  <th scope="col">Action</th>
  @foreach($list_countries as $country)
    <tr>
      <td>{{$country->id}}</td>
      <td>{{$country->name}}</td>
      <td>{{$country->iso3}}</td>
      <td>{{$country->iso2}}</td>
      <td>{{$country->phonecode}}</td>
      <td>{{$country->capital}}</td>
      <td>{{$country->currency}}</td>
      <td>
        <a class="btn btn-danger" href="{{url('/dashboard/countries/update/'.$country->id.'')}}">update</a>
        <a class="btn btn-danger" href="{{url('/dashboard/countries/show/'.$country->id.'')}}">show</a>
        <form class="" action="{{url('/dashboard/countries/delete')}}" method="post">
          @csrf {{method_field('DELETE')}}
          <input type="hidden" name="id" value="{{$country->id}}">
          <button type="submit" class="btn btn-danger" name="button">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
</table>
</div>


@endsection
