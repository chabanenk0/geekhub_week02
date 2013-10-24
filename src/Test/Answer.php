<?php

namespace Test;

class Answer
{
    protected $answerText;

    public function __construct ($newAnswerText)
    {
        $this->answerText=$newAnswerText;
    }

    public function getAnswer ()
    {
        return $this->answerText;
    }

    public function setAnswer ($answerText)
    {
        $this->answerText=$answerText;
    }

    public function ask()
    {
        return  $this->answerText;
    }
}
