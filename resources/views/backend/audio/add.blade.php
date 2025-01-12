@extends('backend.layouts.master')
@section('title', 'Dashboard')
@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <div class="card shadow mb-4 w-75 mx-auto">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Audio Add</h6>
            <a href="{{ route('audio.manage') }}" class="btn btn-sm btn-primary float-right">Manage Audio</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('audio.store') }}" method="POST" enctype="multipart/form-data">
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

                    <div class="form-group">
                        <label for="auddioFile">Audio File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('file') is-invalid @enderror" id="auddioFile" name="file" accept="audio/*">
                            <label class="custom-file-label" for="auddioFile">Choose file</label>
                        </div>
                        @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="customFile">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image" accept="image/*">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="durationInput">Duration</label>
                        <input type="duration" class="form-control @error('duration') is-invalid @enderror" id="durationInput" placeholder="Enter duration" name="duration" value="{{ old('duration') }}">
                        @error('duration')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="detailsInput">Details</label>
                        <textarea type="text" class="form-control @error('details') is-invalid @enderror" id="detailsInput" placeholder="Enter details" name="details">{{ old('details') }}</textarea>
                        @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group d-flex">
                        <div class="mr-5">
                            <input type="checkbox" name="isPaid" id="isPaid" value="1">
                            <label for="isPaid">Paid</label>
                        </div>
                        <div>
                            <input type="checkbox" name="isAyat" id="isAyat" value="1">
                            <label for="isAyat">Ayat</label>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</div>


@endsection