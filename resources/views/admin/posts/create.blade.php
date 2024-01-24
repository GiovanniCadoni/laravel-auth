@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <p class="text-center fw-bold fs-4">
            Aggiungi un nuovo post:
        </p>
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="titolo" name="titolo"
                            value="{{ old('titolo') }}">
                    </div>
                    <div class="mb-3">
                        <label for="contenuto" class="form-label">Contenuto</label>
                        <textarea class="form-control" id="contenuto" rows="3" name="contenuto">{{ old('contenuto') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection
