@extends('layouts.app')

@section('content')
    <h1>Reports</h1>
    @if(count($inc_reports) > 0)
        @foreach($inc_reports as $inc_reports)
            <div class="well well-sm">
                <h4><a href="/report/{{$inc_reports->rep_id}}">{{$inc_reports->rep_desc}}</a></h4>
            <small>Reported on {{$inc_reports->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No Reports found</p>
    @endif
@endsection