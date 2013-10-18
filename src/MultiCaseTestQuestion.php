<?php

require_once("TestQuestion.php");

class MultiCaseTestQuestion extends TestQuestion {

 public function askQuestion()
 {
   echo "<p class=question>Question: ",$this->question."</p>";
   $qnum=$this->number;
   $num=0;
   foreach ($this->answers as $i)
    {$num=$num+1; // !!! Bad idea! It needs to add id to the Answer's class!!! The same for question number (fixed)
     echo "<p><label><input type=checkbox id=$num name=ans$>";
     $i->ask();
     echo '</label></p>';
    }
 }

}
?>