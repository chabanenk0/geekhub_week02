<?php
//require_once("AskableInterface.php");
//require_once("CheckableInterface.php");
//require_once("Answer.php");

namespace Test;

use Test\Answer;

abstract class AbstractTestQuestion implements AskableInterface
{
    protected $number;
    protected $question;
    protected $answers; // should be an array of Answer's objects 

    public function __construct()
    {
        $this->answers=array();
        $this->number=0;
    }

    abstract public function askQuestion();

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($q)
    {
        $this->question=$q;
    }

    public function clearAnswers()
    {
        $this->answers=array();
    }

    public function addAnswer($answer) // for input as Answer class
    {
        if ($answer instanceof Answer) {
            array_push($this->answers, $answer);
        }
        elseif (is_string($answer)) {
            $ans=new Answer($answer);
            array_push($this->answers, $ans);
        }
        else {
            die ("Wrong type for method addAnswer");// it needs to add exceptions...
        }

    }
    public function addAnswerString(string $answer) // for input as string
    {
        $ans=new Answer("");
        $ans->setAnswer($answer);
        array_push($this->answers, $ans);
    }

}
