@extends('layouts.dashboard')


@section('content')

<div class="">
  <span>name</span>
  <span>{{$country->name}}</span>
</div>
<div class="">
  <span>iso3</span>
  <span>{{$country->iso3}}</span>
</div>
<div class="">
  <span>iso2</span>
  <span>{{$country->iso2}}</span>
</div>
<div class="">
  <span>phonecode</span>
  <span>{{$country->phonecode}}</span>
</div>
<div class="">
  <span>capital</span>
  <span>{{$country->capital}}</span>
</div>
<div class="">
  <span>currency</span>
  <span>{{$country->currency}}</span>
</div>

@endsection
