@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <div class="card shadow mb-4 w-75 mx-auto">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Category Add</h6>
            <a href="{{ route('category.manage') }}" class="btn btn-sm btn-primary float-right">Manage Category</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titleInput">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="titleInput" placeholder="Enter title" name="title" value="{{ old('title') }}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</div>


@endsection