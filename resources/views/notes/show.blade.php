@extends('layout.app')

@section('content')
    <h1 class="text-center mb-5">Note {{ $note->id }}</h1>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $note->title }}</h5>
            <p class="card-text">{{ $note->body }}</p>
            <a href="/notes/{{ $note->id }}/edit" class="card-link">Edit:Note</a>
        </div>
    </div>
    <a href="/notes" class="card-link">Back to Notes</a>
@endsection
