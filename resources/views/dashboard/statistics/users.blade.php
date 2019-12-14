@extends('layouts.dashboard')



@section('content')




<div class="chart-container">
  <div class="chart">
    <canvas id="users-chart"></canvas>
  </div>
</div>

<script type="text/javascript">
var ctx = document.getElementById('users-chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6','7','8','9','10','11','12'],
        datasets: [{
            label: 'Number of users',
            data: [{{$nbr_users_year[1]}},{{$nbr_users_year[2]}},{{$nbr_users_year[3]}},{{$nbr_users_year[4]}},{{$nbr_users_year[5]}},{{$nbr_users_year[6]}},{{$nbr_users_year[7]}},{{$nbr_users_year[8]}},{{$nbr_users_year[9]}},{{$nbr_users_year[10]}},{{$nbr_users_year[11]}},{{$nbr_users_year[12]}}],
            backgroundColor: [
              'rgba(255, 207, 78,0.3)',
            ],
            borderColor:[
              'rgba(255, 207, 78,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        responsive : true,
        maintainAspectRatio: false,
    }
});
</script>


@endsection
