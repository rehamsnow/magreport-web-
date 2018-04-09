@extends('layouts.template')

@section('content')

        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1>{{$inc_reports->inc_desc}}</h1>
                                <br>
                                <div><h4>LOCATION:     
                                        {!!$inc_reports->rep_address!!}</h4>
                                </div>
                                <div><h4>Date: 
                                        {!!$inc_reports->rep_date!!}</h4>
                                </div>
                                <div><h4>TIME:
                                        {!!$inc_reports->rep_time!!}</h4>
                                </div>
                                <hr>
                                <div><h4>DESCRIPTION: 
                                        {!!$inc_reports->rep_desc!!}</h4>
                                </div>
                                <hr>
                                <div><h4>PHOTOS: </h4> 
                                        {!!$inc_reports->rep_img1!!}
                                </div>
                                <div>
                                <hr>
                                <small>Reported on {{$inc_reports->rep_date}}</small>
                                <hr>
                                <a href="/report" class="btn btn-default">Go Back</a>
                            </div>
                        </div>
                </div>
</div>
    @endsection
