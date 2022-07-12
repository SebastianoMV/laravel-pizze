@extends('layouts.admin')

@section('title', "Inserisci ingrediente")

@section('content')

    <h1>Inserisci nuovo ingrediente</h1>

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

    <form id="ingredientCreateForm" action="{{route('admin.ingredients.store')}}" method="POST">
        @csrf

        {{-- Nome --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{old('name')}}"
            placeholder="Inserire nome">
        </div>

        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <p id="error-name" class="text-danger"></p>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
