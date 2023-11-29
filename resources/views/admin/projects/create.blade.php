@extends('layouts.admin')

@section('content')

    <h1>Nome Progetto:</h1>


    {{-- $errors->any() restituisce true se almeno un errore è presente nel form --}}
    {{-- $errors->all() restituisce tutti gli errori che sono all'interno del nostro array --}}
    @if($errors->any())
    <div class="alert alert-danger col-6" role="alert">
        Devi riempire i Campi
    </div>
    @endif

    <div class="row">
        <div class="col-6">
            <form  action="{{route('admin.projects.store')}}" method="POST">
            @csrf

            <div class="my-2">
                <label for="title" class="form-label">Nome Progetto</label>
                <input
                        type="text"
                        class="form-control
                        @error('title')
                        is-invalid
                        @enderror"
                        id="title"
                        name="title"
                        value="{{old('title')}}">

                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="my-2">
                <label for="start_date" class="form-label">Data di Inizio</label>
                <input
                        type="date"
                        class="form-control
                        @error('start_date')
                        is-invalid
                        @enderror"
                        id="start_date"
                        name="start_date"
                        value="{{old('start_date')}}">

                @error('start_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="my-2">
                <label for="end_date" class="form-label">Data di Fine</label>
                <input
                        type="date"
                        class="form-control
                        @error('end_date')
                        is-invalid
                        @enderror"
                        id="end_date"
                        name="end_date"
                        value="{{old('end_date')}}">

                @error('ed_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="my-2">
                <label for="description" class="form-label">Descrizione</label>
                <textarea
                        rows="4" cols="50"
                        class="form-control
                        @error('description')
                        is-invalid
                        @enderror"
                        id="description"
                        name="description"
                        value="{{old('description')}}"></textarea>

                @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="my-2">
                <label for="url" class="form-label">Link/URL</label>
                <input
                        type="text"
                        class="form-control
                        @error('url')
                        is-invalid
                        @enderror"
                        id="url"
                        name="url"
                        value="{{old('url')}}">

                @error('url')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Invio</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="{{route('admin.projects.index')}}" class="btn btn-dark my-1">Torna alla Pagina precedente</a>

            </form>
        </div>
    </div>


@endsection
