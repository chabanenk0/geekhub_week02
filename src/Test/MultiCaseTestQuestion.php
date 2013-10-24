<?php

namespace Test;

//require_once("AbstractTestQuestion.php");

use Test\TestQuestion;
use Test\AskableInterface;

class MultiCaseTestQuestion extends AbstractTestQuestion
{
    public function askQuestion()
    {
        $resulttext="<p class=question>Question: ".$this->question."</p>\n";
        $qnum=$this->number;
        $num=0;
        foreach ($this->answers as $i) {
            $num=$num+1; // !!! Bad idea! It needs to add id to the Answer's class!!! The same for question number (fixed)
            $resulttext=$resulttext."<p><label><input type=checkbox id=$num name=ans>";
            $resulttext=$resulttext.$i->ask();
            $resulttext=$resulttext."</label></p>\n";
        }
    return $resulttext;
    }
}
