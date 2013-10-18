<?php
require("TestQuestion.php");
require("OneCaseTestQuestion.php");
require("MultiCaseTestQuestion.php");
//$a=new TestQuestion();
//$a=new OneCaseTestQuestion();
$a=new MultiCaseTestQuestion();
$a->setQuestion("2*2=?");
$a->addAnswer("1");
$a->addAnswer("2");
$a->addAnswer("3");
$a->addAnswer("4");
$a->askQuestion();
?>