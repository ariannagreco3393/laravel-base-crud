@extends('layouts.app')

@section('content')
<h1>{{$comic->title}}</h1>
<div class="content">
  {{$comic->description}}
</div>
@endsection