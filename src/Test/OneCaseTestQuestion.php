<?php

//require_once("AbstractTestQuestion.php");

namespace Test;

use Test\TestQuestion;

class OneCaseTestQuestion extends AbstractTestQuestion implements AskableInterface
{

    public function askQuestion()
    {
        $resulttext= "<p class=question>Question: ".$this->question."</p>";
        $qnum=$this->number;
        $num=0;
        foreach ($this->answers as $i) {
            $num=$num+1; // !!! Bad idea! It needs to add id to the Answer's class!!! The same for question number (fixed)
            $resulttext=$resulttext."<p><label><input type=radio id=$num name=ans>";
            $resulttext=$resulttext.$i->ask();
            $resulttext=$resulttext.'</label></p>';
        }
    }
}
