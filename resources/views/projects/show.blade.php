@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header my-3">
            <a href="{{ route('projects.index') }}" class="btn btn-danger">Back to the Projects</a>
        </div>
        <h1>{{ $project->name }}</h1>
        <img src="{{ asset('storage/' . $project->image) }}" alt=" {{ $project->name }}">
        <ul>
            <li> {{ $project->description }}</li>
            <li> {{ $project->owner }}</li>
            <li> {{ $project->contributors }}</li>
            <li> {{ $project->languages }}</li>
        </ul>
    </div>
@endsection
