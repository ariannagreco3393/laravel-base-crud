@extends('layouts.app')

@section('content')



<div class="container">
  <div class="heading d-flex justify-content-between align-items-center">
    <h1 class="p-5">Comics</h1>
    <div>
      <a class="btn btn-primary d-block" href="{{route('comics.create')}}">Create Game</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>thumb</th>
        <th>title</th>
        <th>description</th>
        <th>cover image</th>
        <th>Actions</th>
      </tr>
    </thead>
  </table>

</div>


@endsection