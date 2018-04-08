@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1>{{$news_anns->ann_title}}</h1>
                                <br>
                                <div><h4>LOCATION:     
                                        {!!$news_anns->ann_location!!}</h4>
                                </div>
                                <div><h4>Date: 
                                        {!!$news_anns->ann_date!!}</h4>
                                </div>
                                <div><h4>TIME:
                                        {!!$news_anns->ann_time!!}</h4>
                                </div>
                                <hr>
                                <div><h4>DESCRIPTION: 
                                        {!!$news_anns->ann_desc!!}</h4>
                                </div>
                                <hr>
                                <div><h4>PHOTOS: </h4> 
                                        {!!$news_anns->ann_img1!!}
                                </div>
                                <div>
                                        {!!$news_anns->ann_img2!!}
                                </div>
                                <hr>
                                <small>Posted on {{$news_anns->created_at}} by {{$news_anns->user->name}}</small>
                                <hr>
                                <a href="/newsann/{{$news_anns->ann_id}}/edit" class="btn btn-default">Edit</a>
                                <a href="/newsann" class="btn btn-default">Go Back</a>
                        
                                {!!Form::open(['action' => ['NewsAnnController@destroy', $news_anns->ann_id], 'method' => "NEWSANN", 'class' => 'pull-right' ])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </div>
                        </div>
                </div>
        </div>
</div>
    @endsection
