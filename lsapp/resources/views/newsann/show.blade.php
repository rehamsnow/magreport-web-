@extends('layouts.template')

@section('header')
  <h2 class="title">{{$news_anns->ann_title}}</h2>
@endsection

@section('content')

        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <img style="width:50%" src="/storage/ann_images/{{$news_anns->ann_img1}}">
                                <br>
                                <div><h4><b>LOCATION: </b>   
                                        {!!$news_anns->ann_location!!}</h4>
                                </div>
                                <div><h4><b>Date: </b>
                                        {!!$news_anns->ann_date!!}</h4>
                                </div>
                                <div><h4><b>TIME: </b>
                                        {!!$news_anns->ann_time!!}</h4>
                                </div>
                                <hr>
                                <div><h4><b>DESCRIPTION: </b>
                                        {!!$news_anns->ann_desc!!}</h4>
                                </div>
                                <hr>
                                <small>Posted on {{$news_anns->created_at}} by {{$news_anns->user->user_fname}} {{$news_anns->user->user_lname}}</small>
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
    @endsection
