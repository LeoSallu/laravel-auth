@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="header my-3">
            <a href="{{route('welcome')}}" class="btn btn-danger">Back to the home</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Description</th>
                    <th>Project owner</th>
                    <th>Project contributors</th>
                    <th>Languages</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->name}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->owner}}</td>
                        <td>{{$project->contributors}}</td>
                        <td>{{$project->languages}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
