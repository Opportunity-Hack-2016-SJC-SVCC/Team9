<!DOCTYPE html>
<html lang="en">
<head>
    <title>NPO Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>




</head>
<body>

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


<div class="container">
    <h2>NPO Index</h2>
    <p>Introduction Content</p>

    <?php
    /**
     * Created by PhpStorm.
     * User: Shibu
     * Date: 9/24/16
     * Time: 2:28 PM
     */
    session_start();

    $servername="localhost";
    $username="root";
    $pass="";
    $dbname="npowebportal";
    $conn=new mysqli($servername,$username,$pass,$dbname);

    $state=$_POST["state"];
    $zip= $_POST["zip"];
    $city=$_POST["city"];

    $sql="select * from organization ";
    $sqltemp="";
    $flag=0;

    if($zip!=null){
        $sqltemp= $sqltemp." zip='".$zip;
        $sqltemp=$sqltemp."'";
        $flag=1;
    }
    if($state!=null){
        if($flag==0)
            $sqltemp= $sqltemp."state='".$state;
        else
            $sqltemp= $sqltemp." AND state='".$state;
        $sqltemp=$sqltemp."'";
        $flag=1;
    }

    if($city!=null){
        if($flag==0)
            $sqltemp= $sqltemp."city='".$city;
        else
            $sqltemp= $sqltemp." AND city='".$city;
        $sqltemp=$sqltemp."'";
        $flag=1;
    }

    if($flag==1){
        $sql=$sql." WHERE ".$sqltemp;
    }

   // echo $sql;
    $result=$conn->query($sql);


   // echo $result->num_rows;
    if($result!=NULL && $result->num_rows>0)
    {

        echo "<table class='table table-bordered table-inverse'><tr><th>Organization</th><th>Income</th><th>Assets</th> <th>City</th> <th>State</th> <th>ZIP</th> <th>Mission Statement</th></tr>";
        while ($row = $result->fetch_assoc())
        {
            $id=$row["OID"];
            $oname="<td><a href='Organization.php?ID=$id'>" . $row["Name"] . " </a></td> ";
            $income= "<td>" .$row["Income"] . "</td> ";
            $assets="<td>" .$row["Assets"] . "</td> ";
            $cit="<td>" .$row["City"] . "</td> ";
            $sta="<td>" .$row["State"] . "</td> ";
            $zip="<td>" .$row["ZIP"] . "</td> ";
            $mission="<td>" .$row["Mission_Statement"] . "</td> ";
            $_SESSION["Mission"]=$mission;



            echo "<tr>".$oname . $income .$assets.$cit.$sta.$zip .$mission ." </tr>";

        }
        echo "</table>";
    }



    ?>

</div>

</body>
</html>




