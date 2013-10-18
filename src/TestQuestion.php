<?php
//require_once("Askable.php");
//require_once("Checkable.php");

require_once("Answer.php");

class TestQuestion //implements Askable
{
 protected $number;
 protected $question;
 protected $answers; // should be an array of Answer's objects 

 public function __construct()
 {
  $this->answers=array();
  $this->number=0;
 }

 public function askQuestion()
 {
   echo "<p class=question>Question: ",$this->question."</p>";
   foreach ($this->answers as $i)
    {
     echo "<p class ='answer'>";
     $i->ask();
     echo '</p>';
    }
 }


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

 public function addAnswer($answer) // input argument should be text answer
 { $ans=new Answer();
   $ans->setAnswer($answer);
   array_push($this->answers, $ans);
 }

}


?>