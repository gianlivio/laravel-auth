@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4">
                <div class="d-flex justify-content-between mb-3">
                    <h1>Projects</h1>
                    <div>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create New Project</a>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projectsArray as $project)
                                    <tr>
                                        <th scope="row">{{ $project->slug }}</th>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ Str::limit($project->description, 20) }}</td>
                                        <td>
                                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
