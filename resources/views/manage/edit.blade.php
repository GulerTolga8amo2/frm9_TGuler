
@extends('layouts.app')

@section('content')
    <div class="w-50 m-auto">
        <form method="POST" action="{{url('/manage/edit-wish/confirm')}}">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>
                <input id="title" type="text" class="form-control col-md-8" name="title" value="{{$wish->title}}" required>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label text-md-right">Description</label>
                <input id="description" type="text" class="form-control col-md-8" name="description" value="{{$wish->description}}" required>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-2 col-form-label text-md-right">price</label>
                <input id="price" type="number" class="form-control col-md-8" name="price" value="{{$wish->price}}" required>
            </div>

            <div class="form-group row">
                <label for="link" class="col-md-2 col-form-label text-md-right">link</label>
                <input id="link" type="url" class="form-control col-md-8" name="link" value="{{$wish->title}}" required>
                <input id="id" type="hidden" class="form-control col-md-8" name="id" value="{{$wish->id}}">
                <input id="userId" type="hidden" class="form-control col-md-8" name="userId" value="{{$wish->userId}}">
            </div>

            <div class="form-group row">
                <label for="file-upload" id="file-drag" class="col-md-2 col-form-label text-md-right">Image</label>
                <i class="fa fa-download" aria-hidden="true"></i>
                <div>Select a file or drag here</div>
                <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
            </div>

            <div class="form-group row mb-0">
                <div class="m-auto">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
