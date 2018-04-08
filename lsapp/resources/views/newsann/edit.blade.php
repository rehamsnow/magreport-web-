@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 align="center">Edit News and Announcements</h1>
                {!! Form::open(['action' => ['NewsAnnController@update', $news_anns->ann_id], 'method' => 'NEWSANN']) !!}
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
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}        

                {!! Form::close() !!}
           </div>
        </div>
</div>
@endsection