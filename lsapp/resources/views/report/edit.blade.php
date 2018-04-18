@extends('layouts.template')

@section('header')
  <h2 class="title">Edit Status</h2>
@endsection

@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading">
                                {!! Form::open(['action' => ['ReportController@update', $inc_reports->rep_id], 'method' => 'REPORT', 'enctype' => 'multipart/form-data']) !!}
                                <div class="form-group">
                                        {{Form::label('rep_status', 'Status: Change to Resolved')}}
                                        {{Form::text('rep_status', $inc_reports->rep_status, ['class' => 'form-control'])}}
                                </div>
                                <br>
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                                <a href="/dash" class="btn btn-default pull-right" >Go Back</a>
                                {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
@endsection
