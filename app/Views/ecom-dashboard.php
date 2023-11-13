<?php $this->extend('templates/admin_layout') ?>

<?php $this->section('main-content') ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

    //   function drawChart() {
    //     var data = google.visualization.arrayToDataTable([
    //       ['Date', 'Sales', 'Orders'],
    //       
    //     ]);

    //     var options = {
    //       title: 'Company Performance',
    //       curveType: 'function',
    //       legend: { position: 'bottom' }
    //     };

    //     var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    //     chart.draw(data, options);
    //   }

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Sales');
        data.addColumn('number', 'Orders');

        <?php foreach($graph as $record): ?>
            data.addRow([new Date('<?= $record['day_date'] ?>'), <?= $record['main_total'] ?>, <?= $record['total_orders'] ?>]);
        <?php endforeach; ?>

        var options = {
            title: 'Company Performance',
            curveType: 'function', // Set to 'none' for straight lines
            legend: { position: 'bottom' },
            hAxis: {
                format: 'MMM d, yyyy', // Adjust the format as needed
            },
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
    </script>

<div class="container">
    <div class="row mt-5">
    <div class="col-md-3">

        <div class="card">
            <div class="card-body">
                <h6>Sales Amount Today</h6>
                <h3>RM <?= $today_data[0]['main_total'] ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">

        <div class="card">
            <div class="card-body">
            <h6>Sales Count Today</h6>
            <h3> <?= $today_data[0]['total_orders'] ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">

        <div class="card">
            <div class="card-body">
            <h6>Sales Amount This Month</h6>
            <h3>RM  <?= $month_data[0]['main_total'] ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">

        <div class="card">
            <div class="card-body">
            <h6>Sales Count This Month</h6>
            <h3> <?= $month_data[0]['total_orders'] ?></h3>
            </div>
        </div>
    </div>
    

    
    </div>


    <div class="row">
        <div class=" card col-12 bg-white mt-5">
                <div class="card-body">
                <div id="curve_chart" style="width: 900px; height: 500px"></div>
                </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>