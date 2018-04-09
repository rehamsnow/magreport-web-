@extends('layouts.template')

@section('header')
  <h2 class="title">Incident Reports</h2>
@endsection

@section('content')
    @if(count($inc_reports) > 0)
        @foreach($inc_reports as $inc_reports)
            <div class="well well-sm">
                <h4>{{$inc_reports->rep_desc}}</h4>
            <small>Reported on {{$inc_reports->rep_time}}, {{$inc_reports->rep_date}}</small>
            </div>
        @endforeach
    @else
        <p>No Reports found</p>
    @endif
@endsection