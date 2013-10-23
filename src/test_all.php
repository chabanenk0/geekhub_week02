<?php
/*
require("AbstractTestQuestion.php");
require("OneCaseTestQuestion.php");
require("MultiCaseTestQuestion.php");
*/
include("autoload.php");

use Test\TestQuestion;
use Test\OneCaseTestQuestion;
use Test\MultiCaseTestQuestion;

//$a=new TestQuestion();
$a=new OneCaseTestQuestion();
$a->setQuestion("2*2=?");
$a->addAnswer("1");
$a->addAnswer("2");
$a->addAnswer("3");
$a->addAnswer("4");
echo $a->askQuestion();

$b=new MultiCaseTestQuestion();
$b->setQuestion("5*5=?");
$b->addAnswer("25");
$b->addAnswer("10");
$b->addAnswer("5");
$b->addAnswer("1");
echo $b->askQuestion();
