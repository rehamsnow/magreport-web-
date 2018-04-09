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
          <table class="table table-striped">
             <tr>
                <th>Category</th>
                <th>Remarks</th>
                <th>Location</th>
                <th>Date Reported</th>
                <th>Time Reported</th>
                <th>Status</th>
             </tr>
             <tr>
                <tr>
                  <td>sample data</td>
                  <td>sample data</td>
                  <td>sample data</td>
                  <td>sample data</td>
                  <td>sample data</td>
                  <th>done</td>
                </tr>
              </tr>
              <tr>
                  <tr>
                    <td>sample data</td>
                    <td>sample data</td>
                    <td>sample data</td>
                    <td>sample data</td>
                    <td>sample data</td>
                    <th>done</td>
                  </tr>
                </tr>
                <tr>
                    <tr>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <th>done</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <th>done</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <td>sample data</td>
                      <th>done</td>
                    </tr>
                </tr>
            </table>
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

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Peace & Order", "Recreation", "Health", "Others"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
@endsection
