@extends('layouts.app')

@section('content')
    <h1>{{$news_anns->ann_desc}}</h1>
    <div>
            {!!$news_anns->ann_date!!}
    </div>
    <hr>
    <div>
            {!!$news_anns->ann_location!!}
    </div>
    <hr>
    <div>
            {!!$news_anns->ann_desc2!!}
    </div>
    <small>Posted on {{$news_anns->created_at}} by {{$news_anns->user->name}}</small>
    <hr>
    <a href="/newsann/{{$news_anns->ann_id}}/edit" class="btn btn-default">Edit</a>
    <a href="/newsann" class="btn btn-default">Go Back</a>

    {!!Form::open(['action' => ['NewsAnnController@destroy', $news_anns->ann_id], 'method' => "NEWSANN", 'class' => 'pull-right' ])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection
