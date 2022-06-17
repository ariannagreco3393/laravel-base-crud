@extends('layouts.app')

@section('content')



<div class="container">
    <div class="heading d-flex justify-content-between align-items-center">
        <h1 class="p-5">Comics</h1>
        <div>
            <a class="btn btn-primary d-block" href="{{route('comics.create')}}">Create comic</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>thumb</th>
                <th>price</th>
                <th>series</th>
                <th>sale date</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>

            @forelse($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td><img width="50" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">View</a>
                    <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>Nothing here!</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>


@endsection