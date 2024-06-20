@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="d-flex justify-content-between mb-3">
                    <h1>Create Project</h1>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Projects</a>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Create Project') }}</div>
                    <div class="card-body">
                        <form action="{{ route('admin.projects.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
