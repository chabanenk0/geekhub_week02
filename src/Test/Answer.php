<?php

namespace Test;

class Answer
{
    protected $answerText;

    public function __construct ($answt)
    {
        $answerText=$answt;
    }

    public function getAnswer ()
    {
        return $answerText;
    }

    public function setAnswer ($answt)
    {
        $this->answerText=$answt;
    }

    public function ask()
    {
        return  $this->answerText;
    }
}
