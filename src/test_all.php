<?php
/*
require("AbstractTestQuestion.php");
require("OneCaseTestQuestion.php");
require("MultiCaseTestQuestion.php");
*/
include("autoload.php");

use Test\Answer;
use Test\AbstractTestQuestion;
use Test\OneCaseTestQuestion;
use Test\MultiCaseTestQuestion;

$a=new OneCaseTestQuestion();
$a->setQuestion("2*2=?");
$a->addAnswer(new Answer("1"));
$a->addAnswer(new Answer("2"));
$a->addAnswer(new Answer("3"));
$a->addAnswer(new Answer("4"));
echo $a->askQuestion();

$b=new MultiCaseTestQuestion();
$b->setQuestion("5*5=?");
$b->addAnswer("25");
$b->addAnswer(new Answer("10"));
$b->addAnswer(new Answer("5"));
$b->addAnswer(new Answer("1"));
echo $b->askQuestion();


//$c=new AbstractTestQuestion();