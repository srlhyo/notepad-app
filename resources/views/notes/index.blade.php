@extends('layout.app')

@section('content')
    <h1 class="text-center mb-5">My Notes</h1>
    <div class="row">
        @foreach ($notes as $note)
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $note->title }}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/notes/{{ $note->id }}" class="card-link">Visit:Note</a>
                            <form action="/notes/{{ $note->id}}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete {{ addslashes($note->title) }}?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
