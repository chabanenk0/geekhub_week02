<?php

namespace tests;
//require "../Test/Answer.php";
use Test\Answer;

class AnswerTest extends \PHPUnit_Framework_TestCase
{
    public function testSetNumber()
    {
$answer=new Answer(0);
$answer->setNumber(3);
$this->assertEquals(3,$answer->getNumber());
$answer->setNumber(5);
$this->assertEquals(5,$answer->getNumber());


    }
}