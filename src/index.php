<?php

namespace Test;

include("../vendor/autoload.php");
//include "Test/setup.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$testClassExample = new TestClass01(); // create quiz example

$testExample=$testClassExample->getTest(); // get an instance of Test class

$request=Request::CreateFromGlobals();
//$request=Request::Create("?ans1=5&ans6=on&mytest=mytest");

echo $request->get("mytest");
if (count($request->get("mytest"))==0) {
    $responseText = $testExample->askQuestions();
}
else {
    $testExample->calculateScales($request);
    $scales = $testExample->getScales();
    $firstScale = $scales[0];
    $responseText = "score:".$firstScale->getScore()."<br>\n";
}
$response = new Response($responseText, 201, array('Content-Type' => 'text/html'));
$response->send();



