@extends('layouts.admin')

@section('title', "Modifica ingrediente $ingredient->name")

@section('content')

    <h1>Modifica ingrediente {{$ingredient->name}}</h1>

    @if ($errors->any())

        <div class="alert alert-danger" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>

        </div>
    @endif

    <form id="ingredientEditForm" action="{{route('admin.ingredients.update', $ingredient)}}" method="POST" >
        @csrf
        @method('PUT')

        {{-- Nome --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{old('name', $ingredient->name)}}"
            placeholder="Inserire nome">
        </div>

        @error('nome')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <p id="error-name" class="text-danger"></p>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a onclick="return confirm('Sei sicuro di voler annullare tutte le modifiche?')" href="{{route('admin.ingredients.index')}}" class="btn btn-danger">Torna alla pagina principale</a>
    </form>



@endsection
