<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NPO DATA FILTERING</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
    
    
    
    
    <?php

    error_reporting(0);
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
global $state, $query, $city;


    mysql_select_db("npowebportal") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
 

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">NPO FINDER</span>
                </a>   
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="sample.php">Performance index</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contactus">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>NPO FINDER</h1>
                      <form method="get" action="search.php#impact">
                      <input id= "search" placeholder="Search for NPO" name = "query" class="form-control" required>
                              <br><input type="submit" class="btn btn-primary"><br></form>
                            <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>    
                       
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    
  
   
    
    
    
    
    
   

    <section id="about">


        <div class="row" style="color:grey">
            <div class="col-lg-4 col-md-8 col-md-offset-2 col-lg-offset-4">
                <div class="well">
                    <h3 align="center">Search Filter</h3>
                    <form class="form-horizontal" method="post" action="Search_2.php">
                        <div class="form-group">
                            <label for="location1" class="control-label">State</label>
                            <select class="form-control" name="state" id="state">
                                <option value="California">California</option>
                                <option value="Texas">Texas</option>
                                <option value="Alabama">Alabama</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type1" class="control-label">City</label>
                            <select class="form-control" name="city" id="city">
                                <option value="San Jose">San Jose</option>
                                <option value="Santa_Clara">Santa Clara/option>
                                <option value="Dallas">Dallas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type1" class="control-label">Zip Code</label>
                            <input type="text" class="form-control" id="zip" name="zip" aria-describedby="basic-addon1">

                        </div>

                        <!--          <p class="text-center"><a href="#" class="btn btn-danger glyphicon glyphicon-search" role="button"></a></p>-->
                        <center><input type="submit" class="btn btn-primary"></input></center>
                    </form>
                </div>
            </div>


        </div>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
              
    </section>

    <section id="searches1" class="container content-section text-center">
        <div class="row" style= "margin-left:50px">
            <div class="tableimg">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php


                        mysql_connect("localhost", "root", "") or die("Error connecting to database: " . mysql_error());


                        mysql_select_db("npowebportal") or die(mysql_error());



                        $state = $_GET["state"];
                        $zip = $_GET["zip"];
                        $city = $_GET["city"];


                        $sql = "select * from organization ";

                        $sqltemp = "";
                        $flag = 0;

                        if ($zip != null) {
                            $sqltemp = $sqltemp . " zip='" . $zip;
                            $sqltemp = $sqltemp . "'";
                            $flag = 1;
                        }
                        if ($state != null) {
                            if ($flag == 0)
                                $sqltemp = $sqltemp . "state='" . $state;
                            else
                                $sqltemp = $sqltemp . " AND state='" . $state;
                            $sqltemp = $sqltemp . "'";
                            $flag = 1;
                        }

                        if ($city != null) {
                            if ($flag == 0)
                                $sqltemp = $sqltemp . "city='" . $city;
                            else
                                $sqltemp = $sqltemp . " AND city='" . $city;
                            $sqltemp = $sqltemp . "'";
                            $flag = 1;
                        }

                        if ($flag == 1) {
                            $sql = $sql . " WHERE " . $sqltemp;
                        }
                        $result = mysql_query($sql);

                        if ($result != NULL && $result['num_rows'] > 0) {
                            echo "inside";
                            echo "<table class='table'><tr><th>Organization</th><th>Income</th><th>Assets</th> <th>City</th> <th>State</th> <th>ZIP</th> <th>Mission Statement</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                $id = $row["OID"];
                                $oname = "<td><a href='Organization.php?ID=$id'>" . $row["Name"] . " </a></td> ";
                                $income = "<td>" . $row["Income"] . "</td> ";
                                $assets = "<td>" . $row["Assets"] . "</td> ";
                                $cit = "<td>" . $row["City"] . "</td> ";
                                $sta = "<td>" . $row["State"] . "</td> ";
                                $zip = "<td>" . $row["ZIP"] . "</td> ";
                                $mission = "<td>" . $row["Mission_Statement"] . "</td> ";
                                echo "<tr>" . $oname . $income . $assets . $cit . $sta . $zip . $mission . " </tr>";

                            }
                            echo "</table>";
                        }




                    ?>



                </div>
            </div>
        </div>
    </section>







    <section id="searches" class="container content-section text-center">
        <div class="row" style= "margin-left:50px">
              <div class="tableimg">
            <div class="col-lg-8 col-lg-offset-2">
                  <?php



                      mysql_connect("localhost", "root", "") or die("Error connecting to database: " . mysql_error());


                      mysql_select_db("npowebportal") or die(mysql_error());


                          $query = $_GET['query'];

                          //$min_length = 3;

                          if (strlen($query) >= 1) {

                              $query = htmlspecialchars($query);

                              $query = mysql_real_escape_string($query);

                              $raw_results = mysql_query("SELECT * FROM npowebportal.organization WHERE (`Name` LIKE '%" . $query . "%')") or die(mysql_error());


                              if (mysql_num_rows($raw_results) > 0) {
                                  echo "<table class='table table-bordered'><tr><th>Name</th><th>City</th></tr>";
                                  // output data of each row
                                  while ($results = mysql_fetch_array($raw_results)) {
                                      echo "<tr><td>" . $results["Name"] . "</td><td>" . $results["City"] . "</td></tr>";
                                  }
                                  echo "</table>";
                              } else {
                            //      echo "No results";
                              }

                          } else {

                          }


?>
    
    
		
            </div>
        </div>
          </div>
    </section>


















    
    
        <section id="impact" class="container content-section text-center" align = "center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
    

        <div id="chart_div" style="width: 600px; height: 250; margin-left: 150px"></div>

              <!--  <script type="text/javascript">
                    google.charts.load('current', {'packages':['gauge']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        <?php
/*

                                        $query = $_GET['query'];
                             $raw_results = mysql_query("SELECT AVG(Assets) as a,AVG(Funds_Raised) as b,AVG(Units_Sold) as c ,AVG(Income) as d  FROM npowebportal.organization WHERE (`Name` LIKE '%".$query."%')") or die(mysql_error());

                                               if(mysql_num_rows($raw_results) > 0){

                           while($results = mysql_fetch_array($raw_results)){
                               $score = 25*$results["a"]/1000000 + 25*$results["b"]/50000 + 25*$results["c"]/2000 + 25*$results["d"]/500000 ;
                                echo  $score;
                            }

                              }
                                        else
                                        {
                                             echo "No results";
                                        }
                                        */?>

                        var score =  <?php /*echo $score; */?>;

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
-->
                
         </div>
        </div>
    </section>




    

    <!-- Footer -->
    <footer>

        <div id="contactus" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Contact Us</h2>
                    <p>Feel free to email us to provide some feedback on our initiatives and goals!</p>
                    <p><a href="mailto:feedback@npo.com">feedback@npo.com</a>
                    </p>
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="http://millercenter.org/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="http://millercenter.org/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="http://millercenter.org/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>



</html>
