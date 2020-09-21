
@extends('layouts.app')

@section('content')
    <div class="w-50 m-auto">
        <form method="POST" action="{{url('/manage/add-wish/confirm')}}">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>
                <input id="title" type="text" class="form-control col-md-8" name="title" value="{{ old('title')}}" required>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>
                <input id="description" type="text" class="form-control col-md-8" name="description" value="{{ old('description')}}" required>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-2 col-form-label text-md-right">{{ __('price') }}</label>
                <input id="price" type="number" class="form-control col-md-8" name="price" required>
            </div>

            <div class="form-group row">
                <label for="link" class="col-md-2 col-form-label text-md-right">{{ __('link') }}</label>
                <input id="link" type="url" class="form-control col-md-8" name="link" required>
                <input id="userId" type="hidden" name="userId" value="{{auth::id()}}">
            </div>

            <div class="form-group row">
                <label for="file-upload" id="file-drag" class="col-md-2 col-form-label text-md-right">Image</label>
                <i class="fa fa-download" aria-hidden="true"></i>
                <div>Select a file or drag here</div>
                <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
            </div>

            <div class="form-group row mb-0">
                <div class="m-auto">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
