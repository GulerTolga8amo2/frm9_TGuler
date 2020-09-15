@extends('layouts.app')

@section('content')
{{--    {{var_dump($wishes)}}--}}
    <div class="row-cols-6">
    @foreach($wishes as $wish)
        <div class="m-auto col-3 border border-dark mt-5">
            <ul class="text-decoration-none">
                <li>{{$wish->title}}</li>
                <li>{{$wish->description}}</li>
                <li>{{$wish->price}}</li>
                <li>{{$wish->link}}</li>
                <a href="{{url('/manage/edit-wish',[$wish->id, $wish->userId])}}">edit</a>
                <a href="{{url('/manage/delete-wish', [$wish->id, $wish->userId])}}">delete</a>
            </ul>
        </div>
    @endforeach
    </div>
@endsection
