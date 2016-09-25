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

    if(strpos($mission_statement,"mobile")!==false) {
        
        $product = "sss";
    }

$agr=['food','crop','plant'];
   $cooking=['stoves','fuel','oil'];
$healthcare=['eyeglasses','surgery','treatment'];

    for($x=0;$x<count($agr);$x++)
    {
    if(strpos($mission_statement,$agr[$x])!==false)
    {
        $product="agriculture";
        break;
    }
    }

    if($product == "") {
        for ($x = 0; $x < count($cooking); $x++) {
            if (strpos($mission_statement, $cooking[$x]) !== false) {
                $product = "cooking";
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
    echo "";
}



?>