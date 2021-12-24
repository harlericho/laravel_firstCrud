@extends('layouts.template')
@section('title ', 'First Crud Delete')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            <i class="fab fa-laravel"></i> Crud Programming with laravel 8
        </div>
        <div class="card-body">
            <h4 class="card-title">Deleting programming</h4>
            <hr>
            <form action="{{ route('destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $data->id }}">
                <h5 class="card-title">{{ $data->name }}</h5>
                <p class="card-text">{{ $data->description }}</p>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                <a href="{{ route('index') }}" class="btn btn-secondary btn-sm"><i class="fas fa-table"></i> Go to
                    index</a>
            </form>
        </div>
        <div class="card-footer text-muted">
            @harlericho
        </div>
    </div>
@endsection
