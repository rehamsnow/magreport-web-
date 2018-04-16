@extends('layouts.template')

@section('header')
  <h2 class="title">News & Announcements</h2>
@endsection

@section('content')
    @if(count($news_anns) > 0)
        @foreach($news_anns as $news_anns)
            <div class="well well-sm">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width:50%" src="/storage/ann_images/{{$news_anns->ann_img1}}">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><a href="/newsann/{{$news_anns->ann_id}}">{{$news_anns->ann_title}}</a></h3>
                    <small>Posted on {{$news_anns->created_at}} by {{$news_anns->user->user_fname}} {{$news_anns->user->user_lname}}</small>
                </div>
            </div>
            </div>
        @endforeach
    @else
        <p>No Posts found</p>
    @endif
@endsection