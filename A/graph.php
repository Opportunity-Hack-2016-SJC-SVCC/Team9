<html>
  <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);
       
      function drawChart() {

           
        var score = 76;

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Impact Index', score]
        ]);

        var options = {
          width: 800, height: 420,
          redFrom: 0, redTo: 35,
          yellowFrom:35, yellowTo: 70,
          greenFrom:70, greenTo: 100,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 800px; height: 420px;"></div>
  </body>
</html>
