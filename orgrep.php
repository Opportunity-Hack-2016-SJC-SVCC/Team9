<script type="text/javascript">

    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

          var data = google.visualization.arrayToDataTable([
                  ['Metrics', 'Paramaters'],
                  ['Coverage',     11],
                  ['Overhead_cost',      2],
                  ['',  2],
                  ['Watch TV', 2],
                  ['Sleep',    7]
              ]);

          var options = {
              title: 'Organization Growth Composition',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>