@extends('layouts.template')

@section('header')
  <h2 class="title">Edit News & Announcements</h2>
@endsection

@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading">
                {!! Form::open(['action' => ['NewsAnnController@update', $news_anns->ann_id], 'method' => 'NEWSANN', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                                {{Form::label('ann_title', 'Title')}}
                                {{Form::text('ann_title', $news_anns->ann_title, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_desc', 'Description')}}
                                {{Form::textarea('ann_desc', $news_anns->ann_desc, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_date', 'Date')}}
                                {{Form::date('ann_date', $news_anns->ann_date, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_time', 'Time')}}
                                {{Form::time('ann_time', $news_anns->ann_time, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_location', 'Location')}}
                                {{Form::text('ann_location', $news_anns->ann_location, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="upload-btn-wrapper">
                                {{Form::file('ann_img1')}}
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="upload-btn-wrapper">
                                {{Form::file('ann_img2')}}
                        </div>
                        <br>
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
           </div>
        </div>
</div>
</div>
@endsection