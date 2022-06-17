@extends('layouts.app')

@section('content')
<div class="text-center bg-primary p-3">
    <h1 class=" text-light">Scopri i nostri fumetti</h1>
    <a class="btn btn-danger" href="{{route('comics.index')}}">Scopri di piu</a>
</div>
@endsection