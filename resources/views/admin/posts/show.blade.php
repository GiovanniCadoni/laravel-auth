@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="card col-8">
      <div class="card-body">
        <h5 class="card-title fs-4 fw-bold mb-2">{{ $post->titolo }}</h5>
        <h6 class="card-subtitle mb-4 text-muted">({{ $post->slug }})</h6>
        <p class="card-text fw-bold mb-0">
          Contenuto:
        </p>
        <p class="card-text">
          {{ $post->contenuto }}
        </p>
      </div>
  </div>
  </div>
</div>
@endsection