@extends('layouts.template')

@section('header')
  <h2 class="title">Dashboard</h2>
@endsection

@section('content')
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body style="background-color:white">
    <div class="row">
      <br>
      <div class="btn-toolbar mb-2 mb-md-0 col-lg-12">
        <button class="btn btn-sm btn-warning btn-outline-secondary" style="float: right">
          <span data-feather="inbox">
          </span>
          Export
        </button>
        <button class="btn btn-sm btn-warning btn-outline-secondary dropdown-toggle" style="float: right">
          <span data-feather="calendar"></span>
          This month
        </button>
      </div>
    </div>
    <br>

    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

     <div class="panel-body">
        <h2>Incident Reports</h2>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Charts -->
    <script src="{{ asset('material-dashboard/js/chartist.min.js') }}"></script>
    <script>
     <Grid item xs={12} sm={12} md={6}>
      <ChartCard
        chart={
            <ChartistGraph
                className="ct-chart"
                data={emailsSubscriptionChart.data}
                type="Bar"
                options={emailsSubscriptionChart.options}
                responsiveOptions={emailsSubscriptionChart.responsiveOptions}
                listener={
                    emailsSubscriptionChart.animation
                }
            />
        }
        chartColor="orange"
        title="Email Subscriptions"
        text="Last Campaign Performance"
        statIcon={AccessTime}
        statText="campaign sent 2 days ago"
    />
    </Grid>
    </script>
  </body>
@endsection
