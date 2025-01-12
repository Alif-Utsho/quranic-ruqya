@extends('backend.layouts.master')
@section('title', 'Banner Edit')
@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <div class="card shadow mb-4 w-75 mx-auto">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Banner Edit</h6>
            <a href="{{ route('banner.manage') }}" class="btn btn-sm btn-primary float-right">Manage Banner</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('banner.update', $banner->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titleInput">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="titleInput" placeholder="Enter title" name="title" value="{{ $banner->title }}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="customFileFav">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFileFav" name="image">
                            <label class="custom-file-label" for="customFileFav">Choose file</label>
                        </div>
                        <img src="{{ asset($banner->image) }}" width="150" alt="">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="detailsInput">Details</label>
                        <textarea type="text" class="form-control editor @error('details') is-invalid @enderror" id="detailsInput" placeholder="Enter details" name="details">{{ $banner->details }}</textarea>
                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>


</div>


@endsection