@extends('layouts.template')
@section('title ', 'First Crud')
@section('content')
    <div class="card">
        <div class="card-header">
            <i class="fab fa-laravel"></i> Crud Programming with laravel 8
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Message: </strong> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card-body">
            <h4 class="card-title">List of programming</h4>
            <a href="{{ route('create') }}" class="btn btn-secondary btn-sm"><i class="fas fa-plus-square"></i> Add new</a>
            <hr>
            <div class="table table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td scope="row">{{ (($item->id * 2) -1)}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <form action="{{ route('edit', $item->id) }}" method="GET">
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('show', $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
        <div class="card-footer text-muted">
            @harlericho
        </div>
    </div>
@endsection
