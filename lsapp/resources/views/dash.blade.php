@extends('layouts.template')

@section('header')
  <h2 class="title">Dashboard
        <!-- <a href="" class="btn btn-info" style="float: right">Export</a></h2> -->
@endsection

@section('content')
  <head>

    <!-- <div>
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
    </div> -->

     <div class="panel-body">
        @if(sizeOf($inc_reports) > 0)
          <table class="table table-bordered table-hover">
              <tr class="bg-info">
                  <!--<th></th>-->
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
                      <!--<td>
                        <fieldset class="form-group">
                          <input type="checkbox" id="checkbox1">
                            <label for="checkbox1"></label>
                        </fieldset>
                      </td> -->
                      <td>{{$inc_reports->inc_desc}}</td>
                      <td>{{$inc_reports->rep_desc}}</td>
                      <td>{{$inc_reports->rep_date}}</td>
                      <td>{{$inc_reports->rep_time}}</td>
                      <td>{{$inc_reports->rep_address}}</td>
                      <td>
                          <img style="width:5%" src="/storage/rep_images/{{$inc_reports->rep_img}}">
                      </td>
                      <!--<td>{{$inc_reports->user->user_fname}} {{$inc_reports->user->user_lname}}</td> -->
                      <td>Reham Snow Camama </td>
                      <td>
                            <input id="pending" type="checkbox" name="rep_status" value="Pending" checked="checked" required autofocus>
                                <label class="form-check-label" for="Pending"> Pending </label> <br>
                          @if ($inc_reports->rep_status != "resolved")     
                            <input id="resolved" type="checkbox" name="rep_status" value="Resolved" required autofocus>
                                <label class="form-check-label" for="Resolved"> Resolved</label> <br>  
                          @endif  
                      </td>
                  </tr>
              @endforeach        
          <!--</table>
                {!!Form::open(['action' => ['ReportController@edit', $inc_reports->rep_id], 'method' => "REPORT"])!!}
                {{Form::hidden('_method', 'GET')}}
                {{Form::submit('Submit', ['class'=>'btn btn-block btn-info'])}}        
                {!! Form::close() !!}
          <table> -->
              <tr>
          </table>
        </br>
          <table>
              <div class="well well-sm col-md-6 col-sm-6 border" style="background-color:darksalmon">
                  <div class="row">
                      <div class="col-md-6 col-sm-6">
                      <h6 class="text-center"><b>Peace & Order: {{$inc_reports = DB::table('inc_reports')->where('inc_desc', '=', 'Peace and Order')->count() }}</b></h6>
                      </div>
                  </div>
                </div>
                <div class="well well-sm col-md-6 col-sm-6" style="background-color:darkseagreen">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <h6 class="text-center"><b>Health: {{$inc_reports = DB::table('inc_reports')->where('inc_desc', '=', 'Health')->count() }} </b></h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="well well-sm col-md-6 col-sm-6" style="background-color:lightblue">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <h6 class="text-center"><b>Recreation: {{$inc_reports = DB::table('inc_reports')->where('inc_desc', '=', 'Recreation')->count() }}</b></h6>
                        </div>
                    </div>
                  </div>
                  <div class="well well-sm col-md-6 col-sm-6 text-white" style="background-color:khaki">
                      <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <h6 class="text-center"><b>Others: {{$inc_reports = DB::table('inc_reports')->where('inc_desc', '=', 'Others')->count() }}</b></h6>
                          </div>
                      </div>
                  </div>
          <div class="well well-sm col-md-12 col-sm-12 text-white" style="background-color:aliceblue">
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <p class="text-center"> <b>Total Number of Incident Reports: </b>{{ $inc_reports = DB::table('inc_reports')->count() }}</p>
                  </div>
              </div>
          </div>
          </table>
          @else
          <p>There is no reports</p>    
      @endif
    </div>

    
@endsection
