@extends('layouts.app')

@section('content')
<div class="container my-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('projects.update',$project->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
          <label for="name" class="form-label">Project Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name'), $project->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
        <div class="mb-3">
            <label for="owner" class="form-label">Project owner</label>
            <input type="text" class="form-control" id="owner" name="owner" value="{{ old('owner', $project->owner) }}">
        </div>
        <div class="mb-3">
            <label for="contributors" class="form-label">Project contributors</label>
            <input type="text" class="form-control" id="contributors" name="contributors" value="{{ old('contributors', $project->contributors) }}">
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Languages</label>
            <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages',$project->languages) }}">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>    
</div>
@endsection