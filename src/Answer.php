<?php

class Answer
{
protected $answerText;

public function _construct ($answt)
 {$answerText=$answt;
 }

public function getAnswer ()
 {
   return $answerText;
 }

public function setAnswer ($answt)
 {$this->answerText=$answt;
 }

public function ask()
 {
   echo $this->answerText;
 }


}
?>