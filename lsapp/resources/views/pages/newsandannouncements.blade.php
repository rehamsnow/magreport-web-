@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        @if(count($newsandannouncements) > 0)
            <ul class="list-group">
                @foreach($newsandannouncements as $newsandannouncements)
                    <li class="list-group-item">{{$newsandannouncements}}</li>
                @endforeach
            </ul>
        @endif
@endsection