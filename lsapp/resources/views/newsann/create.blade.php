@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 align="center">Create News and Announcements</h1>
                {!! Form::open(['action' => 'NewsAnnController@store', 'method' => 'NEWSANN']) !!}
                        <div class="form-group">
                                {{Form::label('ann_title', 'Title')}}
                                {{Form::text('ann_title', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_desc', 'Description')}}
                                {{Form::text('ann_desc', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_date', 'Date')}}
                                {{Form::date('ann_date', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_time', 'Time')}}
                                {{Form::time('ann_time', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('ann_location', 'Location')}}
                                {{Form::text('ann_location', '', ['class' => 'form-control'])}}
                        </div>
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
             </div>
        </div>
</div>
@endsection