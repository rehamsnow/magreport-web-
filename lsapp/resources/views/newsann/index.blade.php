@extends('layouts.template')

@section('header')
  <h2 class="title">News & Announcements</h2>
@endsection

@section('content')
    @if(count($news_anns) > 0)
        @foreach($news_anns as $news_anns)
            <div class="well well-sm">
                <h3><a href="/newsann/{{$news_anns->ann_id}}">{{$news_anns->ann_desc}}</a></h3>
            <small>Posted on {{$news_anns->created_at}} by {{$news_anns->user->user_fname}}</small>
            </div>
        @endforeach
    @else
        <p>No Posts found</p>
    @endif
@endsection