@extends('layouts.template')

@section('header')
  <h2 class="title">Dashboard</h2>
@endsection

@section('content')
  <head>

     <div class="panel-body">
        @if(sizeOf($inc_reports) > 0)
          <table class="table table-striped">
              <tr>
                  <th>CATEGORY</th>
                  <th>REMARKS</th>
                  <th>REPORT DATE</th>
                  <th>REPORT TIME</th>
                  <th>LOCATION</th>
                  <th>STATUS</th>
              </tr>
              @foreach($inc_reports as $inc_reports)
                  <tr>
                      <td>{{$inc_reports->inc_desc}}</td>
                      <td>{{$inc_reports->rep_desc}}</td>
                      <td>{{$inc_reports->rep_date}}</td>
                      <td>{{$inc_reports->rep_time}}</td>
                      <td>{{$inc_reports->rep_address}}</td>
                      <td>{{$inc_reports->rep_status}}</td>
                  </tr>
              @endforeach        
          </table>
          @else
          <p>There is no reports</p>    
      @endif
    </div>

    
@endsection
