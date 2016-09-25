
<html>
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

<body>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-play-circle"></i> <span class="light">NPO DATA FILTERING</span>
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
                    <a class="page-scroll" href="#impact">Impact Index</a>
                </li>
                <li>
                    <a class="page-scroll" href="#business">Business Indicators</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->

<?php

/**
 * Created by PhpStorm.
 * User: Shibu
 * Date: 9/24/16
 * Time: 4:41 PM
 */



trait Predictable
{
    /**
     * @param array $samples
     *
     * @return mixed
     */
    public function predict(array $samples)
    {
        if (!is_array($samples[0])) {
            $predicted = $this->predictSample($samples);
        } else {
            $predicted = [];
            foreach ($samples as $index => $sample) {
                $predicted[$index] = $this->predictSample($sample);
            }
        }
        return $predicted;
    }
    /**
     * @param array $sample
     *
     * @return mixed
     */
    abstract protected function predictSample(array $sample);
}

trait Trainable
{
    /**
     * @var array
     */
    private $samples;
    /**
     * @var array
     */
    private $targets;
    /**
     * @param array $samples
     * @param array $targets
     */
    public function train(array $samples, array $targets)
    {
        $this->samples = $samples;
        $this->targets = $targets;
    }
}



interface Estimator
{
    /**
     * @param array $samples
     * @param array $targets
     */
    public function train(array $samples, array $targets);
    /**
     * @param array $samples
     *
     * @return mixed
     */
    public function predict(array $samples);
}

interface Classifier extends Estimator
{
}



class NaiveBayes implements Classifier
{
    use Trainable, Predictable;

    /**
     * @param array $sample
     *
     * @return mixed
     */
    protected function predictSample(array $sample)
    {
        $predictions = [];
        foreach ($this->targets as $index => $label) {
            $predictions[$label] = 0;
            foreach ($sample as $token => $count) {
                if (array_key_exists($token, $this->samples[$index])) {
                    $predictions[$label] += $count * $this->samples[$index][$token];
                }
            }
        }
        arsort($predictions, SORT_NUMERIC);
        reset($predictions);
        return key($predictions);
    }
}

//$samples = [["water", "sanitation", "pumps"], ["food", "crops", "chocolate"], ["computer", "mac", "pc"]];
//$labels = ['Water & Sanitation', 'Agriculture', 'IT'];

function convertoASCII($string)
{
    $sum=0;
    $arr=str_split($string);


    for($x=0;$x<count($arr);$x++)
   $sum  = $sum + ord($arr[$x]);
return $sum;

    echo $sum;

}




$a=convertoASCII("food");
$b=convertoASCII("crop");
$c=convertoASCII("plant");

$d=convertoASCII("stoves");

$e=convertoASCII("fuel");
$f=convertoASCII("oil");

$product="";
$agr=[];
array_push($agr,"food");
array_push($agr,"mobile");
array_push($agr,"plant");

$health=[];

array_push($health,"stoves");
array_push($health,"mobile");
array_push($health,"technology");

$samples = [$agr, $health];
$labels = ['Agriculture', 'Cooking'];

 $classifier = new NaiveBayes();

$classifier->train($samples, $labels);

 //echo $classifier->predict([$f, $b, $c]);
// return 'a'

 //cho $classifier->predict([$a,$e,$f]);

if(!empty($_GET['mission_statement']))
{

    $mission_statement=$_GET['mission_statement'];



$agr=['information','crop','technology'];
   $cooking=['stoves','learning','oil'];
$healthcare=['eyeglasses','technology','treatment'];

    for($x=0;$x<count($agr);$x++)
    {

    if(strpos($mission_statement,$agr[$x])!==false)
    {
        $product="Technology";
        break;
    }
    }

    if($product == "") {
        for ($x = 0; $x < count($cooking); $x++) {

            if (strpos($mission_statement, $cooking[$x]) !== false) {
                $product = "Artificial Intelligence";
                break;
            }
        }
    }

    if($product == "") {
        for ($x = 0; $x < count($healthcare); $x++) {
            if (strpos($mission_statement, $healthcare[$x]) !== false) {
                $product = "healthcare";
                break;
            }
        }
    }
}
else
{
    $product = " None";
}



?>
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>CLASSIFICATION</h1>
                    <p class="intro-text">NPO Data Classification

                        Classified as <?php echo $product?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

</body>
</html>
