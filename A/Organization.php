<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NPO Impacts</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Shibu
 * Date: 9/24/16
 * Time: 3:37 PM
 */
$ID=$_GET['ID'];
$servername="localhost";
$username="root";
$pass="";
$dbname="npowebportal";
$conn=new mysqli($servername,$username,$pass,$dbname);
$oname="";
$mission = "";
$sql="select * from organization where OID=".$ID;
$contact = "select * from contact where OID=".$ID;
$main_programs = "select * from Main_Programs where OID=".$ID;
$service_areas="select * from service_areas where OID=".$ID;
$email="";
$phone="";
$ruling_year="";
$area="";

$oresult=$conn->query($sql);

$contact_result=$conn->query($contact);

$main_result=$conn->query($main_programs);

$service_result=$conn->query($service_areas);

if($oresult!=NULL && $oresult->num_rows>0)
{


    while ($row = $oresult->fetch_assoc())
    {
        $id=$row["OID"];
        $oname= $row["Name"];
        $income=$row["Income"] ;
        $assets=$row["Assets"] ;
        $cit=$row["City"] ;
        $sta=$row["State"];
        $zip=$row["ZIP"] ;
        $mission=$row["Mission_Statement"];

        break;
    }

}

if($contact_result!=NULL && $contact_result->num_rows>0)
{
    while($row= $contact_result->fetch_assoc())
    {
        $cid=$row["CID"];

        $name=$row["Name"];

        $email=$row["Email"];

        $phone=$row["Phone"];
      //  echo $cid. "  ".$name."  ".$email."  ".$phone."  "."<br>";

        break;
    }

}
$count=0;
if($main_result!=NULL && $main_result->num_rows>0)
{
    while($row= $main_result->fetch_assoc())
    {
        $mid=$row["MID"];

        $program_name[$count]=$row["Program_Name"];

        $count++;

    }
}

if($service_result!=NULL && $service_result->num_rows>0)
{
    while($row= $service_result->fetch_assoc())
    {
        $sid=$row["SID"];

        $ruling_year=$row["Ruling_Year"];

        $area=$row["Area"];
      //  echo $sid."  ".$ruling_year."  ".$area."  "."<br>";
        break;
    }
}



//echo $id."  ".$oname."  ".$income."  ".$assets."  ".$cit.$sta."  ".$zip."  ".$mission."<br>";

for($i=0;$i<$count;$i++) {
 //   echo $mid . "  " . $program_name[$i] . "  " . "<br>";
}
?>



<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="indexSearch.php">Impact PRO</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('https://static.pexels.com/photos/30732/pexels-photo-30732.jpg');"></div>
            <div class="carousel-caption">
                <h2> <?php echo $oname; ?> </h2>


            </div>
        </div>

    </div>


</header>

<!-- Page Content -->
<div class="container">

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Mission Statement</h2>  <?php
            echo " <h2 class=\"page-header\"><a href='Classify.php?id=$ID&mission_statement=$mission'>Classify</a></h2>";

            ?>
        </div>
        <div class="col-lg-12">
            <p> <?php echo $mission; ?> </p>
        </div>

    </div>
    <!-- /.row -->

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $oname; ?>
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Service Results</h4>
                </div>
                <div class="panel-body">
                    <p><b>Ruling Year</b></n>  <?php echo $ruling_year;?></p>
                    <p><b>Area</b>  <?php echo $area;?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Contact Details </h4>
                </div>
                <div class="panel-body">
                    <p> <b>Email</b> <?php echo $email; ?></p>
                    <p><b>Phone</b>  <?php echo $phone; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Programs & Results</h4>
                </div>
                <div class="panel-body">
                    <?php

                    for($i=0;$i<$count;$i++)
                    echo ($i + 1).") ".$program_name[$i]."<br>";
                    ?>

                    <p>  </p>

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->





    <hr>


    <!-- Footer -->
    <footer>

    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>









