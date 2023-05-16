@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to the Laravel Boostrap Auth Template') }}</div>

                <div class="card-body">
                    <a class="btn btn-danger" href="{{route('projects.index')}}">Go to my Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
