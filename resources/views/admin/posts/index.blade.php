@extends('layouts.admin')

@section('content')
    <div class="container pt-3">
        <h2 class="fw-bold">
            Lista dei Post
        </h2>
        <table class="table table-striped p-5">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->titolo }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection