@extends('layout.app')

@section('content')
    <div class="pl-3 mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.75 1.5a.25.25 0 00-.25.25v11.5c0 .138.112.25.25.25h8.5a.25.25 0 00.25-.25V6H9.75A1.75 1.75 0 018 4.25V1.5H3.75zm5.75.56v2.19c0 .138.112.25.25.25h2.19L9.5 2.06zM2 1.75C2 .784 2.784 0 3.75 0h5.086c.464 0 .909.184 1.237.513l3.414 3.414c.329.328.513.773.513 1.237v8.086A1.75 1.75 0 0112.25 15h-8.5A1.75 1.75 0 012 13.25V1.75z"></path></svg>
        <span>Untitled - Notepad</span>
    </div>

    <nav class="nav">
        <a class="nav-link active" href="#">File</a>
        <a class="nav-link disabled" href="#">Edit</a>
        <a class="nav-link disabled" href="#">Format</a>
        <a class="nav-link disabled" href="#">View</a>
        <a class="nav-link disabled" href="#">Help</a>
    </nav>

    <form class="pl-3" action="/notes" method="POST">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text"
                class="form-control"
                id="formGroupExampleInput"
                name="title"
                value="{{ old('title') }}"
                placeholder="Give a title">
            @if ($errors->has('title'))
                <p class="text-danger mt-2">{{ $errors->first('title')}}</p>
            @endif
        </div>

        <div class="form-group">
            <textarea class="form-control" style="height: 730px"
                    name="body"
                    rows="3"
                    placeholder="Write your note">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
                <p class="text-danger mt-2">{{ $errors->first('body')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Save:Note</button>
    </form>
@endsection
