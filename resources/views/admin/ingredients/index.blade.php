@extends('layouts.admin')

@section('title', "Lista pizze")

@section('content')

    <h1>Lista pizze</h1>

    @if(session('delete_success'))
        <div class="alert alert-danger d-flex justify-content-between" role="danger">
            <p>{{session('delete_success')}}</p>
            <a href="{{route('admin.pizzas.index')}}" class="btn btn-danger">X</a>
        </div>
    @endif

    <div>
        <h2 class="mb-5">Lista pizze con determinato ingrediente</h2>

        @foreach ($ingredients as $ingredient)
            <h3>{{$category->name}}</h3>

            <ul>

                @forelse ($category->posts as $post)
                    <li> <a href="{{route('admin.posts.show', $post)}}"> {{$post->title}} </a> </li>
                @empty
                    <li> Non sono presenti post per questa categoria </li>
                @endforelse

            </ul>

        @endforeach

    </div>


@endsection

