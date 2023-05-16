@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Project Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">{{ old('description') }}
          </div>
        <div class="mb-3">
            <label for="owner" class="form-label">Project owner</label>
            <input type="text" class="form-control" id="owner" name="owner" value="{{ old('owner') }}">
        </div>
        <div class="mb-3">
            <label for="contributors" class="form-label">Project contributors</label>
            <input type="text" class="form-control" id="contributors" name="contributors" value="{{ old('contributors') }}">
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Languages</label>
            <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages') }}">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>    
</div>
@endsection