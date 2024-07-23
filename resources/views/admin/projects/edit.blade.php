@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="header-page d-flex justify-content-between align-items-center mb-4">
            <h2>Aggiorna progetto</h2>
        </div>
        <a class="btn btn-light" href="{{ route('admin.projects.index') }}">Torna alla lista progetti</a>

        @include('shared.errors')

        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="project-title" class="form-label">Titolo progetto</label>
                <input type="text" class="form-control" id="project-title" name="title"
                    value="{{ old('title', $project->title) }}">
            </div>
            <div class="mb-3">
                <label for="project-content" class="form-label">Contenuto del progetto</label>
                <textarea class="form-control" id="project-content" rows="5" name="content">{{ old('content', $project->content) }}</textarea>
            </div>
            <button class="btn btn-primary">Aggiorna progetto</button>
        </form>
    </div>
@endsection
