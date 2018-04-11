@extends('layouts.template')

@section('header')
  <h2 class="title">Dashboard
        <!--<a href="" class="btn btn-info" style="float: right">Export</a></h2>-->
@endsection

@section('content')
  <head>

    <div>
            <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                      <span class="sr-only">0% Complete (success)</span>
                      Recreation
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                      <span class="sr-only">20% Complete</span>
                      Others
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">20% Complete (warning)</span>
                        Health
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete (danger)</span>
                      Peace & Order
                    </div>
                  </div>
    </div>

     <div class="panel-body">
        @if(sizeOf($inc_reports) > 0)
          <table class="table table-striped">
              <tr>
                  <th>CATEGORY</th>
                  <th>REMARKS</th>
                  <th>REPORT DATE</th>
                  <th>REPORT TIME</th>
                  <th>LOCATION</th>
                  <th>IMAGE</th>
                  <th>NAME</th>
                  <th>STATUS</th>
              </tr>
              @foreach($inc_reports as $inc_reports)
                  <tr>
                      <td>{{$inc_reports->inc_desc}}</td>
                      <td>{{$inc_reports->rep_desc}}</td>
                      <td>{{$inc_reports->rep_date}}</td>
                      <td>{{$inc_reports->rep_time}}</td>
                      <td>{{$inc_reports->rep_address}}</td>
                      <td>
                        @if ($inc_reports->rep_img != "no_image.png")
                          <img style="width:100%" src="public/report_images/{{$inc_reports->rep_img}}"></td>
                        @endif
                      <!--<td>{{$inc_reports->user->user_fname}} {{$inc_reports->user->user_lname}}</td> -->
                      <td>Reham Snow Camama </td>
                      <td>
                            <input id="pending" type="checkbox" name="rep_status" value="Pending" checked="checked" required autofocus><label for="Pending"> Pending</label> <br>
                            <input id="resolved" type="checkbox" name="rep_status" value="Resolved" required autofocus><label for="Resolved"> Resolved</label> <br>
                      </td>
                  </tr>
              @endforeach        
          </table>
          @else
          <p>There is no reports</p>    
      @endif
    </div>

    
@endsection
