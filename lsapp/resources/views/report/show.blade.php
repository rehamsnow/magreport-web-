@extends('layouts.template')

@section('header')
<h2 class="title">{{$inc_reports->inc_desc}}</h2>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                    <div>
                        <h4 class="text-info">Remarks:<h3>{{!!$inc_reports->rep_desc!!}}</h3></h4>
                    </div>
                    <div>
                        <h4 class="text-info">Report Date: <h3>{!!$inc_reports->rep_date!!}</h3></h4>
                    </div>
                    <div>
                        <h4 class="text-info">Report Time: <h3>{!!$inc_reports->rep_time!!}</h3></h4>
                    </div>
                    <div>
                        <h4 class="text-info">Incident Location: <h3>{!!$inc_reports->rep_address!!}</h3></h4>
                    </div>
                <hr>
                <a href="/report" class="btn btn-default">Go Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
