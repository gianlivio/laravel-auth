@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8 mt-4">

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
                                        <th scope="row">{{ $project['slug'] }}</th>
                                        <td>{{ $project['name'] }}</td>
                                        <td>{{ substr($project['description'], 0, 20) }}...</td>
                                      
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
