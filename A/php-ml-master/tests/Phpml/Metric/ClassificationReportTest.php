<?php

declare (strict_types = 1);

namespace tests\Phpml\Metric;

use Phpml\Metric\ClassificationReport;

class ClassificationReportTest extends  \PHPUnit_Framework_TestCase
{
    public function testClassificationReportGenerateWithStringLabels()
    {
        $labels = ['cat', 'ant', 'bird', 'bird', 'bird'];
        $predicted = ['cat', 'cat', 'bird', 'bird', 'ant'];

        $report = new ClassificationReport($labels, $predicted);

        $precision = ['cat' => 0.5, 'ant' => 0.0, 'bird' => 1.0];
        $recall = ['cat' => 1.0, 'ant' => 0.0, 'bird' => 0.67];
        $f1score = ['cat' => 0.67, 'ant' => 0.0, 'bird' => 0.80];
        $support = ['cat' => 1, 'ant' => 1, 'bird' => 3];
        $average = ['precision' => 0.75, 'recall' => 0.83, 'f1score' => 0.73];

        $this->assertEquals($precision, $report->getPrecision(), '', 0.01);
        $this->assertEquals($recall, $report->getRecall(), '', 0.01);
        $this->assertEquals($f1score, $report->getF1score(), '', 0.01);
        $this->assertEquals($support, $report->getSupport(), '', 0.01);
        $this->assertEquals($average, $report->getAverage(), '', 0.01);
    }

    public function testClassificationReportGenerateWithNumericLabels()
    {
        $labels = [0, 1, 2, 2, 2];
        $predicted = [0, 0, 2, 2, 1];

        $report = new ClassificationReport($labels, $predicted);

        $precision = [0 => 0.5, 1 => 0.0, 2 => 1.0];
        $recall = [0 => 1.0, 1 => 0.0, 2 => 0.67];
        $f1score = [0 => 0.67, 1 => 0.0, 2 => 0.80];
        $support = [0 => 1, 1 => 1, 2 => 3];
        $average = ['precision' => 0.75, 'recall' => 0.83, 'f1score' => 0.73];

        $this->assertEquals($precision, $report->getPrecision(), '', 0.01);
        $this->assertEquals($recall, $report->getRecall(), '', 0.01);
        $this->assertEquals($f1score, $report->getF1score(), '', 0.01);
        $this->assertEquals($support, $report->getSupport(), '', 0.01);
        $this->assertEquals($average, $report->getAverage(), '', 0.01);
    }
}
