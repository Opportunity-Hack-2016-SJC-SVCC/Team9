<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>
<body>
<div class="intro-body">
    <?php error_reporting(0); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <center><h1>PERFORMANCE INDEX</h1></center>
                   	<div class="row" style="color:grey">
		<div class="col-lg-4 col-md-8 col-md-offset-2 col-lg-offset-4">
      <div class="well">
      <h3 align="center">Search Filter</h3>
        <form class="form-horizontal" method="get" action="#report">
          <div class="form-group">
            <label for="Category" class="control-label">Category</label>
         <select class="form-control" name="Category" id="Category">
              <option value="start">Startups</option>
              <option value="venture">Venture Capitalists</option>
              <option value="invest">Investments Bankers</option>
            </select>
    
          </div>

                 <center><input type="submit" value="Search" class="btn btn-primary"/></center></form>

        </div>
        </div>   
       </div>
     
                    </div>
                </div>
            </div>
        </div>
    
         <?php
mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

                 

                        mysql_select_db("npowebportal") or die(mysql_error());
                          $query = $_GET['Category'];
                            //echo $query;
                        
                          //$min_length = 3;

if (strlen($query) >= 1) {
    
                              $query = htmlspecialchars($query);

                              $query = mysql_real_escape_string($query);


                              $raw_results = mysql_query("SELECT AVG(Coverage) as cov,AVG(Popularity) as pop, AVG(Fund_Raised) as fun FROM npowebportal.performance_metrics WHERE (`Category` LIKE '%" . $query . "%')") or die(mysql_error());

                              if (mysql_num_rows($raw_results) > 0) {
                               
                                  while ($results = mysql_fetch_array($raw_results)) {
                                        $coverage = $results["cov"];
                                       $popularity   = $results["pop"];
                                         $funds = $results["fun"]/10000;
                                //  echo $funds;
                                  }
                                
                                  
                              } else {
                                  echo "No results";
                                  
                              }

                $raw = mysql_query("SELECT Name  FROM npowebportal.organization WHERE (`Category` LIKE '%" . $query . "%')") or die(mysql_error());

    if (mysql_num_rows($raw) > 0) {

        while ($results = mysql_fetch_array($raw)) {
             echo $row["Name"];
        }


    } else {
        echo "No results";

    }

}
								
      
          ?>
<center>
         <section id="report">
     
     
  <script type="text/javascript">

    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var cov= <?php echo $coverage; ?>;
        var pop= <?php echo $popularity; ?>;
        var fun= <?php echo $funds; ?>;
         
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Coverage", cov, "#b87333"],
        ["Popularity",pop, "silver"],
        ["Funds", fun, "gold"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Performance Index",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
            

  </script>
         <div id="columnchart_values" style="align:center; width: 900px; height: 300px;"></div>

       </body> 
        
        
        
        
        