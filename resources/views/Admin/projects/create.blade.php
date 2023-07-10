@extends('Admin.layout.base')

@section('contents ')
    <h1>Add new Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">

            <div class="invalid-feedback">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
                value="{{ old('author') }}">
            <div class="invalid-feedback">
                @error('author')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="creation_date" class="form-label">Creation Date</label>
            <input type="date" class="form-control @error('creation_date') is-invalid @enderror" id="creation_date"
                name="creation_date" value="{{ old('creation_date') }}">
            <div class="invalid-feedback">
                @error('creation_date')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="last_update" class="form-label">Last Update</label>
            <input type="date" class="form-control @error('last_update') is-invalid @enderror" id="last_update"
                name="last_update" value="{{ old('last_update') }}">
            <div class="invalid-feedback">
                @error('last_update')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="collaborators" class="form-label">Collaborators</label>
            <input type="text" class="form-control @error('collaborators') is-invalid @enderror" id="collaborators"
                name="collaborators" value="{{ old('collaborators') }}">
            <div class="invalid-feedback">
                @error('collaborators')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" class="form-control @error('description') is-invalid @enderror" id="description"
                name="description" value="{{ old('description') }}">
            <div class="invalid-feedback">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>


        <div class="mb-3">
            <label for="languages" class="form-label">Languages</label>
            <textarea class="form-control @error('languages') is-invalid @enderror" id="languages" rows="3" name="languages"
                value="{{ old('languages') }}"></textarea>
            <div class="invalid-feedback">
                @error('languages')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="link_github" class="form-label">Link Github</label>
            <textarea class="form-control @error('link_github') is-invalid @enderror" id="link_github" rows="3"
                name="link_github" value="{{ old('link_github') }}"></textarea>
            <div class="invalid-feedback">
                @error('link_github')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <button class="btn btn-primary">Crea</button>
    </form>
@endsection
