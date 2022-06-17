@extends('layouts.app')

@section('content')
<h1>{{$comic->title}}</h1>
<div class="content">
  {{$comic->description}}
</div>
<div>{{$comic->price}}</div>
<div>{{$comic->series}}</div>
<div>{{$comic->sale_date}}</div>
<div>{{$comic->type}}</div>
@endsection