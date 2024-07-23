@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="header-page d-flex justify-content-between align-items-center">
            <h2>{{ $project->title }}</h2>
            {{-- <div>
                <button class="btn btn-primary">Crea nuovo progetto</button>
            </div> --}}
        </div>
        <p>{{ $project->content }}</p>
        <a class="btn btn-light" href="{{ route('admin.projects.index') }}">Torna alla lista progetti</a>
    </div>
@endsection
