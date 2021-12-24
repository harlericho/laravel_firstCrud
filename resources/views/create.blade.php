@extends('layouts.template')
@section('title ', 'First Crud Create')
@section('content')
    <div class="card">
        <div class="card-header">
            <i class="fab fa-laravel"></i> Crud Programming with laravel 8
        </div>
        <div class="card-body">
            <h4 class="card-title">Add programming</h4>
            <hr>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Leave a description here" name="description" required></textarea>
                  </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Add</button>
                <a href="{{route('index')}}" class="btn btn-secondary btn-sm"><i class="fas fa-table"></i> Go to index</a>
              </form>
        </div>
        <div class="card-footer text-muted">
            @harlericho
        </div>
    </div>
@endsection
