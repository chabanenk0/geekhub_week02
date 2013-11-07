<?php

//require_once("AbstractTestQuestion.php");

namespace Test;

use Test\TestQuestion;
use Test\AskableInterface;

class OneCaseTestQuestion extends AbstractTestQuestion implements AskableInterface, ScalableInterface
{
    public function __construct()
    {
        parent::__construct();
    }

    public function askQuestion()
    {
        $resulttext= "<p class=question>Question # ".$this->number.": ".$this->question."</p>\n";
        $qnum=$this->number;
        $num=0;
        foreach ($this->answers as $i) {
            $num=$num+1; // !!! Bad idea! It needs to add id to the Answer's class!!! The same for question number (fixed)
            $resulttext=$resulttext."<p><label><input type=radio id=$num name=ans$qnum value=".$i->getNumber().">";
            $resulttext=$resulttext.$i->ask();
            $resulttext=$resulttext."</label></p>\n";
        }
        return $resulttext;
    }

    public function addQuestionToForm($formBuilder)
    {
        $qnum=$this->number;
        $num=0;
        foreach ($this->answers as $i) {
            $num=$num+1; // !!! Bad idea! It needs to add id to the Answer's class!!! The same for question number (fixed)
            $formBuilder->add($i->ask(),"radio",array(
                "block_name"=>"ans$qnum",
                "value"=>$i->getNumber(),
                "label"=>$i->ask(),
            ));
        }

        return $formBuilder;

    }

    public function calculateScore($request)
    {
        $answer=$request->get("ans".$this->number);
        foreach ($this->answers as $currentAnswer) {
            if ($currentAnswer->getNumber() == $answer) {
                $currentAnswer->calcScores();
            }
        }
    }


}
